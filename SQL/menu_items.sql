-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 10:02 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `llg`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(4) NOT NULL COMMENT 'Unique ID of the menu item.',
  `food_category` char(40) NOT NULL COMMENT 'Category that the food is a part of.',
  `food_name` char(40) NOT NULL COMMENT 'Name of the food.',
  `price` float NOT NULL COMMENT 'Price of food in USD.',
  `is_specific` tinyint(1) NOT NULL COMMENT '1=Y,0=N (Default 0)',
  `description` text NOT NULL COMMENT 'Description of item.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `food_category`, `food_name`, `price`, `is_specific`, `description`) VALUES
(1, 'combos', 'V8 Rumble Tumble', 14.49, 0, '8 stacked high pancakes with a large side of eggs, hash browns, 4 sausages, 4 slices of bacon, and four pieces of toast.'),
(2, 'combos', 'Rear-End Surprise', 13.99, 0, '12 inch stuffed breakfast burrito filled with beef, cheese, beans, green peppers, eggs, rolled within a pancake.'),
(3, 'combos', 'Getaway Driver', 13.99, 0, '2 Grilled cheese sandwiches filled with eggs, hash browns, bacon, with optional sides of either pancakes or an omelet.'),
(4, 'pancakes', 'The 50 PSI Hotcakes', 9.99, 0, 'Our signature buttermilk light and fluffy home-styled hotcakes that will melt your pains away. '),
(5, 'pancakes', 'Oil Change Slapjacks', 11.49, 0, 'Rich chocolate chip slapjacks topped with freshly melted Hershey’s chocolate.'),
(6, 'pancakes', 'High Octane Flapjacks', 11.99, 0, 'Super sweet flapjacks topped with fresh fruit of your choice and topped with caramel.'),
(7, 'pancakes', 'WAP (Wet Amazing Pancakes)', 10.49, 0, 'Drizzled with home-styled glistening syrup made from our tree in the back. '),
(8, 'crepes', 'Burnout Crepes', 8.99, 0, 'Sweet buttermilk crepes topped with hershey’s chocolate and nutella.'),
(9, 'crepes', 'Launch Control Crepes', 9.99, 0, 'Light fluffy buttermilk crepes topped with whip cream and sweet cinnamon icing.'),
(10, 'omelet', 'Drift King Omelet', 10.49, 0, 'Our signature omelet filled with a cheese of your choice, ham, beef, turkey, green peppers, and onions. '),
(11, 'omelet', 'Da Five-O', 10.99, 0, 'Omelet stuffed with American cheese, Blue cheese, pork, red peppers, and onions with a side of donuts.'),
(12, 'omelet', 'Tire Blowout', 11.49, 0, 'Overstuffed Omelet with fresh grated cheese, vegetables, and meat of your choice.'),
(13, 'plates', 'Bird in a Windshield', 14.49, 0, 'Fried chicken breast on a bed of vinaigrette slaw.'),
(14, 'plates', 'Roadkill Special', 14.99, 0, 'Chopped Pork plate, but shaped like stringy roadkill with two sides of choice.'),
(15, 'plates', 'All-Terrain Platter', 19.99, 0, 'A platter with a fish filet, freshly fried chicken, and perfectly grilled steak.'),
(16, 'plates', 'Grilled chicken platter', 17.49, 0, 'Two pieces of exquisitely grilled chicken served with your choice of side.'),
(17, 'plates', 'ABS (Angus Beef Steak)', 18.49, 0, 'Angus steak platter served with a baked potato and steak sauce.'),
(18, 'handheld', 'Radiator Burger', 76.99, 0, '½ Pound burger with A5 Wagyu Japanese Beef, topped with lettuce, onion, tomato, and pickle.'),
(19, 'handheld', '4-Cylinder/6-Cylinder Sliders', 9.49, 0, '4/6 Sliders topped with your choice of cheese and sauteed onion. ($13.99 for 6)'),
(20, 'handheld', 'Grilled Chicken Sandwich', 15.49, 0, 'Chicken grilled to perfection served on a bun with lettuce and tomato.'),
(21, 'handheld', 'The Alternator Fish Sandwich', 14.99, 0, 'Breaded fish filet served on a toasted bun with made in-house tartar sauce.'),
(22, 'handheld', 'BMT (Big Mack Truck)', 16.49, 0, 'Big Meat trio (Burger, pulled pork, bacon) Bbq sauce, and onion rings.'),
(23, 'handheld', 'Full Throttle Turkey Sandwich', 14.99, 0, 'Mesquite Smoked turkey sandwich with a Chipotle Aioli.'),
(24, 'handheld', 'Monster Truck Burger', 16.99, 0, '⅓ pound sirloin burger, Kaiser Roll, Caramelized onions, Tomatoes, and arugula topped with chipotle mayo and blue cheese crumbles.'),
(25, 'pastas', 'Amphibious Special', 15.99, 0, 'Surf and turf pasta alfredo with shrimp and chicken.'),
(26, 'pastas', 'Pasta Marinara', 12.99, 0, 'Classic spaghetti with marinara sauce. Add Meatballs for extra. +$1.99'),
(27, 'pastas', 'Grilled Chicken Alfredo', 15.49, 0, 'Freshly grilled chicken mixed in a pasta alfredo.'),
(28, 'pastas', 'Oil Change', 15.99, 0, 'Squid Ink Pasta with a scallop white wine sauce.'),
(29, 'pastas', 'Piston Pasta', 13.99, 0, 'Rotelle noodles served with a creamy butter sauce.'),
(30, 'wraps', 'Axle Wrap', 11.99, 0, 'Grilled chicken wrap with shredded cheese, lettuce, onion, and your dressing of your choice.'),
(31, 'wraps', 'Tire Iron', 12.99, 0, 'Steak wrap with lettuce, tomato, onion, and spicy ranch dressing.'),
(32, 'wraps', 'Caesar Special', 11.99, 0, 'Grilled chicken wrap with lettuce, shredded parmesan cheese, and caesar salad dressing.'),
(33, 'wraps', 'Lot Lizard', 13.99, 0, 'Corned beef, swiss cheese, thousand island, turkey, pressed flat.'),
(34, 'wraps', '16-Wheeler', 14.99, 0, 'Stuffed full of chicken, ham, turkey, salami, served with all the fixins.'),
(35, 'appetizers', 'Mozzarella Sticks', 8.99, 0, 'Mozzarella with a nice golden breading, fried to perfection.'),
(36, 'appetizers', 'Wings', 5.49, 0, '6 wings of your choice, either boneless or bone-in. Flavors include Mango Habanero, Honey BBQ, Hot BBQ, Parm and Garlic, and Buffalo.'),
(37, 'appetizers', 'Deep Fried Pickles', 7.99, 0, 'Sliced dill pickles breaded and fried, served with your choice of ranch or chipotle ranch.'),
(38, 'appetizers', 'Chips and Queso', 5.99, 0, 'White queso with peppers, served with tortilla chips.'),
(39, 'salads', 'Chef\'s Special', 7.99, 0, 'Spinach, romaine and iceberg lettuce, with tomatoes, onion, carrots, and mozzarella cheese. Served with your choice of meat, either chicken, turkey, or bacon.'),
(40, 'salads', 'Caesar', 8.49, 0, 'Romaine lettuce, spinach, tomatoes, egg, parmesan cheese, tossed in caesar dressing.'),
(41, 'salads', 'Southwest Chicken Avocado', 8.99, 0, 'Romaine lettuce, spinach, avocado, corn salsa, tomatoes, onion, chicken and chipotle vinaigrette.'),
(42, 'non_alc', 'Radiator Water', 0, 0, 'As simple as it gets. Chilled water served with ice cubes. With or without lemon.'),
(43, 'non_alc', 'Soft Drinks', 2.49, 0, 'Any soft drink you would like, we have.'),
(44, 'non_alc', 'Carbureted Coffee', 1.99, 0, 'A hot cup of coffee served with your choices of creamer and sugar.'),
(45, 'alc', '110 Octane Cider', 4.99, 0, 'A hard apple cider with a splash of vodka added. Served with ice.'),
(46, 'alc', 'E85 Special', 3.99, 0, 'Vodka, ginger beer, and fresh lime juice. Served with a lime.'),
(47, 'alc', 'Backseat Driver', 4.99, 0, 'Patron, Honey syrup, mango puree, lemon juice, and a hint of orange juice. Served with a lemon.'),
(48, 'desserts', 'Stoplight Brownies', 5.99, 0, 'Brownies with red, yellow, and green m&ms on top.'),
(49, 'desserts', 'Spare Tire', 3.99, 0, 'Chocolate covered donut with white frosting.'),
(50, 'desserts', 'Construction Cone', 4.99, 0, 'Your choice of ice cream served in an orange waffle cone.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Unique ID of the menu item.', AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
