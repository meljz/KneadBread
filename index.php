<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Long-tail Keywords: Filipino bakery online, traditional Pinoy bread delivery, panaderia breads Philippines, classic Filipino pastries, pandesal online shop, authentic Filipino baked goods, local bakery Philippines -->
        <meta name="description" content="KneadBread - Your online Filipino panaderia offering authentic Pinoy breads and pastries. Shop fresh pandesal, hopia, pan de coco, and classic Filipino baked goods delivered to your door."/>

        <title>KneadBread</title>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Playfair:opsz,wdth,wght@5..1200,110.4,300&display=swap" rel="stylesheet">
                    

    </head>
    <body>    
        <?php
        /* -------------------messages run after each session start----------------------------------------- */
        // registration success
        if (isset($_SESSION['registration_success'])) {
            echo '<div id="successMsg" class="toast-success"> ' . $_SESSION['registration_success'] . '
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById("successMsg").style.display = "none";
                }, 5000);
            </script>';
            unset($_SESSION['registration_success']);
        }

        //  registration not successful
        if (isset($_SESSION['registration_error'])) {
            echo '
            <div id="errorMsg" class="toast-error">' . $_SESSION['registration_error'] . '
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById("errorMsg").style.display = "none";
                }, 5000);
            </script>';
            unset($_SESSION['error']);
        }

        //  login successful
        if (isset($_SESSION['login_success'])) {
            echo '<div id="successMsg" class="toast-success"> ' . $_SESSION['login_success'] . '
            </div>

            <script>
                setTimeout(function() {
                    document.getElementById("successMsg").style.display = "none";
                }, 5000);
            </script>';
            unset($_SESSION['login_success']);
        }

        //  login error
        if (isset($_SESSION['login_error'])) {
            echo '<div id="successMsg" class="toast-error"> ' . $_SESSION['login_error'] . '
            </div>

            <script>
                setTimeout(function() {
                    document.getElementById("successMsg").style.display = "none";
                }, 5000);
            </script>';
            unset($_SESSION['login_error']);
        }

        //logout msg
        if (isset($_SESSION['logout_msg'])) {
            echo '<div id="successMsg" class="toast-error"> ' . $_SESSION['logout_msg'] . '
            </div>

            <script>
                setTimeout(function() {
                    document.getElementById("successMsg").style.display = "none";
                }, 5000);
            </script>';
            unset($_SESSION['logout_msg']);
            

            session_unset();
            session_destroy();

        }

        //Contact form msg
        if (isset($_SESSION['Contact_form'])) {
            echo '<div id="successMsg" class="toast-success"> ' . $_SESSION['Contact_form'] . '
            </div>

            <script>
                setTimeout(function() {
                    document.getElementById("successMsg").style.display = "none";
                }, 5000);
            </script>';
            unset($_SESSION['Contact_form']);
        }
         /* -------------------messages run after each session end----------------------------------------- */
        ?>
         
    <!-- -------------Navigation ------------------------>
    <nav class = "nav_container">
        <div class = "burger_menu">
            <div class = "burger_line"></div>
            <div class = "burger_line"></div>
            <div class = "burger_line"></div>
        </div>

            <ul class = "nav_links">
                <li><a href="#Hero" title="Go to homepage">Home</a></li>
                <li><a href="#Products" title="Browse our bread collection">Shop</a></li>
                <li><a href="#Recipe" title="View Filipino bread recipes">Recipes</a></li>
                <li><a href="#Story" title="Learn about KneadBread"> About Us</a></li>
                <li><a href="#Contact" title="Contact KneadBread"> Contact</a></li>
                <?php if (!isset(($_SESSION['user_name']))): ?>
                    <li><a href="Login.php" title="Login to your account"> login</a></li>
                    <li><a href="Register.php" title="Create a new account"> Register</a></li>
                <?php endif ?>

                <!--Wrap logout like jinja in Django <% %>-->
                <?php if(isset(($_SESSION['user_name']))): ?>
                    <div class = "logout">
                        <li><a href="handlers/Logout.php" title="Logout from your account"> Logout</a></li>
                    </div>
                <?php endif ?>

                <!--Who is current user-->
                <?php if (isset($_SESSION['user_name'])): ?>
                    <div class = "status">
                        <p>| <?= htmlspecialchars($_SESSION['user_name']); ?></p>
                    </div>
                <?php endif; ?>
            </ul>
    </nav>

    <!-- Hero Section -->
     <section id = "Hero">
        <div class = "Hero_wrapper">
            <img src="image/hero_bread.jpeg" class="hero_bread" alt="Freshly baked Filipino breads from traditional panaderia">
        <div class = "Hero_box">
            <div class = "Hero_text">
                <h1>Do you Kneadbread?</h1>
                <p>Hi there! Thank you for visiting this website, this website is entirely all about local Filipino bakeries in the Philippines often called <i>"Panaderia"</i> with variety of breads for different tastebuds. Tara! come get to know more about local bakeries and shop! Read more about 
                
                <a href="#Story" class ="hero_button" title="Read the KneadBread story">Our Story</a></p>
            </div>
            <div class = "Hero_imagebox">
                <img src="image/bakery.jpg" class="hero_image1" alt="Traditional Filipino bakery interior with fresh bread display">
            </div>
        </div>

        </div>
     </section>

         <!-- Products -->
    <section id = "Products">
        <div class = "section_container">
            <div class="Products_container">
                <div class = "Products_text">
                    <h1>Customer Favorites</h1>    
                </div>
                <div class = "Products_carousel">
                    <div class = "Products_track">
                        <div class = "Carousel_items"><img src = "image/ube.png" alt="Ube bread - Filipino purple yam pastry"/></div>
                        <div class = "Carousel_items"><img src = "image/egg pie.png" alt="Classic Filipino egg pie"/></div>
                        <div class = "Carousel_items"><img src = "image/binangkal.png" alt="Binangkal - Filipino sesame ball donut"/></div>
                        <div class = "Carousel_items"><img src = "image/lakas.png" alt="Lakas bread - Filipino energy bread"/></div>
                        <div class = "Carousel_items"><img src = "image/pineapplepie.png" alt="Filipino pineapple pie"/></div>
                    </div>
                    <div class="Products_nav">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                    
                </div>
                <button class="Products_button">
                        <a href = "shop.php" title="Shop Filipino breads and pastries"><p>Shop Now!</p></a>

                    </button>
            </div>
        </div>
    </section>

    <!-- About_Collection1 -->
     <section id = "About">
        <!--<div class = "section_container">-->
            <div class = About_container>
                <div class = "About_text">
                    <h1>Classic Pinoy Panaderia Collection</h1>
                    <p>Step into the heart of Filipino tradition with the Classic Pinoy Panaderia Collection — a digital tribute to the timeless breads and pastries that define every local bakery. From the soft, golden crust of Pandesal to the sweet, flaky layers of Hopia and Pan de Coco, this collection celebrates the flavors, textures, and memories baked into every bite.
                    </p>
                    <button class = "About_button">
                        <a href = "shop.php" title="View trending Filipino breads"><p>Whats Hot?</p></a>
                    </button>
                </div>
                <div class = "About_image">
                    <img src="image/about_bread.png" alt="Collection of classic Filipino panaderia breads and pastries">
                </div>
            </div>

        <!--</div>-->
     </section>

    <!-- Recipe -->
     <section id = "Recipe">
        <!--<div class = "section_container">-->
            <h1>Tatak Panaderia, Tatak Pinoy</h1>
            <div class = "Recipe_container">
                <div class = "Recipe_flexitem" >
                    <img src="image/nostalgia.jpg" class = "Recipe_fleximage" alt="Nostalgic Filipino bread memories">
                    <div class="Recipe_flextext">
                        <h3>Nostalgia</h3>
                        <p>Every tinapay tells a story. From childhood merienda to late-night pandesal runs, our breads bring back the comforting flavors of home and the memories baked into every bite.</p>
                    </div>
                     <!--<button class ="Recipe_button">
                        <p>View Article</p>
                    </button>-->
                    
                </div>

                <div class = "Recipe_flexitem" >
                    <img src="image/fresh.jpg" class = "Recipe_fleximage" alt="Fresh baked Filipino breads from the oven">
                    <div class="Recipe_flextext">
                    <h3>Fresh</h3>
                    <p>Laging bagong hurno, laging handa. We bake daily with care and consistency — no shortcuts, no stale surprises. Just warm, soft, and honest bread straight from the oven.</p>
                    </div>
                </div>

                <div class = "Recipe_flexitem">
                    <img src="image/quality.jpg" class = "Recipe_fleximage" alt="Quality ingredients for Filipino bread making">
                    <div class="Recipe_flextext">
                    <h3>Quality</h3>
                    <p>Hindi basta-basta — basta masarap. We use trusted ingredients and time-honored techniques to ensure every loaf meets the standard of your suking panaderia: simple, satisfying, and made with heart.</p>
                    </div>
                </div>
            </div>
            
        <!--</div>-->
     </section>

    <!--Story-->
    <section id = "Story">
            <div class = "Story_container">
                <div class = "Story_text">
                    <h1>Kneadbread Story</h1>
                    <p>At KneadBread, we believe tinapay isn't just baked, it's experienced. By combining the warmth of the panaderia with the power of technology, building a digital space where tradition meets innovation. Every click supports a panadero, every scroll celebrates heritage, and every checkout uplifts the community.<br>
                        KneadBread was born from the love of breadmaking, with the touch of  digital space para sa mga tinapay na may kwento, at kwentong may tinapay.<br>

Dito, hindi lang basta shop. It's a tribute to our panaderos at panaderas — yung gumigising ng maaga, nagmamasa ng may puso, at nagbebenta ng tinapay na walang sawa. We uplift the spirit of local bakeries while offering breads that taste like home.<br>


                    </p>
                </div>
                <div class = "Story_image">
                    <img src="image/hero_bread.jpeg" class = "Story_image1" alt="KneadBread story - Filipino bread tradition">
                </div>
            </div>

        <!--</div>-->
     </section>


    <!-- Contact -->
    <section id = "Contact">
        <div class = "Contact_background">
            <img src="image/hero_bread.jpeg" alt="Contact KneadBread - Filipino bakery background">
        </div>
        
        <div class="Contact_container">
            <div class = "Contact_left">
                
                <div class="Contact_column">
                    <h1>Any Message for Us?</h1><!--once filled, will make contact to contactprocess.php-->
                    <form action="handlers/Contact_process.php" method="POST" class="form_column">
                        <!--<input type="text" name="name" placeholder="Your name" required/>-->
                        <input type="email" name="email" placeholder="Your email" required/>
                        <textarea name="message" placeholder="Your thoughts" required></textarea>
                        <button type="submit">Send</button>
                    </form>
                </div>
            </div>


            <div class = "Contact_right">
                <div class="Contact_column">
                    <h1>Contact</h1>
                    <p>UAH, Angeles City, Pampanga, Phillipines</p>
                    <p>0912-345-6789</p>
                    <p>KneadBread@gmail.com</p>
                    <p>MeljohnReyes-2025</p>
                </div>

                <div class="Contact_column">
                    <h1>Explore</h1>
                        <a href="#Hero" title="Go to homepage">Home</a>
                        <a href="#About" title="Learn about our collection">About</a>
                        <a href="#Recipe" title="View our values">Recipes</a>
                        <a href="#Contact" title="Contact us">Contact</a>
                </div>

                <div class="Contact_column">
                    <h1>Follow Us</h1>
                    <i class="fi fi-brands-instagram"></i>
                    <i class="fi fi-brands-facebook"></i>
                    <i class="fi fi-brands-twitter"></i>
                    <i class="fi fi-brands-tik-tok"></i>
                </div>
            </div>
        </div>
    </section>


        

  <script src="script.js"></script>
    </body>

    
</html>