-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 06:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `couriers`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agent`
--

CREATE TABLE `tbl_agent` (
  `a_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `a_contact` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `agent_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_agent`
--

INSERT INTO `tbl_agent` (`a_id`, `u_id`, `a_contact`, `b_id`, `status`, `agent_name`) VALUES
(1, 2, 3212155, 3, 0, 'ilyas'),
(2, 4, 33102156, 6, 0, 'Ali'),
(3, 5, 33103145, 9, 0, 'Faiz'),
(4, 1, 34687532, 3, 1, ',mmbmfghg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

CREATE TABLE `tbl_branch` (
  `b_id` int(11) NOT NULL,
  `ci_id` int(11) NOT NULL,
  `b_address` varchar(50) NOT NULL,
  `b_contact` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_branch`
--

INSERT INTO `tbl_branch` (`b_id`, `ci_id`, `b_address`, `b_contact`, `status`) VALUES
(3, 2, 'thfdgzvzds', 3333925, 0),
(6, 1, 'thfdgzvzds', 3333925, 0),
(9, 3, 'thfdgzvzds', 2147483647, 0),
(13, 1, 'jkjkhjkjkv', 2140047, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `ci_id` int(11) NOT NULL,
  `ci_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`ci_id`, `ci_name`, `status`) VALUES
(1, 'peshawar', 1),
(2, 'Hyedrabad', 0),
(3, 'Karachi', 0),
(4, 'pishawar2143524', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `co_id` int(11) NOT NULL,
  `co_desc` varchar(100) NOT NULL,
  `per_kg` int(11) NOT NULL,
  `co_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `per_gram` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`co_id`, `co_desc`, `per_kg`, `co_name`, `status`, `per_gram`) VALUES
(1, 'This service delivers the shipments the day after CMS receives them.', 900, 'overnight', 0, 50),
(2, 'The company will sent you the parcel on the same day through air frieghts', 1000, 'same day delivery', 0, 100),
(3, 'This service will sent you the parcel as per companies avalability.', 800, 'DHL', 0, 30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `or_id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `sender_name` varchar(50) NOT NULL,
  `sender_email` varchar(50) NOT NULL,
  `sender_address` varchar(50) NOT NULL,
  `sender_phoneno` int(20) NOT NULL,
  `receiver_name` varchar(50) NOT NULL,
  `receiver_email` varchar(50) NOT NULL,
  `receiver_address` varchar(50) NOT NULL,
  `receiver_phoneno` bigint(20) NOT NULL,
  `agent_from` int(11) DEFAULT NULL,
  `agent_to` int(20) DEFAULT NULL,
  `order_weight` varchar(20) NOT NULL,
  `order_distance` int(20) NOT NULL,
  `stat` varchar(50) NOT NULL,
  `locationfrom` int(11) DEFAULT NULL,
  `location_to` int(11) DEFAULT NULL,
  `co_id` int(11) DEFAULT NULL,
  `total_charges` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`or_id`, `u_id`, `sender_name`, `sender_email`, `sender_address`, `sender_phoneno`, `receiver_name`, `receiver_email`, `receiver_address`, `receiver_phoneno`, `agent_from`, `agent_to`, `order_weight`, `order_distance`, `stat`, `locationfrom`, `location_to`, `co_id`, `total_charges`) VALUES
(1, 3, 'abc', 'abc@gmail.com', 'F.B. Area R-12 Block18,Karachi', 15511152, 'battu', 'battu@gmail.com', '       F.B. Area R-12 Block18,peshawar', 4421501221, 1, 4, '4kg', 1600, 'delivered', 3, 3, 2, 2700),
(3, 3, 'hello', 'hello@gmail.com', 'nghngn', 15511152, 'hgnghn', 'nghnghn@gmail.com', 'nhgnf', 67567, 2, 1, '56', 46, 'shipped', 2, 1, 2, 676);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pricing`
--

CREATE TABLE `tbl_pricing` (
  `p_id` int(11) NOT NULL,
  `p_parameter` varchar(50) NOT NULL,
  `p_price` int(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pricing`
--

INSERT INTO `tbl_pricing` (`p_id`, `p_parameter`, `p_price`, `status`) VALUES
(1, 'per kg', 900, 0),
(2, 'per gram', 90, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `r_id` int(11) NOT NULL,
  `r_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`r_id`, `r_name`, `status`) VALUES
(1, 'admin', 0),
(2, 'user', 0),
(3, 'agent', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `r_id` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`u_id`, `u_name`, `u_email`, `r_id`, `password`, `status`) VALUES
(1, 'admin12', 'admin@gmail.com', 1, 'admin12', 0),
(2, 'ilyas', 'kapoorr@gmail.com', 3, 'ilyas12', 0),
(3, 'ibrahim', 'ibrahim@gmail.com', 2, 'ibrahim12', 0),
(4, 'Ali', 'Ali@gmail.com', 3, 'Ali12', 0),
(5, 'Faiz', 'Faiz@gmail.com', 3, 'faiz12', 0),
(6, 'maria ', 'maa@gmail.com', 3, 'maria12', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agent`
--
ALTER TABLE `tbl_agent`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `fk` (`b_id`),
  ADD KEY `fk1` (`u_id`);

--
-- Indexes for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `fk2` (`ci_id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`ci_id`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`or_id`),
  ADD KEY `fk6` (`u_id`),
  ADD KEY `fk7` (`co_id`),
  ADD KEY `fk8` (`locationfrom`),
  ADD KEY `fk9` (`location_to`),
  ADD KEY `fk10` (`agent_from`),
  ADD KEY `fk11` (`agent_to`);

--
-- Indexes for table `tbl_pricing`
--
ALTER TABLE `tbl_pricing`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `fk4` (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agent`
--
ALTER TABLE `tbl_agent`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `ci_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pricing`
--
ALTER TABLE `tbl_pricing`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_agent`
--
ALTER TABLE `tbl_agent`
  ADD CONSTRAINT `fk` FOREIGN KEY (`b_id`) REFERENCES `tbl_branch` (`b_id`),
  ADD CONSTRAINT `fk1` FOREIGN KEY (`u_id`) REFERENCES `tbl_user` (`u_id`);

--
-- Constraints for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`ci_id`) REFERENCES `tbl_city` (`ci_id`);

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `fk10` FOREIGN KEY (`agent_from`) REFERENCES `tbl_agent` (`a_id`),
  ADD CONSTRAINT `fk11` FOREIGN KEY (`agent_to`) REFERENCES `tbl_agent` (`a_id`),
  ADD CONSTRAINT `fk6` FOREIGN KEY (`u_id`) REFERENCES `tbl_user` (`u_id`),
  ADD CONSTRAINT `fk8` FOREIGN KEY (`locationfrom`) REFERENCES `tbl_city` (`ci_id`),
  ADD CONSTRAINT `fk9` FOREIGN KEY (`location_to`) REFERENCES `tbl_city` (`ci_id`),
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`co_id`) REFERENCES `tbl_company` (`co_id`);

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `fk4` FOREIGN KEY (`r_id`) REFERENCES `tbl_role` (`r_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
