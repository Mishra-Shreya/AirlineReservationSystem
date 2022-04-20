-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3305
-- Generation Time: Apr 20, 2022 at 10:58 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline_res_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `aadhar` bigint(12) NOT NULL,
  `flight_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `gender`, `aadhar`, `flight_id`) VALUES
(1, 'Shreya', 'F', 456789012345, 'AI101'),
(2, 'Roshini', 'F', 333344442222, 'VIS9277'),
(3, 'Isha', 'F', 123412341234, 'AI101'),
(4, 'Sourish', 'M', 222211113333, 'IDGO229'),
(5, 'Riya', 'F', 111133332222, 'AI342'),
(6, 'Labdhi', 'F', 444455556666, 'KF249'),
(7, 'Sanjay', 'M', 555588887676, 'SJ53');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` int(11) NOT NULL,
  `flightid` varchar(10) NOT NULL,
  `flightname` varchar(25) NOT NULL,
  `capacity` int(11) NOT NULL,
  `vacant_seats` int(11) NOT NULL,
  `startdes` varchar(25) NOT NULL,
  `finaldes` varchar(25) NOT NULL,
  `departuretime` time NOT NULL,
  `arrivaltime` time NOT NULL,
  `charges` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `flightid`, `flightname`, `capacity`, `vacant_seats`, `startdes`, `finaldes`, `departuretime`, `arrivaltime`, `charges`) VALUES
(1, 'AI101', 'Air India', 200, 185, 'BOM', 'DEL', '10:00:00', '13:30:00', 5000),
(2, 'AI1232', 'Air India', 200, 185, 'DEL', 'CCN', '17:10:00', '23:45:00', 5324),
(3, 'AI12648', 'Air India', 200, 185, 'HYD', 'MAA', '19:10:00', '23:45:00', 8844),
(4, 'AI1556', 'Air India', 200, 185, 'BOM', 'CCN', '10:00:00', '13:30:00', 5460),
(5, 'AI158', 'Air India', 200, 185, 'HYD', 'PUNE', '09:10:00', '13:45:00', 3333),
(6, 'AI17425', 'Air India', 200, 185, 'DEL', 'BNS', '10:00:00', '13:30:00', 5770),
(7, 'AI17544', 'Air India', 200, 185, 'BOM', 'MAA', '10:08:00', '13:30:00', 5060),
(8, 'AI178', 'Air India', 200, 185, 'HYD', 'DEL', '09:15:00', '12:45:00', 9000),
(9, 'AI179756', 'Air India', 200, 185, 'CCN', 'BNS', '10:51:00', '13:32:00', 5060),
(10, 'AI31123', 'Air India', 200, 185, 'BNS', 'HYD', '19:10:00', '23:45:00', 5555),
(11, 'AI3228', 'Air India', 200, 185, 'HYD', 'DEL', '09:15:00', '12:45:00', 9759),
(12, 'AI32321', 'Air India', 150, 135, 'DEL', 'BNS', '14:55:00', '17:46:00', 3211),
(13, 'AI33321', 'Air India', 200, 185, 'HYD', 'MAA', '09:15:00', '12:45:00', 9759),
(14, 'AI334', 'Air India', 150, 135, 'MAA', 'BNS', '14:55:00', '17:48:00', 4899),
(15, 'AI33658', 'Air India', 200, 185, 'HYD', 'DEL', '09:25:00', '12:55:00', 4359),
(16, 'AI342', 'Air India', 150, 135, 'HYD', 'BNS', '14:55:00', '17:48:00', 11000),
(17, 'AI3428', 'Air India', 150, 135, 'DEL', 'BNS', '14:55:00', '17:48:00', 4699),
(18, 'AI3465', 'Air India', 150, 135, 'DEL', 'MAA', '14:55:00', '17:08:00', 4899),
(19, 'AI3748', 'Air India', 200, 185, 'BOM', 'GOI', '05:15:00', '12:45:00', 9759),
(20, 'AI4448', 'Air India', 200, 185, 'HYD', 'MAA', '19:10:00', '23:45:00', 2150),
(21, 'IDGO1111', 'Indigo', 100, 85, 'HYD', 'BLR', '13:56:00', '16:25:00', 8510),
(22, 'IDGO1421', 'Indigo', 100, 85, 'CCN', 'HYD', '12:55:00', '16:25:00', 8510),
(23, 'IDGO1662', 'Indigo', 100, 85, 'MAA', 'HYD', '13:05:00', '16:25:00', 8810),
(24, 'IDGO1709', 'Indigo', 150, 135, 'GOI', 'MAA', '16:15:00', '08:30:00', 7457),
(25, 'IDGO180', 'Indigo', 100, 85, 'BOM', 'HYD', '12:55:00', '15:45:00', 5199),
(26, 'IDGO229', 'Indigo', 150, 135, 'GOI', 'DEL', '16:15:00', '08:30:00', 7560),
(27, 'IDGO352', 'Indigo', 100, 85, 'CCN', 'HYD', '13:55:00', '15:54:00', 8510),
(28, 'IDGO709', 'Indigo', 150, 135, 'GOI', 'MAA', '16:03:00', '08:35:00', 7567),
(29, 'IDGO732', 'Indigo', 150, 135, 'CCN', 'MAA', '16:19:00', '08:30:00', 7550),
(30, 'IDGO789', 'Indigo', 150, 135, 'GOI', 'BLR', '06:15:00', '08:30:00', 4500),
(31, 'KF1493', 'Kingfisher', 450, 435, 'BOM', 'BLR', '23:55:00', '02:35:00', 4895),
(32, 'KF249', 'Kingfisher', 450, 435, 'CCN', 'DEL', '10:05:00', '12:45:00', 6905),
(33, 'KF269', 'Kingfisher', 450, 435, 'BOM', 'CCN', '23:25:00', '02:05:00', 7159),
(34, 'KF376', 'Kingfisher', 450, 435, 'BLR', 'GOI', '23:55:00', '02:35:00', 8799),
(35, 'KF66759', 'Kingfisher', 450, 435, 'BOM', 'BLR', '23:22:00', '02:32:00', 8599),
(36, 'KF7219', 'Kingfisher', 450, 435, 'MAA', 'DEL', '17:15:00', '12:05:00', 9959),
(37, 'KF775449', 'Kingfisher', 450, 435, 'BLR', 'DEL', '17:15:00', '12:15:00', 5320),
(38, 'KF9779', 'Kingfisher', 450, 435, 'PUNE', 'MAA', '17:15:00', '22:15:00', 5900),
(39, 'VIS1113', 'Vistara', 100, 85, 'MAA', 'PUNE', '11:45:00', '22:35:00', 4721),
(40, 'VIS1159', 'Vistara', 150, 135, 'PUNE', 'CCN', '14:55:00', '15:45:00', 5099),
(41, 'VIS12123', 'Vistara', 100, 85, 'BLR', 'PUNE', '14:35:00', '22:35:00', 5555),
(42, 'VIS122', 'Vistara', 100, 85, 'BLR', 'CCN', '15:45:00', '21:35:00', 5555),
(43, 'VIS129', 'Vistara', 150, 135, 'MAA', 'BLR', '14:55:00', '15:45:00', 7655),
(44, 'VIS145', 'Vistara', 150, 135, 'GOI', 'BLR', '14:55:00', '15:45:00', 9000),
(45, 'VIS224', 'Vistara', 150, 135, 'BOM', 'PUNE', '14:05:00', '15:45:00', 7777),
(46, 'VIS229', 'Vistara', 150, 135, 'CCN', 'BLR', '14:25:00', '15:45:00', 5069),
(47, 'VIS23', 'Vistara', 150, 135, 'BLR', 'PUNE', '15:45:00', '17:35:00', 2700),
(48, 'VIS2323', 'Vistara', 100, 85, 'PUNE', 'DEL', '15:45:00', '20:05:00', 4431),
(49, 'VIS3123', 'Vistara', 100, 85, 'PUNE', 'MAA', '08:55:00', '12:05:00', 5599),
(50, 'VIS3219', 'Vistara', 150, 135, 'PUNE', 'BLR', '14:55:00', '15:45:00', 5099),
(51, 'VIS34223', 'Vistara', 100, 85, 'BNS', 'BLR', '09:51:00', '12:43:00', 9999),
(52, 'VIS3643', 'Vistara', 100, 85, 'MAA', 'BLR', '02:55:00', '12:45:00', 9950),
(53, 'VIS443', 'Vistara', 100, 85, 'MAA', 'BLR', '08:55:00', '12:45:00', 9999),
(54, 'VIS6989', 'Vistara', 150, 135, 'PUNE', 'CCN', '14:54:00', '15:45:00', 5449),
(55, 'VIS7629', 'Vistara', 150, 135, 'BOM', 'CCN', '14:45:00', '15:05:00', 5555),
(56, 'VIS89', 'Vistara', 150, 135, 'GOI', 'BLR', '14:55:00', '15:45:00', 5000),
(57, 'VIS9239', 'Vistara', 150, 135, 'BOM', 'MAA', '14:05:00', '15:45:00', 5555),
(58, 'VIS929', 'Vistara', 150, 135, 'BOM', 'BLR', '14:05:00', '15:45:00', 3324),
(79, 'AA854', 'Air Asia', 255, 240, 'MAA', 'BNS', '10:45:00', '14:30:00', 5770),
(80, 'AA113', 'Air Asia', 255, 240, 'HYD', 'PUNE', '13:10:00', '21:49:00', 8844),
(81, 'AA14', 'Air Asia', 255, 240, 'BNS', 'GOI', '14:56:00', '17:48:00', 4699),
(82, 'AA925', 'Air Asia', 100, 85, 'MAA', 'HYD', '14:35:00', '16:21:00', 7810),
(83, 'AA825', 'Air Asia', 255, 240, 'GOI', 'MAA', '16:45:00', '08:30:00', 7459),
(84, 'AA144', 'Air Asia', 255, 240, 'BOM', 'MAA', '14:25:00', '16:45:00', 5555),
(85, 'AA188', 'Air Asia', 255, 240, 'MAA', 'DEL', '08:55:00', '12:27:00', 9199),
(86, 'AA325', 'Air Asia', 100, 85, 'BLR', 'PUNE', '15:43:00', '21:05:00', 4421),
(87, 'SJ319', 'SpiceJet', 150, 135, 'PUNE', 'BLR', '04:55:00', '07:45:00', 6533),
(88, 'SJ3796', 'SpiceJet', 200, 185, 'BOM', 'BNS', '06:18:00', '12:45:00', 9219),
(89, 'SJ53', 'SpiceJet', 450, 435, 'BOM', 'BLR', '23:35:00', '02:35:00', 4112),
(90, 'SJ21', 'SpiceJet', 450, 435, 'MAA', 'DEL', '17:16:00', '12:55:00', 9969),
(91, 'SJ11', 'SpiceJet', 200, 185, 'BOM', 'MAA', '10:08:00', '13:30:00', 5560),
(92, 'SJ37', 'SpiceJet', 200, 185, 'HYD', 'CCN', '17:10:00', '23:45:00', 5324),
(93, 'SJ34', 'SpiceJet', 150, 135, 'MAA', 'BOM', '14:25:00', '17:48:00', 7485),
(94, 'SJ324', 'SpiceJet', 100, 85, 'CCN', 'HYD', '02:55:00', '06:25:00', 4310),
(95, 'SJ3219', 'SpiceJet', 150, 135, 'GOI', 'MAA', '16:03:00', '08:35:00', 7567),
(96, 'SJ3729', 'SpiceJet', 150, 135, 'BOM', 'CCN', '04:45:00', '09:05:00', 5555),
(97, 'SJ419', 'SpiceJet', 100, 85, 'MAA', 'BLR', '02:55:00', '12:45:00', 10950),
(98, 'SJ89', 'SpiceJet', 100, 85, 'BLR', 'PUNE', '14:35:00', '22:35:00', 5555),
(99, 'AA954', 'Air Asia', 255, 240, 'MAA', 'BNS', '10:45:00', '14:30:00', 6991),
(100, 'AA2994', 'Air Asia', 100, 85, 'GOI', 'MAA', '03:10:00', '09:45:00', 5555),
(101, 'AA998', 'Air Asia', 255, 240, 'BOM', 'MAA', '07:55:00', '11:40:00', 5555),
(102, 'AA73232', 'Air Asia', 100, 85, 'CCN', 'PUNE', '17:45:00', '21:11:00', 9491),
(103, 'SJ889', 'SpiceJet', 150, 135, 'PUNE', 'BLR', '05:50:00', '08:45:00', 4299),
(104, 'SJ0251', 'SpiceJet', 150, 135, 'CCN', 'GOI', '16:10:00', '08:05:00', 8567),
(105, 'AI8975', 'Air India', 200, 185, 'GOI', 'BNS', '01:00:00', '03:30:00', 5069),
(106, 'AI1266', 'Air India', 200, 185, 'MAA', 'PUNE', '04:10:00', '08:45:00', 5555),
(107, 'IDGO1262', 'Indigo', 100, 85, 'BOM', 'PUNE', '13:55:00', '16:59:00', 8810),
(108, 'VIS9277', 'Vistara', 150, 135, 'BOM', 'DEL', '17:05:00', '19:45:00', 7778),
(109, 'VIS3393', 'Vistara', 100, 85, 'BNS', 'PUNE', '08:56:00', '12:45:00', 9979),
(110, 'KF7739', 'Kingfisher', 450, 435, 'BOM', 'BLR', '23:55:00', '02:37:00', 11299);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aadhar` (`aadhar`),
  ADD KEY `flight_id` (`flight_id`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`),
  ADD KEY `flightid` (`flightid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`flight_id`) REFERENCES `flights` (`flightid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
