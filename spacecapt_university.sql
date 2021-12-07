-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 06:04 PM
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
(19024010014, 'Alifah Rafidah Putri', 'Jakarta', 22),
(19024010065, 'Fairus Hanani', 'Palembang', 22),
(19024010098, 'Aura Brhitania', 'Bandung', 22),
(19025010011, 'Laras Setyowati', 'Purwokerto', 21),
(19025010014, 'Anisah Qurrotu Aini', 'Nabire', 21),
(19025010117, 'Barna Deta Putra', 'Purbalingga', 21),
(19081010046, 'Fahri Izzuddin Zulkarnaen', 'Surabaya', 11),
(19081010072, 'Ishak Febrianto', 'Solo', 11),
(19081010185, 'Deva Dwi Satrio', 'Bekasi', 11),
(19082010039, 'Fahri Arya Kharisma', 'Sidoarjo', 12),
(19082010082, 'Yusman Zulfandra', 'Surabaya', 12),
(19082010114, 'Achmad Chusen', 'Pamekasan', 12),
(19083010006, 'Dendy Arizki', 'Malang', 13),
(19083010051, 'Sandria Amelia Putri', 'Bangil', 13),
(19083010074, 'Luqna Aziziyah', 'Lumajang', 13);

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
(2, 'Fakultas Pertanian');

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
(2, 22, 'Agribisnis');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(25) NOT NULL,
  `Password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`) VALUES
('fhr', '$2y$10$KQyieIaJgsDqsMr949wW6.jItEckIhkAT4S86VDq2T1Mvpzo5D6U2'),
('mimina', '$2y$10$v/Pp.WYwV6YaRwQogjH8W.vm/LbLoLGA91m3k7yp4QcwOv07pP5RO');

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);

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
