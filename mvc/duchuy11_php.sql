-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2018 at 11:36 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duchuy11_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_title` varchar(500) NOT NULL,
  `news_description` text NOT NULL,
  `news_date` varchar(50) NOT NULL,
  `news_author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_description`, `news_date`, `news_author`) VALUES
(7, 'Há»‡ thá»‘ng Tháº¿ Giá»›i Di Äá»™ng khÃ´ng bá»‹ táº¥n cÃ´ng máº¡ng', 'Theo Cá»¥c An toÃ n ThÃ´ng tin (Bá»™ ThÃ´ng tin vÃ  Truyá»n thÃ´ng), Ä‘áº¿n nay chÆ°a nháº­n tháº¥y cÃ³ dáº¥u hiá»‡u táº¥n cÃ´ng máº¡ng vÃ o cÃ¡c há»‡ thá»‘ng cá»§a Tháº¿ Giá»›i Di Äá»™ng. ÄÆ¡n vá»‹ nÃ y cÅ©ng kháº³ng Ä‘á»‹nh cÃ¡c thÃ´ng tin quan trá»ng cá»§a tháº» tÃ­n dá»¥ng khÃ¡ch hÃ ng khÃ´ng Ä‘Æ°á»£c lÆ°u trá»¯ trÃªn há»‡ thá»‘ng do Tháº¿ Giá»›i Di Äá»™ng quáº£n lÃ½.\r\n\r\n\"Vá»›i thá»±c tráº¡ng nháº­n thá»©c hiá»‡n nay cá»§a ngÆ°á»i dÃ¹ng, doanh nghiá»‡p á»Ÿ Viá»‡t Nam vá» viá»‡c báº£o vá»‡ thÃ´ng tin cÃ¡ nhÃ¢n, thÃ´ng tin email cÃ³ thá»ƒ Ä‘Æ°á»£c thu tháº­p tá»« nhiá»u nguá»“n khÃ¡c nhau vÃ  cÃ³ thá»ƒ tá»«ng bá»‹ lá»™ trÆ°á»›c Ä‘Ã¢y, hoáº·c bá»‹ lá»«a Ä‘áº£o\", Cá»¥c cho biáº¿t', '05:31 PM - 10/11/2018', '1'),
(8, 'Loáº¡t smartphone giÃ¡ tháº¥p nhÆ°ng pin lá»›n á»Ÿ Viá»‡t Nam', 'MÃ n hÃ¬nh 5,5 inch, loa kÃ©p stereo vÃ  pin lá»›n 4.000 mAh há»©a háº¹n cho thá»i gian sá»­ dá»¥ng lÃªn tá»›i 2 ngÃ y lÃ  nhá»¯ng Ä‘iá»ƒm Ä‘Ã¡ng chÃº Ã½ trÃªn smartphone giÃ¡ ráº» má»›i tá»« Nokia. Sáº£n pháº©m cÃ²n Ä‘Æ°á»£c cÃ i Ä‘áº·t há»‡ Ä‘iá»u hÃ nh Android Go Edition nháº±m tá»‘i Æ°u tráº£i nghiá»‡m trÃªn nhá»¯ng smartphone phá»• thÃ´ng, giáº£m hiá»‡n tÆ°á»£ng giáº­t lag. MÃ n hÃ¬nh 5,5 inch cÃ³ Ä‘á»™ phÃ¢n giáº£i HD. ThÃ´ng sá»‘ ká»¹ thuáº­t cá»§a Nokia 2.1 háº¡n cháº¿ á»Ÿ dung lÆ°á»£ng RAM chá»‰ cÃ³ 1 GB dÃ¹ Ä‘i kÃ¨m chip Snapdagon 425.\r\n\r\n', '05:31 PM - 10/11/2018', '1');

-- --------------------------------------------------------

--
-- Table structure for table `news_comment`
--

CREATE TABLE `news_comment` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `news_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_comment`
--

INSERT INTO `news_comment` (`id`, `username`, `comment`, `news_id`) VALUES
(60, '1', 'a', 7),
(61, '1', 'b', 7),
(62, '1', 'c', 7),
(63, '1', 'r', 8),
(64, '1', 's', 8),
(65, '1', '2', 8),
(66, 'duchuy22', 'fsaf', 7),
(67, 'duchuy22', 'fsaf', 8),
(68, 'rudenhuy', 'ewqeqw', 7),
(69, 'rudenhuy', 'ewqeqw', 8),
(70, 'rudenhuy', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news_likes`
--

CREATE TABLE `news_likes` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_likes`
--

INSERT INTO `news_likes` (`id`, `news_id`, `user_id`) VALUES
(1, 1, 0),
(2, 1, 0),
(3, 1, 0),
(4, 1, 0),
(6, 1, 0),
(7, 1, 0),
(8, 1, 0),
(9, 1, 0),
(11, 1, 0),
(12, 1, 0),
(13, 1, 93),
(14, 1, 93),
(15, 1, 93),
(16, 4, 93),
(17, 4, 94),
(18, 6, 94),
(19, 8, 94);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_comment`
--
ALTER TABLE `news_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_likes`
--
ALTER TABLE `news_likes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news_comment`
--
ALTER TABLE `news_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `news_likes`
--
ALTER TABLE `news_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
