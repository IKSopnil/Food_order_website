-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 07:59 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appetizers`
--

INSERT INTO `appetizers` (`id`, `image`, `title`, `description`, `price`, `off_percentage`) VALUES
(1, 'https://takethemameal.com/files_images_v2/stam.jpg', 'Beef Meal', 'With pasta and Yard-long Bean', 150, 10),
(2, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(3, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(8, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(9, 'https://images.unsplash.com/photo-1577906096429-f73c2c312435?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Bruschetta', 'Toasted bread with tomato and herbs', 220, 15),
(10, 'https://images.unsplash.com/photo-1541014741259-de529411b96a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80', 'Shrimp cocktail', 'Boiled shrimp with cocktail sauce', 450, 10),
(11, 'https://images.unsplash.com/photo-1625944525533-473f1a3d54e7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=964&q=80', 'Stuffed mushroo', 'Baked mushrooms filled with stuffin', 250, 20),
(12, 'https://images.unsplash.com/photo-1554502078-ef0fc409efce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1084&q=80', 'Caprese salad s', 'Cherry tomatoes, mozzarella, and ba', 300, 10),
(13, 'https://images.unsplash.com/photo-1630698467933-60129917a2c2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80', 'Antipasto platt', 'Assortment of cured meats and chees', 350, 10),
(14, 'https://images.unsplash.com/photo-1625938144755-652e08e359b7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1135&q=80', 'Mini quiches', 'Bite-sized savory egg tarts', 500, 15),
(15, 'https://images.unsplash.com/photo-1660744868370-d8ce17a726ad?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Vegan Salad', 'Crisp greens, colorful veggies, pla', 120, 10),
(16, 'https://images.unsplash.com/photo-1670218983385-d31564970255?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Thai Basil Pick', 'Tangy, aromatic, sliced shallots, p', 140, 10),
(17, 'https://images.unsplash.com/photo-1676561188370-dd3c7f4ebec0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Sweet Potato an', 'Roasted sweet potatoes coated in sp', 120, 10),
(18, 'https://images.unsplash.com/photo-1674315526518-f8891c4a8b70?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Cesar Salad Pla', 'Romaine lettuce, croutons, Parmesan', 200, 10),
(19, 'https://images.unsplash.com/photo-1667207393917-ae9aeade6da3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'A Garlic-Fried ', 'Crispy potatoes, fried with garlic,', 150, 10),
(20, 'https://images.unsplash.com/photo-1603903631918-a6a92fb6ac49?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80', 'Chicken Meat Bl', 'Grilled chicken, black bread, lettu', 140, 10),
(21, 'https://images.unsplash.com/photo-1676300183339-09e3824b215d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Pasta and Sandw', 'Italian-style pasta, freshly made s', 100, 10),
(22, 'https://hips.hearstapps.com/vidthumb/images/shot-6-456-1-copy-1520215634.jpg', 'Garlic Butter S', 'Juicy shrimp, sautéed in garlic but', 220, 10),
(23, 'https://www.thespruceeats.com/thmb/9qWZycbECUysdk_KOqx2IDJ_s3A=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/golden-purses-thai-appetizer-3217674-hero-08-c1de1ef885104c93b33b94cc8fb00557.jpg', 'Thai Crabmeat', 'Thai-style crabmeat dish with a spi', 250, 10),
(24, 'https://www.thespruceeats.com/thmb/19LaLKVRvG7kV5U8pwHOmI4a5u4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/easy-appetizer-meatballs-3054462-8-5b3f8e68c9e77c0037cbdeb8.jpg', 'Meatballs', 'Savory bites of seasoned ground mea', 250, 10);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beverages`
--

INSERT INTO `beverages` (`id`, `image`, `title`, `description`, `price`, `off_percentage`) VALUES
(1, 'https://takethemameal.com/files_images_v2/stam.jpg', 'Beef Meal', 'With pasta and Yard-long Bean', 150, 10),
(2, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(3, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(4, 'https://images.unsplash.com/photo-1579954115545-a95591f28bfc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Strawberry Shak', 'Creamy drink with fresh strawberrie', 150, 10),
(5, 'https://images.unsplash.com/photo-1606821466874-1e3eb48c9442?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Coffee', 'Hot or cold caffeinated beverage', 120, 10),
(6, 'https://images.unsplash.com/photo-1565454296317-b45fe0ff1447?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Mango Shake', 'Smoothie-like drink with mango flav', 100, 10),
(7, 'https://images.unsplash.com/photo-1595981267035-7b04ca84a82d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Red Lemon', 'Refreshing mix of lemonade and cran', 200, 10),
(8, 'https://images.unsplash.com/photo-1473115209096-e0375dd6b3b3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Smoothie', 'Thick drink made with blended fruit', 100, 10),
(9, 'https://images.unsplash.com/photo-1493193218435-eb21654c7df6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Banana Shake', 'Sweet and creamy banana-flavored dr', 120, 10),
(10, 'https://images.unsplash.com/photo-1586195831800-24f14c992cea?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Chocolate Shake', 'Rich and indulgent chocolate bevera', 200, 10),
(11, 'https://plus.unsplash.com/premium_photo-1674228288173-519727295a6c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80', 'Orange Juice', 'Citrusy, refreshing, vitamin C-rich', 100, 10),
(12, 'https://images.unsplash.com/photo-1560508180-03f285f67ded?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Mint Strawberry', 'Cool, refreshing, sweet and tangy b', 200, 10),
(13, 'https://images.unsplash.com/photo-1560421741-50d051ed1820?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Pineapple juice', 'Sweet, tangy, tropical, refreshing,', 150, 10),
(14, 'https://images.unsplash.com/photo-1622483767028-3f66f32aef97?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Coca-Cola', 'Classic, bubbly, caffeinated, sweet', 120, 10),
(15, 'https://images.unsplash.com/photo-1666475877365-3d4a18bb87f6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Pomegranate Jui', 'Tangy, sweet, antioxidant-rich, ref', 130, 10),
(16, 'https://cdn.pixabay.com/photo/2016/08/26/21/16/carrot-juice-1623157_960_720.jpg', 'Carrot Juice', 'Nutrient-rich, sweet, earthy, orang', 200, 20),
(17, 'https://cdn.pixabay.com/photo/2014/04/05/11/41/tomato-316743_960_720.jpg', 'Tomato Juice', 'Savory, thick, red, nutritious, tan', 150, 10),
(18, 'https://cdn.pixabay.com/photo/2016/12/19/12/08/ginger-1918107_960_720.jpg', 'Lemonade Juice', 'Tart, sweet, refreshing, thirst-que', 140, 10),
(19, 'https://cdn.pixabay.com/photo/2016/10/09/14/00/vegetable-juices-1725835_960_720.jpg', 'Vegetable Juice', 'Nutritious, flavorful, colorful, re', 100, 15),
(20, 'https://cdn.pixabay.com/photo/2015/11/23/11/54/chocolate-smoothie-1058191_960_720.jpg', 'Chocolate Smoot', 'Rich, creamy, indulgent, chocolatey', 120, 10);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desserts`
--

INSERT INTO `desserts` (`id`, `image`, `title`, `description`, `price`, `off_percentage`) VALUES
(1, 'https://takethemameal.com/files_images_v2/stam.jpg', 'Beef Meal', 'With pasta and Yard-long Bean', 150, 10),
(2, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(3, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(8, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(10, 'https://images.unsplash.com/photo-1561087548-94e6546744a1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Custard Cake', 'Fluffy cake with rich custard filli', 150, 10),
(11, 'https://images.unsplash.com/photo-1587314168485-3236d6710814?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1078&q=80', 'Strawberry & Ba', 'Sweet and fruity flavor combination', 120, 10),
(12, 'https://images.unsplash.com/photo-1624353365286-3f8d62daad51?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Chocolate Cake', 'Rich, decadent dessert with chocola', 100, 10),
(13, 'https://images.unsplash.com/photo-1464305795204-6f5bbfc7fb81?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Baked Pie', 'Delicious pastry with sweet or savo', 200, 10),
(14, 'https://images.unsplash.com/photo-1611329695518-1763319f3551?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1083&q=80', 'Chocolate Cupca', 'Moist, fluffy cake with chocolate f', 100, 10),
(15, 'https://images.unsplash.com/photo-1582716401301-b2407dc7563d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1175&q=80', 'Sliced Cake wit', 'Moist cake slices topped with cherr', 120, 10),
(16, 'https://realfood.tesco.com/media/images/RFO-1400x919-classic-chocolate-mousse-69ef9c9c-5bfb-4750-80e1-31aafbd80821-0-1400x919.jpg', 'Classic Chocola', 'Decadent, creamy, chocolatey, airy,', 250, 15),
(18, 'https://realfood.tesco.com/media/images/RFO-1400x919-CobblerMug-mini-ff0aea9f-e3ce-44db-b8fa-b21f4ef4358a-0-1400x919.jpg', 'Blueberry Muffi', 'Buttery, crumbly, sweet, juicy, blu', 120, 15),
(19, 'https://realfood.tesco.com/media/images/RFO-1400x919-Classic-creme-caramel-c33041fa-1997-429f-97ef-52fc8314db35-0-1400x919.jpg', 'Classic Crème C', 'Silky, smooth, creamy, custardy, ca', 150, 15),
(20, 'https://realfood.tesco.com/media/images/RFO-1400x919-FrozenStrawberryTrifle-8687e3e0-0037-4592-babb-87c37d5e2969-0-1400x919.jpg', 'Frozen Strawber', 'Cool, creamy, sweet, fruity, tangy,', 170, 15),
(21, 'https://realfood.tesco.com/media/images/BREADandBUTTER-1400x919-ae54d3ed-67dd-4a11-bd27-7c81d946d528-0-1400x919.jpg', 'Chocolate Bread', 'Decadent, rich, chocolatey, moist, ', 150, 15),
(22, 'https://realfood.tesco.com/media/images/RFO-1400x919-Salted-caramel-tart-f03c995c-a7dd-42f8-b578-1f2d46283086-0-1400x919.jpg', 'No-bake Salted ', 'Smooth, creamy, sweet, salty, butte', 140, 15),
(23, 'https://realfood.tesco.com/media/images/RFO-1400x919-Strawberry-syllabub-0fb61a5b-55a5-445c-88ce-8c402c19640c-0-1400x919.jpg', 'Strawberry Syll', 'Light, fluffy, creamy, fruity, refr', 110, 15),
(24, 'https://myfoodbook.com.au/sites/default/files/styles/sr_wd/public/recipe_photo/Custard-berry-trifle_3150.jpg', 'Easy Custard Be', 'Fruity, creamy, layered, refreshing', 100, 15),
(25, 'https://img.delicious.com.au/O35Z3gpH/del/2022/05/poached-packham-pear-vacherin-168605-1.png', 'Poached Pear Va', 'Elegant, airy, light, delicate, cre', 160, 15),
(26, 'https://img.delicious.com.au/52dOVkJx/del/2020/06/sticky-ginger-pudding-133537-2.jpg', 'Sticky Ginger P', 'Warm, comforting, moist, spicy, swe', 180, 15);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_courses`
--

INSERT INTO `main_courses` (`id`, `image`, `title`, `description`, `price`, `off_percentage`) VALUES
(1, 'https://takethemameal.com/files_images_v2/stam.jpg', 'Beef Meal', 'With pasta and Yard-long Bean', 150, 10),
(2, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(3, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(8, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(10, 'https://images.unsplash.com/photo-1676037150408-4b59a542fa7c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Roast Beef & Ve', 'Juicy, savory, tender, roasted, hea', 450, 10),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `image`, `title`, `description`, `price`, `off_percentage`) VALUES
(1, 'https://takethemameal.com/files_images_v2/stam.jpg', 'Beef Meal', 'With pasta and Yard-long Bean', 150, 10),
(2, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(3, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(8, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(10, 'https://images.unsplash.com/photo-1676037150408-4b59a542fa7c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Food Platter 1', 'Moist, fluffy cake with chocolate f', 450, 10),
(11, 'https://images.pexels.com/photos/247685/pexels-photo-247685.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 2', 'Delicious pastry with sweet or savo', 400, 10),
(12, 'https://images.pexels.com/photos/7287723/pexels-photo-7287723.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 3', 'Rich, decadent dessert with chocola', 350, 10),
(13, 'https://images.pexels.com/photos/8696567/pexels-photo-8696567.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 4', 'Sweet and fruity flavor combination', 500, 10),
(14, 'https://images.pexels.com/photos/248444/pexels-photo-248444.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 5', 'Fluffy cake with rich custard filli', 450, 10),
(15, 'https://images.pexels.com/photos/13485215/pexels-photo-13485215.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 6', 'Creamy, fluffy, sponge-like dessert', 400, 10);

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `beverages`
--
ALTER TABLE `beverages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `desserts`
--
ALTER TABLE `desserts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
