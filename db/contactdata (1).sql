-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 12:57 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `assigned_user`
--

CREATE TABLE `assigned_user` (
  `asgn_id` int(5) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `asgn_email` varchar(255) NOT NULL,
  `assignedOn` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assigned_user`
--

INSERT INTO `assigned_user` (`asgn_id`, `user_email`, `asgn_email`, `assignedOn`, `status`) VALUES
(2, 'user@me.com', 'Test@me.com', '2018-05-23 15:16:40', 0),
(4, 'test@me.com', 's@me.com', '2018-05-23 19:00:12', 0),
(5, 'test1@me.com', 'user@me.com', '2018-05-23 19:01:26', 0),
(6, 'test@me.com', 'uesr@test.com', '2018-05-23 19:01:44', 0),
(7, 'test@me.com', 'user@me.com', '2018-05-23 19:02:05', 0),
(8, 'fgh', 's@me.com', '2018-05-24 15:15:48', 0),
(9, 'test13@me.com', 's@me.com', '2018-05-24 15:16:01', 0),
(10, 'test@me.com', 's@me.com', '2018-05-24 15:16:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contactdetails`
--

CREATE TABLE `contactdetails` (
  `c_id` bigint(15) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `gender` int(1) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `income` bigint(10) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` bigint(10) NOT NULL,
  `state` varchar(255) NOT NULL,
  `timeofresidency` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactdetails`
--

INSERT INTO `contactdetails` (`c_id`, `f_name`, `l_name`, `u_email`, `gender`, `phone`, `mobile`, `income`, `dob`, `address`, `city`, `zipcode`, `state`, `timeofresidency`) VALUES
(4, 'dimpal01', 'gondaliya', 'test@me.com', 0, 987987676878, 787878786876, 8000, '0000-00-00', 'addresss', '', 777766, 's', '2018-05-24 10:33:10'),
(5, 'dimpal', 'gondaliya', 'test1@me.com', 0, 987987676878, 787878786876, 8000, '0000-00-00', 'addresss', 'cccccc', 777766, 'sssssss', '2018-05-14 10:39:40'),
(6, 'dimpal', 'gondaliya', 'tes2t@me.com', 0, 987987676878, 787878786876, 8000, '0000-00-00', 'addresss', 'cccccc', 777766, 'sssssss', '2018-05-14 10:39:40'),
(7, 'dimpal', 'gondaliya', 'test3@me.com', 0, 987987676878, 787878786876, 8000, '0000-00-00', 'addresss', 'cccccc', 777766, 'sssssss', '2018-05-14 10:39:40'),
(8, 'dimpal', 'gondaliya', 'test4@me.com', 0, 987987676878, 787878786876, 8000, '0000-00-00', 'addresss', 'cccccc', 777766, 'sssssss', '2018-05-14 10:39:40'),
(9, 'dimpal', 'gondaliya', 'test5@me.com', 0, 987987676878, 787878786876, 8000, '0000-00-00', 'addresss', 'cccccc', 777766, 'sssssss', '2018-05-14 10:39:40'),
(10, 'dimpal', 'gondaliya', 'test6@me.com', 0, 987987676878, 787878786876, 8000, '0000-00-00', 'addresss', 'cccccc', 777766, 'sssssss', '2018-05-14 10:39:40'),
(11, 'dimpal', 'gondaliya', 'test7@me.com', 0, 987987676878, 787878786876, 8000, '0000-00-00', 'addresss', 'cccccc', 777766, 'sssssss', '2018-05-14 10:39:40'),
(12, 'dimpal', 'gondaliya', 'test8@me.com', 0, 987987676878, 787878786876, 8000, '0000-00-00', 'addresss', 'cccccc', 777766, 'sssssss', '2018-05-14 10:39:40'),
(13, 'dimpal', 'gondaliya', 'test9@me.com', 0, 987987676878, 787878786876, 8000, '0000-00-00', 'addresss', 'cc', 777766, 'sssssss', '2018-05-24 10:31:54'),
(14, 'dimpal', 'gondaliya', 'test10@me.com', 0, 987987676878, 787878786876, 8000, '0000-00-00', 'addresss', 'cc', 777766, 'sssssss', '2018-05-24 10:31:35'),
(15, 'dimpal', 'gondaliya', 'test11@me.com', 0, 987987676878, 787878786876, 8000, '0000-00-00', 'addresss', 'cccccc', 777766, 'sssssss', '2018-05-14 10:39:40'),
(16, 'dimpal', 'gondaliya', 'test12@me.com', 0, 987987676878, 787878786876, 8000, '0000-00-00', 'addresss', 'cccccc', 777766, 'sssssss', '2018-05-14 10:39:40'),
(17, 'dimpal', 'gondaliya', 'test13@me.com', 0, 987987676878, 787878786876, 8000, '0000-00-00', 'addresss', 'cccccc', 777766, 'sssssss', '2018-05-14 10:39:40'),
(18, 'gh', 'fgh', 'fgh', 1, 0, 0, 0, 'May 30, 2018', 'fgh', 'fgh', 0, 'fgh', '2018-05-22 10:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `created`, `modified`, `status`) VALUES
(1, 'Internet of Things World Forum', '2016-05-12', '2016-05-09 06:15:17', '2016-05-09 06:15:17', 1),
(2, 'The Future of Money and Technology Summit', '2016-05-26', '2016-05-09 06:15:17', '2016-05-09 06:15:17', 1),
(3, 'Chrome Dev Summit', '2016-05-26', '2016-05-09 06:15:17', '2016-05-09 06:15:17', 1),
(4, 'The Lean Startup Conference', '2016-05-17', '2016-05-09 06:15:17', '2016-05-09 06:15:17', 1),
(5, 'Web Submit for Developers', '2016-05-17', '2016-05-09 06:15:17', '2016-05-09 06:15:17', 1),
(6, 'this is test event', '2018-05-16', '2018-05-14 09:06:40', '2018-05-14 09:06:40', 1),
(7, 'sdsdd', '2018-05-22', '2018-05-14 10:42:34', '2018-05-14 10:42:34', 1),
(8, 'xzxzxz', '2018-04-10', '2018-05-21 09:10:16', '2018-05-21 09:10:16', 1),
(9, 'event on', '2018-05-23', '2018-05-22 07:17:21', '2018-05-22 07:17:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` bigint(15) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `income` bigint(10) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` bigint(10) NOT NULL,
  `state` varchar(255) NOT NULL,
  `timeofresidency` varchar(244) NOT NULL,
  `passwords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `f_name`, `l_name`, `u_email`, `gender`, `phone`, `mobile`, `income`, `dob`, `address`, `city`, `zipcode`, `state`, `timeofresidency`, `passwords`) VALUES
(1, 'gfgf', 'gfgf', 'Test@me.com', 'female', 0, 0, 0, 'May 24, 2018', 'f', 'fgf', 0, 'fgfg', '0000-00-00 00:00:00', 'test'),
(3, 'John', 'Doe', 'user@me.com', 'male', 9999999999, 8989898989, 15000, 'May 23, 2018', 'Science City Road, sola, ahmedabad', 'Ahmedabad', 380015, 'Gujarat', '2018-05-24 11:30:38', 'user'),
(4, 'User', 'Test', 'uesr@test.com', 'male', 7777777777, 9999999999, 100000, 'May 19, 2018', 'Science City Road, sola, ahmedabad', 'Ahmedabad', 380015, 'Gujarat', 'May 23, 2018', 'test'),
(5, 'Scarlet', 'Doe', 's@me.com', 'male', 9878998448, 7946511894, 12000, 'May 05, 2018', 'Science City Road, sola, ahmedabad', 'Ahmedabad', 380015, 'Gujarat', 'May 24, 2018', 's@1233');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assigned_user`
--
ALTER TABLE `assigned_user`
  ADD PRIMARY KEY (`asgn_id`);

--
-- Indexes for table `contactdetails`
--
ALTER TABLE `contactdetails`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assigned_user`
--
ALTER TABLE `assigned_user`
  MODIFY `asgn_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactdetails`
--
ALTER TABLE `contactdetails`
  MODIFY `c_id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
