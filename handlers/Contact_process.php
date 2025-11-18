<?php

session_start();
include '../includes/db_contactform.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   //$name = $_POST["name"];
   $email = $_POST["email"];  
   $message = $_POST["message"];

   $sql = "INSERT INTO contactform_data (email, message) VALUES ('$email', '$message')";
   if ($conn->query($sql)){
      $_SESSION["Contact_form"] = "Thank you, rest assured every thought counts!";
      header("Location: ../index.php");
      exit();
      
   };

   header("Location: ../index.php");
   exit();
}
?>