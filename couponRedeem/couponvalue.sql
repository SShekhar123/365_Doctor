-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2018 at 11:55 AM
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
-- Table structure for table `couponvalue`
--

CREATE TABLE `couponvalue` (
  `coupon_id` int(10) NOT NULL,
  `coupon_no` varchar(16) NOT NULL,
  `value` char(1) NOT NULL,
  `price` int(5) NOT NULL,
  `validity` date DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `couponvalue`
--

INSERT INTO `couponvalue` (`coupon_id`, `coupon_no`, `value`, `price`, `validity`, `description`) VALUES
(10, 'FIRST100', 'A', 10, '2018-06-30', 'The Fist User Code Applied Successfully.'),
(11, 'NEW5', 'P', 5, '2018-12-12', 'New User Coupon.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `couponvalue`
--
ALTER TABLE `couponvalue`
  ADD PRIMARY KEY (`coupon_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
