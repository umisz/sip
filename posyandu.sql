-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Okt 2017 pada 11.38
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
('BAYI0001', 'Titis Adi Mei Laningrum', 'Surabaya', '2017-10-01', 'Ayah Titis', 'Ibu Titis', 'alamat', 3, 1, 12, '3.00', '10.00', 'A', '10.00', '10.00'),
('BAYI0002', 'Bruno Mars', 'Surabaya', '2017-10-01', 'Mars', 'Venus', 'alamat', 1, 0, 9, '3.60', '14.00', 'BT', '10.00', '10.00'),
('BAYI0003', 'Imam Teguh', 'Surabaya', '2017-10-01', 'Ayah Imam', 'Ibu Imam', 'Surabaya', 1, 0, 10, '3.50', '12.00', 'BT', '4.50', '16.00');

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
  `beratUpdate` decimal(11,2) NOT NULL,
  `beratAwal` decimal(11,2) NOT NULL,
  `hpht` date NOT NULL,
  `perkiraanLahir` date NOT NULL,
  `tinggiIbu` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ibuhamil`
--

INSERT INTO `ibuhamil` (`idIbu`, `namaBumil`, `namaSuami`, `alamatBumil`, `umur`, `usiaKandungan`, `kandunganKe`, `tempatLahir`, `tanggalLahir`, `beratUpdate`, `beratAwal`, `hpht`, `perkiraanLahir`, `tinggiIbu`) VALUES
('192827363687', 'Nama Saya', 'Nama Suami', 'Surabaya', 1, 8, 2, 'Surabaya', '2017-10-24', '67.00', '54.00', '2017-10-11', '2018-07-18', '160.00'),
('27326913912732', 'Ibu Hamil', 'Suami', 'Alamat', 16, 12, 8, 'Tempat Lahir', '2002-01-01', '59.00', '59.00', '2017-09-01', '2018-06-08', '168.00'),
('3171015408850001', 'Sasha', 'Suami Sasha', 'Surabaya', 33, 7, 1, 'Tempat', '1985-08-17', '57.45', '50.00', '0000-00-00', '2018-07-08', '165.00'),
('3171015408850002', 'Sasha', 'Suami Sasha', 'Surabaya', 33, 6, 1, 'Tempat', '1985-08-17', '54.00', '50.00', '0000-00-00', '2018-07-08', '165.00'),
('3171015408850004', 'Sasha', 'Suami Sasha', 'Surabaya', 33, 5, 1, 'Tempat', '1985-08-17', '54.00', '50.00', '0000-00-00', '2018-07-08', '148.00'),
('3171015408850005', 'Sasha', 'Suami Sasha', 'Surabaya', 33, 4, 1, 'Tempat', '1985-08-17', '50.00', '50.00', '0000-00-00', '2018-07-08', '160.00'),
('3171015408850008', 'Sasha Middle', 'Suami Sasha Middle', 'Surabaya', 33, 4, 2, 'California', '1985-08-17', '50.00', '50.00', '0000-00-00', '2018-07-08', '155.00'),
('3171015408850009', 'Sasha Middle', 'Suami Sasha Middle', 'Surabaya', 33, 4, 2, 'California', '1985-08-17', '50.00', '50.00', '0000-00-00', '2018-07-08', '155.00');

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
(1, 'admin', '37de2f53894018e662b274c262dd5ee98e5c956f'),
(2, 'titis', '67ff31efdbabf3097d6e3d84c6028ce8a1afb661');

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
