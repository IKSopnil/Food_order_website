-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 07:31 AM
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
(2, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(3, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(8, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15);

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
(1, 'https://takethemameal.com/files_images_v2/stam.jpg', 'Beef Meal', 'With pasta and Yard-long Bean', 150, 10),
(2, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(3, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15);

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
(1, 'https://takethemameal.com/files_images_v2/stam.jpg', 'Beef Meal', 'With pasta and Yard-long Bean', 150, 10),
(2, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(3, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(8, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15);

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
(2, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(3, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(8, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15);

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
(1, 'https://takethemameal.com/files_images_v2/stam.jpg', 'Beef Meal', 'With pasta and Yard-long Bean', 150, 10),
(2, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(3, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(8, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appetizers`
--
ALTER TABLE `appetizers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `beverages`
--
ALTER TABLE `beverages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `desserts`
--
ALTER TABLE `desserts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `main_courses`
--
ALTER TABLE `main_courses`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
