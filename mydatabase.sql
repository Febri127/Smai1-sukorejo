-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 20, 2022 at 01:49 PM
-- Server version: 10.8.3-MariaDB
-- PHP Version: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myDatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `jurusan` (
  `kd_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `prodi`
--

INSERT INTO `jurusan` (`kd_jurusan`, `nama_jurusan`, `password`) VALUES
(55201, 'Ilmu Komputer', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(59201, 'Teknologi Informasi', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `kelas` (
  `kd_kelas` int(11) NOT NULL,
  `kelas` varchar(2) NOT NULL,
  `sebaran_kelas` enum('A','B','C') NOT NULL,
  `kd_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `semester`
--

INSERT INTO `kelas` (`kd_kelas`, `kelas`, `sebaran_kelas`, `kd_jurusan`) VALUES
(3, '1', 'A', 59201),
(4, '2', 'A', 59201),
(5, '1', 'A', 55201),
(6, '2', 'A', 55201);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `username`, `password`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin');

--
-- Indexes for dumped tables
--
CREATE TABLE `sanksi` (
  `idsanksi` int(11) NOT NULL,
  `sanksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--





CREATE TABLE `bina` (
  `idbina` int(11) NOT NULL,
  `npm` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `sebaran_kelas` enum('sudah','proses', 'belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;



CREATE TABLE `absen` (
  `npm` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kd_kelas` int(11) NOT NULL,
  `kd_jurusan` int(11) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `hadir` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `alpha` int(11) NOT NULL,
  `idsanksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Indexes for table `mahasiswa`
--
--
ALTER TABLE `bina`
  ADD PRIMARY KEY (`idbina`) USING BTREE;

ALTER TABLE `sanksi`
  ADD PRIMARY KEY (`idsanksi`) USING BTREE;
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`npm`) USING BTREE;
-- Indexes for table `prodi`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kd_jurusan`) USING BTREE;

--
-- Indexes for table `semester`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `kelas`
  MODIFY `kd_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
