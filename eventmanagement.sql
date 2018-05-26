-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2016 at 05:50 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` varchar(32) NOT NULL,
  `event_name` varchar(32) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `location` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `date`, `start_time`, `end_time`, `location`) VALUES
('', 'ASD', '2016-10-12', '11:11:00', '11:11:00', 'qsadad'),
('11111', 'ASD', '2016-10-12', '11:11:00', '11:11:00', 'qsadad'),
('11111123333', 'ASD', '2016-10-12', '11:11:00', '11:11:00', 'qsadad'),
('111111233335', 'ASD', '2016-10-12', '11:11:00', '11:11:00', 'qsadad'),
('333', 'ASD', '2016-10-12', '11:11:00', '11:11:00', 'qsadad'),
('4', 'ASD', '2016-10-12', '11:11:00', '11:11:00', 'qsadad'),
('5', 'ASD', '2016-10-12', '11:11:00', '11:11:00', 'qsadad'),
('wwww', 'sdsd', '2016-10-15', '11:11:00', '11:11:00', 'sdass'),
('2222222222222', 'dfadf', '2016-10-22', '21:22:00', '14:22:00', 'Panaksfa'),
('bbw', 'dd', '2016-10-26', '15:03:00', '14:22:00', 'sdda'),
('xz', 'xcx', '2016-10-11', '03:33:00', '02:02:00', 'sas'),
('see', 'sd', '2016-10-15', '02:32:00', '02:23:00', 'aa'),
('2223455', 'erer', '0001-11-11', '11:11:00', '11:11:00', '1111'),
('1111323243', '454543', '0011-11-11', '11:11:00', '11:11:00', 'eqwqwq'),
('qqqq', 'wwww', '0011-11-11', '11:11:00', '11:11:00', '3wewe'),
('aaaa', 'ssss', '0111-11-11', '11:11:00', '11:11:00', '11111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
