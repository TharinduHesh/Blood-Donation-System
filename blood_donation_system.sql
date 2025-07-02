-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 09:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood donation system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(20) NOT NULL,
  `name` varchar(128) NOT NULL,
  `contactNo` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `contactNo`, `email`, `pw`) VALUES
('admin001', 'Vibath Madhura Kalhara Jayasundara', 768811309, 'vibathmkj0827@gmail.com', '123456'),
('admin002', 'Kavindu Liyanage', 765544321, 'kaviliyee@gmail.com', 'kavindu'),
('admin003', 'Theekshana Rathnayake', 783356726, 'theeksha@gmail.com', 'theeksha');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `name` varchar(128) NOT NULL,
  `b_bank_id` int(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contactNo` int(10) NOT NULL,
  `Address` varchar(128) NOT NULL,
  `pw` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`name`, `b_bank_id`, `email`, `contactNo`, `Address`, `pw`) VALUES
('Janani Wickramasinghe\r\n', 6973, 'janani.wick@gmail.com', 754545455, 'No 23/A, Pallethalawinna Katugastota Kandy\r\n', '1234'),
('Shehani Fernando\r\n', 6974, 'shehanifdo@gmail.com', 742342342, 'No 45 Wasana mawatha Colombo\r\n', '123456'),
('Shalitha jayarathna\r\n', 6975, 'shali.jaya@gmail.com', 767676860, 'No 23/A Lagamuwa Road Kadugannawa\r\n', 'shali');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `contactNo` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `name`, `contactNo`, `email`, `msg`) VALUES
(12, 'Kavindu Jayasundara\r\n', 762345678, 'kavi.jaya23@gmail.com', 'Good worthy website\r\n'),
(13, 'Methmi Karunanayaka\r\n', 754534234, 'methmikaru@gmail.com', 'Good job\r\n'),
(14, 'Vihanga Ranasinghe\r\n', 714589456, 'vihangarana23@gmail.com', 'Thank you for your support\r\n'),
(15, 'Adithya Bandara\r\n', 761234569, 'adiban@gmail.com', 'Best blood donation site I had ever met\r\n'),
(16, 'Amanda Dissanayaka\r\n', 741234123, 'amandadiss@gmail.com', 'Nice website');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `name` varchar(128) NOT NULL,
  `contactNo` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `amount` int(11) NOT NULL,
  `donationID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`name`, `contactNo`, `email`, `message`, `amount`, `donationID`) VALUES
('Nishadi Rajapakse\r\n', 977256728, 'nishadi@gmail.com', 'Donation for blood camp\r\n', 55000, 5055),
('Chathura Kariyawasam\r\n', 675907642, 'chathuK@gmail.com', 'Donation\r\n', 10000, 5056),
('Kaveesha Dissanayake\r\n', 356171897, 'kaveeD@gmail.com', 'Funds for blood donations', 7000, 5057),
('Sachin Gamage\r\n', 1526785427, 'sachin123@gmail.com', 'Funds\r\n', 7500, 5058),
('Hiran Fernando\r\n', 567835683, 'Hiran22@gmail.com', 'Donations\r\n', 2500, 5059),
('Kasun', 776655443, 'KasunMa@gmail.com', 'Supporting You', 45000, 5060);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `d_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contactNo` int(10) NOT NULL,
  `bloodType` varchar(5) NOT NULL,
  `dob` varchar(11) NOT NULL,
  `age` int(11) NOT NULL,
  `pw` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`d_id`, `name`, `email`, `contactNo`, `bloodType`, `dob`, `age`, `pw`) VALUES
(10017, 'vibath madhura kalhara', 'vibathrrck@gmail.com', 768811309, 'B+', '2002/08/27', 22, '1234'),
(10019, 'matheesha', 'mathee@gmail.com', 775358517, 'A', '1974/09/5', 50, '12345'),
(10020, 'Lasitha', 'lasitha@gmail.com', 76543413, 'O-', '2000/05/30', 24, 'lasitha');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `date` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `name`, `date`, `loc`, `time`) VALUES
(6, '\"Heartbeat Heroes: Be a Lifesaver, Donate Blood Today\"', '01/06/2024 to 05/06/2024', 'Kandy Blood Donation Center', '10:00 AM to 6:00 PM'),
(7, '\"Lifeblood Drive: Saving Lives, One Donation at a Time\"', '15/05/2024 to 20/05/2024, 9:00 AM', 'Colombo Blood Center', '9:00 AM to 5:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hcp_id` int(20) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `contactNo` int(10) NOT NULL,
  `profession` varchar(128) NOT NULL,
  `hospital_id` varchar(20) NOT NULL,
  `hospital_name` varchar(128) NOT NULL,
  `pw` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hcp_id`, `name`, `email`, `contactNo`, `profession`, `hospital_id`, `hospital_name`, `pw`) VALUES
(3008, 'Kavindu Liyanage', 'kavi@gmail.com', 783645236, 'Doctor', '1098', 'Teaching Hopital Gampola', '12345'),
(3009, 'Anuradha Perera', 'anuradhap@gmail.com', 712345679, 'Doctor', '1672', 'Sri Jayawardhanapura general  hospital', 'anuradha'),
(3010, 'Janith WIjethunga', 'janithwije@gmail.com', 724509090, 'Doctor', '1345', 'Teaching Hospital Peradeniya', 'janith');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news`) VALUES
(6, 'Blood donations in Sri Lanka have increased from 2% last year.'),
(7, 'Teenagers\' interest about blood donation is increased');

-- --------------------------------------------------------

--
-- Table structure for table `request_bank`
--

CREATE TABLE `request_bank` (
  `req_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `phone` int(10) NOT NULL,
  `date` date NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_bank`
--

INSERT INTO `request_bank` (`req_id`, `name`, `phone`, `date`, `message`) VALUES
(8, 'Kandy', 877181756, '2024-05-03', 'Need A+'),
(9, 'Anuradhapura', 845612789, '2024-04-16', 'Need B-'),
(10, 'Kegalle\r\n', 1672683892, '2024-05-01', 'Need O+ \r\n'),
(11, 'Gampola', 812563762, '2024-05-03', 'Need A- As Soon as possible');

-- --------------------------------------------------------

--
-- Table structure for table `request_hos`
--

CREATE TABLE `request_hos` (
  `req_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `phone` int(10) NOT NULL,
  `date` date NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_hos`
--

INSERT INTO `request_hos` (`req_id`, `name`, `phone`, `date`, `message`) VALUES
(11, 'Base Hospital Homagama\r\n', 814567890, '2024-05-05', 'Need A- As soon as possible\r\n'),
(12, 'Teaching Hospital Kandy\r\n', 783456790, '2024-04-21', 'Need O-\r\n'),
(13, 'Teaching Hospital Kandy\r\n', 783456790, '2024-03-10', 'Need A-\r\n'),
(15, 'Kalubowila teaching hospital', 546767890, '2024-05-02', 'Need AB-');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `v_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contactNo` int(10) NOT NULL,
  `address` varchar(128) NOT NULL,
  `pw` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`v_id`, `name`, `email`, `contactNo`, `address`, `pw`) VALUES
(1004, 'Kasun Marasinghe', 'KasunMa@gmail.com', 872354678, 'No: 62 Gampola road, Peradeniya\r\n', 'kasun'),
(1005, 'Sanduni Ariyawansha\r\n', 'Sanduni97@gmail.com', 217856301, 'No: 2/68 Waligalle, Gampola\r\n', 'sandu01'),
(1006, 'Nishan Subasinghe', 'Nishan94@gmail.com', 676146280, 'No: 21 Colombo Rd, Kadugnnawa', 'nishaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`b_bank_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`donationID`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hcp_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `request_bank`
--
ALTER TABLE `request_bank`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `request_hos`
--
ALTER TABLE `request_hos`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `b_bank_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6979;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `donationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5061;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10021;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hcp_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3011;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `request_bank`
--
ALTER TABLE `request_bank`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `request_hos`
--
ALTER TABLE `request_hos`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
