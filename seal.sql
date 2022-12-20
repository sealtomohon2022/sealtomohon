-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 04:27 AM
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
-- Database: `seal`
--

-- --------------------------------------------------------

--
-- Table structure for table `pangan`
--

CREATE TABLE `pangan` (
  `id` int(11) NOT NULL,
  `nama_pangan` varchar(255) NOT NULL,
  `harga_lama` int(100) NOT NULL DEFAULT 0,
  `harga_baru` int(100) NOT NULL DEFAULT 0,
  `nama_gambar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `pengubah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pangan`
--

INSERT INTO `pangan` (`id`, `nama_pangan`, `harga_lama`, `harga_baru`, `nama_gambar`, `tanggal`, `pengubah`) VALUES
(13, 'Beras Premium', 11800, 12000, '639ff83fdb5ef.jpg', '2022-12-19', 'Administrator'),
(14, 'Beras Medium', 11300, 11500, '639ffa3b52e4f.png', '2022-12-19', 'Administrator'),
(15, 'Jagung Pipilan', 5500, 5500, '639ffabf03e65.jpg', '2022-12-19', 'Administrator'),
(17, 'Bawang Merah', 50000, 50000, '639ffb7103e81.jpg', '2022-12-19', 'Administrator'),
(18, 'Bawang Putih', 28000, 28000, '639ffc7f31781.jpg', '2022-12-19', 'Administrator'),
(19, 'Cabe M. Keriting', 15000, 18000, '639ffd269628b.jpeg', '2022-12-19', 'Administrator'),
(20, 'Cabe Rawit', 55000, 53000, '639ffd875b8da.jpg', '2022-12-19', 'Administrator'),
(21, 'Daging Sapi ', 125000, 125000, '639ffdcfdaffa.jpg', '2022-12-19', 'Administrator'),
(22, 'Daging Ayam Ras', 35000, 35000, '639ffe4ee3fe8.jpg', '2022-12-19', 'Administrator'),
(23, 'Telur ayam Ras', 30000, 33000, '639ffe9283f4d.jpeg', '2022-12-19', 'Administrator'),
(24, 'Daging Babi', 60000, 65000, '639ffee9ea9fb.jpeg', '2022-12-19', 'Administrator'),
(25, 'Gula Pasir', 15000, 15000, '639fff4278907.jpg', '2022-12-19', 'Administrator'),
(26, 'Minyak Goreng', 15000, 16000, '63a000894a55d.jpg', '2022-12-19', 'Administrator'),
(27, 'Tepung Terigu', 12000, 12000, '63a001073c225.jpg', '2022-12-19', 'Administrator'),
(28, 'Minyak goreng Curah', 12800, 13200, '63a0015b26ed6.jpg', '2022-12-19', 'Administrator'),
(29, 'Tomat', 24000, 18000, '63a001a2c727b.jpeg', '2022-12-19', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `posisi` varchar(255) NOT NULL DEFAULT '-',
  `alamat` varchar(255) NOT NULL DEFAULT '-',
  `no_hp` varchar(100) NOT NULL DEFAULT '-',
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'siluet1.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `posisi`, `alamat`, `no_hp`, `username`, `password`, `role`, `foto`) VALUES
(26, 'Administrator', 'Staf IT', 'Kota Tomohon', '08xxxxxxxx', 'admin', 'admin', 'admin', 'siluet1.png'),
(27, 'Pegawai', 'Kabid', 'Matani', '08xxxxxxxx', 'pegawai', 'pegawai', 'pegawai', 'siluet1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pangan`
--
ALTER TABLE `pangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pangan`
--
ALTER TABLE `pangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
