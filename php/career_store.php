<?php
session_start(); // Start the session
include 'db_connect.php'; // Database connection

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $cover_letter = $_POST['cover_letter'];
    $availability = $_POST['availability'];

    // Prepare an SQL statement
    $stmt = $conn->prepare("INSERT INTO job_applications (full_name, email, phone, position, cover_letter, availability) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $full_name, $email, $phone, $position, $cover_letter, $availability);

    // Execute the statement and set session message
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
