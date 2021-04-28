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
            require_once('Includes/userAuthHandler.php');
            loginCheck();
            displayHeader();
        ?>

        <section>
            <div class="centered container">
                <h1>Now viewing account for <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
            </div>

            <div class="centered container">
            </div>
        </section>
    </body>
</html>