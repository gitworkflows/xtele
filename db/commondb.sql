-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: 192.168.61.105:3306
-- Generation Time: Aug 10, 2021 at 08:50 PM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `commondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE IF NOT EXISTS `advertisement` (
  `sl` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `ad_no` varchar(100) DEFAULT NULL,
  `ad_no2` varchar(100) NOT NULL,
  `ad_no3` varchar(100) NOT NULL,
  `organizaiton_name` varchar(250) DEFAULT NULL,
  `flag` tinyint(10) NOT NULL,
  PRIMARY KEY (`sl`),
  KEY `ad_no` (`ad_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`sl`, `ad_no`, `ad_no2`, `ad_no3`, `organizaiton_name`, `flag`) VALUES
(0001, NULL, '', '', 'Teletalk Bangladesh Ltd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `card_log`
--

CREATE TABLE IF NOT EXISTS `card_log` (
  `sl` int(10) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(10) DEFAULT NULL,
  `post_code` int(10) NOT NULL,
  `uptime` datetime DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `system_id` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`sl`),
  KEY `sl` (`sl`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cedu`
--

CREATE TABLE IF NOT EXISTS `cedu` (
  `sl` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `invoice` varchar(8) CHARACTER SET latin2 COLLATE latin2_bin NOT NULL,
  `post_code` int(3) DEFAULT NULL,
  `post_name` varchar(250) NOT NULL,
  `s_exam` varchar(30) DEFAULT NULL,
  `s_roll` varchar(15) DEFAULT NULL,
  `s_board` varchar(50) DEFAULT NULL,
  `s_year` varchar(4) DEFAULT NULL,
  `s_group` varchar(50) DEFAULT NULL,
  `s_result` varchar(8) DEFAULT NULL,
  `s_result_type` varchar(20) DEFAULT NULL,
  `s_result_eq` int(1) NOT NULL,
  `h_exam` varchar(30) DEFAULT NULL,
  `h_roll` varchar(15) DEFAULT NULL,
  `h_board` varchar(50) DEFAULT NULL,
  `h_year` varchar(4) DEFAULT NULL,
  `h_group` varchar(50) DEFAULT NULL,
  `h_result` varchar(10) DEFAULT NULL,
  `h_result_type` varchar(20) DEFAULT NULL,
  `h_result_eq` int(1) NOT NULL,
  `g_exam` varchar(100) DEFAULT NULL,
  `g_sub` varchar(100) DEFAULT NULL,
  `g_institute` varchar(100) DEFAULT NULL,
  `g_year` varchar(4) DEFAULT NULL,
  `g_duration` int(1) DEFAULT NULL,
  `g_result` varchar(10) DEFAULT NULL,
  `g_result_type` varchar(20) DEFAULT NULL,
  `g_result_eq` int(1) DEFAULT NULL,
  `m_exam` varchar(100) DEFAULT NULL,
  `m_sub` varchar(100) DEFAULT NULL,
  `m_institute` varchar(100) DEFAULT NULL,
  `m_year` varchar(4) DEFAULT NULL,
  `m_duration` varchar(5) DEFAULT NULL,
  `m_result` varchar(10) DEFAULT NULL,
  `m_result_type` varchar(20) DEFAULT NULL,
  `m_result_eq` int(1) DEFAULT NULL,
  `p_exam` varchar(50) NOT NULL,
  `p_sub` varchar(50) NOT NULL,
  `p_institute` varchar(100) NOT NULL,
  `p_year` varchar(100) NOT NULL,
  `p_duration` varchar(20) NOT NULL,
  `p_result` varchar(10) NOT NULL,
  `p_result_type` varchar(10) NOT NULL,
  `p_result_eq` int(3) NOT NULL,
  `job_exp` varchar(250) DEFAULT NULL,
  `computer_literacy` varchar(250) DEFAULT '0',
  `curricular` varchar(250) NOT NULL,
  `exp_five` varchar(250) NOT NULL,
  `ageactual` varchar(250) NOT NULL,
  `eight_pass` varchar(100) NOT NULL,
  PRIMARY KEY (`sl`),
  UNIQUE KEY `invoice` (`invoice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cinfo`
--

CREATE TABLE IF NOT EXISTS `cinfo` (
  `sl` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `invoice` varchar(8) CHARACTER SET latin2 COLLATE latin2_bin NOT NULL DEFAULT '',
  `post_code` int(3) unsigned zerofill DEFAULT '000',
  `post_name` varchar(250) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `father` varchar(50) NOT NULL DEFAULT '',
  `mother` varchar(50) NOT NULL DEFAULT '',
  `b_date` bigint(10) NOT NULL,
  `b_month` int(10) NOT NULL,
  `b_year` int(10) NOT NULL,
  `dob` date DEFAULT '0000-00-00',
  `age_as` varchar(30) NOT NULL,
  `sex` int(1) NOT NULL,
  `nid` int(1) DEFAULT NULL,
  `nid_no` varchar(20) DEFAULT NULL,
  `passport` int(1) NOT NULL,
  `passport_no` varchar(50) NOT NULL,
  `breg` int(1) NOT NULL DEFAULT '2',
  `breg_no` varchar(30) NOT NULL,
  `religion` varchar(15) DEFAULT NULL,
  `mstatus` int(1) DEFAULT NULL,
  `s_name` varchar(50) DEFAULT NULL,
  `alljobs_id` varchar(20) NOT NULL,
  `ffq` varchar(100) DEFAULT NULL,
  `ff` varchar(10) NOT NULL,
  `cff` varchar(10) NOT NULL,
  `gcff` varchar(10) NOT NULL,
  `ph` varchar(10) NOT NULL,
  `em` varchar(10) NOT NULL,
  `av` varchar(10) NOT NULL,
  `orp` varchar(10) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `homedistrict` varchar(20) DEFAULT NULL,
  `present_care` varchar(50) NOT NULL DEFAULT '',
  `present_vill` text NOT NULL,
  `present_dist` varchar(20) DEFAULT NULL,
  `present_ps` varchar(50) NOT NULL DEFAULT '',
  `present_post` varchar(30) DEFAULT NULL,
  `present_pcode` varchar(6) DEFAULT NULL,
  `permanent_care` varchar(50) NOT NULL DEFAULT '',
  `permanent_vill` text NOT NULL,
  `permanent_dist` varchar(20) DEFAULT NULL,
  `permanent_ps` varchar(50) NOT NULL DEFAULT '',
  `permanent_post` varchar(30) DEFAULT NULL,
  `permanent_pcode` varchar(6) DEFAULT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `ref_name_1` varchar(100) NOT NULL,
  `ref_post_1` varchar(100) NOT NULL,
  `ref_org_1` varchar(250) NOT NULL,
  `ref_contact_1` varchar(50) NOT NULL,
  `ref_mail_1` varchar(100) NOT NULL,
  `ref_name_2` varchar(100) NOT NULL,
  `ref_post_2` varchar(100) NOT NULL,
  `ref_org_2` varchar(250) NOT NULL,
  `ref_contact_2` varchar(50) NOT NULL,
  `ref_mail_2` varchar(100) NOT NULL,
  `departmental` int(1) NOT NULL DEFAULT '0',
  `loginIP` varchar(50) NOT NULL DEFAULT '',
  `inTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `extime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fee` int(1) DEFAULT '0',
  `screening` int(1) DEFAULT '1',
  `vcode` varchar(8) DEFAULT NULL,
  `d_status` varchar(250) NOT NULL,
  `org_name1` varchar(250) DEFAULT NULL,
  `post_name1` varchar(250) DEFAULT NULL,
  `responsible1` varchar(250) DEFAULT NULL,
  `start_date1` varchar(100) DEFAULT NULL,
  `end_date1` varchar(100) DEFAULT NULL,
  `till_now1` varchar(15) NOT NULL,
  `texp1` varchar(100) DEFAULT NULL,
  `org_name2` varchar(250) NOT NULL,
  `post_name2` varchar(250) NOT NULL,
  `responsible2` varchar(250) NOT NULL,
  `start_date2` varchar(250) NOT NULL,
  `end_date2` varchar(250) NOT NULL,
  `texp2` varchar(250) NOT NULL,
  `org_name3` varchar(250) DEFAULT NULL,
  `post_name3` varchar(250) NOT NULL,
  `responsible3` varchar(250) NOT NULL,
  `start_date3` varchar(250) NOT NULL,
  `end_date3` varchar(250) NOT NULL,
  `texp3` varchar(250) NOT NULL,
  `org_name4` varchar(250) NOT NULL,
  `post_name4` varchar(250) NOT NULL,
  `responsible4` varchar(250) NOT NULL,
  `start_date4` varchar(250) NOT NULL,
  `end_date4` varchar(250) NOT NULL,
  `texp4` varchar(250) NOT NULL,
  `org_name5` varchar(250) NOT NULL,
  `post_name5` varchar(250) NOT NULL,
  `responsible5` varchar(250) NOT NULL,
  `start_date5` varchar(250) NOT NULL,
  `end_date5` varchar(250) NOT NULL,
  `texp5` varchar(250) DEFAULT NULL,
  `exp_age_as1` varchar(250) DEFAULT NULL,
  `age_as1` varchar(250) NOT NULL,
  `age_as2` varchar(30) NOT NULL,
  `age_as3` varchar(250) NOT NULL,
  `age_as4` varchar(250) NOT NULL,
  `age_as5` varchar(250) NOT NULL,
  `ageactual` varchar(250) NOT NULL,
  `six_trai` varchar(250) DEFAULT NULL,
  `exp2` varchar(250) NOT NULL,
  `exp3` varchar(250) NOT NULL,
  `exp4` varchar(250) NOT NULL,
  `exp5` varchar(250) NOT NULL,
  `com_cer` varchar(250) NOT NULL,
  `draftman` varchar(250) NOT NULL,
  `surveyor` varchar(250) NOT NULL,
  `data_entry` varchar(10) DEFAULT NULL,
  `typ_speed` varchar(10) DEFAULT NULL,
  `typ_spd` varchar(10) DEFAULT NULL,
  `steno_typ` varchar(250) DEFAULT NULL,
  `com_typ1` varchar(250) DEFAULT NULL,
  `com_typ2` varchar(250) DEFAULT NULL,
  `com_typ3` varchar(250) NOT NULL,
  `eight_pass` varchar(250) DEFAULT NULL,
  `dri_lic` varchar(250) DEFAULT NULL,
  `dri_lic_type` varchar(20) NOT NULL,
  `exp_three` varchar(250) DEFAULT NULL,
  `one_expvalue_110` varchar(100) NOT NULL,
  `two_expvalue_110` varchar(100) NOT NULL,
  `three_expvalue_110` varchar(100) NOT NULL,
  `one_expvalue_120` varchar(100) NOT NULL,
  `two_expvalue_120` varchar(100) NOT NULL,
  `three_expvalue_120` varchar(100) NOT NULL,
  `one_expvalue_130` varchar(100) NOT NULL,
  `two_expvalue_130` varchar(100) NOT NULL,
  `three_expvalue_130` varchar(100) NOT NULL,
  `one_expvalue_140` varchar(100) DEFAULT NULL,
  `two_expvalue_140` varchar(100) NOT NULL,
  `three_expvalue_140` varchar(100) NOT NULL,
  `one_expvalue_150` varchar(100) DEFAULT NULL,
  `two_expvalue_150` varchar(100) DEFAULT NULL,
  `three_expvalue_150` varchar(100) DEFAULT NULL,
  `one_expvalue_160` varchar(100) NOT NULL,
  `two_expvalue_160` varchar(100) NOT NULL,
  `three_expvalue_160` varchar(100) NOT NULL,
  `one_expvalue_170` varchar(100) NOT NULL,
  `two_expvalue_170` varchar(100) NOT NULL,
  `three_expvalue_170` varchar(100) NOT NULL,
  `one_expvalue_180` varchar(100) NOT NULL,
  `two_expvalue_180` varchar(100) NOT NULL,
  `three_expvalue_180` varchar(100) NOT NULL,
  `one_expvalue_190` varchar(100) NOT NULL,
  `two_expvalue_190` varchar(100) NOT NULL,
  `three_expvalue_190` varchar(100) NOT NULL,
  `one_expvalue_200` varchar(100) NOT NULL,
  `two_expvalue_200` varchar(100) NOT NULL,
  `three_expvalue_200` varchar(100) NOT NULL,
  `one_expvalue_210` varchar(100) NOT NULL,
  `two_expvalue_210` varchar(100) NOT NULL,
  `three_expvalue_210` varchar(100) NOT NULL,
  `one_expvalue_220` varchar(100) NOT NULL,
  `two_expvalue_220` varchar(100) NOT NULL,
  `three_expvalue_220` varchar(100) NOT NULL,
  `one_expvalue_230` varchar(100) NOT NULL,
  `two_expvalue_230` varchar(100) NOT NULL,
  `three_expvalue_230` varchar(100) NOT NULL,
  `one_expvalue_240` varchar(100) NOT NULL,
  `two_expvalue_240` varchar(100) NOT NULL,
  `three_expvalue_240` varchar(100) NOT NULL,
  `one_expvalue_250` varchar(100) NOT NULL,
  `two_expvalue_250` varchar(100) NOT NULL,
  `three_expvalue_250` varchar(100) NOT NULL,
  `one_expvalue_260` varchar(100) NOT NULL,
  `two_expvalue_260` varchar(100) NOT NULL,
  `three_expvalue_260` varchar(100) NOT NULL,
  `one_expvalue_270` varchar(100) NOT NULL,
  `two_expvalue_270` varchar(100) NOT NULL,
  `three_expvalue_270` varchar(100) NOT NULL,
  `one_expvalue_280` varchar(100) NOT NULL,
  `two_expvalue_280` varchar(100) NOT NULL,
  `three_expvalue_280` varchar(100) NOT NULL,
  `one_expvalue_290` varchar(100) NOT NULL,
  `two_expvalue_290` varchar(100) NOT NULL,
  `three_expvalue_290` varchar(100) NOT NULL,
  `one_expvalue_300` varchar(100) NOT NULL,
  `two_expvalue_300` varchar(100) NOT NULL,
  `three_expvalue_300` varchar(100) NOT NULL,
  `one_expvalue_310` varchar(100) NOT NULL,
  `two_expvalue_310` varchar(100) NOT NULL,
  `three_expvalue_310` varchar(100) NOT NULL,
  `one_expvalue_320` varchar(100) NOT NULL,
  `two_expvalue_320` varchar(100) NOT NULL,
  `three_expvalue_320` varchar(100) NOT NULL,
  `one_expvalue_330` varchar(100) NOT NULL,
  `two_expvalue_330` varchar(100) NOT NULL,
  `three_expvalue_330` varchar(100) NOT NULL,
  `one_expvalue_340` varchar(100) NOT NULL,
  `two_expvalue_340` varchar(100) NOT NULL,
  `three_expvalue_340` varchar(100) NOT NULL,
  `one_expvalue_350` varchar(100) NOT NULL,
  `two_expvalue_350` varchar(100) NOT NULL,
  `three_expvalue_350` varchar(100) NOT NULL,
  `one_expvalue_360` varchar(250) NOT NULL,
  `two_expvalue_360` varchar(250) NOT NULL,
  `three_expvalue_360` varchar(250) NOT NULL,
  `one_expvalue_370` varchar(250) NOT NULL,
  `two_expvalue_370` varchar(250) NOT NULL,
  `three_expvalue_370` varchar(250) NOT NULL,
  `one_expvalue_380` varchar(250) NOT NULL,
  `two_expvalue_380` varchar(250) NOT NULL,
  `three_expvalue_380` varchar(250) NOT NULL,
  `one_expvalue_390` varchar(250) NOT NULL,
  `two_expvalue_390` varchar(250) NOT NULL,
  `three_expvalue_390` varchar(250) NOT NULL,
  `one_expvalue_400` varchar(250) NOT NULL,
  `two_expvalue_400` varchar(250) NOT NULL,
  `three_expvalue_400` varchar(250) NOT NULL,
  `one_expvalue_410` varchar(250) NOT NULL,
  `two_expvalue_410` varchar(250) NOT NULL,
  `three_expvalue_410` varchar(250) NOT NULL,
  `one_expvalue_420` varchar(250) NOT NULL,
  `two_expvalue_420` varchar(250) NOT NULL,
  `three_expvalue_420` varchar(250) NOT NULL,
  `one_expvalue_430` varchar(250) NOT NULL,
  `two_expvalue_430` varchar(250) NOT NULL,
  `three_expvalue_430` varchar(250) NOT NULL,
  `one_expvalue_440` varchar(250) NOT NULL,
  `two_expvalue_440` varchar(250) NOT NULL,
  `three_expvalue_440` varchar(250) NOT NULL,
  `one_expvalue_450` varchar(250) NOT NULL,
  `two_expvalue_450` varchar(250) NOT NULL,
  `three_expvalue_450` varchar(250) NOT NULL,
  `one_expvalue_460` varchar(250) NOT NULL,
  `two_expvalue_460` varchar(250) NOT NULL,
  `three_expvalue_460` varchar(250) NOT NULL,
  `one_expvalue_470` varchar(250) NOT NULL,
  `two_expvalue_470` varchar(250) NOT NULL,
  `three_expvalue_470` varchar(250) NOT NULL,
  `s4` varchar(100) NOT NULL,
  `s5` varchar(100) NOT NULL,
  `s6` varchar(100) NOT NULL,
  `s7` varchar(100) NOT NULL,
  `s8` varchar(100) NOT NULL,
  PRIMARY KEY (`sl`),
  UNIQUE KEY `invoice` (`invoice`),
  KEY `fee` (`fee`),
  KEY `screening` (`screening`),
  KEY `mobile` (`mobile`,`vcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course_duration`
--

CREATE TABLE IF NOT EXISTS `course_duration` (
  `duration_value` varchar(4) NOT NULL,
  `duration_text` varchar(20) NOT NULL,
  `exam_name` varchar(10) NOT NULL,
  PRIMARY KEY (`duration_value`,`exam_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_duration`
--

INSERT INTO `course_duration` (`duration_value`, `duration_text`, `exam_name`) VALUES
('01', '01 Year', 'MAS'),
('02', '02 Years', 'GRA'),
('02', '02 Years', 'MAS'),
('03', '03 Years', 'GRA'),
('03', '03 Years', 'MAS'),
('04', '04 Years', 'GRA'),
('05', '05 Years', 'GRA'),
('1.5', '1.5 Years', 'MAS'),
('2.5', '2.5 Years', 'MAS'),
('3+', '3+ Years', 'MAS');

-- --------------------------------------------------------

--
-- Table structure for table `dep_status_type`
--

CREATE TABLE IF NOT EXISTS `dep_status_type` (
  `status_value` int(1) NOT NULL,
  `status_name` varchar(50) NOT NULL,
  PRIMARY KEY (`status_value`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dep_status_type`
--

INSERT INTO `dep_status_type` (`status_value`, `status_name`) VALUES
(1, 'Govt. Employee'),
(2, 'Semi Govt. Employee'),
(3, 'Autonomous'),
(4, 'Departmental Candidate'),
(5, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `dist_info`
--

CREATE TABLE IF NOT EXISTS `dist_info` (
  `sl` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `post_code` int(5) unsigned DEFAULT '0',
  `post_name` varchar(250) NOT NULL,
  `dist_01` int(2) unsigned zerofill DEFAULT NULL,
  `dist_02` int(2) unsigned zerofill DEFAULT NULL,
  `dist_03` int(2) unsigned zerofill DEFAULT '00',
  `dist_04` int(2) unsigned zerofill DEFAULT NULL,
  `dist_05` int(2) unsigned zerofill DEFAULT NULL,
  `dist_06` int(2) unsigned zerofill DEFAULT NULL,
  `dist_07` int(2) unsigned zerofill DEFAULT NULL,
  `dist_08` int(2) unsigned zerofill DEFAULT NULL,
  `dist_09` int(2) unsigned zerofill DEFAULT NULL,
  `dist_10` int(2) unsigned zerofill DEFAULT NULL,
  `dist_11` int(2) unsigned zerofill DEFAULT NULL,
  `dist_12` int(2) unsigned zerofill DEFAULT NULL,
  `dist_13` int(2) unsigned zerofill DEFAULT NULL,
  `dist_14` int(2) unsigned zerofill DEFAULT NULL,
  `dist_15` int(2) unsigned zerofill DEFAULT NULL,
  `dist_16` int(2) unsigned zerofill DEFAULT NULL,
  `dist_17` int(2) unsigned zerofill DEFAULT NULL,
  `dist_18` int(2) unsigned zerofill DEFAULT NULL,
  `dist_19` int(2) unsigned zerofill DEFAULT NULL,
  `dist_20` int(2) unsigned zerofill DEFAULT NULL,
  `dist_21` int(2) unsigned zerofill DEFAULT NULL,
  `dist_22` int(2) unsigned zerofill DEFAULT NULL,
  `dist_23` int(2) unsigned zerofill DEFAULT NULL,
  `dist_24` int(2) unsigned zerofill DEFAULT NULL,
  `dist_25` int(2) unsigned zerofill DEFAULT NULL,
  `dist_26` int(2) unsigned zerofill DEFAULT NULL,
  `dist_27` int(2) unsigned zerofill DEFAULT NULL,
  `dist_28` int(2) unsigned zerofill DEFAULT NULL,
  `dist_29` int(2) unsigned zerofill DEFAULT NULL,
  `dist_30` int(2) unsigned zerofill DEFAULT NULL,
  `dist_31` int(2) unsigned zerofill DEFAULT NULL,
  `dist_32` int(2) unsigned zerofill DEFAULT NULL,
  `dist_33` int(2) unsigned zerofill DEFAULT NULL,
  `dist_34` int(2) unsigned zerofill DEFAULT NULL,
  `dist_35` int(2) unsigned zerofill DEFAULT NULL,
  `dist_36` int(2) unsigned zerofill DEFAULT NULL,
  `dist_37` int(2) unsigned zerofill DEFAULT NULL,
  `dist_38` int(2) unsigned zerofill DEFAULT NULL,
  `dist_39` int(2) unsigned zerofill DEFAULT NULL,
  `dist_40` int(2) unsigned zerofill DEFAULT NULL,
  `dist_41` int(2) unsigned zerofill DEFAULT NULL,
  `dist_42` int(2) unsigned zerofill DEFAULT NULL,
  `dist_43` int(2) unsigned zerofill DEFAULT NULL,
  `dist_44` int(2) unsigned zerofill DEFAULT NULL,
  `dist_45` int(2) unsigned zerofill DEFAULT NULL,
  `dist_46` int(2) unsigned zerofill DEFAULT NULL,
  `dist_47` int(2) unsigned zerofill DEFAULT NULL,
  `dist_48` int(2) unsigned zerofill DEFAULT NULL,
  `dist_49` int(2) unsigned zerofill DEFAULT NULL,
  `dist_50` int(2) unsigned zerofill DEFAULT NULL,
  `dist_51` int(2) unsigned zerofill DEFAULT NULL,
  `dist_52` int(2) unsigned zerofill DEFAULT NULL,
  `dist_53` int(2) unsigned zerofill DEFAULT NULL,
  `dist_54` int(2) unsigned zerofill DEFAULT NULL,
  `dist_55` int(2) unsigned zerofill DEFAULT NULL,
  `dist_56` int(2) unsigned zerofill DEFAULT NULL,
  `dist_57` int(2) unsigned zerofill DEFAULT NULL,
  `dist_58` int(2) unsigned zerofill DEFAULT NULL,
  `dist_59` int(2) unsigned zerofill DEFAULT NULL,
  `dist_60` int(2) unsigned zerofill DEFAULT NULL,
  `dist_61` int(2) unsigned zerofill DEFAULT NULL,
  `dist_62` int(2) unsigned zerofill DEFAULT NULL,
  `dist_63` int(2) unsigned zerofill DEFAULT NULL,
  `dist_64` int(2) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `dist_info`
--

INSERT INTO `dist_info` (`sl`, `post_code`, `post_name`, `dist_01`, `dist_02`, `dist_03`, `dist_04`, `dist_05`, `dist_06`, `dist_07`, `dist_08`, `dist_09`, `dist_10`, `dist_11`, `dist_12`, `dist_13`, `dist_14`, `dist_15`, `dist_16`, `dist_17`, `dist_18`, `dist_19`, `dist_20`, `dist_21`, `dist_22`, `dist_23`, `dist_24`, `dist_25`, `dist_26`, `dist_27`, `dist_28`, `dist_29`, `dist_30`, `dist_31`, `dist_32`, `dist_33`, `dist_34`, `dist_35`, `dist_36`, `dist_37`, `dist_38`, `dist_39`, `dist_40`, `dist_41`, `dist_42`, `dist_43`, `dist_44`, `dist_45`, `dist_46`, `dist_47`, `dist_48`, `dist_49`, `dist_50`, `dist_51`, `dist_52`, `dist_53`, `dist_54`, `dist_55`, `dist_56`, `dist_57`, `dist_58`, `dist_59`, `dist_60`, `dist_61`, `dist_62`, `dist_63`, `dist_64`) VALUES
(001, 110, 'Assistant Engineer', 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00);

-- --------------------------------------------------------

--
-- Table structure for table `div_dist_thana`
--

CREATE TABLE IF NOT EXISTS `div_dist_thana` (
  `sl` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `dist_code` int(2) unsigned zerofill NOT NULL DEFAULT '00',
  `div_name` varchar(20) NOT NULL,
  `dist_name` varchar(20) DEFAULT NULL,
  `thana` varchar(30) NOT NULL,
  PRIMARY KEY (`sl`),
  KEY `dist_code` (`dist_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=554 ;

--
-- Dumping data for table `div_dist_thana`
--

INSERT INTO `div_dist_thana` (`sl`, `dist_code`, `div_name`, `dist_name`, `thana`) VALUES
(001, 01, 'Rangpur', 'Panchagarh', 'Atwari'),
(002, 01, 'Rangpur', 'Panchagarh', 'Boda'),
(003, 01, 'Rangpur', 'Panchagarh', 'Debiganj'),
(004, 01, 'Rangpur', 'Panchagarh', 'Panchagarh Sadar'),
(005, 01, 'Rangpur', 'Panchagarh', 'Tentulia'),
(006, 02, 'Rangpur', 'Thakurgaon', 'Baliadangi'),
(007, 02, 'Rangpur', 'Thakurgaon', 'Haripur'),
(008, 02, 'Rangpur', 'Thakurgaon', 'Pirganj'),
(009, 02, 'Rangpur', 'Thakurgaon', 'Ranisankail'),
(010, 02, 'Rangpur', 'Thakurgaon', 'Thakurgaon Sadar'),
(011, 03, 'Rangpur', 'Dinajpur', 'Biral'),
(012, 03, 'Rangpur', 'Dinajpur', 'Birampur'),
(013, 03, 'Rangpur', 'Dinajpur', 'Birganj'),
(014, 03, 'Rangpur', 'Dinajpur', 'Bochaganj'),
(015, 03, 'Rangpur', 'Dinajpur', 'Chirirbandar'),
(016, 03, 'Rangpur', 'Dinajpur', 'Dinajpur Sadar'),
(017, 03, 'Rangpur', 'Dinajpur', 'Fulbari'),
(018, 03, 'Rangpur', 'Dinajpur', 'Ghoraghat'),
(019, 03, 'Rangpur', 'Dinajpur', 'Hakimpur'),
(020, 03, 'Rangpur', 'Dinajpur', 'Kaharole'),
(021, 03, 'Rangpur', 'Dinajpur', 'Khansama'),
(022, 03, 'Rangpur', 'Dinajpur', 'Nawabganj'),
(023, 03, 'Rangpur', 'Dinajpur', 'Parbatipur'),
(024, 04, 'Rangpur', 'Nilphamari', 'Dimla'),
(025, 04, 'Rangpur', 'Nilphamari', 'Domar'),
(026, 04, 'Rangpur', 'Nilphamari', 'Jaldhaka'),
(027, 04, 'Rangpur', 'Nilphamari', 'Kishoreganj '),
(028, 04, 'Rangpur', 'Nilphamari', 'Nilphamari Sadar'),
(029, 04, 'Rangpur', 'Nilphamari', 'Saidpur'),
(030, 05, 'Rangpur', 'Lalmonirhat', 'Aditmari'),
(031, 05, 'Rangpur', 'Lalmonirhat', 'Hatibanda'),
(032, 05, 'Rangpur', 'Lalmonirhat', 'Kaliganj'),
(033, 05, 'Rangpur', 'Lalmonirhat', 'Lalmonirhat Sadar'),
(034, 05, 'Rangpur', 'Lalmonirhat', 'Patgram'),
(035, 06, 'Rangpur', 'Rangpur', 'Badarganj'),
(036, 06, 'Rangpur', 'Rangpur', 'Gangachara'),
(037, 06, 'Rangpur', 'Rangpur', 'Kaunia'),
(038, 06, 'Rangpur', 'Rangpur', 'Mitha Pukur'),
(039, 06, 'Rangpur', 'Rangpur', 'Pirgachha'),
(040, 06, 'Rangpur', 'Rangpur', 'Pirganj'),
(041, 06, 'Rangpur', 'Rangpur', 'Rangpur Sadar'),
(042, 06, 'Rangpur', 'Rangpur', 'Taraganj'),
(043, 07, 'Rangpur', 'Kurigram', 'Bhurungamari'),
(044, 07, 'Rangpur', 'Kurigram', 'Char Rajibpur'),
(045, 07, 'Rangpur', 'Kurigram', 'Chilmari'),
(046, 07, 'Rangpur', 'Kurigram', 'Kurigram Sadar'),
(047, 07, 'Rangpur', 'Kurigram', 'Nageshwari'),
(048, 07, 'Rangpur', 'Kurigram', 'Phulbari'),
(049, 07, 'Rangpur', 'Kurigram', 'Rajarhat'),
(050, 07, 'Rangpur', 'Kurigram', 'Rajibpur'),
(051, 07, 'Rangpur', 'Kurigram', 'Raumari'),
(052, 07, 'Rangpur', 'Kurigram', 'Ulipur'),
(053, 08, 'Rangpur', 'Gaibanda', 'Fulchhari'),
(054, 08, 'Rangpur', 'Gaibanda', 'Gaibanda Sadar'),
(055, 08, 'Rangpur', 'Gaibanda', 'Gobidaganj'),
(056, 08, 'Rangpur', 'Gaibanda', 'Palashbari'),
(057, 08, 'Rangpur', 'Gaibanda', 'Sadullapur'),
(058, 08, 'Rangpur', 'Gaibanda', 'Saghatta'),
(059, 08, 'Rangpur', 'Gaibanda', 'Sundarganj'),
(060, 09, 'Rajshahi', 'Jaipurhat', 'Akkelpur'),
(061, 09, 'Rajshahi', 'Jaipurhat', 'Joypurhat  Sadar'),
(062, 09, 'Rajshahi', 'Jaipurhat', 'Kalai'),
(063, 09, 'Rajshahi', 'Jaipurhat', 'Khetlal'),
(064, 09, 'Rajshahi', 'Jaipurhat', 'Panchbibi'),
(065, 10, 'Rajshahi', 'Bogura', 'Adamdighi'),
(066, 10, 'Rajshahi', 'Bogura', 'Bogura Sadar'),
(067, 10, 'Rajshahi', 'Bogura', 'Dhunat'),
(068, 10, 'Rajshahi', 'Bogura', 'Dhupchanchia'),
(069, 10, 'Rajshahi', 'Bogura', 'Gabtali'),
(070, 10, 'Rajshahi', 'Bogura', 'Kahaloo'),
(071, 10, 'Rajshahi', 'Bogura', 'Nandigram'),
(072, 10, 'Rajshahi', 'Bogura', 'Sariakandi'),
(073, 10, 'Rajshahi', 'Bogura', 'Shajhanpur'),
(074, 10, 'Rajshahi', 'Bogura', 'Sherpur'),
(075, 10, 'Rajshahi', 'Bogura', 'Shibganj'),
(076, 10, 'Rajshahi', 'Bogura', 'Sonatola'),
(077, 11, 'Rajshahi', 'Naogaon', 'Atrai'),
(078, 11, 'Rajshahi', 'Naogaon', 'Badalgachhi'),
(079, 11, 'Rajshahi', 'Naogaon', 'Dhamoirhat'),
(080, 11, 'Rajshahi', 'Naogaon', 'Mahadebpur'),
(081, 11, 'Rajshahi', 'Naogaon', 'Manda'),
(082, 11, 'Rajshahi', 'Naogaon', 'Naogaon Sadar'),
(083, 11, 'Rajshahi', 'Naogaon', 'Niamatpur'),
(084, 11, 'Rajshahi', 'Naogaon', 'Patnitala'),
(085, 11, 'Rajshahi', 'Naogaon', 'Porsha'),
(086, 11, 'Rajshahi', 'Naogaon', 'Raninagar'),
(087, 11, 'Rajshahi', 'Naogaon', 'Sapahar'),
(088, 12, 'Rajshahi', 'Natore', 'Bagati Para'),
(089, 12, 'Rajshahi', 'Natore', 'Baraigram'),
(090, 12, 'Rajshahi', 'Natore', 'Gurudaspur'),
(091, 12, 'Rajshahi', 'Natore', 'Lalpur'),
(092, 12, 'Rajshahi', 'Natore', 'Natore Sadar'),
(093, 12, 'Rajshahi', 'Natore', 'Singra'),
(094, 13, 'Rajshahi', 'Chapai Nawabganj', 'Bholahat'),
(095, 13, 'Rajshahi', 'Chapai Nawabganj', 'Gomastapur'),
(096, 13, 'Rajshahi', 'Chapai Nawabganj', 'Nachole'),
(097, 13, 'Rajshahi', 'Chapai Nawabganj', 'Nawabganj Sadar'),
(098, 13, 'Rajshahi', 'Chapai Nawabganj', 'Shibganj'),
(099, 14, 'Rajshahi', 'Rajshahi', 'Bagha'),
(100, 14, 'Rajshahi', 'Rajshahi', 'Baghmara'),
(101, 14, 'Rajshahi', 'Rajshahi', 'Boalia (Sadar)'),
(102, 14, 'Rajshahi', 'Rajshahi', 'Charghat'),
(103, 14, 'Rajshahi', 'Rajshahi', 'Durgapur'),
(104, 14, 'Rajshahi', 'Rajshahi', 'Godagari'),
(105, 14, 'Rajshahi', 'Rajshahi', 'Matihar'),
(106, 14, 'Rajshahi', 'Rajshahi', 'Mohanpur'),
(107, 14, 'Rajshahi', 'Rajshahi', 'Paba'),
(108, 14, 'Rajshahi', 'Rajshahi', 'Puthia'),
(109, 14, 'Rajshahi', 'Rajshahi', 'Rajpara'),
(110, 14, 'Rajshahi', 'Rajshahi', 'Tanore'),
(111, 15, 'Rajshahi', 'Sirajganj', 'Belkuchi'),
(112, 15, 'Rajshahi', 'Sirajganj', 'Chauhali'),
(113, 15, 'Rajshahi', 'Sirajganj', 'Kamarkhanda'),
(114, 15, 'Rajshahi', 'Sirajganj', 'Kazipur'),
(115, 15, 'Rajshahi', 'Sirajganj', 'Royganj'),
(116, 15, 'Rajshahi', 'Sirajganj', 'Shahjadpur'),
(117, 15, 'Rajshahi', 'Sirajganj', 'Sirajganj Sadar'),
(118, 15, 'Rajshahi', 'Sirajganj', 'Tarash'),
(119, 15, 'Rajshahi', 'Sirajganj', 'Ullah Para'),
(120, 16, 'Rajshahi', 'Pabna', 'Atgharia'),
(121, 16, 'Rajshahi', 'Pabna', 'Bera'),
(122, 16, 'Rajshahi', 'Pabna', 'Bhangura'),
(123, 16, 'Rajshahi', 'Pabna', 'Chatmohar'),
(124, 16, 'Rajshahi', 'Pabna', 'Faridpur'),
(125, 16, 'Rajshahi', 'Pabna', 'Ishwardi'),
(126, 16, 'Rajshahi', 'Pabna', 'Pabna Sadar'),
(127, 16, 'Rajshahi', 'Pabna', 'Santhia'),
(128, 16, 'Rajshahi', 'Pabna', 'Sujanagar'),
(129, 17, 'Khulna', 'Kushtia', 'Bheramara'),
(130, 17, 'Khulna', 'Kushtia', 'Daulatpur'),
(131, 17, 'Khulna', 'Kushtia', 'Khoksa'),
(132, 17, 'Khulna', 'Kushtia', 'Kumarkhali'),
(133, 17, 'Khulna', 'Kushtia', 'Kushtia Sadar'),
(134, 17, 'Khulna', 'Kushtia', 'Mirpur'),
(135, 18, 'Khulna', 'Meharpur', 'Gangni'),
(136, 18, 'Khulna', 'Meharpur', 'Meherpur Sadar'),
(137, 18, 'Khulna', 'Meharpur', 'Mujib Nagar'),
(138, 19, 'Khulna', 'Chuadanga', 'Alamdanga'),
(139, 19, 'Khulna', 'Chuadanga', 'Chuadanga Sadar'),
(140, 19, 'Khulna', 'Chuadanga', 'Damurhuda'),
(141, 19, 'Khulna', 'Chuadanga', 'Jiban Nagar'),
(142, 20, 'Khulna', 'Jhenaidah', 'Harinakunda'),
(143, 20, 'Khulna', 'Jhenaidah', 'Jhenaidaha Sadar'),
(144, 20, 'Khulna', 'Jhenaidah', 'Kaliganj'),
(145, 20, 'Khulna', 'Jhenaidah', 'Kotchandpur'),
(146, 20, 'Khulna', 'Jhenaidah', 'Mahespur'),
(147, 20, 'Khulna', 'Jhenaidah', 'Shailkupa'),
(148, 21, 'Khulna', 'Magura', 'Magura Sadar'),
(149, 21, 'Khulna', 'Magura', 'Mohammadpur'),
(150, 21, 'Khulna', 'Magura', 'Shalikha'),
(151, 21, 'Khulna', 'Magura', 'Sreepur'),
(152, 22, 'Khulna', 'Narail', 'Kalia'),
(153, 22, 'Khulna', 'Narail', 'Lohagara'),
(154, 22, 'Khulna', 'Narail', 'NarailSadar'),
(155, 23, 'Khulna', 'Jashore', 'Abhay Nagar'),
(156, 23, 'Khulna', 'Jashore', 'Bagherpara'),
(157, 23, 'Khulna', 'Jashore', 'Chowghacha'),
(158, 23, 'Khulna', 'Jashore', 'Jhikargacha'),
(159, 23, 'Khulna', 'Jashore', 'Keshabpur'),
(160, 23, 'Khulna', 'Jashore', 'Kotwali'),
(161, 23, 'Khulna', 'Jashore', 'Manirampur'),
(162, 23, 'Khulna', 'Jashore', 'Sharsha'),
(163, 24, 'Khulna', 'Satkhira', 'Assasuni'),
(164, 24, 'Khulna', 'Satkhira', 'Debhata'),
(165, 24, 'Khulna', 'Satkhira', 'Kalaroa'),
(166, 24, 'Khulna', 'Satkhira', 'Kaliganj'),
(167, 24, 'Khulna', 'Satkhira', 'Satkhira Sadar'),
(168, 24, 'Khulna', 'Satkhira', 'Shyamnagar'),
(169, 24, 'Khulna', 'Satkhira', 'Tala'),
(170, 25, 'Khulna', 'Khulna', 'Batiaghata'),
(171, 25, 'Khulna', 'Khulna', 'Dacope'),
(172, 25, 'Khulna', 'Khulna', 'Daulatpur'),
(173, 25, 'Khulna', 'Khulna', 'Dighala'),
(174, 25, 'Khulna', 'Khulna', 'Dumuria'),
(175, 25, 'Khulna', 'Khulna', 'Khalishpur'),
(176, 25, 'Khulna', 'Khulna', 'Khan Jahan Ali'),
(177, 25, 'Khulna', 'Khulna', 'Khulna Sadar'),
(178, 25, 'Khulna', 'Khulna', 'Koyra'),
(179, 25, 'Khulna', 'Khulna', 'Paikgachha'),
(180, 25, 'Khulna', 'Khulna', 'Phultala'),
(181, 25, 'Khulna', 'Khulna', 'Rupsa'),
(182, 25, 'Khulna', 'Khulna', 'Sonadanga'),
(183, 25, 'Khulna', 'Khulna', 'Terokhada'),
(184, 26, 'Khulna', 'Bagerhat', 'Bagerhat Sadar'),
(185, 26, 'Khulna', 'Bagerhat', 'Chitalmari'),
(186, 26, 'Khulna', 'Bagerhat', 'Fakirhat'),
(187, 26, 'Khulna', 'Bagerhat', 'Kachua'),
(188, 26, 'Khulna', 'Bagerhat', 'Mollahat'),
(189, 26, 'Khulna', 'Bagerhat', 'Mongla'),
(190, 26, 'Khulna', 'Bagerhat', 'Morrelganj'),
(191, 26, 'Khulna', 'Bagerhat', 'Rampal'),
(192, 26, 'Khulna', 'Bagerhat', 'Sarankhola'),
(193, 27, 'Barishal', 'Pirojpur', 'Bhandaria'),
(194, 27, 'Barishal', 'Pirojpur', 'Kawkhali'),
(195, 27, 'Barishal', 'Pirojpur', 'Mathbaria'),
(196, 27, 'Barishal', 'Pirojpur', 'Nazirpur'),
(197, 27, 'Barishal', 'Pirojpur', 'Nesarabad (Swarupkati)'),
(198, 27, 'Barishal', 'Pirojpur', 'Pirojpur Sadar'),
(199, 27, 'Barishal', 'Pirojpur', 'Zianagar'),
(200, 28, 'Barishal', 'Jhalokhathi', 'Jhalokhati Sadar'),
(201, 28, 'Barishal', 'Jhalokhathi', 'Kanthalia'),
(202, 28, 'Barishal', 'Jhalokhathi', 'Nalchity'),
(203, 28, 'Barishal', 'Jhalokhathi', 'Rajapur'),
(204, 29, 'Barishal', 'Barishal', 'Agailihara'),
(205, 29, 'Barishal', 'Barishal', 'Babuganj'),
(206, 29, 'Barishal', 'Barishal', 'Bakerganj'),
(207, 29, 'Barishal', 'Barishal', 'Banari Para'),
(208, 29, 'Barishal', 'Barishal', 'Barishal Sadar (Kotwali)'),
(209, 29, 'Barishal', 'Barishal', 'Gaurnadi'),
(210, 29, 'Barishal', 'Barishal', 'Hizla'),
(211, 29, 'Barishal', 'Barishal', 'Mehendiganj'),
(212, 29, 'Barishal', 'Barishal', 'Muladi'),
(213, 29, 'Barishal', 'Barishal', 'Wazirpur'),
(214, 30, 'Barishal', 'Bhola', 'Bhola Sadar'),
(215, 30, 'Barishal', 'Bhola', 'Burhanuddin'),
(216, 30, 'Barishal', 'Bhola', 'Char Fasson'),
(217, 30, 'Barishal', 'Bhola', 'Daulatkhan'),
(218, 30, 'Barishal', 'Bhola', 'Lalmohan'),
(219, 30, 'Barishal', 'Bhola', 'Manpura'),
(220, 30, 'Barishal', 'Bhola', 'Tazumuddin'),
(221, 31, 'Barishal', 'Patuakhali', 'Bauphal'),
(222, 31, 'Barishal', 'Patuakhali', 'Dashmina'),
(223, 31, 'Barishal', 'Patuakhali', 'Dumki'),
(224, 31, 'Barishal', 'Patuakhali', 'Galachipa'),
(225, 31, 'Barishal', 'Patuakhali', 'Kala Para'),
(226, 31, 'Barishal', 'Patuakhali', 'Mirzaganj'),
(227, 31, 'Barishal', 'Patuakhali', 'Patuakhali Sadar'),
(228, 32, 'Barishal', 'Barguna', 'Amtali'),
(229, 32, 'Barishal', 'Barguna', 'Bamna'),
(230, 32, 'Barishal', 'Barguna', 'Barguna Sadar'),
(231, 32, 'Barishal', 'Barguna', 'Betagi'),
(232, 32, 'Barishal', 'Barguna', 'Patharghata'),
(233, 33, 'Mymensingh', 'Netrokona', 'Atpara'),
(234, 33, 'Mymensingh', 'Netrokona', 'Barhatta'),
(235, 33, 'Mymensingh', 'Netrokona', 'Durgapur'),
(236, 33, 'Mymensingh', 'Netrokona', 'Kalmakanda'),
(237, 33, 'Mymensingh', 'Netrokona', 'Kendua'),
(238, 33, 'Mymensingh', 'Netrokona', 'Khaliajuri'),
(239, 33, 'Mymensingh', 'Netrokona', 'Madan'),
(240, 33, 'Mymensingh', 'Netrokona', 'Mohanganj'),
(241, 33, 'Mymensingh', 'Netrokona', 'Netrokona Sadar'),
(242, 33, 'Mymensingh', 'Netrokona', 'Purbadhala'),
(243, 34, 'Mymensingh', 'Mymensingh', 'Bhalukha'),
(244, 34, 'Mymensingh', 'Mymensingh', 'Dhobaura'),
(245, 34, 'Mymensingh', 'Mymensingh', 'Fulbaria'),
(246, 34, 'Mymensingh', 'Mymensingh', 'Gaffargaon'),
(247, 34, 'Mymensingh', 'Mymensingh', 'Gauripur'),
(248, 34, 'Mymensingh', 'Mymensingh', 'Haluaghat'),
(249, 34, 'Mymensingh', 'Mymensingh', 'Ishwarganj'),
(250, 34, 'Mymensingh', 'Mymensingh', 'Muktagachha'),
(251, 34, 'Mymensingh', 'Mymensingh', 'Mymensingh Sadar'),
(252, 34, 'Mymensingh', 'Mymensingh', 'Nandail'),
(253, 34, 'Mymensingh', 'Mymensingh', 'Phulpur'),
(254, 34, 'Mymensingh', 'Mymensingh', 'Trishl'),
(255, 35, 'Mymensingh', 'Sherpur', 'Jhenaigati'),
(256, 35, 'Mymensingh', 'Sherpur', 'Nakla'),
(257, 35, 'Mymensingh', 'Sherpur', 'Nalitabari'),
(258, 35, 'Mymensingh', 'Sherpur', 'Sherpur Sadar'),
(259, 35, 'Mymensingh', 'Sherpur', 'Sreebardi'),
(260, 36, 'Mymensingh', 'Jamalpur', 'Bakshiganj'),
(261, 36, 'Mymensingh', 'Jamalpur', 'Dewanganj'),
(262, 36, 'Mymensingh', 'Jamalpur', 'Islampur'),
(263, 36, 'Mymensingh', 'Jamalpur', 'Jamalpur Sadar'),
(264, 36, 'Mymensingh', 'Jamalpur', 'Madarganj'),
(265, 36, 'Mymensingh', 'Jamalpur', 'Melandaha'),
(266, 36, 'Mymensingh', 'Jamalpur', 'Sarishabari'),
(267, 37, 'Dhaka', 'Tangail', 'Basail'),
(268, 37, 'Dhaka', 'Tangail', 'Bhuapur'),
(269, 37, 'Dhaka', 'Tangail', 'Delduar'),
(270, 37, 'Dhaka', 'Tangail', 'Dhonbari'),
(271, 37, 'Dhaka', 'Tangail', 'Ghatail'),
(272, 37, 'Dhaka', 'Tangail', 'Gopalpur'),
(273, 37, 'Dhaka', 'Tangail', 'Kalihati'),
(274, 37, 'Dhaka', 'Tangail', 'Madhupur'),
(275, 37, 'Dhaka', 'Tangail', 'Mirzapur'),
(276, 37, 'Dhaka', 'Tangail', 'Nagarpur'),
(277, 37, 'Dhaka', 'Tangail', 'Sakhipur'),
(278, 37, 'Dhaka', 'Tangail', 'Tangail Sadar'),
(279, 38, 'Dhaka', 'Kishorganj', 'Austagram'),
(280, 38, 'Dhaka', 'Kishorganj', 'Bajitpur'),
(281, 38, 'Dhaka', 'Kishorganj', 'Bhairab'),
(282, 38, 'Dhaka', 'Kishorganj', 'Hossenpur'),
(283, 38, 'Dhaka', 'Kishorganj', 'Itna'),
(284, 38, 'Dhaka', 'Kishorganj', 'Karimganj'),
(285, 38, 'Dhaka', 'Kishorganj', 'Katiadi'),
(286, 38, 'Dhaka', 'Kishorganj', 'Kishoregonj SADAR'),
(287, 38, 'Dhaka', 'Kishorganj', 'Kuliar Char'),
(288, 38, 'Dhaka', 'Kishorganj', 'Mithamoin'),
(289, 38, 'Dhaka', 'Kishorganj', 'Nikli'),
(290, 38, 'Dhaka', 'Kishorganj', 'Pakundia'),
(291, 38, 'Dhaka', 'Kishorganj', 'Tarail'),
(292, 39, 'Dhaka', 'Manikganj', 'Daulatpur'),
(293, 39, 'Dhaka', 'Manikganj', 'Ghior'),
(294, 39, 'Dhaka', 'Manikganj', 'Harirampur'),
(295, 39, 'Dhaka', 'Manikganj', 'Manikganj Sadar'),
(296, 39, 'Dhaka', 'Manikganj', 'Saturia'),
(297, 39, 'Dhaka', 'Manikganj', 'Shibalaya'),
(298, 39, 'Dhaka', 'Manikganj', 'Singair'),
(299, 40, 'Dhaka', 'Dhaka', 'Adabor'),
(300, 40, 'Dhaka', 'Dhaka', 'Airport'),
(301, 40, 'Dhaka', 'Dhaka', 'Badda'),
(302, 40, 'Dhaka', 'Dhaka', 'Banani'),
(303, 40, 'Dhaka', 'Dhaka', 'Bangshal'),
(304, 40, 'Dhaka', 'Dhaka', 'Bhashantek'),
(305, 40, 'Dhaka', 'Dhaka', 'Cantonment'),
(306, 40, 'Dhaka', 'Dhaka', 'Chackbazar'),
(307, 40, 'Dhaka', 'Dhaka', 'Dakshin Khan'),
(308, 40, 'Dhaka', 'Dhaka', 'Darus-Salam'),
(309, 40, 'Dhaka', 'Dhaka', 'Demra'),
(310, 40, 'Dhaka', 'Dhaka', 'Dhamrai'),
(311, 40, 'Dhaka', 'Dhaka', 'Dhanmondi'),
(312, 40, 'Dhaka', 'Dhaka', 'Dohar'),
(313, 40, 'Dhaka', 'Dhaka', 'Gandaria'),
(314, 40, 'Dhaka', 'Dhaka', 'Gulshan'),
(315, 40, 'Dhaka', 'Dhaka', 'Hatirjheel'),
(316, 40, 'Dhaka', 'Dhaka', 'Hazaribhag'),
(317, 40, 'Dhaka', 'Dhaka', 'Jattrabari'),
(318, 40, 'Dhaka', 'Dhaka', 'Kadamtoli'),
(319, 40, 'Dhaka', 'Dhaka', 'Kafrul'),
(320, 40, 'Dhaka', 'Dhaka', 'Kalabagan'),
(321, 40, 'Dhaka', 'Dhaka', 'Kamrangir Char'),
(322, 40, 'Dhaka', 'Dhaka', 'Keraniganj'),
(323, 40, 'Dhaka', 'Dhaka', 'Khilgaon'),
(324, 40, 'Dhaka', 'Dhaka', 'Khilkhet'),
(325, 40, 'Dhaka', 'Dhaka', 'Kotwali'),
(326, 40, 'Dhaka', 'Dhaka', 'Lalbag'),
(327, 40, 'Dhaka', 'Dhaka', 'Mirpur Model'),
(328, 40, 'Dhaka', 'Dhaka', 'Mohammadpur'),
(329, 40, 'Dhaka', 'Dhaka', 'Motijheel'),
(330, 40, 'Dhaka', 'Dhaka', 'Mugda'),
(331, 40, 'Dhaka', 'Dhaka', 'New Market'),
(332, 40, 'Dhaka', 'Dhaka', 'Nawabganj'),
(333, 40, 'Dhaka', 'Dhaka', 'Pallabi'),
(334, 40, 'Dhaka', 'Dhaka', 'Paltan Model'),
(335, 40, 'Dhaka', 'Dhaka', 'Ramna Model'),
(336, 40, 'Dhaka', 'Dhaka', 'Rampura'),
(337, 40, 'Dhaka', 'Dhaka', 'Rupnagar'),
(338, 40, 'Dhaka', 'Dhaka', 'Sabujbhag'),
(339, 40, 'Dhaka', 'Dhaka', 'Shah Ali'),
(340, 40, 'Dhaka', 'Dhaka', 'Shahbag'),
(341, 40, 'Dhaka', 'Dhaka', 'Savar'),
(342, 40, 'Dhaka', 'Dhaka', 'Shahjahanpur'),
(343, 40, 'Dhaka', 'Dhaka', 'Sher e Bangla Nagar'),
(344, 40, 'Dhaka', 'Dhaka', 'Shyampur'),
(345, 40, 'Dhaka', 'Dhaka', 'Sutrapur'),
(346, 40, 'Dhaka', 'Dhaka', 'Tejgaon'),
(347, 40, 'Dhaka', 'Dhaka', 'Tejgaon Industrial'),
(348, 40, 'Dhaka', 'Dhaka', 'Turag'),
(349, 40, 'Dhaka', 'Dhaka', 'Uttar Khan'),
(350, 40, 'Dhaka', 'Dhaka', 'Uttara East'),
(351, 40, 'Dhaka', 'Dhaka', 'Uttara West'),
(352, 40, 'Dhaka', 'Dhaka', 'Vatara'),
(353, 40, 'Dhaka', 'Dhaka', 'Wari'),
(354, 41, 'Dhaka', 'Gazipur', 'Gazipur Sadar'),
(355, 41, 'Dhaka', 'Gazipur', 'Kaliakair'),
(356, 41, 'Dhaka', 'Gazipur', 'Kaliganj'),
(357, 41, 'Dhaka', 'Gazipur', 'Kapasia'),
(358, 41, 'Dhaka', 'Gazipur', 'Sreepur'),
(359, 41, 'Dhaka', 'Gazipur', 'Tongi'),
(360, 42, 'Dhaka', 'Narsingdi', 'Belabo'),
(361, 42, 'Dhaka', 'Narsingdi', 'Manohardi'),
(362, 42, 'Dhaka', 'Narsingdi', 'Narsingdi Sadar'),
(363, 42, 'Dhaka', 'Narsingdi', 'Palash'),
(364, 42, 'Dhaka', 'Narsingdi', 'Roypura'),
(365, 42, 'Dhaka', 'Narsingdi', 'Shibpur'),
(366, 43, 'Dhaka', 'Narayanganj', 'Araihazar'),
(367, 43, 'Dhaka', 'Narayanganj', 'Bandar'),
(368, 43, 'Dhaka', 'Narayanganj', 'Narayanganj Sadar'),
(369, 43, 'Dhaka', 'Narayanganj', 'Rupganj'),
(370, 43, 'Dhaka', 'Narayanganj', 'Sonargaon'),
(371, 44, 'Dhaka', 'Munshiganj', 'Gazaria'),
(372, 44, 'Dhaka', 'Munshiganj', 'Louhajang'),
(373, 44, 'Dhaka', 'Munshiganj', 'Munshiganj Sadar'),
(374, 44, 'Dhaka', 'Munshiganj', 'Serajdikhan'),
(375, 44, 'Dhaka', 'Munshiganj', 'Sreenagar'),
(376, 44, 'Dhaka', 'Munshiganj', 'Tongibari'),
(377, 45, 'Dhaka', 'Faridpur', 'Alfadanga'),
(378, 45, 'Dhaka', 'Faridpur', 'Bhanga'),
(379, 45, 'Dhaka', 'Faridpur', 'Boalmari'),
(380, 45, 'Dhaka', 'Faridpur', 'Char Bhadrasan'),
(381, 45, 'Dhaka', 'Faridpur', 'Faridpur Sadar'),
(382, 45, 'Dhaka', 'Faridpur', 'Madukhali'),
(383, 45, 'Dhaka', 'Faridpur', 'Nagarkanda'),
(384, 45, 'Dhaka', 'Faridpur', 'Sadarpur'),
(385, 45, 'Dhaka', 'Faridpur', 'Saltha'),
(386, 46, 'Dhaka', 'Rajbari', 'Balia Kandi'),
(387, 46, 'Dhaka', 'Rajbari', 'Goalandaghat'),
(388, 46, 'Dhaka', 'Rajbari', 'Kalukhali'),
(389, 46, 'Dhaka', 'Rajbari', 'Pangsha'),
(390, 46, 'Dhaka', 'Rajbari', 'Rajbari Sadar'),
(391, 47, 'Dhaka', 'Gopalganj', 'Gopalganj Sadar'),
(392, 47, 'Dhaka', 'Gopalganj', 'Kashiani'),
(393, 47, 'Dhaka', 'Gopalganj', 'Kotalipara'),
(394, 47, 'Dhaka', 'Gopalganj', 'Muksudpur'),
(395, 47, 'Dhaka', 'Gopalganj', 'Tungi Para'),
(396, 48, 'Dhaka', 'Madaripur', 'Kalkini'),
(397, 48, 'Dhaka', 'Madaripur', 'Madaripur Sadar'),
(398, 48, 'Dhaka', 'Madaripur', 'Rajoir'),
(399, 48, 'Dhaka', 'Madaripur', 'Shibchar'),
(400, 49, 'Dhaka', 'Shariatpur', 'Bhaderganj'),
(401, 49, 'Dhaka', 'Shariatpur', 'Damudya'),
(402, 49, 'Dhaka', 'Shariatpur', 'Gosairhat'),
(403, 49, 'Dhaka', 'Shariatpur', 'Naria'),
(404, 49, 'Dhaka', 'Shariatpur', 'Palong(Sadar)'),
(405, 49, 'Dhaka', 'Shariatpur', 'Zanjira'),
(406, 50, 'Sylhet', 'Sunamganj', 'Bishwambarpur'),
(407, 50, 'Sylhet', 'Sunamganj', 'Chhatak'),
(408, 50, 'Sylhet', 'Sunamganj', 'Daxin Sunamganj'),
(409, 50, 'Sylhet', 'Sunamganj', 'Derai'),
(410, 50, 'Sylhet', 'Sunamganj', 'Dharampasha'),
(411, 50, 'Sylhet', 'Sunamganj', 'Dowarabazar'),
(412, 50, 'Sylhet', 'Sunamganj', 'Jagannatpur'),
(413, 50, 'Sylhet', 'Sunamganj', 'Jamalganj'),
(414, 50, 'Sylhet', 'Sunamganj', 'Sulla'),
(415, 50, 'Sylhet', 'Sunamganj', 'Sunamganj Sadar'),
(416, 50, 'Sylhet', 'Sunamganj', 'Tahirpur'),
(417, 51, 'Sylhet', 'Sylhet', 'Balaganj'),
(418, 51, 'Sylhet', 'Sylhet', 'Beani Bazar'),
(419, 51, 'Sylhet', 'Sylhet', 'Bishwanath'),
(420, 51, 'Sylhet', 'Sylhet', 'Companiganj'),
(421, 51, 'Sylhet', 'Sylhet', 'Fenchuganj'),
(422, 51, 'Sylhet', 'Sylhet', 'Golabganj'),
(423, 51, 'Sylhet', 'Sylhet', 'Gowainghat'),
(424, 51, 'Sylhet', 'Sylhet', 'Jaintiapur'),
(425, 51, 'Sylhet', 'Sylhet', 'Kanaighat'),
(426, 51, 'Sylhet', 'Sylhet', 'Kowtali'),
(427, 51, 'Sylhet', 'Sylhet', 'South Surma'),
(428, 51, 'Sylhet', 'Sylhet', 'Zakirganj'),
(429, 52, 'Sylhet', 'Mouluvibazar', 'Barlekha'),
(430, 52, 'Sylhet', 'Mouluvibazar', 'Juri'),
(431, 52, 'Sylhet', 'Mouluvibazar', 'Kamalganj'),
(432, 52, 'Sylhet', 'Mouluvibazar', 'Kulaura'),
(433, 52, 'Sylhet', 'Mouluvibazar', 'Maulvi Bazar Sadar'),
(434, 52, 'Sylhet', 'Mouluvibazar', 'Rajnagar'),
(435, 52, 'Sylhet', 'Mouluvibazar', 'Sreemangal'),
(436, 53, 'Sylhet', 'Habiganj', 'Ajmirganj'),
(437, 53, 'Sylhet', 'Habiganj', 'Bahubal'),
(438, 53, 'Sylhet', 'Habiganj', 'Baniachang'),
(439, 53, 'Sylhet', 'Habiganj', 'Chunarughat'),
(440, 53, 'Sylhet', 'Habiganj', 'Habiganj Sadar'),
(441, 53, 'Sylhet', 'Habiganj', 'Lakhai'),
(442, 53, 'Sylhet', 'Habiganj', 'Madhabpur'),
(443, 53, 'Sylhet', 'Habiganj', 'Nabiganj'),
(444, 54, 'Chattogram', 'Brahamanbaria', 'Akhaura'),
(445, 54, 'Chattogram', 'Brahamanbaria', 'Ashuganj'),
(446, 54, 'Chattogram', 'Brahamanbaria', 'Banchharampur'),
(447, 54, 'Chattogram', 'Brahamanbaria', 'Brahamanbaria Sadar'),
(448, 54, 'Chattogram', 'Brahamanbaria', 'Kasba'),
(449, 54, 'Chattogram', 'Brahamanbaria', 'Nabinagar'),
(450, 54, 'Chattogram', 'Brahamanbaria', 'Nasirnagar'),
(451, 54, 'Chattogram', 'Brahamanbaria', 'Sarail'),
(452, 55, 'Chattogram', 'Cumilla', 'Barura'),
(453, 55, 'Chattogram', 'Cumilla', 'Brahaman Para'),
(454, 55, 'Chattogram', 'Cumilla', 'Burichang'),
(455, 55, 'Chattogram', 'Cumilla', 'Chandina'),
(456, 55, 'Chattogram', 'Cumilla', 'Chauddagram'),
(457, 55, 'Chattogram', 'Cumilla', 'Cumilla Sadar'),
(458, 55, 'Chattogram', 'Cumilla', 'Cumilla Sadar South'),
(459, 55, 'Chattogram', 'Cumilla', 'Daudkandi'),
(460, 55, 'Chattogram', 'Cumilla', 'Debidwar'),
(461, 55, 'Chattogram', 'Cumilla', 'Homna'),
(462, 55, 'Chattogram', 'Cumilla', 'Laksam'),
(463, 55, 'Chattogram', 'Cumilla', 'Langalkot'),
(464, 55, 'Chattogram', 'Cumilla', 'Meghna'),
(465, 55, 'Chattogram', 'Cumilla', 'Monohorganj'),
(466, 55, 'Chattogram', 'Cumilla', 'Muradnagar'),
(467, 55, 'Chattogram', 'Cumilla', 'Titas'),
(468, 56, 'Chattogram', 'Chandpur', 'Chandpur Sadar'),
(469, 56, 'Chattogram', 'Chandpur', 'Faridganj'),
(470, 56, 'Chattogram', 'Chandpur', 'Haim Char'),
(471, 56, 'Chattogram', 'Chandpur', 'Hajiganj'),
(472, 56, 'Chattogram', 'Chandpur', 'Kachua'),
(473, 56, 'Chattogram', 'Chandpur', 'Matlab'),
(474, 56, 'Chattogram', 'Chandpur', 'Shahrasti'),
(475, 56, 'Chattogram', 'Chandpur', 'Uttar Matlab'),
(476, 57, 'Chattogram', 'Luxmipur', 'Komol Nogor'),
(477, 57, 'Chattogram', 'Luxmipur', 'Luxmipur Sadar'),
(478, 57, 'Chattogram', 'Luxmipur', 'Raipur'),
(479, 57, 'Chattogram', 'Luxmipur', 'Ramganj'),
(480, 57, 'Chattogram', 'Luxmipur', 'Ramgati'),
(481, 58, 'Chattogram', 'Noakhali', 'Begumganj'),
(482, 58, 'Chattogram', 'Noakhali', 'Chatkhil'),
(483, 58, 'Chattogram', 'Noakhali', 'Companiganj'),
(484, 58, 'Chattogram', 'Noakhali', 'Hatiya'),
(485, 58, 'Chattogram', 'Noakhali', 'Kobirhat'),
(486, 58, 'Chattogram', 'Noakhali', 'Noakhali Sadar (Sudharam)'),
(487, 58, 'Chattogram', 'Noakhali', 'Senbagh'),
(488, 58, 'Chattogram', 'Noakhali', 'Sonaimuri'),
(489, 58, 'Chattogram', 'Noakhali', 'Subornachhar'),
(490, 59, 'Chattogram', 'Feni', 'Chhagalnayian'),
(491, 59, 'Chattogram', 'Feni', 'Daganbhuyian'),
(492, 59, 'Chattogram', 'Feni', 'Feni Sadar'),
(493, 59, 'Chattogram', 'Feni', 'Fulgazi'),
(494, 59, 'Chattogram', 'Feni', 'Parshuram'),
(495, 59, 'Chattogram', 'Feni', 'Sonagazi'),
(496, 60, 'Chattogram', 'Chattogram', 'Anowara'),
(497, 60, 'Chattogram', 'Chattogram', 'Bakalia'),
(498, 60, 'Chattogram', 'Chattogram', 'Bandar(Chitt. Port)'),
(499, 60, 'Chattogram', 'Chattogram', 'Banshkhali'),
(500, 60, 'Chattogram', 'Chattogram', 'Bayejid Bostami'),
(501, 60, 'Chattogram', 'Chattogram', 'Boalkhali'),
(502, 60, 'Chattogram', 'Chattogram', 'Chandanish'),
(503, 60, 'Chattogram', 'Chattogram', 'Chandgaon'),
(504, 60, 'Chattogram', 'Chattogram', 'Double Mooring'),
(505, 60, 'Chattogram', 'Chattogram', 'Fatikchhari'),
(506, 60, 'Chattogram', 'Chattogram', 'Halishahar'),
(507, 60, 'Chattogram', 'Chattogram', 'Hathazari'),
(508, 60, 'Chattogram', 'Chattogram', 'Karnafuli'),
(509, 60, 'Chattogram', 'Chattogram', 'Khulshi'),
(510, 60, 'Chattogram', 'Chattogram', 'Kotwali'),
(511, 60, 'Chattogram', 'Chattogram', 'Lohagara'),
(512, 60, 'Chattogram', 'Chattogram', 'Mirsharai'),
(513, 60, 'Chattogram', 'Chattogram', 'Pahartali'),
(514, 60, 'Chattogram', 'Chattogram', 'Panchlaish'),
(515, 60, 'Chattogram', 'Chattogram', 'Patiya'),
(516, 60, 'Chattogram', 'Chattogram', 'Rangunia'),
(517, 60, 'Chattogram', 'Chattogram', 'Raozan'),
(518, 60, 'Chattogram', 'Chattogram', 'Sandwip'),
(519, 60, 'Chattogram', 'Chattogram', 'Satkania'),
(520, 60, 'Chattogram', 'Chattogram', 'Sitakunda'),
(521, 61, 'Chattogram', 'Cox`s Bazar', 'Chakaria'),
(522, 61, 'Chattogram', 'Cox`s Bazar', 'Cox`s Bazar Sadar'),
(523, 61, 'Chattogram', 'Cox`s Bazar', 'Kutubdia'),
(524, 61, 'Chattogram', 'Cox`s Bazar', 'Maheshkhali'),
(525, 61, 'Chattogram', 'Cox`s Bazar', 'Pekua'),
(526, 61, 'Chattogram', 'Cox`s Bazar', 'Ramu'),
(527, 61, 'Chattogram', 'Cox`s Bazar', 'Teknaf'),
(528, 61, 'Chattogram', 'Cox`s Bazar', 'Ukhia'),
(529, 62, 'Chattogram', 'Khagrachhari', 'Dighinala'),
(530, 62, 'Chattogram', 'Khagrachhari', 'Khagrachhari Sadar'),
(531, 62, 'Chattogram', 'Khagrachhari', 'Lakshmichhari'),
(532, 62, 'Chattogram', 'Khagrachhari', 'Mahalchhari'),
(533, 62, 'Chattogram', 'Khagrachhari', 'Manikchhari'),
(534, 62, 'Chattogram', 'Khagrachhari', 'Matiranga'),
(535, 62, 'Chattogram', 'Khagrachhari', 'Panchhari'),
(536, 62, 'Chattogram', 'Khagrachhari', 'Ramgarh'),
(537, 63, 'Chattogram', 'Rangamati', 'Bagaichhari'),
(538, 63, 'Chattogram', 'Rangamati', 'Barkal'),
(539, 63, 'Chattogram', 'Rangamati', 'Belaichhari'),
(540, 63, 'Chattogram', 'Rangamati', 'Juraichhari'),
(541, 63, 'Chattogram', 'Rangamati', 'Kaptai'),
(542, 63, 'Chattogram', 'Rangamati', 'Kawkhali (Betbunia)'),
(543, 63, 'Chattogram', 'Rangamati', 'Langadu'),
(544, 63, 'Chattogram', 'Rangamati', 'Naniarchar'),
(545, 63, 'Chattogram', 'Rangamati', 'Rajasthali'),
(546, 63, 'Chattogram', 'Rangamati', 'Rangamati Sadar'),
(547, 64, 'Chattogram', 'Bandarban', 'Alikadam'),
(548, 64, 'Chattogram', 'Bandarban', 'Bandarban Sadar'),
(549, 64, 'Chattogram', 'Bandarban', 'Lama'),
(550, 64, 'Chattogram', 'Bandarban', 'Naikhongchhari'),
(551, 64, 'Chattogram', 'Bandarban', 'Rowangchhari'),
(552, 64, 'Chattogram', 'Bandarban', 'Ruma'),
(553, 64, 'Chattogram', 'Bandarban', 'Thanchi');

-- --------------------------------------------------------

--
-- Table structure for table `err_info`
--

CREATE TABLE IF NOT EXISTS `err_info` (
  `err_110_01` varchar(250) DEFAULT NULL,
  `err_110_02` varchar(250) DEFAULT NULL,
  `err_110_03` varchar(250) DEFAULT NULL,
  `err_120_01` varchar(250) DEFAULT NULL,
  `err_120_02` varchar(250) NOT NULL,
  `err_120_03` varchar(250) NOT NULL,
  `err_130_01` varchar(250) NOT NULL,
  `err_130_02` varchar(250) NOT NULL,
  `err_130_03` varchar(250) NOT NULL,
  `err_140_01` varchar(300) DEFAULT NULL,
  `err_140_02` varchar(250) NOT NULL,
  `err_140_03` varchar(250) NOT NULL,
  `err_150_01` varchar(250) DEFAULT NULL,
  `err_150_02` varchar(250) DEFAULT NULL,
  `err_150_03` varchar(250) NOT NULL,
  `err_160_01` varchar(300) NOT NULL,
  `err_160_02` varchar(200) NOT NULL,
  `err_160_03` varchar(200) NOT NULL,
  `err_170_01` varchar(300) NOT NULL,
  `err_170_02` varchar(250) NOT NULL,
  `err_170_03` varchar(250) NOT NULL,
  `err_180_01` varchar(250) NOT NULL,
  `err_180_02` varchar(250) NOT NULL,
  `err_180_03` varchar(250) NOT NULL,
  `err_190_01` varchar(250) NOT NULL,
  `err_190_02` varchar(250) NOT NULL,
  `err_190_03` varchar(250) NOT NULL,
  `err_200_01` varchar(250) NOT NULL,
  `err_200_02` varchar(250) NOT NULL,
  `err_200_03` varchar(250) NOT NULL,
  `err_210_01` varchar(250) NOT NULL,
  `err_210_02` varchar(250) NOT NULL,
  `err_210_03` varchar(250) NOT NULL,
  `err_220_01` varchar(250) NOT NULL,
  `err_220_02` varchar(250) NOT NULL,
  `err_220_03` varchar(250) NOT NULL,
  `err_230_01` varchar(250) NOT NULL,
  `err_230_02` varchar(250) NOT NULL,
  `err_230_03` varchar(250) NOT NULL,
  `err_240_01` varchar(250) NOT NULL,
  `err_240_02` varchar(250) NOT NULL,
  `err_240_03` varchar(250) NOT NULL,
  `err_250_01` varchar(250) NOT NULL,
  `err_250_02` varchar(250) NOT NULL,
  `err_250_03` varchar(250) NOT NULL,
  `err_260_01` varchar(250) NOT NULL,
  `err_260_02` varchar(100) NOT NULL,
  `err_260_03` varchar(100) NOT NULL,
  `err_270_01` varchar(250) NOT NULL,
  `err_270_02` varchar(100) NOT NULL,
  `err_270_03` varchar(100) NOT NULL,
  `err_280_01` varchar(250) NOT NULL,
  `err_280_02` varchar(250) NOT NULL,
  `err_280_03` varchar(250) NOT NULL,
  `err_290_01` varchar(250) NOT NULL,
  `err_290_02` varchar(250) NOT NULL,
  `err_290_03` varchar(250) NOT NULL,
  `err_300_01` varchar(250) NOT NULL,
  `err_300_02` varchar(250) NOT NULL,
  `err_300_03` varchar(250) NOT NULL,
  `err_310_01` varchar(250) NOT NULL,
  `err_310_02` varchar(250) NOT NULL,
  `err_310_03` varchar(250) NOT NULL,
  `err_320_01` varchar(250) NOT NULL,
  `err_320_02` varchar(250) NOT NULL,
  `err_320_03` varchar(250) NOT NULL,
  `err_330_01` varchar(250) NOT NULL,
  `err_330_02` varchar(250) NOT NULL,
  `err_330_03` varchar(250) NOT NULL,
  `err_340_01` varchar(250) NOT NULL,
  `err_340_02` varchar(250) NOT NULL,
  `err_340_03` varchar(250) NOT NULL,
  `err_350_01` varchar(250) NOT NULL,
  `err_350_02` varchar(250) NOT NULL,
  `err_350_03` varchar(250) NOT NULL,
  `err_360_01` varchar(250) NOT NULL,
  `err_360_02` varchar(250) NOT NULL,
  `err_360_03` varchar(250) NOT NULL,
  `err_370_01` varchar(250) NOT NULL,
  `err_370_02` varchar(250) NOT NULL,
  `err_370_03` varchar(250) NOT NULL,
  `err_380_01` varchar(250) NOT NULL,
  `err_380_02` varchar(250) NOT NULL,
  `err_380_03` varchar(250) NOT NULL,
  `err_390_01` varchar(250) NOT NULL,
  `err_390_02` varchar(250) NOT NULL,
  `err_390_03` varchar(250) NOT NULL,
  `err_400_01` varchar(250) NOT NULL,
  `err_400_02` varchar(250) NOT NULL,
  `err_400_03` varchar(250) NOT NULL,
  `err_410_01` varchar(250) NOT NULL,
  `err_410_02` varchar(250) NOT NULL,
  `err_410_03` varchar(250) NOT NULL,
  `err_420_01` varchar(250) NOT NULL,
  `err_420_02` varchar(250) NOT NULL,
  `err_420_03` varchar(250) NOT NULL,
  `err_430_01` varchar(250) NOT NULL,
  `err_430_02` varchar(250) NOT NULL,
  `err_430_03` varchar(250) NOT NULL,
  `err_440_01` varchar(250) NOT NULL,
  `err_440_02` varchar(250) NOT NULL,
  `err_440_03` varchar(250) NOT NULL,
  `err_450_01` varchar(250) NOT NULL,
  `err_450_02` varchar(250) NOT NULL,
  `err_450_03` varchar(250) NOT NULL,
  `err_460_01` varchar(250) NOT NULL,
  `err_460_02` varchar(250) NOT NULL,
  `err_460_03` varchar(250) NOT NULL,
  `err_470_01` varchar(250) NOT NULL,
  `err_470_02` varchar(250) NOT NULL,
  `err_470_03` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam_board`
--

CREATE TABLE IF NOT EXISTS `exam_board` (
  `board_value` int(1) NOT NULL DEFAULT '0',
  `board_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`board_value`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_board`
--

INSERT INTO `exam_board` (`board_value`, `board_name`) VALUES
(1, 'Dhaka'),
(2, 'Cumilla'),
(3, 'Rajshahi'),
(4, 'Jashore'),
(5, 'Chittagong'),
(6, 'Barishal'),
(7, 'Sylhet'),
(8, 'Dinajpur'),
(9, 'Madrasah'),
(11, 'Mymensingh'),
(15, 'Cambridge International - IGCE'),
(16, 'Edexcel International'),
(17, 'Bangladesh Technical Education Board (BTEB)'),
(20, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `exam_gra`
--

CREATE TABLE IF NOT EXISTS `exam_gra` (
  `exam_value` int(1) NOT NULL,
  `exam_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`exam_value`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_gra`
--

INSERT INTO `exam_gra` (`exam_value`, `exam_name`) VALUES
(1, 'B.Sc Engineering'),
(2, 'B.Sc in Agricultural Science'),
(3, 'M.B.B.S./B.D.S'),
(4, 'Honors'),
(5, 'Pass Course'),
(6, 'Fazil'),
(7, 'B.B.A'),
(8, 'Graduation Equivalent');

-- --------------------------------------------------------

--
-- Table structure for table `exam_grp_hsc`
--

CREATE TABLE IF NOT EXISTS `exam_grp_hsc` (
  `group_value` int(2) NOT NULL DEFAULT '0',
  `group_name` varchar(50) DEFAULT NULL,
  `group_type` varchar(2) NOT NULL DEFAULT 'T',
  PRIMARY KEY (`group_value`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_grp_hsc`
--

INSERT INTO `exam_grp_hsc` (`group_value`, `group_name`, `group_type`) VALUES
(1, 'Science', 'G'),
(2, 'Humanities', 'G'),
(3, 'Business Studies', 'G'),
(11, 'Pharmacy', 'T'),
(12, 'Agriculture Technology', 'T'),
(13, 'Architecture and Interior Design Technology', 'T'),
(15, 'Automobile Technology', 'T'),
(16, 'Civil Technology', 'T'),
(20, 'Computer Science & Engineering Technology', 'T'),
(21, 'Chemical Technology', 'T'),
(22, 'Electrical Technology', 'T'),
(23, 'Data Telecommunication and Network Technology', 'T'),
(24, 'Electrical and Electronics Technology', 'T'),
(27, 'Environmental Technology', 'T'),
(31, 'Instrumentation & Process Control Technology', 'T'),
(32, 'Mechanical Technology', 'T'),
(34, 'Mechatronics Technology', 'T'),
(36, 'Power Technology', 'T'),
(37, 'Printing Technology', 'T'),
(38, 'Refrigeration & Air Conditioning Technology', 'T'),
(41, 'Telecommunication Technology', 'T'),
(42, 'Electronics Technology', 'T'),
(43, 'Library Science', 'T'),
(44, 'Survey', 'T'),
(45, 'General Mechanics', 'T'),
(46, 'Firm Machinery', 'T'),
(71, 'Agro Machinery', 'V'),
(72, 'Automobile', 'V'),
(73, 'Building Maintenance and Construction', 'V'),
(74, 'Clothing and Garments Finishing', 'V'),
(75, 'Computer Operation and Maintenance', 'V'),
(76, 'Drafting Civil', 'V'),
(77, 'Electrical Works and Maintenance', 'V'),
(78, 'Electronic Control and Communication', 'V'),
(79, 'Fish Culture and Breeding', 'V'),
(80, 'Machine Tools Operation and Maintenance', 'V'),
(81, 'Poultry Rearing and Farming', 'V'),
(82, 'Refrigeration and Air-conditioning', 'V'),
(83, 'Welding and Fabrication', 'V'),
(84, 'Industrial Wood Working', 'V'),
(99, 'Others', 'Z');

-- --------------------------------------------------------

--
-- Table structure for table `exam_grp_ssc`
--

CREATE TABLE IF NOT EXISTS `exam_grp_ssc` (
  `group_value` int(2) NOT NULL DEFAULT '0',
  `group_name` varchar(50) DEFAULT NULL,
  `group_type` varchar(2) NOT NULL DEFAULT 'T',
  PRIMARY KEY (`group_value`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_grp_ssc`
--

INSERT INTO `exam_grp_ssc` (`group_value`, `group_name`, `group_type`) VALUES
(1, 'Science', 'G'),
(2, 'Humanities', 'G'),
(3, 'Business Studies', 'G'),
(12, 'Agriculture Technology', 'T'),
(13, 'Architecture and Interior Design Technology', 'T'),
(15, 'Automobile Technology', 'T'),
(16, 'Civil Technology', 'T'),
(20, 'Computer Science & Technology', 'T'),
(21, 'Chemical Technology', 'T'),
(22, 'Electrical Technology', 'T'),
(23, 'Data Telecommunication and Network Technology', 'T'),
(24, 'Electrical and Electronics Technology', 'T'),
(27, 'Environmental Technology', 'T'),
(31, 'Instrumentation & Process Control Technology', 'T'),
(32, 'Mechanical Technology', 'T'),
(34, 'Mechatronics Technology', 'T'),
(36, 'Power Technology', 'T'),
(38, 'Refregeration & Air Conditioning Technology', 'T'),
(41, 'Telecommunication Technology', 'T'),
(42, 'Electronics Technology', 'T'),
(43, 'Library Science', 'T'),
(44, 'Survey', 'T'),
(45, 'General Mechanics', 'T'),
(46, 'Firm Machinery', 'T'),
(47, 'Textile Technology', 'T'),
(99, 'Others', 'Z');

-- --------------------------------------------------------

--
-- Table structure for table `exam_hsc`
--

CREATE TABLE IF NOT EXISTS `exam_hsc` (
  `exam_value` int(1) NOT NULL,
  `exam_name` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`exam_value`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_hsc`
--

INSERT INTO `exam_hsc` (`exam_value`, `exam_name`) VALUES
(1, 'H.S.C'),
(2, 'Alim'),
(3, 'Business Management'),
(4, 'Diploma-in-Engineering (4 Years)'),
(5, 'A Level/Sr. Cambridge'),
(6, 'H.S.C Equivalent'),
(7, 'Diploma in Medical Technology'),
(8, 'H.S.C Vocational');

-- --------------------------------------------------------

--
-- Table structure for table `exam_mas`
--

CREATE TABLE IF NOT EXISTS `exam_mas` (
  `exam_value` int(1) NOT NULL,
  `exam_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`exam_value`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_mas`
--

INSERT INTO `exam_mas` (`exam_value`, `exam_name`) VALUES
(1, 'M.A'),
(2, 'M.S.S'),
(3, 'M.Sc'),
(4, 'M.Com'),
(5, 'M.B.A'),
(6, 'L.L.M'),
(7, 'M.Phil'),
(8, 'Kamil'),
(9, 'Others'),
(10, 'Masters Equivalent');

-- --------------------------------------------------------

--
-- Table structure for table `exam_phd`
--

CREATE TABLE IF NOT EXISTS `exam_phd` (
  `exam_value` int(5) NOT NULL,
  `exam_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_phd`
--

INSERT INTO `exam_phd` (`exam_value`, `exam_name`) VALUES
(1, 'Ph.D in Space Science'),
(2, 'Ph.D in Remote Sensing'),
(3, 'Ph.D in Allied Subjects'),
(4, 'Ph.D in Computer Science'),
(5, 'Ph.D in Computer Engineering'),
(6, 'Ph.D in Computer Science & Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `exam_result_type`
--

CREATE TABLE IF NOT EXISTS `exam_result_type` (
  `type_value` int(1) NOT NULL,
  `type_name` varchar(20) NOT NULL,
  `exam_name` varchar(10) NOT NULL,
  PRIMARY KEY (`type_value`,`exam_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_result_type`
--

INSERT INTO `exam_result_type` (`type_value`, `type_name`, `exam_name`) VALUES
(1, '1st Class', 'GRA'),
(1, '1st Division', 'HSC'),
(1, '1st Class', 'MAS'),
(1, '1st Class', 'PHD'),
(1, '1st Division', 'SSC'),
(2, '2nd Class', 'GRA'),
(2, '2nd Division', 'HSC'),
(2, '2nd Class', 'MAS'),
(2, '2nd Class', 'PHD'),
(2, '2nd Division', 'SSC'),
(3, '3rd Class', 'GRA'),
(3, '3rd Division', 'HSC'),
(3, '3rd Class', 'MAS'),
(3, '3rd Class', 'PHD'),
(3, '3rd Division', 'SSC'),
(4, 'CGPA(out of 4)', 'GRA'),
(4, 'GPA(out of 4)', 'HSC'),
(4, 'CGPA(out of 4)', 'MAS'),
(4, 'CGPA(out of 4)', 'PHD'),
(4, 'GPA(out of 4)', 'SSC'),
(5, 'CGPA(out of 5)', 'GRA'),
(5, 'GPA(out of 5)', 'HSC'),
(5, 'CGPA(out of 5)', 'MAS'),
(5, 'CGPA(out of 5)', 'PHD'),
(5, 'GPA(out of 5)', 'SSC'),
(6, 'Passed', 'GRA'),
(6, 'Passed', 'HSC'),
(6, 'Passed', 'MAS'),
(6, 'Passed', 'PHD');

-- --------------------------------------------------------

--
-- Table structure for table `exam_ssc`
--

CREATE TABLE IF NOT EXISTS `exam_ssc` (
  `exam_value` int(1) NOT NULL,
  `exam_name` varchar(20) NOT NULL,
  PRIMARY KEY (`exam_value`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_ssc`
--

INSERT INTO `exam_ssc` (`exam_value`, `exam_name`) VALUES
(1, 'S.S.C'),
(2, 'Dakhil'),
(3, 'S.S.C Vocational'),
(4, 'O Level/Cambridge'),
(5, 'S.S.C Equivalent'),
(6, 'Dakhil Vocational');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
  `post_sl` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `invoice` varchar(8) CHARACTER SET latin2 COLLATE latin2_bin NOT NULL,
  `post_code` int(3) unsigned zerofill DEFAULT '000',
  `post_name` varchar(260) NOT NULL DEFAULT '',
  `job_post` varchar(100) DEFAULT NULL,
  `organization` varchar(100) NOT NULL,
  `job_res` text,
  `job_form_date` date DEFAULT NULL,
  `job_to_date` date DEFAULT NULL,
  `six_trai` varchar(250) DEFAULT NULL,
  `exp_two` varchar(250) DEFAULT NULL,
  `exp_three` varchar(250) DEFAULT NULL,
  `exp_four` varchar(250) DEFAULT NULL,
  `exp_five` varchar(250) DEFAULT NULL,
  `ageactual` varchar(250) NOT NULL,
  `draft_man` varchar(250) DEFAULT NULL,
  `sur_veyor` varchar(250) DEFAULT NULL,
  `comtyp_one` varchar(250) DEFAULT NULL,
  `comtyp_two` varchar(250) DEFAULT NULL,
  `comtyp_three` varchar(250) DEFAULT NULL,
  `steno_typ` varchar(250) DEFAULT NULL,
  `pass_eight` varchar(250) DEFAULT NULL,
  `dri_lic` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`post_sl`),
  KEY `post_code` (`post_code`),
  KEY `six_trai` (`six_trai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `logapp`
--

CREATE TABLE IF NOT EXISTS `logapp` (
  `sl` int(5) NOT NULL DEFAULT '0',
  `name` varchar(20) DEFAULT NULL,
  `user_id` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `post_code` int(6) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE IF NOT EXISTS `pending` (
  `sl` varchar(15) DEFAULT NULL,
  `pin` varchar(10) NOT NULL DEFAULT '',
  `nid_no` varchar(20) NOT NULL,
  `breg_no` varchar(20) NOT NULL,
  `ssc_board` varchar(50) NOT NULL,
  `ssc_roll` varchar(15) NOT NULL,
  `ssc_year` varchar(4) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `father` varchar(50) DEFAULT NULL,
  `mother` varchar(50) DEFAULT NULL,
  `money_deduct` varchar(8) NOT NULL DEFAULT '',
  `user` varchar(10) CHARACTER SET latin2 COLLATE latin2_bin NOT NULL DEFAULT '',
  `excen` varchar(20) DEFAULT NULL,
  `msisdn` varchar(15) DEFAULT NULL,
  `contact_no` varchar(15) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `post_code` int(3) unsigned DEFAULT '0',
  `post_name` varchar(250) NOT NULL,
  UNIQUE KEY `pin` (`pin`),
  UNIQUE KEY `user` (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_sl` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `post_code` int(3) unsigned zerofill DEFAULT '000',
  `post_name` varchar(250) DEFAULT NULL,
  `company_name` varchar(250) NOT NULL,
  `short_name` varchar(100) NOT NULL,
  `app_start_day` int(10) DEFAULT NULL,
  `app_start_month` int(10) NOT NULL,
  `app_start_year` int(10) NOT NULL,
  `app_end_day` int(10) DEFAULT NULL,
  `app_end_month` int(10) NOT NULL,
  `app_end_year` int(10) NOT NULL,
  `min_age` int(2) NOT NULL DEFAULT '0',
  `max_age` int(2) NOT NULL DEFAULT '0',
  `ff_age` int(2) NOT NULL,
  `dpt_age` int(2) NOT NULL,
  `agelimit_day` int(10) DEFAULT NULL,
  `agelimit_month` int(10) NOT NULL,
  `agelimit_year` int(10) NOT NULL,
  `ad_no` varchar(100) NOT NULL,
  `min_edu_stage` int(5) NOT NULL,
  `edu_stage` int(5) DEFAULT NULL,
  `edu_mas` tinyint(3) NOT NULL,
  `post_active` int(1) unsigned NOT NULL DEFAULT '0',
  `card_active` int(1) NOT NULL DEFAULT '0',
  `job_exp` tinyint(5) DEFAULT NULL,
  `ffq_active` int(10) NOT NULL,
  `exp_110_01` varchar(250) DEFAULT NULL,
  `exp_110_02` varchar(250) DEFAULT NULL,
  `exp_110_03` varchar(250) DEFAULT NULL,
  `exp_120_01` varchar(250) DEFAULT NULL,
  `exp_120_02` varchar(250) NOT NULL,
  `exp_120_03` varchar(250) NOT NULL,
  `exp_130_01` varchar(250) NOT NULL,
  `exp_130_02` varchar(250) NOT NULL,
  `exp_130_03` varchar(250) NOT NULL,
  `exp_140_01` varchar(250) DEFAULT NULL,
  `exp_140_02` varchar(250) NOT NULL,
  `exp_140_03` varchar(250) NOT NULL,
  `exp_150_01` varchar(250) DEFAULT NULL,
  `exp_150_02` varchar(250) DEFAULT NULL,
  `exp_150_03` varchar(250) NOT NULL,
  `exp_160_01` varchar(250) NOT NULL,
  `exp_160_02` varchar(200) NOT NULL,
  `exp_160_03` varchar(200) NOT NULL,
  `exp_170_01` varchar(250) NOT NULL,
  `exp_170_02` varchar(250) NOT NULL,
  `exp_170_03` varchar(250) NOT NULL,
  `exp_180_01` varchar(250) NOT NULL,
  `exp_180_02` varchar(250) NOT NULL,
  `exp_180_03` varchar(250) NOT NULL,
  `exp_190_01` varchar(250) NOT NULL,
  `exp_190_02` varchar(250) NOT NULL,
  `exp_190_03` varchar(250) NOT NULL,
  `exp_200_01` varchar(250) NOT NULL,
  `exp_200_02` varchar(250) NOT NULL,
  `exp_200_03` varchar(250) NOT NULL,
  `exp_210_01` varchar(250) NOT NULL,
  `exp_210_02` varchar(250) NOT NULL,
  `exp_210_03` varchar(250) NOT NULL,
  `exp_220_01` varchar(250) NOT NULL,
  `exp_220_02` varchar(250) NOT NULL,
  `exp_220_03` varchar(250) NOT NULL,
  `exp_230_01` varchar(250) NOT NULL,
  `exp_230_02` varchar(250) NOT NULL,
  `exp_230_03` varchar(250) NOT NULL,
  `exp_240_01` varchar(250) NOT NULL,
  `exp_240_02` varchar(250) NOT NULL,
  `exp_240_03` varchar(250) NOT NULL,
  `exp_250_01` varchar(250) NOT NULL,
  `exp_250_02` varchar(250) NOT NULL,
  `exp_250_03` varchar(250) NOT NULL,
  `exp_260_01` varchar(250) NOT NULL,
  `exp_260_02` varchar(100) NOT NULL,
  `exp_260_03` varchar(100) NOT NULL,
  `exp_270_01` varchar(100) NOT NULL,
  `exp_270_02` varchar(100) NOT NULL,
  `exp_270_03` varchar(100) NOT NULL,
  `exp_280_01` varchar(250) NOT NULL,
  `exp_280_02` varchar(250) NOT NULL,
  `exp_280_03` varchar(250) NOT NULL,
  `exp_290_01` varchar(250) NOT NULL,
  `exp_290_02` varchar(250) NOT NULL,
  `exp_290_03` varchar(250) NOT NULL,
  `exp_300_01` varchar(250) NOT NULL,
  `exp_300_02` varchar(250) NOT NULL,
  `exp_300_03` varchar(250) NOT NULL,
  `exp_310_01` varchar(250) NOT NULL,
  `exp_310_02` varchar(250) NOT NULL,
  `exp_310_03` varchar(250) NOT NULL,
  `exp_320_01` varchar(250) NOT NULL,
  `exp_320_02` varchar(250) NOT NULL,
  `exp_320_03` varchar(250) NOT NULL,
  `exp_330_01` varchar(250) NOT NULL,
  `exp_330_02` varchar(250) NOT NULL,
  `exp_330_03` varchar(250) NOT NULL,
  `exp_340_01` varchar(250) NOT NULL,
  `exp_340_02` varchar(250) NOT NULL,
  `exp_340_03` varchar(250) NOT NULL,
  `exp_350_01` varchar(250) NOT NULL,
  `exp_350_02` varchar(250) NOT NULL,
  `exp_350_03` varchar(250) NOT NULL,
  `exp_360_01` varchar(250) NOT NULL,
  `exp_360_02` varchar(250) NOT NULL,
  `exp_360_03` varchar(250) NOT NULL,
  `exp_370_01` varchar(250) NOT NULL,
  `exp_370_02` varchar(250) NOT NULL,
  `exp_370_03` varchar(250) NOT NULL,
  `exp_380_01` varchar(250) NOT NULL,
  `exp_380_02` varchar(250) NOT NULL,
  `exp_380_03` varchar(250) NOT NULL,
  `exp_390_01` varchar(250) NOT NULL,
  `exp_390_02` varchar(250) NOT NULL,
  `exp_390_03` varchar(250) NOT NULL,
  `exp_400_01` varchar(250) NOT NULL,
  `exp_400_02` varchar(250) NOT NULL,
  `exp_400_03` varchar(250) NOT NULL,
  `exp_410_01` varchar(250) NOT NULL,
  `exp_410_02` varchar(250) NOT NULL,
  `exp_410_03` varchar(250) NOT NULL,
  `exp_420_01` varchar(250) NOT NULL,
  `exp_420_02` varchar(250) NOT NULL,
  `exp_420_03` varchar(250) NOT NULL,
  `exp_430_01` varchar(250) NOT NULL,
  `exp_430_02` varchar(250) NOT NULL,
  `exp_430_03` varchar(250) NOT NULL,
  `exp_440_01` varchar(250) NOT NULL,
  `exp_440_02` varchar(250) NOT NULL,
  `exp_440_03` varchar(250) NOT NULL,
  `exp_450_01` varchar(250) NOT NULL,
  `exp_450_02` varchar(250) NOT NULL,
  `exp_450_03` varchar(250) NOT NULL,
  `exp_460_01` varchar(250) NOT NULL,
  `exp_460_02` varchar(250) NOT NULL,
  `exp_460_03` varchar(250) NOT NULL,
  `exp_470_01` varchar(250) NOT NULL,
  `exp_470_02` varchar(250) NOT NULL,
  `exp_470_03` varchar(250) NOT NULL,
  PRIMARY KEY (`post_sl`),
  KEY `post_code` (`post_code`),
  KEY `post_active` (`post_active`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_sl`, `post_code`, `post_name`, `company_name`, `short_name`, `app_start_day`, `app_start_month`, `app_start_year`, `app_end_day`, `app_end_month`, `app_end_year`, `min_age`, `max_age`, `ff_age`, `dpt_age`, `agelimit_day`, `agelimit_month`, `agelimit_year`, `ad_no`, `min_edu_stage`, `edu_stage`, `edu_mas`, `post_active`, `card_active`, `job_exp`, `ffq_active`, `exp_110_01`, `exp_110_02`, `exp_110_03`, `exp_120_01`, `exp_120_02`, `exp_120_03`, `exp_130_01`, `exp_130_02`, `exp_130_03`, `exp_140_01`, `exp_140_02`, `exp_140_03`, `exp_150_01`, `exp_150_02`, `exp_150_03`, `exp_160_01`, `exp_160_02`, `exp_160_03`, `exp_170_01`, `exp_170_02`, `exp_170_03`, `exp_180_01`, `exp_180_02`, `exp_180_03`, `exp_190_01`, `exp_190_02`, `exp_190_03`, `exp_200_01`, `exp_200_02`, `exp_200_03`, `exp_210_01`, `exp_210_02`, `exp_210_03`, `exp_220_01`, `exp_220_02`, `exp_220_03`, `exp_230_01`, `exp_230_02`, `exp_230_03`, `exp_240_01`, `exp_240_02`, `exp_240_03`, `exp_250_01`, `exp_250_02`, `exp_250_03`, `exp_260_01`, `exp_260_02`, `exp_260_03`, `exp_270_01`, `exp_270_02`, `exp_270_03`, `exp_280_01`, `exp_280_02`, `exp_280_03`, `exp_290_01`, `exp_290_02`, `exp_290_03`, `exp_300_01`, `exp_300_02`, `exp_300_03`, `exp_310_01`, `exp_310_02`, `exp_310_03`, `exp_320_01`, `exp_320_02`, `exp_320_03`, `exp_330_01`, `exp_330_02`, `exp_330_03`, `exp_340_01`, `exp_340_02`, `exp_340_03`, `exp_350_01`, `exp_350_02`, `exp_350_03`, `exp_360_01`, `exp_360_02`, `exp_360_03`, `exp_370_01`, `exp_370_02`, `exp_370_03`, `exp_380_01`, `exp_380_02`, `exp_380_03`, `exp_390_01`, `exp_390_02`, `exp_390_03`, `exp_400_01`, `exp_400_02`, `exp_400_03`, `exp_410_01`, `exp_410_02`, `exp_410_03`, `exp_420_01`, `exp_420_02`, `exp_420_03`, `exp_430_01`, `exp_430_02`, `exp_430_03`, `exp_440_01`, `exp_440_02`, `exp_440_03`, `exp_450_01`, `exp_450_02`, `exp_450_03`, `exp_460_01`, `exp_460_02`, `exp_460_03`, `exp_470_01`, `exp_470_02`, `exp_470_03`) VALUES
(0001, 110, 'Assistant Engineer', 'Teletalk Bangladesh Ltd', 'TBL', 15, 12, 2020, 15, 1, 2021, 18, 30, 32, 30, 15, 12, 2020, '14.31.0000.012.00.001.19.16, Dated:11/07/2021', 3, 3, 1, 1, 0, 1, 1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `quota`
--

CREATE TABLE IF NOT EXISTS `quota` (
  `quota_value` int(1) NOT NULL,
  `quota_name` varchar(50) NOT NULL,
  PRIMARY KEY (`quota_value`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quota`
--

INSERT INTO `quota` (`quota_value`, `quota_name`) VALUES
(1, 'Freedom Fighter'),
(2, 'Child of Freedom Fighter'),
(3, 'Grand Child of Freedom Fighter'),
(4, 'Physically Handicapped'),
(5, 'Orphan'),
(6, 'Ethnic Minority'),
(7, 'Ansar-VDP'),
(8, 'Non Quota');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `receipt_sl` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `sl` varchar(15) DEFAULT NULL,
  `invoice` varchar(10) CHARACTER SET latin2 COLLATE latin2_bin NOT NULL,
  `post_code` int(3) NOT NULL,
  `post_name` varchar(250) NOT NULL,
  `pin` varchar(10) NOT NULL DEFAULT '',
  `nid_no` varchar(20) NOT NULL,
  `breg_no` varchar(20) NOT NULL,
  `ssc_board` varchar(50) NOT NULL,
  `ssc_roll` varchar(15) NOT NULL,
  `ssc_year` varchar(4) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `father` varchar(50) DEFAULT NULL,
  `mother` varchar(50) DEFAULT NULL,
  `money_deduct` varchar(8) NOT NULL DEFAULT '',
  `user` varchar(10) CHARACTER SET latin2 COLLATE latin2_bin NOT NULL DEFAULT '',
  `password` varchar(10) CHARACTER SET latin2 COLLATE latin2_bin NOT NULL DEFAULT '',
  `pcode` bigint(8) unsigned DEFAULT NULL,
  `exam_centre` varchar(20) DEFAULT NULL,
  `msisdn` varchar(15) DEFAULT NULL,
  `contact_no` varchar(15) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `post_code1` int(3) unsigned zerofill DEFAULT '000',
  `post_name1` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`receipt_sl`),
  KEY `user` (`user`),
  KEY `password` (`password`),
  KEY `pin` (`pin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE IF NOT EXISTS `religion` (
  `religion_value` varchar(30) NOT NULL,
  `religion_name` varchar(30) NOT NULL,
  PRIMARY KEY (`religion_value`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`religion_value`, `religion_name`) VALUES
('Buddhism', 'Buddhism'),
('Christianity', 'Christianity'),
('Hinduism', 'Hinduism'),
('Islam', 'Islam'),
('Others', 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `subject_edu`
--

CREATE TABLE IF NOT EXISTS `subject_edu` (
  `edu_sub_code` int(3) unsigned zerofill NOT NULL DEFAULT '000',
  `edu_sub_name` varchar(100) NOT NULL DEFAULT '',
  `edu_type` varchar(2) NOT NULL,
  PRIMARY KEY (`edu_sub_code`),
  KEY `edu_type` (`edu_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_edu`
--

INSERT INTO `subject_edu` (`edu_sub_code`, `edu_sub_name`, `edu_type`) VALUES
(101, 'Accounting', 'G'),
(102, 'Anthropology', 'G'),
(103, 'Applied Chemistry', 'G'),
(104, 'Applied Physics', 'G'),
(105, 'Applied Mathematics', 'G'),
(106, 'Arabic', 'F'),
(107, 'Archaeology', 'G'),
(108, 'Bangla', 'G'),
(109, 'Banking', 'G'),
(110, 'Biochemistry', 'G'),
(111, 'Botany', 'G'),
(112, 'Business Administration', 'G'),
(113, 'Chemistry', 'G'),
(114, 'Computer Science', 'G'),
(115, 'Clinical Psychology', 'G'),
(116, 'Drama & Music', 'G'),
(117, 'Development Studies', 'G'),
(118, 'Economics', 'G'),
(119, 'Education', 'G'),
(120, 'English', 'G'),
(121, 'Finance', 'G'),
(122, 'Fine Arts', 'G'),
(123, 'Folklore', 'G'),
(124, 'Geography', 'G'),
(125, 'Geography and Environmental Science', 'G'),
(126, 'History', 'G'),
(127, 'Home Economics', 'G'),
(128, 'Hadith', 'F'),
(129, 'International Relations', 'G'),
(130, 'Islamic History and Culture', 'G'),
(131, 'Islamic Studies', 'F'),
(132, 'Information and Communication Technology', 'G'),
(133, 'Mass Comm. & Journalism', 'G'),
(134, 'Law/Jurisprudence', 'G'),
(135, 'Information Science and Library Management', 'G'),
(136, 'Language/Linguistic', 'G'),
(137, 'Management', 'G'),
(138, 'Marketing', 'G'),
(139, 'Mathematics', 'G'),
(140, 'Microbiology', 'G'),
(141, 'Marine Science', 'G'),
(142, 'Medical Technology', 'G'),
(143, 'Pali', 'G'),
(144, 'Persian', 'G'),
(145, 'Pharmacy', 'G'),
(146, 'Philosophy', 'G'),
(147, 'Physics', 'G'),
(148, 'Political Science', 'G'),
(149, 'Psychology', 'G'),
(150, 'Public Administration', 'G'),
(151, 'Public Finance', 'G'),
(152, 'Population Science', 'G'),
(153, 'Peace & Conflict', 'G'),
(154, 'Pharmaceutical Chemistry', 'G'),
(155, 'Sanskrit', 'G'),
(156, 'Social Welfare/Social Work', 'G'),
(157, 'Sociology', 'G'),
(158, 'Soil Water and Environment Science', 'G'),
(159, 'Statistics', 'G'),
(160, 'Tafsir', 'F'),
(161, 'Urdu', 'G'),
(162, 'Urban Development', 'G'),
(163, 'World Religion', 'G'),
(164, 'Women Studies', 'G'),
(165, 'Water & Environment Science', 'na'),
(166, 'Zoology', 'G'),
(167, 'Genetic and Breeding', 'G'),
(168, 'International Law', 'G'),
(169, 'Akaid', 'F'),
(170, 'Graphics', 'G'),
(171, 'Fikha', 'F'),
(172, 'Modern Arabic', 'F'),
(173, 'History of Music', 'G'),
(174, 'Drawing and Printing', 'G'),
(175, 'Industrial Arts', 'G'),
(176, 'Ethics', 'G'),
(177, 'Forestry', 'G'),
(179, 'Criminology & Police Science', 'G'),
(180, 'Department of Television, Film and Photography', 'G'),
(181, 'Department of Women and Gender Studies', 'G'),
(182, 'Department of Criminology', 'G'),
(183, 'Department of Communication Disorders', 'G'),
(184, 'Computer Engineering', 'G'),
(185, 'Computer Science & Engineering', 'G'),
(186, 'Computer Science & Information Technology', 'G'),
(187, 'Information Technology', 'G'),
(188, 'Geology/Geology and Mining', 'G'),
(189, 'Environmental science', 'G'),
(190, 'Genetic Engineering and Biotechnology', 'G'),
(191, 'Materials Science & Engineering', 'G'),
(192, 'Finance and Banking', 'G'),
(201, 'Agriculture', 'G'),
(202, 'Agriculture Chemistry', 'A'),
(203, 'Agriculture Co-operatives', 'A'),
(204, 'Agriculture Economics', 'A'),
(205, 'Agriculture Engineering', 'A'),
(206, 'Agriculture Finance', 'A'),
(207, 'Agriculture Marketing', 'A'),
(208, 'Agriculture Science', 'A'),
(209, 'Agriculture Soil Science', 'A'),
(210, 'Animal Husbandry', 'A'),
(211, 'Agronomy & Aquaculture', 'A'),
(212, 'Agronomy & Aquaculture Extension', 'A'),
(213, 'Anatomy & Histology', 'A'),
(214, 'Agronnomy', 'A'),
(215, 'Anatomology', 'A'),
(216, 'Animal Breeding & Genetic', 'A'),
(217, 'Animal Science', 'A'),
(218, 'Animal Nutrition', 'A'),
(220, 'Agriculture Water Management', 'A'),
(221, 'Agriculture Extension', 'A'),
(223, 'Agro Forestry', 'A'),
(225, 'Agriculture Statistics', 'A'),
(226, 'Agr.Co-operative & Marketing', 'A'),
(227, 'Bio-Technology', 'A'),
(228, 'Corp Botany', 'A'),
(229, 'Dairy Science', 'A'),
(230, 'Doc.of Veterinary Science', 'A'),
(231, 'Fisheries', 'A'),
(232, 'Fisheries & Aquaculture', 'A'),
(233, 'Fisheries Biology', 'A'),
(234, 'Fisheries Management', 'A'),
(235, 'Fisheries Technology', 'A'),
(236, 'Forestry', 'A'),
(237, 'Farm Power & Machinery', 'A'),
(238, 'Food Tech. & Rural Industry', 'A'),
(239, 'Farm Structure', 'A'),
(241, 'Horticulture', 'A'),
(242, 'Livestock', 'A'),
(243, 'Microbiology & Hygenic', 'A'),
(244, 'Production Economics', 'A'),
(245, 'Plant Pathology', 'A'),
(246, 'Paratrology', 'A'),
(247, 'Poultry Science', 'A'),
(248, 'Rural Sociology', 'A'),
(249, 'Surgery & Obstate', 'A'),
(250, 'Business Studies', 'A'),
(260, 'Accounting', 'B'),
(261, 'Banking', 'B'),
(262, 'Business Administration', 'B'),
(263, 'Finance', 'B'),
(264, 'Management', 'B'),
(265, 'Marketing', 'B'),
(266, 'Management Information Systems', 'B'),
(267, 'Banking and Insurance', 'B'),
(268, 'Accounting and Information Systems', 'B'),
(269, 'International Business', 'B'),
(270, 'Tourism and Hospitality Management', 'B'),
(271, 'Human Resource Management', 'B'),
(272, 'Organization Strategy and Leadership', 'B'),
(273, 'Finance and Banking', 'B'),
(301, 'Architecture', 'E'),
(302, 'Chemical', 'E'),
(303, 'Civil', 'E'),
(305, 'Electrical', 'E'),
(306, 'Electrical & Electronics', 'E'),
(307, 'Electronic', 'E'),
(308, 'Genetic Engineering', 'E'),
(309, 'Industrial', 'E'),
(310, 'Leather Technology', 'E'),
(311, 'Marine', 'E'),
(312, 'Mechanical', 'E'),
(313, 'Metallurgy', 'E'),
(314, 'Mineral', 'E'),
(315, 'Mining', 'E'),
(316, 'Naval Architecture', 'E'),
(317, 'Physical Planning', 'E'),
(318, 'Regional Planning', 'E'),
(319, 'Structural', 'E'),
(320, 'Textile Technology', 'E'),
(321, 'Town Planning', 'E'),
(322, 'Urban & Regional Planning', 'E'),
(323, 'Telecommunication Engineering', 'E'),
(324, 'Computer Science', 'E'),
(325, 'Microwave Engineering', 'E'),
(326, 'A & B Section of A.M.I.E', 'IE'),
(327, 'Environmental Engineering', 'E'),
(328, 'Aeronautical Engineering', 'E'),
(329, 'Software Engineering', 'E'),
(391, 'Medicine & Surgery', 'M'),
(392, 'Dental Surgery', 'M'),
(393, 'Computer Engineering', 'E'),
(394, 'Computer Science & Engineering', 'E'),
(395, 'Computer Science & Information Technology', 'E'),
(396, 'Information and Communication Technology', 'E'),
(397, 'Electronics & Communication Engineering', 'E'),
(398, 'Water Resource Engineering', 'E'),
(399, 'Materials Science & Engineering', 'E'),
(991, 'B.A', 'P'),
(992, 'B.S.S', 'P'),
(993, 'B.Sc', 'P'),
(994, 'B.com', 'P'),
(995, 'L.L.B', 'P'),
(999, 'Others', 'Z');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE IF NOT EXISTS `university` (
  `uni_name` varchar(100) NOT NULL,
  `uni_code` int(3) NOT NULL,
  PRIMARY KEY (`uni_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`uni_name`, `uni_code`) VALUES
('Ad-din Womens Medical College, Dhaka', 101),
('Ahsania Mission University of Science and Technology', 102),
('Ahsanullah University of Science and Technology', 103),
('America Bangladesh University', 104),
('American International University Bangladesh', 105),
('Anwer Khan Modern Medical College, Dhaka', 106),
('Anwer Khan Modern University', 107),
('ASA University Bangladesh', 108),
('Asian University for Women', 109),
('Asian University of Bangladesh', 110),
('Atish Dipankar University of Science & Technology', 111),
('Bandarban University', 112),
('Bangabandhu Sheikh Mujib Medical University', 113),
('Bangabandhu Sheikh Mujibur Rahman Agricultural University', 114),
('Bangabandhu Sheikh Mujibur Rahman Aviation And Aerospace University', 115),
('Bangabandhu Sheikh Mujibur Rahman Digital University', 116),
('Bangabandhu Sheikh Mujibur Rahman Maritime University', 117),
('Bangabandhu Sheikh Mujibur Rahman Science and Technology University', 118),
('Bangabandhu Sheikh Mujibur Rahman Univerisity, Kishoreganj', 119),
('Bangamata Sheikh Fojilatunnesa Mujib Science and Technology University', 120),
('Bangladesh Agricultural University,Mymensingh', 121),
('Bangladesh Airlines Training Centre (BATC)', 122),
('Bangladesh Army International University of Science & Technology(BAIUST) ,Comilla', 123),
('Bangladesh Army University of Engineering and Technology (BAUET), Qadirabad', 124),
('Bangladesh Army University of Science and Technology(BAUST), Saidpur', 125),
('Bangladesh Islami University', 126),
('Bangladesh Medical College', 127),
('Bangladesh Open University', 128),
('Bangladesh University', 129),
('Bangladesh University of Business & Technology (BUBT)', 130),
('Bangladesh University of Engineering & Technology', 131),
('Bangladesh University of Health Sciences', 132),
('Bangladesh University of Professionals', 133),
('Bangladesh University of Textiles', 134),
('Barisal University', 135),
('Barishal Engineering College', 136),
('Begum Rokeya University, Rangpur', 137),
('BGC Trust Medical College, Chittagong', 138),
('BGC Trust University Bangladesh, Chittagong', 139),
('BGMEA University of Fashion & Technology(BUFT)', 140),
('BRAC University', 141),
('Britannia University', 142),
('Canadian University of Bangladesh', 143),
('CCN University of Science & Technology', 144),
('Central Medical College, Comilla', 145),
('Central University of Science and Technology', 146),
('Central Women''s University', 147),
('Chandpur Science and Technology University', 148),
('Chittagong Independent University', 149),
('Chittagong Medical College', 150),
('Chittagong Medical University', 151),
('Chittagong University of Engineering & Technology', 152),
('Chittagong Veterinary and Animal Sciences University', 153),
('Chottagram Ma-O-Shishu Hospital Medical College', 154),
('City University', 155),
('Comilla Medical College', 156),
('Comilla University', 157),
('Community Based Medical College (cbmc), Mymensingh', 158),
('Community Medical College, Dhaka', 159),
('Cox''s Bazar International University', 160),
('Cox''s Bazar Medical College', 161),
('Daffodil International University', 162),
('Darul Ihsan University', 163),
('Delta Medical College, Dhaka', 164),
('Dhaka International University', 165),
('Dhaka Medical College', 166),
('Dhaka National Medical College', 167),
('Dhaka University', 168),
('Dhaka University of Engineering & Technology', 169),
('Dinajpur Medical College', 170),
('Durra Samad Rahman Red Crescent Women''s Medical College, Sylhet', 171),
('East Delta University , Chittagong', 172),
('East West University', 173),
('Eastern Medical College, Comilla', 174),
('Eastern University', 175),
('Enam Medical College, Savar, Dhaka', 176),
('European University of Bangladesh', 177),
('Exim Bank Agricultural University, Bangladesh', 178),
('Fareast International University', 179),
('Faridpur Engineering College', 180),
('Faridpur Medical College', 181),
('Feni Medical College,Feni', 182),
('Feni University', 183),
('First Capital University of Bangladesh', 184),
('German University Bangladesh', 185),
('Global University Bangladesh', 186),
('Gono Bishwabidyalay, Savar, Dhaka', 187),
('Green Life Medical College, Dhaka', 188),
('Green University of Bangladesh', 189),
('Hajee Mohammad Danesh Science & Technology University', 190),
('Hamdard University Bangladesh', 191),
('Hobiganj Agricultural University', 192),
('Holy Family Red Crescent Medical College, Dhaka', 193),
('IBAIS University', 194),
('Ibn Sina Medical College, Dhaka', 195),
('Ibrahim Medical College, Dhaka', 196),
('Independent University, Bangladesh', 197),
('International Islamic University, Chittagong', 198),
('International Medical College, Gazipur', 199),
('International Standard University ', 200),
('International University of Business Agriculture & Technology', 201),
('Ishakha International University, Bangladesh', 202),
('Islami Bank Medical College, Rajshahi', 203),
('Islamic Arabic University', 204),
('Islamic University', 205),
('Islamic University of Technology', 206),
('Islamic University of Technology, Gazipur', 207),
('Islamic University, Bangladesh', 208),
('Islamic University, Kushtia', 209),
('Jagannath University', 210),
('Jahangirnagar University', 211),
('Jahurul Islam Medical College, Kishoregonj', 212),
('Jalalabad Ragib-Rabeya Medical College, Sylhet', 213),
('Jatiya Kabi Kazi Nazrul Islam University', 214),
('Jessore Medical College', 215),
('Jessore Science & Technology University', 216),
('Jessore University of Science & Technology', 217),
('Khawja Yunus Ali Medical College, Sirajganj', 218),
('Khulna Agricultural University', 219),
('Khulna Khan Bahadur Ahsanullah University', 220),
('Khulna Medical College', 221),
('Khulna University', 222),
('Khulna University of Engineering and Technology', 223),
('Khwaja Yunus Ali University', 224),
('Kumudini Medical College, Tangail', 225),
('Kushtia Medical College', 226),
('Labaid Medical College, Dhanmondi, Dhaka', 227),
('Leading University, Sylhet', 228),
('MAG Osmani Medical College', 229),
('Manarat International University', 230),
('Maulana Bhasani Medical College', 231),
('Mawlana Bhashani Science & Technology University', 232),
('Medical College for Women and Hospital, Dhaka', 233),
('Metropolitan University, Sylhet', 234),
('Microland University of Science and Technology', 235),
('Military Institute of Science and Technology (MIST)', 236),
('Mymensingh Engineering College', 237),
('Mymensingh Medical College', 238),
('N.P.I University of Bangladesh', 239),
('National University', 240),
('Nightingale Medical College, Dhaka', 241),
('Noakhali Medical College', 242),
('Noakhali Science & Technology University', 243),
('North Bengal International University', 244),
('North Bengal Medical College, Sirajganj', 245),
('North East Medical College, Sylhet', 246),
('North East University Bangladesh', 247),
('North South University', 248),
('North Western University', 249),
('Northern International Medical College, Dhaka', 250),
('Northern Private Medical College, Rangpur', 251),
('Northern University Bangladesh', 252),
('Northern University of Business & Technology, Khulna', 253),
('Notre Dame University Bangladesh', 254),
('Pabna Medical College', 255),
('Pabna University of Science and Technology', 256),
('Patuakhali Science And Technology University', 257),
('Popular Medical College & Hospital, Dhaka', 258),
('Port City International University', 259),
('Premier University, Chittagong', 260),
('Presidency University', 261),
('Prime Medical College, Rangpur', 262),
('Prime University', 263),
('Primeasia University', 264),
('Pundra University of Science & Technology', 265),
('Queens University', 266),
('R.T.M Al-Kabir Technical University', 267),
('Rabindra Maitree University, Kushtia', 268),
('Rabindra University, Bangladesh', 269),
('Rajshahi Medical College', 270),
('Rajshahi Medical University', 271),
('Rajshahi Science & Technology University (RSTU), Natore', 272),
('Rajshahi University', 273),
('Rajshahi University of Engineering & Technology', 274),
('Ranada Prasad Shaha University', 275),
('Rangamati Science and Technology University', 276),
('Rangpur Community Hospital Medical College', 277),
('Rangpur Medical College', 278),
('Rangpur University', 279),
('Royal University of Dhaka', 280),
('Rupayan A.K.M Shamsuzzoha University', 281),
('Sahabuddin Medical College and Hospital', 282),
('Samaj Vittik Medical College, Mirzanagar, Savar', 283),
('Satkhira Medical College', 284),
('Shah Makhdum Management University, Rajshahi', 285),
('Shahabuddin Medical College, Dhaka', 286),
('Shaheed Nazrul Islam Medical College', 287),
('Shaheed Suhrawardy Medical College', 288),
('Shaheed Ziaur Rahman Medical College', 289),
('Shahjalal University of Science & Technology', 290),
('Shanto Mariam University of Creative Technology', 291),
('Sheikh Fazilatunnesa Mujib University', 292),
('Sheikh Hasina University', 293),
('Sheikh Sayera Khatun Medical College, Gopalganj', 294),
('Sher-e-Bangla Agricultural University', 295),
('Sher-E-Bangla Medical College', 296),
('Sir Salimullah Medical College', 297),
('Sonargaon University', 298),
('South Asian University', 299),
('Southeast University', 300),
('Southern Medical College, Chittagong', 301),
('Southern University Bangladesh', 302),
('Southern University of Bangladesh, Chittagong', 303),
('Stamford University, Bangladesh', 304),
('State University Of Bangladesh', 305),
('Sylhet Agricultural University', 306),
('Sylhet Engineering College', 307),
('Sylhet International University, Sylhet', 308),
('Sylhet Medical University', 309),
('Sylhet Women`s Medical College, Sylhet', 310),
('Tagore University of Creative Arts, Uttara, Dhaka, Bangladesh', 311),
('Tairunnessa Memorial Medical College, Gazipur', 312),
('The International University of Scholars', 313),
('The Millennium University', 314),
('The Peoples University of Bangladesh', 315),
('The University of Asia Pacific', 316),
('Times University, Bangladesh', 317),
('TMSS Medical College,Bogra', 318),
('Trust University, Barishal', 319),
('United International University', 320),
('University of Asia Pacific', 321),
('University of Barisal', 322),
('University of Brahmanbaria', 323),
('University of Chittagong', 324),
('University of Creative Technology, Chittagong', 325),
('University of Development Alternative', 326),
('University of Dhaka', 327),
('University of Global Village', 328),
('University of Information Technology & Sciences', 329),
('University of Liberal Arts Bangladesh', 330),
('University of Rajshahi', 331),
('University of Science & Technology, Chittagong', 332),
('University of Skill Enrichment and Technology', 333),
('University of South Asia', 334),
('Uttara Adhunik Medical College,Dhaka', 335),
('Uttara University', 336),
('Varendra University', 337),
('Victoria University of Bangladesh', 338),
('World University of Bangladesh', 339),
('Z. H. Sikder Women`s Medical College', 340),
('Z.H Sikder University of Science & Technology', 341),
('Z.N.R.F. University of Management Sciences', 342),
('Others', 999);

-- --------------------------------------------------------

--
-- Table structure for table `venue_att_test`
--

CREATE TABLE IF NOT EXISTS `venue_att_test` (
  `sl.` int(50) NOT NULL AUTO_INCREMENT,
  `post_code` varchar(10) NOT NULL,
  `center_code` varchar(10) NOT NULL,
  `exam_center` varchar(200) DEFAULT NULL,
  `building` varchar(100) DEFAULT NULL,
  `floor` varchar(50) DEFAULT NULL,
  `room_no` varchar(100) NOT NULL,
  `start_roll` bigint(15) NOT NULL,
  `end_roll` bigint(15) NOT NULL,
  `total` varchar(10) NOT NULL,
  `exam_date_time` varchar(100) NOT NULL,
  `written_exam_time` varchar(100) NOT NULL,
  `viva_exm_time` varchar(100) NOT NULL,
  UNIQUE KEY `sl.` (`sl.`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `venue_instruction_test`
--

CREATE TABLE IF NOT EXISTS `venue_instruction_test` (
  `sl` int(5) NOT NULL,
  `userID` varchar(100) NOT NULL,
  `paswd` varchar(100) NOT NULL,
  `post_code` varchar(15) NOT NULL,
  `org_name` varchar(300) NOT NULL,
  `auth_name` varchar(300) NOT NULL,
  `position` varchar(300) NOT NULL,
  `name_of_dept` varchar(300) NOT NULL,
  `ministry_name` varchar(300) NOT NULL,
  `card_issue_day` int(5) NOT NULL,
  `card_issue_month` int(5) NOT NULL,
  `card_issue_year` int(10) NOT NULL,
  `card_end_day` int(5) NOT NULL,
  `card_end_month` int(5) NOT NULL,
  `card_end_year` int(10) NOT NULL,
  `ins_01` varchar(300) NOT NULL,
  `ins_02` text NOT NULL,
  `ins_03` varchar(300) NOT NULL,
  `ins_04` varchar(300) NOT NULL,
  `ins_05` varchar(300) NOT NULL,
  `ins_06` varchar(300) NOT NULL,
  `ins_07` varchar(300) NOT NULL,
  `ins_08` text NOT NULL,
  `ins_09` text NOT NULL,
  `ins_10` text NOT NULL,
  `ins_11` text NOT NULL,
  `ins_12` varchar(300) NOT NULL,
  `ins_13` varchar(300) NOT NULL,
  `ins_14` varchar(300) NOT NULL,
  `ins_15` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `venue_selected`
--

CREATE TABLE IF NOT EXISTS `venue_selected` (
  `sl.` int(5) NOT NULL AUTO_INCREMENT,
  `post_code` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `exam_center` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `room_no` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_roll` bigint(15) NOT NULL,
  `end_roll` bigint(15) NOT NULL,
  `total` int(100) NOT NULL,
  `exam_date_time` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `exm_time` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `viva_exm_time` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `sl.` (`sl.`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `venue_selected_applicant`
--

CREATE TABLE IF NOT EXISTS `venue_selected_applicant` (
  `user` varchar(20) CHARACTER SET latin2 COLLATE latin2_bin NOT NULL,
  `pcode` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `post_code` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `post_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `applicant` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `father` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mother` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `venue_test`
--

CREATE TABLE IF NOT EXISTS `venue_test` (
  `sl.` int(50) NOT NULL AUTO_INCREMENT,
  `post_code` varchar(10) NOT NULL,
  `exam_center` varchar(200) DEFAULT NULL,
  `building` varchar(100) NOT NULL,
  `floor` varchar(100) NOT NULL,
  `room_no` varchar(150) NOT NULL,
  `start_roll` bigint(15) NOT NULL,
  `end_roll` bigint(15) NOT NULL,
  `total` varchar(10) NOT NULL,
  `exam_date_time` varchar(100) NOT NULL,
  `written_exam_time` varchar(100) NOT NULL,
  `viva_exm_time` varchar(100) NOT NULL,
  UNIQUE KEY `sl.` (`sl.`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE IF NOT EXISTS `verification` (
  `user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `roll` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `verification`
--

INSERT INTO `verification` (`user`, `password`) VALUES
('vas', 'vas');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
