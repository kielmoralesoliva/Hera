-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 01, 2021 at 08:24 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hera_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcement_title` text NOT NULL,
  `announcement_content` text NOT NULL,
  `announcement_photo` text NOT NULL,
  `announcement_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request_traffic`
--

CREATE TABLE `request_traffic` (
  `Employee` text NOT NULL,
  `College` text NOT NULL,
  `Campus` text NOT NULL,
  `Status` text NOT NULL,
  `Email` text NOT NULL,
  `Data_Requested` text NOT NULL,
  `Date_Released` text NOT NULL,
  `Signature` text NOT NULL,
  `Request_Type` text NOT NULL,
  `Request_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_traffic`
--

INSERT INTO `request_traffic` (`Employee`, `College`, `Campus`, `Status`, `Email`, `Data_Requested`, `Date_Released`, `Signature`, `Request_Type`, `Request_ID`) VALUES
('Oliva, Ricky Michael', 'PDO', 'Main', 'Pending', 'kiel@rsu.edu.ph', '07/20/2021', '07/20/2021', '', 'Certification of Leave', 1),
('z', 'z', 'z', 'Approved', 'z', 'z', 'z', 'z', 'z', 2),
('', '', '', 'Pending', '', '', '', '', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `emailAddress` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(255) DEFAULT NULL,
  `accountType` enum('HR Officer','Employee') NOT NULL,
  `employeeIdNumber` varchar(255) DEFAULT NULL,
  `furname` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `middle` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `birthdate` varchar(255) DEFAULT NULL,
  `educBackground` varchar(255) DEFAULT NULL,
  `academicRank` varchar(255) DEFAULT NULL,
  `status` enum('Temporary','Regular') DEFAULT NULL,
  `campus` varchar(255) DEFAULT NULL,
  `sickLeave` varchar(255) DEFAULT NULL,
  `vacationLeave` varchar(255) DEFAULT NULL,
  `splLeave` varchar(255) DEFAULT NULL,
  `mandatoryLeave` varchar(255) DEFAULT NULL,
  `maternityLeave` varchar(255) DEFAULT NULL,
  `PaternityLeave` varchar(255) DEFAULT NULL,
  `SoloParentLeave` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `username`, `password`, `emailAddress`, `phoneNumber`, `accountType`, `employeeIdNumber`, `furname`, `name`, `middle`, `college`, `birthdate`, `educBackground`, `academicRank`, `status`, `campus`, `sickLeave`, `vacationLeave`, `splLeave`, `mandatoryLeave`, `maternityLeave`, `PaternityLeave`, `SoloParentLeave`) VALUES
(1, 'test', 'test', 'test@test.com', '0912312312312', 'HR Officer', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'Temporary', 'test', '1', '1', '1', '1', '1', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request_traffic`
--
ALTER TABLE `request_traffic`
  ADD PRIMARY KEY (`Request_ID`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request_traffic`
--
ALTER TABLE `request_traffic`
  MODIFY `Request_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;