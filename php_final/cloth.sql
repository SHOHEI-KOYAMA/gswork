-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 26, 2017 at 05:00 PM
-- Server version: 5.6.33
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cloth_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothes_table`
--

CREATE TABLE `clothes_table` (
  `id` int(11) NOT NULL,
  `stock` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `mens_ladies` varchar(255) NOT NULL,
  `situation` varchar(255) NOT NULL,
  `size` varchar(265) NOT NULL,
  `new_or_used` varchar(265) NOT NULL,
  `brand_name` varchar(265) NOT NULL,
  `file_info` varchar(265) NOT NULL,
  `detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clothes_table`
--

INSERT INTO `clothes_table` (`id`, `stock`, `category`, `mens_ladies`, `situation`, `size`, `new_or_used`, `brand_name`, `file_info`, `detail`) VALUES
(1, 1, 'shirt', 'mens', 'business', 's', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/17294000001/item/32_17294000001_middles.jpg', ''),
(2, 1, 'Tshirt', 'mens', 'Leisure', 's', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/185211/item/67_185211_middles.jpg', ''),
(3, 1, 'pants', 'mens', 'Leisure', 'm', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/192943/item/62_192943_middles.jpg', ''),
(4, 1, 'shirt', 'mens', 'business', 's', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/17294000001/item/32_17294000001_middles.jpg', ''),
(5, 1, 'pants', 'ladys', 'Leisure', 'm', 'new', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/197083/item/92_197083_middles.jpg', ''),
(6, 1, 'shirt', 'mens', 'Leisure', 's', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/17294000001/item/32_17294000001_middles.jpg', ''),
(7, 1, 'pants', 'ladys', 'Leisure', 'm', 'new', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/197083/item/92_197083_middles.jpg', ''),
(8, 1, 'shirt', 'ladys', 'business', 's', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/190866/item/45_190866_middles.jpg', ''),
(9, 1, 'pants', 'ladys', 'Leisure', 'm', 'new', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/197083/item/92_197083_middles.jpg', ''),
(10, 1, 'shirt', 'ladys', 'business', 's', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/190866/item/45_190866_middles.jpg', ''),
(11, 1, 'pants', 'ladys', 'Leisure', 'm', 'new', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/197083/item/92_197083_middles.jpg', ''),
(12, 1, 'shirt', 'ladys', 'business', 's', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/190866/item/45_190866_middles.jpg', ''),
(13, 1, 'pants', 'mens', 'Leisure', 'm', 'new', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/196364/item/00_196364_middles.jpg', ''),
(14, 1, 'Tshirt', 'ladys', 'Leisure', 'm', 'new', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/193959/item/00_193959_middles.jpg', ''),
(15, 1, 'Tshirt', 'mens', 'Leisure', 'm', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/185211/item/67_185211_middles.jpg', ''),
(16, 1, 'Tshirt', 'ladys', 'Leisure', 'm', 'new', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/193959/item/00_193959_middles.jpg', ''),
(17, 1, 'Tshirt', 'ladys', 'Leisure', 'm', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/193083/item/11_193083_middles.jpg', ''),
(18, 1, 'Tshirt', 'ladys', 'Leisure', 'm', 'new', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/193959/item/00_193959_middles.jpg', ''),
(19, 1, 'Tshirt', 'mens', 'Leisure', 'm', 'used', 'uniqlo', 'http://im.uniqlo.com/images/jp/pc/goods/195395/item/62_195395.jpg ', ''),
(20, 1, 'Tshirt', 'ladys', 'Leisure', 'm', 'new', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/193959/item/00_193959_middles.jpg', ''),
(21, 1, 'Tshirt', 'mens', 'Leisure', 'm', 'used', 'uniqlo', 'http://im.uniqlo.com/images/jp/pc/goods/195395/item/62_195395.jpg ', ''),
(22, 1, 'pants', 'ladys', 'Leisure', 'l', 'new', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/197083/item/92_197083_middles.jpg', ''),
(23, 1, 'pants', 'mens', 'Leisure', 'l', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/192943/item/62_192943_middles.jpg', ''),
(24, 1, 'pants', 'ladys', 'Leisure', 'l', 'new', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/197083/item/92_197083_middles.jpg', ''),
(25, 1, 'pants', 'mens', 'Leisure', 'l', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/192943/item/62_192943_middles.jpg', ''),
(26, 1, 'pants', 'mens', 'Leisure', 'l', 'new', 'uniqlo', 'http://im.uniqlo.com/images/jp/pc/goods/195395/item/62_195395.jpg ', ''),
(27, 1, 'pants', 'ladys', 'Leisure', 'l', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/196563/item/68_196563_middles.jpg', ''),
(28, 1, 'pants', 'ladys', 'Leisure', 'xl', 'new', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/197083/item/92_197083_middles.jpg', ''),
(29, 1, 'pants', 'ladys', 'Leisure', 'xl', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/196563/item/68_196563_middles.jpg', ''),
(30, 1, 'pants', 'mens', 'Leisure', 'xl', 'new', 'uniqlo', 'http://im.uniqlo.com/images/jp/pc/goods/195395/item/62_195395.jpg ', ''),
(31, 1, 'pants', 'mens', 'Leisure', 'xl', 'used', 'uniqlo', 'http://im.uniqlo.com/images/jp/pc/goods/195395/item/62_195395.jpg ', ''),
(32, 1, 'pants', 'mens', 'Leisure', 'xl', 'new', 'uniqlo', 'http://im.uniqlo.com/images/jp/pc/goods/195395/item/62_195395.jpg ', ''),
(33, 1, 'shirt', 'ladys', 'business', 'xl', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/190866/item/45_190866_middles.jpg', ''),
(34, 1, 'shirt', 'mens', 'business', 'xl', 'new', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/19375800001/item/15_19375800001_middles.jpg', ''),
(35, 1, 'Tshirt', 'ladys', 'Leisure', 'xl', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/193083/item/11_193083_middles.jpg', ''),
(36, 1, 'Tshirt', 'mens', 'Leisure', 'm', 'used', 'uniqlo', 'http://im.uniqlo.com/images/jp/pc/goods/195395/item/62_195395.jpg ', ''),
(37, 1, 'shirt', 'mens', 'business', 's', 'new', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/19375800001/item/15_19375800001_middles.jpg', ''),
(38, 1, 'Tshirt', 'ladys', 'Leisure', 'l', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/193083/item/11_193083_middles.jpg', ''),
(39, 1, 'shirt', 'mens', 'business', 'xl', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/17294000001/item/32_17294000001_middles.jpg', ''),
(40, 1, 'shirt', 'mens', 'business', 'xl', 'new', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/19375800001/item/15_19375800001_middles.jpg', ''),
(41, 1, 'Tshirt', 'mens', 'Leisure', 'xl', 'used', 'uniqlo', 'http://im.uniqlo.com/images/jp/pc/goods/195395/item/62_195395.jpg ', ''),
(42, 1, 'Tshirt', 'ladys', 'Leisure', 's', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/193083/item/11_193083_middles.jpg', ''),
(43, 1, 'Tshirt', 'mens', 'Leisure', 'm', 'new', 'uniqlo', 'http://im.uniqlo.com/images/jp/pc/goods/195395/item/62_195395.jpg ', ''),
(44, 1, 'Tshirt', 'mens', 'Leisure', 's', 'used', 'uniqlo', 'http://im.uniqlo.com/images/jp/pc/goods/195395/item/62_195395.jpg ', ''),
(45, 1, 'Tshirt', 'ladys', 'Leisure', 'm', 'new', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/193959/item/00_193959_middles.jpg', ''),
(46, 1, 'Tshirt', 'mens', 'Leisure', 's', 'used', 'uniqlo', 'http://im.uniqlo.com/images/jp/pc/goods/195395/item/62_195395.jpg ', ''),
(47, 1, 'Tshirt', 'mens', 'Leisure', 'm', 'new', 'uniqlo', 'http://im.uniqlo.com/images/jp/pc/goods/195395/item/62_195395.jpg ', ''),
(48, 1, 'Tshirt', 'ladys', 'Leisure', 'l', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/193083/item/11_193083_middles.jpg', ''),
(49, 1, 'Tshirt', 'mens', 'Leisure', 'xl', 'new', 'uniqlo', 'http://im.uniqlo.com/images/jp/pc/goods/195395/item/62_195395.jpg ', ''),
(50, 1, 'Tshirt', 'mens', 'Leisure', 'l', 'used', 'uniqlo', 'http://im.uniqlo.com/images/jp/pc/goods/195395/item/62_195395.jpg ', ''),
(51, 1, 'Tshirt', 'ladys', 'Leisure', 'xl', 'new', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/193959/item/00_193959_middles.jpg', ''),
(52, 1, 'Tshirt', 'mens', 'Leisure', 'l', 'used', 'uniqlo', 'http://im.uniqlo.com/images/jp/pc/goods/195395/item/62_195395.jpg ', ''),
(53, 1, 'Tshirt', 'mens', 'Leisure', 'xl', 'new', 'uniqlo', 'http://im.uniqlo.com/images/jp/pc/goods/195395/item/62_195395.jpg ', ''),
(54, 1, 'Tshirt', 'ladys', 'Leisure', 'l', 'used', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/193083/item/11_193083_middles.jpg', ''),
(55, 1, 'Tshirt', 'ladys', 'Leisure', 's', 'new', 'uniqlo', 'https://im.uniqlo.com/images/jp/pc/goods/193959/item/00_193959_middles.jpg', '');

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