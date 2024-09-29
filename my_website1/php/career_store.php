<?php

include 'db_connect.php'; // Ensure this file correctly establishes the $conn variable

// Initialize a message variable for feedback
$message = "";

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $cover_letter = $_POST['cover_letter'];
    $availability = $_POST['availability'];

    // Prepare an SQL statement to insert data
    $stmt = $conn->prepare("INSERT INTO job_applications (full_name, email, phone, position, cover_letter, availability) VALUES (?, ?, ?, ?, ?, ?)");
    
    // Bind parameters
    $stmt->bind_param("ssssss", $full_name, $email, $phone, $position, $cover_letter, $availability);

    // Execute the statement
    if ($stmt->execute()) {
        $message = "Application submitted successfully!";
        header("Location: ../career.php");
    } else {
        $message = "Error: " . $stmt->error;
    }
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
