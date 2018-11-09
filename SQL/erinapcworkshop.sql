-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 04:27 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erinapcworkshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `address_line_one` text NOT NULL,
  `country` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL,
  `zipcode_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `address_line_one`, `country`, `state_id`, `zipcode_id`, `user_id`) VALUES
(1, '305, Blok E12, Jalan 3A/27A, Seksyen 1, \r\n53300 Wangsa Maju, Kuala Lumpur.', 'Malaysia', 1, 1, 2),
(2, '305, Blok E12, Jalan 3A/27A, Seksyen 1, \r\n53300 Wangsa Maju, Kuala Lumpur.', 'Malaysia', 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `zipcode_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state_name`, `zipcode_id`) VALUES
(1, 'Selangor', 1),
(2, 'Perak', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `address_id` varchar(255) NOT NULL,
  `user_phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='user details table';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_firstname`, `user_lastname`, `username`, `user_email`, `user_password`, `user_role`, `user_image`, `address_id`, `user_phone`) VALUES
(1, 'muhammad anas', 'mazlan', 'anax', 'anaxcool95@yahoo.com', '$2y$12$ItsG.zr1QtmS/BDagdzSYu27.FyvetCZRePrNmAA.U0D3npsV9dzO', '', '', '1', '0'),
(2, 'erin', 'katrina', 'erin', 'erina@gmail.com', '$2y$12$NpWbtJDa5DZ.y8xT4CD5LeCdk9m3HszVVUxW0Rt11hU75jqT.4hEW', 'administrator', '', '2', '0122421757'),
(3, 'ninja', '95', 'ninja', 'ninja@yahoo.com', '$2y$12$qIyM8BN/abRqmpm/mpBzJ.7QN0SgHuYkicXPIBCU.Q0kj1wyNh/C6', '', '', '', '0'),
(9, 'ninja', 'nrsk', 'ninja', 'ninja@gmail.com', '$2y$12$ZsBKn02t5/ygX9QMJeXAIOE.7A3wsFGlzU5PM.W0e.x9593irRn0C', 'subscriber', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `zipcode`
--

CREATE TABLE `zipcode` (
  `id` int(11) NOT NULL,
  `zipcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zipcode`
--

INSERT INTO `zipcode` (`id`, `zipcode`) VALUES
(1, 47810),
(2, 45000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `zipcode`
--
ALTER TABLE `zipcode`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `zipcode`
--
ALTER TABLE `zipcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
