<!DOCTYPE html>
<?php
// links to database
require ('Includes/databaseHandler.php')
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
        <script src="Scripts/mainScripts.js"></script> 
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
            <?php include('storeHeader.php'); ?>
        </header>

        <!-- Main Webpage Content-->
        <main id="orderMain">
            <div class="orderLeft">
                <h4>Food Types</h4>
                <a href="#handheld">test hand</a>
                <p>combos</p>
                <p>pancakes</p>
                <a href="#combos">test combos</a>
                <p>crepes</p>
                <p>omelets</p>
                <p>entree plates</p>
                <p>burgers &amp; handhelds</p>
                <p>pastas</p>
                <p>wraps</p>
                <p>finger foods</p>
                <p>salads</p>
                <p>non-alcoholic beverages</p>
                <p>alcoholic beverages</p>
                <p>desserts</p>
            </div>
            <div class="orderCenter">
                <table>
                <?php
                    // Select menu itms
                    $sql = 'SELECT * FROM menu_items';
                    $result = $conn-> query($sql);

                    if ($result-> num_rows > 0) {
                        while ($row = $result-> fetch_assoc()) {
                            echo "<tr id='". $row["food_category"] ."'><td>". $row["food_name"] ."</td><td>". $row["price"] ."</td><td>". $row["description"] ."</td></tr>";
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
                        echo "<p>$first_name</p>";
                        echo "<p>$last_name</p>";
                        echo "<p>$email_address</p>";
                        echo "<p>$phone_number</p>";
                    ?>
                </div>

                <div class="orderCart">
                    <table>
                        <tbody>
                            <tr><td>placeholder item</td><td>(price)</td></tr>
                            <tr><td>placeholder item</td><td>(price)</td></tr>
                            <tr><td>placeholder item</td><td>(price)</td></tr>
                            <tr><td>placeholder item</td><td>(price)</td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="orderCheckout">
                    <h4>Total Price: placeholder</h4>
                    <button value="checkout">Checkout</button>
                </div>
            </div>
        </main>

        <!-- Webpage Footer-->
        <?php include('footer.php'); ?>
    </body>
</html>
