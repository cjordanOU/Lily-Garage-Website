<?php
    // This file handles logic for most website functionality

    // dbConfig include
    require_once 'Includes/dbConfig.php';

    // Initialize Variables
    $useInfo = "";

    function orderInfoPrompt() {
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
            echo "<p>enter your info</p>";
        }
        else {
            echo "<h3>Would you like to use the information linked with your account to place an order at your preferred location? <i>(". htmlspecialchars($_SESSION["storeLocation"]) .")</i></h3>";
            echo "<form action='". htmlspecialchars($_SERVER['PHP_SELF']) ."' method='POST'>";
            echo "<input type='hidden' name='useStore' value='yes'><input type='submit' name='Submit' value='Yes, use the same information' title='Click here if you would like to use your stored information' class='fancyButton-1'></form>";
            echo "<form action='". htmlspecialchars($_SERVER['PHP_SELF']) ."' method='POST'>";
            echo "<input type='hidden' name='useStore' value='no'><input type='submit' name='Submit' value='No, use different information' title='Click here if you would like to use differing information from that stored on your account' class='fancyButton-1'></form>";
        }
    }

    function orderInfoConfirm() {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $useInfo = trim($_POST["useStore"]);

            if($useInfo == "yes") {
                echo "<p>test1</p>";
            }
            else {
                echo "<p>test2</p>";
            }
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
        $first_name = $last_name = $email_address = $phone_number = "test";
        $connection = $GLOBALS['connection'];
        echo "<h4>Ordering For:</h4>";
        echo "<p>$first_name $last_name</p>";
        echo "<p>$email_address</p>";
        echo "<p>$phone_number</p>";

        echo "<p>Your selected items will be shown below</p>";
    }

?>