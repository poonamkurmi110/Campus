-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2018 at 05:58 AM
-- Server version: 5.1.54
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `campusdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE IF NOT EXISTS `tbladmin` (
  `userid` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `userid` (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`userid`, `username`, `password`) VALUES
(1, 'sakshi', 'sakshi');

-- --------------------------------------------------------

--
-- Table structure for table `tblcomreg`
--

CREATE TABLE IF NOT EXISTS `tblcomreg` (
  `userid` int(10) NOT NULL AUTO_INCREMENT,
  `companyname` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `address` varchar(70) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `website` varchar(30) NOT NULL,
  `postno` int(10) NOT NULL,
  `designation` varchar(40) NOT NULL,
  `salary` int(10) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `userid` (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tblcomreg`
--

INSERT INTO `tblcomreg` (`userid`, `companyname`, `email`, `password`, `mobileno`, `address`, `city`, `state`, `branch`, `website`, `postno`, `designation`, `salary`) VALUES
(1, 'wkjdkhiqj', 'sss@gmail.com', 'agrawal', 2147483647, 'kjqoiolk', 'ajhai', 'MP', 'electric', 'aljoikl.com', 0, '', 0),
(2, 'kxjitoie', 'hkjoo@gmail.com', 'sanlkJ', 2147483647, 'HXNZJBJHHH', 'zcxhkl', 'UP', 'IT', 'scds.com', 0, '', 0),
(3, 'bvjmn.,,.', 'dd@gmail.com', '433265', 1688856323, 'jht8ukkl;;', 'hg', 'MP', 'IT', 'gh.com', 0, '', 0),
(4, 'kjfos', 'sas@gmail.com', 'ashg', 2147483647, 'MSKAmajshku', 'ashdijk', 'MP', 'mechanical', 'ss.com', 0, '', 0),
(5, 'sss', 'ss@gmail.com', 'sa', 9826335684, 'civil lines', 'sagar', 'MP', 'IT', 'ss.com', 0, '', 0),
(6, 'dd', 'dd1@gmail.com', 'dd', 6862663325, 'sagar', 'sagar', 'MP', 'electric', 'dd.com', 0, '', 0),
(7, 'asdhi', 'shivani97@gmail.com', 'mjh', 6530335985, 'affa', 'sd', 'UP', 'mechanical', 'sa@gmail.com', 0, '', 0),
(8, 'asdhi', 'shivani978@gmmail.co', 'ngj', 0, 'affa', 'sd', 'UP', 'mechanical', 'sa@gmail.com', 0, '', 0),
(9, 'asdsafd', 'ddd@gmail.com', 'dd', 0, 'asdjhilkjm', 'ksajdli', 'UP', 'IT', 'dd.com', 0, 'sdsa', 0),
(10, 'asdsafd', 'ddd6@gmail.com', 'hgkh ,,', 0, 'asdjhilkjm', '25956233', 'none', 'IT', 'dd.com', 0, 'sdsa', 0),
(11, 'asdf', 'sa1@gmail.com', 'sdf', 0, 'sdfsf', 'sdf', 'UP', 'IT', 's', 0, 'sdf', 0),
(12, 'zsa', 'dddd@gmail.com', 'sd', 0, 'sasd', 'zc', 'UP', 'IT', 'sad', 0, 'sa', 0),
(13, 'sd,m', 'sd@gmail.com', 'asd', 0, 'sdfa', 'sd', 'Madhya Pradesh', 'Mechanical', 'asd', 0, 'asd', 0),
(14, 'asdngj', 'gfjgjh@gmail.com', 'fghgj', 0, 'samj', 'asm', 'MP', 'electric', 'nasj', 54, 'skakjk', 0),
(15, 'mZkjn', 'jij@gmail.com', 'mjsxhkj', 5345313223, 'xj', 'an', 'MP', 'electric', 'as', 0, 'ash', 0),
(16, ',am', 'mamsyd@gmail.com', 'zx', 5345313223, 'n', 'skj', 'UP', 'mechanical', 'aj', 2, 'kkja', 865),
(17, 'sejhil', 'jhk@gmail.com', 'sy', 5651326656, 'sa', 'AJN', 'UP', 'electric', 'guhhn.com', 986, 'MAN,', 56233),
(18, 'asmdhk', 'gh@gmail.com', 'jsfh', 1354212245, 'sn', 'skj', 'MP', 'electric', 'https://www.google.co.in/searc', 2, 'sa', 656);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE IF NOT EXISTS `tblcontact` (
  `userid` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `userid` (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`userid`, `fullname`, `email`, `message`) VALUES
(1, 'sakshi agrawal', 'sakshiagrawal291997@gmail.com', 'ajdhoiuolKLm.,');

-- --------------------------------------------------------

--
-- Table structure for table `tbljobreg`
--

CREATE TABLE IF NOT EXISTS `tbljobreg` (
  `userid` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(40) NOT NULL,
  `fathername` varchar(40) NOT NULL,
  `mothername` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contactno` bigint(10) NOT NULL,
  `day` int(2) NOT NULL,
  `month` varchar(15) NOT NULL,
  `year` int(4) NOT NULL,
  `address` varchar(40) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `userid` (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tbljobreg`
--

INSERT INTO `tbljobreg` (`userid`, `fullname`, `fathername`, `mothername`, `email`, `contactno`, `day`, `month`, `year`, `address`, `city`, `state`, `gender`, `branch`, `resume`, `password`) VALUES
(1, 'ksfjdldks', 'akjcsalk', 'aksl', 'sas@gmail.com', 2147483647, 1, 'November', 2000, 'akJLKM,', 'Damoh', 'Uttar Pradesh', 'male', 'IT', '', 'SA'),
(2, 'shivani chourasia', 'mahesh chourasia', 'radha chourasia', 'ssschourasiya08@gmail.com', 2147483647, 7, 'Augest', 1997, 'futera ward no1', 'Damoh', 'Madhya Pradesh', 'female', 'IT', '', 'sss'),
(3, 'shivani chourasia', 'mahesh chourasia', 'radha chourasia', 'shivanichourasiya97@gmail.com', 2147483647, 7, 'Augest', 1997, 'futera ward no1', 'Damoh', 'Madhya Pradesh', 'female', 'IT', '', 'augest'),
(4, 'shivani chourasia', 'mahesh chourasia', 'radha chourasia', 'shivanichourasiya971997@gmail.', 0, 7, 'Augest', 1997, 'futera ward no1', 'Damoh', 'Madhya Pradesh', 'female', 'IT', '', '1997'),
(5, 'shivani chourasia', 'mahesh chourasia', 'radha chourasia', 'shivani971997@gmail.com', 2147483647, 7, 'Augest', 1997, 'futera ward no1', 'Damoh', 'Madhya Pradesh', 'female', 'IT', '', 'as'),
(8, 'aw', 'asd', 'asd', 'sasss@gmail.com', 0, 2, 'September', 2001, 'dsa', 'Indore', 'Uttar Pradesh', 'female', 'Mechanical', '', 'sd'),
(9, 'ds', 'dsf', 'dfsd', 'fdf@gmail.com', 0, 1, 'none', 0, 'fs', 'none', 'none', '', 'none', '', 'd'),
(7, 'Noor Shaman Siddiqui', 'hafizuddin', 'parveen ', 'shaman123@gmail.com', 9826557896, 6, 'Augest', 1999, 'vikas ', 'Indore', 'Uttar Pradesh', 'female', 'IT', '', 'nss'),
(10, 'ds', 'dsf', 'dfsd', 'fddf@gmail.com', 0, 1, 'none', 0, 'fs', 'none', 'none', 'female', 'none', '', 'ff'),
(11, 'sa', 'dff', 'wejr', 'mamsyd@gmail.com', 0, 0, 'none', 0, 'dfgtrh', 'none', 'none', '', 'none', '', 'as'),
(12, 'sa', 'dff', 'wejr', 'mamsyd1@gmail.com', 0, 0, 'none', 0, 'dfgtrh', 'none', 'none', 'female', 'none', '', 'sa'),
(13, '123', '', '', '', 0, 0, 'none', 0, '', 'none', 'none', '', 'none', '', ''),
(14, '123', '', '', 'ram@gmail.com', 0, 0, 'none', 0, '', 'none', 'none', 'female', 'none', '', ''),
(15, '', '', '', 'safg@gmail.com', 0, 0, 'none', 0, '', 'none', 'none', 'male', 'none', '', ''),
(16, 'hgj', '', '', 'jyiouj@gmail.com', 0, 0, 'none', 0, '', 'none', 'none', 'male', 'none', '', ''),
(17, 'sakshi agrawal', 'rajesh kumar agrawal', 'babita agrawal', 'babita12672@gmail.com', 9165874561, 7, 'January', 1998, 'asdsad', 'Sagar', 'Madhya Pradesh', 'female', 'IT', '', 'gg'),
(18, '237698375', 'asnd', 'asd', 's@gmail.com', 0, 0, 'none', 0, 'asd', 'none', 'none', '', 'none', '', 'sa'),
(19, 'shgdu', 'ash', 'daja', 'sajkl@gmail.com', 5652366665, 0, 'none', 0, 'asd', 'none', 'none', 'female', 'none', '', 'as'),
(20, 'affef', 'asd', 'sdfs', 'ddddd@gmail.com', 5386895646, 0, 'none', 0, 'asd', 'none', 'none', '', 'none', '', 'asd'),
(21, 'ssdvfd', 'sdffd', 'sdf', 'vvv@gmail.com', 6898665652, 4, 'March', 1994, '3222', 'Indore', 'Madhya Pradesh', 'female', 'IT', '', 'a'),
(22, 'hfydiu', 'asdjh', 'sh', 'dd@gmail.com', 9866165623, 8, 'November', 2001, 'ad', 'Damoh', 'Madhya Pradesh', '', 'none', '', 'q'),
(23, 'smnan', ',ams,', 'as', 'kjll@gmail.co', 5398562632, 7, 'November', 1998, 'msajhkj', 'Sagar', 'Uttar Pradesh', '', 'Electrical', '', 'zz'),
(24, 'jhiu', 'kjuiorejrk', 'kgufijg', 'jkkh@gmail.com', 3656896526, 7, 'November', 2001, 'kdjfoekl', 'Damoh', 'Uttar Pradesh', 'female', 'Electrical', '', 'hh'),
(25, 'jjdfhdisjfk', 'djiljk', 'jdfhilsjk', 'sjdh@gmail.com', 4454152656, 7, 'March', 1998, 'mwdnklm,', 'Indore', 'Uttar Pradesh', 'female', 'IT', '28759-sa.rtf', 'aa'),
(26, 'jsdhliudj', 'sjh', 'jhgiuh', 'jh@gmail.com', 9886523269, 4, 'April', 1994, 'jhijokl', 'Indore', 'Madhya Pradesh', 'female', 'IT', '87858-ssaa.doc', 'ww'),
(27, 'mjshki', 'shdjsh', 'jhkjhkj', 'mnlkj@gmail.com', 8656523316, 5, 'November', 2001, 'anbkjnm', 'Bhopal', 'Madhya Pradesh', 'female', 'Electrical', '93046-', 'aa'),
(28, 'jsdhi', 'asjh', 'asm', 'jyiuu@gmail.com', 9898626952, 3, 'February', 1993, 'asjhkj', 'Indore', 'Madhya Pradesh', 'male', 'Mechanical', '93870-', 'ff'),
(29, 'Ajay Ahirwar', 'Hargovind Ahirwar', 'Siya Bai', 'ahirwarajay022@gmail.com', 8965879567, 1, 'December', 1996, 'new makronia sagaar', 'Sagar', 'Madhya Pradesh', 'male', 'IT', '53814-VAT PRICE.xlsx', 'Ajay@123'),
(30, 'fasyuj', 'sdjk', 'askdi', 'sdjk@gmail.com', 3596562366, 7, 'December', 2002, 'asakjk', 'Bhopal', 'Madhya Pradesh', 'male', 'Electrical', '69800-', 'sa');
