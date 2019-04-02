-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD:pc_collection.sql
-- Generation Time: Feb 22, 2019 at 01:23 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3
=======
-- Generation Time: Apr 02, 2019 at 11:20 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28
>>>>>>> Last Commit:database/pc_collection.sql

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

<<<<<<< HEAD:pc_collection.sql
INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');
=======
INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(4, 'admin', 'c77fb4db376247fdbd131ff97110efc0');
>>>>>>> Last Commit:database/pc_collection.sql

-- --------------------------------------------------------

--
-- Table structure for table `collection_items`
--

CREATE TABLE `collection_items` (
<<<<<<< HEAD:pc_collection.sql
  `code_no` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

=======
  `Code_no` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Unit` varchar(50) NOT NULL,
  `Amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection_items`
--

INSERT INTO `collection_items` (`Code_no`, `Product_ID`, `Quantity`, `Unit`, `Amount`) VALUES
(34, 1, 7, 'dozen', '84.00'),
(34, 3, 9, 'pcs.', '207.00'),
(34, 1, 6, 'dozen', '72.00'),
(34, 8, 8, 'pack', '712.00'),
(34, 1, 7, 'dozen', '84.00'),
(34, 9, 7, 'pcs.', '623.00');

>>>>>>> Last Commit:database/pc_collection.sql
-- --------------------------------------------------------

--
-- Table structure for table `collection_table`
--

CREATE TABLE `collection_table` (
<<<<<<< HEAD:pc_collection.sql
  `code_no` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `due_date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_paid` date NOT NULL,
  `interest` decimal(10,2) NOT NULL
=======
  `Code_no` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Due_date` date NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Date_paid` date NOT NULL,
  `Interest` decimal(10,2) NOT NULL
>>>>>>> Last Commit:database/pc_collection.sql
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection_table`
--

<<<<<<< HEAD:pc_collection.sql
INSERT INTO `collection_table` (`code_no`, `customer_id`, `due_date`, `status`, `date_paid`, `interest`) VALUES
(2, 9, '2018-11-18', 'not oaid', '1018-12-18', '0.50');
=======
INSERT INTO `collection_table` (`Code_no`, `Customer_ID`, `Due_date`, `Status`, `Date_paid`, `Interest`) VALUES
(34, 9, '2019-03-08', 'paid', '2019-03-27', '0.00'),
(36, 10, '2019-03-28', 'unpaid', '2019-05-28', '0.00'),
(37, 10, '2019-06-12', 'unpaid', '2019-06-12', '10.00'),
(38, 20, '2019-04-05', 'unpaid', '2019-04-12', '5.00'),
(39, 9, '2019-04-05', 'paid', '2019-04-20', '5.00'),
(40, 9, '2019-04-06', 'paid', '2019-04-13', '5.00'),
(41, 10, '2019-04-12', 'unpaid', '2019-04-13', '5.00'),
(42, 20, '2019-04-13', 'paid', '2019-04-19', '5.00');
>>>>>>> Last Commit:database/pc_collection.sql

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE `customer_table` (
<<<<<<< HEAD:pc_collection.sql
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `extname` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
=======
  `Customer_ID` int(11) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Middlename` varchar(50) NOT NULL,
  `Extendedname` varchar(50) NOT NULL,
  `Phonenumber` varchar(50) NOT NULL,
  `Street` varchar(50) NOT NULL,
  `City` varchar(100) NOT NULL
>>>>>>> Last Commit:database/pc_collection.sql
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_table`
--

<<<<<<< HEAD:pc_collection.sql
INSERT INTO `customer_table` (`customer_id`, `first_name`, `last_name`, `middlename`, `extname`, `phone_number`, `street`, `city`) VALUES
(9, 'Piere', 'Potz', 'C', 'Jr.', '09469866483', 'Mansabay', 'oroquieta city'),
(10, 'mitchie', 'piang', 'gabin', 'maria', '09090101833', 'barra', 'oroquieta city');
=======
INSERT INTO `customer_table` (`Customer_ID`, `Firstname`, `Lastname`, `Middlename`, `Extendedname`, `Phonenumber`, `Street`, `City`) VALUES
(8, 'Pedicart', 'Potutan', 'c.', 'jr', '090901010833', 'mansabay', 'ozamis'),
(9, 'Aning', 'Piang', 'G.', 'Ning', '09090101833', 'Barra', 'Ozamis City'),
(10, 'Jonard', 'Piang', 'A.', 'Dong', '0909867536', 'Puntod', 'Oroquieta City'),
(20, 'Gerlie', 'Ritcha', 'P.', 'Gang', '090765321', 'Purok-3', 'Marawi City');
>>>>>>> Last Commit:database/pc_collection.sql

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
<<<<<<< HEAD:pc_collection.sql
  `product_id` int(11) NOT NULL,
  `particular` varchar(50) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `regular_price` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL
=======
  `Product_ID` int(11) NOT NULL,
  `Particular` varchar(50) NOT NULL,
  `Unit` varchar(50) NOT NULL,
  `Regular_Price` decimal(10,2) NOT NULL,
  `Discount` decimal(10,2) NOT NULL
>>>>>>> Last Commit:database/pc_collection.sql
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_table`
--

<<<<<<< HEAD:pc_collection.sql
INSERT INTO `product_table` (`product_id`, `particular`, `item_quantity`, `unit`, `regular_price`, `discount`) VALUES
(10, 'shoes', 12, '5', '8765.00', '60.00');
=======
INSERT INTO `product_table` (`Product_ID`, `Particular`, `Unit`, `Regular_Price`, `Discount`) VALUES
(1, 'Anti Perspirant Deodorant Cream', 'dozen', '12.00', '25.00'),
(3, 'White Dove Lotion ', 'pcs.', '23.00', '5.00'),
(8, 'dress', 'pack', '89.00', '89.00'),
(9, 'Deodorant ', 'pcs.', '89.00', '5.00');
>>>>>>> Last Commit:database/pc_collection.sql

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collection_items`
--
ALTER TABLE `collection_items`
<<<<<<< HEAD:pc_collection.sql
  ADD UNIQUE KEY `collection_code` (`code_no`),
  ADD UNIQUE KEY `product_id` (`product_id`);
=======
  ADD KEY `Code_no` (`Code_no`),
  ADD KEY `Product_ID` (`Product_ID`);
>>>>>>> Last Commit:database/pc_collection.sql

--
-- Indexes for table `collection_table`
--
ALTER TABLE `collection_table`
<<<<<<< HEAD:pc_collection.sql
  ADD PRIMARY KEY (`code_no`),
  ADD UNIQUE KEY `customer_id` (`customer_id`);
=======
  ADD PRIMARY KEY (`Code_no`),
  ADD KEY `Customer_ID` (`Customer_ID`);
>>>>>>> Last Commit:database/pc_collection.sql

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
<<<<<<< HEAD:pc_collection.sql
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

=======
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `collection_table`
--
ALTER TABLE `collection_table`
  MODIFY `Code_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
>>>>>>> Last Commit:database/pc_collection.sql
--
-- Constraints for dumped tables
--

--
-- Constraints for table `collection_items`
--
ALTER TABLE `collection_items`
<<<<<<< HEAD:pc_collection.sql
  ADD CONSTRAINT `collection_items_ibfk_1` FOREIGN KEY (`code_no`) REFERENCES `collection_table` (`code_no`);
=======
  ADD CONSTRAINT `collection_items_ibfk_3` FOREIGN KEY (`code_no`) REFERENCES `collection_table` (`code_no`),
  ADD CONSTRAINT `collection_items_ibfk_4` FOREIGN KEY (`product_id`) REFERENCES `product_table` (`product_id`);
>>>>>>> Last Commit:database/pc_collection.sql

--
-- Constraints for table `collection_table`
--
ALTER TABLE `collection_table`
  ADD CONSTRAINT `collection_table_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_table` (`customer_id`);
<<<<<<< HEAD:pc_collection.sql
COMMIT;
=======
>>>>>>> Last Commit:database/pc_collection.sql

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
