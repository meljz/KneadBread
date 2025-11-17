<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Registration</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Playfair:opsz,wdth,wght@5..1200,110.4,300&display=swap" rel="stylesheet">
     

    </head>
    <body>
    <!-- NAVGIATION -->
    <div class = "nav_container">
        <div class = "burger_menu">
            <div class = "burger_line"></div>
            <div class = "burger_line"></div>
            <div class = "burger_line"></div>
        </div>

            <ul class = "nav_links">
                <li><a href="index.php#Hero">Home</a></li>
                <li><a href="index.php#Products">Shop</a></li>
                <li><a href="index.php#Recipe">Recipes</a></li>
                <li><a href="index.php#Story"> About Us</a></li>
                <li><a href="index.php#Contact"> Contact</a></li>
                <li><a href="Login.php"> login</a></li>
                <li><a href="Register.php"> Register</a></li>
            </ul>
        
    </div>

    <div class = "Register_container">
        <div class = "Register_within">
            <div class = "Register_right">
                <div class = "Register_right_column">
                    <div class = "Register_right_img1">
                        <img src="image/login_bread.jpg">
                    </div>
                    <div class = "Register_right_img2">
                        <img src="image/hero_bread.jpeg">
                    </div>
                    <div class = "Register_right_text">
                        <h1> Register to get your first bread for <strong>free!</strong></h1>
                        <p>Disclaimer: One bread per person only!</p>
                    </div>
                </div>
            </div>

            <div class = "Register_left">
                <div class = "Register_left_column">
                    <form action="handlers/Register_process.php" method="POST" class = "Register_rightcontents">
                        <h1> New to KneadBread? </h1>
                        <h3> Start to Register!</h3>
                        <div class = "Register_placeholder"> 
                            <p>Name: </p>
                            <input type="text" name="name" placeholder="Your name" required/>
                        </div>

                        <div class = "Register_placeholder"> 
                            <p>Email: </p>
                            <input type="email" name="email" placeholder="Your email" required/>
                        </div>

                        <div class = "Register_placeholder"> 
                            <p>Password: </p>
                            <input type="password" name="password" placeholder="Your password" required/>
                        </div>
                        <button type="submit" name="register">Submit</button>
                    </form>
                </div> 
            </div>
         </div>
        
    </div>  

    </body> 
</html>