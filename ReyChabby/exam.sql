-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 07:00 AM
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
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `ID` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Profile` varchar(500) NOT NULL,
  `Feature` varchar(5) NOT NULL,
  `regDate` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`ID`, `Name`, `Profile`, `Feature`, `regDate`) VALUES
(1, 'Rey Chabby C. Estrera', '1x1.jpg', 'True', '2022-06-02'),
(2, 'Darlene L. Quinagon', 'Profile 1.jpg', 'True', '2022-06-02'),
(3, 'Ryangel P. Nano', 'eugeo-1.jpg', 'False', '2022-06-02'),
(4, 'Rio S. Beracis', 'bcd3eb8f44047b734be7e611049077fb53449e23_hq.jpg', 'False', '2022-06-02'),
(5, 'Marc Justine S. Fabian', 'avatars-000395460771-f3vupa-t240x240.jpg', 'True', '2022-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_occupation`
--

CREATE TABLE `tbl_occupation` (
  `ID` int(11) NOT NULL,
  `JobTitle` varchar(100) NOT NULL,
  `EmployeeID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_occupation`
--

INSERT INTO `tbl_occupation` (`ID`, `JobTitle`, `EmployeeID`) VALUES
(6, 'Software Engineer', 6),
(8, 'Athlete', NULL),
(9, 'Waiter', 3),
(10, 'Animator', NULL),
(11, 'Programmer', NULL),
(12, 'Developer', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_occupation`
--
ALTER TABLE `tbl_occupation`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_occupation`
--
ALTER TABLE `tbl_occupation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
