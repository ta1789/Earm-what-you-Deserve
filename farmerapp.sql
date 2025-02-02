-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2025 at 04:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmerapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'abc', 'abc', '');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `ctype` varchar(255) NOT NULL,
  `farmname` varchar(255) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `fees` int(11) DEFAULT NULL,
  `bDate` varchar(255) DEFAULT NULL,
  `userStatus` int(11) DEFAULT NULL,
  `farmStatus` int(11) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `ctype`, `farmname`, `userId`, `fees`, `bDate`, `userStatus`, `farmStatus`, `updationDate`) VALUES
(6, 'Onion', 'Tanmay', 8, 500, '2002-01-02', 1, 1, NULL),
(7, 'Onion', 'Tanmay', 8, 500, '2002-01-02', 1, 1, NULL),
(8, 'Onion', 'Tanmay', 8, 500, '2002-01-02', 1, 1, NULL),
(9, 'Onion', 'Tanmay', 8, 500, '2002-01-02', 1, 1, NULL),
(10, 'Onion', 'Tanmay', 8, 500, '2002-01-02', 1, 1, NULL),
(11, 'Onion', 'Tanmay', 8, 500, '2005-02-03', 1, 1, NULL),
(12, 'Onion', '', 1, 500, '', 1, 1, NULL),
(13, 'Onion', '', 1, 1000, '', 1, 1, NULL),
(14, 'Onion', '', 1, 1000, '', 1, 1, NULL),
(15, 'Onion', '', 1, 1000, '', 1, 1, NULL),
(16, 'Onion', '', 1, 1000, '', 1, 1, NULL),
(17, 'Onion', '', 1, 1000, '', 1, 1, NULL),
(18, 'Onion', '', 1, 1000, '', 1, 1, NULL),
(19, 'Onion', '', 1, 1000, '', 1, 1, NULL),
(20, 'Onion', '', 1, 1000, '', 1, 1, NULL),
(21, 'abc', '', 1, 100, '', 1, 1, NULL),
(22, 'abc', '', 1, 100, '', 1, 1, NULL),
(23, 'abc', '', 1, 100, '', 1, 1, NULL),
(24, 'Onion', '', 1, 1000, '', 1, 1, NULL),
(25, 'PQR', '', 1, 1000, '', 1, 1, NULL),
(26, 'PQR', '', 1, 1000, '', 1, 1, NULL),
(27, 'PQR', '', 1, 1000, '', 1, 1, NULL),
(28, 'Tomato', 'ABC', 8, 1000, '2002-01-02', 1, 1, NULL),
(29, 'Tomato', 'Amit', 8, 1000, '2023-11-09', 1, 1, NULL),
(30, 'Onion', 'Tanmay', 8, 500, '2202-01-02', 1, 1, NULL),
(31, 'Tomato', 'ABC', 8, 500, '2023-11-24', 1, 1, NULL),
(32, 'Tomato', 'ABC', 8, 500, '2023-11-24', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `croptype`
--

CREATE TABLE `croptype` (
  `id` int(11) NOT NULL,
  `ctype` varchar(255) DEFAULT NULL,
  `farmname` text NOT NULL,
  `userId` int(11) NOT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int(11) NOT NULL,
  `ctype` varchar(25) DEFAULT NULL,
  `farmname` varchar(255) DEFAULT NULL,
  `farmid` int(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `grade` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `ctype`, `farmname`, `farmid`, `price`, `creationDate`, `updationDate`, `grade`) VALUES
(1, 'Onion', 'Tanmay', 1, '500', '2023-11-06 23:06:49', NULL, 'Grade 1'),
(2, 'Tomato', 'Amit', 2, '1000', '2023-11-06 23:06:49', NULL, 'Grade 2'),
(3, 'Onion', 'Peter', 3, '600', '2023-11-06 23:07:44', NULL, 'Grade 3'),
(27, 'Tomato', 'ABC', NULL, '500', '2023-11-24 09:13:36', '2023-11-24 09:35:27', 'Grade 2'),
(28, 'Tomato', 'ABC', NULL, '500', '2023-11-24 09:21:28', '2023-11-24 09:35:27', 'Grade 2'),
(29, 'Tomato', 'ABC', NULL, '500', '2023-11-24 09:34:02', '2023-11-24 09:35:27', 'Grade 2'),
(30, 'Tomato', 'ABC', NULL, '500', '2023-11-24 15:43:07', '2023-11-24 15:45:55', 'Grade 2');

-- --------------------------------------------------------

--
-- Table structure for table `farmerslog`
--

CREATE TABLE `farmerslog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `farmerslog`
--

INSERT INTO `farmerslog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(20, 0, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-07 09:55:17', NULL, 1),
(21, NULL, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-07 12:01:04', NULL, 0),
(22, 1, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-07 12:01:14', '07-11-2023 05:42:14 PM', 1),
(23, 1, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-07 12:12:24', '07-11-2023 09:16:12 PM', 1),
(24, 1, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-07 20:27:24', '08-11-2023 02:40:01 AM', 1),
(25, 1, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-07 21:10:12', '08-11-2023 03:07:21 AM', 1),
(26, NULL, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-07 21:42:06', NULL, 0),
(27, 1, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-07 21:42:17', '08-11-2023 03:21:15 AM', 1),
(28, 1, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-07 22:17:16', '08-11-2023 04:01:12 AM', 1),
(29, 1, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-07 22:33:25', '08-11-2023 05:20:16 AM', 1),
(30, 1, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-08 00:57:35', '08-11-2023 06:47:09 AM', 1),
(31, 1, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-08 13:04:25', '08-11-2023 09:11:04 PM', 1),
(32, 1, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-08 15:45:20', '08-11-2023 09:28:36 PM', 1),
(33, 1, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-08 16:02:23', '08-11-2023 09:42:54 PM', 1),
(34, 1, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-09 06:01:06', '09-11-2023 11:31:20 AM', 1),
(35, 1, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-09 10:09:35', '09-11-2023 03:41:39 PM', 1),
(36, NULL, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-24 02:05:25', NULL, 0),
(37, 1, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-24 02:05:35', '24-11-2023 07:35:44 AM', 1),
(38, NULL, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-24 09:09:31', NULL, 0),
(39, NULL, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-24 09:09:40', NULL, 0),
(40, 1, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-24 09:09:50', '24-11-2023 02:41:03 PM', 1),
(41, 1, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-24 09:12:40', '24-11-2023 02:44:52 PM', 1),
(42, NULL, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-24 09:15:45', NULL, 0),
(43, 1, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-24 09:16:13', '24-11-2023 02:46:15 PM', 1),
(44, 1, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-24 09:20:09', '24-11-2023 03:01:19 PM', 1),
(45, 1, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-24 09:33:35', '24-11-2023 03:05:49 PM', 1),
(46, 1, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-24 15:42:10', '24-11-2023 09:13:41 PM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `farmerssup`
--

CREATE TABLE `farmerssup` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `mno` text NOT NULL,
  `city` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmerssup`
--

INSERT INTO `farmerssup` (`id`, `fullname`, `address`, `mno`, `city`, `gender`, `email`, `password`, `regDate`, `updationDate`) VALUES
(1, 'ABC', 'PQR', '7080174440', 'Vellore', 'male', 'tanmeh.2002@gmail.com', '2a20afcafd3cdfe4b4f858f85cc24800', '2023-11-07 10:07:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactus`
--

CREATE TABLE `tblcontactus` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(12) DEFAULT NULL,
  `message` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `LastupdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `IsRead` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(24, 8, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-06 22:49:13', '07-11-2023 04:23:54 AM', 1),
(25, 8, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-06 22:55:43', NULL, 1),
(26, 8, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-07 21:37:35', '08-11-2023 03:11:58 AM', 1),
(27, 8, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-07 21:51:25', '08-11-2023 03:24:14 AM', 1),
(28, 8, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-07 21:54:28', '08-11-2023 03:24:38 AM', 1),
(29, 8, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-07 21:57:02', '08-11-2023 03:47:07 AM', 1),
(30, 8, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-07 22:31:21', '08-11-2023 04:03:14 AM', 1),
(31, NULL, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-07 23:50:28', NULL, 0),
(32, 8, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-07 23:50:38', '08-11-2023 06:27:28 AM', 1),
(33, NULL, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-08 01:17:20', NULL, 0),
(34, 8, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-08 01:17:28', NULL, 1),
(35, 8, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-08 15:58:47', '08-11-2023 09:29:17 PM', 1),
(36, 8, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-09 10:11:48', NULL, 1),
(37, 8, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-24 09:08:45', '24-11-2023 02:39:02 PM', 1),
(38, 8, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-24 09:35:59', '24-11-2023 03:07:11 PM', 1),
(39, 8, 'tanmeh.2002@gmail.com', 0x3132372e302e302e3100000000000000, '2023-11-24 14:51:28', '24-11-2023 09:11:03 PM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `mno` text NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `address`, `mno`, `city`, `gender`, `email`, `password`, `regDate`, `updationDate`) VALUES
(8, 'Tanmay Mehrotra', 'ABC', '7080174440', 'Vellore', 'male', 'tanmeh.2002@gmail.com', '8bd9017572ebd590fda1d0128b04202d', '2023-11-06 22:49:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `croptype`
--
ALTER TABLE `croptype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmerslog`
--
ALTER TABLE `farmerslog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmerssup`
--
ALTER TABLE `farmerssup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `croptype`
--
ALTER TABLE `croptype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `farmerslog`
--
ALTER TABLE `farmerslog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `farmerssup`
--
ALTER TABLE `farmerssup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
