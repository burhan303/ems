-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2016 at 06:23 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_detail`
--

CREATE TABLE IF NOT EXISTS `employee_detail` (
  `e_id` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_role` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `image` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_detail`
--

INSERT INTO `employee_detail` (`e_id`, `name`, `email`, `password`, `user_role`, `gender`, `date_of_birth`, `blood_group`, `address`, `contact`, `image`) VALUES
('', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'male', '0000-00-00', 'Blood', '', '', ''),
('1', 'aaa', 'a@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 'a', 'male', '2016-03-11', 'B+', '', '', ''),
('2', 'b', 'b@gmail.com', '08f8e0260c64418510cefb2b06eee5cd', 'bbbb', 'male', '2016-03-09', NULL, NULL, NULL, NULL),
('258', 'talukder', 'gh@gmail.com', 'f718499c1c8cef6730f9fd03c8125cab', 'accounting', 'male', '2016-03-17', 'AB-', 'poiuy', '884521587', 0x4c6561726e205048502d20466f72206c6f6f70202d203130596f75747562652e636f6d2e6d7034),
('45', 'Shahali', 'shahali@shahali.com', '3d6cc93fb30e487cf3b41853bc47a816', 'shahali', 'male', '2016-03-24', NULL, NULL, NULL, NULL),
('555', 'Burhan Uddin vi', 'burhan@email.com', '00c66aaf5f2c3f49946f15c1ad2ea0d3', 'm', 'male', '0000-00-00', 'Blood', '', '', ''),
('5555555555', 'ggg', 'g@gmail.com', 'e1c032a14996992c805ec8b899decf62', 'jkjhskjdf', 'female', '2016-03-21', NULL, NULL, NULL, NULL),
('6', 'Nasir', 'nasir@nasir.com', '78e96b7de2cfaa6d3743781169c32680', 'nasair', 'male', '2016-03-18', 'AB+', 'Nasir', '1245', 0x496e74726f20746f2050485020417272617973202d205048502056697267696e202d203130596f75747562652e636f6d2e6d7034),
('999', 'tyu', 'tyu@gmail.com', '68053af2923e00204c3ca7c6a3150cf7', 'sale', 'male', '0000-00-00', 'Blood', 'opu', '852456', 0x426173696373205048502d2d204c65637475726520372d205377697463682043617365202d203130596f75747562652e636f6d2e6d7034);

-- --------------------------------------------------------

--
-- Table structure for table `employ_status`
--

CREATE TABLE IF NOT EXISTS `employ_status` (
  `sl_no` int(10) NOT NULL,
  `e_id` varchar(10) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `salary` int(10) DEFAULT NULL,
  `leave_remain` int(3) DEFAULT NULL,
  `working_hour` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `working_history`
--

CREATE TABLE IF NOT EXISTS `working_history` (
  `sl_no` int(10) NOT NULL DEFAULT '0',
  `e_id` varchar(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `check_in_time` time DEFAULT NULL,
  `check_out_time` time DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_detail`
--
ALTER TABLE `employee_detail`
  ADD PRIMARY KEY (`e_id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employ_status`
--
ALTER TABLE `employ_status`
  ADD PRIMARY KEY (`sl_no`), ADD KEY `e_id` (`e_id`);

--
-- Indexes for table `working_history`
--
ALTER TABLE `working_history`
  ADD PRIMARY KEY (`sl_no`), ADD KEY `e_id` (`e_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employ_status`
--
ALTER TABLE `employ_status`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `employ_status`
--
ALTER TABLE `employ_status`
ADD CONSTRAINT `employ_status_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `employee_detail` (`e_id`);

--
-- Constraints for table `working_history`
--
ALTER TABLE `working_history`
ADD CONSTRAINT `working_history_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `employee_detail` (`e_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
