-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 Okt 2017 pada 11.13
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
  `idBalita` varchar(20) NOT NULL,
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
('BAYI0001', 'Khorin Nisa\'', 'Surabaya', '2017-10-19', 'Nama Ayah', 'Nama Ibu', 'Surabaya', 2, 0, 0, '3.00', '12.00', 'A', '4.50', '13.50'),
('BAYI0003', 'Nama Saya', 'Jakarta', '2017-10-25', 'Nama Ayah', 'Nama Ibu', 'Ada kok alamatnya', 4, 1, 1, '3.40', '12.30', 'BT', '3.40', '12.30');

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
('192827363687', 'Nama Saya', 'Nama Suami', 'Surabaya', 1, 6, 2, 'Surabaya', '2017-10-24', 54, 54, '2017-10-11', '2018-07-18', 151),
('27326913912732', 'Ibu Hamil', 'Suami', 'Alamat', 16, 12, 8, 'Tempat Lahir', '2002-01-01', 59, 59, '2017-09-01', '2018-06-08', 168);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kader_admin`
--

CREATE TABLE `kader_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kader_admin`
--

INSERT INTO `kader_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500'),
(2, 'titis', 'd829b843a6550a947e82f2f38ed6b7a7');

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
-- Indexes for table `kader_admin`
--
ALTER TABLE `kader_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kader_admin`
--
ALTER TABLE `kader_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
