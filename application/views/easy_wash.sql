-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2017 at 05:21 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easy_wash`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `surname` varchar(200) DEFAULT NULL,
  `other_name` varchar(255) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `customer_type` varchar(50) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `edit_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `surname`, `other_name`, `gender`, `dob`, `state`, `address`, `phone_number`, `email`, `image`, `customer_type`, `status`, `create_date`, `edit_time`) VALUES
(17, 'Ife ', 'Olumide Olamide', 'Male', '2017-02-01', 'Lagos', 'Ogba', '89000445954', 'ife@example.com', NULL, 'Regular', 'Active', '2017-02-17 15:06:01', NULL),
(16, 'Wakeel', 'Wakeel', 'Female', '2017-01-29', 'Osun', 'Ogba', '08023458601', 'wakeel@example.com', NULL, 'Regular', 'New', NULL, NULL),
(15, 'Williams ', 'Omogbolahan', 'Male', '1992-07-27', 'Ogun', 'Utuh', '08060069430', 'raphealolams@yahoo.com', NULL, 'Regular', 'Active', NULL, NULL),
(13, 'Ajilore', 'Raphael Olamide', 'Male', '2017-01-31', 'Osun', 'Ogba', '0806-226-5208', 'raphealolams@yahoo.com', NULL, 'VIP', 'New', NULL, NULL),
(14, 'Ajilore', 'Seye', 'Male', '2017-02-07', 'Bayelsa', 'Mowe', '0806-006-9430', 'raphealolams@yahoo.com', NULL, 'VVIP', 'Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_container`
--

CREATE TABLE `customer_container` (
  `customer_container_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `picked` varchar(50) NOT NULL,
  `invoice_number` varchar(250) NOT NULL,
  `picked_date` datetime NOT NULL,
  `create_time` datetime NOT NULL,
  `edit_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_type`
--

CREATE TABLE `customer_type` (
  `customer_type_id` int(11) NOT NULL,
  `customer_type_name` varchar(50) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `edit_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_type`
--

INSERT INTO `customer_type` (`customer_type_id`, `customer_type_name`, `create_time`, `edit_time`) VALUES
(11, 'New', '2017-02-23 23:12:14', '2017-02-23 23:13:00'),
(12, 'Master', '2017-02-23 23:13:09', '2017-02-23 23:13:33'),
(13, 'Standard', '2017-02-23 23:14:18', '2017-02-24 11:15:39'),
(14, 'Local  Master', '2017-02-24 11:16:03', '2017-02-24 14:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `droped_item`
--

CREATE TABLE `droped_item` (
  `droped_item_id` int(11) NOT NULL,
  `customer_container_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `customer_type` varchar(50) DEFAULT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `discount` varchar(50) DEFAULT NULL,
  `total_price` varchar(50) DEFAULT NULL,
  `deposit` varchar(50) DEFAULT NULL,
  `balance` varchar(50) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `droped_date` datetime DEFAULT NULL,
  `pickup_date` datetime NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `edit_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `category` varchar(250) DEFAULT NULL,
  `item_name` varchar(250) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `edit_time` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_surname` varchar(100) DEFAULT NULL,
  `staff_othername` varchar(150) DEFAULT NULL,
  `staff_gender` varchar(10) DEFAULT NULL,
  `staff_dob` date DEFAULT NULL,
  `staff_phone_number` varchar(15) DEFAULT NULL,
  `staff_email` varchar(255) DEFAULT NULL,
  `staff_nationality` varchar(255) DEFAULT NULL,
  `staff_state` varchar(255) DEFAULT NULL,
  `staff_address` varchar(255) DEFAULT NULL,
  `highest_qualification` varchar(250) DEFAULT NULL,
  `staff_employment_type` varchar(50) DEFAULT NULL,
  `staff_dept` varchar(100) DEFAULT NULL,
  `staff_level` varchar(50) DEFAULT NULL,
  `staff_status` varchar(100) DEFAULT NULL,
  `staff_image` varchar(250) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `edit_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_surname`, `staff_othername`, `staff_gender`, `staff_dob`, `staff_phone_number`, `staff_email`, `staff_nationality`, `staff_state`, `staff_address`, `highest_qualification`, `staff_employment_type`, `staff_dept`, `staff_level`, `staff_status`, `staff_image`, `create_time`, `edit_time`) VALUES
(17, 'Sesan', 'Seye', 'Female', '2011-11-01', '(0900) 123-4567', 'raphealolams@gmail.com', 'American Samoa', 'Bayelsa', 'Mowe', 'BSC', 'Select', 'Select', 'Select', 'Select', NULL, '2017-02-18 11:11:40', NULL),
(15, 'Ajilore', 'Raphael Olamide', 'Male', '2017-04-11', '(0806) 226-5208', 'raphealolams@yahoo.com', 'Nigeria', 'Osun', 'Mowe', 'BSC', 'Select', 'Select', 'Select', 'Select', NULL, '2017-02-18 11:06:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff_bank`
--

CREATE TABLE `staff_bank` (
  `staff_bank_id` int(11) NOT NULL,
  `staff_name` varchar(200) NOT NULL,
  `staff_acc_name` varchar(250) DEFAULT NULL,
  `staff_acc_number` varchar(20) DEFAULT NULL,
  `staff_bank` varchar(250) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `edit_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_item`
--

CREATE TABLE `staff_item` (
  `staff_item_id` int(11) NOT NULL,
  `staff_type` varchar(50) DEFAULT NULL,
  `staff_dept` varchar(50) DEFAULT NULL,
  `staff_level` varchar(100) DEFAULT NULL,
  `staff_status` varchar(20) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `edit_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `surname` text,
  `other_name` text,
  `gender` text,
  `address` text,
  `phone_number` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`surname`, `other_name`, `gender`, `address`, `phone_number`) VALUES
('Ajilore', 'Raphael Olamide', 'Male', '7, Martins Street', '08062265208'),
('Ajilore', 'Raphael Olamide', 'Male', '7, Martins Street', '08062265208'),
('Ajilore', 'Raphael Olamide', 'Male', '7, Martins Street Mile 12', '(0806) 226-6208'),
('Olumide', 'Raphael Olamide', 'Male', '', '(0806) 226-6208'),
('Ajilore', 'Titilayo ', 'Female', 'Mowe', '(0813) 913-0135');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `Fname` text,
  `gender` varchar(7) DEFAULT NULL,
  `age` date DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `lga` varchar(100) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `edit_time` datetime DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Fname`, `gender`, `age`, `state`, `lga`, `email`, `password`, `image`, `created_time`, `edit_time`, `role`) VALUES
(1, 'Ajilore Raphael Olamide', 'Male', '1995-04-11', 'Osun State', 'Ilesha West ', 'raphealolams@yahoo.com', 'ajilore', NULL, '2017-02-02 15:03:05', NULL, 'super admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_container`
--
ALTER TABLE `customer_container`
  ADD PRIMARY KEY (`customer_container_id`);

--
-- Indexes for table `customer_type`
--
ALTER TABLE `customer_type`
  ADD PRIMARY KEY (`customer_type_id`);

--
-- Indexes for table `droped_item`
--
ALTER TABLE `droped_item`
  ADD PRIMARY KEY (`droped_item_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `staff_bank`
--
ALTER TABLE `staff_bank`
  ADD PRIMARY KEY (`staff_bank_id`);

--
-- Indexes for table `staff_item`
--
ALTER TABLE `staff_item`
  ADD PRIMARY KEY (`staff_item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `customer_container`
--
ALTER TABLE `customer_container`
  MODIFY `customer_container_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer_type`
--
ALTER TABLE `customer_type`
  MODIFY `customer_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `droped_item`
--
ALTER TABLE `droped_item`
  MODIFY `droped_item_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `staff_bank`
--
ALTER TABLE `staff_bank`
  MODIFY `staff_bank_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff_item`
--
ALTER TABLE `staff_item`
  MODIFY `staff_item_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
