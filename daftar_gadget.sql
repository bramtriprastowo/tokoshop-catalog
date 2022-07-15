-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 04:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar_gadget`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_dijual`
--

CREATE TABLE `barang_dijual` (
  `id` int(11) NOT NULL,
  `nama` varchar(999) NOT NULL,
  `harga` int(11) NOT NULL,
  `link_gambar` varchar(999) NOT NULL,
  `spek` varchar(999) NOT NULL,
  `varian` varchar(999) NOT NULL,
  `id_kategori` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_dijual`
--

INSERT INTO `barang_dijual` (`id`, `nama`, `harga`, `link_gambar`, `spek`, `varian`, `id_kategori`) VALUES
(1, 'Samsung S20', 12000000, 'https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s20-.jpg', 'Processor Exynos 990, 8 GB / 128 GB, Triple Camera', 'Cosmic Grey', 1),
(2, 'Xiaomi Mi 10 5G', 8500000, 'https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-10-5g.jpg', 'Snapdragon 865 5G, 8 GB / 256 GB, Quad Camera', 'Colar Green', 1),
(3, 'Asus Zenfone 5', 1900000, 'https://fdn2.gsmarena.com/vv/bigpic/asus-zenfone-5-ze620kl-5z-zs620kl.jpg', 'Snapdragon 636, 4 GB / 64 GB, Dual Speakers', 'Meteor Silver', 1),
(4, 'Fast Charger Samsung', 200000, 'https://s1.bukalapak.com/img/68954219511/large/charger_samsung_fast_charging_micro_usb_original_.jpg', 'Charger Original Samsung', '20 Watt Charger', 3),
(5, 'Earphone Wellcomm', 30000, 'https://s3.bukalapak.com/uploads/content_attachment/dca8f51a2759d7d3649895b5/original/Rekomendasi_Handsfree_dari_Wellcomm_-_7.jpg', 'Earphone Stereo with Mic', 'Black', 3),
(6, 'Case Silicon Samsung S20', 300000, 'https://images.samsung.com/is/image/samsung/id-feature-adds-a-touch-of-softness-211815851?$FB_TYPE_A_MO_JPG$', 'Premium Case by Samsung', 'Pink / Blue', 3),
(7, 'Acer Swift 3 Ryzen 5000', 12500000, 'https://static.acer.com/up/Resource/Acer/Laptops/Swift_3/Image/20200416/Acer-Swift-3_SF314-42_Silver-FP-Backlit_modelmain.png', 'Ryzen 5500U, RAM 16 GB, SSD 512 GB, Windows 10 Home', 'Arctic Grey', 2),
(8, 'ASUS VivoBook Pro K3500PC', 17500000, 'https://elevenkomputer.com/7228-large_default/nb-asus-vivobook-pro-k3500pc-oled556-quiet-blue.jpg', 'Intel Core i7, GeForce RTX 3050, RAM 16 GB, SSD 512 GB', 'Midnight Black', 2),
(9, 'Lenovo IdeaPad Slim3 15IML05', 7000000, 'https://els.id/media/catalog/product/cache/240ad6df83188ceb3dfe8b5de3b51f05/i/d/ideapad_slim_3_numberic_6__1_3.jpg', 'Intel Core i3, RAM 4 GB, SSD 256 GB', 'Silver', 2),
(13, 'Infinix Hot 11', 1700000, 'https://fdn2.gsmarena.com/vv/bigpic/infinix-hot11.jpg', 'Mediatek Helio G70, 4 GB / 64 GB, 20:9 Ratio, Dual SIM', 'Ocean Blue', 1),
(14, 'Dell Inspiron 5510 i5', 14500000, 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/1/13/6df34350-1891-46e7-a042-f5cb1b5ca449.jpg', 'Intel Core i5-11300H, RAM 8 GB DDR4, SSD 512 GB, Intel Iris XE Graphics', 'Black', 2),
(15, 'Logitech G102 Mouse', 250000, 'https://images.tokopedia.net/img/cache/700/product-1/2018/5/16/8588411/8588411_c5459a81-99f2-4b73-ab9e-78378057a5f0_450_450.jpg', 'RGB, 8000 Max DPI, Weight 85 gr, Mercury Sensor', 'Black Edition', 3);

-- --------------------------------------------------------

--
-- Table structure for table `id_kategori`
--

CREATE TABLE `id_kategori` (
  `id_kategori` int(255) NOT NULL,
  `nama_kategori` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `id_kategori`
--

INSERT INTO `id_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'smartphones'),
(2, 'laptops'),
(3, 'accessories');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_dijual`
--
ALTER TABLE `barang_dijual`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_dijual`
--
ALTER TABLE `barang_dijual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
