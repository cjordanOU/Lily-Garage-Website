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
        <title>Lily's Lil' Garage - Order Online</title>

        <!-- Website Icon -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        
        <!-- Styles -->
        <link href="style.css" rel="stylesheet">
        
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
        <main class="standardPad">
            <?php

            // Recieves data from locations.php using POST and declares it as a variable.
            $storeLocation = $_POST['storeLocation'];


            // Prompts the user to select a location to order from on the locations page
            if ($storeLocation == null) {
                echo "<h2>Please select a store first from our locations page!";
            }

            else {
                echo "<h2>Now ordering for: $storeLocation</h2>";
                include('orderForm.php');
            }

            ?>
        </main>

        <!-- Webpage Footer-->
        <?php include('footer.php'); ?>
    </body>
</html>
