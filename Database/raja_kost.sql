-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 03:34 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raja_kost`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_kamar`
--

CREATE TABLE `fasilitas_kamar` (
  `id_fasilitas_kamar` int(11) NOT NULL,
  `kulkas` varchar(100) NOT NULL,
  `mesin_cuci` varchar(100) NOT NULL,
  `sofa` varchar(100) NOT NULL,
  `wifi` varchar(100) NOT NULL,
  `kasur` varchar(100) NOT NULL,
  `lemari` varchar(100) NOT NULL,
  `tv` varchar(100) NOT NULL,
  `dapur` varchar(200) NOT NULL,
  `lantai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas_kamar`
--

INSERT INTO `fasilitas_kamar` (`id_fasilitas_kamar`, `kulkas`, `mesin_cuci`, `sofa`, `wifi`, `kasur`, `lemari`, `tv`, `dapur`, `lantai`) VALUES
(1, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 1),
(2, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_kost`
--

CREATE TABLE `fasilitas_kost` (
  `id_fasilitas_kost` int(11) NOT NULL,
  `wifi` varchar(100) NOT NULL,
  `listrik` varchar(100) NOT NULL,
  `kasur` varchar(100) NOT NULL,
  `air` varchar(100) NOT NULL,
  `lemari` varchar(100) NOT NULL,
  `kursi` varchar(100) NOT NULL,
  `tv` varchar(100) NOT NULL,
  `water_heater` varchar(100) NOT NULL,
  `dapur` varchar(100) NOT NULL,
  `kamar_mandi_luar` varchar(100) NOT NULL,
  `kamar_mandi_dalam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas_kost`
--

INSERT INTO `fasilitas_kost` (`id_fasilitas_kost`, `wifi`, `listrik`, `kasur`, `air`, `lemari`, `kursi`, `tv`, `water_heater`, `dapur`, `kamar_mandi_luar`, `kamar_mandi_dalam`) VALUES
(1, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(2, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(168, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `foto_kamar`
--

CREATE TABLE `foto_kamar` (
  `id_foto_kamar` int(11) NOT NULL,
  `foto_kamar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto_kamar`
--

INSERT INTO `foto_kamar` (`id_foto_kamar`, `foto_kamar`) VALUES
(1, ''),
(3, 'file_1584089330.jpg'),
(4, 'file_1584089531.jpg'),
(5, 'file_1584089750.jpg'),
(6, 'file_1584089789.jpg'),
(7, 'file_1584089824.jpg'),
(8, 'file_1584089861.jpg'),
(9, 'file_1584092002.jpg'),
(10, 'file_1584093619.jpg'),
(168, 'file_1584175748.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `foto_kost`
--

CREATE TABLE `foto_kost` (
  `id_foto_kost` int(11) NOT NULL,
  `foto` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto_kost`
--

INSERT INTO `foto_kost` (`id_foto_kost`, `foto`) VALUES
(168, 'file_15841754412.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_pembayaran`
--

CREATE TABLE `konfirmasi_pembayaran` (
  `id_konfirmasi_pembayaran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_bank` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `foto_bukti` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_faktur` int(11) NOT NULL,
  `tgl_pembayaran` int(11) NOT NULL,
  `bank_ke` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kost_tersewa`
--

CREATE TABLE `kost_tersewa` (
  `id_kost` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_tersewa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_bank`
--

CREATE TABLE `t_bank` (
  `id_bank` int(11) NOT NULL,
  `nama_rek` varchar(100) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `no_rek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_faq`
--

CREATE TABLE `t_faq` (
  `id_faq` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `soal` varchar(100) NOT NULL,
  `jawaban` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_image`
--

CREATE TABLE `t_image` (
  `id_image` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_index`
--

CREATE TABLE `t_index` (
  `id_index` int(11) NOT NULL,
  `id_kontak` int(11) NOT NULL,
  `id_tentang` int(11) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `id_image` int(11) NOT NULL,
  `id_faq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_kamar`
--

CREATE TABLE `t_kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe_kost` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `perhari` int(11) NOT NULL,
  `perminggu` int(11) NOT NULL,
  `perbulan` int(11) NOT NULL,
  `pertahun` int(11) NOT NULL,
  `lantai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_kontak`
--

CREATE TABLE `t_kontak` (
  `id_kontak` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp_web` int(11) NOT NULL,
  `email_web` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_kost`
--

CREATE TABLE `t_kost` (
  `id_kost` int(11) NOT NULL,
  `id_fasilitas_kost` int(11) NOT NULL,
  `id_foto_kost` int(11) NOT NULL,
  `id_rumah_sakit` int(11) NOT NULL,
  `id_super_market` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_rumah_makan` int(11) NOT NULL,
  `nama_kost` varchar(100) NOT NULL,
  `tahun_dibangun` int(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `tipe_kost` varchar(100) NOT NULL,
  `alamat_kost` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_kost`
--

INSERT INTO `t_kost` (`id_kost`, `id_fasilitas_kost`, `id_foto_kost`, `id_rumah_sakit`, `id_super_market`, `id_sekolah`, `id_rumah_makan`, `nama_kost`, `tahun_dibangun`, `deskripsi`, `tipe_kost`, `alamat_kost`) VALUES
(168, 168, 168, 0, 0, 0, 0, 'dfdfdsfsd', 1988, 'xccjhgfadfljsdglfg', 'dsfsf', 'wdefe');

-- --------------------------------------------------------

--
-- Table structure for table `t_lantai`
--

CREATE TABLE `t_lantai` (
  `id_lantai` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `id_fasilitas_kamar` int(11) NOT NULL,
  `id_foto_kamar` int(11) NOT NULL,
  `denah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_lantai`
--

INSERT INTO `t_lantai` (`id_lantai`, `id_kamar`, `id_fasilitas_kamar`, `id_foto_kamar`, `denah`) VALUES
(90, 0, 0, 0, 'file_1584088166.jpg'),
(91, 0, 0, 0, 'file_1584175181'),
(92, 0, 0, 0, 'file_1584175441');

-- --------------------------------------------------------

--
-- Table structure for table `t_login`
--

CREATE TABLE `t_login` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto_user` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_login`
--

INSERT INTO `t_login` (`id_user`, `nama`, `no_telp`, `password`, `foto_user`, `status`) VALUES
(17, 'pepeh ngentod', 87, '123456', '', 2),
(18, 'loli', 123, '123456', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_pemesanan`
--

CREATE TABLE `t_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `tgl_masuk` int(11) NOT NULL,
  `durasi_sewa` int(11) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `foto_ktp` varchar(100) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_rumah_makan`
--

CREATE TABLE `t_rumah_makan` (
  `id_rumah_makan` int(11) NOT NULL,
  `nama_tempat` varchar(200) NOT NULL,
  `jarak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_rumah_makan`
--

INSERT INTO `t_rumah_makan` (`id_rumah_makan`, `nama_tempat`, `jarak`) VALUES
(86, 'asdsd', 45);

-- --------------------------------------------------------

--
-- Table structure for table `t_rumah_sakit`
--

CREATE TABLE `t_rumah_sakit` (
  `id_rumah_sakit` int(11) NOT NULL,
  `nama_tempat` varchar(100) NOT NULL,
  `jarak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_rumah_sakit`
--

INSERT INTO `t_rumah_sakit` (`id_rumah_sakit`, `nama_tempat`, `jarak`) VALUES
(108, 'asdsd', 45);

-- --------------------------------------------------------

--
-- Table structure for table `t_sekolah`
--

CREATE TABLE `t_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_tempat` varchar(100) NOT NULL,
  `jarak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_sekolah`
--

INSERT INTO `t_sekolah` (`id_sekolah`, `nama_tempat`, `jarak`) VALUES
(106, 'asdsd', 45);

-- --------------------------------------------------------

--
-- Table structure for table `t_super_market`
--

CREATE TABLE `t_super_market` (
  `id_super_market` int(11) NOT NULL,
  `nama_tempat` varchar(100) NOT NULL,
  `jarak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_super_market`
--

INSERT INTO `t_super_market` (`id_super_market`, `nama_tempat`, `jarak`) VALUES
(107, 'asdsd', 45);

-- --------------------------------------------------------

--
-- Table structure for table `t_tentang`
--

CREATE TABLE `t_tentang` (
  `id_tentang` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `konten` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  ADD PRIMARY KEY (`id_fasilitas_kamar`);

--
-- Indexes for table `fasilitas_kost`
--
ALTER TABLE `fasilitas_kost`
  ADD PRIMARY KEY (`id_fasilitas_kost`);

--
-- Indexes for table `foto_kamar`
--
ALTER TABLE `foto_kamar`
  ADD PRIMARY KEY (`id_foto_kamar`);

--
-- Indexes for table `foto_kost`
--
ALTER TABLE `foto_kost`
  ADD PRIMARY KEY (`id_foto_kost`);

--
-- Indexes for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD PRIMARY KEY (`id_konfirmasi_pembayaran`),
  ADD KEY `id_user` (`id_user`,`id_bank`,`id_pemesanan`),
  ADD KEY `id_bank` (`id_bank`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `kost_tersewa`
--
ALTER TABLE `kost_tersewa`
  ADD PRIMARY KEY (`id_tersewa`),
  ADD KEY `id_kamar` (`id_kamar`,`id_pemesanan`,`id_user`,`id_tersewa`),
  ADD KEY `id_kost` (`id_kost`),
  ADD KEY `id_kost_2` (`id_kost`),
  ADD KEY `kost_tersewa_ibfk_3` (`id_pemesanan`),
  ADD KEY `kost_tersewa_ibfk_4` (`id_user`);

--
-- Indexes for table `t_bank`
--
ALTER TABLE `t_bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `t_faq`
--
ALTER TABLE `t_faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `t_image`
--
ALTER TABLE `t_image`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `t_index`
--
ALTER TABLE `t_index`
  ADD PRIMARY KEY (`id_index`),
  ADD KEY `id_kontak` (`id_kontak`,`id_tentang`,`id_image`,`id_faq`),
  ADD KEY `id_tentang` (`id_tentang`),
  ADD KEY `id_image` (`id_image`),
  ADD KEY `id_kontak_2` (`id_kontak`,`id_tentang`,`id_image`,`id_faq`),
  ADD KEY `id_faq` (`id_faq`);

--
-- Indexes for table `t_kamar`
--
ALTER TABLE `t_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `t_kontak`
--
ALTER TABLE `t_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `t_kost`
--
ALTER TABLE `t_kost`
  ADD PRIMARY KEY (`id_kost`),
  ADD KEY `id_fasilitas` (`id_fasilitas_kost`),
  ADD KEY `id_foto_kost` (`id_foto_kost`),
  ADD KEY `id_rumah_sakit` (`id_rumah_sakit`),
  ADD KEY `id_super_market` (`id_super_market`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_rumah_makan` (`id_rumah_makan`),
  ADD KEY `id_foto_kost_2` (`id_foto_kost`),
  ADD KEY `id_foto_kost_3` (`id_foto_kost`);

--
-- Indexes for table `t_lantai`
--
ALTER TABLE `t_lantai`
  ADD PRIMARY KEY (`id_lantai`),
  ADD KEY `id_kamar` (`id_kamar`,`id_fasilitas_kamar`,`id_foto_kamar`),
  ADD KEY `id_fasilitas_kamar` (`id_fasilitas_kamar`),
  ADD KEY `id_foto_kamar` (`id_foto_kamar`);

--
-- Indexes for table `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `t_pemesanan`
--
ALTER TABLE `t_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `t_rumah_makan`
--
ALTER TABLE `t_rumah_makan`
  ADD PRIMARY KEY (`id_rumah_makan`);

--
-- Indexes for table `t_rumah_sakit`
--
ALTER TABLE `t_rumah_sakit`
  ADD PRIMARY KEY (`id_rumah_sakit`);

--
-- Indexes for table `t_sekolah`
--
ALTER TABLE `t_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `t_super_market`
--
ALTER TABLE `t_super_market`
  ADD PRIMARY KEY (`id_super_market`);

--
-- Indexes for table `t_tentang`
--
ALTER TABLE `t_tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  MODIFY `id_fasilitas_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fasilitas_kost`
--
ALTER TABLE `fasilitas_kost`
  MODIFY `id_fasilitas_kost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `foto_kamar`
--
ALTER TABLE `foto_kamar`
  MODIFY `id_foto_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `foto_kost`
--
ALTER TABLE `foto_kost`
  MODIFY `id_foto_kost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  MODIFY `id_konfirmasi_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kost_tersewa`
--
ALTER TABLE `kost_tersewa`
  MODIFY `id_tersewa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_bank`
--
ALTER TABLE `t_bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_faq`
--
ALTER TABLE `t_faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_image`
--
ALTER TABLE `t_image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_index`
--
ALTER TABLE `t_index`
  MODIFY `id_index` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_kamar`
--
ALTER TABLE `t_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `t_kontak`
--
ALTER TABLE `t_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_kost`
--
ALTER TABLE `t_kost`
  MODIFY `id_kost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `t_lantai`
--
ALTER TABLE `t_lantai`
  MODIFY `id_lantai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `t_pemesanan`
--
ALTER TABLE `t_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_rumah_makan`
--
ALTER TABLE `t_rumah_makan`
  MODIFY `id_rumah_makan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `t_rumah_sakit`
--
ALTER TABLE `t_rumah_sakit`
  MODIFY `id_rumah_sakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `t_sekolah`
--
ALTER TABLE `t_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `t_super_market`
--
ALTER TABLE `t_super_market`
  MODIFY `id_super_market` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `t_tentang`
--
ALTER TABLE `t_tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD CONSTRAINT `konfirmasi_pembayaran_ibfk_1` FOREIGN KEY (`id_bank`) REFERENCES `t_bank` (`id_bank`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `konfirmasi_pembayaran_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `t_login` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `konfirmasi_pembayaran_ibfk_3` FOREIGN KEY (`id_pemesanan`) REFERENCES `t_pemesanan` (`id_pemesanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kost_tersewa`
--
ALTER TABLE `kost_tersewa`
  ADD CONSTRAINT `kost_tersewa_ibfk_1` FOREIGN KEY (`id_kost`) REFERENCES `t_kost` (`id_kost`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kost_tersewa_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `t_kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kost_tersewa_ibfk_3` FOREIGN KEY (`id_pemesanan`) REFERENCES `t_pemesanan` (`id_pemesanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kost_tersewa_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `t_login` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_index`
--
ALTER TABLE `t_index`
  ADD CONSTRAINT `t_index_ibfk_1` FOREIGN KEY (`id_kontak`) REFERENCES `t_kontak` (`id_kontak`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_index_ibfk_2` FOREIGN KEY (`id_tentang`) REFERENCES `t_tentang` (`id_tentang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_index_ibfk_3` FOREIGN KEY (`id_image`) REFERENCES `t_image` (`id_image`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_index_ibfk_4` FOREIGN KEY (`id_faq`) REFERENCES `t_faq` (`id_faq`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
