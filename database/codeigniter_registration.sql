-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 09:09 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `location` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `gender`, `dob`, `image`, `location`) VALUES
(1, 'Md. Abdul Kader Zilani', 'carlosmaruf@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'male', '28/09/2018', 'uploads/img/1536993072_34859915_1701088176664924_4774661846714023936_n.jpg', 0),
(2, 'Md. Abdul Kader Zilani', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'female', '16/09/2018', 'uploads/img/1536993202_34274834_962314693928178_8212944700882026496_n.jpg', 0),
(3, 'Md. Abdul Kader Zilani', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'female', '16/09/2018', 'uploads/img/1536993308_34274834_962314693928178_8212944700882026496_n.jpg', 0),
(4, 'Md. Abdul Kader Zilani', 'carlosmaruf@gmail.com', '674f3c2c1a8a6f90461e8a66fb5550ba', 'male', '21/09/2018', 'uploads/img/1536994391_41432051_1686277844827769_5835564024896421888_n.jpg', 0),
(5, 'Md. Abdul Kader Zilani', 'carlosmaruf@gmail.com', '674f3c2c1a8a6f90461e8a66fb5550ba', 'male', '21/09/2018', 'uploads/img/1536994536_41432051_1686277844827769_5835564024896421888_n.jpg', 0),
(6, 'Golden Package', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'female', '05/09/2018', '', 0),
(7, 'Golden Package', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'female', '05/09/2018', '', 0),
(8, 'Silver', 'carlosmaruf@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'male', '29/09/2018', 'uploads/img/1536995161_41432051_1686277844827769_5835564024896421888_n.jpg', 0),
(9, 'new member', 'carlosmaruf@gmail.com', '674f3c2c1a8a6f90461e8a66fb5550ba', 'female', '06/09/2018', 'uploads/img/1536995196_40348272_1880449895370069_1106332654317338624_n.jpg', 0),
(10, 'Golden Package', 'carlosmaruf@gmail.com', '674f3c2c1a8a6f90461e8a66fb5550ba', 'male', '02/09/2018', 'uploads/img/1536995272_business_deal_for_social_media_marketing_with_thank_you_powerpoint_slides_Slide01.jpg', 0),
(11, 'Golden Package', 'carlosmaruf@gmail.com', '674f3c2c1a8a6f90461e8a66fb5550ba', 'male', '04/09/2018', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
