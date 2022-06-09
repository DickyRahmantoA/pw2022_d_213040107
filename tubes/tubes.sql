-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 09, 2022 at 09:07 AM
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
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `kain`
--

CREATE TABLE `kain` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` char(25) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `corak` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `teknik_pembuatan` varchar(255) NOT NULL,
  `cocok_untuk` varchar(255) NOT NULL,
  `gramasi` char(8) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kain`
--

INSERT INTO `kain` (`id`, `nama`, `harga`, `jenis`, `corak`, `warna`, `teknik_pembuatan`, `cocok_untuk`, `gramasi`, `gambar`) VALUES
(1, 'RED HUES POLYESTER', 'Rp15.000', 'Polyester', 'Kotak-kotak, Garis-garis', 'Warna warni', 'Woven', 'Atasan, Kemeja, Tunik, Blouse', '1-100', 'gambar1.jpg'),
(2, 'ROSE MONOGRAM POLYESTER', 'Rp11.900', 'Sifon', 'Bunga bunga', 'Ungu, Kuning, Coklat, Merah', 'Woven', 'Atasan, Blouse, Gamis, Kemeja', '1-100', 'gambar2.jpg'),
(3, 'FLORAL MONOCHROME POLYESTER', 'Rp13.000', 'Nylon', 'Bunga bunga', 'Navy, Hijau, Coklat, Merah, Ungu ,Hitam', 'Woven', 'Tunik, Atasan, Blouse, Kemeja, Dress, Daster', '1-100', 'gambar3.jpg'),
(4, 'SOLID COLORS POLYESTER', 'Rp15.000', 'Polyester', 'Polos', 'Pink, Hitam, Coklat, Navy', 'Woven', 'Atasan, Kemeja, Blouse, Gamis, Tunik, Dress', '1-100', 'gambar4.jpg'),
(5, 'TECHNICOLOR 03 POLYESTER', 'Rp11.900', 'Sifon', 'Abstract Layer', 'Warna warni', 'Woven', 'Atasan, Blouse, Gamis, Kemeja', '1-100', 'gambar5.jpg'),
(6, 'SOLID COLORS TEXTURED LINEN POLYESER', 'Rp35.000', 'Polyester', 'Polos', 'Merah, Putih, Navy, Marun, Pink', 'Woven', 'Gamis, Tunik, Atasan, Blouse, Blazer, Rok', '101-150', 'gambar6.jpg'),
(8, 'SOLID COLORS DIAGONAL POLYESTER', 'Rp35.000', 'Polyester', 'Polos', 'Merah, Navy, Coklat, Pink, Jingga, Cream, Abu-abu', 'Woven', 'Gamis, Piyama, Tunik, Blouse, Kemeja, Atasan', '101-150', 'gambar7.jpg'),
(9, 'HEAVY TENCEL LOOK POLYESTER', 'Rp39.000', 'Polyester', 'Polos', 'Abu-abu, Hitam, Navy, Coklat, Cream, Merah', 'Woven', 'Gamis, Tunik, Atasan, Blouse, Rok, Kemeja', '151-200', 'gambar8.jpg'),
(10, 'SOLID COLORS SOFT POLYESTER', 'Rp35.000', 'Polyester', 'Polos', 'Abu-abu, Cream, Violet, Hijau, Pink, Hitam', 'Woven', 'Atasan, Tunik, Gamis, Setelan one set, Kemeja', '151-200', 'gambar9.jpg'),
(11, 'SOLID COLORS MIDWEIGHT', 'Rp38.000', 'Polyester', 'Polos', 'Cream, Navy, Pink, Biru Muda, Coklat', 'Twill Woven', 'Atasan, Blouse, Crop top, Daster, Dekorasi, Dress', '151-200', 'gambar10.jpg'),
(12, 'SOLID COLORS JERSEY POLYESTER', 'Rp108.000', 'Polyester', 'Polos', 'Hitam, Mint, Kuning, Coklat, Merah', 'Knitting', 'Gamis, Legging, Manset, Celana olahraga, Tunik, Rok, Culotte', '151-200', 'gambar11.jpg'),
(13, 'TEXTURED SOLID COLORS POLYESTER', 'Rp108.000', 'Kaos', 'Polos', 'Marun, Abu-abu, Coklat, Kuning, Hijau, Dark Grey', 'Knitting', 'Atasan, Gamis, Tunik, Outer, Blazer, Cardigan, Celana, Crop top, Rok', '201-250', 'gambar12.jpg'),
(14, 'MINI WAFFLE POLYESTER', 'Rp120.000', 'Polyester', 'Polos', 'Biru, Mustard, Abu-abu, Terakota', 'Knitting', 'Atasan, Blouse, Crop top, Dress, Kemeja, Cardigan', '201-250', 'gambar13.jpg'),
(15, 'SOFTKNIT POLYESTER', 'Rp108.000', 'Kaos', 'Polos', 'Hijau, Jingga, Cream, Abu-abu, Pink, Coklat', 'Knitting', 'Celana, Rok, Atasan, Tunik, Blazer, Gamis', '251-300', 'gambar14.jpg'),
(16, 'MINI RIB KNIT POLYESTER', 'Rp115.000', 'Polyester', 'Rib Knit', 'Biru, Pink, Dark grey, Merah, Jingga, Abu-abu', 'Knitting', 'Baju, Crop Top, Cardigan, Baju Koko, Dress, Gamis, Jumpsuit, Legging, Setelan One set, Sweater', '251-300', 'gambar15.jpg');

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
(5, 'kyy', '$2y$10$Orn4j2vRa92BuohSvTPlveZ9BR0U8EMDbJV.Ni/ARWlJYPH69HVP6'),
(6, 'admin', '$2y$10$oOkXDQ6EtLrRlxy6EhniF.BzvTe4JswkLiUi7.jQeO2lKSVVkOx7a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kain`
--
ALTER TABLE `kain`
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
-- AUTO_INCREMENT for table `kain`
--
ALTER TABLE `kain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
