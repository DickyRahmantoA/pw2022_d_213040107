-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 08, 2022 at 01:12 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2022_d`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `npm` char(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `npm`, `email`, `jurusan`, `gambar`) VALUES
(1, 'annisa', '214040505', 'annisa@gmail.com', 'Hukum', 'ans.jpeg'),
(2, 'diki', '213040107', 'diki@gmail.com', 'Teknik Informatika', 'diki .jpg'),
(3, 'hilal', '213040128', 'hilal@gmail.com', 'Teknik Mesin', 'hilal.jpeg'),
(4, 'kazutora', '214050102', 'kazutora@gmail.com', 'Teknik Nuklir', 'kazutora.jpeg'),
(5, 'kiwayway', '203040107', 'kiwayway@gmail.com', 'psikologi', 'kiwayway.jpeg'),
(6, 'unaa', '223010205', 'unaa@gmail.com', 'Matematika', 'unaa.jpeg'),
(7, 'sanan', '213040108', 'sanan@gmail.com', 'Rekayasa Perangkat Lunak', 'sanan.jpg'),
(8, 'nabila', '213040144', 'nabila@gmail.com', 'Pendidikan Matematika', 'nabila.jpeg'),
(9, 'wildan', '213040140', 'wildun@gmail.com', 'Teknik Industri', 'wildun.jpeg'),
(10, 'niaa atikah', '203010507', 'niaa@gmail.com', 'Peternakan', 'niaa.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'pw', '$2y$10$YKUZEQqP8jD1W.Rfgs4HQ.LhqS9IE2ou4NYQkdNrG7hdWZJ1NOnXK'),
(4, 'admin', '$2y$10$K5Cnzlj0yVB53vizjgcyl.uy/CxhOUP2XSh1pj2zMSDITFbw0SbIm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
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
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
