-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2026 at 04:08 AM
-- Server version: 11.8.6-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u507225362_vetrivelankapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `created_at`) VALUES
(2, 'info@vetrivelankaappi.com', '$2y$10$4MtpEhDSCHc/0xvBFxXFOOz8fLPKXoQ/6o4MJ.Xr0KkjY5v3J2uLi', '2025-12-01 18:10:30');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_image`, `status`, `created_at`) VALUES
(39, 'Coffee', '1764334405_category.png', 1, '2025-11-27 12:37:05'),
(40, 'Tea', '1764334392_category.png', 1, '2025-11-27 12:37:38'),
(41, 'Snacks', '1764334380_category.png', 1, '2025-11-27 12:38:58'),
(42, 'sweets', '1764334368_category.png', 1, '2025-11-27 12:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `product_name`, `product_image`, `price`, `description`, `status`, `created_at`) VALUES
(79, 41, 'Vegetable Puff', '1764251091_product.png', '35', 'A classic flaky, layered puff pastry square filled with a savory mixture of finely diced, spiced vegetables (potatoes, carrots, peas)', 1, '2025-11-27 13:44:51'),
(80, 41, 'Egg Puff', '1764251190_product.png', '55', 'A popular bakery staple where half a hard-boiled egg is encased in flaky puff pastry seasoned with a spicy onion-tomato masala.', 1, '2025-11-27 13:46:30'),
(81, 41, 'Samosa (Vetri Cafe Style)', '1764251246_product.png', '25', 'A deep-fried or baked triangular pastry with a thick, crispy outer crust, typically stuffed with a filling of spiced potatoes and peas.', 1, '2025-11-27 13:47:26'),
(88, 41, 'Medhu Vadai', '1767875972_product.png', '10', 'Golden-fried, crispy on the outside and soft on the inside, made from finely ground urad dal. A classic South Indian snack with a perfect balance of crunch and fluffiness.', 1, '2026-01-08 12:39:32'),
(89, 41, 'Bajji', '1767876060_product.png', '10', 'Fresh vegetables dipped in seasoned gram flour batter and deep-fried until crisp. Light, crunchy, and flavorful—best enjoyed hot with chutney or tea.', 1, '2026-01-08 12:41:00'),
(90, 41, 'Bonda', '1767876147_product.png', '10', 'Soft and fluffy fritters made from a mildly spiced batter, fried to golden perfection. Comforting, filling, and a favorite tea-time snack.', 1, '2026-01-08 12:42:27'),
(91, 39, 'Filter Coffee', '1767876264_product.png', '20', 'Rich, aromatic South Indian filter coffee brewed to perfection using premium coffee beans and fresh milk. A timeless classic that delivers strong flavor and comforting warmth in every sip.', 1, '2026-01-08 12:44:24'),
(92, 39, 'Unique flavours of coffee', '1767876346_product.png', '20', 'A delightful twist on traditional coffee with specially crafted flavors that offer a unique taste experience. Perfect for coffee lovers looking to explore something different and exciting.', 1, '2026-01-08 12:45:46'),
(93, 39, 'Palkova Pal', '1767876399_product.png', '20', 'A rich and indulgent milk-based drink inspired by the authentic taste of traditional palkova. Creamy, mildly sweet, and deeply satisfying—perfect for those who love classic South Indian flavors.', 1, '2026-01-08 12:46:39'),
(94, 40, 'Dum Tea', '1767876445_product.png', '20', 'Slow-brewed using the traditional dum method to lock in aroma and strength. Each cup delivers a bold, full-bodied taste that refreshes and energizes.', 1, '2026-01-08 12:47:25'),
(95, 40, 'Ginger/Elaichi/Masala Tea', '1767876553_product.png', '20', 'Flavorful teas infused with natural spices like ginger, cardamom, and masala. A perfect balance of taste and warmth that soothes the senses and boosts freshness.', 1, '2026-01-08 12:49:13'),
(96, 40, 'Herbal tea for the health conscious.', '1767876612_product.png', '20', 'Carefully selected herbal blends made from natural ingredients to promote wellness and relaxation. Light, refreshing, and ideal for those seeking a healthy, caffeine-light alternative.', 1, '2026-01-08 12:50:12');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonial_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL CHECK (`rating` between 1 and 5),
  `message` text NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testimonial_id`, `name`, `image`, `rating`, `message`, `status`, `created_at`) VALUES
(1, 'Vigneshwaran', '1764232690_testimonial.png', 4, 'The coffee here is always fresh, hygienic, and \r\n                                        exceptionally well-prepared. One of the most affordable \r\n                                        and best-quality coffee shops in Coimbatore.', 1, '2025-11-26 14:44:05'),
(7, 'Janakrishnamoorthy', '1764232629_testimonial.png', 4, 'all are good, nice and genuine', 1, '2025-11-27 08:33:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
