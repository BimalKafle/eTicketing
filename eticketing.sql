-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2019 at 07:56 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eticketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `bus_id` int(11) NOT NULL,
  `bus_num` int(11) NOT NULL,
  `bus_source` varchar(100) NOT NULL,
  `bus_destination` varchar(100) NOT NULL,
  `bus_category` varchar(20) NOT NULL,
  `bus_time` varchar(11) NOT NULL,
  `travel_date` varchar(110) NOT NULL,
  `price` int(11) NOT NULL,
  `post_via` varchar(150) NOT NULL,
  `max_seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bus_id`, `bus_num`, `bus_source`, `bus_destination`, `bus_category`, `bus_time`, `travel_date`, `price`, `post_via`, `max_seat`) VALUES
(3, 1345, 'Kathmadu', 'Chitwan', 'night', '12:00', 'Nov 28, 2019', 1300, 'katjldsf', 14),
(4, 1345, 'Kathmadu', 'Chitwan', 'night', '12:00', 'Nov 28, 2019', 1300, 'katjldsf', 14),
(5, 134, 'asdxz', 'adgx', 'asd', '12:44', 'Nov 21, 2019', 1234, 'sadasd', 14),
(6, 1566, 'asfzx', 'xzcxzc', 'asd', '12:55', 'Nov 26, 2019', 1234, 'asdxzcb', 11);

-- --------------------------------------------------------

--
-- Table structure for table `cenquiry`
--

CREATE TABLE `cenquiry` (
  `c_id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Contact` varchar(110) NOT NULL,
  `Email` varchar(110) NOT NULL,
  `Message` varchar(110) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cenquiry`
--

INSERT INTO `cenquiry` (`c_id`, `Name`, `Contact`, `Email`, `Message`, `Date`) VALUES
(1, 'Bimal', '9841346931', 'bimal21@gmail.com', 'I would like to know about the travel package.', '2019-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `p_id` int(10) NOT NULL,
  `creation_date` date NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`p_id`, `creation_date`, `username`, `email`, `password`) VALUES
(3, '2019-11-23', 'bkafle25@gmail.com', 'bimal', '123456'),
(4, '2019-11-23', 'bimal', 'bkafle25@gmail.com', '12345'),
(5, '2019-11-23', 'ram', 'rame21@gmail.com', '12345'),
(6, '2019-11-23', 'sam', 'same22@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `seat_id` int(11) NOT NULL,
  `seat_num` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`seat_id`, `seat_num`) VALUES
(1, 'A'),
(2, 'B'),
(3, '1'),
(4, '2'),
(5, '3'),
(6, '4'),
(7, '5'),
(8, '6'),
(9, '7'),
(10, '8'),
(11, '9'),
(12, '10'),
(13, '11'),
(14, '12'),
(15, '13');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `t_id` int(11) NOT NULL,
  `t_date` date NOT NULL,
  `T_num` int(11) NOT NULL,
  `seat_id` int(11) NOT NULL,
  `Name` varchar(110) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `Contact` varchar(110) NOT NULL,
  `bus_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`t_id`, `t_date`, `T_num`, `seat_id`, `Name`, `Age`, `Gender`, `Contact`, `bus_num`) VALUES
(3, '2019-11-22', 1234, 14, 'Bimal Kafle', 24, 'Male', '9841346931', 0),
(5, '2019-11-23', 7421, 4, 'Bimal', 22, 'male', '12412', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `cenquiry`
--
ALTER TABLE `cenquiry`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `seat_id` (`seat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cenquiry`
--
ALTER TABLE `cenquiry`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`seat_id`) REFERENCES `seat` (`seat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
