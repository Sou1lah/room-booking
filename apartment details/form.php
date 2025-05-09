<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Check if the 'id' parameter exists in the URL
if (!isset($_GET['id'])) {
    die('Apartment ID is required.');
}

$id = intval($_GET['id']); // Sanitize the input to prevent SQL injection

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'login_system');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch the apartment details based on the ID
$sql = "SELECT * FROM properties WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

// Check if the apartment exists
if ($result->num_rows == 0) {
    die('Apartment not found.');
}

// Fetch apartment details
$apartment = $result->fetch_assoc();

// Close the statement and connection
$stmt->close();
$conn->close();
?>