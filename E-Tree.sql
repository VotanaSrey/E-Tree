-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jan 12, 2021 at 11:57 AM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tree`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Albizia', NULL, NULL),
(2, 'Bombax', NULL, NULL),
(3, 'Mangifera', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` bigint(20) NOT NULL,
  `treeId` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_userid_foreign` (`userId`),
  KEY `comments_treeid_foreign` (`treeId`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `userId`, `treeId`, `created_at`, `updated_at`) VALUES
(1, 'Good tree', 1, 1, '2021-01-07 03:02:12', '2021-01-07 03:02:12'),
(2, 'Very nice', 2, 1, '2021-01-07 03:04:32', '2021-01-07 03:04:32'),
(3, 'I have 500 trees at my home', 1, 2, '2021-01-09 09:39:16', '2021-01-09 09:39:16'),
(4, 'Good', 1, 2, '2021-01-09 09:39:31', '2021-01-09 09:39:31'),
(5, 'good', 1, 8, '2021-01-10 18:38:57', '2021-01-10 18:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

DROP TABLE IF EXISTS `donations`;
CREATE TABLE IF NOT EXISTS `donations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `amount` double NOT NULL,
  `userId` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `donations_userid_foreign` (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `amount`, `userId`, `created_at`, `updated_at`) VALUES
(1, 30, 5, '2021-01-09 23:24:03', '2021-01-09 23:24:03'),
(2, 12, 1, '2021-01-10 18:40:18', '2021-01-10 18:40:18'),
(3, 34, 2, NULL, NULL),
(4, 24, 3, NULL, NULL),
(5, 50, 4, NULL, NULL),
(7, 23, 1, '2021-01-10 23:02:34', '2021-01-10 23:02:34');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organizer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `organizer`, `description`, `startdate`, `enddate`, `created_at`, `updated_at`) VALUES
(1, 'Festival Universe', 'Ossa', 'Happy festival universe 2021, we wish you all the best \r\nParticularly, we provide you 45% off on our shop payments\r\nWish you wealth and prosperity in life, May good luck follow you in every step and your house be filled with happiness. Xin Nian Kuai Le! With each passing moment\r\n', '2020-12-31', '2021-01-01', NULL, NULL),
(2, 'China new year ', 'Votana', 'Happy china new year festival guy\r\nWish you wealth and prosperity in life, May good luck follow you in every step and your house be filled with happiness. Xin Nian Kuai Le! With each passing moment, let us embrace the New Year with a brighter, more colourful, and more joyous future \r\nGet 50% off all the trees', '2021-02-10', '2021-02-11', NULL, NULL),
(3, 'Khmer new year ', 'Votana', 'Happy Khmer new year \r\nGet 50% off all the trees\r\nTo take this wonderful chance, I would like to say Happy Khmer New Year 2021 to all Cambodian people and the rest of the world and wish you all the best for the upcoming Cambodian New Year 2021 to all my friends, colleague, families, beloved readers, and people around the world. Please', '2021-04-13', '2021-04-16', NULL, NULL),
(4, 'Pchum Ben festival ', 'Kemeng', 'Happy Pchum Ben festival\r\nWe have 45% Off on that days\r\nWish you all have a great holiday with your friends and family and be safe!May good luck follow you in every step and your house be filled with happiness. Xin Nian Kuai Le! With each passing moment, let us embrace the New Year with a brighter, more colourful, and more joyous future', '2021-10-10', '2021-10-15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `learnings`
--

DROP TABLE IF EXISTS `learnings`;
CREATE TABLE IF NOT EXISTS `learnings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `postdate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learnings`
--

INSERT INTO `learnings` (`id`, `title`, `link`, `image`, `description`, `postdate`, `created_at`, `updated_at`) VALUES
(1, 'Tutorial: Multi Grafting Fruit Trees', 'https://www.youtube.com/watch?v=KHy_ypW9CDI', 'https://i.ytimg.com/vi/KHy_ypW9CDI/hq720.jpg?sqp=-oaymwEZCOgCEMoBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLAwgx7YWMd9dHMX7r3zDzTcr8m_VQ', 'Beginners guide to multi grafting fruit trees in 10 steps. Grafting can be done by anyone who wants to have a go.\r\nStep 1 Cut out the dead wood 00:18\r\nStep 2 Locate the rootstock 00:58\r\nStep 3: Remove thorns 01:43\r\nStep 4 Wrap the scion in tape 02:01\r\nStep 5 Perform a top Graft 02:32\r\nStep 6: Cut scion into 4cm spear 03:01\r\nStep 7 Cut rootstock to match scion 03:26\r\nStep 8 Fit scion into rootstock 03:46\r\nStep 9 Tape Together 03:50\r\nStep 10 Remove the tape 05:19\r\n', '2018-10-16', NULL, NULL),
(2, 'This Crazy Tree Grows 40 Kinds of Fruit', 'https://www.youtube.com/watch?v=ik3l4U_17bI', 'https://i.ytimg.com/vi/ik3l4U_17bI/hq720.jpg?sqp=-oaymwEZCOgCEMoBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLCmYyUlcmdzAKnD7HtWKh-I6zmxFg', 'Sam Van Aken, an artist and professor at Syracuse University, uses \"chip grafting\" to create trees that each bear 40 different varieties of stone fruits, or fruits with pits. The grafting process involves slicing a bit of a branch with a bud from a tree of one of the varieties and inserting it into a slit in a branch on the \"working tree,\" then wrapping the wound with tape until it heals and the bud starts to grow into a new branch.', '2018-10-16', NULL, NULL),
(3, 'Syracuse professor grows 40 different fruits', 'https://www.youtube.com/watch?v=5kO6-PpgZ1M', 'https://i.ytimg.com/vi/5kO6-PpgZ1M/hqdefault.jpg?sqp=-oaymwEZCOADEI4CSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLBGDBjcL8NIWsgK-sn6F2NAauc3RA', 'Sam Van Aken, an art professor at Syracuse University, grafted the tree over nine years into something of biblical proportions. The \"Tree of 40 Fruits\" contains peaches, plums, nectarines and apricots, all of which are readily edible. Jeff Glor reports.', '2018-10-16', NULL, NULL),
(4, 'WOW!!! Amazing Agriculture Technology', 'https://www.youtube.com/watch?v=D6zBOkS7pgQ', 'https://i.ytimg.com/vi/D6zBOkS7pgQ/hqdefault.jpg?sqp=-oaymwEZCOADEI4CSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLAhwhoFa93NbpFz090uyMfDvkPwXw', 'WOW!!! Strange Coconut Trees Bonsai\r\n► Support us on: https://top2reviews.com/\r\n\r\nNew Agriculture Technology - The Future Of Agriculture - Subscribe Now: https://goo.gl/agThGD modern agriculture technology in the world.\r\nFollow us:\r\n- G+: https://plus.google.com/1026510239446...\r\n- Amazing Agriculture Community: https://goo.gl/r8VrZZ', '2018-10-19', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joindate` date NOT NULL,
  `shotdesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `firstname`, `lastname`, `email`, `position`, `image`, `joindate`, `shotdesc`, `created_at`, `updated_at`) VALUES
(1, 'Votana ', 'Srey', 'votana.srey@gmail.com', 'Co-founder', '/images/members/SreyVotana.jpg', '2020-11-25', 'I am a sophomore of NIPTICT institute\r\nCurrently, I am studying at Here in computer science major, and also I am a  Co-founder at E-Tree', NULL, NULL),
(2, 'Ossa ', 'Souen', 'ossa.souen@gmail.com', 'CTO', '/images/members/SoeunOssa.jpg', '2020-11-25', 'I am a sophomore of NIPTICT institute\r\nCurrently, I am studying at Here in computer science major, and also I am a CTO at E-Tree ', NULL, NULL),
(3, 'Kemeng', 'Song', 'Kemeng.song@gmail.com', 'CEO', '/images/members/SongKemeng.jpg', '2020-11-25', 'I am a sophomore of NIPTICT institute\r\nCurrently, I am studying at Here in computer science major, and also I am a CEO at E-Tree ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Votana Srey', 'votana.srey@gmail.com', 'Hi HI HI', '2020-12-31 14:07:23', '2020-12-31 14:07:23'),
(2, 'Votana Srey', 'votana.srey@gmail.com', 'I recommand you ... BYe', '2020-12-31 14:08:03', '2020-12-31 14:08:03'),
(3, 'ossa', 'ossas201@gmail.com', 'Hello I came from cambodia', '2021-01-06 20:13:21', '2021-01-06 20:13:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(43, '2020_12_31_035821_create_categories_table', 2),
(17, '2020_12_28_042247_create_events_table', 1),
(18, '2020_12_28_172023_create_trees_table', 1),
(19, '2020_12_29_002214_create_members_table', 1),
(20, '2020_12_29_020819_create_partners_table', 1),
(21, '2020_12_30_075047_create_messages_table', 1),
(22, '2020_12_31_022307_create_learnings_table', 1),
(42, '2020_12_24_110044_create_users_table', 2),
(44, '2021_01_04_112207_create_comments_table', 2),
(51, '2021_01_07_021345_create_donations_table', 3),
(52, '2021_01_09_091200_create_orders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `quantity` int(11) NOT NULL,
  `total` double NOT NULL,
  `progress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tree_id` bigint(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_tree_id_foreign` (`tree_id`),
  KEY `orders_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `quantity`, `total`, `progress`, `tree_id`, `phone`, `address`, `city`, `country`, `zip_code`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 32, 156.8, 'processing', 1, 93997801, 'St 02, Samor Leav, Prey Kabbas, Takeo', 'Phnom Penh', 'Cambodia', '21108', 1, '2021-01-09 19:35:03', '2021-01-09 19:35:03'),
(2, 52, 208, 'processing', 8, 11988348, 'St 02, Samor Leav, Prey Kabbas, Takeo', 'Phnom Penh', 'Cambodia', '21108', 1, '2021-01-09 19:39:15', '2021-01-09 19:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'NIPTICT', '/images/partners/Niptict.png', NULL, NULL),
(2, 'Smart Axiata', '/images/partners/Smart.png', NULL, NULL),
(3, 'MAFF', '/images/partners/MAFF.jpg', NULL, NULL),
(4, 'PreakLeap', '/images/partners/PreakLeap.jpg', NULL, NULL),
(5, 'Tourism', '/images/partners/Tourism.png', NULL, NULL),
(6, 'Usaid', '/images/partners/usaid.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trees`
--

DROP TABLE IF EXISTS `trees`;
CREATE TABLE IF NOT EXISTS `trees` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `total` int(11) NOT NULL,
  `discount` double NOT NULL,
  `shotdesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `longdesc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryId` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `trees_categoryid_foreign` (`categoryId`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trees`
--

INSERT INTO `trees` (`id`, `name`, `price`, `total`, `discount`, `shotdesc`, `longdesc`, `image`, `categoryId`, `created_at`, `updated_at`) VALUES
(1, 'Albizia', 19.99, 21, 5, 'For the Australian tree commonly named \"Albizia\", see Paraserianthes lophantha plants may be called albizzias', 'They are commonly called silk plants, silk trees, or sirises. The obsolete spelling of the generic name – with double \'z\' – is still common, so the plants may be called albizzias. The generic name honors the Italian nobleman Filippo degli Albizzi, who introduced Albizia julibrissin to Europe in the mid-18th.', '/images/trees/Albizia.jpg', 1, NULL, NULL),
(2, 'Anacardium', 29.99, 10, 5, 'the cashews, are a genus of flowering plants in the family Anacardiaceae, native to tropical regions of the Americas.', 'The name Anacardium, originally from the Greek, actually refers to the nut, core or heart of the fruit, which is outwardly located (ana means \"upwards\" and -cardium means \"heart\").', '/images/trees/Anacardium.jpg', 1, NULL, NULL),
(3, 'Bambusa', 24.99, 12, 10, 'BGV works with bamboo and similar resources in rural Cambodia to provide maximum social, ecological and economic benefits to members of rural', 'The name Anacardium, originally from the Greek, actually refers to the nut, core or heart of the fruit, which is outwardly located (ana means \"upwards\" and -cardium means \"heart\").', '/images/trees/Bambusa.jpg', 1, NULL, NULL),
(4, 'Bombax', 23.99, 15, 5, 'Bombax is a genus of mainly tropical trees in the mallow family. They are native to western Africa, the Indian subcontinent, Southeast Asia,', 'Bombax is a genus of mainly tropical trees in the mallow family. They are native to western Africa, the Indian subcontinent, Southeast Asia, and the subtropical regions of East Asia and northern Australia. It is distinguished from the genus Ceiba, which has whiter flowers.\r\n\r\nCommon names for the genus include silk cotton tree, simal, red cotton tree, kapok, and simply bombax. Currently four species are recognised, although many plants have been placed in the genus that were later moved.', '/images/trees/Bombax.jpg', 2, NULL, NULL),
(5, 'Borassus', 26.99, 10, 5, 'Borassus (palmyra palm) is a genus of five species of fan palms, native to tropical regions of Africa, Asia and New Guinea.', 'These massive palms can grow up to 30 m (98 ft) high and have robust trunks with distinct leaf scars; in some species the trunk develops a distinct swelling just below the crown, though for unknown reasons.\r\nThe leaves are fan-shaped, 2–3 m long and with spines along the petiole margins (no spines in B. heineanus). The leaf sheath has a distinct cleft at its base, through which the inflorescences appear; old leaf sheaths are retained on the trunk, but fall away with time.', '/images/trees/Borassus.jpg', 2, NULL, NULL),
(6, 'Mangifera', 59.99, 10, 5, 'Mangifera is a genus of flowering plants in the cashew family, Anacardiaceae', 'Mangifera is a genus of flowering plants in the cashew family, Anacardiaceae. It contains approximately 69 species, with the best-known being the Common Mango (Mangifera indica). The center of diversity is in subtropical and tropical South Asia and Southeast Asia, while the highest number of species occur in India.[3] They are generally canopy trees in lowland rainforests, reaching a height of 30–40 m (98–131 ft)', '/images/trees/Mangifera.jpg', 3, NULL, NULL),
(7, 'Sesbania', 44.99, 12, 5, 'Sesbania is a genus of flowering plants in the pea family, Fabaceae, and the only genus found in tribe Sesbanieae', 'Sesbania is a genus of flowering plants in the pea family, Fabaceae, and the only genus found in tribe Sesbanieae. Riverhemp is a common name for plants in this genus.[2] Notable species include the rattlebox (Sesbania punicea), spiny sesbania (Sesbania bispinosa), and Sesbania sesban, which is used in cooking. Plants of this genus, some of which are aquatic, can be used in alley cropping to increase the soil\'s nitrogen content. The species of rhizobia responsible for nitrogen fixation in Sesbania rostrata is Azorhizobium caulinodans.\r\n\r\n', '/images/trees/Sesbania.jpg', 3, NULL, NULL),
(8, 'Vatica', 64.99, 10, 5, 'Vatica is a genus of plants in the family Dipterocarpaceae. Species[edit]. Species of the genus Vatica include: Vatica adenanii Meekiong', 'Vatica is a genus of plants in the family Dipterocarpaceae. Species[edit]. Species of the genus Vatica include: Vatica adenanii Meekiong', '/images/trees/Vatica.jpg', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/images/users/defult_profile.png',
  `dob` date DEFAULT NULL,
  `gender` char(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(450) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `city` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `firstname`, `lastname`, `image`, `dob`, `gender`, `password`, `address`, `city`, `country`, `zip_code`, `phone`, `created_at`, `updated_at`) VALUES
(2, 'ossa.soeun@student.niptict.edu.kh', 'Osaka', 'Ossa', '/images/users/defult_profile.png', '2005-04-26', 'Female', '$2y$10$NYDmaFAOa7YmI5z.dwI5i.AuTKWgfX6JbWWL17kywK0wXIFxgpwbe', 'Tnol bot, Pou Romchak, Prey Kabbas, Takeo', 'Phnom Penh', 'Cambodia', 21108, 12346598, '2021-01-06 10:34:37', '2021-01-06 10:34:37'),
(3, 'songkemeng@gmail.com', 'Kemeng', 'Song', '/images/users/defult_profile.png', NULL, NULL, '$2y$10$32p2AfqxOvdjiWA3uamWQ.tzMf7H58aZY9w6.LZodCRF6MdaA63SG', 'Kor, Pou Romchak, Prey Kabbas, Takeo', 'Phnom Penh', 'Cambodia', 21108, 12346599, '2021-01-07 23:02:52', '2021-01-07 23:02:52'),
(4, 'votanasrey@gmail.com', 'Votana', 'Srey', '/images/users/defult_profile.png', '2000-01-11', 'Male', '$2y$10$SplD.gXTrv5iJaZ1qx6sa.csoLxl9/o.go0Iy5aOo.NVCqioZGhxa', 'Dong Hit, Chompa, Chompa, Takeo', 'Phnom Penh', 'Cambodia', 21108, 93997801, '2021-01-09 01:13:48', '2021-01-09 01:30:03'),
(1, 'ossas201@gmail.com', 'Ossa', 'Soeun', '/images/users/1610345118.jpg', '2000-07-26', NULL, '$2y$10$Y25P.46frnjQ2p/Vj7Q5HuBc2NzVaVhUG4orY6LUuwNStF3Wg7Wj6', 'St 02, Samor Leav, Pou Romchak, Prey Kabbas', 'Phnom Penh', 'Cambodia', 21108, 11988348, '2021-01-10 20:02:39', '2021-01-10 23:05:19'),
(5, 'sokchetrasoeun@gmail.com', 'Sokchetra', 'Soeun', '/images/users/defult_profile.png', NULL, NULL, '$2y$10$Bskk5ihrVG25lzzQMf3m7etyzt12DCSyfhBnN.YCt5KO1q4EvCZdm', 'Samor Leav, Pou Romchak, Prey Kabbas, Takeo', 'Phnom Penh', 'Cambodia', 21108, 12346598, '2021-01-09 23:19:24', '2021-01-09 23:19:24'),
(7, 'ossas201@gmail.com.kh', 'Ossa', 'Ossa', '/images/users/defult_profile.png', NULL, NULL, '$2y$10$JH7jucZGkAwSBDs6GO0U.OgcnM07Cko5LqZOhEcaEjmNg62DE9.8i', NULL, NULL, NULL, NULL, NULL, '2021-01-10 22:57:36', '2021-01-10 22:57:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
