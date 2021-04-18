<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require('Includes/metadata.php'); ?>

        <title>Resolution Holdings - Login</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <!-- Styles -->
        <link href="style.css" rel="stylesheet">
    </head>

    <body>
        <?php require('Includes/loginHandler.php'); ?>
        <?php require('Includes/header.php'); ?>

        <section>
            <div class="centered container login-area">
                <h1>Login</h1>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <label>Username:</label>
                    <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" required>
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                    <br>

                    <label>Password:</label>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" required>
                    <span class="invalid-feedback"><?php echo $password_err; ?>
                    <br>

                    <input type="submit" name="loginSubmit" value="Login" class="fancyButton-1">
                </form>
                <p>Need to register for an account? <a href="signup.php" title="Click here to go to the sign up page" class="link-1">Sign up here.</a></p>
            </div>
        </section>
        
    </body>
</html>