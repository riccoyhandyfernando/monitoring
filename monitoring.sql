-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 06:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `kode_kegiatan` varchar(50) NOT NULL,
  `id_kegiatan` varchar(50) NOT NULL,
  `id_pegawai` varchar(25) NOT NULL,
  `rencana_kegiatan` varchar(2000) NOT NULL,
  `perkembangan_kegiatan` varchar(2000) NOT NULL,
  `hasil_kegiatan` varchar(2000) NOT NULL,
  `keterangan` varchar(2000) NOT NULL,
  `or` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`kode_kegiatan`, `id_kegiatan`, `id_pegawai`, `rencana_kegiatan`, `perkembangan_kegiatan`, `hasil_kegiatan`, `keterangan`, `or`) VALUES
('02', '0BwfhkMts5qNmprCKOne', '02', 'asdads', 'asdadsa', 'asdads', 'asdad', 'Optimal'),
('01', '1THdcsX0j5C3gPp8QWYi', '03', 'pemasaran produk cisco', 'berjalan', 'kelar', 'berhasil', 'optimal'),
('06', 'CsUNYDXq2pHZy3zvrGWB', '02', 'pemasaran produk cisco', 'baru mengajukan proposal', 'selesai mengajukan proposal cisco', 'masih harus di lanjutkan dlu ', 'optimal'),
('02', 'E5uZDjaYsIgmqJT2R4y3', '02', '', '', '', '', ''),
('1ad', 'ePgsOES6pmR1auCIyD39', '02', 'beli iphone', 'masih kumpul uang', 'sedikit lagi uangny terkumpul', 'uang nya masih kurang', 'Realokasi'),
('1ars', 'MwYR6Zitz3kEocbUrJ0h', '02', 'nonton bola', 'lagi cari sinyal', 'dapat sinyal', 'akhirnya nonton bola', 'Optimal'),
('03', 'vPIxmV0SOKN5filw2dkj', '03', 'baru', 'berkembang', 'selesai', 'kelar', 'realokasi'),
('02', 'XnNOmTVuAxHY8WI56giJ', '03', 'beli', 'build', 'jadi', 'kelar', 'optimal');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_pegawai` varchar(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `bidang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_pegawai`, `username`, `password`, `level`, `bidang`) VALUES
('01', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin'),
('02', 'ricco', '7779cc437e5d40232b9774bc3ea793bc', 'user', 'bakk'),
('03', 'dian', '7779cc437e5d40232b9774bc3ea793bc', 'user', 'adadq'),
('04', 'nando', '7779cc437e5d40232b9774bc3ea793bc', 'admin', 'sdadad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
