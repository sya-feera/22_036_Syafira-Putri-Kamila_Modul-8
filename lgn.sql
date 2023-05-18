-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2023 pada 09.36
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lgn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `isi`
--

CREATE TABLE `isi` (
  `id` int(11) NOT NULL,
  `nim` varchar(64) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `dosen` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL,
  `ket` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `isi`
--

INSERT INTO `isi` (`id`, `nim`, `nama`, `dosen`, `status`, `ket`) VALUES
(1, '220411100067', 'Nashwa Purwadinata', 'Aldi Taher', 'Asprak', 'Hadir'),
(2, '220411100076', 'Auliyaul Umam', 'Robert Downey Jr', 'Asprak', 'Hadir'),
(3, '220411100165', 'Ade Wulandari', 'Manoj Punjabi', 'Asprak', 'Hadir'),
(5, '220411100069', 'Tegar Hermansyah', 'Ariel Tatum', 'Asprak', 'Tidak Hadir'),
(6, '220411100045', 'Isnita Maharani', 'Dian Sastrowardoyo', 'Asprak', 'Tidak Hadir'),
(7, '220411100154', 'Sherly Sukaisih', 'Vladmir Putin', 'Asprak', 'Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masuk`
--

CREATE TABLE `masuk` (
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `masuk`
--

INSERT INTO `masuk` (`username`, `password`) VALUES
('220441100025', 'yuyun'),
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `isi`
--
ALTER TABLE `isi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `isi`
--
ALTER TABLE `isi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
