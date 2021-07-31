-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 31, 2021 at 05:28 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CanadianUniversity`
--

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` int(10) UNSIGNED NOT NULL,
  `reciver_id` int(10) UNSIGNED NOT NULL,
  `channel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`id`, `sender_id`, `reciver_id`, `channel`, `created_at`, `updated_at`) VALUES
(5, 2, 4, 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', '2021-03-18 11:24:17', '2021-03-18 11:24:17'),
(6, 2, 5, 'HdFIxyg9s3KQTCZ89AxNcsIwg08nE6lk', '2021-03-19 03:42:48', '2021-03-19 03:42:48');

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
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onwer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `channel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `onwer_id`, `channel`, `created_at`, `updated_at`) VALUES
(2, 'First', '2', 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '2021-03-19 08:38:22', '2021-03-19 08:38:22'),
(4, 'Bangladesh', '4', 'ocrGDcIZk6UkehgRbb19R5o8AfJGZzQ5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_conversations`
--

CREATE TABLE `group_conversations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `channel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_conversations`
--

INSERT INTO `group_conversations` (`id`, `group_id`, `channel`, `member_id`, `created_at`, `updated_at`) VALUES
(1, '2', 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '2', '2021-03-19 08:38:22', '2021-03-19 08:38:22'),
(3, '2', 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '7', '2021-03-19 09:51:20', '2021-03-19 09:51:20'),
(8, '2', 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '1', '2021-03-19 11:04:59', '2021-03-19 11:04:59'),
(9, '2', 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '4', '2021-03-19 11:05:02', '2021-03-19 11:05:02'),
(10, '2', 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '6', '2021-03-19 11:05:05', '2021-03-19 11:05:05'),
(11, '2', 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '3', '2021-03-19 11:05:52', '2021-03-19 11:05:52'),
(12, '2', 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '5', '2021-03-19 11:05:55', '2021-03-19 11:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `group_massages`
--

CREATE TABLE `group_massages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `massage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `channel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_massages`
--

INSERT INTO `group_massages` (`id`, `sender_id`, `group_id`, `massage`, `sender_name`, `read`, `channel`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'Welcome Everyone', 'fil303', NULL, 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', NULL, NULL),
(2, 5, 2, 'Thanks for add me boss', 'robin', NULL, 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', NULL, NULL),
(3, 7, 2, 'hello', 'mamun', NULL, 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', NULL, NULL),
(4, 2, 2, 'hello agin', 'fil303', NULL, 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '2021-03-19 11:47:46', '2021-03-19 11:47:46'),
(5, 5, 2, 'hjhgghfgh', 'Robin', NULL, 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '2021-03-19 11:49:31', '2021-03-19 11:49:31'),
(6, 5, 2, 'hi', 'Robin', NULL, 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '2021-03-19 11:49:59', '2021-03-19 11:49:59'),
(7, 2, 2, 'hell', 'fil303', NULL, 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '2021-03-19 11:50:25', '2021-03-19 11:50:25'),
(8, 5, 2, 'sdfgsdfg', 'Robin', NULL, 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '2021-03-19 11:50:54', '2021-03-19 11:50:54'),
(9, 2, 2, 'sdfgsdfgfdgfdg', 'fil303', NULL, 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '2021-03-19 11:52:11', '2021-03-19 11:52:11'),
(11, 2, 2, 'fghdfgh', 'fil303', NULL, 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '2021-03-19 11:55:10', '2021-03-19 11:55:10'),
(12, 5, 2, 'ki', 'Robin', NULL, 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '2021-03-19 11:55:25', '2021-03-19 11:55:25'),
(13, 2, 2, 'oh', 'fil303', NULL, 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '2021-03-19 11:58:40', '2021-03-19 11:58:40'),
(14, 5, 2, 'ki', 'Robin', NULL, 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '2021-03-19 11:58:49', '2021-03-19 11:58:49'),
(15, 5, 2, 'ki', 'Robin', NULL, 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '2021-03-19 11:58:57', '2021-03-19 11:58:57'),
(16, 2, 2, 'oh', 'fil303', NULL, 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '2021-03-19 12:00:13', '2021-03-19 12:00:13'),
(17, 5, 2, 'ki', 'Robin', NULL, 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '2021-03-19 12:00:24', '2021-03-19 12:00:24'),
(18, 4, 2, 'oiiiiiii', 'heloalom', NULL, 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '2021-03-19 12:12:07', '2021-03-19 12:12:07'),
(19, 5, 2, 'ki koris', 'Robin', NULL, 'lSVIRovaLD7XFWAYodIe0z16lX7bY9ZB', '2021-03-19 12:12:31', '2021-03-19 12:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `massages`
--

CREATE TABLE `massages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` int(10) UNSIGNED NOT NULL,
  `reciver_id` int(10) UNSIGNED NOT NULL,
  `massage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `channel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `massages`
--

INSERT INTO `massages` (`id`, `sender_id`, `reciver_id`, `massage`, `read`, `sender_name`, `channel`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 'hello', NULL, 'fil303', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', '2021-03-18 12:18:38', '2021-03-18 12:18:38'),
(2, 2, 4, 'oiii, ki,Khobor', NULL, 'fil303', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', NULL, NULL),
(3, 4, 2, 'hmm valo asi. tui ki koris', NULL, 'heloalom', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', NULL, NULL),
(4, 2, 4, 'valo na,,konorokome din jasse', NULL, 'fil303', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', NULL, NULL),
(5, 2, 4, 'tor kirokom din jasse?', NULL, 'fil303', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', NULL, NULL),
(6, 4, 2, 'hhmmm,\r\nkhub valo,\r\nthak pore kotha bolbani', NULL, 'heloalom', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', NULL, NULL),
(7, 2, 4, 'ok bey', NULL, 'fil303', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', '2021-03-18 12:52:39', '2021-03-18 12:52:39'),
(8, 2, 4, 'oh', NULL, 'fil303', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', '2021-03-18 12:57:01', '2021-03-18 12:57:01'),
(9, 2, 4, 'hmm', NULL, 'fil303', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', '2021-03-18 12:57:38', '2021-03-18 12:57:38'),
(10, 4, 2, 'oooi', NULL, 'heloalom', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', '2021-03-18 20:29:12', '2021-03-18 20:29:12'),
(11, 4, 2, 'oooi', NULL, 'heloalom', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', '2021-03-18 20:30:48', '2021-03-18 20:30:48'),
(12, 2, 4, 'hello', NULL, 'fil303', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', '2021-03-19 02:17:58', '2021-03-19 02:17:58'),
(13, 4, 2, 'oh', NULL, 'heloalom', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', '2021-03-19 02:22:37', '2021-03-19 02:22:37'),
(14, 4, 2, 'helo', NULL, 'heloalom', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', '2021-03-19 02:38:26', '2021-03-19 02:38:26'),
(15, 4, 2, 'fdhfgh', NULL, 'heloalom', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', '2021-03-19 02:55:24', '2021-03-19 02:55:24'),
(16, 4, 2, 'dfg', NULL, 'heloalom', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', '2021-03-19 02:58:13', '2021-03-19 02:58:13'),
(17, 4, 2, 'hello', NULL, 'heloalom', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', '2021-03-19 03:00:16', '2021-03-19 03:00:16'),
(19, 4, 2, 'kghvkhg', NULL, 'heloalom', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', '2021-03-19 03:10:36', '2021-03-19 03:10:36'),
(20, 2, 4, 'o hero koi tui', NULL, 'fil303', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', '2021-03-19 03:28:37', '2021-03-19 03:28:37'),
(21, 2, 4, 'o hero koi tui', NULL, 'fil303', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', '2021-03-19 03:30:58', '2021-03-19 03:30:58'),
(22, 4, 2, 'koi tui', NULL, 'heloalom', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', '2021-03-19 03:31:32', '2021-03-19 03:31:32'),
(24, 4, 2, 'ki korish', NULL, 'heloalom', 'tNLzyzxHqNqo4rkCWhLSxeelF2bg05BZ', '2021-03-19 03:33:25', '2021-03-19 03:33:25'),
(25, 5, 2, 'hello', NULL, 'Robin', 'HdFIxyg9s3KQTCZ89AxNcsIwg08nE6lk', '2021-03-19 03:44:51', '2021-03-19 03:44:51');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_03_16_024056_add_columns_to_users_table', 2),
(6, '0000_00_00_000000_create_websockets_statistics_entries_table', 3),
(8, '2021_03_18_163635_create_massages_table', 5),
(9, '2021_03_18_162225_create_conversations_table', 6),
(10, '2021_03_19_135140_create_groups_table', 7),
(11, '2021_03_19_140858_create_group_conversations_table', 7),
(12, '2021_03_19_141353_create_group_massages_table', 7);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateOfBirth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `phone`, `gender`, `DateOfBirth`, `img`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`, `fname`, `lname`) VALUES
(1, 'Kenneth Singleton', 'tetyboqo', 'vahujy@mailinator.com', '78447856259', 'Male', '20-Jun-1985', '835738909628238.jpg', NULL, '$2y$10$ivTxBv5sEMPTJL6xQGLe4eyepZrvZr2Zyu8CtrdEcht7QZloeqeUu', NULL, NULL, NULL, '2021-03-15 16:49:31', '2021-03-15 16:49:31', '', ''),
(2, 'Israfil khan', 'fil303', 'user@gmail.com', '01756892458', 'Male', '16/05/1999', '16077201930656.jpg', NULL, '$2y$10$X.nVuWxRLK58KaKm1ssl2OqyOIlQVgRpV8.mCsarnujDRT9/DqpUS', NULL, NULL, 'WznAur889fyyQQ3GKg9dhTm533e0mpZptIZjzK410BCAPB7WreCRbtF5cD53', '2021-03-15 18:58:30', '2021-03-19 12:23:00', 'Israfil', 'khan'),
(3, 'Imam Khan', 'imam', 'imam@gmail.com', '01926479258', 'Male', '15/09/1989', '835738909628238.jpg', NULL, '$2y$10$Yg0IvwrVd9VxCrUdAuLv9eJwnug.v.1GT8lkf2RA.EMsH9fPHB0Ai', NULL, NULL, NULL, '2021-03-15 21:19:22', '2021-03-15 21:19:22', 'Imam', 'Khan'),
(4, 'Hero Alom', 'heloalom', 'heloalom@yahoo.com', '01568249582', 'Male', '02/09/1990', '464496123879027.jpg', NULL, '$2y$10$ifcR36cHlx0edv7A55lFgO9RqCabvFvnzRZ1D9Ut/9NPprJHFSrfC', NULL, NULL, NULL, '2021-03-15 21:24:06', '2021-03-15 21:24:06', 'Hero', 'Alom'),
(5, 'Robin Hassan', 'Robin', 'robin@gmail.com', '01654713592', 'Male', '22/12/1999', '835738909628238.jpg', NULL, '$2y$10$lUtzi6fcm5SPWf/a5istvevqfw/4pKKe9Vt4DLxX7QKKP9WPJZzDu', NULL, NULL, NULL, '2021-03-15 21:32:12', '2021-03-15 21:32:12', 'Robin', 'Hassan'),
(6, 'Sabbir Sorder', 'Sabbir', 'Sabbir@gmail.com', '01865849352', 'Male', '01/11/1899', '120771687381622.jpg', NULL, '$2y$10$SBfbcNceBiLBWheo0oeR2ey3.TRAWYUvDUwQFyBhV9nGdSIOnotDO', NULL, NULL, NULL, '2021-03-15 21:55:39', '2021-03-15 21:55:39', 'Sabbir', 'Sorder'),
(7, 'Mamun Shek', 'mamun', 'mamun@gmail.com', '01658974125', 'Male', '03/12/1999', '835738909628238.jpg', NULL, '$2y$10$7ZKmHrkZiRTR3VbNIKaPc.xb0sGKLcqWV2.d5A0O4ULgU9ZHpJH4a', NULL, NULL, NULL, '2021-03-15 22:01:02', '2021-03-15 22:01:02', 'Mamun', 'Shek'),
(8, 'Rejaullah Khan', 'rejaul', 'rejaul@gmail.com', '01562894765', 'Male', '23/05/1386', '121034636879622.jpeg', NULL, '$2y$10$TVNLMNtjNJt9G/WAci1SSO4Es6G8E1b7l.Dq0cB0eoSHGb5ywk4V2', NULL, NULL, NULL, '2021-03-15 22:32:50', '2021-03-15 22:41:51', 'Rejaullah', 'Khan');

-- --------------------------------------------------------

--
-- Table structure for table `websockets_statistics_entries`
--

CREATE TABLE `websockets_statistics_entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peak_connection_count` int(11) NOT NULL,
  `websocket_message_count` int(11) NOT NULL,
  `api_message_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `conversations_channel_unique` (`channel`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_conversations`
--
ALTER TABLE `group_conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_massages`
--
ALTER TABLE `group_massages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `massages`
--
ALTER TABLE `massages`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `group_conversations`
--
ALTER TABLE `group_conversations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `group_massages`
--
ALTER TABLE `group_massages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `massages`
--
ALTER TABLE `massages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
