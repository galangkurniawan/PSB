-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 03:08 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `akun_admin`
--

CREATE TABLE `akun_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun_admin`
--

INSERT INTO `akun_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `waktu` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `email`, `password`, `token`, `waktu`, `status`) VALUES
(1, 'nur.aminnudin@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'd3ec1aee9e735fd773894c73509f2231', '2018-11-13', 'Belum Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` varchar(40) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `subjek`, `pesan`) VALUES
(1, 'amin nudin', 'nur.aminnudin@gmail.com', 'Complain', 'jgfjmhv  mhghgncg ghcfc'),
(2, 'ggwp nudin', 'noob@gmail.com', 'Complain', 'asdfasd asdgasf adsg'),
(3, 'dendi nudin', 'aminousgg@gmail.com', 'Complain', 'fxfgx nvcghcfg jfghcgf'),
(4, 'Si bla', 'reqtear@gmail.com', 'Complain', 'uasdfjb sadhfbjasdfb sakdhmfba'),
(5, 'a joko', 'a@gmail.com', 'aaa', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `penyelenggara` varchar(50) NOT NULL,
  `nama_event` varchar(50) NOT NULL,
  `tempat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `tanggal`, `penyelenggara`, `nama_event`, `tempat`) VALUES
(2, '2018-06-20', 'Miracle', 'Mengadakan sebuah lomba membuat Ai dari game dota ', 'Los Angeles'),
(3, '2018-07-04', 'Traveloka', 'Lomba Ngoding', 'Universitas Brawijaya'),
(4, '2018-07-04', 'Smk Esk ', 'Reoni angkatan 1995 Sekaligus HBH', 'Gedung Bahari'),
(5, '2018-09-04', ',nlk', 'kjn', 'kn');

-- --------------------------------------------------------

--
-- Table structure for table `news`
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
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `tanggal`, `gambar`, `judul`, `isi`, `sumber`) VALUES
(18, '2018-11-10', 'guru2.JPG', 'Peringatan Hari Pahlawan Tahun 2018', 'Tepat tanggal 10 November 2018 yang lalu, segenap keluarga besar SMK Swela  menyelenggarakan Upacara Bendera dalam rangka Peringatan Hari Pahlawan Tahun 2018. Upacara berlangsung khitmad di Lapangan S', 'SMK Swela'),
(19, '2018-07-01', 'guru31.jpg', 'Keberangkatan Tamatan Untuk Magang Ke Jepang', 'Hari ini, 01 Juli 2018 sebanyak 2 orang Alumni SMK Swela berpamitan untuk berangkat magang ke Jepang selama 3 tahun. Mereka adalah Izzudin dan Ahmad Adi Kuncoro yang ditempatkan di Kawaguchi Nainenki ', 'SMK Swela'),
(20, '2018-10-28', 'guru4.jpg', 'Upacara Hari Sumpah Pemuda Tahun 2018', 'Tanggal 28 Oktober 2018 yang lalu, segenap keluarga besar SMK Swela melaksanakan Upacara Hari Sumpah Pemuda yang ke-90 bertempat di lapangan sepak bola. Berkenan menjadi Inspektur Upacara adalah Kepal', 'SMK Swela'),
(21, '2018-11-06', 'jom-11.jpg', 'Kunjungan Dewan Pendidikan Kabupaten Jombang', 'Tanggal 06 November 2018 yang lalu telah bekunjung di kampus SMK Swela  rombongan Dewan Pendidikan Kabupaten Jombang. Rombongan terbagi menjadi beberapa kelompok dengan tujuan kunjungan masing-masing ', 'SMK Swela'),
(24, '2018-09-11', 'a1.jpg', 'Kunjungan SMP Negeri 42 Semarang Dalam Rangka Pend', 'Salah satu program SMP Negeri 42 Semarang adalah Pendidikan Luar Sekolah. Untuk kali ini pelaksanaan dilakukan di SMK Swela pada tanggal 06 November 2018. Adapaun kegitan tersebut bertujuan mengenalka', 'SMK Swela');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `tempat_lahir` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `asal_sekolah` varchar(25) NOT NULL,
  `tahun_lulus` int(4) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kode_daftar` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama`, `gender`, `tempat_lahir`, `tgl_lahir`, `alamat`, `asal_sekolah`, `tahun_lulus`, `username`, `password`, `kode_daftar`) VALUES
(9, 'Nur Amin Nudin', 'L', 'Tegal', '2018-07-02', 'asdgfadf afas', 'ewfsafa', 2015, 'nuraminnudin76', '827ccb0eea8a706c4c34a16891f84e7b', 1134),
(10, 'Nur Amin Nudin', 'L', 'ddsf', '2018-06-25', 'dfgsfdb dsgv', 'asdfasd', 2015, 'nuraminnudin31', '827ccb0eea8a706c4c34a16891f84e7b', 9732),
(13, 'Jablud haha', 'L', 'Semarang', '1999-05-04', 'fsdgsdfg fdgsdfg', 'dasgdfg dfg', 2015, 'jabludhaha49', '827ccb0eea8a706c4c34a16891f84e7b', 7493),
(14, 'Jablud h bro', 'L', 'Demak', '1998-05-11', 'asdfkjasdb asdkjfbasjkbf', 'asdf', 2015, 'jabludhbro89', '827ccb0eea8a706c4c34a16891f84e7b', 5362),
(15, 'Si Bla', 'P', 'Tegal', '2004-07-05', 'sa asvdsv asdvgs ', 'SD', 2015, 'sibla10', '827ccb0eea8a706c4c34a16891f84e7b', 6172),
(16, 'Nanda Nur Aida', 'P', 'Surabaya', '2000-05-10', 'Jl Sriwijaya', 'Smp 34 Surabaya', 2016, 'nandanuraida20', '827ccb0eea8a706c4c34a16891f84e7b', 4894),
(17, 'Supri', 'L', 'Brebes', '2001-05-07', 'Jl Manggis', 'Smp 15  Brebes', 2017, 'supri75', '827ccb0eea8a706c4c34a16891f84e7b', 4159),
(18, 'Si blu', 'L', 'Kupang', '2002-05-07', 'Kota Kupang', 'Smp 22 Kupang', 2016, 'siblu49', '827ccb0eea8a706c4c34a16891f84e7b', 5527),
(19, 'Badud Sri', 'P', 'Medan', '2000-07-04', 'Sri langka', 'Smp Srilangka', 2015, 'badudsri96', '827ccb0eea8a706c4c34a16891f84e7b', 8185),
(21, 'akjsf', 'L', 'kasj,f', '2018-09-05', 'alsdfnnl', 'lajksn', 2015, 'akjsf93', '827ccb0eea8a706c4c34a16891f84e7b', 7623),
(22, 'uuuiiij', 'L', 'fghj', '2018-08-26', 'chghvhh', 'gdd', 2017, 'uuuiiij61', '827ccb0eea8a706c4c34a16891f84e7b', 3568),
(23, 'Joko', 'L', 'Kudus', '2018-11-15', 'Kudus Kota', 'Smp 2 Bae', 2015, 'joko88', '9ba0009aa81e794e628a04b51eaf7d7f', 9591),
(24, 'adin', 'L', 'lupa', '2018-11-10', 'aa', 'aaaa', 2016, 'adin13', '0cc175b9c0f1b6a831c399e269772661', 3997),
(25, 'Deny Ditandio', 'L', 'Kuta', '2018-10-31', 'Kuta Bali', 'SMP Bali 2', 2016, 'denyditandio53', '202cb962ac59075b964b07152d234b70', 3326);

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
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
