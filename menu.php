<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once('Includes/metadata.php'); ?>

        <title>Menu - Lily's Lil' Garage</title>
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
            <!-- Parallax Hero Image -->
            <div class="parallaxBG-small" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.801), transparent), url('Images/garageAnnArbor.jpg'); background-position: left top"></div>
            <div class="parallaxText2">
                <h2>Menu</h2>
            </div>

            <!-- ------ Menu Selection ------ -->
            <div>
                <nav class="menuBar">
                    <a href="#breakfast" title="Jump to our Breakfast Selection">Breakfast</a>
					<a href="#entrées" title="Jump to our Entrées selection">Entrées</a>
					<a href="#desserts" title="Jump to our Desserts Selection">Desserts</a>
					<a href="#appetizers" title="Jump to our Appetizers and Sides selection">Appetizers &amp; Sides</a>
                    <a href="#drinks" title="Jump to our Drinks Selection">Drinks</a>
					<a href="#specials" title="Jump to our Location Specials Selection">Specials</a>
                </nav>
            </div>

            
        </main>
    </body>
</html>