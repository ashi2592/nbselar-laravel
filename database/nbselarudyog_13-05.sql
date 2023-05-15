-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 02:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nbselarudyog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `summary` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `is_parent` tinyint(1) NOT NULL DEFAULT 1,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `added_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(20) NOT NULL,
  `company_title` varchar(255) NOT NULL,
  `company_description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_title`, `company_description`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'What is Lorem Ipsum5555?', '<p><strong>Lorem Ipsum89999999999999999999999</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing<em> Lorem Ipsum passages, and more recently </em>with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'http://localhost/nbselar/public/Images/company/202305071519Capture-04.PNG', 1, '2022-12-29 11:41:57', '2023-05-07 10:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

CREATE TABLE `machines` (
  `id` int(10) NOT NULL,
  `machine_name` varchar(255) DEFAULT NULL,
  `machine_location` varchar(255) DEFAULT NULL,
  `machine_lat` text DEFAULT NULL,
  `machine_long` text DEFAULT NULL,
  `shop_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `machines`
--

INSERT INTO `machines` (`id`, `machine_name`, `machine_location`, `machine_lat`, `machine_long`, `shop_name`, `created_at`, `updated_at`) VALUES
(1, 'Good ol\' days', 'South Korea', NULL, NULL, 'South Korea', '2023-01-05 17:01:42', '2023-01-05 17:01:42'),
(2, 'ol\' days', 'South Korea', NULL, NULL, 'South Korea', '2023-01-05 17:01:59', '2023-01-05 17:01:59'),
(3, 'Coffee Mandalay', 'South Korea', NULL, NULL, 'South Korea', '2023-01-05 17:02:17', '2023-01-05 17:02:17'),
(4, 'Coffee Mandalay', 'South Korea', NULL, NULL, 'South Korea', '2023-01-06 13:14:07', '2023-01-06 13:14:07'),
(5, 'Coffee Mandalay', 'South Korea', '9.9252° N', '78.1198° E', 'South Korea', '2023-01-06 13:18:25', '2023-01-06 13:18:25'),
(6, 'Coffee Mandalay22', 'South Korea6', '9.9252° N', '78.1198° E', 'South Korea6', '2023-01-06 13:18:47', '2023-01-06 13:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_12_14_125732_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 2, 'authToken', '1512e7bffb1f9095f40334508d42e35390664e627b53a188c6c0d3d046964752', '[\"*\"]', NULL, '2022-12-15 10:30:58', '2022-12-15 10:30:58'),
(2, 'App\\Models\\User', 3, 'authToken', '859a3e1716e69792c3a3b8b8dce427b019b61fb13caad658b7f2a04844cd44ff', '[\"*\"]', NULL, '2022-12-15 10:32:41', '2022-12-15 10:32:41'),
(3, 'App\\Models\\User', 3, 'authToken', 'f39c7226cd318de80cc8d230f8a36af3f6bd5be5676d9c5a1350ca32613029d2', '[\"*\"]', NULL, '2022-12-16 01:33:59', '2022-12-16 01:33:59'),
(4, 'App\\Models\\User', 3, 'authToken', '0d6e4c1e4d701ae894f19112b76ad2c2e2b6d3966c6a080bb51641e154b16a5b', '[\"*\"]', NULL, '2022-12-16 01:35:10', '2022-12-16 01:35:10'),
(5, 'App\\Models\\User', 3, 'authToken', 'cff14e98851c13913269734824ccec60a08f28feab79381faea3776c19d1d868', '[\"*\"]', NULL, '2022-12-16 01:35:35', '2022-12-16 01:35:35'),
(6, 'App\\Models\\User', 3, 'authToken', '129e7553365f43b75cd65083c6c9c972e445fc561685ecd49698c9e72184637f', '[\"*\"]', NULL, '2022-12-16 01:42:11', '2022-12-16 01:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `description` longtext DEFAULT NULL,
  `photo` text NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 1,
  `condition` enum('default','new','hot') NOT NULL DEFAULT 'default',
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `price` double(8,2) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `child_cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `photo` text NOT NULL,
  `is_email_verify` int(20) DEFAULT NULL COMMENT '0=no,1=yes',
  `is_phone_verify` int(20) DEFAULT NULL COMMENT '0=no,1=yes',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobnum` varchar(255) DEFAULT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `photo`, `is_email_verify`, `is_phone_verify`, `email_verified_at`, `password`, `mobnum`, `uid`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@admin.com', 'http://localhost/nbselar/public/Images/profile/202305071559Capture-04.PNG', 1, 1, NULL, '$2y$10$peRuTOqd3lGUibyom7HgCOf0x0GpwVBKprbjbuX2JdAiCjer/jHwa', '9304781861', '', 'IM9LQHqLMfVKQdhM8Av8yUuCrg3bpkJVjj5ZTRMR6ehYmUBXezbj2cHwZuhy', '2022-12-12 02:42:46', '2023-05-07 10:31:11'),
(44, 'hh', 'mkitechnology@gmail.com', 'http://localhost/nbselar/public/Images/profile/Capture-01.PNG', 1, 1, NULL, '$2y$10$.Ajl3OxgZ9F2enKVZLw10uEghVigdztxDVBeTnaoj.ntOk3RgRqSa', '9304781861', '99999', NULL, '2023-05-06 10:45:37', '2023-05-06 10:45:37'),
(45, 'cdcdsfsdfsdfsdfs', 'superadmin@example.com', 'http://localhost/nbselar/public/Images/profile/Capture-05.PNG', 1, 1, NULL, '$2y$10$R3iMmxkp3NkRzXydxDNZreO.fd4sUQjCpupQiNZP3riC70usxIb26', '9304781861', '100000', NULL, '2023-05-06 10:48:14', '2023-05-06 10:48:14'),
(48, 'lorem ipsum', 'admin78888888@admin.com', 'http://localhost/nbselar/public/Images/profile/202305071451Capture-01.PNG', 1, 1, NULL, '$2y$10$D/MScYAsbpS3PBbBrblSc.WzUVbJWGdBciHjmgpwQRhDH6jopIPSS', '93047818619566666', '100000', NULL, '2023-05-07 09:19:32', '2023-05-07 09:22:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`),
  ADD KEY `categories_added_by_foreign` (`added_by`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `machines`
--
ALTER TABLE `machines`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_added_by_foreign` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
