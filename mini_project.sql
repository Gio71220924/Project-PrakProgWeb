-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 02:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_konser`
--

CREATE TABLE `data_konser` (
  `id_konser` int(11) NOT NULL,
  `nama_konser` varchar(255) NOT NULL,
  `artis_konser` varchar(255) NOT NULL,
  `lokasi_konser` varchar(255) NOT NULL,
  `tgl_konser` datetime NOT NULL,
  `vvip` int(20) NOT NULL,
  `vip` int(20) NOT NULL,
  `premium` int(20) NOT NULL,
  `reguler` int(20) NOT NULL,
  `stok_tiket` int(20) NOT NULL,
  `gambar_konser` varchar(255) NOT NULL,
  `detail_konser` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_konser`
--

INSERT INTO `data_konser` (`id_konser`, `nama_konser`, `artis_konser`, `lokasi_konser`, `tgl_konser`, `vvip`, `vip`, `premium`, `reguler`, `stok_tiket`, `gambar_konser`, `detail_konser`) VALUES
(14, 'Linkin Park A Thousand Suns World Tour ', 'Linkin Park New Generation', 'Jakarta, Indonesia', '2014-09-26 20:00:00', 12000000, 8000000, 6000000, 5000000, 500, '3.jpg', ''),
(15, 'Linkin Park  One More Light World Tour', 'Linkin Park', 'Birmingham Barclaycard Arena', '2013-07-06 18:00:00', 7000000, 6000000, 5000000, 4000000, 600, '4.jpg', ''),
(16, 'Linkin Park The Hunting Party Tour 2010', 'Linkin Park New Generation', 'Leipzig Arena', '2010-01-12 12:00:00', 10000000, 8500000, 7500000, 5500000, 700, '5.png', ''),
(17, 'Linkin Park Tour 2008', 'Linkin Park', 'Bristow, Virginia', '2008-07-28 17:00:00', 12000000, 9000000, 7000000, 6000000, 800, '6.jpg', ''),
(18, 'Linkin Park Living Things World Tour ', 'Linkin Park New Generation', 'Porto Alegre, Brazil', '2012-12-10 16:30:00', 13000000, 9000000, 8000000, 6000000, 900, '7.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noHp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `email`, `noHp`) VALUES
(1, 'Vicky Yohanes Putra Setiawan', 'vicky1103', '12345678', 'vicky@gmail.com', '088216394907'),
(6, 'Vicky Yohanes Putra Setiawan', 'Yohanes', '123', 'yohanes21@gmail.com', '081217403716');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_konser`
--
ALTER TABLE `data_konser`
  ADD PRIMARY KEY (`id_konser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_konser`
--
ALTER TABLE `data_konser`
  MODIFY `id_konser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
