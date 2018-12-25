-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 10:14 PM
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
(2, 'Kucing Persia', '<p>Ini adalah jenis kucing persia.</p>', 'k1.jpg', '2018-12-25 08:41:26'),
(5, 'Anjing Golden Retriever', '<p>ini adalah jenis anjing Golden retriever yang banyak diminati oleh pecinta anjing.</p>', 'a2.jpg', '2018-12-25 08:46:54');

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
(2, 'Pricilia Dwi Widyaastari', 'pricil@gmail.com', '0808'),
(3, 'pricil', 'pricilia@gmail.com', '123'),
(4, 'liza', 'liza@gmail.com', 'zia'),
(6, 'dhea', 'dheamahdavikia1999@gmail.com', 'popop'),
(7, 'liza', 'lalaliza@gmail.com', 'laliza');

-- --------------------------------------------------------

--
-- Table structure for table `security_images`
--

CREATE TABLE `security_images` (
  `ID` int(11) NOT NULL,
  `insertdate` datetime NOT NULL,
  `referenceid` varchar(100) NOT NULL,
  `hiddentext` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security_images`
--

INSERT INTO `security_images` (`ID`, `insertdate`, `referenceid`, `hiddentext`) VALUES
(1, '2018-12-26 01:29:16', '1cb47842f67c8f7409c231ccd4a61258', '859QpIGm'),
(2, '2018-12-26 01:39:01', '2ffa3e720ccc338c4b14430d7002df4a', 'TxhUNh56');

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
(8, 'Pricilia Dwi Widyaastari', 2147483647, 'Jatibarang', 'pricilia@gmail.com', 'Cat', 'Cat - Maine coon', '2018-12-25 00:00:00', 'ini komen'),
(14, 'liza', 2147483647, 'jayalaksana', 'lalaliza@gmail.com', 'Dog', 'Dog - Poodle', '2018-12-25 00:00:00', 'qwerty');

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
-- Indexes for table `security_images`
--
ALTER TABLE `security_images`
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `id_berita` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `security_images`
--
ALTER TABLE `security_images`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id_vol` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
