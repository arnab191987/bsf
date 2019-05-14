-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 06:18 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsf`
--

-- --------------------------------------------------------

--
-- Table structure for table `env_year`
--

CREATE TABLE IF NOT EXISTS `env_year` (
  `ey_id` int(2) NOT NULL,
  `ey_code` varchar(10) DEFAULT NULL,
  `ey_desc` varchar(25) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `env_year`
--

INSERT INTO `env_year` (`ey_id`, `ey_code`, `ey_desc`) VALUES
(1, '18', '2018'),
(2, '19', '2019'),
(3, '20', '2020'),
(4, '21', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `financial_year`
--

CREATE TABLE IF NOT EXISTS `financial_year` (
  `fin_id` int(11) NOT NULL,
  `financial_year` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financial_year`
--

INSERT INTO `financial_year` (`fin_id`, `financial_year`) VALUES
(1, '2017-2018');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE IF NOT EXISTS `form` (
  `form_id` int(11) NOT NULL,
  `form_reg_no` varchar(20) NOT NULL,
  `form_name` varchar(255) NOT NULL,
  `form_rank` varchar(100) NOT NULL,
  `form_cast` varchar(10) NOT NULL,
  `form_maretial_status` varchar(10) NOT NULL,
  `form_coy` varchar(255) NOT NULL,
  `form_medica` varchar(100) NOT NULL,
  `form_profile_pic` varchar(200) NOT NULL,
  `form_signature` varchar(255) NOT NULL,
  `form_qualification` varchar(100) NOT NULL,
  `form_address` text NOT NULL,
  `form_town` varchar(255) NOT NULL,
  `form_ps` varchar(255) NOT NULL,
  `form_pin` varchar(255) NOT NULL,
  `form_po` varchar(255) NOT NULL,
  `form_state` varchar(255) NOT NULL,
  `form_teh` varchar(255) NOT NULL,
  `form_phone` varchar(10) NOT NULL,
  `form_name_nok` varchar(255) NOT NULL,
  `form_rel_nok` varchar(255) NOT NULL,
  `form_dob` date NOT NULL,
  `form_joinig_date` date NOT NULL,
  `form_add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `form_submitted_by` int(11) NOT NULL,
  `form_last_modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `form_updated_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`form_id`, `form_reg_no`, `form_name`, `form_rank`, `form_cast`, `form_maretial_status`, `form_coy`, `form_medica`, `form_profile_pic`, `form_signature`, `form_qualification`, `form_address`, `form_town`, `form_ps`, `form_pin`, `form_po`, `form_state`, `form_teh`, `form_phone`, `form_name_nok`, `form_rel_nok`, `form_dob`, `form_joinig_date`, `form_add_date`, `form_submitted_by`, `form_last_modified_date`, `form_updated_by`) VALUES
(1, '1211', 'hgj', '21212', 'sc', 'no', 'gjjh', 'jkj', 'asdajj.jpg', '', 'hhkk', 'hkujk', 'kkhk', 'hkjh', '7787999', 'khh', 'khk', '', '656575775', 'khjkhk', 'khhkk', '2019-04-21', '2019-04-21', '2019-04-21 10:23:21', 0, '0000-00-00 00:00:00', 0),
(2, '1211', 'hgj', '21212', 'sc', 'no', 'gjjh', 'jkj', '', '', 'hhkk', 'hkujk', 'kkhk', 'hkjh', '7787999', 'khh', 'khk', '', '656575775', 'khjkhk', 'khhkk', '2019-04-21', '2019-04-21', '2019-04-21 10:25:20', 0, '0000-00-00 00:00:00', 0),
(3, '1211', 'hgj', '21212', 'sc', 'no', 'gjjh', 'jkj', '', '', 'hhkk', 'hkujk', 'kkhk', 'hkjh', '7787999', 'khh', 'khk', '', '656575775', 'khjkhk', 'khhkk', '2019-04-21', '2019-04-21', '2019-04-21 10:26:01', 0, '0000-00-00 00:00:00', 0),
(4, '1211', 'asdas', 'sdasd', 'sc', 'yes', 'asdas', 'asdas', 'Presccription Lodha-28-11-2018.jpg', 'Pic2.jpeg', 'asdasd', 'asdasd', 'asdas', 'asdas', '123123', 'asdas', 'asdas', '', '21312312', 'asdas', 'asdas', '2019-04-22', '2019-04-22', '2019-04-22 16:30:24', 0, '2019-04-26 13:06:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE IF NOT EXISTS `month` (
  `em_id` int(2) NOT NULL,
  `em_code` varchar(10) DEFAULT NULL,
  `em_desc` varchar(25) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`em_id`, `em_code`, `em_desc`) VALUES
(1, '01', 'JANUARY'),
(2, '02', 'FEBRUARY'),
(3, '03', 'MARCH'),
(4, '04', 'APRIL'),
(5, '05', 'MAY'),
(6, '06', 'JUNE'),
(7, '07', 'JULY'),
(8, '08', 'AUGUST'),
(9, '09', 'SEPTEMBER'),
(10, '10', 'OCTOBER'),
(11, '11', 'NOVEMBER'),
(12, '12', 'DECEMBER');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_role` int(11) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `password`, `user_role`, `add_date`) VALUES
(1, 'Admin', 'admin', '202cb962ac59075b964b07152d234b70', 1, '2016-12-03 09:09:27'),
(2, 'Arnab', 'arnab', '202cb962ac59075b964b07152d234b70', 2, '2019-04-23 16:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Agent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `env_year`
--
ALTER TABLE `env_year`
  ADD PRIMARY KEY (`ey_id`);

--
-- Indexes for table `financial_year`
--
ALTER TABLE `financial_year`
  ADD PRIMARY KEY (`fin_id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`em_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `env_year`
--
ALTER TABLE `env_year`
  MODIFY `ey_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `financial_year`
--
ALTER TABLE `financial_year`
  MODIFY `fin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `em_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
