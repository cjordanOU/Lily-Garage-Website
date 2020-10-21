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
        <link href="style.css" rel="stylesheet">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <body>
        <section id="background"></section>
        
        <!-- Webpage Header -->
        <?php include('header.php'); ?>

        <!-- Main Webpage Content-->
        <main>
            <h1>Welcome to Lily's Lil Garage</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        
            <!-- First Parallax Class, image of restaurant blurred -->
            <div class="parallaxBG blur2" id="homePic1"></div>
            <div class="parallaxText">
                <h2>Welcome to Lily's Lil Garage</h2>
                <a href="orderOnline.html">Order Online Now</a>
            </div>
            
            <div>
                <br><br>
            </div>

            <div id="homeSlideshowContainer">
                <img src="Images/E85Special.JPG" alt="A slideshow of our delicious foods and drinks">
                <p>Placeholder Text - I think we should put a slideshow of menu items here</p>
                <a href="menu.html" title="Browse our menu">View Our Menu</a>
            </div>

            <div id="homeLocation">
                <hr>
                <section>
                    <h2 class="noMargin">We've got what you want, when you need it</h2>
                    <p>We work our hardest to bring exactly what our customers want. With menu items tailored specifically to each restaurant, you're sure to find something you'll love.</p>
                    <a class="linkButton" href="locations.html" title="Choose a location">Choose a location</a>
                </section>
                <img src="Images/RadiatorBurger.JPG">
            </div>

        </main>

        <!-- Webpage Footer-->
        <?php include('footer.php'); ?>
    </body>
</html>
