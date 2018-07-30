-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 09:37 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctors_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog1`
--

CREATE TABLE `blog1` (
  `primaryid` int(11) NOT NULL,
  `keyword` text NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog1`
--

INSERT INTO `blog1` (`primaryid`, `keyword`, `url`) VALUES
(1, 'blog1', 'https://en.wikipedia.org/wiki/Paos'),
(2, 'blog2', 'https://en.wikipedia.org/wiki/Paoskoto'),
(3, 'venus', 'https://en.wikipedia.org/wiki/Venus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog1`
--
ALTER TABLE `blog1`
  ADD PRIMARY KEY (`primaryid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog1`
--
ALTER TABLE `blog1`
  MODIFY `primaryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
