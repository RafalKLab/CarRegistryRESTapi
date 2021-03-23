-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 08:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `mycars`
--
CREATE TABLE `mycars` (
  `id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mycars`
--

INSERT INTO `mycars` (`id`, `brand`, `model`, `country`, `year`) VALUES
(2, 'BMW', 'Z2', 'Germany', 2005),
(3, 'AUDI', 'Q7', 'Germany', 2015),
(4, 'AUDI', 'S5', '', 0),
(5, 'LEXUS', 'rx 450h', '', 0),
(6, 'MERCEDES-BENZ', 'E350', '', 0),
(11, 'Porsche', 'Carrera', '', 0),
(12, 'BMW', '530 E60', '', 0),
(13, 'BMW', '330 E90', '', 0),
(14, 'Citroen', 'c6', '', 0),
(17, 'BMW', 'M1', '', 0),
(18, 'BMW', 'M2', '', 0),
(19, 'Audi', 'RS7', '', 0),
(24, 'Audi', 'R8', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mycars`
--
ALTER TABLE `mycars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mycars`
--
ALTER TABLE `mycars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
