-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2019 at 02:45 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `collection_items`
--

CREATE TABLE `collection_items` (
  `code_no` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection_items`
--

INSERT INTO `collection_items` (`code_no`, `product_id`, `quantity`, `unit`, `amount`) VALUES
(533, 2101, 10, 'pcs.', '89.00'),
(8888, 2001, 2, 'pcs.', '45.00');

-- --------------------------------------------------------

--
-- Table structure for table `collection_table`
--

CREATE TABLE `collection_table` (
  `code_no` int(11) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `due_date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `date_paid` date NOT NULL,
  `interest` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection_table`
--

INSERT INTO `collection_table` (`code_no`, `customer_id`, `due_date`, `status`, `date_paid`, `interest`) VALUES
(533, 9, '2019-03-08', 'Paid', '2019-04-08', '10.00'),
(8888, 11, '2019-07-15', 'Unpaid', '2019-08-15', '50.00');

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE `customer_table` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `extname` varchar(10) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`customer_id`, `first_name`, `last_name`, `middlename`, `extname`, `phone_number`, `street`, `city`) VALUES
(7, 'Pedicart', 'Putotan', 'C.', 'Ped', '09469866483', 'P-2 Bajo', 'Ozamis city'),
(9, 'Mitch', 'Piang', 'G.', 'Meng', '09090101833', 'P-4 Barra', 'Oroquieta city'),
(10, 'Juvy', 'Entigro', 'A.', 'Gor', '09090275869', 'P-1 Lower', 'Tangub City'),
(11, 'Joan', 'Amomonpon', 'S.', 'Jo', '09876543524', 'P-6 Sibugon', 'Marawi City');

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `product_id` int(11) NOT NULL,
  `particular` varchar(50) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `regular_price` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`product_id`, `particular`, `item_quantity`, `unit`, `regular_price`, `discount`) VALUES
(2001, 'Aspire Body Spray', 2, 'pcs.', '45.00', '10.00'),
(2003, 'Alert Kids Toothpaste', 5, 'pcs.', '99.00', '5.00'),
(2101, 'Deodorant ', 10, 'set', '89.00', '5.00'),
(6666, 'Femi Care Intimate Wash Powder', 6, 'Dozen', '99.00', '25.00'),
(9090, 'Check Antibacterial Soap', 1, 'pack', '55.00', '2.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `collection_items`
--
ALTER TABLE `collection_items`
  ADD UNIQUE KEY `Code_no` (`code_no`),
  ADD UNIQUE KEY `Product_ID` (`product_id`);

--
-- Indexes for table `collection_table`
--
ALTER TABLE `collection_table`
  ADD PRIMARY KEY (`code_no`),
  ADD UNIQUE KEY `Customer_ID` (`customer_id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `collection_table`
--
ALTER TABLE `collection_table`
  MODIFY `code_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8889;
--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `collection_items`
--
ALTER TABLE `collection_items`
  ADD CONSTRAINT `collection_items_ibfk_1` FOREIGN KEY (`Code_no`) REFERENCES `collection_table` (`Code_no`),
  ADD CONSTRAINT `collection_items_ibfk_2` FOREIGN KEY (`Product_ID`) REFERENCES `product_table` (`Product_ID`);

--
-- Constraints for table `collection_table`
--
ALTER TABLE `collection_table`
  ADD CONSTRAINT `collection_table_ibfk_1` FOREIGN KEY (`Customer_ID`) REFERENCES `customer_table` (`Customer_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
