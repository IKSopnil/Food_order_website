-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 06:58 AM
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
-- Database: `ki_khaba`
--

-- --------------------------------------------------------

--
-- Table structure for table `appetizers`
--

CREATE TABLE `appetizers` (
  `id` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(15) NOT NULL,
  `description` varchar(35) NOT NULL,
  `price` int(5) NOT NULL,
  `off_percentage` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appetizers`
--

INSERT INTO `appetizers` (`id`, `image`, `title`, `description`, `price`, `off_percentage`) VALUES
(1, 'https://takethemameal.com/files_images_v2/stam.jpg', 'Beef Meal', 'With pasta and Yard-long Bean', 150, 10),
(9, 'https://images.unsplash.com/photo-1577906096429-f73c2c312435?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Bruschetta', 'Toasted bread with tomato and herbs', 220, 15),
(10, 'https://images.unsplash.com/photo-1541014741259-de529411b96a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80', 'Shrimp cocktail', 'Boiled shrimp with cocktail sauce', 450, 10),
(11, 'https://images.unsplash.com/photo-1625944525533-473f1a3d54e7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=964&q=80', 'Stuffed mushroo', 'Baked mushrooms filled with stuffin', 250, 20),
(12, 'https://images.unsplash.com/photo-1554502078-ef0fc409efce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1084&q=80', 'Caprese salad s', 'Cherry tomatoes, mozzarella, and ba', 300, 10),
(13, 'https://images.unsplash.com/photo-1630698467933-60129917a2c2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80', 'Antipasto platt', 'Assortment of cured meats and chees', 350, 10),
(14, 'https://images.unsplash.com/photo-1625938144755-652e08e359b7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1135&q=80', 'Mini quiches', 'Bite-sized savory egg tarts', 500, 15);

-- --------------------------------------------------------

--
-- Table structure for table `beverages`
--

CREATE TABLE `beverages` (
  `id` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(15) NOT NULL,
  `description` varchar(35) NOT NULL,
  `price` int(5) NOT NULL,
  `off_percentage` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beverages`
--

INSERT INTO `beverages` (`id`, `image`, `title`, `description`, `price`, `off_percentage`) VALUES
(4, 'https://images.unsplash.com/photo-1579954115545-a95591f28bfc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Strawberry Shak', 'Creamy drink with fresh strawberrie', 150, 10),
(5, 'https://images.unsplash.com/photo-1606821466874-1e3eb48c9442?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Coffee', 'Hot or cold caffeinated beverage', 120, 10),
(6, 'https://images.unsplash.com/photo-1565454296317-b45fe0ff1447?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Mango Shake', 'Smoothie-like drink with mango flav', 100, 10),
(7, 'https://images.unsplash.com/photo-1595981267035-7b04ca84a82d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Red Lemon', 'Refreshing mix of lemonade and cran', 200, 10),
(8, 'https://images.unsplash.com/photo-1473115209096-e0375dd6b3b3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Smoothie', 'Thick drink made with blended fruit', 100, 10),
(9, 'https://images.unsplash.com/photo-1493193218435-eb21654c7df6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Banana Shake', 'Sweet and creamy banana-flavored dr', 120, 10),
(10, 'https://images.unsplash.com/photo-1586195831800-24f14c992cea?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Chocolate Shake', 'Rich and indulgent chocolate bevera', 200, 10);

-- --------------------------------------------------------

--
-- Table structure for table `desserts`
--

CREATE TABLE `desserts` (
  `id` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(15) NOT NULL,
  `description` varchar(35) NOT NULL,
  `price` int(5) NOT NULL,
  `off_percentage` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `desserts`
--

INSERT INTO `desserts` (`id`, `image`, `title`, `description`, `price`, `off_percentage`) VALUES
(3, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(10, 'https://images.unsplash.com/photo-1561087548-94e6546744a1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Custard Cake', 'Fluffy cake with rich custard filli', 150, 10),
(11, 'https://images.unsplash.com/photo-1587314168485-3236d6710814?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1078&q=80', 'Strawberry & Ba', 'Sweet and fruity flavor combination', 120, 10),
(12, 'https://images.unsplash.com/photo-1624353365286-3f8d62daad51?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Chocolate Cake', 'Rich, decadent dessert with chocola', 100, 10),
(13, 'https://images.unsplash.com/photo-1464305795204-6f5bbfc7fb81?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Baked Pie', 'Delicious pastry with sweet or savo', 200, 10),
(14, 'https://images.unsplash.com/photo-1611329695518-1763319f3551?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1083&q=80', 'Chocolate Cupca', 'Moist, fluffy cake with chocolate f', 100, 10),
(15, 'https://images.unsplash.com/photo-1582716401301-b2407dc7563d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1175&q=80', 'Sliced Cake wit', 'Moist cake slices topped with cherr', 120, 10);

-- --------------------------------------------------------

--
-- Table structure for table `main_courses`
--

CREATE TABLE `main_courses` (
  `id` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(15) NOT NULL,
  `description` varchar(35) NOT NULL,
  `price` int(5) NOT NULL,
  `off_percentage` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_courses`
--

INSERT INTO `main_courses` (`id`, `image`, `title`, `description`, `price`, `off_percentage`) VALUES
(1, 'https://takethemameal.com/files_images_v2/stam.jpg', 'Beef Meal', 'With pasta and Yard-long Bean', 150, 10),
(10, 'https://images.unsplash.com/photo-1676037150408-4b59a542fa7c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Food Platter 1', 'Moist, fluffy cake with chocolate f', 450, 10),
(11, 'https://images.pexels.com/photos/247685/pexels-photo-247685.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 2', 'Delicious pastry with sweet or savo', 400, 10),
(12, 'https://images.pexels.com/photos/7287723/pexels-photo-7287723.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 3', 'Rich, decadent dessert with chocola', 350, 10),
(13, 'https://images.pexels.com/photos/8696567/pexels-photo-8696567.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 4', 'Sweet and fruity flavor combination', 500, 10),
(14, 'https://images.pexels.com/photos/248444/pexels-photo-248444.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 5', 'Fluffy cake with rich custard filli', 450, 10),
(15, 'https://images.pexels.com/photos/13485215/pexels-photo-13485215.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 6', 'Creamy, fluffy, sponge-like dessert', 400, 10);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(15) NOT NULL,
  `description` varchar(35) NOT NULL,
  `price` int(5) NOT NULL,
  `off_percentage` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `image`, `title`, `description`, `price`, `off_percentage`) VALUES
(1, 'https://takethemameal.com/files_images_v2/stam.jpg', 'Beef Meal', 'With pasta and Yard-long Bean', 135, 10),
(8, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 85, 15),
(10, 'https://images.unsplash.com/photo-1676037150408-4b59a542fa7c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Food Platter 1', 'Moist, fluffy cake with chocolate f', 450, 10),
(11, 'https://images.pexels.com/photos/247685/pexels-photo-247685.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 2', 'Delicious pastry with sweet or savo', 400, 10),
(12, 'https://images.pexels.com/photos/7287723/pexels-photo-7287723.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 3', 'Rich, decadent dessert with chocola', 350, 10),
(13, 'https://images.pexels.com/photos/8696567/pexels-photo-8696567.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 4', 'Sweet and fruity flavor combination', 500, 10),
(14, 'https://images.pexels.com/photos/248444/pexels-photo-248444.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 5', 'Fluffy cake with rich custard filli', 450, 10),
(15, 'https://images.pexels.com/photos/13485215/pexels-photo-13485215.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 6', 'Creamy, fluffy, sponge-like dessert', 400, 10);

-- --------------------------------------------------------

--
-- Table structure for table `top_dishes`
--

CREATE TABLE `top_dishes` (
  `id` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(15) NOT NULL,
  `description` varchar(35) NOT NULL,
  `price` int(5) NOT NULL,
  `off_percentage` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appetizers`
--
ALTER TABLE `appetizers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beverages`
--
ALTER TABLE `beverages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desserts`
--
ALTER TABLE `desserts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_courses`
--
ALTER TABLE `main_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_dishes`
--
ALTER TABLE `top_dishes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appetizers`
--
ALTER TABLE `appetizers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `beverages`
--
ALTER TABLE `beverages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `desserts`
--
ALTER TABLE `desserts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `main_courses`
--
ALTER TABLE `main_courses`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `top_dishes`
--
ALTER TABLE `top_dishes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
