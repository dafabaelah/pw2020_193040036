-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 01:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040036`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Daffa Akhdan Fadhillah', '193040036', '193040036@mail.unpas.ac.id', 'Teknik Informatika', 'l.png'),
(2, 'David Dalil Tauhid Syabila', '193040002', '193040002@mail.unpas.ac.id', 'Teknik Informatika', 'l.png'),
(3, 'Muhamad Rizky Fauzan', '193040014', '193040014@mail.unpas.ac.id', 'Teknik Informatika', 'l.png'),
(4, 'Anjara Darojatun Nisa', '193040006', '193040006@mail.unpas.ac.id', 'Teknik Informatika', 'p.png'),
(5, 'Agung Gumelar', '193040008', '193040008@mail.unpas.ac.id', 'Teknik Informatika', 'l.png'),
(6, 'Muhammad Alwi Ramadhan', '193040029', '193040029@mail.unpas.ac.id', 'Teknik Informatika', 'l.png'),
(7, 'Yusril Ismail Azi', '193040024', '193040024@mail.unpas.ac.id', 'Teknik Informatika', 'l.png'),
(8, 'Silvi Fitriawati', '193040028', '193040028@mail.unpas.ac.id', 'Teknik Informatika', 'p.png'),
(9, 'Mohamad Rizki Ramdani', '193040016', '193040016@mail.unpas.ac.id', 'Teknik Informatika', 'l.png'),
(10, 'Taufiq Hidayat', '193040019', '193040019@mail.unpas.ac.id', 'Teknik Informatika', 'l.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
