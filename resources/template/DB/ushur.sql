-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 11:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ushur`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `priority` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `status`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'Account Ops', 'account-ops', 'active', 1, '2020-05-11 03:07:16', '2020-05-11 03:07:16'),
(2, 'Enterprise Data Api', 'enterprise-data-api', 'active', 3, '2020-05-11 03:07:40', '2020-05-11 03:07:40'),
(3, 'User Engagement', 'user-engagement', 'active', 2, '2020-05-11 03:07:54', '2020-05-11 03:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(36, '2014_10_12_000000_create_users_table', 1),
(37, '2014_10_12_100000_create_password_resets_table', 1),
(38, '2020_05_04_123501_create_categories_table', 1),
(39, '2020_05_05_033413_create_posts_table', 1),
(40, '2020_05_05_105859_create_tabs_table', 1),
(41, '2020_05_05_110050_create_types_table', 1),
(42, '2020_05_07_061717_create_post_tabs_table', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tab_ids` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(10) UNSIGNED DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `tab_ids`, `slug`, `cat_id`, `priority`, `description`, `status`, `created_at`, `updated_at`) VALUES
(5, 'RenewToken', '[\"1\",\"2\",\"3\",\"4\"]', 'renewtoken', 1, 2, '<p><span style=\"color: rgb(51, 51, 51);\">This is the API that would be required to renew the token which was given by system during login procedure , it takes the current exisiting token as input and returns the new token with new lease time</span><br></p>', 'active', '2020-05-11 03:24:00', '2020-05-11 03:24:00'),
(6, 'Sign In', '[\"1\",\"2\",\"3\",\"4\"]', 'sign-in', 1, 1, '<p><span style=\"color: rgb(51, 51, 51);\">This is the initial API that would take in the credentials email and password for the account and return back token id which will be used in various other API calls. When other API fails to access the account because token id had expired, the application is expected to initiate this sign-in process again to retrieve the new token for further interactions with Ushur.</span><br></p>', 'active', '2020-05-11 03:25:09', '2020-05-11 03:32:28'),
(7, 'Get DoNotDisturb Status Settings', '[\"1\",\"2\",\"3\",\"4\"]', 'get-donotdisturb-status-settings', 1, 3, '<p><span style=\"color: rgb(51, 51, 51);\">This is to retrieve the DoNotDisturb Status settings for the Ushur Account. An Account can represent an enterprise.</span><br></p>', 'active', '2020-05-11 03:26:01', '2020-05-11 03:31:50'),
(8, 'Initiate Any Campaign', '[\"1\",\"2\",\"3\",\"4\"]', 'initiate-any-campaign', 3, 1, '<p><span style=\"color: rgb(51, 51, 51);\">This API is to initiate an Ushur (also called as Campaign) to a specific phone number if this is a single campaign but if a bulk campaign the Ushur will be launched to all the users in the enterprise and hence the userPhoneNo parameter will be ignored if present.</span><br></p>', 'active', '2020-05-11 04:01:43', '2020-05-11 04:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `post_tabs`
--

CREATE TABLE `post_tabs` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED DEFAULT NULL,
  `tab_id` int(10) UNSIGNED DEFAULT NULL,
  `tab_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snippet` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tabs`
--

INSERT INTO `post_tabs` (`id`, `post_id`, `tab_id`, `tab_type`, `parameter`, `description`, `title`, `snippet`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 'table', 'email', 'Users can login to their account using this email identifier they originally signed-up with.', NULL, 'null', '2020-05-11 04:02:51', '2020-05-11 04:02:51'),
(2, 6, 4, 'table', 'status', 'A textual indication of success or failure.', NULL, 'null', '2020-05-11 04:03:28', '2020-05-11 04:03:28'),
(3, 6, 3, 'snippet', NULL, NULL, 'Success', '\"{\\r\\n        \\\"status\\\": \\\"success\\\",\\r\\n        \\\"respCode\\\": \\\"200\\\",\\r\\n        \\\"tokenId\\\": \\\"eyJhbGciOiJIUzI1NiJ9.eyJqdGkiOiJiYmQzMjIyNy0zMTY0LTRmNGEtYmNjYy1jMzdjZTg1MjlmMzYiLCJpYXQiOjE1NTkyNzYxNDEsInN1YiI6IkFjY291bnRBdXRoIiwiaXNzIjoiVVNIVVIiLCJhY2NvdW50RW5hYmxlZCI6IlkiLCJ1c2VyQWNjb3VudCI6IkdVUlVSQUpBLktPU0lHSUBVU0hVUi5DT00iLCJleHAiOjE1NTkyODMzNDF9.m_AQBIoUPdLMqrrBZ2S7pTAnsrkDLVpAGyLif2dQR9M\\\",\\r\\n        \\\"emailId\\\": \\\"ushurtester@gmail.com\\\",\\r\\n        \\\"nickName\\\": \\\"test4ushur\\\",\\r\\n        \\\"tokenLeaseTime\\\": \\\"120\\\",\\r\\n        \\\"tokenRenewThreshold\\\": \\\"3\\\"\\r\\n        \\r\\n        }\"', '2020-05-11 04:03:59', '2020-05-11 04:03:59'),
(4, 6, 2, 'snippet', NULL, NULL, NULL, '\"Method: POST\\r\\n        URL:  https:\\/\\/community.ushur.me\\/rest\\/login\\r\\n        Content-Type: application\\/json\\r\\n\\r\\n        {\\r\\n        \\\"email\\\":\\\"ushurtester@gmail.com\\\",\\r\\n        \\\"password\\\":\\\"testushur\\\"\\r\\n        }\"', '2020-05-11 04:04:37', '2020-05-11 04:04:37');

-- --------------------------------------------------------

--
-- Table structure for table `tabs`
--

CREATE TABLE `tabs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('table','snippet') COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabs`
--

INSERT INTO `tabs` (`id`, `title`, `type`, `priority`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Request Parameter', 'table', 4, 'active', '2020-05-11 03:11:17', '2020-05-11 03:55:45'),
(2, 'Post Sample', 'snippet', 2, 'active', '2020-05-11 03:11:47', '2020-05-11 03:11:47'),
(3, 'Json req', 'snippet', 3, 'active', '2020-05-11 03:12:14', '2020-05-11 03:12:14'),
(4, 'Response', 'table', 4, 'active', '2020-05-11 03:12:38', '2020-05-11 03:57:24');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$WXP5wFKMfusLE.0JhZ88x.7iNlSycfzo7vZnAmW8GIdyLe.CqT.lO', 'active', 'admin', NULL, NULL, NULL),
(2, 'User', 'user@gmail.com', '$2y$10$tyP.lvPflAfxP0k4zZYOMuCxjplRfxRFXyMmckoRqIf2MM3C4etie', 'active', 'user', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `post_tabs`
--
ALTER TABLE `post_tabs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tabs_post_id_foreign` (`post_id`),
  ADD KEY `post_tabs_tab_id_foreign` (`tab_id`);

--
-- Indexes for table `tabs`
--
ALTER TABLE `tabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post_tabs`
--
ALTER TABLE `post_tabs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabs`
--
ALTER TABLE `tabs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `post_tabs`
--
ALTER TABLE `post_tabs`
  ADD CONSTRAINT `post_tabs_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `post_tabs_tab_id_foreign` FOREIGN KEY (`tab_id`) REFERENCES `tabs` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
