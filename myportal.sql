-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 08:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `ID` int(11) NOT NULL,
  `namez` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `passwords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`ID`, `namez`, `surname`, `username`, `email`, `contact`, `passwords`) VALUES
(2, 'Nozipho', 'Ngwenya', 'administrator', 'noziphongwenya55@gmail.com', 56, 'Nozipho0101');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `email`, `pass`) VALUES
(18, 'noziphongwenya55@gmail.com', 'Nozipho0101'),
(19, 'noziphongwenya55@gmail.com', 'Nozipho0101'),
(20, 'noziphongwenya55@gmail.com', 'Nozipho0101'),
(21, 'noziphongwenya55@gmail.com', 'Nozipho0101');

-- --------------------------------------------------------

--
-- Table structure for table `regtable`
--

CREATE TABLE `regtable` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(10) NOT NULL,
  `passwords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regtable`
--

INSERT INTO `regtable` (`id`, `names`, `surname`, `username`, `email`, `contact`, `passwords`) VALUES
(7, 'noxman', 'Ngwenya', 'noziphongwenya', 'noziphongwenya55@gmail.com', 15, 'Mnikey20'),
(8, 'mtho', 'Hlatshwayo', 'mtk', 'mtho@gmail.com', 65, 'Mthokozis1'),
(9, 'Mbali', 'Masilela', 'masilelaM', 'masilela@gmail.com', 12, 'Masilela01'),
(10, 'dudu', 'Mncube', 'duduzile', 'dude@gmail.com', 56, 'Dududz1l3'),
(11, 'zet', 'cheese', 'mazet', 'moze@gmail.com', 85, 'Mnikink01'),
(12, 'alex', 'mcqueen', 'albetodelriyo', 'albetoo@gm.com', 41, 'Mcqwenen03'),
(13, 'nonhlanhla', 'mogaila', 'nhlingo', 'nonhlanhla@gm.com', 58, 'Nonhlanhl0'),
(14, 'mthokozisi', 'Hlatshwayo', 'admin01', 'mthova.hp@outlook.com', 52, 'Mth0k0z1s1');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `id` int(11) NOT NULL,
  `namesz` varchar(255) NOT NULL,
  `emailz` varchar(255) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `messages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regtable`
--
ALTER TABLE `regtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `regtable`
--
ALTER TABLE `regtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
