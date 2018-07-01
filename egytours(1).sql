Skip to content
 
Search or jump to…

Pull requests
Issues
Marketplace
Explore
 @ahmedsalah95 Sign out
1
0 0 ahmedsalah95/egytours
 Code  Issues 0  Pull requests 0  Projects 0  Wiki  Insights  Settings
egytours/egytours (1).sql
6586f66  3 hours ago
@ahmedsalah95 ahmedsalah95 database
     
593 lines (485 sloc)  21.7 KB
-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2018 at 08:56 PM
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
-- Database: `egytours`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(3, 'egy.jpg', 'egypt 3', '<p><span style=\"font-size:11px\">testing my desc</span></p>', '2018-06-23 16:48:52', '2018-06-23 16:48:52'),
(4, 'egy.jpg', 'egy 4', '<p>test</p>', '2018-06-23 16:56:47', '2018-06-23 16:56:47'),
(6, 'egy2.jpg', 'egypt 3', 'testing', '2018-06-26 10:46:28', '2018-06-26 10:46:28');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(3, 'test', '<p><span style=\"font-size:11px\">testtesting my desc</span></p>', '2018-06-26 06:32:43', '2018-06-27 07:30:55'),
(4, 'ahmed', '<p>test</p>', '2018-06-26 11:00:46', '2018-06-27 12:10:45'),
(5, 'cat3', '<p>testingcat&nbsp;</p>', '2018-06-28 07:14:55', '2018-06-28 07:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `page_title`, `description`, `map`, `created_at`, `updated_at`) VALUES
(1, 'test title 2', '<p>hhhhhhhhhhhhhhhhhhhhhhhhhhhhklllll</p>', 'test address', '2018-06-23 22:00:00', '2018-06-27 12:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuses`
--

INSERT INTO `contactuses` (`id`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'ahmedsalah9570@gmail.com', 'aasdasd', 'asdasdasda', '2018-06-29 19:45:02', '2018-06-29 19:45:02'),
(2, 'admin@admin.com', 'testing', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test', '2018-06-29 20:31:56', '2018-06-29 20:31:56'),
(3, 'ahmedsalah9570@gmail.com', 'ewqe', 'sdasdasd', '2018-06-30 13:16:55', '2018-06-30 13:16:55'),
(4, 'sherif@gmail.com', 'test test test', 'resrsf sdf sdf', '2018-06-30 16:14:31', '2018-06-30 16:14:31'),
(5, 'sherifsherif@gmail.com', 'sherifsherif', 'sherifsherif', '2018-06-30 16:15:42', '2018-06-30 16:15:42'),
(6, 'admin@admi.com', 'asd', 'sad', '2018-07-01 14:19:47', '2018-07-01 14:19:47'),
(7, 'admin@admin.com', 'qa', 'sa', '2018-07-01 14:33:12', '2018-07-01 14:33:12');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `trip_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `trip_id`, `image`, `created_at`, `updated_at`) VALUES
(37, 32, 'egy.jpg', '2018-06-27 09:03:48', '2018-06-27 09:03:48'),
(38, 32, 'egy2.jpg', '2018-06-27 09:03:48', '2018-06-27 09:03:48'),
(55, 34, 'egy.jpg', '2018-06-27 09:33:54', '2018-06-27 09:33:54'),
(56, 34, 'egy2.jpg', '2018-06-27 09:33:54', '2018-06-27 09:33:54'),
(63, 39, '1.PNG', '2018-06-28 11:35:26', '2018-06-28 11:35:26'),
(64, 39, 'Capture.PNG', '2018-06-28 11:35:26', '2018-06-28 11:35:26'),
(65, 39, 'egy.jpg', '2018-06-28 11:35:26', '2018-06-28 11:35:26'),
(66, 39, 'egy2.jpg', '2018-06-28 11:35:26', '2018-06-28 11:35:26'),
(67, 39, 'stay-positive-1366x768-quotes-hd-3707.jpg', '2018-06-28 11:35:26', '2018-06-28 11:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_3_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_3_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_5_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_5_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_5_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `title`, `image`, `section_3_title`, `section_3_desc`, `section_5_title`, `section_5_desc`, `section_5_image`, `created_at`, `updated_at`) VALUES
(1, 'test header1', 'stay-positive-1366x768-quotes-hd-3707.jpg', 'test teader2', '<p>teeeestuuuuuuuuuuuuuuuuuoooooooooooookkk</p>', 'test3', '<p>teesrser</p>', 'Capture.PNG', '2018-06-23 22:00:00', '2018-06-27 12:02:09');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_23_125954_create_settings_table', 1),
(4, '2018_06_23_165159_create_abouts_table', 2),
(5, '2018_06_24_090851_create_homes_table', 3),
(6, '2018_06_24_104803_create_contacts_table', 4),
(7, '2018_06_24_111922_create_testimonials_table', 5),
(8, '2018_06_24_130447_create_categories_table', 6),
(9, '2018_06_25_081229_create_trips_table', 7),
(10, '2018_06_25_083113_create_visitors_table', 7),
(11, '2018_06_25_085407_create_galleries_table', 8),
(12, '2018_06_26_104701_create_profiles_table', 9),
(13, '2018_06_29_191439_create_plans_table', 9),
(14, '2018_06_29_210748_create_contact_uses_table', 10);

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
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `email`, `nationality`, `whatsapp`, `coin`, `plan`, `created_at`, `updated_at`) VALUES
(2, 'ahmed', 'ahmedsalah9570@gmail.com', 'Egyptian', '01116988471', 'Euro', 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test', '2018-06-29 18:28:21', '2018-06-29 18:28:21'),
(3, 'sdf', 'sherif@gmail.com', 'Egyptian', '01014022800', 'Euro', 'asdadasdasdasdasd', '2018-06-30 14:14:02', '2018-06-30 14:14:02'),
(4, 'ahmed', 'asda@asdd.vom', 'Egyptian', '21212', 'USD', 'fsdfsd', '2018-06-30 16:10:14', '2018-06-30 16:10:14'),
(5, 'ahmed', 'sherif@gmail.com', 'England', '121212121', 'Euro', '2132131231', '2018-06-30 16:10:43', '2018-06-30 16:10:43'),
(6, 'ziad', 'ziad@gmail.com', 'Egyptian', '011111', 'USD', 'dasdasdasdads', '2018-06-30 16:12:08', '2018-06-30 16:12:08'),
(7, 'khaled', 'khaled@gmail.com', 'fdsfsd', '1212', 'USD', 'dadasdasdadsa', '2018-06-30 16:12:56', '2018-06-30 16:12:56'),
(8, 'test', 'test@test.com', 'test', '1212', 'USD', 'test test', '2018-07-01 14:24:01', '2018-07-01 14:24:01'),
(9, 'test', 'rtetst@test.com', 'eee', '0101021', 'USD', 'saedsdasd', '2018-07-01 14:29:59', '2018-07-01 14:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `image`, `phone`, `email`, `address`, `description`, `facebook`, `twitter`, `instagram`, `youtube`, `link1`, `link2`, `link3`, `link4`, `created_at`, `updated_at`) VALUES
(1, 'Capture.PNG', '011169884711111', 'admin@admin.com', '1 dokki street , Giza, Cairo university , Giza', '<p>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkooooooooooo</p>', 'face', 'twitt', 'insta', 'yout', 'link11', 'link22', 'link33', 'link44', '2018-06-23 13:36:01', '2018-06-27 11:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'test test', '<p>ttttttttttttttttttttt</p>', 'Capture.PNG', '2018-06-24 09:35:14', '2018-06-26 06:11:31'),
(2, 'test 2', '<p>test 2 test 2 test 2 test 2</p>', 'egy.jpg', '2018-06-28 09:19:26', '2018-06-28 09:19:26'),
(3, 'test 3', '<p>test 3 test 3 test 3</p>', 'egy2.jpg', '2018-06-28 09:28:44', '2018-06-28 09:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inclusion` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exclusion` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `category_id`, `image`, `title`, `description`, `inclusion`, `exclusion`, `created_at`, `updated_at`) VALUES
(31, 3, 'egy2.jpg', 'q', '<p>testig testig</p>', '', '', '2018-06-26 07:43:39', '2018-06-27 09:52:06'),
(34, 3, 'egy2.jpg', 'validation3', '<p>aaaab</p>', '', '', '2018-06-27 09:33:10', '2018-06-27 09:33:33'),
(35, 3, 'egy.jpg', 'hhhh', '<p>kk</p>', '', '', '2018-06-27 12:14:02', '2018-06-28 06:22:11'),
(37, 4, 'stay-positive-1366x768-quotes-hd-3707.jpg', 'hh', '<p>jjjjjjjjjjjjjjjjjj</p>', '', '', '2018-06-27 12:24:46', '2018-06-27 12:24:46'),
(38, 3, 'egy2.jpg', 'resrsersr', '<p>trertert</p>', '', '', '2018-06-27 13:05:19', '2018-06-27 13:05:19'),
(39, 3, 'egy.jpg', 'testing title', '<p>testing</p>', '<p>tttestsetsetset inclusion</p>', '<p>tttestsetsetset exclusion</p>', '2018-06-28 06:15:48', '2018-06-28 11:35:25'),
(40, 3, 'egy2.jpg', 'testing inclusion an exclusion', '<p>bla bla bla</p>', '<p>inclusion testing 1.1</p>', '<p>exclusion testing 1.1</p>', '2018-06-28 06:47:50', '2018-06-28 06:52:22');

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
(1, 'Ahmed Salah Aldeen Mohamed Tawfeek', 'ahmedsalah9570@gmail.com', '$2y$10$oBFXnvjlyAKapfvfSCSllO5DtCKEovIZfokXOBm/DlblkVdD6Osm2', '7BLWsJc9lYihobwoydABBMGo71hBRxM8CFhzy1z9kkwztvTMCrryF4FkHVwO', '2018-06-23 13:21:42', '2018-06-27 12:18:24');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(10) UNSIGNED NOT NULL,
  `trip_id` int(11) NOT NULL,
  `price_of_visitor` int(11) NOT NULL,
  `no_of_visitors` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `trip_id`, `price_of_visitor`, `no_of_visitors`, `created_at`, `updated_at`) VALUES
(80, 34, 2, 1, '2018-06-27 09:33:54', '2018-06-27 09:33:54'),
(81, 34, 4, 2, '2018-06-27 09:33:54', '2018-06-27 09:33:54'),
(82, 34, 6, 3, '2018-06-27 09:33:54', '2018-06-27 09:33:54'),
(87, 31, 500, 1, '2018-06-27 09:52:06', '2018-06-27 09:52:06'),
(92, 37, 200, 22, '2018-06-27 12:24:46', '2018-06-27 12:24:46'),
(98, 35, 2000, 1, '2018-06-28 06:22:11', '2018-06-28 06:22:11'),
(102, 40, 2200, 1, '2018-06-28 06:52:23', '2018-06-28 06:52:23'),
(103, 40, 4400, 2, '2018-06-28 06:52:23', '2018-06-28 06:52:23'),
(104, 40, 5500, 3, '2018-06-28 06:52:23', '2018-06-28 06:52:23'),
(105, 39, 20, 1, '2018-06-28 11:35:26', '2018-06-28 11:35:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
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
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
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
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
© 2018 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
API
Training
Shop
Blog
About
Press h to open a hovercard with more details.