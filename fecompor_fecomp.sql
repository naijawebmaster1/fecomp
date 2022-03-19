-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 18, 2022 at 05:29 AM
-- Server version: 10.3.34-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fecompor_fecomp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `age` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `department` varchar(30) NOT NULL,
  `interest` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `phone`, `age`, `address`, `department`, `interest`) VALUES
(1, 'Olamide David', 'naijawebapp@gmail.com', '08109342339', '11', 'noun Â· a speech or written statement, u', 'Information Technology', 'Machine Learning'),
(2, 'Omolayo Clement', 'clembossethinc@gmail.com', '08109342339', '45', 'ogun state', 'Computer Engineering ', 'Internet Of Things'),
(3, 'Ewan Drennan', 'general@businessleads101.com', 'BusinessLeads10', 'BusinessLeads10', 'We have a one time limited offer.\r\n\r\n366', '', 'Internet Of Things'),
(4, 'Casimira Guerin', 'casimira@companyleads.org', '05.66.85.21.49', '05.66.85.21.49', 'Hey, are you starving to find the right ', '', 'Web Development'),
(5, 'G21VM282VE www.telegra.ph/Your', 'spotalchunda@mail.ru', '75956657741', '75956657741', 'G21VM282VE www.telegra.ph/Your-Win-01-14', 'G21VM282VE www.telegra.ph/Your', 'Mobile App Development'),
(6, 'Denice Eaves', 'denice@customlogoproducts.us', 'NA', 'NA', 'Hi, \r\n\r\nWho would be the best contact at', '', 'Web Development');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(255) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `token` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `wallet` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `trn_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `verified`, `token`, `password`, `wallet`, `time`, `trn_date`) VALUES
(1, '', 'admin@bluecrosshospital.com.ng', 0, 1, NULL, '$2y$10$TjWEWLLEr9ubTW9cJF8bjuVuczCwVonbTaEGkj.A2zRdZxEGuv0oS', 0, '2021-01-19 13:52:08', '0000-00-00 00:00:00'),
(2, 'ADMIN', 'admin@fecomp.org', 0, 0, NULL, '$2y$10$bKPs/jw3DNvjiGZQIk6LKePMG2yEijTwMdYCt/tmeVjDmOV4HnQrK', 0, '2021-03-12 14:30:15', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
