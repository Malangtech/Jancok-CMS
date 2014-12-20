-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 20, 2014 at 08:54 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jancok_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `e_berita`
--

CREATE TABLE IF NOT EXISTS `e_berita` (
`id` int(11) NOT NULL,
  `id_kat` int(1) NOT NULL,
  `tgl` date NOT NULL,
  `user` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `konten` text NOT NULL,
  `publik` int(1) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `hit` int(11) NOT NULL,
  `sumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `e_grup`
--

CREATE TABLE IF NOT EXISTS `e_grup` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `e_guser`
--

CREATE TABLE IF NOT EXISTS `e_guser` (
`id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `id_grup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `e_kategori`
--

CREATE TABLE IF NOT EXISTS `e_kategori` (
`id` int(11) NOT NULL,
  `nama_kat` varchar(50) NOT NULL,
  `deskripsi_kat` text NOT NULL,
  `slug_kat` varchar(100) NOT NULL,
  `parent_kat` int(1) NOT NULL,
  `sub_kat` int(1) NOT NULL,
  `tipe_kat` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `e_menu`
--

CREATE TABLE IF NOT EXISTS `e_menu` (
`id` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `deskripsi_menu` text NOT NULL,
  `parent_menu` int(1) NOT NULL,
  `sub_menu` int(1) NOT NULL,
  `id_kat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `e_pengaturan`
--

CREATE TABLE IF NOT EXISTS `e_pengaturan` (
  `id` int(1) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `nm_app` varchar(255) NOT NULL,
  `seo_k` int(11) NOT NULL,
  `seo_d` int(11) NOT NULL,
  `bahasa` varchar(30) NOT NULL,
  `v_app` varchar(5) NOT NULL,
  `tema_backend` varchar(255) NOT NULL,
  `tema_frontend` varchar(255) NOT NULL,
  `copyright` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `e_sesi`
--

CREATE TABLE IF NOT EXISTS `e_sesi` (
  `session_id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) NOT NULL,
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `e_sesi`
--

INSERT INTO `e_sesi` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('31fa08a44943d0eadb58e14ef9e0eceb', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1419090163, ''),
('5042c2484e21d96f8cdaffc8bd7d38dd', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1419085743, ''),
('aa5a6bdbe81caa78e802a48c43783921', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1419076670, ''),
('fef4e46fb0db5d00422857f93d0f12a7', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1419068538, ''),
('869e7a8882613fcec6ac50bc8885f4b2', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1419066164, '');

-- --------------------------------------------------------

--
-- Table structure for table `e_uprofil`
--

CREATE TABLE IF NOT EXISTS `e_uprofil` (
`id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nm_depan` varchar(100) NOT NULL,
  `nm_belakang` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(13) NOT NULL,
  `kelamin` varchar(1) NOT NULL,
  `kodepos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `e_user`
--

CREATE TABLE IF NOT EXISTS `e_user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `kodepin` int(6) NOT NULL,
  `masterkey` int(4) NOT NULL,
  `secretkey` varchar(32) NOT NULL,
  `salt` varchar(100) DEFAULT NULL,
  `kode_aktivasi` varchar(40) DEFAULT NULL,
  `kode_lupapass` varchar(40) DEFAULT NULL,
  `wkt_lupapass` int(11) DEFAULT NULL,
  `kode_rid` varchar(40) DEFAULT NULL,
  `tgl_register` int(11) NOT NULL,
  `login_terakhir` int(11) DEFAULT NULL,
  `online` tinyint(1) DEFAULT NULL,
  `aktif` int(1) NOT NULL,
  `disable` int(1) DEFAULT NULL,
  `banned` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `e_berita`
--
ALTER TABLE `e_berita`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_grup`
--
ALTER TABLE `e_grup`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_guser`
--
ALTER TABLE `e_guser`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_kategori`
--
ALTER TABLE `e_kategori`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_menu`
--
ALTER TABLE `e_menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_pengaturan`
--
ALTER TABLE `e_pengaturan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_sesi`
--
ALTER TABLE `e_sesi`
 ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `e_uprofil`
--
ALTER TABLE `e_uprofil`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_user`
--
ALTER TABLE `e_user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `e_berita`
--
ALTER TABLE `e_berita`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `e_grup`
--
ALTER TABLE `e_grup`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `e_guser`
--
ALTER TABLE `e_guser`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `e_kategori`
--
ALTER TABLE `e_kategori`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `e_menu`
--
ALTER TABLE `e_menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `e_uprofil`
--
ALTER TABLE `e_uprofil`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
