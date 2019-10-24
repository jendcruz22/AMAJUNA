-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 02:01 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amajuna`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `p_id` int(11) NOT NULL,
  `screen_size` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`p_id`, `screen_size`, `ram`, `brand`) VALUES
(15, '6', '8', 'OnePlus'),
(17, '6', '8', 'OnePlus'),
(20, '4.4', '2', 'iPhone');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_of_posting` varchar(255) NOT NULL,
  `mrp` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `description`, `date_of_posting`, `mrp`, `title`, `stock`, `image_name`, `user_id`) VALUES
(15, 'OnePlus 7T smartphone runs on Android 10 operating system. The phone is powered by Octa core processor. It has 8 GB RAM and 256 GB internal storage. OnePlus 7T smartphone has a 90 Hz LCD Panel display.', '2019-10-20 19:19:35', 20000, 'OnePlus 7T', 1, 'oneplus.png', 15),
(16, 'At Mercedes-Benz of Cary Purchasing a new vehicle is a big decision. One that should not be taken lightly. Many factors go into choosing the right vehicle.', '2019-10-20 19:21:28', 1000000, 'Mercedes Benz S Class', 2, 'mercedes.png', 15),
(17, 'OnePlus 7 Pro smartphone runs on Android v9.0 (Pie) operating system. The phone is powered by Octa core processor. It has 6 GB RAM and 128 GB internal storage. OnePlus 7 Pro smartphone has a Fluid AMOLED display.', '2019-10-23 18:31:33', 12000, 'OnePlus 7 Pro', 1, 'onep7.jpg', 15),
(18, 'The Bullet 500 is the same as the iconic Bullet 350, but with a bigger 499cc engine. The Bullet 500 is powered by a single-cylinder air-cooled 499cc mill producing 26.5bhp of power at 5,100rpm and 40.9Nm of torque at 3,800rpm.', '2019-10-23 18:38:00', 110000, 'Royal Enfield Bullet 500', 2, 'rep.jpg', 15),
(19, 'The Jaguar I-Pace has a WLTP-rated range of 292 miles (470 km) and an EPA-rated range of 234 miles (377 km). The car has a wade depth of 500 mm (20 in).', '2019-10-23 18:39:13', 3000000, 'Jaguar I-PACE', 1, 'jag.jpg', 15),
(20, 'The iPhone 6 and 6 Plus include larger 4.7 and 5.5 inches (120 and 140 mm) displays, a faster processor, upgraded cameras, improved LTE and Wi-Fi connectivity and support for a near field communications-based mobile payments offering.', '2019-10-23 18:52:37', 15000, 'iPhone 6', 3, 'iphoneprod.jpg', 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `type`, `contact_number`, `location`) VALUES
(15, 'sanket', 'sanket.dalvi.ssd@gmail.com', '81c6fa745434534c4a9633ad8c08506a', 'seller', '9619884244', 'Mumbai'),
(17, 'jenny', 'jenny@gmail.com', '202cb962ac59075b964b07152d234b70', 'buyer', '987654321', 'IC');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `p_id` int(11) NOT NULL,
  `type_of_vehicle` varchar(255) NOT NULL,
  `seating_capacity` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`p_id`, `type_of_vehicle`, `seating_capacity`, `brand`) VALUES
(16, 'Sedan', '4 + 1', 'Mercedes'),
(18, 'Bullet', '2', 'Royal Enfield'),
(19, 'Sedan', '4 + 1', 'Jaguar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD KEY `p_id` (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD CONSTRAINT `mobiles_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
