<?php 
session_start();
include '../includes/db_main.php';



if (isset($_POST["login"])) {
    //$name = $_POST ["name"];
    $password = $_POST ["password"];
    $email = $_POST ["email"];


    $check = $conn->query("SELECT * FROM users_data WHERE email = '$email'");
    if ($check->num_rows > 0) {
        $user = $check->fetch_assoc();
        if (password_verify($password, $user["password"])){
            $_SESSION ["user_name"] = $user["name"];
            $_SESSION ["login_success"] = "Welcome back, " .$user["name"];
            header ("Location: ../index.php");
            exit();
        }else{
            $_SESSION ["login_error"] = "Incorrect crendential. Please register first";
            header ("Location: ../index.php");
            exit();
        }
    }
}



?>