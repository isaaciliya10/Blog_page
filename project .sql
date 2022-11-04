-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 01:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_post`
--

CREATE TABLE `add_post` (
  `id` int(11) NOT NULL,
  `datetime` varchar(240) NOT NULL,
  `author` varchar(240) NOT NULL,
  `category` varchar(240) NOT NULL,
  `title` varchar(240) NOT NULL,
  `image` varchar(240) NOT NULL,
  `content` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_post`
--

INSERT INTO `add_post` (`id`, `datetime`, `author`, `category`, `title`, `image`, `content`) VALUES
(77, 'February-01-2022 20:58:24', 'Admin', 'Education', 'Computer is an advanced ', '191296-manchester-united-wallpaper-2560x1600-for-ipad-pro.jpg', 'Computer is an advanced electronic device that takes raw data as an input from the user and processes it under the control of a set of instructions (called program), produces a result (output), and saves it for future use. \r\nThis tutorial explains the foundational concepts of computer hardware, software, operating systems, peripherals, etc. along with how to get the most value and impact from computer technology. \r\n'),
(78, 'February-01-2022 20:59:06', 'Admin', 'Business', 'social active', '2010_the_expendables_movie-1600x1200.jpg', 'Computer is an advanced  Computer is an advanced  Computer is an advanced  Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced '),
(79, 'February-01-2022 20:59:33', 'Admin', 'Religious', 'Computer is an advanced ', 'amazing_battlefield_3-1920x1080.jpg', 'Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced Computer is an advanced '),
(80, 'February-03-2022 01:50:49', 'Admin', 'Polities', 'SHOW MORE', 'img2.jpeg', 'HTML handles the content of a web page. If your content requires extra spacing to make sense, you can try any of the methods below.\r\nHowever, if you want to add space for styling purposes (for instance, whitespace between elements), we recommend using CSS instead — jump to the next'),
(82, 'February-03-2022 01:51:32', 'Admin', 'Business', 'Most Recent', 'img3.jpeg', 'HTML handles the content of a web page. If your content requires extra spacing to make sense, you can try any of the methods below.\r\nHowever, if you want to add space for styling purposes (for instance, whitespace between elements), we recommend using CSS instead — jump to the next'),
(86, 'February-06-2022 23:28:25', 'Admin', 'Polities', 'The Face Of Nigeria', '2011_deus_ex_human_revolution-1920x1200.jpg', ' reviewing the first page of Google for each keyword. Look to see if there are well established by reviewing the first page of Google reviewing the first page of Google for each keyword. Look to see if there are well established by reviewing the first page of Google reviewing the first page of Google for each keyword. Look to see if there are well established by reviewing the first page of Google reviewing the first page of Google for each keyword. Look to see if there are well established by reviewing the first page of Google'),
(102, 'February-28-2022 08:23:39', 'Admin', '', 'Admin DashBoard ', 'Add a heading.jpg', 'Admin DashBoard  Admin DashBoard  Admin DashBoard  Admin DashBoard '),
(105, 'April-07-2022 11:41:03', 'Admin', '', 'Premier Repor', '221224-large-manchester-united-wallpaper-1920x1080.jpg', 'Premier ReporPremier ReporPremier ReporPremier ReporPremier ReporPremier Repor'),
(106, 'April-07-2022 11:49:33', 'Admin', 'Health', 'Premier Repor', '221224-large-manchester-united-wallpaper-1920x1080.jpg', 'Premier ReporPremier ReporPremier ReporPremier ReporPremier ReporPremier Repor');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(240) NOT NULL,
  `surname` varchar(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `image` varchar(11) NOT NULL,
  `password` varchar(240) NOT NULL,
  `confirm_password` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `surname`, `email`, `image`, `password`, `confirm_password`) VALUES
(20, 'iliya', 'Faive', 'isaaciliya10@gmail.com', 'Green Lawn ', '1234', ''),
(21, 'isaac', 'Faive', 'iliyafaive@gmail.com', 'Green Blue ', '1234', ''),
(22, 'iliya', 'Faive', 'isaaciliya10@gmail.com', '221193-manc', '1234', ''),
(23, 'iliya', 'Faive', 'isaaciliya10@gmail.com', '221212-manc', '1234', ''),
(24, 'isaac', 'Faive', 'isaaciliya10@gmail.com', '221212-manc', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `advert`
--

CREATE TABLE `advert` (
  `id` int(11) NOT NULL,
  `advert_title` varchar(240) NOT NULL,
  `advert_image` varchar(540) NOT NULL,
  `advert_content` varchar(700) NOT NULL,
  `date_time` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advert`
--

INSERT INTO `advert` (`id`, `advert_title`, `advert_image`, `advert_content`, `date_time`) VALUES
(14, 'Learn Coding in Two weeks', 'Green Blue Minimalist Earth Day On Instagram Post.gif', 'Visit Our Website For 20% Discount WWW.premierreport.com.ng', 'March-05-20'),
(16, 'Learn Coding in Two weeks', 'promo.gif', 'Visit Our Website For 20% Discount WWW.premierreport.com.ng', 'March-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `id` int(11) NOT NULL,
  `author` varchar(240) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `category` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`id`, `author`, `datetime`, `category`) VALUES
(50, 'Admin', 'January-27-2022 21:29:36', 'Entertainment'),
(53, 'Admin', 'February-06-2022 19:00:01', 'Health'),
(54, 'Admin', 'February-06-2022 19:00:22', 'Business'),
(55, 'Admin', 'February-06-2022 19:00:41', 'Religious'),
(56, 'Admin', 'February-06-2022 19:00:52', 'Polities'),
(57, 'Admin', 'February-06-2022 19:01:02', 'Education'),
(58, 'Admin', 'February-06-2022 19:01:17', 'Entertainment'),
(59, 'Admin', 'February-06-2022 19:01:27', 'Sport'),
(60, 'Admin', 'February-27-2022 23:07:49', 'Celebrity');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `datetime` varchar(20) NOT NULL,
  `image` varchar(240) NOT NULL,
  `name` varchar(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `status` varchar(240) NOT NULL,
  `comment` varchar(240) NOT NULL,
  `post_comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `datetime`, `image`, `name`, `email`, `status`, `comment`, `post_comment_id`) VALUES
(97, 'February-14-2022 14:', 'images.jpg', 'RELIGION', 'isaaciliya10@gmail.com', 'ON', ' reviewing the first page of Google for each keyword. Look to see if there are well established by reviewing the first page of Google', 86),
(111, 'February-15-2022 00:', '2010_inception-1920x1200.jpg', 'POLITIES', 'isaaciliya10@gmail.com', 'OFF', 'instead — jump to the next instead — jump to the next instead — jump to the next', 80),
(114, 'February-15-2022 11:', '2011_homefront_game-1920x1200.jpg', 'Iliya123', 'isaaciliya10@gmail.com', 'OFF', 'However, if you want to add space for styling purposes (for instance, white space between elements), we recommend using CSS', 80),
(117, 'February-17-2022 17:', 'CAM00281.jpg', 'EDUCATION', 'iliyafaive@gmail.com', 'OFF', 'Buy Brand New Laptop Computers From G-Skills Computer At Lower Price They Offer 20% Promo', 77),
(122, 'April-07-2022 11:50:', '221193-manchester-united-wallpaper-2560x1600-for-phone.jpg', 'Religion', 'marcelngdev@gmail.com', 'ON', 'category category category category category', 106);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_post`
--
ALTER TABLE `add_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_comment_id` (`post_comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_post`
--
ALTER TABLE `add_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `advert`
--
ALTER TABLE `advert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`post_comment_id`) REFERENCES `add_post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
