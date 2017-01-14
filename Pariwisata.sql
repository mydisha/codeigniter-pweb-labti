-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2017 at 08:50 PM
-- Server version: 10.0.28-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_DaftarTempat`
--

CREATE TABLE `tbl_DaftarTempat` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `alamat` text,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_DaftarTempat`
--

INSERT INTO `tbl_DaftarTempat` (`id`, `user_id`, `kategori_id`, `nama`, `latitude`, `longitude`, `alamat`, `jam_buka`, `jam_tutup`, `image`) VALUES
(8, 1, 1, 'qweqwe', '-8.6512096', '116.32453540000006', 'Unnamed Road, Dasan Baru, Kopang, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83553, Indonesia', '17:25:00', '08:40:00', 'default.png'),
(9, 1, 1, 'qweqwe', '-8.6512096', '116.32453540000006', 'Unnamed Road, Dasan Baru, Kopang, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83553, Indonesia', '17:25:00', '08:40:00', 'default.png'),
(10, 1, 1, 'qweqwe', '-8.67117375473237', '116.3379902646484', 'Jl. Raya Praya - Kopang, Darmaji, Kopang, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83553, Indonesia', '18:30:00', '20:45:00', 'Selection_812.png'),
(11, 1, 6, 'kafe ', '-8.6512096', '116.32453540000006', 'Jl. Raya Praya - Mantang No.17, Montong Terep, Praya, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83511, Indonesia', '17:20:00', '19:41:00', 'default.png'),
(13, 1, 2, 'eaeaea', '-8.703415229632967', '116.20718429541012', 'Jl. Bypass Bandara Int. Lombok, Sukarara, Jonggat, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83561, Indonesia', '00:00:00', '00:00:00', 'default.png'),
(14, 1, 2, 'weeeeew', '-8.626031043288458', '116.38760040258785', 'Unnamed Road, Jenggik, Terara, Kabupaten Lombok Timur, Nusa Tenggara Bar. 83553, Indonesia', '00:00:00', '00:00:00', 'default.png'),
(15, 1, 2, 'test', '-8.667949454884333', '116.33678863500973', 'Jl. Raya Praya - Kopang No.16, Muncan, Kopang, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83553, Indonesia', '00:00:00', '00:00:00', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Kategori`
--

CREATE TABLE `tbl_Kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_Kategori`
--

INSERT INTO `tbl_Kategori` (`id`, `nama`) VALUES
(2, 'makanan'),
(6, 'nongkrong'),
(7, 'dugem'),
(8, 'tempat renang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_User`
--

CREATE TABLE `tbl_User` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_User`
--

INSERT INTO `tbl_User` (`id`, `nama`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_DaftarTempat`
--
ALTER TABLE `tbl_DaftarTempat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_Kategori`
--
ALTER TABLE `tbl_Kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_User`
--
ALTER TABLE `tbl_User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_DaftarTempat`
--
ALTER TABLE `tbl_DaftarTempat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_Kategori`
--
ALTER TABLE `tbl_Kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_User`
--
ALTER TABLE `tbl_User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
