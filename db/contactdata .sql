-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2018 at 06:46 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `assigned_user`
--

CREATE TABLE `assigned_user` (
  `asgn_id` int(5) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `asgn_email` varchar(255) NOT NULL,
  `assignedOn` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assigned_user`
--

INSERT INTO `assigned_user` (`asgn_id`, `user_email`, `asgn_email`, `assignedOn`, `status`) VALUES
(1, 'ag@test.com', 's@me.com', '2018-06-13 14:54:27', 0),
(2, 'test@me.com', 'uesr@test.com', '2018-06-13 14:55:33', 0);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `c_id` int(5) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_status` varchar(10) NOT NULL,
  `createdOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`c_id`, `c_name`, `c_status`, `createdOn`) VALUES
(2, 'company Test', 'active', '2018-06-08 11:50:24'),
(3, 'Company Name', 'active', '2018-06-08 11:53:51'),
(4, 'compa', 'active', '2018-06-08 11:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `contactdetails`
--

CREATE TABLE `contactdetails` (
  `c_id` bigint(15) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `c_f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `c_l_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `c_middle_name` varchar(255) NOT NULL,
  `maiden_name` varchar(255) NOT NULL,
  `c_maiden_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` int(1) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `c_phone` bigint(10) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `income` bigint(10) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `address2` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` bigint(10) NOT NULL,
  `stage` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `createdOn` varchar(255) NOT NULL,
  `timeofresidency` datetime NOT NULL,
  `last_call_activity` varchar(255) NOT NULL,
  `ssn` varchar(255) NOT NULL,
  `c_ssn` varchar(255) NOT NULL,
  `dob_m` varchar(255) NOT NULL,
  `c_dob_m` varchar(255) NOT NULL,
  `dob_d` varchar(255) NOT NULL,
  `c_dob_d` varchar(255) NOT NULL,
  `dob_y` varchar(255) NOT NULL,
  `c_dob_y` varchar(255) NOT NULL,
  `c_mobile` bigint(10) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `c_occupation` varchar(255) NOT NULL,
  `employer` varchar(255) NOT NULL,
  `c_employer` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `c_position` varchar(255) NOT NULL,
  `length_of_employmen` varchar(255) NOT NULL,
  `c_length_of_employmen` varchar(255) NOT NULL,
  `employer_address` varchar(255) NOT NULL,
  `c_employer_address` varchar(255) NOT NULL,
  `employer_address2` text NOT NULL,
  `c_employer_address2` text NOT NULL,
  `emp_city` varchar(255) NOT NULL,
  `c_emp_city` varchar(255) NOT NULL,
  `add_emp_city` varchar(255) NOT NULL,
  `add_c_emp_city` varchar(255) NOT NULL,
  `emp_state` varchar(255) NOT NULL,
  `c_emp_state` varchar(255) NOT NULL,
  `emp_zip` varchar(255) NOT NULL,
  `c_emp_zip` varchar(255) NOT NULL,
  `emp_home_phone` bigint(10) NOT NULL,
  `c_emp_home_phone` bigint(10) NOT NULL,
  `gross_income` int(5) NOT NULL,
  `income_spouse` int(6) NOT NULL,
  `status_of_loans` varchar(255) NOT NULL,
  `taxable_income` bigint(10) NOT NULL,
  `indebtedness_amoun` bigint(10) NOT NULL,
  `family_size` int(5) NOT NULL,
  `filing_status` int(5) NOT NULL,
  `file_taxes` varchar(255) NOT NULL,
  `dl_number` varchar(255) NOT NULL,
  `dl_state` varchar(255) NOT NULL,
  `wages_garnished` varchar(255) NOT NULL,
  `pslf` varchar(255) NOT NULL,
  `fsa_pin` varchar(255) NOT NULL,
  `ref_f_name` varchar(255) NOT NULL,
  `ref2_f_name` varchar(255) NOT NULL,
  `ref_l_name` varchar(255) NOT NULL,
  `ref2_l_name` varchar(255) NOT NULL,
  `ref_relationship` varchar(255) NOT NULL,
  `ref2_relationship` varchar(255) NOT NULL,
  `ref_state` varchar(255) NOT NULL,
  `ref2_state` varchar(255) NOT NULL,
  `ref_zip` varchar(255) NOT NULL,
  `ref2_zip` varchar(255) NOT NULL,
  `ref_phone` bigint(10) NOT NULL,
  `ref2_phone` bigint(10) NOT NULL,
  `ref_addr` text NOT NULL,
  `ref2_addr` int(11) NOT NULL,
  `ref_city` varchar(255) NOT NULL,
  `ref2_city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactdetails`
--

INSERT INTO `contactdetails` (`c_id`, `f_name`, `c_f_name`, `l_name`, `c_l_name`, `middle_name`, `c_middle_name`, `maiden_name`, `c_maiden_name`, `u_email`, `c_email`, `password`, `gender`, `phone`, `c_phone`, `mobile`, `income`, `dob`, `address`, `address2`, `city`, `state`, `zipcode`, `stage`, `status`, `createdOn`, `timeofresidency`, `last_call_activity`, `ssn`, `c_ssn`, `dob_m`, `c_dob_m`, `dob_d`, `c_dob_d`, `dob_y`, `c_dob_y`, `c_mobile`, `occupation`, `c_occupation`, `employer`, `c_employer`, `position`, `c_position`, `length_of_employmen`, `c_length_of_employmen`, `employer_address`, `c_employer_address`, `employer_address2`, `c_employer_address2`, `emp_city`, `c_emp_city`, `add_emp_city`, `add_c_emp_city`, `emp_state`, `c_emp_state`, `emp_zip`, `c_emp_zip`, `emp_home_phone`, `c_emp_home_phone`, `gross_income`, `income_spouse`, `status_of_loans`, `taxable_income`, `indebtedness_amoun`, `family_size`, `filing_status`, `file_taxes`, `dl_number`, `dl_state`, `wages_garnished`, `pslf`, `fsa_pin`, `ref_f_name`, `ref2_f_name`, `ref_l_name`, `ref2_l_name`, `ref_relationship`, `ref2_relationship`, `ref_state`, `ref2_state`, `ref_zip`, `ref2_zip`, `ref_phone`, `ref2_phone`, `ref_addr`, `ref2_addr`, `ref_city`, `ref2_city`) VALUES
(1, 'Applicant', 'co_aplicant', 'Last Name', 'c_Last Name', '', '', 'Maiden Name', 'c_Maiden Name', 'u@email.com', 'c_email@.com', '', 0, 1234567890, 987654321, 0, 0, '', 'Address 1', 'Address 2', 'City', 'State', 380015, 'Lead', 'Follow Up', '18-06-2018 12:20: pm', '2018-06-18 12:20:17', '', 'ssn', 'c_ssn', 'June', 'June', '14', '', '1961', '1961', 0, 'Occupation', 'c_Occupation', 'Employer', 'c_Employer', 'Position', 'Position', 'Length of Employment', 'Length of Employment', 'Employer Address', 'Employer Address', 'Employer Address 2', 'Employer Address 2', 'Employer City', 'Employer City', '', '', '', '', '888888', '999999', 789456123, 321654987, 12500, 10000, '', 0, 10000, 5, 0, '', '789456', '', '', '', '79531681561', 'REF1 First Name', 'REF2 First Name', 'REF1 Last Name', 'REF2 Last Name', 'REF1 Relationship', 'REF2 Relationship', '', '', 'REF1 Zip', 'REF2 Zip', 0, 7896325412, 'REF1 Address', 0, 'REF1 City', 'REF2 City');

-- --------------------------------------------------------

--
-- Table structure for table `contact_file`
--

CREATE TABLE `contact_file` (
  `id` int(11) NOT NULL,
  `file` text NOT NULL,
  `type` varchar(245) NOT NULL,
  `description` text NOT NULL,
  `createdOn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_file`
--

INSERT INTO `contact_file` (`id`, `file`, `type`, `description`, `createdOn`) VALUES
(1, '1_files.png', '3', 'fdfdfdf', '0000-00-00 00:00:00'),
(2, '2_files.png', 'Power Of Attorney', 'sasas', '0000-00-00 00:00:00'),
(3, '3_files.png', 'General / Misc.', 'this is uploaded file.', '0000-00-00 00:00:00'),
(4, '4_files.png', 'General / Misc.', '', '0000-00-00 00:00:00'),
(5, '5_files.jpg', 'General / Misc.', 'This is Simple file Uploading.', '19-06-2018 10:15: am');

-- --------------------------------------------------------

--
-- Table structure for table `custom_fields`
--

CREATE TABLE `custom_fields` (
  `id` int(11) NOT NULL,
  `name` varchar(244) NOT NULL,
  `type` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom_fields`
--

INSERT INTO `custom_fields` (`id`, `name`, `type`) VALUES
(1, 'd', '15'),
(2, 'dd', 'Date'),
(3, 'dfdf', 'Date'),
(4, 'gfgf', '11'),
(5, 'fgfgf', 'Checkbox'),
(6, '', 'Checkbox');

-- --------------------------------------------------------

--
-- Table structure for table `docs`
--

CREATE TABLE `docs` (
  `id` int(11) NOT NULL,
  `doc_title` varchar(255) NOT NULL,
  `doc_category` varchar(255) NOT NULL,
  `doc_type` varchar(255) NOT NULL,
  `css_url` varchar(255) DEFAULT NULL,
  `all_file_type` varchar(255) NOT NULL,
  `all_states` varchar(255) NOT NULL,
  `share_with` varchar(255) NOT NULL,
  `pfd_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `docs`
--

INSERT INTO `docs` (`id`, `doc_title`, `doc_category`, `doc_type`, `css_url`, `all_file_type`, `all_states`, `share_with`, `pfd_file`) VALUES
(1, 'tryytttttttttttttttttt', 'pdf', 'Audio_Recording', NULL, 'student_loans', 'AL', 'Kelly,Jennie', '1_files.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descp` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `descp`, `date`, `created`, `modified`, `status`) VALUES
(1, 'Internet of Things World Forum', '', '2016-05-12', '2016-05-09 06:15:17', '2016-05-09 06:15:17', 1),
(2, 'The Future of Money and Technology Summit', '', '2016-05-26', '2016-05-09 06:15:17', '2016-05-09 06:15:17', 1),
(3, 'Chrome Dev Summit', '', '2016-05-26', '2016-05-09 06:15:17', '2016-05-09 06:15:17', 1),
(4, 'The Lean Startup Conference', '', '2016-05-17', '2016-05-09 06:15:17', '2016-05-09 06:15:17', 1),
(5, 'Web Submit for Developers', '', '2016-05-17', '2016-05-09 06:15:17', '2016-05-09 06:15:17', 1),
(6, 'this is test event', '', '2018-05-16', '2018-05-14 09:06:40', '2018-05-14 09:06:40', 1),
(7, 'sdsdd', '', '2018-05-22', '2018-05-14 10:42:34', '2018-05-14 10:42:34', 1),
(8, 'xzxzxz', '', '2018-04-10', '2018-05-21 09:10:16', '2018-05-21 09:10:16', 1),
(9, 'event on', '', '2018-05-23', '2018-05-22 07:17:21', '2018-05-22 07:17:21', 1),
(10, 'Events', 'This is Events', '2018-06-07', '2018-06-08 14:46:12', '2018-06-08 14:46:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(5) NOT NULL,
  `u_id` int(5) NOT NULL,
  `note_type` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `createdOn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `u_id`, `note_type`, `note`, `createdOn`) VALUES
(1, 2, 'Call', 'this is Note.', '2018-06-15 11:02:57'),
(2, 1, 'Creditor', 'This is Noteeeeee', '2018-06-18 12:44:24'),
(3, 1, 'Creditor', 'This is Noteeeeee', '2018-06-18 12:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `up_files`
--

CREATE TABLE `up_files` (
  `id` int(11) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `file` text NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `createdBy` varchar(255) NOT NULL,
  `createdOn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `up_files`
--

INSERT INTO `up_files` (`id`, `file_type`, `file`, `file_name`, `createdBy`, `createdOn`) VALUES
(1, 'image', '1_files.png', 'Heart', 'a', 'June 14, 2018 17:09: pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` bigint(15) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `income` bigint(10) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` bigint(10) NOT NULL,
  `state` varchar(255) NOT NULL,
  `timeofresidency` varchar(244) NOT NULL,
  `passwords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `f_name`, `l_name`, `u_email`, `gender`, `phone`, `mobile`, `income`, `dob`, `address`, `city`, `zipcode`, `state`, `timeofresidency`, `passwords`) VALUES
(1, 'gfgf', 'gfgf', 'Test@me.com', 'female', 0, 0, 0, 'May 24, 2018', 'f', 'fgf', 0, 'fgfg', '0000-00-00 00:00:00', 'test'),
(3, 'John', 'Doe', 'user@me.com', 'male', 9999999999, 8989898989, 15000, 'May 23, 2018', 'address', 'mumbai', 380015, 'mp', '2018-05-24 11:30:38', 'user'),
(4, 'User', 'Test', 'uesr@test.com', 'male', 7777777777, 9999999999, 100000, 'May 19, 2018', 'address', 'mumbai', 380015, 'mp', 'May 23, 2018', 'test'),
(5, 'Scarlet', 'Doe', 's@me.com', 'male', 9878998448, 7946511894, 12000, 'May 05, 2018', 'address', 'mumbai', 380015, 'mp', 'May 24, 2018', 's@1233');

-- --------------------------------------------------------

--
-- Table structure for table `user_event`
--

CREATE TABLE `user_event` (
  `e_id` int(5) NOT NULL,
  `u_id` int(5) NOT NULL,
  `e_title` varchar(255) NOT NULL,
  `e_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `u_events`
--

CREATE TABLE `u_events` (
  `e_id` int(5) NOT NULL,
  `u_id` int(5) NOT NULL,
  `e_title` varchar(255) NOT NULL,
  `e_date` varchar(255) NOT NULL,
  `e_time` varchar(255) NOT NULL,
  `e_timezone` varchar(255) NOT NULL,
  `e_public` varchar(255) NOT NULL,
  `e_event_type` varchar(255) NOT NULL,
  `e_assign_to` varchar(255) NOT NULL,
  `e_location` varchar(255) NOT NULL,
  `e_desc` varchar(255) NOT NULL,
  `createdOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_events`
--

INSERT INTO `u_events` (`e_id`, `u_id`, `e_title`, `e_date`, `e_time`, `e_timezone`, `e_public`, `e_event_type`, `e_assign_to`, `e_location`, `e_desc`, `createdOn`) VALUES
(1, 2, 'Title', 'Jun 12, 2018', '11:00 pm', 'US/Mountain', 'Private', 'Meeting', '7', 'Mumbai', 'This is Note about Events', '2018-06-15 14:17:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assigned_user`
--
ALTER TABLE `assigned_user`
  ADD PRIMARY KEY (`asgn_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contactdetails`
--
ALTER TABLE `contactdetails`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact_file`
--
ALTER TABLE `contact_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_fields`
--
ALTER TABLE `custom_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `up_files`
--
ALTER TABLE `up_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `user_event`
--
ALTER TABLE `user_event`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `u_events`
--
ALTER TABLE `u_events`
  ADD PRIMARY KEY (`e_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assigned_user`
--
ALTER TABLE `assigned_user`
  MODIFY `asgn_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactdetails`
--
ALTER TABLE `contactdetails`
  MODIFY `c_id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_file`
--
ALTER TABLE `contact_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `custom_fields`
--
ALTER TABLE `custom_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `docs`
--
ALTER TABLE `docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `up_files`
--
ALTER TABLE `up_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_event`
--
ALTER TABLE `user_event`
  MODIFY `e_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `u_events`
--
ALTER TABLE `u_events`
  MODIFY `e_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
