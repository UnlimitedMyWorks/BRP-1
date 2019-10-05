-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2019 at 04:26 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dummy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `mobile` bigint(10) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`mobile`, `pass`) VALUES
(9963215567, '49f68a5c8493ec2c0bf489821c21fc3b');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `dob` date NOT NULL,
  `zipcode` int(6) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `aadharno` bigint(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`fname`, `lname`, `email`, `address`, `state`, `city`, `mobile`, `dob`, `zipcode`, `gender`, `aadharno`) VALUES
('RAJAVARAPU', 'yaswanthkumar', '0111112334ma@gmail.com', '3/355, 3rd ward', 'AndhraPradesh', 'VisÄkhapatnam', 9963215567, '2019-12-31', 521121, 'Male', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_bookings`
--

CREATE TABLE `ticket_bookings` (
  `mobile` bigint(10) NOT NULL,
  `ticket_id` varchar(50) NOT NULL,
  `fromDestination` varchar(100) NOT NULL,
  `toDestination` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `time_booked` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket_bookings`
--

INSERT INTO `ticket_bookings` (`mobile`, `ticket_id`, `fromDestination`, `toDestination`, `status`, `time_booked`) VALUES
(9963215567, '200996cf8352dc95d076b17da650e95f', 'Panama Godown', 'NGOs Colony Bus Stop', 'TNO', '2019-09-22 10:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `walletdetails`
--

CREATE TABLE `walletdetails` (
  `mobile` int(10) NOT NULL,
  `money` decimal(7,3) NOT NULL DEFAULT '0.000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`mobile`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`mobile`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `ticket_bookings`
--
ALTER TABLE `ticket_bookings`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `walletdetails`
--
ALTER TABLE `walletdetails`
  ADD PRIMARY KEY (`mobile`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
