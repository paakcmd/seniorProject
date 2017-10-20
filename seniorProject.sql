-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2017 at 08:51 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

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
  `value` int(11) NOT NULL,
  `course_no` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `course_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `credit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`value`, `course_no`, `course_title`, `credit`) VALUES
(1, '$course_no', '$course_title', 0),
(2, '$course_no', '$course_title', 0),
(3, 'asdf', 'asdf', 3),
(4, 'asdfsdcwdc', 'asdfsdcwdc', 3);

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
  `course_no` text NOT NULL,
  `section` text NOT NULL,
  `weeks` text NOT NULL,
  `no_of_weeks` text NOT NULL,
  `renumeration_rate` text NOT NULL,
  `traveling_expense` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`value`, `first_name`, `last_name`, `department`, `highest_degree`, `highest_degree_other`, `level`, `address`, `position`, `account_number`, `bank_branch`, `phone`, `mobile`, `fax`, `email`, `home_address`, `course_no`, `section`, `weeks`, `no_of_weeks`, `renumeration_rate`, `traveling_expense`) VALUES
(1, 'asdf', 'asdf', 0, 'BS', 'asdf', 'Graduate Level', 'asdf', 'adsf', 'adsf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf@gmail.com', 'asdf', 'ITS100', '1', '17', 'asdf', 'asdf', 'asdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`value`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`value`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`value`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `value` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `value` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `value` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
