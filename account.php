<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require('Includes/metadata.php'); ?>

        <title>Account View - Lily's Lil' Garage</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

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
            <div class="parallaxBG-small" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.801), transparent), url('Images/garageGeneric.jpg'); background-position: right 320%;"></div>
            <div class="parallaxText2">
                <h2>Account View</h2>
            </div>

            <section class="widePad">
                <div>
                    <h1>Now viewing account for <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
                </div>
            </section>
        </main>
    </body>
</html>