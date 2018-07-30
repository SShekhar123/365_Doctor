-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 10:47 AM
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
-- Table structure for table `dr_quotes`
--

CREATE TABLE `dr_quotes` (
  `quotes_id` int(11) NOT NULL,
  `quotes_subject` text NOT NULL,
  `quotes_author` text NOT NULL,
  `quotes_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dr_quotes`
--

INSERT INTO `dr_quotes` (`quotes_id`, `quotes_subject`, `quotes_author`, `quotes_image`) VALUES
(1, 'sickness', 'Health is not valued<br>t ill sickness comes', ''),
(2, 'wealth', 'Good wealth is the best wealth', ''),
(3, 'possession', 'Health is the greatest possession', ''),
(4, 'live', 'Take care of your body it is the only place you have to live', ''),
(5, 'fighting', 'Every tiime you eat or drink,<br>you are either feeding diseases or<br>fiightiing it', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
