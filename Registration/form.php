<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);


// Database connection
$conn = new mysqli('localhost', 'root', '', 'login_system');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Sanitize inputs
$userType = $conn->real_escape_string(trim($_POST['user-type']));
$name = $conn->real_escape_string(trim($_POST['name']));
$familyName = $conn->real_escape_string(trim($_POST['family-name']));
$phone = $conn->real_escape_string(trim($_POST['phone']));
$email = $conn->real_escape_string(trim($_POST['email']));
$password = password_hash(trim($_POST['password']), PASSWORD_BCRYPT);
$address = $conn->real_escape_string(trim($_POST['address']));
// Handle file upload
if (isset($_FILES['profile-photo']) && $_FILES['profile-photo']['error'] === UPLOAD_ERR_OK) {
    $photoTmpPath = $_FILES['profile-photo']['tmp_name'];
    $photoName = basename($_FILES['profile-photo']['name']);
    $photoUploadPath = 'uploads/' . $photoName;
    if (!move_uploaded_file($photoTmpPath, $photoUploadPath)) {
        die("Failed to upload profile photo.");
    }
} else {
    die("Profile photo is required.");
}
// Insert user data into the database
$sql = "INSERT INTO users (user_type, name, family_name, phone, email, password, address, profile_photo) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("SQL error: " . $conn->error);
}
$stmt->bind_param("ssssssss", $userType, $name, $familyName, $phone, $email, $password, $address, $photoUploadPath);
if ($stmt->execute()) {
    echo "Subscription successful! Welcome, " . htmlspecialchars($name);
} else {
    echo "Error: " . $stmt->error;
}
// Close connections
$stmt->close();
$conn->close();
?>
