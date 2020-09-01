-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 06:55 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redcrafts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('master', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `phid` int(11) NOT NULL,
  `bcategory` varchar(30) NOT NULL,
  `venue` varchar(30) NOT NULL,
  `bdate` datetime NOT NULL,
  `bookeddate` date NOT NULL,
  `bstatus` varchar(30) NOT NULL,
  `facilites` longtext NOT NULL,
  `bcharges` double NOT NULL,
  `advance` double NOT NULL,
  `apaystatus` varchar(30) NOT NULL,
  `refund_amt` double NOT NULL,
  `refund_status` varchar(20) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bid`, `uid`, `phid`, `bcategory`, `venue`, `bdate`, `bookeddate`, `bstatus`, `facilites`, `bcharges`, `advance`, `apaystatus`, `refund_amt`, `refund_status`) VALUES
(3, 1, 1, 'Anniversary', 'abc apartmment', '2019-03-23 09:00:00', '2019-03-15', 'cancelled', 'Photography,Editing', 5000, 1000, 'adv_paid', 900, 'refunded'),
(4, 1, 3, 'Pre Marriage Shoot', 'somwarpet', '2019-01-28 09:00:00', '2019-03-15', 'cancelled', 'Photography,Audio Visual Studio', 5800, 1160, '', 0, 'no'),
(5, 1, 5, 'Birthday party', 'state bank', '2019-11-21 09:11:00', '2019-03-17', 'cancelled', 'Photography', 350, 70, 'adv_paid', 0, 'no'),
(6, 2, 5, 'Family Function', 'Jyothi', '2020-02-26 08:00:00', '2019-03-18', 'approved', 'Photography', 350, 70, 'adv_paid', 0, 'no'),
(8, 2, 3, 'Wedding Function', 'Darbe', '2020-02-28 19:06:00', '2020-02-06', 'booked', 'Photography', 2000, 400, '', 0, 'no'),
(10, 1, 1, 'Birthday party', 'puttur', '2020-02-19 17:05:00', '2020-02-06', 'booked', 'Editing', 1000, 200, '', 0, 'no'),
(11, 2, 3, 'Birthday party', 'Darbe', '2020-02-19 00:00:00', '2020-02-21', 'booked', 'Photography', 2000, 400, '', 0, 'no'),
(12, 2, 3, 'Birthday party', '', '2020-02-04 00:00:00', '2020-02-21', 'booked', 'Audio Visual Studio', 1800, 360, '', 0, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `charges`
--

CREATE TABLE `charges` (
  `chid` int(11) NOT NULL,
  `phid` int(11) NOT NULL,
  `speciality` varchar(30) NOT NULL,
  `charge` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charges`
--

INSERT INTO `charges` (`chid`, `phid`, `speciality`, `charge`) VALUES
(1, 1, 'Video Production', 2000),
(3, 1, 'Photography', 4000),
(4, 1, 'Editing', 1000),
(5, 3, 'Photography', 2000),
(6, 3, 'Audio Visual Studio', 3800),
(7, 3, 'Video Production', 6000),
(8, 4, 'Event Photography', 2200),
(9, 4, 'Video Production', 4000),
(10, 2, 'Photography', 5000),
(11, 2, 'Event Photography', 6000),
(12, 5, 'Photography', 350),
(13, 5, 'Editing', 100),
(14, 6, 'Editing', 1200),
(15, 6, 'Advertising', 4000),
(16, 6, 'Event Photography', 9000),
(17, 1, 'Advertising', 5876);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `message` longtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `phone`, `message`, `date`) VALUES
(1, 'jithu', 'jithu@gmail.com', 8489943775, 'hello', '2019-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `enqid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `phid` int(11) NOT NULL,
  `enquiry` longtext NOT NULL,
  `sentdate` date NOT NULL,
  `response` longtext NOT NULL,
  `rdate` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enqid`, `uid`, `phid`, `enquiry`, `sentdate`, `response`, `rdate`, `status`) VALUES
(1, 1, 1, 'hey whats up', '2019-02-22', '', '0000-00-00', 'user_sent'),
(2, 1, 1, 'hey where are you', '2019-02-22', '', '0000-00-00', 'user_sent'),
(3, 1, 1, 'hey there', '2019-02-22', '', '0000-00-00', 'pg_sent'),
(4, 1, 2, 'hiii', '2019-03-14', '', '0000-00-00', 'user_sent'),
(5, 1, 2, 'hiii', '2019-03-14', '', '0000-00-00', 'user_sent'),
(6, 1, 2, 'what can i do for you sir....!!!', '2019-03-14', '', '0000-00-00', 'user_sent'),
(7, 1, 2, 'what can i do for you sir....!!!', '2019-03-14', '', '0000-00-00', 'user_sent');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gid` int(11) NOT NULL,
  `phid` int(11) NOT NULL,
  `gtitle` varchar(30) NOT NULL,
  `images` varchar(250) NOT NULL,
  `note` longtext NOT NULL,
  `gdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gid`, `phid`, `gtitle`, `images`, `note`, `gdate`) VALUES
(3, 1, 'Family', 'g6.jpg,ser3.jpg,ser4.jpg,t4.jpg', 'Family pics', '2019-01-30 15:51:04'),
(4, 1, 'Nature', 'ser6.jpg,ser7.jpg,ser8.jpg,ser9.jpg', 'Something about Nature', '2019-01-30 15:51:48'),
(5, 1, 'Shooting', 'g8.jpg,g9.jpg,g10.jpg,g11.jpg,g12.jpg,ser0.jpg,ser5.jpg,t1.jpg', 'About Shooting', '2019-01-30 15:53:35'),
(6, 4, 'Family', 'f1.jpg,f2.jpg,f3.jpg,f4.jpg,f5.jpg', 'family pics ', '2019-03-15 21:55:11'),
(10, 3, 'Wedding', 'w1.jpg,w2.jpg,w3.jpg,w4.jpg,w6.jpg,w7.jpg', 'Wedding', '2019-03-15 22:03:43'),
(13, 2, 'Model', 'm2.jpg,m3.jpg,m4.jpg,m5.jpg,m6.jpg', 'Modeling pics', '2019-03-15 22:22:52'),
(14, 5, 'modelling', 'fn1.jpg,fn2.jpg,fn3.jpg,fn7.jpg,g3.jpg,m1.jpg,m5.jpg,m10.jpg', 'best modelling photography stills', '2019-03-17 13:39:20'),
(15, 5, 'modelling', 'fn1.jpg,fn2.jpg,fn3.jpg,fn7.jpg,g3.jpg,m1.jpg,m5.jpg,m10.jpg', 'best modelling photography stills', '2019-03-17 13:39:21'),
(16, 5, 'Childphotograph', 'by18.jpg,baby - Copy.jpg,by1 - Copy.jpg,by2 - Copy.jpg,by2.jpg,by3 - Copy.jpg,by4 - Copy.jpg,by5.jpg,by6.jpg,by7.jpg,by8.jpg,by9.jpg,by10.jpg,by11.jpg,by12.jpg,by13.jpg,by14.jpg,by15.jpg,by16.jpg,by17.jpg', 'Quality photos', '2019-03-17 13:41:20'),
(17, 5, 'Childphotograph', 'by18.jpg,baby - Copy.jpg,by1 - Copy.jpg,by2 - Copy.jpg,by2.jpg,by3 - Copy.jpg,by4 - Copy.jpg,by5.jpg,by6.jpg,by7.jpg,by8.jpg,by9.jpg,by10.jpg,by11.jpg,by12.jpg,by13.jpg,by14.jpg,by15.jpg,by16.jpg,by17.jpg', 'Quality photos', '2019-03-17 13:41:20'),
(18, 6, 'Nature', 'na1.jpg,na2.jpg,na3.jpg,na4.jpg,na5.jpg,na6.jpg,na7.jpg,na8.jpg,na9.jpg,na10.jpg,ser6 - Copy.jpg,ser6.jpg,ser7.jpg', 'something', '2019-03-18 11:51:18');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `lid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `phid` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `pid` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `validity` int(11) NOT NULL,
  `pamt` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`pid`, `pname`, `validity`, `pamt`) VALUES
(2, 'gold', 6, 500),
(5, 'micro', 1, 100),
(6, 'nano', 2, 200),
(8, 'silver', 9, 860),
(9, 'platinum', 5, 670),
(11, 'Lava', 4, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `phid` int(11) NOT NULL,
  `phname` varchar(30) NOT NULL,
  `phimage` varchar(250) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `exp` varchar(20) NOT NULL,
  `firmname` varchar(30) NOT NULL,
  `firmaddress` varchar(40) NOT NULL,
  `location` varchar(30) NOT NULL,
  `firmcontact` bigint(20) NOT NULL,
  `firmemail` varchar(30) NOT NULL,
  `firmdescp` longtext NOT NULL,
  `phstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`phid`, `phname`, `phimage`, `gender`, `contact`, `email`, `pwd`, `dob`, `age`, `exp`, `firmname`, `firmaddress`, `location`, `firmcontact`, `firmemail`, `firmdescp`, `phstatus`) VALUES
(1, 'Sameer', '56576-g4.jpg', 'female', 8765456787, 'zono@gmail.com', 'reni1234', '1988-12-31', 30, 'twoyears', 'zonography', 'kankanady', 'Puttur', 9876545674, 'zono@gmail.com', 'all type of services', 'new'),
(2, 'Ram', '36575-4.jpg', 'male', 9654398235, 'ram@gmail.com', 'ram1234', '1997-11-08', 21, 'fouryears', 'ramstudio', 'RamStudio Darbe Puttur', 'Darbe', 9876543218, 'jh@gmail.com', 'All type of services are available', 'new'),
(3, 'Pavan', '6963-w4.jpg', 'male', 9880882047, 'paa@gmail.com', 'paa1234', '1992-01-29', 27, 'Twoyears', 'Paastudio', 'Paa Studio 2nd floor Harsha complex Darb', 'Darbe', 2345678567, 'paa@gmail.com', 'we provide good quality service', 'new'),
(4, 'kruthika', '58189-f4.jpg', 'female', 9483399005, 'kruthika@gmail.com', 'kruthi1234', '1990-02-17', 29, 'five', 'kruthistudio', 'kruthi studio, bypass road,manglore', 'Puttur', 9845278354, 'kruthi@gmail.com', 'This is a work space  to take, develop, print and duplicate Photos and etc,,,,', 'new'),
(5, 'Riya', '80979-by11.jpg', 'female', 8869432529, 'riya@gmail.com', 'riya1234', '1995-07-25', 23, 'twoyears', 'RayPhotography', 'State Bank Mangalore', 'State Bank', 7760446538, 'ray@gmail.com', 'We will provide you unique photography', 'new'),
(6, 'Rahul', '69866-na5.jpg', 'male', 9867435678, 'rahul@gmail.com', 'rahul1234', '1990-02-23', 29, '3 years', 'Rahulstudio', 'rahul studio, Bc Road', 'BC Road', 8976543267, 'raa@gmail.com', 'we provide your needs', 'new'),
(7, 'nisha', '25045-about---copy.jpg', 'male', 9480902491, 'nisha@gmail.com', '1234567890', '1999-12-30', 20, '10 yrs', 'karthik', 'kankanadi', 'Jyothy', 5432781982, 'karthik@gmail.com', 'asdfghjertyuifgh', 'new'),
(8, 'dee', '8290-m5.jpg', 'female', 7888999990, 'dee@gmail.com', '123baba', '2000-01-01', 20, '2', 'mangalore', 'sdfg', 'Jyothy', 9901456789, 'man@gmail.com', 'edfghj', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `port_id` int(11) NOT NULL,
  `phid` int(11) NOT NULL,
  `firmname` varchar(30) NOT NULL,
  `about` longtext NOT NULL,
  `wtimings` varchar(30) NOT NULL,
  `wdays` varchar(80) NOT NULL,
  `contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`port_id`, `phid`, `firmname`, `about`, `wtimings`, `wdays`, `contact`) VALUES
(1, 1, 'zonography', 'good photography', '09:00 am-08:00 pm', 'Monday,Tuesday,Wednesday', 9876567887),
(2, 3, 'Beautiful', 'we provide quality photos ', '08:00 am-07:00 pm', 'Monday,Tuesday,Wednesday,Thursday,Friday', 9456782345),
(3, 4, 'kruthistudio', 'Amazing ', '09:00 am-06:00 pm', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', 9774662897),
(4, 2, 'ramstudio', 'good photography', '06:00 am-09:00 pm', 'All', 9735628765),
(5, 5, '', '', '10:00 am-05:00 pm', 'All', 0),
(6, 6, 'Rahulstudio', 'we provide your needs', '10:00 am-09:00 pm', 'Monday,Tuesday,Wednesday,Saturday', 6789056437);

-- --------------------------------------------------------

--
-- Table structure for table `reveiw`
--

CREATE TABLE `reveiw` (
  `rid` int(11) NOT NULL,
  `phid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `review` longtext NOT NULL,
  `rdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `subid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `phid` int(11) NOT NULL,
  `subsdate` date NOT NULL,
  `subedate` date NOT NULL,
  `substatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`subid`, `pid`, `phid`, `subsdate`, `subedate`, `substatus`) VALUES
(1, 5, 1, '2019-01-30', '2019-03-02', 'active'),
(2, 2, 2, '2019-02-02', '2019-08-02', 'active'),
(5, 11, 5, '2019-03-17', '2019-07-17', 'active'),
(6, 11, 5, '2019-03-17', '2019-07-17', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fullname`, `contact`, `address`, `gender`, `email`, `pwd`) VALUES
(1, 'john', 9880882065, 'kankanady', 'male', 'john@gmail.com', 'monika1234a'),
(2, 'subbu', 9480765484, 'somwarpet', 'female', 'subbu@gmail.com', 'subbu123'),
(3, 'nisha', 1234567890, 'asd12asd', 'male', 'nisha@gmail.com', '1234567890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `phid` (`phid`);

--
-- Indexes for table `charges`
--
ALTER TABLE `charges`
  ADD PRIMARY KEY (`chid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enqid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `phid` (`phid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
  ADD PRIMARY KEY (`phid`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`port_id`);

--
-- Indexes for table `reveiw`
--
ALTER TABLE `reveiw`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`subid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `phid` (`phid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `charges`
--
ALTER TABLE `charges`
  MODIFY `chid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `photographer`
--
ALTER TABLE `photographer`
  MODIFY `phid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `port_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reveiw`
--
ALTER TABLE `reveiw`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`phid`) REFERENCES `photographer` (`phid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD CONSTRAINT `enquiry_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enquiry_ibfk_2` FOREIGN KEY (`phid`) REFERENCES `photographer` (`phid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subscription`
--
ALTER TABLE `subscription`
  ADD CONSTRAINT `subscription_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `packages` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subscription_ibfk_2` FOREIGN KEY (`phid`) REFERENCES `photographer` (`phid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
