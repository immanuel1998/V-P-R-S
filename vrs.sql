-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2018 at 03:56 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_vehicles`
--

CREATE TABLE `employee_vehicles` (
  `ID` int(11) NOT NULL,
  `PlateNo` varchar(50) NOT NULL,
  `Driver` varchar(50) NOT NULL,
  `EmployeeID` varchar(50) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Division` varchar(50) NOT NULL,
  `PhoneNo` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Color` varchar(50) NOT NULL,
  `PermitNo` varchar(50) NOT NULL,
  `Remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_vehicles`
--

INSERT INTO `employee_vehicles` (`ID`, `PlateNo`, `Driver`, `EmployeeID`, `Position`, `Division`, `PhoneNo`, `Model`, `Color`, `PermitNo`, `Remarks`) VALUES
(1, 'ABE-1236652', 'IMMANUEL A. CRISTOBAL', '26262', 'JANITOR', 'STOD', '0915238525', 'TOYOTA DUMP TRUCK', 'RED', 'E-001-28', 'ACTIVE'),
(5, 'ga', 'gsgsgs', 'ags', 'sgs', 'asg', 'gsg', 'gsgs', 'gs', 'gs', 'gsags'),
(6, 'fgag', 'sgsg', 'gaga', 'gsg', 'gag', 'gs', 'gsg', 'sgs', 'a', 'sg'),
(7, 'fa', 'sfsfs', 'sa', 'fsf', 'fsf', 'sfs', 'sf', 'fsfs', 's', 'fs');

-- --------------------------------------------------------

--
-- Table structure for table `official_vehicles`
--

CREATE TABLE `official_vehicles` (
  `ID` int(11) NOT NULL,
  `PlateNo` varchar(255) NOT NULL,
  `Driver` varchar(50) NOT NULL,
  `EmployeeID` varchar(50) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Division` varchar(50) NOT NULL,
  `PhoneNo` varchar(50) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Color` varchar(50) NOT NULL,
  `PermitNo` varchar(50) NOT NULL,
  `Remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `official_vehicles`
--

INSERT INTO `official_vehicles` (`ID`, `PlateNo`, `Driver`, `EmployeeID`, `Position`, `Division`, `PhoneNo`, `Model`, `Color`, `PermitNo`, `Remarks`) VALUES
(1, 'ABE-12365', 'IMMANUEL A. CRISTOBAL', '26262s', 'JANITOR', 'STOD', '0915238525', 'TOYOTA TRUCK', 'RED', 'E-001-28fa', 'ACTIVE'),
(2, '084407', 'AMANDO G. GELIG', '0002-18', 'AA IV', 'STOD', '09256262225', 'TOYOTA REVO SR.', 'WHITE', 'O-002-18', 'ACTIVE'),
(3, 'SGM-949', 'EDWARD B. MIRALLES', '0003-18', 'DRIVER/J.O', 'PBDD', '09252588252', 'TOYOTA HI-LUX 3.0', 'WHITE', 'O-003-18', 'ACTIVE'),
(4, 'SGM-969', 'NOEL N. BANTILAN', '0004-18', 'AA IV', 'DARAB', '09525252232', 'TOYOTA HI LUX 3.0', 'WHITE', 'O-004-18', 'ACTIVE'),
(6, 'SKW-551', 'EDUARDO P. ESPINA', '0005-18', 'AA IV', 'STOD', '098525762', 'TOYOTA HI-ACE VAN', 'WHITE', 'O-005-18', 'ACTIVE'),
(7, 'SKW-552', 'LOUIE N. ONIDA', '0006-18', 'DRIVER/J.O', 'LTID', '0953633533', 'TOYOTA HI-ACE VAN', 'WHITE', 'O-006-18', 'ACTIVE'),
(8, 'ULN-597', 'FRANCISCO N. PARENA, JR.', '0007-18', 'DRIVER/J.O', 'STOD', '0952525262', 'MITSUBISHI PAJERO', 'BLACK', 'O-007-18', 'ACTIVE'),
(9, 'SKC-566', 'BENEDICTO B. BARBOSA', '0008-18', 'AA IV', 'LEGAL', '0976837363', 'TOYOTA LANDCRUISER', 'WHITE', 'O-008-18', 'ACTIVE'),
(11, 'ZZH-4252', 'IMMANUEL A. CRISTOBAL', '35353', 'SOFTWARE ENGINEER', 'PLANNING', '09353493615', 'TOYOTA HI ACE VAN', 'BLACK \'n WHITE', 'O-009-18', 'ACTIVE'),
(17, 's', 'dd', 'g', 'd', 'd', 'd', 'd', 'd', 'd', 'd'),
(20, 'saf', 'sfsfs', 'sf', 'fsf', 'sfsa', 'saf', 'fsa', 'fsf', 'fsaf', 'sfsa'),
(21, 'fsa', 'fsfs', 'fsa', 'safs', 'fsaf', 'asf', 'saf', 'saf', 'safsa', 'saf'),
(22, 'fsa', 'sfs', 'fsafs', 'fsf', 'fs', 'sfs', 'fsfs', 'fsf', 'fsf', 'sfs'),
(23, 'fsa', 'safsafa', 'fsa', 'sfsaf', 'fsa', 'safa', 'fsafas', 'fsa', 'fsaf', 'fsa'),
(24, '084407', 'AMANDO G. GELIG', '0002-18', 'AA IV', 'STOD', '09256262225', 'TOYOTA REVO SR.', 'WHITE', 'O-002-18', 'ACTIVE'),
(25, 'SGM-949', 'EDWARD B. MIRALLES', '0003-18', 'DRIVER/J.O', 'PBDD', '09252588252', 'TOYOTA HI-LUX 3.0', 'WHITE', 'O-003-18', 'ACTIVE'),
(26, 'SGM-969', 'NOEL N. BANTILAN', '0004-18', 'AA IV', 'DARAB', '09525252232', 'TOYOTA HI LUX 3.0', 'WHITE', 'O-004-18', 'ACTIVE'),
(27, 'SKW-551', 'EDUARDO P. ESPINA', '0005-18', 'AA IV', 'STOD', '098525762', 'TOYOTA HI-ACE VAN', 'WHITE', 'O-005-18', 'ACTIVE'),
(28, 'SKW-552', 'LOUIE N. ONIDA', '0006-18', 'DRIVER/J.O', 'LTID', '0953633533', 'TOYOTA HI-ACE VAN', 'WHITE', 'O-006-18', 'ACTIVE'),
(29, 'ULN-597', 'FRANCISCO N. PARENA, JR.', '0007-18', 'DRIVER/J.O', 'STOD', '0952525262', 'MITSUBISHI PAJERO', 'BLACK', 'O-007-18', 'ACTIVE'),
(30, 'SKC-566', 'BENEDICTO B. BARBOSA', '0008-18', 'AA IV', 'LEGAL', '0976837363', 'TOYOTA LANDCRUISER', 'WHITE', 'O-008-18', 'ACTIVE'),
(31, 'ZZH-4252', 'IMMANUEL A. CRISTOBAL', '35353', 'SOFTWARE ENGINEER', 'PLANNING', '09353493615', 'TOYOTA HI ACE VAN', 'BLACK \'n WHITE', 'O-009-18', 'ACTIVE'),
(32, 'KLS-452', 'JAKE BALASANOS', '0010-18', 'DRIVER/J.O', 'STOD', '0926836363', 'TOYOTA ELENTRA', 'GREEN', 'O-010-18', 'ACTIVE'),
(33, 'GKY-985', 'MICHEAL CATINA', '0011-18', 'AA III', 'LEGAL', '098525252225', 'MITSUBISHI PAJAMA', 'BLACK', 'O-011-18', 'ACTIVE'),
(34, 'KSL-1942', 'PARK SHIN HYE', '05353', 'REPORTER', 'AMBOT', '123452525', 'TOYOTA HYUNDAI ISUZU', 'BUSAG NGA WHITE', 'O-0012', 'ACTIVE'),
(35, 'ABE-12365', 'IMMANUEL A. CRISTOBAL', '26262', 'JANITOR', 'STOD', '0915238525', 'TOYOTA TRUCK', 'RED', 'E-001-28', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `private_vehicles`
--

CREATE TABLE `private_vehicles` (
  `ID` int(11) NOT NULL,
  `PlateNo` varchar(50) NOT NULL,
  `Driver` varchar(50) NOT NULL,
  `PhoneNo` int(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Color` varchar(50) NOT NULL,
  `BusinessAdd` varchar(50) NOT NULL,
  `PermitNo` varchar(50) NOT NULL,
  `Remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `private_vehicles`
--

INSERT INTO `private_vehicles` (`ID`, `PlateNo`, `Driver`, `PhoneNo`, `Model`, `Color`, `BusinessAdd`, `PermitNo`, `Remarks`) VALUES
(1, 'ABO-4444', 'NANI WO SHINGKAI', 92525252, 'YOTOTA USUKI', 'PULA', 'AGIFU', 'P-001-18', 'ACTIVE PA ak'),
(3, 'fa', 'sfs', 0, 'fsa', 'f', 'fasfa', 'afa', 'sfs'),
(4, 'fa', 'sfs', 0, 'fsf', 'fsaf', 'fa', 'sfsa', 'fsfs'),
(5, 'fsfa', 'sfs', 0, 'sf', 'fa', 'sf', 'fsa', 'fsa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_type` varchar(1) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `account_type`, `created_at`) VALUES
(1, 'adminEdna', 'ateedna', '1', '2018-11-01 14:23:30'),
(2, 'imman', 'watafak', '1', '2018-11-01 14:27:19'),
(3, 'immanuel', 'imman', '', '2018-11-01 14:42:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_vehicles`
--
ALTER TABLE `employee_vehicles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `official_vehicles`
--
ALTER TABLE `official_vehicles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `private_vehicles`
--
ALTER TABLE `private_vehicles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_vehicles`
--
ALTER TABLE `employee_vehicles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `official_vehicles`
--
ALTER TABLE `official_vehicles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `private_vehicles`
--
ALTER TABLE `private_vehicles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
