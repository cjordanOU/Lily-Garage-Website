<!DOCTYPE html>
<html> 
    <head>
        <!-- Webpage Metadata-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Lily's Lil' Garage, A good place to get some good food.">
        <meta name="keywords" content="Lily's Lil' Garage, Lily's Garage, Lily's Little Garage, Restaurant, Menu, Food">
        <meta name="author" content="Jerrod Dutcher, Cameron Jordan, James Moseley, Trent Toyryla, Alden Metzmaker">
        <meta name="theme-color" content="#43ccff">

        <!-- Webpage Title -->
        <title>Lily's Lil' Garage - Menu</title>

        <!-- Website Icon -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        
        <!-- Styles -->
        <link href="style.css" rel="stylesheet">
        
        <!-- Scripts-->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        
        <!-- Scripts -->
        <script src="Scripts/mainScripts.js"></script> 
    </head>

    <body>
        <!-- ------ ------ Webpage Header ------ ------ -->
        <?php include('header.php'); ?>

        <!-- ------ ------ Main Webpage Content ------ ------ -->
        <main>
            <!-- Main Large Header -->
            <h1>The Menu</h1>
            
            <!-- ------ Dinner Menu ------ -->
            <div class="menuItem">
                <h2>Dinner</h2>

                <!-- Entrées -->
                <h3>Entrées</h3>
                <ul>
                    <li>All-Terrain Platter  <span class="price">$19.99</span></li>
                    <p>A platter with a fish filet, freshly fried chicken, and perfectly grilled steak.</p>

                    <li>Grilled chicken platter  <span class="price">$17.49</span></li>
                    <p>Two pieces of exquisitely grilled chicken served with your choice of side.</p>

                    <li>ABS (Angus Beef Steak)  <span class="price">$18.49</span></li>
                    <p>Angus steak platter served with a baked potato and steak sauce.</p>
					<img src = "Images/ABS.jpg" alt = "ABS" style="width:15%; height:10%;">
                </ul>

                <!-- Bugers/Handhelds -->
                <h3>Burgers & Handhelds</h3>
                <ul>
                    <li>Radiator Burger  <span class="price">$76.99</span></li>
                    <p>&frac12; Pound burger with A5 Wagyu Japanese Beef, topped with lettuce, onion, tomato, and pickle.</p>
                    <img src = "Images/RadiatorBurger.jpg" alt = "RadiatorBurger" style="width:15%; height:10%;">

                    <li>4-Cylinder/6-Cylinder Sliders  <span class="price">$9.50|4 - $14.00|6</span></li>
                    <p>4/6 Sliders topped with your choice of cheese and sauteed onion.</p>
                    <img src = "Images/Sliders.jpg" alt = "Sliders" style="width:15%; height:10%;">
                    
					<li>Grilled Chicken Sandwich  <span class="price">$15.49</span></li>
                    <p>Chicken grilled to perfection served on a bun with lettuce and tomato.</p>

                    <li>The Alternator Fish Sandwich  <span class="price">$14.99</span></li>
                    <p>Breaded fish filet served on a toasted bun with made in-house tartar sauce.</p>
                </ul>

                <!-- Pasta-->
                <h3>Pastas</h3>
                <ul>
                    <li>Amphibious Special  <span class="price">$15.99</span></li>
                    <p>Surf and turf pasta alfredo with shrimp and chicken.</p>
                    <img src = "Images/AmphibiousSpecial.jpg" alt = "AmphibiousSpecial" style="width:15%; height:10%;">
					
                    <li>Pasta Marinara  <span class="price">$12.99</span></li>
                    <p>Classic spaghetti with marinara sauce. Add Meatballs for extra. +$1.99</p>

                    <li>Grilled Chicken Alfredo  <span class="price">$15.49</span></li>
                    <p>Freshly grilled chicken mixed in a pasta alfredo.</p>
                </ul>

                <!-- Wraps -->
                <h3>Wraps</h3>
                <ul>
                    <li>Axle Wrap  <span class="price">$11.99</span></li>
                    <p>Grilled chicken wrap with shredded cheese, lettuce, onion, and your dressing of your choice.</p>
                    <img src = "Images/AxleWrap.jpg" alt = "AxleWrap" style="width:15%; height:10%;">
					
                    <li>Tire Iron  <span class="price">$12.99</span></li>
                    <p>Steak wrap with lettuce, tomato, onion, and spicy ranch dressing.</p>
                    
                    <li>Caesar Special  <span class="price">$11.99</span></li>
                    <p>Grilled chicken wrap with lettuce, shredded parmesan cheese, and caesar salad dressing.</p>
                </ul>
            </div>

            <!-- ------ Appetizers and Sides Menu ------ -->
            <div class="menuItem">
                <h2>Appetizers & Sides</h2>

                <!-- Finger Foods -->
                <h3>Example Section</h3>
                <ul>
                    <li>Mozzarella Sticks  <span class="price">$8.99</span></li>
                    <p>Mozzarella with a nice golden breading, fried to perfection.</p>

					<li>Wings  <span class="price">$5.49</span></li>
                    <p>6 wings of your choice, either boneless or bone-in. Flavors include Mango Habanero, Honey BBQ, Hot BBQ, Parm and Garlic, and Buffalo.</p>

                    <li>Deep Fried Pickles  <span class="price">$7.99</span></li>
                    <p>Sliced dill pickles breaded and fried, served with your choice of ranch or chipotle ranch.</p>
                    <img src = "Images/FriedPickles.jpg" alt = "FriedPickles" style="width:15%; height:10%;">
					
                    <li>Chips and Queso  <span class="price">$5.99</span></li>
                    <p>White queso with peppers, served with tortilla chips.</p>
                </ul>

                <!-- Salads -->
                <h3>Salads</h3>
                <ul>
                    <li>Chef's Special  <span class="price">$7.99</span></li>
                    <p>Spinach, romaine and iceberg lettuce, with tomatoes, onion, carrots, and mozzarella cheese. Served with your choice of meat, either chicken, turkey, or bacon.</p>

                    <li>Caesar  <span class="price">$8.49</span></li>
                    <p>Romaine lettuce, spinach, tomatoes, egg, parmesan cheese, tossed in caesar dressing.</p>
                    <img src = "Images/CaesarSalad.jpg" alt = "CaesarSalad" style="width:15%; height:10%;">
                    
					<li>Southwest Chicken Avocado  <span class="price">$8.99</span></li>
                    <p>Romaine lettuce, spinach, avocado, corn salsa, tomatoes, onion, chicken and chipotle vinaigrette.</p>
                </ul>
            </div>

            <!-- ------ Drinks and Desserts Menu ------  -->
            <div class="menuItem">
                <h2>Drinks & Desserts</h2>

                <!-- Non-Alcoholic Beverages -->
                <h3>Non-Alcoholic Beverages</h3>
                <ul>
                    <li>Radiator Water  <span class="price">No Charge</span></li>
                    <p>As simple as it gets. Chilled water served with ice cubes. With or without lemon.</p>

                    <li>Carbureted Coffee  <span class="price">$1.99</span></li>
                    <p>A hot cup of coffee served with your choices of creamer and sugar.</p>
                    <img src = "Images/Coffee.jpg" alt = "Coffee" style="width:15%; height:10%;">

                    <li>Soft Drinks  <span class="price">$2.49</span></li>
                    <p>Any soft drink you would like, we have.</p>
                </ul>

                <!-- Alcoholic Beverages -->
                <h3>Alcoholic Beverages</h3>
                <ul>
                    <li>110 Octane Cider  <span class="price">$4.99</span></li>
                    <p>A hard apple cider with a splash of vodka added. Served with ice.</p>

                    <li>E85 Special  <span class="price">$3.99</span></li>
                    <p>Vodka, ginger beer, and fresh lime juice. Served with a lime.</p>

                    <img src = "Images/E85Special.jpg" alt = "E85Special" style="width:15%; height:10%;">
                    <li>Backseat Driver  <span class="price">$4.99</span></li>
                    <p>Patron, Honey syrup, mango puree, lemon juice, and a hint of orange juice. Served with a lemon.</p>
                </ul>

                <!-- Desserts -->
                <h3>Desserts</h3>
                <ul>
                    <li>Stoplight Brownies  <span class="price">$5.99</span></li>
                    <p>Brownies with red, yellow, and green m&ms on top.</p>

                    <li>Spare Tire  <span class="price">$3.99</span></li>
                    <p>Chocolate covered donut with white frosting.</p>
                    <img src = "Images/Donuts.jpg" alt = "Donuts" style="width:15%; height:10%;">

                    <li>Construction Cone  <span class="price">$4.99</span></li>
                    <p>Your choice of ice cream served in an orange waffle cone.</p>
                </ul>
            </div>

            <!-- ------ Lunch Menu ------ -->
            <div class="menuItem">
                <h2>Lunch</h2>

                <!-- Plates -->
                <h3>Plates</h3>
                <ul>
                    <li>Bird in a Windshield  <span class="price">$14.49</span></li>
                    <p>Fried chicken breast on a bed of vinaigrette slaw</p>

                    <li>Roadkill Special  <span class="price">$14.99</span></li>
                    <p>Chopped Pork plate, but shaped like stringy roadkill with two sides of choice.</p>
                    <img src = "Images/RoadkillSpecial.jpg" alt = "RoadkillSpecial" style="width:15%; height:10%;">
                </ul>

                <!-- Burgers/Handhelds -->
                <h3>Burgers & Handhelds</h3>
                <ul>
                    <li>BMT (Big Mack Truck)  <span class="price">$16.49</span></li>
                    <p>Big Meat trio (Burger, pulled pork, bacon) Bbq sauce, and onion rings.</p>

                    <li>Full Throttle Turkey Sandwich  <span class="price">$14.99</span></li>
                    <p>Mesquite Smoked turkey sandwich with a Chipotle Aioli.</p>
                    <img src = "Images/TurkeySandwich.jpg" alt = "TurkeySandwich" style="width:15%; height:10%;">
					
                    <li>Monster Truck Burger  <span class="price">$16.99</span></li>
                    <p>&frac13; pound sirloin burger, Kaiser Roll, Caramelized onions, Tomatoes, and arugula topped with chipotle mayo and blue cheese crumbles.</p>
                </ul>

                <!-- Pasta -->
                <h3>Pasta</h3>
                <ul>
                    <li>Oil Change  <span class="price">$15.99</span></li>
                    <p>Squid Ink Pasta with a scallop white wine sauce.</p>
                    <img src = "Images/OilChange.jpg" alt = "OilChange" style="width:15%; height:10%;">

                    <li>Piston Pasta  <span class="price">$13.99</span></li>
                    <p>Rotelle noodles served with a creamy butter sauce.</p>
                </ul>

                <!-- Wraps -->
                <h3>Wraps</h3>
                <ul>
                    <li>Lot Lizard  <span class="price">$13.99</span></li>
                    <p>Corned beef, swiss cheese, thousand island, turkey, pressed flat.</p>
                    <img src = "Images/LotLizard.jpg" alt = "LotLizard" style="width:15%; height:10%;">

                    <li>16-Wheeler  <span class="price">$14.99</span></li>
                    <p>Stuffed full of chicken, ham, turkey, salami, served with all the fixins.</p>
                </ul>
            </div>

            <!-- ------ Breakfast Menu ------ -->
            <div class="menuItem">
                <h2>Breakfast</h2>

                <!-- Combos -->
                <h3>Combos</h3>
                <ul>
                    <li>V8 Rumble Tumble  <span class="price">$14.49</span></li>
                    <p>8 stacked high pancakes with a large side of eggs, hash browns, 4 sausages, 4 slices of bacon, and four pieces of toast.</p>

                    <li>Rear-End Surprise  <span class="price">$13.99</span></li>
                    <p>12 inch stuffed breakfast burrito filled with beef, cheese, beans, green peppers, eggs, rolled within a pancake.</p>
                    <img src = "Images/RearEndSurprise.jpg" alt = "RearEndSurprise" style="width:15%; height:10%;">
                    
                    
                    <li>Getaway Driver  <span class="price">$12.99</span></li>
                    <p>2 Grilled cheese sandwiches filled with eggs, hash browns, bacon, with optional sides of either pancakes or an omelet.</p>
                    <img src="Images/GetawayDriver.jpg" alt ="GetawayDriver" style="width:15%; height:10%;">
				</ul>

                <!-- Pancakes -->
                <h3>Pancakes</h3>
                <ul>
                    <li>The 50 PSI Hotcakes  <span class="price">$9.99</span></li>
                    <p>Our signature buttermilk light and fluffy home-styled hotcakes that will melt your pains away.</p>

                    <li>Oil Change Slapjacks  <span class="price">$11.49</span></li>
                    <p>Rich chocolate chip slapjacks topped with freshly melted Hershey’s chocolate.</p>

                    <li>High Octane Flapjacks  <span class="price">$11.99</span></li>
                    <p>Super sweet flapjacks topped with fresh fruit of your choice and topped with caramel.</p>
                    <img src = "Images/HighOctaneFlapjacks.jpg" alt = "HighOctaneFlapjacks" style="width:15%; height:10%;">
					
                    <li>WAP (Wet Amazing Pancakes)  <span class="price">$10.49</span></li>
                    <p>Drizzled with home-styled glistening syrup made from our tree in the back.</p>
                </ul>

                <!-- Crepes -->
                <h3>Crepes</h3>
                <ul>
                    <li>Burnout Crepes  <span class="price">$8.99</span></li>
                    <p>Sweet buttermilk crepes topped with hershey’s chocolate and nutella.</p>

                    <li>Launch Control Crepes  <span class="price">$9.99</span></li>
                    <p>Light fluffy buttermilk crepes topped with whip cream and sweet cinnamon icing.</p>
                    <img src = "Images/Crepes.jpg" alt = "Crepes" style="width:15%; height:10%;">
                </ul>

                <!-- Omelets -->
                <h3>Omelets</h3>
                <ul>
                    <li>Drift King Omelet  <span class="price">$10.49</span></li>
                    <p>Our signature omelet filled with a cheese of your choice, ham, beef, turkey, green peppers, and onions.</p>
                    <img src = "Images/Omelet.jpg" alt = "Omelet" style="width:15%; height:10%;">

                    <li>Da Five-O  <span class="price">$10.99</span></li>
                    <p>Omelet stuffed with American cheese, Blue cheese, pork, red peppers, and onions with a side of donuts.</p>

                    <li>Tire Blowout  <span class="price">$11.49</span></li>
                    <p>Overstuffed Omelet with fresh grated cheese, vegetables, and meat of your choice.</p>
                </ul>
                
            </div>
        </main>

        <!-- ------ ------ Webpage Footer ------ ------ -->
        <?php include('footer.php'); ?>
    </body>
</html>
