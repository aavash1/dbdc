-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2019 at 03:47 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdc`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `user_id` int(100) NOT NULL,
  `user_uid` varchar(100) NOT NULL,
  `user_pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`user_id`, `user_uid`, `user_pwd`) VALUES
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `paper_tbl`
--

CREATE TABLE `paper_tbl` (
  `paper_id` int(11) NOT NULL,
  `paper_title` longtext NOT NULL,
  `author_name` varchar(250) NOT NULL,
  `available_links` varchar(300) NOT NULL,
  `paper_type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper_tbl`
--

INSERT INTO `paper_tbl` (`paper_id`, `paper_title`, `author_name`, `available_links`, `paper_type`) VALUES
(1, 'Efficient Processing of Top-k Query', 'Aavash Bhandari', 'www.dblp.co', 'Poster');

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `std_id` int(100) NOT NULL,
  `std_name` varchar(100) NOT NULL,
  `std_email` varchar(100) NOT NULL,
  `std_research` text,
  `std_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`std_id`, `std_name`, `std_email`, `std_research`, `std_type`) VALUES
(1, 'Aavash Bhandari', 'aavash@gmail.com', 'Spatial Database', 'Master'),
(2, 'Ronnie Mativenga', 'ronnie@gmail.com', 'Flash memory', 'PhD'),
(3, 'Rize Zin', 'rizejin@gmail.com', '', 'PhD Alumni'),
(4, 'Sun Jing', 'sunjingsky@gmail.com', '', 'Master Alumni'),
(5, 'Kim Dong Hwan', 'kkim@ajou.ac.kr', 'Big data, NoSQl', 'Master'),
(6, 'Maxiaohan', 'maxiaohan@ajou.ac.kr', 'Machine learning, Image Processing with GAN ', 'PhD'),
(7, 'Aziz Hasanov', 'hasanovaziz.kh@gmail.com', 'Adaptive Learning, Learning context', 'PhD'),
(8, 'Han Seung Hyun', 'han@gmail.com', 'NLP, Deep Neural Network, Machine Learning', 'Master');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `paper_tbl`
--
ALTER TABLE `paper_tbl`
  ADD PRIMARY KEY (`paper_id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paper_tbl`
--
ALTER TABLE `paper_tbl`
  MODIFY `paper_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `std_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
