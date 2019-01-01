-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2019 at 10:56 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `admin_name` varchar(10) NOT NULL,
  `admin_pass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(200) NOT NULL,
  `judul_berita` varchar(300) NOT NULL,
  `deskripsi_berita` text NOT NULL,
  `img_berita` varchar(300) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `deskripsi_berita`, `img_berita`, `tanggal`) VALUES
(2, 'Kucing Persia', '<p>Ini adalah jenis kucing persia.</p>', 'k1.jpg', '2019-01-01 03:55:04'),
(5, 'Anjing Golden Retriever', '<p>ini adalah jenis anjing Golden retriever yang banyak diminati oleh pecinta anjing.</p>', 'a2.jpg', '2018-12-25 08:46:54'),
(7, 'Kucing Angora', '<p>ini kucing ku mana kucing mu?</p>', 'k2.jpg', '2019-01-01 09:33:07'),
(8, 'Anjing Maltese', '<p>ini coba-coba</p>', 'a1.jpg', '2019-01-01 09:34:05');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(255) NOT NULL,
  `nama_vol` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_vol`, `email`, `password`) VALUES
(3, 'pricil', 'pricilia@gmail.com', '123'),
(4, 'liza', 'liza@gmail.com', 'zia'),
(6, 'dhea', 'dheamahdavikia1999@gmail.com', 'popop');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id_vol` int(255) NOT NULL,
  `nama_vol` varchar(250) NOT NULL,
  `phone` int(13) NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(30) NOT NULL,
  `animal` varchar(3) NOT NULL,
  `animal_type` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id_vol`, `nama_vol`, `phone`, `address`, `email`, `animal`, `animal_type`, `date`, `note`) VALUES
(14, 'liza', 2147483647, 'jayalaksana', 'lalaliza@gmail.com', 'Dog', 'Dog - Poodle', '2018-12-25 00:00:00', 'qwerty'),
(22, 'pricil', 8765432, 'Jatibarang', 'pricilia@gmail.com', 'Dog', 'Dog - Poodle', '2018-12-30 00:00:00', 'haiii'),
(23, '', 0, '', '', '', '', '2019-01-01 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id_vol`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id_vol` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
