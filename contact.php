<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once('Includes/metadata.php'); ?>

        <title>Contact Us - Lily's Lil' Garage</title>
        <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon">

        <!-- Styles -->
        <link href="style.css" rel="stylesheet">
    </head>

    <body>
        <?php
            require_once('Includes/webLogicHandler.php');
            loginCheckBasic();
            displayHeader();
            processContact();
        ?>

        <main>
            <!-- Parallax Hero Image -->
            <div class="parallaxBG-small" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.801), transparent), url('Images/garageFlushing.jpg'); background-position: left 320%"></div>
            <div class="parallaxText2">
                <h2>Contact Us</h2>
            </div>

            <section>
                <?php displayContact(); ?>
            </section>
        </main>

        <?php displayFooter(); ?>
    </body>
</html>