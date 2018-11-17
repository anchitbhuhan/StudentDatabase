-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2018 at 09:10 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdatabase2`
--

-- --------------------------------------------------------

--
-- Table structure for table `acad_details`
--

CREATE TABLE `acad_details` (
  `id` int(3) NOT NULL,
  `usn` varchar(11) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `etm_ia1` int(5) DEFAULT NULL,
  `etm_ia2` int(5) DEFAULT NULL,
  `etm_ia3` int(5) DEFAULT NULL,
  `etm_ia_avg` int(5) DEFAULT NULL,
  `cn_ia1` int(5) NOT NULL,
  `cn_ia2` int(5) NOT NULL,
  `cn_ia3` int(5) DEFAULT NULL,
  `cn_ia_avg` int(5) DEFAULT NULL,
  `dbms_ia1` int(5) NOT NULL,
  `dbms_ia2` int(5) NOT NULL,
  `dbms_ia3` int(5) DEFAULT NULL,
  `dbms_ia_avg` int(5) DEFAULT NULL,
  `atc_ia1` int(5) NOT NULL,
  `atc_ia2` int(5) NOT NULL,
  `atc_ia3` int(5) DEFAULT NULL,
  `atc_ia_avg` int(5) DEFAULT NULL,
  `java_ia1` int(5) NOT NULL,
  `java_ia2` int(5) NOT NULL,
  `java_ia3` int(5) DEFAULT NULL,
  `java_ia_avg` int(5) DEFAULT NULL,
  `ai/cloud_ia1` int(5) NOT NULL,
  `ai/cloud_ia2` int(5) NOT NULL,
  `ai/cloud_ia3` int(5) DEFAULT NULL,
  `ai/cloud_ia_avg` int(5) DEFAULT NULL,
  `cnlab` int(5) NOT NULL,
  `dbmslab` int(5) NOT NULL,
  `ext_agg` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acad_details`
--

INSERT INTO `acad_details` (`id`, `usn`, `branch`, `sem`, `etm_ia1`, `etm_ia2`, `etm_ia3`, `etm_ia_avg`, `cn_ia1`, `cn_ia2`, `cn_ia3`, `cn_ia_avg`, `dbms_ia1`, `dbms_ia2`, `dbms_ia3`, `dbms_ia_avg`, `atc_ia1`, `atc_ia2`, `atc_ia3`, `atc_ia_avg`, `java_ia1`, `java_ia2`, `java_ia3`, `java_ia_avg`, `ai/cloud_ia1`, `ai/cloud_ia2`, `ai/cloud_ia3`, `ai/cloud_ia_avg`, `cnlab`, `dbmslab`, `ext_agg`) VALUES
(4, '1DT16IS001', 'ISE', '5', 14, 12, 14, NULL, 15, 15, 15, NULL, 0, 0, NULL, NULL, 0, 0, NULL, NULL, 0, 0, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 7.12);

--
-- Triggers `acad_details`
--
DELIMITER $$
CREATE TRIGGER `int_avg` BEFORE INSERT ON `acad_details` FOR EACH ROW set new.int_avg = (new.ia1 + new.ia2 + new.ia3)/3
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acad_details`
--
ALTER TABLE `acad_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abcdef` (`usn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acad_details`
--
ALTER TABLE `acad_details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acad_details`
--
ALTER TABLE `acad_details`
  ADD CONSTRAINT `abcdef` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
