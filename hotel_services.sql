-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 10:10 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_services`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `fullname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `fullname`) VALUES
(4, 'a@a.com', '1', 'Aladdin Amayreh'),
(6, 'b@b.com', '1', 'Salameh Yasin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(3) NOT NULL,
  `customer_email` varchar(400) NOT NULL,
  `customer_password` varchar(100) NOT NULL,
  `fullname` text NOT NULL,
  `room_number` int(20) NOT NULL,
  `service_id` int(20) NOT NULL,
  `customer_phone` varchar(250) NOT NULL,
  `customer_message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_email`, `customer_password`, `fullname`, `room_number`, `service_id`, `customer_phone`, `customer_message`) VALUES
(8, 'a@a.com', '1', 'Salameh Yasin', 40, 0, '0796940789', 'thank you for this service.'),
(12, 'a@a.com', '1', 'Aladdin Amayreh', 47, 0, '0796940789', 'hello man '),
(14, 'a@ab.com', '1', 'Abdallah Mazahreh', 7, 0, '', ''),
(15, 'a@abc.com', '1', 'Salameh Yasin', 1, 0, '', ''),
(16, 'b@b.com', '1', 'Zainab AL-Hindawi', 5, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(3) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `customer_id` int(20) NOT NULL,
  `room_number` int(22) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `fullname`, `order_date`, `customer_id`, `room_number`, `name`) VALUES
(40, 'Aladdin Amayreh', '2020-01-21 09:54:54', 8, 40, 'sewing the clothes');

-- --------------------------------------------------------

--
-- Table structure for table `roomservice`
--

CREATE TABLE `roomservice` (
  `service_id` int(100) NOT NULL,
  `service_name` varchar(250) NOT NULL,
  `service_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roomservice`
--

INSERT INTO `roomservice` (`service_id`, `service_name`, `service_image`) VALUES
(11, 'Lundry', 'la.jpg'),
(12, 'Houskeeping', 'clean.jpg '),
(13, 'Reception', 're.jpg'),
(17, 'Room Service', 'room.jpg'),
(18, 'Maintenance', 'man.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services_type`
--

CREATE TABLE `services_type` (
  `type_id` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(50) NOT NULL,
  `image` varchar(250) NOT NULL,
  `time` date NOT NULL DEFAULT current_timestamp(),
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services_type`
--

INSERT INTO `services_type` (`type_id`, `name`, `description`, `image`, `time`, `service_id`) VALUES
(15, 'Broken Air Conditioner', 'We are here to make your stay unforgettable.  ', 'ac.jpg', '2020-01-07', 14),
(16, 'Broken TV', 'We are here to make your stay unforgettable.  ', 'br.jpg', '2020-01-07', 14),
(21, ' Clean The Room', 'We are here to make your stay unforgettable. ', 'clean.jpg', '2020-01-07', 12),
(22, 'sewing the clothes', 'We are here to make your stay unforgettable.  ', 'sewing the clothes.jpg', '2020-01-07', 11),
(23, '  Smart Key', 'We are here to make your stay unforgettable. ', 'KEYKEY.jpg', '2020-01-07', 13),
(27, 'Clothes Washing', 'We are here to make your stay unforgettable.  ', 'clothes washing.jpg', '2020-01-08', 11),
(28, 'Ironing', 'We are here to make your stay unforgettable.  ', 'Ironing.jpg', '2020-01-08', 11),
(29, 'New Towels', 'We are here to make your stay unforgettable.  ', 'towels.jpg', '2020-01-08', 12),
(30, 'Bed sheets and Blankes', 'We are here to make your stay unforgettable.  ', 'bed.jpg', '2020-01-08', 12),
(31, ' wake up call', 'We are here to make your stay unforgettable. ', 'wack.jpg', '2020-01-08', 13),
(33, 'Extra Bed', 'We are here to make your stay unforgettable.  ', 'Extra Bed.jpg', '2020-01-08', 12),
(34, 'TV Doesnt Work ', 'We are here to make your stay unforgettable', 'tvr.jpg', '2020-01-15', 0),
(37, '  TV Does not Work ', 'We are here to make your stay unforgettable.  ', 'tvr.jpg', '2020-01-15', 18),
(38, ' Breakfast package', 'We are here to make your stay unforgettable.  ', 'Breakfast.jpg', '2020-01-15', 17),
(39, 'Lunch Package', 'We are here to make your stay unforgettable.  ', 'lunch.jpg', '2020-01-15', 17),
(40, 'Dinner Package', 'We are here to make your stay unforgettable.  ', 'dinner.jpg', '2020-01-15', 17),
(41, 'Broken Air Conditioner', 'We are here to make your stay unforgettable.  ', 'accc.jpg', '2020-01-15', 18),
(42, 'Broken Toilet ', 'We are here to make your stay unforgettable.  ', 'لاشفا.png', '2020-01-15', 18),
(43, 'Open The Safe', 'We are here to make your stay unforgettable.  ', 'سشبث.jpg', '2020-01-15', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `roomservice`
--
ALTER TABLE `roomservice`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `services_type`
--
ALTER TABLE `services_type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `roomservice`
--
ALTER TABLE `roomservice`
  MODIFY `service_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `services_type`
--
ALTER TABLE `services_type`
  MODIFY `type_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
