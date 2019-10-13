-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2019 at 05:07 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lpd`
--

-- --------------------------------------------------------

--
-- Table structure for table `nominations`
--

CREATE TABLE `nominations` (
  `n_id` int(15) NOT NULL,
  `f_id` int(100) NOT NULL,
  `e_id` int(50) NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `e_email` varchar(100) NOT NULL,
  `e_manager` varchar(100) NOT NULL,
  `job_grade` varchar(100) NOT NULL,
  `attendance` varchar(250) NOT NULL DEFAULT 'Present',
  `pre_score` int(15) NOT NULL,
  `post_score` int(15) NOT NULL,
  `total` int(15) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `waitlist` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nominations`
--

INSERT INTO `nominations` (`n_id`, `f_id`, `e_id`, `e_name`, `e_email`, `e_manager`, `job_grade`, `attendance`, `pre_score`, `post_score`, `total`, `timestamp`, `waitlist`) VALUES
(1, 1, 40460, 'Nishant Jinde', 'nishant.jinde@here.com', 'Bharat Shetty', '5 ', 'Present', 0, 0, 0, '2019-10-09 14:28:16.805580', 0),
(2, 1, 36819, 'Komal Pareek', 'komal.pareek@here.com', 'Bharat Shetty', '5', 'Present', 0, 0, 0, '2019-10-13 14:29:48.645632', 0),
(3, 1, 40477, 'Priya Singh', 'priya.n.singh@here.com', 'Bharat Shetty', '5 ', 'Present', 0, 0, 0, '2019-10-13 14:29:53.212388', 0),
(4, 2, 40460, 'Nishant Jinde', 'nishant.jinde@here.com', 'Bharat Shetty', '5  ', 'Present', 0, 0, 0, '2019-10-09 14:28:30.731857', 0),
(5, 3, 36830, 'Rasika Bhosle', 'rasika.bhosle@here.com', 'Nishant Jinde', '5', 'Present', 0, 0, 0, '2019-10-09 14:28:33.854915', 0),
(6, 4, 36830, 'Komal Pareek', 'komal.pareek@here.com', 'Dipti John', '5', 'Present', 0, 0, 0, '2019-10-09 14:27:58.200414', 0);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `s_id` int(50) NOT NULL,
  `s_emp` varchar(50) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_title` varchar(200) NOT NULL,
  `s_attendance` varchar(15) NOT NULL,
  `pre_score` int(50) NOT NULL,
  `post_score` int(15) NOT NULL,
  `s_total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`s_id`, `s_emp`, `s_name`, `s_title`, `s_attendance`, `pre_score`, `post_score`, `s_total`) VALUES
(1, '40460', 'Nishant Jinde', 'Negotiation and Persuasion Skill', 'Present', 22, 22, 25);

-- --------------------------------------------------------

--
-- Table structure for table `training_detail`
--

CREATE TABLE `training_detail` (
  `t_id` int(15) NOT NULL,
  `t_name` varchar(100) NOT NULL,
  `t_date` varchar(50) NOT NULL,
  `t_size` varchar(50) NOT NULL,
  `t_status` varchar(50) NOT NULL,
  `t_room` varchar(100) NOT NULL,
  `t_nomination` varchar(50) NOT NULL,
  `file_path` varchar(250) NOT NULL,
  `count` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_detail`
--

INSERT INTO `training_detail` (`t_id`, `t_name`, `t_date`, `t_size`, `t_status`, `t_room`, `t_nomination`, `file_path`, `count`) VALUES
(1, 'Negotiation And Persuasion Skills', '2019-09-28', '20', 'Active', 'Ganga', '2', '', 3),
(2, 'Customer Centricity', '2019-09-30', '22', 'Active', 'Brahmaputra', '3', '', 1),
(3, 'Attention to Detail', '2019-09-18', '22', 'Active', 'Big Ben', '2', '', 1),
(4, 'Communication With Impact', '2019-09-24', '25', 'Active', 'INS Prahar', '2', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(15) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_email`, `u_password`) VALUES
(1, 'Nishant Jinde', 'nishant.jinde@here.com', '2c8b8a10d0423186d99cfb04526ccfed'),
(2, 'Bharat Shetty', 'bharat.shetty@here.com', 'b76eb19ab5069fa4f69c6def2dcc96ce');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nominations`
--
ALTER TABLE `nominations`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `training_detail`
--
ALTER TABLE `training_detail`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nominations`
--
ALTER TABLE `nominations`
  MODIFY `n_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `s_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `training_detail`
--
ALTER TABLE `training_detail`
  MODIFY `t_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
