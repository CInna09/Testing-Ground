-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 22, 2025 at 03:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_tamu`
--

CREATE TABLE `daftar_tamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_tamu`
--

INSERT INTO `daftar_tamu` (`id`, `nama`, `email`, `tujuan`, `alamat`, `no_wa`, `pesan`, `tanggal`) VALUES
(1, 'sumarwan', 'adadad@mail.com', 'dadada', '', '', 'dadi lah', '2025-06-20 20:41:23'),
(2, 'sasasas', 'asas@mail.com', 'asasas', 'bumi gede', '135153535', 'fafff', '2025-06-22 11:58:09'),
(3, 'da3252', '35252@mail.com', 'adda', 'dad', 'ada235253', 'dadadda', '2025-06-22 11:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Avedora', 'Ave', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(2, 'wili', 'wiliam', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(7, 'nasar', 'nasar', '02265f3b103e00cf186146947d23df90', 'user'),
(12, 'adnin', 'adnan', 'd1a0a9e9391af09e978c4c3d11711e75', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_tamu`
--
ALTER TABLE `daftar_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_tamu`
--
ALTER TABLE `daftar_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
