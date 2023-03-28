-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 01:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sawyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `activites`
--

CREATE TABLE `activites` (
  `id` int(11) NOT NULL,
  `accessCode` varchar(100) NOT NULL,
  `type` text NOT NULL,
  `amount` varchar(255) NOT NULL,
  `t_id` varchar(100) NOT NULL,
  `fromAcc` varchar(100) NOT NULL,
  `toAcc` varchar(100) NOT NULL,
  `fee` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activites`
--

INSERT INTO `activites` (`id`, `accessCode`, `type`, `amount`, `t_id`, `fromAcc`, `toAcc`, `fee`, `status`, `date`, `email`) VALUES
(1, '210020', 'Withdrawal', '$ 300,500,000.02', 'DH0122SDKHFHSDH7', 'Savings', 'Credit Card', '$ 220', 'Success', '15/02/2023', 'dekin@gmail.com'),
(2, '210020', 'Deposit', '$50,000.00', 'CHGH126GGF', 'Credit card', 'Bank Account', '$0', 'Success', '17/03/2023', ''),
(3, '', 'Transfer to Wallet', '$ 3,000', '5698569', 'Credit Card', 'Bank Account', '$15', 'Processing', '20/03/2023', 'dekin@gmail.com'),
(4, '', 'Transfer to Wallet', '$ 5000', '5698569', 'Credit Card', 'Bank Account', '$15', 'Completed', '16/09/2022', 'aloghana@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `alert`
--

CREATE TABLE `alert` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `color` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alert`
--

INSERT INTO `alert` (`id`, `email`, `title`, `message`, `color`, `time`) VALUES
(1, 'dekin@gmail.com', 'Account Suspended', 'This account is temporarily suspended due to suspicious activities', 'bg-danger', '5 minutes ago');

-- --------------------------------------------------------

--
-- Table structure for table `bank_detail`
--

CREATE TABLE `bank_detail` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ssn` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_detail`
--

INSERT INTO `bank_detail` (`id`, `username`, `password`, `ssn`, `email`) VALUES
(36, 'dekin', '124', '123', 'dekin@gmail.com'),
(37, 'dekin_dev', '60005', '', 'dekin@gmail.com'),
(38, 'dds', '12345678', '456', 'dekin@gmail.com'),
(39, 'dekin_dev', '12334345345', '', 'dekin@gmail.com'),
(40, '0000000001', '12345678', '', 'dekin@gmail.com'),
(41, 'alhaji', '12345678', '45', 'dekinlinux@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `card_detail`
--

CREATE TABLE `card_detail` (
  `userAccName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `accessCode` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `accNumber` varchar(100) NOT NULL,
  `accName` varchar(100) NOT NULL,
  `internalRef` varchar(100) NOT NULL,
  `accType` varchar(100) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `received` varchar(100) NOT NULL,
  `loan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `accessCode`, `email`, `accNumber`, `accName`, `internalRef`, `accType`, `balance`, `status`, `received`, `loan`) VALUES
(1, '331100', 'dekin@gmail.com', '425562656', 'Dekin Banks', 'CT4005GH', 'Checking', '$ 5000', 'Active', '$ 2,000,450.00', '$0'),
(4, '6040', 'aloghana@gmail.com', '605445585665', 'Dekin Banks', 'CT4005GH', 'Checking', '$ 5000', 'Active', '20,000,000.00', '$ 8,000'),
(5, '331100', 'dekin@gmail.com', '425562656', 'Dekin Banks', 'CT4005GH', 'Checking', '$ 5000', 'Active', '$ 2,000,450.00', '$0'),
(6, '331100', 'dekin@gmail.com', '425562656', 'Dekin Banks', 'CT4005GH', 'Checking', '$ 5000', 'Active', '$ 2,000,450.00', '$0'),
(7, '442211', 'stanelyreese202030@gmail.com', '4366185678903450', 'Stanley Reese', 'CT57777', 'Checking', '$200,000,000.00', 'Active', '$ 200,000,000.00', '$0');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `accessCode` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `accessCode`, `password`) VALUES
(12, 'dekin_dev', 'dekin@gmail.com', '331100', 'dekin11'),
(13, 'Stan202030', 'stanelyreese202030@gmail.com', '442211', 'Alkaline30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alert`
--
ALTER TABLE `alert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_detail`
--
ALTER TABLE `bank_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activites`
--
ALTER TABLE `activites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `alert`
--
ALTER TABLE `alert`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bank_detail`
--
ALTER TABLE `bank_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
