-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2019 pada 10.55
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nadyanf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `komentar` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(52, 'pikachu', 'lucu abiss', '2019-05-14 08:45:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(84, 'd', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
