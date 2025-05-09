<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Connect to database
$conn = new mysqli('localhost', 'root', '', 'login_system');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize input
$propertyType = $conn->real_escape_string(trim($_POST['property_type'] ?? ''));
$location = $conn->real_escape_string(trim($_POST['location'] ?? ''));
$price = $conn->real_escape_string(trim($_POST['price'] ?? ''));
$bedrooms = $conn->real_escape_string(trim($_POST['bedrooms'] ?? ''));
$bathrooms = $conn->real_escape_string(trim($_POST['bathrooms'] ?? ''));
$amenities = $conn->real_escape_string(trim($_POST['amenities'] ?? ''));
$description = $conn->real_escape_string(trim($_POST['description'] ?? ''));

// Handle single image upload
$imagePath = null;
$uploadDir = __DIR__ . '/uploads/'; // Use absolute path based on the current directory
if (!is_dir($uploadDir)) {
    if (!mkdir($uploadDir, 0755, true)) {
        die("❌ Failed to create uploads directory. Check permissions.");
    }
}

if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $fileName = uniqid() . '_' . basename($_FILES['image']['name']); // Generate unique file name
    $filePath = $uploadDir . $fileName;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $filePath)) {
        $imagePath = 'uploads/' . $fileName; // Relative path for database
    } else {
        die("❌ Failed to upload image: " . htmlspecialchars($_FILES['image']['name']));
    }
} else {
    die("❌ Error with file upload: " . $_FILES['image']['error']);
}

// Insert property details into the database
$sql = "INSERT INTO properties (property_type, location, price, bedrooms, bathrooms, amenities, description, image) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("SQL error: " . $conn->error);
}

$stmt->bind_param("ssdiisss", $propertyType, $location, $price, $bedrooms, $bathrooms, $amenities, $description, $imagePath);

if ($stmt->execute()) {
    echo "✅ Apartment added successfully!";
} else {
    echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>