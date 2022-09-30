-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 09:35 AM
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
-- Database: `yashtrading`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `address`, `phone`, `email`) VALUES
(1, 'Shop no 01, Ground Floor, daulat Apartment co op Hsg Ltd, Rahmat Nagar, Behind Sitara Bakery, Virar Road, Nallasopara(East), Palghar Zone 2, Maharashtra-401209', '97699 88634', 'yashtrading@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `remember_token` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `profile_image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'YashTrading', 'vrdmsurat@gmail.com', '$2a$04$f8VmCBilK/MVwFnrECOE1u7IO7R98n9vvmCK8rTQHIK2.6zacQ3Ki', '1622449722Koala.jpg', '260908', '2021-05-31 05:40:50', '2021-05-31 03:01:41');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`, `created_at`, `updated_at`) VALUES
(2, 'Snacks', '2021-05-31 09:04:29', NULL),
(3, 'Spices', '2021-05-31 09:04:39', NULL),
(4, 'Pulses', '2021-05-31 09:04:52', NULL),
(6, 'Food', '2021-05-31 12:09:26', NULL),
(7, 'Others', '2021-06-01 05:46:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(25, 'Reena Vaghasiya', 'patelreena173@gmail.com', NULL, 'Your product is Best'),
(26, 'hina hirpara', 'hinahirpara64@gmail.com', 'hello', 'Your Products is Good...'),
(27, 'ravi', 'vrdmsurat@gmail.com', 'test', 'test n result');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `image`) VALUES
(1, 'batta1.jpg'),
(2, 'bchilli.jpg'),
(3, 'bkhakhara3.jpeg'),
(4, 'bmagaj.jpg'),
(5, 'bchanna.jpg'),
(6, 'bmasoordal.jpg'),
(7, 'bmag.jpg'),
(8, 'bpotato.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `scid` int(11) NOT NULL,
  `item_img` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `c_id`, `scid`, `item_img`, `description`, `price`, `created_at`, `updated_at`) VALUES
(2, 2, 7, '1622528358.jpg', 'MethiKhakhra is a thin cracker common in the Gujarati cuisine of western India, especially among Jains. It is made from mat bean, wheat flour and oil. It is served usually during breakfast.\r\n\r\n-Thin, crisp and full of flavour – khakhra is a favourite Gujarati snack.\r\n- Enjoy the break fast with yash’skhakhara\r\nSimply you can apply little melted ghee and sprinkle chaat masala or methi masala powder over the khakhra to give a yummy sour flavor. It can also be exchanged with the regular chapatti\r\nA healthy quick snack idea, we like whole wheat khakhra as it is made out of 100% whole wheat flour. Whole wheat flour is excellent for diabetics as they will not shoot up your blood sugar levels as they are a low GI food.', 155, '2021-06-01 04:43:42', '2021-06-07 00:12:05'),
(3, 3, 5, '1622531770redchili.jpg', 'Red chillies are jam-packed with Vitamin C that helps in supporting the immune system and combat chronic diseases. Prevents heart ailments: There are very powerful antioxidants in red chilli that help in clearing blockages in blood vessels and arteries.\r\n\r\n\r\nRed chillies are nothing but aged green chillies, which turned red and dried up with time. They lose most of their water content and worse, a major chunk of nutrients as well.\r\n\r\nThey are rich in vitamins, minerals, and various unique plant compounds. These include capsaicin, the substance that causes your mouth to burn. Capsaicin is linked to several health benefits, as well as adverse effects.', 250, '2021-06-01 07:16:10', '2021-06-03 00:36:53'),
(4, 4, 10, '1622531788magaj.png', 'One such seed that is used to replace cashews and almonds is Magajtari or melon seeds. Used extensively to thicken the curries, added to Mukhvas or digestives, to enrich granola bars or bread, the Magajtari seeds are quite versatile in use..\r\n\r\nFour seeds or  Magaj is a combination of four seeds/nuts: Almonds, Pumpkin seeds, Cantaloupe Seeds and Watermelon seeds. It is believed that eating these four seeds results in brain development and rejuvenation of brain cells.\r\n\r\n Magaj is a powerful antioxidant and thus helps to reduce free radical damage in the body. The seed oils being a rich source of fatty acids prevents several signs of aging like wrinkles, fine lines, dark circles, and spots. It also reduces the risk of skin cancer.', 250, '2021-06-01 07:16:28', '2021-06-03 01:08:21'),
(5, 6, 9, '1622531817atta.jpg', 'Whole Wheat Chakki Atta It is finely ground flour of whole wheat berries. It is derived by grinding the whole grain of wheat. It is high in fiber and more healthy and nutritious than white flour. It is a brownish flour with a coarse texture and sweet nutty flavor. \r\nThe word \"Whole\" is used to describe this flour as it includes every aspect of the grain, the bram, germ and the endosperm as well. It is also known as whole meal flour and is called Atta in india.\r\nBy ensuring that all the nutrients of the grain stay intact and protected in our packaging, we deliver the freshness of the fields combined with the power of the whole wheat.', 200, '2021-06-01 07:16:57', '2021-06-03 00:26:31'),
(6, 2, 8, '1622699868plain.jpg', 'Plain Khakhra is a thin cracker common in the Gujarati cuisine of western India, especially among Jains. It is made from mat bean, wheat flour and oil. It is served usually during breakfast.\r\n\r\n-Thin, crisp and full of flavour – khakhra is a favourite Gujarati snack.\r\n- Enjoy the break fast with yash’s khakhara \r\nSimply you can apply little melted ghee and sprinkle chaat masala or methi masala powder over the khakhra to give a yummy sour flavor. It can also be exchanged with the regular chapatti\r\nA healthy quick snack idea, we like whole wheat khakhra as it is made out of 100% whole wheat flour. Whole wheat flour is excellent for diabetics as they will not shoot up your blood sugar levels as they are a low GI food.', 130, '2021-06-03 05:57:48', '2021-06-07 00:12:32'),
(7, 2, 2, '1622700116masala.jpg', 'Masala Khakhara is a thin cracker common in the Gujarati cuisine of western India, especially among Jains. It is made from mat bean, wheat flour and oil. It is served usually during breakfast.\r\n\r\n-	Thin, crisp and full of flavour – khakhra is a favourite Gujarati snack.\r\n-	Enjoy the break fast with yash’s khakhara \r\n-	Simply you can apply little melted ghee and sprinkle chaat masala or methi masala powder over the khakhra to give a yummy sour flavor. It can also be exchanged with the regular chapatti\r\n-	A healthy quick snack idea, we like whole wheat khakhra as it is made out of 100% whole wheat flour. Whole wheat flour is excellent for diabetics as they will not shoot up your blood sugar levels as they are a low GI food.', 150, '2021-06-03 06:01:56', '2021-06-03 00:32:55'),
(8, 2, 18, '1622700300jeera khakhara 1005 x 1280.jpg', 'Regular jeera khakhras filled with the goodness of cumin seeds that adds to the crunchiness and gives you a tasty experience.\r\nJeera is one of the most aromatic Indian spices. The mouth watering Jeera Khakhra is any foodie’s delight. Strong aroma of Jeera will leave you asking for more!!!!!!!!!!\r\n\r\n- Export Quality Khakhra (Ready to eat)\r\n- Exclusively Made from Natural Ingredients\r\n- No Artificial Flavors, No Synthetic Colours , No added Chemical Preservatives\r\n- Hygienically made in FSSAI licensed Manufacturing Unit', 200, '2021-06-03 06:05:00', NULL),
(9, 4, 11, '1622701128MUNG - 1OO5 X 128O.jpg', 'Yash Trading’s Mung bean flour can come in a green flour (made from mung beans with the skins left on) or yellow flour (mung beans de-skinned). Either variety will work. It may also be labeled as “moong bean,” “green bean starch” or “green bean flour.”', 120, '2021-06-03 06:18:48', NULL),
(10, 4, 12, '1622701183TOOR DAL - 1OO5 X 128O.jpg', 'Toor dal a rich source of potassium, this mineral acts as a vasodilator reducing the blood constriction and stabilizes the blood pressure. Regular addition of toor dal in your meal is beneficial for patients suffering from hypertension as they are prone to increased risk of heart disease', 150, '2021-06-03 06:19:43', NULL),
(11, 7, 16, '1622701226POTATO - 1OO5 X 128O.jpg', 'Yash trading’s potato is a root vegetable native to the Americas, a starchy tuber of the plant Solanum tuberosum, and the plant itself is a perennial in the nightshade family, Solanaceae. \r\nPure natural potato, Potatoes are a good source of fiber, which can help you lose weight by keeping you full longer. Fiber can help prevent heart disease by keeping cholesterol and blood sugar levels in check', 20, '2021-06-03 06:20:26', NULL),
(12, 7, 17, '1622701264RED ONION - 1OO5 X 128O.jpg', 'Yash trading’s red onion Packed With Nutrients. Onions are nutrient-dense, meaning they\'re low in calories but high in vitamins and minerals. \r\nonions were most effective at killing human cancer cells compared with other onions thanks to their higher levels of the antioxidants quercetin and anthocyanin.', 100, '2021-06-03 06:21:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` int(11) NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `linkedin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `facebook`, `twitter`, `instagram`, `linkedin`) VALUES
(1, 'https://www.facebook.com', 'https://twitter.com', 'https://www.instagram.com', 'https://in.linkedin.com');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `subcname` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `cid`, `subcname`, `created_at`, `updated_at`) VALUES
(2, 2, 'Masala Khakhra', '2021-05-31 09:34:20', '2021-05-31 07:20:51'),
(5, 3, 'Red chili', '2021-05-31 09:50:22', NULL),
(7, 2, 'Methi Khakhra', '2021-06-01 04:43:07', NULL),
(8, 2, 'Plain Khakhra', '2021-06-01 05:47:48', NULL),
(9, 6, 'Atta', '2021-06-01 05:48:13', NULL),
(10, 4, 'Magaj', '2021-06-01 05:48:38', NULL),
(11, 4, 'Mung', '2021-06-01 05:48:56', NULL),
(12, 4, 'Toor', '2021-06-01 05:56:04', NULL),
(13, 4, 'Rajma', '2021-06-01 05:56:16', NULL),
(14, 4, 'Channa', '2021-06-01 05:56:28', NULL),
(15, 4, 'Masoor', '2021-06-01 05:56:40', NULL),
(16, 7, 'Potato', '2021-06-01 05:56:53', NULL),
(17, 7, 'Red Onions', '2021-06-01 05:57:04', NULL),
(18, 2, 'Jira Khakhra', '2021-06-03 05:55:21', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
