-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 11:07 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `office_photography`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `name`, `email`, `password`, `added_on`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123', '2021-03-10 05:29:33');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `career_id` int(11) NOT NULL,
  `job_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `experience` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`career_id`, `job_name`, `description`, `experience`, `location`, `status`, `added_on`) VALUES
(7, 'editor', 'test', '2', 'surat', 1, '2021-03-16 04:52:42'),
(10, 'Assistant Photography', 'Dsrl Knowlodge', '1 year exp', 'surat', 1, '2021-03-13 11:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `career_applied`
--

CREATE TABLE `career_applied` (
  `id` int(11) NOT NULL,
  `career_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career_applied`
--

INSERT INTO `career_applied` (`id`, `career_id`, `name`, `email`, `mobile`, `image`, `status`, `added_on`) VALUES
(12, 10, 'new', 'new@gmail.com', 2147483647, '20086728_a1-9.jpg', 1, '2021-03-18 08:53:58');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `c_name`, `description`, `image`, `status`, `added_on`) VALUES
(13, 'Fashion Shoot', 'You can have anything you want in life if you dress for it.', '91164351_a1-31.jpg ', 1, '2021-03-13 12:11:50'),
(14, 'Weeding Shoot', 'The most important thing at a wedding is to photograph the bride. ', '30739268_a1-26.jpg', 1, '2021-03-13 05:57:55'),
(27, 'Product Shoot', 'Taking pictures is savoring life intensely, every hundredth of a second. ', '44791718_a3-10.jpg', 1, '2021-03-17 18:29:33');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `msg` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `msg`, `status`, `added_on`) VALUES
(14, 'azhar', 'azhar.coderr@gmail.com', 2147483647, 'checl 1', 1, '2021-03-15 07:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `enquery`
--

CREATE TABLE `enquery` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquery`
--

INSERT INTO `enquery` (`id`, `c_id`, `name`, `email`, `mobile`, `city`, `msg`, `status`, `added_on`) VALUES
(5, 0, '$name', '$email', 0, '$city', '$msg', 1, '2021-03-13 11:53:07'),
(6, 0, '$name', '$email', 0, '$city', '$msg', 1, '2021-03-15 09:24:16'),
(7, 13, 'fashion', 'azhar.coderr@gmail.com', 2147483647, 'surat', 'sd', 1, '2021-03-15 09:26:18'),
(9, 27, 'admin', 'azhar@gmail.com', 1234567890, 'Surat', 'sdf', 1, '2021-03-18 05:52:50');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `review` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `review`, `image`, `status`, `added_on`) VALUES
(6, 'Angalina', 'ARS relies on YOU to change the future of photography. Upload your photos to ARS and start critiquing photos. ARS encourages artistic experimentation. Use ARS as a visual testing ground in order to share new visual imagery and develop your portfolio.', '88623238_insta-3.jpg', 1, '2021-03-12 05:40:36'),
(7, 'Priya', 'ARS is an online photography feedback platform driven by giving and receiving honest and constructive critiques. Through the clean and minimalist interface, photographers can develop their visual acuity through uploading their own photos, viewing photographs and contributing constructive critiques to others.', '80208807_insta-1.jpg', 1, '2021-03-12 06:45:06'),
(10, 'sd', 'd', '60054182_a1-2.jpg', 0, '2021-03-18 04:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `file`, `status`, `added_on`) VALUES
(11, './media/gallery/a1-9.jpg', 1, '2021-03-13 04:46:18'),
(12, './media/gallery/a1-27.jpg', 1, '2021-03-13 04:46:19'),
(13, './media/gallery/a1-36.jpg', 1, '2021-03-13 04:46:19'),
(14, './media/gallery/a3-2.jpg', 1, '2021-03-13 04:46:19'),
(15, './media/gallery/a3-4.jpg', 1, '2021-03-13 04:46:19'),
(16, './media/gallery/a3-5.jpg', 1, '2021-03-13 04:46:19'),
(17, './media/gallery/a3-7.jpg', 1, '2021-03-13 04:46:19'),
(18, './media/gallery/a3-12.jpg', 1, '2021-03-13 04:46:19'),
(19, './media/gallery/gallery5-4.jpg', 1, '2021-03-13 04:46:19'),
(20, './media/gallery/gallery5-5.jpg', 1, '2021-03-13 04:46:19'),
(21, './media/gallery/gallery5-8.jpg', 1, '2021-03-13 04:46:19'),
(22, './media/gallery/gallery5-12.jpg', 1, '2021-03-13 04:46:19'),
(23, './media/gallery/gallery5-13.jpg', 1, '2021-03-13 04:46:19'),
(24, './media/gallery/gallery5-14.jpg', 1, '2021-03-13 04:46:19'),
(25, './media/gallery/gallery5-16.jpg', 0, '2021-03-13 04:46:19'),
(26, './media/gallery/gallery5-17.jpg', 1, '2021-03-13 04:46:19'),
(27, './media/gallery/gallery5-18.jpg', 1, '2021-03-13 04:46:20'),
(28, './media/gallery/gallery5-19.jpg', 1, '2021-03-13 04:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`p_id`, `c_id`, `file`, `status`, `added_on`) VALUES
(56, 13, './media/portfolio/gallery3-7.jpg', 1, '2021-03-13 06:03:55'),
(57, 13, './media/portfolio/gallery5-2.jpg', 0, '2021-03-13 06:03:55'),
(58, 13, './media/portfolio/gallery5-3.jpg', 1, '2021-03-13 06:03:55'),
(59, 13, './media/portfolio/gallery5-10.jpg', 1, '2021-03-13 06:03:55'),
(60, 13, './media/portfolio/gallery6-1.jpg', 1, '2021-03-13 06:03:55'),
(61, 13, './media/portfolio/gallery6-5.jpg', 1, '2021-03-13 06:03:55'),
(62, 13, './media/portfolio/hero7-2.jpg', 1, '2021-03-13 06:03:55'),
(63, 14, './media/portfolio/a1-25.jpg', 1, '2021-03-13 06:04:43'),
(64, 14, './media/portfolio/a1-26.jpg', 1, '2021-03-13 06:04:43'),
(65, 14, './media/portfolio/a1-27.jpg', 1, '2021-03-13 06:04:43'),
(66, 14, './media/portfolio/a2-4.jpg', 1, '2021-03-13 06:04:43'),
(67, 14, './media/portfolio/blog-p-3.jpg', 1, '2021-03-13 06:04:43'),
(68, 14, './media/portfolio/insta-2.jpg', 1, '2021-03-13 06:04:43'),
(69, 14, './media/portfolio/sp-f-1.jpg', 1, '2021-03-13 06:04:44'),
(72, 14, 'media/portfolio/a1-1.jpg', 1, '2021-03-16 06:01:27'),
(73, 14, 'media/portfolio/a1-2.jpg', 1, '2021-03-16 06:01:27'),
(74, 14, 'media/portfolio/a1-3.jpg', 1, '2021-03-16 06:01:27'),
(75, 14, 'media/portfolio/a1-4.jpg', 1, '2021-03-16 06:01:27'),
(76, 14, 'media/portfolio/a1-5.jpg', 1, '2021-03-16 06:01:27'),
(77, 14, 'media/portfolio/a1-6.jpg', 1, '2021-03-16 06:01:27'),
(78, 14, 'media/portfolio/a1-7.jpg', 1, '2021-03-16 06:01:27'),
(79, 14, 'media/portfolio/a1-8.jpg', 1, '2021-03-16 06:01:27'),
(80, 14, 'media/portfolio/a1-9.jpg', 1, '2021-03-16 06:01:27'),
(84, 13, 'media/portfolio/a1-2.jpg', 1, '2021-03-18 06:05:11'),
(85, 13, 'media/portfolio/a1-3.jpg', 1, '2021-03-18 06:05:11'),
(86, 13, 'media/portfolio/a1-4.jpg', 0, '2021-03-18 06:05:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`career_id`);

--
-- Indexes for table `career_applied`
--
ALTER TABLE `career_applied`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquery`
--
ALTER TABLE `enquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `career_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `career_applied`
--
ALTER TABLE `career_applied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `enquery`
--
ALTER TABLE `enquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
