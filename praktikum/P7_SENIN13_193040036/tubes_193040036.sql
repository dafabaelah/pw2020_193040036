-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 07:28 AM
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
-- Database: `tubes_193040036`
--

-- --------------------------------------------------------

--
-- Table structure for table `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(11) NOT NULL COMMENT 'id = nomer',
  `gambar` varchar(200) NOT NULL COMMENT 'gambar',
  `nama_barang` varchar(100) NOT NULL COMMENT 'nama barang',
  `nama_penemu` varchar(100) NOT NULL COMMENT 'nama penemu',
  `tahun_ditemukan` char(30) NOT NULL COMMENT 'tahun ditemukan',
  `asal` varchar(150) NOT NULL COMMENT 'daerah asal barang ditemukan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elektronik`
--

INSERT INTO `elektronik` (`id`, `gambar`, `nama_barang`, `nama_penemu`, `tahun_ditemukan`, `asal`) VALUES
(1, 'bohlam.jpg', 'Bohlam', 'Humphry Davy', '1802', 'Inggris'),
(2, 'telepon.jpg', 'Telepon', 'Antonio Santi Giuseppe Meucci', '1871', 'Staten Island, New York, Amerika'),
(3, 'radio.jpg', 'Radio', 'Guglielmo Marconi', '1895-1909', 'Bologna, Itali'),
(4, 'tv.jpg', 'Televisi', 'John Logie Baird', '1923', 'Helensburgh, Skotlandia'),
(5, 'komp1.jpg', 'Komputer pertama', 'Charles Babbage', '1791-1871', 'London'),
(6, 'kulkas.jpg', 'Kulkas', 'Jacob Perkins dan Karl Von Linden', '1784', 'Skotlandia'),
(7, 'hp.jpg', 'Smartphone', 'IBM dan BellSouth', '1990', 'Las Vegas, Amerika Serikat'),
(8, 'kipas.jpeg', 'Kipas angin', 'Schuyler Skaats Wheeler', '1882', 'Amerika'),
(9, 'mesincuci.jpg', 'Mesin Cuci', 'Jacob Christian Schäffer', '1797', 'Jerman'),
(10, 'vacuum.jpg', 'vacuum cleaner', 'James Murray Spangler', '1907', 'Amerika'),
(11, 'laptop.jpg', 'Laptop', 'Adam Osborne', '1961', 'Inggris'),
(12, 'mos.jpg', 'Mouse', 'Douglas Engelbart', '1963', 'Stanford Research institute, amerika');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'dafa', '$2y$10$XUZ2vBjz13zpRDHPWKGvoeSx/QeSyftQYmVp8LzjdON2Z/DxFEhXu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id = nomer', AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
