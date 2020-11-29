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
        <main id="orderMain">
            <h2 class="standardPad">Please make sure your information below is correct before proceeding to the order page!</h2>
            <form class="standardPad" action="orderOnline.php" method="post" id="userInformation" onsubmit="feedbackFormValidate()">
                <label>First Name:</label>
                <input type="text" name="first_name" size="40"
                title="Initail captial, then lowercase and no spaces"
                pattern="^[A-Z][a-z]*$" required>
                <br>

                <label>Last Name:</label>
                <input type="text" name="last_name" size="40"
                title="Initail captial, then lowercase and no spaces"
                pattern="^[A-Z][a-z]*$" required>
                <br>

                <label>E-mail Address:</label>
                <input type="text" name="email_address" size="40"
                title="Hint: llgrestaurant@gmail.com"
                pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$" required>
                <br>
                
                <label>Phone Number:</label>
                <input type="text" name="phone_number" size="40"
				title="Hint: 012-345-6789"
				pattern="^(\d{3}-)?\d{3}-\d{4}$" required>
                <br>

                <label>Store Location</label>
                <select name="location">
                    <option>---</option>
                    <option>Ann Arbor, MI</option>
                    <option>Climax, MI</option>
                    <option>Colon, MI</option>
                    <option>Flushing, MI</option>
                    <option>Mount Pleasant, MI</option>
                    <option>Pinckney, MI</option>
                    <option>Setagaya-Ku, Tokyo</option>
                </select>
                <br>

                <!-- Submit Button -->
                <input type="submit" name="sub" value="Submit user information">
            </form>
        </main>

        <!-- Webpage Footer-->
        <?php include('footer.php'); ?>
    </body>
</html>
