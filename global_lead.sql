-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2018 at 07:39 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `global_lead`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`userid`, `username`, `email`, `password`) VALUES
(1, 'deepak', 'deepak@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seotitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `totalread` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `seotitle`, `photo`, `description`, `postdate`, `status`, `totalread`) VALUES
(8, 'dwdwd', '', 'd.jpg', '<p>wdwdwdw</p>', '2018-05-02 05:06:31', 'active', 2),
(9, 'wdwd', '', 'Chrysanthemum.jpg', '<p>wdwdwdwd</p>', '2018-04-27 11:35:01', 'active', 0),
(10, 'Deepak', '', 'a.jpg', '<p>fnenfkenkie</p>', '2018-04-30 09:26:29', 'active', 18),
(40, 'hihih huuhuhu.hjuhu', 'hihih-huuhuhu-hjuhu.html', 'a.jpg', '<p>bjhhj</p>', '2018-04-28 20:04:30', 'active', 0),
(41, 'Deepak', 'Deepak.html', 'd.jpg', '<p>xsxx</p>', '2018-04-30 06:35:38', 'active', 0),
(42, 'alok', 'alok.html', 'Desert.jpg', '<p>sxsxw</p>', '2018-04-30 06:35:46', 'active', 0),
(43, 'Bandaan', 'Bandaan.html', 'Hydrangeas.jpg', '<p>xxwxw</p>', '2018-05-03 05:33:38', 'active', 1),
(44, 'pooja', 'pooja.html', 'Chrysanthemum.jpg', '<p>sxee</p>', '2018-05-02 10:24:16', 'active', 1),
(45, 'raju', 'raju.html', 'b.jpg', '<p>wxwxw</p>', '2018-04-30 06:36:21', 'active', 0),
(46, 'roopax', 'roopax.html', 'Koala.jpg', '<p>xsxs</p>', '2018-04-30 06:36:31', 'active', 0),
(47, 'djbabu', 'djbabu.html', 'c.jpg', '<p>sxsxs</p>', '2018-04-30 06:37:11', 'active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `parent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courseenquiry`
--

CREATE TABLE `courseenquiry` (
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `course` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `subcourse` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `flag` enum('Yes','No') NOT NULL DEFAULT 'No',
  `message` varchar(255) NOT NULL,
  `democlass` varchar(255) NOT NULL,
  `updatedby` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseenquiry`
--

INSERT INTO `courseenquiry` (`day`, `month`, `year`, `id`, `name`, `email`, `mobile`, `course`, `location`, `subcourse`, `datetime`, `flag`, `message`, `democlass`, `updatedby`, `class`) VALUES
(0, 0, 0, 15, 'sxsxs', 'cd@gmail.com', 0, 'IOS Training', 'BTM IInd Stage', '', '2018-04-25 12:23:41', 'No', 'ssxsxsx', '', '', ''),
(0, 0, 0, 16, 'aaaaaa', 'cweded@gmail.in', 0, 'IOS Training', 'BTM IInd Stage', '', '2018-04-25 12:23:41', 'No', 'aaaaaaa', '', '', ''),
(0, 0, 0, 17, 'vvttvg', 'deded@gmail.com', 0, 'Android Training', 'Electronic city', '', '2018-04-29 10:03:01', 'No', 'tgtgt', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `skype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `mobile`, `skype`, `website`, `subject`, `message`, `doc`) VALUES
(1, 'sss', 'xsxs@gmail.com', 0, '', '', 'sww', 'wwdw', ''),
(2, 'dedeed', 'dee@gmail.com', 0, '', '', 'ede', 'dededed', ''),
(3, 'ffdf', 'fdfdf@gmail.com', 0, '', '', 'fdfdf', 'fdfdfd', ''),
(4, 'nalini', 'nalin@gmail.com', 0, '', '', 'jfnnfn', 'knjneje', ''),
(5, 'sasa', 'sasa@gmail.com', 0, '', '', 'sasassm', 'asasas', '');

-- --------------------------------------------------------

--
-- Table structure for table `mostreadblog`
--

CREATE TABLE `mostreadblog` (
  `id` int(11) NOT NULL,
  `blogid` int(11) NOT NULL,
  `viewcount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mostreadblog`
--

INSERT INTO `mostreadblog` (`id`, `blogid`, `viewcount`) VALUES
(1, 14, 0),
(2, 14, 0),
(3, 14, 0),
(4, 14, 0),
(5, 14, 0),
(6, 13, 0),
(7, 13, 0),
(8, 13, 0),
(9, 13, 0),
(10, 12, 0),
(11, 10, 0),
(12, 8, 0),
(13, 8, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courseenquiry`
--
ALTER TABLE `courseenquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mostreadblog`
--
ALTER TABLE `mostreadblog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courseenquiry`
--
ALTER TABLE `courseenquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mostreadblog`
--
ALTER TABLE `mostreadblog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
