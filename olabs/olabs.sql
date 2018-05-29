-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2018 at 08:01 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `id` int(10) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) CHARACTER SET macce NOT NULL,
  `date_added` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`id`, `full_name`, `email`, `password`, `date_added`) VALUES
(1, 'prof tunde ayeni', 'babatundegcfr@gmail.com', 'admin', '2018-01-24 08:49:28'),
(2, 'Prof. E.B. Fasugba', 'fashyg@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-01-24 08:54:16'),
(3, 'fasou', 'fas@jhn.com', '827ccb0eea8a706c4c34a16891f84e7b', '2018-01-24 08:59:01'),
(4, 'Prof. E.B. Fasugba2', 'fashyg2@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2018-03-08 14:55:06'),
(5, 'bolexy', 'fashyg@gmail.com5', '21232f297a57a5a743894a0e4a801fc3', '2018-03-12 09:54:19');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `matric_no` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_added` datetime NOT NULL,
  `s_date` date NOT NULL,
  `start_time` time(5) NOT NULL,
  `end_time` time(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `first_name`, `last_name`, `display_name`, `email`, `matric_no`, `password`, `date_added`, `s_date`, `start_time`, `end_time`) VALUES
(1, 'Jay', 'Pabs', 'jaypabs', 'asdf@gmail.com', 'CSC/2013/123', 'admin', '2016-11-12 20:24:33', '2017-11-16', '04:00:00.00000', '01:00:00.00000'),
(2, 'fasugba', 'boluwatife', 'fasugba', 'fasugbab@gmail.com', 'CSC/2013/124', '21232f297a57a5a743894a0e4a801fc3', '2018-03-08 15:14:15', '0000-00-00', '00:00:00.00000', '00:00:00.00000'),
(3, 'dgttty', 'fadfh', 'ggfghgh', 'fads@gkkll.com', 'cdc/467/345', '21232f297a57a5a743894a0e4a801fc3', '2018-03-09 18:22:08', '0000-00-00', '00:00:00.00000', '00:00:00.00000'),
(4, 'bolexy', 'ashy', 'bolexys', 'fashyg@gmail.com6', 'csc/777/777', '21232f297a57a5a743894a0e4a801fc3', '2018-03-12 10:02:30', '0000-00-00', '00:00:00.00000', '00:00:00.00000');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(100) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `s_date` date NOT NULL,
  `start_time` varchar(40) DEFAULT NULL,
  `end_time` time(5) DEFAULT NULL,
  `new_start_time` time NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `full_name`, `s_date`, `start_time`, `end_time`, `new_start_time`, `status`) VALUES
(1, '', '2017-11-17', '04:40:00', '04:04:00.00000', '00:00:00', ''),
(2, '', '2017-11-09', '01:10:00', '02:02:00.00000', '00:00:00', ''),
(3, '', '2017-11-17', '01:44:00', '05:03:00.00000', '00:00:00', ''),
(4, 'Jay', '2017-11-17', '01:14:00', '05:03:00.00000', '00:00:00', ''),
(5, 'Jay', '2017-11-17', '01:04:00.00000', '05:03:00.00000', '00:00:00', ''),
(22, '', '2018-01-04', '03:02', '05:01:00.00000', '00:00:00', ''),
(23, '', '2018-01-12', '01:04', '03:00:00.00000', '00:00:00', ''),
(24, 'Prof. E.B. Fasugba', '2018-01-13', '03:35:00', '04:06:00.00000', '00:00:00', ''),
(25, 'Prof. E.B. Fasugba', '2018-01-26', '01:10:00', '02:01:00.00000', '00:00:00', ''),
(26, 'bolexy', '2018-03-23', '05:55', '06:55:00.00000', '00:00:00', ''),
(27, 'Prof. E.B. Fasugba', '2018-03-17', '06:05', '10:00:00.00000', '00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
