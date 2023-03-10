-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 07:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `cat_name`) VALUES
(1, 'Meat'),
(2, 'Chicken'),
(3, 'Fish'),
(4, 'Drink'),
(5, 'Kids Meal'),
(6, 'Snackes'),
(7, 'Dessert');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sub` varchar(200) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `sub`, `msg`) VALUES
(10, 'shaimaa', 'freelance.ss22@gmail.com', 'Hello', 'Hi How Are You???'),
(11, 'shaimaa', 'freelance.ss22@gmail.com', 'Hello', 'Hi How Are You???'),
(12, 'shaimaa', 'freelance.ss22@gmail.com', 'Hello', 'Hi How Are You???'),
(13, 'shaimaa', 'freelance.ss22@gmail.com', 'Hello', 'Hi How Are You???'),
(14, 'shaimaa', 'freelance.ss22@gmail.com', 'Hello', 'Hi How Are You???');

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE `meal` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `meal_name` varchar(200) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` varchar(20) NOT NULL,
  `det` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`id`, `cat_id`, `meal_name`, `img`, `price`, `det`) VALUES
(23, 1, 'Beef', 'img/beef.jpg', '200', 'Beef Beef Beef'),
(33, 2, 'Chicken', 'img/co.jpg', '55', 'Chicken Chicken'),
(34, 3, 'Fish', 'img/fish.jpg', '77', 'Fish Fish'),
(35, 1, 'Beef', 'img/beef.jpg', '210', 'Beef Beef'),
(36, 1, 'Beef', 'img/beef.jpg', '210', 'Beef Beef'),
(50, 3, 'Fish', 'img/fish.jpg', '88', 'Fish Fish'),
(51, 3, 'Fish', 'img/fish.jpg', '88', 'Fish Fish'),
(52, 3, 'Fish', 'img/fish.jpg', '88', 'Fish Fish'),
(53, 4, 'Drink', 'img/ch.jpg', '12', 'Drink'),
(54, 4, 'Drink', 'img/ch.jpg', '12', 'Drink'),
(62, 5, 'Happy Meal', 'img/hm-chicken-burger-with-fries_1-4-product-tile-desktop.jpeg', '77', 'Kids Meal Kids Meal'),
(63, 5, 'Happy Meal', 'img/hm-chicken-burger-with-fries_1-4-product-tile-desktop.jpeg', '130', 'Kids Meal'),
(64, 5, 'Happy Meal', 'img/hm-chicken-burger-with-fries_1-4-product-tile-desktop.jpeg', '130', 'Kids Meal');

-- --------------------------------------------------------

--
-- Table structure for table `my_order`
--

CREATE TABLE `my_order` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `quantity` int(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `type` enum('user','admin') NOT NULL,
  `password` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `regstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `type`, `password`, `group_id`, `status`, `regstatus`) VALUES
(8, 'rms@email.info', 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 0, 1),
(29, 'shaimaa@gmail.com', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal`
--
ALTER TABLE `meal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_order`
--
ALTER TABLE `my_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `meal`
--
ALTER TABLE `meal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `my_order`
--
ALTER TABLE `my_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
