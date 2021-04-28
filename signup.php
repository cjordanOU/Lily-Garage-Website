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
            require_once('Includes/header.php');
        ?>

        <section>
            <div class="container login-area">
                <h1>Sign Up</h1>
                <p>Please fill out this form to create an account</p>

                <!-- Form is protected from SQL injection by using htmlspecialchars -->
                <form name="signupForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <input type="hidden" name="formType" value="signUp"> <!-- Important -->
                    <div class="form-section">
                        <label>First Name:</label>
                        <input type="text" name="firstName" size="40" title="Enter your first name" required>
                    </div>

                    <div class="form-section">
                        <label>Last Name:</label>
                        <input type="text" name="lastName" size="40" title="Enter your last name" required>
                    </div>

                    <div class="form-section">
                        <label>Email Address:</label>
                        <input type="text" name="email" size="40" title="Enter your email address" required>
                    </div>

                    <div class="form-section">
                        <label>Phone Number:</label>
                        <input type="text" name="phoneNumber" size="40" title="Hint: 012-345-6789" pattern="^(\d{3}-)?\d{3}-\d{4}$" required>
                    </div>

                    <div class="form-section">
                        <label>Address:</label>
                        <input type="text" name="homeAddress" size="40" title="Enter your home address" required>
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
                        <input type="text" name="username" required>
                    </div>

                    <div class="form-section <?php echo (!empty($passwordError)) ? 'has-error' : ''; ?>">
                        <label>Password:</label>
                        <input type="password" name="password1" required>
                    </div>

                    <div class="form-section <?php echo (!empty($confirmPasswordError)) ? 'has-error' : ''; ?>">
                        <label>Confirm Password:</label>
                        <input type="password" name="password2" required>
                    </div>

                    <div class="form-section">
                        <input type="submit" class="fancyButton-1" value="Submit">
                        <input type="reset" class="fancyButton-2" value="Reset">
                    </div>
                </form>
                <p>Already Have an account? <a href="login.php" title="Click here to go to the login page" class="link-1">Login here.</a></p>
                
            </div>

        </section>

    </body>
</html>