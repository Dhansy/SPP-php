-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 05:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sppukl`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `angkatan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `jurusan`, `angkatan`) VALUES
(25, 'XII-RPL', 'RPL(Rekayasa Perangkat Lunak)', 29),
(26, 'XII-TKJ', 'TKJ(Teknik Komputer dan Jaringan)', 29),
(27, 'XI-RPL', 'RPL(Rekayasa Perangkat Lunak)', 30),
(28, 'XI-TKJ', 'TKJ(Teknik Komputer dan Jaringan)', 30),
(29, 'X-RPL', 'RPL(Rekayasa Perangkat Lunak)', 31),
(30, 'X-TKJ', 'TKJ(Teknik Komputer dan Jaringan)', 31),
(31, 'X-RPL', 'RPL(Rekayasa Perangkat Lunak)', 32);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `nisn` int(10) NOT NULL,
  `awaltempo` date DEFAULT NULL,
  `tahun` varchar(225) NOT NULL,
  `nominal` int(225) DEFAULT NULL,
  `Tunggakan` int(255) DEFAULT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `ket` varchar(20) DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `nisn`, `awaltempo`, `tahun`, `nominal`, `Tunggakan`, `tgl_bayar`, `ket`, `id_petugas`) VALUES
(362, 1, '2023-05-01', 'Mei 2023', 700000, NULL, '2023-05-19', 'LUNAS', 25),
(363, 1, '2023-06-01', 'Juni 2023', 700000, NULL, '2023-05-19', 'LUNAS', 25),
(364, 1, '2023-07-01', 'Juli 2023', 700000, NULL, '2023-05-19', 'LUNAS', 25),
(365, 1, '2023-08-01', 'Agustus 2023', 700000, NULL, '2023-05-19', 'LUNAS', 25),
(366, 1, '2023-09-01', 'September 2023', 700000, NULL, '2023-05-19', 'LUNAS', 25),
(367, 1, '2023-10-01', 'Oktober 2023', 700000, NULL, '2023-05-19', 'LUNAS', 25),
(368, 1, '2023-11-01', 'November 2023', 700000, NULL, '2023-05-19', 'LUNAS', 25),
(369, 1, '2023-12-01', 'Desember 2023', 700000, NULL, '2023-05-19', 'LUNAS', 25),
(370, 1, '2024-01-01', 'Januari 2024', 700000, NULL, '2023-05-19', 'LUNAS', 33),
(371, 1, '2024-02-01', 'Februari 2024', 700000, NULL, '2023-05-18', 'LUNAS', 33),
(372, 1, '2024-03-01', 'Maret 2024', 700000, NULL, '2023-05-18', 'LUNAS', 33),
(373, 1, '2024-04-01', 'April 2024', 700000, NULL, '2023-05-18', 'LUNAS', 33),
(374, 12345, '2023-05-01', 'Mei 2023', 600000, NULL, '2023-05-19', 'LUNAS', 25),
(375, 12345, '2023-06-01', 'Juni 2023', 600000, NULL, NULL, NULL, NULL),
(376, 12345, '2023-07-01', 'Juli 2023', 600000, NULL, NULL, NULL, NULL),
(377, 12345, '2023-08-01', 'Agustus 2023', 600000, NULL, NULL, NULL, NULL),
(378, 12345, '2023-09-01', 'September 2023', 600000, NULL, NULL, NULL, NULL),
(379, 12345, '2023-10-01', 'Oktober 2023', 600000, NULL, NULL, NULL, NULL),
(380, 12345, '2023-11-01', 'November 2023', 600000, NULL, NULL, NULL, NULL),
(381, 12345, '2023-12-01', 'Desember 2023', 600000, NULL, NULL, NULL, NULL),
(382, 12345, '2024-01-01', 'Januari 2024', 600000, NULL, NULL, NULL, NULL),
(383, 12345, '2024-02-01', 'Februari 2024', 600000, NULL, NULL, NULL, NULL),
(384, 12345, '2024-03-01', 'Maret 2024', 600000, NULL, NULL, NULL, NULL),
(385, 12345, '2024-04-01', 'April 2024', 600000, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `level` enum('petugas','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(25, 'p', '202cb962ac59075b964b07152d234b70', 'afdhansyah', 'admin'),
(33, 'roronoa ', '202cb962ac59075b964b07152d234b70', 'roronoa', 'admin'),
(35, 'naila nafhisah', '202cb962ac59075b964b07152d234b70', 'naila', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` int(10) NOT NULL,
  `nis` char(100) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `password`) VALUES
(1, '1', 'afdhan', 28, 'malang', '202cb962ac59075b964b07152d234b70'),
(12345, '12345', 'meta amalia', 30, 'malang', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `angkatan` int(2) NOT NULL,
  `tahun` varchar(225) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `angkatan`, `tahun`, `nominal`) VALUES
(56, 29, '2020', 600000),
(57, 30, '2021', 500000),
(58, 31, '2021', 700000),
(59, 33, '2023', 900000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `nominal` (`nominal`),
  ADD KEY `id_admin` (`id_petugas`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`),
  ADD KEY `angkatan` (`angkatan`),
  ADD KEY `nominal` (`nominal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=386;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `nisn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567891;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_4` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
