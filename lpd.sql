-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2019 at 11:32 AM
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
  `title` varchar(100) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `e_id` int(50) NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `e_email` varchar(100) NOT NULL,
  `e_manager` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `job_grade` varchar(100) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nominations`
--

INSERT INTO `nominations` (`n_id`, `title`, `unit`, `e_id`, `e_name`, `e_email`, `e_manager`, `status`, `job_grade`, `date`) VALUES
(1, 'Negotiation And Persuasion Skills', '20 ', 40460, 'Nishant Jinde', 'nishant.jinde@here.com', 'Bharat Shetty', 'Active', '5', '28/06/2019 '),
(2, 'Negotiation And Persuasion Skills', '20 ', 36819, 'Komal Pareek', 'komal.pareek@here.com', 'Dipti John', 'active', '5', '28/06/2019 '),
(3, 'Negotiation And Persuasion Skills', '20 ', 40477, 'Priya Singh', 'priya.n.singh@here.com', 'Vinoth Veerabhu', 'Active ', '5', '28/06/2019 ');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `s_id` int(50) NOT NULL,
  `s_emp` varchar(50) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_obtained` int(50) NOT NULL,
  `s_total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`s_id`, `s_emp`, `s_name`, `s_obtained`, `s_total`) VALUES
(1, '40460', 'nishant.jinde@here.com', 20, 25),
(2, '40477', 'priya.n.singh@here.com', 18, 25),
(3, '38619', 'komal.pareek@here.com', 22, 25),
(4, '36830', 'rasika.bhosle@here.com', 23, 25);

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
  `t_nomination` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_detail`
--

INSERT INTO `training_detail` (`t_id`, `t_name`, `t_date`, `t_size`, `t_status`, `t_nomination`) VALUES
(1, 'Negotiation And Persuasion Skills', '28/06/2019', '20', 'Active', '2'),
(2, 'Customer Centricity', '30/07/2019', '22', 'Completed', '3');

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
(1, 'Nishant Jinde', 'nishant.jinde@here.com', '2c8b8a10d0423186d99cfb04526ccfed');

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
  MODIFY `n_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `s_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `training_detail`
--
ALTER TABLE `training_detail`
  MODIFY `t_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
