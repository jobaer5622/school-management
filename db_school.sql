-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 04:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addmission_result`
--

CREATE TABLE `tbl_addmission_result` (
  `id` int(11) NOT NULL,
  `std_id` int(20) NOT NULL,
  `add_result` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_addmission_result`
--

INSERT INTO `tbl_addmission_result` (`id`, `std_id`, `add_result`) VALUES
(1, 332764, 'Pass'),
(2, 187430, 'Pass'),
(3, 103264, 'Pass'),
(4, 443177, 'Pass');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `ad_id` int(20) NOT NULL,
  `ad_name` varchar(200) NOT NULL,
  `ad_degination` varchar(200) NOT NULL,
  `ad_index` varchar(200) NOT NULL,
  `ad_edu` varchar(200) NOT NULL,
  `ad_contact` varchar(15) NOT NULL,
  `ad_email` varchar(200) NOT NULL,
  `ad_username` varchar(50) NOT NULL,
  `ad_password` varchar(255) NOT NULL,
  `ad_image` varchar(255) NOT NULL,
  `ad_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`ad_id`, `ad_name`, `ad_degination`, `ad_index`, `ad_edu`, `ad_contact`, `ad_email`, `ad_username`, `ad_password`, `ad_image`, `ad_role`) VALUES
(1, 'Sk Jobaer Siddiki', 'Admin', '123456', 'B. Sc. in CSE', '01915455224', 'jobaersiddiki80@gmail.com', 'jobaer', '1111', 'upload/01.jpg', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `t_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `t_category`) VALUES
(1, 'Headmaster'),
(4, 'Assistant Headmaster'),
(8, 'Joint Assistant Headmaster'),
(9, 'Senior Teacher'),
(10, 'Assistant Teacher'),
(11, 'Junior Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class`
--

CREATE TABLE `tbl_class` (
  `id` int(11) NOT NULL,
  `class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_class`
--

INSERT INTO `tbl_class` (`id`, `class`) VALUES
(1, 'Baby'),
(2, '1'),
(3, '2'),
(4, '3'),
(5, '4'),
(6, '5'),
(7, '6'),
(8, '7'),
(9, '8'),
(10, '9'),
(11, '10'),
(18, 'TC');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam`
--

CREATE TABLE `tbl_exam` (
  `id` int(11) NOT NULL,
  `exam_name` varchar(100) NOT NULL,
  `exam_status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_exam`
--

INSERT INTO `tbl_exam` (`id`, `exam_name`, `exam_status`) VALUES
(1, 'Model Test-2022', 1),
(2, 'Test 2022', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `inv_no` int(11) NOT NULL,
  `type_of_payment` varchar(400) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `std_id`, `inv_no`, `type_of_payment`, `amount`, `date`) VALUES
(1, 332764, 87626, 'Monthly Payment-January-2022', 200, '27/10/2022'),
(2, 332764, 85119, 'Monthly Payment-January-2022', 200, '28/10/2022'),
(3, 332764, 85550, 'Monthly Payment-January-2022', 200, '28/10/2022'),
(4, 332764, 3064, 'Monthly Payment-January-2022', 200, '27/10/2022'),
(5, 187430, 187430, 'Monthly Payment-January-2022', 200, '28/10/2022'),
(6, 332764, 1396, 'Monthly-Payment-March-2022', 200, '29/10/2022'),
(7, 332764, 31641, 'Monthly-Payment-March-2022', 500, '01/11/2022');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment_type`
--

CREATE TABLE `tbl_payment_type` (
  `id` int(11) NOT NULL,
  `type_of_payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_payment_type`
--

INSERT INTO `tbl_payment_type` (`id`, `type_of_payment`) VALUES
(1, 'Monthly Payment-January-2022'),
(2, 'Monthly-Payment-February-2022'),
(3, 'Monthly-Payment-March-2022');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_result`
--

CREATE TABLE `tbl_result` (
  `id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `exam_name` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `marks` int(11) NOT NULL,
  `uploadBy` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(50) NOT NULL,
  `std_app_date` varchar(15) NOT NULL,
  `std_add_date` varchar(15) NOT NULL,
  `app_year` varchar(10) NOT NULL,
  `std_id` varchar(255) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_father_name` varchar(255) NOT NULL,
  `std_father_nid` varchar(255) NOT NULL,
  `std_father_dob` varchar(255) NOT NULL,
  `std_mother_name` varchar(255) NOT NULL,
  `std_mother_nid` varchar(255) NOT NULL,
  `std_mother_dob` varchar(255) NOT NULL,
  `std_berth_cer_no` varchar(255) NOT NULL,
  `std_dob` varchar(255) NOT NULL,
  `std_image` varchar(255) NOT NULL,
  `std_contact` varchar(255) NOT NULL,
  `std_present_address` varchar(255) NOT NULL,
  `std_parmanent_address` varchar(255) NOT NULL,
  `std_rel` varchar(255) NOT NULL,
  `std_class` varchar(255) NOT NULL,
  `std_section` varchar(15) NOT NULL,
  `std_roll` varchar(10) NOT NULL,
  `std_add_payment` varchar(255) NOT NULL,
  `std_status` varchar(11) NOT NULL,
  `std_pmt_txnId` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `std_app_date`, `std_add_date`, `app_year`, `std_id`, `std_name`, `std_father_name`, `std_father_nid`, `std_father_dob`, `std_mother_name`, `std_mother_nid`, `std_mother_dob`, `std_berth_cer_no`, `std_dob`, `std_image`, `std_contact`, `std_present_address`, `std_parmanent_address`, `std_rel`, `std_class`, `std_section`, `std_roll`, `std_add_payment`, `std_status`, `std_pmt_txnId`) VALUES
(7, '27/09/2022', '29/09/2022', '2022', '332764', 'Sk Jobaer Siddiki', 'MD. Enamul Kabir', '0125803325751', '03/08/1971', 'Shahida Akter', '0125803325752', '03/08/1974', '85454189545349', '27/07/1998', 'upload/67aa9b7f2f.jpg', '01915455224', 'Mongla', 'Mongla', 'Islam', '10', 'A', '5', '1', '2', 'SSLCZ_TEST_6332a24ab4331'),
(8, '10/10/2022', '10/10/2022', '2022', '187430', 'MD. Rana', 'MD. Mamun', '18741572178', '18/07/1985', 'Shahinur Begum', '45813651987', '04/05/1990', '528453448541', '01/01/2002', 'upload/cb8da53d7d.jpg', '01915455224', 'Mongla', 'Mongla', 'Islam', '10', 'A', '02', '1', '2', ''),
(10, '11/10/2022', '11/10/2022', '2022', '103264', 'Mr. XYZ', 'ABC', '58493628', '01/01/1990', 'DEF', '429623', '01/01/1990', '58578298', '01/01/2000', 'upload/b4f04be91e.jpeg', '11111111111', 'Mongla', 'Mongla', 'Islam', '9', 'A', '01', '1', '2', ''),
(11, '11/10/2022', '11/10/2022', '2022', '443177', 'hggi', 'yygf', '8682', '18/07/1985', 'kbgkhblj', '0125803325752', '03/08/1974', '528453448541', '27/07/1998', 'upload/1cfb676b68.jpg', '11111111111', 'Mongla', 'Mongla', 'Hindu', '9', 'A', '02', '1', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE `tbl_teacher` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_degination` varchar(255) NOT NULL,
  `t_index` varchar(255) NOT NULL,
  `t_edu` varchar(255) NOT NULL,
  `t_contact` varchar(255) NOT NULL,
  `t_email` varchar(255) NOT NULL,
  `t_photo` varchar(255) NOT NULL,
  `t_status` varchar(255) NOT NULL,
  `t_retried_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`t_id`, `t_name`, `t_degination`, `t_index`, `t_edu`, `t_contact`, `t_email`, `t_photo`, `t_status`, `t_retried_date`) VALUES
(3, 'Mr. ABC', '1', '124124', 'MA, B.Ed', '11111111111', 'testmail@mail.com', 'upload/cf859adf63.jpg', '1', ''),
(4, 'Mr. XYZ', '4', '12412433', 'MA,', '222222222', 'testmail22@mail.com', 'upload/7681dd443c.jpg', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_theme_setup`
--

CREATE TABLE `tbl_theme_setup` (
  `thm_id` int(11) NOT NULL,
  `thm_name` varchar(255) NOT NULL,
  `thm_address` varchar(255) NOT NULL,
  `thm_bannar` varchar(255) NOT NULL,
  `thm_logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_year`
--

CREATE TABLE `tbl_year` (
  `id` int(11) NOT NULL,
  `year` int(10) NOT NULL,
  `front` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_year`
--

INSERT INTO `tbl_year` (`id`, `year`, `front`) VALUES
(1, 2021, 1),
(2, 2022, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_addmission_result`
--
ALTER TABLE `tbl_addmission_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_exam`
--
ALTER TABLE `tbl_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment_type`
--
ALTER TABLE `tbl_payment_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_result`
--
ALTER TABLE `tbl_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `tbl_theme_setup`
--
ALTER TABLE `tbl_theme_setup`
  ADD PRIMARY KEY (`thm_id`);

--
-- Indexes for table `tbl_year`
--
ALTER TABLE `tbl_year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_addmission_result`
--
ALTER TABLE `tbl_addmission_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `ad_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_exam`
--
ALTER TABLE `tbl_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_payment_type`
--
ALTER TABLE `tbl_payment_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_result`
--
ALTER TABLE `tbl_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_theme_setup`
--
ALTER TABLE `tbl_theme_setup`
  MODIFY `thm_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_year`
--
ALTER TABLE `tbl_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
