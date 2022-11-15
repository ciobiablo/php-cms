-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 26, 2018 at 12:01 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_title` varchar(255) NOT NULL,
  `menu_content` text NOT NULL,
  `menu_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_title`, `menu_content`, `menu_date`) VALUES
(3, 'Header Menü', '[{\"title\":\"ilk men\\u00fc\",\"url\":\"test\"},{\"title\":\"Referanslar\",\"url\":\"\\/cms\\/referanslar\",\"submenu\":[{\"title\":\"Mobil Uygulama\",\"url\":\"mobil-uygulama\"},{\"title\":\"deneme\",\"url\":\"deneme\"},{\"title\":\"Web Yaz\\u0131l\\u0131m\",\"url\":\"web-yazilim\"},{\"title\":\"Web Tasar\\u0131m\",\"url\":\"web-tasarim\"}]},{\"title\":\"Blog\",\"url\":\"\\/cms\\/blog\"},{\"title\":\"Anasayfa\",\"url\":\"linkindex.php\"},{\"title\":\"Hakk\\u0131mda\",\"url\":\"\\/cms\\/sayfa\\/hakkimda\"},{\"title\":\"\\u0130leti\\u015fim\",\"url\":\"iletisim\"}]', '2018-04-15 21:19:36'),
(5, 'Footer Sosyal Ağlar', '[{\"title\":\"&lt;i class=&quot;fab fa-instagram&quot;&gt;&lt;\\/i&gt; tayfunerbilen\",\"url\":\"https:\\/\\/instagram.com\\/tayfunerbilen\"},{\"title\":\"&lt;i class=&quot;fab fa-facebook-square&quot;&gt;&lt;\\/i&gt; erbilennet\",\"url\":\"https:\\/\\/facebook.com\\/erbilennet\"},{\"title\":\"&lt;i class=&quot;fab fa-twitter-square&quot;&gt;&lt;\\/i&gt; tayfunerbilen\",\"url\":\"https:\\/\\/twitter.com\\/tayfunerbilen\"},{\"title\":\"&lt;i class=&quot;fab fa-linkedin&quot;&gt;&lt;\\/i&gt; tayfunerbilen\",\"url\":\"https:\\/\\/linkedin.com\\/in\\/tayfunerbilen\"}]', '2018-04-15 21:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_url` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_url`, `user_email`, `user_password`, `user_date`) VALUES
(1, 'tayfunerbilen', 'tayfunerbilen', 'tayfunerbilen@gmail.com', '$2y$10$kINTslUvypILK1zTpnpQN.WkzjrL96hgfqdANjsTlT1C.B638oRGi', '2018-03-20 13:16:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
