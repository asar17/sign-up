-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 10:18 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sign_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `userID` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `src` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`userID`, `id`, `src`) VALUES
(41, 238, '65820953817833184080.png'),
(41, 239, '237213658772348156752.png'),
(41, 240, '983994270878758529608.png'),
(41, 241, '31849215023658896368.png'),
(43, 355, '99356729764386405880.png'),
(43, 356, '24050627593046999609.png'),
(44, 363, '413947141800199068010.png'),
(44, 364, '349162142748344573912.png'),
(44, 365, '517420292609931893184.png'),
(44, 366, '34352767241659001243.png'),
(44, 367, '167733624154285913209.png');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `userID` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `post` text NOT NULL,
  `date` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`userID`, `id`, `post`, `date`) VALUES
(15, 160, 'd', '03:50:08'),
(15, 161, 'f', '04:07:33'),
(15, 162, 'x', '04:15:48'),
(16, 163, 'athar', '04:32:28'),
(16, 164, 'm', '04:38:49'),
(17, 165, 'u', '04:41:26'),
(18, 166, 'mmmm', '04:44:47'),
(18, 169, 'athar moamed', '04:52:08'),
(19, 170, 'ddd', '05:14:48'),
(20, 171, 'athar', '05:16:12'),
(21, 172, 't', '05:19:07'),
(22, 173, 'm', '05:27:24'),
(23, 174, 's', '05:31:14'),
(24, 175, ',,,,', '05:42:03'),
(25, 176, 'x', '05:56:01'),
(26, 177, 'k', '06:05:12'),
(27, 178, 'n', '06:57:03'),
(27, 179, 'sss', '07:01:13'),
(27, 180, 'sssssssaaaaaaaa', '07:01:24'),
(28, 181, 'ss', '07:03:12'),
(28, 182, 'xxxx', '07:05:07'),
(28, 183, 'mmmm', '07:05:39'),
(28, 184, 's', '07:09:24'),
(28, 185, 'sss', '07:15:34'),
(28, 186, 'mmmm', '07:18:17'),
(28, 187, 'mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm', '07:18:28'),
(28, 188, ',,,,', '07:19:26'),
(29, 189, ',', '07:19:56'),
(29, 190, 'mm', '07:20:59'),
(30, 191, 'c', '07:28:50'),
(30, 192, 'z', '07:37:05'),
(29, 193, 's', '08:13:33'),
(31, 194, 'f', '08:16:35'),
(31, 195, 'aaa', '08:42:02'),
(33, 196, 'xx', '09:01:49'),
(34, 197, 'k,,', '09:12:21'),
(35, 198, ',', '01:28:25'),
(36, 199, ',', '01:30:47'),
(37, 200, 'd', '01:32:20'),
(38, 201, 'aaaa', '01:42:05'),
(39, 202, 'a', '01:43:36'),
(40, 203, 'x', '02:24:28'),
(41, 205, 'n', '17:01:06'),
(42, 207, 'k', '13:54:17'),
(43, 208, 'x', '08:15:11'),
(45, 209, 'jj', '16:03:20'),
(48, 211, 'new post athar', '22:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `pass`) VALUES
(46, 'athar', '123123'),
(47, 'athar', '123123'),
(48, 'mahmoud abas', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=369;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `img`
--
ALTER TABLE `img`
  ADD CONSTRAINT `img_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
