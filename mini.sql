-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2019 at 05:45 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `day` enum('monday','tuesday','wednesday','thursday') NOT NULL,
  `date` date NOT NULL,
  `time_in` time(6) NOT NULL,
  `time_out` time(6) NOT NULL,
  `name` varchar(20) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`day`, `date`, `time_in`, `time_out`, `name`, `staff_id`) VALUES
('tuesday', '2019-08-13', '08:15:24.460570', '17:00:21.000000', 'daniel', 35),
('wednesday', '2019-09-25', '08:30:00.000000', '19:00:00.000000', 'karthik', 45),
('thursday', '2019-11-14', '08:20:00.000000', '17:40:00.000000', 'john', 55),
('monday', '2019-10-21', '09:00:00.000000', '15:30:00.000000', 'venkat', 65),
('thursday', '2019-11-28', '07:10:00.000000', '16:40:00.000000', 'kunal', 75),
('monday', '2019-08-19', '08:30:00.000000', '18:40:00.000000', 'daniel', 35),
('wednesday', '2019-07-03', '09:30:00.000000', '16:40:00.000000', 'karthik', 45),
('tuesday', '2019-08-13', '08:15:24.460570', '17:00:21.000000', 'daniel', 35),
('wednesday', '2019-09-25', '08:30:00.000000', '19:00:00.000000', 'karthik', 45),
('thursday', '2019-11-14', '08:20:00.000000', '17:40:00.000000', 'john', 55),
('monday', '2019-10-21', '09:00:00.000000', '15:30:00.000000', 'venkat', 65),
('thursday', '2019-11-28', '07:10:00.000000', '16:40:00.000000', 'kunal', 75);

-- --------------------------------------------------------

--
-- Table structure for table `dob`
--

CREATE TABLE `dob` (
  `day` enum('monday','tuesday','wednesday','thursday') NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dob`
--

INSERT INTO `dob` (`day`, `month`, `year`, `staff_id`) VALUES
('wednesday', 'may', 1974, 35),
('monday', 'apr', 1980, 45),
('tuesday', 'dec', 1987, 55),
('tuesday', 'sept', 1974, 65),
('thursday', 'jul', 1964, 75);

-- --------------------------------------------------------

--
-- Table structure for table `doj`
--

CREATE TABLE `doj` (
  `day` enum('monday','tuesday','wednesday','thursday') NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doj`
--

INSERT INTO `doj` (`day`, `month`, `year`, `staff_id`) VALUES
('tuesday', 'jun', 2005, 55),
('wednesday', 'mar', 2019, 45),
('monday', 'may', 2009, 35),
('monday', 'dec', 2005, 65),
('thursday', '', 0, 75),
('tuesday', 'jul', 2005, 55),
('wednesday', 'mar', 2019, 45),
('monday', 'may', 2009, 35),
('monday', 'dec', 2005, 65),
('thursday', 'jun', 2009, 75);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `staff_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `date_of-birth` date NOT NULL,
  `date_of_join` date NOT NULL,
  `salary` int(11) NOT NULL,
  `department` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`staff_id`, `name`, `age`, `date_of-birth`, `date_of_join`, `salary`, `department`) VALUES
(35, 'daniel', 45, '1974-05-09', '2009-05-12', 50000, 'tickets'),
(45, 'karthik', 39, '1980-04-23', '2019-03-05', 12000, 'security'),
(55, 'john', 32, '1987-12-04', '2005-07-09', 40000, 'tickets'),
(65, 'venkat', 45, '1974-09-04', '2005-12-05', 30000, 'security'),
(75, 'kunal', 55, '1964-07-08', '2009-06-09', 50000, 'maintenance');

-- --------------------------------------------------------

--
-- Table structure for table `front`
--

CREATE TABLE `front` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `front`
--

INSERT INTO `front` (`name`, `password`) VALUES
('admin', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD KEY `name` (`name`,`staff_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `dob`
--
ALTER TABLE `dob`
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `doj`
--
ALTER TABLE `doj`
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`staff_id`,`name`);

--
-- Indexes for table `front`
--
ALTER TABLE `front`
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=501;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `employee` (`staff_id`);

--
-- Constraints for table `dob`
--
ALTER TABLE `dob`
  ADD CONSTRAINT `dob_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `employee` (`staff_id`);

--
-- Constraints for table `doj`
--
ALTER TABLE `doj`
  ADD CONSTRAINT `doj_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `employee` (`staff_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
