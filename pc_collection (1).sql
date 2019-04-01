-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2019 at 09:00 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

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
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(4, 'admin', 'fae53351b9effc708e764e871bef3119');

-- --------------------------------------------------------

--
-- Table structure for table `collection_items`
--

CREATE TABLE `collection_items` (
  `Code_no` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Unit` varchar(100) NOT NULL,
  `Amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection_items`
--

INSERT INTO `collection_items` (`Code_no`, `Product_ID`, `Quantity`, `Unit`, `Amount`) VALUES
(34, 1, 2, 'one dozen', '24.00'),
(34, 8, 7, 'pack', '623.00'),
(34, 1, 5, 'dozen', '60.00'),
(34, 3, 223, 'pcs.', '5129.00'),
(34, 8, 5, 'pack', '445.00');

-- --------------------------------------------------------

--
-- Table structure for table `collection_table`
--

CREATE TABLE `collection_table` (
  `Code_no` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Due_date` date NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Date_paid` date NOT NULL,
  `Interest` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection_table`
--

INSERT INTO `collection_table` (`Code_no`, `Customer_ID`, `Due_date`, `Status`, `Date_paid`, `Interest`) VALUES
(34, 9, '2019-03-08', 'paid', '2019-03-27', '0.00'),
(36, 10, '2019-03-28', 'unpaid', '2019-05-28', '0.00'),
(37, 10, '2019-06-12', 'unpaid', '2019-06-12', '10.00');

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE `customer_table` (
  `Customer_ID` int(11) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Middlename` varchar(50) NOT NULL,
  `Extendedname` varchar(50) NOT NULL,
  `Phonenumber` varchar(50) NOT NULL,
  `Street` varchar(50) NOT NULL,
  `City` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`Customer_ID`, `Firstname`, `Lastname`, `Middlename`, `Extendedname`, `Phonenumber`, `Street`, `City`) VALUES
(8, 'Pedicart', 'Potutan', 'c.', 'jr', '090901010833', 'mansabay', 'ozamis'),
(9, 'Aning', 'Piang', 'G.', 'Ning', '09090101833', 'Barra', 'Ozamis City'),
(10, 'Jonard', 'Piang', 'A.', 'Dong', '0909867536', 'Puntod', 'Oroquieta City'),
(20, 'Gerlie', 'Ritcha', 'P.', 'Gang', '090765321', 'Purok-3', 'Marawi City');

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `Product_ID` int(11) NOT NULL,
  `Particular` varchar(100) NOT NULL,
  `Item_Quantity` int(11) NOT NULL,
  `Unit` varchar(100) NOT NULL,
  `Regular_Price` decimal(10,2) NOT NULL,
  `Discount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`Product_ID`, `Particular`, `Item_Quantity`, `Unit`, `Regular_Price`, `Discount`) VALUES
(1, 'Anti Perspirant Deodorant Cream', 12, 'dozen', '12.00', '25.00'),
(3, 'White Dove Lotion ', 12, 'pcs.', '23.00', '5.00'),
(8, 'dress', 0, 'pack', '89.00', '89.00'),
(9, 'Deodorant ', 0, 'pcs.', '89.00', '5.00');

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
  ADD KEY `Code_no` (`Code_no`),
  ADD KEY `Product_ID` (`Product_ID`);

--
-- Indexes for table `collection_table`
--
ALTER TABLE `collection_table`
  ADD PRIMARY KEY (`Code_no`),
  ADD KEY `Customer_ID` (`Customer_ID`);

--
-- Indexes for table `customer_table`
--
ALTER TABLE `customer_table`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`Product_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `collection_table`
--
ALTER TABLE `collection_table`
  MODIFY `Code_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collection_items`
--
ALTER TABLE `collection_items`
  ADD CONSTRAINT `collection_items_ibfk_3` FOREIGN KEY (`Code_no`) REFERENCES `collection_table` (`Code_no`),
  ADD CONSTRAINT `collection_items_ibfk_4` FOREIGN KEY (`Product_ID`) REFERENCES `product_table` (`Product_ID`);

--
-- Constraints for table `collection_table`
--
ALTER TABLE `collection_table`
  ADD CONSTRAINT `collection_table_ibfk_1` FOREIGN KEY (`Customer_ID`) REFERENCES `customer_table` (`Customer_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
