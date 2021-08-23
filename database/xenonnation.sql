-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 05:47 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xenonnation`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(500) NOT NULL,
  `user_mail` varchar(500) NOT NULL,
  `user_phone` varchar(500) NOT NULL,
  `user_msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`user_id`, `user_name`, `user_mail`, `user_phone`, `user_msg`) VALUES
(1, 'Mohit Rai', 'mohitsrai@live.in', '8463899949', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `proj_id` int(11) NOT NULL,
  `proj_name` varchar(500) NOT NULL,
  `android` varchar(500) NOT NULL,
  `ios` varchar(500) NOT NULL,
  `web` varchar(500) NOT NULL,
  `proj_type` varchar(500) NOT NULL,
  `proj_des` varchar(500) NOT NULL,
  `proj_icon` varchar(500) NOT NULL,
  `proj_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`proj_id`, `proj_name`, `android`, `ios`, `web`, `proj_type`, `proj_des`, `proj_icon`, `proj_img`) VALUES
(17, 'test5', '', '', 'web.com', 'web', 'asjdiandfjindfiun', 'http://localhost/xenon/img/portfolio/icon/13.jpg', 'http://localhost/xenon/img/portfolio/full/24.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_catg`
--

CREATE TABLE `portfolio_catg` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio_catg`
--

INSERT INTO `portfolio_catg` (`cat_id`, `cat_name`) VALUES
(1, 'android'),
(2, 'ios'),
(3, 'web');

-- --------------------------------------------------------

--
-- Table structure for table `xenon_admin`
--

CREATE TABLE `xenon_admin` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(300) NOT NULL,
  `user_password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xenon_admin`
--

INSERT INTO `xenon_admin` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'xenon_nation', 'xenon@1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`proj_id`);

--
-- Indexes for table `portfolio_catg`
--
ALTER TABLE `portfolio_catg`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `xenon_admin`
--
ALTER TABLE `xenon_admin`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `proj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `portfolio_catg`
--
ALTER TABLE `portfolio_catg`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `xenon_admin`
--
ALTER TABLE `xenon_admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
