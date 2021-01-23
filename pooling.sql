-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 23, 2021 at 02:39 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pooling`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `from_area` varchar(30) NOT NULL,
  `to_area` varchar(30) NOT NULL,
  `vehicel_type` varchar(8) NOT NULL,
  `seats` int(11) NOT NULL,
  `allowed_gender` varchar(20) NOT NULL,
  `vehicle_number` int(11) NOT NULL,
  `Additional_info` int(11) NOT NULL,
  `fare` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Phonenumber` mediumint(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'sri', 'asdgf'),
(2, 'raji', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
  `ownerid` int(11) NOT NULL,
  `vehicle_type` varchar(50) NOT NULL,
  `vehicle_number` varchar(10) NOT NULL,
  `seats` int(11) NOT NULL,
  `from_area` varchar(100) NOT NULL,
  `to_area` varchar(100) NOT NULL,
  `travel_date` date NOT NULL,
  `start_time` time NOT NULL,
  `allowed_gender` varchar(20) NOT NULL,
  `Additional_info` varchar(100) NOT NULL,
  `Fare` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Phonenumber` int(11) NOT NULL,
  PRIMARY KEY (`vehicle_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`ownerid`, `vehicle_type`, `vehicle_number`, `seats`, `from_area`, `to_area`, `travel_date`, `start_time`, `allowed_gender`, `Additional_info`, `Fare`, `email`, `Fullname`, `Gender`, `Phonenumber`) VALUES
(0, 'Car', '5035', 2, 'TCE', 'Railway Station', '2021-01-23', '19:44:00', 'Female', '', 0, 'srilakshmiit@gmail.com', '', '', 0),
(0, 'Car', 'TN 30 2019', 3, 'Periyar', 'TCE', '2019-12-30', '08:30:00', 'Any-type', '', 0, 'divya@student.tce.edu', '', '', 0),
(0, 'Bike', 'TN 43 4967', 1, 'Thirunagar', 'TCE', '0000-00-00', '08:30:00', 'Female', '', 25, 'divya@student.tce.edu', '', '', 0),
(0, 'Car', 'TN 44 9823', 2, 'Thirunagar', 'TCE', '2019-12-25', '08:40:00', 'Female', '', 80, 'lavanya@student.tce.edu', '', '', 0),
(0, 'Bike', 'TN 82 1354', 1, 'Palanganatham', 'TCE', '2019-12-27', '08:40:00', 'Female', '', 20, 'k@tce.edu', '', '', 0),
(0, 'Car', 'TN 98 8485', 3, 'Periyar', 'TCE', '2019-12-28', '08:20:00', 'Female', '', 100, 'srilakshmi@student.tce.edu', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fullname` varchar(30) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `Phonenumber` bigint(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Fullname`, `Gender`, `Age`, `Phonenumber`, `username`, `password`, `email`) VALUES
(9, 'Lavanya', 'Female', 19, 9347885612, 'as', '1234', 'lavanya@student.tce.edu'),
(10, 'Srilakshmi', 'Female', 19, 9547812655, 'ss', 'asd', 'srilakshmi@student.tce.edu'),
(11, 'Divya', 'Female', 20, 8923749553, 'divya', '123', 'divya@student.tce.edu'),
(12, 'Preethi', 'Female', 25, 9283748522, 'preethi', '123', 'preethi@student.tce.edu'),
(13, 'Karpagam', 'Female', 30, 9283683684, 'Karpagam', '456', 'k@tce.edu'),
(14, 'Ramya', 'Female', 20, 9578163455, 'ramya', 'jkl', 'ramya@student.tce.edu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
