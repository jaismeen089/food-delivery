-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2024 at 07:55 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `pictures` varchar(100) NOT NULL,
  `postby` text NOT NULL,
  `poston` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `pictures`, `postby`, `poston`) VALUES
(4, 'Starting a Food Truck Business – How Ready Are You?', 'When commencing a new business, it is really easy to slip into the romantic part of commencing a business. Haven’t all of us who have started a business, stayed awake in our beds dreaming about how my business will really take off? Will it be successful and how much time will I need to make my business successful? \r\n\r\nAll of us have been staying awake in our beds dreaming about how our businesses will take off. \r\n\r\nBut we also need to think, quite realistically, about how exactly you are going t', '28-288240_food-truck-clip-art.png', 'Admin', '2024-07-16'),
(5, 'Building Food Delivery App Like Uber Eats in 2021', 'Commenced back in August 2014, UberEats has managed to become a forerunner in the online food delivery business. An online food ordering and delivery service, which has raised the bar for those who are existing in the market, and even those who are trying to step into this market. The success and reputation of UberEats have initiated the entry of many others, but how easy is it to be in the market with a brand like Uber Eats. Is it possible for newbies to even exist with such market dominators? ', 'blogs1.png', 'Admin', '2024-07-17'),
(6, 'Food Industry After COVID-19 – How Will it Survive?', 'Has the food industry decimated or still there is a hope of survival? \r\n\r\nThe food industry is facing some of its biggest challenges ever – both from the social and economic aspects. And that’s because COVID-19 did its job.  \r\n\r\n But will coronavirus pandemic be the final nail in the coffin that transforms the food industry and its behavior?\r\n\r\n Overnight, the food industry was upside down. The news of this crisis was so sudden that it didn’t even allow the food industry to even think about thei', 'ReopenedRestaurant_Lead1.jpg', 'Admin', '2024-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `fooddelivery`
--

CREATE TABLE `fooddelivery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fooddelivery`
--

INSERT INTO `fooddelivery` (`id`, `name`, `email`, `subject`, `message`, `currentdate`) VALUES
(1, 'grgftr', 'sukhveerkaur5585@gmail.com', 'fsd', 'sdf', '2024-07-10'),
(2, 'veshnavi', 'sukhveerkaur5585@gmail.com', 'gdf', 'jhjvghvhj', '2024-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `currentdate`) VALUES
(1, 'ves@gmail', '2024-07-19'),
(2, 'sukhveerkaur5585@gmail.com', '2024-07-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fooddelivery`
--
ALTER TABLE `fooddelivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fooddelivery`
--
ALTER TABLE `fooddelivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
