-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 10, 2025 at 04:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `travelers` int(11) NOT NULL,
  `travel_date` date NOT NULL,
  `additional_requests` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('pending','approved','rejected','completed') NOT NULL DEFAULT 'pending',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `phone`, `package`, `travelers`, `travel_date`, `additional_requests`, `created_at`, `updated_at`, `status`, `user_id`) VALUES
(1, '4hz9axWYuT', 'apmkm@mdgo.om', '0388771846', 'everest-base-camp', 1, '2024-11-30', NULL, '2024-11-28 19:10:53', '2024-11-28 19:35:12', 'approved', NULL),
(2, 'agb6JXb1gx', 'apmkm@mdgo.om', '2657094685', 'everest-base-camp', 298075, '2024-11-30', NULL, '2024-11-28 19:11:36', '2024-11-28 19:48:13', 'rejected', NULL),
(3, 'GlKs5MGi6r', 'apmkm@mdgo.om', '8577587869', 'everest-base-camp', 321557, '2024-11-30', NULL, '2024-11-28 19:12:14', '2024-11-28 22:26:39', 'rejected', NULL),
(4, 'LniT8YuFdc', 'apmkm@mdgo.om', '4558428419', 'everest-base-camp', 976084, '2024-11-30', NULL, '2024-11-28 19:12:24', '2024-12-01 07:19:43', 'approved', NULL),
(5, 'AXVsUd2K3G', 'golu@mdgo.om', '5093719326', 'lumbini-pilgrimage', 12, '2024-11-30', NULL, '2024-11-28 22:25:37', '2024-11-28 22:26:03', 'approved', NULL),
(6, 'ygViPu0Smu', 'golu@mdgo.om', '0495028520', 'lumbini-pilgrimage', 992300, '2024-11-30', NULL, '2024-11-28 22:32:15', '2024-12-01 07:19:42', 'approved', NULL),
(7, 'nischal', 'n@gmail.com', '9810108166', 'kathmandu-heritage', 2, '2024-11-30', NULL, '2024-11-28 23:56:00', '2024-11-28 23:56:12', 'rejected', NULL),
(8, 'FsHbhiUx74', 'golu@mdgo.om', '4043489660', 'lumbini-pilgrimage', 1, '2024-12-01', NULL, '2024-12-01 07:19:32', '2024-12-01 07:19:41', 'approved', NULL),
(9, 'Abhishek Thapa', 'abhishekthapa115@gmail.com', '9867739191', 'everest-base-camp', 8, '2025-01-23', NULL, '2025-01-15 11:58:36', '2025-01-15 11:58:36', 'pending', NULL),
(10, '7pgkU2dhH5', 'golu@mdgo.om', '6135880960', 'lumbini-pilgrimage', 674658, '2025-01-31', NULL, '2025-01-15 11:59:18', '2025-01-15 11:59:18', 'pending', 3),
(11, 'Golu Rawal', 'golu@gmail.com', '3955024584', 'lumbini-pilgrimage', 914499, '2025-01-30', NULL, '2025-01-15 12:01:23', '2025-01-15 12:01:23', 'pending', 4),
(12, 'oUh6ufthhS', 'golu@mdgo.om', '1538496211', 'lumbini-pilgrimage', 303560, '2025-01-30', NULL, '2025-01-15 12:04:52', '2025-01-15 12:04:52', 'pending', 4);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_29_004933_create_bookings_table', 2),
(5, '2024_11_29_011531_add_status_to_booking_table', 3),
(6, '2025_01_15_164832_add_new_columns_in_users_table', 4),
(7, '2025_01_15_173418_add_new_columns_in_users_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9ZeYcqNijc9jSK5JC4VLkznvVXP2He2dDYpMMLDc', 7, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOXRabklYZkh1dTZmWlAxekJ6M1BhbDk3WVNDdVBnWVZFVFBYN2NoQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ib29raW5nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyOToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Jvb2tpbmciO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O30=', 1737273458);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Test User', 'test@example.com', '2025-01-15 11:06:37', '$2y$12$N4a85fzzIFBHLO.lpCluj.rJBMrONDMnGOVz0KcTAzSuNo.lpM9v.', 'LrPCjQbao3QD4dp4e1tUBDgOqqgGhfILORJXVRZ5PcHIuBTOurYIgryGv4jD', '2025-01-15 11:06:37', '2025-01-15 11:06:37', 'admin'),
(2, 'Golu Admin', 'admin@example.com', NULL, '$2y$12$BQFKVPz5PYzEyyKaUtuw9eimeINI2j/a1htWVumxZHMxsMHyZ.4Ky', NULL, '2025-01-15 11:27:27', '2025-01-15 11:27:27', 'admin'),
(3, 'Abhishek Thapa', 'admin@gmail.com', NULL, '$2y$12$LxcwPDPnP.Y.6AiFtkM2euAN2TZID7Yf5C4.iJVeMxcBOklY9pSnW', NULL, '2025-01-15 11:38:44', '2025-01-15 11:38:44', 'user'),
(4, 'golu', 'golurawal@example.com', NULL, '$2y$12$syp8ZmFKOW7870n4NxYN5OVdDDIcLrnYL5LvWDKV66KCfiiqeilSy', NULL, '2025-01-15 12:00:49', '2025-01-15 12:00:49', 'user'),
(5, 'Golu', 'golu@golu.com', NULL, '$2y$12$rTD6p9vE8mbJeN93hmjjy.oTerTQgyYKlX043qkJHe/sukCwnzakO', NULL, '2025-01-15 12:02:18', '2025-01-15 12:02:18', 'admin'),
(6, 'nischal', 'N@gmail.com', NULL, '$2y$12$GS44V6tEYBa4kwjIGOg0A.mlItzK9jtKg1HGdjRE.DLP6z7anfmea', NULL, '2025-01-19 00:57:35', '2025-01-19 00:57:35', 'user'),
(7, 'aayush', 'A@gmail.com', NULL, '$2y$12$SEo3UoinOtnsfSfmWFYl8egWtPW8Uda4BYg8c7ZUt.Mevcs9JuMAC', NULL, '2025-01-19 02:11:51', '2025-01-19 02:11:51', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
