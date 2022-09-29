-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 09:42 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Sno` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` decimal(10,0) NOT NULL,
  `service` text NOT NULL,
  `brand` varchar(10) NOT NULL,
  `model` varchar(10) NOT NULL,
  `Time` time NOT NULL,
  `Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Sno`, `name`, `address`, `phone`, `service`, `brand`, `model`, `Time`, `Date`) VALUES
(1, 'Panuganti ', '1-7-86,opp oxygen networks pvt ltd,', '7093456972', 'laptop Service', 'Dell', 'Inspiron', '09:00:00', '2022-04-09'),
(2, 'somesh', '7-687,dilshuknagar,hyderabad', '3245677889', 'install', 'HP', 'Elitebook', '19:12:00', '2022-04-13'),
(3, 'Panuganti Rishi Kumar Goud', '1-7-86,opp oxygen networks pvt ltd,', '7093456972', 'part', 'Dell', 'Inspiron', '13:30:00', '2022-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Sno` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` decimal(10,0) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Sno`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Panuganti Rishi Kumar Goud', 'aladincreater@gmail.com', '7093456972', 'I want to work with you');

-- --------------------------------------------------------

--
-- Table structure for table `ologin`
--

CREATE TABLE `ologin` (
  `Sno` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ologin`
--

INSERT INTO `ologin` (`Sno`, `username`, `password`) VALUES
(1, 'aladincreater', 'Rishi@123');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `Sno` int(10) NOT NULL,
  `ServiceName` text NOT NULL,
  `Cost` int(20) NOT NULL,
  `Time` time(6) NOT NULL,
  `Date` date NOT NULL,
  `Day` text NOT NULL,
  `available` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Sno`, `ServiceName`, `Cost`, `Time`, `Date`, `Day`, `available`) VALUES
(1, 'Part Replacement', 50, '09:30:00.000000', '2022-04-08', 'friday', 1),
(2, 'software installation', 10, '12:30:00.000000', '2022-04-07', 'Thursday', 1),
(3, 'Laptop Servicing', 60, '14:30:00.000000', '2022-04-11', 'Monday', 1),
(4, 'Virus', 50, '12:45:00.000000', '2022-04-30', 'Monday', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `Sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
