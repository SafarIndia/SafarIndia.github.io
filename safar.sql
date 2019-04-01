-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2019 at 10:38 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safar`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `ID` int(3) NOT NULL,
  `NAME` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`ID`, `NAME`) VALUES
(1, 'Mumbai'),
(2, 'Jaipur'),
(3, 'Bengaluru'),
(4, 'Bhubhaneshwar'),
(5, 'Jammu'),
(6, 'Kochi');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `ID` int(10) NOT NULL,
  `MUMBAI` int(4) NOT NULL,
  `JAIPUR` int(4) NOT NULL,
  `BANGLORE` int(4) NOT NULL,
  `BHUBHANESHWAR` int(4) NOT NULL,
  `JAMMU` int(4) NOT NULL,
  `KOCHI` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`ID`, `MUMBAI`, `JAIPUR`, `BANGLORE`, `BHUBHANESHWAR`, `JAMMU`, `KOCHI`) VALUES
(1, 1, 3415, 2483, 4727, 6726, 4791),
(2, 3567, 1, 3901, 5443, 5733, 5341),
(3, 2866, 4084, 1, 2784, 7595, 1184),
(4, 4020, 4867, 2955, 1, 6735, 3180),
(5, 7258, 5436, 7222, 7357, 1, 8545),
(6, 2949, 4557, 1382, 3024, 7820, 1);

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `ID` int(5) NOT NULL,
  `MUMBAI` text,
  `JAIPUR` text,
  `BANGLORE` text,
  `BHUBHANESWAR` text,
  `JAMMU` text,
  `KOCHI` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`ID`, `MUMBAI`, `JAIPUR`, `BANGLORE`, `BHUBHANESWAR`, `JAMMU`, `KOCHI`) VALUES
(1, '0', '2 hours', '1 hour 50 minutes', '2 hours 25 minutes', '5 hours 40 minutes', '4 hours'),
(2, '1 hour 50 minutes', '0', '2 hours 20 minutes', '5 hours 10 minutes', '3 hours 05 minutes', '2 hours 40 minutes'),
(3, '1 hour 40  minutes', '2 hours 40 minutes', '0', '1 hour 50 minutes', '6 hours 30 minutes', '50 minutes'),
(4, '3 hours 40 minutes', '5 hours 30 minutes', '2 hours', '0', '6 hours 05 minutes', '2 hours 15 minutes'),
(5, '4 hours 05 minutes', '5 hours 55 minutes', '6 hours 20 minutes', '7 hours 40 minutes', '0', '7 hours 30 minutes'),
(6, '2 hours 10 minutes', '2 hours 35 minutes', '1 hour 05 minutes', '2 hours 25 minutes', '7 hours 45 minutes', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
