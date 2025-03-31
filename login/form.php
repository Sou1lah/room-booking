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
$email = $conn->real_escape_string(trim($_POST['email']));
$password = trim($_POST['password']);
// Check if user exists in the users table
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("SQL error: " . $conn->error);
}
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $_SESSION['user'] = $fname;
    header("Location: /opt/lampp/htdocs/room-booking-website/home page/index.php");
} else {
    echo "Invalid login. User not found.";
}
// Close connections
$stmt->close();
$conn->close();
?>
