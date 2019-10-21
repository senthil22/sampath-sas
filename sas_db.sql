-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 09:49 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sas_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `buy_id` int(10) NOT NULL,
  `buy_name` varchar(25) NOT NULL,
  `buy_ph` varchar(15) NOT NULL,
  `buy_add` varchar(200) NOT NULL,
  `total_amt` int(10) NOT NULL,
  `paid_amt` int(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`buy_id`, `buy_name`, `buy_ph`, `buy_add`, `total_amt`, `paid_amt`, `date`) VALUES
(3, 'whhh', '992212553366', 'dddd ddddd dddd', 22, 22, '2019-10-20 15:33:15'),
(4, 'eee', '333', '3  rr fff eww ', 333, 33, '2019-10-20 15:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

CREATE TABLE `dealers` (
  `deal_id` int(11) NOT NULL,
  `deal_name` varchar(100) NOT NULL,
  `deal_addr` varchar(200) NOT NULL,
  `deal_ph` varchar(15) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealers`
--

INSERT INTO `dealers` (`deal_id`, `deal_name`, `deal_addr`, `deal_ph`, `date`) VALUES
(3, 'oooooo', '000000000 0000000', '9742814711', '2019-10-20 15:38:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(10) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `stock` int(10) NOT NULL DEFAULT 5,
  `size` varchar(5) NOT NULL,
  `color` varchar(10) NOT NULL,
  `price` int(10) NOT NULL,
  `def_stock` int(10) NOT NULL DEFAULT 20,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `stock`, `size`, `color`, `price`, `def_stock`, `date`) VALUES
(1, 'ssss', 42, 'ssss', '1111', 111, 20, '2019-10-03 10:33:49'),
(9, 'xxxx', 12, '1111', '11111', 3333, 20, '2019-10-04 17:50:05'),
(11, 'sss', 4, 'dddd', 'wssss', 6, 20, '2019-10-21 21:03:10'),
(12, 'qqqqq', 12, '12', 'red', 18, 20, '2019-10-21 21:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `pur_id` int(11) NOT NULL,
  `pur_item` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `unit` int(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`pur_id`, `pur_item`, `price`, `unit`, `date`, `prod_id`) VALUES
(2, 'dttttt', 123456, 12, '2019-10-02 15:23:10', 1),
(4, 'www', 999, 222, '2019-10-21 01:01:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sale_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `unit` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sale_id`, `name`, `price`, `unit`, `date`, `prod_id`) VALUES
(3, 'yyyy', 66666, 12312, '2019-10-20 15:27:06', 1),
(4, 'eeww', 8888, 5, '2019-10-20 15:30:25', 0),
(5, 'qqqq', 333, 333, '2019-10-20 15:32:54', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `name` varchar(100) DEFAULT NULL,
  `role` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `role`, `email`) VALUES
(1, 'senthil', '12345', 'Senthil', 'ad', NULL),
(2, 'sampth', '12345', 'sss', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`buy_id`);

--
-- Indexes for table `dealers`
--
ALTER TABLE `dealers`
  ADD PRIMARY KEY (`deal_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`pur_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `buy_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dealers`
--
ALTER TABLE `dealers`
  MODIFY `deal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `pur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
