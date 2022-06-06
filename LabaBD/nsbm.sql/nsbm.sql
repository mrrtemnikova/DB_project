-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 07:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nsbm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_login`
--

CREATE TABLE `lecturer_login` (
  `id` int(10) NOT NULL,
  `name` varchar(192) DEFAULT NULL,
  `faculty` varchar(192) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(191) DEFAULT NULL,
  `uhash` varchar(68) NOT NULL,
  `subjects` varchar(192) DEFAULT 'a:0:{}'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer_login`
--

INSERT INTO `lecturer_login` (`id`, `name`, `faculty`, `username`, `password`, `uhash`, `subjects`) VALUES
(16, 'Mr. Lecturer', 'Imaginary', 'admin', '21232f297a57a5a743894a0e4a801fc3', '4c550d629426813cb458f136e4ea86bc', 'a:1:{i:0;i:2;}'),
(28, 'Mrs. Lecturer', 'School of Computing', 'admin2', 'c84258e9c39059a89ab77d846ddab909', '0180c1eaba1657ecec50288e37497e33', 'a:2:{i:0;i:2;i:1;i:3;}');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `faculty`, `batch`, `degree`, `uname`, `pass`) VALUES
(3, 'admin', 'School of Computing', 'dada', 'SE', 'admin', 'admin'),
(4, 'sdad', 'School of Computing', 'dsad', 'SE', 'dsa', 'dsa'),
(8, 'ddd', 'School of Computing', 'dada', 'NS', 'sddf', '9fc58423aa0341dd75c031e1b2fabe0a'),
(9, 'test as', 'School of Computing', 'sa', 'NS', 'sasasas', 'f45731e3d39a1b2330bbf93e9b3de59e');

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `id` int(255) NOT NULL,
  `sid` int(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `week1` int(5) NOT NULL,
  `week2` int(5) NOT NULL,
  `week3` int(5) NOT NULL,
  `week4` int(5) NOT NULL,
  `week5` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_attendance`
--

INSERT INTO `student_attendance` (`id`, `sid`, `sub_code`, `week1`, `week2`, `week3`, `week4`, `week5`) VALUES
(1, 1, '1', 1, 0, 0, 0, 0),
(2, 3, '', 1, 0, 1, 0, 0),
(3, 8, '', 0, 0, 0, 0, 0),
(4, 9, 'Not Set', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_name` varchar(192) DEFAULT NULL,
  `descr` varchar(192) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_name`, `descr`) VALUES
(2, 'PUSL2003', 'Integrating Project'),
(3, 'PUSL2008', 'Internet Of Things');

-- --------------------------------------------------------

--
-- Table structure for table `subject_code`
--

CREATE TABLE `subject_code` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) NOT NULL,
  `lecturer_id` int(10) NOT NULL,
  `Week_01` varchar(10) DEFAULT NULL,
  `Week_02` varchar(10) DEFAULT NULL,
  `Week_03` varchar(10) DEFAULT NULL,
  `Week_04` varchar(10) DEFAULT NULL,
  `Week_05` varchar(10) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_code`
--

INSERT INTO `subject_code` (`id`, `subject_id`, `lecturer_id`, `Week_01`, `Week_02`, `Week_03`, `Week_04`, `Week_05`, `date_added`) VALUES
(57, 2, 16, 'XP3EQN', 'K9N5GZ', NULL, '8N4MGD', 'KRDETX', '2020-02-26 21:37:59'),
(58, 3, 16, NULL, 'LS4VEC', 'JT9LVE', NULL, NULL, '2020-04-28 21:57:31'),
(59, 2, 16, 'J2N54S', NULL, 'GM7N3H', NULL, NULL, '2020-04-28 22:16:10'),
(60, 3, 28, '5Y2FLH', '2XLZ35', '7LNB9W', NULL, NULL, '2020-04-28 23:14:53'),
(61, 2, 28, 'LHQB4E', '7VFNRC', NULL, 'Q3HS4Z', NULL, '2020-04-28 23:26:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturer_login`
--
ALTER TABLE `lecturer_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `uhash_2` (`uhash`),
  ADD UNIQUE KEY `password` (`password`),
  ADD KEY `name` (`name`),
  ADD KEY `faculty` (`faculty`),
  ADD KEY `uhash` (`uhash`),
  ADD KEY `subjects` (`subjects`) USING BTREE;

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_name` (`subject_name`(191)),
  ADD KEY `descr` (`descr`);

--
-- Indexes for table `subject_code`
--
ALTER TABLE `subject_code`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date_added` (`date_added`),
  ADD KEY `sub_id` (`lecturer_id`),
  ADD KEY `Week_01` (`Week_01`),
  ADD KEY `Week_02` (`Week_02`),
  ADD KEY `Week_03` (`Week_03`),
  ADD KEY `Week_04` (`Week_04`),
  ADD KEY `Week_05` (`Week_05`),
  ADD KEY `subject_id` (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lecturer_login`
--
ALTER TABLE `lecturer_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_attendance`
--
ALTER TABLE `student_attendance`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject_code`
--
ALTER TABLE `subject_code`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
