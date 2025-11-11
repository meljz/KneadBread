<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST["name"];
   $email = $_POST["email"];
   $message = $_POST["message"];

   header ("Location: index.php?contactprocess_success=1");
   exit();
}
?>