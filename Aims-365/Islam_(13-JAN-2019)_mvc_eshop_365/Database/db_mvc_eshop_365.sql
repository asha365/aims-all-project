-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2019 at 05:09 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

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
(1, 'Diamonzza', 'dia.png', 'v-1.0.0.0', 1, '2019-02-13 16:09:18', '2024'),
(2, 'Kleider', 'kle.png', 'v-1.1.0.1', 0, '2019-02-13 16:09:10', '2025'),
(3, 'PurpleShop', 'pur.png', 'v-1.0.0.1', 0, '2019-02-13 16:09:09', '2030');

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
-- AUTO_INCREMENT for table `tb_mvc_365_theme`
--
ALTER TABLE `tb_mvc_365_theme`
  MODIFY `theme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_mvc_365_user`
--
ALTER TABLE `tb_mvc_365_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
