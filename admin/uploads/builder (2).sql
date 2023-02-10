-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 05:58 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `builder`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `is_checked_out` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `quantity`, `is_checked_out`) VALUES
(33, 133, 27, 2, 0),
(36, 123, 23, 1, 1),
(37, 123, 27, 1, 1),
(38, 123, 27, 2, 1),
(39, 123, 17, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(150) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `status`) VALUES
(1, 'Interior Design', 1),
(2, 'Exterior Design', 0),
(5, 'construction tools', 0),
(11, 'Machines', 0),
(18, 'decor items', 0),
(41, 'decor bnh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contractor`
--

CREATE TABLE `contractor` (
  `id` int(10) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `cemail` varchar(30) NOT NULL,
  `contactno` int(10) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contractor`
--

INSERT INTO `contractor` (`id`, `cname`, `cemail`, `contactno`, `address`, `password`) VALUES
(1, 'qwer', 'qwer', 789564123, 'tyuioiqouioqywiuywui', '1234'),
(2, 'ammu', 'ammu@gmail.com', 2147483647, 'hgjwqhjwghjewjghg', '753159'),
(3, 'achu', 'ach@gmail.com', 2147483647, 'tyuioplkjhgffdd', '1234'),
(4, 'ais', 'anntreesaboban@gmail.com', 2147483647, 'VETTIKKATTU(HOUSE)', '9874');

-- --------------------------------------------------------

--
-- Table structure for table `estimate`
--

CREATE TABLE `estimate` (
  `est_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `cont_id` int(11) NOT NULL,
  `cost_est` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estimate`
--

INSERT INTO `estimate` (`est_id`, `project_id`, `cust_id`, `cont_id`, `cost_est`) VALUES
(1, 25, 123, 123, '100000.00'),
(2, 26, 25, 123, '800020.00'),
(3, 27, 25, 123, '2000000.00'),
(4, 28, 25, 123, '3000000.00'),
(5, 29, 25, 123, '5000000.00'),
(6, 26, 25, 133, '502020.00');

-- --------------------------------------------------------

--
-- Table structure for table `extdesign`
--

CREATE TABLE `extdesign` (
  `edes_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `cont_id` int(11) NOT NULL,
  `porch_celling` varchar(50) NOT NULL,
  `porch_tiles` varchar(50) NOT NULL,
  `ground_tiles` varchar(50) NOT NULL,
  `wall_edesign` varchar(50) NOT NULL,
  `wall_ecolor` varchar(50) NOT NULL,
  `roof_edesign` varchar(50) NOT NULL,
  `roof_ecolor` varchar(50) NOT NULL,
  `gate` varchar(50) NOT NULL,
  `upload_other` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `intdesign`
--

CREATE TABLE `intdesign` (
  `ides_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `cont_id` int(11) NOT NULL,
  `room` varchar(50) NOT NULL,
  `tiles` varchar(50) NOT NULL,
  `wall_design` varchar(50) NOT NULL,
  `wall_color` varchar(50) NOT NULL,
  `selling` varchar(50) NOT NULL,
  `upload_other` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `customer_name` varchar(250) DEFAULT NULL,
  `customer_email` varchar(250) DEFAULT NULL,
  `customer_phone` varchar(50) DEFAULT NULL,
  `customer_address` varchar(250) DEFAULT NULL,
  `payment_mode` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 = Cash on Delivery',
  `total_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `order_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT 'pending',
  `stat` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_date`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `payment_mode`, `total_amount`, `order_status`, `stat`) VALUES
(6, 123, '2022-10-23 14:11:49', 'Ann', 'a@gmail.com', '27615167251', 'test', 1, '14780.00', 1, 1),
(7, 123, '2022-10-23 20:36:41', 'Ann', 'a@gmail.com', '7896523145', 'sfdbhdjaskGFDHJSKL', 1, '10000.00', 1, 0),
(8, 123, '2022-10-23 20:51:59', 'Ann', 'a@gmail.com', '7896523145', 'hdmbfdsgfhjd', 1, '10000.00', 0, 0),
(9, 123, '2022-10-25 02:47:06', 'Annmahskjas', 'sjkdfsgfhsd@gmail.com', '7896523145', 'snbgdfdhjsakhejhd', 1, '30.00', 1, 0),
(10, 123, '2022-10-25 02:54:42', 'Ann', 'sjkdfsgfhsd@gmail.com', '7896523145', 'gfdxfghjkl', 1, '3000.00', 1, 0),
(11, 123, '2022-10-25 05:39:57', 'Ann treesa boban', 'anntreesaboban@gmail.com', '7282831872', '142A  vettickattu(h), kathalangapady mannarkayam p.o, kanjirapally', 1, '6000.00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` decimal(10,2) NOT NULL DEFAULT 0.00,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `total_price` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `total_price`) VALUES
(9, 8, 12, '4.00', '2500.00', '10000.00'),
(10, 9, 23, '1.00', '30.00', '30.00'),
(11, 10, 27, '1.00', '3000.00', '3000.00'),
(12, 11, 27, '2.00', '3000.00', '6000.00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `sell_id` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `Total_quantity` int(10) NOT NULL,
  `category_id` int(11) NOT NULL,
  `uploaded_date` date NOT NULL DEFAULT current_timestamp(),
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `sell_id`, `product_desc`, `product_image`, `price`, `Total_quantity`, `category_id`, `uploaded_date`, `status`) VALUES
(12, 'wood cuting instruments', 36, 'Aac block tool kits contain 1 .handsaw 24', 'tol1.png', 2500, 5, 5, '2022-08-23', 0),
(13, 'tol-101', 133, 'sdnsadhjsnhdsn', 'mason-tools-500x500.png', 600, 2, 5, '2022-08-24', 0),
(17, 'Karni with Metal Blade', 131, 'bellstone Heavy Duty Mason Trowel/Karni with Metal Blade (Pack of three ) for Construction Metal and Wood Trowel', '376752.jpg', 400, 5, 5, '2022-09-13', 0),
(23, 'Wall Design', 36, 'fhghjfghdgfdjh', 'decor.jpg', 30, 0, 18, '2022-09-18', 0),
(27, 'iBELL DS25-80, 9', 36, 'Dry Wall Sander with LED and Dust collection bag. PRODUCT SPECIFICATIONS:Rated voltage : 230V~50Hz;', '496395.jpg', 3000, 25, 11, '2022-09-22', 0),
(28, 'Wall Design', 131, 'fhghjfghdgfdjhjhjgdggfg', 'decor2.jpg', 300, 50, 18, '2022-09-22', 0),
(29, 'showcase decor', 131, 'This Floating shelf comes with a unique design which will make your empty wall to center stage.', 'decor3.jfif', 400, 8, 18, '2022-09-25', 0),
(30, 'living room modern interior design', 36, 'stylish living room modern interior design', 'interior.jfif', 10, 20, 1, '2022-09-25', 0),
(31, 'asduyghff', 36, 'ssugshjftdrtsdfcvgdrsdse', 'decor.jpg', 1233, 30, 11, '2022-09-29', 0),
(41, 'wood cuting instrumentshgh', 131, 'ssssssssssssssssssssssssssssssssss', 'images.jfif', 20, 20, 5, '2022-10-12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `client_name` varchar(30) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `project_loc` varchar(155) NOT NULL,
  `project_desc` varchar(155) NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL,
  `project_plan` varchar(255) NOT NULL,
  `roof_type` varchar(155) NOT NULL,
  `bricks_type` varchar(155) NOT NULL,
  `contractor_id` int(11) DEFAULT NULL,
  `estimate_id` int(11) DEFAULT NULL,
  `project_status` varchar(50) NOT NULL DEFAULT 'Pending' COMMENT 'Pending, Started, Completed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `cust_id`, `client_name`, `project_name`, `project_loc`, `project_desc`, `starting_date`, `ending_date`, `project_plan`, `roof_type`, `bricks_type`, `contractor_id`, `estimate_id`, `project_status`) VALUES
(25, 123, 'asdddddd', 'house', 'jkjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj bmnbmjbmj', 'hjdjgfyewuikqoiwoqueytrtweyuiwoqlksjhgfdertyuiwqowio', '2022-10-23', '2022-10-28', 'check.pdf', 'flat type', 'concrete bricks', 123, 1, 'Started'),
(26, 25, 'hjgjhjg', 'nmbjb bjkbjkhkjnk', 'gjhgjhgjgjgjhgjhgjhg jhghjgjhg', 'gfygf nvbhjgj nbjbjkjk hkuhkhkh', '2022-10-20', '2022-10-28', 'check.pdf', 'hjghj vhgughu', 'hnghjgvj hjg', NULL, NULL, 'Pending'),
(27, 25, 'ammu', 'nhasgdhs', 'jkjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj bmnbmjbmj', 'hjdjgfyewuikqoiwoqueytrtweyuiwoqlksjhgfdertyuiwqowio', '2022-10-27', '2023-04-20', 'check.pdf', 'snmdbcjhs', 'hnghjgvj hjg', NULL, NULL, 'Pending'),
(28, 25, 'jhdschj', 'sikdhcikuds sikduhciu', 'sjhbdjhsbj sjhidhdcdscddsjhbv', 'ksjdbckjsh dujshuicghsiuh', '2022-10-23', '2022-10-28', 'Doc1.pdf', 'dskjnckjnd sdjkbcb', 'kjsbckjbs', NULL, NULL, 'Pending'),
(29, 25, 'achubvv', 'qwert', 'gjhgjhgjgjgjhgjhgjhg jhghjgjhg', 'hjdjgfyewuikqoiwoqueytrtweyuiwoqlksjhgfdertyuiwqowio', '2022-11-02', '2023-06-22', 'NCECA2023_paper_1620.pdf', 'dskjnckjnd sdjkbcb', 'sjkadkjhsa', NULL, NULL, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `project_info`
--

CREATE TABLE `project_info` (
  `projectinfo_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `cont_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `project_status` int(11) NOT NULL,
  `project_totalcost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project_phases`
--

CREATE TABLE `project_phases` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `work` varchar(250) NOT NULL DEFAULT '',
  `progress` float NOT NULL DEFAULT 0,
  `status` varchar(20) NOT NULL DEFAULT 'Pending' COMMENT 'Pending, In Progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_phases`
--

INSERT INTO `project_phases` (`id`, `project_id`, `work`, `progress`, `status`) VALUES
(1, 25, 'bnmlk', 100, 'Completed'),
(2, 25, 'foundation', 10, 'In Progress');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contactno` int(10) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `name`, `email`, `contactno`, `address`, `password`) VALUES
(1, 'Ansa', 'ansa@gmail.com', 987456321, 'vattakullam ,mundakayam', '9898'),
(2, 'aishu', 'ais@gmail.com', 2147483647, 'varikkadathil house,idukki', '753159'),
(8, 'abc', 'abc@gmail.com', 2147483647, 'rachimukkam', '7894'),
(9, 'abcd', 'abcd@gmail.com', 2147483647, 'varikullam', 'qwer');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userEmail` varchar(40) DEFAULT NULL,
  `loginDate` date NOT NULL DEFAULT current_timestamp(),
  `loginTime` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `logout` varchar(40) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `role` varchar(11) NOT NULL DEFAULT '0',
  `status` int(20) NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `contact_no`, `role`, `status`, `code`) VALUES
(7, 'Admin', 'admin@gmail.com', '53ead9a0499a04770dc1679fa537fb89', '6282831872', 'admin', 0, ''),
(25, 'Ann', 'ann@gmail.com', 'cebb19421c206066dbb95497bea5ee36', '9865323232', 'customer', 0, '0'),
(36, 'Ann', 'annb@gmail.co', '1234', '9874563523', 'seller', 0, '0'),
(41, 'kurian', 'kurivi@gmail.com', '1234', '7896514145', 'contractor', 0, '0'),
(123, 'Ann Treesa', 'anntreesaboban@gmail.com', '53ead9a0499a04770dc1679fa537fb89', '9632587411', 'customer', 0, ''),
(127, 'agnes', 'agnesbenny641@gmail.com', '7d8a7e33dc1e96c0c0761169753e4d76', '9632587445', 'seller', 1, '320b73b95740cc2eb210404796ae2404'),
(131, 'Achu', 'annmaria@gmail.com', '6b5bf6b60874f323fcf072fcc9669fcf', '9865321414', 'seller', 0, '9482ac239457065a167ae92b680dc2cb'),
(133, 'shince s', 'shince@gmail.com', '950514b90a57e47e6833916b918a5e5d', '9632589632', 'contractor', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `worker_id` int(11) NOT NULL,
  `cont_id` int(11) NOT NULL,
  `worker_name` varchar(50) NOT NULL,
  `worker_address` varchar(200) NOT NULL,
  `work` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `ind_fk` (`product_id`),
  ADD KEY `in` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contractor`
--
ALTER TABLE `contractor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estimate`
--
ALTER TABLE `estimate`
  ADD PRIMARY KEY (`est_id`),
  ADD KEY `index_fk1` (`project_id`),
  ADD KEY `index_fk2` (`cust_id`),
  ADD KEY `index_fk3` (`cont_id`);

--
-- Indexes for table `extdesign`
--
ALTER TABLE `extdesign`
  ADD PRIMARY KEY (`edes_id`),
  ADD KEY `index_fk` (`project_id`),
  ADD KEY `index_fk1` (`cust_id`),
  ADD KEY `index_fk2` (`cont_id`);

--
-- Indexes for table `intdesign`
--
ALTER TABLE `intdesign`
  ADD PRIMARY KEY (`ides_id`),
  ADD KEY `index_fk` (`cust_id`),
  ADD KEY `index_fk1` (`project_id`),
  ADD KEY `index_fk2` (`cont_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `FK__users` (`user_id`) USING BTREE;

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `FK__orders` (`order_id`) USING BTREE,
  ADD KEY `FK__product` (`product_id`) USING BTREE;

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `index_fk` (`sell_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `index_fk` (`cust_id`);

--
-- Indexes for table `project_info`
--
ALTER TABLE `project_info`
  ADD PRIMARY KEY (`projectinfo_id`),
  ADD KEY `index_fk` (`project_id`),
  ADD KEY `index_fk1` (`cont_id`),
  ADD KEY `index_fk2` (`cust_id`);

--
-- Indexes for table `project_phases`
--
ALTER TABLE `project_phases`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`worker_id`),
  ADD KEY `index_fk` (`cont_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `contractor`
--
ALTER TABLE `contractor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `estimate`
--
ALTER TABLE `estimate`
  MODIFY `est_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `extdesign`
--
ALTER TABLE `extdesign`
  MODIFY `edes_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `intdesign`
--
ALTER TABLE `intdesign`
  MODIFY `ides_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `project_info`
--
ALTER TABLE `project_info`
  MODIFY `projectinfo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_phases`
--
ALTER TABLE `project_phases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `estimate`
--
ALTER TABLE `estimate`
  ADD CONSTRAINT `estimate_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `estimate_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `estimate_ibfk_3` FOREIGN KEY (`cont_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `extdesign`
--
ALTER TABLE `extdesign`
  ADD CONSTRAINT `extdesign_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `extdesign_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `extdesign_ibfk_3` FOREIGN KEY (`cont_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `intdesign`
--
ALTER TABLE `intdesign`
  ADD CONSTRAINT `intdesign_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `intdesign_ibfk_2` FOREIGN KEY (`cont_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `intdesign_ibfk_3` FOREIGN KEY (`project_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK__users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `FK__orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `project_info`
--
ALTER TABLE `project_info`
  ADD CONSTRAINT `project_info_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `project_info_ibfk_2` FOREIGN KEY (`cont_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `project_info_ibfk_3` FOREIGN KEY (`cust_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `worker`
--
ALTER TABLE `worker`
  ADD CONSTRAINT `worker_ibfk_1` FOREIGN KEY (`cont_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
