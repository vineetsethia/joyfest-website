-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2015 at 12:02 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joyfest`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `article_id` int(11) NOT NULL,
  `article_head` varchar(127) NOT NULL,
  `article_body` text NOT NULL,
  `article_create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `article_head`, `article_body`, `article_create_date`) VALUES
(0, 'hello', 'welcome', '2015-10-12'),
(1, 'title of Article 1  title of Article 1  title of Article 1  ', 'Brief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of EventsBrief description of Events', '2015-10-07'),
(2, 'Title of article 2', 'THis is article 2THis is article 2THis is article 2THis is article 2THis is article 2THis is article 2THis is article 2THis is article 2THis is article 2THis is article 2THis is article 2THis is article 2THis is article 2THis is article 2THis is article 2THis is article 2THis is article 2THis is article 2THis is article 2THis is article 2', '2015-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(80) NOT NULL,
  `event_img_path` varchar(127) NOT NULL,
  `event_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`admin_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
