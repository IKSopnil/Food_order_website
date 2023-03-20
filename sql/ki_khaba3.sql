-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 04:33 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `admin_username` varchar(15) NOT NULL,
  `admin_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_username`, `admin_password`) VALUES
(1, 'sopnil', 'sop123');

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
  `off_percentage` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appetizers`
--

INSERT INTO `appetizers` (`id`, `image`, `title`, `description`, `price`, `off_percentage`) VALUES
(9, 'https://images.unsplash.com/photo-1577906096429-f73c2c312435?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Bruschetta', 'Toasted bread with tomato and herbs', 220, 0),
(10, 'https://images.unsplash.com/photo-1541014741259-de529411b96a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80', 'Shrimp cocktail', 'Boiled shrimp with cocktail sauce', 450, 0),
(11, 'https://images.unsplash.com/photo-1625944525533-473f1a3d54e7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=964&q=80', 'Stuffed mushroo', 'Baked mushrooms filled with stuffin', 250, 0),
(12, 'https://images.unsplash.com/photo-1554502078-ef0fc409efce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1084&q=80', 'Caprese salad s', 'Cherry tomatoes, mozzarella, and ba', 300, 0),
(13, 'https://images.unsplash.com/photo-1630698467933-60129917a2c2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80', 'Antipasto platt', 'Assortment of cured meats and chees', 350, 0),
(14, 'https://images.unsplash.com/photo-1625938144755-652e08e359b7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1135&q=80', 'Mini quiches', 'Bite-sized savory egg tarts', 500, 0),
(15, 'https://images.unsplash.com/photo-1660744868370-d8ce17a726ad?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Vegan Salad', 'Crisp greens, colorful veggies, pla', 120, 0),
(17, 'https://images.unsplash.com/photo-1676561188370-dd3c7f4ebec0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Sweet Potato an', 'Roasted sweet potatoes coated in sp', 120, 0),
(18, 'https://images.unsplash.com/photo-1674315526518-f8891c4a8b70?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Cesar Salad Pla', 'Romaine lettuce, croutons, Parmesan', 200, 0),
(19, 'https://images.unsplash.com/photo-1667207393917-ae9aeade6da3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'A Garlic-Fried ', 'Crispy potatoes, fried with garlic,', 150, 0),
(20, 'https://images.unsplash.com/photo-1603903631918-a6a92fb6ac49?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80', 'Chicken Meat Bl', 'Grilled chicken, black bread, lettu', 140, 0),
(21, 'https://images.unsplash.com/photo-1676300183339-09e3824b215d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Pasta and Sandw', 'Italian-style pasta, freshly made s', 100, 0),
(22, 'https://hips.hearstapps.com/vidthumb/images/shot-6-456-1-copy-1520215634.jpg', 'Garlic Butter S', 'Juicy shrimp, sautéed in garlic but', 220, 0),
(23, 'https://www.thespruceeats.com/thmb/9qWZycbECUysdk_KOqx2IDJ_s3A=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/golden-purses-thai-appetizer-3217674-hero-08-c1de1ef885104c93b33b94cc8fb00557.jpg', 'Thai Crabmeat', 'Thai-style crabmeat dish with a spi', 250, 0),
(24, 'https://www.thespruceeats.com/thmb/19LaLKVRvG7kV5U8pwHOmI4a5u4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/easy-appetizer-meatballs-3054462-8-5b3f8e68c9e77c0037cbdeb8.jpg', 'Meatballs', 'Savory bites of seasoned ground mea', 250, 0),
(29, 'img_upload/_800476ba-264c-11ea-ad03-eca33bb5cdbf.jpg', 'ted', 'tt', 4, 0),
(30, 'https://www.thespruceeats.com/thmb/9qWZycbECUysdk_KOqx2IDJ_s3A=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/golden-purses-thai-appetizer-3217674-hero-08-c1de1ef885104c93b33b94cc8fb00557.jpg', 'apptsstt', '33', 33, 0),
(32, 'https://scontent.fcgp28-1.fna.fbcdn.net/v/t39.30808-6/337026832_3041469342815224_5924696932514683809_n.png?stp=dst-png_p526x296&_nc_cat=104&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHIjlktsPzl8tpO8AggBYszEzsoC-DUK3UTOygL4NQrdSKnGxL5xZhASTBgyfPVhVKej-d53H2lvzGveVr', 'stef', 'sdsdasd', 4, 0);

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
(4, 'https://images.unsplash.com/photo-1579954115545-a95591f28bfc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Strawberry Shak', 'Creamy drink with fresh strawberrie', 150, 0),
(5, 'https://images.unsplash.com/photo-1606821466874-1e3eb48c9442?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Coffee', 'Hot or cold caffeinated beverage', 120, 0),
(6, 'https://images.unsplash.com/photo-1565454296317-b45fe0ff1447?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Mango Shake', 'Smoothie-like drink with mango flav', 100, 0),
(7, 'https://images.unsplash.com/photo-1595981267035-7b04ca84a82d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Red Lemon', 'Refreshing mix of lemonade and cran', 200, 0),
(8, 'https://images.unsplash.com/photo-1473115209096-e0375dd6b3b3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Smoothie', 'Thick drink made with blended fruit', 100, 0),
(9, 'https://images.unsplash.com/photo-1493193218435-eb21654c7df6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Banana Shake', 'Sweet and creamy banana-flavored dr', 120, 0),
(10, 'https://images.unsplash.com/photo-1586195831800-24f14c992cea?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Chocolate Shake', 'Rich and indulgent chocolate bevera', 200, 0),
(11, 'https://plus.unsplash.com/premium_photo-1674228288173-519727295a6c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80', 'Orange Juice', 'Citrusy, refreshing, vitamin C-rich', 100, 0),
(12, 'https://images.unsplash.com/photo-1560508180-03f285f67ded?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Mint Strawberry', 'Cool, refreshing, sweet and tangy b', 200, 0),
(13, 'https://images.unsplash.com/photo-1560421741-50d051ed1820?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Pineapple juice', 'Sweet, tangy, tropical, refreshing,', 150, 0),
(14, 'https://images.unsplash.com/photo-1622483767028-3f66f32aef97?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Coca-Cola', 'Classic, bubbly, caffeinated, sweet', 120, 0),
(15, 'https://images.unsplash.com/photo-1666475877365-3d4a18bb87f6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Pomegranate Jui', 'Tangy, sweet, antioxidant-rich, ref', 130, 0),
(17, 'https://cdn.pixabay.com/photo/2014/04/05/11/41/tomato-316743_960_720.jpg', 'Tomato Juice', 'Savory, thick, red, nutritious, tan', 150, 0),
(18, 'https://cdn.pixabay.com/photo/2016/12/19/12/08/ginger-1918107_960_720.jpg', 'Lemonade Juice', 'Tart, sweet, refreshing, thirst-que', 140, 0),
(19, 'https://cdn.pixabay.com/photo/2016/10/09/14/00/vegetable-juices-1725835_960_720.jpg', 'Vegetable Juice', 'Nutritious, flavorful, colorful, re', 100, 0),
(20, 'https://cdn.pixabay.com/photo/2015/11/23/11/54/chocolate-smoothie-1058191_960_720.jpg', 'Chocolate Smoot', 'Rich, creamy, indulgent, chocolatey', 120, 0);

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
  `off_percentage` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `desserts`
--

INSERT INTO `desserts` (`id`, `image`, `title`, `description`, `price`, `off_percentage`) VALUES
(8, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 0),
(10, 'https://images.unsplash.com/photo-1561087548-94e6546744a1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Custard Cake', 'Fluffy cake with rich custard filli', 150, 0),
(11, 'https://images.unsplash.com/photo-1587314168485-3236d6710814?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1078&q=80', 'Strawberry & Ba', 'Sweet and fruity flavor combination', 120, 0),
(12, 'https://images.unsplash.com/photo-1624353365286-3f8d62daad51?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Chocolate Cake', 'Rich, decadent dessert with chocola', 100, 0),
(13, 'https://images.unsplash.com/photo-1464305795204-6f5bbfc7fb81?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Baked Pie', 'Delicious pastry with sweet or savo', 200, 0),
(14, 'https://images.unsplash.com/photo-1611329695518-1763319f3551?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1083&q=80', 'Chocolate Cupca', 'Moist, fluffy cake with chocolate f', 100, 0),
(15, 'https://images.unsplash.com/photo-1582716401301-b2407dc7563d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1175&q=80', 'Sliced Cake wit', 'Moist cake slices topped with cherr', 120, 0),
(18, 'https://realfood.tesco.com/media/images/RFO-1400x919-CobblerMug-mini-ff0aea9f-e3ce-44db-b8fa-b21f4ef4358a-0-1400x919.jpg', 'Blueberry Muffi', 'Buttery, crumbly, sweet, juicy, blu', 120, 0),
(19, 'https://realfood.tesco.com/media/images/RFO-1400x919-Classic-creme-caramel-c33041fa-1997-429f-97ef-52fc8314db35-0-1400x919.jpg', 'Classic Crème C', 'Silky, smooth, creamy, custardy, ca', 150, 0),
(20, 'https://realfood.tesco.com/media/images/RFO-1400x919-FrozenStrawberryTrifle-8687e3e0-0037-4592-babb-87c37d5e2969-0-1400x919.jpg', 'Frozen Strawber', 'Cool, creamy, sweet, fruity, tangy,', 170, 0),
(21, 'https://realfood.tesco.com/media/images/BREADandBUTTER-1400x919-ae54d3ed-67dd-4a11-bd27-7c81d946d528-0-1400x919.jpg', 'Chocolate Bread', 'Decadent, rich, chocolatey, moist, ', 150, 0),
(22, 'https://realfood.tesco.com/media/images/RFO-1400x919-Salted-caramel-tart-f03c995c-a7dd-42f8-b578-1f2d46283086-0-1400x919.jpg', 'No-bake Salted ', 'Smooth, creamy, sweet, salty, butte', 140, 0),
(23, 'https://realfood.tesco.com/media/images/RFO-1400x919-Strawberry-syllabub-0fb61a5b-55a5-445c-88ce-8c402c19640c-0-1400x919.jpg', 'Strawberry Syll', 'Light, fluffy, creamy, fruity, refr', 110, 0),
(24, 'https://myfoodbook.com.au/sites/default/files/styles/sr_wd/public/recipe_photo/Custard-berry-trifle_3150.jpg', 'Easy Custard Be', 'Fruity, creamy, layered, refreshing', 100, 0);

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
  `off_percentage` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_courses`
--

INSERT INTO `main_courses` (`id`, `image`, `title`, `description`, `price`, `off_percentage`) VALUES
(1, 'https://takethemameal.com/files_images_v2/stam.jpg', 'Beef Meal', 'With pasta and Yard-long Bean', 150, 0),
(10, 'https://images.unsplash.com/photo-1676037150408-4b59a542fa7c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Roast Beef & Ve', 'Juicy, savory, tender, roasted, hea', 450, 0),
(11, 'https://images.pexels.com/photos/247685/pexels-photo-247685.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 2', 'Delicious pastry with sweet or savo', 400, 0),
(12, 'https://images.pexels.com/photos/7287723/pexels-photo-7287723.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 3', 'Rich, decadent dessert with chocola', 350, 0),
(13, 'https://images.pexels.com/photos/8696567/pexels-photo-8696567.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 4', 'Sweet and fruity flavor combination', 500, 0),
(14, 'https://images.pexels.com/photos/248444/pexels-photo-248444.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 5', 'Fluffy cake with rich custard filli', 450, 0),
(15, 'https://images.pexels.com/photos/13485215/pexels-photo-13485215.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 6', 'Creamy, fluffy, sponge-like dessert', 400, 0);

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
(8, 'https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/dessert/image-thumb__147740__RecipeDetailsLightBox/brownie-with-ice-cream.jpg', 'Brownie', 'Brownie with Ice-cream', 100, 15),
(10, 'https://images.unsplash.com/photo-1676037150408-4b59a542fa7c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Food Platter 1', 'Moist, fluffy cake with chocolate f', 450, 10),
(11, 'https://images.pexels.com/photos/247685/pexels-photo-247685.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 2', 'Delicious pastry with sweet or savo', 400, 10),
(12, 'https://images.pexels.com/photos/7287723/pexels-photo-7287723.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 3', 'Rich, decadent dessert with chocola', 350, 10),
(13, 'https://images.pexels.com/photos/8696567/pexels-photo-8696567.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 4', 'Sweet and fruity flavor combination', 500, 10),
(14, 'https://images.pexels.com/photos/248444/pexels-photo-248444.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 5', 'Fluffy cake with rich custard filli', 450, 10),
(15, 'https://images.pexels.com/photos/13485215/pexels-photo-13485215.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Food Platter 6', 'Creamy, fluffy, sponge-like dessert', 400, 10),
(98, 'img_upload/12414290-01.jpg', 'sd', '3', 3, 3),
(102, '3', 'fs', '3mmmmmmmm', 3, 3),
(103, 'img_upload/_800476ba-264c-11ea-ad03-eca33bb5cdbf.jpg', 'qtesting offer ', 'adea how r u', 2, 2),
(104, '12414290-01.jpg', 'dfall update te', '5 how u doing', 5, 5),
(109, 'img_upload/Capture.PNG', 'g', 'ete', 56, 5),
(111, 'w5w54', 'dsesd', '4545', 45, 45),
(113, '_800476ba-264c-11ea-ad03-eca33bb5cdbf.jpg', 'tanbir jjjj', 'how u doing?', 44, 4);

-- --------------------------------------------------------

--
-- Table structure for table `top_rated`
--

CREATE TABLE `top_rated` (
  `id` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(15) NOT NULL,
  `description` varchar(35) NOT NULL,
  `price` int(5) NOT NULL,
  `off_percentage` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_email` varchar(15) NOT NULL,
  `user_password` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_address`, `user_email`, `user_password`, `phone`) VALUES
(1, 'elon miaw', 'asian housing', 'roar@gmail.com', '1245', '018145654665'),
(2, 'bill miaw', 'asian housing', 'roarbill@gmail.', '123', '018145654999'),
(4, 'adad', 'adwd', 'W@gmail.com', 'w', '65465465'),
(7, 'misbah', 'adasdsa', 'afsfds@gmail.co', '$2y$10$.Y4gPwLv', '15416541');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `top_rated`
--
ALTER TABLE `top_rated`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appetizers`
--
ALTER TABLE `appetizers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `beverages`
--
ALTER TABLE `beverages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `desserts`
--
ALTER TABLE `desserts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `main_courses`
--
ALTER TABLE `main_courses`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `top_rated`
--
ALTER TABLE `top_rated`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
