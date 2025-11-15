<?php

session_start();
include '../includes/db_main.php';

if (isset ($_POST["Add_to_cart"])){
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

    header("Location: ../Check_out.php");
    exit();

?>