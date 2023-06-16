-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 01:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- START TRANSACTION;
-- SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `informatika`
--

DROP DATABASE IF EXISTS informatika;
CREATE DATABASE IF NOT EXISTS informatika;
USE informatika;

-- --------------------------------------------------------

--
-- Table structure for table `data_kependudukan`
--

CREATE TABLE `data_kependudukan` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_kependudukan`
--

INSERT INTO `data_kependudukan` (`id`, `name`, `birthdate`, `gender`, `address`) VALUES
(1, 'test0', '2023-04-30', 'male', 'Jl. Jalan no. 1'),
(3, 'test1', '2023-05-01', 'male', 'Jl. Jalan no. 11'),
(7, 'test2', '2023-05-02', 'female', 'Jl. Dasan Pesawat no. 1'),
(8, 'test3', '2023-06-10', 'male', 'Jl. Tikus no. 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kependudukan`
--
ALTER TABLE `data_kependudukan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kependudukan`
--
ALTER TABLE `data_kependudukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
