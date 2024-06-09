-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 07:19 PM
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
(14, 'Linkin Park A Thousand Suns World Tour ', 'Linkin Park', 'Jakarta, Indonesia', 'Jakarta, Indonesia', '2024-09-18 20:00:00', 'Rock', 12000000, 8000000, 6000000, 5000000, 18, 19, 18, 48, '3.jpg', 'Konser Linkin Park'),
(15, 'Linkin Park  One More Light World Tour', 'Linkin Park', 'London, Inggris', 'Birmingham Barclaycard Arena London Inggris', '2013-07-06 18:00:00', 'Rock', 7000000, 6000000, 5000000, 4000000, 9, 30, 45, 10, '4.jpg', 'Konser Linkin Park'),
(16, 'Linkin Park The Hunting Party Tour 2010', 'Linkin Park New Generation', 'Leipzig, Jerman', 'Leipzig Arena', '2010-01-12 12:00:00', 'Rock', 10000000, 8500000, 7500000, 5500000, 20, 21, 10, 10, '5.png', 'Konser Linkin Park'),
(17, 'Linkin Park Tour 2008', 'Linkin Park', 'Bristow, Virginia', 'Bristow, Virginia', '2008-07-28 17:00:00', 'Rock', 12000000, 9000000, 7000000, 6000000, 19, 19, 15, 14, '6.jpg', 'Konser Linkin Park'),
(18, 'Linkin Park Living Things World Tour ', 'Linkin Park New Generation', 'Porto Alegre, Brazil', 'Porto Alegre, Brazil', '2012-12-10 16:30:00', 'Rock', 13000000, 9000000, 8000000, 6000000, 24, 25, 47, 15, '7.jpg', 'Konser Linkin Park'),
(19, 'This is Avenged Sevenfold', 'Avenged Sevenfold', 'Jakarta, Indonesia', 'Stadion Gelora Bung Karno, Jakarta, Indonesia', '2024-05-25 19:00:00', 'Metal', 5000000, 4000000, 3000000, 2300000, 19, 29, 20, 19, 'boboiboy.jpg', 'Avenged Sevenfold (disingkat A7X) adalah band heavy metal Amerika Serikat dari Huntington Beach, California, dibentuk pada tahun 1999. Band ini saat ini formasi terdiri dari vokalis M. Shadows, gitaris ritme Zacky Vengeance, gitaris utama Synyster Gates, bassis Johnny Christ, dan drummer Brooks Wackerman.'),
(20, 'Festival Raya Kemenangan', 'Vierratale, Dmasiv, LastChild', 'Jakarta, Indonesia', 'Pantai Lagoon, Ancol, Indonesia', '2024-04-14 20:00:00', 'Dangdut Melayu', 300000, 250000, 150000, 30000, 26, 60, 20, 50, 'ultraman.jpg', 'Pastinya kalian bakal puas dan happy banget deh menghabiskan libur Lebaran di Ancol! Bisa nostalgia dan nyanyi nyanyi seru di sini 🥳🎉'),
(21, 'Hitman Return David Foster And Friends', 'David Foster', 'Tangerang, Indonesia', 'ICE BSD City', '2024-06-15 20:00:00', 'Classical Pop', 3000000, 2000000, 1500000, 1000000, 50, 100, 150, 200, 'DavidFoster.png', 'David Foster, pencetak hits dan pembuat bintang. Produser musik terkenal dunia akan kembali ke Indonesia dengan line-up terbaik! Bersama dengan Brian McKnight, Katharine McPhee, Jessie J, dan Josh Groban. Pemenang Grammy Awards ikonik ini tentunya akan memberikan penampilan konser terbaik. Jangan lewatkan!\r\n\r\n'),
(22, 'REALITY CLUB LIVE AT FYNE JAKARTA', 'Reality Club', 'Jakarta Selatan, Indonesia', 'FYNE Jakarta ', '2024-06-20 22:00:00', 'Indie Pop', 500000, 300000, 200000, 150000, 10, 25, 50, 100, 'RC.png', 'Jangan lewatkan keseruan saat Reality Club tampil LIVE di FYNE Jakarta pada tanggal 20 Juni 2024.\r\n\r\nRasakan getaran musik yang memukau dan momen yang tak terlupakan. Siapkan diri untuk malam yang penuh dengan melodi yang menyentuh hati!\r\nBeli tiket nya di G-VicxID!'),
(23, 'Dua Lipa Radical Optimism Tour', 'Dua Lipa', 'Jakarta, Indonesia', ' Indonesia Arena - Senayan.', '2024-11-09 22:00:00', 'Pop', 7500000, 5000000, 3500000, 1500000, 100, 200, 300, 400, 'DL.png', ' Dua Lipa “Radical Optimism Tour” in Jakarta, Indonesia on November 9th, 2024 live at the Indonesia Arena - Senayan. This highly anticipated Jakarta stop is part of the Asian leg of Dua Lipa\'s global tour, kicking off in Singapore on November 6th and will stop at Manila, Tokyo, Taipei, Kuala Lumpur, and Bangkok before wrapping up in Seoul on December 4th. '),
(24, 'DEWA 19 di Ancol', 'Dewa 19', 'Jakarta, Indonesia', 'Pantai Carnaval Ancol', '2024-06-22 18:00:00', 'Pop', 500000, 400000, 250000, 150000, 50, 100, 150, 300, '19.png', 'Panggilan untuk seluruh Baladewa buat nonton konser DEWA 19!✨\r\n\r\nDalam rangka memperingati Hari Ulang Tahun ke-497 Kota Jakarta, Ancol Taman Impian akan mengadakan konser kemeriahan ulang tahun Kota Jakarta dengan mengundang DEWA 19 feat VIRZHA & ANDRA AND THE BACKBONE\r\n\r\nDan acara juga akan ditutup dengan kemeriahan Kembang Api spektakuler🎇'),
(25, 'Tunggu Aku di Bandung\r\n', 'Sheila on 7', 'Bandung, Jawa barat', 'Stadion Siliwangi, Bandung', '2024-09-28 20:00:00', 'Pop', 450000, 300000, 200000, 100000, 100, 300, 500, 1000, '07.png', 'Konser Sheila on 7 — Siapa sih band lokal yang setiap aktivitasnya selalu viral? Siapa lagi kalau bukan Sheila on 7? Band asal Jogja yang pertama kali debut di akhir tahun 90-an ini masih disukai Gen Z berkat lagu-lagunya yang easy listening. Setiap kali ada konser Sheila on 7 atau mereka tampil di festival musik apa pun, tiketnya bisa dipastikan langsung diserbu generasi Milenial sampai GenZ! '),
(26, 'Joget-in Fest (Jogja)', 'Maliq & D\'Essentials\r\n', 'Yogyakarta, Indonesia', 'Stadion Kridosono', '2024-06-22 11:00:00', 'Pop', 200000, 150000, 100000, 50000, 300, 500, 1000, 5000, 'joget.png', 'Joget-in Fest adalah sebuah pertunjukan kreasi putra dan putri bangsa, yang menghadirkan berbagai karya musik lintas genre, seni, dan budaya kepada masyarakat Indonesia. Pentas ini di selenggarakan oleh ekeskutif produser film “Jakarta vs Everybody”, mempersembahkan tur festival di negeri ini, dari satu kota ke kota lainnya. Bersiaplah untuk mereguk irama dan suasana beragam rasa, dan ikuti perjalanannya!'),
(27, 'Sahid Live Intimate Concert with Iwan Fals & Band', 'Iwan Fals', 'Yogyakarta, Indonesia', 'Sahid Raya Yogyakarta', '2024-06-22 17:00:00', 'Pop', 1200000, 750000, 500000, 350000, 50, 100, 150, 200, 'if.png', 'Mengusung Konsep Tema ‘Sahid Intimate Live in Concert with Iwan Fals’ , klonser ini bertujuan untuk membawa para penonton sejenak bernostalgia dan bisa menikmati lagu lagu legendaris Iwan Fals.');

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
  `noHp` varchar(20) NOT NULL,
  `usia` int(20) NOT NULL,
  `tiket` varchar(255) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pemesanan`
--

INSERT INTO `data_pemesanan` (`id_pesan`, `username`, `nama`, `email`, `nama_konser`, `tanggal_konser`, `artis_konser`, `lokasi_konser`, `noHp`, `usia`, `tiket`, `harga`) VALUES
(21, 'giocen', 'gio', 'gio@gmail.com', 'Linkin Park  One More Light World Tour', '2013-07-06 18:00:00', 'Linkin Park', 'Birmingham Barclaycard Arena London Inggris', '085155108565', 36, 'VVIP', 7000000),
(28, 'giocen', 'Gio', 'gio@gmail.com', 'Linkin Park A Thousand Suns World Tour ', '2024-09-18 20:00:00', 'Linkin Park', 'Jakarta, Indonesia', '085155108565', 20, 'REGULER', 5000000);

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
  `noHp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `email`, `noHp`) VALUES
(1, 'Vicky Yohanes', 'vicky', '123', 'aksjajs@gmail.com', '2932382'),
(2, 'Giovanka Vincen Imanuel', 'giocen', '123', 'aksjajs@gmail.com', '085155108565');

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
  MODIFY `id_konser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `data_pemesanan`
--
ALTER TABLE `data_pemesanan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
