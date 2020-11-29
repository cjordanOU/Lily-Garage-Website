-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 07:03 AM
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
(12, 'omelet', 'Tire Blowout', 11.49, 0, 'Overstuffed Omelet with fresh grated cheese, vegetables, and meat of your choice.');

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
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Unique ID of the menu item.', AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
