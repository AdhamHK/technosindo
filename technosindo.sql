-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 14 Agu 2014 pada 12.18
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `technosindo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `ID` int(1) NOT NULL AUTO_INCREMENT,
  `Level` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`ID`, `Level`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `Message` varchar(300) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id`, `FullName`, `email`, `subject`, `Message`, `tanggal`, `status`) VALUES
(1, 'Aloysius Oky', 'okyucup@gmail.com', 'Order-App', 'Saya ingin memesan sebuah aplikasi android yang bertemakan semarangan kira-kira konsep nya seperti forum yang membahas tentang budaya makanan wisata di kota Semarang.', '2014-08-12', 'Pending'),
(2, 'Sojoyenjoy', 'sojoyenjoy@rocketmail.com', 'Order-Web', 'Saya ingin memesan sistem custom relationship management berbasis web dengan layanan yang diberikan adalah memberikan jasa hosting web ', '2014-08-13', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekaplayananinfo`
--

CREATE TABLE IF NOT EXISTS `rekaplayananinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(700) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `rekaplayananinfo`
--

INSERT INTO `rekaplayananinfo` (`id`, `email`, `subject`, `message`, `tanggal`) VALUES
(1, 'sojoyenjoy@rocketmail.com', 'Order-Web', 'Layanan anda kami terima dalam pembuatan web crm mengenai jasa pembuatan hosting bagi client anda. setelah proses perancangan disetujui sesuai dengan permintaan dan kebutuhan project maka kami menyelesaikan project ini dalam kurun waktu berapa hari ?\r\nTerimakasih hormat kami,\r\nTechnosindo | Your Solution Technology.', '2014-08-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `isActive` varchar(30) NOT NULL,
  `ActivateCode` varchar(30) NOT NULL,
  `Avatar` varchar(30) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Karir` varchar(50) NOT NULL,
  `Kutipan` varchar(150) NOT NULL,
  `Tgl_Lahir` varchar(10) NOT NULL,
  `Alamat` varchar(300) NOT NULL,
  `Level_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `FullName`, `Password`, `Email`, `isActive`, `ActivateCode`, `Avatar`, `Gender`, `Karir`, `Kutipan`, `Tgl_Lahir`, `Alamat`, `Level_id`) VALUES
(1, 'Adham Hayukalbu', 'admin', 'admntechnosindo@gmail.com', '1', '', 'dum.png', 'Male', 'IT Programming', 'Saya adalah seorang programmer web dan aplikasi berbasis java', '1994-11-23', '', 1),
(2, 'Sojoyenjoy', 'sojoyenjoy', 'sojoyenjoy@rocketmail.com', '1', '', 'sojoyenjoy.png', 'Male', 'Pelajar/Mahasiswa', 'I''ve turned into a new imagination that is Sojoyenjoy	', '1994-11-23', 'Plamongan Indah i8/6 Semarang', 2),
(3, 'Aloysius Oky', 'ucup123', 'okyucup@gmail.com', '1', '', 'ucup123.png', 'Male', 'Pelajar/Mahasiswa', 'Cool Story Broo', '1994-08-08', 'Jatingaleh II Semarang', 2),
(4, 'Rani Rahayuni	', 'ranirahayuni', 'ranirahay94@gmail.com', '1', '', 'ranirahayuni.png', 'Female', 'Pelajar/Mahasiswa', '', '0000-00-00', '', 2),
(5, 'Friska Asj', 'friska', 'sjakurullah_asj@yahoo.com', '0', '7xUjWBs2Hy', 'friska.png', '', '', '', '0000-00-00', '', 2),
(6, 'Hayukalbu', 'endinggetstory', 'sojoyenjoyaj@gmail.com', '0', 'HvawQr7QVm', 'endinggetstory.png', '', '', '', '0000-00-00', '', 2),
(7, 'Handiko Rahman', 'handikorp', 'handikorp@gmail.com', '1', '', 'handiko.png', 'Male', 'Pelajar/Mahasiswa', 'Penyelam mimpi, Pengarung Semesta. Not-a-morning person. 9th of Outdigo''s Inside. #BOW', '1995-02-01', '', 2),
(8, 'Hayukalbu', 'hayukalbu', 'sojoy.enjoyaja@gmail.com', '0', '7JuxWehGtj', 'hayukalbu.png', '', '', '', '0000-00-00', '', 2),
(9, 'Riska Handini', 'riskahandini', 'riskahandini11@yahoo.com', '1', '', 'riskahandini.png', '', '', '', '0000-00-00', '', 2),
(10, 'Wahyu Pamungkas', 'wahyup10', 'wp_wahyup@yahoo.com', '1', '', 'wahyup10.png', '', '', '', '0000-00-00', '', 2),
(11, 'Miqdar Nafisi', 'okyucup', 'aloysiusowsa@gmail.com', '1', '', 'okyucup.png', 'Male', 'Pelajar/Mahasiswa', 'Selama bisa hemat kenapa tidak ?', '1993-04-16', '', 2),
(12, 'ilham husada', 'husadaphu', 'husadaphu@gmail.com', '0', 'jW8dUomc8k', 'husadaphu.png', '', '', '', '', '', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
