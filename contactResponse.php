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
        <title>Lily's Lil' Garage - Contact Response</title>

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
            
            <!-- PHP code -->
            <?php
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $phoneType = $_POST['phoneType'];
            $phoneNumber = $_POST['phoneNumber'];
            $contactEmail = $_POST['contactEmail'];
            $contactPhone = $_POST['contactPhone'];

            if ($firstName == null || $lastName == null || $gender == null || $email == null) {
                echo "<h2>Error</h2>";
            }

            else {
                echo "<h2>Submitted</h2>";
                echo "<p>$firstName $lastName at $email -- your message has been sent.</p>";
                echo "<p>Please expect a response within the next 48 hours, thank you!";
            }
            ?>

        </main>

        <!-- Webpage Footer-->
        <?php include('footer.php'); ?>
	</body>
</html>
