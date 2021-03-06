<!DOCTYPE html>
<html lang="en" class="orderBG">
    <head>
        <?php require_once('Includes/metadata.php'); ?>

        <title>Order Location - Lily's Lil' Garage</title>
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
                <h2>Please make sure your information below is correct before proceeding to the order page</h2>
            </section>
            <hr>
            <section class="narrowPad">
                <form action="order.php" method="post">
                    <?php orderInfoPrompt();?>
                    <br>
                    <input type="submit" name="Submit" value="Submit User Information" class="fancyButton-1">
                </form>
            </section>
        </main>
        <?php displayFooter(); ?>
    </body>
</html>