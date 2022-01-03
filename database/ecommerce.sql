-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 10:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `name`) VALUES
(2, 'woman'),
(5, 'man');

-- --------------------------------------------------------

--
-- Table structure for table `c_order`
--

CREATE TABLE `c_order` (
  `o_id` int(11) NOT NULL,
  `p_name` text NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_order`
--

INSERT INTO `c_order` (`o_id`, `p_name`, `price`, `qty`, `total`, `image`) VALUES
(8, 'Women Pant Collectons', 900, 1, 900, 'p4.jpg'),
(8, 'Awesome Bags Collection', 2500, 1, 2500, 'p3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `o_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `c_name` text NOT NULL,
  `p_number` text NOT NULL,
  `city` text NOT NULL,
  `p_code` text NOT NULL,
  `c_address` text NOT NULL,
  `total_p` int(11) NOT NULL,
  `cart_t` int(11) NOT NULL,
  `p_method` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`o_id`, `c_id`, `c_name`, `p_number`, `city`, `p_code`, `c_address`, `total_p`, `cart_t`, `p_method`, `date`, `status`) VALUES
(8, 2, 'Rahat', '03170295857', 'Karachi', '123243', 'Area 5D, 81/10, Landhi # 06', 2, 3400, 'COD', '2021-12-28 15:12:03', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `pname` text NOT NULL,
  `category` text NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `trending` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `category`, `price`, `stock`, `image`, `date`, `trending`) VALUES
(1, 'Women Hot Collection', 'Woman', 1200, 6, 'p1.jpg', '2021-12-26 20:40:40', 'Yes'),
(24, 'Black Sunglass For Man', 'Man', 1000, 0, 'p8.jpg', '2021-12-20 12:53:17', 'No'),
(25, 'Awesome Pink Show', 'Woman', 1500, 5, 'p2.jpg', '2021-12-26 20:10:27', 'Yes'),
(26, 'Awesome Bags Collection', 'Woman', 2500, 11, 'p3.jpg', '2021-12-28 15:12:04', 'Yes'),
(27, 'Women Pant Collectons', 'Man', 900, 9, 'p4.jpg', '2021-12-28 15:12:04', 'Yes'),
(28, 'Awesome Cap For Women', 'Woman', 500, 8, 'p6.jpg', '2021-12-26 20:41:09', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `email`, `password`, `role`) VALUES
(1, 'syedowaisnoor@gmail.com', '1234', 'admin'),
(2, 'admin@gmail.com', '123456789', 'customer'),
(3, 'ahsan@gmail.com', '123456789', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
