<?php 
    session_start();
    
    if (!isset($_SESSION['user_name'])) {
        header('Location: Login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Shop</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Playfair:opsz,wdth,wght@5..1200,110.4,300&display=swap" rel="stylesheet">
     

    </head>
    <body>
        
    <?php   //CHECKOUT MESSAGE       
        if (isset($_SESSION['checkout_success'])) { // checkout success
            echo '<div id="successMsg" class="toast-success"> ' . $_SESSION['checkout_success'] . '
            </div>

            <script>
                setTimeout(function() {
                    document.getElementById("successMsg").style.display = "none";
                }, 5000);
            </script>';
            unset($_SESSION['checkout_success']);
        }

        if (isset($_SESSION['checkout_error'])) {       // checkout error
            echo '<div id="successMsg" class="toast-success"> ' . $_SESSION['checkout_error'] . '
            </div>

            <script>
                setTimeout(function() {
                    document.getElementById("successMsg").style.display = "none";
                }, 5000);
            </script>';
            unset($_SESSION['checkout_error']);
        }
    ?>
         <!-- Navigation -->
    <section class = "Check_out">
        <div class = "nav_container">
            <div class = "burger_menu">
                <div class = "burger_line"></div>
                <div class = "burger_line"></div>
                <div class = "burger_line"></div>
            </div>

                <ul class = "nav_links">
                    <li><a href="index.php#Hero">Home</a></li>
                    <li><a href="shop.php">Back to Shop</a></li>
                    <!--<li><a href="index.php#Recipe">Recipes</a></li>
                    <li><a href="index.php#Story"> About Us</a></li>
                    <li><a href="index.php#Contact"> Contact</a></li>
                    <li><a href="Login.php"> login</a></li>
                    <li><a href="Register.php"> Register</a></li>-->


                    <!--Wrap logout like jinja in Django <% %>-->
                    <?php if(isset(($_SESSION['user_name']))): ?>
                        <div class = "logout">
                            <li><a href="handlers/Logout.php"> Logout</a></li>
                        </div>
                    <?php endif ?>

                    <!--Who is current user-->
                    <?php if (isset($_SESSION['user_name'])): ?>
                        <div class = "status">
                            <p>| <?= htmlspecialchars($_SESSION['user_name']); ?></p>
                        </div>
                    <?php endif; ?>
                </ul>
        </div>
   </section>



    <div class = "Checkout_container">
        <div class = "Checkout_within">
            <div class = "Checkout_left">
                <div class = "Checkout_title">
                    <h1>Shopping Cart: </h1>
                </div>
                <div class = "Checkout_left_column">  
                    <div class = "Checkout_leftcontents">
                        <?php if (!empty ($_SESSION['Cart'])):  ?> 
                            <h1>Items: </h1>  
                            <ul>
                                <?php foreach ($_SESSION['Cart'] as $Items): ?>
                                    <li><?= htmlspecialchars($Items['Product_name']); ?> - <?=  htmlspecialchars($Items['Product_price']); ?> </li>
                                <?php endforeach; ?>

                            </ul>     
                        <?php else: ?>
                            <p>Cart is empty</p>            
                        <?php endif; ?> 
                        
                        <!--FINAL CHECKOUT-->
                        <form action = "Handlers/Checkout_process.php" method ="POST">
                            <button type="submit" name="Final_checkout" class = "Btn_checkout">Checkout</button> 
                        </form>
                    </div>
                </div>
            </div>

            <div class = "Checkout_right">
                <div class = "Checkout_title">
                    <h1>Receipt: </h1>
                </div>
                <div class = "Checkout_right_column">
                    <div class = "Checkout_rightcontents">
                        <h2>Your Recent Order:</h2>
                        <?php if(isset( $_SESSION['Receipts'])): ?>
                            <p><strong>Item: </strong><?= htmlspecialchars ($_SESSION['Receipts']['products'])?></p>
                            <p><strong>Total: </strong><?= htmlspecialchars ($_SESSION['Receipts']['total_price'])?></p>
                        <?php else: ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    
         <script src="script.js"></script>
    </body>


</html>