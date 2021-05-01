<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once('Includes/metadata.php'); ?>

        <title>Menu - Lily's Lil' Garage</title>
        <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon">

        <!-- Styles -->
        <link href="style.css" rel="stylesheet">
    </head>

    <body>
        <?php
            require_once('Includes/webLogicHandler.php');
            displayHeader();
        ?>

        <main>
            <!-- Parallax Hero Image -->
            <div class="parallaxBG-small" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.801), transparent), url('Images/garageAnnArbor.jpg'); background-position: left top"></div>
            <div class="parallaxText2">
                <h2>Menu</h2>
            </div>

            <!-- ------ Menu Selection ------ -->
            <div>
                <nav class="menuBar">
                    <a href="#breakfast" title="Jump to our Breakfast Selection">Breakfast</a>
					<a href="#entrées" title="Jump to our Entrées selection">Entrées</a>
					<a href="#desserts" title="Jump to our Desserts Selection">Desserts</a>
					<a href="#appetizers" title="Jump to our Appetizers and Sides selection">Appetizers &amp; Sides</a>
                    <a href="#drinks" title="Jump to our Drinks Selection">Drinks</a>
					<a href="#specials" title="Jump to our Location Specials Selection">Specials</a>
                </nav>
            </div>
            <section class="menu">
                <div class="menuHeading">
                    <h2 id="breakfast">Breakfast</h2>
                    
                    <h3 class="noMarginBottom">Combos</h3>
                    <div class="menuRow">
                        <div class="menuCard">
                            <p><b>V8 Rumble Tumble <span class="price">$14.49</span></b></p>
                            <p class="menuDescription">8 stacked high pancakes with a large side of eggs, hash browns, 4 sausages, 4 slices of bacon, and four pieces of toast.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Rear-End Surprise <span class="price">$13.99</span></b></p>
                            <p class="menuDescription">12 inch stuffed breakfast burrito filled with beef, cheese, beans, green peppers, eggs, rolled within a pancake.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Getaway Driver <span class="price">$12.99</span></b></p>
                            <p class="menuDescription">2 Grilled cheese sandwiches filled with eggs, hash browns, bacon, with optional sides of either pancakes or an omelet.</p>
                        </div>
                    </div>

                    <h3 class="noMargin">Pancakes</h3>
                    <div class="menuRow">
                        <div class="menuCard">
                            <p><b>The 50 PSI Hotcakes <span class="price">$9.99</span></b></p>
                            <p class="menuDescription">Our signature buttermilk light and fluffy home-styled hotcakes that will melt your pains away.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Oil Change Slapjacks <span class="price">$11.49</span></b></p>
                            <p class="menuDescription">Rich chocolate chip slapjacks topped with our finest freshly melted Hershey’s chocolate.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>High Octane Flapjacks <span class="price">$11.99</span></b></p>
                            <p class="menuDescription">Super sweet flapjacks topped with fresh fruit of your choice and topped with caramel.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>WAP (Wet Amazing Pancakes) <span class="price">$10.49</span></b></p>
                            <p class="menuDescription">Fluffy pancakes drizzled with our home-styled glistening syrup made from our tree in the back.</p>
                        </div>
                    </div>

                    <h3 class="noMargin">Crepes</h3>
                    <div class="menuRow">
                        <div class="menuCard">
                            <p><b>Burnout Crepes <span class="price">$8.99</span></b></p>
                            <p class="menuDescription">Sweet buttermilk crepes topped with hershey’s chocolate and nutella.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Launch Control Crepes <span class="price">$9.99</span></b></p>
                            <p class="menuDescription">Light fluffy buttermilk crepes topped with whip cream and sweet cinnamon icing.</p>
                        </div>
                    </div>

                    <h3 class="noMarginTop">Omelets</h3>
                    <div class="menuRow">
                        <div class="menuCard">
                            <p><b>Drift King Omelet <span class="price">$10.49</span></b></p>
                            <p class="menuDescription">Our signature omelet filled with a cheese of your choice, ham, beef, turkey, green peppers, and onions.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Da Five-O <span class="price">$10.99</span></b></p>
                            <p class="menuDescription">Omelet stuffed with American cheese, Blue cheese, pork, red peppers, and onions with a side of donuts.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Tire Blowout <span class="price">$11.49</span></b></p>
                            <p class="menuDescription">Overstuffed Omelet with fresh grated cheese, vegetables, and meat of your choice.</p>
                        </div>
                    </div>
                </div>

                <div class="menuHeading">
                    <h2 id="entrées">Entrées</h2>
                    
                    <h3 class="noMarginBottom">Plates</h3>
                    <div class="menuRow">
                        <div class="menuCard">
                            <p><b>Bird in a Windshield <span class="price">$14.49</span></b></p>
                            <p class="menuDescription">Fried chicken breast on a bed of vinaigrette slaw.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Oil Change Slapjacks <span class="price">$14.99</span></b></p>
                            <p class="menuDescription">Chopped Pork plate, but shaped like stringy roadkill with two sides of choice.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>All-Terrain Platter <span class="price">$19.99</span></b></p>
                            <p class="menuDescription">A platter with a fish filet, freshly fried chicken, and perfectly grilled steak.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Grilled Chicken Platter <span class="price">$17.49</span></b></p>
                            <p class="menuDescription">Two pieces of exquisitely grilled chicken served with your choice of side.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>ABS (Angus Beef Steak) <span class="price">$18.49</span></b></p>
                            <p class="menuDescription">Angus steak platter served with a baked potato and steak sauce.</p>
                        </div>
                    </div>

                    <h3 class="noMarginBottom">Burgers &amp; Handhelds</h3>
                    <div class="menuRow">
                        <div class="menuCard">
                            <p><b>Radiator Burger <span class="price">$76.99</span></b></p>
                            <p class="menuDescription">½ Pound burger with A5 Wagyu Japanese Beef, topped with lettuce, onion, tomato, and pickle.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>4-Cylinder/6-Cylinder Sliders <span class="price">$9.50|4 - $14.00|6</span></b></p>
                            <p class="menuDescription">4 or 6 sliders topped with your choice of cheese, condements, vegetables and sauteed onion.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Grilled Chicken Sandwich <span class="price">$15.49</span></b></p>
                            <p class="menuDescription">Chicken grilled to perfection served on a bun with lettuce and tomato.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>The Alternator Fish Sandwich <span class="price">$14.99</span></b></p>
                            <p class="menuDescription">Breaded fish filet served on a toasted bun with made in-house tartar sauce.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>BMT (Big Mack Truck) <span class="price">$16.49</span></b></p>
                            <p class="menuDescription">Big Meat trio (Burger, pulled pork, bacon) Bbq sauce, and onion rings.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Full Throttle Turkey Sandwich <span class="price">$14.99</span></b></p>
                            <p class="menuDescription">Mesquite Smoked turkey sandwich with a Chipotle Aioli.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Monster Truck Burger <span class="price">$16.99</span></b></p>
                            <p class="menuDescription">⅓ pound sirloin burger, Kaiser Roll, Caramelized onions, Tomatoes, and arugula topped with chipotle mayo and blue cheese crumbles.</p>
                        </div>
                    </div>

                    <h3 class="noMarginBottom">Pastas</h3>
                    <div class="menuRow">
                        <div class="menuCard">
                            <p><b>Bird in a Windshield <span class="price">$14.49</span></b></p>
                            <p class="menuDescription">Fried chicken breast on a bed of vinaigrette slaw.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Oil Change Slapjacks <span class="price">$14.99</span></b></p>
                            <p class="menuDescription">Chopped Pork plate, but shaped like stringy roadkill with two sides of choice.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>All-Terrain Platter <span class="price">$19.99</span></b></p>
                            <p class="menuDescription">A platter with a fish filet, freshly fried chicken, and perfectly grilled steak.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Grilled Chicken Platter <span class="price">$17.49</span></b></p>
                            <p class="menuDescription">Two pieces of exquisitely grilled chicken served with your choice of side.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>ABS (Angus Beef Steak) <span class="price">$18.49</span></b></p>
                            <p class="menuDescription">Angus steak platter served with a baked potato and steak sauce.</p>
                        </div>
                    </div>

                    <h3 class="noMarginBottom">Wraps</h3>
                    <div class="menuRow">
                        <div class="menuCard">
                            <p><b>Amphibious Special <span class="price">$15.99</span></b></p>
                            <p class="menuDescription">Surf and turf pasta alfredo with shrimp and chicken.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Pasta Marinara <span class="price">$12.99</span></b></p>
                            <p class="menuDescription">Classic spaghetti with marinara sauce. Add Meatballs for extra. +$1.99</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Grilled Chicken Alfredo <span class="price">$15.49</span></b></p>
                            <p class="menuDescription">Freshly grilled chicken mixed in a pasta alfredo.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Oil Change <span class="price">$15.99</span></b></p>
                            <p class="menuDescription">Squid Ink Pasta with a scallop white wine sauce.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Piston Pasta <span class="price">$13.99</span></b></p>
                            <p class="menuDescription">Rotelle noodles served with a creamy butter sauce.</p>
                        </div>
                    </div>
                </div>

                <div class="menuHeading">
                    <h2 id="desserts">Desserts</h2>
                    
                    <h3 class="noMarginBottom">Desserts</h3>
                    <div class="menuRow">
                        <div class="menuCard">
                            <p><b>Stoplight Brownies <span class="price">$5.49</span></b></p>
                            <p class="menuDescription">Three delicious homemade Brownies with red, yellow, and green m&amp;ms on top.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Spare Tire <span class="price">$3.99</span></b></p>
                            <p class="menuDescription">A large chocolate covered donut with white frosting.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Construction Cone <span class="price">$4.99</span></b></p>
                            <p class="menuDescription">Your choice of ice cream served in an orange waffle cone.</p>
                        </div>
                    </div>
                <div>

                <div class="menuHeading">
                    <h2 id="appetizers">Appetizers &amp; Sides</h2>
                    
                    <h3 class="noMarginBottom">Finger Foods</h3>
                    <div class="menuRow">
                        <div class="menuCard">
                            <p><b>Mustang Mozzarella Sticks <span class="price">$8.99</span></b></p>
                            <p class="menuDescription">Deep-fried mozzarella coated with a nice golden breading, fried to absolute perfection just the way it should be.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Aero Wings <span class="price">$3.99</span></b></p>
                            <p class="menuDescription">6 wings of your choice, either boneless or bone-in. Flavors include Mango Habanero, Honey BBQ, Hot BBQ, Parm and Garlic, and Buffalo.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Engine Fried Pickles <span class="price">$4.99</span></b></p>
                            <p class="menuDescription">Sliced dill pickles breaded and fried, served with your choice of ranch or chipotle ranch.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Crusin&#39; Chips and Queso <span class="price">$4.99</span></b></p>
                            <p class="menuDescription">A nice and simple white queso with peppers, that is served with our home-made tortilla chips.</p>
                        </div>
                    </div>

                    <h3 class="noMarginBottom">Salads</h3>
                    <div class="menuRow">
                        <div class="menuCard">
                            <p><b>Chef's Special <span class="price">$7.99</span></b></p>
                            <p class="menuDescription">Spinach, romaine and iceberg lettuce, with tomatoes, onion, carrots, and mozzarella cheese. Served with your choice of meat, either chicken, turkey, or bacon.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>The Chevy Caesar <span class="price">$8.49</span></b></p>
                            <p class="menuDescription">Romaine lettuce, spinach, tomatoes, egg, parmesan cheese, tossed in caesar dressing.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Southwest Chicken Avocado <span class="price">$8.99</span></b></p>
                            <p class="menuDescription">Romaine lettuce, spinach, avocado, corn salsa, tomatoes, onion, chicken and chipotle vinaigrette.</p>
                        </div>
                    </div>

                    <div class="menuHeading">
                    <h2 id="drinks">Drinks</h2>
                    
                    <h3 class="noMarginBottom">Non-Alcoholic Beverages</h3>
                    <div class="menuRow">
                        <div class="menuCard">
                            <p><b>Radiator Water <span class="price">No Charge</span></b></p>
                            <p class="menuDescription">As simple as it gets. Chilled water served with ice cubes. With or without lemon.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Carbureted Coffee <span class="price">$1.99</span></b></p>
                            <p class="menuDescription">A hot cup of coffee served with your choices of creamer and sugar.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Superspeed Soft Drink <span class="price">$2.49</span></b></p>
                            <p class="menuDescription">Any soft drink you would like, we have.</p>
                        </div>
                    </div>

                    <h3 class="noMarginBottom">Alcoholic Beverages</h3>
                    <div class="menuRow">
                        <div class="menuCard">
                            <p><b>Chef's Special <span class="price">$4.99</span></b></p>
                            <p class="menuDescription">A hard apple cider with a splash of vodka added. Served with ice.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>The Chevy Caesar <span class="price">$3.99</span></b></p>
                            <p class="menuDescription">Vodka, ginger beer, and fresh lime juice. Served with a lime.</p>
                        </div>
                        <div class="menuCard">
                            <p><b>Backseat Driver <span class="price">$4.99</span></b></p>
                            <p class="menuDescription">Patron, Honey syrup, mango puree, lemon juice, and a hint of orange juice. Served with a lemon.</p>
                        </div>
                    </div>
                <div>
            </section>
            
        </main>
        <?php displayFooter(); ?>
    </body>
</html>