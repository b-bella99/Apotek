-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2019 pada 06.58
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `apoteker`
--

CREATE TABLE `apoteker` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `stock` int(4) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `nama` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ttl` date NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`nama`, `username`, `password`, `ttl`, `jk`, `alamat`) VALUES
('Rubu', 'rubu', 'rubu123', '1999-05-03', 'Perempuan', 'malang'),
('Sasa Anggraini', 'sasa', 'sasa123', '2000-01-21', 'Perempuan', 'Malang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `apoteker`
--
ALTER TABLE `apoteker`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
