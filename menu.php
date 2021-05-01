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
                    <h2>Entrées</h2>
                    
                    <h3 class="noMarginBottom">Plates</h3>
                    <div class="menuRow">
                        <div class="menuCard">
                            <p><b>Bird in a Windshield <span class="price">$14.49</span></b></p>
                            <p class="menuDescription">Fried chicken breast on a bed of vinaigrette slaw</p>
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
                </div>
            </section>
            
        </main>
        <?php displayFooter(); ?>
    </body>
</html>