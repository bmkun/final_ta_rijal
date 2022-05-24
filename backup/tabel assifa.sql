-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 05:31 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raport`
--

-- --------------------------------------------------------

--
-- Table structure for table `dinniyah`
--

CREATE TABLE `dinniyah` (
  `id_dinniyah` int(20) NOT NULL,
  `aqidah_akhlak` int(11) NOT NULL,
  `fiqih` int(11) NOT NULL,
  `imla'` int(11) NOT NULL,
  `shiroh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(20) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `no_hp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `infaq`
--

CREATE TABLE `infaq` (
  `id_infaq` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `nominal` int(11) NOT NULL,
  `paraf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_dinniyah`
--

CREATE TABLE `kelas_dinniyah` (
  `id_kelas_dinniyah` int(20) NOT NULL,
  `sughro` varchar(10) NOT NULL,
  `wustho_a` varchar(10) NOT NULL,
  `wustho_b` varchar(10) NOT NULL,
  `kubro` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_ummi`
--

CREATE TABLE `kelas_ummi` (
  `id_kelas_ummi` int(11) NOT NULL,
  `pra_ummi` int(11) NOT NULL,
  `ummi_1` int(11) NOT NULL,
  `ummi_2` int(11) NOT NULL,
  `ummi_3` int(11) NOT NULL,
  `ummi_4` int(11) NOT NULL,
  `ummi_5` int(11) NOT NULL,
  `ummi_6` int(11) NOT NULL,
  `al-quran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_dinniyah` int(11) NOT NULL,
  `id_ummi` int(11) NOT NULL,
  `id_kelas_ummi` int(11) NOT NULL,
  `id_kelas_dinniyah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `raport`
--

CREATE TABLE `raport` (
  `id_raport` int(11) NOT NULL,
  `id_kelas_santri` int(11) NOT NULL,
  `id_nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id_santri` int(20) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `Umur` int(2) NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `Nama_ayah` varchar(30) NOT NULL,
  `Nama_ibu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ummi`
--

CREATE TABLE `ummi` (
  `id_ummi` int(20) NOT NULL,
  `hafalan_surat` int(10) NOT NULL,
  `hafalan_doa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dinniyah`
--
ALTER TABLE `dinniyah`
  ADD PRIMARY KEY (`id_dinniyah`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `infaq`
--
ALTER TABLE `infaq`
  ADD PRIMARY KEY (`id_infaq`);

--
-- Indexes for table `kelas_dinniyah`
--
ALTER TABLE `kelas_dinniyah`
  ADD PRIMARY KEY (`id_kelas_dinniyah`);

--
-- Indexes for table `kelas_ummi`
--
ALTER TABLE `kelas_ummi`
  ADD PRIMARY KEY (`id_kelas_ummi`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `raport`
--
ALTER TABLE `raport`
  ADD PRIMARY KEY (`id_raport`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id_santri`);

--
-- Indexes for table `ummi`
--
ALTER TABLE `ummi`
  ADD PRIMARY KEY (`id_ummi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infaq`
--
ALTER TABLE `infaq`
  MODIFY `id_infaq` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas_ummi`
--
ALTER TABLE `kelas_ummi`
  MODIFY `id_kelas_ummi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `raport`
--
ALTER TABLE `raport`
  MODIFY `id_raport` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
