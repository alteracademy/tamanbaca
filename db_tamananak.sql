-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Nov 2018 pada 09.04
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alter_priv_tamananak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acara`
--

CREATE TABLE `acara` (
  `id` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `statuss` enum('Aktif','Tidak Aktif','','') NOT NULL DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `acara`
--

INSERT INTO `acara` (`id`, `judul`, `isi`, `gambar`, `statuss`) VALUES
(1, 'Kumpul Penulis', '<p>\r\n	Test Acara 1</p>\r\n', '9f81a-support.jpg', 'Aktif'),
(2, 'Berbagi Cerita', '<p>\r\n	Test Berbagi Cerita</p>\r\n', '0a577-support.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `gambar` varchar(255) NOT NULL DEFAULT 'default.png',
  `theme` varchar(20) NOT NULL DEFAULT 'sb_admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `nama`, `status`, `gambar`, `theme`) VALUES
(2, 'admin@admin.com', 'admin', 'admin', 1, 'default.png', 'sb_admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cerita`
--

CREATE TABLE `cerita` (
  `id` int(5) NOT NULL,
  `kategori` tinyint(1) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `statuss` enum('Aktif','Tidak Aktif','','') NOT NULL DEFAULT 'Aktif',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `karangan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cerita`
--

INSERT INTO `cerita` (`id`, `kategori`, `judul`, `isi`, `gambar`, `statuss`, `created_at`, `karangan`) VALUES
(1, 1, 'Dongeng Satu', '<p>\r\n	Test Dongeng 1</p>\r\n', 'bd4d8-revolution.jpg', 'Aktif', '2018-09-16 17:00:00', 0),
(2, 1, 'Dongeng Dua', '<p>\r\n	Test Dongeng 2</p>\r\n', 'd1bbc-185x185-img-1.jpg', 'Aktif', '2018-09-16 17:00:00', 0),
(3, 2, 'Cerpen Satu', '<p>\r\n	Test&nbsp;Cerpen Satu</p>\r\n', '7e265-shop.jpg', 'Aktif', '2018-09-16 17:00:00', 0),
(4, 2, 'Cerpen Dua', '<p>\r\n	Test&nbsp;Cerpen Dua</p>\r\n', '1ad30-fully-responsive.jpg', 'Aktif', '2018-09-16 17:00:00', 0),
(5, 3, 'Puisi Satu', '<p>\r\n	Test&nbsp;Puisi Satu</p>\r\n', '68858-shop.jpg', 'Aktif', '2018-09-16 17:00:00', 0),
(6, 3, 'Puisi Dua', '<p>\r\n	Test&nbsp;Puisi Dua</p>\r\n', 'e0665-color.jpg', 'Aktif', '2018-09-16 17:00:00', 0),
(7, 0, 'Test Dongeng User', 'Isi Test User', '', 'Aktif', '0000-00-00 00:00:00', 12),
(8, 1, 'Test Dongeng Input User', 'Test 3', '', 'Aktif', '0000-00-00 00:00:00', 12),
(9, 2, 'Test Cerpen USer', 'Testing User iNput', '', 'Aktif', '2018-09-16 20:09:18', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` tinyint(1) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'Dongeng'),
(2, 'Cerpen'),
(3, 'Puisi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `telp` varchar(13) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `password`, `email`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `telp`, `jenis_kelamin`) VALUES
(1, 'Dani', 'asdf', 'dani@gmail.com', '', '', '0000-00-00', '0', 'Laki-laki'),
(12, 'Dani', 'asdf', 'daniesimanjuntak@gmail.com', 'Depok', 'Medan', '0000-00-00', '', ''),
(13, 'Yovicha', 'asdf123', 'yovicha@gmail.com', '', '', '0000-00-00', '0', 'Laki-laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran_pengguna`
--

CREATE TABLE `saran_pengguna` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saran_pengguna`
--

INSERT INTO `saran_pengguna` (`id`, `nama`, `email`, `isi`, `tanggal`) VALUES
(1, 'Dani', 'daniesimanjuntak@gmail.com', 'Tes', '2018-09-17 08:08:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tjm_menu`
--

CREATE TABLE `tjm_menu` (
  `id` int(11) NOT NULL,
  `parent_menu` int(11) NOT NULL DEFAULT '1',
  `nama_menu` varchar(50) NOT NULL,
  `url_menu` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `urutan` tinyint(3) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `type` enum('Admin') NOT NULL DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tjm_menu`
--

INSERT INTO `tjm_menu` (`id`, `parent_menu`, `nama_menu`, `url_menu`, `icon`, `urutan`, `status`, `type`) VALUES
(1, 1, 'root', '/', '', 0, 0, 'Admin'),
(2, 1, 'dashboard', 'admin/dashboard', 'fa fa-fw fa-dashboard', 1, 1, 'Admin'),
(3, 1, 'User Admin', 'admin/useradmin', 'fa fa-users', 99, 1, 'Admin'),
(4, 1, 'Menu', 'admin/menu', 'fa fa-gear', 100, 1, 'Admin'),
(30, 1, 'Kumpulan Cerita', 'admin/cerita', 'glyphicon glyphicon-th-large', 2, 1, 'Admin'),
(31, 1, 'Acara', 'admin/acara', 'glyphicon glyphicon-th-list', 3, 1, 'Admin'),
(37, 1, 'Slider', 'admin/slider', '', 4, 0, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cerita`
--
ALTER TABLE `cerita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saran_pengguna`
--
ALTER TABLE `saran_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tjm_menu`
--
ALTER TABLE `tjm_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cerita`
--
ALTER TABLE `cerita`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `saran_pengguna`
--
ALTER TABLE `saran_pengguna`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tjm_menu`
--
ALTER TABLE `tjm_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
