-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 03:46 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `companys`
--

CREATE TABLE `companys` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companys`
--

INSERT INTO `companys` (`id`, `name`, `staff_id`) VALUES
(1, 'Google', 1),
(2, 'MicroSoft', 2),
(3, 'Apple', 4),
(4, 'Google', 3);

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `name`, `staff_id`) VALUES
(1, 'mobile ', 1),
(2, 'laptop', 1),
(3, 'mobile ', 3),
(4, 'laptop', 3),
(5, 'watch ', 2),
(6, 'camera', 4);

-- --------------------------------------------------------

--
-- Table structure for table `emps`
--

CREATE TABLE `emps` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `age` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `col1` int(11) NOT NULL DEFAULT 1,
  `col2` int(11) NOT NULL DEFAULT 2,
  `col3` int(11) NOT NULL DEFAULT 3,
  `col4` int(11) NOT NULL DEFAULT 4,
  `col5` int(11) NOT NULL DEFAULT 5,
  `col6` int(11) NOT NULL DEFAULT 6,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emps`
--

INSERT INTO `emps` (`id`, `name`, `age`, `address`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `created_at`, `updated_at`) VALUES
(9, 'test', '24', 'ssdghd', 1, 2, 3, 4, 5, 6, NULL, '2021-07-01 11:13:45'),
(11, 'arik', '24', 'ssdghd', 1, 2, 3, 4, 5, 6, NULL, NULL),
(12, 'puja', '25', 'dsfg', 1, 2, 3, 4, 5, 6, NULL, NULL),
(13, 'arik', '24', 'ssdghd', 1, 2, 3, 4, 5, 6, NULL, NULL),
(14, 'puja', '25', 'dsfg', 1, 2, 3, 4, 5, 6, NULL, NULL),
(15, 'arik', '24', 'ssdghd', 1, 2, 3, 4, 5, 6, NULL, NULL),
(16, 'puja', '25', 'dsfg', 1, 2, 3, 4, 5, 6, NULL, NULL),
(17, 'arik', '24', 'ssdghd', 1, 2, 3, 4, 5, 6, NULL, NULL),
(18, 'puja my love', '23', 'dsfg', 1, 2, 3, 4, 5, 6, NULL, '2021-07-01 11:14:09'),
(19, 'arik', '24', 'ssdghd', 1, 2, 3, 4, 5, 6, NULL, NULL),
(20, 'puja', '25', 'dsfg', 1, 2, 3, 4, 5, 6, NULL, NULL),
(21, 'arik', '24', 'ssdghd', 1, 2, 3, 4, 5, 6, NULL, NULL),
(22, 'puja', '25', 'dsfg', 1, 2, 3, 4, 5, 6, NULL, NULL),
(23, 'arik', '24', 'ssdghd', 1, 2, 3, 4, 5, 6, NULL, NULL),
(24, 'puja', '25', 'dsfg', 1, 2, 3, 4, 5, 6, NULL, NULL),
(25, 'arik', '24', 'ssdghd', 1, 2, 3, 4, 5, 6, NULL, NULL),
(26, 'puja', '25', 'dsfg', 1, 2, 3, 4, 5, 6, NULL, NULL),
(27, 'arik', '24', 'ssdghd', 1, 2, 3, 4, 5, 6, NULL, NULL),
(28, 'puja', '25', 'dsfg', 1, 2, 3, 4, 5, 6, NULL, NULL),
(29, 'arik', '24', 'ssdghd', 1, 2, 3, 4, 5, 6, NULL, NULL),
(30, 'puja', '25', 'dsfg', 1, 2, 3, 4, 5, 6, NULL, NULL),
(31, 'arik', '24', 'ssdghd', 1, 2, 3, 4, 5, 6, NULL, NULL),
(32, 'puja', '25', 'dsfg', 1, 2, 3, 4, 5, 6, NULL, NULL),
(33, 'arik', '24', 'ssdghd', 1, 2, 3, 4, 5, 6, NULL, NULL),
(34, 'puja', '25', 'dsfg', 1, 2, 3, 4, 5, 6, NULL, NULL),
(35, 'arik', '24', 'ssdghd', 1, 2, 3, 4, 5, 6, NULL, NULL),
(36, 'puja', '25', 'dsfg', 1, 2, 3, 4, 5, 6, NULL, NULL),
(37, 'arik', '24', 'ssdghd', 1, 2, 3, 4, 5, 6, NULL, NULL),
(38, 'puja', '25', 'dsfg', 1, 2, 3, 4, 5, 6, NULL, NULL),
(39, 'arik', '24', 'ssdghd', 1, 2, 3, 4, 5, 6, NULL, NULL),
(40, 'puja', '25', 'dsfg', 1, 2, 3, 4, 5, 6, NULL, NULL),
(42, 'puja', '25', 'dsfg', 1, 2, 3, 4, 5, 6, NULL, NULL),
(43, 'arik', '24', 'ssdghd', 1, 2, 3, 4, 5, 6, NULL, NULL),
(44, 'puja', '25', 'dsfg', 1, 2, 3, 4, 5, 6, NULL, NULL),
(45, 'arik', '24', 'ssdghd', 1, 2, 3, 4, 5, 6, NULL, NULL),
(46, 'puja', '25', 'dsfg', 1, 2, 3, 4, 5, 6, NULL, NULL),
(47, 'arik', '24', 'ssdghd', 1, 2, 3, 4, 5, 6, NULL, NULL),
(48, 'puja', '25', 'dsfg', 1, 2, 3, 4, 5, 6, NULL, NULL),
(49, 'arik', '24', 'ssdghd', 1, 2, 3, 4, 5, 6, NULL, NULL),
(54, 'arik last', '24', 'sebanir', 1, 2, 3, 4, 5, 6, NULL, NULL);

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
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `name`, `url`) VALUES
(1, 'youtube', 'https://www.youtube.com/watch?v=rbzoQ9e60Co&list=PL8p2I9GklV46dciS4GDzBFHBi0JVIbnzT&index=44'),
(2, 'Facebook', 'https://www.youtube.com/watch?v=rbzoQ9e60Co&list=PL8p2I9GklV46dciS4GDzBFHBi0JVIbnzT&index=44'),
(3, 'twitter', 'https://www.youtube.com/watch?v=rbzoQ9e60Co&list=PL8p2I9GklV46dciS4GDzBFHBi0JVIbnzT&index=44'),
(4, 'gmail', 'https://www.youtube.com/watch?v=rbzoQ9e60Co&list=PL8p2I9GklV46dciS4GDzBFHBi0JVIbnzT&index=44');

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
(51, '2021_07_02_140435_create_test7s_table', 1),
(52, '2014_10_12_000000_create_users_table', 2),
(53, '2014_10_12_100000_create_password_resets_table', 2),
(54, '2019_08_19_000000_create_failed_jobs_table', 2),
(55, '2021_07_02_134847_create_tests_table', 2),
(56, '2021_07_02_140211_create_test2s_table', 2),
(57, '2021_07_02_140325_create_test3s_table', 2),
(58, '2021_07_02_140358_create_test4s_table', 2),
(59, '2021_07_02_140409_create_test5s_table', 2),
(60, '2021_07_02_140426_create_test6s_table', 2);

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
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `email`, `updated_at`, `created_at`) VALUES
(1, 'arik', 'arik@gmail.com', NULL, NULL),
(2, 'puja', 'puja@gmail.com', NULL, NULL),
(3, 'pavel', 'pavel@gmail.com', NULL, NULL),
(4, 'ornob', 'ornob@gmail.com', NULL, NULL),
(5, 'HdZaG7toyz', 'qJE2@gamil.com', NULL, NULL),
(6, 'tz0CO1Gvfz', 'nZsP@gamil.com', NULL, NULL),
(7, 'dGzP8cNQcG', 'xmqr@gamil.com', NULL, NULL),
(8, 'jony sins', 'USA', '2021-07-02 23:04:39', '2021-07-02 23:04:39'),
(9, 'Mr. jony sins', 'USA', '2021-07-02 23:13:05', '2021-07-02 23:13:05'),
(10, 'Mr. jony sins', 'USA', '2021-07-02 23:14:08', '2021-07-02 23:14:08'),
(11, 'Mr. jony sins', 'USA, bd', '2021-07-02 23:15:03', '2021-07-02 23:15:03'),
(12, 'Mr. mr. jony sins', 'USA, bd', '2021-07-02 23:21:26', '2021-07-02 23:21:26'),
(13, 'Mr. mr. jony sins', 'USA, bd', '2021-07-02 23:23:27', '2021-07-02 23:23:27'),
(14, 'mr. jony sins', 'USA, bd', '2021-07-02 23:28:25', '2021-07-02 23:28:25'),
(15, 'mr. jony sins', 'USA', '2021-07-02 23:32:05', '2021-07-02 23:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `test2s`
--

CREATE TABLE `test2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test3s`
--

CREATE TABLE `test3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test4s`
--

CREATE TABLE `test4s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test5s`
--

CREATE TABLE `test5s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test6s`
--

CREATE TABLE `test6s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test7s`
--

CREATE TABLE `test7s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Indexes for dumped tables
--

--
-- Indexes for table `companys`
--
ALTER TABLE `companys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `emps`
--
ALTER TABLE `emps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
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
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test2s`
--
ALTER TABLE `test2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test3s`
--
ALTER TABLE `test3s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test4s`
--
ALTER TABLE `test4s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test5s`
--
ALTER TABLE `test5s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test6s`
--
ALTER TABLE `test6s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test7s`
--
ALTER TABLE `test7s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
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
-- AUTO_INCREMENT for table `companys`
--
ALTER TABLE `companys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `emps`
--
ALTER TABLE `emps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `test2s`
--
ALTER TABLE `test2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test3s`
--
ALTER TABLE `test3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test4s`
--
ALTER TABLE `test4s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test5s`
--
ALTER TABLE `test5s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test6s`
--
ALTER TABLE `test6s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test7s`
--
ALTER TABLE `test7s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `companys`
--
ALTER TABLE `companys`
  ADD CONSTRAINT `staff_id` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `devices`
--
ALTER TABLE `devices`
  ADD CONSTRAINT `devices_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
