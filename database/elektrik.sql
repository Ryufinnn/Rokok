-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2016 at 06:42 PM
-- Server version: 5.1.35
-- PHP Version: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elektrik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `namalengkap` varchar(30) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `namalengkap`) VALUES
(1, 'admin', 'admin', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `idbrand` int(5) NOT NULL AUTO_INCREMENT,
  `namabrand` varchar(30) NOT NULL,
  `ket` text NOT NULL,
  `logo` text NOT NULL,
  PRIMARY KEY (`idbrand`),
  KEY `idbrand` (`idbrand`),
  FULLTEXT KEY `ket` (`ket`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`idbrand`, `namabrand`, `ket`, `logo`) VALUES
(4, 'Liquid', 'Liquid', ''),
(3, 'Mod', 'Mod', '');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE IF NOT EXISTS `favorite` (
  `idfavorite` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `tglfavorite` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idfavorite`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `favorite`
--


-- --------------------------------------------------------

--
-- Table structure for table `hubungi`
--

CREATE TABLE IF NOT EXISTS `hubungi` (
  `idhubungi` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idhubungi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `hubungi`
--

INSERT INTO `hubungi` (`idhubungi`, `nama`, `email`, `subject`, `pesan`, `tanggal`) VALUES
(1, 'surya kharisma karnefo', 'surya@yahoo.com', 'tolong info gan', 'd sini harus member ya gan!!', '2014-05-28 14:46:08'),
(2, 'nanda perdana', 'nanda@gmail.com', 'tanya gan', 'ada warna lain gan', '2014-06-02 12:05:09'),
(3, 'rahmat', 'rahmat@ymail.com', 'gan', 'tolong web ny di update dong gan', '2014-06-02 12:05:52'),
(4, 'hary', 'hary@ymail.com', 'gan', 'gak ada promo bulan ini gan', '2014-06-02 12:06:26'),
(5, 'andri', 'adr@gmail.com', 'gan', 'dasgdkhasd', '2014-06-02 12:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `idkategori` int(11) NOT NULL AUTO_INCREMENT,
  `namakategori` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`idkategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `namakategori`, `keterangan`) VALUES
(18, 'Mod', 'Menjual Berbagai Jenis Mod'),
(19, 'Liquid', 'Menjual Berbagai Jenis Liquid');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `idkomentar` int(11) NOT NULL AUTO_INCREMENT,
  `idtesti` int(11) NOT NULL,
  `idmember` int(11) NOT NULL,
  `komentar` varchar(200) NOT NULL,
  `isikomentar` text NOT NULL,
  `tglkomentar` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idkomentar`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`idkomentar`, `idtesti`, `idmember`, `komentar`, `isikomentar`, `tglkomentar`) VALUES
(1, 2, 5, 'kurang lah', 'kurang ambiak 2', '2014-06-02 12:09:19'),
(2, 2, 5, '', '', '2014-06-02 12:09:34'),
(3, 4, 8, 'op', 'op', '2014-06-12 10:10:35'),
(4, 2, 0, 'dsad', 'dasd', '2014-06-12 14:47:44'),
(5, 4, 0, 'jhjkd', 'asd', '2014-06-12 15:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `idmember` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `tempatlahir` varchar(20) NOT NULL,
  `tgllahir` date NOT NULL DEFAULT '0000-00-00',
  `jk` char(1) NOT NULL,
  `alamat` text NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `tgldaftar` date NOT NULL DEFAULT '0000-00-00',
  `login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idmember`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`idmember`, `username`, `password`, `namalengkap`, `tempatlahir`, `tgllahir`, `jk`, `alamat`, `notelp`, `email`, `foto`, `tgldaftar`, `login`) VALUES
(1, 'ras', 'ras', 'rahmat', 'padang', '1990-08-28', 'L', 'jalan jamal jamil no 17 siteba', '085766494713', 'as1245rahmat@gmail.com', 'photo ras.jpg', '2014-05-12', '2016-11-02 21:40:55'),
(2, 'nia', 'nia', 'rahmi putri kurnia', 'padang', '1993-08-27', 'L', 'jalan jamal jamin no 17 surau gadang, siteba , padang', '0856685423', 'rahmiputrik@gmail.com', '12101152630285.jpg', '2014-05-26', '2014-05-28 14:57:08'),
(3, 'ikhlas', 'ikhlas', 'ikhlas hidayatullah', 'padang', '1988-09-03', 'L', 'jalan jamal jamil no 17 siteba surga', '082368894390', 'daya@gmail.com', '', '2014-05-28', '2014-05-28 07:31:24'),
(4, 'ras1245', 'ras', 'rahmat', 'padang', '1990-08-28', 'L', 'jalan jamal jamil no 17 siteba ', '085766494713', 'a.srahmat@ymail.com', '', '2014-06-02', '0000-00-00 00:00:00'),
(5, 'nanda', 'nanda', 'nanda perdana', 'pariaman', '1990-08-09', 'L', 'gurun laweh', '085263636363', 'nanda@gmail.com', '', '2014-06-02', '2014-06-02 12:09:01'),
(6, 'popoto', 'popoto', 'surya kharisma', 'tebo', '1993-02-10', 'L', 'arai pinang', '081930303030', 'popo@gmail.com', '', '2014-06-02', '2014-06-02 11:49:49'),
(7, 'hary', 'hary', 'harianto', 'pesisir', '1993-02-11', 'L', 'pengambiran', '081930003030', 'hary@ymail.com', '', '2014-06-02', '2014-06-02 11:50:18'),
(8, 'adr', 'adr', 'andri maulana ibrahim', 'padang', '1990-07-29', 'L', 'berok', '08193030303030', 'adr@ymail.com', 'keranjang.jpg', '2014-06-02', '2014-06-12 11:05:31'),
(9, 'angga', 'angga', 'angga ferdian', 'sulik aia', '1992-06-18', 'L', 'lolong', '0821686868686', 'angga@gmail.com', '', '2014-06-02', '2014-06-02 11:54:30'),
(10, 'boy', 'boy', 'Suhandre Fiboy', 'Padang', '1993-03-15', 'L', 'Jl. Angkasa Puri 1 Tunggul Hitam Padang', '082170214455', 'boy@gmail.com', '', '2016-10-31', '2016-11-02 21:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `idpesan` int(11) NOT NULL AUTO_INCREMENT,
  `namalengkap` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `statuspesan` varchar(50) NOT NULL,
  `tglpesan` date NOT NULL,
  `cekadmin` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `bukti` text NOT NULL,
  PRIMARY KEY (`idpesan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`idpesan`, `namalengkap`, `alamat`, `notelp`, `email`, `statuspesan`, `tglpesan`, `cekadmin`, `bukti`) VALUES
(15, 'ras', 'jalan jamal jamil no 17 siteba', '085766494713', 'as1245rahmat@gmail.com', '', '2016-10-30', '0000-00-00 00:00:00', ''),
(16, 'boy', 'Jl. Angkasa Puri 1 Tunggul Hitam Padang', '082170214455', 'boy@gmail.com', 'Dikirim', '2016-10-31', '2016-10-31 23:06:08', ''),
(17, 'boy', 'Jl. Angkasa Puri 1 Tunggul Hitam Padang', '082170214455', 'boy@gmail.com', '', '2016-10-31', '0000-00-00 00:00:00', ''),
(18, 'boy', 'Jl. Angkasa Puri 1 Tunggul Hitam Padang', '082170214455', 'boy@gmail.com', '', '2016-10-31', '0000-00-00 00:00:00', ''),
(19, 'ras', 'jalan jamal jamil no 17 siteba', '085766494713', 'as1245rahmat@gmail.com', '', '2016-11-02', '0000-00-00 00:00:00', ''),
(20, 'ras', 'jalan jamal jamil no 17 siteba', '085766494713', 'as1245rahmat@gmail.com', '', '2016-11-02', '0000-00-00 00:00:00', ''),
(21, 'boy', 'Jl. Angkasa Puri 1 Tunggul Hitam Padang', '082170214455', 'boy@gmail.com', '', '2016-11-02', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_detail`
--

CREATE TABLE IF NOT EXISTS `pesan_detail` (
  `idpesan` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan_detail`
--

INSERT INTO `pesan_detail` (`idpesan`, `idproduk`, `jumlah`) VALUES
(15, 14, 2),
(15, 13, 1),
(16, 18, 1),
(16, 17, 1),
(17, 18, 1),
(17, 17, 1),
(18, 18, 1),
(18, 17, 1),
(19, 18, 1),
(19, 17, 1),
(20, 18, 1),
(20, 17, 1),
(21, 18, 1),
(21, 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pesan_temp`
--

CREATE TABLE IF NOT EXISTS `pesan_temp` (
  `idpesantemp` int(11) NOT NULL AUTO_INCREMENT,
  `idproduk` int(11) NOT NULL,
  `idsession` varchar(100) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `tglpesantemp` datetime NOT NULL,
  PRIMARY KEY (`idpesantemp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pesan_temp`
--


-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `idproduk` int(11) NOT NULL AUTO_INCREMENT,
  `idkategori` int(11) NOT NULL,
  `idbrand` int(11) NOT NULL,
  `namaproduk` varchar(80) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` int(5) NOT NULL,
  `tglmasuk` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `foto` text NOT NULL,
  `dibeli` int(5) NOT NULL,
  `dilihat` int(5) NOT NULL,
  PRIMARY KEY (`idproduk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `idkategori`, `idbrand`, `namaproduk`, `deskripsi`, `harga`, `stok`, `tglmasuk`, `foto`, `dibeli`, `dilihat`) VALUES
(10, 19, 4, 'LIQUID CUP CORN', '', 100000, 20, '2016-10-30 11:15:39', 'LIQUID CUP CORN LOKAL.jpg', 0, 0),
(11, 19, 4, 'LIQUID LOKAL NOIR', '', 100000, 20, '2016-10-30 11:17:31', 'LIQUID LOKAL NOIR.jpg', 0, 2),
(12, 19, 4, 'LIQUID NEKED USA', '', 100000, 20, '2016-10-30 11:18:20', 'LIQUID NEKED USA.jpg', 0, 5),
(13, 18, 3, 'MOD ISTICK PICO', '', 100000, 19, '2016-10-30 11:18:59', 'MOD ISTICK PICO.jpg', 1, 0),
(14, 19, 1, 'VT75 NANO HCIGAR', '', 100000, 18, '2016-10-30 11:26:48', 'MOD VT75 NANO HCIGAR.jpg', 2, 7),
(16, 18, 1, 'TESLA INVADER III', '', 120000, 20, '2016-10-31 22:37:11', 'MOD TESLA INVADER III.png', 0, 0),
(17, 18, 1, 'MOD WISMEC 23', '', 110000, 14, '2016-10-31 22:37:45', 'MOD WISMEC 23.jpg', 6, 0),
(18, 18, 1, 'MOD TESLA INVADER ', '', 100000, 14, '2016-10-31 22:38:52', 'MOD TESLA INVADER.jpg', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `recent`
--

CREATE TABLE IF NOT EXISTS `recent` (
  `idrecent` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `tglrecent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idrecent`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `recent`
--

INSERT INTO `recent` (`idrecent`, `username`, `idproduk`, `tglrecent`) VALUES
(6, 'ras', 12, '2016-10-31 22:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE IF NOT EXISTS `testimoni` (
  `idtesti` int(11) NOT NULL AUTO_INCREMENT,
  `idmember` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `testi` varchar(200) NOT NULL,
  `isitesti` text NOT NULL,
  `tglpost` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idtesti`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`idtesti`, `idmember`, `idproduk`, `testi`, `isitesti`, `tglpost`) VALUES
(5, 1, 12, 'Tanya Rasa', 'Ada Rasa Lain gak...?', '2016-10-31 22:32:55');
