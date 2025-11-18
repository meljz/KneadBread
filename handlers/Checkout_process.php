<?php 

session_start();
include '../includes/db_main.php';


if (isset($_POST['Final_checkout'])){

        //check first if the cart is empty, if so. Will loop back and trigger messsage to put items first to checkout
        if (empty($_SESSION["Cart"])){
            $_SESSION  ['checkout_error'] = "Put items first to checkout!";
            header ("Location: ../Check_out.php");
            exit();
            }

        //Code below will process once cart has item
        //gets  via SESSION
        $user_name = $_SESSION['user_name'];


        $Cart = $_SESSION['Cart']; //stores the $_SESSION['Cart'] in $cart 
        $products = ""; // Initializes empty variable string as container for the associative keypair value of "$item['Product_name']"
        $total_price = 0;

        foreach ($Cart as $item) {
            $products .= $item["Product_name"] . "-" . $item["Product_price"] . "₱" . " , "; //both keypair $item["Product_price"] and $item["Product_price"] stored in $products
            $total_price += $item['Product_price']; //calculates total and adds all $item["Product_price"] then puts into $total_price
        }

        $sql = "INSERT INTO orders (user_name, products, total_price) VALUES ('$user_name', '$products', '$total_price')";

        if ($conn->query($sql)) {
            $_SESSION ['checkout_success'] = "order saved and accepted, your receipt is below";
            $_SESSION['Cart'] = []; //clears cart once order is accepted

            //will show the recent added in db as a receipt once redirected at checkout.php (a assosiative array)
            $_SESSION['Receipts'] = [
                'user_name' => $user_name,
                'products' => $products,
                'total_price' => $total_price,
            ];  

            header ("Location: ../Check_out.php");
        }else {
            if (empty($_SESSION["Cart"])){
            $_SESSION  ['checkout_error'] = "Checkout failed";
            header ("Location: ../Check_out.php");
            exit();
            }
        exit();
    }
}

// redirect anyone tries to enter
header("Location: ../Check_out.php");
exit();
?>