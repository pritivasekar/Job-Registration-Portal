-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 12:31 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_jobs`
--

CREATE TABLE `available_jobs` (
  `Name` varchar(255) NOT NULL,
  `Business Name` varchar(255) NOT NULL,
  `workers_want_for` varchar(255) NOT NULL,
  `Phone_no` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `E-mail` varchar(255) NOT NULL,
  `Salary` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available_jobs`
--

INSERT INTO `available_jobs` (`Name`, `Business Name`, `workers_want_for`, `Phone_no`, `Address`, `E-mail`, `Salary`) VALUES
('sharma varun', 'sharma industries', 'manager', '08080958421', 'Aran,Tal-Madha,Dist-Solapur', '2000@gmail.com', 0),
('Abhishek Vasekar', 'sharma industries', 'clerk', '0808 095 8421', 'Aran,Tal-Madha,Dist-Solapur', 'abcd@gmail.com', 0),
(' Vasekar', 'vasekar industries', 'manager', '0808 095 8421', 'Aran,Tal-Madha,Dist-Solapur', 'abhishek@gmail.com', 0),
('shaha', 'abc pvt.ltd', 'clerk', '12345', 'asdfg', 'asd@gmail.com', 2334),
('Abhishek Vasekar', 'sdf ghj', 'clerk', '0808 095 8421', 'Aran,Tal-Madha,Dist-Solapur', 'geea@gmail.com', 0),
('shaha', 'abc pvt.ltd', 'clerk', '12345', 'asdfg', 'priti@gmail.com', 2334),
('Abhishek Vasekar', 'sdf ghj', 'clerk', '0808 095 8421', 'Aran,Tal-Madha,Dist-Solapur', 'pritivasekar2000@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `available_workers`
--

CREATE TABLE `available_workers` (
  `Name` varchar(255) NOT NULL,
  `Phone_no` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `E-Mail` varchar(255) NOT NULL,
  `Skills` varchar(255) NOT NULL,
  `Qualification` varchar(255) NOT NULL,
  `Experience` date NOT NULL,
  `Resume` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available_workers`
--

INSERT INTO `available_workers` (`Name`, `Phone_no`, `Address`, `E-Mail`, `Skills`, `Qualification`, `Experience`, `Resume`) VALUES
('Abhishek Vasekar', '0808 095 8421', 'Aran,Tal-Madha,Dist-Solapur', 'a@gmail.com', 'java', '', '0000-00-00', 0x612e747874),
('Abhishek Vasekar', '0808 095 8421', 'Aran,Tal-Madha,Dist-Solapur', 'abcdf@gmail.com', 'java', '', '0000-00-00', 0x612e747874),
('priti', '123456', 'aran', 'asdfg', 'awert', 'java', '2021-01-01', 0x31393032363239352020696420666f7220636f6375626573206d6174706f0d0a0d0a31393035313132352061646f6265),
('priti', '12345', 'aran', 'priti@gmail.com', 'sdfg', '10th', '2021-01-07', 0x31393032363239352020696420666f7220636f6375626573206d6174706f0d0a0d0a31393035313132352061646f6265),
('Abhishek Vasekar', '0808 095 8421', 'Aran,Tal-Madha,Dist-Solapur', 'pritivasekar2000@gmail.com', 'java', '', '0000-00-00', 0x69642e747874);

-- --------------------------------------------------------

--
-- Table structure for table `aw`
--

CREATE TABLE `aw` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Contactnumber` int(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `phone` int(40) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `id` int(11) NOT NULL,
  `qual` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`id`, `qual`) VALUES
(2, 'Below SSc'),
(3, '10th'),
(4, '12th'),
(5, 'Under Graduate'),
(6, 'Graduate'),
(7, 'Post Graduate');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'pritivasekar2000@gmail.com', '$2y$10$hipU5PxLB0071zzbhig8TeXXojmGy4UY6S7RwJ1a90q0wRvyoqH7e'),
(2, 'pritivasekar', '$2y$10$wvrl/TFYGEUCq3q9N72Ty.Fc5iuTUjJN7JjfTFEtV6auX33XdSCx2'),
(3, 'amitkasabe@gmail..com', '$2y$10$Xu/n7uYf0geg9mqaEx1.eenmqz3nWLQ6.MCTCy9V9dnIId9WDWbtu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_jobs`
--
ALTER TABLE `available_jobs`
  ADD PRIMARY KEY (`E-mail`);

--
-- Indexes for table `available_workers`
--
ALTER TABLE `available_workers`
  ADD PRIMARY KEY (`E-Mail`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
