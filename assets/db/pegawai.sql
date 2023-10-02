-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 03:26 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `hak_akses` enum('O','A','P') NOT NULL DEFAULT 'P'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `username`, `password`, `nama_lengkap`, `hak_akses`) VALUES
(1, 'Oppa05KOM', 'Oppa05KOM', 'Admin Program', 'A'),
(3, 'admin', 'admin', 'Admin User', 'O'),
(12, 'kefas', 'kefas', 'Kefas Oswald M', 'O'),
(13, 'herwana', 'herwana', 'Herwana.R', 'O'),
(14, 'richard', 'richard', 'Richard Noah', 'O'),
(15, 'user', 'user', 'User', 'P'),
(16, 'operator', 'operator', 'Operator User', 'O'),
(17, 'adh', 'adh', 'ADH', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `tb_apar`
--

CREATE TABLE `tb_apar` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_apar` int(5) NOT NULL,
  `lokasi` varchar(225) NOT NULL,
  `kondisi_visual` varchar(225) NOT NULL,
  `arah_jarum` varchar(255) NOT NULL,
  `kondisi_segel` varchar(225) NOT NULL,
  `kondisi_isi` varchar(225) NOT NULL,
  `kondisi_hose` varchar(255) NOT NULL,
  `kondisi_handle` varchar(255) NOT NULL,
  `lock_pin` varchar(255) NOT NULL,
  `kondisi_apar` varchar(255) NOT NULL,
  `rambu_apar` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_apar`
--

INSERT INTO `tb_apar` (`id`, `tanggal`, `no_apar`, `lokasi`, `kondisi_visual`, `arah_jarum`, `kondisi_segel`, `kondisi_isi`, `kondisi_hose`, `kondisi_handle`, `lock_pin`, `kondisi_apar`, `rambu_apar`, `keterangan`, `foto`) VALUES
(8, '2023-02-01', 1, 'Gedung UT School', 'Baik', 'Posisi HIJAU', 'Rusak', 'Rusak', 'Baik', 'Rusak', 'Baik', 'Rusak', 'Baik', 'Aman', ''),
(9, '2023-02-02', 2, 'Workshop', 'Rusak', 'Posisi HIJAU', 'Baik', 'Rusak', 'Baik', 'Rusak', 'Baik', 'Baik', 'Rusak', 'Mantap', 'engineering.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bbm`
--

CREATE TABLE `tb_bbm` (
  `id` int(11) NOT NULL,
  `nama` varchar(39) NOT NULL,
  `no_pol` varchar(11) NOT NULL,
  `jenis_bbm` varchar(15) NOT NULL,
  `jumlah_liter` varchar(5) NOT NULL,
  `harga_bbm` int(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bbm`
--

INSERT INTO `tb_bbm` (`id`, `nama`, `no_pol`, `jenis_bbm`, `jumlah_liter`, `harga_bbm`, `tanggal`) VALUES
(33, 'Richard', 'DD 1234 BA', '10000', '32', 320000, '2023-01-26'),
(34, 'Kefas Oswald Mokorimban', 'DD 1234 YG', '16500', '20', 330000, '2023-01-27'),
(36, 'Kefas Oswald Mokorimban', 'DD 1234 YG', '13050', '15', 195750, '2023-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hydrant`
--

CREATE TABLE `tb_hydrant` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_hydrant` int(5) NOT NULL,
  `lokasi` varchar(225) NOT NULL,
  `kondisi_hose` varchar(255) NOT NULL,
  `kondisi_nozzle` varchar(255) NOT NULL,
  `stand_hydrant` varchar(225) NOT NULL,
  `lock_pin` varchar(255) NOT NULL,
  `kebocoran` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hydrant`
--

INSERT INTO `tb_hydrant` (`id`, `tanggal`, `no_hydrant`, `lokasi`, `kondisi_hose`, `kondisi_nozzle`, `stand_hydrant`, `lock_pin`, `kebocoran`, `keterangan`, `foto`) VALUES
(3, '2023-02-01', 1, 'Home', 'Baik', 'Rusak', 'Rusak', 'Rusak', 'Baik', 'Rusak', ''),
(4, '2023-02-12', 2, 'Lokasinya dimana', 'Baik', 'Rusak', 'Rusak', 'Baik', 'Baik', 'Mantap', 'engineering.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id` int(11) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `asal_kampus` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `masuk_pkl` date NOT NULL,
  `keluar_pkl` date NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id`, `nama_mhs`, `asal_kampus`, `jurusan`, `masuk_pkl`, `keluar_pkl`, `no_telp`, `alamat`, `email`) VALUES
(1, 'Kefas Oswald Mokorimban', 'STMIK Profesional Makassar', 'Sistem Informasi (SI)', '2022-04-04', '2022-06-04', '087771220505', 'JL. Lasuloro dlm III No. 68 Blok IV, Perumnas Antang', 'kefas.oswald5@gmail.com'),
(2, 'Herwana .R', 'STMIK Profesional Makassar', 'Sistem Informasi (SI)', '2022-04-04', '2022-06-04', '085256338448', 'JL. Pampang IV', 'Herwana.anha@gmail.com'),
(3, 'Richard Noah Massie', 'STMIK Profesional Makassar', 'Sistem Informasi (SI)', '2023-01-27', '0000-00-00', '08', 'Jl. Bangau', 'uybs@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_medik`
--

CREATE TABLE `tb_medik` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `penggunaan` varchar(100) NOT NULL,
  `dimensi` varchar(70) NOT NULL,
  `nama_obat` varchar(225) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `kondisi` varchar(25) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_medik`
--

INSERT INTO `tb_medik` (`id`, `tanggal`, `penggunaan`, `dimensi`, `nama_obat`, `satuan`, `jumlah`, `kondisi`, `keterangan`) VALUES
(14, '2023-02-01', 'Tes', '2', 'Pembalut Segitiga', 'Pcs', 3, 'Baik', 'Mantap'),
(15, '0000-00-00', 'Kendaraan / A2B', '16,5 x 12,5 x 6', 'Gulung Kassa 5 cm', 'Roll', 2, 'Rusak', 'Tidak Aman');

-- --------------------------------------------------------

--
-- Table structure for table `tb_medik2`
--

CREATE TABLE `tb_medik2` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `penggunaan` varchar(100) NOT NULL,
  `dimensi` varchar(70) NOT NULL,
  `nama_obat` varchar(225) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `kondisi` varchar(25) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_medik2`
--

INSERT INTO `tb_medik2` (`id`, `tanggal`, `penggunaan`, `dimensi`, `nama_obat`, `satuan`, `jumlah`, `kondisi`, `keterangan`) VALUES
(4, '2023-02-02', 'Home', '16,5', 'Pembalut Segitiga', 'Pcs', 5, 'Rusak', 'Mantap'),
(5, '0000-00-00', 'Portable FAK (5-10 Orang)', '30 x 24 x 18', 'Perban 10 cm', 'Pcs', 5, 'Tidak Ada', 'Tidak Aman');

-- --------------------------------------------------------

--
-- Table structure for table `tb_medik3`
--

CREATE TABLE `tb_medik3` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `penggunaan` varchar(100) NOT NULL,
  `dimensi` varchar(70) NOT NULL,
  `nama_obat` varchar(225) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `kondisi` varchar(25) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_medik3`
--

INSERT INTO `tb_medik3` (`id`, `tanggal`, `penggunaan`, `dimensi`, `nama_obat`, `satuan`, `jumlah`, `kondisi`, `keterangan`) VALUES
(4, '2023-02-02', 'Portable FAK (2-5 Orang)', '27 x 19 x 22', 'Plaster Cepat Biasa', 'Roll', 7, 'Baik', 'Mantap');

-- --------------------------------------------------------

--
-- Table structure for table `tb_medik4`
--

CREATE TABLE `tb_medik4` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `penggunaan` varchar(100) NOT NULL,
  `dimensi` varchar(70) NOT NULL,
  `nama_obat` varchar(225) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `kondisi` varchar(25) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_medik4`
--

INSERT INTO `tb_medik4` (`id`, `tanggal`, `penggunaan`, `dimensi`, `nama_obat`, `satuan`, `jumlah`, `kondisi`, `keterangan`) VALUES
(4, '2023-02-01', 'Area Resiko Basah', '28 x 32 x 11,5', 'Emergency Blanket', 'Botol', 3, 'Baik', 'Mantap');

-- --------------------------------------------------------

--
-- Table structure for table `tb_medik5`
--

CREATE TABLE `tb_medik5` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `penggunaan` varchar(100) NOT NULL,
  `dimensi` varchar(70) NOT NULL,
  `nama_obat` varchar(225) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `kondisi` varchar(25) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_medik6`
--

CREATE TABLE `tb_medik6` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `penggunaan` varchar(100) NOT NULL,
  `nama_obat` varchar(225) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `jumlah2` int(5) NOT NULL,
  `jumlah3` int(5) NOT NULL,
  `kondisi` varchar(25) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_report`
--

CREATE TABLE `tb_report` (
  `id` int(11) NOT NULL,
  `name_vendor` varchar(255) NOT NULL,
  `account_vendor` int(20) NOT NULL,
  `no_invoice` varchar(50) NOT NULL,
  `date_invoice` date NOT NULL,
  `aging_fp` int(10) NOT NULL,
  `amount` int(20) NOT NULL,
  `text` varchar(255) NOT NULL,
  `receipt_adm` date NOT NULL,
  `receipt_user` date NOT NULL,
  `back_adm` date NOT NULL,
  `aging` int(10) NOT NULL,
  `lt` int(5) NOT NULL,
  `post_date` date NOT NULL,
  `lt_2` int(5) NOT NULL,
  `doc_num` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `payment` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_report`
--

INSERT INTO `tb_report` (`id`, `name_vendor`, `account_vendor`, `no_invoice`, `date_invoice`, `aging_fp`, `amount`, `text`, `receipt_adm`, `receipt_user`, `back_adm`, `aging`, `lt`, `post_date`, `lt_2`, `doc_num`, `tanggal`, `status`, `payment`) VALUES
(1, 'PT Nusantara Abadi Jaya', 80002932, '1242/FNAJ/X/2020', '2023-02-07', 565, 31600800, 'Tag Job Supply Juli 2022', '2023-02-01', '2023-02-03', '2023-02-06', 550, 4, '2023-02-06', 0, 123456789, '2023-02-07', 'Aman', 13000000),
(2, 'CV Cahaya Nur', 80004678, 'CN UT 59-XII-2020', '2023-02-14', 777, 12500000, 'Pengiriman tire ke Pomala cust SJS', '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, '0000-00-00', 0, 0, '0000-00-00', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_apar`
--
ALTER TABLE `tb_apar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_bbm`
--
ALTER TABLE `tb_bbm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_hydrant`
--
ALTER TABLE `tb_hydrant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_medik`
--
ALTER TABLE `tb_medik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_medik2`
--
ALTER TABLE `tb_medik2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_medik3`
--
ALTER TABLE `tb_medik3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_medik4`
--
ALTER TABLE `tb_medik4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_medik5`
--
ALTER TABLE `tb_medik5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_medik6`
--
ALTER TABLE `tb_medik6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_report`
--
ALTER TABLE `tb_report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_apar`
--
ALTER TABLE `tb_apar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_bbm`
--
ALTER TABLE `tb_bbm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_hydrant`
--
ALTER TABLE `tb_hydrant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_medik`
--
ALTER TABLE `tb_medik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_medik2`
--
ALTER TABLE `tb_medik2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_medik3`
--
ALTER TABLE `tb_medik3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_medik4`
--
ALTER TABLE `tb_medik4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_medik5`
--
ALTER TABLE `tb_medik5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_medik6`
--
ALTER TABLE `tb_medik6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_report`
--
ALTER TABLE `tb_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
