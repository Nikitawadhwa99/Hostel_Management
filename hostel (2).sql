-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 10:06 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `Id` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Date` date NOT NULL,
  `Reason` varchar(20) NOT NULL,
  `Room_no` varchar(15) NOT NULL,
  `Check_out` varchar(10) NOT NULL,
  `Check_in` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`Id`, `Name`, `Date`, `Reason`, `Room_no`, `Check_out`, `Check_in`) VALUES
(3, 'Vahida', '2019-03-15', 'abc', '43', '01:59:00.0', '03:59:00.0'),
(4, 'Nisha', '2019-03-15', 'illness', '12', '01:59:00.0', '12:00:00.0'),
(5, 'Mohit', '2019-03-15', 'illness', 'F2', '01:59:00.0', '12:00:00.0');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Class` varchar(15) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Room_no` varchar(10) NOT NULL,
  `Payment_mode` varchar(10) NOT NULL,
  `Reciept_no` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Total_fees` double NOT NULL,
  `Paid` double NOT NULL,
  `Pending` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave_form`
--

CREATE TABLE `leave_form` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Room_no` varchar(10) NOT NULL,
  `Stay_reason` varchar(25) NOT NULL,
  `Days` int(10) NOT NULL,
  `Date_in` date NOT NULL,
  `Date_out` date NOT NULL,
  `colg_name` varchar(15) NOT NULL,
  `c_name` varchar(15) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `p_mob` bigint(10) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `Reason` varchar(25) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_form`
--

INSERT INTO `leave_form` (`Id`, `Name`, `Room_no`, `Stay_reason`, `Days`, `Date_in`, `Date_out`, `colg_name`, `c_name`, `mob`, `p_mob`, `Address`, `Reason`, `status`) VALUES
(1, 'Vahida', '33', 'dd', 3, '2019-03-04', '2019-03-19', 'dd', 'dd', 4444444444, 4444444444, 'dd', 'fd', ''),
(2, 'Nisha', 'F2', 'illness', 2, '2019-03-04', '2019-03-13', 'GHRIBM', 'IMCA', 3433432344, 3223443233, 'pachora', 'illness', 'Pending'),
(3, 'Nisha', 'F2', 'BBA', 2, '2019-02-26', '2019-02-25', 'GHRIBM', 'IMCA', 3433432344, 3223443233, 'Sindhi colony', 'illness', 'Pending'),
(4, 'Nikita', 'F2', 'BBA', 2, '2019-03-04', '2019-03-05', 'GHRIBM', 'IMCA', 3433432344, 3223443233, 'tm nagar', 'illness', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `pay_fees`
--

CREATE TABLE `pay_fees` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Class` varchar(15) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Room_no` varchar(10) NOT NULL,
  `Payment_mode` varchar(10) NOT NULL,
  `Reciept_no` int(11) NOT NULL,
  `Amount` double NOT NULL,
  `Date` date NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay_fees`
--

INSERT INTO `pay_fees` (`Id`, `Name`, `Class`, `Year`, `Room_no`, `Payment_mode`, `Reciept_no`, `Amount`, `Date`, `Status`) VALUES
(1, 'Nikita', 'IMCA', '3', '43', 'cash', 1232, 20000, '2019-03-12', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Id` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Roll_no` int(10) NOT NULL,
  `Father_Name` varchar(25) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Mobile_no` bigint(10) NOT NULL,
  `Tel_no` bigint(10) NOT NULL,
  `Category` varchar(15) NOT NULL,
  `Current_class` varchar(15) NOT NULL,
  `G_name` varchar(20) NOT NULL,
  `G_add` varchar(20) NOT NULL,
  `G_mob` bigint(10) NOT NULL,
  `G_tel` bigint(10) NOT NULL,
  `Last_exam` varchar(20) NOT NULL,
  `Year_pass` varchar(20) NOT NULL,
  `Board_name` varchar(25) NOT NULL,
  `Marks_obtain` varchar(15) NOT NULL,
  `Per_marks` varchar(15) NOT NULL,
  `Remarks` varchar(15) NOT NULL,
  `S_name` varchar(15) NOT NULL,
  `L_name` varchar(15) NOT NULL,
  `Class` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `confirm_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Id`, `Name`, `Roll_no`, `Father_Name`, `Address`, `Mobile_no`, `Tel_no`, `Category`, `Current_class`, `G_name`, `G_add`, `G_mob`, `G_tel`, `Last_exam`, `Year_pass`, `Board_name`, `Marks_obtain`, `Per_marks`, `Remarks`, `S_name`, `L_name`, `Class`, `email`, `password`, `confirm_password`) VALUES
(9, 'Vahida', 10, 'Jivan', 'Sindhi colony,pachora', 8756390234, 6789065456, 'Comp', 'IMCA', 'vahida', 'Jalgaon', 3423454322, 4567876423, 'sy', '2019', 'pune', '70', '70', 'good', 'Vahida', 'Pathan', 'IMCA', 'vahida@gmail.co', 'vahida', 'vahida');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `Stu_name` varchar(15) NOT NULL,
  `Room_no` varchar(10) NOT NULL,
  `Check_in` varchar(10) NOT NULL,
  `Check_out` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`Id`, `Date`, `Name`, `Address`, `Mobile`, `Stu_name`, `Room_no`, `Check_in`, `Check_out`) VALUES
(1, '2019-03-12', 'ff', 'dd', 4343434343, 'Rupali', '33', '13:01:00.0', '22:01:00.0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `leave_form`
--
ALTER TABLE `leave_form`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pay_fees`
--
ALTER TABLE `pay_fees`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entry`
--
ALTER TABLE `entry`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `leave_form`
--
ALTER TABLE `leave_form`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
