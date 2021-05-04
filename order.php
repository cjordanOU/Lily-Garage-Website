<!DOCTYPE html>
<html lang="en" class="orderBG">
    <head>
        <?php require_once('Includes/metadata.php'); ?>

        <title>Order Online - Lily's Lil' Garage</title>
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

        <main class="orderMain">
            <section class="standardPad">
                <?php
                    orderInfoPrompt();
                    orderInfoConfirm();
                ?>

            </section>
        </main>
    </body>
</html>