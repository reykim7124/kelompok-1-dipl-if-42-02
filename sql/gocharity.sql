-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2021 at 07:04 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `no_hp` int(13) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `judul_petisi` varchar(50) DEFAULT NULL,
  `tgl_post` varchar(25) DEFAULT NULL,
  `kebutuhan_dana` int(15) DEFAULT NULL,
  `dana_terkumpul` int(15) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `durasi_hari` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manage`
--

CREATE TABLE `manage` (
  `username` varchar(20) NOT NULL,
  `id_petisi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `melihat`
--

CREATE TABLE `melihat` (
  `username` varchar(20) NOT NULL,
  `id_petisi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_transaksi`
--

CREATE TABLE `riwayat_transaksi` (
  `id_riwayat` int(10) NOT NULL,
  `jumlah_dana` int(15) DEFAULT NULL,
  `tgl_transaksi` varchar(20) DEFAULT NULL,
  `id_petisi` int(10) NOT NULL,
  `nik` int(16) NOT NULL
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
  ADD UNIQUE KEY `id_petisi` (`id_petisi`);

--
-- Indexes for table `halaman_petisi`
--
ALTER TABLE `halaman_petisi`
  ADD PRIMARY KEY (`id_petisi`);

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id_petisi` (`id_petisi`);

--
-- Indexes for table `melihat`
--
ALTER TABLE `melihat`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id_petisi` (`id_petisi`);

--
-- Indexes for table `riwayat_transaksi`
--
ALTER TABLE `riwayat_transaksi`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD UNIQUE KEY `id_petisi` (`id_petisi`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `halaman_petisi`
--
ALTER TABLE `halaman_petisi`
  MODIFY `id_petisi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat_transaksi`
--
ALTER TABLE `riwayat_transaksi`
  MODIFY `id_riwayat` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`);

--
-- Constraints for table `cek`
--
ALTER TABLE `cek`
  ADD CONSTRAINT `cek_ibfk_1` FOREIGN KEY (`id_riwayat`) REFERENCES `riwayat_transaksi` (`id_riwayat`),
  ADD CONSTRAINT `cek_ibfk_2` FOREIGN KEY (`id_petisi`) REFERENCES `halaman_petisi` (`id_petisi`);

--
-- Constraints for table `manage`
--
ALTER TABLE `manage`
  ADD CONSTRAINT `manage_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`),
  ADD CONSTRAINT `manage_ibfk_2` FOREIGN KEY (`id_petisi`) REFERENCES `halaman_petisi` (`id_petisi`);

--
-- Constraints for table `melihat`
--
ALTER TABLE `melihat`
  ADD CONSTRAINT `melihat_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`),
  ADD CONSTRAINT `melihat_ibfk_2` FOREIGN KEY (`id_petisi`) REFERENCES `halaman_petisi` (`id_petisi`);

--
-- Constraints for table `riwayat_transaksi`
--
ALTER TABLE `riwayat_transaksi`
  ADD CONSTRAINT `riwayat_transaksi_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `user` (`nik`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
