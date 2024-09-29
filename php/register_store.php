<?php

include 'db_connect.php'; // Ensure this file correctly establishes the $conn variable

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (username, email, password, first_name, last_name, phone) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $username, $email, $password, $first_name, $last_name, $phone);

// Set parameters and execute
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];

if ($stmt->execute()) {
    $message = "Application submitted successfully!";
        header("Location: ../registration.php");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
