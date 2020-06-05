-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 04:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vintek`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(55) NOT NULL,
  `post_date` varchar(70) NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` text NOT NULL,
  `post_comment_count` int(3) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_views_count` int(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `post_views_count`) VALUES
(59, 15, 'PHP is much better than you think', 'Admin', 'Wed, September 13, 2017 - 10:44:02 AM', '250px-Screw_Driver_display.jpg', '<p><em>Rants about PHP are everywhere, and they even come from smart guys. When Jeff Atwood wrote yet another rant about PHP, it made me think about the good parts of PHP. The biggest problem of these rants is that they come from people stuck in the old days of PHP. They either dont care or they dont want to admit that PHP actually evolves at a very fast pace, both at the language level but also at the community level. In fact, it evolves much faster than any other language or web platform. It has not always been the case, but the last 5 years have been an amazing journey for PHP</em></p>', 'php', 1, 'publish', 0),
(63, 15, 'The money insight', 'Admin', 'Thu, April 30, 2020 - 04:10:03 PM', 'A-simplified-database-schema-for-e-commerce-transaction-processing.png', '<p>You can make as much as you can this period. <em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em></p>\r\n<p>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em></p>', 'money, games, lifestyle, economy', 0, 'publish', 0),
(64, 15, 'The money insight', 'Admin', 'Thu, April 30, 2020 - 04:10:03 PM', 'A-simplified-database-schema-for-e-commerce-transaction-processing.png', '<p>You can make as much as you can this period. <em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em></p>\r\n<p>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em></p>', 'money, games, lifestyle, economy', 0, 'publish', 0),
(65, 15, 'PHP is much better than you think', 'Admin', 'Wed, September 13, 2017 - 10:44:02 AM', '250px-Screw_Driver_display.jpg', '<p><em>Rants about PHP are everywhere, and they even come from smart guys. When Jeff Atwood wrote yet another rant about PHP, it made me think about the good parts of PHP. The biggest problem of these rants is that they come from people stuck in the old days of PHP. They either dont care or they dont want to admit that PHP actually evolves at a very fast pace, both at the language level but also at the community level. In fact, it evolves much faster than any other language or web platform. It has not always been the case, but the last 5 years have been an amazing journey for PHP</em></p>', 'php', 0, 'publish', 0),
(66, 15, 'PHP is much better than you think', 'Admin', 'Wed, September 13, 2017 - 10:44:02 AM', '250px-Screw_Driver_display.jpg', '<p><em>Rants about PHP are everywhere, and they even come from smart guys. When Jeff Atwood wrote yet another rant about PHP, it made me think about the good parts of PHP. The biggest problem of these rants is that they come from people stuck in the old days of PHP. They either dont care or they dont want to admit that PHP actually evolves at a very fast pace, both at the language level but also at the community level. In fact, it evolves much faster than any other language or web platform. It has not always been the case, but the last 5 years have been an amazing journey for PHP</em></p>', 'php', 0, 'publish', 0),
(67, 15, 'The money insight', 'Admin', 'Thu, April 30, 2020 - 04:10:03 PM', 'A-simplified-database-schema-for-e-commerce-transaction-processing.png', '<p>You can make as much as you can this period. <em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em></p>\r\n<p>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em></p>', 'money, games, lifestyle, economy', 0, 'publish', 0),
(68, 15, 'The money insight', 'Admin', 'Thu, April 30, 2020 - 04:10:03 PM', 'A-simplified-database-schema-for-e-commerce-transaction-processing.png', '<p>You can make as much as you can this period. <em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em></p>\r\n<p>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em></p>', 'money, games, lifestyle, economy', 0, 'publish', 0),
(69, 15, 'PHP is much better than you think', 'Admin', 'Wed, September 13, 2017 - 10:44:02 AM', '250px-Screw_Driver_display.jpg', '<p><em>Rants about PHP are everywhere, and they even come from smart guys. When Jeff Atwood wrote yet another rant about PHP, it made me think about the good parts of PHP. The biggest problem of these rants is that they come from people stuck in the old days of PHP. They either dont care or they dont want to admit that PHP actually evolves at a very fast pace, both at the language level but also at the community level. In fact, it evolves much faster than any other language or web platform. It has not always been the case, but the last 5 years have been an amazing journey for PHP</em></p>', 'php', 0, 'publish', 0),
(70, 15, 'PHP is much better than you think', 'Admin', 'Wed, September 13, 2017 - 10:44:02 AM', '250px-Screw_Driver_display.jpg', '<p><em>Rants about PHP are everywhere, and they even come from smart guys. When Jeff Atwood wrote yet another rant about PHP, it made me think about the good parts of PHP. The biggest problem of these rants is that they come from people stuck in the old days of PHP. They either dont care or they dont want to admit that PHP actually evolves at a very fast pace, both at the language level but also at the community level. In fact, it evolves much faster than any other language or web platform. It has not always been the case, but the last 5 years have been an amazing journey for PHP</em></p>', 'php', 0, 'publish', 0),
(71, 15, 'The money insight', 'Admin', 'Thu, April 30, 2020 - 04:10:03 PM', 'A-simplified-database-schema-for-e-commerce-transaction-processing.png', '<p>You can make as much as you can this period. <em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em></p>\r\n<p>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em></p>', 'money, games, lifestyle, economy', 0, 'publish', 0),
(72, 15, 'The money insight', 'Admin', 'Thu, April 30, 2020 - 04:10:03 PM', 'A-simplified-database-schema-for-e-commerce-transaction-processing.png', '<p>You can make as much as you can this period. <em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em></p>\r\n<p>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent&nbsp;</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em>You can make as much as you can this period.&nbsp;<em><strong>You just have to be consistent</strong></em></p>', 'money, games, lifestyle, economy', 0, 'publish', 0),
(73, 15, 'PHP is much better than you think', 'Admin', 'Wed, September 13, 2017 - 10:44:02 AM', '250px-Screw_Driver_display.jpg', '<p><em>Rants about PHP are everywhere, and they even come from smart guys. When Jeff Atwood wrote yet another rant about PHP, it made me think about the good parts of PHP. The biggest problem of these rants is that they come from people stuck in the old days of PHP. They either dont care or they dont want to admit that PHP actually evolves at a very fast pace, both at the language level but also at the community level. In fact, it evolves much faster than any other language or web platform. It has not always been the case, but the last 5 years have been an amazing journey for PHP</em></p>\r\n<p><em>jhk</em></p>', 'php', 0, 'publish', 0),
(74, 15, 'MY LATEST POST', 'Admin', 'Fri, May 01, 2020 - 06:08:27 PM', 'A-Package-diagram-with-logical-components-of-e-commerce-systems.png', '<p>na we dey run am</p>', 'games, food, women', 0, 'publish', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
