<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once('Includes/metadata.php'); ?>

        <title>Home - Lily's Lil' Garage</title>
        <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon">

        <!-- Styles -->
        <link href="style.css" rel="stylesheet">
    </head>

    <body onload="startSlideshow()">
        <?php
            require_once('Includes/webLogicHandler.php');
            loginCheckBasic();
            displayHeader();
        ?>

        <main>
            <!-- Large Parallax Hero Image -->
            <div class="parallaxBG-large" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.801), transparent), url('Images/RestaurantOutsideBlur.jpg');"></div>
            <div class="parallaxText1">
                <h2>Welcome to Lily's Lil Garage</h2>
                <a href="order.php">Order Online Now</a>
            </div>

            <section class="narrowPad">
                <h1 class="largeh1">Lily's Lil Garage</h1>
                <p> Welcome to Lily's Lil Garage website where you can browse our menu, find all our current restaurant locations,
					and even order food online for in-store pick-up or delivery. We strive to serve our community with the finest quality 
					food to give that "home-made" feel.
                </p>

                <div id="homeSlideshowContainer">
                    <div class="fade">
                        <img id="slideshowImage" src=" " alt="A slideshow of our delicious foods and drinks" width="720" height="420">
                        <div id = "slideShowText"></div>    
                    </div>
                    <p>Feel free to browse our menu by clicking the button below.</p>
                    <a href="menu.php" title="Browse our menu">View Our Menu</a>
                </div>

                <hr>
                <div id="homeLocation">
                    <div>
                        <h2 class="noMargin">We've got what you want, when you need it</h2>
                        <p>We work our hardest to bring exactly what our customers want. With menu items tailored specifically to each restaurant, you're sure to find something you'll love.</p>
                        <a class="linkButton mCenter" href="locations.php" title="Choose a location">Choose a location</a>
                    </div>
                    <img alt="Our delicious Rear End Surprise Breakfast Burrito" title="Our delicious Rear End Breakfast Burrito" src="Images/RearEndSurprise.JPG">
                </div>

            </section>
        </main>

        <?php displayFooter(); ?>

    </body>
</html>