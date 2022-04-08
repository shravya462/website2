-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 03:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spark`
--

-- --------------------------------------------------------

--
-- Table structure for table `spark_invoice`
--

CREATE TABLE `spark_invoice` (
  `invoiceno` int(11) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `descslno` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `qty` varchar(200) DEFAULT NULL,
  `amount` varchar(200) DEFAULT NULL,
  `descslno1` varchar(200) DEFAULT NULL,
  `description1` varchar(200) DEFAULT NULL,
  `qty1` varchar(200) DEFAULT NULL,
  `amount1` varchar(200) DEFAULT NULL,
  `descslno2` varchar(200) DEFAULT NULL,
  `description2` varchar(200) DEFAULT NULL,
  `qty2` varchar(200) DEFAULT NULL,
  `amount2` varchar(200) DEFAULT NULL,
  `descslno3` varchar(200) DEFAULT NULL,
  `description3` varchar(200) DEFAULT NULL,
  `qty3` varchar(200) DEFAULT NULL,
  `amount3` varchar(200) DEFAULT NULL,
  `upload` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spark_invoice`
--

INSERT INTO `spark_invoice` (`invoiceno`, `date`, `address`, `descslno`, `description`, `qty`, `amount`, `descslno1`, `description1`, `qty1`, `amount1`, `descslno2`, `description2`, `qty2`, `amount2`, `descslno3`, `description3`, `qty3`, `amount3`, `upload`) VALUES
(1, '2021-12-30', 'ASDFGHJ\r\nXCFGMNKLMK\r\nVBHNB LK\r\nBVJK LMKL;M', '1', 'FGDFHF', '4', '8000', '2', 'cvxghvhc', '4', '5000', '3', '', '', '', '4', '', '', '', '0'),
(3, '2022-04-15', 'BFHGD', '3', 'FDHJ', '3', '455', '3', 'FG', '55', '556', '3', 'GHFHF', '5', '445', '4', '46GHF', '56', '566', '09-01-2022-1641725609-sparkstc.png'),
(4, '2022-01-13', 'bfd', '4', 'sfds', '3', '345', '', '', '', '', '', '', '', '', '', '', '', '', '08-01-2022-1641651198-'),
(34, '2022-01-15', 'dgdgd', '3', 'dgdfgdf', '34', '4546', '', '', '', '', '', '', '', '', '', '', '', '', '09-01-2022-1641717818-'),
(56, '2022-01-19', 'gdgdfg', '45', 'fggd', '4', '565', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(57, '2022-01-15', 'fggfd', '34', 'fgbbfg', '32', '3545', '', '', '', '', '', '', '', '', '', '', '', '', '09-01-2022-1641718831-'),
(77, '2022-01-21', 'xcvxdfcvdx', '435', 'gfcgf', '34', '35345', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(435, '2022-01-14', 'dfdf', '34', 'fgdfg', '3', '353', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(453, '2022-01-01', 'fef', '32', 'th', '3', '35435', '', '', '', '', '', '', '', '', '', '', '', '', '09-01-2022-1641718524-'),
(554, '2022-01-13', 'vhbbng', '4', 'bfgf', '3', '4643', '', '', '', '', '', '', '', '', '', '', '', '', '09-01-2022-1641713513-'),
(3242, '2022-01-26', 'dfds', '3', 'gfdgd', '3', '354', '', '', '', '', '', '', '', '', '', '', '', '', '09-01-2022-1641719037-sparkstc.png'),
(3425, '2022-01-14', 'cbvdgbd3', '23', 'rgdg', '2', '244', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(6656, '2022-01-19', 'gdfgdfq', '222', 'dggg', '324', '24324', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(35434, '2022-01-17', 'fhgfh', '34', 'fgdgf', '34', '335', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(677767, '2022-01-15', 'fdfdfgd', '6', 'rtrttyr', '5', '666', '', '', '', '', '', '', '', '', '', '', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `spark_quotation`
--

CREATE TABLE `spark_quotation` (
  `quotationno` int(11) NOT NULL,
  `date` date NOT NULL,
  `descslno` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `qty` varchar(200) DEFAULT NULL,
  `amount` varchar(200) DEFAULT NULL,
  `descslno1` varchar(200) DEFAULT NULL,
  `description1` varchar(200) DEFAULT NULL,
  `qty1` varchar(200) DEFAULT NULL,
  `amount1` varchar(200) DEFAULT NULL,
  `descslno2` varchar(200) DEFAULT NULL,
  `description2` varchar(200) DEFAULT NULL,
  `qty2` varchar(200) DEFAULT NULL,
  `amount2` varchar(200) DEFAULT NULL,
  `descslno3` varchar(200) DEFAULT NULL,
  `description3` varchar(200) DEFAULT NULL,
  `qty3` varchar(200) DEFAULT NULL,
  `amount3` varchar(200) DEFAULT NULL,
  `grandtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spark_quotation`
--

INSERT INTO `spark_quotation` (`quotationno`, `date`, `descslno`, `description`, `qty`, `amount`, `descslno1`, `description1`, `qty1`, `amount1`, `descslno2`, `description2`, `qty2`, `amount2`, `descslno3`, `description3`, `qty3`, `amount3`, `grandtotal`) VALUES
(1, '2022-01-18', '22', 'dfdg', '2', '200', '2', 'cbhfghf', '3', '400', '', '', '', '', '', '', '', '', 0),
(4, '2022-01-14', '34', 'fdgdhg', '', '2132', '4', 'fgdfgd', '', '46546', '3', 'dgdfgd', '', '35', '', '', '', '', 0),
(32, '2022-01-20', '323', 'eregre', '', '34', '2', 'gffdghgfbg', '', '3543', '23', 'fgbfgd', '', '4354', '34', 'fgbgf', '', '455', 0),
(66, '2022-01-19', '2', 'dfgd', '342', '100', '1', '35353fgghgf', '3', '100', '2', 'ghngh', '34', '200', '3', 'gfhb', '5', '50', 0),
(776, '2022-01-27', '6', 'GG', '6', '66', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(4553, '2022-01-07', '45', 'hgjhgj', '4', '6456', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(4646, '2022-01-14', '45', 'gfhgf', '', '43543', '34', 'fghr', '', '4564', '', '', '', '', '', '', '', '', 0),
(6776, '2022-02-04', '34', 'fgfg', '45', '56546', '', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `spark_receipt`
--

CREATE TABLE `spark_receipt` (
  `receipt_no` int(11) NOT NULL,
  `issued_date` date DEFAULT NULL,
  `client_name` varchar(200) DEFAULT NULL,
  `drawn_date` varchar(100) DEFAULT NULL,
  `payment_mode` varchar(100) DEFAULT NULL,
  `amount` bigint(20) DEFAULT NULL,
  `payment` bigint(20) DEFAULT NULL,
  `balance` bigint(20) NOT NULL,
  `upload` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spark_receipt`
--

INSERT INTO `spark_receipt` (`receipt_no`, `issued_date`, `client_name`, `drawn_date`, `payment_mode`, `amount`, `payment`, `balance`, `upload`) VALUES
(1, '2021-12-29', 'wertsdt', '2021-12-23', 'cheque', 800, 900, 100, ''),
(2, '0000-00-00', 'dsd', '2022-01-05', 'cash', 200, 20, 180, '23-01-2022-1642949682-60-imported-rainbow-color-rose-plant-saaheli-original-imafgyn54qqghhfr.jpeg'),
(3, '0000-00-00', 'cvd', '2022-01-06', 'advance', 33, 3, 30, '09-01-2022-1641722651-'),
(4, '0000-00-00', 'fgvfd', '2022-01-23', 'cheque', 1000, 500, 500, '0'),
(22, '0000-00-00', 'sddfs', '2022-02-06', 'advance', 23, 2, 21, '09-01-2022-1641722951-'),
(23, '0000-00-00', 'vdf', '2022-01-19', 'advance', 34, 2, 32, '09-01-2022-1641723285-sparkstc.png'),
(34, '0000-00-00', 'gdfgd', '2022-01-29', 'advance', 1000, 355, 645, '0'),
(42, '0000-00-00', 'GFHF', '2022-01-20', 'advance', 35, 3, 32, '09-01-2022-1641725675-sparkstc.png'),
(43, '0000-00-00', 'gf', '2022-01-22', 'cheque', 34, 3, 31, '09-01-2022-1641723108-'),
(45, '2022-01-26', 'rdtgrg', '2022-01-28', 'advance', 44, 4, 40, '0'),
(345, '0000-00-00', 'bfhf', '2022-01-21', 'cheque', 3545, 454, 3091, '0'),
(656, '0000-00-00', 'gfgf', '2022-01-08', 'cheque', 3, 1, 2, '0'),
(4645, '0000-00-00', 'ghjgjfj', '2022-02-02', 'advance', 435, 3, 432, '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `email`, `password`, `date`) VALUES
(1, '6899', 'Admin', 'Admin123@gmail.com', 'Admin@123', '2022-01-08 06:03:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spark_invoice`
--
ALTER TABLE `spark_invoice`
  ADD PRIMARY KEY (`invoiceno`);

--
-- Indexes for table `spark_quotation`
--
ALTER TABLE `spark_quotation`
  ADD PRIMARY KEY (`quotationno`);

--
-- Indexes for table `spark_receipt`
--
ALTER TABLE `spark_receipt`
  ADD PRIMARY KEY (`receipt_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spark_invoice`
--
ALTER TABLE `spark_invoice`
  MODIFY `invoiceno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=677768;

--
-- AUTO_INCREMENT for table `spark_receipt`
--
ALTER TABLE `spark_receipt`
  MODIFY `receipt_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4646;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
