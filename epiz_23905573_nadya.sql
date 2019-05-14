-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Inang: sql100.byetcluster.com
-- Waktu pembuatan: 14 Mei 2019 pada 07.37
-- Versi Server: 5.6.41-84.1
-- Versi PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `epiz_23905573_nadya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) NOT NULL,
  `komentar` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `judul`, `komentar`, `waktu`) VALUES
(17, 'the prodigy', 'keren, bikin deg-degan, bgi yng tkut jngan nntn ini yaaaaaa', '2019-05-12 09:54:07'),
(18, 'end game', ' keren bangett', '2019-05-12 09:48:49'),
(20, 'pikachuu', ' lucuuuuuu bgtt', '2019-05-14 02:17:46'),
(46, 'haloween', ' bagus bgt', '2019-05-14 08:37:46'),
(47, 'dilan', 'sosweet', '2019-05-14 08:39:45'),
(50, 'tutles', 'serruuuuu', '2019-05-14 08:43:18'),
(52, 'pikachu', 'lucu abiss', '2019-05-14 08:45:48'),
(53, 'Endgame', 'Yeay thanos gada lagiðŸ˜›', '2019-05-14 11:03:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`) VALUES
(45, 'nn', 'nn', '', ''),
(48, 'aa', 'aa', 'nady@gmail.com', 'admin'),
(55, 'ss', 'ss', 'nady@gmail.com', 'manager'),
(59, 'aca', 'aca', 'nady@gmail.com', 'admin'),
(60, 'nady', 'nady', 'nady@gmail.com', 'manager'),
(61, 'tom', 'tom', 'nady@gmail.com', ''),
(62, 'lop', '123', 'thomasalkadafi@gmail.com', 'manager'),
(63, 'nn', 'nn', 'cantikbuanget@gmail.com', 'manager'),
(64, 'tom', '123', 'thomasalkadafi@gmail.com', 'manager'),
(65, 'tom', '123', 'thomasalkadafi@gmail.com', 'manager'),
(66, 'tom', '123', 'thomasalkadafi@gmail.com', 'manager'),
(67, 'tom', '123', 'thomasalkadafi@gmail.com', 'manager'),
(68, 'tom', '123', 'thomasalkadafi@gmail.com', 'manager'),
(69, 'tom', '123', 'thomasalkadafi@gmail.com', 'manager'),
(70, 'tom', '123', 'thomasalkadafi@gmail.com', 'manager'),
(71, 'tom', '123', 'thomasalkadafi@gmail.com', 'manager'),
(72, 'tom', '123', 'thomasalkadafi@gmail.com', 'manager'),
(73, 'tom', '123', 'thomasalkadafi@gmail.com', 'manager'),
(74, 'tom', '123', 'thomasalkadafi@gmail.com', 'manager'),
(75, 'tom', '123', 'thomasalkadafi@gmail.com', 'manager'),
(76, 'tom', '123', 'thomasalkadafi@gmail.com', 'manager'),
(77, 'tom', '123', 'thomasalkadafi@gmail.com', 'manager'),
(78, 'tom', '123', 'thomasalkadafi@gmail.com', 'manager'),
(79, 'tom', '123', 'thomasalkadafi@gmail.com', 'manager'),
(80, 'tom', '123', 'thomasalkadafi@gmail.com', 'manager'),
(81, 'tom', '123', 'thomasalkadafi@gmail.com', 'manager'),
(82, 'tom', '123', 'thomasalkadafi@gmail.com', 'manager'),
(83, 'yayak', '123', 'cantikbuanget@gmail.com', 'manager'),
(84, 'd', '', '', ''),
(85, 'thomasgtg', '123', 'thomasalkadafi@gmail.com', 'manager');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
