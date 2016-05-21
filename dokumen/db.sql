-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2016 at 05:58 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saipuljamil`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `idartikel` int(11) NOT NULL,
  `idmenu` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `review` text NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `pengarang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`idartikel`, `idmenu`, `judul`, `gambar`, `review`, `isi`, `tanggal`, `pengarang`) VALUES
(7, 1, 'adasd', 'http://localhost/cat/hatsune.jpg', 'Embuh			\r\n			', '<h1><del><span style="font-family:trebuchet ms,helvetica,sans-serif">sdfsdfdsfsdfâ–º</span></del></h1>\r\n', '2016-04-09 10:12:56', 'Cah Gaul'),
(14, 1, 'Boku No Pico', 'http://localhost/cat/achan.jpg', 'Anime Ini Bercerita Tentang LGBT			\r\n			', '<p><img alt="no" src="http://localhost/saipuljamil/admin/ckeditor/plugins/smiley/images/thumbs_down.png" style="height:23px; width:23px" title="no" /> <img alt="cheeky" src="http://localhost/saipuljamil/admin/ckeditor/plugins/smiley/images/tongue_smile.png" style="height:23px; width:23px" title="cheeky" /> Only 18 +</p>\r\n', '2016-04-09 13:49:01', 'Joyo Endo');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `idlog` int(11) NOT NULL,
  `kejadian` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`idlog`, `kejadian`, `waktu`) VALUES
(1, 'Username dito Berhasil Menambahkan Artikel Dengan Judul Artikel Ngak Tahu', '2016-04-09 13:25:50'),
(2, 'Username dito Menghapus Artikel Dengan ID Artikel 12', '2016-04-09 13:26:41'),
(3, 'Username dito Menghapus Artikel Dengan ID Artikel 11', '2016-04-09 13:26:49'),
(4, 'Username dito Mencari Artikel Dengan Keyword Artikel a', '2016-04-09 13:26:54'),
(5, 'Username dito Mencari Artikel Dengan Keyword Artikel boku no pico', '2016-04-09 13:27:06'),
(6, 'Username dito Mencari Artikel Dengan Keyword Artikel Full Metal Fap Fap', '2016-04-09 13:27:28'),
(7, 'Username dito Mencari Artikel Dengan Keyword Artikel Japanese Fucking Bitch', '2016-04-09 13:28:24'),
(8, 'Username dito Berhasil Menambahkan Artikel Dengan Judul Artikel Keharaman Boku No Pico', '2016-04-09 13:31:10'),
(9, 'Username dito Mencari Artikel Dengan Keyword Artikel boku no pico', '2016-04-09 13:32:19'),
(10, 'Username dito Menghapus Artikel Dengan ID Artikel 13', '2016-04-09 13:33:06'),
(11, 'Username dito Menghapus Artikel Dengan ID Artikel 13', '2016-04-09 13:43:01'),
(12, 'Username dito Berhasil Menambahkan Artikel Dengan Judul Artikel Boku No Pico', '2016-04-09 13:49:02'),
(13, 'Username  Membuka Artikel Boku No Pico', '2016-04-09 13:52:18'),
(14, 'Berhasil Login username:ayana,name:Ayana Shahab', '2016-04-09 13:53:00'),
(15, 'Username ayana Membuka Artikel Boku No Pico', '2016-04-09 13:53:13'),
(16, 'Berhasil Login username:alwakhid,name:Nurokhman Wakhid', '2016-04-09 13:54:44'),
(17, 'Username ayana Membuka Artikel adasd', '2016-04-09 13:55:14'),
(18, 'Username ayana Membuka Artikel ', '2016-04-09 13:55:48'),
(19, 'Username ayana Membuka Artikel adasd', '2016-04-09 13:55:57'),
(20, 'Username  Membuka Artikel adasd', '2016-04-16 10:05:57'),
(21, 'Berhasil Login username:alwakhid,name:Nurokhman Wakhid', '2016-04-16 10:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `class` varchar(100) NOT NULL,
  `namamenu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idmenu`, `class`, `namamenu`) VALUES
(1, 'photography', 'Photography'),
(2, 'video', 'Video'),
(3, 'jkt48', 'JKT48'),
(4, 'game', 'Game'),
(5, 'tutorial', 'Tutorial');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `blokir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `name`, `username`, `password`, `tipe`, `blokir`) VALUES
(1, 'Nurokhman Wakhid', 'alwakhid', 'fuck', 'admin', 0),
(2, 'Handianto Hutomo', 'dito', 'achan', 'writer', 0),
(3, 'Ayana Shahab', 'ayana', 'ayana', 'writer', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`idartikel`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`idlog`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `idartikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `idlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
