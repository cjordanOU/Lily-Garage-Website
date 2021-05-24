<?php
    // This file handles logic for most website functionality

    // dbConfig include
    require_once 'Includes/dbConfig.php';


    function displayHeaderOrder() {
        loginCheckBasic();
        echo '<header id="headerOrder"><nav class="headContainer"><div id="headLogo"><a href="index.php" class="logo" title="Return to the homepage">Lily&#39;s Lil Garage</a></div>';
        
        if(isset($_SESSION["orderStore"])) {
            $_SESSION['orderStore'] = $orderStore;
            $connection = $GLOBALS['connection'];
            $sql = "SELECT * FROM store_locations WHERE STORE_NAME={$orderStore}";
            $result = $connection-> query($sql);

            if ($result-> num_rows > 0) {
                while ($row = $result-> fetch_assoc()) {
                    echo "<div id='orderStoreInfo'><h2>". $row["STORE_NAME"] ."$</h2><p>". $row["STORE_STREET"] ."</p>";
                    echo "<p>". $row["STORE_LOCATION"] ."</p>";
                    echo "<p>". $row["STORE_PHONE"] ."</p></div>";
                }
            }
        }


        if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){
            echo "<div class='headerOrderLinks'><a href='account.php' title='View your account'>Account</a> <a href='Includes/logout.php' title='Click here to log out'>Log Out</a></div>";
        }
        else {
            echo "<div class='headerOrderLinks'><a href='signup.php' title='Click here to sign up'>Sign Up</a> <a href='login.php' title='Click here to login'>Login</a></div>";
        }

        echo '</nav></header>';
    }

    function orderInfoPrompt() {
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            echo "<label>First Name:</label><input type='text' name='first_name' size='40' title='Enter your first name' autocomplete='given-name' required><br>";
            echo "<label>Last Name:</label><input type='text' name='last_name' size='40' title='Enter your last name' autocomplete='family-name' required><br>";
        }
        else {
            $connection = $GLOBALS['connection'];
            $sql = "SELECT * FROM accounts WHERE ACCOUNT_ID={$_SESSION['id']}";
            $result = $connection-> query($sql);
            if ($result-> num_rows > 0) {
                while ($row = $result-> fetch_assoc()) {
                    echo "<label>First Name:</label>";
                    //echo "<input type='text' name='first_name' size='40' title='Enter your first name' autocomplete='given-name' required value='". $row["FIRST_NAME"] ."><br>";
                    echo "<input type='text' name='first_name' size='40' title='Enter your first name' autocomplete='given-name' required><br>";
                    echo "<label>Last Name:</label>";
                    //echo "<input type='text' name='last_name' size='40' title='Enter your last name' autocomplete='family-name' required value='". $row["LAST_NAME"] ."><br>";
                    echo "<input type='text' name='last_name' size='40' title='Enter your last name' autocomplete='family-name' required><br>";
                    echo "<label>E-mail Address:</label>";
                    echo "<input type='text' name='order_email' size='40' title='Enter your email address' autocomplete='email' required><br>";
                    echo "<label>Phone Number:</label>";
                    echo "<input type='text' name='order_phone' size='40' title='Enter your phone number' autocomplete='tel' pattern='^(\d{3}-)?\d{3}-\d{4}$' required><br>";
                    echo "<label>Store Location:</label>";
                    echo "<select name='order_store' title='Select which store you would like to order from' required><option value='N/A'>N/A</option><option value='Mount Pleasant'>Mount Pleasant</option><option value='Ann Arbor'>Ann Arbor</option>";
                    echo "<option value='Pickney'>Pickney</option><option value='Flushing'>Flushing</option><option value='Colon'>Colon</option><option value='Climax'>Climax</option><option value='Setagaya-Ku'>Setagaya-Ku</option></select>";
                }
            }
        }
    }

    function getOrderInfo() {
        $first_name = $last_name = $email_address = $phone_number = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $first_name = trim($_POST["first_name"]);
            $last_name = trim($_POST["last_name"]);
            $order_email = trim($_POST["order_email"]);
            $order_phone = trim($_POST["order_phone"]);
            $order_location = trim($_POST["order_store"]);

            $_SESSION['orderStore'] = $order_location;

            $_SESSION['orderDetails'] = array($first_name, $last_name, $order_email, $order_phone);

        }
    }

    function checkIfSessionStore() {
        if(!isset($_SESSION["orderStore"])) {
            // Redirect user to order location page
            header("location: orderLocation.php");
        }
    }

    function displayMenu() {
        // Select menu itms
        $connection = $GLOBALS['connection'];
        $previousCategory = "";
        $sql = 'SELECT * FROM menu_items';
        $result = $connection-> query($sql);

        if ($result-> num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
                $currentCategory = $row["food_category"];
                
                if ($currentCategory != $previousCategory) {
                    echo "<tr id='". $row["food_category"] ."'><td>". $row["food_name"] ."</td><td>". $row["description"] ."</td><td>&#36;". $row["price"] ."</td><td><button name='". $row["food_name"] ."'value='". $row["price"] ."' onclick='addToCart(this.name,this.value)'>Add to Cart</button></td></tr>";
                    $previousCategory = $row["food_category"];
                }
                else {
                    echo "<tr><td>". $row["food_name"] ."</td><td>". $row["description"] ."</td><td>&#36;". $row["price"] ."</td><td><button name='". $row["food_name"] ."'value='". $row["price"] ."' onclick='addToCart(this.name,this.value)'>Add to Cart</button></td></tr>";
                    $previousCategory = $row["food_category"];
                }
            }
            echo "</table>";
        }
        else {
            echo "0 results";
        }
    }

    function displayUserInfo() {
        $orderDetails = $_SESSION['orderDetails'];
        $connection = $GLOBALS['connection'];
        echo "<h4>Ordering For:</h4>";
        echo "<p>$orderDetails[0] $orderDetails[1]</p>";
        echo "<p>$orderDetails[2]</p>";
        echo "<p>$orderDetails[3]</p>";

        echo "<p>Your selected items will be shown below</p>";
    }

?>