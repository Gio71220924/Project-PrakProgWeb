-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 09:20 AM
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
  `negara_konser` varchar(255) NOT NULL,
  `lokasi_konser` varchar(255) NOT NULL,
  `tgl_konser` datetime NOT NULL,
  `genre` varchar(255) NOT NULL,
  `vvip` int(20) NOT NULL,
  `vip` int(20) NOT NULL,
  `premium` int(20) NOT NULL,
  `reguler` int(20) NOT NULL,
  `stock_vvip` int(20) NOT NULL,
  `stock_vip` int(100) NOT NULL,
  `stock_premium` int(100) NOT NULL,
  `stock_reguler` int(100) NOT NULL,
  `gambar_konser` varchar(255) NOT NULL,
  `detail_konser` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_konser`
--

INSERT INTO `data_konser` (`id_konser`, `nama_konser`, `artis_konser`, `negara_konser`, `lokasi_konser`, `tgl_konser`, `genre`, `vvip`, `vip`, `premium`, `reguler`, `stock_vvip`, `stock_vip`, `stock_premium`, `stock_reguler`, `gambar_konser`, `detail_konser`) VALUES
(14, 'Linkin Park A Thousand Suns World Tour ', 'Linkin Park', 'Jakarta, Indonesia', 'Jakarta, Indonesia', '2014-09-26 20:00:00', 'Rock', 12000000, 8000000, 6000000, 5000000, 20, 20, 20, 50, '3.jpg', 'Konser Linkin Park'),
(15, 'Linkin Park  One More Light World Tour', 'Linkin Park', 'London, Inggris', 'Birmingham Barclaycard Arena London Inggris', '2013-07-06 18:00:00', 'Rock', 7000000, 6000000, 5000000, 4000000, 10, 30, 45, 10, '4.jpg', 'Konser Linkin Park'),
(16, 'Linkin Park The Hunting Party Tour 2010', 'Linkin Park New Generation', 'Leipzig, Jerman', 'Leipzig Arena', '2010-01-12 12:00:00', 'Rock', 10000000, 8500000, 7500000, 5500000, 20, 21, 10, 10, '5.png', 'Konser Linkin Park'),
(17, 'Linkin Park Tour 2008', 'Linkin Park', 'Bristow, Virginia', 'Bristow, Virginia', '2008-07-28 17:00:00', 'Rock', 12000000, 9000000, 7000000, 6000000, 19, 19, 15, 14, '6.jpg', 'Konser Linkin Park'),
(18, 'Linkin Park Living Things World Tour ', 'Linkin Park New Generation', 'Porto Alegre, Brazil', 'Porto Alegre, Brazil', '2012-12-10 16:30:00', 'Rock', 13000000, 9000000, 8000000, 6000000, 24, 25, 47, 15, '7.jpg', 'Konser Linkin Park'),
(19, 'This is Avenged Sevenfold', 'Avenged Sevenfold', 'Jakarta, Indonesia', 'Stadion Gelora Bung Karno, Jakarta, Indonesia', '2024-05-25 19:00:00', 'Metal', 5000000, 4000000, 3000000, 2300000, 19, 29, 20, 19, 'boboiboy.jpg', 'Avenged Sevenfold (disingkat A7X) adalah band heavy metal Amerika Serikat dari Huntington Beach, California, dibentuk pada tahun 1999. Band ini saat ini formasi terdiri dari vokalis M. Shadows, gitaris ritme Zacky Vengeance, gitaris utama Synyster Gates, bassis Johnny Christ, dan drummer Brooks Wackerman.'),
(20, 'Festival Raya Kemenangan', 'Vierratale, Dmasiv, LastChild', 'Jakarta, Indonesia', 'Pantai Lagoon, Ancol, Indonesia', '2024-04-14 20:00:00', 'Dangdut Melayu', 300000, 250000, 150000, 30000, 26, 60, 20, 50, 'ultraman.jpg', 'Pastinya kalian bakal puas dan happy banget deh menghabiskan libur Lebaran di Ancol! Bisa nostalgia dan nyanyi nyanyi seru di sini 🥳🎉');

-- --------------------------------------------------------

--
-- Table structure for table `data_pemesanan`
--

CREATE TABLE `data_pemesanan` (
  `id_pesan` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_konser` varchar(255) NOT NULL,
  `tanggal_konser` datetime NOT NULL,
  `artis_konser` varchar(255) NOT NULL,
  `lokasi_konser` varchar(255) NOT NULL,
  `noHp` int(20) NOT NULL,
  `usia` int(20) NOT NULL,
  `tiket` varchar(255) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `noHp` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `email`, `noHp`) VALUES
(1, 'Vicky Yohanes', 'vicky', '123', 'aksjajs@gmail.com', 2932382),
(2, 'Giovanka Vincen Imanuel', 'giocen', '123', 'aksjajs@gmail.com', 28128192);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_konser`
--
ALTER TABLE `data_konser`
  ADD PRIMARY KEY (`id_konser`);

--
-- Indexes for table `data_pemesanan`
--
ALTER TABLE `data_pemesanan`
  ADD PRIMARY KEY (`id_pesan`);

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
  MODIFY `id_konser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `data_pemesanan`
--
ALTER TABLE `data_pemesanan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
