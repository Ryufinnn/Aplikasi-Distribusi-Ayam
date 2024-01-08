-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3307
-- Generation Time: Dec 01, 2017 at 10:05 AM
-- Server version: 5.1.35
-- PHP Version: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_batik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `namalengkap`) VALUES
(1, 'admin', 'admin', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `idanggota` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `jk` char(1) NOT NULL,
  `tgllahir` date NOT NULL DEFAULT '0000-00-00',
  `alamat` text NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `tgldaftar` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idanggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`idanggota`, `username`, `password`, `namalengkap`, `jk`, `tgllahir`, `alamat`, `nohp`, `tgldaftar`) VALUES
(1, 'membersk1', 'membersk1', 'Member SK 1', 'P', '1995-04-14', 'Lubuk Begalung Padang', '081234567890', '2017-05-03 15:07:26'),
(2, 'membersk2', 'membersk2', 'Member SK 2', 'P', '1995-04-07', 'Lubuk Begalung Padang', '081234567890', '2017-05-09 13:56:20'),
(3, 'membersi8', 'membersi8', 'Member SI 8', 'P', '1995-09-07', 'Lubuk Begalung Padang', '081234567890', '2017-05-12 15:06:02'),
(4, 'membersi9', 'membersi9', 'Member SI 9', 'P', '1995-03-07', 'Lubeg Padang', '081234567890', '2017-05-12 17:34:46'),
(5, 'membersi4', 'membersi4', 'Member SI 4', 'P', '1995-06-08', 'Padang Kota', '081234567890', '2017-05-13 14:18:09'),
(6, 'membersi5', 'membersi5', 'Member SI 5', 'P', '1995-04-07', 'Lubeg Kota', '081234567890', '2017-05-13 15:58:41');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `idbrand` int(11) NOT NULL AUTO_INCREMENT,
  `idkat` int(11) NOT NULL,
  `idadmin` int(11) NOT NULL,
  `namabrand` varchar(30) NOT NULL,
  PRIMARY KEY (`idbrand`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`idbrand`, `idkat`, `idadmin`, `namabrand`) VALUES
(16, 6, 1, 'Citra Monalisa'),
(17, 8, 1, 'Batik Azizah');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `idcart` int(11) NOT NULL AUTO_INCREMENT,
  `idproduk` int(11) NOT NULL,
  `idanggota` int(11) NOT NULL,
  `jumlahbeli` int(11) NOT NULL,
  `tglcart` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idcart`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `jasakirim`
--

CREATE TABLE IF NOT EXISTS `jasakirim` (
  `idjasa` int(11) NOT NULL AUTO_INCREMENT,
  `idadmin` int(11) NOT NULL,
  `namajasa` varchar(30) NOT NULL,
  `logojasa` text NOT NULL,
  `tarif` double NOT NULL,
  PRIMARY KEY (`idjasa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jasakirim`
--

INSERT INTO `jasakirim` (`idjasa`, `idadmin`, `namajasa`, `logojasa`, `tarif`) VALUES
(1, 1, 'JNE', 'jne.jpg', 13000),
(2, 1, 'POS INDONESIA', 'pos.jpg', 11000),
(3, 1, 'TIKI', 'tiki.jpg', 12500),
(4, 1, 'PANDU LOGISTIC', 'pandu.jpg', 15000),
(5, 1, 'RPX HOLDING', 'rpx.jpg', 12000),
(6, 1, 'ESL EXPRESS', 'esl.jpg', 14500);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `idkat` int(11) NOT NULL AUTO_INCREMENT,
  `idadmin` int(11) NOT NULL,
  `namakat` varchar(40) NOT NULL,
  PRIMARY KEY (`idkat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkat`, `idadmin`, `namakat`) VALUES
(6, 1, 'Batik Tanah liek'),
(8, 1, 'Batik Minang');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasibayar`
--

CREATE TABLE IF NOT EXISTS `konfirmasibayar` (
  `idkonfirmasi` int(11) NOT NULL AUTO_INCREMENT,
  `idorder` int(11) NOT NULL,
  `namabankpengirim` varchar(50) NOT NULL,
  `namapengirim` varchar(50) NOT NULL,
  `jumlahtransfer` double NOT NULL,
  `tgltransfer` date NOT NULL DEFAULT '0000-00-00',
  `namabankpenerima` varchar(50) NOT NULL,
  `bukti` text NOT NULL,
  PRIMARY KEY (`idkonfirmasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `konfirmasibayar`
--

INSERT INTO `konfirmasibayar` (`idkonfirmasi`, `idorder`, `namabankpengirim`, `namapengirim`, `jumlahtransfer`, `tgltransfer`, `namabankpenerima`, `bukti`) VALUES
(1, 8, 'Mandiri', 'Fajri', 2000000, '2017-02-01', 'BNI', 'Desert.jpg'),
(2, 17, 'Mandiri', 'Budi', 50000, '2017-12-01', 'BNI', 'Desert.jpg'),
(3, 20, 'BRI', 'Andi', 10000000, '2017-12-01', 'BCA', 'Koala.jpg'),
(4, 21, 'Mandiri', 'Jojon', 200000, '2017-12-02', 'BCA', 'Tulips.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
  `idorder` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `idjasa` int(11) NOT NULL,
  `jumlahbeli` int(11) NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`idorder`, `idproduk`, `idjasa`, `jumlahbeli`, `subtotal`) VALUES
(17, 24, 1, 1, 700000),
(17, 26, 1, 1, 475000),
(18, 26, 4, 1, 475000),
(19, 22, 0, 1, 250000),
(19, 23, 0, 1, 720000),
(19, 26, 0, 1, 475000),
(20, 22, 5, 2, 500000),
(21, 25, 5, 1, 950000),
(21, 23, 5, 2, 1440000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `idorder` int(11) NOT NULL AUTO_INCREMENT,
  `idanggota` int(11) NOT NULL,
  `alamatkirim` text NOT NULL,
  `total` double NOT NULL,
  `tglorder` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `statusorder` varchar(40) NOT NULL,
  PRIMARY KEY (`idorder`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`idorder`, `idanggota`, `alamatkirim`, `total`, `tglorder`, `statusorder`) VALUES
(17, 2, 'Bungus, Padang', 1240000, '2017-12-01 09:27:10', 'Sudah Lunas'),
(18, 2, 'Gaduik', 520000, '2017-12-01 09:30:40', 'Baru'),
(19, 1, 'Lubeg', 1445000, '2017-12-01 09:32:24', 'Baru'),
(20, 1, 'Painan', 524000, '2017-12-01 09:34:36', 'Sudah Diterima Pembeli'),
(21, 4, 'Indarung', 2450000, '2017-12-01 09:38:27', 'Sudah Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `idproduk` int(11) NOT NULL AUTO_INCREMENT,
  `idkat` int(11) NOT NULL,
  `idbrand` int(11) NOT NULL,
  `namaproduk` varchar(100) NOT NULL,
  `hargaproduk` double NOT NULL,
  `stok` int(11) NOT NULL,
  `spesifikasi` text NOT NULL,
  `detailproduk` text NOT NULL,
  `diskon` int(11) NOT NULL,
  `berat` float NOT NULL,
  `isikotak` text NOT NULL,
  `foto1` text NOT NULL,
  `foto2` text NOT NULL,
  `tglpost` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idproduk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `idkat`, `idbrand`, `namaproduk`, `hargaproduk`, `stok`, `spesifikasi`, `detailproduk`, `diskon`, `berat`, `isikotak`, `foto1`, `foto2`, `tglpost`) VALUES
(22, 6, 16, 'Batik Tanah Liek Motif Jam Gadang', 250000, 197, '- Menggunakan Bahan Dari Tanah Liek\r\n- Terdiri Dari Beberapa Warna Seperti kulit Rambutan, Mahoni, Gambir, dll', 'Batik Tanah Liek (Batik Tanah Liat) diperkirakan sudah ada sejak abad ke 16. Kebudayan membatik ini dibawa oleh suku bangsa China ke Minangkabau. Pada masa penjajahan Jepang, batik tanah liat ini memasuki masa vakum. Tidak ada lagi pengrajin kesesian membatik ini.\r\n\r\nHingga pada tahun 1993, seorang pengrajin bernama HJ Wirda Hanim tergerak untuk kembali memproduksi batik khas minangkabau tersebut. Niat ini muncul setelah melihat batik yang dipakai para ninik mamak dan bundo kanduang di kampungnya, Sumanik, Tanah Datar,  yang sudah usang dan robek sana-sini.\r\n', 0, 1, '', '406144_265264830204908_193590920_n.jpg', 'Motif Rumah Gadang.png', '2017-12-01 06:19:45'),
(23, 6, 16, 'Batik Tanah Liek Motif Pucuk Rebung', 800000, 147, '- Terbuat Dari Bahan Tanah Liek\r\n- Terdiri Dari Beberapa Warna Seperti Kulit Rambutan, Mahoni, Gambir, dll', 'Batik Tanah Liek (Batik Tanah Liat) diperkirakan sudah ada sejak abad ke 16. Kebudayan membatik ini dibawa oleh suku bangsa China ke Minangkabau. Pada masa penjajahan Jepang, batik tanah liat ini memasuki masa vakum. Tidak ada lagi pengrajin kesesian membatik ini.\r\n\r\nHingga pada tahun 1993, seorang pengrajin bernama HJ Wirda Hanim tergerak untuk kembali memproduksi batik khas minangkabau tersebut. Niat ini muncul setelah melihat batik yang dipakai para ninik mamak dan bundo kanduang di kampungnya, Sumanik, Tanah Datar,  yang sudah usang dan robek sana-sini.', 10, 2, '', 'pucuk-rebung.jpg', 'ByJGiFRCQAAT1ZX.jpg', '2017-12-01 06:29:30'),
(24, 6, 16, 'Batik Tanah Liek Motif Kaluak Paku', 700000, 199, '- Menggunakan Bahan Dari Tanah Liek\r\n- Terdiri Dari Beberapa Warna Seperti kulit Rambutan, Mahoni, Gambir, dll', 'Batik Tanah Liek (Batik Tanah Liat) diperkirakan sudah ada sejak abad ke 16. Kebudayan membatik ini dibawa oleh suku bangsa China ke Minangkabau. Pada masa penjajahan Jepang, batik tanah liat ini memasuki masa vakum. Tidak ada lagi pengrajin kesesian membatik ini.\r\n\r\nHingga pada tahun 1993, seorang pengrajin bernama HJ Wirda Hanim tergerak untuk kembali memproduksi batik khas minangkabau tersebut. Niat ini muncul setelah melihat batik yang dipakai para ninik mamak dan bundo kanduang di kampungnya, Sumanik, Tanah Datar,  yang sudah usang dan robek sana-sini.', 0, 2, '', 'batik-tanah-liek-300x300.jpg', '848.JPG', '2017-12-01 06:34:47'),
(25, 8, 17, 'Paruah Enggang', 1000000, 99, 'Terinspirasi dari penciptanya pada pengamatan Burung Enggang dan paruhnya yang pakai mahkota, kokoh, indah, dan anggun.', 'Terinspirasi dari penciptanya pada pengamatan Burung Enggang dan paruhnya yang pakai mahkota, kokoh, indah, dan anggun.', 5, 1, '', 'Batik-Kalimantan-Motif-Dayak-DYK-013.jpg', '4a787-enggang.jpg', '2017-12-01 06:46:33'),
(26, 8, 17, 'Sikumbang Manih', 500000, 97, 'Motif ini dikiaskan pada anak perempuan yang berumur lima belas tahun ke atas yang belum berkeluarga seperti bunga yang sedang kembang. Desain busana by Nina Nugroho, Ratu Sovia.', ' Motif ini dikiaskan pada anak perempuan yang berumur lima belas tahun ke atas yang belum berkeluarga seperti bunga yang sedang kembang. Desain busana by Nina Nugroho, Ratu Sovia.', 5, 3, '', 'batik-minang-321x241.jpg', 'uk16c.jpg', '2017-12-01 06:49:26');
