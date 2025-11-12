<?php

session_start();
include '../includes/db_contactform.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST["name"];
   $email = $_POST["email"];
   $message = $_POST["message"];

   $sql = "INSERT INTO contactform_data (name, email, message) VALUES ('$name', '$email', '$message')";
   $conn->query($sql);

   header("Location: ../index.php");
   exit();
}
?>