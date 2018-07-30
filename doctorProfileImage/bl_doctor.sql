-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2018 at 01:13 PM
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
-- Table structure for table `bl_doctor`
--

CREATE TABLE `bl_doctor` (
  `dr_id` int(25) NOT NULL,
  `dr_name` varchar(30) NOT NULL,
  `dr_city` text NOT NULL,
  `dr_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bl_doctor`
--

INSERT INTO `bl_doctor` (`dr_id`, `dr_name`, `dr_city`, `dr_img`) VALUES
(0, 'kdsn', 'nsdk', 'doctor-images/31648892_508162369581587_6857313435827306496_n.jpg'),
(156, 'bhjv', 'cghjj', 'doctor-images/sign.jpg'),
(157, 'ghjv', 'uuhjj', ''),
(158, 'gytv', 'gyft', ''),
(159, 'jnv', 'jhft', ''),
(160, 'ookv', 'asat', ''),
(161, 'klmkv', 'tmnb', ''),
(162, 'klmkv', 'tmnb', ''),
(163, 'klmkv', 'tmnb', ''),
(164, 'klmkv', 'tmnb', ''),
(165, 'klmkv', 'tmnb', ''),
(166, 'klmkv', 'tmnb', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bl_doctor`
--
ALTER TABLE `bl_doctor`
  ADD PRIMARY KEY (`dr_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
