-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2019 at 09:50 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

DROP TABLE IF EXISTS `account_details`;
CREATE TABLE IF NOT EXISTS `account_details` (
  `Account_Id` int(11) NOT NULL,
  `Account_name` text,
  `Address_Line_1` text,
  `Address_Line_2` text,
  `Address_Line_3` text,
  `Place` text,
  `Pin` text,
  `Mobile_Number` text,
  `Land_Line_Number` text,
  `Email_Id` text,
  `Gstin_Number` text,
  PRIMARY KEY (`Account_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_details`
--

INSERT INTO `account_details` (`Account_Id`, `Account_name`, `Address_Line_1`, `Address_Line_2`, `Address_Line_3`, `Place`, `Pin`, `Mobile_Number`, `Land_Line_Number`, `Email_Id`, `Gstin_Number`) VALUES
(6, '1234567', 'Hospet Road', 'asdfgh', 'asdfghj', 'tiptur', '572201', '5555', 'India ', 'sriramgn0@gmail.com', 'abc'),
(5, '', '', '', '', '', '', '101', '', '', ''),
(2, '11', '1', '', '', '', '', '123', '', '', ''),
(3, 'aaa', '', '', '', '', '', '1998', '', '', ''),
(1, 'ram', 'Hospet Road', '', '', '', '', '9686628025', 'India ', 'sriramgn0@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `courier_details`
--

DROP TABLE IF EXISTS `courier_details`;
CREATE TABLE IF NOT EXISTS `courier_details` (
  `Courier_Id` int(11) NOT NULL,
  `Courier_Name` text NOT NULL,
  `address` text NOT NULL,
  `Courier_Number` text NOT NULL,
  `Courier_Mail_ID` text NOT NULL,
  PRIMARY KEY (`Courier_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier_details`
--

INSERT INTO `courier_details` (`Courier_Id`, `Courier_Name`, `address`, `Courier_Number`, `Courier_Mail_ID`) VALUES
(2, 'Sriram Gn', 'Hospet Road', '09686628025', 'sriramgn0@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employ`
--

DROP TABLE IF EXISTS `employ`;
CREATE TABLE IF NOT EXISTS `employ` (
  `Employ_Id` int(11) NOT NULL,
  `Password` text NOT NULL,
  `Employ_Name` text NOT NULL,
  `Employ_Address` text NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `Employ_Mail_ID` text NOT NULL,
  `Number` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Employ_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employ`
--

INSERT INTO `employ` (`Employ_Id`, `Password`, `Employ_Name`, `Employ_Address`, `Phone_Number`, `Employ_Mail_ID`, `Number`) VALUES
(1, '1', 'ram', '', 1, '', 99),
(3, '3', 'srijith', '', 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `item_detail`
--

DROP TABLE IF EXISTS `item_detail`;
CREATE TABLE IF NOT EXISTS `item_detail` (
  `Account_Id` int(11) NOT NULL,
  `Item_Id` int(11) NOT NULL,
  `Item_Name` varchar(25) NOT NULL,
  `Item_Barcode_Number` text NOT NULL,
  `Item_Description` varchar(50) NOT NULL,
  PRIMARY KEY (`Item_Name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_detail`
--

INSERT INTO `item_detail` (`Account_Id`, `Item_Id`, `Item_Name`, `Item_Barcode_Number`, `Item_Description`) VALUES
(1, 101, 'laptop', '123456', 'battery'),
(2, 102, 'mouse', '1111', ''),
(3, 103, 'battery', 'aaa', ''),
(5, 105, 'bag11', '123456789', ''),
(6, 106, 'mobile', '555', '');

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

DROP TABLE IF EXISTS `service_details`;
CREATE TABLE IF NOT EXISTS `service_details` (
  `Service_Reference_Id` int(11) NOT NULL,
  `In_Date` date NOT NULL,
  `Account_Id` int(11) NOT NULL,
  `Item_Id` int(11) NOT NULL,
  `Serial_No` text NOT NULL,
  `Narration` text NOT NULL,
  `Memo` text NOT NULL,
  `ServiceProvide_Name` text NOT NULL,
  `Customer_TO_Company_Name` text NOT NULL,
  `Company_To_ServiceProvider_Status` int(11) NOT NULL,
  `Company_To_Service_Provider_Date` date NOT NULL,
  `Delivered_To_Service_Provider_Date` date NOT NULL,
  `Delivered_To_Service_Provider_Status` int(11) NOT NULL,
  `Company_To_Service_Provider_Name` text NOT NULL,
  `Service_Provider_To_Company_Date` date NOT NULL,
  `Service_Provider_To_Company_Status` text NOT NULL,
  `ServiceProvider_To_Company_Name` text NOT NULL,
  `Delivered_To_Company_Status` text NOT NULL,
  `Delivered_To_Company_Date` date NOT NULL,
  `Company_To_Customer_Status` text NOT NULL,
  `Delivered_To_Customer_Date` date NOT NULL,
  `Company_To_Customer_Name` text NOT NULL,
  `New_SerialNumber_If_Replaced` int(11) NOT NULL,
  `Stand_By_Product_Serial_No` int(11) NOT NULL,
  `Stand_By_Product_Details` text NOT NULL,
  `Stand_By_Product` text NOT NULL,
  `Purchase_Info` text NOT NULL,
  `Dispatched_By_Courier` text NOT NULL,
  `Courier_name` text NOT NULL,
  `Company_To_ServiceProvider_Dockail_Details` text NOT NULL,
  `Company_To_Customer_Dockail_Details` text NOT NULL,
  `status` text NOT NULL,
  `Replace1` text NOT NULL,
  PRIMARY KEY (`Service_Reference_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`Service_Reference_Id`, `In_Date`, `Account_Id`, `Item_Id`, `Serial_No`, `Narration`, `Memo`, `ServiceProvide_Name`, `Customer_TO_Company_Name`, `Company_To_ServiceProvider_Status`, `Company_To_Service_Provider_Date`, `Delivered_To_Service_Provider_Date`, `Delivered_To_Service_Provider_Status`, `Company_To_Service_Provider_Name`, `Service_Provider_To_Company_Date`, `Service_Provider_To_Company_Status`, `ServiceProvider_To_Company_Name`, `Delivered_To_Company_Status`, `Delivered_To_Company_Date`, `Company_To_Customer_Status`, `Delivered_To_Customer_Date`, `Company_To_Customer_Name`, `New_SerialNumber_If_Replaced`, `Stand_By_Product_Serial_No`, `Stand_By_Product_Details`, `Stand_By_Product`, `Purchase_Info`, `Dispatched_By_Courier`, `Courier_name`, `Company_To_ServiceProvider_Dockail_Details`, `Company_To_Customer_Dockail_Details`, `status`, `Replace1`) VALUES
(1006, '2019-02-19', 5, 105, '', '', '', 'dell ins', 'srijith', 1, '2019-02-19', '2019-02-19', 1, 'srijith', '2019-02-19', '1', 'ram', '1', '2019-02-19', '1', '2019-02-19', 'ram', 0, 111, 'aaa', '1', '0', 'proffessional', '0', '2345678o', '0', 'delivered_to_customer', '1'),
(1004, '2019-02-19', 3, 103, 'aaa', '', '', 'lenova', 'ram', 1, '2019-02-19', '2019-02-19', 1, 'ram', '2019-02-19', '1', 'srijith', '1', '2019-02-19', '1', '2019-02-19', 'srijith', 0, 111, 'aaa', '1', '0', 'proffessional', '0', '2345678o', '0', 'delivered_to_customer', '1'),
(1001, '2019-02-18', 1, 101, '2345678o', '', '', 'hp', 'ram', 1, '2019-02-18', '2019-02-18', 1, 'ram', '2019-02-18', '1', 'ram', '1', '2019-02-20', '1', '2019-02-20', 'ram', 0, 23456789, 'asdcfvbnm,', '1', '0', 'proffessional', 'Sriram Gn', '123456789', 'jkkjn', 'delivered_to_customer', '1'),
(1002, '2019-02-18', 2, 102, '', '', '', 'dell', 'ram', 0, '2019-02-20', '2019-02-20', 0, '0', '2019-02-20', '0', '0', '0', '2019-02-20', '0', '2019-02-20', '0', 666, 987654321, 'sdfghjk', '1', '0', '0', '0', '0', '0', 'ITEM REPLACED', '10'),
(1007, '2019-02-19', 6, 106, 'dfghjk', 'sdfghjkl', 'sdfghjkl', 'dell', 'ram', 1, '2019-02-19', '2000-01-01', 0, 'ram', '2000-01-01', '0', '0', '0', '2000-01-01', '0', '2019-02-20', 'ram', 0, 12345678, 'asdfghj', '1', 'sdftyuiop', 'proffessional', 'Sriram Gn', '2345678o', '2345678o', 'sent_to_customer', '1');

-- --------------------------------------------------------

--
-- Table structure for table `service_provider`
--

DROP TABLE IF EXISTS `service_provider`;
CREATE TABLE IF NOT EXISTS `service_provider` (
  `ServiceProvider_Id` int(11) NOT NULL,
  `proname` text NOT NULL,
  `Address_1` text NOT NULL,
  `Address_2` text NOT NULL,
  `Address_3` text NOT NULL,
  `Place` text NOT NULL,
  `Pin` int(11) NOT NULL,
  `Mobile_Number` text NOT NULL,
  `Land_Line_Number` text NOT NULL,
  `Email_Id` text NOT NULL,
  `Gstin_Number` text NOT NULL,
  PRIMARY KEY (`ServiceProvider_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_provider`
--

INSERT INTO `service_provider` (`ServiceProvider_Id`, `proname`, `Address_1`, `Address_2`, `Address_3`, `Place`, `Pin`, `Mobile_Number`, `Land_Line_Number`, `Email_Id`, `Gstin_Number`) VALUES
(11, 'lenova', 'Hospet Road', '', '', 'bang', 12345678, '09686628025', 'India ', 'sriramgn0@gmail.com', ''),
(111, '1', '', '', '', '', 1, '', '', '', ''),
(1111, 'dell', 'Hospet Road', 'santhpet', 'tiptur', 'tiptur', 11, '09686628025', 'India ', 'sriramgn0@gmail.com', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
