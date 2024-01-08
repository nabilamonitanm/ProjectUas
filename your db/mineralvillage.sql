-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 05:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mineralvillage`
--

-- --------------------------------------------------------

--
-- Table structure for table `aquahub`
--

CREATE TABLE `aquahub` (
  `id_aquahub` int(11) NOT NULL,
  `namalengkap` varchar(250) NOT NULL,
  `no_telp` varchar(250) NOT NULL,
  `alamat_lengkap` varchar(250) NOT NULL,
  `kebutuhan` enum('Rumah Tangga','Hajat/Pesta','Perusahaan') NOT NULL,
  `jenis_pelanggan` enum('Pelanggan','Non Pelanggan/Umum') NOT NULL,
  `jumlah_pemesanan` int(200) NOT NULL,
  `total_harga` int(255) NOT NULL,
  `tanggal_pembelian` date DEFAULT NULL,
  `request` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `aquahub`
--

INSERT INTO `aquahub` (`id_aquahub`, `namalengkap`, `no_telp`, `alamat_lengkap`, `kebutuhan`, `jenis_pelanggan`, `jumlah_pemesanan`, `total_harga`, `tanggal_pembelian`, `request`) VALUES
(5, 'Rot2', '12341234', 'root2', 'Rumah Tangga', 'Pelanggan', 5000, 250000, '2024-03-06', 1),
(6, 'Root', '12341234', 'root', 'Rumah Tangga', 'Pelanggan', 10000, 500000, '2024-02-06', 0),
(7, 'root3', '12341234', 'root2', 'Rumah Tangga', 'Pelanggan', 20000, 1000000, '2024-01-06', 0),
(8, 'Root', '12341234', 'Test', 'Rumah Tangga', 'Pelanggan', 5000, 250000, '2024-01-07', 1),
(9, 'Nabila', '082287212554', 'jl.paus', 'Rumah Tangga', 'Pelanggan', 10000, 500000, '2024-01-07', 0),
(10, 'Nabila', '082287212554', 'jl.paus', 'Hajat/Pesta', 'Pelanggan', 10000, 500000, '2024-01-07', 0),
(11, 'WAN', '0813465313', 'jl.paus', 'Rumah Tangga', 'Pelanggan', 10000, 0, NULL, 0),
(12, 'nabilamonita', '080970', 'Jl.Rowosari', 'Hajat/Pesta', 'Pelanggan', 10000, 500000, '2024-01-07', 0),
(13, 'WANLAMBOK', '9885674', 'pandau', 'Perusahaan', 'Pelanggan', 100000, 5000000, '2024-01-07', 0),
(14, 'firzi', '076967', 'rowosari', 'Rumah Tangga', 'Pelanggan', 10000, 500000, '2024-01-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_himbauan`
--

CREATE TABLE `tb_himbauan` (
  `id_himbauan` int(11) NOT NULL,
  `no_kontrol` varchar(50) DEFAULT NULL,
  `lama_tunggakan` int(3) DEFAULT NULL,
  `awal` int(3) DEFAULT NULL,
  `akhir` int(3) DEFAULT NULL,
  `total_tunggakan` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_himbauan`
--

INSERT INTO `tb_himbauan` (`id_himbauan`, `no_kontrol`, `lama_tunggakan`, `awal`, `akhir`, `total_tunggakan`, `status`) VALUES
(1, 'jemz', 1, 2, 2, 3000000, 'yes'),
(2, 'theo', 2, 1, 2, 4000000, 'yes'),
(3, '199810271234', 1, 1, 1, 200000, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keluhan`
--

CREATE TABLE `tb_keluhan` (
  `id_keluhan` int(5) NOT NULL,
  `nama_permohon` varchar(50) DEFAULT NULL,
  `alamat_permohon` varchar(200) DEFAULT NULL,
  `tanggal_permohon` date DEFAULT NULL,
  `no_agenda` varchar(50) DEFAULT NULL,
  `ukuran_meter` varchar(20) DEFAULT NULL,
  `merek_meter` varchar(50) DEFAULT NULL,
  `seri_meter` varchar(50) DEFAULT NULL,
  `tgl_pengaduan` date DEFAULT NULL,
  `tgl_pk` date DEFAULT NULL,
  `tgl_meter` date DEFAULT NULL,
  `tgl_pasang` date DEFAULT NULL,
  `jenis_keluhan` varchar(255) DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `no_kontrol` varchar(50) DEFAULT NULL,
  `reply_keluhan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_keluhan`
--

INSERT INTO `tb_keluhan` (`id_keluhan`, `nama_permohon`, `alamat_permohon`, `tanggal_permohon`, `no_agenda`, `ukuran_meter`, `merek_meter`, `seri_meter`, `tgl_pengaduan`, `tgl_pk`, `tgl_meter`, `tgl_pasang`, `jenis_keluhan`, `catatan`, `no_kontrol`, `reply_keluhan`) VALUES
(1, 'Jemz', 'saptamarga', '2019-07-03', '123', '23', '23', '23', '2333-12-23', '3122-02-02', '0000-00-00', '2121-02-23', 'rekening_kemahalan', '12312', 'B 080 0068 00010', 'yo gek dbeneri, selu be kamutu'),
(2, 'Jemz', 'saptamarga', '2019-07-03', '12', '12', '23', '23', '0001-02-01', '0122-02-02', '0002-02-02', '0002-02-02', 'air_tidak_keluar', '23123', 'B 080 0068 00010', 'yayaya'),
(3, 'Jemz', 'saptamarga', '2019-07-03', 'qwe', '23', '23', '23', '0002-12-02', '0002-02-02', '0002-02-02', '0002-02-02', 'masalah_meteran', 'asdas', 'theo', 'baik akan dikerjakan'),
(4, 'theo', 'palembang', '2019-07-05', '213', '23', '23', '123', '2001-02-23', '2012-02-02', '2014-02-02', '2001-02-02', 'rekening_kemahalan', 'mahal nian om', 'theo', 'yo sabar kamutu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `no_kontrol` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(3) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`no_kontrol`, `password`, `role_id`, `date_created`) VALUES
('199810271234', 'e10adc3949ba59abbe56e057f20f883e', 2, '2019-07-05'),
('admin', 'e10adc3949ba59abbe56e057f20f883e', 1, '2019-07-03'),
('B 080 0068 00001', 'e10adc3949ba59abbe56e057f20f883e', 2, '2019-07-03'),
('B 080 0068 00008', 'e10adc3949ba59abbe56e057f20f883e', 2, NULL),
('B 080 0068 00009', 'e10adc3949ba59abbe56e057f20f883e', 2, '2019-07-03'),
('B 080 0068 00010', 'e10adc3949ba59abbe56e057f20f883e', 2, '2019-07-03'),
('B 080 0068 00011', 'e10adc3949ba59abbe56e057f20f883e', 2, '2019-07-03'),
('jemz', 'e10adc3949ba59abbe56e057f20f883e', 2, '2019-07-04'),
('jemzx', 'e10adc3949ba59abbe56e057f20f883e', 2, '2019-07-07'),
('raisa2', 'e10adc3949ba59abbe56e057f20f883e', 2, '2019-07-04'),
('theo', 'e10adc3949ba59abbe56e057f20f883e', 2, '2019-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(4) NOT NULL,
  `no_kontrol` varchar(255) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telepon` varchar(30) DEFAULT NULL,
  `aktif` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `no_kontrol`, `name`, `alamat`, `no_telepon`, `aktif`) VALUES
(1, 'raisa2', 'raisa', 'sinila', '018230123', NULL),
(2, 'jemz', 'jemz', 'palembang', '082131231312', 'Ya'),
(3, 'admin', 'admin', 'palembang', '918239231', NULL),
(4, 'theo', 'theo', 'palembang', '08182313', 'Ya'),
(5, '199810271234', 'Disharlin Orvio Riensi', 'perumahan bukit sejahtera polygon blok EK-01', '089621940494', 'Y'),
(6, 'jemzx', 'jemz', 'sapta', 'sapta', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tagihan`
--

CREATE TABLE `tb_tagihan` (
  `id_tagihan` int(5) NOT NULL,
  `no_kontrol` varchar(50) DEFAULT NULL,
  `bulan` int(2) DEFAULT NULL,
  `tahun` int(6) DEFAULT NULL,
  `st_awal` int(4) DEFAULT NULL,
  `st_akhir` int(4) DEFAULT NULL,
  `pemakaian` int(4) DEFAULT NULL,
  `lunas` varchar(10) DEFAULT NULL,
  `aktif` varchar(10) DEFAULT NULL,
  `tarif` varchar(4) DEFAULT NULL,
  `biaya` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_tagihan`
--

INSERT INTO `tb_tagihan` (`id_tagihan`, `no_kontrol`, `bulan`, `tahun`, `st_awal`, `st_akhir`, `pemakaian`, `lunas`, `aktif`, `tarif`, `biaya`) VALUES
(4, 'theo', 1, 2019, 3000, 3000, 6, 'tidak', 'ya', '1A', 1000000),
(5, 'theo', 3, 2019, 2000, 2000, 8, 'ya', 'ya', '1A', 2000000),
(6, 'theo', 2, 2019, 2000, 2000, 8, 'tidak', 'ya', '1A', 3000000),
(7, 'jemz', 2, 2019, 2000, 2000, 8, 'tidak', 'ya', '1A', 3000000),
(8, '199810271234', 1, 2019, 2122, 222, 34, 'tidak', 'ya', '1A', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_aquahub` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_aquahub`, `nama`, `email`, `password`, `role`, `date_created`, `alamat`, `telepon`) VALUES
(3, 0, 'fairel', 'fairel@gmail.com', '$2y$10$OWupAf3OPA9YqzsjLqocEOGXLuCFB.ny88XsL14yWzbVRGAkRb8DO', 'User', 1699551736, '', 0),
(4, 0, 'firzi', 'firzi@gmail.com', '$2y$10$.MIF9jDEwuIKrlgnVuCeBeHNp7Jw5D0cSnGpiXwBqxcvnpfaxiM5u', 'User', 1699551755, '', 0),
(5, 0, 'tes', 'tes123@gmail.com', '$2y$10$9MGz/5CMXUOT4VNwUqyKt.Hh35sQ5PQCY6q5AyIu6RizOoXxhwSBy', 'User', 1699551829, '', 0),
(6, 0, 'firzi', 'jiji@gmail.com', '$2y$10$vStwquzx3SC60Ig.Vf4neegVqXN0tfPNByWnh.WDsut.l2tyZ6tS6', 'User', 1699551928, '', 0),
(8, 0, 'wan', 'wan@mahasiswa.pcr.ac.id', '$2y$10$XuifXmZb81avj9aI2.R7gOC5Qbd7ihDXUmEoWW3HvAp/bkMQrucDO', 'User', 1704443733, '', 0),
(9, 0, 'firzi', 'pantek@mahasiswa.pcr.ac.id', '$2y$10$EmdySdIirFG41GD4dnuaI.svHtLkXZvgbhcLinAYdmuGnCC94Jq6C', 'User', 1704444682, '', 0),
(10, 0, 'unggul', 'unggul@mahasiswa.pcr.ac.id', '$2y$10$rLPDm7vJvvOtLQgi93UgEOGU.OFHkgcyAbuTQnFD2l2wdcYL2REfe', 'User', 1704455996, '', 0),
(11, 0, 'kala', 'kala@mahasiswa.pcr.ac.id', '$2y$10$AWCxYyV1cWa2zxfExYbQ4ujgCCJwrJjbDhJ4UFjpI9BzG3luy09ri', 'User', 1704456248, 'air dingin', 8127373),
(12, 0, 'Nabila', 'nabilamonita23@gmail.com', '$2y$10$cSCFEk0kIZJ/tBJURsTlLeWXvxatEirn88RcWmmv2mhyl1X.8omEK', 'User', 1704459639, 'rowosari', 2147483647),
(13, 0, 'Root', 'root@gmail.com', '$2y$10$cSCFEk0kIZJ/tBJURsTlLeWXvxatEirn88RcWmmv2mhyl1X.8omEK', 'Admin', 1704559327, 'Umban Sari', 2147483647),
(14, 0, 'Nabila', 'nabilamonita1234@gmail.com', '$2y$10$./SZe.nwT6fmSpwp8bEFLehuDYann3cJofKhkUL9OAmnmHKappiyG', 'User', 1704628200, 'rowosari', 2147483647),
(15, 0, 'admin', 'admin@gmail.com', '$2y$10$JRLBgYF4VFqJHlEJMVZ9aOdHnPG1tS7SFr.sGMnO5IJwDi9qfzzwC', 'admin', 1704632912, 'pekanbaru', 81233344);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aquahub`
--
ALTER TABLE `aquahub`
  ADD PRIMARY KEY (`id_aquahub`);

--
-- Indexes for table `tb_himbauan`
--
ALTER TABLE `tb_himbauan`
  ADD PRIMARY KEY (`id_himbauan`),
  ADD KEY `no_kontrol` (`no_kontrol`);

--
-- Indexes for table `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  ADD PRIMARY KEY (`id_keluhan`),
  ADD KEY `no_kontrol` (`no_kontrol`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`no_kontrol`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `no_kontrol` (`no_kontrol`);

--
-- Indexes for table `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  ADD PRIMARY KEY (`id_tagihan`),
  ADD KEY `no_kontrol` (`no_kontrol`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aquahub`
--
ALTER TABLE `aquahub`
  MODIFY `id_aquahub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_himbauan`
--
ALTER TABLE `tb_himbauan`
  MODIFY `id_himbauan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  MODIFY `id_keluhan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  MODIFY `id_tagihan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_himbauan`
--
ALTER TABLE `tb_himbauan`
  ADD CONSTRAINT `tb_himbauan_ibfk_1` FOREIGN KEY (`no_kontrol`) REFERENCES `tb_login` (`no_kontrol`);

--
-- Constraints for table `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  ADD CONSTRAINT `tb_keluhan_ibfk_1` FOREIGN KEY (`no_kontrol`) REFERENCES `tb_login` (`no_kontrol`);

--
-- Constraints for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD CONSTRAINT `tb_pelanggan_ibfk_1` FOREIGN KEY (`no_kontrol`) REFERENCES `tb_login` (`no_kontrol`);

--
-- Constraints for table `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  ADD CONSTRAINT `tb_tagihan_ibfk_1` FOREIGN KEY (`no_kontrol`) REFERENCES `tb_login` (`no_kontrol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
