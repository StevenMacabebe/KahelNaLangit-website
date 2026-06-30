-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql111.infinityfree.com
-- Generation Time: Jun 30, 2026 at 06:31 AM
-- Server version: 11.4.12-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_42200430_kahel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `full_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@kahel.com', '$2y$10$j494og2Bf3WaD.MWnEy9dOKo2GcIe0ibtD5f8Ggkbl3be1raBxq8C', 'System Administrator', NULL, '2026-06-16 09:16:48', '2026-06-29 20:35:19'),
(3, 'admin2', 'admin2@kahel.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Second Administrator', '', '2026-06-16 16:00:00', '2026-06-16 16:00:00'),
(5, 'admin3', 'admin3@kahel.com', '$2y$10$P3I8goQjaSd0lz3Vz3Ieqe.45P7glh9palGvnjt4LDJnmRSu3vIDK', 'Third Administrator', NULL, '2026-06-17 06:56:00', '2026-06-17 06:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin_logs`
--

CREATE TABLE `admin_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `login_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_logs`
--

INSERT INTO `admin_logs` (`id`, `admin_id`, `login_at`, `ip_address`, `user_agent`, `created_at`, `updated_at`) VALUES
(1, 1, '2026-06-17 13:23:49', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-17 05:23:49', '2026-06-17 05:23:49'),
(2, 1, '2026-06-17 13:30:58', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-17 05:30:58', '2026-06-17 05:30:58'),
(3, 1, '2026-06-17 13:34:49', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-17 05:34:49', '2026-06-17 05:34:49'),
(4, 1, '2026-06-17 14:21:36', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-17 06:21:36', '2026-06-17 06:21:36'),
(5, 1, '2026-06-17 14:49:58', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-17 06:49:58', '2026-06-17 06:49:58'),
(6, 1, '2026-06-17 15:07:53', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-17 07:07:53', '2026-06-17 07:07:53'),
(7, 1, '2026-06-17 15:08:06', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-17 07:08:06', '2026-06-17 07:08:06'),
(8, 1, '2026-06-17 15:09:35', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-17 07:09:35', '2026-06-17 07:09:35'),
(9, 1, '2026-06-17 15:10:31', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-17 07:10:31', '2026-06-17 07:10:31'),
(10, 1, '2026-06-17 15:10:57', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-17 07:10:57', '2026-06-17 07:10:57'),
(11, 1, '2026-06-17 15:14:00', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-17 07:14:00', '2026-06-17 07:14:00'),
(12, 1, '2026-06-17 15:17:14', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-17 07:17:14', '2026-06-17 07:17:14'),
(13, 1, '2026-06-17 17:29:33', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-17 09:29:33', '2026-06-17 09:29:33'),
(14, 1, '2026-06-18 09:02:14', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-18 16:02:13', '2026-06-18 16:02:13'),
(15, 1, '2026-06-18 09:03:38', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-18 16:03:38', '2026-06-18 16:03:38'),
(16, 1, '2026-06-18 10:01:39', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-18 17:01:39', '2026-06-18 17:01:39'),
(17, 1, '2026-06-18 10:09:27', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-18 17:09:27', '2026-06-18 17:09:27'),
(18, 1, '2026-06-18 11:06:42', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-18 18:06:42', '2026-06-18 18:06:42'),
(19, 1, '2026-06-18 11:10:39', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-18 18:10:39', '2026-06-18 18:10:39'),
(20, 1, '2026-06-18 11:17:12', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-18 18:17:12', '2026-06-18 18:17:12'),
(21, 1, '2026-06-18 11:28:14', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-18 18:28:15', '2026-06-18 18:28:15'),
(22, 1, '2026-06-18 13:49:43', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-18 20:49:43', '2026-06-18 20:49:43'),
(23, 1, '2026-06-18 14:01:10', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-18 21:01:10', '2026-06-18 21:01:10'),
(24, 1, '2026-06-18 14:04:59', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-18 21:04:59', '2026-06-18 21:04:59'),
(25, 1, '2026-06-18 14:53:48', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-18 21:53:48', '2026-06-18 21:53:48'),
(26, 1, '2026-06-18 15:30:18', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-18 22:30:18', '2026-06-18 22:30:18'),
(27, 1, '2026-06-18 16:27:07', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-18 23:27:06', '2026-06-18 23:27:06'),
(28, 1, '2026-06-18 17:09:58', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-19 00:09:58', '2026-06-19 00:09:58'),
(29, 1, '2026-06-18 17:28:24', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-19 00:28:24', '2026-06-19 00:28:24'),
(30, 1, '2026-06-18 18:40:53', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-19 01:40:52', '2026-06-19 01:40:52'),
(31, 1, '2026-06-19 02:00:24', '88.201.81.166', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-19 09:00:24', '2026-06-19 09:00:24'),
(32, 1, '2026-06-19 05:41:28', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-19 12:41:28', '2026-06-19 12:41:28'),
(33, 1, '2026-06-19 06:21:18', '88.201.81.166', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-19 13:21:18', '2026-06-19 13:21:18'),
(34, 1, '2026-06-19 09:02:30', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-19 16:02:30', '2026-06-19 16:02:30'),
(35, 1, '2026-06-19 09:16:09', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-19 16:16:09', '2026-06-19 16:16:09'),
(36, 1, '2026-06-19 09:23:40', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-19 16:23:40', '2026-06-19 16:23:40'),
(37, 1, '2026-06-19 11:25:06', '175.176.32.220', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', '2026-06-19 18:25:07', '2026-06-19 18:25:07'),
(38, 1, '2026-06-19 11:36:58', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-19 18:36:59', '2026-06-19 18:36:59'),
(39, 1, '2026-06-19 12:06:46', '88.201.81.166', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-19 19:06:46', '2026-06-19 19:06:46'),
(40, 1, '2026-06-19 12:15:22', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-19 19:15:23', '2026-06-19 19:15:23'),
(41, 1, '2026-06-21 17:58:47', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-22 00:58:47', '2026-06-22 00:58:47'),
(42, 1, '2026-06-21 18:05:17', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-22 01:05:17', '2026-06-22 01:05:17'),
(43, 1, '2026-06-22 07:10:40', '136.158.124.75', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_6_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 [FBAN/FBIOS;FBAV/566.0.0.23.105;FBBV/996862463;FBDV/iPhone14,7;FBMD/iPhone;FBSN/iOS;FBSV/18.6.2;FBSS/3;FBCR/;FBID/phone;FBLC/en_US;FBOP/80]', '2026-06-22 14:10:39', '2026-06-22 14:10:39'),
(44, 1, '2026-06-22 07:42:34', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-22 14:42:33', '2026-06-22 14:42:33'),
(45, 1, '2026-06-22 08:36:39', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-22 15:36:38', '2026-06-22 15:36:38'),
(46, 1, '2026-06-22 08:45:11', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-22 15:45:11', '2026-06-22 15:45:11'),
(47, 1, '2026-06-22 08:47:06', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-22 15:47:05', '2026-06-22 15:47:05'),
(48, 1, '2026-06-22 09:16:04', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-22 16:16:04', '2026-06-22 16:16:04'),
(49, 1, '2026-06-22 14:01:21', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-22 21:01:22', '2026-06-22 21:01:22'),
(50, 1, '2026-06-22 15:12:35', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-22 22:12:36', '2026-06-22 22:12:36'),
(51, 1, '2026-06-22 15:16:13', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-22 22:16:14', '2026-06-22 22:16:14'),
(52, 1, '2026-06-22 15:18:58', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-22 22:18:59', '2026-06-22 22:18:59'),
(53, 1, '2026-06-22 16:05:30', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-22 23:05:29', '2026-06-22 23:05:29'),
(54, 1, '2026-06-22 16:45:49', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-22 23:45:49', '2026-06-22 23:45:49'),
(55, 1, '2026-06-22 16:47:10', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-22 23:47:09', '2026-06-22 23:47:09'),
(56, 1, '2026-06-23 07:47:52', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-23 14:47:51', '2026-06-23 14:47:51'),
(57, 1, '2026-06-23 08:53:12', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-23 15:53:12', '2026-06-23 15:53:12'),
(58, 1, '2026-06-23 09:01:26', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-23 16:01:26', '2026-06-23 16:01:26'),
(59, 1, '2026-06-23 09:45:26', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-23 16:45:26', '2026-06-23 16:45:26'),
(60, 1, '2026-06-23 12:14:13', '136.158.124.75', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_6_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.6 Mobile/15E148 Safari/604.1', '2026-06-23 19:14:13', '2026-06-23 19:14:13'),
(61, 1, '2026-06-23 12:34:24', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-23 19:34:25', '2026-06-23 19:34:25'),
(62, 1, '2026-06-23 14:13:39', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-23 21:13:38', '2026-06-23 21:13:38'),
(63, 1, '2026-06-23 15:17:09', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-23 22:17:09', '2026-06-23 22:17:09'),
(64, 1, '2026-06-23 15:22:49', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-23 22:22:49', '2026-06-23 22:22:49'),
(65, 1, '2026-06-23 15:25:35', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-23 22:25:35', '2026-06-23 22:25:35'),
(66, 1, '2026-06-23 17:29:15', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-24 00:29:14', '2026-06-24 00:29:14'),
(67, 1, '2026-06-24 03:15:03', '136.158.124.75', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_6_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.6 Mobile/15E148 Safari/604.1', '2026-06-24 10:15:04', '2026-06-24 10:15:04'),
(68, 1, '2026-06-24 05:19:26', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-24 12:19:26', '2026-06-24 12:19:26'),
(69, 1, '2026-06-24 06:03:03', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-24 13:03:03', '2026-06-24 13:03:03'),
(70, 1, '2026-06-24 06:07:14', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-24 13:07:14', '2026-06-24 13:07:14'),
(71, 1, '2026-06-24 12:29:28', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-24 19:29:28', '2026-06-24 19:29:28'),
(72, 1, '2026-06-24 12:45:41', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-24 19:45:41', '2026-06-24 19:45:41'),
(73, 1, '2026-06-24 14:33:14', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-24 21:33:13', '2026-06-24 21:33:13'),
(74, 1, '2026-06-24 14:35:00', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-24 21:35:00', '2026-06-24 21:35:00'),
(75, 1, '2026-06-24 15:32:20', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36 OPR/132.0.0.0', '2026-06-24 22:32:20', '2026-06-24 22:32:20'),
(76, 1, '2026-06-24 16:10:13', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36 OPR/132.0.0.0', '2026-06-24 23:10:13', '2026-06-24 23:10:13'),
(77, 1, '2026-06-24 16:12:00', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36 OPR/132.0.0.0', '2026-06-24 23:11:59', '2026-06-24 23:11:59'),
(78, 1, '2026-06-24 16:21:04', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36 OPR/132.0.0.0', '2026-06-24 23:21:04', '2026-06-24 23:21:04'),
(79, 1, '2026-06-24 16:21:16', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36 OPR/132.0.0.0', '2026-06-24 23:21:15', '2026-06-24 23:21:15'),
(80, 1, '2026-06-24 16:42:49', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-24 23:42:49', '2026-06-24 23:42:49'),
(81, 1, '2026-06-24 16:43:51', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36', '2026-06-24 23:43:51', '2026-06-24 23:43:51'),
(82, 1, '2026-06-24 16:54:34', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36 OPR/132.0.0.0', '2026-06-24 23:54:34', '2026-06-24 23:54:34'),
(83, 1, '2026-06-24 17:12:21', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36 OPR/132.0.0.0', '2026-06-25 00:12:20', '2026-06-25 00:12:20'),
(84, 1, '2026-06-24 17:14:37', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 00:14:37', '2026-06-25 00:14:37'),
(85, 1, '2026-06-24 17:21:48', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36 OPR/132.0.0.0', '2026-06-25 00:21:47', '2026-06-25 00:21:47'),
(86, 1, '2026-06-24 17:27:04', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 00:27:04', '2026-06-25 00:27:04'),
(87, 1, '2026-06-24 17:28:52', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 00:28:51', '2026-06-25 00:28:51'),
(88, 1, '2026-06-24 17:45:56', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 00:45:55', '2026-06-25 00:45:55'),
(89, 1, '2026-06-24 17:48:53', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-25 00:48:52', '2026-06-25 00:48:52'),
(90, 1, '2026-06-24 17:51:52', '136.158.124.75', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_6_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.6 Mobile/15E148 Safari/604.1', '2026-06-25 00:51:51', '2026-06-25 00:51:51'),
(91, 1, '2026-06-24 17:53:23', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 00:53:23', '2026-06-25 00:53:23'),
(92, 1, '2026-06-24 17:54:51', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 00:54:50', '2026-06-25 00:54:50'),
(93, 1, '2026-06-24 17:56:46', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 00:56:46', '2026-06-25 00:56:46'),
(94, 1, '2026-06-24 18:00:06', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 01:00:05', '2026-06-25 01:00:05'),
(95, 1, '2026-06-24 18:03:47', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 01:03:47', '2026-06-25 01:03:47'),
(96, 1, '2026-06-24 18:04:37', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 01:04:36', '2026-06-25 01:04:36'),
(97, 1, '2026-06-24 19:33:14', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36 OPR/132.0.0.0', '2026-06-25 02:33:14', '2026-06-25 02:33:14'),
(98, 1, '2026-06-24 19:33:51', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 02:33:51', '2026-06-25 02:33:51'),
(99, 1, '2026-06-24 19:34:41', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 02:34:42', '2026-06-25 02:34:42'),
(100, 1, '2026-06-24 19:38:19', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 02:38:20', '2026-06-25 02:38:20'),
(101, 1, '2026-06-24 22:13:03', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-25 05:13:04', '2026-06-25 05:13:04'),
(102, 1, '2026-06-24 22:16:46', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-25 05:16:47', '2026-06-25 05:16:47'),
(103, 1, '2026-06-25 06:50:55', '112.202.177.54', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 13:50:55', '2026-06-25 13:50:55'),
(104, 1, '2026-06-25 06:53:40', '136.158.124.75', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_6_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.6 Mobile/15E148 Safari/604.1', '2026-06-25 13:53:40', '2026-06-25 13:53:40'),
(105, 1, '2026-06-25 07:37:19', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-25 14:37:19', '2026-06-25 14:37:19'),
(106, 1, '2026-06-25 08:06:58', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-25 15:06:58', '2026-06-25 15:06:58'),
(107, 1, '2026-06-25 08:07:50', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 15:07:50', '2026-06-25 15:07:50'),
(108, 1, '2026-06-25 08:35:59', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 15:35:59', '2026-06-25 15:35:59'),
(109, 1, '2026-06-25 08:39:54', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-25 15:39:54', '2026-06-25 15:39:54'),
(110, 1, '2026-06-25 08:41:42', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-25 15:41:42', '2026-06-25 15:41:42'),
(111, 1, '2026-06-25 08:43:14', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 15:43:13', '2026-06-25 15:43:13'),
(112, 1, '2026-06-25 08:44:37', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-25 15:44:37', '2026-06-25 15:44:37'),
(113, 1, '2026-06-25 08:45:41', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-25 15:45:40', '2026-06-25 15:45:40'),
(114, 1, '2026-06-25 08:46:08', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 15:46:08', '2026-06-25 15:46:08'),
(115, 1, '2026-06-25 08:51:10', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-25 15:51:10', '2026-06-25 15:51:10'),
(116, 1, '2026-06-25 08:55:03', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-25 15:55:02', '2026-06-25 15:55:02'),
(117, 1, '2026-06-25 08:56:21', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-25 15:56:21', '2026-06-25 15:56:21'),
(118, 1, '2026-06-25 09:00:15', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-25 16:00:15', '2026-06-25 16:00:15'),
(119, 1, '2026-06-25 09:01:35', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-25 16:01:35', '2026-06-25 16:01:35'),
(120, 1, '2026-06-25 09:02:35', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 16:02:35', '2026-06-25 16:02:35'),
(121, 1, '2026-06-25 09:06:21', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-25 16:06:21', '2026-06-25 16:06:21'),
(122, 1, '2026-06-25 09:06:49', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 16:06:49', '2026-06-25 16:06:49'),
(123, 1, '2026-06-25 09:16:29', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-25 16:16:29', '2026-06-25 16:16:29'),
(124, 1, '2026-06-25 09:17:54', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 15; Pixel 9) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Mobile Safari/537.36', '2026-06-25 16:17:53', '2026-06-25 16:17:53'),
(125, 1, '2026-06-25 09:18:06', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 16:18:06', '2026-06-25 16:18:06'),
(126, 1, '2026-06-25 09:33:38', '88.201.112.100', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 16:33:38', '2026-06-25 16:33:38'),
(127, 1, '2026-06-25 09:35:24', '88.201.112.100', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-25 16:35:23', '2026-06-25 16:35:23'),
(128, 1, '2026-06-25 13:08:27', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-25 20:08:27', '2026-06-25 20:08:27'),
(129, 1, '2026-06-25 20:12:27', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-26 03:12:27', '2026-06-26 03:12:27'),
(130, 1, '2026-06-25 20:13:18', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-26 03:13:18', '2026-06-26 03:13:18'),
(131, 1, '2026-06-25 23:01:46', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-26 06:01:46', '2026-06-26 06:01:46'),
(132, 1, '2026-06-26 14:37:41', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 21:37:41', '2026-06-26 21:37:41'),
(133, 1, '2026-06-26 14:46:19', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 21:46:19', '2026-06-26 21:46:19'),
(134, 1, '2026-06-26 14:48:43', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 21:48:43', '2026-06-26 21:48:43'),
(135, 1, '2026-06-26 14:49:24', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 21:49:24', '2026-06-26 21:49:24'),
(136, 1, '2026-06-26 15:21:10', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 22:21:10', '2026-06-26 22:21:10'),
(137, 1, '2026-06-26 15:30:10', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 22:30:11', '2026-06-26 22:30:11'),
(138, 1, '2026-06-26 15:31:48', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 22:31:48', '2026-06-26 22:31:48'),
(139, 1, '2026-06-26 15:31:55', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 22:31:55', '2026-06-26 22:31:55'),
(140, 1, '2026-06-26 15:35:30', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 22:35:30', '2026-06-26 22:35:30'),
(141, 1, '2026-06-26 15:51:19', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 22:51:19', '2026-06-26 22:51:19'),
(142, 1, '2026-06-26 15:54:40', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 22:54:40', '2026-06-26 22:54:40'),
(143, 1, '2026-06-26 16:01:06', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 23:01:06', '2026-06-26 23:01:06'),
(144, 1, '2026-06-26 16:02:19', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 23:02:19', '2026-06-26 23:02:19'),
(145, 1, '2026-06-26 16:13:25', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 23:13:25', '2026-06-26 23:13:25'),
(146, 1, '2026-06-26 16:14:37', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 23:14:37', '2026-06-26 23:14:37'),
(147, 1, '2026-06-26 16:25:47', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 23:25:47', '2026-06-26 23:25:47'),
(148, 1, '2026-06-26 16:27:53', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 23:27:53', '2026-06-26 23:27:53'),
(149, 1, '2026-06-26 16:31:49', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 23:31:49', '2026-06-26 23:31:49'),
(150, 1, '2026-06-26 16:34:02', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 23:34:02', '2026-06-26 23:34:02'),
(151, 1, '2026-06-26 16:39:14', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 23:39:14', '2026-06-26 23:39:14'),
(152, 1, '2026-06-26 16:39:55', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 23:39:55', '2026-06-26 23:39:55'),
(153, 1, '2026-06-26 16:44:52', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 23:44:52', '2026-06-26 23:44:52'),
(154, 1, '2026-06-26 16:47:23', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 23:47:23', '2026-06-26 23:47:23'),
(155, 1, '2026-06-26 16:49:57', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-26 23:49:57', '2026-06-26 23:49:57'),
(156, 1, '2026-06-26 16:51:55', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-26 23:51:55', '2026-06-26 23:51:55'),
(157, 1, '2026-06-26 16:52:17', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-26 23:52:17', '2026-06-26 23:52:17'),
(158, 1, '2026-06-26 16:59:39', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-26 23:59:39', '2026-06-26 23:59:39'),
(159, 1, '2026-06-26 17:11:00', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-27 00:11:00', '2026-06-27 00:11:00'),
(160, 1, '2026-06-26 17:11:21', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-27 00:11:21', '2026-06-27 00:11:21'),
(161, 1, '2026-06-26 17:45:38', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-27 00:45:38', '2026-06-27 00:45:38'),
(162, 1, '2026-06-26 22:33:30', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-27 05:33:30', '2026-06-27 05:33:30'),
(163, 1, '2026-06-26 22:34:08', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-27 05:34:08', '2026-06-27 05:34:08'),
(164, 1, '2026-06-26 22:34:08', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-27 05:34:08', '2026-06-27 05:34:08'),
(165, 1, '2026-06-26 23:12:33', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-27 06:12:33', '2026-06-27 06:12:33'),
(166, 1, '2026-06-26 23:13:03', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-27 06:13:03', '2026-06-27 06:13:03'),
(167, 1, '2026-06-26 23:38:51', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-27 06:38:51', '2026-06-27 06:38:51'),
(168, 1, '2026-06-26 23:51:26', '112.210.240.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Mobile Safari/537.36 OPR/99.0.0.0', '2026-06-27 06:51:26', '2026-06-27 06:51:26'),
(169, 1, '2026-06-27 15:01:47', '112.202.177.54', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-27 22:01:47', '2026-06-27 22:01:47'),
(170, 1, '2026-06-27 15:03:29', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-27 22:03:28', '2026-06-27 22:03:28'),
(171, 1, '2026-06-27 15:04:45', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-27 22:04:44', '2026-06-27 22:04:44'),
(172, 1, '2026-06-27 15:09:52', '112.202.177.54', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-27 22:09:52', '2026-06-27 22:09:52'),
(173, 1, '2026-06-27 15:11:43', '68.151.133.142', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_7 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/26.5 Mobile/15E148 Safari/604.1', '2026-06-27 22:11:42', '2026-06-27 22:11:42'),
(174, 1, '2026-06-27 15:23:14', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-27 22:23:14', '2026-06-27 22:23:14'),
(175, 1, '2026-06-27 15:30:17', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-27 22:30:16', '2026-06-27 22:30:16'),
(176, 1, '2026-06-27 16:27:57', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-27 23:27:57', '2026-06-27 23:27:57'),
(177, 1, '2026-06-27 18:13:34', '122.2.120.204', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-28 01:13:33', '2026-06-28 01:13:33'),
(178, 1, '2026-06-28 07:22:58', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-28 14:22:58', '2026-06-28 14:22:58'),
(179, 1, '2026-06-28 18:08:59', '112.202.177.54', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-29 01:08:59', '2026-06-29 01:08:59'),
(180, 1, '2026-06-28 19:45:05', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-29 02:45:05', '2026-06-29 02:45:05'),
(181, 1, '2026-06-28 20:38:44', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-29 03:38:44', '2026-06-29 03:38:44'),
(182, 1, '2026-06-29 07:57:35', '88.201.112.100', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-29 14:57:35', '2026-06-29 14:57:35'),
(183, 1, '2026-06-29 10:44:43', '122.2.120.204', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-29 17:44:44', '2026-06-29 17:44:44'),
(184, 1, '2026-06-29 13:14:42', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-29 20:14:41', '2026-06-29 20:14:41'),
(185, 1, '2026-06-29 13:18:56', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-29 20:18:56', '2026-06-29 20:18:56'),
(186, 1, '2026-06-29 13:19:26', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-29 20:19:26', '2026-06-29 20:19:26'),
(187, 1, '2026-06-29 13:19:54', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-29 20:19:53', '2026-06-29 20:19:53'),
(188, 1, '2026-06-29 13:48:53', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-29 20:48:52', '2026-06-29 20:48:52'),
(189, 1, '2026-06-29 15:11:29', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-29 22:11:29', '2026-06-29 22:11:29'),
(190, 1, '2026-06-29 15:54:01', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-29 22:54:00', '2026-06-29 22:54:00'),
(191, 1, '2026-06-29 16:09:03', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-29 23:09:04', '2026-06-29 23:09:04'),
(192, 1, '2026-06-29 16:13:18', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-29 23:13:19', '2026-06-29 23:13:19'),
(193, 1, '2026-06-29 16:23:41', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-29 23:23:42', '2026-06-29 23:23:42'),
(194, 1, '2026-06-29 16:25:58', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-29 23:25:58', '2026-06-29 23:25:58'),
(195, 1, '2026-06-29 16:28:28', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-29 23:28:29', '2026-06-29 23:28:29'),
(196, 1, '2026-06-29 17:33:23', '136.158.124.168', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_6_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.6 Mobile/15E148 Safari/604.1', '2026-06-30 00:33:23', '2026-06-30 00:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `contact_information`
--

CREATE TABLE `contact_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donation_channels`
--

CREATE TABLE `donation_channels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gcash_name` varchar(255) DEFAULT NULL,
  `gcash_number` varchar(255) DEFAULT NULL,
  `gcash_qr` varchar(255) DEFAULT NULL,
  `bdo_bank_name` varchar(255) DEFAULT NULL,
  `bdo_account_name` varchar(255) DEFAULT NULL,
  `bdo_account_number` varchar(255) DEFAULT NULL,
  `bdo_qr` varchar(255) DEFAULT NULL,
  `maya_bank_name` varchar(255) DEFAULT NULL,
  `maya_account_name` varchar(255) DEFAULT NULL,
  `maya_account_number` varchar(255) DEFAULT NULL,
  `maya_qr` varchar(255) DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `guidelines` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donation_channels`
--

INSERT INTO `donation_channels` (`id`, `gcash_name`, `gcash_number`, `gcash_qr`, `bdo_bank_name`, `bdo_account_name`, `bdo_account_number`, `bdo_qr`, `maya_bank_name`, `maya_account_name`, `maya_account_number`, `maya_qr`, `updated_by`, `created_at`, `updated_at`, `guidelines`) VALUES
(1, 'A*** RE****H P.', '0917 189 ****', '1782142151_knl gcash.jpg', 'BPI', 'BE**A RI**I PA****N AL****N', '***********916', '1782573693_Screenshot 2026-06-27 231748.png', 'MAYA', 'ANA REBEKAH PILLAS', '+63 *** *** 8537', '1782573693_Screenshot 2026-06-27 231700.png', 1, '2026-06-17 06:35:24', '2026-06-27 22:22:22', 'Enter donation guidelines here...');

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
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` enum('pending','resolved','archived') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `user_id`, `full_name`, `contact_number`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(3, 3, 'Darlene Avenir', '09123456789', 'Inquiry Regarding Donation of Items', 'Good day!\r\n\r\nWe would like to inform you that we have several extra items that are still in good condition and may be useful to your organization and its beneficiaries. With this, we would like to donate these items in the hope that they can contribute to your programs and activities.\r\n\r\nPlease let us know if you are willing to accept these donations and the appropriate process for turnover.\r\n\r\nThank you for your time and consideration. We look forward to your response.\r\n\r\nRespectfully yours,\r\nDarlene Avenir', 'resolved', '2026-06-19 16:22:46', '2026-06-19 16:32:39'),
(4, 4, 'SJ Macabebe', '3232323', 'Chair donation', 'I hab chair here', 'resolved', '2026-06-22 23:45:24', '2026-06-22 23:46:12'),
(6, 5, 'John Smith', '+63 987 654 3210', 'Partnership Inquiry', 'Good day! I am John Smith from Brighter Futures Foundation. We are inspired by Kahel na Langit\'s advocacy and would like to explore a possible partnership with your organization. We look forward to hearing from you. Thank you!', 'pending', '2026-06-28 13:10:07', '2026-06-28 13:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

CREATE TABLE `login_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `login_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login_logs`
--

INSERT INTO `login_logs` (`id`, `user_id`, `login_at`, `ip_address`, `user_agent`, `created_at`, `updated_at`) VALUES
(1, 1, '2026-06-17 14:20:32', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-17 06:20:32', '2026-06-17 06:20:32'),
(2, 1, '2026-06-17 14:46:53', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-17 06:46:53', '2026-06-17 06:46:53'),
(3, 4, '2026-06-22 11:28:55', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-22 18:28:55', '2026-06-22 18:28:55'),
(4, 4, '2026-06-22 14:53:38', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-22 21:53:39', '2026-06-22 21:53:39'),
(5, 4, '2026-06-22 14:54:14', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-22 21:54:15', '2026-06-22 21:54:15'),
(6, 3, '2026-06-22 15:04:54', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-22 22:04:54', '2026-06-22 22:04:54'),
(7, 3, '2026-06-22 15:05:48', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-22 22:05:48', '2026-06-22 22:05:48'),
(8, 4, '2026-06-22 16:44:46', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-22 23:44:46', '2026-06-22 23:44:46'),
(9, 2, '2026-06-23 09:43:49', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-23 16:43:49', '2026-06-23 16:43:49'),
(10, 2, '2026-06-23 10:13:44', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-23 17:13:44', '2026-06-23 17:13:44'),
(11, 2, '2026-06-23 15:16:59', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-23 22:16:59', '2026-06-23 22:16:59'),
(12, 4, '2026-06-24 08:08:20', '143.44.240.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-24 15:08:19', '2026-06-24 15:08:19'),
(13, 2, '2026-06-24 12:44:38', '136.158.124.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-24 19:44:38', '2026-06-24 19:44:38'),
(14, 3, '2026-06-27 15:02:55', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-27 22:02:54', '2026-06-27 22:02:54'),
(15, 3, '2026-06-27 16:22:34', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-27 23:22:34', '2026-06-27 23:22:34'),
(16, 3, '2026-06-27 19:11:46', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-28 02:11:46', '2026-06-28 02:11:46'),
(17, 5, '2026-06-28 06:03:01', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-28 13:03:01', '2026-06-28 13:03:01'),
(18, 5, '2026-06-28 06:44:42', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-28 13:44:42', '2026-06-28 13:44:42'),
(19, 3, '2026-06-28 09:08:59', '136.158.124.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-28 16:08:59', '2026-06-28 16:08:59'),
(20, 7, '2026-06-29 12:18:41', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-29 19:18:41', '2026-06-29 19:18:41'),
(21, 8, '2026-06-29 12:34:05', '112.210.240.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-29 19:34:05', '2026-06-29 19:34:05'),
(22, 7, '2026-06-29 17:32:23', '136.158.124.168', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_6_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.6 Mobile/15E148 Safari/604.1', '2026-06-30 00:32:24', '2026-06-30 00:32:24');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2014_10_12_000000_create_users_table', 2),
(3, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(4, '2026_06_16_171040_create_admins_table', 2),
(5, '2026_06_16_171050_create_login_logs_table', 3),
(6, '2026_06_16_171104_create_inquiries_table', 3),
(7, '2026_06_16_171112_create_contact_information_table', 3),
(8, '2026_06_16_171118_create_partnerships_table', 3),
(9, '2026_06_16_171125_create_wishlist_table', 3),
(10, '2026_06_16_171132_create_updates_table', 3),
(11, '2026_06_16_171139_create_donation_channels_table', 3),
(12, '2019_08_19_000000_create_failed_jobs_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `partnerships`
--

CREATE TABLE `partnerships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` enum('current','past') NOT NULL DEFAULT 'current',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partnerships`
--

INSERT INTO `partnerships` (`id`, `name`, `description`, `logo`, `banner_image`, `website`, `start_date`, `end_date`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(4, '𝐂𝐀𝐒𝐀 𝐋𝐈𝐂𝐔𝐏', '𝐊𝐚𝐡𝐞𝐥 𝐧𝐚 𝐋𝐚𝐧𝐠𝐢𝐭 is grateful to announce our partnership with 𝐂𝐀𝐒𝐀 𝐋𝐈𝐂𝐔𝐏 in bringing meaningful spaces to life for the Damayan Community House Project. With the same goal and enthusiasm, our partnership moves us one step closer to making the Damayan Community House a place where everyone can learn, be creative, and feel comfortable.🤝🏡\r\nWe appreciate you sharing your vision and encouragement with us, 𝐂𝐀𝐒𝐀 𝐋𝐈𝐂𝐔𝐏, as we work together to create a better, more hopeful community. 🧡', '1781802280_logo_casalog.png', '1781802222_banner_casa.png', 'https://www.facebook.com/share/p/1BPzZUDcc7/', NULL, NULL, 'current', 1, '2026-06-17 05:49:42', '2026-06-19 00:04:40'),
(5, '𝐑𝐞𝐢𝐠𝐧 𝐖𝐨𝐨𝐝𝐰𝐨𝐫𝐤𝐬', '𝐊𝐚𝐡𝐞𝐥 𝐧𝐚 𝐋𝐚𝐧𝐠𝐢𝐭 is sincerely grateful to 𝐑𝐞𝐢𝐠𝐧 𝐖𝐨𝐨𝐝𝐰𝐨𝐫𝐤𝐬 for partnering with us in bringing the Damayan Community House renovation project to life. Reign Woodworks helped in opening up doors for our kahel na langit that will serve as a haven for hope, resilience, and community.\r\nThank you, 𝐑𝐞𝐢𝐠𝐧 𝐖𝐨𝐨𝐝𝐰𝐨𝐫𝐤𝐬, for sharing your generosity in helping us build a better future for the Damayan community. 🌿✨', '1781851963_logo_reignwoodworkslogo.png', '1781871482_banner_702604196_122100604544456322_1856316571218290673_n.jpg', 'https://www.facebook.com/share/p/1CharDo9oj/', NULL, NULL, 'current', 1, '2026-06-18 18:10:51', '2026-06-19 19:18:02'),
(7, '𝗕𝗼𝘆𝘀𝗲𝗻 𝗣𝗮𝗶𝗻𝘁𝘀 𝗣𝗵𝗶𝗹𝗶𝗽𝗽𝗶𝗻𝗲𝘀', 'We had the absolute honor of visiting the headquarters of 𝗕𝗼𝘆𝘀𝗲𝗻 𝗣𝗮𝗶𝗻𝘁𝘀 𝗣𝗵𝗶𝗹𝗶𝗽𝗽𝗶𝗻𝗲𝘀 for a brand presentation and an exciting partnership discussion! 🏢🤝', '1781851686_logo_boysenlogo.png', '1781851686_banner_boysenbanner.png', 'https://www.facebook.com/share/p/1L46dj3DFH/', NULL, NULL, 'past', 1, '2026-06-18 18:12:17', '2026-06-19 13:48:06'),
(8, '𝗣𝗼𝗹𝗮𝗿𝗶𝘀 𝗦𝘂𝗽𝗽𝗹𝘆 𝗖𝗵𝗮𝗶𝗻 𝗮𝗻𝗱 𝗟𝗼𝗴𝗶𝘀𝘁𝗶𝗰𝘀', 'Big things are in motion! We’ve officially teamed up with 𝗣𝗼𝗹𝗮𝗿𝗶𝘀 𝗦𝘂𝗽𝗽𝗹𝘆 𝗖𝗵𝗮𝗶𝗻 𝗮𝗻𝗱 𝗟𝗼𝗴𝗶𝘀𝘁𝗶𝗰𝘀 as one of our 𝗗𝗶𝗮𝗺𝗼𝗻𝗱 𝗣𝗮𝗿𝘁𝗻𝗲𝗿𝘀 to streamline our design and bring 𝗞𝗮𝗵𝗲𝗹 𝗡𝗮 𝗟𝗮𝗻𝗴𝗶𝘁 closer to you!', '1781851544_logo_polarislogo.jpg', '1781851544_banner_polarisbanner.png', 'https://www.facebook.com/share/p/193kSS9LmQ/', NULL, NULL, 'past', 1, '2026-06-18 18:21:22', '2026-06-19 13:45:44'),
(10, '𝐆𝐚𝐦𝐛𝐨𝐚 𝐃𝐞𝐬𝐢𝐠𝐧𝐬', 'We are getting closer to making the tahian (sewing room) more structured, useful, and motivating for the Damayan community, thanks to their donation of a fabric cabinet. In addition to supporting day-to-day operations, these upgrades will foster creativity, livelihood, and dignity in the area.\r\nMaraming salamat, 𝐆𝐚𝐦𝐛𝐨𝐚 𝐃𝐞𝐬𝐢𝐠𝐧𝐬, for being part of this meaningful journey. ✨', '1781851615_logo_gamboaDSlogo.jpg', '1781851615_banner_gamboaDSbanner.png', 'https://www.facebook.com/share/p/1EWNuwMcAZ/', NULL, NULL, 'current', 1, '2026-06-18 21:57:40', '2026-06-19 13:46:55'),
(11, '𝐕𝐑𝐒𝐀 𝐕𝐢𝐬𝐮𝐚𝐥𝐬', 'Kahel na Langit is pleased to work alongside 𝐕𝐑𝐒𝐀 𝐕𝐢𝐬𝐮𝐚𝐥𝐬 on a documentary video project that will bring the stories of the Damayan Community to life. 🏡\r\nThis partnership seeks to tell the people, experiences, and everyday realities that underlie the community—highlighting their resiliency, hope, and strength—rather than just photographing spaces. We want to convey the essence of Damayan via narrative and encourage others to appreciate the community\'s beauty.\r\nWe appreciate 𝐕𝐑𝐒𝐀 𝐕𝐢𝐬𝐮𝐚𝐥𝐬 Visuals being part of our mission to create spaces with purpose and to help us preserve these important stories. 🌿', '1781851436_logo_vrsalogo.jpg', '1781851436_banner_vrsabanner.png', 'https://www.facebook.com/share/p/14dqDi6erQh/', NULL, NULL, 'current', 1, '2026-06-18 21:58:35', '2026-06-19 13:43:56'),
(12, '𝐋𝐚𝐧𝐝𝐥𝐢𝐭𝐞 𝐏𝐡𝐢𝐥𝐢𝐩𝐩𝐢𝐧𝐞𝐬 𝐂𝐨𝐫𝐩𝐨𝐫𝐚𝐭𝐢𝐨𝐧', 'Kahel na Langit expresses its sincere appreciation to 𝐋𝐚𝐧𝐝𝐥𝐢𝐭𝐞 𝐏𝐡𝐢𝐥𝐢𝐩𝐩𝐢𝐧𝐞𝐬 𝐂𝐨𝐫𝐩𝐨𝐫𝐚𝐭𝐢𝐨𝐧 for their kind sponsorship of the lighting fixtures at the Damayan Community House. 💡🏡\r\nWe continue to turn spaces into places of comfort, learning, and hope for the Damayan community by working together and sharing a common goal. 🧡', '1781850566_logo_landlitelogo.jpg', '1781850566_banner_landlightbanner.png', 'https://www.facebook.com/share/p/1DuXZS7ycZ/', NULL, NULL, 'current', 1, '2026-06-18 21:59:21', '2026-06-19 13:29:26'),
(13, '𝐄.𝐌. 𝐌𝐨𝐥𝐢𝐧𝐚’𝐬 𝐂𝐨𝐧𝐬𝐮𝐥𝐭𝐚𝐧𝐜𝐲 𝐅𝐢𝐫𝐦', 'A heartfelt thank you to 𝐄.𝐌. 𝐌𝐨𝐥𝐢𝐧𝐚’𝐬 𝐂𝐨𝐧𝐬𝐮𝐥𝐭𝐚𝐧𝐜𝐲 𝐅𝐢𝐫𝐦 for generously sponsoring the ceiling fans and swivel chair for the Damayan Community House through our 𝐊𝐚𝐡𝐞𝐥 𝐧𝐚 𝐋𝐚𝐧𝐠𝐢𝐭 project. 🌅\r\nYour support goes beyond providing furniture and fixtures, it contributes to creating a more comfortable, functional, and welcoming environment for the community. These additions will help improve the daily experiences of the residents and support the activities that bring people together within the space.🏡', '1781850233_logo_EMMCFirmLogo.png', '1781850233_banner_EMMCFirm Banner.png', 'https://www.facebook.com/share/p/1CjCyWPQZo/', NULL, NULL, 'current', 1, '2026-06-18 22:01:31', '2026-06-19 13:23:53'),
(14, '𝐄𝐥𝐞𝐦𝐞𝐧𝐭𝐬 𝐅𝐢𝐧𝐞 𝐅𝐮𝐫𝐧𝐢𝐬𝐡𝐢𝐧𝐠 𝐅𝐚𝐛𝐫𝐢𝐜𝐬 𝐈𝐧𝐜.', 'A sincere thank you to 𝐄𝐥𝐞𝐦𝐞𝐧𝐭𝐬 𝐅𝐢𝐧𝐞 𝐅𝐮𝐫𝐧𝐢𝐬𝐡𝐢𝐧𝐠 𝐅𝐚𝐛𝐫𝐢𝐜𝐬 𝐈𝐧𝐜.  for supporting 𝐊𝐚𝐡𝐞𝐥 𝐧𝐚 𝐋𝐚𝐧𝐠𝐢𝐭 through wallpaper sponsorship. Their support helps us bring warmth, character, and purpose to the spaces we design, transforming them into environments that inspire comfort, creativity, and hope.🧡', '1781850330_logo_elementsfinelogo.png', '1781850330_banner_elementsbanner.png', 'https://www.facebook.com/share/p/1BDTLfwUxP/', NULL, NULL, 'current', 1, '2026-06-19 00:29:53', '2026-06-19 13:25:30'),
(15, '𝐌𝐢𝐜𝐫𝐨 𝐏𝐚𝐜𝐢𝐟𝐢𝐜 𝐓𝐞𝐜𝐡𝐧𝐨𝐥𝐨𝐠𝐢𝐞𝐬 & 𝐒𝐲𝐬𝐭𝐞𝐦𝐬 𝐂𝐨𝐫𝐩𝐨𝐫𝐚𝐭𝐢𝐨𝐧', 'We would like to express our sincere gratitude to 𝐌𝐢𝐜𝐫𝐨 𝐏𝐚𝐜𝐢𝐟𝐢𝐜 𝐓𝐞𝐜𝐡𝐧𝐨𝐥𝐨𝐠𝐢𝐞𝐬 & 𝐒𝐲𝐬𝐭𝐞𝐦𝐬 𝐂𝐨𝐫𝐩𝐨𝐫𝐚𝐭𝐢𝐨𝐧 for their kind donation and assistance with our community outreach initiative in 𝐊𝐚𝐡𝐞𝐥 𝐧𝐚 𝐋𝐚𝐧𝐠𝐢𝐭. Your generosity and dedication to changing the world enable us to design spaces that are more inspiring, useful, and meaningful for the Damayan Community.', '1781850412_logo_mpacificlogo.jpg', '1781850412_banner_micropacificbanner.png', 'https://www.facebook.com/share/p/1CuiLDvNkM/', NULL, NULL, 'current', 1, '2026-06-19 00:30:46', '2026-06-19 13:26:52'),
(16, 'Bagani Delegation', '𝗕𝘂𝗶𝗹𝗱𝗶𝗻𝗴 𝗛𝗼𝗽𝗲: 𝗔 𝗦𝗮𝗳𝗲 𝗦𝗽𝗮𝗰𝗲 𝗳𝗼𝗿 𝘁𝗵𝗲 𝗗𝗮𝗺𝗮𝘆𝗮𝗻 𝗖𝗼𝗺𝗺𝘂𝗻𝗶𝘁𝘆 🧡🏡\r\nThe PH Bagani Delegation, in partnership with Kahel na Langit, is coming together to support a movement of resilience and community building.', '1781871936_logo_556925401_122101884771047986_4729174582583124735_n.jpg', '1781871936_banner_702176711_17880725556580250_8785781123531972143_n.jpg', 'https://www.facebook.com/share/p/1D3iPrhCKY/', NULL, NULL, 'current', 1, '2026-06-19 19:25:36', '2026-06-19 19:25:36');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `category` enum('announcement','project_update') NOT NULL DEFAULT 'announcement',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `title`, `content`, `image`, `event_date`, `category`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '𝐁𝐔𝐈𝐋𝐃𝐈𝐍𝐆 𝐓𝐇𝐄 𝐃𝐑𝐄𝐀𝐌, 𝐎𝐍𝐄 𝐖𝐈𝐒𝐇 𝐀𝐓 𝐀 𝐓𝐈𝐌𝐄 🌅✨', 'As of May 22, 2026, we are grateful to share that we have successfully obtained 𝟏𝟔 𝐨𝐮𝐭 𝐨𝐟 𝟐𝟒 𝐰𝐢𝐬𝐡𝐥𝐢𝐬𝐭 𝐢𝐭𝐞𝐦𝐬, reaching 𝟔𝟔.𝟔𝟕% completionfor our community project! 💛', '1781861318_704367011_122100814820456322_8838985332183199058_n.jpg', '2026-05-22', 'project_update', 1, 1, '2026-06-17 05:33:41', '2026-06-19 16:31:02'),
(2, '𝐊𝐀𝐇𝐄𝐋 𝐍𝐀 𝐋𝐀𝐍𝐆𝐈𝐓 𝐆𝐎𝐄𝐒 𝐓𝐎 𝐏𝐀𝐓𝐄𝐑𝐎𝐒! 🌸', 'Kahel na Langit will have its own 𝐋𝐈𝐕𝐄 𝐁𝐎𝐎𝐓𝐇 starting at 𝟏𝟎 𝐀𝐌 𝐚𝐭 𝐏𝐀𝐓𝐄𝐑𝐎𝐒 - 𝐁𝐀𝐘𝐀𝐍! Join us starting tomorrow till Sunday as we celebrate Mother\'s Day together! 🧡🧡🧡', '1781861362_693462852_122099839592456322_5556422031611515695_n.jpg', '2026-06-18', 'announcement', 1, 1, '2026-06-17 06:09:51', '2026-06-19 16:29:22'),
(3, '𝐏𝐑𝐎𝐉𝐄𝐂𝐓 𝐔𝐏𝐃𝐀𝐓𝐄: 𝐇𝐀𝐏𝐏𝐘 𝟏𝟎𝟏𝐊 𝐃𝐎𝐍𝐀𝐓𝐈𝐎𝐍𝐒! ✨', 'We are incredibly grateful to everyone who has consistently supported 𝐊𝐚𝐡𝐞𝐥 𝐧𝐚 𝐋𝐚𝐧𝐠𝐢𝐭 by sharing our advocacy, making donations, sponsoring events, and having faith in our vision for the Damayan Community House. 🏡☀️', '1781861133_704367318_122100814784456322_2575527237252482385_n.jpg', '2026-05-22', 'project_update', 1, 1, '2026-06-18 16:03:49', '2026-06-22 15:47:21');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Steven', 'stevenmacabebe642@gmail.com', NULL, '$2y$10$z0eCp/nhpMQTM4EpiQOMEe/djPBQMzeow8GmVRF/v2RKujt9OcgWG', NULL, '2026-06-17 06:20:19', '2026-06-17 06:20:19'),
(2, 'Darlene Avenir', 'deavenir@mymail.mapua.edu.ph', NULL, '$2y$10$1xwNe2zw15MTQmv8a69sd.ceyL06JZEwBwetdAPn6DSiERl0K.Q72', NULL, '2026-06-18 17:03:56', '2026-06-18 17:03:56'),
(3, 'Darlene Avenir', 'darleneavenir@gmail.com', NULL, '$2y$10$vDGAtn8GQU8g/eXBLd3B2OlBJjrN2vqA1fRvy1a15rVxSdzSGOOim', NULL, '2026-06-19 16:03:39', '2026-06-19 16:03:39'),
(4, 'SJ Macabebe', 'sjomacabebe@mymail.mapua.edu.ph', NULL, '$2y$10$zmnYfOXbH.PlvRs.x86uDeebFPsv5oA7cZxk0X07mJmCdgWBfHLIS', NULL, '2026-06-22 17:57:47', '2026-06-22 17:57:47'),
(5, 'John Smith', 'johnsmith@gmail.com', NULL, '$2y$10$tveCWknqMNHbueAgufyO3OdR7j6XRMWzx1SNxG1rCK5UWoeTulOsW', NULL, '2026-06-28 02:23:25', '2026-06-28 02:23:25'),
(6, 'user1', 'user1@gmail.com', NULL, '$2y$10$ObH54.Ci1.z.LLHr79FGRuguSr.x7l/dbOO9i16mt1uJYfEi9oCeG', NULL, '2026-06-28 21:40:19', '2026-06-28 21:40:19'),
(7, 'User', 'test@example.com', NULL, '$2y$10$5y9JROp15oPvSGpnhr0h3ujbLREWKFFGpR4llAUhHnZ9fUCCMof.y', NULL, '2026-06-29 19:18:16', '2026-06-29 19:18:16'),
(8, 'FirstName LastName', 'test@kahel.com', NULL, '$2y$10$NfHhXAYSEILvBe.0w7mvmONCNE6MYUw.G1S20BpI.m5dQn2C/88j.', NULL, '2026-06-29 19:33:42', '2026-06-29 19:33:42'),
(9, 'Marian Nicole G. Acosta', 'marmar14141414@gmail.com', NULL, '$2y$10$tarv4aHc2b3DkpylP63HZurj8jbpIdaOQjikFC923ZNh9K8Bc3zFu', NULL, '2026-06-29 23:40:01', '2026-06-29 23:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `quantity_needed` int(11) NOT NULL,
  `quantity_received` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('incomplete','complete','no_donations') NOT NULL DEFAULT 'no_donations',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `item_name`, `description`, `quantity_needed`, `quantity_received`, `image`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(4, 'Narrow Console Table', 'Price: PHP 1,757.40', 1, 0, '1782065148_console table.jpg', 'incomplete', 1, '2026-06-22 01:05:48', '2026-06-22 15:38:23'),
(5, 'White Window Blinds', 'Price: PHP 342 each', 5, 4, '1782117471_blinds.jpg', 'incomplete', 1, '2026-06-22 15:37:51', '2026-06-22 23:47:24'),
(6, 'Full Body Mirror', 'Price: PHP 941.91 each', 3, 2, '1782117961_mirror.png', 'incomplete', 1, '2026-06-22 15:46:01', '2026-06-22 15:46:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_logs`
--
ALTER TABLE `admin_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_logs_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `contact_information`
--
ALTER TABLE `contact_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_information_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `donation_channels`
--
ALTER TABLE `donation_channels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donation_channels_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inquiries_user_id_foreign` (`user_id`);

--
-- Indexes for table `login_logs`
--
ALTER TABLE `login_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_logs_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partnerships`
--
ALTER TABLE `partnerships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `partnerships_created_by_foreign` (`created_by`);

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
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `updates_created_by_foreign` (`created_by`),
  ADD KEY `updates_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlist_created_by_foreign` (`created_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_logs`
--
ALTER TABLE `admin_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `contact_information`
--
ALTER TABLE `contact_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donation_channels`
--
ALTER TABLE `donation_channels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login_logs`
--
ALTER TABLE `login_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `partnerships`
--
ALTER TABLE `partnerships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_logs`
--
ALTER TABLE `admin_logs`
  ADD CONSTRAINT `admin_logs_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contact_information`
--
ALTER TABLE `contact_information`
  ADD CONSTRAINT `contact_information_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `admins` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `donation_channels`
--
ALTER TABLE `donation_channels`
  ADD CONSTRAINT `donation_channels_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `admins` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD CONSTRAINT `inquiries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `login_logs`
--
ALTER TABLE `login_logs`
  ADD CONSTRAINT `login_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `partnerships`
--
ALTER TABLE `partnerships`
  ADD CONSTRAINT `partnerships_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `updates`
--
ALTER TABLE `updates`
  ADD CONSTRAINT `updates_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `updates_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `admins` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `admins` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
