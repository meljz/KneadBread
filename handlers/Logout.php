<?php 
    session_start();

     
    $_SESSION['logout_msg'] = "You are logout";


    //session_unset();
    //session_destroy();

    header ("Location: ../index.php");
    exit();
?>