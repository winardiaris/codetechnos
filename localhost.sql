-- phpMyAdmin SQL Dump
-- version 4.2.12deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2014 at 05:22 PM
-- Server version: 5.5.39-1
-- PHP Version: 5.6.3-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codetechnos`
--
CREATE DATABASE IF NOT EXISTS `codetechnos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `codetechnos`;

-- --------------------------------------------------------

--
-- Table structure for table `system_log`
--

CREATE TABLE IF NOT EXISTS `system_log` (
`log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `log_location` text NOT NULL,
  `log_value` text NOT NULL,
  `log_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_log`
--

INSERT INTO `system_log` (`log_id`, `user_id`, `log_location`, `log_value`, `log_time`) VALUES
(1, 0, 'login', 'logout:', '0000-00-00 00:00:00'),
(2, 0, 'login', 'logout:', '0000-00-00 00:00:00'),
(3, 2, 'login', 'success:', '2014-11-20 21:01:40'),
(4, 0, 'login', 'logout:', '0000-00-00 00:00:00'),
(5, 2, 'login', 'success:', '2014-11-20 21:04:04'),
(6, 0, 'login', 'logout:', '0000-00-00 00:00:00'),
(7, 0, 'login', 'logout:', '0000-00-00 00:00:00'),
(8, 0, 'login', 'logout:', '0000-00-00 00:00:00'),
(9, 2, 'login', 'success:', '2014-11-20 21:07:28'),
(10, 2, 'login', 'success:', '2014-11-20 21:08:43'),
(11, 2, 'login', 'success:', '2014-11-20 21:08:50'),
(12, 2, 'login', 'success:', '2014-11-20 21:10:19'),
(13, 2, 'login', 'success:', '2014-11-20 21:10:54'),
(14, 2, 'login', 'success:', '2014-11-20 21:10:59'),
(15, 2, 'login', 'success:', '2014-11-20 21:11:35'),
(16, 2, 'login', 'success:', '2014-11-20 21:12:45'),
(17, 2, 'login', 'success:', '2014-11-20 21:14:07'),
(18, 2, 'login', 'success:', '2014-11-20 21:14:11'),
(19, 2, 'login', 'success:', '2014-11-20 21:15:11'),
(20, 2, 'login', 'success:', '2014-11-20 21:17:29'),
(21, 2, 'login', 'success:', '2014-11-21 14:18:18'),
(22, 2, 'login', 'success:', '2014-11-21 14:18:28'),
(23, 2, 'login', 'success:', '2014-11-21 14:19:11'),
(24, 0, 'login', 'logout:', '0000-00-00 00:00:00'),
(25, 2, 'login', 'success:', '2014-11-21 14:20:04'),
(26, 0, 'login', 'logout:', '0000-00-00 00:00:00'),
(27, 2, 'login', 'success:', '2014-11-21 14:26:47'),
(28, 2, 'login', 'success:', '2014-11-21 14:29:16'),
(29, 2, 'login', 'success:', '2014-11-21 14:29:56'),
(30, 0, 'login', 'logout:', '2014-11-21 14:32:09'),
(31, 2, 'login', 'success:', '2014-11-21 14:32:15'),
(32, 2, 'login', 'success:', '2014-11-21 14:32:27'),
(33, 2, 'login', 'success:', '2014-11-21 14:33:01'),
(34, 2, 'login', 'success:', '2014-11-21 14:33:09'),
(35, 1, 'login', 'success:', '2014-11-21 14:34:23'),
(36, 2, 'login', 'success:', '2014-11-21 14:34:29'),
(37, 0, 'login', 'logout:', '2014-11-21 14:36:59'),
(38, 2, 'login', 'success:', '2014-11-21 14:37:05'),
(39, 0, 'login', 'logout:', '2014-11-21 14:38:47'),
(40, 2, 'login', 'success:', '2014-11-21 14:38:52'),
(41, 2, 'login', 'success:', '2014-11-21 14:39:19'),
(42, 2, 'login', 'success:', '2014-11-21 15:09:33'),
(43, 2, 'login', 'success:', '2014-11-21 23:27:22'),
(44, 0, 'login', 'logout:', '2014-11-21 23:30:00'),
(45, 2, 'login', 'success:', '2014-11-21 23:31:03'),
(46, 0, 'login', 'logout:', '2014-11-21 23:31:08'),
(47, 2, 'login', 'success:', '2014-11-22 00:00:07'),
(48, 0, 'login', 'logout:', '2014-11-22 00:00:38'),
(49, 2, 'login', 'success:', '2014-11-22 00:02:42'),
(50, 0, 'login', 'logout:', '2014-11-22 00:03:26'),
(51, 0, 'login', 'logout:', '2014-11-22 00:12:57'),
(52, 2, 'login', 'success:', '2014-11-22 00:27:28'),
(53, 0, 'login', 'logout:', '2014-11-22 00:29:31'),
(54, 2, 'login', 'success:', '2014-11-22 00:47:06'),
(55, 2, 'login', 'success:', '2014-11-22 11:54:35'),
(56, 2, 'login', 'success:', '2014-11-29 16:47:38'),
(57, 0, 'login', 'logout:', '2014-11-29 16:48:42'),
(58, 2, 'login', 'success:', '2014-11-29 21:58:04'),
(59, 2, 'login', 'success:', '2014-11-29 22:47:02'),
(60, 2, 'login', 'success:', '2014-11-29 23:41:07'),
(61, 0, 'login', 'logout:', '2014-11-29 23:41:16'),
(62, 2, 'login', 'success:', '2014-11-29 23:41:28'),
(63, 6, 'login', 'success:', '2014-11-29 23:45:51'),
(64, 0, 'login', 'logout:', '2014-11-29 23:48:04'),
(65, 2, 'login', 'success:', '2014-11-30 15:04:14'),
(66, 2, 'login', 'success:', '2014-11-30 16:40:00'),
(67, 2, 'login', 'success:', '2014-11-30 17:09:49'),
(68, 2, 'login', 'success:', '2014-11-30 17:39:34'),
(69, 2, 'login', 'success:', '2014-11-30 18:32:05'),
(70, 2, 'login', 'success:', '2014-11-30 19:14:21'),
(71, 2, 'login', 'success:', '2014-11-30 21:12:05'),
(72, 2, 'login', 'success:', '2014-11-30 21:27:10'),
(73, 2, 'login', '<i class="fa fa-user"></i><i class="fa fa-arrow-down"></i>aris', '2014-11-30 21:41:05'),
(74, 2, 'login', '<i class="fa fa-user"></i><i class="fa fa-arrow-down"></i>aris', '2014-11-30 21:41:10'),
(75, 2, 'login', '<i class="fa fa-user"></i><i class="fa fa-arrow-down"></i>aris', '2014-11-30 21:41:59'),
(76, 2, 'login', '<i class="fa fa-user"></i><i class="fa fa-arrow-down"></i>aris', '2014-11-30 21:42:13'),
(77, 2, 'login', '<i class="fa fa-user"></i><i class="fa fa-arrow-down"></i>aris', '2014-11-30 21:42:58'),
(78, 0, 'login', '<i class="fa fa-user"></i><i class="fa fa-arrow-up"></i>aris', '2014-11-30 21:44:05'),
(79, 2, 'login', '<i class="fa fa-user"></i><i class="fa fa-arrow-down"></i>aris', '2014-11-30 22:36:20'),
(80, 0, 'login', '<i class="fa fa-user"></i><i class="fa fa-arrow-up"></i>aris', '2014-11-30 23:08:25'),
(81, 2, 'login', '<i class="fa fa-user"></i><i class="fa fa-arrow-down"></i>aris', '2014-11-30 23:08:29'),
(82, 0, 'login', '<i class="fa fa-user"></i><i class="fa fa-arrow-up"></i>  aris', '2014-11-30 23:09:13'),
(83, 2, 'login', '<i class="fa fa-user"></i><i class="fa fa-arrow-down"></i>  aris', '2014-11-30 23:09:17'),
(84, 2, 'login', '<i class="fa fa-user"></i><i class="fa fa-arrow-down"></i>  aris', '2014-12-01 21:07:19'),
(85, 2, 'login', '<i class="fa fa-user"></i><i class="fa fa-arrow-down"></i>  aris', '2014-12-01 21:39:09'),
(86, 2, 'login', '<i class="fa fa-user"></i><i class="fa fa-arrow-down"></i>  aris', '2014-12-01 22:15:18'),
(87, 2, 'login', '<i class="fa fa-user"></i><i class="fa fa-arrow-down"></i>  aris', '2014-12-02 16:40:02'),
(88, 2, 'login', '<i class="fa fa-user"></i><i class="fa fa-arrow-down"></i>  aris', '2014-12-02 17:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_real_name` text NOT NULL,
  `user_password` text NOT NULL,
  `user_cat_id` int(11) NOT NULL,
  `user_image` text NOT NULL,
  `user_mail` text NOT NULL,
  `user_info` text NOT NULL,
  `user_last_login` datetime NOT NULL,
  `user_last_change` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_real_name`, `user_password`, `user_cat_id`, `user_image`, `user_mail`, `user_info`, `user_last_login`, `user_last_change`) VALUES
(1, 'egi', 'egi', '6d466a5519f78c700659bdd212001a5d', 1, '', 'egi@codetechnos.com', 'tidak ada', '2014-11-21 14:34:23', '2014-11-30 17:24:06'),
(2, 'aris', 'aris', '288077f055be4fadc3804a69422dd4f8', 2, '', 'ariswinardy@ymail.com', '', '2014-12-02 17:20:20', '2014-11-30 17:24:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE IF NOT EXISTS `user_access` (
  `user_cat_id` int(11) NOT NULL,
  `access_id` int(11) NOT NULL,
  `r` enum('0','1') NOT NULL,
  `w` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_category`
--

CREATE TABLE IF NOT EXISTS `user_category` (
`user_cat_id` int(11) NOT NULL COMMENT 'User Category ID',
  `name_user_cat` text NOT NULL COMMENT 'Name User Category'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_category`
--

INSERT INTO `user_category` (`user_cat_id`, `name_user_cat`) VALUES
(1, 'superadmin'),
(2, 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `system_log`
--
ALTER TABLE `system_log`
 ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`), ADD KEY `user_cat_id` (`user_cat_id`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
 ADD KEY `user_cat_id` (`user_cat_id`);

--
-- Indexes for table `user_category`
--
ALTER TABLE `user_category`
 ADD PRIMARY KEY (`user_cat_id`), ADD KEY `user_cat_id` (`user_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `system_log`
--
ALTER TABLE `system_log`
MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_category`
--
ALTER TABLE `user_category`
MODIFY `user_cat_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User Category ID',AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_cat_id`) REFERENCES `user_category` (`user_cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_access`
--
ALTER TABLE `user_access`
ADD CONSTRAINT `user_access_ibfk_1` FOREIGN KEY (`user_cat_id`) REFERENCES `user_category` (`user_cat_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
