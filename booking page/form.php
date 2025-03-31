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
$name = $conn->real_escape_string(trim($_POST['name'] ?? ''));
$familyName = $conn->real_escape_string(trim($_POST['family_name'] ?? ''));
$email = $conn->real_escape_string(trim($_POST['email'] ?? ''));
$phone = $conn->real_escape_string(trim($_POST['phone'] ?? ''));
$emergencyContact = $conn->real_escape_string(trim($_POST['emergency_contact'] ?? ''));
$cardNumber = $conn->real_escape_string(trim($_POST['card_number'] ?? ''));
$cardExpiry = $conn->real_escape_string(trim($_POST['card_expiry'] ?? ''));
$cardCode = $conn->real_escape_string(trim($_POST['card_code'] ?? ''));

// Prepare and execute SQL
$sql = "INSERT INTO bookings (name, family_name, email, phone, emergency_contact, card_number, card_expiry, card_code) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("SQL error: " . $conn->error);
}

$stmt->bind_param("ssssssss", $name, $familyName, $email, $phone, $emergencyContact, $cardNumber, $cardExpiry, $cardCode);

if ($stmt->execute()) {
    echo "✅ Booking successful! Welcome, " . htmlspecialchars($name);
} else {
    echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
