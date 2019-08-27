-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2019 at 10:02 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventroy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `m_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`m_id`, `name`, `qty`, `datetime`, `month`, `year`) VALUES
(5, 'Thinner', '1000', '2019-08-27 19:55:33', '', ''),
(6, 'Gas', '1000', '2019-08-27 19:55:35', '', ''),
(7, 'Acetone', '1000', '2019-08-27 19:55:38', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `materials_report`
--

CREATE TABLE `materials_report` (
  `mar_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials_report`
--

INSERT INTO `materials_report` (`mar_id`, `m_id`, `qty`, `datetime`, `month`, `year`) VALUES
(2, 5, '6', '2019-08-21 15:33:33', '', ''),
(3, 6, '20', '2019-08-21 15:33:58', '', ''),
(4, 7, '25', '2019-08-21 15:34:39', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `m_p_tbl`
--

CREATE TABLE `m_p_tbl` (
  `mp_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_p_tbl`
--

INSERT INTO `m_p_tbl` (`mp_id`, `p_id`, `m_id`, `qty`) VALUES
(57, 49, 5, '100'),
(58, 49, 6, '200'),
(59, 49, 7, '300'),
(60, 50, 5, '122');

-- --------------------------------------------------------

--
-- Table structure for table `products_tbl`
--

CREATE TABLE `products_tbl` (
  `p_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `liter` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_tbl`
--

INSERT INTO `products_tbl` (`p_id`, `category`, `brand`, `color`, `liter`, `qty`, `datetime`, `month`, `year`) VALUES
(49, 'Inner', 'Boysen', 'Black', '1', '12', '2019-08-24 22:44:37', 'August', '2019'),
(50, 'mo', 'Rain or Shine', '1', '121', '1212', '2019-08-25 16:16:39', 'August', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_tbl`
--

CREATE TABLE `purchase_tbl` (
  `pur_id` int(11) NOT NULL,
  `p_id` varchar(25) NOT NULL,
  `mp_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_tbl`
--

INSERT INTO `purchase_tbl` (`pur_id`, `p_id`, `mp_id`) VALUES
(1, '43', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `uid` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`uid`, `user`, `pass`, `role`) VALUES
(1, 'jufrey', '$2y$10$FJrHQ/9grYgBCMD4fx7G8.J49/SaEB109qHdsaSYmOXYO7JweZ1kK', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `materials_report`
--
ALTER TABLE `materials_report`
  ADD PRIMARY KEY (`mar_id`),
  ADD UNIQUE KEY `m_id` (`m_id`);

--
-- Indexes for table `m_p_tbl`
--
ALTER TABLE `m_p_tbl`
  ADD PRIMARY KEY (`mp_id`);

--
-- Indexes for table `products_tbl`
--
ALTER TABLE `products_tbl`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `purchase_tbl`
--
ALTER TABLE `purchase_tbl`
  ADD PRIMARY KEY (`pur_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `materials_report`
--
ALTER TABLE `materials_report`
  MODIFY `mar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_p_tbl`
--
ALTER TABLE `m_p_tbl`
  MODIFY `mp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `products_tbl`
--
ALTER TABLE `products_tbl`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `purchase_tbl`
--
ALTER TABLE `purchase_tbl`
  MODIFY `pur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `materials_report`
--
ALTER TABLE `materials_report`
  ADD CONSTRAINT `materials_report_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `materials` (`m_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
