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

// Insert property details into the database
$sql = "INSERT INTO properties (property_type, location, price, bedrooms, bathrooms, amenities, description) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("SQL error: " . $conn->error);
}

$stmt->bind_param("ssdiiss", $propertyType, $location, $price, $bedrooms, $bathrooms, $amenities, $description);

if ($stmt->execute()) {
    $propertyId = $stmt->insert_id; // Get the ID of the newly inserted property

    // Handle single image upload
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
            // Insert image path into the database
            $relativeFilePath = 'uploads/' . $fileName; // Relative path for database
            $imageSql = "INSERT INTO property_images (property_id, image_path) VALUES (?, ?)";
            $imageStmt = $conn->prepare($imageSql);
            if ($imageStmt) {
                $imageStmt->bind_param("is", $propertyId, $relativeFilePath);
                $imageStmt->execute();
                $imageStmt->close();
            } else {
                echo "❌ Error preparing image SQL: " . $conn->error;
            }
        } else {
            die("❌ Failed to upload image: " . htmlspecialchars($_FILES['image']['name']));
        }
    } else {
        die("❌ Error with file upload: " . $_FILES['image']['error']);
    }

    echo "✅ Apartment added successfully!";
} else {
    echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>