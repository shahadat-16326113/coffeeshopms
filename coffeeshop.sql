-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 09:15 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `coffee`
--

CREATE TABLE `coffee` (
  `coffid` int(10) UNSIGNED NOT NULL,
  `coffname` varchar(40) NOT NULL,
  `coffprice` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coffee`
--

INSERT INTO `coffee` (`coffid`, `coffname`, `coffprice`) VALUES
(1, 'blizard', '110'),
(2, 'cold coffee', '100'),
(3, 'hot coffee', '120'),
(4, 'coffee latte', '130'),
(5, 'mango shake', '150');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(10) UNSIGNED NOT NULL,
  `empname` varchar(30) NOT NULL,
  `empdesi` varchar(30) NOT NULL,
  `empsal` varchar(30) NOT NULL,
  `empphn` varchar(30) NOT NULL,
  `empadd` varchar(30) NOT NULL,
  `empnid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `empname`, `empdesi`, `empsal`, `empphn`, `empadd`, `empnid`) VALUES
(1, 'rafi', 'manager', '10000', '01717556492', 'dhaka', '111222233'),
(2, 'shohan', 'xyz', '7000', '0131111111', '20 badaa', '1223333333333'),
(3, 'saadat', 'boss', '100000', '01521109312', 'Brahmanbaria', '454651654');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `custname` varchar(30) NOT NULL,
  `ordrno` int(30) UNSIGNED NOT NULL,
  `ordrdetls` varchar(30) NOT NULL,
  `contactno` varchar(30) NOT NULL,
  `totalbill` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`custname`, `ordrno`, `ordrdetls`, `contactno`, `totalbill`) VALUES
('tapu', 1, 'cold coffee', '01555555888', '100'),
('tusher', 2, 'hot coffee', '01872448752', '200'),
('shahadat', 3, 'vanilla shake', '01762750131', '300');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `fullname` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`fullname`, `username`, `email`, `password`, `phone`, `gender`, `dob`) VALUES
('shahdat', 'saadat32', 'saadat@gmail.com', '1874165498574', '01548452174', 'Male', '2020-05-05'),
('shahdat', 'saaadat23', 'saadat@gmail.com', '1065451564', '01548452174', '', '2020-05-05'),
('shahdat', 'dk32', 'saadat@gmail.com', '210654554174', '01548452174', 'Female', '2020-05-18'),
('shahdat', 'nhuh6', 'saadat@gmail.com', '0564654164', '121515154', 'Male', '2020-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'shahadat', '123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coffee`
--
ALTER TABLE `coffee`
  ADD PRIMARY KEY (`coffid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`ordrno`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coffee`
--
ALTER TABLE `coffee`
  MODIFY `coffid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `ordrno` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
