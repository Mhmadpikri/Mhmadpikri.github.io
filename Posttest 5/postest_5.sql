-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2022 pada 14.32
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `boking`
--

CREATE TABLE `boking` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `umur` varchar(25) NOT NULL,
  `tglboking` date NOT NULL,
  `jk` varchar(25) NOT NULL,
  `metode` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `boking`
--

INSERT INTO `boking` (`id`, `nama`, `umur`, `tglboking`, `jk`, `metode`) VALUES
(4, 'tita', '18', '2022-10-18', 'pria', 'Cash'),
(5, 'irfan', '28', '2022-10-04', 'wanita', 'Cash'),
(6, 'bayu', '22', '2022-10-29', 'pria', 'Cash'),
(7, 'fikri', '19', '2022-09-28', 'Pria', 'Cash'),
(8, 'bobo', '20', '2022-10-26', 'Pria', 'Transfer'),
(10, 'tita', '18', '2022-10-24', 'Wanita', 'Cash'),
(13, 'dini', '19', '2022-10-28', 'Pria', 'Cash'),
(14, 'firman', '21', '2022-10-27', 'Pria', 'Cash');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `boking`
--
ALTER TABLE `boking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `boking`
--
ALTER TABLE `boking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
