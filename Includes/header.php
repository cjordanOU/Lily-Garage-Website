<header>
    <nav class="container">
        <div class="nav-left">
            <a href="index.php" title="Click here to return to the homepage">Home</a>
            <a href="about.php" title="View information about our organization">About</a>
            <a href="contact.php" title="View our contact information">Contact</a>
        </div>

        <div class="nav-right">
            <?php
                // Check to see if the user is logged in, if not then redirect to the login page
                if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                    echo "<a href='login.php' title='Click here to login'>Login</a> <a href='signup.php' title='Click here to sign up'>Sign Up</a>";
                }

                else {
                    echo "<a href='accounts.php' title='View your accounts'>View Accounts</a> <a href='Includes/logout.php' title='Click here to log out'>Log Out</a>";
                }
            ?>
        </div>
    </nav>
</header>