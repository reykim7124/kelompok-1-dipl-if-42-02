-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 05, 2021 at 03:26 AM
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
-- Database: `gocharity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`) VALUES
('tiwa'),
('wisnu');

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(40) NOT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`, `email`, `no_hp`) VALUES
('reykim', '12347', 'reykim@gmail.com', '0833'),
('tiwa', '12345', 'tiwa@gmail.com', '08211'),
('wisnu', '12346', 'wisnu@gmail.com', '08222');

-- --------------------------------------------------------

--
-- Table structure for table `cek`
--

CREATE TABLE `cek` (
  `id_riwayat` int(10) NOT NULL,
  `id_petisi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `halaman_petisi`
--

CREATE TABLE `halaman_petisi` (
  `id_petisi` int(10) NOT NULL,
  `judul_petisi` varchar(50) NOT NULL,
  `tgl_post` date NOT NULL,
  `kebutuhan_dana` int(15) NOT NULL,
  `dana_terkumpul` int(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `durasi_hari` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `halaman_petisi`
--

INSERT INTO `halaman_petisi` (`id_petisi`, `judul_petisi`, `tgl_post`, `kebutuhan_dana`, `dana_terkumpul`, `deskripsi`, `durasi_hari`) VALUES
(1, 'petisi 1', '2021-06-05', 1000000, 0, 'petisi 1', 18806),
(2, 'petisi 2', '2021-06-05', 2000000, 0, 'petisi 2', 18807);

-- --------------------------------------------------------

--
-- Table structure for table `manage`
--

CREATE TABLE `manage` (
  `username` varchar(20) NOT NULL,
  `id_petisi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage`
--

INSERT INTO `manage` (`username`, `id_petisi`) VALUES
('tiwa', 1),
('wisnu', 2);

-- --------------------------------------------------------

--
-- Table structure for table `melihat`
--

CREATE TABLE `melihat` (
  `username` varchar(20) NOT NULL,
  `id_petisi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `melihat`
--

INSERT INTO `melihat` (`username`, `id_petisi`) VALUES
('reykim', 1),
('reykim', 2);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_transaksi`
--

CREATE TABLE `riwayat_transaksi` (
  `id_riwayat` int(10) NOT NULL,
  `jumlah_dana` int(15) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nik` int(16) NOT NULL,
  `username` varchar(20) NOT NULL,
  `no_rekening` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nik`, `username`, `no_rekening`, `nama`) VALUES
(2315534, 'reykim', '02384028403', 'Muhammad Rayhan Hakim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `cek`
--
ALTER TABLE `cek`
  ADD UNIQUE KEY `id_riwayat` (`id_riwayat`),
  ADD KEY `id_petisi` (`id_petisi`) USING BTREE;

--
-- Indexes for table `halaman_petisi`
--
ALTER TABLE `halaman_petisi`
  ADD PRIMARY KEY (`id_petisi`);

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD UNIQUE KEY `id_petisi` (`id_petisi`),
  ADD KEY `username` (`username`) USING BTREE;

--
-- Indexes for table `melihat`
--
ALTER TABLE `melihat`
  ADD UNIQUE KEY `id_petisi` (`id_petisi`) USING BTREE,
  ADD KEY `username` (`username`) USING BTREE;

--
-- Indexes for table `riwayat_transaksi`
--
ALTER TABLE `riwayat_transaksi`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `halaman_petisi`
--
ALTER TABLE `halaman_petisi`
  MODIFY `id_petisi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `riwayat_transaksi`
--
ALTER TABLE `riwayat_transaksi`
  MODIFY `id_riwayat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cek`
--
ALTER TABLE `cek`
  ADD CONSTRAINT `cek_ibfk_3` FOREIGN KEY (`id_riwayat`) REFERENCES `riwayat_transaksi` (`id_riwayat`) ON DELETE CASCADE,
  ADD CONSTRAINT `cek_ibfk_4` FOREIGN KEY (`id_petisi`) REFERENCES `halaman_petisi` (`id_petisi`);

--
-- Constraints for table `manage`
--
ALTER TABLE `manage`
  ADD CONSTRAINT `manage_ibfk_4` FOREIGN KEY (`id_petisi`) REFERENCES `halaman_petisi` (`id_petisi`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `manage_ibfk_5` FOREIGN KEY (`username`) REFERENCES `admin` (`username`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `melihat`
--
ALTER TABLE `melihat`
  ADD CONSTRAINT `melihat_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `melihat_ibfk_3` FOREIGN KEY (`id_petisi`) REFERENCES `halaman_petisi` (`id_petisi`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `riwayat_transaksi`
--
ALTER TABLE `riwayat_transaksi`
  ADD CONSTRAINT `riwayat_transaksi_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
