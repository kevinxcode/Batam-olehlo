-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 20, 2017 at 06:17 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_batamolelo`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `userName` text NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `userProfession` text NOT NULL,
  `userPic` varchar(200) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=168 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `userName`, `tanggal`, `kategori`, `userProfession`, `userPic`) VALUES
(161, 'Cake Cake Cake Cake Cake ', '2017-12-20', 'Bakery', 'Cake Cake Cake Cake Cake <br>Cake <br>Cake <br><h4><b>Cake </b></h4>Cake <br><br>Cake <br><br>Cake <br><br>Cake <br><br>Cake <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>', '43773.jpeg'),
(162, 'This magical chocolate ', '2017-12-20', 'Bread', 'Cake Cake Cake Cake Cake <br>Cake <br>Cake <br><h4><b>Cake </b></h4>Cake <br><br>Cake <br><br>Cake <br><br>Cake <br><br>Cake <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>', '656137.jpeg'),
(163, ' chocolate ', '2017-12-20', 'Cake', 'Cake Cake Cake Cake Cake <br>Cake <br>Cake <br><h4><b>Cake </b></h4>Cake <br><br>Cake <br><br>Cake <br><br>Cake <br><br>Cake <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>', '717751.jpeg'),
(165, 'dasfsdefsdfds', '2017-12-20', 'Cake', 'sadsaaaaaaaaaaaaaaaaaaaaaaafasfas<br>dfsadsadsa<br>asdasdsa<br>asdsadas<br>asdas<br>', '291145.jpg'),
(166, '4tretertret', '2017-12-20', 'belum milih', 'tretgfffffffdzgds<br>sdfasd<br>as<br>dsa<br>dsa<br>d<br>sad<br>asd<br>asd<br>asd<br>asd<br>', '456660.png'),
(167, 'sdfdsfwefwerf', '2017-12-20', 'Bakery', '<ul><li>aszdasdas</li><li>dsa</li><li>d</li><li>asd</li><li>as</li><li>das</li><li>sadasd</li><li><br></li></ul>', '782841.jpg'),
(164, 'pink cake', '2017-12-20', 'Cake', 'Meanwhile, to make meringue kisses, preheat oven to 120C/100C fan \r\nforced. Line 3 baking trays with baking paper. Use electric beaters to \r\nbeat egg white and cream of tartar in a clean, dry bowl until firm peaks\r\n form. Gradually add sugar, 1 tbs at a time, beating constantly until \r\nsugar dissolves and mixture is thick and glossy. Carefully stand 3 \r\npiping bags, fitted with a 1cm plain and two 1cm star nozzles, upright \r\nin tall glasses. Use a small paintbrush to very lig<i><b>htly paint 5cm-long \r\nstripes of pink and purple food colouring paste into the bags. Divide \r\nthe meringue mixture between bags, care</b></i>fully spooning into each bag. \r\nPipe plain and star-shaped meringues of different sizes onto prepared \r\ntrays (the colours will vary the more you pipe). Sprinkle with edible \r\nglitter. Bake for 25 minutes until crisp and dry. Turn oven off and \r\nleave meringues to cool in the oven with the door ajar\r\n                <br>', '987043.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `userName` text NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `userProfession` text NOT NULL,
  `userPic` varchar(200) NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `userName`, `tanggal`, `kategori`, `userProfession`, `userPic`) VALUES
(163, 'dasdqweqwe', '2017-12-20', 'galery', '.', '930795.jpg'),
(165, 'fdgfdgdf', '2017-12-20', 'galery', '.', '136637.jpeg'),
(164, 'fdgfdgdf', '2017-12-20', 'galery', '.', '100753.jpg'),
(162, 'fdsfsdfds', '2017-12-20', 'galery', '.', '996068.jpg'),
(166, 'gfdgdf', '2017-12-20', 'galery', '.', '121942.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(10) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  `ket` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

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

CREATE TABLE IF NOT EXISTS `tb_pengguna` (
  `username` varchar(10) NOT NULL,
  `password` text NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `level` enum('manager','admin','desain','xerox','witcolor','mimaki','IT') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`username`, `password`, `nama_lengkap`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Batam Olelo', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
