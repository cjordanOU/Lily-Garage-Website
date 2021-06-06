<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require('Includes/metadata.php'); ?>

        <title>Login - Lily's Lil' Garage</title>
        <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon">

        <!-- Styles -->
        <link href="style.css" rel="stylesheet">
    </head>

    <body>
        <?php
            require_once('Includes/webLogicHandler.php');
            require_once('Includes/userAuthHandler.php');
            displayHeader();
            loginHandler();
        ?>

        <main>
            <!-- Parallax Hero Image -->
            <div class="parallaxBG-small" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.801), transparent), url('Images/garageGeneric.jpg'); background-position: right 320%;"></div>
            <div class="parallaxText2">
                <h2>Login</h2>
            </div>

            <section>
            
                <div class="widePad login-area">
                    <br><br>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <label>Username:</label>
                        <input type="text" name="username" class="form-control" autocomplete="username" required>
                        <br>

                        <label>Password:</label>
                        <input type="password" name="password" class="form-control" autocomplete="current-password" required>
                        <br>

                        <input type="submit" name="Submit" value="Login" class="fancyButton-1">
                    </form>
                    <p>Need to register for an account? <a href="signup.php" title="Click here to go to the sign up page" class="link-1">Sign up here.</a></p>
                </div>
            </section>

        </main>
        
        <?php displayFooter(); ?>
    </body>
</html>