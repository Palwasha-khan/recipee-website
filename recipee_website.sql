-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2025 at 03:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipee_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` text DEFAULT NULL,
  `Email` text DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `Message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `phone`, `Message`) VALUES
('james', 'james@gmail.com', 11111, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `recipe_id` int(11) NOT NULL,
  `Recipe_title` varchar(100) NOT NULL,
  `recipe_img` varchar(255) DEFAULT NULL,
  `Category` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `prep_time` int(11) DEFAULT NULL,
  `cook_time` int(11) DEFAULT NULL,
  `total_time` int(11) DEFAULT NULL,
  `serving` int(11) DEFAULT NULL,
  `ingredients` text DEFAULT NULL,
  `instructions` text DEFAULT NULL,
  `average_rating` float DEFAULT 0,
  `rating_count` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`recipe_id`, `Recipe_title`, `recipe_img`, `Category`, `description`, `prep_time`, `cook_time`, `total_time`, `serving`, `ingredients`, `instructions`, `average_rating`, `rating_count`) VALUES
(1, 'Halwa Puri with Chana Masala', 'halwa-puri.jpeg', 'breakfast', 'Deep-fried bread served with sweet semolina (halwa) and spicy chickpeas (chana masala). A classic festive Pakistani breakfast.', 30, 40, 70, 4, 'All-purpose flour, salt, oil, water, semolina, ghee, sugar, cardamom, chickpeas, onions, tomatoes, cumin, ginger-garlic paste, red chili powder, turmeric, garam masala', '1. Prepare puri dough with flour, salt, and water. Rest and roll into small circles. Deep fry until golden. 2. For halwa, roast semolina in ghee with cardamom. Add sugar and water, stir until thick. 3. For chana masala, cook onions, add tomatoes and spices, then chickpeas. Simmer until thick and flavorful.', 0, 0),
(2, 'Lassi (Meethi or Namkeen)', 'lassi.jpeg', 'breakfast', 'A refreshing traditional yogurt-based drink. Can be made sweet (meethi) or salty (namkeen). Commonly enjoyed with desi breakfasts.', 5, 0, 5, 2, 'Yogurt, Water, Sugar, Salt, Cardamom, Rose water, Ice cubes', '1. For sweet lassi: blend yogurt with sugar, cardamom, and rose water until smooth. 2. For salty lassi: blend yogurt with salt and a pinch of roasted cumin powder. 3. Add water and ice to adjust consistency. 4. Serve chilled in a glass and garnish with mint leaves or cardamom powder.', 0, 0),
(3, 'Aloo Paratha', 'aloo-paratha.jpeg', 'breakfast', 'Stuffed flatbread with a spicy mashed potato filling. Served hot with yogurt or achar.', 20, 20, 40, 2, 'Wheat flour, Boiled potatoes, Green chili, Coriander, Cumin seeds, Salt, Red chili powder, Water, Oil or ghee', '1. Knead wheat flour into dough and rest. 2. Mash boiled potatoes and mix with chopped chilies, coriander, and spices. 3. Roll dough, stuff with filling, and seal. 4. Roll again and cook on a hot tawa with oil or ghee until golden brown.', 0, 0),
(4, 'Anda Chanay', 'andy-chany.jpeg', 'breakfast', 'Boiled eggs served in a flavorful spicy chickpea curry. A popular Desi breakfast dish.', 15, 25, 40, 2, 'Boiled eggs, Boiled chickpeas, Onions, Tomatoes, Ginger-garlic paste, Green chili, Red chili powder, Turmeric, Garam masala, Salt, Oil', '1. Sauté chopped onions in oil. Add ginger-garlic paste and tomatoes, cook until soft. 2. Add spices and green chili, then stir in boiled chickpeas. Cook until gravy thickens. 3. Add boiled eggs and simmer for a few minutes. 4. Garnish with coriander and serve with naan or paratha.', 0, 0),
(5, 'Paye with Naan', 'paye-nan.jpeg', 'breakfast', 'Traditional slow-cooked goat trotters stew. Rich, flavorful, and best enjoyed with naan — especially during winter mornings.', 30, 240, 270, 4, 'Goat trotters (paye), Onions, Garlic, Ginger, Red chili powder, Turmeric, Garam masala, Salt, Wheat flour (for thickening), Oil, Water', '1. Clean paye thoroughly and pressure cook until tender. 2. In a separate pot, sauté onions, ginger, garlic, and spices until aromatic. 3. Add boiled paye along with the stock. Simmer on low flame for 2–3 hours. 4. Optionally, thicken with a little wheat flour paste. 5. Serve hot with naan and lemon wedges.', 0, 0),
(6, 'Chicken Biryani', 'chicken-biryani.jpeg', 'lunch', 'Layered rice and chicken dish cooked with aromatic spices, saffron, and herbs. A festive favorite.', 30, 60, 90, 4, 'Chicken, Basmati rice, Yogurt, Onions, Tomatoes, Ginger-garlic paste, Green chili, Biryani masala, Saffron, Mint, Coriander, Oil, Salt', '1. Marinate chicken with yogurt, spices, and ginger-garlic paste. 2. Partially cook basmati rice with whole spices. 3. Cook chicken until tender. 4. Layer chicken and rice in a pot, add saffron milk and fried onions. 5. Cover and steam (dum) on low heat for 20 minutes.', 5, 2),
(7, 'Daal Chawal', 'daal-chawal.jpeg', 'lunch', 'Comfort food: simple lentils cooked with spices, served with boiled rice, achar, and salad.', 15, 30, 45, 2, 'Masoor daal, Tomatoes, Onion, Garlic, Red chili powder, Turmeric, Salt, Cumin seeds, Green chili, Rice, Water, Oil', '1. Wash and boil lentils with turmeric, chili, salt. 2. Make tarka with sautéed onions, garlic, and cumin. Add to boiled daal. 3. Cook rice separately in salted water. 4. Serve hot with daal and optional achar or salad.', 0, 0),
(8, 'Kofta Curry', 'kofta-curry.jpeg', 'lunch', 'Meatballs simmered in a rich, spiced curry. Pairs perfectly with roti or rice.', 30, 45, 75, 4, 'Minced meat, Onions, Tomatoes, Ginger-garlic paste, Green chili, Red chili powder, Coriander powder, Turmeric, Garam masala, Eggs, Bread crumbs, Oil, Salt', '1. Mix minced meat with spices, egg, and bread crumbs. Form into koftas. 2. Prepare curry with sautéed onions, tomatoes, and spices. 3. Add koftas and cook until tender. 4. Simmer gently for rich flavor. Garnish with coriander.', 0, 0),
(9, 'Bhindi Gosht', 'bhindi-gosht.jpeg', 'lunch', 'Tender mutton cooked with okra in a spicy curry base. A unique and flavorful combo.', 20, 50, 70, 3, 'Mutton, Bhindi (okra), Onions, Tomatoes, Garlic, Red chili powder, Turmeric, Garam masala, Salt, Oil', '1. Cook mutton with onions, garlic, and spices until soft. 2. In a separate pan, lightly fry bhindi. 3. Add fried bhindi to the mutton curry. 4. Simmer for 10–15 minutes and serve with roti or naan.', 0, 0),
(10, 'Tandoori Roti with Daal Mash', 'daal-mash.jpeg', 'lunch', 'White lentils cooked in desi ghee with garlic and spices, served hot with soft tandoori roti.', 10, 30, 40, 3, 'Mash daal (white lentils), Garlic, Onion, Green chili, Red chili powder, Turmeric, Desi ghee, Salt, Cumin seeds, Coriander leaves, Tandoori roti', '1. Wash and boil daal mash with turmeric and salt. 2. In ghee, sauté garlic, onions, and green chili. Add spices. 3. Add boiled daal and cook until thick and creamy. 4. Garnish with coriander. Serve with hot tandoori roti.', 0, 0),
(11, 'Chapli Kebab with Naan', 'chapli-kebab.jpeg', 'dinner', 'A spiced minced meat patty shallow-fried in ghee or oil. Served hot with naan and chutney.', 20, 20, 40, 4, 'Minced beef or mutton, Onions, Tomatoes, Green chilies, Coriander seeds, Cumin, Crushed pomegranate seeds, Egg, Flour, Salt, Red chili, Oil, Naan', '1. Mix all ingredients into the minced meat. 2. Shape into flat patties. 3. Shallow fry in hot oil or ghee until crisp and brown. 4. Serve hot with naan, raita, and green chutney.', 0, 0),
(12, 'Mutton Korma', 'mutton-korma.jpeg', 'dinner', 'A rich, creamy curry made with mutton, yogurt, and aromatic traditional spices — perfect for special occasions.', 25, 60, 85, 4, 'Mutton, Yogurt, Onions, Ginger-garlic paste, Red chili powder, Coriander powder, Garam masala, Cloves, Cardamom, Cinnamon, Salt, Oil', '1. Fry onions until golden, then blend into a paste. 2. Sauté mutton with ginger-garlic paste and spices. 3. Add onion paste and yogurt. Cook on low heat until tender. 4. Simmer until oil separates and gravy thickens. 5. Serve with naan or paratha.', 0, 0),
(13, 'Palak Paneer', 'palak-paneer.jpeg', 'dinner', 'A healthy vegetarian dish of blended spinach cooked with soft paneer cubes and mild spices.', 20, 25, 45, 3, 'Spinach, Paneer, Onions, Garlic, Ginger, Tomatoes, Green chili, Garam masala, Cumin, Cream, Salt, Oil', '1. Boil and blend spinach into a smooth paste. 2. Fry onions, garlic, and tomatoes until soft. 3. Add spinach puree and spices. Cook for 10 minutes. 4. Add paneer cubes and simmer gently. 5. Add a splash of cream before serving.', 0, 0),
(14, 'Chicken Karahi', 'chicken-karahi.jpeg', 'dinner', 'A wok-style chicken curry made with tomatoes, garlic, and green chilies — spicy, quick, and flavorful.', 15, 30, 45, 3, 'Chicken, Tomatoes, Garlic, Ginger, Green chilies, Red chili flakes, Black pepper, Salt, Oil, Coriander, Yogurt', '1. Heat oil and sauté garlic. Add chicken and cook until white. 2. Add chopped tomatoes and cook until oil separates. 3. Add spices and cook on high heat. 4. Add yogurt and green chilies. Simmer until thick. 5. Garnish with coriander and serve with naan.', 0, 0),
(15, 'Beef or Chicken Nihari', 'nihari.jpeg', 'dinner', 'A traditional slow-cooked stew made with beef or chicken, flavored with spices, and served with lemon and ginger garnish.', 20, 240, 260, 4, 'Beef or chicken, Onions, Ginger, Garlic, Nihari masala, Whole spices, Wheat flour, Ghee or oil, Salt, Lemon, Coriander, Ginger (julienne)', '1. Heat ghee and sauté onions, ginger, and garlic. 2. Add meat and brown it. Mix in nihari masala and water. 3. Cook on low flame for 3–4 hours until meat is tender. 4. Thicken with wheat flour slurry and simmer. 5. Garnish with coriander, lemon, and ginger slices.', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Recipe_title` varchar(100) DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL CHECK (`Rating` between 1 and 5),
  `Reviews` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `Name`, `Email`, `Recipe_title`, `Rating`, `Reviews`, `created_at`) VALUES
(1, 'palwasha', 'paloo@gmail.com', 'Lassi', 5, 'amazing', '2025-06-21 04:39:43'),
(5, 'sana', 'hello@gmail.com', 'Chicken Biryani', 5, 'mind blowing', '2025-06-21 09:42:40'),
(6, 'sana', 'abithywhy@gmail.com', 'Chicken Biryani', 5, 'aaa', '2025-06-21 09:46:30');

--
-- Triggers `review`
--
DELIMITER $$
CREATE TRIGGER `update_average_rating` AFTER INSERT ON `review` FOR EACH ROW BEGIN
  DECLARE avg_rating FLOAT;
  DECLARE count_rating INT;

  -- Calculate new average and count for the recipe
  SELECT AVG(Rating), COUNT(*) INTO avg_rating, count_rating
  FROM review
  WHERE Recipe_title = NEW.Recipe_title;

  -- Update recipes table using Recipe_title
  UPDATE recipes
  SET average_rating = avg_rating,
      rating_count = count_rating
  WHERE Recipe_title = NEW.Recipe_title;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `submit_recipe`
--

CREATE TABLE `submit_recipe` (
  `Id` int(11) NOT NULL,
  `Recipe_title` varchar(100) DEFAULT NULL,
  `Category` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `ingredients` varchar(100) DEFAULT NULL,
  `instructions` varchar(100) DEFAULT NULL,
  `prep_time` int(11) DEFAULT NULL,
  `cook_time` int(11) DEFAULT NULL,
  `total_time` int(11) DEFAULT NULL,
  `recipe_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `submit_recipe`
--

INSERT INTO `submit_recipe` (`Id`, `Recipe_title`, `Category`, `description`, `ingredients`, `instructions`, `prep_time`, `cook_time`, `total_time`, `recipe_img`) VALUES
(1, 'example', 'breakfast', 'exammple....', 'ing1,ing2,ing3', 'read thoroughly', 10, 20, 30, 'breakfast.jfif'),
(2, 'example', 'breakfast', 'exammple....', 'ing1,ing2,ing3', 'read thoroughly', 10, 20, 30, 'breakfast.jfif'),
(3, 'example', 'breakfast', 'exammple....', 'ing1,ing2,ing3', 'read thoroughly', 10, 20, 30, 'breakfast.jfif'),
(4, 'example', 'breakfast', 'exammple....', 'ing1,ing2,ing3', 'read thoroughly', 10, 20, 30, 'breakfast.jfif'),
(5, 'example', 'breakfast', 'bhar', 'bhar', 'not intreseted', 2, 3, 5, 'foot.jpeg'),
(6, 'example', 'breakfast', 'bhar', 'bhar', 'not intreseted', 2, 3, 5, 'foot.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit_recipe`
--
ALTER TABLE `submit_recipe`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `submit_recipe`
--
ALTER TABLE `submit_recipe`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
