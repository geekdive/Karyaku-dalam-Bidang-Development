-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2018 at 11:03 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_datainventori`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventori`
--

CREATE TABLE `tbl_inventori` (
  `id_inventori` int(11) NOT NULL,
  `nama_inventori` varchar(60) NOT NULL,
  `img_invventori` varchar(300) NOT NULL,
  `waktu_input` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inventori`
--

INSERT INTO `tbl_inventori` (`id_inventori`, `nama_inventori`, `img_invventori`, `waktu_input`, `id_kategori`, `id_user`) VALUES
(1, 'Mouse Standar Nasional', 'stdms_nas.jpg', '6 feb 2018', 2, 1),
(2, 'Keyboard', 'keyboard.jpg', '2 feb 2018', 3, 1),
(3, 'Kabel USB', 'usb_cable.jpg', '2 feb 2018', 3, 1),
(4, 'Sound System', 'soundsystem.jpg', '2 feb 2018', 3, 1),
(5, 'Lakban Hitam', 'lakban.jpg', '5 maret 2018', 2, 2),
(6, 'Mouse Wireless', 'mouse_wireless.jpg', '10 juli 2018', 1, 1),
(7, 'Keyboard Doang', 'keyboard_wireless.jpg', '2 feb 2018', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'ATK'),
(2, 'Elektronik Mini'),
(3, 'Perangkat Kantor'),
(4, 'Dekorasi Kantor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(60) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level_user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `alamat`, `no_telp`, `jenis_kelamin`, `username`, `password`, `level_user`) VALUES
(1, 'Asep Septiadi', 'Cikarang', '081', 'Laki-laki', 'adi', '21091994', 'admin'),
(2, 'Lia El karimah', 'Cikarang Selatan', '031', 'Perempuan', 'liakarimah', 'e1a24ef024876395d1437e7f86fc415a', 'admin'),
(3, 'Rahman Nur Hakim', 'Bekasi', '081', 'Laki-laki', 'rahman', '928409238409', 'admin'),
(4, 'Fina Agustina', 'Bekasi', '021', 'Perempuan', 'fina', '1234567', 'admin'),
(5, 'Yani Widiawati', 'Jakarta', '091', 'Perempuan', 'yani', '25d55ad283aa400af464c76d713c07ad', 'admin'),
(7, 'Wulan', 'Jakarta', '081', 'Perempuan', 'wulan', '25d55ad283aa400af464c76d713c07ad', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_inventori`
--
ALTER TABLE `tbl_inventori`
  ADD PRIMARY KEY (`id_inventori`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_inventori`
--
ALTER TABLE `tbl_inventori`
  MODIFY `id_inventori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
