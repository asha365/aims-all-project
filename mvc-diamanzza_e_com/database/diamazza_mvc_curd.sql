-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2019 at 05:15 PM
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
-- Database: `diamazza_mvc_curd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mvc_e_com_theme`
--

CREATE TABLE `tb_mvc_e_com_theme` (
  `theme_id` int(11) NOT NULL,
  `theme_name` varchar(255) NOT NULL,
  `theme_version` varchar(255) NOT NULL,
  `theme_status` varchar(255) NOT NULL,
  `theme_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `theme_expired_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mvc_e_com_theme`
--

INSERT INTO `tb_mvc_e_com_theme` (`theme_id`, `theme_name`, `theme_version`, `theme_status`, `theme_created_at`, `theme_expired_at`) VALUES
(1, 'Diamazza', '', '1', '2019-02-13 13:13:12', ''),
(2, '', '', '1', '2019-02-13 13:09:26', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mvc_e_com_user`
--

CREATE TABLE `tb_mvc_e_com_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_contact` varchar(255) NOT NULL,
  `user_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mvc_e_com_theme`
--
ALTER TABLE `tb_mvc_e_com_theme`
  ADD PRIMARY KEY (`theme_id`);

--
-- Indexes for table `tb_mvc_e_com_user`
--
ALTER TABLE `tb_mvc_e_com_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_mvc_e_com_theme`
--
ALTER TABLE `tb_mvc_e_com_theme`
  MODIFY `theme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_mvc_e_com_user`
--
ALTER TABLE `tb_mvc_e_com_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
