-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 21, 2017 at 04:15 PM
-- Server version: 5.6.33
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `shoheikoya_gs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothes_table`
--

CREATE TABLE `clothes_table` (
  `id` int(11) NOT NULL,
  `stock` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `situation` varchar(255) NOT NULL,
  `size` varchar(265) NOT NULL,
  `new_or_used` varchar(265) NOT NULL,
  `brand_name` varchar(265) NOT NULL,
  `file_info` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clothes_table`
--

INSERT INTO `clothes_table` (`id`, `stock`, `category`, `situation`, `size`, `new_or_used`, `brand_name`, `file_info`) VALUES
(1, 1, 'shirt', 'business', 's', 'used', 'uniqlo', 'none'),
(2, 1, 'Tshirt', 'Leisure', 's', 'used', 'uniqlo', 'none'),
(3, 1, 'pants', 'Leisure', 'm', 'used', 'uniqlo', 'none'),
(4, 1, 'shirt', 'business', 's', 'used', 'uniqlo', 'none'),
(5, 1, 'pants', 'Leisure', 'm', 'new', 'uniqlo', 'none'),
(6, 1, 'shirt', 'business', 's', 'used', 'uniqlo', 'none'),
(7, 1, 'pants', 'Leisure', 'm', 'new', 'uniqlo', 'none'),
(8, 1, 'shirt', 'business', 's', 'used', 'uniqlo', 'none'),
(9, 1, 'pants', 'Leisure', 'm', 'new', 'uniqlo', 'none'),
(10, 1, 'shirt', 'business', 's', 'used', 'uniqlo', 'none'),
(11, 1, 'pants', 'Leisure', 'm', 'new', 'uniqlo', 'none'),
(12, 1, 'shirt', 'business', 's', 'used', 'uniqlo', 'none'),
(13, 1, 'pants', 'Leisure', 'm', 'new', 'uniqlo', 'none'),
(14, 1, 'Tshirt', 'Leisure', 'm', 'new', 'uniqlo', 'none'),
(15, 1, 'Tshirt', 'Leisure', 'm', 'used', 'uniqlo', 'none'),
(16, 1, 'Tshirt', 'Leisure', 'm', 'new', 'uniqlo', 'none'),
(17, 1, 'Tshirt', 'Leisure', 'm', 'used', 'uniqlo', 'none'),
(18, 1, 'Tshirt', 'Leisure', 'm', 'new', 'uniqlo', 'none'),
(19, 1, 'Tshirt', 'Leisure', 'm', 'used', 'uniqlo', 'none'),
(20, 1, 'Tshirt', 'Leisure', 'm', 'new', 'uniqlo', 'none'),
(21, 1, 'Tshirt', 'Leisure', 'm', 'used', 'uniqlo', 'none'),
(22, 1, 'pants', 'Leisure', 'l', 'new', 'uniqlo', 'none'),
(23, 1, 'pants', 'Leisure', 'l', 'used', 'uniqlo', 'none'),
(24, 1, 'pants', 'Leisure', 'l', 'new', 'uniqlo', 'none'),
(25, 1, 'pants', 'Leisure', 'l', 'used', 'uniqlo', 'none'),
(26, 1, 'pants', 'Leisure', 'l', 'new', 'uniqlo', 'none'),
(27, 1, 'pants', 'Leisure', 'l', 'used', 'uniqlo', 'none'),
(28, 1, 'pants', 'Leisure', 'xl', 'new', 'uniqlo', 'none'),
(29, 1, 'pants', 'Leisure', 'xl', 'used', 'uniqlo', 'none'),
(30, 1, 'pants', 'Leisure', 'xl', 'new', 'uniqlo', 'none'),
(31, 1, 'pants', 'Leisure', 'xl', 'used', 'uniqlo', 'none'),
(32, 1, 'pants', 'Leisure', 'xl', 'new', 'uniqlo', 'none'),
(33, 1, 'shirt', 'business', 'xl', 'used', 'uniqlo', 'none'),
(34, 1, 'shirt', 'business', 'xl', 'new', 'uniqlo', 'none'),
(35, 1, 'Tshirt', 'Leisure', 'xl', 'used', 'uniqlo', 'none'),
(36, 1, 'Tshirt', 'Leisure', 'm', 'used', 'uniqlo', 'none'),
(37, 1, 'shirt', 'business', 's', 'new', 'uniqlo', 'none'),
(38, 1, 'Tshirt', 'Leisure', 'l', 'used', 'uniqlo', 'none'),
(39, 1, 'shirt', 'business', 'xl', 'used', 'uniqlo', 'none'),
(40, 1, 'shirt', 'business', 'xl', 'new', 'uniqlo', 'none'),
(41, 1, 'Tshirt', 'Leisure', 'xl', 'used', 'uniqlo', 'none'),
(42, 1, 'Tshirt', 'Leisure', 's', 'used', 'uniqlo', 'none'),
(43, 1, 'Tshirt', 'Leisure', 'm', 'new', 'uniqlo', 'none'),
(44, 1, 'Tshirt', 'Leisure', 's', 'used', 'uniqlo', 'none'),
(45, 1, 'Tshirt', 'Leisure', 'm', 'new', 'uniqlo', 'none'),
(46, 1, 'Tshirt', 'Leisure', 's', 'used', 'uniqlo', 'none'),
(47, 1, 'Tshirt', 'Leisure', 'm', 'new', 'uniqlo', 'none'),
(48, 1, 'Tshirt', 'Leisure', 'l', 'used', 'uniqlo', 'none'),
(49, 1, 'Tshirt', 'Leisure', 'xl', 'new', 'uniqlo', 'none'),
(50, 1, 'Tshirt', 'Leisure', 'l', 'used', 'uniqlo', 'none'),
(51, 1, 'Tshirt', 'Leisure', 'xl', 'new', 'uniqlo', 'none'),
(52, 1, 'Tshirt', 'Leisure', 'l', 'used', 'uniqlo', 'none'),
(53, 1, 'Tshirt', 'Leisure', 'xl', 'new', 'uniqlo', 'none'),
(54, 1, 'Tshirt', 'Leisure', 'l', 'used', 'uniqlo', 'none'),
(55, 1, 'Tshirt', 'Leisure', 's', 'new', 'uniqlo', 'none');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clothes_table`
--
ALTER TABLE `clothes_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clothes_table`
--
ALTER TABLE `clothes_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;