-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2019 pada 05.32
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bergabung`
--

CREATE TABLE `bergabung` (
  `id` int(11) NOT NULL,
  `id_communitas` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bergabung`
--

INSERT INTO `bergabung` (`id`, `id_communitas`, `id_user`) VALUES
(1, 10, 3),
(2, 11, 2),
(3, 10, 2),
(4, 11, 3),
(5, 10, 12),
(6, 12, 12),
(7, 12, 3),
(8, 10, 5),
(9, 12, 5),
(10, 11, 5),
(11, 10, 9),
(12, 13, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment` varchar(2555) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_communitas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`id`, `comment`, `id_user`, `id_communitas`) VALUES
(1, 'haha\r\n', 9, 10),
(2, 'zia', 9, 10),
(3, 'apa', 3, 10),
(4, 'hai\r\n', 3, 13),
(5, 'hai', 3, 13),
(6, 'bi\r\n', 3, 10),
(7, 'halo', 3, 13),
(8, 'ini Komunitas Pelukis', 3, 14),
(9, 'aasasasas', 3, 14),
(10, 'aaaa', 3, 14),
(11, 'haha', 3, 10),
(12, 'hay\r\n', 3, 10),
(14, 'kenapakenapakenapakenapakenapakenapakenapakenapakenapakenapakenapakenapakenapakenapa\r\nkenapakenapakenapakenapakenapakenapakenapakenapa', 4, 10),
(15, 'hallo', 3, 11),
(16, 'zja', 3, 10),
(17, 'pa\r\n', 3, 10),
(18, 'iya', 3, 10),
(19, 'zia', 3, 11),
(20, 'asd', 3, 10),
(21, 'asasdwq', 3, 10),
(22, 'zs', 3, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `communitas`
--

CREATE TABLE `communitas` (
  `id` int(11) NOT NULL,
  `nama_ketua` varchar(50) DEFAULT NULL,
  `nama_komunitas` varchar(50) DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  `maps` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `jenis_komunitas` varchar(50) DEFAULT NULL,
  `deskrisi` varchar(25555) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jml_anggota` int(255) DEFAULT NULL,
  `form` varchar(25555) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `id_pembuat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `communitas`
--

INSERT INTO `communitas` (`id`, `nama_ketua`, `nama_komunitas`, `no_telp`, `maps`, `alamat`, `jenis_komunitas`, `deskrisi`, `nama`, `jml_anggota`, `form`, `rating`, `id_pembuat`) VALUES
(10, 'udin', 'Gowes Bandung', '+628990360375', 'bandung', 'bandung, Baleendah ', 'Teknologi', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'koskas.jpg', 5, 'https://docs.google.com/forms/d/1jWAHyhQhbFDWTloyYeIWi6MfHaQ1CYzAPGnXeeKOFaY/viewform?edit_requested=true', NULL, 3),
(11, 'Rian', 'Pendaki Gunung Bandung', '+628990360375', 'bandung', 'Bandung, Cicadas', 'Teknologi', 'hahaform-controlform-controlform-controlform-controlhahaform-controlform-controlform-controlform-controlhahaform-controlform-controlform-controlform-controlhahaform-controlform-controlform-controlform-control', 'kpgb.jpg', 3, 'https://docs.google.com/forms/d/1jWAHyhQhbFDWTloyYeIWi6MfHaQ1CYzAPGnXeeKOFaY/viewform?edit_requested=true', NULL, 3),
(12, 'Zia', 'Codinger Surabaya', '+628990360375', 'kebumen', 'Surabaya', 'Teknologi', 'blablibluble', 'Suja-Mixed-Martial-Art.jpg', 3, 'https://docs.google.com/forms/d/1jWAHyhQhbFDWTloyYeIWi6MfHaQ1CYzAPGnXeeKOFaY/viewform?edit_requested=true', NULL, 12),
(13, 'Osama', 'Ngaji Bareng Bandung', '08928334234', 'bandung', 'Cisaranten', 'Teknologi', 'sapedahsapedahsapedahsapedahsapedah sapedahsapedahsapedahsapedahsapedahsapedahsapedahsapedah sapedahsapedahsapedahsapedahsapedahsapedahsapedahsapedah sapedahsapedahsapedahsapedah sapedahsapedahsapedahsapedah sapedahsapedahsapedahsapedahsapedahsapedahsapedahsapedah sapedahsapedahsapedahsapedah sapedahsapedahsapedahsapedah sapedahsapedahsapedahsapedah', 'istigosah.jpg', 1, 'https://docs.google.com/forms/d/1jWAHyhQhbFDWTloyYeIWi6MfHaQ1CYzAPGnXeeKOFaY/viewform?edit_requested=true', NULL, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `deskripsi` varchar(2555) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `user`, `judul`, `tanggal`, `jenis`, `deskripsi`, `nama`, `level`) VALUES
(1, '4.jpg', 'catur', '2019-03-22', 'Tournament', 'catur', '4.jpg', 'top'),
(2, 'evenet1dibawah.png', 'sapedah', '2019-03-30', 'Tournament', 'blablablablablablablablablablablablablablablablablablablablabla', 'evenet1dibawah.png', 'biasa'),
(3, 'eventdibawah2.jpg', 'ss', '2019-03-28', 'Tournament', 'ss', 'eventdibawah2.jpg', 'top'),
(4, 'sayyid', 'Sasapedahan yu', '2019-03-28', 'Tournament', 'sasapedahan matak sehat', 'koskas.jpg', 'biasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `id_communitas` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rating` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`id`, `id_communitas`, `id_user`, `rating`) VALUES
(1, 10, 3, 3),
(2, 11, 3, 3),
(3, 12, 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `confirpass` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `firstname`, `username`, `password`, `confirpass`, `email`, `no_telp`, `jenis_kelamin`, `level`) VALUES
(1, 'zia', 'zia', 'zia', 'zia', 'ziamuhamad@gmail.com', '08990360375', 'laki-laki', 'admin'),
(2, 'anas', 'anas', 'anas', 'anas', 'anas@gmail.com', '08928318812', 'laki-laki', 'user'),
(3, 'haha', 'haha', 'haha', 'haha', 'haha@gmail.com', '927342423', 'Perempuan', 'user'),
(4, 'azmi', 'azmi', '123', '123', 'astaghfirullah@gmail.com', '54646354874', 'Laki-laki', 'user'),
(5, 'sayyid', 'wali', 'wali', 'wali', 'wali@gmail.com', '+628990360375', 'Laki-laki', 'user'),
(8, 'udin', 'udin', 'udin', 'udin', 'udin@gmail.com', '+628990360375', 'Perempuan', 'user'),
(9, 'fikri', 'fikri', '123', '123', 'ziamuhamad@gmail.com', '+628990360375', 'Perempuan', 'user'),
(10, 'haco', 'haci', 'haci', 'haci', 'haci@gmail.com', '+628990360375', 'Laki-laki', 'user'),
(12, 'cia', 'cia', 'cia', 'cia', 'cia@gmail.com', '09212312123', 'Laki-laki', 'user'),
(14, NULL, 'ande', 'ande', NULL, 'admin@gmail.com', '08990360375', NULL, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bergabung`
--
ALTER TABLE `bergabung`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_communitas` (`id_communitas`),
  ADD KEY `fk_user` (`id_user`);

--
-- Indeks untuk tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `communitas`
--
ALTER TABLE `communitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user3` (`id_pembuat`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user2` (`id_user`),
  ADD KEY `fk_communitas2` (`id_communitas`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bergabung`
--
ALTER TABLE `bergabung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `communitas`
--
ALTER TABLE `communitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bergabung`
--
ALTER TABLE `bergabung`
  ADD CONSTRAINT `fk_communitas` FOREIGN KEY (`id_communitas`) REFERENCES `communitas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `communitas`
--
ALTER TABLE `communitas`
  ADD CONSTRAINT `fk_user3` FOREIGN KEY (`id_pembuat`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fk_communitas2` FOREIGN KEY (`id_communitas`) REFERENCES `communitas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
