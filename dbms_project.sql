-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 07:39 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `event_city` varchar(200) NOT NULL,
  `total_paid` decimal(10,0) NOT NULL,
  `event_image` text NOT NULL,
  `event_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `username`, `event_name`, `event_city`, `total_paid`, `event_image`, `event_time`) VALUES
(7, 'ritwickoo1', 'Card title', 'delhi', '1400', 'images/otw.jpg', '18:43:26'),
(8, 'ritwickoo1', 'Card title', 'delhi', '1050', 'images/otw.jpg', '18:43:26'),
(9, 'ritwickoo1', 'Card title', 'delhi', '2100', 'images/otw.jpg', '18:43:26'),
(10, 'ritwickoo1', 'Card title', 'delhi', '1750', 'images/otw.jpg', '18:43:26'),
(11, 'ritwickoo1', 'Card title', 'delhi', '1750', 'images/otw.jpg', '18:43:26'),
(12, 'ritwickoo1', 'Card title', 'delhi', '2100', 'images/otw.jpg', '18:43:26'),
(13, 'ritwickoo1', 'Card title', 'delhi', '3500', 'images/otw.jpg', '18:43:26'),
(14, 'ritwickoo1', 'Card title', 'delhi', '1050', 'images/otw.jpg', '18:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'Music'),
(2, 'Sports'),
(3, 'Theatre'),
(4, 'Comedy');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`) VALUES
(1, 'Mumbai'),
(2, 'Delhi'),
(3, 'Bangalore'),
(4, 'Chennai');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Show_id` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Show_id`, `Title`, `Description`, `Image`) VALUES
(1, 'Card title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'images/otw.jpg'),
(2, 'Card title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'images/cherry.jpg'),
(3, 'Card title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'images/zsjl.jpg'),
(4, 'Card title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'images/gvkpster.jpg'),
(5, 'Card title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'images/tim.jpg'),
(6, 'Card title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'images/blackwidow.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `id` int(11) NOT NULL,
  `City_name` varchar(100) NOT NULL,
  `event_category` varchar(250) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `total_seats` int(11) NOT NULL,
  `available_seats` int(11) NOT NULL,
  `ticket_price` decimal(10,0) NOT NULL,
  `DESCRIPTION` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`id`, `City_name`, `event_category`, `event_date`, `event_time`, `total_seats`, `available_seats`, `ticket_price`, `DESCRIPTION`) VALUES
(1, 'delhi', 'music', '2022-11-10', '18:43:26', 50, 50, '350', 'This is a show about the survival in the woods');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ritwickoo1', 'ritwick.verma91@gmail.com', '12345'),
(2, 'ritwickoo1', 'ritwick.verma91@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Show_id`);

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `Show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
