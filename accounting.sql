-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 05:42 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounting`
--

-- --------------------------------------------------------

--
-- Table structure for table `addres`
--

CREATE TABLE `addres` (
  `a_id` int(15) NOT NULL,
  `addres` varchar(50) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addres`
--

INSERT INTO `addres` (`a_id`, `addres`, `created`) VALUES
(14, 'Brgy. San Isidro, Toboso', '2022-08-24 11:13:02'),
(16, 'Brgy. Tabun-ac, Toboso', '2022-08-24 11:14:30'),
(17, 'Brgy. Bandila, Toboso', '2022-08-24 11:15:40'),
(18, 'Brgy. Bug-ang, Toboso', '2022-08-24 11:19:07'),
(19, 'Brgy. Salamanca', '2022-08-24 14:52:24'),
(20, 'Brgy. Concepcion', '2022-08-25 08:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `userPassword` varchar(20) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `username`, `email`, `userPassword`, `created`) VALUES
(1, 'Accounting Admin', 'admin@gmail.com', 'admin', '2022-08-22 10:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` int(15) NOT NULL,
  `course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `course`) VALUES
(3, 'B.S. Information Technology'),
(4, 'B.S. Business Administration'),
(5, 'B.S. Public Administration');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `d_id` int(15) NOT NULL,
  `department` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`d_id`, `department`) VALUES
(1, 'Accounting'),
(2, 'Mayors Office'),
(3, 'Audit');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `e_id` int(15) NOT NULL,
  `education` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`e_id`, `education`) VALUES
(1, 'Elementary'),
(2, 'High School'),
(3, 'Senior High School'),
(4, 'Vocational Course'),
(5, 'TESDA Course'),
(6, '2-yr College'),
(7, '4-yr Bachelors Degree'),
(8, 'Masteral Degree'),
(9, 'Doctorate / PHD.');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` int(15) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `middle_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `suffix` varchar(5) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `birth_date` date NOT NULL,
  `addres` varchar(60) NOT NULL,
  `stat` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` int(16) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `educational_attainment` varchar(30) NOT NULL,
  `course` varchar(50) NOT NULL,
  `employee_type` varchar(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `salary` int(12) NOT NULL,
  `cse` varchar(3) NOT NULL,
  `cse_type` varchar(30) NOT NULL,
  `hired` date NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `first_name`, `middle_name`, `last_name`, `suffix`, `gender`, `birth_date`, `addres`, `stat`, `email`, `contact`, `religion`, `educational_attainment`, `course`, `employee_type`, `department`, `job_title`, `salary`, `cse`, `cse_type`, `hired`, `created`) VALUES
(1, 'John Wick', 'D', 'Doe', '', 'Male', '1193-12-10', 'Brgy. Bandila, Toboso', 'Single', 'jrantiojobhoy@gmai.com', 2147483647, '7th Day Adventist', '4-yr Bachelors Degree', 'B.S. Business Administration', 'Job Order', 'Audit', 'Clerk', 3500, 'No', 'Not', '2022-12-10', '2022-08-25 04:05:25'),
(2, 'Johnny', 'Peligro', 'Antiojo', '', 'Male', '1993-12-10', 'Brgy. Salamanca', 'Single', 'jrantiojobhoy@gmail.com', 2147483647, 'Roman Catholic', '4-yr Bachelors Degree', 'B.S. Information Technology', 'Job Order', 'Mayors Office', 'Clerk', 3500, 'No', 'Not', '2019-08-19', '2022-08-25 04:06:57'),
(3, 'Romeo', 'D.', 'Lobaton', 'Jr.', 'Male', '1994-01-25', 'Brgy. Bandila, Toboso', 'Married', 'techzquad@gmail.com', 2147483647, 'Other', '4-yr Bachelors Degree', 'B.S. Information Technology', 'Job Order', 'Accounting', 'Administrative Assistant', 3500, 'Yes', 'Sub-Professional', '2019-07-19', '2022-08-25 04:08:18'),
(4, 'John', 'D', 'Doe', '', 'Male', '1193-12-10', 'Brgy. Bandila, Toboso', 'Single', 'jrantiojobhoy@gmai.com', 2147483647, '7th Day Adventist', '4-yr Bachelors Degree', 'B.S. Business Administration', 'Job Order', 'Audit', 'Clerk', 3500, 'No', 'Not', '2022-12-10', '2022-08-25 04:05:25'),
(5, 'Johnny', 'Peligro', 'Antiojo', '', 'Male', '1993-12-10', 'Brgy. Salamanca', 'Single', 'jrantiojobhoy@gmail.com', 2147483647, 'Roman Catholic', '4-yr Bachelors Degree', 'B.S. Information Technology', 'Job Order', 'Mayors Office', 'Clerk', 3500, 'No', 'Not', '2019-08-19', '2022-08-25 04:06:57'),
(6, 'Romeo', 'D.', 'Lobaton', 'Jr.', 'Male', '1994-01-25', 'Brgy. Bandila, Toboso', 'Married', 'techzquad@gmail.com', 2147483647, 'Other', '4-yr Bachelors Degree', 'B.S. Information Technology', 'Job Order', 'Accounting', 'Administrative Assistant', 3500, 'Yes', 'Sub-Professional', '2019-07-19', '2022-08-25 04:08:18'),
(7, 'John', 'D', 'Doe', '', 'Male', '1193-12-10', 'Brgy. Bandila, Toboso', 'Single', 'jrantiojobhoy@gmai.com', 2147483647, '7th Day Adventist', '4-yr Bachelors Degree', 'B.S. Business Administration', 'Job Order', 'Audit', 'Clerk', 3500, 'No', 'Not', '2022-12-10', '2022-08-25 04:05:25'),
(8, 'Johnny', 'Peligro', 'Antiojo', '', 'Male', '1993-12-10', 'Brgy. Salamanca', 'Single', 'jrantiojobhoy@gmail.com', 2147483647, 'Roman Catholic', '4-yr Bachelors Degree', 'B.S. Information Technology', 'Job Order', 'Mayors Office', 'Clerk', 3500, 'No', 'Not', '2019-08-19', '2022-08-25 04:06:57'),
(9, 'Romeo', 'D.', 'Lobaton', 'Jr.', 'Female', '1994-01-25', 'Brgy. San Isidro, Toboso', 'Married', 'techzquad@gmail.com', 2147483647, 'Other', '4-yr Bachelors Degree', 'B.S. Information Technology', 'Job Order', 'Accounting', 'Administrative Assistant', 3500, 'Yes', 'Sub-Professional', '2019-07-19', '2022-08-25 04:08:18'),
(10, 'John', 'D', 'Doe', '', 'Male', '1193-12-10', 'Brgy. Bandila, Toboso', 'Single', 'jrantiojobhoy@gmai.com', 2147483647, '7th Day Adventist', '4-yr Bachelors Degree', 'B.S. Business Administration', 'Job Order', 'Audit', 'Clerk', 3500, 'No', 'Not', '2022-12-10', '2022-08-25 04:05:25'),
(12, 'Romeo', 'D.', 'Lobaton', 'Jr.', 'Male', '1994-01-25', 'Brgy. Bandila, Toboso', 'Married', 'techzquad@gmail.com', 2147483647, 'Other', '4-yr Bachelors Degree', 'B.S. Information Technology', 'Job Order', 'Accounting', 'Administrative Assistant', 3500, 'Yes', 'Sub-Professional', '2019-07-19', '2022-08-25 04:08:18'),
(13, 'John', 'D', 'Doe', '', 'Male', '1193-12-10', 'Brgy. Bandila, Toboso', 'Single', 'jrantiojobhoy@gmai.com', 2147483647, '7th Day Adventist', '4-yr Bachelors Degree', 'B.S. Business Administration', 'Job Order', 'Audit', 'Clerk', 3500, 'No', 'Not', '2022-12-10', '2022-08-25 04:05:25'),
(14, 'Johnny', 'Peligro', 'Antiojo', '', 'Male', '1993-12-10', 'Brgy. Salamanca', 'Single', 'jrantiojobhoy@gmail.com', 2147483647, 'Roman Catholic', '4-yr Bachelors Degree', 'B.S. Information Technology', 'Job Order', 'Mayors Office', 'Clerk', 3500, 'No', 'Not', '2019-08-19', '2022-08-25 04:06:57'),
(15, 'Romeo', 'D.', 'Lobaton', 'Jr.', 'Male', '1994-01-25', 'Brgy. Bandila, Toboso', 'Married', 'techzquad@gmail.com', 2147483647, 'Other', '4-yr Bachelors Degree', 'B.S. Information Technology', 'Job Order', 'Accounting', 'Administrative Assistant', 3500, 'Yes', 'Sub-Professional', '2019-07-19', '2022-08-25 04:08:18'),
(16, 'John', 'D', 'Doe', '', 'Male', '1193-12-10', 'Brgy. Bandila, Toboso', 'Single', 'jrantiojobhoy@gmai.com', 2147483647, '7th Day Adventist', '4-yr Bachelors Degree', 'B.S. Business Administration', 'Job Order', 'Audit', 'Clerk', 3500, 'No', 'Not', '2022-12-10', '2022-08-25 04:05:25'),
(18, 'Romeo', 'D.', 'Lobaton', 'Jr.', 'Male', '1994-01-25', 'Brgy. Bandila, Toboso', 'Married', 'techzquad@gmail.com', 2147483647, 'Other', '4-yr Bachelors Degree', 'B.S. Information Technology', 'Job Order', 'Accounting', 'Administrative Assistant', 3500, 'Yes', 'Sub-Professional', '2019-07-19', '2022-08-25 04:08:18'),
(19, 'John', 'D', 'Doe', '', 'Male', '1193-12-10', 'Brgy. Bandila, Toboso', 'Single', 'jrantiojobhoy@gmai.com', 2147483647, '7th Day Adventist', '4-yr Bachelors Degree', 'B.S. Business Administration', 'Job Order', 'Audit', 'Clerk', 3500, 'No', 'Not', '2022-12-10', '2022-08-25 04:05:25'),
(20, 'Johnny', 'Peligro', 'Antiojo', '', 'Male', '1993-12-10', 'Brgy. Salamanca', 'Single', 'jrantiojobhoy@gmail.com', 2147483647, 'Roman Catholic', '4-yr Bachelors Degree', 'B.S. Information Technology', 'Job Order', 'Mayors Office', 'Clerk', 3500, 'No', 'Not', '2019-08-19', '2022-08-25 04:06:57'),
(21, 'Romeo', 'D.', 'Lobaton', 'Jr.', 'Male', '1994-01-25', 'Brgy. Bandila, Toboso', 'Married', 'techzquad@gmail.com', 2147483647, 'Other', '4-yr Bachelors Degree', 'B.S. Information Technology', 'Job Order', 'Accounting', 'Administrative Assistant', 3500, 'Yes', 'Sub-Professional', '2019-07-19', '2022-08-25 04:08:18'),
(24, 'John Wick', 'D', 'Doe', '', 'Male', '1193-12-10', 'Brgy. Bandila, Toboso', 'Single', 'jrantiojobhoy@gmai.com', 2147483647, '7th Day Adventist', '4-yr Bachelors Degree', 'B.S. Business Administration', 'Job Order', 'Audit', 'Clerk', 3500, 'No', 'Not', '2022-12-10', '2022-08-25 04:05:25'),
(26, 'Romeo', 'D.', 'Lobaton', 'Jr.', 'Male', '1994-01-25', 'Brgy. Bandila, Toboso', 'Married', 'techzquad@gmail.com', 2147483647, 'Other', '4-yr Bachelors Degree', 'B.S. Information Technology', 'Job Order', 'Accounting', 'Administrative Assistant', 3500, 'Yes', 'Sub-Professional', '2019-07-19', '2022-08-25 04:08:18'),
(27, 'John', 'D', 'Doe', '', 'Male', '1193-12-10', 'Brgy. Bandila, Toboso', 'Single', 'jrantiojobhoy@gmai.com', 2147483647, '7th Day Adventist', '4-yr Bachelors Degree', 'B.S. Business Administration', 'Job Order', 'Audit', 'Clerk', 3500, 'No', 'Not', '2022-12-10', '2022-08-25 04:05:25'),
(28, 'Johnny', 'Peligro', 'Antiojo', '', 'Male', '1993-12-10', 'Brgy. Salamanca', 'Single', 'jrantiojobhoy@gmail.com', 2147483647, 'Roman Catholic', '4-yr Bachelors Degree', 'B.S. Information Technology', 'Job Order', 'Mayors Office', 'Clerk', 3500, 'No', 'Not', '2019-08-19', '2022-08-25 04:06:57'),
(29, 'Romeo', 'D.', 'Lobaton', 'Jr.', 'Male', '1994-01-25', 'Brgy. Bandila, Toboso', 'Married', 'techzquad@gmail.com', 2147483647, 'Other', '4-yr Bachelors Degree', 'B.S. Information Technology', 'Job Order', 'Accounting', 'Administrative Assistant', 3500, 'Yes', 'Sub-Professional', '2019-07-19', '2022-08-25 04:08:18'),
(30, 'John', 'D', 'Doe', '', 'Male', '1193-12-10', 'Brgy. Bandila, Toboso', 'Single', 'jrantiojobhoy@gmai.com', 2147483647, '7th Day Adventist', '4-yr Bachelors Degree', 'B.S. Business Administration', 'Job Order', 'Audit', 'Clerk', 3500, 'No', 'Not', '2022-12-10', '2022-08-25 04:05:25'),
(31, 'Johnny', 'Peligro', 'Antiojo', '', 'Male', '1993-12-10', 'Brgy. Salamanca', 'Single', 'jrantiojobhoy@gmail.com', 2147483647, 'Roman Catholic', '4-yr Bachelors Degree', 'B.S. Information Technology', 'Job Order', 'Mayors Office', 'Clerk', 3500, 'No', 'Not', '2019-08-19', '2022-08-25 04:06:57'),
(32, 'Romeo', 'D.', 'Lobaton', 'Jr.', 'Male', '1994-01-25', 'Brgy. Bandila, Toboso', 'Married', 'techzquad@gmail.com', 2147483647, 'Other', '4-yr Bachelors Degree', 'B.S. Information Technology', 'Job Order', 'Accounting', 'Administrative Assistant', 3500, 'Yes', 'Sub-Professional', '2019-07-19', '2022-08-25 04:08:18'),
(33, 'John', 'D', 'Doe', '', 'Male', '1193-12-10', 'Brgy. Bandila, Toboso', 'Single', 'jrantiojobhoy@gmai.com', 2147483647, '7th Day Adventist', '4-yr Bachelors Degree', 'B.S. Business Administration', 'Job Order', 'Audit', 'Clerk', 3500, 'No', 'Not', '2022-12-10', '2022-08-25 04:05:25'),
(34, 'Romeo', 'D.', 'Lobaton', 'Jr.', 'Male', '1994-01-25', 'Brgy. Bandila, Toboso', 'Married', 'techzquad@gmail.com', 2147483647, 'Other', '4-yr Bachelors Degree', 'B.S. Information Technology', 'Job Order', 'Accounting', 'Administrative Assistant', 3500, 'Yes', 'Sub-Professional', '2019-07-19', '2022-08-25 04:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `employee_type`
--

CREATE TABLE `employee_type` (
  `e_id` int(15) NOT NULL,
  `emp_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_type`
--

INSERT INTO `employee_type` (`e_id`, `emp_type`) VALUES
(1, 'Regular'),
(2, 'Casual'),
(3, 'Assignment Order'),
(4, 'Job Order');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `j_id` int(15) NOT NULL,
  `job` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`j_id`, `job`) VALUES
(1, 'Driver'),
(2, 'Administrative Assistant'),
(3, 'Clerk');

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE `religion` (
  `r_id` int(15) NOT NULL,
  `religion` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`r_id`, `religion`) VALUES
(1, 'Roman Catholic'),
(2, 'Iglesia ni Cristo'),
(3, 'Baptist'),
(4, 'Muslim'),
(5, 'Jehovah Witness'),
(6, 'Budhist'),
(7, 'Atheist'),
(8, 'Other'),
(9, '7th Day Adventist'),
(10, 'Islam'),
(11, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `s_id` int(15) NOT NULL,
  `salary` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addres`
--
ALTER TABLE `addres`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `employee_type`
--
ALTER TABLE `employee_type`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addres`
--
ALTER TABLE `addres`
  MODIFY `a_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `c_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `d_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `e_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `e_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `employee_type`
--
ALTER TABLE `employee_type`
  MODIFY `e_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `j_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
  MODIFY `r_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `s_id` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
