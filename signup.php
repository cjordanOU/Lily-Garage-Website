<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require('Includes/metadata.php'); ?>

        <title>Sign Up - Lily's Lil' Garage</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <!-- Styles -->
        <link href="style.css" rel="stylesheet">
    </head>

    <body>
        <?php
            require_once('Includes/webLogicHandler.php');
            require_once('Includes/userAuthHandler.php');
            displayHeader();
            signupHandler();
        ?>

        <main>
            <!-- Parallax Hero Image -->
            <div class="parallaxBG-small" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.801), transparent), url('Images/garageGeneric.jpg'); background-position: right 320%;"></div>
            <div class="parallaxText2">
                <h2>Sign Up</h2>
            </div>
        
            <section>
                <div class="widePad login-area">
                    <br>
                    <p>Please fill out this form to create an account</p>

                    <!-- Form is protected from SQL injection by using htmlspecialchars -->
                    <form name="signupForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-section">
                            <label>First Name:</label>
                            <input type="text" name="firstName" size="40" title="Enter your first name" autocomplete="given-name" required>
                        </div>

                        <div class="form-section">
                            <label>Last Name:</label>
                            <input type="text" name="lastName" size="40" title="Enter your last name" autocomplete="family-name" required>
                        </div>

                        <div class="form-section">
                            <label>Email Address:</label>
                            <input type="text" name="email" size="40" title="Enter your email address" autocomplete="email" required>
                        </div>

                        <div class="form-section">
                            <label>Phone Number:</label>
                            <input type="text" name="phoneNumber" size="40" title="Hint: 012-345-6789" pattern="^(\d{3}-)?\d{3}-\d{4}$" autocomplete="tel" required>
                        </div>

                        <div class="form-section">
                            <label>Address:</label>
                            <input type="text" name="homeAddress" size="40" title="Enter your home address" autocomplete="street-address" required>
                        </div>

                        <div class="form-section">
                            <label>Preferred Store Location:</label>
                            <select name="preferredStore" title="Select your preferred store location" required>
                                <option value="N/A">N/A</option>
                                <option value="Mount Pleasant">Mount Pleasant</option>
                                <option value="Ann Arbor">Ann Arbor</option>
                                <option value="Pickney">Pickney</option>
                                <option value="Flushing">Flushing</option>
                                <option value="Colon">Colon</option>
                                <option value="Climax">Climax</option>
                                <option value="Setagaya-Ku">Setagaya-Ku</option>
                            </select>
                        </div>

                        <div class="form-section <?php echo (!empty($usernameError)) ? 'has-error' : ''; ?>">
                            <label>Username:</label>
                            <input type="text" name="username" autocomplete="username" required>
                        </div>

                        <div class="form-section <?php echo (!empty($passwordError)) ? 'has-error' : ''; ?>">
                            <label>Password:</label>
                            <input type="password" name="password1" autocomplete="new-password" required>
                        </div>

                        <div class="form-section <?php echo (!empty($confirmPasswordError)) ? 'has-error' : ''; ?>">
                            <label>Confirm Password:</label>
                            <input type="password" name="password2" autocomplete="one-time-code" required>
                        </div>

                        <div class="form-section">
                            <input type="submit" class="fancyButton-1" value="Submit">
                            <input type="reset" class="fancyButton-2" value="Reset">
                        </div>
                    </form>
                    <p>Already Have an account? <a href="login.php" title="Click here to go to the login page" class="link-1">Login here.</a></p>
                    
                </div>

            </section>
        </main>

        <?php displayFooter(); ?>
    </body>
</html>