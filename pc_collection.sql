-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2019 at 01:23 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pc_collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `collection_items`
--

CREATE TABLE `collection_items` (
  `code_no` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `collection_table`
--

CREATE TABLE `collection_table` (
  `code_no` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `due_date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_paid` date NOT NULL,
  `interest` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection_table`
--

INSERT INTO `collection_table` (`code_no`, `customer_id`, `due_date`, `status`, `date_paid`, `interest`) VALUES
(2, 9, '2018-11-18', 'not oaid', '1018-12-18', '0.50');

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE `customer_table` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `extname` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`customer_id`, `first_name`, `last_name`, `middlename`, `extname`, `phone_number`, `street`, `city`) VALUES
(9, 'Piere', 'Potz', 'C', 'Jr.', '09469866483', 'Mansabay', 'oroquieta city'),
(10, 'mitchie', 'piang', 'gabin', 'maria', '09090101833', 'barra', 'oroquieta city');

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `product_id` int(11) NOT NULL,
  `particular` varchar(50) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `regular_price` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`product_id`, `particular`, `item_quantity`, `unit`, `regular_price`, `discount`) VALUES
(10, 'shoes', 12, '5', '8765.00', '60.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collection_items`
--
ALTER TABLE `collection_items`
  ADD UNIQUE KEY `collection_code` (`code_no`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `collection_table`
--
ALTER TABLE `collection_table`
  ADD PRIMARY KEY (`code_no`),
  ADD UNIQUE KEY `customer_id` (`customer_id`);

--
-- Indexes for table `customer_table`
--
ALTER TABLE `customer_table`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collection_items`
--
ALTER TABLE `collection_items`
  ADD CONSTRAINT `collection_items_ibfk_1` FOREIGN KEY (`code_no`) REFERENCES `collection_table` (`code_no`);

--
-- Constraints for table `collection_table`
--
ALTER TABLE `collection_table`
  ADD CONSTRAINT `collection_table_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_table` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
