-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 11, 2023 at 01:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopway_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_ac`
--

CREATE TABLE `admin_ac` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_ac`
--

INSERT INTO `admin_ac` (`id`, `name`, `password`) VALUES
(15, 'admin_1', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2'),
(16, 'admin_4441', 'dd4571bd1e95610b72faea02f4e00c84d0885219'),
(18, 'admin_123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `stock` int(10) NOT NULL,
  `shop_name` varchar(30) NOT NULL,
  `shop_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `image_01`, `image_02`, `image_03`, `details`, `stock`, `shop_name`, `shop_id`) VALUES
(6, 'Samsung Mobile', 'Electronic', 9999, '1.Global Business Chart.png', '1.jpg', '2.Two People Exchange Jobs Flat Vectors.png', '44 inch long smart TV with 4 years garranty', 7, 'Vijay Sales ', 10),
(7, 'Redmi Note 7 Mobile', 'Mobile Phone', 13999, '9.Recruiting and Searching for Application Candidates.png', '28.Financial analysis.png', '6.Businessman Guide With Chart Flat Vectors.png', 'ihcf', 2, 'Vijay Sales ', 10),
(8, 'Samsung Mobile', 'Electronic', 9999, '5.Wireless Documents Marketing Flat Vectors.png', 'signup-library-icon.png', '18.Business Talk Vector Illustration Flat.png', 'Electronics Store', 7, 'Vijay Sales ', 10),
(14, 'Samsung Mobile', 'Electronic', 9999, 'undraw_building_websites_i78t.png', 'Webp.net-resizeimage (1).jpg', 'soheb-zaidi-tgFR67JUcBs-unsplash.jpg', 'G for Genius!', 7, 'Manish Medical Stores', 8);

-- --------------------------------------------------------

--
-- Table structure for table `shopkeeper_ac`
--

CREATE TABLE `shopkeeper_ac` (
  `id` int(10) NOT NULL,
  `shop_name` varchar(50) NOT NULL,
  `shopkeeper_name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `details` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shopkeeper_ac`
--

INSERT INTO `shopkeeper_ac` (`id`, `shop_name`, `shopkeeper_name`, `image`, `details`, `address`, `email`, `password`) VALUES
(7, 'Nitesh Electronics', 'Nitesh Rana', 'bg.jpg', 'Electronics Store', 'Shop No. 13 & 14, New Vegas Plaza, G.B. Road, Owala Naka, Thane West, Thane, Maharashtra 400615', '512nitesh@gmail.com', 'ce09b127d48f83868a45645e246d3b52f4bdecbe'),
(8, 'Manish Medical Stores', 'Manish  Malhotra', '3dcube.jpg', 'Medical Shop', '2V82+3M3, Tilak Rd, Wadala West, Wadala, Mumbai, Maharashtra 400031', '321manish@gmail.com', '5f6955d227a320c7f1f6c7da2a6d96a851a8118f'),
(10, 'Vijay Sales ', 'Vijay B. Gupta', '3.webp', 'Electronics Store', '2V82+3M3, Tilak Rd, Wadala West, Wadala, Mumbai, Maharashtra 400031', '1029vijay0021@gmail.com', '685df181be80ff8d2018d3ff7c61f12c471005d2'),
(11, 'brighton', 'brito', '1.jpg', 'Medical Shop', 'ONGC Colony, Bandra West, Mumbai, Maharashtra, India', 'brightonstalin123@12gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_ac`
--
ALTER TABLE `admin_ac`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopkeeper_ac`
--
ALTER TABLE `shopkeeper_ac`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_ac`
--
ALTER TABLE `admin_ac`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `shopkeeper_ac`
--
ALTER TABLE `shopkeeper_ac`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
