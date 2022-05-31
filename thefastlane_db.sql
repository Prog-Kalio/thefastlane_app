-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 07:16 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thefastlane_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `type`, `email`, `mobile`, `password`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin', 'superadmin@thefastlane.com.ng', '08186705771', '$2y$10$TZdc0OB.ysr8Jwhr1DzkG.4uFxU/DGosXDlLqR8Xyunb0VCN7wMVy', '5224.jpeg', 1, '2022-05-30 07:58:33', '2022-05-30 23:39:53'),
(2, 'Admin', 'admin', 'admin@thefastlane.com.ng', '08186705772', '$2a$12$hAYBil.osKyWkzxehs0i/eGNzcsWgdlBuUo3sxHV.PwhXX92UvFiG', '', 1, '2022-05-30 07:58:53', '2022-05-30 07:58:53'),
(3, 'Sub Admin', 'subadmin', 'subadmin@thefastlane.com.ng', '08186705773', '$2a$12$hAYBil.osKyWkzxehs0i/eGNzcsWgdlBuUo3sxHV.PwhXX92UvFiG', '', 1, '2022-05-30 07:59:10', '2022-05-30 07:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Abuja FCT', 1, '2022-05-30 21:18:36', '2022-05-30 20:45:35'),
(2, 'Lagos', 1, '2022-05-30 21:18:55', '2022-05-30 20:45:09'),
(3, 'Portharcourt', 1, '2022-05-30 21:19:10', '2022-05-30 20:45:07'),
(4, 'Ibadan', 1, '2022-05-30 20:30:08', '2022-05-30 20:45:06');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_30_064514_create_admins_table', 2),
(6, '2022_05_30_204202_create_locations_table', 3),
(7, '2022_05_30_231637_create_movies_table', 4),
(8, '2022_05_31_045102_create_stupid_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_id` int(11) NOT NULL,
  `movie_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_price` double(8,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_star` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_time` datetime NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `location_id`, `movie_name`, `movie_image`, `movie_price`, `description`, `genre`, `movie_star`, `movie_duration`, `show_time`, `meta_title`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'The Wolf of Wall Street', '64197.jpg', 2000.00, 'Based on the true story of Jordan Belfort, from his rise to a wealthy stockbroker living the high life to his fall involving crime, corruption, etc', 'Family, Crime', 'Leonardo Dicaprio', '1hr 50mins', '2022-06-02 10:00:19', 'wolf of wall street', 'Based on the true story of Jordan Belfort, from his rise to a wealthy stockbroker living the high life to his fall involving crime, corruption, etc', 'wolf of wall street, leonardo dicaprio, stock exchange, making money', 1, '2022-05-31 05:02:46', '2022-05-31 03:21:40'),
(2, 2, 'Suicide Squad', '97887.jpg', 2500.00, 'A secret government agency recruits a group of imprisoned supervillains to execute dangerous black ops missions in exchange for clemency, which inevitably leads to chaos', 'Comedy, Action', 'Will Smith', '1hr 23mins', '2022-06-02 12:09:19', 'Suicide Squad', 'A secret government agency recruits a group of imprisoned supervillains', 'Suicide Squad, Will Smith, secret government agency movie', 1, '2022-05-31 05:01:51', '2022-05-31 03:21:55'),
(3, 2, 'Iron Man 3', '19235.jpg', 2000.00, 'When Stark finds his personal world destroyed at his enemys hands, he embarks on a harrowing quest to find those responsible.', 'Action', 'Tony Stark', '2 hrs', '2022-06-02 14:10:19', 'Iron man 3', 'When Stark finds his personal world destroyed at his enemys hands', 'Iron Man 3, Tony Stark, Robots', 1, '2022-05-31 05:03:04', '2022-05-31 03:22:12'),
(4, 3, 'The Expendables', '69685.jpg', 2000.00, 'The Expendables are reunited when Mr. Church enlists them to take on a seemingly simple job. When things go wrong, the Expendables are compelled to save all', 'Action', 'Sylvestre Stallion', '2hrs 10mins', '2022-06-02 16:20:19', 'The Expendables', 'The Expendables are reunited when Mr. Church enlists them to take on a seemingly simple job', 'Sylvestre Stallion, The Expendables', 1, '2022-05-31 05:04:05', '2022-05-31 04:13:28'),
(5, 1, 'The Lion King', '97326.jpg', 2000.00, 'After the murder of his father, a young lion prince flees his kingdom only to learn the true meaning of responsibility and bravery.', 'Family', 'James Earl Jones', '1 hr 25mins', '2022-06-03 11:59:19', 'The Lion King', 'After the murder of his father, a young lion prince flees his kingdom only', 'The Lion King, James Earl Jones, Animation', 1, '2022-05-31 05:04:50', '2022-05-31 03:22:48'),
(6, 3, 'The GodFather', '95686.jpg', 3000.00, 'The business of the family is just like the head of the family, kind and benevolent to those who give respect, but given to ruthless violence whenever anything stands against the good of the family', 'Crime, Drama', 'Al Pacino', '1hr 50mins', '2022-06-03 19:59:19', 'The Expendables', 'The business of the family is just like the head of the family', 'Al Pacino, Crime, Drama', 1, '2022-05-31 05:05:52', '2022-05-31 03:23:05');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stupid`
--

CREATE TABLE `stupid` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `show_time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tamunotonye Kalio', 'ktamunotonye@gmail.com', NULL, '$2y$10$67dB6e/RaE0kkUbS6PK1OukEyDzEGgEM20HMBYvPyty3bQtYg7bv6', NULL, '2022-05-29 15:28:29', '2022-05-29 15:28:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `stupid`
--
ALTER TABLE `stupid`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stupid`
--
ALTER TABLE `stupid`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
