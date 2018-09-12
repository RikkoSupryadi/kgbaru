-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 12:26 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kgbaru`
--

-- --------------------------------------------------------

--
-- Table structure for table `lappub`
--

CREATE TABLE `lappub` (
  `id_lappub` int(3) NOT NULL,
  `nama_lap` varchar(200) NOT NULL,
  `tgl_lap` date NOT NULL,
  `link_lap` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lappub`
--

INSERT INTO `lappub` (`id_lappub`, `nama_lap`, `tgl_lap`, `link_lap`) VALUES
(1, 'Laporan Publikasi Neraca', '2017-03-01', 'https://drive.google.com/file/d/12JJnLnxw1p3k5BBprQf566FrZ6l9fnuc/view?usp=drive_open'),
(2, 'Laporan Publikasi Laba Rugi', '2017-03-01', 'https://drive.google.com/open?id=1ZNLIW3vmHIiRqWGpVYgZOlV3UmRzr24d'),
(3, 'Laporan Publikasi Komitmen Kontinjensi', '2017-03-01', 'https://drive.google.com/open?id=10_a9FyJd0fdCdmmKXymasNpCKZjviUVR'),
(4, 'Laporan Publikasi Info Lain', '2017-03-01', 'https://drive.google.com/open?id=1SuuuW3juIv_Pg1n0htYAGK8Kz_fbmSUf'),
(5, 'Laporan Penerapan Tata Kelola 2017', '2017-01-01', 'https://drive.google.com/open?id=1-NqJYammmOv__qOmhi4vWWWGJ59WdQSs');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nomor_telp` varchar(14) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `nomor_telp`, `jabatan`) VALUES
(1, 'RikkoS', 'dev-semangka', '88f2dd3579e890fad6d7378fb93f91f8', '0800 0000 0000', 'Developer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lappub`
--
ALTER TABLE `lappub`
  ADD PRIMARY KEY (`id_lappub`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lappub`
--
ALTER TABLE `lappub`
  MODIFY `id_lappub` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
