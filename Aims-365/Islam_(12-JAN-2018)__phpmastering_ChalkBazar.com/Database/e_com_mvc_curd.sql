-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2019 at 03:47 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_com_mvc_curd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_add`
--

CREATE TABLE `tb_add` (
  `id` int(11) NOT NULL,
  `top` varchar(255) NOT NULL,
  `left_at` varchar(255) NOT NULL,
  `right_at` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `update_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_add`
--

INSERT INTO `tb_add` (`id`, `top`, `left_at`, `right_at`, `post`, `update_at`) VALUES
(1, 'top', 'left', 'right', 'post', 'upadt'),
(2, 'top', 'left', 'right', 'post', 'upadt');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id` int(11) NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `update_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id` int(11) NOT NULL,
  `menu_title` varchar(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `update_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id`, `menu_title`, `menu_name`, `update_at`) VALUES
(1, 'Mobile Phones', 'mobile', ''),
(2, 'Telivision ', 'mobile', ''),
(3, 'Laptop', 'laptop', ''),
(4, 'Motor Byke', 'byke', ''),
(5, 'Car', 'car', ''),
(6, 'Cosmatics', 'cosmatics', ''),
(7, 'Furniture', 'furniture', ''),
(8, 'Book', 'book', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_details` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id`, `product_name`, `product_price`, `product_details`, `product_category`, `product_image`, `updated_at`) VALUES
(1, 'SONY XPERIA Z', '42000/-', 'N/A', '1', '01.jpg', ''),
(2, 'SONY XPERIA Z1', '62000/-', 'N/A', '1', '02.jpg', ''),
(3, 'Samsung J7', '18000/-', 'N/A', '1', '03.jpg', ''),
(4, 'XIOMI MI 2', '12000/-', 'N/A', '1', '04.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_site`
--

CREATE TABLE `tb_site` (
  `id` int(11) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `welcome_head` varchar(255) NOT NULL,
  `welcome_body` text NOT NULL,
  `address` text NOT NULL,
  `link_address` varchar(255) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `copyright` varchar(255) NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_site`
--

INSERT INTO `tb_site` (`id`, `site_name`, `welcome_head`, `welcome_body`, `address`, `link_address`, `update_at`, `copyright`, `map`) VALUES
(1, 'ChalkBazar', 'Big Offer &mdash; 32% Discount !!', 'loren ipsum dummy text for web content. example data for slider right content body..', '127/A, Katasur, Mohammadpur, Dhaka &mdash; 1207 ', 'https://www.google.com/maps/place/Aims-365/@23.7557911,90.35943,17z/data=!3m1!4b1!4m5!3m4!1s0x3755bf9c7c652f05:0xf2e1996212c19523!8m2!3d23.7557862!4d90.3616187', '2019-01-12 14:17:50', '2018', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.7640756862515!2d90.35943001445591!3d23.755791094488423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf9c7c652f05%3A0xf2e1996212c19523!2sAims-365!5e0!3m2!1sen!2sbd!4v1547302448817\" width=\"100%\" height=\"400px\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`id`, `image_url`, `status`, `updated_at`) VALUES
(1, 'slider1.jpg', 1, '2019-01-12 14:27:43'),
(2, 'slider2.jpg', 0, '2019-01-12 14:02:44'),
(7, 'slider3.jpg', 0, '2019-01-12 14:03:27'),
(8, 'slider4.jpg', 0, '2019-01-12 14:23:27'),
(9, 'slider5.jpg', 0, '2019-01-12 14:28:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_add`
--
ALTER TABLE `tb_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_site`
--
ALTER TABLE `tb_site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_add`
--
ALTER TABLE `tb_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_site`
--
ALTER TABLE `tb_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
