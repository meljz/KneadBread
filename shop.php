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
                        <img src = "image/pandesal.png" alt = "pandesal">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Pandesal </h3>
                                <p>A classic choice for every Filipino. A warm, soft, and freshly baked—this classic Filipino bread roll is light, fluffy, and perfect any time of the day. One bite and you’ll want more. </p>
                                <input type = "hidden" name="Product_id" value ="1">
                                <input type = "hidden" name="Product_name" value ="Pandesal">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart" class = "Add_to_class">Add to Cart</button>    
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/pandecoco.png" alt = "pandecoco">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Pande Coco</h3>
                                <p>A sweet favorite packed with soft coconut filling. Freshly baked with a light crust—perfect for breakfast or merienda. One bite and the sweetness hits just right.</p>
                                <input type = "hidden" name="Product_id" value ="2">
                                <input type = "hidden" name="Product_name" value ="Pande Coco">
                                <input type = "hidden" name="Product_price" value ="5">
                                <button type = "submit" name = "Add_to_cart" class = "Add_to_class">Add to Cart</button>     
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/ube.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Ube Bread </h3>
                                <p>Soft, vibrant, and ube-filled. This purple delight is fluffy, creamy, and full of classic Filipino flavor. A treat you’ll keep coming back for. </p>
                                <input type = "hidden" name="Product_id" value ="3">
                                <input type = "hidden" name="Product_name" value ="Ube Bread">
                                <input type = "hidden" name="Product_price" value ="15">
                                <button type = "submit" name = "Add_to_cart" class = "Add_to_class">Add to Cart</button>     
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/ensaymada.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Ensaymada </h3>
                                <p>Soft, buttery, and topped with cheese and sugar—this fluffy ensaymada melts in your mouth. A timeless bakery classic you’ll always crave.</p>
                                <input type = "hidden" name="Product_id" value ="4">
                                <input type = "hidden" name="Product_name" value ="Ensaymada">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart" class = "Add_to_class">Add to Cart</button>     
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/hopia.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Hopia</h3>
                                <p>Flaky on the outside, soft and flavorful inside. This classic hopia is filled with sweet goodness that’s perfect for snacking anytime.</p>
                                <input type = "hidden" name="Product_id" value ="5">
                                <input type = "hidden" name="Product_name" value ="Hopia">
                                <input type = "hidden" name="Product_price" value ="5">
                                <button type = "submit" name = "Add_to_cart" class = "Add_to_class">Add to Cart</button>     
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                    <img src = "image/spanish.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Spanish Bread</h3>
                                <p>A soft roll with a sweet, buttery filling. Lightly toasted and irresistibly fluffy—every bite is warm and comforting. </p>
                                <input type = "hidden" name="Product_id" value ="6">
                                <input type = "hidden" name="Product_name" value ="Spanish Bread">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart" class = "Add_to_class">Add to Cart</button>     
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/putok.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Putok</h3>
                                <p>Crispy on the outside, soft on the inside. This classic “star bread” has a rich, slightly sweet taste that pairs perfectly with coffee. </p>
                                <input type = "hidden" name="Product_id" value ="7">
                                <input type = "hidden" name="Product_name" value ="Putok">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart" class = "Add_to_class">Add to Cart</button>     
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/kabayan.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Kabayan </h3>
                                <p>Golden, fluffy, and lightly sweet—these cupcake-like treats are simple, soft, and perfect for everyday merienda. </p>
                                <input type = "hidden" name="Product_id" value ="8">
                                <input type = "hidden" name="Product_name" value ="Kabayan">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart" class = "Add_to_class">Add to Cart</button>    
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/bicho-bicho.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Bicho-Bicho </h3>
                                <p>Soft, chewy, and coated in sugar—this classic Filipino twist bread is delightful with every bite. A sweet favorite you won’t want to miss. </p>
                                <input type = "hidden" name="Product_id" value ="9">
                                <input type = "hidden" name="Product_name" value ="Bicho-Bicho ">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart" class = "Add_to_class">Add to Cart</button>     
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/egg pie.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Egg Pie</h3>
                                <p>Creamy, smooth, and baked to a golden finish. This egg pie has a sweet custard flavor that makes every slice comforting and satisfying. </p>
                                <input type = "hidden" name="Product_id" value ="10">
                                <input type = "hidden" name="Product_name" value ="Egg Pie">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart" class = "Add_to_class">Add to Cart</button>     
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/binangkal.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Binangkal</h3>
                                <p>Crunchy on the outside, soft on the inside—these sesame-coated balls are perfect bite-sized treats for any time of the day. </p>
                                <input type = "hidden" name="Product_id" value ="11">
                                <input type = "hidden" name="Product_name" value ="Binangkal">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart" class = "Add_to_class">Add to Cart</button>     
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/choco.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Choco Crinkles </h3>
                                <p>Soft, fudgy, and coated in powdered sugar. These chocolatey crinkles are rich, chewy, and impossible to resist. </p>
                                <input type = "hidden" name="Product_id" value ="12">
                                <input type = "hidden" name="Product_name" value ="Choco Crinkles">
                                <input type = "hidden" name="Product_price" value ="10">
                               <button type = "submit" name = "Add_to_cart" class = "Add_to_class">Add to Cart</button>   
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/kalihim.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Kalihim Bread</h3>
                                <p>Soft bread filled with sweet, vibrant red pudding. A nostalgic Filipino bakery classic that’s both colorful and delicious. </p>
                                <input type = "hidden" name="Product_id" value ="13">
                                <input type = "hidden" name="Product_name" value ="Kalihim Bread">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart" class = "Add_to_class">Add to Cart</button>     
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/lakas.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Lakas Bread </h3>
                                <p>Soft, lightly sweet, and perfect for pairing with spreads. A simple yet satisfying bread that’s great for breakfast or snacks. </p>
                                <input type = "hidden" name="Product_id" value ="14">
                                <input type = "hidden" name="Product_name" value ="Lakas Bread">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart" class = "Add_to_class">Add to Cart</button>     
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/mamon.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Mamon</h3>
                                <p>Light, fluffy, and buttery—this melt-in-your-mouth sponge cake is a sweet treat you’ll enjoy to the last bite. </p>
                                <input type = "hidden" name="Product_id" value ="15">
                                <input type = "hidden" name="Product_name" value ="Mamon">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart" class = "Add_to_class">Add to Cart</button>     
                            </div>
                        </form> 
                    </div>

                    <div class = "Shop_card">
                        <img src = "image/pineapplepie.png" alt = "card image">
                        <form action = "handlers/Add_to_cart.php" method="POST">
                            <div class = "Shop_card_text">
                                <h3>Pineapple Pie</h3>
                                <p>Crispy crust filled with sweet, tangy pineapple. Fresh, tropical, and delicious—every slice tastes like sunshine. </p>
                                <input type = "hidden" name="Product_id" value ="1">
                                <input type = "hidden" name="Product_name" value ="Pineapple Pie">
                                <input type = "hidden" name="Product_price" value ="10">
                                <button type = "submit" name = "Add_to_cart" class = "Add_to_class">Add to Cart</button>     
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