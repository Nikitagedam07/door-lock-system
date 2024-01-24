-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 10:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniprj`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_email` varchar(80) NOT NULL,
  `admin_pwd` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_email`, `admin_pwd`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$89uX3LBy4mlU/DcBveQ1l.32nSianDP/E1MfUh.Z.6B4Z0ql3y7PK');

-- --------------------------------------------------------

--
-- Table structure for table `original_records`
--

CREATE TABLE `original_records` (
  `email` varchar(50) NOT NULL,
  `rfid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `original_records`
--

INSERT INTO `original_records` (`email`, `rfid`, `name`) VALUES
('nikita.gedam16280@sakec.ac.in', '11112', 'Nikita Bharat Gedam'),
('nikitagedamxyz2@gmail.com', '1111', 'nikita');

-- --------------------------------------------------------

--
-- Table structure for table `tempt`
--

CREATE TABLE `tempt` (
  `email` varchar(50) NOT NULL,
  `otp` varchar(6) NOT NULL,
  `time` datetime(6) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempt`
--

INSERT INTO `tempt` (`email`, `otp`, `time`, `status`) VALUES
('nikitagedamxyz2@gamil.com', '945900', '2023-04-27 13:12:36.000000', 'active'),
('nikitagedamxyz2@gamil.com', '945900', '2023-04-27 13:12:36.000000', 'active'),
('nikitagedamxyz2@gamil.com', '801952', '2023-04-29 12:07:06.000000', 'active'),
('nikitagedamxyz2@gamil.com', '801952', '2023-04-29 12:07:06.000000', 'active'),
('rehan.rehan16223@sakec.ac.in', '998097', '2023-04-29 12:22:59.000000', 'inactive'),
('rehan.rehan16223@sakec.ac.in', '998097', '2023-04-29 12:22:59.000000', 'inactive'),
('rehan.rehan16223@sakec.ac.in', '746691', '2023-04-29 12:23:07.000000', 'active'),
('rehan.rehan16223@sakec.ac.in', '746691', '2023-04-29 12:23:07.000000', 'active'),
('nikita.gedam16280@sakec.ac.in', '310759', '2023-04-30 09:41:59.000000', 'active'),
('nikita.gedam16280@sakec.ac.in', '310759', '2023-04-30 09:41:59.000000', 'active'),
('nikita.gedam16280@sakec.ac.in', '302798', '2023-04-30 09:44:03.000000', 'inactive'),
('nikita.gedam16280@sakec.ac.in', '302798', '2023-04-30 09:44:03.000000', 'inactive'),
('nikita.gedam16280@sakec.ac.in', '358145', '2023-04-30 10:06:02.000000', 'inactive'),
('nikita.gedam16280@sakec.ac.in', '358145', '2023-04-30 10:06:02.000000', 'inactive'),
('nikita.gedam16280@sakec.ac.in', '664235', '2023-04-30 10:10:14.000000', 'active'),
('nikita.gedam16280@sakec.ac.in', '664235', '2023-04-30 10:10:14.000000', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `original_records`
--
ALTER TABLE `original_records`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tempt`
--
ALTER TABLE `tempt`
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
