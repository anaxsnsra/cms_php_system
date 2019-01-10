-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 04:39 PM
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
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `address_line_one`, `user_id`) VALUES
(2, 'NO.8,JALAN CECAWI,6/21,SEKSYEN 6,KOTA DAMANSARA, petaling jaya , selangor', 2),
(3, '305, Blok E12, Jalan 3A/27A, Seksyen 1,  53300 Wangsa Maju, Kuala Lumpur.', 10),
(13, '305, Blok E12, Jalan 3A/27A, Seksyen 1,  53300 Wangsa Maju, Kuala Lumpur.', 15),
(14, '305, Blok E12, Jalan 3A/27A, Seksyen 1,  53300 Wangsa Maju, Kuala Lumpur.', 17),
(16, 'NO.8,JALAN CECAWI,6/21,SEKSYEN 6,KOTA DAMANSARA, petaling jaya , selangor', 18),
(17, '305, Blok E12, Jalan 3A/27A, Seksyen 1,  53300 Wangsa Maju, Kuala Lumpur.', 20),
(18, 'no8 , jalan cecawi , 6 / 21 , seksyen 6 , kota damansara', 21),
(19, 'no8 , jalan cecawi 6/21 , seksyen 6 , kota damansara', 24);

-- --------------------------------------------------------

--
-- Table structure for table `cust_order`
--

CREATE TABLE `cust_order` (
  `invoice_id` int(11) NOT NULL,
  `customer_username` varchar(255) NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `gpu` varchar(255) NOT NULL,
  `mobo` varchar(255) NOT NULL,
  `casing` varchar(255) NOT NULL,
  `psu` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `hdd` varchar(255) NOT NULL,
  `ssd` varchar(255) NOT NULL,
  `order_date` date NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `item_status` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `tracking_number` varchar(255) DEFAULT 'waiting'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_order`
--

INSERT INTO `cust_order` (`invoice_id`, `customer_username`, `cpu`, `gpu`, `mobo`, `casing`, `psu`, `ram`, `hdd`, `ssd`, `order_date`, `total_price`, `item_status`, `total_amount`, `tracking_number`) VALUES
(95, 'ahmad', 'Athlon,5350', ' GT730, 2GB DDR3', '985GM-GS3-FX 785G+SB710', 'Signature S10 XL-ATX Case', 'CE2 450/400W ATX PowerSupply,3 Years Warranty', 'XPG V1(AX3U2133W8G10-DR)', 'HDN7206050ALE610', 'ADATA, 256G, 2.5', '2019-01-03', '8826', 'item proceed', '8856', 'em123123my'),
(96, 'erinax', 'Athlon,5350', ' GT730, 2GB DDR3', '980DE3/U3S3 R2.0 770+SB710', 'Carbide 100R ATX Case (CC-9011075-WW)', 'CE2 400/350W', 'XPG V1(AX3U2133W8G10-DR)', 'HDN724040ALE640 ', '', '2019-01-08', '4014', 'Shipping process', '4044', 'waiting'),
(97, 'erinax', 'Athlon,5350', ' GT730, 2GB DDR3', '980DE3/U3S3 R2.0 770+SB710', 'Carbide 100R ATX Case (CC-9011075-WW)', 'CE2 400/350W', 'XPG V1(AX3U2133W8G10-DR)', 'HDN724040ALE640 ', '', '2019-01-08', '4014', 'Payment Done', '4044', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_option`
--

CREATE TABLE `delivery_option` (
  `delivery_id` int(11) NOT NULL,
  `delivery_name` varchar(255) NOT NULL,
  `delivery_details` text NOT NULL,
  `delivery_price` varchar(255) NOT NULL,
  `tax_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_option`
--

INSERT INTO `delivery_option` (`delivery_id`, `delivery_name`, `delivery_details`, `delivery_price`, `tax_price`) VALUES
(1, '', '', '0', ''),
(2, 'poslaju', 'arrived around 2 - 5 working days', '30', ''),
(3, 'Standard delivery', '5 - 7 days estimated', '15', '');

-- --------------------------------------------------------

--
-- Table structure for table `graphiccard`
--

CREATE TABLE `graphiccard` (
  `graphic_card_id` int(11) NOT NULL,
  `brand` mediumtext,
  `model` mediumtext,
  `power` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `detail` mediumtext,
  `graphic_card_image` text NOT NULL,
  `hide` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `graphiccard`
--

INSERT INTO `graphiccard` (`graphic_card_id`, `brand`, `model`, `power`, `rate`, `price`, `detail`, `graphic_card_image`, `hide`) VALUES
(2, 'ASUS', ' GT730, 2GB DDR3', 0, 50, 499, 'ASUS, NV, GT730, 2GB DDR3', '710AwR7PucL._SX425_.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hdd`
--

CREATE TABLE `hdd` (
  `hdd_id` int(11) NOT NULL,
  `brand` mediumtext,
  `model` mediumtext,
  `size` mediumtext,
  `speed` mediumtext,
  `rate` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `detail` mediumtext,
  `hdd_image` text NOT NULL,
  `hide` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hdd`
--

INSERT INTO `hdd` (`hdd_id`, `brand`, `model`, `size`, `speed`, `rate`, `price`, `detail`, `hdd_image`, `hide`) VALUES
(1, 'HGST', 'HDN724040ALE640 ', '4TB', '7200', 50, 1350, 'HGST,3.5\",4TB,HDN724040ALE640 ,SATA3,64,7200,', 'HGST-HDN724040ALE640-HDD-3-5-SATA-4TB-6TB-HDN724040ALE640-b-161830.jpg', NULL),
(2, 'HGST', 'HDN7206050ALE610', '5TB', NULL, 50, 1750, 'HGST,3.5\",5TB', 'HGST-HDN724040ALE640-HDD-3-5-SATA-4TB-6TB-HDN724040ALE640-b-161830.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `motherboard`
--

CREATE TABLE `motherboard` (
  `mobo_id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `socket` varchar(255) NOT NULL,
  `ramslot` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `mobo_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motherboard`
--

INSERT INTO `motherboard` (`mobo_id`, `brand`, `model`, `size`, `socket`, `ramslot`, `rate`, `price`, `details`, `mobo_image`) VALUES
(1, 'AsRock', '985GM-GS3-FX 785G+SB710', 'MATX', 'AM3+', '2', '50', '385', 'ASRock 985GM-GS3-FX, 785G+SB710, MATX, AM3+, 2*DDR3, Hybird CrossFireX', '985GM-GS3 FX(M1).png'),
(2, 'AsRock', '980DE3/U3S3 R2.0 770+SB710', 'MATX', 'AM3+', '4', '50', '260', 'ASRock 980DE3/U3S3 R2.0, 770+SB710, MATX, AM3+, 4*DDR3, CrossFireX', '980DE3U3S3 R2.0(M1).png');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payments_id` int(11) NOT NULL,
  `txn_id` varchar(255) NOT NULL,
  `item_number` varchar(255) NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_date` date NOT NULL,
  `memo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payments_id`, `txn_id`, `item_number`, `payment_gross`, `currency_code`, `payment_status`, `payment_date`, `memo`) VALUES
(32, '6WV72349V3280284R', '91', 5098.00, 'MYR', 'Payment Done', '2019-01-03', 'hope everything will arrive safely'),
(33, '4X733723L4213463S', '95', 8856.00, 'MYR', 'Payment Done', '2019-01-03', 'safely'),
(34, '8JX37705WL3302604', '97', 4044.00, 'MYR', 'Payment Done', '2019-01-07', 'hope everything will arrive safely');

-- --------------------------------------------------------

--
-- Table structure for table `pc_case`
--

CREATE TABLE `pc_case` (
  `case_id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `pc_case_image` varchar(255) NOT NULL,
  `case_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc_case`
--

INSERT INTO `pc_case` (`case_id`, `brand`, `model`, `size`, `rate`, `price`, `details`, `pc_case_image`, `case_status`) VALUES
(2, 'antec', 'Signature S10 XL-ATX Case', 'XL - ATX', '50', '3988', 'Antec Signature S10 XL-ATX Case', 'antec signature s10.jpg', 1),
(3, 'Corsair', 'Carbide 100R ATX Case (CC-9011075-WW)', 'ATX', '50', '390', 'Corsair Carbide 100R ATX Case (CC-9011075-WW)', 'carbide series 100R.png', 1),
(4, 'cooler master', 'HAF Stacker 935 Window E-ATX Case (HAF-935-KWN1)', 'E-ATX', '50', '1360', 'Cooler Master HAF Stacker 935 Window E-ATX Case', 'cooler_master_haf.jpg', 1),
(6, 'cooler master', 'test model', '', '', '300', 'test details', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pc_cpu`
--

CREATE TABLE `pc_cpu` (
  `cpu_id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `clockspeed` varchar(255) NOT NULL,
  `maxspeed` varchar(255) NOT NULL,
  `socket` varchar(255) NOT NULL,
  `core` varchar(255) NOT NULL,
  `thread` varchar(255) NOT NULL,
  `CPUGraphic` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `cpu_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc_cpu`
--

INSERT INTO `pc_cpu` (`cpu_id`, `brand`, `model`, `clockspeed`, `maxspeed`, `socket`, `core`, `thread`, `CPUGraphic`, `rate`, `price`, `details`, `cpu_image`) VALUES
(1, 'AMD', 'Athlon,5350', '2.05\r\n', '0', 'AM1', '4', '4', 'Radeon HD 8400', '50', '360', 'AMD,Athlon,5350,2.05GHz,,,Jaguar,4,4,AM1,25W,L2 2MB,Radeon HD 8400,600MHz,28nm,AD5350JAHMBOX', 'amd athlon 5350.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pc_ram`
--

CREATE TABLE `pc_ram` (
  `ram_id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `storage` varchar(255) NOT NULL,
  `slot_need` varchar(255) NOT NULL,
  `ram_support` varchar(255) NOT NULL,
  `rate` int(32) NOT NULL,
  `ram_price` int(11) NOT NULL,
  `details` text NOT NULL,
  `ram_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc_ram`
--

INSERT INTO `pc_ram` (`ram_id`, `brand`, `model`, `storage`, `slot_need`, `ram_support`, `rate`, `ram_price`, `details`, `ram_image`) VALUES
(1, 'A-DATA', 'XPG V1(AX3U2133W8G10-DR)', '8GB', '2', 'DDR3', 50, 890, 'ADATA, DDR3-2133, CL10, 16GB(2x8GB), XPG V1(AX3U2133W8G10-DR)', '71Gwt0DSrlL._SX425_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `powersupply`
--

CREATE TABLE `powersupply` (
  `id` int(11) NOT NULL,
  `brand` mediumtext,
  `model` mediumtext,
  `power` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `detail` mediumtext,
  `power_supply_image` text NOT NULL,
  `hide` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `powersupply`
--

INSERT INTO `powersupply` (`id`, `brand`, `model`, `power`, `rate`, `price`, `detail`, `power_supply_image`, `hide`) VALUES
(1, 'AcBel', 'CE2 400/350W', 350, 50, 265, 'Acbel CE2 400/350W ATX PowerSupply,3 Years Warranty', '844513_6ac0fec2-b860-45c3-9b9f-90a4e671022c.jpg', NULL),
(2, 'AcBel', 'CE2 450/400W ATX PowerSupply,3 Years Warranty', 400, 50, 325, 'Acbel CE2 450/400W ATX PowerSupply,3 Years Warranty', '5401_8415_ea7dad516e5c1bcd7ae4ccbf67526972.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ssd`
--

CREATE TABLE `ssd` (
  `ssd_id` int(11) NOT NULL,
  `brand` mediumtext,
  `model` mediumtext,
  `size` mediumtext,
  `rate` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `detail` mediumtext,
  `ssd_image` text NOT NULL,
  `hide` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ssd`
--

INSERT INTO `ssd` (`ssd_id`, `brand`, `model`, `size`, `rate`, `price`, `detail`, `ssd_image`, `hide`) VALUES
(1, 'A-DATA', 'ADATA, 256G, 2.5\", MLC, SP600, SSD, SATA3, JMicron 66X', '256GB', 50, 629, 'ADATA, 256G, 2.5\", MLC, SP600, SSD, SATA3, JMicron 66X', '20-211-853-S01.jpg', NULL),
(2, 'A-DATA', 'ADATA, 512G, 2.5\", MLC, SP600, SSD, SATA3, JMicron 66X', '512GB', 50, 1249, 'ADATA, 512G, 2.5\", MLC, SP600, SSD, SATA3, JMicron 66X', 'ADATA-SP600-SSD-512GB-2-5-SATA3-6Gb-s-Solid-State-Drive-Disk-ssd-hard-drive.jpg_640x640.jpg', NULL);

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
  `user_phone` varchar(13) NOT NULL,
  `confirmed` int(11) NOT NULL,
  `confirm_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='user details table';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_firstname`, `user_lastname`, `username`, `user_email`, `user_password`, `user_role`, `user_image`, `address_id`, `user_phone`, `confirmed`, `confirm_code`) VALUES
(2, 'katrina maria', 'muhammad shahril', 'erin', 'erina@gmail.com', '$2y$10$LMKYA1k5IGtfaQRSV88Kduh05csAOlkIDSTpCaMHLcSEnIhPYxgKe', 'administrator', '', '2', '0122421757', 0, 0),
(15, 'muhammad', 'mazlan', 'ninja', 'anaxcool95@yahoo.com', '$2y$10$NwmW8PXjn7AxRof6w2Vf7eoZYeG93XDDrZqs6geSGUIVJGf6ZswMS', 'subscriber', '', '13', '+60124441220', 0, 0),
(16, 'katrina', 'maria', 'erina', 'erina@yahoo.com', '$2y$12$gEGXSuumrAsBE3wTehPGU.qIGjo1P3rfJYp/3ZilXtNknXteEmc92', 'subscriber', '', '', '', 0, 0),
(20, 'anas', 'maria', 'erinax', 'anaxcool95@yahoo.com', '$2y$12$bS3aQs/cDEKjEu9k1GdZ0eafXI29Pyy22txEfjC8nbrBsEsZce2q.', 'administrator', '', '17', '+60124441220', 0, 0),
(21, 'anas', 'mazlan', 'anas', 'anax_nrsk@yahoo.com', '$2y$12$UpHieDbHQgXLpzWVVb0C..oOYtMMzLxmvwwU3DPb5cdY8gHdHNfXa', 'subscriber', '', '18', '0122822566', 0, 0),
(24, 'ali', 'ahmad', 'ali', 'ali@yahoo.com', '$2y$12$VaWMs7a/2ojlykLKHMRUV.uJPNRyxzxgkV96k5KEMBgOlHPuME2lW', 'subscriber', '', '19', '', 0, 0),
(25, 'erina', 'maria', 'administrator', 'admin@erinapcworkshop.com', '$2y$12$5LESfOG5Kndq/k2syCYqjOWZdOqXl7Ml7HwkWsBal4lV8q2W9Xnmq', 'administrator', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `cust_order`
--
ALTER TABLE `cust_order`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `delivery_option`
--
ALTER TABLE `delivery_option`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `graphiccard`
--
ALTER TABLE `graphiccard`
  ADD PRIMARY KEY (`graphic_card_id`);

--
-- Indexes for table `hdd`
--
ALTER TABLE `hdd`
  ADD PRIMARY KEY (`hdd_id`);

--
-- Indexes for table `motherboard`
--
ALTER TABLE `motherboard`
  ADD PRIMARY KEY (`mobo_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payments_id`);

--
-- Indexes for table `pc_case`
--
ALTER TABLE `pc_case`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `pc_cpu`
--
ALTER TABLE `pc_cpu`
  ADD PRIMARY KEY (`cpu_id`);

--
-- Indexes for table `pc_ram`
--
ALTER TABLE `pc_ram`
  ADD PRIMARY KEY (`ram_id`);

--
-- Indexes for table `powersupply`
--
ALTER TABLE `powersupply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ssd`
--
ALTER TABLE `ssd`
  ADD PRIMARY KEY (`ssd_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_order`
--
ALTER TABLE `user_order`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cust_order`
--
ALTER TABLE `cust_order`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `delivery_option`
--
ALTER TABLE `delivery_option`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `graphiccard`
--
ALTER TABLE `graphiccard`
  MODIFY `graphic_card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hdd`
--
ALTER TABLE `hdd`
  MODIFY `hdd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `motherboard`
--
ALTER TABLE `motherboard`
  MODIFY `mobo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payments_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pc_case`
--
ALTER TABLE `pc_case`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pc_cpu`
--
ALTER TABLE `pc_cpu`
  MODIFY `cpu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pc_ram`
--
ALTER TABLE `pc_ram`
  MODIFY `ram_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `powersupply`
--
ALTER TABLE `powersupply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ssd`
--
ALTER TABLE `ssd`
  MODIFY `ssd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_order`
--
ALTER TABLE `user_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
