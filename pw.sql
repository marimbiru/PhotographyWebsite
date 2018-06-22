-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2018 at 10:59 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `body_text`, `cover_photo`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'We Happy Few', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at blandit nunc, eget varius dolor. In congue tristique volutpat. Vestibulum consectetur rhoncus tortor ac ullamcorper. Suspendisse sodales risus imperdiet est tincidunt finibus. Morbi vel dui ante. Donec commodo euismod pellentesque. Praesent id mi purus.\r\n\r\nMauris sed euismod arcu, a lacinia metus. Donec aliquam lacus urna, non convallis neque venenatis eget. Nunc sollicitudin nec leo id convallis. Nullam mollis consectetur consectetur. Morbi vitae rhoncus orci. Mauris maximus enim id mi luctus tristique sit amet et quam. Proin magna mi, blandit sit amet dolor in, pharetra iaculis odio. Pellentesque lectus dui, semper ultricies urna quis, elementum consectetur urna. Nulla efficitur dapibus nibh, in sollicitudin dui lobortis eget. Sed mattis odio sit amet urna porta, ut fermentum dolor ultrices. Aliquam suscipit nisi eget eros porta pharetra.\r\n\r\nInteger bibendum urna pellentesque tellus ultricies pulvinar in vel felis. Duis vel tristique eros. Nulla placerat blandit tristique. In hac habitasse platea dictumst. Maecenas lacinia, nisl sit amet imperdiet finibus, sem sapien rutrum ante, id ornare turpis nunc vel nisi. Quisque blandit metus in purus ultricies, at maximus tortor cursus. Nulla nisi ipsum, suscipit sed nulla maximus, posuere ullamcorper magna. Duis sed laoreet nunc, vel luctus risus. Duis consequat libero ut gravida pellentesque. Maecenas mi sem, pulvinar at ornare et, bibendum at ligula. Maecenas dapibus, justo sit amet aliquam tristique, risus justo gravida nibh, eget tempus orci mi sed sapien. Pellentesque pretium dictum placerat. Nulla et dolor pellentesque, tincidunt arcu ut, lobortis magna.', 'we-happy-few.jpg', 2, '2018-06-22 05:25:10', '2018-06-22 05:25:10'),
(3, 'We Happy Few 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at blandit nunc, eget varius dolor. In congue tristique volutpat. Vestibulum consectetur rhoncus tortor ac ullamcorper. Suspendisse sodales risus imperdiet est tincidunt finibus. Morbi vel dui ante. Donec commodo euismod pellentesque. Praesent id mi purus.\r\n\r\nMauris sed euismod arcu, a lacinia metus. Donec aliquam lacus urna, non convallis neque venenatis eget. Nunc sollicitudin nec leo id convallis. Nullam mollis consectetur consectetur. Morbi vitae rhoncus orci. Mauris maximus enim id mi luctus tristique sit amet et quam. Proin magna mi, blandit sit amet dolor in, pharetra iaculis odio. Pellentesque lectus dui, semper ultricies urna quis, elementum consectetur urna. Nulla efficitur dapibus nibh, in sollicitudin dui lobortis eget. Sed mattis odio sit amet urna porta, ut fermentum dolor ultrices. Aliquam suscipit nisi eget eros porta pharetra.\r\n\r\nInteger bibendum urna pellentesque tellus ultricies pulvinar in vel felis. Duis vel tristique eros. Nulla placerat blandit tristique. In hac habitasse platea dictumst. Maecenas lacinia, nisl sit amet imperdiet finibus, sem sapien rutrum ante, id ornare turpis nunc vel nisi. Quisque blandit metus in purus ultricies, at maximus tortor cursus. Nulla nisi ipsum, suscipit sed nulla maximus, posuere ullamcorper magna. Duis sed laoreet nunc, vel luctus risus. Duis consequat libero ut gravida pellentesque. Maecenas mi sem, pulvinar at ornare et, bibendum at ligula. Maecenas dapibus, justo sit amet aliquam tristique, risus justo gravida nibh, eget tempus orci mi sed sapien. Pellentesque pretium dictum placerat. Nulla et dolor pellentesque, tincidunt arcu ut, lobortis magna.', 'we-happy-few-2.jpg', 2, '2018-06-22 05:37:56', '2018-06-22 05:37:56'),
(4, 'The Last Of Us', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at blandit nunc, eget varius dolor. In congue tristique volutpat. Vestibulum consectetur rhoncus tortor ac ullamcorper. Suspendisse sodales risus imperdiet est tincidunt finibus. Morbi vel dui ante. Donec commodo euismod pellentesque. Praesent id mi purus.\r\n\r\nMauris sed euismod arcu, a lacinia metus. Donec aliquam lacus urna, non convallis neque venenatis eget. Nunc sollicitudin nec leo id convallis. Nullam mollis consectetur consectetur. Morbi vitae rhoncus orci. Mauris maximus enim id mi luctus tristique sit amet et quam. Proin magna mi, blandit sit amet dolor in, pharetra iaculis odio. Pellentesque lectus dui, semper ultricies urna quis, elementum consectetur urna. Nulla efficitur dapibus nibh, in sollicitudin dui lobortis eget. Sed mattis odio sit amet urna porta, ut fermentum dolor ultrices. Aliquam suscipit nisi eget eros porta pharetra.\r\n\r\nInteger bibendum urna pellentesque tellus ultricies pulvinar in vel felis. Duis vel tristique eros. Nulla placerat blandit tristique. In hac habitasse platea dictumst. Maecenas lacinia, nisl sit amet imperdiet finibus, sem sapien rutrum ante, id ornare turpis nunc vel nisi. Quisque blandit metus in purus ultricies, at maximus tortor cursus. Nulla nisi ipsum, suscipit sed nulla maximus, posuere ullamcorper magna. Duis sed laoreet nunc, vel luctus risus. Duis consequat libero ut gravida pellentesque. Maecenas mi sem, pulvinar at ornare et, bibendum at ligula. Maecenas dapibus, justo sit amet aliquam tristique, risus justo gravida nibh, eget tempus orci mi sed sapien. Pellentesque pretium dictum placerat. Nulla et dolor pellentesque, tincidunt arcu ut, lobortis magna.', 'the-last-of-us.jpg', 3, '2018-06-22 05:38:27', '2018-06-22 05:38:27'),
(5, 'End of the Line', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at blandit nunc, eget varius dolor. In congue tristique volutpat. Vestibulum consectetur rhoncus tortor ac ullamcorper. Suspendisse sodales risus imperdiet est tincidunt finibus. Morbi vel dui ante. Donec commodo euismod pellentesque. Praesent id mi purus.\r\n\r\nMauris sed euismod arcu, a lacinia metus. Donec aliquam lacus urna, non convallis neque venenatis eget. Nunc sollicitudin nec leo id convallis. Nullam mollis consectetur consectetur. Morbi vitae rhoncus orci. Mauris maximus enim id mi luctus tristique sit amet et quam. Proin magna mi, blandit sit amet dolor in, pharetra iaculis odio. Pellentesque lectus dui, semper ultricies urna quis, elementum consectetur urna. Nulla efficitur dapibus nibh, in sollicitudin dui lobortis eget. Sed mattis odio sit amet urna porta, ut fermentum dolor ultrices. Aliquam suscipit nisi eget eros porta pharetra.\r\n\r\nInteger bibendum urna pellentesque tellus ultricies pulvinar in vel felis. Duis vel tristique eros. Nulla placerat blandit tristique. In hac habitasse platea dictumst. Maecenas lacinia, nisl sit amet imperdiet finibus, sem sapien rutrum ante, id ornare turpis nunc vel nisi. Quisque blandit metus in purus ultricies, at maximus tortor cursus. Nulla nisi ipsum, suscipit sed nulla maximus, posuere ullamcorper magna. Duis sed laoreet nunc, vel luctus risus. Duis consequat libero ut gravida pellentesque. Maecenas mi sem, pulvinar at ornare et, bibendum at ligula. Maecenas dapibus, justo sit amet aliquam tristique, risus justo gravida nibh, eget tempus orci mi sed sapien. Pellentesque pretium dictum placerat. Nulla et dolor pellentesque, tincidunt arcu ut, lobortis magna.', 'end-of-the-line.jpg', 3, '2018-06-22 05:39:42', '2018-06-22 05:39:42'),
(6, 'World Economic Forum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at blandit nunc, eget varius dolor. In congue tristique volutpat. Vestibulum consectetur rhoncus tortor ac ullamcorper. Suspendisse sodales risus imperdiet est tincidunt finibus. Morbi vel dui ante. Donec commodo euismod pellentesque. Praesent id mi purus.\r\n\r\nMauris sed euismod arcu, a lacinia metus. Donec aliquam lacus urna, non convallis neque venenatis eget. Nunc sollicitudin nec leo id convallis. Nullam mollis consectetur consectetur. Morbi vitae rhoncus orci. Mauris maximus enim id mi luctus tristique sit amet et quam. Proin magna mi, blandit sit amet dolor in, pharetra iaculis odio. Pellentesque lectus dui, semper ultricies urna quis, elementum consectetur urna. Nulla efficitur dapibus nibh, in sollicitudin dui lobortis eget. Sed mattis odio sit amet urna porta, ut fermentum dolor ultrices. Aliquam suscipit nisi eget eros porta pharetra.\r\n\r\nInteger bibendum urna pellentesque tellus ultricies pulvinar in vel felis. Duis vel tristique eros. Nulla placerat blandit tristique. In hac habitasse platea dictumst. Maecenas lacinia, nisl sit amet imperdiet finibus, sem sapien rutrum ante, id ornare turpis nunc vel nisi. Quisque blandit metus in purus ultricies, at maximus tortor cursus. Nulla nisi ipsum, suscipit sed nulla maximus, posuere ullamcorper magna. Duis sed laoreet nunc, vel luctus risus. Duis consequat libero ut gravida pellentesque. Maecenas mi sem, pulvinar at ornare et, bibendum at ligula. Maecenas dapibus, justo sit amet aliquam tristique, risus justo gravida nibh, eget tempus orci mi sed sapien. Pellentesque pretium dictum placerat. Nulla et dolor pellentesque, tincidunt arcu ut, lobortis magna.', 'world-economic-forum.jpg', 4, '2018-06-22 05:41:11', '2018-06-22 05:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_name`, `category_photo`, `created_at`, `updated_at`) VALUES
(2, 'Wedding', 'we-happy-few.jpg', '2018-06-22 05:25:10', '2018-06-22 05:25:10'),
(3, 'Love of Life', 'the-last-of-us.jpg', '2018-06-22 05:38:27', '2018-06-22 05:38:27'),
(4, 'Politics', 'world-economic-forum.jpg', '2018-06-22 05:41:11', '2018-06-22 05:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `client_logos`
--

CREATE TABLE `client_logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_logos`
--

INSERT INTO `client_logos` (`id`, `image_name`, `company_name`, `created_at`, `updated_at`) VALUES
(1, 'company-name-1-1528141511.jpg', 'Company name 1', '2018-06-04 16:45:11', '2018-06-04 16:45:11'),
(2, 'company-name-2-1528141621.jpg', 'Company name 2', '2018-06-04 16:47:01', '2018-06-04 16:47:01'),
(3, 'company-name-3-1528141632.jpg', 'Company name 3', '2018-06-04 16:47:12', '2018-06-04 16:47:12'),
(4, 'company-name-4-1528141658.jpg', 'Company name 4', '2018-06-04 16:47:38', '2018-06-04 16:47:38'),
(7, 'company-name-5-1528143526.jpg', 'Company name 5', '2018-06-04 17:18:46', '2018-06-04 17:18:46'),
(9, 'company-name-6-1528143579.jpg', 'Company name 6', '2018-06-04 17:19:39', '2018-06-04 17:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `client_quotes`
--

CREATE TABLE `client_quotes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quote` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_quotes`
--

INSERT INTO `client_quotes` (`id`, `name`, `position`, `quote`, `created_at`, `updated_at`) VALUES
(1, 'Kennedy Calvins', 'CEO LaVie', 'This is the best photography company. I am so happy with the services.', '2018-05-24 21:00:00', '2018-05-30 21:00:00'),
(2, 'Andrew Koteng\'', 'Creative Genius', 'Excellent service. I definitely recommend to try them out.', '2018-05-11 21:00:00', '2018-05-23 21:00:00'),
(3, 'Mari Mbiru', 'Engineer', 'Nice work.', '2018-05-24 21:00:00', '2018-05-30 21:00:00'),
(4, 'Partrick Njenga', 'Entrepreneur', 'Join the hype :)', '2018-05-11 21:00:00', '2018-05-21 21:00:00'),
(5, 'James Matiangi', 'Sales Manager', 'Business iko sawa', '2018-06-04 14:37:40', '2018-06-04 14:37:40');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Andrew Koteng', 'andrew.koteng@gmail.com', 'Andrew is awesome', '2018-06-22 02:23:07', '2018-06-22 02:23:07');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `category`, `text`, `created_at`, `updated_at`) VALUES
(40, 'cinematography', 'cinematography-1529653524.jpg', '2018-06-22 04:45:24', '2018-06-22 04:45:24'),
(41, 'cinematography', 'cinematography-1529653562.jpg', '2018-06-22 04:46:02', '2018-06-22 04:46:02'),
(42, 'cinematography', 'cinematography-1529653594.jpg', '2018-06-22 04:46:34', '2018-06-22 04:46:34'),
(43, 'cinematography', 'cinematography-1529653667.jpg', '2018-06-22 04:47:47', '2018-06-22 04:47:47'),
(44, 'corporate', 'corporate-1529653678.jpg', '2018-06-22 04:47:59', '2018-06-22 04:47:59'),
(45, 'corporate', 'corporate-1529653705.jpg', '2018-06-22 04:48:25', '2018-06-22 04:48:25'),
(46, 'corporate', 'corporate-1529653712.jpg', '2018-06-22 04:48:32', '2018-06-22 04:48:32'),
(47, 'corporate', 'corporate-1529653751.jpg', '2018-06-22 04:49:11', '2018-06-22 04:49:11'),
(48, 'documentary', 'documentary-1529653762.jpg', '2018-06-22 04:49:22', '2018-06-22 04:49:22'),
(49, 'documentary', 'documentary-1529653769.jpg', '2018-06-22 04:49:29', '2018-06-22 04:49:29'),
(50, 'documentary', 'documentary-1529653778.jpg', '2018-06-22 04:49:38', '2018-06-22 04:49:38'),
(51, 'corporate', 'corporate-1529653782.jpg', '2018-06-22 04:49:42', '2018-06-22 04:49:42'),
(52, 'wedding', 'wedding-1529653809.jpg', '2018-06-22 04:50:09', '2018-06-22 04:50:09'),
(53, 'wedding', 'wedding-1529653816.jpg', '2018-06-22 04:50:16', '2018-06-22 04:50:16'),
(54, 'wedding', 'wedding-1529653823.jpg', '2018-06-22 04:50:23', '2018-06-22 04:50:23'),
(55, 'product', 'product-1529653839.jpg', '2018-06-22 04:50:39', '2018-06-22 04:50:39'),
(56, 'product', 'product-1529653848.jpg', '2018-06-22 04:50:48', '2018-06-22 04:50:48'),
(57, 'product', 'product-1529653855.jpg', '2018-06-22 04:50:55', '2018-06-22 04:50:55'),
(58, 'product', 'product-1529653865.jpg', '2018-06-22 04:51:05', '2018-06-22 04:51:05');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2018_05_24_122916_create_skills_table', 1),
(5, '2018_05_24_123508_create_client_quotes_table', 1),
(6, '2018_05_24_123748_create_gallery_table', 1),
(7, '2018_05_24_122521_create_client_logos_table', 2),
(8, '2018_06_08_001344_create_blogs_table', 3),
(9, '2018_06_08_012614_create_blog_categories_table', 3),
(10, '2018_06_08_013046_create_contacts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `type`, `percentage`, `created_at`, `updated_at`) VALUES
(1, 'corporate', 23, '2018-05-24 21:00:00', '2018-06-04 14:46:22'),
(2, 'cinematography', 32, '2018-05-11 21:00:00', '2018-06-04 14:46:23'),
(3, 'documentary', 47, '2018-05-24 21:00:00', '2018-06-04 14:46:23'),
(4, 'wedding', 87, '2018-05-11 21:00:00', '2018-06-04 14:46:23'),
(5, 'product', 68, '2018-05-24 21:00:00', '2018-06-04 14:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muchiri Frames', 'Muchiri.frames@sample.email', '$2y$10$59P35AxM562mdT661poWBOuJBIFX457pYRixX2Q3Fjv2iDr.x7P1i', '2TZ8psxRpZfzx1fbxrWHvIxEVKeYcyjOvGCd0Ior24sCHafnyxlI30WPZypT', '2018-05-24 21:00:00', '2018-06-05 09:10:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_logos`
--
ALTER TABLE `client_logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_quotes`
--
ALTER TABLE `client_quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `skills`
--
ALTER TABLE `skills`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client_logos`
--
ALTER TABLE `client_logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `client_quotes`
--
ALTER TABLE `client_quotes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
