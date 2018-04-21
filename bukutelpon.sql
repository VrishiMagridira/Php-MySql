-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 04:43 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `butel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukutelpon`
--

CREATE TABLE `bukutelpon` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `nim` varchar(15) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `kota_asal` varchar(20) DEFAULT NULL,
  `id_line` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukutelpon`
--

INSERT INTO `bukutelpon` (`id`, `nama`, `email`, `tel`, `nim`, `status`, `kota_asal`, `id_line`) VALUES
(2, 'Vrishi Magridira Putri', 'vrishim08@gmail.com', '08764392735393', '165150401111065', 'Masiswi', 'Malang', 'VRISHI_MAGRIDIRA'),
(3, 'Mark Elliot Zuckerberg', 'mark@gmail.com', '08764392735393', '165150401111061', 'Menikah', 'Bandung', 'mark_m'),
(4, 'Larry Page', 'lar@gmail.com', '08992653222', '-', 'Menikah', 'Jakarta', 'pglar_'),
(5, 'Sherly Sukmadira Putri', 'sherly08@gmail.com', '0821347586606', '-', 'Pelajar', 'Padang', 'sherly_mg'),
(6, 'Thomas Alva Edison', 'aaa@gmail.com', '08992653222', '-', 'Menikah', 'Aceh', 'al'),
(7, 'netti herawati', 'net_@gmail.com', '092834254254264', '-', 'Menikah', 'Padang', 'net-_'),
(8, 'Putri Magridira', 'mag2@gmail.com', '08992653222', '165150401111063', 'Masiswi', 'Malang', 'mbd_');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukutelpon`
--
ALTER TABLE `bukutelpon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukutelpon`
--
ALTER TABLE `bukutelpon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
