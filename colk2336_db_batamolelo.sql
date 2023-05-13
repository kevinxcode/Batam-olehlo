-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2018 at 06:04 PM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colk2336_db_batamolelo`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `userName` text NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `userProfession` text NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `userName`, `tanggal`, `kategori`, `userProfession`, `userPic`) VALUES
(174, 'Grand-Opening-Batam-Olehlo-|-Oleh-Oleh-Zaman-Now-1', '2018-02-26', 'belum milih', 'Komp. Ruko Tunas Bizpark Blok. B No. 23A Tunas Industrial Park, Batam Center <br><br><br>', '30975.png'),
(175, 'Grand-Opening-Batam-Olehlo-|-Oleh-Oleh-Zaman-Now2', '2018-02-26', 'belum milih', 'Komp. Ruko Tunas Bizpark Blok. B No. 23A Tunas Industrial Park, Batam Center <br><br><br>', '973641.png'),
(176, 'Grand-Opening-Batam-Olehlo-|-Oleh-Oleh-Zaman-Now3', '2018-02-26', 'belum milih', 'Komp. Ruko Tunas Bizpark Blok. B No. 23A Tunas Industrial Park, Batam Center <br><br><br>', '192085.png'),
(177, 'Grand-Opening-Batam-Olehlo-|-Oleh-Oleh-Zaman-Now4', '2018-02-26', 'belum milih', 'Komp. Ruko Tunas Bizpark Blok. B No. 23A Tunas Industrial Park, Batam Center <br><br><br>', '757811.png'),
(178, 'Grand-Opening-Batam-Olehlo-|-Oleh-Oleh-Zaman-Now5', '2018-02-26', 'belum milih', 'Komp. Ruko Tunas Bizpark Blok. B No. 23A Tunas Industrial Park, Batam Center', '827872.png'),
(179, 'Grand-Opening-Batam-Olehlo-|-Oleh-Oleh-Zaman-Now6', '2018-02-26', 'belum milih', 'Komp. Ruko Tunas Bizpark Blok. B No. 23A Tunas Industrial Park, Batam Center <br><br><br>', '16135.png'),
(180, 'Grand-Opening-Batam-Olehlo-|-Oleh-Oleh-Zaman-Now7', '2018-02-26', 'belum milih', 'Komp. Ruko Tunas Bizpark Blok. B No. 23A Tunas Industrial Park, Batam Center <br><br><br>', '444575.png'),
(181, 'Grand-Opening-Batam-Olehlo-|-Oleh-Oleh-Zaman-Now8', '2018-02-26', 'belum milih', 'Komp. Ruko Tunas Bizpark Blok. B No. 23A Tunas Industrial Park, Batam Center <br><br><br>', '106319.png'),
(182, 'Grand-Opening-Batam-Olehlo-|-Oleh-Oleh-Zaman-Now9', '2018-02-26', 'belum milih', 'Komp. Ruko Tunas Bizpark Blok. B No. 23A Tunas Industrial Park, Batam Center <br><br><br>', '623628.png');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `userName` text NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `userProfession` text NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `userName`, `tanggal`, `kategori`, `userProfession`, `userPic`) VALUES
(180, 'BANANA-CARAMEL', '2018-02-26', 'galery', '.', '933601.png'),
(181, 'AVOCADO', '2018-02-26', 'galery', '.', '592889.png'),
(182, 'TIRAMISU', '2018-02-26', 'galery', '.', '228976.png'),
(183, 'CHOCOLATE', '2018-02-26', 'galery', '.', '582982.png'),
(184, 'STRAWBERY', '2018-02-26', 'galery', '.', '174848.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `ket` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `ket`) VALUES
(13, 'Bakery', ''),
(12, 'Bread', ''),
(11, 'Cake', ''),
(10, 'Food', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `username` varchar(10) NOT NULL,
  `password` text NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `level` enum('manager','admin','desain','xerox','witcolor','mimaki','IT') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`username`, `password`, `nama_lengkap`, `level`) VALUES
('admin321', '21232f297a57a5a743894a0e4a801fc3', 'Batam Olelo', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
