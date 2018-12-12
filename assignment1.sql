-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2018 pada 17.08
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `custorder`
--

CREATE TABLE `custorder` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `barber` varchar(50) NOT NULL,
  `datebooking` date NOT NULL,
  `timebooking` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `custorder`
--

INSERT INTO `custorder` (`id`, `username`, `email`, `phone`, `subjek`, `barber`, `datebooking`, `timebooking`, `message`, `status`, `timestamp`) VALUES
(1, 'AAAAA', 'aaaaa@gmail.com', '1111111111', 'HAIRCUT', 'AAA Barber', '2018-12-12', '10.00', 'aaaaaaaaa', 'COMPLETED', '2018-12-12 07:33:47'),
(2, 'BBBBB', 'aaaaa@gmail.com', '111111111', 'HAIR COLOR', 'BBB Barber', '2018-12-12', '11.00', 'AAAAAAAAa', 'WAITING', '2018-12-12 07:47:52'),
(3, 'BBBBB', 'bbbbb@gmail.com', '122222222222', 'SHAVE', 'CCC Barber', '2018-12-12', '12.00', '', 'CANCEL', '2018-12-12 07:47:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laybarber`
--

CREATE TABLE `laybarber` (
  `id` int(10) NOT NULL,
  `barber` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laybarber`
--

INSERT INTO `laybarber` (`id`, `barber`, `description`) VALUES
(1, 'AAA Barber', 'AAA Description'),
(2, 'BBB Barber', 'BBB Description'),
(3, 'CCC Barber', 'CCC Description');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laycover`
--

CREATE TABLE `laycover` (
  `id` int(10) NOT NULL,
  `subjek1` varchar(50) NOT NULL,
  `subjek2` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laycover`
--

INSERT INTO `laycover` (`id`, `subjek1`, `subjek2`, `description`) VALUES
(1, 'Subjek1', 'Subjek2 AAA', 'Description AAA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layfaq`
--

CREATE TABLE `layfaq` (
  `id` int(10) NOT NULL,
  `question` varchar(50) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `layfaq`
--

INSERT INTO `layfaq` (`id`, `question`, `answer`, `timestamp`) VALUES
(1, 'AAA Question', 'AAA Answer', '2018-12-10 15:49:14'),
(2, 'BBB Question', 'BBB Answer', '2018-12-10 15:49:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layprice`
--

CREATE TABLE `layprice` (
  `id` int(10) NOT NULL,
  `subjek` varchar(10) NOT NULL,
  `pricing` varchar(10) NOT NULL,
  `description1` varchar(50) NOT NULL,
  `description2` varchar(50) NOT NULL,
  `description3` varchar(50) NOT NULL,
  `description4` varchar(50) NOT NULL,
  `description5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `layprice`
--

INSERT INTO `layprice` (`id`, `subjek`, `pricing`, `description1`, `description2`, `description3`, `description4`, `description5`) VALUES
(1, 'HAIRCUT', '1', '1aaa', '1bbb', '1ccc', '1ddd', '1eee'),
(2, 'HAIR COLOR', '2', '2aaa', '2bbb', '2ccc', '2ddd', '2eee'),
(3, 'SHAVE', '3', '3aaa', '3bbb', '3ccc', '3ddd', '3eee');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layservice`
--

CREATE TABLE `layservice` (
  `id` int(10) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `picture` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `layservice`
--

INSERT INTO `layservice` (`id`, `subjek`, `description`, `picture`) VALUES
(1, 'CUT', 'AAA', 'service-icon-1.png'),
(2, 'SHAVE', 'BBB', 'service-icon-2.png'),
(3, 'CARE', 'CCC', 'service-icon-3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laytitle`
--

CREATE TABLE `laytitle` (
  `id` int(10) NOT NULL,
  `specialfeature` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `specialteam` varchar(50) NOT NULL,
  `testimonial` varchar(50) NOT NULL,
  `faq` varchar(50) NOT NULL,
  `appointment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laytitle`
--

INSERT INTO `laytitle` (`id`, `specialfeature`, `price`, `specialteam`, `testimonial`, `faq`, `appointment`) VALUES
(1, 'AAA AAA', 'BBB AAA', 'CCC AAA', 'DDD AAA', 'EEE AAA', 'FFF AAA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reglogin`
--

CREATE TABLE `reglogin` (
  `id` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reglogin`
--

INSERT INTO `reglogin` (`id`, `firstName`, `lastName`, `email`, `password`, `timestamp`) VALUES
(1, 'Admin', 'Admin1', 'admin@gmail.com', 'admin', '2018-12-10 03:55:00'),
(2, 'User', 'User1', 'user@gmail.com', 'user', '2018-12-11 11:20:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testing`
--

CREATE TABLE `testing` (
  `id` int(10) NOT NULL,
  `kd_mk` varchar(6) NOT NULL,
  `nm_mk` varchar(50) NOT NULL,
  `sks_mk` smallint(6) NOT NULL,
  `sms_mk` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testing`
--

INSERT INTO `testing` (`id`, `kd_mk`, `nm_mk`, `sks_mk`, `sms_mk`) VALUES
(1, 'MKB001', 'Bahasa Pemograman I', 3, '1'),
(2, 'MKB002', 'Praktik Bahasa Pemograman I', 2, '1'),
(3, 'MKK001', 'Fisika', 3, '1'),
(4, 'MKB004', 'Kalkulus Dasar', 3, '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `custorder`
--
ALTER TABLE `custorder`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laybarber`
--
ALTER TABLE `laybarber`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laycover`
--
ALTER TABLE `laycover`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layfaq`
--
ALTER TABLE `layfaq`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layprice`
--
ALTER TABLE `layprice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layservice`
--
ALTER TABLE `layservice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laytitle`
--
ALTER TABLE `laytitle`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reglogin`
--
ALTER TABLE `reglogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `custorder`
--
ALTER TABLE `custorder`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `laybarber`
--
ALTER TABLE `laybarber`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `laycover`
--
ALTER TABLE `laycover`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `layfaq`
--
ALTER TABLE `layfaq`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `layprice`
--
ALTER TABLE `layprice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `layservice`
--
ALTER TABLE `layservice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `laytitle`
--
ALTER TABLE `laytitle`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `reglogin`
--
ALTER TABLE `reglogin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `testing`
--
ALTER TABLE `testing`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
