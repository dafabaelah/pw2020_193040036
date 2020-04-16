-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 07:30 PM
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
-- Table structure for table `pw_193040036`
--

CREATE TABLE `pw_193040036` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pw_193040036`
--

INSERT INTO `pw_193040036` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Daffa Akhdan Fadhillah', '193040036', '193040036@mail.unpas.ac.id', 'Teknik Informatika', 'daffa.jpg'),
(2, 'David Dalil Tauhid Syabila', '193040002', '193040002@mail.unpas.ac.id', 'Teknik Informatika', 'david.jpg'),
(3, 'Aji Fattah Adriansyah Darajat', '193040012', '193040012@mail.unpas.ac.id', 'Teknik Informatika', 'ajifat.jpg'),
(4, 'Anjara Darojatun Nisa', '193040006', '193040006@mail.unpas.ac.id', 'Teknik Informatika', 'anjara.jpg'),
(5, 'Agung Gumelar', '193040008', '193040008@mail.unpas.ac.id', 'Teknik Informatika', 'agung.jpg'),
(6, 'Muhammad Alwi Ramadhan', '193040029', '193040029@mail.unpas.ac.id', 'Teknik Informatika', 'alwi.jpg'),
(7, 'Yusril Ismail Azi', '193040024', '193040024@mail.unpas.ac.id', 'Teknik Informatika', 'yusril.jpg'),
(8, 'Silvi Fitriawati', '193040028', '193040028@mail.unpas.ac.id', 'Teknik Informatika', 'silvi.jpg'),
(9, 'Mohamad Rizki Ramdani', '193040016', '193040016@mail.unpas.ac.id', 'Teknik Informatika', 'mrr.jpg'),
(10, 'Taufiq Hidayat', '193040019', '193040019@mail.unpas.ac.id', 'Teknik Informatika', 'taufiq.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pw_193040036`
--
ALTER TABLE `pw_193040036`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pw_193040036`
--
ALTER TABLE `pw_193040036`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
