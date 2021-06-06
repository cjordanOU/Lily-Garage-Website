<!DOCTYPE html>
<html lang="en" class="orderBG">
    <head>
        <?php require_once('Includes/metadata.php'); ?>

        <title>Order Online - Lily's Lil' Garage</title>
        <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon">

        <!-- Styles -->
        <link href="style.css" rel="stylesheet">

        <!-- Order Script -->
        <script src="Scripts/orderLogic.js" type="text/javascript"></script>
    </head>

    <body class="orderBody">
        <?php
            require_once('Includes/webLogicHandler.php');
            require_once('Includes/orderHandler.php');
            displayHeaderOrder();
            
        ?>

        <section id="orderPrompt">
            <?php
                getOrderInfo();
                checkIfSessionStore();
            ?>
        </section>

        <main class="orderMain">
            
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
                <?php displayMenu(); ?>
            </div>
            <div class="orderRight">
                <div class="orderUserInfo">
                    <?php
                        displayUserInfo();
                    ?>
                </div>

                <div class="orderCart">
                    <!-- Current Cart Info -->
                </div>

                <div class="orderCheckout">
                    <h4 id="orderTotalPrice">Total Price: N/A</h4>
                    <button id="orderCheckoutButton" value="checkout" onclick="confirmationDialog()" disabled>Checkout</button>
                </div>
                
            </div>
        </main>
    </body>
</html>