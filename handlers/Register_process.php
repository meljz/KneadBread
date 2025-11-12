<?php
session_start();
include '../includes/db_main.php';

// Check if the form was submitted
if (isset($_POST["register"])) {
    
    // Get the data from the form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if this email is already used
    $check = $conn->query("SELECT * FROM users_data WHERE email = '$email'");
    
    if ($check->num_rows > 0) {
        // Email already exists
        $_SESSION['error'] = "This email is already registered!";
        header("Location: ../index.php");
        exit();
    }

    // Make the password secure
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Save the new user to database
    $sql = "INSERT INTO users_data (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
    
    if ($conn->query($sql)) {
        // Success!
        $_SESSION['registration_success'] = "Account created! You can now login.";
        header("Location: ../index.php");
    } else {
        // Something went wrong
        $_SESSION['registration_error'] = "Registration failed. Please try again.";
        header("Location: ../index.php");
    }
    
    exit();
}

// If someone tries to access this page directly, send them back
header("Location: ../index.php");
exit();
?>