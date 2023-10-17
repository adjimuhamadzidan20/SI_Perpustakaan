-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2023 pada 13.45
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_admin`
--

CREATE TABLE `dt_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(200) DEFAULT NULL,
  `username` varchar(120) DEFAULT NULL,
  `password` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dt_admin`
--

INSERT INTO `dt_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Adji Muhamad Zidan', 'beyourself20', 'b1abeefac37967dba82883659418345d'),
(2, 'Admin Perpus', 'admin123', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_anggota`
--

CREATE TABLE `dt_anggota` (
  `id_anggota` int(11) NOT NULL,
  `kode_anggota` varchar(100) DEFAULT NULL,
  `nama_anggota` varchar(200) DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dt_anggota`
--

INSERT INTO `dt_anggota` (`id_anggota`, `kode_anggota`, `nama_anggota`, `jenis_kelamin`, `tanggal_lahir`, `alamat`) VALUES
(79, 'APS', 'Iriana Hasanah', 'Laki-laki', '1988-04-07', 'Kota Bekasi'),
(80, 'APS', 'Ellis Laksmiwati', 'Laki-laki', '1988-04-21', 'Jakarta Selatan'),
(81, 'APS', 'Luhung Rafi Sirait', 'Laki-laki', '1976-10-05', 'Kota Bekasi'),
(82, 'APS', 'Tari Pratiwi', 'Perempuan', '1993-12-07', 'Tangerang'),
(83, 'APS', 'Indah Sudiati', 'Laki-laki', '2023-07-23', 'Depok'),
(84, 'APS', 'Karta Karja Mansur M.Kom.', 'Laki-laki', '1978-07-30', 'Kota Bekasi'),
(85, 'APS', 'Sarah Hassanah', 'Perempuan', '2007-03-04', 'Tangerang'),
(86, 'APS', 'Aurora Siska Puspasari S.Kom', 'Laki-laki', '2006-06-27', 'Jakarta Timur'),
(87, 'APS', 'Kusuma Simanjuntak', 'Perempuan', '1980-08-25', 'Tangerang'),
(90, 'APS', 'Lukita Budi Kurniawan S.IP', 'Laki-laki', '1977-06-06', 'Tangerang'),
(91, 'APS', 'Safina Kiandra Farida', 'Perempuan', '2000-09-13', 'Bogor'),
(92, 'APS', 'Jane Hartati', 'Perempuan', '1970-03-11', 'Bogor'),
(93, 'APS', 'Harjaya Mumpuni Siregar', 'Laki-laki', '2011-05-27', 'Jakarta Timur'),
(94, 'APS', 'Prabawa Mangunsong', 'Perempuan', '1989-06-23', 'Depok'),
(95, 'APS', 'Zelda Amalia Laksmiwati M.Ak', 'Perempuan', '1987-05-14', 'Jakarta Selatan'),
(96, 'APS', 'Keisha Yuliana Mandasari', 'Laki-laki', '2012-02-18', 'Kota Bekasi'),
(97, 'APS', 'Danu Sirait S.Ked', 'Laki-laki', '2004-11-24', 'Bogor'),
(98, 'APS', 'Gangsar Prasetyo', 'Laki-laki', '2002-07-07', 'Depok'),
(99, 'APS', 'Cengkir Galih Halim', 'Perempuan', '2022-04-11', 'Depok'),
(100, 'APS', 'Farah Puspita', 'Perempuan', '2023-09-17', 'Depok'),
(101, 'APS', 'Karimah Diah Yulianti', 'Perempuan', '1985-10-17', 'Tangerang'),
(102, 'APS', 'Galar Vega Najmudin', 'Laki-laki', '2021-06-04', 'Bogor'),
(103, 'APS', 'Dadi Santoso', 'Laki-laki', '1987-05-02', 'Bogor'),
(104, 'APS', 'Radika Kusumo', 'Perempuan', '2020-07-06', 'Jakarta Selatan'),
(105, 'APS', 'Agnes Wijayanti S.T.', 'Laki-laki', '2007-06-15', 'Jakarta Timur'),
(106, 'APS', 'Danu Habibi', 'Perempuan', '1977-02-22', 'Tangerang'),
(107, 'APS', 'Prasetya Wahyudin', 'Laki-laki', '2003-08-23', 'Jakarta Timur'),
(108, 'APS', 'Ganjaran Saragih S.H.', 'Perempuan', '1998-07-13', 'Bogor'),
(109, 'APS', 'Makara Mahendra S.Gz', 'Perempuan', '2022-01-15', 'Jakarta Timur'),
(110, 'APS', 'Fitria Halimah', 'Laki-laki', '2005-10-10', 'Bogor'),
(111, 'APS', 'Emong Ganda Mansur', 'Perempuan', '1998-03-27', 'Jakarta Timur'),
(112, 'APS', 'Julia Hartati', 'Perempuan', '2005-07-24', 'Tangerang'),
(113, 'APS', 'Tantri Endah Rahayu', 'Laki-laki', '1973-10-16', 'Bogor'),
(114, 'APS', 'Jumadi Maheswara', 'Laki-laki', '2001-09-19', 'Depok'),
(115, 'APS', 'Kanda Kadir Sihotang', 'Perempuan', '1970-05-07', 'Depok'),
(116, 'APS', 'Perkasa Eko Prasetyo S.E.', 'Perempuan', '1973-07-23', 'Depok'),
(117, 'APS', 'Perkasa Nashiruddin', 'Perempuan', '1975-07-02', 'Depok'),
(118, 'APS', 'Jamil Haryanto', 'Laki-laki', '2007-01-30', 'Bogor'),
(119, 'APS', 'Bella Nasyidah', 'Laki-laki', '1975-03-26', 'Jakarta Selatan'),
(120, 'APS', 'Wira Tarihoran', 'Perempuan', '2006-02-24', 'Jakarta Timur'),
(121, 'APS', 'Dodo Lamar Pradana S.H.', 'Laki-laki', '1989-01-24', 'Bogor'),
(122, 'APS', 'Devi Pertiwi M.Farm', 'Perempuan', '2016-09-26', 'Depok'),
(123, 'APS', 'Fitriani Pudjiastuti M.Kom.', 'Perempuan', '2020-08-30', 'Jakarta Selatan'),
(124, 'APS', 'Fathonah Oktaviani S.Ked', 'Perempuan', '1982-12-11', 'Jakarta Selatan'),
(125, 'APS', 'Farhunnisa Paris Widiastuti', 'Laki-laki', '2007-03-14', 'Bogor'),
(126, 'APS', 'Darmana Abyasa Prasasta', 'Perempuan', '2010-07-15', 'Depok'),
(127, 'APS', 'Zelda Mardhiyah M.Kom.', 'Laki-laki', '2008-08-07', 'Bogor'),
(128, 'APS', 'Cawisadi Raditya Wibisono S.Sos', 'Laki-laki', '1971-09-23', 'Tangerang'),
(129, 'APS', 'Eko Simbolon S.Psi', 'Laki-laki', '2009-11-22', 'Jakarta Selatan'),
(130, 'APS', 'Rini Shakila Maryati S.Pt', 'Laki-laki', '1974-07-11', 'Jakarta Selatan'),
(131, 'APS', 'Rama Saadat Napitupulu S.E.I', 'Perempuan', '1984-06-07', 'Jakarta Timur'),
(132, 'APS', 'Carla Widya Kusmawati S.Ked', 'Perempuan', '2010-06-05', 'Tangerang'),
(133, 'APS', 'Carla Puput Maryati', 'Perempuan', '1997-09-09', 'Kota Bekasi'),
(134, 'APS', 'Elvina Usamah', 'Laki-laki', '2005-01-07', 'Depok'),
(135, 'APS', 'Gatra Prima Saptono', 'Perempuan', '1996-07-14', 'Tangerang'),
(136, 'APS', 'Arsipatra Pardi Latupono S.IP', 'Perempuan', '2008-07-30', 'Kota Bekasi'),
(137, 'APS', 'Queen Nova Mayasari S.Sos', 'Laki-laki', '1998-09-08', 'Kota Bekasi'),
(138, 'APS', 'Ozy Damanik', 'Perempuan', '1989-10-24', 'Tangerang'),
(139, 'APS', 'Maya Andriani', 'Laki-laki', '2000-08-15', 'Jakarta Selatan'),
(140, 'APS', 'Wani Zizi Wulandari M.M.', 'Laki-laki', '2006-02-04', 'Depok'),
(141, 'APS', 'Pranawa Prabowo', 'Laki-laki', '1999-01-23', 'Jakarta Timur'),
(142, 'APS', 'Irfan Kala Wibowo', 'Laki-laki', '1994-10-22', 'Tangerang'),
(143, 'APS', 'Mahfud Maheswara S.Pd', 'Laki-laki', '2003-02-16', 'Jakarta Selatan'),
(144, 'APS', 'Banawa Maheswara M.Pd', 'Laki-laki', '2010-11-02', 'Jakarta Selatan'),
(145, 'APS', 'Irfan Ade Prasetyo S.Pt', 'Laki-laki', '1992-10-18', 'Tangerang'),
(146, 'APS', 'Warta Garang Zulkarnain S.E.', 'Perempuan', '1992-10-03', 'Jakarta Selatan'),
(147, 'APS', 'Suci Pratiwi', 'Laki-laki', '1972-05-18', 'Kota Bekasi'),
(148, 'APS', 'Ibrahim Pangestu', 'Laki-laki', '2003-07-17', 'Tangerang'),
(149, 'APS', 'Ani Umi Lestari', 'Perempuan', '1979-04-30', 'Tangerang'),
(150, 'APS', 'Ade Mutia Lestari M.Ak', 'Laki-laki', '1977-02-03', 'Jakarta Timur'),
(151, 'APS', 'Maida Novitasari S.Pt', 'Laki-laki', '2006-03-17', 'Kota Bekasi'),
(152, 'APS', 'Dewi Safitri', 'Laki-laki', '1994-02-28', 'Jakarta Timur'),
(153, 'APS', 'Fitriani Ella Widiastuti M.Pd', 'Perempuan', '1988-08-07', 'Kota Bekasi'),
(154, 'APS', 'Padma Widya Nasyidah M.M.', 'Laki-laki', '1993-06-28', 'Kota Bekasi'),
(155, 'APS', 'Talia Gawati Nurdiyanti', 'Laki-laki', '1974-01-19', 'Tangerang'),
(156, 'APS', 'Uli Wahyuni', 'Laki-laki', '1972-05-02', 'Jakarta Timur'),
(157, 'APS', 'Victoria Astuti', 'Perempuan', '1990-01-14', 'Bogor'),
(158, 'APS', 'Lukita Prayoga', 'Perempuan', '2012-01-06', 'Kota Bekasi'),
(159, 'APS', 'Elvina Laksita', 'Perempuan', '2017-03-17', 'Jakarta Timur'),
(160, 'APS', 'Dacin Asmianto Prabowo', 'Laki-laki', '2012-09-29', 'Kota Bekasi'),
(161, 'APS', 'Baktiadi Sihombing', 'Laki-laki', '1988-05-28', 'Depok'),
(162, 'APS', 'Jumari Daniswara Hardiansyah', 'Laki-laki', '2007-04-13', 'Depok'),
(163, 'APS', 'Karta Rudi Marbun S.Pt', 'Laki-laki', '2021-10-30', 'Depok'),
(164, 'APS', 'Indah Laksmiwati S.E.I', 'Laki-laki', '1998-09-28', 'Bogor'),
(165, 'APS', 'Aris Manullang', 'Perempuan', '2000-01-13', 'Jakarta Timur'),
(166, 'APS', 'Anggabaya Wibowo S.Psi', 'Perempuan', '1997-08-22', 'Bogor'),
(167, 'APS', 'Cakrabuana Situmorang', 'Perempuan', '1997-10-25', 'Bogor'),
(168, 'APS', 'Kunthara Budiman', 'Laki-laki', '2000-02-27', 'Bogor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_buku`
--

CREATE TABLE `dt_buku` (
  `id_buku` int(11) NOT NULL,
  `kode_buku` varchar(120) DEFAULT NULL,
  `judul_buku` varchar(150) NOT NULL,
  `pengarang` varchar(150) DEFAULT NULL,
  `id_penerbit` int(11) DEFAULT NULL,
  `tahun_terbit` year(4) DEFAULT NULL,
  `jumlah_buku` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dt_buku`
--

INSERT INTO `dt_buku` (`id_buku`, `kode_buku`, `judul_buku`, `pengarang`, `id_penerbit`, `tahun_terbit`, `jumlah_buku`) VALUES
(14, 'BPS', 'Pemrograman PHP', 'Ahmad S', 19, 2022, 20),
(15, 'BPS', 'Naruto Shipudden 0', 'Nrima Hutasoit S.Ked', 15, 1983, 55),
(16, 'BPS', 'One Piece 1', 'Raden Saragih S.Ked', 19, 2014, 50),
(17, 'BPS', 'Pemrograman Web 2', 'Gada Wahyudin', 15, 2000, 55),
(18, 'BPS', 'One Piece 3', 'Fathonah Laila Oktaviani S.Sos', 18, 1972, 27),
(19, 'BPS', 'Naruto Shipudden 4', 'Cici Melani M.M.', 18, 1983, 24),
(20, 'BPS', 'Pemrograman Web 0', 'Bella Andriani M.M.', 18, 1973, 56),
(21, 'BPS', 'Pemrograman Web 1', 'Empluk Atma Sitompul S.E.', 17, 1974, 35),
(23, 'BPS', 'Naruto Shipudden 3', 'Gaiman Bala Dabukke', 17, 1979, 40),
(24, 'BPS24', 'Pemrograman Web 4', 'Bambang Xanana', 15, 2006, 35),
(25, 'BPS', 'Pemrograman Web 5', 'Bagus Saefullah', 15, 2010, 35),
(26, 'BPS', 'One Piece 6', 'Harimurti Rajasa', 19, 2019, 22),
(27, 'BPS', 'Pemrograman Web 7', 'Balapati Nababan', 16, 1982, 38),
(28, 'BPS', 'Naruto Shipudden 8', 'Ayu Suryatmi', 15, 2007, 54),
(29, 'BPS', 'Pemrograman Web 9', 'Amalia Maryati', 19, 2000, 41),
(30, 'BPS', 'Naruto Shipudden 10', 'Wirda Yolanda S.H.', 16, 1987, 33),
(31, 'BPS', 'One Piece 11', 'Aurora Hartati', 19, 2009, 53),
(32, 'BPS', 'Pemrograman Web 12', 'Vega Nugroho', 17, 1988, 56),
(33, 'BPS', 'Naruto Shipudden 13', 'Estiono Waluyo', 19, 1993, 50),
(34, 'BPS', 'One Piece 14', 'Balijan Irwan Pranowo S.Ked', 17, 2005, 50),
(35, 'BPS', 'Naruto Shipudden 15', 'Ulya Elisa Mulyani S.E.', 18, 2023, 57),
(36, 'BPS', 'Pemrograman Web 16', 'Cindy Mulyani', 17, 1984, 20),
(37, 'BPS', 'Naruto Shipudden 17', 'Sadina Gilda Namaga S.Farm', 18, 1995, 34),
(38, 'BPS', 'One Piece 18', 'Genta Usada', 17, 2000, 55),
(39, 'BPS', 'Naruto Shipudden 19', 'Sakura Safitri S.Pd', 15, 2011, 29);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_peminjam`
--

CREATE TABLE `dt_peminjam` (
  `id_peminjam` int(11) NOT NULL,
  `kode_pinjam` varchar(100) NOT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `keterlambatan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dt_peminjam`
--

INSERT INTO `dt_peminjam` (`id_peminjam`, `kode_pinjam`, `id_buku`, `id_anggota`, `tanggal_pinjam`, `tanggal_kembali`, `keterlambatan`) VALUES
(1, 'PMPSI', 14, 91, '2023-10-14', '2023-10-21', '0 Hari'),
(2, 'PMPSI', 17, 83, '2023-10-14', '2023-10-21', '0 Hari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_penerbit`
--

CREATE TABLE `dt_penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `kode_penerbit` varchar(120) DEFAULT NULL,
  `nama_penerbit` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dt_penerbit`
--

INSERT INTO `dt_penerbit` (`id_penerbit`, `kode_penerbit`, `nama_penerbit`) VALUES
(15, 'PPS', 'UD Rahayu (Persero) Tbk'),
(16, 'PPS', 'UD Permadi Prasetya (Persero) Tbk'),
(17, 'PPS', 'UD Yuniar Tbk'),
(18, 'PPS', 'UD Handayani Lestari (Persero) Tbk'),
(19, 'PPS', 'UD Utami Tbk'),
(20, 'PPS', 'Perum Nurdiyanti (Persero) Tbk'),
(21, 'PPS', 'Yayasan Zulkarnain (Persero) Tbk'),
(22, 'PPS', 'Yayasan Waluyo Halim (Persero) Tbk'),
(23, 'PPS', 'PD Rajata Samosir'),
(26, 'PPS', 'Yayasan Wulandari Prastuti Tbk'),
(27, 'PPS', 'PD Handayani'),
(28, 'PPS', 'Perum Susanti Zulaika'),
(29, 'PPS', 'Fa Wulandari Fujiati'),
(30, 'PPS', 'PT Wahyudin Prakasa (Persero) Tbk'),
(31, 'PPS', 'UD Kurniawan'),
(32, 'PPS', 'Fa Palastri Nurdiyanti Tbk'),
(33, 'PPS', 'Perum Hidayanto Tbk'),
(34, 'PPS', 'PJ Pangestu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dt_admin`
--
ALTER TABLE `dt_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `dt_anggota`
--
ALTER TABLE `dt_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `dt_buku`
--
ALTER TABLE `dt_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `dt_buku_FK` (`id_penerbit`);

--
-- Indeks untuk tabel `dt_peminjam`
--
ALTER TABLE `dt_peminjam`
  ADD PRIMARY KEY (`id_peminjam`),
  ADD KEY `dt_peminjam_FK` (`id_anggota`),
  ADD KEY `dt_peminjam_FK_1` (`id_buku`);

--
-- Indeks untuk tabel `dt_penerbit`
--
ALTER TABLE `dt_penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dt_admin`
--
ALTER TABLE `dt_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dt_anggota`
--
ALTER TABLE `dt_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT untuk tabel `dt_buku`
--
ALTER TABLE `dt_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `dt_peminjam`
--
ALTER TABLE `dt_peminjam`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dt_penerbit`
--
ALTER TABLE `dt_penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dt_buku`
--
ALTER TABLE `dt_buku`
  ADD CONSTRAINT `dt_buku_FK` FOREIGN KEY (`id_penerbit`) REFERENCES `dt_penerbit` (`id_penerbit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dt_peminjam`
--
ALTER TABLE `dt_peminjam`
  ADD CONSTRAINT `dt_peminjam_FK` FOREIGN KEY (`id_anggota`) REFERENCES `dt_anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dt_peminjam_FK_1` FOREIGN KEY (`id_buku`) REFERENCES `dt_buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
