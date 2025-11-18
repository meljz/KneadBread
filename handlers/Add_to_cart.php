<?php

session_start();
include '../includes/db_main.php';

if (isset ($_POST["Add_to_cart"])){
    if (isset($_SESSION["user_name"])){
        $Items = [
            'Product_id' => $_POST["Product_id"],
            'Product_name' => $_POST["Product_name"],
            'Product_price' => $_POST["Product_price"],
        ];
        
        if (!isset($_SESSION['Cart'])){
            $_SESSION['Cart'] = [];
        }

        $_SESSION['Cart'][] =  $Items;
        
    }
    else{
        $_SESSION['cartnouser_error'] = "Login first to add to cart! ";
        header("Location: ../Check_out.php");
    }
}
    header("Location: ../Check_out.php");
    exit();

?>