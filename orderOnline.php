<!DOCTYPE html>
<?php
// links to database
require ('Includes/databaseHandler.php');
?>
<html id="orderBackground">
    <head>
        <!-- Webpage Metadata-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Lily's Lil' Garage, A good place to get some good food.">
        <meta name="keywords" content="Lily's Lil' Garage, Lily's Garage, Lily's Little Garage, Restaurant, Menu, Food">
        <meta name="author" content="Jerrod Dutcher, Cameron Jordan, James Moseley, Trent Toyryla, Alden Metzmaker">

        <!-- Webpage Title -->
        <title>Lily's Lil' Garage - Order Online</title>

        <!-- Website Icon -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        
        <!-- Styles -->
        <link href="style.css" media="screen and (min-device-width: 800px)" rel="stylesheet">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        
        <!-- Scripts -->
        <script src="Scripts/orderLogic.js"></script>
    </head>
    <body>
        <?php
            $location = $_POST['location'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email_address = $_POST['email_address'];
            $phone_number = $_POST['phone_number'];
        ?>
        <header id="orderHeader">
            <a href="index.php" class="logo" title="Return to the homepage">Lily's Lil Garage</a>
            <?php include('Includes/storeHeader.php'); ?>
        </header>

        <!-- Main Webpage Content-->
        <main id="orderMain">
            <div class="orderLeft">
                <h4>Food Types</h4>
                <hr>
                <a href="#combos">combos</a>
                <a href="#pancakes">pancakes</a>
                <a href="#crepes">crepes</a>
                <a href="#omelet">omelets</a>
                <a href="#plates">entree plates</a>
                <a href="#handheld">burgers &amp; handhelds</a>
                <a href="#pastas">pastas</a>
                <a href="#wraps">wraps</a>
                <a href="#appetizers">finger foods</a>
                <a href="#salads">salads</a>
                <a href="#non_alc">non-alcoholic beverages</a>
                <a href="#alc">alcoholic beverages</a>
                <a href="#desserts">desserts</a>
                <a href="#specials">location specials</a>
            </div>
            <div class="orderCenter">
                <table class="orderTable">
                <?php
                    // Select menu itms
                    $sql = 'SELECT * FROM menu_items';
                    $result = $conn-> query($sql);

                    if ($result-> num_rows > 0) {
                        while ($row = $result-> fetch_assoc()) {
                            echo "<tr id='". $row["food_category"] ."'><td>". $row["food_name"] ."</td><td>&#36;". $row["price"] ."</td><td>". $row["description"] ."</td><td><button name='". $row["food_name"] ."'value='". $row["price"] ."' onclick='addToCart(this.name,this.value)'>Add to Cart</button></td></tr>";
                        }
                        echo "</table>";
                    }
                    else {
                        echo "0 results";
                    }
                ?>
            </div>
            <div class="orderRight">
                <div class="orderUserInfo">
                    <?php
                        echo "<h4>Ordering For:</h4>";
                        echo "<p>$first_name $last_name</p>";
                        echo "<p>$email_address</p>";
                        echo "<p>$phone_number</p>";

                        $userInsert = "INSERT INTO users (first_name,last_name,user_email,user_phone,store_location) VALUES ('$first_name','$last_name','$email_address','$phone_number','$location')";
                        
                        if (mysqli_query($conn, $userInsert)) {
                            echo "<p>Your selected items will be shown below</p>";
                        } else {
                            echo "<p>Error! please resubmit your information</p>";
                        }
                        mysqli_close($conn);
                    ?>
                </div>

                <div class="orderCart">
                </div>
                <div class="orderCheckout">
                    <h4 id="orderTotalPrice">Total Price: N/A</h4>
                    <button id="orderCheckoutButton" value="checkout" onclick="confirmationDialog()" disabled>Checkout</button>
                </div>
            </div>
        </main>
        
    </body>
</html>
