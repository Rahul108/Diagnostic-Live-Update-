-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2017 at 06:38 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_parameters`
--

-- --------------------------------------------------------

--
-- Table structure for table `parameter_group_1`
--

CREATE TABLE `parameter_group_1` (
  `Serial` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `HR` varchar(100) NOT NULL,
  `BT` varchar(100) NOT NULL,
  `LVR` varchar(100) NOT NULL,
  `SPO2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parameter_group_1`
--

INSERT INTO `parameter_group_1` (`Serial`, `Name`, `HR`, `BT`, `LVR`, `SPO2`) VALUES
(1, 'Aninda Sarker Rahul ', '1', '2', '3', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parameter_group_1`
--
ALTER TABLE `parameter_group_1`
  ADD PRIMARY KEY (`Serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parameter_group_1`
--
ALTER TABLE `parameter_group_1`
  MODIFY `Serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
