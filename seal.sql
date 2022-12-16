-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2022 pada 15.06
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

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
-- Struktur dari tabel `pangan`
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
-- Dumping data untuk tabel `pangan`
--

INSERT INTO `pangan` (`id`, `nama_pangan`, `harga_lama`, `harga_baru`, `nama_gambar`, `tanggal`, `pengubah`) VALUES
(1, 'Ketimun', 20000, 25000, '6392510ad856b.jpg', '2022-12-13', 'test'),
(2, 'Rica', 20000, 25000, '6392597924b43.jpg', '2022-12-14', 'test'),
(3, 'Wortel', 10000, 10000, '63925a6be73ab.jpg', '2022-12-10', 'test'),
(4, 'Bungan Kol', 8000, 6000, '6392974a91d84.jpg', '2022-12-14', 'test2'),
(5, 'tomat', 6000, 3000, '6392999534333.jpg', '2022-12-15', 'enumerator'),
(7, 'Bawang Putih', 18000, 15000, '6395f69c4cef7.jpg', '2022-12-14', 'test'),
(8, 'Jeruk Ikan', 0, 18000, '6397d91c1cac0.jpg', '2022-12-13', 'test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `posisi`, `alamat`, `no_hp`, `username`, `password`, `role`, `foto`) VALUES
(16, 'test', 'kepala dinas', 'matani', ' 088558588', 'test', 'test', 'admin', 'siluet1.png'),
(24, 'test2', 'admin', '-', '-', 'test2', 'test2', 'pegawai', 'siluet1.png'),
(25, 'jemy', '-', '-', '-', 'enumerator', 'test', 'pegawai', 'siluet1.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pangan`
--
ALTER TABLE `pangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pangan`
--
ALTER TABLE `pangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
