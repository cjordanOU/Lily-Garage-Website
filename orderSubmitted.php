<!DOCTYPE html>
<html lang="en" class="orderBG">
    <head>
        <?php require_once('Includes/metadata.php'); ?>

        <title>Order Submitted - Lily's Lil' Garage</title>
        <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon">

        <!-- Styles -->
        <link href="style.css" rel="stylesheet">
    </head>

    <body class="orderBody">
        <?php
            require_once('Includes/webLogicHandler.php');
            require_once('Includes/orderHandler.php');
            loginCheckBasic();
            displayHeaderOrder();
            
        ?>

        <main class="orderLocationMain">
            <section class="narrowPad">
                <h2>Your order has been submitted!</h2>
            </section>
        </main>
        <?php displayFooter(); ?>
    </body>
</html>