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

            // Recieves data from contact.php using POST and declares it as a variable.
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $phoneType = $_POST['phoneType'];
            $phoneNumber = $_POST['phoneNumber'];
            $contactEmail = $_POST['contactEmail'];
            $contactPhone = $_POST['contactPhone'];
            $reason = $_POST['reason'];
            $location = $_POST['location'];
            $message = $_POST['message'];


            // Returns an error if certain variables are left empty
            if ($firstName == null || $lastName == null || $gender == null || $email == null) {
                echo "<h2>Error</h2>";
                echo "<p>Please make sure that all fields are entered before submitting.</p>";
            }

            if ($reason == '---') {
                echo "<h2>Error</h2>";
                echo "<p>Please select a valid contact reason.</p>";
            }

            if ($reason == 'Complaint') {
                echo "<h2>Submitted</h2>";
                echo "<p>$firstName $lastName at $email -- Our apologies that your service with us was not satisfactory. We have recieved your complaint and will take action immediately. Thank you for sharing your experience with us.</p>";
                echo "<p class='messageContent'>$message</p>";
            }

            if ($reason == 'Feedback') {
                echo "<h2>Submitted</h2>";
                echo "<p>$firstName $lastName at $email -- Thank you for your feedback, we appreciate you sharing it with us!</p>";
                echo "<p class='messageContent'>$message</p>";
            }

            if ($reason == 'Inquiry' || $reason == 'Marketing Opportunites' || $reason == 'Other') {
                echo "<h2>Submitted</h2>";
                echo "<p>$firstName $lastName at $email -- Thank you for contacting us, we will get back to you as soon as possible.</p>";
                echo "<p class='messageContent'>$message</p>";
            }

            if ($reason == 'Job Opportunity') {
                echo "<h2>Submitted</h2>";
                echo "<p>$firstName $lastName at $email -- Thank you for reaching out to us, we would love to have you working on our team! We will get back to you as soon as possible.</p>";
                echo "<p class='messageContent'>$message</p>";
            }

            if ($reason == 'Large Party Inquiry') {
                echo "<h2>Submitted</h2>";
                echo "<p>$firstName $lastName at $email -- Thank you for contacting us, we will get back to you as soon as possible about your large party inquiry.</p>";
                echo "<p class='messageContent'>$message</p>";
            }

            /*else {
                echo "<h2>Submitted</h2>";
                echo "<p>$firstName $lastName at $email -- your message has been sent.</p>";
                echo "<p>Please expect a response within the next 48 hours, thank you!";
            }*/
            ?>

        </main>

        <!-- Webpage Footer-->
        <?php include('footer.php'); ?>
	</body>
</html>
