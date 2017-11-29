-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2017 at 08:46 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seniorProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_no` varchar(14) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `course_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `credit` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `weeks_no` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_no`, `course_title`, `credit`, `section`, `weeks_no`, `start_date`, `end_date`) VALUES
('1234', '1234', 2, 2, 3, '2017-11-09', '0000-00-00'),
('3LOL293', '3LOL293', 3, 3, 17, '0000-00-00', '0000-00-00'),
('ITS100', 'ITS100', 3, 0, 0, '0000-00-00', '0000-00-00'),
('jj', 'jj', 1, 1, 2, '0000-00-00', '0000-00-00'),
('jjl', 'jj', 1, 1, 2, '0000-00-00', '0000-00-00'),
('jlj', 'jj', 1, 1, 2, '2017-11-15', '0000-00-00'),
('LOL101', 'LOL101', 3, 3, 17, '0000-00-00', '0000-00-00'),
('LOL292', 'LOL292', 3, 3, 17, '0000-00-00', '0000-00-00'),
('LOL293', 'LOL293', 3, 3, 17, '0000-00-00', '0000-00-00'),
('Tday', 'Tday', 3, 3, 17, '2017-11-30', '2017-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `coursexuser`
--

CREATE TABLE `coursexuser` (
  `userid` int(11) NOT NULL,
  `course_no` varchar(14) NOT NULL,
  `section` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `value` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`value`, `name`) VALUES
(1, 'Chemical Engineering'),
(2, 'Civil Engineer'),
(3, 'Common and Graduate Study'),
(4, 'Computer Engineering'),
(5, 'Electronics and Communication Engineering'),
(6, 'Engineering Management'),
(7, 'Industrial Engineering'),
(8, 'Information Technology'),
(9, 'Management TechnologyMechanical Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `teachlog`
--

CREATE TABLE `teachlog` (
  `date` date NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `duration` time NOT NULL,
  `remark` enum('default','makeup','cancellation','') NOT NULL,
  `log_pk` int(11) NOT NULL,
  `course_no` varchar(14) NOT NULL,
  `section` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `value` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `department` int(30) NOT NULL,
  `highest_degree` text NOT NULL,
  `highest_degree_other` text NOT NULL,
  `level` text NOT NULL,
  `address` text NOT NULL,
  `position` text NOT NULL,
  `account_number` text NOT NULL,
  `bank_branch` text NOT NULL,
  `phone` text NOT NULL,
  `mobile` text NOT NULL,
  `fax` text NOT NULL,
  `email` text NOT NULL,
  `home_address` text NOT NULL,
  `renumeration_rate` text NOT NULL,
  `traveling_expense` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`value`, `first_name`, `last_name`, `department`, `highest_degree`, `highest_degree_other`, `level`, `address`, `position`, `account_number`, `bank_branch`, `phone`, `mobile`, `fax`, `email`, `home_address`, `renumeration_rate`, `traveling_expense`) VALUES
(1, 'asdf', 'asdf', 0, 'BS', 'asdf', 'Graduate Level', 'asdf', 'adsf', 'adsf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf@gmail.com', 'asdf', 'asdf', 'asdf'),
(2, 'Fai', 'Lambrechts', 0, 'BS', 'College', 'Undergraduate Level', '439', 'Boss', '1023', 'SCB', '053022277', '0932502244', '', 'fai@gmail.com', '430', '220', '50'),
(3, 'Fai', 'Lambrechts', 0, 'BS', '', 'Undergraduate Level', '99/95 JC Living', 'Student', '016-2-45367-2', 'TMB Bank, Future Park Rangsit', '053033345', '0932502244', '', 'fai@gmail.com', '439 Moo 4 Numprae Hangdong', '500', '200'),
(4, 'Fai PhaLita', 'Hello', 0, ' ', '', ' ', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'try', 'try', 0, 'MS', 'sdf', 'Undergraduate Level', 'sdf', 'ddd', '23435234', 'Hello', '091', '34314', '1123124', '1232@hotmail.com', 'rtert', '214', '22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_no`,`section`);

--
-- Indexes for table `coursexuser`
--
ALTER TABLE `coursexuser`
  ADD PRIMARY KEY (`userid`,`course_no`,`section`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`value`);

--
-- Indexes for table `teachlog`
--
ALTER TABLE `teachlog`
  ADD PRIMARY KEY (`log_pk`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`value`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `value` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teachlog`
--
ALTER TABLE `teachlog`
  MODIFY `log_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `value` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
