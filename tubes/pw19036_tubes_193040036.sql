-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 08:19 AM
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
-- Database: `pw19036_tubes_193040036`
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
  `asal` varchar(150) NOT NULL COMMENT 'daerah asal barang ditemukan',
  `deskripsi` text NOT NULL COMMENT 'deskripsi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elektronik`
--

INSERT INTO `elektronik` (`id`, `gambar`, `nama_barang`, `nama_penemu`, `tahun_ditemukan`, `asal`, `deskripsi`) VALUES
(1, 'bohlam.jpg', 'Bohlam', 'Humphry Davy', '1802', 'Inggris', 'Lampu pijar / bohlam adalah sumber cahaya buatan yg dihasilkan mlalui penyaluran arus listrik yg mlalui filamen yang kemudian memanas dan menghasilkan cahaya.'),
(2, 'telepon.jpg', 'Telepon', 'Antonio Santi Giuseppe Meucci', '1871', 'Staten Island, New York, Amerika', 'Telepon adalah alat komunikasi yang digunakan untuk menyampaikan pesan suara (terutama pesan yang berbentuk percakapan).'),
(3, 'radio.jpg', 'Radio', 'Guglielmo Marconi', '1895-1909', 'Bologna, Itali', 'Radio adalah salah satu benda elektronik yang sering disebut sebagai alat komunikasi.Menurut situs kbbi.web.id,radio adalah siaran(pengiriman) suara atau bunyi melalui udara.Tetapi pada umumnya radio digunakan untuk mendengarkan musik dari berbagai saluran radio.'),
(4, 'tv.jpg', 'Televisi', 'John Logie Baird', '1923', 'Helensburgh, Skotlandia', 'Televisi (TV) adalah sebuah media telekomunikasi terkenal yang berfungsi sebagai penerima siaran gambar bergerak beserta suara, baik itu yang monokrom (hitam-putih) maupun berwarna.'),
(5, 'komp1.jpg', 'Komputer pertama', 'Charles Babbage', '1791-1871', 'London', 'Komputer adalah alat yang dipakai untuk mengolah data menurut prosedur yang telah dirumuskan. Kata computer pada awalnya dipergunakan untuk menggambarkan orang yang perkerjaannya melakukan perhitungan aritmetika, dengan atau tanpa alat bantu, tetapi arti kata ini kemudian dipindahkan kepada mesin itu sendiri.'),
(6, 'kulkas.jpg', 'Kulkas', 'Jacob Perkins dan Karl Von Linden', '1784', 'Skotlandia', 'Kulkas atau lemari es atau lemari pendingin adalah sebuah alat rumah tangga listrik yang menggunakan refrigerasi (proses pendingin) untuk menolong pengawetan makanan.'),
(7, 'hp.jpg', 'Smartphone', 'IBM dan BellSouth', '1990', 'Las Vegas, Amerika Serikat', 'Smartphone adalah telepon genggam yang mempunyai kemampuan tingkat tinggi, kadang-kadang dengan fungsi yang menyerupai komputer. '),
(8, 'kipas.jpeg', 'Kipas angin', 'Schuyler Skaats Wheeler', '1882', 'Amerika', 'Kipas angin dipergunakan untuk menghasilkan angin. Fungsi yang umum adalah untuk pendingin udara, penyegar udara, ventilasi (exhaust fan), pengering (umumnya memakai komponen penghasil panas).'),
(9, 'mesincuci.jpg', 'Mesin Cuci', 'Jacob Christian Schäffer', '1797', 'Jerman', 'Mesin cuci adalah sebuah mesin yang dirancang untuk membersihkan pakaian dan tekstil rumah tangga lainnya seperti handuk dan sprei.'),
(10, 'vacuum.jpg', 'vacuum cleaner', 'James Murray Spangler', '1907', 'Amerika', 'Vacuum cleaner adalah alat yang menggunakan pompa udara, dan cara kerjanya dengan menghisap debu dan kotoran di lantai dan karpet.'),
(11, 'laptop.jpg', 'Laptop', 'Adam Osborne', '1961', 'Inggris', 'Laptop atau komputer jinjing adalah komputer bergerak yang berukuran relatif kecil dan ringan, beratnya berkisar dari 1–6 kg, tergantung pada ukuran, bahan, dan spesifikasi laptop tersebut.'),
(12, 'mos.jpg', 'Mouse', 'Douglas Engelbart', '1963', 'Stanford Research institute, amerika', 'Mouse komputer merupakan perangkat keras yang termasuk dalam golongan perangkat input (masukan). Fungsi mouse komputer adalah mengatur pergerakan kursor secara cepat, selain itu juga untuk memberikan suatu perintah dengan hanya menekan tombol pada mouse komputer.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL COMMENT 'Nama user',
  `email` varchar(150) NOT NULL COMMENT 'email user',
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `username`, `password`) VALUES
(2, 'Daffa Akhdan Fadhillah', '193040036.daffa@mail.unpas.ac.id', 'dafa', '$2y$10$XUZ2vBjz13zpRDHPWKGvoeSx/QeSyftQYmVp8LzjdON2Z/DxFEhXu'),
(3, 'admin', 'admin@penemuan.com', 'admin', '$2y$10$JJB7h7gr5GC4M0wv5aLhqu3aleblVUGuBHb61eciD8f2nW4P0qVFO'),
(5, 'Daffa af', 'dafabaelah12@gmail.com', 'dafabaelah12', '$2y$10$eDqG6MIrLK7OOcUr1LERwuqJQ2222hODGjumHSr9uW/zJNH.jg3F.'),
(6, 'daffa af', 'dafabaelah12@gmail.com', 'daffa', '$2y$10$Pppcra0Uh4bSjgTbO.1HiuldB2wPePwMwVQuTEN3x4mU3eqkIDaTG');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id = nomer', AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
