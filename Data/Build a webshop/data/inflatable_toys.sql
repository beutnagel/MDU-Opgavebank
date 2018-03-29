-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2017 at 03:04 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inflatable_toys`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(4) NOT NULL,
  `firstName` varchar(128) COLLATE utf8_bin NOT NULL,
  `middleName` varchar(128) COLLATE utf8_bin NOT NULL,
  `lastName` varchar(128) COLLATE utf8_bin NOT NULL,
  `email` varchar(128) COLLATE utf8_bin NOT NULL,
  `country` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstName`, `middleName`, `lastName`, `email`, `country`) VALUES
(1, 'Johnny', 'Bob', 'Hanson', 'bob@gmail.com', 'Denmark'),
(2, 'Silvia', 'Sutstein', 'Banderlust', 'bemy@banderlust.net', 'Germany'),
(3, 'Frank', '', 'Zappa', 'zap32@hotmail.com', 'Denmark'),
(4, 'Marie', 'Le', 'Pencil', 'marie1986@altavista.fr', 'France'),
(5, 'Taj', 'Machid', 'Zacharenadad', 'zachi_28@bestworld.in', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `status` varchar(64) COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `Total`, `status`, `date`) VALUES
(1, 1, 100, 'shipped', '2017-04-25 10:15:19'),
(2, 2, 299, 'received', '2017-04-25 10:15:24'),
(3, 1, 100, 'pending', '2017-04-25 15:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(6) NOT NULL,
  `sku` char(10) COLLATE utf8_bin NOT NULL,
  `price` decimal(6,0) NOT NULL,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `price`, `name`, `description`) VALUES
(1, '3283728392', '99', 'Giant Duck Pool Float', 'This giant yellow duck is made from high quality, UV resistant PVC, and it is perfect for sun lounging, pool floating and all-round family fun. At over 70 inches long, and big enough for two to ride on, our duck pool float will make swimming in the water that much more fun!'),
(2, '1000037806', '100', 'Swimline Giant Inflatable Pegasus', 'Swimline\'s Giant Inflatable Pegasus is a beautiful, mythical float you\'ll love to have for your pool. This huge, 104-inch-long inflatable pegasus has a recessed seating area that\'s comfortable for lounging, and is made from durable, heavy-duty 12 gauge PVC construction. The Giant Inflatable Pegasus pool float is the perfect way to combine relaxation and recreation in your backyard swimming pool.\r\n\r\nSuitable for ages 4+'),
(3, '1000037812', '20', 'Swimline Giant Inflatable Tiger', 'Swimline\'s Giant Inflatable Tiger is a cool and fun float you\'ll love to have for your pool. This huge, 89-inch-long inflatable tiger has a recessed seating area that\'s comfortable for lounging, and is made from durable, heavy-duty 12 gauge PVC construction. The Giant Inflatable Tiger pool float is the perfect way to combine relaxation and recreation in your backyard swimming pool.');

-- --------------------------------------------------------

--
-- Table structure for table `products_in_orders`
--

CREATE TABLE `products_in_orders` (
  `order_id` int(4) NOT NULL,
  `product_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `products_in_orders`
--

INSERT INTO `products_in_orders` (`order_id`, `product_id`) VALUES
(1, 1),
(1, 2),
(3, 2),
(3, 2),
(2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_in_orders`
--
ALTER TABLE `products_in_orders`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `products_in_orders`
--
ALTER TABLE `products_in_orders`
  ADD CONSTRAINT `products_in_orders_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `products_in_orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
