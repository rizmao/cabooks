-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2021 pada 10.10
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudpemrograman`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemrograman`
--

CREATE TABLE `pemrograman` (
  `id` int(11) NOT NULL,
  `nomor` int(20) DEFAULT NULL,
  `nama_materi` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `jenis_materi` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `file` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `pemrograman`
--

INSERT INTO `pemrograman` (`id`, `nomor`, `nama_materi`, `jenis_materi`, `file`) VALUES
(26, 1, 'javascript', 'pemrograman', 'https://drive.google.com/drive/u/0/folders/1uasbTm-t0fSag3ggMIXF0DBiE4D4ve5n'),
(27, 2, 'materi umum', 'semua', 'https://drive.google.com/drive/folders/1AgOcuDzbSNNHxX1ADTi-T0b7DkjI1hfP');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemrograman`
--
ALTER TABLE `pemrograman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemrograman`
--
ALTER TABLE `pemrograman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
