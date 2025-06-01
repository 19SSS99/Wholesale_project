-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 29, 2023 at 12:51 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autismxn_wholesale`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'ziad', 'ziad@yahoo.com', '$2y$10$VWgFylpSVZUn9QOqbb5goeXixGpmU2EWXLpgjS4nM74WWxVte10Y2', '2022-12-04 21:05:31', '2023-01-27 21:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qnt` int(11) NOT NULL,
  `sum` int(111) DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `qnt`, `sum`, `created_at`, `updated_at`) VALUES
(23, 13, 6, 3, 6000, '2023-01-28 19:32:14.000000', '2023-01-28 19:32:14.000000'),
(43, 19, 7, 1, 888, '2023-01-28 22:56:31.000000', '2023-01-28 22:56:31.000000'),
(44, 19, 7, 1, 888, '2023-01-28 22:56:39.000000', '2023-01-28 22:56:39.000000'),
(45, 19, 7, 2, 1776, '2023-01-28 22:56:56.000000', '2023-01-28 22:56:56.000000'),
(46, 19, 7, 2, 1776, '2023-01-28 22:57:06.000000', '2023-01-28 22:57:06.000000');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'category 2', '2023-01-26 02:49:56.000000', '2023-01-26 02:51:30.000000'),
(3, 'category 1', '2023-01-26 02:52:26.000000', '2023-01-26 02:52:26.000000');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_01_23_133709_create_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(191) NOT NULL,
  `username` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `order_count` int(191) NOT NULL,
  `total` int(191) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `username`, `phone`, `address`, `order_count`, `total`, `created_at`, `updated_at`) VALUES
(7, 7, 'zezo', '01012551601', 'mansoura', 2, 85000, '2023-01-27 20:34:01.000000', '2023-01-27 20:34:01.000000'),
(8, 7, 'admin2', '0547877519', 'dddd', 1, 393384, '2023-01-27 20:36:42.000000', '2023-01-27 20:36:42.000000'),
(9, 7, 'autismx.net', '05478775194', 'dddd', 2, 106000, '2023-01-27 20:37:53.000000', '2023-01-27 20:37:53.000000'),
(10, 7, 'ziad', '01012551601', 'mansoura', 1, 75000, '2023-01-27 20:39:43.000000', '2023-01-27 20:39:43.000000'),
(12, 13, 'mona', '0154874858', 'gjhuiyutuy', 1, 2000, '2023-01-28 19:31:35.000000', '2023-01-28 19:31:35.000000'),
(13, 7, 'admin4', '01012551601', 'mansoura', 1, 22500, '2023-01-28 19:36:20.000000', '2023-01-28 19:36:20.000000'),
(14, 15, 'mona', '0154874856', 'gjhuiyutuy', 1, 6000, '2023-01-28 19:38:48.000000', '2023-01-28 19:38:48.000000'),
(15, 16, 'Alllaa', '778766', 'Ggfgvvv', 1, 2500, '2023-01-28 19:42:04.000000', '2023-01-28 19:42:04.000000'),
(16, 7, 'ziad', '01012551601', 'mansoura', 1, 50000, '2023-01-28 19:43:08.000000', '2023-01-28 19:43:08.000000'),
(17, 16, 'Ggg', 'Gfff', 'Ffd', 1, 6000, '2023-01-28 19:48:12.000000', '2023-01-28 19:48:12.000000'),
(18, 16, 'Ff', 'Cfgh', 'Vgf', 1, 5000, '2023-01-28 20:08:28.000000', '2023-01-28 20:08:28.000000'),
(19, 16, 'Ffufu', 'Fugfy', 'Gjcg', 1, 6000, '2023-01-28 20:09:28.000000', '2023-01-28 20:09:28.000000'),
(20, 16, 'Ffass', 'Bhashs', 'Shshsh', 1, 50000, '2023-01-28 20:11:03.000000', '2023-01-28 20:11:03.000000'),
(21, 7, 'ziad', '01012551601', 'mansoura', 1, 50000, '2023-01-28 20:12:05.000000', '2023-01-28 20:12:05.000000'),
(22, 16, 'Hffyyd', 'Ffuhfu', 'Hfyfd', 1, 50000, '2023-01-28 20:13:29.000000', '2023-01-28 20:13:29.000000'),
(23, 7, 'admin4', '01012551601', 'mansoura', 1, 50000, '2023-01-28 20:14:27.000000', '2023-01-28 20:14:27.000000'),
(24, 16, 'Gcxhc', '34572782', 'Hxxhchcxh', 1, 5000, '2023-01-28 20:14:28.000000', '2023-01-28 20:14:28.000000'),
(25, 7, 'admin4', '01012551601', 'mansoura', 1, 50000, '2023-01-28 20:18:07.000000', '2023-01-28 20:18:07.000000'),
(26, 7, 'admin4', '01012551601', 'mansoura', 1, 888, '2023-01-28 20:45:17.000000', '2023-01-28 20:45:17.000000'),
(27, 7, 'ali ghazal', '01012551601', 'mansoura', 2, 480000, '2023-01-28 22:40:13.000000', '2023-01-28 22:40:13.000000'),
(28, 7, 'karim', '0547877519', 'met gamr', 2, 50000, '2023-01-28 22:41:23.000000', '2023-01-28 22:41:23.000000');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qnt` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `qnt`, `sum`, `created_at`, `updated_at`) VALUES
(5, 7, 3, 5, 10000, '2023-01-27 20:34:01', '2023-01-27 20:34:01'),
(6, 7, 4, 150, 75000, '2023-01-27 20:34:01', '2023-01-27 20:34:01'),
(7, 8, 7, 443, 393384, '2023-01-27 20:36:42', '2023-01-27 20:36:42'),
(8, 9, 6, 43, 86000, '2023-01-27 20:37:53', '2023-01-27 20:37:53'),
(9, 9, 4, 40, 20000, '2023-01-27 20:37:53', '2023-01-27 20:37:53'),
(10, 10, 4, 150, 75000, '2023-01-27 20:39:43', '2023-01-27 20:39:43'),
(12, 12, 6, 1, 2000, '2023-01-28 19:31:35', '2023-01-28 19:31:35'),
(13, 13, 4, 45, 22500, '2023-01-28 19:36:20', '2023-01-28 19:36:20'),
(14, 14, 3, 3, 6000, '2023-01-28 19:38:48', '2023-01-28 19:38:48'),
(15, 15, 4, 5, 2500, '2023-01-28 19:42:04', '2023-01-28 19:42:04'),
(16, 16, 4, 100, 50000, '2023-01-28 19:43:08', '2023-01-28 19:43:08'),
(17, 17, 1, 6, 6000, '2023-01-28 19:48:12', '2023-01-28 19:48:12'),
(18, 18, 1, 5, 5000, '2023-01-28 20:08:28', '2023-01-28 20:08:28'),
(19, 19, 1, 6, 6000, '2023-01-28 20:09:28', '2023-01-28 20:09:28'),
(20, 20, 4, 100, 50000, '2023-01-28 20:11:03', '2023-01-28 20:11:03'),
(21, 21, 4, 100, 50000, '2023-01-28 20:12:05', '2023-01-28 20:12:05'),
(22, 22, 4, 100, 50000, '2023-01-28 20:13:29', '2023-01-28 20:13:29'),
(23, 23, 4, 100, 50000, '2023-01-28 20:14:27', '2023-01-28 20:14:27'),
(24, 24, 1, 5, 5000, '2023-01-28 20:14:28', '2023-01-28 20:14:28'),
(25, 25, 4, 100, 50000, '2023-01-28 20:18:07', '2023-01-28 20:18:07'),
(26, 26, 7, 1, 888, '2023-01-28 20:45:17', '2023-01-28 20:45:17'),
(27, 27, 5, 400, 400000, '2023-01-28 22:40:13', '2023-01-28 22:40:13'),
(28, 27, 6, 40, 80000, '2023-01-28 22:40:13', '2023-01-28 22:40:13'),
(29, 28, 5, 44, 44000, '2023-01-28 22:41:23', '2023-01-28 22:41:23'),
(30, 28, 6, 3, 6000, '2023-01-28 22:41:23', '2023-01-28 22:41:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qnty` int(11) NOT NULL,
  `photo` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qnty_sold` int(191) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `qnty`, `photo`, `price`, `user_id`, `qnty_sold`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'product2', 11, 'muWDAGeRwmokk5AlpDwosX6a91TgrF3YJiGPMgbN.png', 1000, 6, 5, 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', '2023-01-23 13:03:24', '2023-01-28 20:14:28'),
(3, 1, 'product1', 38, 'gZNfT5QvB0sVCr2VNJeXz4muomcLU0TzVFESsDcb.png', 2000, 6, 16, 'tttttttttttttttttt', '2023-01-23 19:03:01', '2023-01-28 21:24:19'),
(4, 3, 'product3', 20, 'BnNFZvE3YwpFt9H8HhKQ4DoSrv0IOvc0npLIeTd9.png', 500, 6, 0, 'dddddddddddddddddddddddddddddddd', '2023-01-23 19:03:27', '2023-01-28 22:42:58'),
(5, 3, 'product4', 444, '0OjYYUtuCETvDXOiv7LLCjHy28oCtRolSUhKb6m9.png', 1000, 6, 444, 'dddddddddddddddddddddddddddddd', '2023-01-23 19:03:51', '2023-01-28 22:41:23'),
(6, 1, 'product5', 44, 'ebZJ1U2ZXwlHCP8puNAtof1DJvNZQEanNmg706iy.png', 2000, 6, 44, 'ddddddsdwwwwwwwwwwwwwwwwwwwwwwwwwww', '2023-01-23 19:04:12', '2023-01-28 22:41:23'),
(7, 1, 'product6', 10, 'DAQGYKKt8pZ7ce2Fn5axXD0pALS9tGlsOvRJkjXG.png', 888, 6, 0, 'cccccccccccccccccccccccccccccccccccccc', '2023-01-23 19:04:31', '2023-01-28 21:11:38'),
(8, 3, 'product7', 33, 'F8crY3kRXpdQGRqgqDawDs2r9vTcg83nYqgvfPTP.png', 3000, 6, 33, 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', '2023-01-23 19:04:54', '2023-01-27 20:41:36'),
(11, 1, 'new', 10, 'LNeDIJloyNeV6YgE4hlyvQN468vDsbKbq8w9wO9R.jpg', 200, 10, 0, 'fhfhyfy', '2023-01-28 18:42:01', '2023-01-28 18:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `email`, `phone`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'mona@yahoo.com', 'mona', 'mona@com', '4540448478', '$2y$10$nYyXnoIgfB5wkmMUK/heH.I5jk3SnFTcwyOrkaDgIG7tqfrUy4QZS', 2, NULL, '2023-01-28 18:46:53', '2023-01-28 18:46:53'),
(12, 'mona', 'mona', 'mona13@com', '0254548787', '$2y$10$Lm4Rdnr7kMNxZwG25cs3MuihXQFqFdieJPbcY9SM1hS3tO23nvBsK', 2, NULL, '2023-01-28 18:48:52', '2023-01-28 18:48:52'),
(4, 'ziad', 'ziad Abdulftah zkria', 'mousaziad488@gmail.comddd', '777777777', '$2y$10$2R0/Us28uYU4czjoXQpAHe/0MJTBJoc0JsLHPBDaqA39bt2s4wdtm', 2, NULL, '2023-01-23 08:59:28', '2023-01-23 08:59:28'),
(5, 'ziad', 'ziad Abdulftah', 'mousaziad488@gmail.comfff', '1012544444', '$2y$10$UxDOGxAf806RUWpfEh3VWuYZCN5Zd/EjrLkAJgk6dj928QxLB8UXG', 2, NULL, '2023-01-23 09:03:28', '2023-01-23 09:03:28'),
(6, 'ziadssss', 'sssss', 'sss@sss', '222222', '$2y$10$7L2Lw8JrMv.OeQWUb.v7luMMqo3bzoHxKyf6CKgxjT.FVPP.PxPIW', 2, NULL, '2023-01-23 10:30:49', '2023-01-23 10:30:49'),
(7, 'adham', 'adham', 'adham@yahoo.com', '22222222', '$2y$10$VpLj2.rOuLdnvVUwEd1JlumgLOn7KhSLg0Y/hdKBLa0lxutPqWwQ2', 1, NULL, '2023-01-23 11:24:06', '2023-01-23 11:24:06'),
(8, 'samir@sss', 'samir', 'mousaziad498@gmail.com', '1012551607', '$2y$10$eWQFasDJd4B4TtBTXB73f.uqtuj9gBoAuQI521ZuuftmLttbglIte', 1, NULL, '2023-01-25 20:40:39', '2023-01-25 20:40:39'),
(9, 'Eng /Sara', 'Sara', 'Sara@sara', '0103939838', '$2y$10$KXqAl4Y1.rL0RF2dGicY4e8.Nf1h56t/Jm7KjxnHeQOma/Hw.YDKe', 2, NULL, '2023-01-28 00:34:38', '2023-01-28 00:34:38'),
(10, 'Eng Sara', 'Sara Ahmed', 'SA@SA.com', '0154874858', '$2y$10$lbVHM6/pPzZLxjkUKoFfc.WICVh7FJOKSlpCPgEL.ckpbhI4qSKby', 2, NULL, '2023-01-28 18:29:45', '2023-01-28 18:29:45'),
(13, 'mona', 'mona', 'ssm@ldopf', '3435454654', '$2y$10$dSzBaagHHo.0VDzwdxWidut5QN39C3Y3BdHzjLN6cI0bDI1YKD3lG', 1, NULL, '2023-01-28 18:49:36', '2023-01-28 18:49:36'),
(14, 'mona', 'Sara Ahmed', 'Eng@Sara', '0154874856', '$2y$10$FL48.xce4GPASq2Gep9l0ezjrcFQfbQsWEMialZjrhDOLE4O/KtIe', 2, NULL, '2023-01-28 19:35:34', '2023-01-28 19:35:34'),
(15, 'Eng@ara', 'mona', 'En@Sara', '5989999999', '$2y$10$VzCSXYqCzSit2Pj50o3nfepdW2aKdcPbqthY/A5l.7a4taD7aAl46', 1, NULL, '2023-01-28 19:38:19', '2023-01-28 19:38:19'),
(16, 'Alll', 'Alaa', 'Al@com', '467357865', '$2y$10$x5rIx71/jfemmYBUqJtZj.eA5CMTAY5aPpO1Dl1JrSsMTkRv4sMle', 1, NULL, '2023-01-28 19:41:24', '2023-01-28 19:41:24'),
(17, 'Ahad', 'Ahad', 'hamadbalhareth2@gmail.com', '0561668388', '$2y$10$Atgxz.usCjIJIIYbEmzoPeEQiA0hXX8.KbJ0bPPE7B.Qi7kUqDSOa', 1, NULL, '2023-01-28 22:41:00', '2023-01-28 22:41:00'),
(18, 'Ahad', 'Ahad', 'Ahaad22sh@gmail.com', '0503680328', '$2y$10$qgEHjv4J4J3c0bIAANAwkuTrZsoMrTe50lKYbuC5MBhVG9j5Tw3Wm', 2, NULL, '2023-01-28 22:48:57', '2023-01-28 22:48:57'),
(19, 'Ahad', 'Ahaaaad', 'ahaad927@gmail.com', '0506790503', '$2y$10$6ngORvQe1VfdVdXyS271QucyGbEfYWK0R6gYc4sdyETla6aH6aBMi', 1, NULL, '2023-01-28 22:56:20', '2023-01-28 22:56:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
