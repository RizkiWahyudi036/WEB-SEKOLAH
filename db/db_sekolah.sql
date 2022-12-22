-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 08:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '111'),
('rizki', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`nama`, `email`, `subject`, `pesan`) VALUES
('Rizki Wahyudi', 'rzwhy7122003@gmail.com', 'jg', 'iaid');

-- --------------------------------------------------------

--
-- Table structure for table `db_guru`
--

CREATE TABLE `db_guru` (
  `nip` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `mapel` varchar(30) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_guru`
--

INSERT INTO `db_guru` (`nip`, `nama`, `mapel`, `jk`, `alamat`) VALUES
(211501123, 'Handrizal', 'Basis Data', 'Pria', 'jl.pembangunan'),
(211501159, 'Agus Salim', 'Aljabar Liniear', 'Pria', 'Jl. HM JONI'),
(211501456, 'Henny', 'Pemograman Web', 'Wanita', 'jl. Pasar Setia Budi'),
(211501741, 'Dian Rahmawati', 'Dasar Pemograman', 'wanita', 'Jl. Dr. Mansyur'),
(211501749, 'Anandhini', 'Desain dan Analisis Algoritma', 'Wanita', 'JL.Medan Timur'),
(211501753, 'Melvani', 'Etika Profesi', 'Wanita', 'Jl. Abdulrahman'),
(211501789, 'Fauzan', 'Wirausaha Digital', 'Pria', 'J.kampung Lalang'),
(211501853, 'Jufri', 'Komunikasi Lintas Budaya', 'Pria', 'Jl.Medan Johor'),
(211501892, 'Heriance', 'Teknik Instalasi Komputer', 'Pria', 'JL.Bringin'),
(211501963, 'Dewi Sartika', 'Komputasi Numerik', 'Wani', 'Jl.kampung Keleng');

-- --------------------------------------------------------

--
-- Table structure for table `db_siswa`
--

CREATE TABLE `db_siswa` (
  `nisn` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_siswa`
--

INSERT INTO `db_siswa` (`nisn`, `nama`, `kelas`, `jk`, `alamat`) VALUES
(2338, 'Dimas', '12 MIPA 3', 'pria', 'Kisaran'),
(21140196, 'Pieter Tanoto', '11 TKJ', 'Wanita', 'JL. Abdul Hamid'),
(201401018, 'Rani Widya Astuti', '11 TKJ', 'Wanita', 'JL.Bringin'),
(211401004, 'Imanda Tamara', '11 TKJ 7', 'Wanita', 'JL. Padang Bulan'),
(211401024, 'Rizky Maulana Sembiring', '10 RPL', 'Pria', 'Jl. Prof.Dr. Hamka'),
(211401025, 'Tessa', '11 TKJ', 'Wanita', 'JL. Bandar Sono'),
(211401035, 'Putri Adriani', '11 RPL', 'Wanita', 'Jl. Abdulrahman'),
(211401036, 'Rizky Wahyudi', '11 TKJ', 'Pria', 'JL. Bandar Sono'),
(211401069, 'Harry', '10 RPL', 'Pria', 'JL.Medan Timur'),
(211401144, 'Mhd. Gilang', '10 RPL', 'Pria', 'jl.pembangunan'),
(2147483647, 'Wanda Maximoff', '10 MIPA 5', 'Wanita', 'Kisaran Timur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_guru`
--
ALTER TABLE `db_guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `db_siswa`
--
ALTER TABLE `db_siswa`
  ADD PRIMARY KEY (`nisn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
