-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2021 at 05:17 AM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bigilhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `phone` varchar(233) NOT NULL,
  `email` varchar(223) NOT NULL,
  `state` text NOT NULL,
  `dist` text NOT NULL,
  `city` text NOT NULL,
  `area` text NOT NULL,
  `sub_area` text NOT NULL,
  `address` text NOT NULL,
  `catagory` varchar(233) NOT NULL,
  `type` varchar(233) NOT NULL,
  `int_img` text NOT NULL,
  `ext_img` text NOT NULL,
  `avail` varchar(222) NOT NULL,
  `price` varchar(222) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `password` varchar(230) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `password`, `created_at`, `status`) VALUES
(5, 'abhishek', '12345', '2021-10-30 07:13:38', 1),
(6, 'bigilhouse@gmail.com', 'bigil', '2021-11-08 12:20:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `area` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `state_id`, `district_id`, `city_id`, `area`, `status`) VALUES
(21, 4, 4, 27, 'Tinimuhani', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `catagory_name` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `catagory_name`, `status`) VALUES
(20, 'Family House', 1),
(21, 'Apartment', 1),
(22, 'Bachelor House', 1),
(26, 'Girls PG', 1),
(27, 'Boys PG', 1),
(28, 'Office', 1),
(29, 'Godown', 1),
(30, 'Hostel', 1),
(32, 'Commercials', 1),
(33, 'Girls Hostel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `city` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `state_id`, `district_id`, `city`, `status`) VALUES
(26, 4, 3, 'Bhubaneswar', 1),
(27, 4, 4, 'Kendrapada', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `state` text,
  `dist` text,
  `city` text,
  `area` text,
  `sub_area` text,
  `address` text,
  `catagory` varchar(222) DEFAULT NULL,
  `type` varchar(233) DEFAULT NULL,
  `int_img` text,
  `ext_img` text,
  `avail` varchar(222) DEFAULT NULL,
  `price` varchar(211) DEFAULT NULL,
  `is_approved` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cust_id`, `state`, `dist`, `city`, `area`, `sub_area`, `address`, `catagory`, `type`, `int_img`, `ext_img`, `avail`, `price`, `is_approved`, `created_at`, `status`) VALUES
(2, 87, '4', '4', '27', '21', '5', '	\r\nMy property is situated near tinimuhani chowk ,main road side', '32', '59', '', 'photo2', 'vacant', '250000 ', 0, '2021-11-14 09:45:08', 1),
(3, 88, '4', '4', '27', '21', '5 ', '\r\nadsfghjk', '20 ', '19', NULL, NULL, 'occupied', '12345 ', 0, '2021-11-16 06:18:46', 1),
(4, 89, '4', '4', '27', '21', '5 ', '\r\ndfghjk', '21 ', '29', NULL, NULL, 'vacant', '32456 ', 0, '2021-11-19 09:55:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_login`
--

CREATE TABLE `customer_login` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `number` varchar(222) NOT NULL,
  `mail` varchar(222) NOT NULL,
  `password` varchar(234) NOT NULL,
  `msg` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_login`
--

INSERT INTO `customer_login` (`id`, `name`, `number`, `mail`, `password`, `msg`, `created_at`, `status`) VALUES
(82, 'abhishek', '1234567890', 's@gmail.com', '', '', '2021-11-10 09:22:00', 1),
(85, 'abhishek', '1234567890', 'raka@mail.com', '', '', '2021-11-11 07:50:23', 1),
(86, 'rggge', '555545555', '555555@gmail.com', '', '', '2021-11-14 09:38:42', 1),
(87, 'Dev Jyoti', '7381528524', 'devjyoti44dj@gmail.com', '', '', '2021-11-14 09:45:08', 1),
(88, 'abhishek', '1234567890', 's@gmail.com', '', '', '2021-11-16 06:18:46', 1),
(89, 'dvd', '1234567890', 'a@gmail.com', '', '', '2021-11-19 09:55:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cust_ext_img`
--

CREATE TABLE `cust_ext_img` (
  `id` int(11) NOT NULL,
  `img_id` int(11) NOT NULL,
  `ext_img` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cust_int_img`
--

CREATE TABLE `cust_int_img` (
  `id` int(11) NOT NULL,
  `img_id` int(11) NOT NULL,
  `int_img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cust_mess`
--

CREATE TABLE `cust_mess` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(230) NOT NULL,
  `mob` varchar(222) NOT NULL,
  `mess` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cust_mess`
--

INSERT INTO `cust_mess` (`id`, `name`, `email`, `mob`, `mess`, `status`) VALUES
(0, 'Danielhoach', 'larrydstultz@mailinator.com', '85426651442', 'Invest $ 500 once and get passive income from $ 300 to $ 15000 per day every day for many years \r\n \r\n>>>>>>>>>>>>>  https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc7HjuG&sa=D&sntz=1&usg=AFQjCNEDG7vlHXIn6j0zk1z9pDSCFsciKw  <<<<<<<<<<<<<<', 1);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `district` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `state_id`, `district`, `status`) VALUES
(3, 4, 'Khordha', 1),
(4, 4, 'Kendrapada', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ext_img`
--

CREATE TABLE `ext_img` (
  `id` int(11) NOT NULL,
  `img_id` int(11) DEFAULT NULL,
  `ext_img` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `int_img`
--

CREATE TABLE `int_img` (
  `id` int(11) NOT NULL,
  `img_id` int(11) NOT NULL,
  `int_img` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plus_login`
--

CREATE TABLE `plus_login` (
  `id` int(11) NOT NULL,
  `userid` varchar(10) NOT NULL DEFAULT '',
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tm` datetime DEFAULT NULL,
  `status` char(3) NOT NULL DEFAULT 'ON'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `state_name` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state_name`, `status`) VALUES
(4, 'Odisha', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_area`
--

CREATE TABLE `sub_area` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `sub_area` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_area`
--

INSERT INTO `sub_area` (`id`, `state_id`, `district_id`, `city_id`, `area_id`, `sub_area`, `status`) VALUES
(5, 4, 4, 27, 21, 'Tinimuhani Chowk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `type` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `catagory_id`, `type`, `status`) VALUES
(19, 20, '1BHK', 1),
(20, 20, '2BHK', 1),
(21, 20, '3BHK', 1),
(22, 22, '1BHK', 1),
(23, 22, '2BHK', 1),
(24, 22, '3BHK', 1),
(25, 22, 'Single Room', 1),
(26, 22, 'Duplex', 1),
(27, 22, 'Simplex', 1),
(28, 21, '1BHK', 1),
(29, 21, '2BHK', 1),
(30, 21, '3BHK', 1),
(31, 26, 'Sharing', 1),
(32, 26, 'Single', 1),
(33, 26, 'Fooding', 1),
(34, 26, 'Non Fooding', 1),
(35, 27, 'Sharing', 1),
(36, 27, 'Single', 1),
(37, 27, 'Fooding', 1),
(38, 27, 'Non Fooding', 1),
(39, 28, 'Sqft', 1),
(40, 28, '1BHK', 1),
(41, 28, '2BHK', 1),
(42, 28, '3BHK', 1),
(43, 28, 'Flooring', 1),
(44, 29, 'Open Space', 1),
(45, 29, 'Sqft', 1),
(46, 29, '1BHK', 1),
(47, 29, '2BHK', 1),
(48, 29, '3BHK', 1),
(49, 29, 'Flooring', 1),
(50, 30, 'Sharing', 1),
(51, 30, 'Single', 1),
(52, 30, 'Fooding', 1),
(53, 30, 'Non Fooding', 1),
(54, 32, 'Open Space', 1),
(55, 32, '1BHK', 1),
(56, 32, '2BHK', 1),
(57, 32, '3BHK', 1),
(58, 32, 'Flooring', 1),
(59, 32, 'Sqft', 1),
(60, 20, 'Single Room', 1),
(61, 20, 'Duplex', 0),
(62, 20, 'Simplex', 0),
(63, 0, '', 0),
(64, 0, '', 0),
(65, 0, '', 0),
(66, 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
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
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_login`
--
ALTER TABLE `customer_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cust_ext_img`
--
ALTER TABLE `cust_ext_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cust_int_img`
--
ALTER TABLE `cust_int_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cust_mess`
--
ALTER TABLE `cust_mess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ext_img`
--
ALTER TABLE `ext_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `int_img`
--
ALTER TABLE `int_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plus_login`
--
ALTER TABLE `plus_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_area`
--
ALTER TABLE `sub_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_login`
--
ALTER TABLE `customer_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `cust_ext_img`
--
ALTER TABLE `cust_ext_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cust_int_img`
--
ALTER TABLE `cust_int_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `int_img`
--
ALTER TABLE `int_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_area`
--
ALTER TABLE `sub_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
