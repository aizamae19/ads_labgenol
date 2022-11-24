-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2022 at 06:07 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genolgroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `classification` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `equipments` varchar(255) NOT NULL,
  `rules` varchar(255) NOT NULL,
  `history` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `name`, `classification`, `description`, `equipments`, `rules`, `history`) VALUES
(1, 'Basketball', 'Invasion', 'Secret', 'Ball', 'idkjh\'', 'Ambot');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fullname`, `username`, `password`, `image`) VALUES
('', '', 'd41d8cd98f00b204e9800998ecf8427e', 'uploads/pic2.jpg'),
('Ella Glaiza O. Layan', 'ellaglaiza', '9e7c680cb4d2dfd52bc33009b4710969', 'uploads/sports.jpg'),
('Gellie Almorado', 'gellie', 'd10906c3dac1172d4f60bd41f224ae75', 'uploads/sports.jpg'),
('joan r. almorado', 'joan', '81dc9bdb52d04dc20036dbd8313ed055', 'uploads/img5.jfif'),
('Aiza Mae L. Genol', 'aizamae', '3da46a46e6815fd7e7d6a8ce9093acac', 'uploads/img5.jfif'),
('ella glaiza layan', 'ellaglaiza', '93dd12bfdaba7a8bd97f4aac465e42b1', ''),
('ella glaiza layan', 'ellaglaiza', '93dd12bfdaba7a8bd97f4aac465e42b1', ''),
('ella glaiza layan', 'ellaglaiza', '93dd12bfdaba7a8bd97f4aac465e42b1', 'uploads/img5.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
