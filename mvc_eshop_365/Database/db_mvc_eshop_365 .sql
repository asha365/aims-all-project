-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2019 at 09:31 AM
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
(21, 'test CAT ', 1, ' ', '2019-02-21 09:22:00', ''),
(23, 'SADFASDF', 0, 'ASDFSA', '2019-02-21 09:00:38', ''),
(35, 'Woman Dress', 0, '', '2019-02-21 19:28:02', ''),
(36, 'jewelry ', 0, '', '2019-02-21 19:29:23', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mvc_365_media`
--

CREATE TABLE `tb_mvc_365_media` (
  `media_id` int(11) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `media_status` int(11) NOT NULL,
  `media_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mvc_365_media`
--

INSERT INTO `tb_mvc_365_media` (`media_id`, `media_name`, `media_status`, `media_created_at`) VALUES
(7, 'aims172236517221.png', 0, '2019-02-24 08:28:11'),
(8, 'aims4715786365471578620180821070254_file_5b7c61de485fb.jpg', 0, '2019-02-24 08:28:17'),
(9, 'aims97550453659755045happy-valentine-day-wallpaper-2019-8.jpg', 0, '2019-02-24 08:28:24');

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
(22, 'Site Map11', 'Top_Menu', '', 1, '2019-02-22 13:22:09', '0000-00-00 00:00:00'),
(23, 'Helps & Suports', 'Top_Sub_Menu', '', 1, '2019-02-22 13:22:10', '0000-00-00 00:00:00'),
(24, 'Helps & Suports', 'Top_Left_Menu', '', 0, '2019-02-21 13:51:32', '0000-00-00 00:00:00'),
(25, 'Affiliate Program', 'Top_Right_Menu', '', 0, '2019-02-21 13:51:50', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mvc_365_posts`
--

CREATE TABLE `tb_mvc_365_posts` (
  `post_id` int(11) NOT NULL,
  `post_page_id` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `post_images` varchar(255) NOT NULL,
  `post_tags` text NOT NULL,
  `post_status` int(11) NOT NULL,
  `post_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_updated_at` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mvc_365_posts`
--

INSERT INTO `tb_mvc_365_posts` (`post_id`, `post_page_id`, `post_title`, `post_content`, `post_images`, `post_tags`, `post_status`, `post_created_at`, `post_updated_at`, `post_author`) VALUES
(1, '23', 'NO HELP NO SUPPORT', 'DUMMY CONTENT FOR HELPS PAGE.. ', '', '', 0, '2019-02-24 05:08:52', '', ''),
(3, '23', 'english', 'math', '', 'done', 0, '2019-02-23 14:46:10', '', '');

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
(29, '10', '25', 'oppo j7', 'oppo', '400000', 'n/a', '10% discount', 0, 'aims792499136579249913.-iphone-7-100643969-large.jpg', 0, 0, 1, '2019-02-21 19:40:54', ''),
(31, '10', '27', 'Sumsung j7', 'samsung', '6000000', 'n/a', '', 0, 'aims1914849365191484981b7oHjvbbL._SX569_.jpg', 0, 0, 1, '2019-02-21 19:40:40', ''),
(33, '10', '23', 'soumy', 'microsoft ', '20000', 'n/a', '', 0, 'aims67192563656719256sprint_samsung_galaxy_s6_blue_front_back.jpg', 0, 1, 1, '2019-02-21 20:16:38', ''),
(34, '10', '24', 'itel 1212', ' itel', '14000', 'n/a', '', 0, 'aims54200723655420072download.jpg', 0, 0, 0, '2019-02-21 19:43:23', ''),
(35, '11', '20', 'Honda', 'Honda', '14000000', 'n/a', '', 0, 'aims75235603657523560_downloadfiles_wallpapers_1280_960_yamaha_r6_sports_bike_3717.jpg', 0, 0, 1, '2019-02-21 20:13:59', ''),
(36, '11', '19', 'discovere honda', 'Discover', '2,2500000', 'n/a', '', 0, 'aims163434936516343491.jpg', 0, 0, 1, '2019-02-21 20:14:02', ''),
(37, '11', '18', 'Yamaha', 'YAMAHA', '30000000000', 'n/a', '', 0, 'aims892129536589212953.jpg', 0, 0, 0, '2019-02-21 19:48:26', ''),
(38, '11', '18', 'TVS', 'tvs', '10000000', 'n/a', '', 0, 'aims4863497365486349744.jpg', 0, 0, 1, '2019-02-21 20:15:22', ''),
(39, '11', '19', 'Rangs', 'Rangs', '200000', 'n/a', '', 0, 'aims7827175365782717535977074-ktm-bike-images.jpg', 0, 0, 0, '2019-02-21 19:50:39', ''),
(40, '11', '18', 'tvs', 'tvs', '100000000', 'n/a', '', 0, 'aims6498163365649816333.jpg', 0, 0, 1, '2019-02-21 20:14:07', ''),
(41, '35', '31', 'Share', 'epm ltd', '2500', 'n/a', '', 0, 'aims16247303651624730images.jpg', 0, 0, 1, '2019-02-21 20:14:10', ''),
(42, '35', '31', 'share', 'share', '14000', 'n/a', '', 0, 'aims58297443655829744free-618s504-saara-original-imaf4yypb2hkvjwv.jpeg', 0, 0, 1, '2019-02-21 20:14:18', ''),
(43, '35', '31', 'shari', 'shari company ltd', '12000', 'n/a', '', 0, 'aims66155673656615567free-siya-shree-maruti-enterprise-original-imaf4trdj4xdxjjy.jpeg', 0, 0, 1, '2019-02-21 20:14:15', ''),
(44, '35', '32', 'three pice', 'evp company ltd', '10000', '', '', 0, 'aims20625563652062556Ladies Dress Material.jpg', 0, 0, 1, '2019-02-21 20:14:29', ''),
(45, '35', '32', 'three pice', 'evp company ltd', '80000', 'n/a', '10%', 0, 'aims11981143651198114samay_1008-500x500.jpg', 0, 1, 1, '2019-02-21 20:16:33', ''),
(46, '35', '32', 'three pice', 'dell', '12000', 'n/a', '', 0, 'aims18020183651802018R-R-Fashion-Nayra-Casual-Wear-Fancy-Ladies-Dress-Materials-Wholesaler-2.jpeg', 0, 0, 1, '2019-02-21 20:14:23', ''),
(47, '35', '32', 'three pice', 'style ltd ', '14000', 'n/a', '', 0, 'aims56309353655630935Ladies Dress Material.jpg', 0, 0, 0, '2019-02-21 20:00:25', ''),
(48, '35', '33', 'lahanga ', 'asdfasd', '14000', 'afaaad', 'fada', 0, 'aims49808793654980879women-clothes-500x500.png', 0, 0, 0, '2019-02-21 20:01:21', ''),
(49, '35', '33', 'three lehanga', 'ltd', '10000', 'dfadf', 'afaf', 0, 'aims81763923658176392HD-D179-fashion-ready-made-summer-women.jpg_350x350.jpg', 0, 0, 1, '2019-02-21 20:14:33', ''),
(50, '36', '28', 'jewelry stong', 'lg company', '14000', 'n/a', '10%', 0, 'aims43751653654375165nfaJ96.jpg', 0, 0, 0, '2019-02-21 20:05:11', ''),
(51, '35', '30', 'jewelry golden', 'lsp compnay', '12000', 'n/a', '10% discount', 0, 'aims3377838365337783836647c98f3c43bd228fb293d230020b6.jpg', 0, 0, 1, '2019-02-21 20:14:41', ''),
(52, '36', '29', 'Daimon nekless', 'sps company ltd', '10000', 'n/a', 'agg', 0, 'aims91930673659193067ff7e11f22215c74b99187c6619f5a37e.jpg', 0, 0, 1, '2019-02-21 20:15:07', ''),
(53, '36', '28', 'jewelry golden', 'sps company ltd', '10000', 'n/a', '10% discount', 0, 'aims96572643659657264thumb-350-368965.jpg', 0, 0, 1, '2019-02-21 20:14:38', ''),
(54, '36', '29', 'jewelry ', 'wws company ltd', '10000', 'n/a', '10% discount', 0, 'aims32291073653229107nfaJ96.jpg', 0, 1, 1, '2019-02-21 20:16:14', ''),
(55, '36', '28', 'jewelry golden', 'sps company ltd ', '14000', 'n/a', '10% discount', 0, 'aims984342365984342golden-jewellery-bangle-set-wide-hd-new-desktop-background-free-cool-widescreen-artworks-1680x1050.jpg', 0, 0, 0, '2019-02-21 20:11:25', ''),
(56, '36', '30', 'jewelry golden', 'sps company ltd', '12000', 'n/a', '10% discount', 0, 'aims62785703656278570jewellery-model.png', 0, 0, 1, '2019-02-21 20:14:45', ''),
(57, '36', '28', 'jewelry golden', 'evp company ltd', '10000', 'n/a', '10% discount', 0, 'aims74620993657462099jewellery-wallpaper-hd.jpg', 0, 0, 1, '2019-02-21 20:13:47', '');

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
(1, 'Muttaqwi in Corporation', 'MI Corporation', '0175154678', '21564546546465', 'Buy more get free. ', 'fdasklho;yhfjdaslsfgduiasrtfjdksbfgvjkladsfvnvkldafghjkasdh asdfadfaf sollllll\r\nadskfjadlkhfla;dhfoad adskfljadsfh;sdhf', 'map ', 'diamazza@gmil.com', 'na', 'na.', '2019', '1212121');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mvc_365_slider`
--

CREATE TABLE `tb_mvc_365_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `slider_pin` int(11) NOT NULL,
  `slider_status` int(11) NOT NULL,
  `slider_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mvc_365_slider`
--

INSERT INTO `tb_mvc_365_slider` (`slider_id`, `slider_image`, `slider_pin`, `slider_status`, `slider_created_at`) VALUES
(6, 'aims735356936573535691497000058-alstrom.jpg', 0, 1, '2019-02-24 07:02:32'),
(7, 'aims337490836533749081d08a40931fb52e0bea064fe45b1b641.jpg', 1, 1, '2019-02-24 07:10:35'),
(8, 'aims54836133655483613Capture.PNG', 0, 0, '2019-02-24 07:10:44'),
(9, 'aims78935563657893556roses-wallpaper-hd_620699867.jpg', 0, 0, '2019-02-24 07:54:38');

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
(22, '12', 'SCIENCE FICTION', '', 0, '2019-02-19 11:56:37', ''),
(23, '10', 'symphone v46', '', 0, '2019-02-21 19:24:12', ''),
(24, '10', 'j7', '', 0, '2019-02-21 19:24:26', ''),
(25, '10', 'oppo', '', 0, '2019-02-21 19:24:39', ''),
(26, '10', 'nokia', '', 0, '2019-02-21 19:25:39', ''),
(27, '10', 'samsung j6', '', 0, '2019-02-21 19:27:31', ''),
(28, '36', 'jewelry stron', '', 0, '2019-02-21 19:30:15', ''),
(29, '36', 'Daimon', '', 0, '2019-02-21 19:30:54', ''),
(30, '36', ' Golden', '', 0, '2019-02-21 19:32:33', ''),
(31, '35', 'share', '', 0, '2019-02-21 19:52:44', ''),
(32, '35', 'three pice', '', 0, '2019-02-21 19:53:11', ''),
(33, '35', 'Lehega', '', 0, '2019-02-21 19:53:26', ''),
(34, '35', 'shelewor', '', 0, '2019-02-21 19:53:43', '');

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
(1, 'Diamonzza', 'dia.png', 'v-1.0.0.0', 1, '2019-02-24 05:29:59', '2024'),
(2, 'Kleider', 'kle.png', 'v-1.1.0.1', 0, '2019-02-24 05:29:57', '2025'),
(3, 'PurpleShop', 'pur.png', 'v-1.0.0.1', 0, '2019-02-24 05:29:59', '2030'),
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
-- Indexes for table `tb_mvc_365_media`
--
ALTER TABLE `tb_mvc_365_media`
  ADD PRIMARY KEY (`media_id`);

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
-- Indexes for table `tb_mvc_365_slider`
--
ALTER TABLE `tb_mvc_365_slider`
  ADD PRIMARY KEY (`slider_id`);

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
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_mvc_365_media`
--
ALTER TABLE `tb_mvc_365_media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_mvc_365_pages`
--
ALTER TABLE `tb_mvc_365_pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_mvc_365_posts`
--
ALTER TABLE `tb_mvc_365_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_mvc_365_product`
--
ALTER TABLE `tb_mvc_365_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tb_mvc_365_siteinfo`
--
ALTER TABLE `tb_mvc_365_siteinfo`
  MODIFY `siteinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_mvc_365_slider`
--
ALTER TABLE `tb_mvc_365_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_mvc_365_subcategory`
--
ALTER TABLE `tb_mvc_365_subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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
