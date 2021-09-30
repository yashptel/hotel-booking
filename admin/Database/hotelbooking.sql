-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 01:02 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `AdminName` varchar(100) NOT NULL,
  `AdminMobileNumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `UserName`, `Password`, `AdminName`, `AdminMobileNumber`) VALUES
(1, 'Rutvik', '123', 'Rutvik Monpara', '9537538506'),
(2, 'Sagar', '123', 'Sagar Kuhada', '8160525356'),
(3, 'Jaymin', '123', 'Jaymin Detroja', '8980811166');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingID` int(11) NOT NULL,
  `AdminID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `HotelID` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingID`, `AdminID`, `CustomerID`, `HotelID`, `Date`) VALUES
(1, 1, 1, 1, '2019-12-24'),
(2, 1, 3, 2, '2019-12-25'),
(3, 2, 2, 3, '2019-12-29'),
(4, 3, 4, 4, '2019-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(100) NOT NULL,
  `CustomerMobileNumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `CustomerName`, `CustomerMobileNumber`) VALUES
(1, 'Raj Rabadiya', '7990189225'),
(2, 'Prashant Dhaduk', '9106227181'),
(3, 'Gautam Vekariya', '7069346964'),
(4, 'Prashant Thummar', '9898244545');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `HotelID` int(11) NOT NULL,
  `HotelName` varchar(100) NOT NULL,
  `HotelMobileNumber` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `HotelPrice` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`HotelID`, `HotelName`, `HotelMobileNumber`, `City`, `HotelPrice`) VALUES
(1, 'Shree', '1234567896', 'Gondal', '5000'),
(2, 'Dream Land', '1234567896', 'Gondal', '6000'),
(3, 'Fortune', '1234567896', 'Rajkot', '6000'),
(4, 'The Grand Thakar', '1234567896', 'Rajkot', '5500');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `VisitorID` int(11) NOT NULL,
  `Feedback` varchar(1000) NOT NULL,
  `VisitorMobileNumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`VisitorID`, `Feedback`, `VisitorMobileNumber`) VALUES
(1, 'Good', '1234567893'),
(2, 'Excellent', '1234567894'),
(3, 'Need Improvement', '12345679892');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingID`),
  ADD KEY `AdminName` (`AdminID`),
  ADD KEY `CustomerName` (`CustomerID`),
  ADD KEY `HotelName` (`HotelID`),
  ADD KEY `AdminName_2` (`AdminID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`HotelID`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`VisitorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `HotelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `VisitorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`HotelID`) REFERENCES `hotel` (`HotelID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
