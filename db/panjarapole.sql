-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2024 at 07:54 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panjarapole`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `createdon` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedon` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date`, `name`, `description`, `status`, `createdon`, `updatedon`) VALUES
(1, '2024-02-12', 'Amavasya Tithi', 'Donating on Amavasya Tithi can make ancestors happy and bring blessings to their descendants.bring ', 1, '2024-03-11 18:18:01', '2024-03-11 18:18:01'),
(2, '2024-07-11', 'Makarsankranti', 'Donating on Makarsankranti brings us the happiness and blessings of Goddess Lakshmi.', 1, '2024-03-11 18:18:01', '2024-03-11 18:18:01'),
(3, '2024-04-12', 'Ekadashi', 'Donating on Ekadashi gives salvation, money, happiness, and good fortune, it is a very auspicious day.\r\n\r\n', 1, '2024-03-11 18:18:01', '2024-03-11 18:18:01'),
(4, '2024-05-05', 'Purnima', 'Donating on Purnima eliminates poverty and ensures a lack of funds.\r\n\r\n', 1, '2024-03-11 18:18:01', '2024-03-11 18:18:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
