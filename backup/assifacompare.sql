-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 08:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assifacompare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(20) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `Ktp` int(30) NOT NULL,
  `No_hp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_mapel`
--

CREATE TABLE `detail_mapel` (
  `kd_detail_mapel` int(11) NOT NULL,
  `detail_mapel` varchar(30) DEFAULT NULL,
  `aspek_penilaian` varchar(30) DEFAULT NULL,
  `tingkatan` varchar(30) DEFAULT NULL,
  `hafalan` varchar(30) DEFAULT NULL,
  `kelas` varbinary(30) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_mapel`
--

INSERT INTO `detail_mapel` (`kd_detail_mapel`, `detail_mapel`, `aspek_penilaian`, `tingkatan`, `hafalan`, `kelas`, `id_kelas`, `id_mapel`) VALUES
(1, 'Aqidah Akhlaq', 'Pemahaman Teory', 'Shugro', NULL, 0x64696e696168, 1, 1),
(2, 'Fiqih', 'Pemahaman Teory', 'Shugro', NULL, 0x64696e696168, 1, 2),
(3, 'Shiroh', 'Pemahaman Teory', 'Shugro', NULL, 0x64696e696168, 1, 3),
(4, 'imla\'', 'Praktik', 'Shugro', NULL, 0x64696e696168, 1, 4),
(5, 'Aqidah Akhlaq', 'Pemahaman Teory', 'Wustho A', NULL, 0x64696e696168, 2, 1),
(6, 'Fiqih', 'Pemahaman Teory', 'Wustho A', NULL, 0x64696e696168, 2, 2),
(7, 'Shiroh', 'Pemahaman Teory', 'Wustho A', NULL, 0x64696e696168, 2, 3),
(8, 'imla\'', 'Praktik', 'Wustho A', NULL, 0x64696e696168, 2, 4),
(9, 'Aqidah Akhlaq', 'Pemahaman Teory', 'Wustho B', NULL, 0x64696e696168, 3, 1),
(10, 'Fiqih', 'Pemahaman Teory', 'Wustho B', NULL, 0x64696e696168, 3, 2),
(11, 'imla\'', 'Praktik', 'Wustho B', NULL, 0x64696e696168, 3, 3),
(12, 'Shiroh', 'Pemahaman Teory', 'Wustho B', NULL, 0x64696e696168, 3, 4),
(13, 'Aqidah Akhlaq', 'Pemahaman Teory', 'Kubro', NULL, 0x64696e696168, 4, 1),
(14, 'Fiqih', 'Pemahaman Teory', 'Kubro', NULL, 0x64696e696168, 4, 2),
(15, 'imla\'', 'Praktik', 'Kubro', NULL, 0x64696e696168, 4, 3),
(16, 'Shiroh', 'Pemahaman Teory', 'Kubro', NULL, 0x64696e696168, 4, 4),
(17, 'Ummi 1', '', 'Ummi 1', 'Bacaan', 0x756d6d69, 7, 6),
(18, 'Doa sebelum makan & minum', NULL, 'Ummi 1', 'Doa', 0x756d6d69, 7, 6),
(19, 'Doa sesudah makan & minum', NULL, 'Ummi 1', 'Doa', 0x756d6d69, 7, 6),
(20, 'Doa sebelum tidur', NULL, 'Ummi 1', 'Doa', 0x756d6d69, 7, 6),
(21, 'Doa bangun tidur', NULL, 'Ummi 1', 'Doa', 0x756d6d69, 7, 6),
(22, 'Doa masuk masjid', NULL, 'Ummi 1', 'Doa', 0x756d6d69, 7, 6),
(23, 'Doa keluar masjid', NULL, 'Ummi 1', 'Doa', 0x756d6d69, 7, 6),
(24, 'Surah An-Naas', NULL, 'Ummi 1', 'Surah Pendek', 0x756d6d69, 7, 6),
(25, 'Surah Al-Falaq', NULL, 'Ummi 1', 'Surah Pendek', 0x756d6d69, 7, 6),
(26, 'Surah Al-Ikhlas', NULL, 'Ummi 1', 'Surah Pendek', 0x756d6d69, 7, 6),
(27, 'Surah Al-Lahab', NULL, 'Ummi 1', 'Sueah Pendek', 0x756d6d69, 7, 6),
(28, 'Ummi 2', NULL, 'Ummi 2', 'Bacaan', 0x756d6d69, 8, 7),
(29, 'Doa sebelum tidur', NULL, 'Ummi 2', 'Doa', 0x756d6d69, 8, 7),
(30, 'Doa bangun tidur', NULL, 'Ummi 2', 'Doa', 0x756d6d69, 8, 7),
(31, 'Doa sebelum makan', NULL, 'Ummi 2', 'Doa', 0x756d6d69, 8, 7),
(32, 'Doa setelah makan', NULL, 'Ummi 2', 'Doa', 0x756d6d69, 8, 7),
(33, 'Doa masuk kamar mandi', NULL, 'Ummi 2', 'Doa', 0x756d6d69, 8, 7),
(34, 'Doa keluar kamar mandi', NULL, 'Ummi 2', 'Doa', 0x756d6d69, 8, 7),
(35, 'Doa keluar rumah', NULL, 'Ummi 2', 'Doa', 0x756d6d69, 8, 7),
(36, 'Doa sebelum belajar', NULL, 'Ummi 2', 'Doa', 0x756d6d69, 8, 7),
(37, 'Doa naik kendaraan', NULL, 'Ummi 2', 'Doa', 0x756d6d69, 8, 7),
(38, 'Doa ketika turun hujAn', NULL, 'Ummi 2', 'Doa', 0x756d6d69, 8, 7),
(39, 'Surah Al-Nasr', NULL, 'Ummi 2', 'Surah Pendek', 0x756d6d69, 8, 7),
(40, 'Surah Al-Kafirun', NULL, 'Ummi 2', 'Surah Pendek', 0x756d6d69, 8, 7),
(41, 'Surah Al-Kautsar', NULL, 'Ummi 2', 'Surah Pendek', 0x756d6d69, 8, 7),
(42, 'Ummi 3', NULL, 'Ummi 3', 'Bacaan', 0x756d6d69, 9, 8),
(43, 'Doa masuk rumah', NULL, 'Ummi 3', 'Doa', 0x756d6d69, 9, 8),
(44, 'Doa keluar rumah', NULL, 'Ummi 3', 'Doa', 0x756d6d69, 9, 8),
(45, 'Doa sebelum belajar', NULL, 'Ummi 3', 'Doa', 0x756d6d69, 9, 8),
(46, 'Doa sesudah belajar', NULL, 'Ummi 3', 'Doa', 0x756d6d69, 9, 8),
(47, 'Doa naik kendaraan', NULL, 'Ummi 3', 'Doa', 0x756d6d69, 9, 8),
(48, 'Surah Al-Ma\'un', NULL, 'Ummi 3', 'Surah Pendek', 0x756d6d69, 9, 8),
(49, 'Surah Al-Quraiys', NULL, 'Ummi 3', 'Surah Pendek', 0x756d6d69, 9, 8),
(50, 'Surah Al-Fiil', NULL, 'Ummi 3', 'Surah Pendek', 0x756d6d69, 9, 8),
(51, 'Ummi 4', NULL, 'Ummi 4', 'Bacaan', 0x756d6d69, 10, 9),
(52, 'Doa bercermin', NULL, 'Ummi 4', 'Doa', 0x756d6d69, 10, 9),
(53, 'Doa memakai pakaian', NULL, 'Ummi 4', 'Doa', 0x756d6d69, 10, 9),
(54, 'Doa melepas pakaian', NULL, 'Ummi 4', 'Doa', 0x756d6d69, 10, 9),
(55, 'Doa setelah wudhu', NULL, 'Ummi 4', 'Doa', 0x756d6d69, 10, 9),
(56, 'Surah al-Humazah', NULL, 'Ummi 4', 'Surah Pendek', 0x756d6d69, 10, 9),
(57, 'Surah Al-Ashr', NULL, 'Ummi 4', 'Surah Pendek', 0x756d6d69, 10, 9),
(58, 'Surah At-Takatsur', NULL, 'Ummi 4', 'Surah Pendek', 0x756d6d69, 10, 9),
(59, 'Ummi 5', NULL, 'Ummi 5', 'Bacaan', 0x756d6d69, 11, 10),
(60, 'Doa setelah adzan', NULL, 'Ummi 5', 'Doa', 0x756d6d69, 11, 10),
(61, 'Doa ketika cuci tangan', NULL, 'Ummi 5', 'Doa', 0x756d6d69, 11, 10),
(62, 'Doa berkumur', NULL, 'Ummi 5', 'Doa', 0x756d6d69, 11, 10),
(63, 'Surah Al-Qori\'ah', NULL, 'Ummi 5', 'Surah Pendek', 0x756d6d69, 11, 10),
(64, 'Surah Al-Adiyat', NULL, 'Ummi 5', 'Surah Pendek', 0x756d6d69, 11, 10),
(65, 'Surah Zalzalah', NULL, 'Ummi 5', 'Surah Pendek', 0x756d6d69, 11, 10),
(66, 'Pra Ummi', NULL, 'Pra Ummi', 'Bacaan', 0x756d6d69, 12, 11),
(67, 'Doa sebelum makan & minum', NULL, 'Pra Ummi', 'Doa', 0x756d6d69, 12, 11),
(68, 'Doa sesudah makan & minum', NULL, 'Pra Ummi', 'Doa', 0x756d6d69, 12, 11),
(69, 'Doa sebelum tidur', NULL, 'Pra Ummi', 'Doa', 0x756d6d69, 12, 11),
(70, 'Doa bangun tidur', NULL, 'Pra Ummi', 'Doa', 0x756d6d69, 12, 11),
(71, 'Doa masuk masjid', NULL, 'Pra Ummi', 'Doa', 0x756d6d69, 12, 11),
(72, 'Doa keluar masjid', NULL, 'Pra Ummi', 'Doa', 0x756d6d69, 12, 11),
(73, 'Surah An-Naas', NULL, 'Pra Ummi', 'Surah Pendek', 0x756d6d69, 12, 11),
(74, 'Surah Al-Falaq', NULL, 'Pra Ummi', 'Surah Pendek', 0x756d6d69, 12, 11),
(75, 'Surah Al-Ikhlas', NULL, 'Pra Ummi', 'Surah Pendek', 0x756d6d69, 12, 11),
(76, 'Surah Al-Lahab', NULL, 'Pra Ummi', 'Surah Pendek', 0x756d6d69, 12, 11),
(77, 'Ummi 6', NULL, 'Ummi 6', 'Bacaan', 0x756d6d69, 13, 11),
(78, 'Doa iftitah', NULL, 'Ummi 6', 'Doa', 0x756d6d69, 14, 12),
(79, 'Doa ruku', NULL, 'Ummi 6', 'Doa', 0x756d6d69, 14, 12),
(80, 'Doa sujud', NULL, 'Ummi 6', 'Doa', 0x756d6d69, 14, 12),
(81, 'Surah Al-Bayyinah', NULL, 'Ummi 6', 'Surah Pendek', 0x756d6d69, 14, 12),
(82, 'Surah Al-Qodr', NULL, 'Ummi 6', 'Surah Pendek', 0x756d6d69, 14, 12),
(83, 'Surah Al-Alaq', NULL, 'Ummi 6', 'Surah Pendek', 0x756d6d69, 14, 12),
(84, 'Al-Quran', NULL, 'Al-Quran', 'Bacaan', 0x756d6d69, 15, 13),
(85, 'Doa I\'tidal', NULL, 'Al-Quran', 'Doa', 0x756d6d69, 15, 13),
(86, 'Doa Tasyahud', NULL, 'Al-Quran', 'Doa', 0x756d6d69, 15, 13),
(87, 'Doa Qunut', NULL, 'Al-Quran', 'Doa', 0x756d6d69, 15, 13),
(88, 'Surah At-Tin', NULL, 'Al-Quran', 'Surah Pendek', 0x756d6d69, 15, 13),
(89, 'Surah Al-Insyiroh', NULL, 'Al-Quran', 'Surah Pendek', 0x756d6d69, 15, 13),
(90, 'Surah Al-Dhuha', NULL, 'Al-Quran', 'Surah Pendek', 0x756d6d69, 15, 13);

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
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'walimurid', 'walimurid'),
(4, 'admin_assifa', 'administrator assifa'),
(6, 'guru', 'guru assifa');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(20) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tanggal_lahir` varchar(30) DEFAULT NULL,
  `Verification` varchar(10) DEFAULT NULL,
  `Status_guru` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `user_id`, `Nama`, `Jenis_kelamin`, `no_hp`, `tanggal_lahir`, `Verification`, `Status_guru`) VALUES
(1, 29, 'amir khan', 'L', '085757575', '1995-06-08', 'Y', 'aktif'),
(2, 34, 'choirul huda', 'L', '08890966', '1997-09-12', 'Y', 'aktif'),
(3, 39, 'maman nurohman', 'L', '0894422911', '1997-07-15', 'Y', 'aktif'),
(4, 40, 'faziah putri', 'P', '0827719928', '1998-06-07', 'Y', 'aktif'),
(5, 41, 'nur cahya', 'L', '08144228992', '1997-11-06', 'Y', 'aktif'),
(6, 45, 'harianto ', 'L', '0827831009', '1997-08-23', 'Y', 'aktif'),
(7, 47, 'bayu aji nugroho', 'L', '0815627992', '1998-01-12', 'Y', 'aktif'),
(8, 46, 'eko agus setiawan', 'L', '082889110', '1997-05-05', 'Y', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(20) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `kd_kelas` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `Kelas`, `kd_kelas`) VALUES
(1, 'Sughro', 'diniah'),
(2, 'Wustho A', 'diniah'),
(3, 'Wustho B', 'diniah'),
(4, 'Kubro', 'diniah'),
(5, 'Lulus', 'diniah'),
(6, 'Pra Ummi', 'ummi'),
(7, 'Ummi 1', 'ummi'),
(8, 'Ummi 2', 'ummi'),
(9, 'Ummi 3', 'ummi'),
(10, 'Ummi 4', 'ummi'),
(11, 'Ummi 5', 'ummi'),
(12, 'Ummi 6', 'ummi'),
(13, 'Qur\'an', 'ummi'),
(14, 'Lulus', 'ummi');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_guru`
--

CREATE TABLE `kelas_guru` (
  `id_kelas_guru` int(11) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `kls_guru_status` varchar(20) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `walikelas` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_guru`
--

INSERT INTO `kelas_guru` (`id_kelas_guru`, `id_kelas`, `id_guru`, `kls_guru_status`, `id_mapel`, `walikelas`) VALUES
(2, 3, 2, NULL, 1, NULL),
(3, 4, 2, NULL, 1, NULL),
(4, 6, 1, NULL, 5, 'Walikelas'),
(5, 1, 3, NULL, 2, NULL),
(6, 2, 1, NULL, 1, NULL),
(8, 2, 3, NULL, 2, NULL),
(9, 1, 1, NULL, 1, NULL),
(10, 4, 4, NULL, 2, NULL),
(11, 3, 4, NULL, 2, NULL),
(12, 2, 5, NULL, 3, NULL),
(13, 1, 5, NULL, 3, NULL),
(14, 1, 7, NULL, 4, NULL),
(15, 3, 8, NULL, 4, NULL),
(16, 7, 2, NULL, 6, 'Walikelas'),
(17, 8, 3, NULL, 7, 'Walikelas'),
(18, 9, 4, NULL, 8, 'Walikelas'),
(19, 10, 5, NULL, 9, 'Walikelas'),
(20, 11, 6, NULL, 10, 'Walikelas'),
(21, 12, 7, NULL, 11, 'Walikelas'),
(22, 13, 8, NULL, 12, 'Walikelas'),
(24, 2, 7, NULL, 4, NULL),
(26, 3, 6, NULL, 3, NULL),
(27, 4, 6, NULL, 3, NULL),
(28, 4, 8, NULL, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_santri_diniah`
--

CREATE TABLE `kelas_santri_diniah` (
  `id_kelas_diniah` int(11) NOT NULL,
  `id_santri` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_santri_diniah`
--

INSERT INTO `kelas_santri_diniah` (`id_kelas_diniah`, `id_santri`, `id_kelas`) VALUES
(1, 27, 1),
(2, 28, 1),
(3, 31, 1),
(4, 32, 2),
(5, 35, 2),
(6, 50, 1),
(7, 36, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_santri_ummi`
--

CREATE TABLE `kelas_santri_ummi` (
  `id_kelas_ummi` int(11) NOT NULL,
  `id_santri` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_santri_ummi`
--

INSERT INTO `kelas_santri_ummi` (`id_kelas_ummi`, `id_santri`, `id_kelas`) VALUES
(1, 27, 6),
(2, 37, 6),
(3, 28, 6),
(4, 36, 6),
(5, 31, 6),
(6, 32, 6),
(7, 50, 7);

-- --------------------------------------------------------

--
-- Table structure for table `ketua_tpq`
--

CREATE TABLE `ketua_tpq` (
  `id_ketua_tpq` int(11) NOT NULL,
  `nama_ketua` varchar(100) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ketua_tpq`
--

INSERT INTO `ketua_tpq` (`id_ketua_tpq`, `nama_ketua`, `status`) VALUES
(1, 'Muhammad Junaidi', 'ketua');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(50) DEFAULT NULL,
  `mapel_kelas` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `mapel_kelas`) VALUES
(1, 'Aqidah Aklhaq', 'diniah'),
(2, 'Fiqih', 'diniah'),
(3, 'Shiroh', 'diniah'),
(4, 'Imla\'', 'diniah'),
(5, 'Pra Ummi', 'ummi'),
(6, 'Ummi 1', 'ummi'),
(7, 'Ummi 2', 'ummi'),
(8, 'Ummi 3', 'ummi'),
(9, 'Ummi 4', 'ummi'),
(10, 'Ummi 5', 'ummi'),
(11, 'Ummi 6', 'ummi'),
(12, 'Alqur\'an', 'ummi');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_dinniyah` int(11) NOT NULL,
  `id_ummi` int(11) NOT NULL,
  `id_kelas_ummi` int(11) NOT NULL,
  `id_kelas_dinniyah` int(11) NOT NULL,
  `id_santri` int(20) DEFAULT NULL,
  `id_guru` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_diniah`
--

CREATE TABLE `nilai_diniah` (
  `id_nilai_diniah` int(11) NOT NULL,
  `id_santri` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `id_detail_mapel` int(11) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `tgl_inp_nilai` varchar(10) DEFAULT NULL,
  `semester` varchar(10) DEFAULT NULL,
  `id_kelas_diniah` int(11) DEFAULT NULL,
  `catatan` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_diniah`
--

INSERT INTO `nilai_diniah` (`id_nilai_diniah`, `id_santri`, `id_kelas`, `id_guru`, `id_detail_mapel`, `nilai`, `tgl_inp_nilai`, `semester`, `id_kelas_diniah`, `catatan`) VALUES
(1, 27, 1, 7, 4, 99, '2022', 'Genab', 1, 'Ananda cukup baik dalam membaca ummi 6, sudah memahami materinya, makhorijul huruf sudah mulai bagus, hanya beberapa'),
(2, 27, 1, 5, 3, 78, '2022', 'Genab', 1, 'Ananda cukup baik dalam membaca ummi 6, sudah memahami materinya, makhorijul huruf sudah mulai bagus, hanya beberapa'),
(3, 27, 1, 3, 2, 89, '2022', 'Genab', 1, 'Ananda cukup baik dalam membaca ummi 6, sudah memahami materinya, makhorijul huruf sudah mulai bagus, hanya beberapa'),
(4, 27, 1, 1, 1, 90, '2022', 'Genab', 1, 'Ananda cukup baik dalam membaca ummi 6, sudah memahami materinya, makhorijul huruf sudah mulai bagus, hanya beberapa'),
(5, 31, 1, 1, 1, 99, '2022', 'Genab', 1, 'Ananda cukup baik dalam membaca ummi 6, sudah memahami materinya, makhorijul huruf sudah mulai bagus, hanya beberapa'),
(6, 31, 1, 3, 2, 89, '2022', 'Genab', 1, 'Ananda cukup baik dalam membaca ummi 6, sudah memahami materinya, makhorijul huruf sudah mulai bagus, hanya beberapa'),
(7, 31, 1, 7, 4, 78, '2022', 'Genab', 1, 'Ananda cukup baik dalam membaca ummi 6, sudah memahami materinya, makhorijul huruf sudah mulai bagus, hanya beberapa'),
(8, 31, 1, 5, 3, 89, '2022', 'Genab', 1, 'Ananda cukup baik dalam membaca ummi 6, sudah memahami materinya, makhorijul huruf sudah mulai bagus, hanya beberapa');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_ummi`
--

CREATE TABLE `nilai_ummi` (
  `id_nilai_ummi` int(11) NOT NULL,
  `ummi` varchar(100) NOT NULL,
  `nilai_ummi` int(11) NOT NULL,
  `catatan_ummi` varchar(500) DEFAULT NULL,
  `doa1` varchar(100) NOT NULL,
  `nilai_doa1` int(11) NOT NULL,
  `doa2` varchar(100) NOT NULL,
  `nilai_doa2` int(11) NOT NULL,
  `doa3` varchar(100) NOT NULL,
  `nilai_doa3` int(11) NOT NULL,
  `catatan_doa` varchar(500) DEFAULT NULL,
  `surat1` varchar(100) NOT NULL,
  `nilai_surat1` int(11) NOT NULL,
  `surat2` varchar(100) NOT NULL,
  `nilai_surat2` int(11) NOT NULL,
  `surat3` varchar(100) NOT NULL,
  `nilai_surat3` int(11) NOT NULL,
  `catatan_surat` varchar(500) DEFAULT NULL,
  `id_santri` int(11) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `semester` varchar(10) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `id_kelas` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_ummi`
--

INSERT INTO `nilai_ummi` (`id_nilai_ummi`, `ummi`, `nilai_ummi`, `catatan_ummi`, `doa1`, `nilai_doa1`, `doa2`, `nilai_doa2`, `doa3`, `nilai_doa3`, `catatan_doa`, `surat1`, `nilai_surat1`, `surat2`, `nilai_surat2`, `surat3`, `nilai_surat3`, `catatan_surat`, `id_santri`, `id_guru`, `semester`, `tahun`, `id_kelas`) VALUES
(1, 'ummi 1', 80, 'Ananda cukup baik dalam membaca ummi 6, sudah memahami materinya, makhorijul huruf sudah mulai bagus, hanya beberapa', 'doa bercermin', 50, 'doa 2', 80, 'doa 3', 90, 'Ananda cukup baik dalam membaca ummi 6, sudah memahami materinya, makhorijul huruf sudah mulai bagus, hanya beberapa', 'surat 1', 90, 'surat 2', 60, 'surat 3', 80, 'Ananda cukup baik dalam membaca ummi 6, sudah memahami materinya, makhorijul huruf sudah mulai bagus, hanya beberapa', 31, 1, 'Genab', '2022', 6),
(2, 'ummi 1', 90, 'Ananda cukup baik dalam membaca ummi 6, sudah memahami materinya, makhorijul huruf sudah mulai bagus, hanya beberapa', 'doa 1', 88, 'doa 1', 78, 'doa 1', 56, 'Ananda cukup baik dalam membaca ummi 6, sudah memahami materinya, makhorijul huruf sudah mulai bagus, hanya beberapa', 'surat 1', 67, 'surat 3', 45, 'surat 1', 45, 'Ananda cukup baik dalam membaca ummi 6, sudah memahami materinya, makhorijul huruf sudah mulai bagus, hanya beberapa', 27, 1, 'Genab', '2022', 6),
(3, 'ummi 1', 56, 'dfgdfg', 'Doa Bercermin', 67, 'Doa Memakai Pakaian', 89, 'Doa Melepas Pakaian', 78, 'ftytrfyfy', 'Surat Al Hummazah', 67, 'Surat Ashr', 89, 'Surat At Takasur', 90, 'yuiyuiyui', 28, 1, 'Genab', '2022', 6),
(4, 'ummi 1', 67, 'Ananda cukup baik dalam membaca ummi 6, sudah memahami materinya, makhorijul huruf sudah mulai bagus, hanya beberapa', 'Doa Bercermin', 89, 'Doa Memakai Pakaian', 79, 'Doa Melepas Pakaian', 86, 'Ananda cukup baik dalam membaca ummi 6, sudah memahami materinya, makhorijul huruf sudah mulai bagus, hanya beberapa', 'Surat Al Hummazah', 95, 'Surat Ashr', 73, 'Surat At Takasur', 90, 'Ananda cukup baik dalam membaca ummi 6, sudah memahami materinya, makhorijul huruf sudah mulai bagus, hanya beberapa', 36, 1, 'Genab', '2022', 6);

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
  `id` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Umur` varchar(30) NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `Nama_ayah` varchar(30) NOT NULL,
  `Nama_ibu` varchar(30) DEFAULT NULL,
  `Tahun_pendaftaran` int(10) DEFAULT NULL,
  `Sekolah_formal` varchar(30) DEFAULT NULL,
  `No_HP_ortu` varchar(15) DEFAULT NULL,
  `Alamat` varchar(50) DEFAULT NULL,
  `Verification` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`id_santri`, `id`, `Nama`, `Umur`, `Jenis_kelamin`, `Nama_ayah`, `Nama_ibu`, `Tahun_pendaftaran`, `Sekolah_formal`, `No_HP_ortu`, `Alamat`, `Verification`) VALUES
(27, 1, 'hadi', '2022', 'L', 'suteno', 'karmiem', 2022, NULL, NULL, NULL, 'Y'),
(28, 3, 'rico', '1998', 'L', 'goku', 'noni', 2022, NULL, NULL, NULL, 'Y'),
(31, 4, 'teguh saipul', '1999', 'L', 'asep', 'megan susanti', 2022, NULL, NULL, NULL, 'Y'),
(32, 5, 'susi jaenab', '2007', 'P', 'john mclaner', 'aisyah', 2022, NULL, NULL, NULL, 'Y'),
(35, 6, 'nopal aryanto', '2009-05-21', 'L', 'burhan atmaja', 'rina maria', 2022, '6 SD', '085371899', 'jl.sigura-gura no.10 kota malang', 'Y'),
(36, 7, 'sinta kusumawati', '2012-12-12', 'P', 'beni nurcahyo', 'mayang cantika', 2022, '4 SD', '081887791', 'jl. jatisari kel. ngaglik kota batu', 'Y'),
(37, 8, 'farhan abas', '2011-03-19', 'L', 'ari akbar', 'maulina wijaya', 2022, '5 SD', '0814582200', 'jl. sigura-gura no.55, malang', 'Y'),
(49, 9, 'joko dafid', '2014-06-13', 'L', 'murshid', 'jessika ainur', 2022, '2 sd', '08178593301', 'jl.sigura-gura no.07', 'Y'),
(50, 10, 'nanda afrian', '2013-07-25', 'L', 'heru akbar', 'nur laly', 2022, '5 SD', '0816277829', 'jl.sigura-gura no.7', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ummi`
--

CREATE TABLE `ummi` (
  `id_ummi` int(20) NOT NULL,
  `hafalan_surat` int(10) NOT NULL,
  `hafalan_doa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$10$Xg.bANJs4CWKdqlNIwHAZOFhOeN5aHPiO1fbq5crLZscBgIdrcv4O', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1653539376, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', NULL, '$2y$10$oRjw4F7psO9ExOcKa3glo.TwIXn2w2WkowE5fHNajiFV.ZFRm3mM.', 'pmb@stiki.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1632751918, 1653366040, 1, 'andi', 'tj', '', ''),
(3, '::1', NULL, '$2y$10$McF.XgS3MM2izjueNUxVcuvUz.Vb4xEdPHys7CYdZEl5L3OlptbVC', 'bak@stiki.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1632752325, 1653368870, 1, 'joni', 'd', '', ''),
(4, '::1', NULL, '$2y$10$tJeCsWuD2H2RCv7b5iY9jOi5T41O1ThV/6gwaKkseRyMMNG0jcE7u', 'tane@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1632752568, 1636516016, 1, 'tane', 'e', '', ''),
(5, '::1', NULL, '$2y$10$FSo/IZX/zFEQLu4qnPXvdOjNwsXFA3I9VzIRdf/DgH0H3yyaiBGqW', 'hamida@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1632946348, 1632946377, 1, NULL, NULL, NULL, NULL),
(6, '::1', NULL, '$2y$10$YxPJWpodPiiTq5u4jn/qI.NMt1vvs2Vf0OJtC3N7swPlgZyVOAfjO', 'nella@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1632946721, 1632946748, 1, NULL, NULL, NULL, NULL),
(7, '::1', NULL, '$2y$10$.5gEo6FFjoLTm8vg5TTdY.1hojizS3yLg0XvHT6ByfN9I0NsUaR0a', 'rian@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1633469955, 1636380620, 1, NULL, NULL, NULL, NULL),
(8, '::1', NULL, '$2y$10$dVTELY0ovuo2GhQI.21O4OwCdXlGsRSXhn9NarFrdpzh/0pAW5/Ie', 'ernes@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1633898251, 1635471683, 1, NULL, NULL, NULL, NULL),
(9, '::1', NULL, '$2y$10$KWZk6wG2n/k6SCOqdWp2hOdmDFXPtXXj2zUbn1zwAWlITqfHN/rKa', 'yayan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1634154403, NULL, 1, 'yayan', 'ruhiyan', '', '08534634'),
(10, '::1', NULL, '$2y$10$AN2wajj6fKjTqODbapWgge/GqU2r9rBLiAIh1niQe4/gJjT9KAwim', 'lala@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1634156079, NULL, 1, 'dsfsdf', 'sdfsd', 'asda', '084848'),
(11, '::1', NULL, '$2y$10$JuiikaH5uce3ixjtpIGUaeHw/FwyTs2.kLEjws1x6rWdhz/n.ee9i', 'yani1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1634156439, NULL, 1, 'yani1', 'asa', '', '08523662558'),
(12, '::1', NULL, '$2y$10$eWqbzb5Qv8egf3mfck2wzepoWYz3ywZm9TIpihwwiixnviWT/udAG', 'danu@stiki.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1634156498, NULL, 1, 'danu', 'pratama', NULL, '12345678'),
(13, '::1', NULL, '$2y$10$PmUAG/7CSK6rXpwf1EGpTeJy.WKBIHF3U3rNzzEELrcd7tDG5Q7wC', 'gaga@ymail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1634156599, NULL, 1, 'gaga', 'gaga', NULL, '0849494'),
(14, '::1', NULL, '$2y$10$Zbdt26V0opBI.2gVLg2lSeOSPnEjM8ibrR6kNMPe19wFbfjtxkTwK', 'menik@stiki.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1634156728, 1634156859, 1, 'menik', 'menik', '', '00000000'),
(15, '::1', NULL, '$2y$10$h7uX8rrVGGDbhDqwXdPS6.KwNwB24yOo.rgtkaZgtAdRfOWRpi.km', 'guru@gmai.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1635649968, 1636026669, 1, NULL, NULL, NULL, NULL),
(16, '192.168.1.13', NULL, '$2y$10$kbiIO/ZBdOZooqckerblrOFdSqlpM6cBa/qP3yx1I5Za2CtJqCMAW', 'rizal@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1635912521, 1658505353, 1, NULL, NULL, NULL, NULL),
(17, '192.168.1.13', NULL, '$2y$10$02PVfxtEU5BfIqWy4ZWcvesto8NcOmqnZ3GxmhAbAb7BbauBnwVEK', 'roiyan@stiki.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1635932096, 1635932115, 1, NULL, NULL, NULL, NULL),
(18, '::1', NULL, '$2y$10$eNIxdfcOYE7b/9tLuDP7j.EFxWuEdX7kroX6FF0WniDwrmkF.HuWO', 'rifki@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1636003052, 1636392901, 1, NULL, NULL, NULL, NULL),
(20, '::1', NULL, '$2y$10$kqNeOVXimYI7r5LuxQgsL.xYQ1EAIpCnvdiYzOKikQ4WvWlUkLTpq', 'skdfjs@sdkfjsldk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1636279645, NULL, 1, NULL, NULL, NULL, NULL),
(21, '::1', NULL, '$2y$10$p9IOQiceOQCVNuiH4BmbU.hTPvCupzGZjuGc.wclcFEW0ZKAIrmTW', 'rozak@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1636280288, 1636387470, 1, NULL, NULL, NULL, NULL),
(22, '::1', NULL, '$2y$10$ZHSc0Q4UszGy6AyukWMljej08B7iUjjgWcWDYjYV99ygi89DNTINu', 'danu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1636393023, 1636393031, 1, NULL, NULL, NULL, NULL),
(23, '::1', NULL, '$2y$10$QX.aL74V/LxabvWhsBCt8unL8rLZP/s4B1EpEbS6.PplzY0MdycP.', 'veve@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1636501336, 1636503512, 1, NULL, NULL, NULL, NULL),
(24, '::1', NULL, '$2y$10$t6YKGMso3lFHDBVlo22QyOHL4uta7YWBAjb9GNE2cdqA5X17bRaei', 'fahrizal@mail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1636513978, 1636867771, 1, NULL, NULL, NULL, NULL),
(25, '::1', NULL, '$2y$10$myhJNHEJQKQEfYtClzo8hu65lnc6SFAzMDfwXZmXBzp29trmj81Yu', 'naiman@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1653372037, 1653372229, 1, NULL, NULL, NULL, NULL),
(26, '::1', NULL, '$2y$10$UW0j1Qu5Tu6.OB6QLauda.sgtVjbVyF9.yXkpaIsXaqnTKXyLXevy', 'tomi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1653372544, 1653537001, 1, 'tomi', 'tomi', 'assifa', 'admin'),
(27, '::1', NULL, '$2y$10$W0ihwchqgDefkfDhBVovd.2OtADHzHeOfsWTsn7OOFgao41u97OgO', 'sukiran@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1653387643, 1654669940, 1, NULL, NULL, NULL, NULL),
(28, '::1', NULL, '$2y$10$vruaMeL.sJkuvfodZnj84ewXthL6seVXtnCekfPy/rsllEs2mLq4e', 'doni_s@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1653399394, 1653532951, 1, NULL, NULL, NULL, NULL),
(29, '::1', NULL, '$2y$10$iJRwJCsgjiFfkew2aFdORe1gIAuHgLJktiqhzbZvbj/Rfp9qgXLvO', 'guru1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1653539120, 1666670602, 1, 'guru1', 'guru', 'guru', 'admin'),
(30, '::1', NULL, '$2y$10$3R3qkRb0Z6UdcHD0dd25S.2V76s6Y7NlhdMNUuRxfZXwplyYS8I72', 'admin_assifa@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1653539353, 1666655488, 1, 'fabi', 'al katiri', 'assifa', '08999'),
(31, '192.168.1.13', NULL, '$2y$10$xUDSUuMogpmqpwd/9w6Q1umsR86/8dbcnyb3iNDLYijR6dbv8wkMi', 'saipul69@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1654671771, 1666670262, 1, NULL, NULL, NULL, NULL),
(32, '192.168.1.13', NULL, '$2y$10$wBj5YavfZ9IOu.FM82u7tOB3XczOckjtFg6Et1bLEZfxYWnIBIGMK', 'sussus2@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1654672253, 1656668745, 1, NULL, NULL, NULL, NULL),
(33, '192.168.1.13', NULL, '$2y$10$eXscVYVK/YLA6X0tx4mWeeTNqdOnPTV5VcSdYtJnxZjEKBvdoZbIe', 'moni22@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1654672949, 1654678265, 1, NULL, NULL, NULL, NULL),
(34, '192.168.1.13', NULL, '$2y$10$qVosjIx7C3wFWJF7rQ8zoeKZ8gduhViFCWHVSZV2z/Xk9qBH6tD2y', 'guru2@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1654673242, 1666646782, 1, NULL, NULL, NULL, NULL),
(35, '192.168.1.13', NULL, '$2y$10$33nzY6dcAFUPE/.anRc/uOlHHpdU83txA9KXk5ej1WzMkxmgo6cPy', 'nopalyanto@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1655388107, 1655388512, 1, NULL, NULL, NULL, NULL),
(36, '192.168.1.13', NULL, '$2y$10$tym7bhtuYVUxPB4V1er7nu5oyn8Eyza3WtPSicesXbcw7dP/gyGqG', 'sinta12@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1655389389, 1655820385, 1, NULL, NULL, NULL, NULL),
(37, '192.168.1.13', NULL, '$2y$10$rzRYz/M26ENQj8LBMe7aruInjfm97YbOl7IzLzYzSS4VMao3HF6Oe', 'farhanabs@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1655614435, 1658594847, 1, NULL, NULL, NULL, NULL),
(38, '192.168.1.13', NULL, '$2y$10$cMCknHyvdkX/KPelrhnV8uW3eF.I2fg64JNwyWjGMhOklAGPDmROy', 'rafafitri@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1655908974, 1656337367, 1, NULL, NULL, NULL, NULL),
(39, '192.168.1.17', NULL, '$2y$10$0jj7ebyE0/JHXPvf3BEibO7a6kPURYufHk4ffxkLlBDyQ167wTlOi', 'guru3@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1656523526, 1666653482, 1, NULL, NULL, NULL, NULL),
(40, '192.168.1.17', NULL, '$2y$10$pPYOeRMndaKvJ2MkeeM7X.XHhOOxy2evkKaOB7r6d2DREyU21LbUK', 'faziah55@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1656597233, 1665125612, 1, NULL, NULL, NULL, NULL),
(41, '192.168.1.17', NULL, '$2y$10$17gZWLpDY60Sz2P/TSbfnOv4H7VBmFn6qA6ySTngsQ2CaBlnO9Q4q', 'nurcahya@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1656666707, 1666653544, 1, NULL, NULL, NULL, NULL),
(42, '192.168.1.17', NULL, '$2y$10$62b./SSGB.2wfSNdlN2pJeqMOPdwqXLDq68D9ooJoVuNdHfAWjFUC', 'bagusharianto@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1656666827, NULL, 1, NULL, NULL, NULL, NULL),
(43, '192.168.1.17', NULL, '$2y$10$xouiZpbz7XszaYcJu/nKuuCR4l9ENNMsXz1xqioNk8wAvKE8qvGnm', 'agushermawan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1656666860, NULL, 1, NULL, NULL, NULL, NULL),
(44, '192.168.1.17', NULL, '$2y$10$LY85nli.r70jc1KrWMLWo.m83dMCFGk1rCOcNXg5kZQBtVneT7vNC', 'catursetiawan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1656666899, 1658594774, 1, NULL, NULL, NULL, NULL),
(45, '192.168.1.17', NULL, '$2y$10$1D3R1HaN4oVdez2Irp4Xju6gn3p5WCK6/EKdiyhuUBCUYqY3QWRO2', 'harianto@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1656667030, 1665125724, 1, NULL, NULL, NULL, NULL),
(46, '192.168.1.17', NULL, '$2y$10$MQR.BBv4lbp4rga9xJpu2e8RAd3I5THCyEAM9plhjOXLRr2Md/BMu', 'ekoagus@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1656667086, 1665125788, 1, NULL, NULL, NULL, NULL),
(47, '192.168.1.17', NULL, '$2y$10$MIE1UrrrKyDty3YCAToCku7YBIvnTTracdWMrutUYs7xXTWWnRIJS', 'bayuaji@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1656667142, 1666653517, 1, NULL, NULL, NULL, NULL),
(48, '192.168.1.12', NULL, '$2y$10$3uXUwyW47gzxeGN.MsN54O3VzKQ6r/QCPvsQ7etiGT2D4i96tmFeO', 'febri2@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1657624467, 1657723186, 1, NULL, NULL, NULL, NULL),
(49, '::1', NULL, '$2y$10$sNrtGxv8yqMscFl2gjCjauGDY2nQ0Xb069VjOuFqLncdOS46Fe4SK', 'jokodf@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1658712495, 1658712507, 1, NULL, NULL, NULL, NULL),
(50, '::1', NULL, '$2y$10$08UHhJ8q0ki5cLzzx65afeymTMN7V4iw3wfGHYZcuRYionBluS74W', 'nanda@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1658715124, 1663176716, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 3, 4),
(16, 14, 3),
(30, 26, 4),
(28, 27, 3),
(29, 28, 6),
(32, 29, 6),
(34, 30, 4),
(35, 31, 3),
(36, 32, 3),
(37, 33, 3),
(38, 34, 6),
(39, 35, 3),
(40, 36, 3),
(41, 37, 3),
(42, 38, 3),
(43, 39, 6),
(44, 40, 6),
(45, 41, 6),
(46, 42, 3),
(47, 43, 3),
(48, 44, 3),
(49, 45, 6),
(50, 46, 6),
(51, 47, 6),
(52, 48, 3),
(53, 49, 3),
(54, 50, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_mapel`
--
ALTER TABLE `detail_mapel`
  ADD PRIMARY KEY (`kd_detail_mapel`);

--
-- Indexes for table `dinniyah`
--
ALTER TABLE `dinniyah`
  ADD PRIMARY KEY (`id_dinniyah`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kelas_guru`
--
ALTER TABLE `kelas_guru`
  ADD PRIMARY KEY (`id_kelas_guru`);

--
-- Indexes for table `kelas_santri_diniah`
--
ALTER TABLE `kelas_santri_diniah`
  ADD PRIMARY KEY (`id_kelas_diniah`);

--
-- Indexes for table `kelas_santri_ummi`
--
ALTER TABLE `kelas_santri_ummi`
  ADD PRIMARY KEY (`id_kelas_ummi`);

--
-- Indexes for table `ketua_tpq`
--
ALTER TABLE `ketua_tpq`
  ADD PRIMARY KEY (`id_ketua_tpq`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `nilai_diniah`
--
ALTER TABLE `nilai_diniah`
  ADD PRIMARY KEY (`id_nilai_diniah`);

--
-- Indexes for table `nilai_ummi`
--
ALTER TABLE `nilai_ummi`
  ADD PRIMARY KEY (`id_nilai_ummi`);

--
-- Indexes for table `raport`
--
ALTER TABLE `raport`
  ADD PRIMARY KEY (`id_raport`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id_santri`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ummi`
--
ALTER TABLE `ummi`
  ADD PRIMARY KEY (`id_ummi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_mapel`
--
ALTER TABLE `detail_mapel`
  MODIFY `kd_detail_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kelas_guru`
--
ALTER TABLE `kelas_guru`
  MODIFY `id_kelas_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `kelas_santri_diniah`
--
ALTER TABLE `kelas_santri_diniah`
  MODIFY `id_kelas_diniah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kelas_santri_ummi`
--
ALTER TABLE `kelas_santri_ummi`
  MODIFY `id_kelas_ummi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ketua_tpq`
--
ALTER TABLE `ketua_tpq`
  MODIFY `id_ketua_tpq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_diniah`
--
ALTER TABLE `nilai_diniah`
  MODIFY `id_nilai_diniah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nilai_ummi`
--
ALTER TABLE `nilai_ummi`
  MODIFY `id_nilai_ummi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `raport`
--
ALTER TABLE `raport`
  MODIFY `id_raport` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
