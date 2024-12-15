-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2024 at 09:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `konsentrasi` varchar(50) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `ipk` float DEFAULT NULL,
  `ipks` float DEFAULT NULL,
  `sks` int(11) DEFAULT NULL,
  `sks_semester` int(11) DEFAULT NULL,
  `instansi` varchar(100) DEFAULT NULL,
  `alamat_instansi` varchar(200) DEFAULT NULL,
  `judulkp` varchar(100) DEFAULT NULL,
  `dospem` varchar(100) DEFAULT NULL,
  `dosen1` varchar(100) DEFAULT NULL,
  `dosen2` varchar(100) DEFAULT NULL,
  `dosen3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `nim`, `alamat`, `konsentrasi`, `semester`, `ipk`, `ipks`, `sks`, `sks_semester`, `instansi`, `alamat_instansi`, `judulkp`, `dospem`, `dosen1`, `dosen2`, `dosen3`) VALUES
(1, 'Budi Pekerti', '21060122130051', 'Jl. Prof. Soedarto No.13, Tembalang, Kec. Tembalang, Kota Semarang, Jawa Tengah 50275', 'Teknologi Informasi', 5, 4, 4, 82, 24, 'Undip', 'Jl. Prof. Soedarto No.13, Tembalang, Kec. Tembalang, Kota Semarang, Jawa Tengah 50275', 'Integrasi AI untuk aplikasi admin agar dapat mempercepat proses transaksi', 'Muhammad Sova', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
