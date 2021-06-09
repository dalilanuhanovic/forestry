-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2021 at 12:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ervin`
--

-- --------------------------------------------------------

--
-- Table structure for table `gospodarskajedinica`
--

CREATE TABLE `gospodarskajedinica` (
  `gid` int(11) NOT NULL,
  `sgp` varchar(255) NOT NULL,
  `gsifra` varchar(2) NOT NULL,
  `gnaziv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gospodarskajedinica`
--

INSERT INTO `gospodarskajedinica` (`gid`, `sgp`, `gsifra`, `gnaziv`) VALUES
(1, '', '2', 'dalila'),
(2, '', '1', 'ok'),
(23, '', '02', 'Drvo'),
(24, '', '2', 'bor'),
(25, '', '66', 'jela'),
(26, '', '66', 'jela'),
(27, '', '66', 'jela'),
(28, 'dobro', '55', 'hrast'),
(30, 'dalila', '5', 'jabuka'),
(31, 'Matija', '1', 'Baba'),
(32, 'Bosna', '12', 'FBiH'),
(33, '', '3', 'Kalac'),
(34, '', '', ''),
(35, 'dva', '2', 'dva'),
(36, 'cetiri', '5', 'pet'),
(37, 'ses', '7', 'sedam');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `odjel`
--

CREATE TABLE `odjel` (
  `oid` int(11) NOT NULL,
  `gj` varchar(255) NOT NULL,
  `onaziv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `odjel`
--

INSERT INTO `odjel` (`oid`, `gj`, `onaziv`) VALUES
(5, 'jabuka', 'matija'),
(6, 'Bolnicka', '69'),
(7, 'bla', 'bla'),
(8, '', 'draa'),
(9, 'FBiH', 'Gorazde'),
(10, '', '03'),
(11, '', ''),
(12, '', ''),
(13, 'dva', 'dva');

-- --------------------------------------------------------

--
-- Table structure for table `odsjek`
--

CREATE TABLE `odsjek` (
  `id_odsjek` int(11) NOT NULL,
  `odj` varchar(255) NOT NULL,
  `naziv_odsjek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `odsjek`
--

INSERT INTO `odsjek` (`id_odsjek`, `odj`, `naziv_odsjek`) VALUES
(5, '11', 'Jabuka'),
(6, 'Jabuka', 'Kruska'),
(7, 'Gorazde', 'Bare'),
(8, 'dva', 'dva');

-- --------------------------------------------------------

--
-- Table structure for table `sgp`
--

CREATE TABLE `sgp` (
  `id` int(11) NOT NULL,
  `sgp` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sgp`
--

INSERT INTO `sgp` (`id`, `sgp`) VALUES
(1, '2'),
(12, '0'),
(13, 'dalila'),
(14, 'dobro'),
(15, 'dobro'),
(16, 'dobro'),
(17, 'dobro');

-- --------------------------------------------------------

--
-- Table structure for table `sifrarnici`
--

CREATE TABLE `sifrarnici` (
  `id` int(11) NOT NULL,
  `unosId` int(11) NOT NULL,
  `sifra_vrsta` int(2) NOT NULL,
  `sifra_forma` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sifrarnici`
--

INSERT INTO `sifrarnici` (`id`, `unosId`, `sifra_vrsta`, `sifra_forma`) VALUES
(1, 1, 2, 1),
(2, 1, 11, 2),
(23, 14, 666, 666),
(24, 14, 0, 0),
(25, 14, 0, 0),
(26, 14, 0, 0),
(27, 15, 22, 222),
(28, 16, 1, 111);

-- --------------------------------------------------------

--
-- Table structure for table `sumskogospodarsko`
--

CREATE TABLE `sumskogospodarsko` (
  `sid` int(11) NOT NULL,
  `ssifra` varchar(10) NOT NULL,
  `snaziv` text DEFAULT NULL,
  `od` year(4) NOT NULL,
  `do` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sumskogospodarsko`
--

INSERT INTO `sumskogospodarsko` (`sid`, `ssifra`, `snaziv`, `od`, `do`) VALUES
(1, '2', 'dalila', 2020, 2020),
(2, '2', 'dobro', 2019, 2020),
(25, 'Array', '', 0000, 0000),
(26, '111', 'dada', 2020, 2020),
(27, '005', 'Gorazde', 2013, 2020),
(28, '6', 'ses', 2002, 2003),
(29, '2', '2', 2002, 2003);

-- --------------------------------------------------------

--
-- Table structure for table `unos`
--

CREATE TABLE `unos` (
  `id` int(11) NOT NULL,
  `unosi_podatke` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unos`
--

INSERT INTO `unos` (`id`, `unosi_podatke`) VALUES
(1, 'Dalila'),
(2, ''),
(3, 'Dalila'),
(4, 'ervin'),
(5, ''),
(6, ''),
(7, 'DN'),
(8, ''),
(9, ''),
(10, ''),
(11, 'Ok'),
(12, 'DalilaN'),
(13, 'Dalca12'),
(14, ''),
(15, ''),
(16, 'dalcaa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'adminn', '$2y$10$CjI814gMnICcijDaLu/TUuCj3x812bjz8HRwdyftjrJ.Yd7A6yYsq', '2020-12-03 00:02:32'),
(2, '', '$2y$10$tZPRbgVy2Zzm4ZYS2a.Ttu4ODHsAqoDxdL73EoowkJfdnYZhUJUlG', '2020-12-03 00:12:29'),
(3, 'dalila', '$2y$10$ApI.LEyNvFceLgUjJTXczeOd5mGEQy4YY5sRuXh8SLHO/gCz60/VO', '2020-12-03 00:13:00'),
(5, 'dzenad', '$2y$10$om.dOiUXKc4SDCS19Zwr/uwAJB4skP.cwhnWHHYCKMuoiFc9lh.2m', '2020-12-05 00:31:18'),
(6, 'daliladalila', '$2y$10$hASjPjmih6g59asuxp3qi.AgxGvnXSX9os3qakXsKb2Avnc4t9a7y', '2020-12-09 01:23:03'),
(7, 'dalcadalca', '$2y$10$tTm59uUli96QZkDQP0J7BOE4FyApIi66MPHw8Ue4COhIs2SUPud.O', '2020-12-09 17:37:01'),
(8, 'dalca12', '$2y$10$NpLIU6SxkQVisUcZ8rxCOeD3uwuIAwxRvrSPGNs8pdgTkchH7s8jK', '2020-12-09 17:37:46'),
(9, 'ervinherak', '$2y$10$uuu3L6tFuVEKyyyLkPbgxO66k/4ShRiEOVnyYQe34iC5gbzepAYSu', '2020-12-09 22:58:43'),
(10, 'lejlam', '$2y$10$cnGLRmxse6mzKAJVSy5hQeHVTnqNo0xUDA82lZToyJ0KH3A/HOD5m', '2020-12-13 22:15:03'),
(11, 'dalcaa', '$2y$10$kifHprY1AK3S5/HAgspTKOb1LSq8cNNTLWu.Jx4WDEwrbSQ0BmpCy', '2021-03-19 22:44:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gospodarskajedinica`
--
ALTER TABLE `gospodarskajedinica`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `odjel`
--
ALTER TABLE `odjel`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `odsjek`
--
ALTER TABLE `odsjek`
  ADD PRIMARY KEY (`id_odsjek`);

--
-- Indexes for table `sgp`
--
ALTER TABLE `sgp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sifrarnici`
--
ALTER TABLE `sifrarnici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sumskogospodarsko`
--
ALTER TABLE `sumskogospodarsko`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `unos`
--
ALTER TABLE `unos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gospodarskajedinica`
--
ALTER TABLE `gospodarskajedinica`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `odjel`
--
ALTER TABLE `odjel`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `odsjek`
--
ALTER TABLE `odsjek`
  MODIFY `id_odsjek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sgp`
--
ALTER TABLE `sgp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sifrarnici`
--
ALTER TABLE `sifrarnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sumskogospodarsko`
--
ALTER TABLE `sumskogospodarsko`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `unos`
--
ALTER TABLE `unos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
