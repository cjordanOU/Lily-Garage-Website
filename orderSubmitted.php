<!DOCTYPE html>
<?php
// links to database
require ('Includes/databaseHandler.php')
?>
<html id="orderBackground">
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
        <link href="style.css" media="screen and (min-device-width: 800px)" rel="stylesheet">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        
        <!-- Scripts -->
    </head>
    <body>
        <header id="orderHeader">
            <a href="index.php" class="logo" title="Return to the homepage">Lily's Lil Garage</a>
        </header>

        <!-- Main Webpage Content-->
        <?php
            date_default_timezone_set('America/Detroit');
            $orderTime = date('h:i A', strtotime("+30 minutes"));
        ?>
        <main id="orderMain">
            <div class="standardPad">
                <h2>Thank you for chosing Lily's Lil Garage!</h2>
                <h3>
                    Your food will be available for pickup at <?php echo "$orderTime";?>
                </h3>
                <hr>
            </div>

            <div class="standardPad">
                <h4 id="checkoutItems">Your order has been submitted!</h4>
            </div>
        </main>

        <!-- Webpage Footer-->
        <?php include('Includes/footer.php'); ?>
    </body>
</html>
