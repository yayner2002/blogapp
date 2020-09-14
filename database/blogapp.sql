-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2020 at 04:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `created_at`) VALUES
(7, 1, 'Technology', '2020-09-05 14:19:46'),
(8, 1, 'Politics', '2020-09-05 14:22:34'),
(9, 1, 'Health', '2020-09-05 14:23:41'),
(10, 2, 'Social', '2020-09-05 14:25:57'),
(11, 2, 'Entertainment', '2020-09-05 14:26:11'),
(12, 3, 'Scholarships', '2020-09-05 14:28:23'),
(13, 3, 'Bussiness', '2020-09-05 14:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `body`, `created_at`) VALUES
(1, 24, 'yaynshet', 'yayneshet.medihn@aastu.edu.et', 'Good job keep it up!!!', '2020-08-31 13:28:45'),
(6, 24, 'Saron', 'admin@admin.com', 'TIgray independent party ', '2020-09-01 02:55:32'),
(8, 23, 'yaynshet', 'yayneshet.medihn@aastu.edu.et', 'Liverpool became the premiear leage title winners .#YNWA', '2020-09-01 03:10:12'),
(9, 20, 'yaynshet', 'yayner2002@gmail.com', 'I need a Mobile hardware expert .any one who is concerned can contact me through +251960702372', '2020-09-01 03:13:55'),
(10, 29, 'Fikadu medhin', 'jfjd@aastu.edu.et', 'i need some codegnitor developer you can contact me please!!!', '2020-09-04 16:23:32'),
(11, 29, 'Yaynshet Medhin', 'yayneshet.medihn@aastu.edu.et', 'here is my contact address you can call +251960702372', '2020-09-04 16:24:14'),
(12, 30, 'yaynshet', 'yayneshet.medihn@aastu.edu.et', 'HNY every one i wish you a glorious new year !!', '2020-09-05 13:20:10'),
(13, 30, 'Saron', 'admin@admin.com', 'HNY ', '2020-09-05 13:21:31'),
(14, 43, 'yaynshet', 'yayner2002@gmail.com', 'wssap', '2020-09-13 03:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `posted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `body`, `post_image`, `posted_at`) VALUES
(37, 7, 1, 'PHP Frameworks', 'PHP-Frameworks', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo&nbsp;&nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess&nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo&nbsp;&nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess&nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />\r\n&nbsp;&nbsp; &nbsp;</p>\r\n', 'huawei.jpg', '2020-09-05 14:21:48'),
(38, 8, 1, 'Tigray Election 2020', 'Tigray-Election-2020', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo&nbsp;&nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess&nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo&nbsp;&nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess&nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />\r\n&nbsp;&nbsp; &nbsp;</p>\r\n', 'buffet.png', '2020-09-05 14:23:11'),
(39, 13, 1, 'Covid-19 Cases', 'Covid-19-Cases', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo&nbsp;&nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess&nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo&nbsp;&nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess&nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />\r\n&nbsp;&nbsp; &nbsp;</p>\r\n', 'logo.png', '2020-09-05 14:24:30'),
(40, 9, 2, 'Malaria Patiens ', 'Malaria-Patiens', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo&nbsp;&nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess&nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo&nbsp;&nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess&nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />\r\n&nbsp;&nbsp; &nbsp;</p>\r\n', 'logon.png', '2020-09-05 14:26:57'),
(41, 10, 2, 'USA Visa', 'USA-Visa', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo&nbsp;&nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess&nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo&nbsp;&nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess&nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />\r\n&nbsp;&nbsp; &nbsp;</p>\r\n', 'uthappizza.png', '2020-09-05 14:27:33'),
(42, 12, 3, 'Sholarships in Poland ', 'Sholarships-in-Poland', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo&nbsp;&nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess&nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo&nbsp;&nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess&nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />\r\n&nbsp;&nbsp; &nbsp;</p>\r\n', 'i11.jpg', '2020-09-05 14:29:41'),
(43, 13, 3, 'Codegnitor Job Cacancy', 'Codegnitor-Job-Cacancy', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo&nbsp;&nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess&nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo&nbsp;&nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess&nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />\r\n&nbsp;&nbsp; &nbsp;</p>\r\n', 'ylogo.png', '2020-09-05 14:30:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registered_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `zipcode`, `email`, `username`, `password`, `registered_at`) VALUES
(1, 'yaynshet', '0000', 'yayner2002@gmail.com', 'yayner', '202cb962ac59075b964b07152d234b70', '2020-09-02 15:18:38'),
(2, 'Saron', '0000', 'yayner2002@gmail.com', 'sar', '202cb962ac59075b964b07152d234b70', '2020-09-02 15:22:48'),
(3, 'Fikadu medhin', '0000', 'admin@admin.com', 'faku', '202cb962ac59075b964b07152d234b70', '2020-09-05 03:52:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
