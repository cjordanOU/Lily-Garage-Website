<!DOCTYPE html>
<html>
    <head>
        <!-- Webpage Metadata-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Lily's Lil' Garage, A good place to get some good food.">
        <meta name="keywords" content="Lily's Lil' Garage, Lily's Garage, Lily's Little Garage, Restaurant, Menu, Food">
        <meta name="author" content="Jerrod Dutcher, Cameron Jordan, James Moseley, Trent Toyryla, Alden Metzmaker">

        <!-- Webpage Title -->
        <title>Lily's Lil' Garage - Home</title>

        <!-- Website Icon -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        
        <!-- Styles -->
        <link href="style.css" media="screen and (min-device-width: 1200px)" rel="stylesheet">
        <link href="styleMobile.css" media="screen and (max-width: 1199px)" rel="stylesheet"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

        <!-- Scripts -->
        <script src="Scripts/mainScripts.js"></script> 
        <script src="Scripts/slideshow.js"></script>
    </head>
    <body onload = startRotation()>
        <section id="background"></section>
        
        <!-- Webpage Header -->
        <?php include('Includes/header.php'); ?>

        <!-- Main Webpage Content-->
        <main>
            <!-- First Parallax Class -->
            <div class="parallaxBG-large" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.801), transparent), url('Images/RestaurantOutsideBlur.jpg');"></div>
            <div class="parallaxText1">
                <h2>Welcome to Lily's Lil Garage</h2>
                <a href="orderUser.php">Order Online Now</a>
            </div>
            
            <div class="standardPad">
                <h1>Lily's Lil Garage</h1>
                <p> Welcome to Lily's Lil Garage website where you can browse our menu, find all our current restaurant locations,
					and even order food online for in-store pick-up or delivery. We strive to serve our community with the finest quality 
					food to give that "home-made" feel.</p>
            </div>

            <div class="mHide">
                <br><br>
            </div>
                <div id="homeSlideshowContainer">

                    <div class="fade">
                        <img id="slideshowImage" src=" " alt="A slideshow of our delicious foods and drinks" width="720" height="420">
                        <div id = "slideShowText"></div>    
                    </div>
                    <center><p>Feel free to browse our menu by clicking the button below.</p></center>
                    <a href="menu.php" title="Browse our menu">View Our Menu</a>
				</div>
			
            <div id="homeLocation">
                <hr>
                <section>
                    <h2 class="noMargin">We've got what you want, when you need it</h2>
                    <p>We work our hardest to bring exactly what our customers want. With menu items tailored specifically to each restaurant, you're sure to find something you'll love.</p>
                    <a class="linkButton mCenter" href="locations.php" title="Choose a location">Choose a location</a>
                </section>
                <img src="Images/RadiatorBurger.JPG">
            </div>

        </main>

        <!-- Webpage Footer-->
        <?php include('Includes/footer.php'); ?>
    </body>
</html>
