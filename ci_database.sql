-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Jul 2019 pada 07.02
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_admin`
--

CREATE TABLE `akun_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun_admin`
--

INSERT INTO `akun_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `waktu` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` varchar(40) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_wa`
--

CREATE TABLE `data_wa` (
  `ID_MSG` bigint(255) NOT NULL,
  `NO_WA` varchar(300) NOT NULL DEFAULT '',
  `FORMAT_WA` varchar(900) DEFAULT NULL,
  `ISI_WA` varchar(900) DEFAULT NULL,
  `TGL_INPUT` datetime DEFAULT NULL,
  `TGL_KIRIM` datetime DEFAULT NULL,
  `STATUS` varchar(100) DEFAULT NULL,
  `VAR_1` varchar(300) DEFAULT NULL,
  `VAR_2` varchar(300) DEFAULT NULL,
  `VAR_3` varchar(300) DEFAULT NULL,
  `VAR_4` varchar(300) DEFAULT NULL,
  `VAR_5` varchar(300) DEFAULT NULL,
  `VAR_6` varchar(300) DEFAULT NULL,
  `VAR_7` varchar(300) DEFAULT NULL,
  `VAR_8` varchar(300) DEFAULT NULL,
  `VAR_9` varchar(300) DEFAULT NULL,
  `VAR_10` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_wa`
--

INSERT INTO `data_wa` (`ID_MSG`, `NO_WA`, `FORMAT_WA`, `ISI_WA`, `TGL_INPUT`, `TGL_KIRIM`, `STATUS`, `VAR_1`, `VAR_2`, `VAR_3`, `VAR_4`, `VAR_5`, `VAR_6`, `VAR_7`, `VAR_8`, `VAR_9`, `VAR_10`) VALUES
(2147483670, '+6283861938125', 'Test', 'Test', '2019-07-07 21:52:32', '2019-07-07 21:52:51', 'SENT', 'ANGGORO', 'Pemalang', 'Wiroto', 'Udinus', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `penyelenggara` varchar(50) NOT NULL,
  `nama_event` varchar(50) NOT NULL,
  `tempat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(200) NOT NULL,
  `sumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `tanggal`, `gambar`, `judul`, `isi`, `sumber`) VALUES
(25, '2019-04-01', 'logosmanta.png', 'SMA Negeri 1 Tayu', 'Kami berharap, dengan adanya media layanan informasi situs ini semoga dapat mewujudkan hubungan silaturrahmi yang lebih erat lagi, menambah wawasan, mempermudah dan mempercepat proses dalam mendapatka', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `tempat_lahir` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `asal_sekolah` varchar(25) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `tahun_lulus` int(4) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kode_daftar` int(4) NOT NULL,
  `nem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama`, `gender`, `tempat_lahir`, `tgl_lahir`, `alamat`, `asal_sekolah`, `no_hp`, `tahun_lulus`, `username`, `password`, `kode_daftar`, `nem`) VALUES
(50, 'Anggoro Brojo S', 'L', 'Pemalang', '1998-11-09', 'Gongseng', 'SMP 3 Pemalang', '083861938125', 2016, 'anggorobrojos51', 'e10adc3949ba59abbe56e057f20f883e', 7536, 30),
(51, 'Galang Kurniawan', 'L', 'Pati', '1998-02-09', 'Gunungwungkal', 'SMP 1 TAYU', '081326571618', 2016, 'galangkurniawan64', 'e10adc3949ba59abbe56e057f20f883e', 6866, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_admin`
--
ALTER TABLE `akun_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_wa`
--
ALTER TABLE `data_wa`
  ADD PRIMARY KEY (`ID_MSG`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun_admin`
--
ALTER TABLE `akun_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `data_wa`
--
ALTER TABLE `data_wa`
  MODIFY `ID_MSG` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
