-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2024 at 02:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_umkm_pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(9, 'adminWisata', '$2y$10$B61NxAORR89Em/RC7tD77Ol9Fyw7/rClNKPaqXul7.kHwKjoXl7X.');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nama_pemesan` varchar(125) NOT NULL,
  `nomor_hp` varchar(12) NOT NULL,
  `tanggal_mula_wisata` date NOT NULL,
  `tanggal_pesanan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `durasi_wisata` int(11) NOT NULL,
  `id_paket_wisata` int(11) NOT NULL,
  `layanan_penginapan` varchar(1) NOT NULL,
  `layanan_transportasi` varchar(1) NOT NULL,
  `layanan_makanan` varchar(1) NOT NULL,
  `jumlah_peserta` int(11) NOT NULL,
  `harga_paket` decimal(10,2) NOT NULL,
  `jumlah_tagihan` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nama_pemesan`, `nomor_hp`, `tanggal_mula_wisata`, `tanggal_pesanan`, `durasi_wisata`, `id_paket_wisata`, `layanan_penginapan`, `layanan_transportasi`, `layanan_makanan`, `jumlah_peserta`, `harga_paket`, `jumlah_tagihan`) VALUES
(36, 'Reza KT', '4832748734', '2024-08-15', '2024-08-15 12:35:24', 1, 4, '', '', '3', 1, 570000.00, 570000.00),
(37, 'Andra Arumdalu', '08963476372', '2024-08-15', '2024-08-15 12:44:58', 2, 2, '', '', '3', 1, 570000.00, 1140000.00),
(38, 'Andra Arumdalu', '08963476372', '2024-08-15', '2024-08-15 12:55:49', 2, 6, '', '', '3', 1, 470000.00, 940000.00),
(39, 'Kucing', '43432434', '2024-08-15', '2024-08-15 12:56:19', 1, 1, '', '', '3', 3, 570000.00, 1710000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
