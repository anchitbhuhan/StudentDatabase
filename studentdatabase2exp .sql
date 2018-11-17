-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2018 at 07:57 PM
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
-- Database: `studentdatabase2exp`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `determineAge` (IN `birthDate` DATE, OUT `age` INT)  BEGIN
    SELECT FLOOR(DATEDIFF(NOW(), DATE(birthdate))/365) INTO age;
    
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `acad_details`
--

CREATE TABLE `acad_details` (
  `id` int(3) NOT NULL,
  `usn` varchar(11) DEFAULT NULL,
  `branch` varchar(5) DEFAULT NULL,
  `sem` varchar(5) DEFAULT NULL,
  `etm_ia1` int(5) DEFAULT NULL,
  `etm_ia2` int(5) DEFAULT NULL,
  `etm_ia3` int(5) DEFAULT NULL,
  `etm_ia_avg` int(5) DEFAULT NULL,
  `cn_ia1` int(5) DEFAULT NULL,
  `cn_ia2` int(5) DEFAULT NULL,
  `cn_ia3` int(5) DEFAULT NULL,
  `cn_ia_avg` int(5) DEFAULT NULL,
  `dbms_ia1` int(5) DEFAULT NULL,
  `dbms_ia2` int(5) DEFAULT NULL,
  `dbms_ia3` int(5) DEFAULT NULL,
  `dbms_ia_avg` int(5) DEFAULT NULL,
  `atc_ia1` int(5) DEFAULT NULL,
  `atc_ia2` int(5) DEFAULT NULL,
  `atc_ia3` int(5) DEFAULT NULL,
  `atc_ia_avg` int(5) DEFAULT NULL,
  `java_ia1` int(5) DEFAULT NULL,
  `java_ia2` int(5) DEFAULT NULL,
  `java_ia3` int(5) DEFAULT NULL,
  `java_ia_avg` int(5) DEFAULT NULL,
  `ac_ia1` int(5) DEFAULT NULL,
  `ac_ia2` int(5) DEFAULT NULL,
  `ac_ia3` int(5) DEFAULT NULL,
  `ac_ia_avg` int(5) DEFAULT NULL,
  `cnlab` int(5) NOT NULL,
  `dbmslab` int(5) NOT NULL,
  `ext_agg` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `acad_details`
--
DELIMITER $$
CREATE TRIGGER `ia_avg` BEFORE UPDATE ON `acad_details` FOR EACH ROW BEGIN
set new.etm_ia_avg = (new.etm_ia1+new.etm_ia2+new.etm_ia3)/3;
set new.atc_ia_avg = (new.atc_ia1+new.atc_ia2+new.atc_ia3)/3;
set new.cn_ia_avg = (new.cn_ia1+new.cn_ia2+new.cn_ia3)/3;
set new.dbms_ia_avg = (new.dbms_ia1+new.dbms_ia2+new.dbms_ia3)/3;
set new.ac_ia_avg = (new.ac_ia1+new.ac_ia2+new.ac_ia3)/3;
set new.java_ia_avg = (new.java_ia1+new.java_ia2+new.java_ia3)/3;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ia_avg1` BEFORE INSERT ON `acad_details` FOR EACH ROW BEGIN
set new.etm_ia_avg = (new.etm_ia1+new.etm_ia2+new.etm_ia3)/3;
set new.atc_ia_avg = (new.atc_ia1+new.atc_ia2+new.atc_ia3)/3;
set new.cn_ia_avg = (new.cn_ia1+new.cn_ia2+new.cn_ia3)/3;
set new.dbms_ia_avg = (new.dbms_ia1+new.dbms_ia2+new.dbms_ia3)/3;
set new.ac_ia_avg = (new.ac_ia1+new.ac_ia2+new.ac_ia3)/3;
set new.java_ia_avg = (new.java_ia1+new.java_ia2+new.java_ia3)/3;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(3) NOT NULL,
  `usn` varchar(11) NOT NULL,
  `projects` varchar(60) NOT NULL,
  `internships` varchar(50) NOT NULL,
  `certifications` varchar(50) NOT NULL,
  `paper_presntion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(3) NOT NULL,
  `usn` varchar(11) NOT NULL,
  `sub_code1` varchar(10) NOT NULL,
  `sub_name1` varchar(20) NOT NULL,
  `faculty_name1` varchar(50) NOT NULL,
  `sub_code2` varchar(10) NOT NULL,
  `sub_name2` varchar(20) NOT NULL,
  `faculty_name2` varchar(50) NOT NULL,
  `sub_code3` varchar(10) NOT NULL,
  `sub_name3` varchar(20) NOT NULL,
  `faculty_name3` varchar(50) NOT NULL,
  `sub_code4` varchar(10) NOT NULL,
  `sub_name4` varchar(20) NOT NULL,
  `faculty_name4` varchar(50) NOT NULL,
  `sub_code5` varchar(10) NOT NULL,
  `sub_name5` varchar(20) NOT NULL,
  `faculty_name5` varchar(50) NOT NULL,
  `sub_code6` varchar(10) NOT NULL,
  `sub_name6` varchar(20) NOT NULL,
  `faculty_name6` varchar(50) NOT NULL,
  `sub_code7` varchar(10) NOT NULL,
  `sub_name7` varchar(20) NOT NULL,
  `faculty_name7` varchar(50) NOT NULL,
  `sub_code8` varchar(10) NOT NULL,
  `sub_name8` varchar(20) NOT NULL,
  `faculty_name8` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lib_details`
--

CREATE TABLE `lib_details` (
  `id` int(3) NOT NULL,
  `lib_id` varchar(10) NOT NULL,
  `usn` varchar(11) NOT NULL,
  `book_id` varchar(10) NOT NULL,
  `book_name` varchar(25) NOT NULL,
  `date_out` date NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `usn` varchar(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `hostelite` varchar(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Anchit Bhushan', 'anchit', 'bhushananchit@gmail.com', '$2y$10$C3Fuqdbp36qfnnWbE3Vwp.J8GXi91ZG6rScqHgSut8H7IC1dQKE72'),
(12, 'Sanjeet', 'snjtshkr', 'ssaannjjeeeett@gmail.com', '$2y$10$4dTH6H0o2BD/CiKxVftJTOHK1WCDgcCV8fLtfjBoEgnemPJOxrjie'),
(13, 'Nihal Anand', 'Nihal16', 'nihal.origin9@gmail.com', '$2y$10$Kv2Rm94uwj0jFqzQfXPcHeVcPVmXmfYY50A9lHGK7y6mTfOprjoYO'),
(14, 'Akshat Divya', 'Akshat42', 'akshat424@live.com', '$2y$10$DKLdmjjEYhZB6i7esjYBd.MYn.J9UevCH0qkdC8peFFrECdTQZVxW');

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
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abcde` (`usn`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abcd` (`usn`);

--
-- Indexes for table `lib_details`
--
ALTER TABLE `lib_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abc` (`usn`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acad_details`
--
ALTER TABLE `acad_details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lib_details`
--
ALTER TABLE `lib_details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acad_details`
--
ALTER TABLE `acad_details`
  ADD CONSTRAINT `abcdef` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE;

--
-- Constraints for table `achievements`
--
ALTER TABLE `achievements`
  ADD CONSTRAINT `abcde` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `abcd` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE;

--
-- Constraints for table `lib_details`
--
ALTER TABLE `lib_details`
  ADD CONSTRAINT `abc` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
