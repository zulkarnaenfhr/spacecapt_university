-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 11:42 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spacecapt_university`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamahasiswa`
--

CREATE TABLE `datamahasiswa` (
  `NPM` bigint(12) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Kota` varchar(50) NOT NULL,
  `id_Jurusan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datamahasiswa`
--

INSERT INTO `datamahasiswa` (`NPM`, `Nama`, `Kota`, `id_Jurusan`) VALUES
(19081010046, 'Fahri Izzuddin Zulkarnaen', 'Surabaya', 11),
(19081010072, 'ishak', 'Sidoarjo', 12),
(19081010185, 'Deva', 'Bekasi', 13);

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_Fakultas` int(1) NOT NULL,
  `nama_Fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_Fakultas`, `nama_Fakultas`) VALUES
(1, 'Fakultas Ilmu Komputer'),
(2, 'Fakultas Pertanian'),
(3, 'Fakultas Teknik');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_Fakultas` int(1) NOT NULL,
  `id_Jurusan` int(2) NOT NULL,
  `nama_Jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_Fakultas`, `id_Jurusan`, `nama_Jurusan`) VALUES
(1, 11, 'Informatika'),
(1, 12, 'Sistem Informasi'),
(1, 13, 'Sains Data'),
(2, 21, 'Agroteknologi'),
(2, 22, 'Agribisnis'),
(3, 31, 'Teknik Kimia'),
(3, 32, 'Teknik Industri'),
(3, 33, 'Teknologi Pangan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  ADD PRIMARY KEY (`NPM`),
  ADD KEY `id_Jurusan` (`id_Jurusan`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_Fakultas`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_Jurusan`),
  ADD KEY `id_Fakultas` (`id_Fakultas`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  ADD CONSTRAINT `jurusan_Mahasiswa` FOREIGN KEY (`id_Jurusan`) REFERENCES `jurusan` (`id_Jurusan`);

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `fakultas_Jurusan` FOREIGN KEY (`id_Fakultas`) REFERENCES `fakultas` (`id_Fakultas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
