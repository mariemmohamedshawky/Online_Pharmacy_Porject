-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 05:49 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2020_03_20_180728_create_admins_table', 1),
(5, '2014_10_12_000000_create_users_table', 2),
(6, '2014_10_12_100000_create_password_resets_table', 2),
(7, '2019_08_19_000000_create_failed_jobs_table', 2),
(8, '2020_03_23_210745_create_products_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payWay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_name`, `email`, `product_name`, `product_price`, `product_quantity`, `phone`, `address`, `payWay`) VALUES
(1, 'nada farid', 'nodyfared6@gmail.com', 'ColdCare', 400, 1, 1122334455, '4-street Helwan-city', 'online'),
(34, 'ahmed', 'ahmed@gmail.com', 'Bioderma', 152, 1, 1144556622, '5-street Naser-city ', 'online'),
(35, 'asmaa', 'asmaa@gmail.com', 'Chanca piedra', 155, 1, 1144556622, '6-street Manyal-city ', 'online'),
(37, 'omar', 'omeer@gmail.com', 'Chanca piedra', 155, 1, 1144778899, '6-street october -city', 'offline'),
(55, 'mohamed', 'mohamed@gmail.com', 'Chanca piedra', 155, 3, 1177889966, '6-street Ainshams', 'online'),
(56, 'mariem', 'mariem12@gmail.com', 'Bioderma', 152, 1, 1144556622, '6-october', 'online');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `po_id` bigint(20) UNSIGNED NOT NULL,
  `po_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `po_price` int(11) NOT NULL,
  `po_description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `po_date` date NOT NULL,
  `po_img` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `po_user` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`po_id`, `po_name`, `po_price`, `po_description`, `po_date`, `po_img`, `po_user`) VALUES
(9, 'Bioderma', 152, 'Bioderma  is a privately owned French pharmaceutical company that specialises in medication for dermatological and hair/scalp conditions, as well as for Pediatry and cell regeneration.[4] It was founded in 1977.', '2022-02-25', 'product_01.png', NULL),
(10, 'Chanca piedra', 155, 'Chanca piedra is most commonly used by mouth for various disorders of the urinary tract, digestive tract, and liver, but there is no good scientific evidence to support these or other uses.', '2022-02-26', 'product_02.png', NULL),
(11, 'ColdCare', 400, 'Umcka ColdCare chewables are clinically proven to shorten the duration and reduce the severity of common cold symptoms such as nasal & bronchial irritations, congestion, sore throat, and cough. And they taste great too!', '2022-02-25', 'product_03.png', NULL),
(12, 'CetylPure', 21, 'CetylPure is an exclusive and patented blend of cetyl myristoleate, a cetylated fatty acid. This unique natural compound was discovered and isolated an American scientist in the 1970s.', '2022-02-25', 'product_04.png', NULL),
(13, 'cla core', 19, 'cla core is a naturally-occurring fatty acid found in meat, dairy, and saff is the highest quality, purity- and potency-conjugated linoleic acid (CLA) available. It’s formulated to fit the fat-reducing, lean-muscle maintenance needs of an individual.', '2022-02-25', 'product_05.png', NULL),
(14, 'poo puree', 152, 'poo puree is a privately owned French pharmaceutical company that specialises in medication for dermatological and hair/scalp conditions, as well as for Pediatry and cell regeneration.[4] It was founded in 1977.', '2022-02-25', 'product_06.png', NULL),
(15, 'Bioderma', 152, 'Bioderma  is a privately owned French pharmaceutical company that specialises in medication for dermatological and hair/scalp conditions, as well as for Pediatry and cell regeneration.[4] It was founded in 1977.', '2022-02-25', 'product_01.png', NULL),
(18, 'CetylPure', 21, 'CetylPure is an exclusive and patented blend of cetyl myristoleate, a cetylated fatty acid. This unique natural compound was discovered and isolated an American scientist in the 1970s.', '2022-02-25', 'product_04.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ZOP4383IBlg4Cz0Cxyc2NKChR1zN4PiGGZkm5SLt', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidmhhekR6OFVOZTc0VkxrTkd1MDRwaXpzemh1NjJEWG1xNnM0WFdkZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODEvb25saW5lX1BoYXJtYWN5X1BvcmplY3QvcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1590900222);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mariem', 'mariemmohamed154@gmail.com', 0, NULL, '$2y$10$zFNOURLzbIqEsDFSWcfEaudj8qTv.m6e74PGTlsLNoqGliXuWD3rW', NULL, '2020-03-23 06:04:39', '2020-03-23 06:04:39'),
(2, 'admin', 'admin@gmail.com', 1, NULL, '$2y$10$HpGNvWzXqqdWVt.rbDKzneRmqLAHGVsiqym/rsCY9n9.eVd1tqrnG', '3lxGSJVI8i0118HYieKftNiHL8KapSBa4bkS0grtIRJnkFujSlQrYdEKJDPR', '2020-03-23 06:15:07', '2020-03-23 06:15:07'),
(7, 'omar', 'omeer@gmail.com', 0, NULL, '$2y$10$4.jhW5wuVk6nzR2PKy8QH.KFW9hpMVpca6laGFadLfCdsDsVkTFQO', NULL, '2020-06-04 09:53:06', '2020-06-04 09:53:06'),
(10, 'nada farid', 'nodyfared6@gmail.com', 0, NULL, '$2y$10$hQX0YKOzInISxGY/bZ0Vluohe5Pyhe8PxtUF6T/rWCi.U1oFrXgNG', NULL, '2020-06-05 03:37:12', '2020-06-05 03:37:12'),
(11, 'ahmed', 'ahmed@gmail.com', 0, NULL, '$2y$10$hguKTbHMs/7OmMF9r/adxO29vfgzH9DhKFjONTQ0K/BwIHJivYBMK', NULL, '2020-06-10 03:27:19', '2020-06-10 03:27:19'),
(12, 'asmaa', 'asmaa@gmail.com', 0, NULL, '$2y$10$9fRXrOys8RKRkNQqC0/QNO/18agnat02mvOZ1JPUBntkZO7nTGJRG', NULL, '2020-06-10 11:55:36', '2020-06-10 11:55:36'),
(13, 'mohamed', 'mohamed@gmail.com', 0, NULL, '$2y$10$qouJeGiiqXxFamVc1UwvXeYPYzAzbNpDkWukS0lG621ZXKFoVBJbi', NULL, '2020-06-11 06:34:28', '2020-06-11 06:34:28'),
(14, 'mariem', 'mariem12@gmail.com', 0, NULL, '$2y$10$tt5LM/YAG.3NOUnZMvIfvuxSLKUz7izyKqdDk9vr4wmGQcvgncy..', NULL, '2020-06-11 07:03:35', '2020-06-11 07:03:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`po_id`),
  ADD KEY `products_po_user_foreign` (`po_user`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `po_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
