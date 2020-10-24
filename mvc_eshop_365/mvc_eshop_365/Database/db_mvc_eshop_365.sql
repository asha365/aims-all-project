-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 03:17 PM
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
-- Database: `db_mvc_eshop_365`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mvc_365_category`
--

CREATE TABLE `tb_mvc_365_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_status` int(11) NOT NULL,
  `category_tags` text NOT NULL,
  `category_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category_updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mvc_365_category`
--

INSERT INTO `tb_mvc_365_category` (`category_id`, `category_name`, `category_status`, `category_tags`, `category_created_at`, `category_updated_at`) VALUES
(10, 'MOBILE', 0, '', '2019-02-16 14:24:46', ''),
(11, 'BYKE', 0, '', '2019-02-16 14:24:45', ''),
(12, 'BOOK', 0, '', '2019-02-16 14:24:47', ''),
(13, 'COSMATICS', 0, '', '2019-02-19 11:57:38', ''),
(14, 'TV', 1, '', '2019-02-21 09:22:05', ''),
(15, 'SADASFASF', 0, '', '2019-02-19 12:38:06', ''),
(16, 'SADASFASF', 0, 'asdfasdf', '2019-02-21 08:57:43', ''),
(17, 'SADASFASF', 0, 'asdfasdf', '2019-02-21 08:58:13', ''),
(18, 'SADASFASF', 0, 'asdfasdf', '2019-02-21 08:58:15', ''),
(19, 'SADASFASF', 0, 'asdfasdf', '2019-02-21 09:22:07', ''),
(20, 'test CAT ', 0, ' ', '2019-02-21 08:59:52', ''),
(21, 'test CAT ', 1, ' ', '2019-02-21 09:22:00', ''),
(22, 'test CAT ', 0, ' ', '2019-02-21 09:00:34', ''),
(23, 'SADFASDF', 0, 'ASDFSA', '2019-02-21 09:00:38', ''),
(24, 'SADFASDF', 0, 'ASDFSA', '2019-02-21 09:02:45', ''),
(25, 'SADASFASF', 0, 'asdfadsf', '2019-02-21 09:02:49', ''),
(26, 'asdfasdf', 0, 'asdfasdf', '2019-02-21 09:02:53', ''),
(27, 'asdfasdf', 0, 'asdfasdf', '2019-02-21 09:03:01', ''),
(28, 'asdfsaf', 0, 'asdfasdf', '2019-02-21 09:03:05', ''),
(34, 'asdfsad fasdf ', 0, 'asdf asdf ', '2019-02-21 09:21:57', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mvc_365_pages`
--

CREATE TABLE `tb_mvc_365_pages` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `page_position` varchar(255) NOT NULL,
  `page_tags` text NOT NULL,
  `page_status` int(11) NOT NULL,
  `page_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `page_updated_at` varchar(255) NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mvc_365_pages`
--

INSERT INTO `tb_mvc_365_pages` (`page_id`, `page_name`, `page_position`, `page_tags`, `page_status`, `page_created_at`, `page_updated_at`) VALUES
(22, 'Site Map', 'Top_Menu', '', 0, '2019-02-21 13:51:07', '0000-00-00 00:00:00'),
(23, 'Helps & Suports', 'Top_Sub_Menu', '', 0, '2019-02-21 13:51:20', '0000-00-00 00:00:00'),
(24, 'Helps & Suports', 'Top_Left_Menu', '', 0, '2019-02-21 13:51:32', '0000-00-00 00:00:00'),
(25, 'Affiliate Program', 'Top_Right_Menu', '', 0, '2019-02-21 13:51:50', '0000-00-00 00:00:00'),
(26, 'tc asdfa', 'Top_Menu', 'n/a', 0, '2019-02-21 14:06:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mvc_365_posts`
--

CREATE TABLE `tb_mvc_365_posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `post_images` varchar(255) NOT NULL,
  `post_status` int(11) NOT NULL,
  `post_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_updated_at` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mvc_365_product`
--

CREATE TABLE `tb_mvc_365_product` (
  `product_id` int(11) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `subcat_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_company` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_offers` varchar(255) NOT NULL,
  `product_ratings` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_status` int(11) NOT NULL,
  `permission` int(11) NOT NULL,
  `product_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mvc_365_product`
--

INSERT INTO `tb_mvc_365_product` (`product_id`, `cat_id`, `subcat_id`, `product_name`, `product_company`, `product_price`, `product_description`, `product_offers`, `product_ratings`, `product_image`, `product_quantity`, `product_status`, `permission`, `product_created_at`, `product_updated_at`) VALUES
(19, '10', '13', 'LG L1001PG DEEP', 'YAMAHA', '25000', 'fgsffdg', 'fdgsdfg', 2, 'aims74061723657406172byke-world-ernakulam-358ib.jpg', 0, 0, 1, '2019-02-21 11:45:15', ''),
(21, '9', '13', 'LG L1001PG DEEP', 'dfgs', '43564654', 'sgdfsdfg', 'sfdgsf', 0, 'aims49143713654914371images.jpg', 0, 0, 0, '2019-02-19 12:42:02', ''),
(22, '9', '13', 'LG L1001PG DEEP', 'YAMAHA', '25000', 'fdgsfgsfg', 'sgfsfsgfsg', 0, 'asha69169853656916985byke.jpg', 0, 0, 0, '2019-02-19 12:47:47', ''),
(26, '10', '16', 'HONDA', 'LGfgsdghgfssdfg', '10000', '', '', 0, 'aims10149593651014959sadfadsfadsf.jpg', 0, 0, 0, '2019-02-20 15:23:41', ''),
(27, '14', '21', 'CRT WAL TV 2021S', 'WALTON', '8500', '', '', 0, 'aims93758933659375893p.png', 0, 0, 0, '2019-02-20 15:25:40', ''),
(28, '24', '16', 'LG L1001PG DEEP', 'YAMAHA', '43564654', 'asdfasdf asf', '10%', 0, 'aims80826036580826010628528_718027241578387_4388577438737061235_n.png', 0, 0, 0, '2019-02-21 09:23:17', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mvc_365_siteinfo`
--

CREATE TABLE `tb_mvc_365_siteinfo` (
  `siteinfo_id` int(11) NOT NULL,
  `siteinfo_title` varchar(255) NOT NULL,
  `siteinfo_name` varchar(255) NOT NULL,
  `siteinfo_contact` varchar(255) NOT NULL,
  `siteinfo_subcontact` varchar(255) NOT NULL,
  `siteinfo_slogan` varchar(255) NOT NULL,
  `siteinfo_address` text NOT NULL,
  `siteinfo_map` varchar(255) NOT NULL,
  `siteinfo_webmail` varchar(255) NOT NULL,
  `siteinfo_keywords` text NOT NULL,
  `siteinfo_discription` text NOT NULL,
  `siteinfo_copyright` varchar(255) NOT NULL,
  `siteinfo_tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mvc_365_siteinfo`
--

INSERT INTO `tb_mvc_365_siteinfo` (`siteinfo_id`, `siteinfo_title`, `siteinfo_name`, `siteinfo_contact`, `siteinfo_subcontact`, `siteinfo_slogan`, `siteinfo_address`, `siteinfo_map`, `siteinfo_webmail`, `siteinfo_keywords`, `siteinfo_discription`, `siteinfo_copyright`, `siteinfo_tags`) VALUES
(1, 'Diamanzza', 'Diamanzza', '0175154678', '21564546546465', 'naanadsnfasdfhnkjasdfhb', 'fdasklho;yhfjdaslsfgduiasrtfjdksbfgvjkladsfvnvkldafghjkasdh asdfadfaf sollllll\r\nadskfjadlkhfla;dhfoad adskfljadsfh;sdhf', 'map ', 'diamazza@gmil.com', 'na', 'na.', '2019', '1212121');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mvc_365_subcategory`
--

CREATE TABLE `tb_mvc_365_subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_catid` varchar(255) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `subcategory_tags` text NOT NULL,
  `subcategory_status` int(11) NOT NULL,
  `subcategory_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `subcategory_updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mvc_365_subcategory`
--

INSERT INTO `tb_mvc_365_subcategory` (`subcategory_id`, `subcategory_catid`, `subcategory_name`, `subcategory_tags`, `subcategory_status`, `subcategory_created_at`, `subcategory_updated_at`) VALUES
(13, '9', 'REFRIGERATOR', 'N/A', 0, '2019-02-19 11:54:36', ''),
(16, '10', 'ANDROID', '', 0, '2019-02-19 11:55:23', ''),
(17, '10', 'WINDOWS', '', 0, '2019-02-21 09:22:38', ''),
(18, '11', '150 CC', '', 0, '2019-02-19 11:55:58', ''),
(19, '11', '100 CC', '', 0, '2019-02-19 11:56:06', ''),
(20, '11', '50 CC', '', 0, '2019-02-19 11:56:16', ''),
(21, '12', 'NOVEL', '', 0, '2019-02-19 11:56:23', ''),
(22, '12', 'SCIENCE FICTION', '', 0, '2019-02-19 11:56:37', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mvc_365_theme`
--

CREATE TABLE `tb_mvc_365_theme` (
  `theme_id` int(11) NOT NULL,
  `theme_name` varchar(255) NOT NULL,
  `theme_thumbnails` varchar(255) NOT NULL,
  `theme_version` varchar(255) NOT NULL,
  `theme_status` int(11) NOT NULL,
  `theme_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `theme_expired_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mvc_365_theme`
--

INSERT INTO `tb_mvc_365_theme` (`theme_id`, `theme_name`, `theme_thumbnails`, `theme_version`, `theme_status`, `theme_created_at`, `theme_expired_at`) VALUES
(1, 'Diamonzza', 'dia.png', 'v-1.0.0.0', 1, '2019-02-21 09:58:38', '2024'),
(2, 'Kleider', 'kle.png', 'v-1.1.0.1', 0, '2019-02-21 09:58:38', '2025'),
(3, 'PurpleShop', 'pur.png', 'v-1.0.0.1', 0, '2019-02-21 09:56:43', '2030'),
(4, 'Default', 'def.png', 'v-1.0.0.0', 0, '2019-02-21 09:34:44', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mvc_365_user`
--

CREATE TABLE `tb_mvc_365_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_contact` varchar(255) NOT NULL,
  `user_address` text NOT NULL,
  `user_status` int(11) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mvc_365_user`
--

INSERT INTO `tb_mvc_365_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_contact`, `user_address`, `user_status`, `user_role`, `created_at`) VALUES
(1, 'admin', 'admin@mail.com', '21232f297a57a5a743894a0e4a801fc3', '+990 9090 909090', 'Dhaka, Bangladesh - 1209', 0, 'admin', '2019-02-12 07:18:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mvc_365_category`
--
ALTER TABLE `tb_mvc_365_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tb_mvc_365_pages`
--
ALTER TABLE `tb_mvc_365_pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `tb_mvc_365_posts`
--
ALTER TABLE `tb_mvc_365_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tb_mvc_365_product`
--
ALTER TABLE `tb_mvc_365_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tb_mvc_365_siteinfo`
--
ALTER TABLE `tb_mvc_365_siteinfo`
  ADD PRIMARY KEY (`siteinfo_id`);

--
-- Indexes for table `tb_mvc_365_subcategory`
--
ALTER TABLE `tb_mvc_365_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `tb_mvc_365_theme`
--
ALTER TABLE `tb_mvc_365_theme`
  ADD PRIMARY KEY (`theme_id`);

--
-- Indexes for table `tb_mvc_365_user`
--
ALTER TABLE `tb_mvc_365_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_mvc_365_category`
--
ALTER TABLE `tb_mvc_365_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_mvc_365_pages`
--
ALTER TABLE `tb_mvc_365_pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_mvc_365_posts`
--
ALTER TABLE `tb_mvc_365_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_mvc_365_product`
--
ALTER TABLE `tb_mvc_365_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_mvc_365_siteinfo`
--
ALTER TABLE `tb_mvc_365_siteinfo`
  MODIFY `siteinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_mvc_365_subcategory`
--
ALTER TABLE `tb_mvc_365_subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_mvc_365_theme`
--
ALTER TABLE `tb_mvc_365_theme`
  MODIFY `theme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_mvc_365_user`
--
ALTER TABLE `tb_mvc_365_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
