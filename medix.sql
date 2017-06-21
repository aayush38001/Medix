-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2016 at 07:39 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medix`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `qualification` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone1` bigint(20) NOT NULL,
  `phone2` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `license` varchar(50) NOT NULL,
  `hosname` varchar(50) NOT NULL,
  `hoslocation` varchar(30) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `yearofjoining` int(4) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`fname`, `mname`, `lname`, `gender`, `qualification`, `email`, `phone1`, `phone2`, `address`, `license`, `hosname`, `hoslocation`, `specialization`, `yearofjoining`, `password`) VALUES
('Amar', 'Singh', 'Gupta', 'Male', 'MD', 'amargupta@gmail.com', 9658741230, 2013456987, '221-B baker''s street,Indore', 'doc1234', 'Apollo', 'Indore', 'Heart', 2011, 'zxcvbnm,./'),
('Ravindra', '', 'Jadeja', 'Male', 'BDS', 'ravindra@gmail.com', 8574693215, 9685744569, 'kochi', 'doc9876', 'Rajas', 'Kochi', 'Orthodontics', 2015, 'zxcvbnm,./'),
('Sanjay', '', 'Mishra', 'Male', 'MBBS', 'sanjaymishra@gmail.com', 8574693215, 8569741236, 'delhi', 'doc6574', 'Apollo', 'Indore', 'Orthodontics', 2009, 'zxcvbnm,./');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hosname` varchar(50) NOT NULL,
  `hosid` varchar(50) NOT NULL,
  `hosemail` varchar(50) NOT NULL,
  `hosnum1` bigint(20) NOT NULL,
  `hosnum2` bigint(20) NOT NULL,
  `hoscity` varchar(50) NOT NULL,
  `hosaddress` text NOT NULL,
  `hosfax` bigint(20) NOT NULL,
  `hospassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hosname`, `hosid`, `hosemail`, `hosnum1`, `hosnum2`, `hoscity`, `hosaddress`, `hosfax`, `hospassword`) VALUES
('Apollo', 'hos1234', 'apolloindore@gmail.com', 9845632123, 4578962145, 'Indore', 'SICA School main road,Scheme No.54,Vajaynagar', 7896541230, 'asdfghjkl'),
('Suyash', 'hos3452', 'suyash@gmail.com', 7412596859, 7854685885, 'Dewas', 'dewas', 6325478951, 'asdfghjkl'),
('Chohitram hospitals', 'hos5837', 'chohitram@gmail.com', 6541239870, 2569874130, 'Indore', '52, rajiv square', 5879612435, 'asdfghjkl'),
('CHL', 'hos6789', 'chlpune@gmail.com', 9874563251, 4856971230, 'Pune', '11-MG road', 4856971230, 'asdfghjkl'),
('Rajas', 'hos9876', 'rajas@gmail.com', 6541239870, 4569871230, 'Kochi', '23 cross street', 9632587410, 'asdfghjkl');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `insuname` varchar(50) NOT NULL,
  `insuid` varchar(50) NOT NULL,
  `insunum1` bigint(20) NOT NULL,
  `insunum2` bigint(20) NOT NULL,
  `insuaddress` text NOT NULL,
  `insuemail` varchar(50) NOT NULL,
  `insufax` bigint(20) NOT NULL,
  `insupass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`insuname`, `insuid`, `insunum1`, `insunum2`, `insuaddress`, `insuemail`, `insufax`, `insupass`) VALUES
('Axa', 'insu1234', 7896541230, 9874563201, 'malaarganj, kolkata', 'axa@gmail.com', 7896541253, 'zxcvbnm,./'),
('National insurance', 'insu12380', 5554789661, 9998874562, 'nagpur', 'ni@gmail.com', 0, 'zxcvbnm,./'),
('LIC', 'insu9876', 8874123692, 8569741236, 'Chennai', 'lic@gmail.com', 9856741230, 'zxcvbnm,./');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `fname` varchar(25) NOT NULL,
  `mname` varchar(25) DEFAULT NULL,
  `lname` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `gender` char(6) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `emobile` bigint(11) NOT NULL,
  `address` text NOT NULL,
  `id` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `bmi` float NOT NULL,
  `bgroup` varchar(4) NOT NULL,
  `allergies` text NOT NULL,
  `insuid` varchar(50) NOT NULL,
  `insuname` varchar(50) NOT NULL,
  `insuemail` varchar(50) NOT NULL,
  `insuphone` bigint(11) NOT NULL,
  `insuaddress` text NOT NULL,
  `doctor` varchar(50) NOT NULL,
  `appointment` datetime NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `treated` int(1) NOT NULL,
  `activate` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`fname`, `mname`, `lname`, `dob`, `gender`, `mobile`, `emobile`, `address`, `id`, `email`, `password`, `height`, `weight`, `bmi`, `bgroup`, `allergies`, `insuid`, `insuname`, `insuemail`, `insuphone`, `insuaddress`, `doctor`, `appointment`, `hospital`, `treated`, `activate`) VALUES
('Vidhya', 'Samad', 'Barpha', '0001-01-01', 'Female', 1234567890, 1234567891, '23455666', '123456567787', 'vidhya.samad@gmail.com', 'abcd12345', 83, 25, 4, 'A+', 'fdfd', 'kjdchbscg', 'Lic', 'lic@gmail.com', 1234567895, 'delhi', 'sanjaymishra@gmail.com', '2016-05-12 10:42:06', 'apolloindore@gmail.com', 1, 1),
('Arun', 'Singh', 'Tomar', '2016-04-06', 'Male', 4758963213, 6985741230, 'lklk', '123456781234', 'arun6@gmail.com', 'qwertyuiop', 170, 90, 80, 'B+', 'dust', 'insu1267', 'Lic', 'lic@gmail.com', 9874563210, 'ojk989', 'amargupta@gmail.com', '2016-04-25 07:25:04', 'apolloindore@gmail.com', 0, 1),
('Aa', 'Aaaa', 'Aa', '0001-01-01', 'Male', 9165202323, 8602532601, 'fg', '123456789123', 'khanujarubal@gmail.com', '123456789', 152, 56, 21, 'A+', '', 'nvd', 'Lic', 'lic@gmail.com', 8525852582, 'zfd', '', '0000-00-00 00:00:00', '', 0, 1),
('Aishwarya', '', 'Shama', '1996-05-06', 'Female', 1236547895, 6985741230, 'dfsv', '123456875445', 'ash@gmail.com', 'qwertyuiop', 158, 65, 21, 'A+', '', 'insu12356', 'Lic', 'lic@gmail.com', 9874563458, 'djkjs', '', '0000-00-00 00:00:00', '', 0, 1),
('Ramesh', '', 'Suresh', '1923-06-15', 'Male', 4758963213, 6985741230, 'kashmir', '125423658558', 'ramesh@gmail.com', 'qwertyuiop', 180, 65, 21, 'A+', 'pollen', 'insu1200', 'Lic', 'lic@gmail.com', 9874563210, 'fdfg', 'amargupta@gmail.com', '2016-04-24 18:32:04', 'apolloindore@gmail.com', 1, 1),
('Akhil', '', 'Raj', '2015-05-27', 'Male', 6666548795, 5547812545, 'dharavi,mumbai', '125455469878', 'akhil@gmail.com', 'qwertyuiop', 185, 72, 23, 'A+', '', 'insu1233', 'Lic', 'lic@gmail.com', 1234567895, 'new delhi', 'sanjaymishra@gmail.com', '0000-00-00 00:00:00', '', 0, 1),
('David', '', 'Villa', '1995-08-15', 'Male', 4758963213, 6985741230, 'dsffhbds', '125478963254', 'david@gmail.com', 'qwertyuiop', 195, 85, 23, 'A+', '', 'insu12390', 'Lic', 'lic@gmail.com', 9874563210, 'dafsdgsd', 'ravindra@gmail.com', '2016-04-23 18:51:09', 'rajas@gmail.com', 1, 1),
('A', 'Xcvbnm', 'Xcvbnm', '1945-08-15', 'Male', 4758963213, 6985741230, 'lk', '125478965412', 'a@gmail.com', 'qwertyuiop', 20, 20, 21, 'A-', 'none', '35', 'Lic', 'lic@gmail.com', 9874563210, 'kgz', '', '0000-00-00 00:00:00', '', 0, 0),
('Oliver', '', 'Queen', '2016-04-12', 'Male', 0, 1111111111, 'star city', '145235789541', 'oliver@gmail.com', 'qwertyuiop', 188, 88, 21, 'B+', '', 'insu1277', 'Lic', 'lic@gmail.com', 9874563210, 'delhi', '', '0000-00-00 00:00:00', '', 0, 1),
('Ajay', 'Singh', 'Tomar', '2016-04-06', 'Male', 4758963213, 6985741230, 'kjhgf', '154789652000', 'ajay@gmail.com', 'qwertyuiop', 20, 20, 21, 'A-', '', 'insu1238', 'Lic', 'lic@gmail.com', 9874563210, 'jhgf', 'amargupta@gmail.com', '2016-04-25 18:26:25', 'apolloindore@gmail.com', 1, 1),
('Bruce', '', 'Wayne', '1985-08-15', 'Male', 4758963213, 6985741230, 'gotham city', '159357842684', 'bruce@gmail.com', 'qwertyuiop', 187, 75, 22, 'AB+', '', 'insu12365', 'National insurance', 'ni@gmail.com', 9874563210, 'star city', '', '0000-00-00 00:00:00', '', 0, 1),
('Leo', '', 'Messi', '1975-08-15', 'Male', 4758963213, 6985741230, 'f', '159753248624', 'leo@gmail.com', 'qwertyuiop', 20, 20, 21, 'A-', '', 'insu12391', 'National insurance', 'ni@gmail.com', 9874563210, 'fghj', 'amargupta@gmail.com', '2016-04-24 03:54:51', 'apolloindore@gmail.com', 1, 1),
('Chris', '', 'Gayle', '1965-08-15', 'Male', 4758963213, 6985741230, 'jamaica', '222222222222', 'gayle@gmail.com', 'qwertyuiop', 195, 100, 32, 'A+', 'flowers', 'insu123yx', 'Lic', 'lic@gmail.com', 9874563210, 'delhi', 'amargupta@gmail.com', '2016-04-24 10:41:42', 'apolloindore@gmail.com', 1, 1),
('Ankita', '', 'Jain', '1996-04-23', 'Female', 2356879456, 5642658974, 'asfdgh', '456879456879', 'ankita09@gmail.com', 'qwertyuiop', 134, 56, 21, 'A+', '', 'erty', 'Lic', 'lic@gmail.com', 9874563210, '35err', 'amargupta@gmail.com', '0000-00-00 00:00:00', '', 0, 1),
('Mojo', '', 'Jojo', '1925-12-31', 'Female', 9857454781, 9658745879, 'townsville', '789547845698', 'mojojojo@gmail.com', 'qwertyuiop', 100, 65, 21, 'A+', '', 'kjdchbscg', 'Lic', 'lic@gmail.com', 1234567895, 'dskjshskjh', 'amargupta@gmail.com', '2016-05-12 12:01:19', 'apolloindore@gmail.com', 0, 1),
('Virat', '', 'Kholi', '1993-04-15', 'Male', 4758963213, 6985741230, 'dkfjhs', '999999999999', 'virat@gmail.com', 'qwertyuiop', 184, 76, 22, 'O-', 'anushka', 'insu9999', 'Lic', 'lic@gmail.com', 9874563210, 'delhi', 'sanjaymishra@gmail.com', '2016-04-24 10:49:06', 'apolloindore@gmail.com', 0, 1),
('Bharath', '', 'Subramanian', '1995-08-15', 'Male', 7583008885, 9893032723, 'Indore', 'ad1234', 'bharath.1581995@gmail.com', 'qwertyuiop', 180, 70, 22.5, 'B+', 'dust', 'lic1234', 'LIC', 'lic@gmail.com', 9425345491, 'Mumbai', 'amargupta@gmail.com', '2016-04-18 16:56:47', 'apolloindore@gmail.com', 1, 1),
('Anant', 'Ram', 'Subramanian', '1993-10-16', 'Male', 8982257477, 654789321, 'GG-14 Scheme no. 78 vijaynagar indore', 'hfushdfouh455', 'ras.al.ghul@batman.com', 'asdfghjkl', 181, 70, 23, 'O+', '', 'bsvadmh12s', 'AXA', 'axa@batman.com', 3145697, 'Delhi', '', '0000-00-00 00:00:00', '', 0, 1),
('Arun', 'Singh', 'Tomar', '1962-08-31', 'Male', 4758963213, 6985741230, 'gwalior', 'idasdf', 'arun@gmail.com', 'qwertyuiop', 195, 95, 31, 'A+', '', 'insu1238', 'Lic', 'lic@gmail.com', 9874563210, 'delhi', 'amargupta@gmail.com', '0000-00-00 00:00:00', '', 0, 1),
('Diksa', '', 'Khanna', '1930-10-03', 'Female', 9874563215, 7458612395, 'indore', 'idwxyz', 'diksa@gmail.com', 'qwertyuiop', 140, 250, 30, 'A+', 'chocolates', 'insu1238', 'Lic', 'lic@gmail.com', 9874563210, 'kolkata', 'amargupta@gmail.com', '2016-04-17 18:42:15', 'apolloindore@gmail.com', 0, 1),
('Bhavdeep', 'Singh', 'Khanuja', '1996-02-09', 'Male', 9856471230, 7584693215, 'dk,37 scheme no.44\r\nAkriti Ecocity,Bhopal', 'qw1245', 'bhavdeep@gmail.com', 'qwertyuiop', 175, 65, 22, 'A+', 'pollen', 'fd6523', 'LIC', 'lic@gmail.com', 7458963210, 'bhopal', '', '0000-00-00 00:00:00', '', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hosid`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`insuid`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
