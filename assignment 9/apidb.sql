-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2022 pada 21.56
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apidb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `designation` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `designation`, `created`) VALUES
(1, 'Rafathar', 'rafathar@gmail.com', 'CEO', '2022-04-26 19:52:26'),
(2, 'Raka', 'raka@yahoo.com', 'Apparel Patternmaker', '2013-03-03 01:20:10'),
(3, 'Sofi', 'sofi@gmail.com', 'Accountant', '2014-09-20 03:10:25'),
(5, 'Husnul', 'husnul@gmail.com', 'Chief Sustainability Officer', '2016-01-04 05:20:30'),
(6, 'Bintang', 'bintang@hotmail.com', 'Chemical Technician', '2017-01-10 06:40:10'),
(7, 'Erwan', 'erwan@yahoo.com', 'Transportation Planner', '2017-05-02 02:20:30'),
(8, 'Latifah', 'latifah@yahoo.com', 'Wind Energy Engineer', '2018-01-04 05:15:35'),
(9, 'Nela', 'nela@hotmail.com', 'Geneticist', '2019-01-02 02:20:30'),
(10, 'Aji', 'aji@hotmail.com', 'Space Sciences Teacher', '2020-02-01 06:22:50'),
(19, 'Lala', 'lala@gmail.com', 'Data Analyst', '2022-04-26 19:49:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
