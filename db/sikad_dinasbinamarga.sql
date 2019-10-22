-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2017 at 07:27 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikad_dinasbinamarga`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen_apel`
--

CREATE TABLE `absen_apel` (
  `id_absen_keseluruhan` int(11) NOT NULL,
  `NIP` varchar(22) DEFAULT NULL,
  `id_absen_apel` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `absen_istirahat`
--

CREATE TABLE `absen_istirahat` (
  `Id_absen_keseluruhan` int(11) DEFAULT NULL,
  `NIP` varchar(22) DEFAULT NULL,
  `id_absen_istirahat` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `absen_keseluruhan`
--

CREATE TABLE `absen_keseluruhan` (
  `Id_absen_ keseluruhan` int(11) DEFAULT NULL,
  `Id_absen_apel` int(11) DEFAULT NULL,
  `Id_absen_pagi` int(11) DEFAULT NULL,
  `Id_absen_istirahat` int(11) DEFAULT NULL,
  `Id_absen_setelah_istirahat` int(11) DEFAULT NULL,
  `Id_absen_pulang` int(11) DEFAULT NULL,
  `Id_absen_tugas_apel` int(11) DEFAULT NULL,
  `Id_absen_pelatihan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `absen_pagi`
--

CREATE TABLE `absen_pagi` (
  `Id_absen_keseluruhan` int(11) DEFAULT NULL,
  `NIP` varchar(22) DEFAULT NULL,
  `id_absen_pagi` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `absen_pelatihan`
--

CREATE TABLE `absen_pelatihan` (
  `Id_absen_keseluruhan` int(11) DEFAULT NULL,
  `NIP` varchar(22) DEFAULT NULL,
  `id_absen_pelatihan` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `absen_pulang`
--

CREATE TABLE `absen_pulang` (
  `Id_absen_keseluruhan` int(11) DEFAULT NULL,
  `NIP` varchar(22) DEFAULT NULL,
  `id_absen_pulang` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `absen_setelah_istirahat`
--

CREATE TABLE `absen_setelah_istirahat` (
  `Id_absen_keseluruhan` int(11) DEFAULT NULL,
  `NIP` varchar(11) DEFAULT NULL,
  `id_absen_setelah_istirahat` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `absen_tugas_apel`
--

CREATE TABLE `absen_tugas_apel` (
  `Id_absen_keseluruhan` int(11) DEFAULT NULL,
  `NIP` varchar(22) DEFAULT NULL,
  `id_absen_tugas_apel` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form_surat`
--

CREATE TABLE `form_surat` (
  `id_form_surat` int(11) NOT NULL,
  `nama_surat` varchar(60) DEFAULT NULL,
  `perihal_surat` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_surat`
--

INSERT INTO `form_surat` (`id_form_surat`, `nama_surat`, `perihal_surat`) VALUES
(2, 'surat permohonan.pdf', 'D:/localserver/htdocs/sikad_dbm/pages/form_surat/filepdf/surat permohonan.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `Nama` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `NIP` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `JK` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Tempat_Lahir` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Golongan` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Pangkat_Terakhir` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `TMT` date NOT NULL,
  `No_SK` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `Tanggal_SK` date NOT NULL,
  `Jenjang_Pendidikan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Jurusan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Gaji` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`Nama`, `NIP`, `JK`, `Tempat_Lahir`, `Tanggal_Lahir`, `Golongan`, `Pangkat_Terakhir`, `TMT`, `No_SK`, `Tanggal_SK`, `Jenjang_Pendidikan`, `Jurusan`, `Status`, `Gaji`, `created_at`, `updated_at`) VALUES
('melati', '1112312312', 'Laki-Laki', 'pekanbaru', '2017-01-02', 'IV/e', 'Pembina Utama', '2017-01-04', '1231230980', '2017-01-03', 'SD', 'tif', 'aktif', '9000000', '2017-01-15 08:53:16', '2017-01-15 08:53:16'),
('angga', '11451105', 'Laki-Laki', '', '0000-00-00', 'IV/e', 'Pembina Utama', '0000-00-00', '', '0000-00-00', 'SD', '', 'aktif', '', '2017-01-17 05:02:33', '2017-01-17 05:02:33'),
('ahmarul abdi', '123123123123', 'Laki-Laki', 'sdfsndf', '0002-02-02', 'IV/e', 'Pembina Utama', '0002-02-02', '241244', '0002-02-03', 'D1/D2', 'grggr', 'aktif', '500000', '2017-01-15 14:03:45', '2017-01-15 14:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `username` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `NIP` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `hak_akses` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`, `NIP`, `gambar`, `email`, `hak_akses`, `created_at`, `updated_at`) VALUES
('abdi', 'abdi', '123123123123', '20140717_132040.jpg', 'asd@adf', 'pegawai', '2017-01-16 05:12:00', '2017-01-16 05:12:00'),
('admin12', 'admin', '1112312312', '20141005_094849.jpg', 'admin@student', 'administrator', '2017-01-12 19:33:34', '2017-01-12 19:33:34');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat_keluar` int(11) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `no_surat` varchar(100) DEFAULT NULL,
  `jenis_surat` varchar(30) DEFAULT NULL,
  `tanggal_surat` date DEFAULT NULL,
  `perihal` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `no_surat` varchar(100) DEFAULT NULL,
  `jenis_surat` varchar(30) DEFAULT NULL,
  `tanggal_surat` date DEFAULT NULL,
  `perihal` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surat_permohonan`
--

CREATE TABLE `surat_permohonan` (
  `jenis_surat` varchar(60) DEFAULT NULL,
  `tanggal_surat` date DEFAULT NULL,
  `Id_form_surat` int(11) DEFAULT NULL,
  `NIP` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen_apel`
--
ALTER TABLE `absen_apel`
  ADD PRIMARY KEY (`id_absen_apel`);

--
-- Indexes for table `absen_istirahat`
--
ALTER TABLE `absen_istirahat`
  ADD PRIMARY KEY (`id_absen_istirahat`);

--
-- Indexes for table `absen_pagi`
--
ALTER TABLE `absen_pagi`
  ADD PRIMARY KEY (`id_absen_pagi`);

--
-- Indexes for table `absen_pelatihan`
--
ALTER TABLE `absen_pelatihan`
  ADD PRIMARY KEY (`id_absen_pelatihan`);

--
-- Indexes for table `absen_pulang`
--
ALTER TABLE `absen_pulang`
  ADD PRIMARY KEY (`id_absen_pulang`);

--
-- Indexes for table `absen_setelah_istirahat`
--
ALTER TABLE `absen_setelah_istirahat`
  ADD PRIMARY KEY (`id_absen_setelah_istirahat`);

--
-- Indexes for table `absen_tugas_apel`
--
ALTER TABLE `absen_tugas_apel`
  ADD PRIMARY KEY (`id_absen_tugas_apel`);

--
-- Indexes for table `form_surat`
--
ALTER TABLE `form_surat`
  ADD PRIMARY KEY (`id_form_surat`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIP`),
  ADD UNIQUE KEY `pegawai_nip_unique` (`NIP`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_surat`
--
ALTER TABLE `form_surat`
  MODIFY `id_form_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
