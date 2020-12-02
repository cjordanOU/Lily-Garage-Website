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
        <title>Lily's Lil' Garage - About us</title>

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
    </head>
    <body>
        <section id="background"></section>
        
        <!-- Webpage Header -->
        <?php include('header.php'); ?>

        <!-- Main Webpage Content-->
        <main>
            <!-- Parallax Top Image -->
            <div class="parallaxBG-small" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.801), transparent), url('Images/garagePickney.jpg'); background-position: left 220%"></div>
            <div class="parallaxText2" style="left:750px">
                <h2>About Us</h2>
            </div>

            <div class="standardPad mTop">
                <p>At Lily’s Lil’ Garage, our goal is for good tasting food to hit you like a Mack Truck. We make all of our food with the precision and care of a mechanic working on a car. Lily’s started off with nothing but a garage, a grill, and a maple tree out back. From there we stretched into a multi-location franchise spread throughout Michigan. We also have a location in Japan where we source our A5 Wagyu Beef for our signature Radiator Burger.</p>
                <h3>Lily’s Little Garage: Taking that home-made taste across the state!</h3>
            <div>
        </main>

        <!-- Webpage Footer-->
        <?php include('footer.php'); ?>
    </body>
</html>
