-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 04:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mca`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_sku` varchar(50) NOT NULL,
  `product_barcode` varchar(50) NOT NULL,
  `product_weight` decimal(10,2) NOT NULL,
  `product_dimension` varchar(100) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_variants` varchar(255) NOT NULL,
  `shipping_info` varchar(255) NOT NULL,
  `seo_info` varchar(255) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_features` text NOT NULL,
  `product_benifits` text NOT NULL,
  `related_product` varchar(255) NOT NULL,
  `product_reviews` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image_filenames` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`product_id`, `product_name`, `product_description`, `product_category`, `product_price`, `product_sku`, `product_barcode`, `product_weight`, `product_dimension`, `product_quantity`, `product_variants`, `shipping_info`, `seo_info`, `product_brand`, `product_features`, `product_benifits`, `related_product`, `product_reviews`, `created_at`, `image_filenames`) VALUES
(1, 'gjgdglkjfdg', 'jljljl j', 'ljljk', 1255.00, 'kjhk', 'hkjh', 123.00, 'jhgh', 0, '', '', '', '', '', '', '', '', '2023-11-02 15:45:00', ''),
(2, 'iiy', 'jhjhkh', 'iyiyiuiyiy', 788.00, 'lkjl', 'jkl', 0.00, 'oijojo', 0, 'ohjjh', 'jojo', 'hjkh', 'ohoiho', 'ohjnhoj', 'pjpjo', 'hjojo', 'ohoj', '2023-11-02 15:47:25', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Reg_id` int(3) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Middle_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_no` varchar(15) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Country` varchar(25) NOT NULL,
  `Edu_qualification` varchar(25) NOT NULL,
  `Gender` varchar(6) NOT NULL DEFAULT 'Male'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Reg_id`, `First_name`, `Middle_name`, `Last_name`, `Email`, `Mobile_no`, `Password`, `City`, `State`, `Country`, `Edu_qualification`, `Gender`) VALUES
(1, 'Dhaval', 'Haribhai', 'Sojitra', 'dhavalsojitra876@gmail.com', '6351393788', '12102002', 'Rasnal', 'Gujarat', 'Bharat', 'BCA', ''),
(2, 'Dhaval', 'Haribhai', 'Sojitra', 'dhavalsojitra876@gmail.com', '6351393788', '12102002', 'Rasnal', 'Gujarat', 'Bharat', 'BCA', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Reg_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
