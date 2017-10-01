-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Okt 2017 pada 10.01
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `balita`
--

CREATE TABLE `balita` (
  `idBalita` varchar(10) NOT NULL,
  `namaBayi` varchar(255) NOT NULL,
  `tempatLahir` varchar(255) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `namaAyah` varchar(255) NOT NULL,
  `namaIbu` varchar(255) NOT NULL,
  `alamatOrtu` text NOT NULL,
  `anakKe` int(11) NOT NULL,
  `jenisKelamin` tinyint(1) NOT NULL,
  `usiaBayi` int(11) NOT NULL,
  `beratLahir` decimal(11,2) NOT NULL,
  `panjangLahir` decimal(11,2) NOT NULL,
  `golonganDarah` varchar(2) NOT NULL,
  `beratSekarang` decimal(11,2) NOT NULL,
  `panjangSekarang` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `balita`
--

INSERT INTO `balita` (`idBalita`, `namaBayi`, `tempatLahir`, `tanggalLahir`, `namaAyah`, `namaIbu`, `alamatOrtu`, `anakKe`, `jenisKelamin`, `usiaBayi`, `beratLahir`, `panjangLahir`, `golonganDarah`, `beratSekarang`, `panjangSekarang`) VALUES
('1003', 'Fatimah', 'Surabaya', '2017-08-01', 'Daniel', 'Siti', 'Jalan Kemenangan ', 2, 0, 0, '3.00', '16.00', 'A', '5.00', '20.00'),
('22003', 'Fulan', 'Surabaya', '2017-08-14', 'Ayah Fulan', 'Ibu Fulan', 'Surabaya Barat', 1, 1, 2, '3.00', '13.00', 'AB', '3.00', '13.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ibuhamil`
--

CREATE TABLE `ibuhamil` (
  `idIbu` varchar(20) NOT NULL,
  `namaBumil` varchar(255) NOT NULL,
  `namaSuami` varchar(255) NOT NULL,
  `alamatBumil` text NOT NULL,
  `umur` int(11) NOT NULL,
  `usiaKandungan` int(11) NOT NULL,
  `kandunganKe` int(11) NOT NULL,
  `tempatLahir` varchar(50) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `beratUpdate` int(11) NOT NULL,
  `beratAwal` int(11) NOT NULL,
  `hpht` date NOT NULL,
  `perkiraanLahir` date NOT NULL,
  `tinggiIbu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ibuhamil`
--

INSERT INTO `ibuhamil` (`idIbu`, `namaBumil`, `namaSuami`, `alamatBumil`, `umur`, `usiaKandungan`, `kandunganKe`, `tempatLahir`, `tanggalLahir`, `beratUpdate`, `beratAwal`, `hpht`, `perkiraanLahir`, `tinggiIbu`) VALUES
('1', 'test', 'test', 'test', 30, 15, 1, 'Surabaya', '2017-09-05', 89, 56, '0000-00-00', '0000-00-00', 167),
('1012937365', 'Mrs Hamil', 'Mr Hamil', 'Jalan Kurus Kering No. 83', 13, 6, 1, 'Surabaya', '2005-01-24', 49, 49, '2017-08-19', '2018-05-26', 178);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perawat`
--

CREATE TABLE `perawat` (
  `idPerawat` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `namaPerawat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balita`
--
ALTER TABLE `balita`
  ADD PRIMARY KEY (`idBalita`);

--
-- Indexes for table `ibuhamil`
--
ALTER TABLE `ibuhamil`
  ADD PRIMARY KEY (`idIbu`);

--
-- Indexes for table `perawat`
--
ALTER TABLE `perawat`
  ADD PRIMARY KEY (`idPerawat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
