-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 07:12 AM
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
-- Database: `instagram`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_23_122949_create-posts-table', 1);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `text`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'I so hungry... RAWR', 'http://127.0.0.1:8000/assets/img/1693192925.jpg', '2023-08-27 19:22:05', '2023-08-27 19:22:05'),
(3, 3, 'Last friday night', 'http://127.0.0.1:8000/assets/img/1693227506.jpg', '2023-08-28 04:58:26', '2023-08-28 04:58:26'),
(4, 1, 'You pack', 'http://127.0.0.1:8000/assets/img/1693227568.jpg', '2023-08-28 04:59:28', '2023-09-07 04:24:31'),
(8, 3, 'Mirror selfie', 'http://127.0.0.1:8000/assets/img/1693304209.jpg', '2023-08-29 02:16:49', '2023-08-29 02:16:49'),
(9, 3, 'Feelin like a princess', 'http://127.0.0.1:8000/assets/img/1693304226.jpg', '2023-08-29 02:17:06', '2023-08-29 02:17:06'),
(14, 1, 'HAAA HAKDOG', 'http://127.0.0.1:8000/assets/img/1693304444.jpg', '2023-08-29 02:20:44', '2023-09-05 03:21:56'),
(16, 4, 'Cosplay is lifeaaaa', 'http://127.0.0.1:8000/assets/img/1693305150.jpg', '2023-08-29 02:32:30', '2023-08-29 02:32:30'),
(17, 4, 'LEmme see yohhh shape', 'http://127.0.0.1:8000/assets/img/1693305169.jpg', '2023-08-29 02:32:49', '2023-08-29 02:32:49'),
(18, 4, 'ihhhh ?', 'http://127.0.0.1:8000/assets/img/1693305182.jpg', '2023-08-29 02:33:02', '2023-08-29 02:33:02'),
(19, 4, 'hmmmm ?', 'http://127.0.0.1:8000/assets/img/1693305197.jpg', '2023-08-29 02:33:17', '2023-08-29 02:33:17'),
(20, 4, 'Spideeyy, Where are you  ?', 'http://127.0.0.1:8000/assets/img/1693305221.jpg', '2023-08-29 02:33:41', '2023-08-29 02:33:41'),
(21, 5, 'hoho', 'http://127.0.0.1:8000/assets/img/1693306343.jpg', '2023-08-29 02:52:23', '2023-08-29 02:52:23'),
(23, 6, NULL, 'http://127.0.0.1:8000/assets/img/1693310039.jpg', '2023-08-29 03:53:59', '2023-08-29 03:53:59'),
(24, 5, 'AHHH BTR program to win', 'http://127.0.0.1:8000/assets/img/1693310315.jpg', '2023-08-29 03:58:35', '2023-08-29 03:58:35'),
(26, 5, NULL, 'http://127.0.0.1:8000/assets/img/1693310370.jpg', '2023-08-29 03:59:30', '2023-08-29 03:59:30'),
(31, 4, ':)', 'http://127.0.0.1:8000/assets/img/1693399875.jpg', '2023-08-30 04:51:15', '2023-08-30 04:51:15'),
(34, 4, '인생이,,차암,,고달픈거시애요,', 'http://127.0.0.1:8000/assets/img/1693565542.jpg', '2023-09-01 02:52:22', '2023-09-01 02:52:22'),
(35, 5, 'les yeux parlent', 'http://127.0.0.1:8000/assets/img/1693565760.jpg', '2023-09-01 02:56:00', '2023-09-01 02:56:00'),
(36, 1, 'I love playing golf✨', 'http://127.0.0.1:8000/assets/img/1693567045.jpg', '2023-09-01 03:17:25', '2023-09-05 03:21:41'),
(39, 6, 'I just love taking a mirror selfie this day', 'http://127.0.0.1:8000/assets/img/1693606314.jpg', '2023-09-01 14:11:54', '2023-09-01 14:11:54'),
(42, 7, 'Valorant event', 'http://127.0.0.1:8000/assets/img/1693633730.jpg', '2023-09-01 21:48:50', '2023-09-07 04:11:06'),
(43, 8, 'watching the shows in Vegas', 'http://127.0.0.1:8000/assets/img/1693635076.jpg', '2023-09-01 22:11:16', '2023-09-01 22:11:16'),
(44, 8, '🌵LA에서의 자유시간🌵', 'http://127.0.0.1:8000/assets/img/1693635103.jpg', '2023-09-01 22:11:43', '2023-09-01 22:11:43'),
(45, 9, 'Saan to  ?', 'http://127.0.0.1:8000/assets/img/1693642257.jpg', '2023-09-02 00:10:57', '2023-09-13 02:10:22'),
(46, 10, 'Can we skip to the good part <3', 'http://127.0.0.1:8000/assets/img/1693642699.jpg', '2023-09-02 00:18:19', '2023-09-08 16:43:40'),
(51, 1, 'YOOOW', 'http://127.0.0.1:8000/assets/img/1694094530.jpg', '2023-09-07 05:48:50', '2023-09-07 05:49:08'),
(53, 3, 'With my friend...', 'http://127.0.0.1:8000/assets/img/1694216483.jpg', '2023-09-08 15:41:23', '2023-09-08 15:41:23'),
(54, 7, 'Good morning guysuu', 'http://127.0.0.1:8000/assets/img/1694216585.jpg', '2023-09-08 15:43:05', '2023-09-08 15:43:05'),
(56, 10, 'Heallo', 'http://127.0.0.1:8000/assets/img/1694217636.jpg', '2023-09-08 16:00:36', '2023-09-08 16:43:16'),
(57, 3, 'Im doing nothing', 'http://127.0.0.1:8000/assets/img/1694299901.jpg', '2023-09-09 14:51:41', '2023-09-09 14:57:20'),
(58, 4, NULL, 'http://127.0.0.1:8000/assets/img/1694817784.jpg', '2023-09-15 14:43:04', '2023-09-15 14:43:04'),
(66, 10, NULL, 'http://127.0.0.1:8000/assets/img/1694850370.mp4', '2023-09-15 23:46:10', '2023-09-15 23:46:10'),
(68, 3, NULL, 'http://127.0.0.1:8000/assets/img/1694854874.mp4', '2023-09-16 01:01:14', '2023-09-16 01:01:14'),
(69, 1, NULL, 'http://127.0.0.1:8000/assets/img/1694857041.mp4', '2023-09-16 01:37:21', '2023-09-16 01:37:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `password`, `avatar`, `bio`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'cindyyuvia', 'Cindy Yupi Yuvia', '$2y$10$/k3ZSP3lhhUGSfGzbHBgsO/GCD/LjgO6/3/n3WiW7Nq42ALKeDu4W', 'http://127.0.0.1:8000/assets/img/1693400649.jpg', 'No bio', 'cindyyuvia@gmail.com', NULL, '2023-08-27 19:21:19', '2023-08-30 05:04:09'),
(3, 'angiemstwn', 'Angie Marcheria', '$2y$10$XzUMoLQSBV7xfXk4JBDFpuzH/JXE3LwFiarvZqZ2E7qfPyqfNcCPG', 'http://127.0.0.1:8000/assets/img/1694217376.jpg', 'No bio', NULL, NULL, '2023-08-28 04:57:52', '2023-09-08 15:56:16'),
(4, 'i_am_young22', 'Hina Chan Young', '$2y$10$4RqqTa.0MzcD2rpvdNz69ORTh5qwSiJeRgOHfhVVyDcB6C2FeKvky', 'http://127.0.0.1:8000/assets/img/1693305118.jpg', NULL, NULL, NULL, '2023-08-29 02:25:01', '2023-08-29 02:31:58'),
(5, 'davinaakaramoy', 'Davina Karamoy', '$2y$10$.MUM.OwFHNu9GPmjt.57ieEeaCwYhW6YsrV4GmKgmTe0lD033gNTa', 'http://127.0.0.1:8000/assets/img/1693310387.jpg', NULL, NULL, NULL, '2023-08-29 02:50:41', '2023-08-29 03:59:47'),
(6, 'lauraziphoraa', 'Laura Ziphora', '$2y$10$gODVJe49PNo1JxVj1vJiVOB6tw8jq4.daOna32zUTW.AQXx8JyIiC', NULL, NULL, NULL, NULL, '2023-08-29 03:01:26', '2023-08-29 03:01:26'),
(7, 'LEKA', 'Zelia Valeska', '$2y$10$br3GdTB5BGtzs4pbTLgL/uaTZF22.jLFL1WHQx.Qh9WwhFrQjmHP.', 'http://127.0.0.1:8000/assets/img/1693633209.jpg', NULL, NULL, NULL, '2023-09-01 21:39:18', '2023-09-01 21:40:09'),
(8, 'sooyaaa__', 'Kim Jisoo', '$2y$10$81T0fB26eVkwqzR2MJygu.HCbx6KM060Lm1.ElT6vnXt/ddCJzJwm', 'http://127.0.0.1:8000/assets/img/1693635039.jpg', NULL, NULL, NULL, '2023-09-01 22:07:31', '2023-09-01 22:10:39'),
(9, 'aurieljames11', 'Auriel James Fernandez', '$2y$10$G2xa770UgoLE.d/bHp6lHetkIC41HfGS.66Q2BEoVx/ixDfwIAsVy', 'http://127.0.0.1:8000/assets/img/1693642214.jpg', 'Biot', 'aurieljames11@gmail.com', NULL, '2023-09-02 00:01:44', '2023-09-15 14:37:43'),
(10, 'yoshirinrada', 'Rinrada Thurapan', '$2y$10$difjYxuO9IAvYlzUx2TNRe8t8xUOtc654NMIdL9oPJvj9Do8cQ/hK', 'http://127.0.0.1:8000/assets/img/1693642660.jpg', 'Miss Tiffany Universe 2017\r\n2nd Runner Up Miss InternationalQueen 2018', NULL, NULL, '2023-09-02 00:15:58', '2023-09-02 00:17:40'),
(22, 'angietaniaa', 'Angie Tania', '$2y$10$p5ynFSPugWOrvZ948npFRuUcXJntsUSe1Afkvjyv8aPSYM0dB1KLu', NULL, NULL, NULL, NULL, '2023-09-13 04:33:43', '2023-09-13 04:33:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
