-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 18, 2018 at 06:03 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullsnack`
--

-- --------------------------------------------------------

--
-- Table structure for table `collection_activity`
--

CREATE TABLE `collection_activity` (
  `no` int(11) NOT NULL,
  `activity_id` varchar(20) NOT NULL,
  `activity_title` varchar(255) NOT NULL,
  `activity_description` text NOT NULL,
  `activity_startdate` date NOT NULL,
  `activity_enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `collection_career`
--

CREATE TABLE `collection_career` (
  `no` int(11) NOT NULL,
  `career_id` varchar(20) NOT NULL,
  `career_name` varchar(255) NOT NULL,
  `career_description` text NOT NULL,
  `career_jobdesk` text NOT NULL,
  `career_status` enum('available','unavailable','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `collection_course`
--

CREATE TABLE `collection_course` (
  `no` int(11) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `course_description` text NOT NULL,
  `course_tag` varchar(255) NOT NULL,
  `course_link` varchar(255) NOT NULL,
  `couse_status` enum('private','public','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `collection_detail_member`
--

CREATE TABLE `collection_detail_member` (
  `no` int(11) NOT NULL,
  `member_id` varchar(20) NOT NULL,
  `member_firstname` varchar(255) NOT NULL,
  `member_lastname` varchar(255) NOT NULL,
  `member_phone` varchar(15) NOT NULL,
  `member_address` text NOT NULL,
  `member_shirtsize` enum('S','M','L','XL') NOT NULL,
  `member_score` int(5) NOT NULL,
  `member_education` varchar(255) NOT NULL,
  `member_interest` text NOT NULL,
  `member_biografy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `collection_detail_staff`
--

CREATE TABLE `collection_detail_staff` (
  `no` int(11) NOT NULL,
  `staff_id` varchar(20) NOT NULL,
  `staff_firstname` varchar(255) NOT NULL,
  `staff_lastname` varchar(255) NOT NULL,
  `staff_phone` varchar(16) NOT NULL,
  `staff_address` text NOT NULL,
  `staff_shirtsize` enum('S','M','L','XL') NOT NULL,
  `staff_score` int(5) NOT NULL,
  `staff_education` varchar(255) NOT NULL,
  `staff_division` varchar(255) NOT NULL,
  `staff_biografy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `collection_gallery`
--

CREATE TABLE `collection_gallery` (
  `no` int(11) NOT NULL,
  `gallery_id` varchar(20) NOT NULL,
  `gallery_title` varchar(255) NOT NULL,
  `gallery_altname` varchar(255) NOT NULL,
  `gallery_description` text NOT NULL,
  `gallery_takendate` date NOT NULL,
  `gallery_type` enum('photo','video','screenshot','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `collection_member`
--

CREATE TABLE `collection_member` (
  `no` int(11) NOT NULL,
  `member_id` varchar(20) NOT NULL,
  `member_email` varchar(60) NOT NULL,
  `member_password` varchar(255) NOT NULL,
  `member_status` enum('confirmed','unconfirm','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `collection_member_apply_career`
--

CREATE TABLE `collection_member_apply_career` (
  `no` int(11) NOT NULL,
  `career_id` varchar(20) NOT NULL,
  `member_id` varchar(20) NOT NULL,
  `apply_date` date NOT NULL,
  `apply_status` enum('accepted','pending','rejected','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `collection_showcase`
--

CREATE TABLE `collection_showcase` (
  `no` int(11) NOT NULL,
  `showcase_id` varchar(255) NOT NULL,
  `showcase_title` varchar(255) NOT NULL,
  `showcase_description` text NOT NULL,
  `showcase_tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `collection_staff`
--

CREATE TABLE `collection_staff` (
  `no` int(11) NOT NULL,
  `staff_id` varchar(20) NOT NULL,
  `staff_email` varchar(60) NOT NULL,
  `staff_password` varchar(255) NOT NULL,
  `staff_status` enum('confirmed','unconfirm','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collection_activity`
--
ALTER TABLE `collection_activity`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `activity_id` (`activity_id`);

--
-- Indexes for table `collection_career`
--
ALTER TABLE `collection_career`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `career_id` (`career_id`);

--
-- Indexes for table `collection_course`
--
ALTER TABLE `collection_course`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `course_id` (`course_id`);

--
-- Indexes for table `collection_detail_member`
--
ALTER TABLE `collection_detail_member`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `member_id` (`member_id`);

--
-- Indexes for table `collection_detail_staff`
--
ALTER TABLE `collection_detail_staff`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `staff_id` (`staff_id`);

--
-- Indexes for table `collection_gallery`
--
ALTER TABLE `collection_gallery`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `gallery_id` (`gallery_id`);

--
-- Indexes for table `collection_member`
--
ALTER TABLE `collection_member`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `member_id` (`member_id`);

--
-- Indexes for table `collection_member_apply_career`
--
ALTER TABLE `collection_member_apply_career`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `collection_showcase`
--
ALTER TABLE `collection_showcase`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `showcase_id` (`showcase_id`);

--
-- Indexes for table `collection_staff`
--
ALTER TABLE `collection_staff`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `staff_id` (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collection_activity`
--
ALTER TABLE `collection_activity`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collection_career`
--
ALTER TABLE `collection_career`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collection_course`
--
ALTER TABLE `collection_course`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collection_detail_member`
--
ALTER TABLE `collection_detail_member`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collection_detail_staff`
--
ALTER TABLE `collection_detail_staff`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collection_gallery`
--
ALTER TABLE `collection_gallery`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collection_member`
--
ALTER TABLE `collection_member`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collection_member_apply_career`
--
ALTER TABLE `collection_member_apply_career`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collection_showcase`
--
ALTER TABLE `collection_showcase`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collection_staff`
--
ALTER TABLE `collection_staff`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
