-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 02:48 AM
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
-- Database: `llg-advanced`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `ACCOUNT_ID` int(11) NOT NULL COMMENT ' 	Auto Incrementing Account ID. ',
  `USERNAME` tinytext NOT NULL COMMENT 'The member''s username associated with the account.',
  `PASSWORD` tinytext NOT NULL COMMENT 'The member''s password. Hashed and salted for security purposes.',
  `EMAIL` tinytext NOT NULL COMMENT 'The member''s email address.',
  `PHONE` tinytext NOT NULL COMMENT 'The member''s phone number.',
  `FIRST_NAME` tinytext NOT NULL COMMENT 'The first name of the member.',
  `LAST_NAME` tinytext NOT NULL COMMENT 'The last name of the member.',
  `ADDRESS` tinytext NOT NULL COMMENT 'The member''s address.',
  `ACCOUNT_CREATED` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'What time the account was created at.',
  `PREFERRED_STORE` enum('N/A','Mount Pleasant','Ann Arbor','Pickney','Flushing','Colon','Climax','Setagaya-Ku') NOT NULL COMMENT 'The member''s preferred store location if applicable. If set, can be used to set user''s store automatically when ordering.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Stores the account information for each registered member.';

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ACCOUNT_ID`, `USERNAME`, `PASSWORD`, `EMAIL`, `PHONE`, `FIRST_NAME`, `LAST_NAME`, `ADDRESS`, `ACCOUNT_CREATED`, `PREFERRED_STORE`) VALUES
(1, 'test', '$2y$10$iXDzWOsV76jLjN1l3syl/eh8Bxs0wlXCvyz5cpvAJPaXQtbQRNS/a', 'test@test.com', '555-444-3332', 'Test', 'Tester', 'test address', '2021-04-28 04:19:32', 'Pickney'),
(2, 'func', '$2y$10$oNewoGDzDkdliiAylzr/rOjKYYJs6d/uAOLl7w0U/BS5oRKY.GcwC', 'func@test.com', '524-242-2341', 'func', 'testa', 'test address yo', '2021-04-28 04:22:01', 'Setagaya-Ku'),
(3, 'tesetauth', '$2y$10$gS8W9cIWzCj7x/rBoNlE3OD0utwXFCRFIm5XV0f8k4xsm26PGbK/i', 'sdccsano@ocanc.com', '525-243-6231', 'tesetauth', 'teafds', 'test aacsdsdc', '2021-04-28 04:43:35', 'Mount Pleasant'),
(4, 'jimmyn', '$2y$10$YTGFw9LSyOGS3UY.9CtljOTKDqQcHTLxilLDeyLDkWYaUYUO8wYXS', 'jimmy@neutron.com', '123-444-2241', 'jimmy', 'neutron', '242 Meme Road, Retroville', '2021-05-01 15:39:28', 'Pickney'),
(5, 'admin', '$2y$10$3PocMIQ/wBpU4d/AsFq2quSdLr8BIJD/Shjg7luDRqkcvnqLssyW.', 'admin@llg.com', '555-555-5555', 'Adminfirst', 'Adminlast', '2200 N Squirrel Road', '2021-05-01 16:13:09', 'Ann Arbor');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `CONTACT_ID` int(11) NOT NULL COMMENT 'ID of contact message.',
  `FNAME` int(11) NOT NULL COMMENT 'first name of message sender.',
  `LNAME` int(11) NOT NULL COMMENT 'last name of message sender.',
  `EMAIL` int(11) NOT NULL COMMENT 'the email of message sender.',
  `PTYPE` int(11) NOT NULL COMMENT 'phone type for message sender.',
  `PNUM` int(11) NOT NULL COMMENT 'phone number of message sender.',
  `REASON` tinytext NOT NULL COMMENT 'reason for message sent.',
  `LOCATION` tinytext NOT NULL COMMENT 'specific store location that message is for.',
  `MESSAGE` text NOT NULL COMMENT 'the message that was sent.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `ACCOUNT_ID` int(11) NOT NULL,
  `HIRED` date DEFAULT NULL COMMENT 'Date when employee was hired.',
  `WHEN_TERMINATED` date DEFAULT NULL COMMENT 'Date when employee terminated. Should be null if still employed.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Stores employee information.';

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`ACCOUNT_ID`, `HIRED`, `WHEN_TERMINATED`) VALUES
(5, '2021-04-20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `ATTEMPT` int(11) NOT NULL COMMENT 'Auto Incrementing attempt number.',
  `TIME` datetime DEFAULT NULL COMMENT 'What time login attempt was made.',
  `SUCCESS` tinyint(4) DEFAULT NULL COMMENT 'If login attempt was successful or not. (1=yes, 0-no)',
  `ACCOUNT_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`ATTEMPT`, `TIME`, `SUCCESS`, `ACCOUNT_ID`) VALUES
(1, '2021-04-28 04:56:42', 1, 1),
(2, '2021-04-28 04:58:50', 1, 1),
(3, '2021-04-28 05:01:03', 1, 1),
(4, '2021-04-28 05:01:28', 1, 1),
(5, '2021-04-28 05:04:01', 1, 1),
(6, '2021-04-28 05:06:08', 1, 1),
(7, '2021-04-28 07:50:43', 1, 1),
(8, '2021-04-29 07:13:04', 0, 1),
(9, '2021-04-29 07:13:39', 1, 1),
(10, '2021-05-01 14:17:15', 1, 1),
(11, '2021-05-01 15:27:38', 0, 1),
(12, '2021-05-01 15:28:41', 0, 1),
(13, '2021-05-01 15:31:27', 0, 1),
(14, '2021-05-01 15:33:08', 0, 1),
(15, '2021-05-01 15:34:08', 0, 1),
(16, '2021-05-01 15:34:13', 0, 1),
(17, '2021-05-01 15:34:54', 0, 1),
(18, '2021-05-01 15:35:01', 1, 1),
(19, '2021-05-01 15:38:02', 1, 1),
(20, '2021-05-01 15:39:32', 1, 4),
(21, '2021-05-01 16:04:21', 1, 4),
(22, '2021-05-01 16:05:44', 1, 4),
(23, '2021-05-01 16:07:45', 1, 4),
(24, '2021-05-01 16:09:38', 1, 4),
(25, '2021-05-01 16:13:13', 1, 5),
(26, '2021-05-01 16:16:00', 1, 5),
(27, '2021-05-01 16:16:34', 1, 1),
(28, '2021-05-01 16:16:42', 1, 5),
(29, '2021-05-01 16:17:36', 1, 5),
(30, '2021-05-01 16:18:07', 1, 5),
(31, '2021-05-01 16:20:52', 1, 5),
(32, '2021-05-01 16:29:16', 1, 5),
(33, '2021-05-01 16:53:59', 1, 5),
(34, '2021-05-01 17:14:24', 1, 5),
(35, '2021-05-01 18:10:22', 1, 4),
(36, '2021-05-01 18:37:09', 1, 5),
(37, '2021-05-01 18:40:30', 1, 5),
(38, '2021-05-02 11:45:10', 1, 5),
(39, '2021-05-02 11:52:34', 1, 5),
(40, '2021-05-02 12:38:17', 1, 5),
(41, '2021-05-02 12:41:48', 1, 5),
(42, '2021-05-02 17:41:37', 1, 5),
(43, '2021-05-03 18:20:00', 1, 5),
(44, '2021-05-03 18:26:22', 1, 5),
(45, '2021-05-06 15:22:03', 1, 5),
(46, '2021-05-13 19:11:23', 1, 5),
(47, '2021-05-13 19:50:20', 1, 5),
(48, '2021-05-24 05:33:55', 1, 5),
(49, '2021-06-05 19:26:16', 1, 5),
(50, '2021-06-05 19:33:38', 1, 5),
(51, '2021-06-05 20:15:06', 1, 5),
(52, '2021-06-05 20:15:21', 1, 5),
(53, '2021-06-05 20:24:03', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `food_id` int(4) NOT NULL COMMENT 'Unique ID of the menu item.',
  `food_category` char(40) NOT NULL COMMENT 'Category that the food is a part of.',
  `food_name` char(40) NOT NULL COMMENT 'Name of the food.',
  `price` float NOT NULL COMMENT 'Price of food in USD.',
  `is_specific` tinyint(1) NOT NULL COMMENT '1=Y,0=N (Default 0)',
  `description` text NOT NULL COMMENT 'Description of item.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`food_id`, `food_category`, `food_name`, `price`, `is_specific`, `description`) VALUES
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
(39, 'salads', 'Chefs Special', 7.99, 0, 'Spinach, romaine and iceberg lettuce, with tomatoes, onion, carrots, and mozzarella cheese. Served with your choice of meat, either chicken, turkey, or bacon.'),
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

-- --------------------------------------------------------

--
-- Table structure for table `store_locations`
--

CREATE TABLE `store_locations` (
  `STORE_ID` int(11) NOT NULL COMMENT 'Store ID.',
  `STORE_NAME` tinytext NOT NULL COMMENT 'Name of store.',
  `STORE_STREET` tinytext NOT NULL COMMENT 'Street that store is on.',
  `STORE_LOCATION` tinytext NOT NULL COMMENT 'Location of store.',
  `STORE_PHONE` tinytext NOT NULL COMMENT 'Phone number of store.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store_locations`
--

INSERT INTO `store_locations` (`STORE_ID`, `STORE_NAME`, `STORE_STREET`, `STORE_LOCATION`, `STORE_PHONE`) VALUES
(1, 'Ann Arbor', '514 Hiscock St', 'Ann Arbor, MI 48103', '(123) 456-7890'),
(2, 'Pickney', '4082 Patterson Lake Rd', 'Pinckney, MI 48169', '(234) 567-8910'),
(3, 'Mount Pleasant', '1217 S. Crapo St.', 'Mount Pleasant, MI 48858', '(012) 345-6789'),
(4, 'Flushing', '165 Boman St.', 'Flushing, MI 48433', '(345) 678-9012'),
(5, 'Colon', '129 W. State St.', 'Colon, MI 49040', '(456) 789-0123'),
(6, 'Climax', '126 W. Maple St.', 'Climax, MI 49034', '(567) 890-1234'),
(7, 'Setagaya-Ku', '26-3, Kamikitazawa 3-Chōme', 'Setagaya-Ku, Tokyo\r\nJapan 156-0057', '(678) 901-2345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ACCOUNT_ID`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`CONTACT_ID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ACCOUNT_ID`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`ATTEMPT`),
  ADD KEY `ACCOUNT_ID` (`ACCOUNT_ID`);

--
-- Indexes for table `store_locations`
--
ALTER TABLE `store_locations`
  ADD PRIMARY KEY (`STORE_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT ' 	Auto Incrementing Account ID. ', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `CONTACT_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID of contact message.';

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `ATTEMPT` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Auto Incrementing attempt number.', AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `store_locations`
--
ALTER TABLE `store_locations`
  MODIFY `STORE_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Store ID.', AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`ACCOUNT_ID`) REFERENCES `accounts` (`ACCOUNT_ID`);

--
-- Constraints for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD CONSTRAINT `login_attempts_ibfk_1` FOREIGN KEY (`ACCOUNT_ID`) REFERENCES `accounts` (`ACCOUNT_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
