<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>KneadBread</title>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Playfair:opsz,wdth,wght@5..1200,110.4,300&display=swap" rel="stylesheet">
                    

    </head>
    <body>    
        <?php
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
            <div id="errorMsg" style="background: red; color: white; padding: 15px; text-align: center; position: fixed; top: 20px; left: 50%; transform: translateX(-50%); width: 80%; max-width: 500px; border-radius: 8px; z-index: 9999;">
                ' . $_SESSION['registration_error'] . '
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
            echo '<div id="successMsg" class="toast-success"> ' . $_SESSION['login_error'] . '
            </div>

            <script>
                setTimeout(function() {
                    document.getElementById("successMsg").style.display = "none";
                }, 5000);
            </script>';
            unset($_SESSION['login_error']);
        }

        ?>
         
    <!-- Navigation -->
    <div class = "nav_container">
        <div class = "burger_menu">
            <div class = "burger_line"></div>
            <div class = "burger_line"></div>
            <div class = "burger_line"></div>
        </div>

            <ul class = "nav_links">
                <li><a href="#Hero">Home</a></li>
                <li><a href="#Products">Shop</a></li>
                <li><a href="#Recipe">Recipes</a></li>
                <li><a href="#Story"> About Us</a></li>
                <li><a href="#Contact"> Contact</a></li>
                <li><a href="Login.php"> login</a></li>
                <li><a href="Register.php"> Register</a></li>

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

    <!-- Hero Section -->
     <section id = "Hero">
        <div class = "Hero_wrapper">
            <img src="image/hero_bread.jpeg" class="hero_bread" alt="hero_bread">
        <div class = "Hero_box">
            <div class = "Hero_text">
                <h1>Do you Kneadbread?</h1>
                <p>Hi there! Thank you for visiting this website, this website is entirely all about breads.</p>
            </div>
            <div class = "Hero_imagebox">
                <img src="image/hero_bread.jpeg" class="hero_image1" alt="hero_bread">
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
                        <div class = "Carousel_items"><img src = "image/hero_bread.jpeg" alt="Carousel_items1"/></div>
                        <div class = "Carousel_items"><img src = "image/hero_bread.jpeg" alt="Carousel_items2"/></div>
                        <div class = "Carousel_items"><img src = "image/hero_bread.jpeg" alt="Carousel_items3"/></div>
                        <div class = "Carousel_items"><img src = "image/hero_bread.jpeg" alt="Carousel_items4"/></div>
                        <div class = "Carousel_items"><img src = "image/hero_bread.jpeg" alt="Carousel_items5"/></div>
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
                        <a href = "shop.php"><p>Shop Now!</p></a>

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
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    </p>
                    <button class = "About_button">
                        <a href = "shop.php"><p>Whats Hot?</p></a>
                    </button>
                </div>
                <div class = "About_image">
                    <img src="image/about_bread.png">
                </div>
            </div>

        <!--</div>-->
     </section>

    <!-- Recipe -->
     <section id = "Recipe">
        <!--<div class = "section_container">-->
            <h1>Our Difference</h1>
            <div class = "Recipe_container">
                <div class = "Recipe_flexitem" >
                    <img src="image/bread.png" class = "Recipe_fleximage">
                    <div class="Recipe_flextext">
                        <h3>Nostalgia</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                    </div>
                     <!--<button class ="Recipe_button">
                        <p>View Article</p>
                    </button>-->
                    
                </div>

                <div class = "Recipe_flexitem" >
                    <img src="image/bread.png" class = "Recipe_fleximage">
                    <div class="Recipe_flextext">
                    <h3>Fresh</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                    </div>
                    <!--<button class ="Recipe_button">
                        <p>View Article</p>
                    </button>-->
                </div>

                <div class = "Recipe_flexitem">
                    <img src="image/bread.png" class = "Recipe_fleximage" >
                    <div class="Recipe_flextext">
                    <h3>Quality</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                    </div>
                     <!--<button class ="Recipe_button">
                        <p>View Article</p>
                    </button>-->
                </div>
            </div>
            
        <!--</div>-->
     </section>

    <!--Story-->
    <section id = "Story">
            <div class = "Story_container">
                <div class = "Story_text">
                    <h1>Kneadbread Story</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    </p>
                </div>
                <div class = "Story_image">
                    <img src="image/hero_bread.jpeg" class = "Story_image1">
                </div>
            </div>

        <!--</div>-->
     </section>

    <!---Form Section-->  
    <section id = "form_section">
        <h1>hello</h1>
        <!--once redirected again from Contact_process.php, will fire this message as pop up-->
                <!-- this is called JS alert via PHP echo-->
                <?php if (isset($_GET['contactprocess_success'])): ?>
                    echo "<script>alert('Thanks for the message! every thoughts count')</script>"
                <?php endif; ?>

                <!--once filled, will make contact to contactprocess.php-->
                <form action="handlers/Contact_process.php" method="POST">
                    <input type="text" name="name" placeholder="Your name" required/>
                    <input type="email" name="email" placeholder="Your email" required/>
                    <textarea name="message" placeholder="Your thoughts" required></textarea>
                    <button type="submit">Send</button>
                </form>
    </section>

    <!-- Contact -->
    <section id = "Contact">
        <div class = "Contact_background">
            <img src="image/hero_bread.jpeg">
        </div>
        
        <div class="Contact_container">
            <div class = "Contact_left">
                <h1>Contact</h1>
                <p>UAH, Angeles City, Pampanga, Phillipines</p>
                <p>0912-345-6789</p>
                <p>KneadBread@gmail.com</p>
                <p>MeljohnReyes-2025</p>
            </div>


            <div class = "Contact_right">
                <div class="Contact_column">
                    <h1>Explore</h1>
                        <a href="#hero">Home</a>
                        <a href="#about">About</a>
                        <a href="#recipes">Recipes</a>
                        <a href="#contact">Contact</a>
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