-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 03:27 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jashington1`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custid` int(10) NOT NULL,
  `custname` varchar(40) NOT NULL,
  `custphonenum` int(40) NOT NULL,
  `creditcard` int(40) NOT NULL,
  `UserNameID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoiceno` int(10) NOT NULL,
  `invoicedate` date NOT NULL,
  `total` int(40) NOT NULL,
  `custid` int(10) NOT NULL,
  `UserNameID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `packagecode` int(10) NOT NULL,
  `packagename` varchar(100) NOT NULL,
  `packageprice` int(40) NOT NULL,
  `custid` int(10) NOT NULL,
  `UserNameID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`packagecode`, `packagename`, `packageprice`, `custid`, `UserNameID`) VALUES
(1111, 'ADMISSION TICKET(Adult) Malaysian', 120, 0, 0),
(1112, 'ADMISSION TICKET (Children) Malaysian', 96, 0, 0),
(1113, 'ADMISSION TICKET (Senior Citizen) Malays', 96, 0, 0),
(1114, 'ADMISSION TICKET(Adult) International', 153, 0, 0),
(1115, 'ADMISSION TICKET(Children) International', 126, 0, 0),
(1116, 'ADMISSION TICKET(Senior Citizen) Interna', 126, 0, 0),
(2111, '2 DAY COMBO TICKET (Adult) Malaysian', 216, 0, 0),
(2112, '2 DAY COMBO TICKET (Children) Malaysian', 172, 0, 0),
(2113, '2 DAY COMBO TICKET (Senior Citizen) Malaysian', 172, 0, 0),
(2114, '2 DAY COMBO TICKET (Adult) International', 249, 0, 0),
(2115, '2 DAY COMBO TICKET (Children) International', 202, 0, 0),
(2116, '2 DAY COMBO TICKET (Senior Citizen) International', 202, 0, 0),
(3111, '1 DAY WATERPARK TICKET (Adult) Malaysian', 79, 0, 0),
(3112, '1 DAY WATERPARK TICKET (Children) Malaysian', 55, 0, 0),
(3113, '1 DAY WATERPARK TICKET (Senior Citizen) Malaysian', 55, 0, 0),
(3114, '1 DAY WATERPARK TICKET (Adult) International', 115, 0, 0),
(3115, '1 DAY WATERPARK TICKET (Children) International', 88, 0, 0),
(3116, '1 DAY WATERPARK TICKET (Senior Citizen) International', 88, 0, 0),
(4111, 'FAMILY COMBO (Malaysian)', 345, 0, 0),
(4112, 'FAMILY COMBO (International)', 446, 0, 0),
(5111, 'ANNUAL PASS (PREMIUM) per person', 520, 0, 0),
(5112, 'ANNUAL PASS (AWESOME) per person', 320, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE `username` (
  `UserNameID` int(9) NOT NULL,
  `userName` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`UserNameID`, `userName`, `pass`) VALUES
(1, 'admin', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custid`),
  ADD KEY `UserNameID` (`UserNameID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoiceno`),
  ADD UNIQUE KEY `UserNameID` (`UserNameID`),
  ADD KEY `custid` (`custid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`packagecode`),
  ADD KEY `custid` (`custid`),
  ADD KEY `UserNameID` (`UserNameID`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`UserNameID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoiceno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
  MODIFY `UserNameID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
