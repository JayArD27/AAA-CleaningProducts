-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 01:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aaaproducts`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aaaproducts`
--

CREATE TABLE `tbl_aaaproducts` (
  `ID` int(11) NOT NULL,
  `P_NAME` varchar(50) NOT NULL,
  `P_CATEGORY` varchar(50) NOT NULL,
  `P_PRICE` float NOT NULL,
  `P_QTY` int(11) NOT NULL,
  `EXPR_DATE` date NOT NULL,
  `P_TOTAL` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_aaaproducts`
--

INSERT INTO `tbl_aaaproducts` (`ID`, `P_NAME`, `P_CATEGORY`, `P_PRICE`, `P_QTY`, `EXPR_DATE`, `P_TOTAL`) VALUES
(14, 'All Mighty - 970ml Dishwashing Liquid - Antibacter', 'DISHWASHING', 38, 50, '2022-01-31', 1900),
(16, 'All Mighty - 400ml Dishwashing Liquid- - Calamansi', 'DISHWASHING', 25, 50, '2022-01-31', 1250),
(18, 'All Mighty - 970ml Dishwashing Liquid- Lemon scent', 'DISHWASHING', 38, 50, '2022-01-31', 1900),
(19, 'All Mighty - 400ml Dishwashing Liquid- Antibacteri', 'DISHWASHING', 25, 50, '2022-01-31', 1250),
(20, 'All Mighty - 400ml Dishwashing Liquid- Lemon scent', 'DISHWASHING', 25, 50, '2022-01-31', 1250),
(21, 'All Mighty - 970ml Fabric Softener - Ocean fresh F', 'FABRIC CONDITIONER', 38, 50, '2022-01-31', 1900),
(22, 'All Mighty - 970ml Fabric Softener - Lavender fres', 'FABRIC CONDITIONER', 38, 50, '2022-01-31', 1900),
(23, 'Ultramatic Powder - Powder Fabric Conditioner.', 'FABRIC CONDITIONER', 38, 50, '2022-01-31', 1900),
(24, 'Exel - Toilet Bowl Cleaner', 'OTHERS', 38, 50, '2022-01-31', 1900),
(25, 'Scotch Brite - Sponge', 'OTHERS', 25, 50, '2022-01-31', 1250);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE `tbl_account` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `POSITION` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`ID`, `USERNAME`, `PASSWORD`, `POSITION`) VALUES
(1, 'USER', '12345', 'USER'),
(2, 'ADMIN', 'qwerty', 'ADMIN'),
(3, 'EMPLOYEE', 'qwerty123', 'EMPLOYEE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `NUMBER` int(11) NOT NULL,
  `PRIORITY` varchar(30) NOT NULL,
  `TYPE` varchar(30) NOT NULL,
  `MESSAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`NAME`, `EMAIL`, `NUMBER`, `PRIORITY`, `TYPE`, `MESSAGE`) VALUES
('JAY-AR ', 'jayar@gmail.com', 2147483647, 'Normal', 'change', 'fasdfasv');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `F_NAME` varchar(50) NOT NULL,
  `L_NAME` varchar(50) NOT NULL,
  `USER` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `ADDRESS` varchar(50) NOT NULL,
  `SHIP_ADD` varchar(50) NOT NULL,
  `NUMBER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `ORDER_ID` int(11) NOT NULL,
  `F_NAME` varchar(50) NOT NULL,
  `M_NAME` varchar(50) NOT NULL,
  `L_NAME` varchar(50) NOT NULL,
  `ADDRESS` varchar(50) NOT NULL,
  `SHIP_ADDRESS` varchar(50) NOT NULL,
  `PROD_ID` int(11) NOT NULL,
  `P_QTY` int(11) NOT NULL,
  `PROD_NAME` varchar(50) NOT NULL,
  `MESSAGE` varchar(50) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`ORDER_ID`, `F_NAME`, `M_NAME`, `L_NAME`, `ADDRESS`, `SHIP_ADDRESS`, `PROD_ID`, `P_QTY`, `PROD_NAME`, `MESSAGE`, `DATE`) VALUES
(1, 'JAY', 'DT', 'AR', 'AGAHNWT', 'ADSHJHARH', 3, 12, 'ARHwrh', 'HAETJHAET', '2022-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userlogs`
--

CREATE TABLE `tbl_userlogs` (
  `USERNAME` varchar(50) NOT NULL,
  `ACTION` varchar(10) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_userlogs`
--

INSERT INTO `tbl_userlogs` (`USERNAME`, `ACTION`, `DATE`) VALUES
('', 'LOGGED IN', '2022-01-04'),
('', 'LOGGED IN', '2022-01-04'),
('USER', 'LOGGED IN', '2022-01-04'),
('USER', 'LOGGED IN', '2022-01-04'),
('ADMIN', 'LOGGED IN', '2022-01-04'),
('USER', 'LOGGED IN', '2022-01-04'),
('USER', 'LOGGED IN', '2022-01-04'),
('d', 'LOGGED IN', '2022-01-07'),
('d', 'LOGGED IN', '2022-01-07'),
('d', 'LOGGED IN', '2022-01-07'),
('USER', 'LOGGED IN', '2022-01-07'),
('', 'LOGGED IN', '2022-01-07'),
('', 'LOGGED IN', '2022-01-07'),
('', 'LOGGED IN', '2022-01-07'),
('', 'LOGGED IN', '2022-01-07'),
('', 'LOGGED IN', '2022-01-07'),
('ADMIN', 'LOGGED IN', '2022-01-09'),
('ADMIN', 'LOGGED IN', '2022-01-09'),
('ADMIN', 'LOGGED IN', '2022-01-15'),
('ADMIN', 'LOGGED IN', '2022-01-15'),
('ADMIN', 'LOGGED IN', '2022-01-15'),
('EMPLOYEE', 'LOGGED IN', '2022-01-15'),
('USER', 'LOGGED IN', '2022-01-16'),
('EMPLOYEE', 'LOGGED IN', '2022-01-16'),
('USER', 'LOGGED IN', '2022-01-16'),
('EMPLOYEE', 'LOGGED IN', '2022-01-16'),
('USER', 'LOGGED IN', '2022-01-16'),
('EMPLOYEE', 'LOGGED IN', '2022-01-16'),
('ADMIN', 'LOGGED IN', '2022-01-16'),
('EMPLOYEE', 'LOGGED IN', '2022-01-17'),
('USER', 'LOGGED IN', '2022-01-17'),
('USER', 'LOGGED IN', '2022-01-17'),
('EMPLOYEE', 'LOGGED IN', '2022-01-17'),
('USER', 'LOGGED IN', '2022-01-17'),
('USER', 'LOGGED IN', '2022-01-17'),
('ADMIN', 'LOGGED IN', '2022-01-17'),
('EMPLOYEE', 'LOGGED IN', '2022-01-17'),
('USER', 'LOGGED IN', '2022-01-17'),
('ADMIN', 'LOGGED IN', '2022-01-17'),
('USER', 'LOGGED IN', '2022-01-17'),
('ADMIN', 'LOGGED IN', '2022-01-17'),
('EMPLOYEE', 'LOGGED IN', '2022-01-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aaaproducts`
--
ALTER TABLE `tbl_aaaproducts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`ORDER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aaaproducts`
--
ALTER TABLE `tbl_aaaproducts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `ORDER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
