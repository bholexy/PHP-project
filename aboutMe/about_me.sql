-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2018 at 08:03 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `about_me`
--

-- --------------------------------------------------------

--
-- Table structure for table `bio`
--

CREATE TABLE `bio` (
  `name_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `work` varchar(30) NOT NULL,
  `website` varchar(30) NOT NULL,
  `bio` varchar(50) NOT NULL,
  `skills` varchar(30) NOT NULL,
  `education` varchar(50) NOT NULL,
  `socials` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bio`
--

INSERT INTO `bio` (`name_id`, `name`, `work`, `website`, `bio`, `skills`, `education`, `socials`) VALUES
(0, '', '', '', '', '0', '0', '0'),
(0, 'fasugba bolu', 'web developer', 'about.me/fasugbab', 'i am a webdeveloper, student. i have passion for l', '0', '0', '0'),
(0, 'tola duro', 'ancer, singer', 'about.me/tolad', 'a wonder singer', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `name_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `work` varchar(30) NOT NULL,
  `website` varchar(30) NOT NULL,
  `bio` varchar(50) NOT NULL,
  `image` longblob NOT NULL,
  `skills` varchar(30) NOT NULL,
  `education` varchar(30) NOT NULL,
  `socials` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`name_id`, `name`, `username`, `email`, `password`, `work`, `website`, `bio`, `image`, `skills`, `education`, `socials`) VALUES
(3, 'FASUGBA BOLUWATIFE EBENEZER', '', '', '', 'web developer', 'ultramediasolution.com', 'i am a webdeveloper, student. i have passion for l', '', 'somersaulting, acrobat, sonoro', 'Obafemi awolowo university', ''),
(4, 'FASUGBA BOLUWATIFE ebenco', '', '', '', 'web developer', 'ultramediasolution.com', 'i am a webdeveloper, student. i have passion for l', '', 'somersaulting, acrobat, sonoro', 'Obafemi awolowo university', ''),
(6, 'FASUGBA BOLUWATIFE EBENEZER', '', '', '', 'web developer', 'about.me/fasugbab', 'i am a webdeveloper, student. i have passion for l', '', 'programming, dancing, web deve', 'Obafemi awolowo university', ''),
(7, '', 'elo', 'email', 'bolex', 'web developer', 'umstraininghub.com', 'a wonder singer', '', 'programming, dancing, web deve', 'Obafemi awolowo university', ''),
(8, '', '', 'oaremo@ymail.com', 'bolex', 'web developer', 'umstraininghub.com', '', '', 'somersaulting, acrobat, sonoro', 'Obafemi awolowo university', ''),
(9, 'hhghg', 'hhjjfccc', 'jhfyyfyyfy', 'jjffgffgfg', 'hhfyfftftft', 'ggtdtdtdte', 'jjuyryfy', '', 'hhdtdrdrdr', 'hhudydyr', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`name_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `name_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
