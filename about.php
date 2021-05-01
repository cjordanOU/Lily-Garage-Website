<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once('Includes/metadata.php'); ?>

        <title>About Us - Lily's Lil' Garage</title>
        <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon">

        <!-- Styles -->
        <link href="style.css" rel="stylesheet">
    </head>

    <body>
        <?php
            require_once('Includes/webLogicHandler.php');
            loginCheckBasic();
            displayHeader();
        ?>

        <main>
            <!-- Parallax Top Image -->
            <div class="parallaxBG-small" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.801), transparent), url('Images/garagePickney.jpg'); background-position: left 220%"></div>
            <div class="parallaxText2">
                <h2>About Us</h2>
            </div>

            <div class="standardPad mTop">
                <h3>Who is Lily?</h3>
                <p>Lily’s started off as nothing but a girl, a grill, and a dream. In her childhood home she would always lick the maple tree in the field, until one day she realized that syrup would be great on pancakes. From there, her culinary career began to grow into the stunning legacy it has become today. Rubbing pancakes on the maple tree to get that wonderful taste, cooking burgers on the hood of a semi on a hot day, and putting just a little bit of motor oil in her pasta to add that lovely kick, she made the very first Lily’s Little Garage Location in Climax MI.</p>
                <p>At Lily’s Lil’ Garage, our goal is for good tasting food to hit you like a Mack Truck. We make all of our food with the precision and care of a mechanic working on a car. Lily’s started off with nothing but a garage, a grill, and a maple tree out back. From there we stretched into a multi-location franchise spread throughout Michigan. We also have a location in Japan where we source our A5 Wagyu Beef for our signature Radiator Burger.</p>
            
                <h2 class="noMarginBottom">Meet The Team</h2>
            </div>
            <div class="widePad">
                <section class="cardRow">

                    <div class="cardColumn">
                        <div class="card">
                            <img src="Images/default.png" alt="Jerrod Dutcher" style="height:60%">
                            <div class="cardContainer">
                                <h2>Jerrod Dutcher</h2>
                                <p class="title">CEO & Team Lead</p>
                                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                                <p>example@example.com</p>
                                <p><a href="mailto:" class="linkButton">Contact</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="cardColumn">
                        <div class="card">
                            <img src="Images/default.png" alt="Cameron Jordan" style="height:60%">
                            <div class="cardContainer">
                                <h2>Cameron Jordan</h2>
                                <p class="title">Design Director</p>
                                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                                <p>cjordan@oakland.edu</p>
                                <p><a href="mailto:cjordan@oakland.edu" class="linkButton">Contact</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="cardColumn">
                        <div class="card">
                            <img src="Images/default.png" alt="James Moseley" style="height:60%">
                            <div class="cardContainer">
                                <h2>James Moseley</h2>
                                <p class="title">CTO & Designer</p>
                                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                                <p>example@example.com</p>
                                <p><a href="mailto:" class="linkButton">Contact</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="cardColumn">
                        <div class="card">
                            <img src="Images/default.png" alt="Trent Toyryla" style="height:60%">
                            <div class="cardContainer">
                                <h2>Trent Toyryla</h2>
                                <p class="title">Head Chef & Designer</p>
                                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                                <p>example@example.com</p>
                                <p><a href="mailto:" class="linkButton">Contact</a></p>
                            </div>
                        </div>
                    </div>

                    <!--
                    <div class="cardColumn">
                        <div class="card">
                            <img src="Images/default.png" alt="Alden Metzmaker" style="height:60%">
                            <div class="cardContainer">
                                <h2>Alden Metzmaker</h2>
                                <p class="title">Fry Cook & Janitor</p>
                                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                                <p>example@example.com</p>
                                <p><button class="linkButton">Contact</button></p>
                            </div>
                        </div>
                    </div>
                    -->
                    
                    
                </section>
            </div>
        </main>

        <?php displayFooter(); ?>
    </body>
</html>