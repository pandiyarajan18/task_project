<?php
session_start(); // Start the session
include 'db_connect.php'; // Database connection

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Ensure this file correctly establishes the $conn variable
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];


// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (username, email, password, first_name, last_name, phone) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $username, $email, $password, $first_name, $last_name, $phone);

// Set parameters and execute
if ($stmt->execute()) {
    $_SESSION['message'] = "Data Stored successfully!";
} else {
    $_SESSION['message'] = "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

// Redirect to career page
header("Location: ../career.php");
exit();
}
?>
