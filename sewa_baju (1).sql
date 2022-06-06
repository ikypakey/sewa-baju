-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 12:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewa_baju`
--

-- --------------------------------------------------------

--
-- Table structure for table `baju`
--

CREATE TABLE `baju` (
  `id_baju` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `nama_baju` varchar(50) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `denda` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baju`
--

INSERT INTO `baju` (`id_baju`, `nama_kategori`, `nama_baju`, `ukuran`, `status`, `foto`, `harga`, `denda`) VALUES
(20, 'Baju Adat', 'Baju Adat Aceh', 'Dewasa', '1', 'adat-aceh3.png', '120000', '5000'),
(21, 'Baju Adat', 'Baju Adat Batak', 'Dewasa', '1', 'adat-batak.png', '120000', '5000'),
(22, 'Baju Adat', 'Baju Adat Abang None', 'Dewasa', '1', 'adat-abang-none.png', '120000', '5000'),
(23, 'Baju Adat', 'Baju Adat Koto Gadang', 'Dewasa', '1', 'adat_koto_gadang.png', '110000', '5000'),
(24, 'Baju Adat', 'Baju Adat Betawi', 'Dewasa', '1', 'adat-betawi.png', '125000', '5000'),
(25, 'Baju Adat', 'Baju Adat Bodo ', 'Dewasa', '1', 'adat-bodo-makassar.png', '115000', '5000'),
(26, 'Baju Adat', 'Baju Adat Dayak', 'Dewasa', '1', 'adat-dayak.png', '120000', '5000'),
(27, 'Baju Adat', 'Baju Adat Jawa Timur', 'Dewasa', '1', 'adat-jawa.png', '110000', '5000'),
(28, 'Baju Adat', 'Baju Adat Jogja', 'Dewasa', '1', 'adat-jogja.png', '110000', '5000'),
(29, 'Baju Adat', 'Baju Adat Lampung', 'Dewasa', '1', 'adat-lampung.png', '135000', '5000'),
(30, 'Baju Adat', 'Baju Adat Madura', 'Dewasa', '1', 'adat-madura.png', '120000', '5000'),
(31, 'Baju Adat', 'Baju Adat Maluku', 'Dewasa', '1', 'adat-maluku.png', '125000', '5000'),
(32, 'Baju Adat', 'Baju Adat Manado', 'Dewasa', '1', 'adat-manado.png', '120000', '5000'),
(33, 'Baju Adat', 'Baju Adat NTT', 'Dewasa', '1', 'adat-ntt.png', '130000', '5000'),
(34, 'Baju Adat', 'Baju Adat Padang', 'Dewasa', '1', 'adat-padang.png', '130000', '5000'),
(35, 'Baju Adat', 'Baju Adat Palembang', 'Dewasa', '1', 'adat-palembang.png', '130000', '5000'),
(36, 'Baju Adat', 'Baju Adat Papua', 'Dewasa', '1', 'adat-papua.png', '135000', '5000'),
(37, 'Baju Adat', 'Baju Adat Betawi', 'Anak-anak', '1', 'adat-betawi-anak.png', '80000', '5000'),
(38, 'Baju Adat', 'Baju Adat Dayak', 'Anak-anak', '1', 'adat-dayak-anak1.png', '80000', '5000'),
(39, 'Baju Adat', 'Baju Adat Gorontalo', 'Anak-anak', '1', 'adat-gorontalo-anak.png', '80000', '5000'),
(40, 'Baju Adat', 'Baju Adat Jawa Tengah', 'Anak-anak', '1', 'adat-jateng.png', '80000', '5000'),
(41, 'Baju Adat', 'Baju Adat Jawa Timur', 'Anak-anak', '1', 'adat-jawa-anak.png', '80000', '5000'),
(42, 'Baju Adat', 'Baju Adat Lampung', 'Anak-anak', '1', 'adat-lampung-anak.png', '80000', '5000'),
(43, 'Baju Adat', 'Baju Adat Palembang', 'Anak-anak', '1', 'adat-sulawesi-selatan.png', '80000', '5000'),
(44, 'Baju Nikah', 'Baju Nikah 1', 'Dewasa', '0', 'baju-nikah.png', '150000', '5000'),
(45, 'Baju Nikah', 'Baju Nikah 2', 'Dewasa', '1', 'baju-nikah2.png', '150000', '5000'),
(46, 'Baju Nikah', 'Baju Nikah 3', 'Dewasa', '1', 'baju-nikah3.png', '160000', '5000'),
(47, 'Baju Nikah', 'Baju Nikah 4', 'Dewasa', '1', 'baju-nikah4.png', '160000', '5000'),
(48, 'Baju Nikah', 'Baju Nikah 5', 'Dewasa', '1', 'baju-nikah5.png', '160000', '5000'),
(49, 'Baju Nikah', 'Baju Nikah 6', 'Dewasa', '1', 'baju-nikah6.png', '155000', '5000'),
(50, 'Baju Nikah', 'Baju Nikah 7', 'Dewasa', '1', 'baju-nikah7.png', '160000', '5000'),
(51, 'Baju Nikah', 'Baju Nikah 8', 'Dewasa', '1', 'baju-nikah8.png', '170000', '5000'),
(52, 'Baju Nikah', 'Baju Nikah 9', 'Dewasa', '1', 'baju-nikah9.png', '160000', '5000'),
(53, 'Baju Nikah', 'Baju Nikah 10', 'Dewasa', '1', 'baju-nikah10.png', '160000', '5000'),
(54, 'Baju Nikah', 'Baju Nikah 11', 'Dewasa', '1', 'baju-nikah11.png', '160000', '5000'),
(55, 'Baju Nikah', 'Baju Nikah 12', 'Dewasa', '1', 'baju-nikah12.png', '160000', '5000'),
(56, 'Baju Nikah', 'Baju Nikah 13', 'Dewasa', '1', 'baju-nikah13.png', '160000', '5000'),
(57, 'Baju Nikah', 'Baju Nikah 14', 'Dewasa', '1', 'baju-nikah14.png', '160000', '5000'),
(58, 'Baju Nikah', 'Baju Nikah 15', 'Dewasa', '1', 'baju-nikah15.png', '160000', '5000'),
(59, 'Baju Nikah', 'Baju Nikah 16', 'Dewasa', '1', 'baju-nikah16.png', '160000', '5000'),
(60, 'Baju Nikah', 'Baju Nikah 17', 'Dewasa', '1', 'baju-nikah17.png', '120000', '5000'),
(61, 'Baju Nikah', 'Baju Nikah 18', 'Dewasa', '1', 'baju-nikah18.png', '160000', '5000'),
(62, 'Baju Nikah', 'Baju Nikah 19', 'Dewasa', '1', 'baju-nikah19.png', '160000', '5000'),
(63, 'Baju Nikah', 'Baju Nikah 20', 'Dewasa', '1', 'baju-nikah20.png', '160000', '5000'),
(64, 'Baju Pesta', 'Baju Pesta/Kondangan Couple', 'Dewasa', '1', 'baju-kondangan.png', '150000', '5000'),
(65, 'Baju Pesta', 'Baju Pesta / Kondangan Couple', 'Dewasa', '1', 'baju-kondangan2.png', '15500', '5000'),
(66, 'Baju Pesta', 'Baju Pesta / Kondangan Couple ', 'Dewasa', '1', 'baju-kondangan3.png', '155000', '5000'),
(67, 'Baju Pesta', 'Baju Pesta / Kondangan Couple 4', 'Dewasa', '1', 'baju-kondangan4.png', '155000', '5000'),
(68, 'Baju Pesta', 'Baju Pesta / Kondangan Couple 5', 'Dewasa', '1', 'baju-kondangan5.png', '155000', '5000'),
(69, 'Baju Pesta', 'Baju Pesta / Kondangan Couple 6', 'Dewasa', '1', 'baju-kondangan6.png', '155000', '5000'),
(70, 'Baju Pesta', 'Baju Pesta / Kondangan Couple 7', 'Dewasa', '1', 'baju-kondangan7.png', '155000', '5000'),
(71, 'Baju Pesta', 'Baju Pesta / Kondangan Couple 8', 'Dewasa', '1', 'baju-kondangan8.png', '155000', '5000'),
(72, 'Baju Pesta', 'Baju Pesta / Kondangan Couple 9', 'Dewasa', '1', 'baju-kondangan9.png', '155000', '5000'),
(73, 'Baju Pesta', 'Baju Pesta / Kondangan Couple 10', 'Dewasa', '1', 'baju-kondangan10.png', '155000', '5000'),
(74, 'Baju Pesta', 'Baju Pesta / Kondangan Couple 11', 'Dewasa', '1', 'baju-kondangan11.png', '155000', '5000'),
(75, 'Baju Pesta', 'Baju Pesta / Kondangan Couple 12', 'Dewasa', '1', 'baju-kondangan12.png', '155000', '5000'),
(76, 'Baju Pesta', 'Baju Pesta / Kondangan Couple 13', 'Dewasa', '1', 'baju-kondangan13.png', '155000', '5000'),
(77, 'Baju Pesta', 'Baju Pesta / Kondangan Couple 14', 'Dewasa', '1', 'baju-kondangan14.png', '155000', '5000'),
(78, 'Baju Pesta', 'Baju Pesta / Kondangan Couple 15', 'Dewasa', '1', 'baju-kondangan15.png', '155000', '5000'),
(79, 'Baju Pesta', 'Baju Pesta / Kondangan Couple 16', 'Dewasa', '1', 'baju-kondangan16.png', '155000', '5000'),
(80, 'Kostum Anak', 'Kostum Anak Spiderman', 'Anak-anak', '1', 'kostum-anak.png', '90000', '5000'),
(81, 'Kostum Anak', 'Kostum Anak Spiderman', 'Anak-anak', '1', 'kostum-anak2.png', '90000', '5000'),
(82, 'Kostum Anak', 'Kostum Anak Thanos', 'Anak-anak', '1', 'kostum-anak3.png', '90000', '5000'),
(83, 'Kostum Anak', 'Kostum Black Panter', 'Anak-anak', '1', 'kostum-anak4.png', '90000', '5000'),
(84, 'Kostum Anak', 'Kostum Batman', 'Anak-anak', '1', 'kostum-anak5.png', '90000', '5000'),
(86, 'Kostum Anak', 'Kostum Ultraman', 'Anak-anak', '1', 'kostum-anak61.png', '90000', '5000'),
(87, 'Kostum Anak', 'Kostum Captain America', 'Anak-anak', '1', 'kostum-anak9.png', '90000', '5000'),
(88, 'Kostum Anak', 'Kostum Superman', 'Anak-anak', '1', 'kostum-anak8.png', '90000', '5000'),
(89, 'Kostum Anak', 'Kostum Spiderman Black', 'Anak-anak', '1', 'kostum-anak10.png', '90000', '5000'),
(90, 'Kostum Anak', 'Kostum Hulk', 'Anak-anak', '1', 'kostum-anak12.png', '90000', '5000'),
(91, 'Kostum Anak', 'Kostum Wonder Woman', 'Anak-anak', '1', 'kostum-anak13.png', '90000', '5000'),
(92, 'Kostum Anak', 'Kostum Santa', 'Anak-anak', '1', 'kostum-anak15.png', '80000', '5000'),
(93, 'Kostum Anak', 'Kostum Sapi', 'Anak-anak', '1', 'kostum-anak16.png', '80000', '5000'),
(94, 'Kostum Anak', 'Kostum Harimau', 'Anak-anak', '1', 'kostum-anak17.png', '80000', '5000'),
(95, 'Kostum Anak', 'Kostum Bajak Laut', 'Anak-anak', '1', 'kostum-anak18.png', '80000', '5000'),
(96, 'Kostum Anak', 'Kostum Penyihir', 'Anak-anak', '1', 'kostum-anak19.png', '80000', '5000'),
(98, 'Kostum Anak', 'Kostum Anak Zebra', 'Anak-anak', '1', 'kostum-anak201.png', '120000', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Baju Adat'),
(2, 'Kostum Anak'),
(4, 'Baju Nikah'),
(5, 'Baju Pesta');

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `id_penyewa` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `pilihan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`id_penyewa`, `nama`, `username`, `alamat`, `jenis_kelamin`, `no_telepon`, `no_ktp`, `password`, `pilihan_id`) VALUES
(1, 'Prasetya', 'prasetyafatkhur', 'trenggilis', 'Laki-laki', '08123456789', '32125364354352', '164361f78dbf22b529438ea4cc7f6496', 1),
(12, 'Fatkhur', 'fatkhur', 'Nggilis', 'Laki-laki', '08123456789', '32125364354352', 'da923a8c98effb7d141403b896a3196c', 2),
(17, 'Prassss', 'pras', 'trenggilis', 'Laki-laki', '0812345678', '24124124423', '164361f78dbf22b529438ea4cc7f6496', 2);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_sewa` int(11) NOT NULL,
  `id_penyewa` int(11) NOT NULL,
  `id_baju` int(11) NOT NULL,
  `tanggal_sewa` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga` varchar(10) NOT NULL,
  `denda` varchar(10) NOT NULL,
  `total_denda` varchar(20) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_sewa` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(30) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_sewa`, `id_penyewa`, `id_baju`, `tanggal_sewa`, `tanggal_kembali`, `harga`, `denda`, `total_denda`, `tanggal_pengembalian`, `status_pengembalian`, `status_sewa`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(50, 12, 44, '2021-02-16', '2021-02-17', '150000', '5000', '0', '0000-00-00', 'Belum Kembali', 'Belum Selesai', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baju`
--
ALTER TABLE `baju`
  ADD PRIMARY KEY (`id_baju`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`id_penyewa`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_sewa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baju`
--
ALTER TABLE `baju`
  MODIFY `id_baju` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `id_penyewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
