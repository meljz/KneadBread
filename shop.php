<?php 
    session_start();
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
         <!-- Navigation -->
    <section class = "Shop">
    <div class = "nav_container">
        <div class = "burger_menu">
            <div class = "burger_line"></div>
            <div class = "burger_line"></div>
            <div class = "burger_line"></div>
        </div>

            <ul class = "nav_links">
                <li><a href="index.php#Hero">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="Check_out.php">My Cart</a></li>
                <?php if (!isset($_SESSION["user_name"])): ?>
                    <li><a href="Register.php"> Register</a></li>
                    <li><a href="Login.php"> login</a></li>
                <?php endif; ?>
                
                <!--<li><a href="index.php#Recipe">Recipes</a></li>
                <li><a href="index.php#Story"> About Us</a></li>
                <li><a href="index.php#Contact"> Contact</a></li>-->


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
            <div class = "Shop_container">
                <h1>Welcome to Shop</h1>
                <div class = "Shop_within">
                
                    <div class = "Shop_card">
                        <img src = "image/about_bread.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Card 1 </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <input type = "hidden" name="Product_id" value ="1">
                                <input type = "hidden" name="Product_name" value ="Bread1">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart">Add to Cart</button>    
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/about_bread.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Card 2 </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <input type = "hidden" name="Product_id" value ="2">
                                <input type = "hidden" name="Product_name" value ="Bread2">
                                <input type = "hidden" name="Product_price" value ="5">
                                <button type = "submit" name = "Add_to_cart">Add to Cart</button>    
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/about_bread.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Card 3 </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <input type = "hidden" name="Product_id" value ="3">
                                <input type = "hidden" name="Product_name" value ="Bread3">
                                <input type = "hidden" name="Product_price" value ="15">
                                <button type = "submit" name = "Add_to_cart">Add to Cart</button>    
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/about_bread.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Card 1 </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <input type = "hidden" name="Product_id" value ="1">
                                <input type = "hidden" name="Product_name" value ="Bread1">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart">Add to Cart</button>    
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/about_bread.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Card 1 </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <input type = "hidden" name="Product_id" value ="1">
                                <input type = "hidden" name="Product_name" value ="Bread1">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart">Add to Cart</button>    
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/about_bread.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Card 1 </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <input type = "hidden" name="Product_id" value ="1">
                                <input type = "hidden" name="Product_name" value ="Bread1">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart">Add to Cart</button>    
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/about_bread.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Card 1 </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <input type = "hidden" name="Product_id" value ="1">
                                <input type = "hidden" name="Product_name" value ="Bread1">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart">Add to Cart</button>    
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/about_bread.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Card 1 </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <input type = "hidden" name="Product_id" value ="1">
                                <input type = "hidden" name="Product_name" value ="Bread1">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart">Add to Cart</button>    
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/about_bread.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">1
                            <div class = "Shop_card_text">
                                <h3>Card 1 </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <input type = "hidden" name="Product_id" value ="1">
                                <input type = "hidden" name="Product_name" value ="Bread1">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart">Add to Cart</button>    
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/about_bread.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Card 1 </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <input type = "hidden" name="Product_id" value ="1">
                                <input type = "hidden" name="Product_name" value ="Bread1">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart">Add to Cart</button>    
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/about_bread.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Card 1 </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <input type = "hidden" name="Product_id" value ="1">
                                <input type = "hidden" name="Product_name" value ="Bread1">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart">Add to Cart</button>    
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/about_bread.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Card 1 </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <input type = "hidden" name="Product_id" value ="1">
                                <input type = "hidden" name="Product_name" value ="Bread1">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart">Add to Cart</button>    
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/about_bread.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Card 1 </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <input type = "hidden" name="Product_id" value ="1">
                                <input type = "hidden" name="Product_name" value ="Bread1">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart">Add to Cart</button>    
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/about_bread.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Card 1 </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <input type = "hidden" name="Product_id" value ="1">
                                <input type = "hidden" name="Product_name" value ="Bread1">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart">Add to Cart</button>    
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/about_bread.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Card 1 </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <input type = "hidden" name="Product_id" value ="1">
                                <input type = "hidden" name="Product_name" value ="Bread1">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart">Add to Cart</button>    
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/about_bread.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Card 1 </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                <input type = "hidden" name="Product_id" value ="1">
                                <input type = "hidden" name="Product_name" value ="Bread1">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart">Add to Cart</button>    
                            </div>
                        </form> 
                    </div>

                </div>
            </div>
        </section>


        


         <script src="script.js"></script>
    </body>

    </body> 
</html>