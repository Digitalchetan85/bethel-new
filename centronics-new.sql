-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 09:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `centronics-new`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$TIbZDHodEAXUDFGQ05lviefutVO0LCAjNXk/H65qXym0TJN54JmRm', '2021-08-24 02:30:11', '2021-08-24 02:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand`, `created_at`, `updated_at`) VALUES
(2, 'Brand 1', '2021-08-24 20:19:19', '2021-08-24 20:19:19'),
(3, 'Brand 2', '2021-08-24 20:19:27', '2021-08-24 20:19:27'),
(4, 'Brand 3', '2021-08-31 07:09:21', '2021-08-31 07:09:21'),
(5, '3M Interconnect', '2021-09-20 09:53:18', '2021-09-20 09:53:18'),
(6, 'Texas Instruments', '2021-09-20 09:53:31', '2021-09-20 09:53:31'),
(7, 'INFineon', '2021-09-20 10:38:13', '2021-09-20 10:38:13'),
(8, 'Cnuts', '2022-04-05 03:50:46', '2022-04-05 03:50:46'),
(9, 'Littelfuse', '2022-04-06 05:13:07', '2022-04-06 05:13:07'),
(10, 'Microchip Technology', '2022-04-06 05:13:28', '2022-04-06 05:13:28'),
(11, 'FTDI', '2022-04-06 05:13:37', '2022-04-06 05:13:37'),
(12, 'STMicroelectronics', '2022-04-06 05:14:31', '2022-04-06 05:14:31'),
(13, 'Linear Technology', '2022-04-06 05:14:47', '2022-04-06 05:14:47'),
(14, 'SHARP', '2022-04-06 05:15:02', '2022-04-06 05:15:02'),
(15, 'Vishay', '2022-04-06 05:15:11', '2022-04-06 05:15:11'),
(16, 'Renesas Electronics', '2022-04-06 05:15:20', '2022-04-06 05:15:20'),
(17, 'Infineon Technologies', '2022-04-06 05:15:29', '2022-04-06 05:15:29'),
(18, 'TE', '2022-04-06 05:15:40', '2022-04-06 05:15:40'),
(19, 'UN', '2022-04-06 05:15:53', '2022-04-06 05:15:53'),
(20, 'TI', '2022-04-06 05:16:01', '2022-04-06 05:16:01'),
(21, 'Microchip', '2022-04-06 05:16:13', '2022-04-06 05:16:13'),
(22, 'RENESAS', '2022-04-06 05:16:24', '2022-04-06 05:16:24'),
(23, 'BOURNS', '2022-04-06 05:16:38', '2022-04-06 05:16:38'),
(24, 'Molex', '2022-04-06 05:17:00', '2022-04-06 05:17:00'),
(25, 'Abracon Llc', '2022-04-06 05:17:48', '2022-04-06 05:17:48'),
(26, 'Adesto Technologies', '2022-04-06 05:18:03', '2022-04-06 05:18:03'),
(27, 'ADI', '2022-04-06 05:18:20', '2022-04-06 05:18:20'),
(28, 'Amphenol FCI', '2022-04-06 05:19:08', '2022-04-06 05:19:08'),
(29, 'Amphenol ICC (Commercial Products)', '2022-04-06 05:19:22', '2022-04-06 05:19:22'),
(30, 'Amphenol ICC (FCI)', '2022-04-06 05:19:36', '2022-04-06 05:19:36'),
(31, 'Analog Devices Inc.', '2022-04-06 05:19:50', '2022-04-06 05:19:50'),
(32, 'BEL Fuse', '2022-04-06 05:20:05', '2022-04-06 05:20:05'),
(33, 'Bourns Inc.', '2022-04-06 05:20:29', '2022-04-06 05:20:29'),
(34, 'Broadcom Limited', '2022-04-06 05:20:47', '2022-04-06 05:20:47'),
(35, 'Cypress Semiconductor Corp', '2022-04-06 05:21:04', '2022-04-06 05:21:04'),
(36, 'Dallas-Semi', '2022-04-06 05:21:17', '2022-04-06 05:21:17'),
(37, 'Diodes Incorporated', '2022-04-06 05:21:38', '2022-04-06 05:21:38'),
(38, 'E-Switch', '2022-04-06 05:21:53', '2022-04-06 05:21:53'),
(39, 'Fairchild', '2022-04-06 05:22:14', '2022-04-06 05:22:14'),
(40, 'Fairchild SC', '2022-04-06 05:22:30', '2022-04-06 05:22:30'),
(41, 'Fairchild/ON Semiconductor', '2022-04-06 05:22:53', '2022-04-06 05:22:53'),
(42, 'HARTING', '2022-04-06 05:48:51', '2022-04-06 05:48:51'),
(43, 'JAE ELECTRONICS', '2022-04-06 05:49:56', '2022-04-06 05:49:56'),
(44, 'JST', '2022-04-06 05:50:19', '2022-04-06 05:50:19'),
(45, 'Linear', '2022-04-06 05:52:21', '2022-04-06 05:52:21'),
(46, 'Littelfuse Inc.', '2022-04-06 05:53:06', '2022-04-06 05:53:06'),
(47, 'LITTELFUSE.INC', '2022-04-06 05:53:23', '2022-04-06 05:53:23'),
(48, 'Macronix', '2022-04-06 05:53:40', '2022-04-06 05:53:40'),
(49, 'Maxim Integrated', '2022-04-06 05:53:54', '2022-04-06 05:53:54'),
(50, 'MaxLinear, Inc.', '2022-04-06 05:54:16', '2022-04-06 05:54:16'),
(51, 'Micro Chip', '2022-04-06 05:54:38', '2022-04-06 05:54:38'),
(52, 'MICRO COMMERCIAL', '2022-04-06 05:54:54', '2022-04-06 05:54:54'),
(53, 'Micro Commercial Co', '2022-04-06 05:55:18', '2022-04-06 05:55:18'),
(54, 'MOLEX CONNECTOR CORPORATION', '2022-04-06 05:56:26', '2022-04-06 05:56:26'),
(55, 'Murata Power', '2022-04-06 05:56:44', '2022-04-06 05:56:44'),
(56, 'National', '2022-04-06 05:57:01', '2022-04-06 05:57:01'),
(57, 'Nexperia USA Inc.', '2022-04-06 05:57:17', '2022-04-06 05:57:17'),
(58, 'NXP SC', '2022-04-06 05:57:40', '2022-04-06 05:57:40'),
(59, 'NXP USA Inc.', '2022-04-06 05:58:02', '2022-04-06 05:58:02'),
(60, 'Omron Electronics Inc-EMC Div', '2022-04-06 05:58:23', '2022-04-06 05:58:23'),
(61, 'ON Semiconductor', '2022-04-06 05:58:38', '2022-04-06 05:58:38'),
(62, 'On Shore Technology Inc.', '2022-04-06 05:58:57', '2022-04-06 05:58:57'),
(63, 'Panasonic Electronic Components', '2022-04-06 05:59:11', '2022-04-06 05:59:11'),
(64, 'PHEONIX', '2022-04-06 05:59:29', '2022-04-06 05:59:29'),
(65, 'Phoenix Contact', '2022-04-06 05:59:45', '2022-04-06 05:59:45'),
(66, 'Pulse Electronics', '2022-04-06 06:00:09', '2022-04-06 06:00:09'),
(67, 'Ramtron', '2022-04-06 06:00:27', '2022-04-06 06:00:27'),
(68, 'Samtec Inc.', '2022-04-06 06:01:30', '2022-04-06 06:01:30'),
(69, 'Semtech Corporation', '2022-04-06 06:01:47', '2022-04-06 06:01:47'),
(70, 'Silicon Lab', '2022-04-06 06:02:10', '2022-04-06 06:02:10'),
(71, 'Silicon Labs', '2022-04-06 06:02:30', '2022-04-06 06:02:30'),
(72, 'ST', '2022-04-06 06:02:48', '2022-04-06 06:02:48'),
(73, 'STM', '2022-04-06 06:03:01', '2022-04-06 06:03:01'),
(74, 'Taiwan Semiconductor', '2022-04-06 06:03:37', '2022-04-06 06:03:37'),
(75, 'TDK Electronics Inc.', '2022-04-06 06:03:58', '2022-04-06 06:03:58'),
(76, 'TE Connectivity', '2022-04-06 06:04:19', '2022-04-06 06:04:19'),
(77, 'TE Connectivity AMP Connectors', '2022-04-06 06:04:33', '2022-04-06 06:04:33'),
(78, 'Texas', '2022-04-06 06:04:55', '2022-04-06 06:04:55'),
(79, 'Toshiba Semiconductor', '2022-04-06 06:05:35', '2022-04-06 06:05:35'),
(80, 'TRACO', '2022-04-06 06:05:50', '2022-04-06 06:05:50'),
(81, 'Vishay Semiconductor Diodes Division', '2022-04-06 06:06:35', '2022-04-06 06:06:35'),
(82, 'Vishay Siliconix', '2022-04-06 06:06:50', '2022-04-06 06:06:50'),
(83, 'Würth Elektronik', '2022-04-06 06:07:05', '2022-04-06 06:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_price` decimal(12,2) NOT NULL DEFAULT 0.00,
  `product_type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `session_id`, `product_id`, `qty`, `created_at`, `updated_at`, `comment`, `target_price`, `product_type`) VALUES
(82, 'ViMuxmbbg4fjtVPSjWYr4us1tlafyf', 448, NULL, '2022-06-28 05:52:11', '2022-06-28 05:52:11', NULL, '0.00', 'SMCJ5.0CA-TP'),
(83, 'ViMuxmbbg4fjtVPSjWYr4us1tlafyf', 60, NULL, '2022-06-28 05:52:11', '2022-06-28 05:52:11', NULL, '0.00', 'SMCJ5.0CA');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(11, '1C', '2022-04-05 03:52:23', '2022-04-14 02:46:49');

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
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2021_08_22_130403_create_admin_table', 1),
(11, '2021_08_24_082047_create_categories_table', 2),
(12, '2021_08_24_082545_create_brands_table', 2),
(15, '2021_08_24_083700_create_products_table', 3),
(16, '2021_08_25_154332_create_cart_table', 4),
(17, '2021_08_25_164815_add_other_fields_to_cart_table', 5),
(18, '2021_08_26_105542_create_orders_table', 6),
(20, '2021_08_26_110028_create_order_products_table', 7),
(21, '2021_08_26_113009_add_product_type_to_cart_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_date_time` datetime DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urgent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_describe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_inquiry_connected` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `order_status` enum('Pending','On Going','Delivered') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_no`, `user_id`, `order_date_time`, `company_name`, `first_name`, `last_name`, `phone_number`, `email`, `urgent`, `delivery_date`, `company_describe`, `comment`, `is_inquiry_connected`, `order_status`, `created_at`, `updated_at`) VALUES
(10, 'ORD135308', NULL, '2021-08-26 15:09:09', 'Test Company', 'Sunny', 'Trivedi', '7096870742', 'askmrtrivedi@gmail.com', 'Yes', '2021-08-31', 'End user', 'Lorem Ipsum Some Dummy Content', 'No', 'Delivered', '2021-08-26 15:09:09', '2021-09-20 10:55:55'),
(11, 'ORD037127', NULL, '2021-08-27 06:44:06', 'None', 'Ashish', 'p', '33613222325', 'pashish4373@gmail.com', 'Yes', '2021-08-28', 'Franchised Distributor', '213', 'No', 'Pending', '2021-08-27 06:44:06', '2021-08-27 06:44:06'),
(12, 'ORD079507', NULL, '2021-08-27 07:06:47', 'ST Solutions', 'Anburaj', 'Selvam', '08553161022', 'anburaj.creativenuts@gmail.com', 'Yes', '2021-08-27', 'Contract Manufacturer', 'TEST', 'No', 'Pending', '2021-08-27 07:06:47', '2021-08-27 07:06:47'),
(13, 'ORD351908', NULL, '2021-08-27 11:24:34', 'None', 'Ashish', 'p', '916258123250', 'pashish4373@gmail.com', 'Yes', '2021-08-28', 'Contract Manufacturer', '142254', 'Yes', 'Pending', '2021-08-27 11:24:34', '2021-09-20 10:55:23'),
(14, 'ORD363687', NULL, '2021-08-30 05:03:04', 'None', 'Ashish', 'p', '9916028516', 'pashish4373@gmail.com', 'Yes', '2021-09-03', 'Contract Manufacturer', 'ghgjknm', 'No', 'Pending', '2021-08-30 05:03:04', '2021-08-30 05:03:04'),
(15, 'ORD698712', NULL, '2021-08-31 07:03:41', 'None', 'Ashish', 'p', '991628516', 'pashish4373@gmail.com', 'Yes', '2021-09-01', 'Original Equipment Manufacturer', 'hgv', 'No', 'Pending', '2021-08-31 07:03:41', '2021-08-31 07:03:41'),
(19, 'ORD750672', 14, '2022-05-25 12:09:55', 'chetan', 'naidu', 'v', '9513838585', 'behappy2chethu@gmail.com', 'Yes', '2022-05-27', 'Franchised Distributor', 'hvhgv', 'No', 'Pending', '2022-05-25 06:39:55', '2022-05-25 06:39:55'),
(20, 'ORD063726', 13, '2022-06-14 13:18:36', 'chetan', 'chetan', 'chetan', '9513838585', 'chetankumar.nv@gmail.com', 'No', '2022-06-16', 'Original Equipment Manufacturer', 'jgh', 'No', 'Pending', '2022-06-14 07:48:36', '2022-06-14 07:48:36'),
(21, 'ORD154851', 13, '2022-06-28 06:51:02', 'xsxs', 'xax', 'axzx', 'cas', 'csa@gmail.com', 'Yes', '2022-06-30', 'End user', 'scs', 'No', 'Pending', '2022-06-28 01:21:02', '2022-06-28 01:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `part_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `brand_name`, `category_name`, `part_no`, `product_type`, `qty`, `price`, `comment`, `target_price`, `created_at`, `updated_at`) VALUES
(20, 10, 9, 'Brand 1', 'Fruites', 'BMAORDER2', '0', '20', '6000', 'test 1', '500', '2021-08-26 15:09:09', '2021-08-26 15:09:09'),
(21, 10, 8, 'Brand 1', 'Grocery', 'BMAORDER1', '0', '10', '5000', 'test 2', '1000', '2021-08-26 15:09:10', '2021-08-26 15:09:10'),
(22, 11, 9, 'Brand 1', 'Fruites', 'BMAORDER2', '0', '4', '6000', NULL, '200', '2021-08-27 06:44:06', '2021-08-27 06:44:06'),
(23, 11, 8, 'Brand 1', 'Grocery', 'BMAORDER1', '0', '4', '5000', NULL, '2000', '2021-08-27 06:44:06', '2021-08-27 06:44:06'),
(24, 12, 9, 'Brand 1', 'Fruites', 'BMAORDER2', '0', '25', '6000', '8553161022', '2500', '2021-08-27 07:06:47', '2021-08-27 07:06:47'),
(25, 13, 11, 'Brand 1', 'Fruites', 'New Product 2', '1', NULL, NULL, NULL, '20', '2021-08-27 11:24:34', '2021-08-27 11:24:34'),
(26, 13, 10, 'Brand 1', 'Grocery', 'New Product', '1', NULL, NULL, NULL, '20', '2021-08-27 11:24:34', '2021-08-27 11:24:34'),
(27, 14, 11, 'Brand 1', 'Fruites', 'New Product 2', '1', '6', NULL, NULL, '20', '2021-08-30 05:03:04', '2021-08-30 05:03:04'),
(28, 14, 10, 'Brand 1', 'Grocery', 'New Product', '1', '5', NULL, NULL, '20', '2021-08-30 05:03:04', '2021-08-30 05:03:04'),
(29, 15, 9, 'Brand 1', 'Fruites', 'BMAORDER2', '0', '10', '6000', NULL, '20', '2021-08-31 07:03:41', '2021-08-31 07:03:41'),
(30, 15, 8, 'Brand 1', 'Grocery', 'BMAORDER1', '0', '6', '5000', NULL, '20', '2021-08-31 07:03:41', '2021-08-31 07:03:41'),
(31, 15, 7, 'Brand 2', 'Fruites', 'BMA535PLK', '1', '5', '4500', NULL, '20', '2021-08-31 07:03:41', '2021-08-31 07:03:41'),
(32, 15, 6, 'Brand 2', 'Grocery', 'BMA531PLK', '1', NULL, '5000', NULL, '20', '2021-08-31 07:03:41', '2021-08-31 07:03:41'),
(33, 16, 13, 'Texas Instruments', 'Active', 'CD4011BE', '0', '12', '200', 'ksdk', '1200', '2022-03-03 23:11:05', '2022-03-03 23:11:05'),
(34, 16, 14, 'Texas Instruments', 'Active', 'CD4072BE', '0', '10', '150', 'fkk', '1200', '2022-03-03 23:11:05', '2022-03-03 23:11:05'),
(35, 16, 15, 'Texas Instruments', 'Active', 'CD4081BE', '0', '20', '180', 'idsi', '1200', '2022-03-03 23:11:05', '2022-03-03 23:11:05'),
(36, 17, 2, 'Brand 1', NULL, '2', '0', NULL, '200', NULL, NULL, '2022-03-05 10:27:16', '2022-03-05 10:27:16'),
(37, 17, 3, 'Brand 1', NULL, '3', '0', NULL, '150', NULL, NULL, '2022-03-05 10:27:16', '2022-03-05 10:27:16'),
(38, 18, 12, 'Texas Instruments', 'Active', 'CD4001BE', '0', NULL, '111', NULL, NULL, '2022-03-25 14:43:37', '2022-03-25 14:43:37'),
(39, 19, 17, 'Cnuts', '1C', 'ABS07-32.768KHZ-T', '1', '4', '110', NULL, NULL, '2022-05-25 06:39:55', '2022-05-25 06:39:55'),
(40, 20, 579, 'Vishay Siliconix', '1C', 'IRF840STRLPBF', '1', '576', '130', NULL, NULL, '2022-06-14 07:48:37', '2022-06-14 07:48:37'),
(41, 21, 578, 'Vishay Semiconductor Diodes Division', '1C', 'ZM4742A-GS08', '1', NULL, '25', NULL, NULL, '2022-06-28 01:21:03', '2022-06-28 01:21:03');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '0-order 1-request for quote',
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `part_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock_availability` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1-In stock,2-Out of stock',
  `stock_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_reminder_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum_order_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_type`, `category_id`, `brand_id`, `part_no`, `price`, `stock_availability`, `stock_quantity`, `stock_reminder_quantity`, `minimum_order_quantity`, `created_at`, `updated_at`) VALUES
(17, '1', 11, 8, 'ABS07-32.768KHZ-T', '0', '1', '20', '10', '10', '2022-04-14 12:34:45', '2022-04-14 12:34:45'),
(18, '1', 11, 9, 'AT45DB641E-SHN-T', '470', '1', '20', '10', '10', '2022-04-14 12:37:31', '2022-04-14 12:37:31'),
(19, '1', 11, 10, 'AD7321BRUZ', '999', '1', '944', '10', '10', '2022-04-14 12:41:29', '2022-04-14 12:41:29'),
(20, '1', 11, 11, '865609SLTLF', '68', '1', '70', '10', '10', '2022-04-14 12:43:01', '2022-04-14 12:43:01'),
(21, '1', 11, 11, '865609PLTXLF', '100', '1', '20', '10', '10', '2022-04-14 12:43:01', '2022-04-14 12:43:01'),
(22, '1', 11, 11, '8655MH0901BLF', '490', '1', '50', '10', '10', '2022-04-14 12:43:01', '2022-04-14 12:43:01'),
(23, '1', 11, 11, 'DA3W3SA00LF', '280', '1', '20', '10', '10', '2022-04-14 12:43:01', '2022-04-14 12:43:01'),
(24, '1', 11, 12, 'L17DEFRA09P', '290', '1', '20', '10', '10', '2022-04-14 12:44:27', '2022-04-14 12:44:27'),
(25, '1', 11, 13, '8656352064LF', '20', '1', '570', '10', '10', '2022-04-14 12:46:10', '2022-04-14 12:46:10'),
(26, '1', 11, 14, 'AD7327BRUZ', '630', '1', '20', '10', '10', '2022-04-14 12:48:01', '2022-04-14 12:48:01'),
(27, '1', 11, 14, 'LTC3406ES5#TRMPBF', '550', '1', '20', '10', '10', '2022-04-14 12:48:01', '2022-04-14 12:48:01'),
(28, '1', 11, 14, 'AD7327BRUZ', '630', '1', '20', '10', '10', '2022-04-14 12:48:03', '2022-04-14 12:48:03'),
(29, '1', 11, 14, 'LTC3406ES5#TRMPBF', '550', '1', '20', '10', '10', '2022-04-14 12:48:03', '2022-04-14 12:48:03'),
(30, '1', 11, 15, '0ZCH0010FF2E', '70', '1', '10', '10', '10', '2022-04-14 12:50:44', '2022-04-14 12:50:44'),
(31, '1', 11, 17, 'CDSOT23-SM712', '35', '1', '220', '10', '10', '2022-04-14 12:56:43', '2022-04-14 12:56:43'),
(37, '1', 11, 19, 'CY14B101I-SFXI', '4700', '1', '20', '10', '10', '2022-04-14 13:03:23', '2022-04-14 13:03:23'),
(38, '1', 11, 18, 'HCPL-817-000E', '47', '1', '40', '10', '10', '2022-04-14 13:04:34', '2022-04-14 13:04:34'),
(39, '1', 11, 20, 'DS1803Z-010', '2300', '1', '60', '10', '10', '2022-04-14 13:05:56', '2022-04-14 13:05:56'),
(40, '1', 11, 21, 'ZLDO1117G33TA', '70', '1', '50', '10', '10', '2022-04-14 13:07:07', '2022-04-14 13:07:07'),
(41, '1', 11, 21, 'AP2171SG-13', '100', '1', '20', '10', '10', '2022-04-14 13:07:07', '2022-04-14 13:07:07'),
(42, '1', 11, 22, 'EG2207', '65', '1', '40', '10', '10', '2022-04-14 13:08:35', '2022-04-14 13:08:35'),
(43, '1', 11, 23, 'MBR0530', '9', '1', '200', '10', '10', '2022-04-14 13:09:47', '2022-04-14 13:09:47'),
(44, '1', 11, 23, 'FDV301N', '7', '1', '250', '10', '10', '2022-04-14 13:09:47', '2022-04-14 13:09:47'),
(45, '1', 11, 24, 'NDT2955', '140', '1', '40', '10', '10', '2022-04-14 13:13:50', '2022-04-14 13:13:50'),
(46, '1', 11, 25, 'BCX70J', '30', '1', '10', '10', '10', '2022-04-14 13:19:51', '2022-04-14 13:19:51'),
(47, '0', 11, 26, 'FT232RL-REEL/895-FT232RL', '547', '1', '250', '10', '10', '2022-04-14 13:21:53', '2022-04-14 13:21:53'),
(48, '1', 11, 27, '471218329', '850', '1', '40', '10', '10', '2022-04-14 13:23:42', '2022-04-14 13:23:42'),
(49, '1', 11, 28, 'SN74LS14', '50', '1', '35', '10', '10', '2022-04-14 13:25:32', '2022-04-14 13:25:32'),
(50, '1', 11, 29, 'IRFZ44NPBF', '24', '1', '2500', '10', '10', '2022-04-14 13:26:58', '2022-04-14 13:26:58'),
(51, '1', 11, 30, 'FI-C3-A1-15000', '12', '1', '450', '10', '10', '2022-04-14 13:28:43', '2022-04-14 13:28:43'),
(52, '1', 11, 30, 'FI-S20S', '80', '1', '20', '10', '10', '2022-04-14 13:28:43', '2022-04-14 13:28:43'),
(53, '1', 11, 30, 'FI-S6S', '50', '1', '20', '10', '10', '2022-04-14 13:28:43', '2022-04-14 13:28:43'),
(54, '1', 11, 31, 'SM02B-ZESS-TB(LF)(SN)', '34', '1', '6000', '10', '10', '2022-04-14 13:31:56', '2022-04-14 13:31:56'),
(55, '1', 11, 31, 'SM05B-ZESS-TB(LF)(SN)', '49', '1', '1000', '10', '10', '2022-04-14 13:31:56', '2022-04-14 13:31:56'),
(56, '1', 11, 32, 'LT1019CS8-4.5', 'NA', '1', '45', '10', '10', '2022-04-14 13:32:55', '2022-04-14 13:32:55'),
(57, '1', 11, 32, 'LTC2612CMS8', '5600', '1', '45', '10', '10', '2022-04-14 13:32:55', '2022-04-14 13:32:55'),
(58, '1', 11, 32, 'LT1616ES6', '235', '1', '40', '10', '10', '2022-04-14 13:32:55', '2022-04-14 13:32:55'),
(59, '1', 11, 33, 'LT1113CS8#PBF', 'NA', '2', '1000', '10', '10', '2022-04-14 13:34:29', '2022-04-14 13:34:29'),
(60, '0', 11, 34, 'SMCJ5.0CA', '17', '1', '3000', '10', '10', '2022-04-14 13:35:32', '2022-04-14 13:35:32'),
(61, '1', 11, 35, 'SMCJ24A', '20', '1', '70', '10', '10', '2022-04-14 13:36:45', '2022-04-14 13:36:45'),
(62, '1', 11, 36, 'SMCJ200CA', '55', '1', '40', '10', '10', '2022-04-14 13:37:46', '2022-04-14 13:37:46'),
(63, '1', 11, 37, 'MX25L51245GMI-08G', '390', '1', '40', '10', '10', '2022-04-14 13:38:49', '2022-04-14 13:38:49'),
(436, '1', 11, 38, 'MAX232EESE+', '140', '1', '80', '10', '10', '2022-04-14 13:45:12', '2022-04-14 13:45:12'),
(437, '1', 11, 38, 'MAX3051ESA+T', '110', '1', '80', '10', '10', '2022-04-14 13:45:12', '2022-04-14 13:45:12'),
(438, '1', 11, 38, 'MAX3280', '220', '1', '40', '10', '10', '2022-04-14 13:45:12', '2022-04-14 13:45:12'),
(439, '1', 11, 38, 'MAX3294AUT+T', '570', '1', '20', '10', '10', '2022-04-14 13:45:12', '2022-04-14 13:45:12'),
(440, '1', 11, 38, 'MAX399EEE+', '1500', '1', '30', '10', '10', '2022-04-14 13:45:12', '2022-04-14 13:45:12'),
(441, '1', 11, 38, 'MAX232CSE+', '68', '1', '35', '10', '10', '2022-04-14 13:45:12', '2022-04-14 13:45:12'),
(442, '1', 11, 39, 'SP485EEN-L/TR', '45', '1', '40', '10', '10', '2022-04-14 13:46:43', '2022-04-14 13:46:43'),
(443, '1', 11, 40, 'TC1047AVNBTR', '150', '1', '20', '10', '10', '2022-04-14 13:47:45', '2022-04-14 13:47:45'),
(444, '1', 11, 41, 'BC857B-TP', '17', '1', '45', '10', '10', '2022-04-14 13:48:54', '2022-04-14 13:48:54'),
(445, '1', 11, 42, 'SK310B-LTP', '29', '1', '25', '10', '10', '2022-04-14 13:50:30', '2022-04-14 13:50:30'),
(446, '1', 11, 42, 'MMSZ5242B-TP', '18', '1', '45', '10', '10', '2022-04-14 13:50:30', '2022-04-14 13:50:30'),
(447, '1', 11, 42, 'SMCJ5.0A-TP', '50', '1', '30', '10', '10', '2022-04-14 13:50:30', '2022-04-14 13:50:30'),
(448, '1', 11, 42, 'SMCJ5.0CA-TP', '70', '1', '10', '10', '10', '2022-04-14 13:50:30', '2022-04-14 13:50:30'),
(449, '1', 11, 42, 'IRLML6346TRPbF', '60', '1', '20', '10', '10', '2022-04-14 13:50:30', '2022-04-14 13:50:30'),
(450, '1', 11, 42, 'MMBT2222A-TP', '10', '1', '215', '10', '10', '2022-04-14 13:50:30', '2022-04-14 13:50:30'),
(451, '1', 11, 42, 'SMCJ12CA-TP', '17', '1', '140', '10', '10', '2022-04-14 13:50:30', '2022-04-14 13:50:30'),
(452, '1', 11, 43, 'AT24C16C-SSHM-T', '77', '1', '100', '10', '10', '2022-04-14 13:52:00', '2022-04-14 13:52:00'),
(453, '1', 11, 43, 'MTCH101-I/OT', '270', '1', '1000', '10', '10', '2022-04-14 13:52:00', '2022-04-14 13:52:00'),
(454, '1', 11, 43, 'PIC18F4550-I/PT', '980', '1', '800', '10', '10', '2022-04-14 13:52:00', '2022-04-14 13:52:00'),
(455, '0', 11, 44, 'USB3300-EZK', '285', '1', '300', '10', '10', '2022-04-14 13:59:34', '2022-04-14 13:59:34'),
(456, '1', 11, 44, 'ATTINY2313-20SU', '500', '1', '20', '10', '10', '2022-04-14 13:59:34', '2022-04-14 13:59:34'),
(457, '1', 11, 44, 'AT90CAN128-16AUR', '3900', '1', '40', '10', '10', '2022-04-14 13:59:34', '2022-04-14 13:59:34'),
(458, '1', 11, 44, 'MCP1804T-5002I/OT', '550', '1', '40', '10', '10', '2022-04-14 13:59:34', '2022-04-14 13:59:34'),
(459, '1', 11, 45, '50034-8000', '0.9', '1', '5000', '10', '10', '2022-04-14 14:00:48', '2022-04-14 14:00:48'),
(460, '1', 11, 45, '511101060', '50', '1', '20', '10', '10', '2022-04-14 14:00:48', '2022-04-14 14:00:48'),
(461, '1', 11, 46, '503948051', '8', '1', '320', '10', '10', '2022-04-14 14:02:06', '2022-04-14 14:02:06'),
(462, '1', 11, 47, 'NKE0505DC', '690', '1', '20', '10', '10', '2022-04-14 14:03:15', '2022-04-14 14:03:15'),
(463, '1', 11, 48, 'LM2937ES-3.3', '187', '1', '50', '10', '10', '2022-04-14 14:04:26', '2022-04-14 14:04:26'),
(464, '1', 11, 48, 'LM337IMP', '870', '1', '55', '10', '10', '2022-04-14 14:04:26', '2022-04-14 14:04:26'),
(465, '1', 11, 48, 'LM317AEMP', '150', '1', '30', '10', '10', '2022-04-14 14:04:26', '2022-04-14 14:04:26'),
(466, '1', 11, 49, '74LVC4245APW,118', '70', '1', '40', '10', '10', '2022-04-14 14:06:17', '2022-04-14 14:06:17'),
(467, '1', 11, 49, 'BAT46WH,115', '16', '1', '150', '10', '10', '2022-04-14 14:06:17', '2022-04-14 14:06:17'),
(468, '1', 11, 49, 'HEF4066BT,653', '60', '1', '20', '10', '10', '2022-04-14 14:06:17', '2022-04-14 14:06:17'),
(469, '1', 11, 49, '74HC21D,652', '60', '1', '20', '10', '10', '2022-04-14 14:06:17', '2022-04-14 14:06:17'),
(470, '1', 11, 50, '74HC574D,653', '180', '1', '3', '10', '10', '2022-04-14 14:06:59', '2022-04-14 14:06:59'),
(471, '1', 11, 51, 'TJA1050T/CM,118', '200', '1', '40', '10', '10', '2022-04-14 14:07:57', '2022-04-14 14:07:57'),
(472, '1', 11, 52, 'G6C-2114P-US-DC24', '215', '1', '780', '10', '10', '2022-04-14 14:09:05', '2022-04-14 14:09:05'),
(473, '1', 11, 53, 'NCN5121MNTWG', '740', '1', '10', '10', '10', '2022-04-14 14:10:16', '2022-04-14 14:10:16'),
(474, '1', 11, 53, 'NCN5121MNTWG', '740', '1', '10', '10', '10', '2022-04-14 14:10:16', '2022-04-14 14:10:16'),
(475, '1', 11, 53, '2N7002ET7G', '51', '1', '3500', '10', '10', '2022-04-14 14:10:16', '2022-04-14 14:10:16'),
(476, '1', 11, 53, 'FL5150MX', '147', '1', '500', '10', '10', '2022-04-14 14:10:16', '2022-04-14 14:10:16'),
(477, '1', 11, 53, '1N5408RLG', '25', '1', '55', '10', '10', '2022-04-14 14:10:16', '2022-04-14 14:10:16'),
(478, '1', 11, 53, 'MMSD3070', '95', '1', '760', '10', '10', '2022-04-14 14:10:16', '2022-04-14 14:10:16'),
(479, '1', 11, 53, 'B130LB-13-F', '10', '1', '265', '10', '10', '2022-04-14 14:10:16', '2022-04-14 14:10:16'),
(480, '1', 11, 53, '1SMB5927BT3G', '27', '1', '80', '10', '10', '2022-04-14 14:10:17', '2022-04-14 14:10:17'),
(481, '1', 11, 53, 'LM317MBSTT3G', '320', '1', '20', '10', '10', '2022-04-14 14:10:17', '2022-04-14 14:10:17'),
(482, '1', 11, 53, 'NC7SZ125M5X', '190', '1', '30', '10', '10', '2022-04-14 14:10:17', '2022-04-14 14:10:17'),
(483, '1', 11, 53, 'NL17SZ126DFT2G', '150', '1', '20', '10', '10', '2022-04-14 14:10:17', '2022-04-14 14:10:17'),
(484, '1', 11, 54, 'USB-A1HSW6', '300', '1', '10', '10', '10', '2022-04-14 14:11:32', '2022-04-14 14:11:32'),
(485, '1', 11, 55, 'BCX70J,215', '17', '1', '40', '10', '10', '2022-04-14 14:12:30', '2022-04-14 14:12:30'),
(486, '1', 11, 55, 'BCX70J,215', '17', '1', '40', '10', '10', '2022-04-14 14:13:00', '2022-04-14 14:13:00'),
(487, '1', 11, 56, '1729144', '130', '1', '30', '10', '10', '2022-04-14 14:14:18', '2022-04-14 14:14:18'),
(488, '1', 11, 57, '1729128', '50', '1', '40', '10', '10', '2022-04-14 14:15:28', '2022-04-14 14:15:28'),
(489, '1', 11, 57, '1729186', '350', '1', '10', '10', '10', '2022-04-14 14:15:28', '2022-04-14 14:15:28'),
(490, '1', 11, 57, '1729144', '130', '1', '10', '10', '10', '2022-04-14 14:15:28', '2022-04-14 14:15:28'),
(491, '1', 11, 57, '1729160', '240', '1', '20', '10', '10', '2022-04-14 14:15:28', '2022-04-14 14:15:28'),
(492, '1', 11, 58, 'J0011D21BNL', '320', '1', '20', '10', '10', '2022-04-14 14:16:23', '2022-04-14 14:16:23'),
(493, '1', 11, 59, 'FM24CL64B-G', '250', '1', '30', '10', '10', '2022-04-14 14:17:17', '2022-04-14 14:17:17'),
(494, '1', 11, 60, 'ISL91107IRTAZ-T7A', '5000', '1', '50', '10', '10', '2022-04-14 14:18:17', '2022-04-14 14:18:17'),
(495, '1', 11, 60, 'PS9117A-F3-AX', '68', '1', '350', '10', '10', '2022-04-14 14:18:17', '2022-04-14 14:18:17'),
(496, '1', 11, 61, 'PS2565-1-V-A', '17', '1', '5000', '10', '10', '2022-04-14 14:19:08', '2022-04-14 14:19:08'),
(497, '1', 11, 61, 'PS2561-1-V-A', '17', '1', '5000', '10', '10', '2022-04-14 14:19:08', '2022-04-14 14:19:08'),
(498, '1', 11, 62, 'IPD1-05-D-K', '120', '1', '70', '10', '10', '2022-04-14 14:20:52', '2022-04-14 14:20:52'),
(499, '1', 11, 62, 'IPL1-105-01-L-D-K', '390', '1', '80', '10', '10', '2022-04-14 14:20:52', '2022-04-14 14:20:52'),
(500, '1', 11, 62, 'IPL1-102-01-L-S-RA-K', '350', '1', '20', '10', '10', '2022-04-14 14:20:52', '2022-04-14 14:20:52'),
(501, '1', 11, 62, 'IPD1-02-S-K', '130', '1', '20', '10', '10', '2022-04-14 14:20:52', '2022-04-14 14:20:52'),
(502, '1', 11, 62, 'CC79R-2024-01-L', '19', '1', '740', '10', '10', '2022-04-14 14:20:52', '2022-04-14 14:20:52'),
(503, '1', 11, 63, 'RCLAMP0504S.TCT', '55', '1', '20', '10', '10', '2022-04-14 14:22:09', '2022-04-14 14:22:09'),
(504, '1', 11, 64, 'PC817X2NSZ1B', '6.5', '1', '5000', '10', '10', '2022-04-14 14:23:43', '2022-04-14 14:23:43'),
(505, '1', 11, 64, 'PC355NT', '32', '1', '250', '10', '10', '2022-04-14 14:23:43', '2022-04-14 14:23:43'),
(506, '1', 11, 65, 'SI8662BD-B-ISR', '8700', '1', '30', '10', '10', '2022-04-14 14:25:30', '2022-04-14 14:25:30'),
(507, '1', 11, 65, 'SI8640BB-B-IS1', '9500', '1', '30', '10', '10', '2022-04-14 14:25:30', '2022-04-14 14:25:30'),
(508, '1', 11, 65, 'C8051F005', '1050', '1', '55', '10', '10', '2022-04-14 14:25:30', '2022-04-14 14:25:30'),
(509, '1', 11, 66, 'USBLC6-2S6', 'NA', '2', '25', '10', '10', '2022-04-14 14:27:04', '2022-04-14 14:27:04'),
(510, '1', 11, 67, 'STM32F103VET6', '4800', '1', '50', '10', '10', '2022-04-14 14:28:02', '2022-04-14 14:28:02'),
(511, '0', 11, 68, 'M24128-BWMN6P / M24128- BRMN6TP', '27', '1', '600', '10', '10', '2022-04-14 14:29:17', '2022-04-14 14:29:17'),
(512, '1', 11, 68, 'L7905CD2T-TR', '90', '1', '20', '10', '10', '2022-04-14 14:29:17', '2022-04-14 14:29:17'),
(513, '1', 11, 68, 'LM311DT', '50', '1', '20', '10', '10', '2022-04-14 14:29:17', '2022-04-14 14:29:17'),
(514, '1', 11, 68, 'L7805ABD2T-TR', '75', '1', '60', '10', '10', '2022-04-14 14:29:17', '2022-04-14 14:29:17'),
(515, '1', 11, 69, 'TS3480CX33 RFG', '39', '1', '3000', '10', '10', '2022-04-14 14:30:24', '2022-04-14 14:30:24'),
(516, '1', 11, 70, 'A71-H14X', '195', '1', '40', '10', '10', '2022-04-14 14:31:23', '2022-04-14 14:31:23'),
(517, '1', 11, 71, '(3-643814-2)', '7.8', '1', '500 pc', '10', '10', '2022-04-14 14:32:20', '2022-04-14 14:32:20'),
(518, '1', 11, 71, ' (3-643814-3)', '10', '1', '300 pc', '10', '10', '2022-04-14 14:32:20', '2022-04-14 14:32:20'),
(519, '1', 11, 71, '(1-160301-9)', '13', '1', '3100 pc', '10', '10', '2022-04-14 14:32:20', '2022-04-14 14:32:20'),
(520, '1', 11, 72, '1981568-1', '140', '1', '25', '10', '10', '2022-04-14 14:33:28', '2022-04-14 14:33:28'),
(521, '1', 11, 72, '535043-5', '470', '1', '160', '10', '10', '2022-04-14 14:33:28', '2022-04-14 14:33:28'),
(522, '1', 11, 73, '1-338168-2', '350', '1', '26', '10', '10', '2022-04-14 14:34:42', '2022-04-14 14:34:42'),
(523, '1', 11, 73, '1586037-8', '130', '1', '20', '10', '10', '2022-04-14 14:34:42', '2022-04-14 14:34:42'),
(524, '1', 11, 73, '2132415-3', '19', '1', '80', '10', '10', '2022-04-14 14:34:42', '2022-04-14 14:34:42'),
(525, '1', 11, 73, '2-1761608-6', '550', '1', '10', '10', '10', '2022-04-14 14:34:42', '2022-04-14 14:34:42'),
(526, '1', 11, 73, '2-1761608-3', '1200', '1', '20', '10', '10', '2022-04-14 14:34:42', '2022-04-14 14:34:42'),
(527, '1', 11, 73, '1658527-3', '450', '1', '20', '10', '10', '2022-04-14 14:34:42', '2022-04-14 14:34:42'),
(528, '1', 11, 73, '2-1658526-9', '570', '1', '10', '10', '10', '2022-04-14 14:34:42', '2022-04-14 14:34:42'),
(529, '1', 11, 73, '2-1761608-7', '600', '1', '20', '10', '10', '2022-04-14 14:34:42', '2022-04-14 14:34:42'),
(530, '1', 11, 73, '1-106505-2', '530', '1', '40', '10', '10', '2022-04-14 14:34:42', '2022-04-14 14:34:42'),
(531, '1', 11, 73, '1-282837-0', '550', '1', '20', '10', '10', '2022-04-14 14:34:42', '2022-04-14 14:34:42'),
(532, '1', 11, 73, '1-1586037-4', '100', '1', '10', '10', '10', '2022-04-14 14:34:42', '2022-04-14 14:34:42'),
(533, '1', 11, 73, '1-794954-4', '80', '1', '10', '10', '10', '2022-04-14 14:34:42', '2022-04-14 14:34:42'),
(534, '1', 11, 73, '2-1586037-0', '180', '1', '10', '10', '10', '2022-04-14 14:34:42', '2022-04-14 14:34:42'),
(535, '1', 11, 73, '1586315-1', '7.5', '1', '1150', '10', '10', '2022-04-14 14:34:42', '2022-04-14 14:34:42'),
(536, '1', 11, 73, '1534805-1', '965', '1', '20', '10', '10', '2022-04-14 14:34:42', '2022-04-14 14:34:42'),
(537, '1', 11, 74, 'TPS61016DGS', '120', '1', '55', '10', '10', '2022-04-14 14:35:41', '2022-04-14 14:35:41'),
(538, '1', 11, 74, 'SN74AUP1G80DBVR', '30', '1', '55', '10', '10', '2022-04-14 14:35:41', '2022-04-14 14:35:41'),
(539, '1', 11, 74, '74 LVC 1G 14 DBVR', '30', '1', '55', '10', '10', '2022-04-14 14:35:41', '2022-04-14 14:35:41'),
(540, '1', 11, 74, '74LVC2G17DBVR', '11', '1', '300', '10', '10', '2022-04-14 14:35:41', '2022-04-14 14:35:41'),
(541, '1', 11, 74, 'TLV2460CDBVR', '111', '1', '175', '10', '10', '2022-04-14 14:35:41', '2022-04-14 14:35:41'),
(542, '1', 11, 74, 'TLV2470CD', '307', '1', '125', '10', '10', '2022-04-14 14:35:41', '2022-04-14 14:35:41'),
(543, '1', 11, 74, 'SN74LVC574ADW', '115', '1', '55', '10', '10', '2022-04-14 14:35:41', '2022-04-14 14:35:41'),
(544, '1', 11, 74, 'SN74LS132', '80', '1', '30', '10', '10', '2022-04-14 14:35:41', '2022-04-14 14:35:41'),
(545, '1', 11, 74, 'SN74HC541(DW)', '120', '1', '25', '10', '10', '2022-04-14 14:35:41', '2022-04-14 14:35:41'),
(546, '1', 11, 74, 'OPA2277UA', '470', '1', '100', '10', '10', '2022-04-14 14:35:41', '2022-04-14 14:35:41'),
(547, '0', 11, 75, 'SN65HVD1780D', '507', '1', '250', '10', '10', '2022-04-14 14:37:01', '2022-04-14 14:37:01'),
(548, '1', 11, 75, 'OPA2188AID', '330', '1', '300', '10', '10', '2022-04-14 14:37:01', '2022-04-14 14:37:01'),
(549, '1', 11, 75, 'LM285LP-2-5', '24', '1', '300', '10', '10', '2022-04-14 14:37:01', '2022-04-14 14:37:01'),
(550, '1', 11, 75, 'MAX3232CDR', '400', '1', '10', '10', '10', '2022-04-14 14:37:01', '2022-04-14 14:37:01'),
(551, '1', 11, 75, 'SN74AC14PWR', '50', '1', '20', '10', '10', '2022-04-14 14:37:01', '2022-04-14 14:37:01'),
(552, '1', 11, 75, '74HC374D', '50', '1', '80', '10', '10', '2022-04-14 14:37:01', '2022-04-14 14:37:01'),
(553, '1', 11, 75, 'LM1085ISX-3.3/NOPB', '170', '1', '50', '10', '10', '2022-04-14 14:37:01', '2022-04-14 14:37:01'),
(554, '1', 11, 75, 'ULN2803ADWR', '110', '1', '70', '10', '10', '2022-04-14 14:37:01', '2022-04-14 14:37:01'),
(555, '1', 11, 75, 'TPD4E1U06DBVR', '200', '1', '20', '10', '10', '2022-04-14 14:37:01', '2022-04-14 14:37:01'),
(556, '1', 11, 75, 'TVS3300DRVR', '1500', '1', '60', '10', '10', '2022-04-14 14:37:01', '2022-04-14 14:37:01'),
(557, '1', 11, 75, 'TPD2E007DCKR', '500', '1', '30', '10', '10', '2022-04-14 14:37:01', '2022-04-14 14:37:01'),
(558, '1', 11, 75, 'TPS2052BD', '430', '1', '10', '10', '10', '2022-04-14 14:37:01', '2022-04-14 14:37:01'),
(559, '1', 11, 75, 'CD74HC4538M96', '150', '1', '6', '10', '10', '2022-04-14 14:37:01', '2022-04-14 14:37:01'),
(560, '1', 11, 75, 'ISO3088DWR/MAX14939', '390', '1', '30', '10', '10', '2022-04-14 14:37:01', '2022-04-14 14:37:01'),
(561, '1', 11, 75, 'ISO7242CDWR', '2600', '1', '10', '10', '10', '2022-04-14 14:37:01', '2022-04-14 14:37:01'),
(562, '1', 11, 75, 'TLV2254AID', '270', '1', '50', '10', '10', '2022-04-14 14:37:01', '2022-04-14 14:37:01'),
(563, '1', 11, 75, 'ISO7221CQDRQ1', '421', '1', '80', '10', '10', '2022-04-14 14:37:01', '2022-04-14 14:37:01'),
(564, '1', 11, 75, 'DP83640TVVX/NOPB', '2800', '1', '20', '10', '10', '2022-04-14 14:37:01', '2022-04-14 14:37:01'),
(565, '1', 11, 75, 'TMS5704357BZWTQQ1', '20000', '1', '20', '10', '10', '2022-04-14 14:37:01', '2022-04-14 14:37:01'),
(566, '1', 11, 75, 'TPS3808G01DBVR', '120', '1', '40', '10', '10', '2022-04-14 14:37:01', '2022-04-14 14:37:01'),
(567, '1', 11, 76, ' LM741CN/NOPB', '74', '1', '45', '10', '10', '2022-04-14 14:38:07', '2022-04-14 14:38:07'),
(568, '1', 11, 76, 'CD4051BM', '50', '1', '35', '10', '10', '2022-04-14 14:38:07', '2022-04-14 14:38:07'),
(569, '1', 11, 76, 'LMC555CM', '470', '1', '15', '10', '10', '2022-04-14 14:38:07', '2022-04-14 14:38:07'),
(570, '1', 11, 76, 'SN74AHCT138D', '65', '1', '16', '10', '10', '2022-04-14 14:38:07', '2022-04-14 14:38:07'),
(571, '1', 11, 76, 'CD4093BM', '50', '1', '16', '10', '10', '2022-04-14 14:38:07', '2022-04-14 14:38:07'),
(572, '1', 11, 76, 'SN74HCT14QPWRQ1', '65', '1', '41', '10', '10', '2022-04-14 14:38:07', '2022-04-14 14:38:07'),
(573, '1', 11, 76, 'CD74HC147M96', '47', '1', '24', '10', '10', '2022-04-14 14:38:07', '2022-04-14 14:38:07'),
(574, '1', 11, 77, 'TC78H620FNG,EL', '425', '1', '1000', '10', '10', '2022-04-14 14:39:25', '2022-04-14 14:39:25'),
(575, '1', 11, 78, 'TEN 5-0511', '2600', '1', '20', '10', '10', '2022-04-14 14:40:28', '2022-04-14 14:40:28'),
(576, '1', 11, 79, 'INS41772-1', '11', '1', '1000 pc', '10', '10', '2022-04-14 14:41:29', '2022-04-14 14:41:29'),
(577, '1', 11, 80, 'VO617A-7', '87', '1', '5000', '10', '10', '2022-04-14 14:42:39', '2022-04-14 14:42:39'),
(578, '1', 11, 81, 'ZM4742A-GS08', '25', '1', '80', '10', '10', '2022-04-14 14:43:37', '2022-04-14 14:43:37'),
(579, '1', 11, 82, 'IRF840STRLPBF', '130', '1', '160', '10', '10', '2022-04-14 14:44:47', '2022-04-14 14:44:47'),
(580, '1', 11, 83, '744230900', '190', '1', '10', '10', '10', '2022-04-14 14:46:00', '2022-04-14 14:46:00');

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
  `billing_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst_number` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `billing_address`, `shipping_address`, `gst_number`, `created_at`, `updated_at`) VALUES
(1, 'sonu', 'sonu@gmail.com', '2022-03-01 18:30:00', '$2y$10$TIbZDHodEAXUDFGQ05lviefutVO0LCAjNXk/H65qXym0TJN54JmRm', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'bobbyverma', 'sonuv055@gmail.com', NULL, '$2y$10$budtR9197hjp4TZXKosCVOZirJhMVCc0ULMEag4PgBWxA1iuNQD4e', NULL, 'Old ppost office gali', 'Sarafa bazaar jattari', '1212323', '2022-03-04 02:02:17', '2022-03-04 02:34:57'),
(10, 'bobbyverma', 'sov055@gmail.com', NULL, '$2y$10$f9qU2Yx3JQw7CLX5JuaOX.31d/k5BN2.mHVHeqvrPt1U1hjjlZK0m', NULL, 'jattari', 'sksk', 'ksdksk', '2022-03-04 02:02:54', '2022-03-04 02:02:54'),
(11, 'bobbyverma', 'sonu.verma@madstech.com', NULL, '$2y$10$ZmQesWuvj9Y7bqcHYh.8/O7PsfZcMb7ZqXBNcuwrXVpmCMimT1f.C', NULL, 'jattari', 'dsk', 'ddok', '2022-03-04 02:06:08', '2022-03-04 02:06:08'),
(12, 'bobbyverma', 'sonu.123@madstech.com', NULL, '$2y$10$X6RG3FBftrq64gWhJQl/9.sFxSeNe4anhyTbxSU1hlnqEGYwWoP6y', NULL, 'jattari', 'jattar', '1234', '2022-03-25 14:40:56', '2022-03-25 14:40:56'),
(13, 'abcd', 'chetankumar.nv@gmail.com', NULL, '$2y$10$3rRuPH7VcPn0DUIPj4Wc9.9tr6UgFOBc7QoDLFa59ahom2QqzT2yK', NULL, 'bangalore', 'bangalore', '12345', '2022-03-31 01:04:27', '2022-03-31 01:04:27'),
(14, 'chetan', 'behappy2chethu@gmail.com', NULL, '$2y$10$nkEs8M4byiMKJo06aI20o.6lHmUW.zpvbY4iPy/7KoPZ.QV4MmtZ6', NULL, 'bangalore', 'bangalore', 'bangalore', '2022-05-25 06:37:09', '2022-05-25 06:37:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_order_id_foreign` (`order_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=581;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
