-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 08:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `funtxjyc_whatsappening2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(5, 'admin@whatsappening.com', '$2y$10$V2i8JuqyX92HuzRLUsR1q.C9Z/45tNa2Vh20LbE2wPKvZs1OKnFXK', '2023-02-15 13:16:57', '2023-02-15 13:16:57');

-- --------------------------------------------------------

--
-- Table structure for table `blocked_users`
--

CREATE TABLE `blocked_users` (
  `id` int(11) NOT NULL,
  `sender_id` bigint(20) DEFAULT NULL,
  `receiver_id` bigint(20) DEFAULT NULL,
  `status` enum('blocked','unblocked') DEFAULT 'blocked',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `conversion_id` bigint(20) DEFAULT NULL,
  `sender_id` bigint(20) DEFAULT NULL,
  `receiver_id` bigint(20) DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_seen` tinyint(4) NOT NULL DEFAULT 0,
  `show_chat` tinyint(1) DEFAULT 1,
  `from_to` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `message_status` enum('read','un-read') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'un-read',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `conversion_id`, `sender_id`, `receiver_id`, `message`, `is_seen`, `show_chat`, `from_to`, `status`, `message_status`, `created_at`, `updated_at`) VALUES
(362, 343, 172, 171, 'gttt', 1, 0, '172171', 1, 'read', '2023-09-28 13:53:43', '2023-09-28 16:21:18'),
(363, 343, 172, 171, '2023-09-29\n10:30 PM\nRiyadh International Convention & Exhibition Center, King Abdullah Road, Riyadh Saudi Arabia\nInvitation Sent', 1, 0, '172171', 1, 'read', '2023-09-28 15:50:46', '2023-09-28 16:21:19'),
(364, 357, 172, 185, '2023-09-30\n11:00 am\nRiyadh Front Exhibition & Convention center, Riyadh Saudi Arabia\nInvitation Sent', 0, 0, '172185', 1, 'un-read', '2023-09-28 15:57:25', '2023-09-28 16:01:10'),
(365, 343, 172, 171, '2023-09-29\n10:00 am\nYyterin Hiekkarannat, Pori, Finland\nInvitation Sent', 1, 0, '172171', 1, 'read', '2023-09-28 16:18:35', '2023-09-28 16:21:19'),
(366, 343, 171, 172, '2023-09-30\n10:00 am\nYyteri, Pori, Finland\nInvitation Sent', 1, 0, '171172', 1, 'read', '2023-09-28 16:21:37', '2023-10-02 15:40:58'),
(367, 342, 172, 170, 'hiiii', 1, 0, '172170', 1, 'read', '2023-09-28 20:23:30', '2023-09-28 20:24:33'),
(368, 342, 170, 172, '2023-09-29\n10:00 am\nyyyynnn, Yunboseon-gil, Jongno-gu, Seoul, South Korea\nInvitation Sent', 1, 0, '170172', 1, 'read', '2023-09-28 20:24:52', '2023-10-02 15:40:58'),
(369, 342, 172, 170, '2023-10-03\n11:00 AM\nYyteri, Pori, Finland\nInvitation Sent', 0, 0, '172170', 1, 'un-read', '2023-10-02 13:51:11', '2023-10-02 14:07:18'),
(370, 342, 172, 170, '2023-10-04\n10:00 AM\nYyyyy, Chaussée d\'Anvers, Brussels, Belgium\nInvitation Sent', 0, 0, '172170', 1, 'un-read', '2023-10-02 14:04:56', '2023-10-02 14:07:18'),
(371, 342, 172, 170, '2023-10-05\n10:00 AM\nBeach Road, YY Kafei Dian, Singapore\nInvitation Sent', 0, 0, '172170', 1, 'un-read', '2023-10-02 14:17:45', '2023-10-02 14:25:02'),
(372, 342, 172, 170, '2023-10-05\n10:00 AM\nYyteri, Pori, Finland\nInvitation Sent', 0, 0, '172170', 1, 'un-read', '2023-10-02 14:30:04', '2023-10-02 15:41:00'),
(373, 354, 169, 185, '..', 0, 1, '169185', 1, 'un-read', '2023-10-02 20:25:08', '2023-10-02 20:25:08'),
(374, 354, 169, 185, '2023-10-04\n10:00 AM\nYYY Dessert, Nanjing Street, Hualien City, Hualien County, Taiwan\nInvitation Sent', 0, 1, '169185', 1, 'un-read', '2023-10-02 20:25:41', '2023-10-02 20:25:41'),
(375, 354, 169, 185, '2023-10-05\n10:00 AM\nIisalmi, Finland\nInvitation Sent', 0, 1, '169185', 1, 'un-read', '2023-10-02 20:28:08', '2023-10-02 20:28:08'),
(376, 365, 184, 181, 'hi', 0, 0, '184181', 1, 'un-read', '2023-10-05 18:13:11', '2023-10-05 18:14:27'),
(377, 365, 184, 181, 'hi', 0, 0, '184181', 1, 'un-read', '2023-10-05 18:13:20', '2023-10-05 18:14:27'),
(378, 365, 184, 181, 'hi', 0, 0, '184181', 1, 'un-read', '2023-10-05 18:15:12', '2023-10-05 18:15:37'),
(379, 178, 169, 9, 'Hi null,\nSending you a message request\nLet\'s Chat!!', 0, 0, '1699', 1, 'un-read', '2023-10-12 09:50:26', '2023-10-12 09:50:32'),
(380, 326, 169, 157, 'Hi null,\nSending you a message request\nLet\'s Chat!!', 0, 0, '169157', 1, 'un-read', '2023-10-12 09:51:02', '2023-10-12 09:51:08'),
(381, 178, 169, 9, 'Hi Freya lvy,\nSending you a message request\nLet\'s Chat!!', 0, 0, '1699', 1, 'un-read', '2023-10-12 09:56:12', '2023-10-12 09:56:17'),
(382, 329, 169, 160, 'Hi yjyj66j jyjtj,\nSending you a message request\nLet\'s Chat!!', 0, 0, '169160', 1, 'un-read', '2023-10-12 20:07:04', '2023-10-12 20:07:10'),
(383, 338, 169, 169, 'Hi ptest one,\nSending you a message request\nLet\'s Chat!!', 1, 0, '169169', 1, 'un-read', '2023-10-12 20:07:17', '2023-10-12 20:07:22'),
(384, 380, 210, 170, 'Hi ptest two,\nSending you a message request\nLet\'s chat !!', 0, 0, '210170', 1, 'un-read', '2023-10-18 17:46:33', '2023-10-18 17:47:07'),
(385, 380, 210, 170, '2023-10-20\n10:00 AM\nYyyyy, Chaussée d\'Anvers, Brussels, Belgium\nInvitation Sent', 0, 0, '210170', 1, 'un-read', '2023-10-18 17:46:52', '2023-10-18 17:47:07');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `friend_likes`
--

CREATE TABLE `friend_likes` (
  `id` int(11) NOT NULL,
  `sender_id` text NOT NULL,
  `receiver_id` text NOT NULL,
  `status` text NOT NULL DEFAULT 'liked',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend_likes`
--

INSERT INTO `friend_likes` (`id`, `sender_id`, `receiver_id`, `status`, `created_at`, `updated_at`) VALUES
(73, '185', '172', 'liked', '2023-09-27 16:28:21', '2023-09-27 16:28:21'),
(74, '172', '171', 'liked', '2023-09-28 09:29:37', '2023-09-28 09:29:37'),
(75, '171', '172', 'liked', '2023-09-28 09:37:47', '2023-09-28 09:37:47'),
(76, '172', '170', 'liked', '2023-09-28 16:23:20', '2023-09-28 16:23:20'),
(77, '184', '168', 'liked', '2023-10-05 14:12:46', '2023-10-05 14:12:46'),
(78, '211', '184', 'liked', '2023-10-19 17:45:46', '2023-10-19 17:45:46'),
(79, '211', '187', 'liked', '2023-10-19 17:46:01', '2023-10-19 17:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `friend_requests`
--

CREATE TABLE `friend_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) DEFAULT NULL,
  `receiver_id` bigint(20) DEFAULT NULL,
  `status` enum('pending','accepted','declined') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `friend_requests`
--

INSERT INTO `friend_requests` (`id`, `sender_id`, `receiver_id`, `status`, `created_at`, `updated_at`) VALUES
(107, 171, 170, 'accepted', '2023-09-27 15:57:06', '2023-09-28 20:24:06'),
(108, 185, 172, 'accepted', '2023-09-27 20:28:23', '2023-09-28 10:30:39'),
(109, 172, 171, 'accepted', '2023-09-28 13:29:38', '2023-09-28 13:30:18'),
(110, 171, 172, 'accepted', '2023-09-28 13:37:48', '2023-09-28 13:38:23'),
(111, 172, 170, 'accepted', '2023-09-28 20:23:21', '2023-09-28 20:23:59'),
(112, 184, 12, 'pending', '2023-10-05 18:12:28', '2023-10-05 18:12:28'),
(113, 211, 184, 'pending', '2023-10-19 21:45:39', '2023-10-19 21:45:39'),
(114, 211, 187, 'pending', '2023-10-19 21:45:53', '2023-10-19 21:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` int(11) NOT NULL,
  `sender_id` bigint(100) DEFAULT NULL,
  `receiver_id` bigint(100) DEFAULT NULL,
  `sender_name` varchar(100) DEFAULT NULL,
  `location_name` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `status` enum('accepted','declined','pending') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `sender_id`, `receiver_id`, `sender_name`, `location_name`, `date`, `time`, `status`, `created_at`, `updated_at`) VALUES
(9, 170, 172, 'ptest', 'yyyynnn, Yunboseon-gil, Jongno-gu, Seoul, South Korea', '2023-09-29', '10:00 am', 'declined', '2023-09-28 20:24:52', '2023-09-28 20:25:22'),
(10, 172, 170, 'ptest', 'Yyteri, Pori, Finland', '2023-10-03', '11:00 AM', 'pending', '2023-10-02 13:51:10', '2023-10-02 13:51:10'),
(11, 172, 170, 'ptest', 'Yyyyy, Chaussée d\'Anvers, Brussels, Belgium', '2023-10-04', '10:00 AM', 'pending', '2023-10-02 14:04:55', '2023-10-02 14:04:55'),
(12, 172, 170, 'ptest', 'Beach Road, YY Kafei Dian, Singapore', '2023-10-05', '10:00 AM', 'pending', '2023-10-02 14:17:43', '2023-10-02 14:17:43'),
(13, 172, 170, 'ptest', 'Yyteri, Pori, Finland', '2023-10-05', '10:00 AM', 'pending', '2023-10-02 14:30:04', '2023-10-02 14:30:04'),
(14, 169, 185, 'ptest', 'YYY Dessert, Nanjing Street, Hualien City, Hualien County, Taiwan', '2023-10-04', '10:00 AM', 'pending', '2023-10-02 20:25:41', '2023-10-02 20:25:41'),
(15, 169, 185, 'ptest', 'Iisalmi, Finland', '2023-10-05', '10:00 AM', 'pending', '2023-10-02 20:28:07', '2023-10-02 20:28:07'),
(16, 210, 170, 'teco', 'Yyyyy, Chaussée d\'Anvers, Brussels, Belgium', '2023-10-20', '10:00 AM', 'pending', '2023-10-18 17:46:52', '2023-10-18 17:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `message_requests`
--

CREATE TABLE `message_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) DEFAULT NULL,
  `receiver_id` bigint(20) DEFAULT NULL,
  `status` enum('pending','accepted','declined') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_requests`
--

INSERT INTO `message_requests` (`id`, `sender_id`, `receiver_id`, `status`, `created_at`, `updated_at`) VALUES
(324, 169, 170, 'pending', '2023-09-27 14:24:01', '2023-09-27 14:24:01'),
(325, 169, 171, 'accepted', '2023-09-27 15:01:32', '2023-09-27 15:02:04'),
(326, 170, 171, 'pending', '2023-09-27 15:29:25', '2023-09-27 15:29:25'),
(327, 171, 170, 'pending', '2023-09-27 15:57:09', '2023-09-27 15:57:09'),
(328, 185, 172, 'accepted', '2023-09-27 20:28:26', '2023-09-27 20:29:21'),
(329, 172, 171, 'accepted', '2023-09-28 13:29:40', '2023-09-28 13:54:14'),
(330, 171, 172, 'accepted', '2023-09-28 13:37:50', '2023-09-28 13:38:36'),
(331, 172, 170, 'accepted', '2023-09-28 20:23:24', '2023-09-28 20:24:14'),
(332, 169, 185, 'pending', '2023-10-02 20:25:04', '2023-10-02 20:25:04'),
(333, 184, 181, 'pending', '2023-10-05 18:13:04', '2023-10-05 18:13:04'),
(334, 169, 9, 'pending', '2023-10-12 09:50:26', '2023-10-12 09:50:26'),
(335, 169, 157, 'pending', '2023-10-12 09:51:00', '2023-10-12 09:51:00'),
(336, 169, 160, 'pending', '2023-10-12 20:07:03', '2023-10-12 20:07:03'),
(337, 169, 169, 'pending', '2023-10-12 20:07:16', '2023-10-12 20:07:16'),
(338, 210, 170, 'pending', '2023-10-18 17:46:33', '2023-10-18 17:46:33');

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
(5, '2023_01_30_110122_create_form_table', 2),
(6, '2023_01_31_205151_create_chat_messages_table', 3),
(7, '2023_02_01_192724_create_conversations_table', 4),
(8, '2023_02_01_192906_create_messages_table', 4),
(9, '2023_02_01_999999_add_active_status_to_users', 5),
(10, '2023_02_01_999999_add_avatar_to_users', 5),
(11, '2023_02_01_999999_add_dark_mode_to_users', 5),
(12, '2023_02_01_999999_add_messenger_color_to_users', 5),
(13, '2023_02_01_999999_create_favorites_table', 5),
(14, '2023_02_01_999999_create_messages_table', 5),
(15, '2023_02_02_004614_create_support_chats_table', 6),
(16, '2023_02_03_234406_create_support_chats_table', 7),
(17, '2023_02_05_100825_create_messages_table', 8),
(18, '2023_02_06_054904_create_user_admins_table', 9),
(19, '2023_02_07_044926_create_admin_replies_table', 10),
(20, '2023_02_07_055409_create_admin_replies_table', 11),
(21, '2023_02_07_060209_create_admin_reply_messages_table', 12),
(22, '2023_02_07_073218_create_user_messages_table', 13),
(23, '2023_02_13_103934_create_admin_logins_table', 14),
(24, '2023_02_14_043442_add_role_to_table', 15),
(25, '2023_02_15_051136_remove_role_from_admin_logins', 16),
(26, '2023_02_16_102732_add_email_to_forms', 16),
(27, '2023_02_16_104524_add_bio_to_forms', 17),
(28, '2023_02_16_111456_create_inserts_table', 18),
(29, '2023_02_17_063732_rename_table', 18),
(30, '2023_02_17_104054_add_verified_to_forms_table', 19),
(31, '2023_02_17_114645_remove_verified_from_forms', 20),
(32, '2023_02_17_115051_add_verification_token_to_forms', 21);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `sender_id` bigint(20) DEFAULT NULL,
  `receiver_id` bigint(20) DEFAULT NULL,
  `friend_request_id` bigint(20) DEFAULT NULL,
  `message_request_id` bigint(20) DEFAULT NULL,
  `meeting_id` bigint(20) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `status` enum('un-read','read') DEFAULT 'un-read',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `sender_id`, `receiver_id`, `friend_request_id`, `message_request_id`, `meeting_id`, `type`, `status`, `created_at`, `updated_at`) VALUES
(219, 172, 170, NULL, NULL, NULL, 'friend_like', 'read', '2023-09-28 20:23:20', '2023-09-28 20:24:27'),
(220, 172, 170, 111, NULL, NULL, 'friend_request', 'read', '2023-09-28 20:23:21', '2023-09-28 20:24:27'),
(221, 172, 170, NULL, 331, NULL, 'message_request', 'read', '2023-09-28 20:23:24', '2023-09-28 20:24:27'),
(222, 170, 172, NULL, NULL, 9, 'meeting', 'read', '2023-09-28 20:24:52', '2023-09-28 20:25:22'),
(223, 172, 170, NULL, NULL, 10, 'meeting', 'un-read', '2023-10-02 13:51:10', '2023-10-02 13:51:10'),
(224, 172, 170, NULL, NULL, 11, 'meeting', 'un-read', '2023-10-02 14:04:55', '2023-10-02 14:04:55'),
(225, 172, 170, NULL, NULL, 12, 'meeting', 'un-read', '2023-10-02 14:17:43', '2023-10-02 14:17:43'),
(226, 172, 170, NULL, NULL, 13, 'meeting', 'un-read', '2023-10-02 14:30:04', '2023-10-02 14:30:04'),
(227, 169, 185, NULL, 332, NULL, 'message_request', 'un-read', '2023-10-02 20:25:04', '2023-10-02 20:25:04'),
(228, 169, 185, NULL, NULL, 14, 'meeting', 'un-read', '2023-10-02 20:25:41', '2023-10-02 20:25:41'),
(229, 169, 185, NULL, NULL, 15, 'meeting', 'un-read', '2023-10-02 20:28:07', '2023-10-02 20:28:07'),
(230, 184, 12, 112, NULL, NULL, 'friend_request', 'un-read', '2023-10-05 18:12:28', '2023-10-05 18:12:28'),
(231, 184, 168, NULL, NULL, NULL, 'friend_like', 'un-read', '2023-10-05 18:12:46', '2023-10-05 18:12:46'),
(232, 184, 181, NULL, 333, NULL, 'message_request', 'un-read', '2023-10-05 18:13:04', '2023-10-05 18:13:04'),
(233, 169, 9, NULL, 334, NULL, 'message_request', 'un-read', '2023-10-12 09:50:26', '2023-10-12 09:50:26'),
(234, 169, 157, NULL, 335, NULL, 'message_request', 'un-read', '2023-10-12 09:51:00', '2023-10-12 09:51:00'),
(235, 169, 160, NULL, 336, NULL, 'message_request', 'un-read', '2023-10-12 20:07:03', '2023-10-12 20:07:03'),
(236, 169, 169, NULL, 337, NULL, 'message_request', 'un-read', '2023-10-12 20:07:16', '2023-10-12 20:07:16'),
(237, 210, 170, NULL, 338, NULL, 'message_request', 'un-read', '2023-10-18 17:46:33', '2023-10-18 17:46:33'),
(238, 210, 170, NULL, NULL, 16, 'meeting', 'un-read', '2023-10-18 17:46:52', '2023-10-18 17:46:52'),
(239, 211, 184, 113, NULL, NULL, 'friend_request', 'un-read', '2023-10-19 21:45:39', '2023-10-19 21:45:39'),
(240, 211, 184, NULL, NULL, NULL, 'friend_like', 'un-read', '2023-10-19 21:45:46', '2023-10-19 21:45:46'),
(241, 211, 187, 114, NULL, NULL, 'friend_request', 'un-read', '2023-10-19 21:45:53', '2023-10-19 21:45:53'),
(242, 211, 187, NULL, NULL, NULL, 'friend_like', 'un-read', '2023-10-19 21:46:01', '2023-10-19 21:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('hungryfood323@gmail.com', '$2y$10$UseVkoubu2wg1M2Z0837IeTnD/2UQXEabs/FrUqfY0xkyJwqXnYs6', '2023-09-08 09:01:42');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'MyApp', '7eaf5a0c7d399783e91cce38ae58683efa7c92b156bb562a3fc7aed6da3125fe', '[\"*\"]', NULL, NULL, '2023-02-20 06:30:28', '2023-02-20 06:30:28'),
(2, 'App\\Models\\User', 1, 'MyApp', 'ca522a70c3f4d147cdba823299005e52df4690f439b5ddf98e60e177b4992220', '[\"*\"]', NULL, NULL, '2023-02-20 06:33:24', '2023-02-20 06:33:24'),
(3, 'App\\Models\\User', 18, 'MyApp', '66759fabf1eaa56c9c679872a5113c440ba1171158fc57e030445a85bffb8395', '[\"*\"]', NULL, NULL, '2023-02-21 06:26:49', '2023-02-21 06:26:49'),
(4, 'App\\Models\\User', 19, 'MyApp', '123ffbeb291d714450dfe6b315aacde72c0221a2a24e3b9e5f776fe7d551a1d8', '[\"*\"]', NULL, NULL, '2023-02-21 06:27:27', '2023-02-21 06:27:27'),
(5, 'App\\Models\\User', 20, 'MyApp', 'e8207534659a79ad502b19578b49405076c658292db492d6092b6a5652f0190a', '[\"*\"]', NULL, NULL, '2023-02-21 06:31:46', '2023-02-21 06:31:46'),
(6, 'App\\Models\\User', 20, 'authToken', '14dbc970a14f9c533e7d371d7b203084bcd919a16b1e9fb6a4590755856c8a21', '[\"*\"]', NULL, NULL, '2023-02-21 06:31:46', '2023-02-21 06:31:46'),
(7, 'App\\Models\\User', 21, 'MyApp', 'e8700e1506df228dafbcaac8e5308a776f943da17d367559009bebc67f81540b', '[\"*\"]', NULL, NULL, '2023-02-21 06:33:31', '2023-02-21 06:33:31'),
(8, 'App\\Models\\User', 22, 'MyApp', 'e610c237d2388f661828521f76a11d5dfef645429fee29f42e9a78353d564e21', '[\"*\"]', NULL, NULL, '2023-02-21 06:34:09', '2023-02-21 06:34:09'),
(9, 'App\\Models\\User', 23, 'MyApp', 'c6cadf0697198e1e40748e2e89fd04c1bd0a8fb3530cb0a22476301afe0ff7c3', '[\"*\"]', NULL, NULL, '2023-02-21 06:42:48', '2023-02-21 06:42:48'),
(10, 'App\\Models\\User', 23, 'MyApp', '829f2eaa25804875c4cb5fbb0ea970a0b58f51651c66ac3ba2d55b3a7590862c', '[\"*\"]', NULL, NULL, '2023-02-21 06:42:48', '2023-02-21 06:42:48'),
(11, 'App\\Models\\User', 24, 'MyApp', 'f767dc1f9d733f5245841b719a323e8d88fc7764075c993eb1246293643b8002', '[\"*\"]', NULL, NULL, '2023-02-21 06:43:13', '2023-02-21 06:43:13'),
(12, 'App\\Models\\User', 24, 'MyApp', '50403910cac3893ed149f16389549f235b0060245a4f5dff8cbb2c4ed2827512', '[\"*\"]', NULL, NULL, '2023-02-21 06:43:13', '2023-02-21 06:43:13'),
(13, 'App\\Models\\User', 25, 'MyApp', '9d21899b7a0b2c304dfb6aa30eca5a54c558bd4a1418efb10fa61d3ed363a912', '[\"*\"]', NULL, NULL, '2023-02-21 06:43:50', '2023-02-21 06:43:50'),
(14, 'App\\Models\\User', 26, 'MyApp', '7658504af3207db632375a42e2dbeab2257b0bf5eb391f900e7d89ae565d5750', '[\"*\"]', NULL, NULL, '2023-02-21 06:44:17', '2023-02-21 06:44:17'),
(15, 'App\\Models\\User', 28, 'MyApp', 'fb83ac78170d1b8198a80035983a667daa65af7cf64d14fe2a7cd475a1f1d135', '[\"*\"]', NULL, NULL, '2023-02-22 15:19:09', '2023-02-22 15:19:09'),
(16, 'App\\Models\\User', 29, 'MyApp', 'c36f81d5e51f024ab86ee74736a48494b333df079ff489832d19cc8287408bd9', '[\"*\"]', NULL, NULL, '2023-02-22 15:20:13', '2023-02-22 15:20:13'),
(17, 'App\\Models\\User', 30, 'MyApp', '98095faa6fb08fc25d454881a7b2bbb27827b63bed089bbdc41153668cb54519', '[\"*\"]', NULL, NULL, '2023-02-22 15:30:08', '2023-02-22 15:30:08'),
(18, 'App\\Models\\User', 31, 'MyApp', '69523d31ec111bcc6d1d5197cbf4365024c7a109b26583f054fb00901a93ef64', '[\"*\"]', NULL, NULL, '2023-02-22 15:52:33', '2023-02-22 15:52:33'),
(19, 'App\\Models\\User', 32, 'MyApp', 'e5314aa69613b55c5408c987701327e1fbda96ef8747f2ca2b2b9686854b5a00', '[\"*\"]', NULL, NULL, '2023-02-22 15:53:30', '2023-02-22 15:53:30'),
(20, 'App\\Models\\User', 33, 'MyApp', '0a560ef9b84005ce34fefd3d5390976179c8af5df2e8a5ce5aa6a6da15845654', '[\"*\"]', NULL, NULL, '2023-02-22 15:57:45', '2023-02-22 15:57:45'),
(21, 'App\\Models\\User', 34, 'MyApp', '7061ef399a42636dc580909889c84866e1d6768cf1fab3ddf031bd0ac46e8d08', '[\"*\"]', NULL, NULL, '2023-02-22 16:05:02', '2023-02-22 16:05:02'),
(22, 'App\\Models\\User', 35, 'MyApp', '24f5f6009e4682ff22a8de48adc43e93e83bfc41171e46c692d1f86165d8340f', '[\"*\"]', NULL, NULL, '2023-02-22 16:17:28', '2023-02-22 16:17:28'),
(23, 'App\\Models\\User', 36, 'MyApp', '36e2ba34eba22d4bb2c28ae49d6e11eccd9c4370c158c9cd934f3ba58d10767e', '[\"*\"]', NULL, NULL, '2023-02-22 16:20:56', '2023-02-22 16:20:56'),
(24, 'App\\Models\\User', 37, 'MyApp', '628b567a2f33a321a1b7dea816548787a000670766863c5a3ba072d87924d08a', '[\"*\"]', NULL, NULL, '2023-02-22 16:28:56', '2023-02-22 16:28:56'),
(25, 'App\\Models\\User', 38, 'MyApp', 'fde31e3ef9ac6445b71129c756ecfcb370701cf5b6b7e0c48f625a8322fa973b', '[\"*\"]', NULL, NULL, '2023-02-22 16:29:18', '2023-02-22 16:29:18'),
(26, 'App\\Models\\User', 39, 'MyApp', 'f838ff584651520b11d0a3bd7d3b650b31aceca38415afa239e7fca462d2b602', '[\"*\"]', NULL, NULL, '2023-02-22 16:30:08', '2023-02-22 16:30:08'),
(27, 'App\\Models\\User', 40, 'MyApp', '1bc2188659f92cff2f9f56377cdb5e27283a4c4fddb89500e7e08d102d352b23', '[\"*\"]', NULL, NULL, '2023-02-22 16:30:19', '2023-02-22 16:30:19'),
(28, 'App\\Models\\User', 41, 'MyApp', '916b46b37e22f11bedab82a84c7eb4764c7c20a1d103fe85ab0b08d0e9134d8a', '[\"*\"]', NULL, NULL, '2023-02-22 16:30:56', '2023-02-22 16:30:56'),
(29, 'App\\Models\\User', 42, 'MyApp', '6569463e729c81b10967f10fa9f23dfed802f22934fe9169d335c7c6c2dce126', '[\"*\"]', NULL, NULL, '2023-02-22 16:33:06', '2023-02-22 16:33:06'),
(30, 'App\\Models\\User', 43, 'MyApp', 'fe05f3ce21fe51f3e911370b154e224ec780da11ae8cef692a316d34b114a41f', '[\"*\"]', NULL, NULL, '2023-02-22 16:37:16', '2023-02-22 16:37:16'),
(31, 'App\\Models\\User', 44, 'MyApp', '4f56df77a9b9c7c73d3b609d2d066eb1f7b956fb9143de5ef2d84b3afec28581', '[\"*\"]', NULL, NULL, '2023-02-22 16:40:58', '2023-02-22 16:40:58'),
(32, 'App\\Models\\User', 45, 'MyApp', '9c86710d7d68deffd832d3f389e7b1c761a49770805b14b195ec5d1078a23fa1', '[\"*\"]', NULL, NULL, '2023-02-22 16:51:33', '2023-02-22 16:51:33'),
(33, 'App\\Models\\User', 46, 'MyApp', 'dcc72a59d3a6bab7d090db419dc2a5744a2a4046e44de8767a6d1fc0b0eac949', '[\"*\"]', NULL, NULL, '2023-02-22 16:52:47', '2023-02-22 16:52:47'),
(34, 'App\\Models\\User', 47, 'MyApp', '9628e9ddcbcabd1198aaaefbd83be93473542e1e668a44290e1911b6ecd1a0de', '[\"*\"]', NULL, NULL, '2023-02-22 16:57:21', '2023-02-22 16:57:21'),
(35, 'App\\Models\\User', 48, 'MyApp', '06c3725dd948f0320f058fefb197dbfd552f2052a2915dd547f9226b46c3211c', '[\"*\"]', NULL, NULL, '2023-02-22 17:13:38', '2023-02-22 17:13:38'),
(36, 'App\\Models\\User', 49, 'MyApp', '5fd43dee23ce1944299c349bdaa9134fe4813ad4010bfc3204f3629710fad64e', '[\"*\"]', NULL, NULL, '2023-02-22 17:17:55', '2023-02-22 17:17:55'),
(37, 'App\\Models\\User', 50, 'MyApp', 'f805bb967a3ca047d6c6f8fbddcb6112a1db38d2527bc6f8937f16e09bc5c277', '[\"*\"]', NULL, NULL, '2023-02-23 10:04:45', '2023-02-23 10:04:45'),
(38, 'App\\Models\\User', 51, 'MyApp', 'd5fc021d2d8e4a468d6260bd50b75d259a7cddfa546d3a9497fa7eb187201d9e', '[\"*\"]', NULL, NULL, '2023-02-23 10:11:42', '2023-02-23 10:11:42'),
(39, 'App\\Models\\User', 52, 'MyApp', '1d08417e8fb9bd36e0e173829eecd82415c244ce8a95727f0edabb97383e2ee5', '[\"*\"]', NULL, NULL, '2023-02-23 14:46:58', '2023-02-23 14:46:58'),
(40, 'App\\Models\\User', 53, 'MyApp', 'ea3ba8a5fb922c87fcbce815416661dea806aa4f856132ac14a63c9c4fa82769', '[\"*\"]', NULL, NULL, '2023-02-23 14:47:38', '2023-02-23 14:47:38'),
(41, 'App\\Models\\User', 54, 'MyApp', 'a4cb8df2f2027019544414766e44e115cc25b0175220036e67698330cf1c95e4', '[\"*\"]', NULL, NULL, '2023-02-23 15:18:30', '2023-02-23 15:18:30'),
(42, 'App\\Models\\User', 55, 'MyApp', '96d8e02dc42806379814654416c329ec7e7c42a2c89ca28fd9ba5f2c46a7e71e', '[\"*\"]', NULL, NULL, '2023-02-23 15:36:21', '2023-02-23 15:36:21'),
(43, 'App\\Models\\User', 56, 'MyApp', '3cbfdac982764a92fd4442a31fa7d1a77c09c810072329975a7b048f6628f041', '[\"*\"]', NULL, NULL, '2023-02-23 16:03:55', '2023-02-23 16:03:55'),
(44, 'App\\Models\\User', 57, 'MyApp', '3bd7d888ea8ac39858d9cd49eaec15497f56de0891eb64599828e846836da70d', '[\"*\"]', NULL, NULL, '2023-02-23 16:08:52', '2023-02-23 16:08:52'),
(45, 'App\\Models\\User', 58, 'MyApp', '1e0a517b4a06f5fef2a9fa8ecaba0a3d73a9a9bd93f388b57bb45c66c9ae8e32', '[\"*\"]', NULL, NULL, '2023-02-23 16:15:05', '2023-02-23 16:15:05'),
(46, 'App\\Models\\User', 59, 'MyApp', '06825387b0f7cca0dcad4191a4a673834582662e09f99519ec6ffa59cbb202d2', '[\"*\"]', NULL, NULL, '2023-02-23 16:26:23', '2023-02-23 16:26:23'),
(47, 'App\\Models\\User', 60, 'MyApp', 'c4fab181f67dc540b7d0617e5ee13d8e41284d5ade0da5c4ec130d421ab79301', '[\"*\"]', NULL, NULL, '2023-02-23 16:29:35', '2023-02-23 16:29:35'),
(48, 'App\\Models\\User', 61, 'MyApp', 'f1bb38de0d9f4b3371579efeea6dfabeedb224982dc948be60c0bdafd6d764dc', '[\"*\"]', NULL, NULL, '2023-02-23 16:34:12', '2023-02-23 16:34:12'),
(49, 'App\\Models\\User', 62, 'MyApp', '41478e3ec53c9b9261f13c45d2d23dc7bba8490b32425e8b94092d813fbbcb9e', '[\"*\"]', NULL, NULL, '2023-02-23 16:43:19', '2023-02-23 16:43:19'),
(50, 'App\\Models\\User', 63, 'MyApp', '5c62c7b18f5f1a4fcd1b0c3f7ede385ddbd8315c6c34d27ad4b450f3d22f6bba', '[\"*\"]', NULL, NULL, '2023-02-23 16:49:34', '2023-02-23 16:49:34'),
(51, 'App\\Models\\User', 64, 'MyApp', 'd31d813b7ce4faf68d77471887723f409f8109eebc3f09019e6246c86609c1fa', '[\"*\"]', NULL, NULL, '2023-02-23 16:52:50', '2023-02-23 16:52:50'),
(52, 'App\\Models\\User', 65, 'MyApp', 'efbc0adb423ae301f3200c1d9d9eb40e16d9e4ad7ce0cf81e3d7bbbb7a5c5d87', '[\"*\"]', NULL, NULL, '2023-02-23 16:59:14', '2023-02-23 16:59:14'),
(53, 'App\\Models\\User', 66, 'MyApp', '11f520fa26b02f4c6a0f5190a85ce1050eaab97df797cdf02315b82df882c801', '[\"*\"]', NULL, NULL, '2023-02-23 17:01:29', '2023-02-23 17:01:29'),
(54, 'App\\Models\\User', 67, 'MyApp', 'ed75c3be25edc9e2c6cee1fce1c678678bffb9c33274fcd35fd6ffbf8108cf2d', '[\"*\"]', NULL, NULL, '2023-02-23 17:06:00', '2023-02-23 17:06:00'),
(55, 'App\\Models\\User', 68, 'MyApp', '7acdfd8ec3d4f3ab0ba896d0b09e175e4167e7b168128c37170e9cc5daf2c2f1', '[\"*\"]', NULL, NULL, '2023-02-23 17:09:26', '2023-02-23 17:09:26'),
(56, 'App\\Models\\User', 69, 'MyApp', '8893d47b8d58edb7e65b383c79ce72147a51aa101bbebf89d23d57778ea6bdbb', '[\"*\"]', NULL, NULL, '2023-02-23 17:19:29', '2023-02-23 17:19:29'),
(57, 'App\\Models\\User', 70, 'MyApp', 'a0d2baf17a710a5a52790585856ee63b8391923e4fb249a179c360f193b5ef18', '[\"*\"]', NULL, NULL, '2023-02-23 17:24:38', '2023-02-23 17:24:38'),
(58, 'App\\Models\\User', 71, 'MyApp', '35dcf951c1eea5cef899d9427fb5bdd04ecc448bc54dcc17793c98ea8f4dcee1', '[\"*\"]', NULL, NULL, '2023-02-23 17:26:59', '2023-02-23 17:26:59'),
(59, 'App\\Models\\User', 72, 'MyApp', '6ddfc067d48a5be77fdb50ec41899392ea2482cb97122ae660dd75ee0122ad5a', '[\"*\"]', NULL, NULL, '2023-02-23 17:32:54', '2023-02-23 17:32:54'),
(60, 'App\\Models\\User', 73, 'MyApp', '68849498a399ddcfe02d3039bf8770594c708fb11b9ad90856773d7ba4cc8204', '[\"*\"]', NULL, NULL, '2023-02-23 17:44:23', '2023-02-23 17:44:23'),
(61, 'App\\Models\\User', 74, 'MyApp', '6baadc60f35f475a3c42a021ab83e9a99c2c4d60ec924956a9151fcecb40a73a', '[\"*\"]', NULL, NULL, '2023-02-23 18:11:21', '2023-02-23 18:11:21'),
(62, 'App\\Models\\User', 75, 'MyApp', 'b007db895b41d7e298faa76953d547b1b329932deb4c2f855e03eedfe8810fd2', '[\"*\"]', NULL, NULL, '2023-02-23 18:13:34', '2023-02-23 18:13:34'),
(63, 'App\\Models\\User', 76, 'MyApp', 'd03507ed56a035f774bfc7aa8d0877f5c2715db5c390aec7e42791999d087391', '[\"*\"]', NULL, NULL, '2023-02-23 19:17:07', '2023-02-23 19:17:07'),
(64, 'App\\Models\\User', 77, 'MyApp', '5d0f7100e89a584e4d142f6fa444031be2b1c7ce27457f6f2e735b03221904eb', '[\"*\"]', NULL, NULL, '2023-02-23 19:17:39', '2023-02-23 19:17:39'),
(65, 'App\\Models\\User', 78, 'MyApp', '688787ef34fcda81c6304aef96ec288d7a57fb5698dd4de3edec99fc7823f612', '[\"*\"]', NULL, NULL, '2023-02-23 21:06:56', '2023-02-23 21:06:56'),
(66, 'App\\Models\\User', 79, 'MyApp', '782b0d4c36ca79afc97fe927523386d23e8439b6eaf8aa2a3e31d7fb9c501cf1', '[\"*\"]', NULL, NULL, '2023-02-24 10:13:48', '2023-02-24 10:13:48'),
(67, 'App\\Models\\User', 80, 'MyApp', 'df7592e94118629bbef7ff1b85041650cbbf5fef19f2227d32ab114846d0e779', '[\"*\"]', NULL, NULL, '2023-02-24 11:29:09', '2023-02-24 11:29:09'),
(68, 'App\\Models\\User', 81, 'MyApp', 'fdee160d79925c289e004118dfec667e3447a64ba37a42eff18d1525dbd83ac2', '[\"*\"]', NULL, NULL, '2023-02-24 11:32:29', '2023-02-24 11:32:29'),
(69, 'App\\Models\\User', 82, 'MyApp', '800fb1414b621fe047b136f6846f29f05cb87bf7dcd5f720367f4d0ace3cbb9a', '[\"*\"]', NULL, NULL, '2023-02-24 11:45:37', '2023-02-24 11:45:37'),
(70, 'App\\Models\\User', 83, 'MyApp', '55e5f9efe8b0eb8260b6634a877f505214a9a34822a54f8e8dab9634aeb0f33c', '[\"*\"]', NULL, NULL, '2023-02-24 11:56:33', '2023-02-24 11:56:33'),
(71, 'App\\Models\\User', 84, 'MyApp', '662f03b70d3f58638e88cb812debbf1f45fc2b1f5b66453f05fd7577655e8529', '[\"*\"]', NULL, NULL, '2023-02-24 12:13:44', '2023-02-24 12:13:44'),
(72, 'App\\Models\\User', 85, 'MyApp', 'd8f732d1683a9228227134cd2f62efee397256b214b136acfc60c9a3ca225537', '[\"*\"]', NULL, NULL, '2023-02-24 12:19:19', '2023-02-24 12:19:19'),
(73, 'App\\Models\\User', 86, 'MyApp', '0b0ee5c618913cf4ed9ab9a3ec4b19672b3a5ebe7fe0718c8608a6a761d2725a', '[\"*\"]', NULL, NULL, '2023-02-24 12:21:58', '2023-02-24 12:21:58'),
(74, 'App\\Models\\User', 87, 'MyApp', '86f4e4f4d731cffd0ba8aa1ce5cc7a7a1ccaf5210efb23b4c8f7e4954fa9039a', '[\"*\"]', NULL, NULL, '2023-02-24 12:28:38', '2023-02-24 12:28:38'),
(75, 'App\\Models\\User', 88, 'MyApp', '5b9747e98d2b16c1f85e351a8328bb6278207afae853b54d83d2afce139fcc08', '[\"*\"]', NULL, NULL, '2023-02-24 12:31:58', '2023-02-24 12:31:58'),
(76, 'App\\Models\\User', 89, 'MyApp', '1b8f3cbff02074e0faa600d985101c1e6ad1271d1bdd3622647f4a54d38c34c3', '[\"*\"]', NULL, NULL, '2023-02-24 12:37:02', '2023-02-24 12:37:02'),
(77, 'App\\Models\\User', 90, 'MyApp', '688d82e7b7cc5d50d34507f20fef6aceb7354dd517a7d9e66527ecf882540ba6', '[\"*\"]', NULL, NULL, '2023-02-24 12:38:56', '2023-02-24 12:38:56'),
(78, 'App\\Models\\User', 91, 'MyApp', 'e4e48663ffd195be18a891c08e31bb58f4407030e5e0507795ba3420dd83b2a8', '[\"*\"]', NULL, NULL, '2023-02-24 12:40:34', '2023-02-24 12:40:34'),
(79, 'App\\Models\\User', 92, 'MyApp', '2aaa2fccf9906fbade3d7bb572f938b60af493d23d7f3a9e7b2b49e499a3dd0b', '[\"*\"]', NULL, NULL, '2023-02-24 15:09:53', '2023-02-24 15:09:53'),
(80, 'App\\Models\\User', 93, 'MyApp', '40734ba5aa429f5929f54441c88d2dd87624c323ad9711e9b7ad66db2c425353', '[\"*\"]', NULL, NULL, '2023-02-24 15:45:36', '2023-02-24 15:45:36'),
(81, 'App\\Models\\User', 94, 'MyApp', '10e99b0e286272ba024e2c26119244a7030ea040bf993fb4b310223dd1c249c3', '[\"*\"]', NULL, NULL, '2023-02-24 15:50:45', '2023-02-24 15:50:45'),
(82, 'App\\Models\\User', 95, 'MyApp', '98b0884f183f7db6c348922d80bbc499bfe539308ab499bc73726b5990e4149b', '[\"*\"]', NULL, NULL, '2023-02-24 16:01:31', '2023-02-24 16:01:31'),
(83, 'App\\Models\\User', 96, 'MyApp', 'c5ad5abb596a985ef0159d90c85a8059ea4b9a88c421c6b23ea3cd60fea9aa82', '[\"*\"]', NULL, NULL, '2023-02-24 16:07:07', '2023-02-24 16:07:07'),
(84, 'App\\Models\\User', 97, 'MyApp', 'd700d980da0a9886604424199ac9519b83e88190ad5d9ad2b0d76ef93f60fdc2', '[\"*\"]', NULL, NULL, '2023-02-28 14:47:22', '2023-02-28 14:47:22'),
(85, 'App\\Models\\User', 98, 'MyApp', '4fbf4c2ce4b5637149875356d9dfa1401d6e34f50f1d28bf445deb48af60e1d7', '[\"*\"]', NULL, NULL, '2023-02-28 15:10:51', '2023-02-28 15:10:51'),
(86, 'App\\Models\\User', 99, 'MyApp', '65866e70bd79c738bac751c7dcc76548e0a96f80a21769725d8ac5e2e029df09', '[\"*\"]', NULL, NULL, '2023-02-28 15:55:40', '2023-02-28 15:55:40'),
(87, 'App\\Models\\User', 100, 'MyApp', '6e28ff8d20fa5a790245f78fe21bc24f9bfe52c570e7b2221ae191bc8f3d09b3', '[\"*\"]', NULL, NULL, '2023-02-28 16:06:55', '2023-02-28 16:06:55'),
(88, 'App\\Models\\User', 100, 'MyApp', 'c5788329068aaad2b8378368131776eee951264e926869d88854678174b8bdd0', '[\"*\"]', NULL, NULL, '2023-03-03 14:59:36', '2023-03-03 14:59:36'),
(89, 'App\\Models\\User', 101, 'MyApp', '691600a8297b76cc261b9af71e6a8caa5c27704b2e34a7abedb30a03484fc21d', '[\"*\"]', NULL, NULL, '2023-03-03 15:53:16', '2023-03-03 15:53:16'),
(90, 'App\\Models\\User', 101, 'MyApp', 'd960decef6a30af42a228c4aabf9316147279d836012c2fdf24faf272a458e05', '[\"*\"]', NULL, NULL, '2023-03-03 17:18:23', '2023-03-03 17:18:23'),
(91, 'App\\Models\\User', 101, 'MyApp', 'af386769b8e1e7c0bbd8d29d6d997ed3799ee66c45503ca1efb916735f0788f9', '[\"*\"]', NULL, NULL, '2023-03-03 18:30:16', '2023-03-03 18:30:16'),
(92, 'App\\Models\\User', 101, 'MyApp', '5cab6bca59e42ffa4b6cf5811f7c6dfffba49ab9d3eba826857de9b06afe9017', '[\"*\"]', NULL, NULL, '2023-03-03 18:37:39', '2023-03-03 18:37:39'),
(93, 'App\\Models\\User', 102, 'MyApp', '4069f4e140935ae69aa441e4a6f8913d4222e5560002f0841118e52e5356b90b', '[\"*\"]', NULL, NULL, '2023-03-03 18:42:37', '2023-03-03 18:42:37'),
(94, 'App\\Models\\User', 101, 'MyApp', 'bcd9bf4b1d4c84f2718df3bbd44bea0cfd33c63299182c5da9d47e7cbbf5ea06', '[\"*\"]', NULL, NULL, '2023-03-10 18:23:45', '2023-03-10 18:23:45'),
(95, 'App\\Models\\User', 101, 'MyApp', 'a5628125dfd651836a8db6376c4535e7d787f6f0ff462fd0e7ee8d9210be7b0e', '[\"*\"]', NULL, NULL, '2023-03-10 18:25:11', '2023-03-10 18:25:11'),
(96, 'App\\Models\\User', 101, 'MyApp', 'a88871869226ac0dda980e359079918447bf9cba4447ac05884ba818e5aebe65', '[\"*\"]', NULL, NULL, '2023-03-10 18:25:41', '2023-03-10 18:25:41'),
(97, 'App\\Models\\User', 101, 'MyApp', '6bfb7d2e388df43ee8451d9100bf0fdc841af19bde2d7e0a96d61b305b8b76cf', '[\"*\"]', NULL, NULL, '2023-03-14 12:12:56', '2023-03-14 12:12:56'),
(98, 'App\\Models\\User', 101, 'MyApp', '3b6ea07b4a4702fb1d323ad1354031982fd1f33799dc55cd0bd3459bd6526191', '[\"*\"]', NULL, NULL, '2023-03-14 12:22:24', '2023-03-14 12:22:24'),
(99, 'App\\Models\\User', 101, 'MyApp', 'd634c010beb438069f4844462f2b5af8aef0b3a082861709bdbe7e590293a6c7', '[\"*\"]', NULL, NULL, '2023-03-15 22:30:05', '2023-03-15 22:30:05'),
(100, 'App\\Models\\User', 101, 'MyApp', '1367b959306578699fb84fb9a053d4f74f6b8bf1a902f3c8a867009fae5dc4a9', '[\"*\"]', NULL, NULL, '2023-03-16 16:06:07', '2023-03-16 16:06:07'),
(101, 'App\\Models\\User', 101, 'MyApp', 'bbd6e1a683fc3260d59778c868ae0f0721144769f0e8a251f3e290e6fe96f17f', '[\"*\"]', NULL, NULL, '2023-03-16 23:01:13', '2023-03-16 23:01:13'),
(102, 'App\\Models\\User', 101, 'MyApp', '8b43171d252929cacd0da9c7d1fd83eb3db5f74c80dda39f323db402f2c9f9aa', '[\"*\"]', NULL, NULL, '2023-03-20 14:30:46', '2023-03-20 14:30:46'),
(103, 'App\\Models\\User', 101, 'MyApp', '06859b7530f31d118401dbd3b5441207577cd4b37cccb392d74622aea7ff4c68', '[\"*\"]', NULL, NULL, '2023-03-20 17:57:38', '2023-03-20 17:57:38'),
(104, 'App\\Models\\User', 101, 'MyApp', '49359337d1d55949abdf0e15ca99c87b035ba6b796803e363613a3fa939451f8', '[\"*\"]', NULL, NULL, '2023-03-21 06:41:32', '2023-03-21 06:41:32'),
(105, 'App\\Models\\User', 108, 'MyApp', '5a0efbbbfd2dd7eb57585e9d5801aa13be4eb6fa811577dfea7293afbfad384b', '[\"*\"]', NULL, NULL, '2023-03-22 15:20:01', '2023-03-22 15:20:01'),
(106, 'App\\Models\\User', 101, 'MyApp', '30442d4d91a1de16d97fa77006f0feea85c2604d10e69f6be8c1cf7e58713947', '[\"*\"]', NULL, NULL, '2023-03-23 11:32:47', '2023-03-23 11:32:47'),
(107, 'App\\Models\\User', 101, 'MyApp', '88edae66ff045bc9a1ccafbaff11c60a7b353e04abf187893a4ab3e13dd11374', '[\"*\"]', NULL, NULL, '2023-03-23 11:36:04', '2023-03-23 11:36:04'),
(108, 'App\\Models\\User', 109, 'MyApp', 'd28ecfcb84eb15197c6a2e29ef1ac0029400f85058ef1929011b96700ce800ab', '[\"*\"]', NULL, NULL, '2023-03-23 11:59:56', '2023-03-23 11:59:56'),
(109, 'App\\Models\\User', 110, 'MyApp', 'f5df8957abb15356e323061fb18c23adf20be7126a7ab7da7a3bd2be5e48bcbe', '[\"*\"]', NULL, NULL, '2023-03-23 12:04:06', '2023-03-23 12:04:06'),
(110, 'App\\Models\\User', 110, 'MyApp', '7f61bd2dd3e60e86cda8cdd9b252f3ee3199d00b9326de70cd109b52e064597f', '[\"*\"]', NULL, NULL, '2023-03-24 13:35:26', '2023-03-24 13:35:26'),
(111, 'App\\Models\\User', 111, 'MyApp', '3003d2a73ff84b491623530f333120453506912405af8009134c89c1cb59a3cc', '[\"*\"]', NULL, NULL, '2023-03-24 22:52:16', '2023-03-24 22:52:16'),
(112, 'App\\Models\\User', 112, 'MyApp', '01ab862b818b75637cb533251c2e6a33dac8b5ec05ad453419cb409740f47490', '[\"*\"]', NULL, NULL, '2023-03-24 22:53:42', '2023-03-24 22:53:42'),
(113, 'App\\Models\\User', 113, 'MyApp', 'c554a8727bf5bb4c444460f5370fbe6a618d33678a956edbbd9274c14130c571', '[\"*\"]', NULL, NULL, '2023-03-24 22:57:31', '2023-03-24 22:57:31'),
(114, 'App\\Models\\User', 114, 'MyApp', '5ab7085f04beee63df48e0feca0f0723abdb0699d4b218318bdbb56a87fc7f9a', '[\"*\"]', NULL, NULL, '2023-03-24 22:58:32', '2023-03-24 22:58:32'),
(115, 'App\\Models\\User', 115, 'MyApp', '94aa401692681d7337975fdd676a7e2455742e88a6df99fd993ec6228fc1e75d', '[\"*\"]', NULL, NULL, '2023-03-24 22:59:23', '2023-03-24 22:59:23'),
(116, 'App\\Models\\User', 116, 'MyApp', '4c86be5fad70097f4f825ebeee595b0e6fe4db412f86bc693a47c31cfad0184e', '[\"*\"]', NULL, NULL, '2023-03-24 23:04:55', '2023-03-24 23:04:55'),
(117, 'App\\Models\\User', 117, 'MyApp', '6e1de4516c1c66b87c77653c321ec2f12d7c41d0dad93d0ea4bd9d58e4afe41c', '[\"*\"]', NULL, NULL, '2023-03-24 23:05:36', '2023-03-24 23:05:36'),
(118, 'App\\Models\\User', 118, 'MyApp', 'f17515c06c93cea1e1e324450a7065bc881eed6c7255280e79ff91d515d13990', '[\"*\"]', NULL, NULL, '2023-03-24 23:06:28', '2023-03-24 23:06:28'),
(119, 'App\\Models\\User', 119, 'MyApp', '87ecdd17888c0dfcd0b4e95c925feea1d5cf208dc27930002feada2609e552b3', '[\"*\"]', NULL, NULL, '2023-03-24 23:07:18', '2023-03-24 23:07:18'),
(120, 'App\\Models\\User', 120, 'MyApp', 'b86a3d5a9a28bfde13524e83dbe7a755a8f9b1f07c23b6453a65c6da6c749db3', '[\"*\"]', NULL, NULL, '2023-03-24 23:08:39', '2023-03-24 23:08:39'),
(121, 'App\\Models\\User', 121, 'MyApp', '9b6ef2e54f44b50a48f065924064f01d617c28846771d6b09b90fffde428af19', '[\"*\"]', NULL, NULL, '2023-03-24 23:09:26', '2023-03-24 23:09:26'),
(122, 'App\\Models\\User', 122, 'MyApp', '255f5e4aa35f8439befb8bdb2b772c17849f43141c6d46f0a5c19ba000734cc3', '[\"*\"]', NULL, NULL, '2023-03-24 23:10:10', '2023-03-24 23:10:10'),
(123, 'App\\Models\\User', 123, 'MyApp', '13647a44f30f93a75ba5c8bf600f06d5f6ca1b9bbdaac5e8b248edf09154033b', '[\"*\"]', NULL, NULL, '2023-03-24 23:11:04', '2023-03-24 23:11:04'),
(124, 'App\\Models\\User', 124, 'MyApp', '8f29e0f80e36b536a1a6a5c4d26817f64bd42dbaf6d031b062854877263b1f1b', '[\"*\"]', NULL, NULL, '2023-03-24 23:12:04', '2023-03-24 23:12:04'),
(125, 'App\\Models\\User', 125, 'MyApp', '08dac03add45cf22bf8eae59355e4921cd80fe0239b9930232e5f8e5b230f680', '[\"*\"]', NULL, NULL, '2023-03-24 23:12:54', '2023-03-24 23:12:54'),
(126, 'App\\Models\\User', 126, 'MyApp', 'cf25be56e3ed572826bfdb476d3a5acd78fba51680a45e19ad3727b986386451', '[\"*\"]', NULL, NULL, '2023-03-24 23:34:46', '2023-03-24 23:34:46'),
(127, 'App\\Models\\User', 127, 'MyApp', '74f4226a71f4c85d0fbb9b16c3927e957e8913bc99eaf8a6ab5026eeaa613857', '[\"*\"]', NULL, NULL, '2023-03-24 23:35:35', '2023-03-24 23:35:35'),
(128, 'App\\Models\\User', 128, 'MyApp', '01c950efde852419c27f69a39c3576ac462e0da3e361030be6eb5caba7b12600', '[\"*\"]', NULL, NULL, '2023-03-24 23:36:36', '2023-03-24 23:36:36'),
(129, 'App\\Models\\User', 129, 'MyApp', 'f2b3d160834fb77bdba0a87459cb387094daac780faefdf1ec089e603ea06ab9', '[\"*\"]', NULL, NULL, '2023-03-24 23:37:21', '2023-03-24 23:37:21'),
(130, 'App\\Models\\User', 130, 'MyApp', '12f6082377d0abfa64eec56dc9d64675b5c218e3dd0c4f159e8877993ad33b9b', '[\"*\"]', NULL, NULL, '2023-03-24 23:39:50', '2023-03-24 23:39:50'),
(131, 'App\\Models\\User', 131, 'MyApp', '89c08e9129059110125982a9bb20e6875ffe0503a14d2927f290bb6990c1ffb0', '[\"*\"]', NULL, NULL, '2023-03-24 23:40:50', '2023-03-24 23:40:50'),
(132, 'App\\Models\\User', 132, 'MyApp', 'd355b22212265f63acb4734270703d7234a47889f7505809078d755270a09688', '[\"*\"]', NULL, NULL, '2023-03-24 23:41:34', '2023-03-24 23:41:34'),
(133, 'App\\Models\\User', 133, 'MyApp', '8a6b3968fee497c58c9267e59334b2cf2c672c1d4e2ce8fc24ac63d2d608781c', '[\"*\"]', NULL, NULL, '2023-03-24 23:43:05', '2023-03-24 23:43:05'),
(134, 'App\\Models\\User', 134, 'MyApp', '475548cd0d8675e04fa2bb93795af6a5bb328658270f57553dc873b78cf288a1', '[\"*\"]', NULL, NULL, '2023-03-24 23:46:38', '2023-03-24 23:46:38'),
(135, 'App\\Models\\User', 135, 'MyApp', 'c1e7b350f249fee8952c53e05583c5cbec894dfe5a7f53b5a32e07d37e4a28b3', '[\"*\"]', NULL, NULL, '2023-03-25 09:14:17', '2023-03-25 09:14:17'),
(136, 'App\\Models\\User', 110, 'MyApp', 'd124972299a16b6a28b20724803db238d44bd8023a9a64dc1ae9e6fa434beb02', '[\"*\"]', NULL, NULL, '2023-03-25 09:25:23', '2023-03-25 09:25:23'),
(137, 'App\\Models\\User', 110, 'MyApp', 'b404c58ecdb226a21c21ea0aefdbf3dea9c229f4c6463d1c7b6b038f34bc67a1', '[\"*\"]', NULL, NULL, '2023-03-25 13:51:07', '2023-03-25 13:51:07'),
(138, 'App\\Models\\User', 110, 'MyApp', '5c7c1451b4ece5518f435b4e6be5f22f6895d7ea8229aab410879d316ccd7b6f', '[\"*\"]', NULL, NULL, '2023-03-26 11:28:12', '2023-03-26 11:28:12'),
(139, 'App\\Models\\User', 136, 'MyApp', 'a2bd2f2ff112948cb02ef5b07c6fca10605b950381df6171b71196946a270256', '[\"*\"]', NULL, NULL, '2023-03-26 15:59:09', '2023-03-26 15:59:09'),
(140, 'App\\Models\\User', 110, 'MyApp', 'bd981f787c1d4d2f4a0ee84fc13274f652b31475b9628ea85166980c16d5c8f2', '[\"*\"]', NULL, NULL, '2023-03-26 16:02:17', '2023-03-26 16:02:17'),
(141, 'App\\Models\\User', 137, 'MyApp', 'c0d967f2cb090413a04ad1fadc8dc2368c17165f1b26b0b78e11b22e7d7c273a', '[\"*\"]', NULL, NULL, '2023-03-26 16:11:52', '2023-03-26 16:11:52'),
(142, 'App\\Models\\User', 110, 'MyApp', '44149475636e0193d53fd81a9781340ad4d67a74f629a17f74e70443fad56b79', '[\"*\"]', NULL, NULL, '2023-03-26 16:18:32', '2023-03-26 16:18:32'),
(143, 'App\\Models\\User', 110, 'MyApp', 'ae32306bfd560855b97d72743160cd720b539aab61b99009c9af491377da75d1', '[\"*\"]', NULL, NULL, '2023-03-26 16:31:08', '2023-03-26 16:31:08'),
(144, 'App\\Models\\User', 138, 'MyApp', '42c579294eb872ad523064251c00670ebdcd549e6fad31cfced4cba66ee8493a', '[\"*\"]', NULL, NULL, '2023-03-26 16:56:20', '2023-03-26 16:56:20'),
(145, 'App\\Models\\User', 110, 'MyApp', 'cd86b7070458a7f6e6b7be0f144187f3d84235cc786e2db6339d7483331e129a', '[\"*\"]', NULL, NULL, '2023-03-26 20:39:18', '2023-03-26 20:39:18'),
(146, 'App\\Models\\User', 110, 'MyApp', 'c20cee57decc822cd166e554fce509a4bbef00ce41acfd9024fd93ac2ba28553', '[\"*\"]', NULL, NULL, '2023-03-27 09:25:30', '2023-03-27 09:25:30'),
(147, 'App\\Models\\User', 139, 'MyApp', '7dc316e7f66159bdfc809f823b949f5745aba238c1588c7cad7600abd1eb1793', '[\"*\"]', NULL, NULL, '2023-03-27 21:26:45', '2023-03-27 21:26:45'),
(148, 'App\\Models\\User', 139, 'MyApp', '5cc199ce9cb5fee7c1bd3bb91be9c61a5ad59ec47078db5eb67594c9e1c3fdc2', '[\"*\"]', NULL, NULL, '2023-03-27 21:49:28', '2023-03-27 21:49:28'),
(149, 'App\\Models\\User', 140, 'MyApp', '83b165225015cae31c2c6eace07d52bed306b7f8b027e438e45bbb2837c250da', '[\"*\"]', NULL, NULL, '2023-03-28 10:05:01', '2023-03-28 10:05:01'),
(150, 'App\\Models\\User', 141, 'MyApp', 'a12f3fa88a3ed287067ecf0f8aebebb850659f4245a254ffb76b71ea41eea959', '[\"*\"]', NULL, NULL, '2023-03-28 10:18:41', '2023-03-28 10:18:41'),
(151, 'App\\Models\\User', 142, 'MyApp', 'f4b33b0dea0d214f9821f103db558a3b775c710e8c69211c8416e52162172b3f', '[\"*\"]', NULL, NULL, '2023-03-28 10:26:23', '2023-03-28 10:26:23'),
(152, 'App\\Models\\User', 143, 'MyApp', 'dadcbb7953b1a11a82d9763d514d175889a5dbbd89a052549824a29054a98b09', '[\"*\"]', NULL, NULL, '2023-03-28 11:07:47', '2023-03-28 11:07:47'),
(153, 'App\\Models\\User', 144, 'MyApp', '9f224d4bdd93c39dbde868b3041aff5ee3219a76dd81069f368f4b6fdfe5455b', '[\"*\"]', NULL, NULL, '2023-03-28 21:40:27', '2023-03-28 21:40:27'),
(154, 'App\\Models\\User', 144, 'MyApp', '1ac0ee837b314ed966ae5e491117045dd0f8ff05d98d48f6b88ae45141d381c7', '[\"*\"]', NULL, NULL, '2023-03-28 23:07:33', '2023-03-28 23:07:33'),
(155, 'App\\Models\\User', 139, 'MyApp', 'ea4d84b19fb0e0a00793af27bd1d8782fb536287f9b72e803466414fb2ded06c', '[\"*\"]', NULL, NULL, '2023-03-28 23:13:48', '2023-03-28 23:13:48'),
(156, 'App\\Models\\User', 141, 'MyApp', 'a08c19e365be4d1604e0f310d2d197bf2366e14d1286a3e59e4220ac03dcc638', '[\"*\"]', NULL, NULL, '2023-03-28 23:26:01', '2023-03-28 23:26:01'),
(157, 'App\\Models\\User', 132, 'MyApp', '9e9286f91b27454451111d7bd5a6d5a4ed32e43f9b0796f4c70d041b1b84858e', '[\"*\"]', NULL, NULL, '2023-03-28 23:31:18', '2023-03-28 23:31:18'),
(158, 'App\\Models\\User', 141, 'MyApp', '410d9734886b056ec05a85bec579b146ef56de735afe832a63a8834090b3fcd4', '[\"*\"]', NULL, NULL, '2023-03-29 03:30:15', '2023-03-29 03:30:15'),
(159, 'App\\Models\\User', 141, 'MyApp', '647532a8a59721dc4a0265bf4d9e246955d9a24b5d653c7c8cb625e91371a365', '[\"*\"]', NULL, NULL, '2023-03-29 09:06:27', '2023-03-29 09:06:27'),
(160, 'App\\Models\\User', 144, 'MyApp', '9b99b20f8ff0725b45a2b38ccbca7bb3002df1fe3b2470690d3a8cffac2b4180', '[\"*\"]', NULL, NULL, '2023-03-29 09:07:01', '2023-03-29 09:07:01'),
(161, 'App\\Models\\User', 139, 'MyApp', '5c434e4ce273d6fd5fcd023bafb1afb46e07fbeca45106750a40c4f22f258fcf', '[\"*\"]', NULL, NULL, '2023-03-29 09:09:20', '2023-03-29 09:09:20'),
(162, 'App\\Models\\User', 142, 'MyApp', '9712147e3c70ba47bbadedb2c17df07a55f6ee2a1894a2f5d12b2cc1552d9c7f', '[\"*\"]', NULL, NULL, '2023-03-29 09:10:21', '2023-03-29 09:10:21'),
(163, 'App\\Models\\User', 132, 'MyApp', '46410f2583d777ef1d17d3bcf4065bd3d076efa1bd1f83282526d48cdaa1ff46', '[\"*\"]', NULL, NULL, '2023-03-29 09:11:32', '2023-03-29 09:11:32'),
(164, 'App\\Models\\User', 139, 'MyApp', '2b2e7386f5cbf42d7add04590215de2570f7366fdfc583ed1959d086515ca7cb', '[\"*\"]', NULL, NULL, '2023-03-29 12:02:53', '2023-03-29 12:02:53'),
(165, 'App\\Models\\User', 141, 'MyApp', 'c7c3f4678baf100c1bacd46135ea395426f6c619bb893a0a6b0cebd020c00d63', '[\"*\"]', NULL, NULL, '2023-03-29 13:19:28', '2023-03-29 13:19:28'),
(166, 'App\\Models\\User', 145, 'MyApp', '2ee5311e1ae9801846a6f26fd80e15f979713fdbe712fb804fabfbcbbcf4459b', '[\"*\"]', NULL, NULL, '2023-03-29 14:33:32', '2023-03-29 14:33:32'),
(167, 'App\\Models\\User', 146, 'MyApp', '8d069d8aafb6393f3775595183c39a9f91ee435d48ff6a013e58c52c15d92a50', '[\"*\"]', NULL, NULL, '2023-03-29 14:40:55', '2023-03-29 14:40:55'),
(168, 'App\\Models\\User', 145, 'MyApp', '846ab59523afbda8f81f486f84ca56d6dcb1a7de2f130bd87bc0a39f227dec13', '[\"*\"]', NULL, NULL, '2023-03-29 15:30:57', '2023-03-29 15:30:57'),
(169, 'App\\Models\\User', 147, 'MyApp', '65529d69dc8adbe139cc5c5953fd2b030aed165e8a360485ffcae6a7787c0169', '[\"*\"]', NULL, NULL, '2023-03-29 15:52:36', '2023-03-29 15:52:36'),
(170, 'App\\Models\\User', 145, 'MyApp', 'cd4a83fa05dbb21d51cedfa0c0b00d7045698eee0f5b8ef48bc1f23316f14e79', '[\"*\"]', NULL, NULL, '2023-03-29 15:55:47', '2023-03-29 15:55:47'),
(171, 'App\\Models\\User', 148, 'MyApp', 'b9714fc6ac12dccdc41a0b1484c45ee2a6434f58fd09defbf740401d2e90a807', '[\"*\"]', NULL, NULL, '2023-03-29 16:08:32', '2023-03-29 16:08:32'),
(172, 'App\\Models\\User', 145, 'MyApp', 'f7448d3b490c9130a67e1f4a2181eff78ed1ec264185cd765009384158a99825', '[\"*\"]', NULL, NULL, '2023-03-29 16:14:23', '2023-03-29 16:14:23'),
(173, 'App\\Models\\User', 145, 'MyApp', '842da78a12559a4256f8d4ca3aea901481e5dd1a5bc9440ff9e7f59b6867769a', '[\"*\"]', NULL, NULL, '2023-03-29 16:47:21', '2023-03-29 16:47:21'),
(174, 'App\\Models\\User', 145, 'MyApp', '8711488dd4803c4a6b013a4f0e0e65eaff73cf3e02eb6851e15eb4fb27504032', '[\"*\"]', NULL, NULL, '2023-03-29 17:00:40', '2023-03-29 17:00:40'),
(175, 'App\\Models\\User', 149, 'MyApp', '21f3229dfcc9a2b4c349282ed13c4801b0dbcab79d3deaa13e0f42d4fb6d5c9a', '[\"*\"]', NULL, NULL, '2023-03-30 03:35:53', '2023-03-30 03:35:53'),
(176, 'App\\Models\\User', 145, 'MyApp', 'b59238c2a2bd84abed88518a6e9c6d524f6d1160d188963ae707d02f8963210e', '[\"*\"]', NULL, NULL, '2023-03-30 10:14:18', '2023-03-30 10:14:18'),
(177, 'App\\Models\\User', 150, 'MyApp', 'e947021b180b64695dd06e511b53d0c4ec80a27da0f8ed31cd19e80d7f197292', '[\"*\"]', NULL, NULL, '2023-03-30 10:15:23', '2023-03-30 10:15:23'),
(178, 'App\\Models\\User', 151, 'MyApp', 'b7dace4eb596d3a06b7d7637f3be1f6f729e23bca6fd3a4955f180e79582f0c9', '[\"*\"]', NULL, NULL, '2023-03-30 11:33:50', '2023-03-30 11:33:50'),
(179, 'App\\Models\\User', 145, 'MyApp', 'eaf689554af1f216031837fbb2a2f0af9cdb6f10eb696d1bf8d5fe73060bd077', '[\"*\"]', NULL, NULL, '2023-03-30 12:07:11', '2023-03-30 12:07:11'),
(180, 'App\\Models\\User', 145, 'MyApp', '6b17d519092a657b6b65ab629edaf83c508953e0684b7abaf1696267cd682d39', '[\"*\"]', NULL, NULL, '2023-03-30 12:07:24', '2023-03-30 12:07:24'),
(181, 'App\\Models\\User', 152, 'MyApp', '4e6828e07015123452369ae0505a8c9f63162a57e9b1a7d82660e598afec6918', '[\"*\"]', NULL, NULL, '2023-03-30 14:30:15', '2023-03-30 14:30:15'),
(182, 'App\\Models\\User', 1, 'MyApp', 'e1d74e659ccb216a946d313b22db7d9dc2271e2e15d43016be1ba599d73dd9a2', '[\"*\"]', NULL, NULL, '2023-03-30 15:41:19', '2023-03-30 15:41:19'),
(183, 'App\\Models\\User', 2, 'MyApp', '30ce498f9bf256e2fc937b2b37c38f25ae94dad7de24480fe354899289a1ff50', '[\"*\"]', NULL, NULL, '2023-03-30 15:53:43', '2023-03-30 15:53:43'),
(184, 'App\\Models\\User', 3, 'MyApp', '6096d787db0a6b1c34dbde2a52d961bb5d81b51f581ed9de020c42e6a5e7d409', '[\"*\"]', NULL, NULL, '2023-03-30 16:10:12', '2023-03-30 16:10:12'),
(185, 'App\\Models\\User', 4, 'MyApp', 'c8e92342b9dd901c6b0e854cf03fcd672a4478446c063e17ebf72dfa98678221', '[\"*\"]', NULL, NULL, '2023-03-30 16:16:13', '2023-03-30 16:16:13'),
(186, 'App\\Models\\User', 5, 'MyApp', 'd9b126a3e39edab8b294446f6113f3fe37456e8373d1eeb45c8895f100b68080', '[\"*\"]', NULL, NULL, '2023-03-30 16:33:15', '2023-03-30 16:33:15'),
(187, 'App\\Models\\User', 1, 'MyApp', '666daf34d67179656b227edfab2fdd7697595c15c65eb4691761d520ba67a613', '[\"*\"]', NULL, NULL, '2023-03-31 22:19:12', '2023-03-31 22:19:12'),
(188, 'App\\Models\\User', 6, 'MyApp', '17266f8046935cbdc6b6f7fdce7791d324bf2be3cafc35b20ea72bf20320c747', '[\"*\"]', NULL, NULL, '2023-04-05 14:01:19', '2023-04-05 14:01:19'),
(189, 'App\\Models\\User', 7, 'MyApp', '0e8729e771337d61cea8ea1940e88edc326031241baf2fdb3a69aa7b42fc5572', '[\"*\"]', NULL, NULL, '2023-04-06 00:11:18', '2023-04-06 00:11:18'),
(190, 'App\\Models\\User', 8, 'MyApp', 'b81976c1da7177abd84fb365f86e1180bcfbc69e7a3ee899bdf79133007d6229', '[\"*\"]', NULL, NULL, '2023-04-06 00:15:18', '2023-04-06 00:15:18'),
(191, 'App\\Models\\User', 9, 'MyApp', 'a5f20cb38083105290eb59186272d8af1d1d76ff5818423b2fe09697c3b63233', '[\"*\"]', NULL, NULL, '2023-04-06 00:18:20', '2023-04-06 00:18:20'),
(192, 'App\\Models\\User', 5, 'MyApp', '8c449c2207953e18d5bc391e780de7d3dc79343eae42a721b76377c42d479b1a', '[\"*\"]', NULL, NULL, '2023-04-08 15:00:23', '2023-04-08 15:00:23'),
(193, 'App\\Models\\User', 5, 'MyApp', '5e4e4bab42deadcd2bd96d0adcec8ba4a9cd3743ef2b40eb1b8320745e0623ab', '[\"*\"]', NULL, NULL, '2023-04-09 22:16:19', '2023-04-09 22:16:19'),
(194, 'App\\Models\\User', 1, 'MyApp', '94b83aeff61afb26620b99928c8a5075d677677c904d9a69e6f674d67e8a1384', '[\"*\"]', NULL, NULL, '2023-04-09 23:05:49', '2023-04-09 23:05:49'),
(195, 'App\\Models\\User', 9, 'MyApp', '6a9e236d8f057abac5c8e588c4c684792314990e50f3f83a161139a713533552', '[\"*\"]', NULL, NULL, '2023-04-10 10:26:23', '2023-04-10 10:26:23'),
(196, 'App\\Models\\User', 1, 'MyApp', '76e92e2464c55f1fb1c72ff129944d8e60e941031451a3cabf890fbd7136264e', '[\"*\"]', NULL, NULL, '2023-04-10 11:00:48', '2023-04-10 11:00:48'),
(197, 'App\\Models\\User', 9, 'MyApp', '77995c8d52f1891e3f2a24ad04d1aab1056445ca72407c7b136d58a32922a46f', '[\"*\"]', NULL, NULL, '2023-04-10 11:11:14', '2023-04-10 11:11:14'),
(198, 'App\\Models\\User', 5, 'MyApp', 'd23fc67fbf1cd187019b38d53b8bb2b2503d9abdc67d0648330b4ca23913fc46', '[\"*\"]', NULL, NULL, '2023-04-10 11:13:02', '2023-04-10 11:13:02'),
(199, 'App\\Models\\User', 9, 'MyApp', 'aef078331e77ed8d7e4ba3662c7e713c2e1cd1fc46a97a1d20456d67900d1b8c', '[\"*\"]', NULL, NULL, '2023-04-10 11:42:56', '2023-04-10 11:42:56'),
(200, 'App\\Models\\User', 1, 'MyApp', '119a1f9bd7985f3ad385a328607ac5f6b00ecf01f49b4898eee9be9895082a67', '[\"*\"]', NULL, NULL, '2023-04-10 22:59:03', '2023-04-10 22:59:03'),
(201, 'App\\Models\\User', 1, 'MyApp', '4360a9fce1caf18d3edcb1ef6e508d20b57dfd713498b46cf0b1ad892470c209', '[\"*\"]', NULL, NULL, '2023-04-10 22:59:39', '2023-04-10 22:59:39'),
(202, 'App\\Models\\User', 1, 'MyApp', '3d3d4abededbef0971a6be8ff459b7c5e09f8725c45a9012d407551ffe5f9b02', '[\"*\"]', NULL, NULL, '2023-04-11 21:07:31', '2023-04-11 21:07:31'),
(203, 'App\\Models\\User', 9, 'MyApp', 'f4bbb9ad7842a814bc28aa448745bd40d26eb1c658d531be98a2335beb242368', '[\"*\"]', NULL, NULL, '2023-04-11 21:23:01', '2023-04-11 21:23:01'),
(204, 'App\\Models\\User', 9, 'MyApp', '3ab06d4330b217227ef4647ff6b5ff9c624784aa3946998f6c730e1c8038ee19', '[\"*\"]', NULL, NULL, '2023-04-12 00:09:53', '2023-04-12 00:09:53'),
(205, 'App\\Models\\User', 10, 'MyApp', '10b62b3ca7075ba3fafe312abd46d451288c4aa6ad7ac26094f0231929d61dac', '[\"*\"]', NULL, NULL, '2023-04-12 23:48:56', '2023-04-12 23:48:56'),
(206, 'App\\Models\\User', 9, 'MyApp', '09072459b710fb9d5834fe3df01aba96fda8f5161a98659d888aec6b2598d71f', '[\"*\"]', NULL, NULL, '2023-04-13 00:23:34', '2023-04-13 00:23:34'),
(207, 'App\\Models\\User', 9, 'MyApp', 'f6a0787fd8d580eceac2140919d55ded2f88759225ba2d160035a74a78fc7880', '[\"*\"]', NULL, NULL, '2023-04-13 00:34:05', '2023-04-13 00:34:05'),
(208, 'App\\Models\\User', 9, 'MyApp', '40a213ce211c5a540c2e8388ad564b0861369afc7af3bb88824ab5162232cdcb', '[\"*\"]', NULL, NULL, '2023-04-15 09:59:25', '2023-04-15 09:59:25'),
(209, 'App\\Models\\User', 5, 'MyApp', '7e356c4c1649222c472a95ac8c4c74902d7d75e16f904df7d20179d395ec6dfa', '[\"*\"]', NULL, NULL, '2023-04-15 10:16:32', '2023-04-15 10:16:32'),
(210, 'App\\Models\\User', 9, 'MyApp', '32bf647fe50cba0e2159bcce1f1790ae9e5109c9110c6a24e08f5f9356b37fad', '[\"*\"]', NULL, NULL, '2023-04-15 10:26:56', '2023-04-15 10:26:56'),
(211, 'App\\Models\\User', 5, 'MyApp', '6689ef598be1b43abd09d31a448f2406aeee0629e8c0e2680e81d11853cef277', '[\"*\"]', NULL, NULL, '2023-04-15 10:31:39', '2023-04-15 10:31:39'),
(212, 'App\\Models\\User', 5, 'MyApp', '4e65392238b209ee957e7ba0e1ab10f7bfca027d663d0d291261a453eb68f5fa', '[\"*\"]', NULL, NULL, '2023-04-15 10:38:32', '2023-04-15 10:38:32'),
(213, 'App\\Models\\User', 9, 'MyApp', '5b324ffeb9206d29f3a906d9927f9c1f18a6a11f9d03c09a3b51fcdc57acfd2b', '[\"*\"]', NULL, NULL, '2023-04-15 11:07:41', '2023-04-15 11:07:41'),
(214, 'App\\Models\\User', 1, 'MyApp', '12338dc93a72afd6283e7c2278b8e20db2177e21962faacaac2bdc0d5a67d96a', '[\"*\"]', NULL, NULL, '2023-04-15 13:41:32', '2023-04-15 13:41:32'),
(215, 'App\\Models\\User', 9, 'MyApp', '296042be75304cf6570a93fec5f14304dc8c4c95efc19f72589d85dd33a74bd4', '[\"*\"]', NULL, NULL, '2023-04-15 14:27:23', '2023-04-15 14:27:23'),
(216, 'App\\Models\\User', 13, 'MyApp', '270b6da560eedea3a04963d7f6a24f66fd3692888d6a3aa18032796f9507a2c8', '[\"*\"]', NULL, NULL, '2023-04-17 10:16:50', '2023-04-17 10:16:50'),
(217, 'App\\Models\\User', 13, 'MyApp', '616657546a1946485e4d9fbf9776f3b4eddf16b72784b4281271c026c718d574', '[\"*\"]', NULL, NULL, '2023-04-17 10:20:26', '2023-04-17 10:20:26'),
(218, 'App\\Models\\User', 9, 'MyApp', 'f3a10da7fb8a97b78ccda19b9e3f9d004f5077218014c90579ad8f7ef1f1ea52', '[\"*\"]', NULL, NULL, '2023-04-17 10:25:57', '2023-04-17 10:25:57'),
(219, 'App\\Models\\User', 13, 'MyApp', 'f8dcf028ee23e5f782034e9291c3cee1b6c8dee7a5cb32f538be6ec7f17ccbf7', '[\"*\"]', NULL, NULL, '2023-04-17 10:27:27', '2023-04-17 10:27:27'),
(220, 'App\\Models\\User', 14, 'MyApp', '1567168174023c333f31a6937bbf0483b8be2d62d19450384440230bb3b39ec2', '[\"*\"]', NULL, NULL, '2023-04-17 10:39:46', '2023-04-17 10:39:46'),
(221, 'App\\Models\\User', 9, 'MyApp', 'cd606a7b4a2dc6e048e0fa7b4fcd14c91e5a55c16c19e1c834401e2f208f0fb2', '[\"*\"]', NULL, NULL, '2023-04-17 12:32:50', '2023-04-17 12:32:50'),
(222, 'App\\Models\\User', 13, 'MyApp', '3cf6765470c727ea04758b0bbe40c1b4f2c08f10facff7937b7f175e681d2882', '[\"*\"]', NULL, NULL, '2023-05-05 11:10:10', '2023-05-05 11:10:10'),
(223, 'App\\Models\\User', 9, 'MyApp', 'dfe6f4cac94bd6f221f99b214ff678d340655971d3bb45edf766649e8dd8d924', '[\"*\"]', NULL, NULL, '2023-05-05 15:16:23', '2023-05-05 15:16:23'),
(224, 'App\\Models\\User', 9, 'MyApp', '46d96cbdc05d42f1158d32888b6ba0c7a6db83922b592ec07eb3bc5cbca94a8f', '[\"*\"]', NULL, NULL, '2023-05-05 15:18:09', '2023-05-05 15:18:09'),
(225, 'App\\Models\\User', 9, 'MyApp', '7d3adcdc102fc46683d90df23e9d83e42f6425333206c7fee18c847fcccedeaf', '[\"*\"]', NULL, NULL, '2023-05-05 15:20:57', '2023-05-05 15:20:57'),
(226, 'App\\Models\\User', 9, 'MyApp', '65540da1855c3dabecd15bcc429aee3dc6d4f6d4604c0a9b2c360ee60b59445b', '[\"*\"]', NULL, NULL, '2023-05-05 15:22:16', '2023-05-05 15:22:16'),
(227, 'App\\Models\\User', 9, 'MyApp', 'c111c662d6717510bf62dc162402a2c9ccacac3ac093d720e8e938650a265698', '[\"*\"]', NULL, NULL, '2023-05-05 16:51:33', '2023-05-05 16:51:33'),
(228, 'App\\Models\\User', 15, 'MyApp', 'e68b965466dc9c52a217a6ddffc8301c45c45460501128765ac9d35bd14d4e41', '[\"*\"]', NULL, NULL, '2023-05-06 13:19:24', '2023-05-06 13:19:24'),
(229, 'App\\Models\\User', 9, 'MyApp', 'd0b54b4944d3851e22a26a48e69371c07064333656562c9aa1739a77b2033607', '[\"*\"]', NULL, NULL, '2023-05-08 13:46:41', '2023-05-08 13:46:41'),
(230, 'App\\Models\\User', 9, 'MyApp', '7a31124acebd92f320a6c5bade8de0e3e88a5000cac1febfde436a2889e1b84f', '[\"*\"]', NULL, NULL, '2023-05-08 14:09:56', '2023-05-08 14:09:56'),
(231, 'App\\Models\\User', 9, 'MyApp', 'd928ef95c6c7f113b5fd45b3ce0bc04f6712576215af34756cfa8c372eb102f5', '[\"*\"]', NULL, NULL, '2023-05-08 14:35:56', '2023-05-08 14:35:56'),
(232, 'App\\Models\\User', 16, 'MyApp', '09bad8c91dd490e518881b3071511a62300c63fa5d54da2f3385dde2ef4839e2', '[\"*\"]', NULL, NULL, '2023-05-08 14:46:44', '2023-05-08 14:46:44'),
(233, 'App\\Models\\User', 9, 'MyApp', '97458682f14f70c64e52bf9eb7d20ba4762a75e8802dc42b9b7af6feda0f705a', '[\"*\"]', NULL, NULL, '2023-05-08 15:00:21', '2023-05-08 15:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `profile_verification`
--

CREATE TABLE `profile_verification` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_video` longtext DEFAULT NULL,
  `verification_status` enum('pending','verified','unverified') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_verification`
--

INSERT INTO `profile_verification` (`id`, `user_id`, `image_video`, `verification_status`, `created_at`, `updated_at`) VALUES
(1, 51, '1689835683_cropped-funtash-final-logo288x80final.png', 'unverified', '2023-07-20 10:48:03', '2023-07-20 10:48:03'),
(3, 50, '1689851382_yw.jpg', 'pending', '2023-07-20 15:09:42', '2023-07-20 15:09:42'),
(4, 48, '1689852505_yw.jpg', 'pending', '2023-07-20 15:28:25', '2023-07-20 15:28:25'),
(5, 49, '1689854044_VID_20230720_165136.mp4', 'pending', '2023-07-20 15:54:04', '2023-07-20 15:54:04'),
(6, 47, '1689854666_VID_20230720_170214.mp4', 'pending', '2023-07-20 16:04:26', '2023-07-20 16:04:26'),
(7, 46, '1689855137_VID_20230720_170835.mp4', 'pending', '2023-07-20 16:12:17', '2023-07-20 16:12:17'),
(8, 45, '1689855427_VID_20230720_171630.mp4', 'pending', '2023-07-20 16:17:07', '2023-07-20 16:17:07'),
(9, 44, '1689855647_VID_20230720_171956.mp4', 'pending', '2023-07-20 16:20:47', '2023-07-20 16:20:47'),
(10, 43, '1689855906_VID_20230720_172421.mp4', 'pending', '2023-07-20 16:25:06', '2023-07-20 16:25:06'),
(11, 51, '1689869571_VID_20230720_211219.mp4', 'unverified', '2023-07-20 20:12:52', '2023-07-20 20:12:52'),
(12, 51, '1689935056_VID_20230721_152337.mp4', 'unverified', '2023-07-21 14:24:16', '2023-07-21 14:24:16'),
(13, 54, '1690299907_VID_20230725_204443.mp4', 'pending', '2023-07-25 19:45:07', '2023-07-25 19:45:07'),
(14, 83, '1690983467_VID_20230802_183716.mp4', 'pending', '2023-08-02 17:37:47', '2023-08-02 17:37:47'),
(15, 104, '1692100313_VID_20230815_165111.mp4', 'pending', '2023-08-15 15:51:53', '2023-08-15 15:51:53'),
(16, 113, '1692289167_VID_20230817_211914.mp4', 'pending', '2023-08-17 20:19:27', '2023-08-17 20:19:27'),
(17, 3, '1692301524_video_20230818_004513.mp4', 'pending', '2023-08-17 23:45:24', '2023-08-17 23:45:24'),
(18, 114, '1692302720_VID20230818000508.mp4', 'pending', '2023-08-18 00:05:20', '2023-08-18 00:05:20'),
(19, 156, '1693276658_VID20230829063649.mp4', 'pending', '2023-08-29 06:37:38', '2023-08-29 06:37:38'),
(20, 166, '1693477860_VID20230831143049.mp4', 'pending', '2023-08-31 14:31:00', '2023-08-31 14:31:00'),
(21, 168, '1693481196_VID20230831152626.mp4', 'pending', '2023-08-31 15:26:36', '2023-08-31 15:26:36'),
(22, 180, '1695034266_video_20230918_155051.mp4', 'pending', '2023-09-18 14:51:06', '2023-09-18 14:51:06'),
(23, 187, '1697476851_20231016_211956.mp4', 'pending', '2023-10-16 21:20:51', '2023-10-16 21:20:51'),
(24, 210, '1697636760_VID_20231018_184542.mp4', 'pending', '2023-10-18 17:46:00', '2023-10-18 17:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `reported_user`
--

CREATE TABLE `reported_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(112) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_messages`
--

CREATE TABLE `support_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED DEFAULT NULL,
  `receiver_id` int(20) UNSIGNED DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `support_messages`
--

INSERT INTO `support_messages` (`id`, `sender_id`, `receiver_id`, `message`, `created_at`, `updated_at`) VALUES
(9, 1, 25, 'We\'ll fix it soon', '2023-02-07 15:17:22', '2023-02-07 15:17:22'),
(10, 1, 20, 'Ok we\'ll fix it soon.. Thanks.', '2023-02-08 14:50:44', '2023-02-08 14:50:44'),
(11, 1, 24, 'Ok we are sorry for this trouble', '2023-02-08 17:43:28', '2023-02-08 17:43:28'),
(13, 1, 20, 'We will fix it', '2023-02-15 12:34:40', '2023-02-15 12:34:40'),
(15, 139, 140, 'hello', '2023-03-29 10:05:40', '2023-03-29 10:05:40'),
(16, 139, 140, 'hello', '2023-03-29 10:07:31', '2023-03-29 10:07:31'),
(17, 139, 140, 'hello', '2023-03-29 10:13:01', '2023-03-29 10:13:01'),
(18, 132, 50, 'hi', '2023-03-29 10:25:24', '2023-03-29 10:25:24'),
(19, 132, 50, 'hello', '2023-03-29 11:22:43', '2023-03-29 11:22:43'),
(20, 132, 50, 'Hello Kitty', '2023-03-29 11:25:18', '2023-03-29 11:25:18'),
(21, 132, 101, 'hi', '2023-03-29 11:31:13', '2023-03-29 11:31:13'),
(22, 132, 101, 'hello brother', '2023-03-29 11:32:52', '2023-03-29 11:32:52'),
(23, 132, 102, 'hello', '2023-03-29 11:46:19', '2023-03-29 11:46:19'),
(24, 132, 102, 'Sufyan', '2023-03-29 11:52:05', '2023-03-29 11:52:05'),
(25, 132, 102, 'hi', '2023-03-29 11:54:10', '2023-03-29 11:54:10'),
(26, 139, 50, 'g', '2023-03-29 12:07:35', '2023-03-29 12:07:35'),
(27, 139, 50, 'hi', '2023-03-29 12:18:00', '2023-03-29 12:18:00'),
(28, 139, 50, 'My First day of school', '2023-03-29 13:03:50', '2023-03-29 13:03:50'),
(29, 139, 50, 'Hello Sir John is the only thing is that what you\'re talking about you guys', '2023-03-29 13:05:03', '2023-03-29 13:05:03'),
(30, 148, 145, 'hi', '2023-03-29 21:28:53', '2023-03-29 21:28:53'),
(31, 145, 145, 'hi', '2023-03-29 21:28:54', '2023-03-29 21:28:54'),
(32, 145, 148, 'Hello', '2023-03-29 21:33:01', '2023-03-29 21:33:01'),
(33, 148, 145, 'hello', '2023-03-29 21:33:21', '2023-03-29 21:33:21'),
(34, 145, 148, 'hi', '2023-03-29 21:33:24', '2023-03-29 21:33:24'),
(35, 148, 145, 'hi', '2023-03-29 21:33:30', '2023-03-29 21:33:30'),
(36, 145, 148, 'Hello sir', '2023-03-29 21:34:32', '2023-03-29 21:34:32'),
(37, 148, 145, 'hi', '2023-03-29 21:40:14', '2023-03-29 21:40:14'),
(38, 145, 148, 'Hello', '2023-03-29 21:40:27', '2023-03-29 21:40:27'),
(39, 145, 148, 'Hello Sir John is the only one who is this your first time in the morning', '2023-03-29 21:41:44', '2023-03-29 21:41:44'),
(40, 145, 148, 'hi', '2023-03-29 21:57:40', '2023-03-29 21:57:40'),
(41, 148, 145, 'hi', '2023-03-29 22:01:58', '2023-03-29 22:01:58'),
(42, 145, 148, 'hi', '2023-03-29 22:02:19', '2023-03-29 22:02:19'),
(43, 145, 148, 'Hello Kitty How are you', '2023-03-29 22:02:45', '2023-03-29 22:02:45'),
(44, 145, 148, 'hello', '2023-03-29 22:05:49', '2023-03-29 22:05:49'),
(45, 148, 145, 'hi', '2023-03-29 22:05:51', '2023-03-29 22:05:51'),
(46, 148, 145, 'hi', '2023-03-29 22:05:57', '2023-03-29 22:05:57'),
(47, 145, 148, 'Hello', '2023-03-29 22:07:24', '2023-03-29 22:07:24'),
(48, 148, 145, 'hrefjgg', '2023-03-29 22:08:35', '2023-03-29 22:08:35'),
(49, 145, 148, 'hi', '2023-03-29 22:08:56', '2023-03-29 22:08:56'),
(50, 145, 50, 'hi', '2023-03-30 02:51:55', '2023-03-30 02:51:55'),
(51, 145, 50, 'how are you', '2023-03-30 02:52:10', '2023-03-30 02:52:10'),
(52, 145, 50, 'go', '2023-03-30 02:52:51', '2023-03-30 02:52:51'),
(53, 149, 108, 'hey faizan', '2023-03-30 03:39:07', '2023-03-30 03:39:07'),
(54, 149, 108, 'this is testing phase so we are getting multiple msgs as for testing.', '2023-03-30 03:39:32', '2023-03-30 03:39:32'),
(55, 149, 108, 'this is testing phase so we are getting multiple msgs as for testing.', '2023-03-30 03:39:33', '2023-03-30 03:39:33'),
(56, 149, 108, 'lets have a date', '2023-03-30 03:39:39', '2023-03-30 03:39:39'),
(57, 145, 146, 'hoo', '2023-03-30 06:44:52', '2023-03-30 06:44:52'),
(58, 150, 107, 'hi', '2023-03-30 10:19:07', '2023-03-30 10:19:07'),
(59, 150, 107, 'hi', '2023-03-30 10:19:08', '2023-03-30 10:19:08'),
(60, 150, 107, 'hi', '2023-03-30 10:19:08', '2023-03-30 10:19:08'),
(61, 150, 107, 'hi', '2023-03-30 10:19:08', '2023-03-30 10:19:08'),
(62, 150, 107, 'hi', '2023-03-30 10:19:08', '2023-03-30 10:19:08'),
(63, 150, 107, 'hi', '2023-03-30 10:19:08', '2023-03-30 10:19:08'),
(64, 150, 107, 'hi', '2023-03-30 10:19:08', '2023-03-30 10:19:08'),
(65, 150, 107, 'hi', '2023-03-30 10:19:08', '2023-03-30 10:19:08'),
(66, 150, 107, 'hi', '2023-03-30 10:19:08', '2023-03-30 10:19:08'),
(67, 150, 107, 'hi', '2023-03-30 10:19:08', '2023-03-30 10:19:08'),
(68, 150, 107, 'hi', '2023-03-30 10:19:08', '2023-03-30 10:19:08'),
(69, 150, 107, 'hi', '2023-03-30 10:19:09', '2023-03-30 10:19:09'),
(70, 132, 50, 'hi', '2023-03-30 10:33:24', '2023-03-30 10:33:24'),
(71, 151, 145, 'hey.', '2023-03-30 11:38:06', '2023-03-30 11:38:06'),
(72, 151, 150, 'hi', '2023-03-30 11:43:17', '2023-03-30 11:43:17'),
(73, 132, 50, 'hi', '2023-03-30 12:12:02', '2023-03-30 12:12:02'),
(74, 145, 101, 'hi', '2023-03-30 12:21:28', '2023-03-30 12:21:28'),
(75, 145, 101, 'Hello', '2023-03-30 12:21:43', '2023-03-30 12:21:43'),
(76, 145, 101, 'hi', '2023-03-30 12:22:35', '2023-03-30 12:22:35'),
(77, 145, 145, 'Hello niazan', '2023-03-30 12:23:18', '2023-03-30 12:23:18'),
(78, 145, 145, 'Hello Kitty 🐱', '2023-03-30 12:24:13', '2023-03-30 12:24:13'),
(79, 145, 50, 'hi', '2023-03-30 12:27:01', '2023-03-30 12:27:01'),
(80, 145, 50, 'my name is Mohammad Sufyan', '2023-03-30 12:27:18', '2023-03-30 12:27:18'),
(81, 148, 145, 'hi', '2023-03-30 12:50:21', '2023-03-30 12:50:21'),
(82, 145, 148, 'hi', '2023-03-30 12:50:37', '2023-03-30 12:50:37'),
(83, 145, 148, 'HI grape games', '2023-03-30 12:51:06', '2023-03-30 12:51:06'),
(84, 148, 145, 'niazan', '2023-03-30 12:51:25', '2023-03-30 12:51:25'),
(85, 145, 148, 'how are you', '2023-03-30 12:55:01', '2023-03-30 12:55:01'),
(86, 145, 101, 'hi', '2023-03-30 13:48:40', '2023-03-30 13:48:40'),
(87, 145, 101, 'how are you', '2023-03-30 13:48:59', '2023-03-30 13:48:59'),
(88, 2, 1, 'hey', '2023-03-30 16:03:18', '2023-03-30 16:03:18'),
(89, 2, 1, 'lets have a date.', '2023-03-30 16:03:42', '2023-03-30 16:03:42'),
(90, 2, 1, 'lets have a date.', '2023-03-30 16:03:44', '2023-03-30 16:03:44'),
(91, 2, 1, 'hey', '2023-03-30 16:04:15', '2023-03-30 16:04:15'),
(92, 1, 2, 'hello funtash', '2023-03-30 16:10:10', '2023-03-30 16:10:10'),
(93, 1, 2, 'how are u', '2023-03-30 16:10:26', '2023-03-30 16:10:26'),
(94, 3, 2, 'hey. how are you? lets have a date. i m scheduling that.', '2023-03-30 16:18:33', '2023-03-30 16:18:33'),
(95, 5, 1, 'hi', '2023-03-30 16:40:35', '2023-03-30 16:40:35'),
(96, 5, 1, 'how are u', '2023-03-30 16:40:43', '2023-03-30 16:40:43'),
(97, 1, 1, 'suna ustad', '2023-04-01 11:17:46', '2023-04-01 11:17:46'),
(98, 1, 3, 'HI', '2023-04-01 19:36:11', '2023-04-01 19:36:11'),
(99, 1, 3, 'Hello', '2023-04-01 19:36:25', '2023-04-01 19:36:25'),
(100, 1, 2, 'hi', '2023-04-01 22:06:36', '2023-04-01 22:06:36'),
(101, 1, 3, 'Hello', '2023-04-02 10:51:36', '2023-04-02 10:51:36'),
(102, 1, 3, 'how are you', '2023-04-04 00:01:41', '2023-04-04 00:01:41'),
(103, 6, 6, 'Hi How are you', '2023-04-05 23:13:37', '2023-04-05 23:13:37'),
(104, 6, 6, 'what r u doing', '2023-04-05 23:24:26', '2023-04-05 23:24:26'),
(105, 6, 3, 'what are you doing', '2023-04-05 23:27:19', '2023-04-05 23:27:19'),
(106, 6, 3, 'Are you busy?? i have one question', '2023-04-05 23:28:03', '2023-04-05 23:28:03'),
(107, 6, 3, 'Hellow!!!', '2023-04-05 23:28:38', '2023-04-05 23:28:38'),
(108, 5, 7, 'hi', '2023-04-09 22:20:42', '2023-04-09 22:20:42'),
(109, 1, 7, 'hey', '2023-04-10 11:30:43', '2023-04-10 11:30:43'),
(110, 9, 7, 'how are you brother', '2023-04-10 22:50:05', '2023-04-10 22:50:05'),
(111, 9, 1, 'hi sufyan', '2023-04-10 22:57:26', '2023-04-10 22:57:26'),
(112, 9, 1, 'How are you', '2023-04-10 22:57:35', '2023-04-10 22:57:35'),
(113, 1, 9, 'hi freya', '2023-04-10 23:00:58', '2023-04-10 23:00:58'),
(114, 1, 9, 'how are you', '2023-04-10 23:01:10', '2023-04-10 23:01:10'),
(115, 1, 9, 'Hello', '2023-04-10 23:01:50', '2023-04-10 23:01:50'),
(116, 1, 9, 'what are your plans for today', '2023-04-10 23:02:13', '2023-04-10 23:02:13'),
(117, 1, 9, 'what are your plans for today', '2023-04-10 23:02:14', '2023-04-10 23:02:14'),
(118, 1, 9, 'are u okay??', '2023-04-10 23:03:00', '2023-04-10 23:03:00'),
(119, 1, 9, 'ہر وہ دن جس دن پھول کھلیں \nجس دن ہواؤں کو خوشبوؤں کا لمس نصیب ہو\n محبت جنم لیتی ہے اور جب تک اس دنیا کے سر پہ آسمان کا سایہ موجود ہے میری تمہارے لئیے محبت قائم ہے', '2023-04-10 23:03:34', '2023-04-10 23:03:34'),
(120, 9, 5, 'hello', '2023-04-11 21:28:10', '2023-04-11 21:28:10'),
(121, 9, 2, 'hello', '2023-04-13 00:34:54', '2023-04-13 00:34:54'),
(122, 9, 2, 'hello', '2023-04-13 00:34:56', '2023-04-13 00:34:56'),
(123, 9, 8, 'hello', '2023-04-15 13:35:47', '2023-04-15 13:35:47'),
(124, 9, 1, 'hi', '2023-04-15 13:42:37', '2023-04-15 13:42:37'),
(125, 1, 9, 'hi', '2023-04-15 13:42:42', '2023-04-15 13:42:42'),
(126, 9, 1, 'Hello Sufyan khan', '2023-04-15 13:43:26', '2023-04-15 13:43:26'),
(127, 1, 9, 'hh', '2023-04-15 13:43:37', '2023-04-15 13:43:37'),
(128, 1, 9, 'hi', '2023-04-15 13:51:26', '2023-04-15 13:51:26'),
(129, 1, 9, 'hi fageha', '2023-04-15 14:00:12', '2023-04-15 14:00:12'),
(130, 9, 1, 'hi sufhan', '2023-04-15 14:00:29', '2023-04-15 14:00:29'),
(131, 9, 1, 'niazan', '2023-04-15 14:00:56', '2023-04-15 14:00:56'),
(132, 1, 9, 'sufyan', '2023-04-15 14:06:55', '2023-04-15 14:06:55'),
(133, 9, 1, 'hello', '2023-04-15 14:09:37', '2023-04-15 14:09:37'),
(134, 1, 9, 'hi', '2023-04-15 14:09:38', '2023-04-15 14:09:38'),
(135, 9, 1, 'hi suufyan', '2023-04-15 14:13:43', '2023-04-15 14:13:43'),
(136, 1, 9, 'hi freya', '2023-04-15 14:13:43', '2023-04-15 14:13:43'),
(137, 9, 1, 'hi', '2023-04-15 14:15:18', '2023-04-15 14:15:18'),
(138, 9, 3, 'hey buddy', '2023-04-15 16:00:59', '2023-04-15 16:00:59'),
(139, 13, 13, 'hi', '2023-04-17 10:18:46', '2023-04-17 10:18:46'),
(140, 13, 9, 'hi', '2023-04-17 10:21:49', '2023-04-17 10:21:49'),
(141, 9, 12, 'hello', '2023-04-17 10:51:15', '2023-04-17 10:51:15'),
(142, 9, 12, 'hi', '2023-04-17 10:51:23', '2023-04-17 10:51:23'),
(143, 14, 9, 'hi', '2023-04-17 11:30:35', '2023-04-17 11:30:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(121) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `fname` varchar(121) DEFAULT NULL,
  `lname` varchar(121) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `is_verified` int(11) NOT NULL DEFAULT 0,
  `bio` text DEFAULT NULL,
  `user_status` text DEFAULT NULL,
  `relationship_status` text DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `pronoun` varchar(100) DEFAULT NULL,
  `interested_in` varchar(100) DEFAULT NULL,
  `age` varchar(121) DEFAULT NULL,
  `location` varchar(121) DEFAULT NULL,
  `lat` varchar(256) NOT NULL DEFAULT '0.0',
  `long` varchar(256) NOT NULL DEFAULT '0.0',
  `max_distance` varchar(100) DEFAULT NULL,
  `profile_picture` longtext DEFAULT NULL,
  `path` longtext DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `status` varchar(121) NOT NULL DEFAULT 'Active',
  `block_status` varchar(256) DEFAULT 'Un-Block',
  `min_age` varchar(50) DEFAULT NULL,
  `max_age` varchar(50) DEFAULT NULL,
  `map_picture` longtext DEFAULT NULL,
  `min_distance` varchar(100) DEFAULT NULL,
  `acc_status` text DEFAULT 'active',
  `reason` text DEFAULT NULL,
  `explanation` text DEFAULT NULL,
  `sendtoEmail` int(11) NOT NULL DEFAULT 0,
  `is_premium` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `fname`, `lname`, `email_verified_at`, `remember_token`, `is_verified`, `bio`, `user_status`, `relationship_status`, `dob`, `pronoun`, `interested_in`, `age`, `location`, `lat`, `long`, `max_distance`, `profile_picture`, `path`, `created_at`, `updated_at`, `status`, `block_status`, `min_age`, `max_age`, `map_picture`, `min_distance`, `acc_status`, `reason`, `explanation`, `sendtoEmail`, `is_premium`) VALUES
(13, 'sufyankhan5147@gmail.com', '$2y$10$0cB8IgHEJjJU/y.XaI5iUO3W/0e3Wi8ZRc4KavHBIKVTW22Ezr79a', 'Jason', 'stathom', NULL, NULL, 0, 'I\'m Jason statom', NULL, NULL, '2001-03-02', 'Male', NULL, '6-28', 'Friends', '33.5222019', '73.1539351', NULL, NULL, NULL, '2023-04-17 06:16:50', '2023-11-17 07:35:06', 'Active', 'Un-Block', '12.369437', '28.0', '1700135082.jfif', '', 'active', NULL, NULL, 0, 0),
(169, 'ptest1@gmail.com', '$2y$10$77XmPb8W2Yu4GMlwuwfM7udsVGxDtIQVKt4csUhgkEJnU8MjZ7GaK', 'ptest', 'one', NULL, NULL, 0, 'hi there', 'i am test user one', 'Single', '1994-09-13', 'Male', 'Female', '24-40', 'Everyone', '33.5221986', '73.1539839', '5mi', '1693547619_images (18).jpeg', '', '2023-09-01 05:47:57', '2023-11-17 07:35:09', 'Active', 'Un-Block', NULL, NULL, '1693547619_images (18).jpeg', NULL, 'active', NULL, NULL, 0, 1),
(172, 'ptest4@gmail.com', '$2y$10$5r9Hh4x2T1Y7Pz1VOx0XsuJE/pEpShcmvJDeNKg/JYVmBSd3U8Aay', 'ptest', 'four', NULL, NULL, 0, 'hi', 'im test user fourr', 'Single', '1985-09-16', 'Male', 'Female', '21-42', 'My Friends', '33.5629066', '73.147122', '5mi', '1693551410_images (18).jpeg', '', '2023-09-01 06:55:54', '2023-11-17 11:46:29', 'Active', 'Un-Block', NULL, NULL, '1693551410_images (18).jpeg', NULL, 'active', NULL, NULL, 0, 0),
(179, 'shshshwu@gmail.com', '$2y$10$EfPP4Ry1dOz5.q42izXveuppm.JKQSZZzbfO5wCmkB0vO.CuD29VG', 'shshs', 'shshs', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.8', '8.9', NULL, NULL, NULL, '2023-09-08 09:56:48', '2023-11-17 11:46:32', 'Active', 'Un-Block', NULL, NULL, NULL, NULL, 'active', NULL, NULL, 0, 0),
(184, 'hewhodares99@protonmail.com', '$2y$10$yAgxN0LV.qYUlChvUKX6Qe/H2/KUzmjT7YGngTPcUbeI8N062SnkC', 'Dom', 'Marioni', NULL, NULL, 0, '😍', 'up for a good time', 'Single', '1990-10-14', 'Male', 'Female', 'null', 'Everyone', '36.5068765', '-4.9751195', '10mi', '1695393397_p169006_i_v13_ab.jpg', '', '2023-09-22 14:35:02', '2023-11-17 11:46:34', 'Active', 'Un-Block', NULL, NULL, '1695393397_p169006_i_v13_ab.jpg', NULL, 'active', NULL, NULL, 0, 0),
(187, 'sinanysf828@gmail.com', '$2y$10$4q2kEdpBd9DOtv3Af/oGiuDeH3kQvodewUr/EdaA4PG84XM12CjBq', 'Sinan', 'sin', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '25.0910154', '55.3853538', NULL, NULL, NULL, '2023-10-13 14:51:29', '2023-11-17 11:46:38', 'Active', 'Un-Block', NULL, NULL, NULL, NULL, 'active', NULL, NULL, 0, 0),
(189, 'sinatyn@gamail.com', '$2y$10$TM3E02JwjqNVgfRmgUqYkOaw8pZnX.3Fb4UOmQ4RcYbOO/JPieyUm', 'sin', 'sj', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.0', '0.0', NULL, NULL, NULL, '2023-10-13 14:55:32', '2023-11-17 11:46:40', 'Active', 'Un-Block', NULL, NULL, NULL, NULL, 'active', NULL, NULL, 0, 0),
(190, 'sinfffatyn@gamail.com', '$2y$10$9EDYDN43hqFW1iyCqhxFceTJFpiOf4AQUIM5jdie.5tHVt3LWLvYu', 'sin', 'sj', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.0', '0.0', NULL, NULL, NULL, '2023-10-13 14:56:04', '2023-11-17 11:46:46', 'Active', 'Un-Block', NULL, NULL, NULL, NULL, 'active', NULL, NULL, 0, 0),
(191, 'sinffdffatyn@gamail.com', '$2y$10$1rnRTbP3FJCNMGd2YxUtqOzIta0s/sjFuFhGOW/8lg6lCpNTZ3cEa', 'sin', 'sj', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.0', '0.0', NULL, NULL, NULL, '2023-10-13 14:56:18', '2023-11-17 11:46:43', 'Active', 'Un-Block', NULL, NULL, NULL, NULL, 'active', NULL, NULL, 0, 0),
(192, 'sinanuxui@gmail.com', '$2y$10$hXoOcdh/IClvARcVKS8dKuSq3LHvuPApMuIVi7IiH2etQoTcDQl6y', 'sin', 'sj', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.0', '0.0', NULL, NULL, NULL, '2023-10-13 14:57:31', '2023-11-17 11:46:48', 'Active', 'Un-Block', NULL, NULL, NULL, NULL, 'active', NULL, NULL, 0, 0),
(197, 'mokexo4822@elixirsd.com', '$2y$10$zhzascFVCMAKPepKtgh1Kujj0rb60w67S0JhtvZlAnYNVg340BXWe', 'sinan', 'sin', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.0', '0.0', NULL, NULL, NULL, '2023-10-16 17:03:56', '2023-11-17 11:46:49', 'Active', 'Un-Block', NULL, NULL, NULL, NULL, 'active', NULL, NULL, 0, 0),
(198, 'mokexo4822@elixirsd.com', '$2y$10$8SKBfIkwhVa5w9/z.0xH9uIVnwlG3ZZhE3l4xpZbW7WtNtxJF3lF2', 'sinan', 'sin', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.0', '0.0', NULL, NULL, NULL, '2023-10-16 17:03:56', '2023-11-17 11:46:51', 'Active', 'Un-Block', NULL, NULL, NULL, NULL, 'active', NULL, NULL, 0, 0),
(209, 'fasihahmed349@gmail.com', '$2y$10$MiloXsJxt6gwLHSaXYF35OQksYHW7uIEeOeFZAdTGo6h2S5yrYBEi', 'asahsjas', 'dhsdh', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.0', '0.0', NULL, NULL, NULL, '2023-10-18 12:50:24', '2023-11-17 11:46:52', 'Active', 'Un-Block', NULL, NULL, NULL, NULL, 'active', NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_image`
--

CREATE TABLE `user_image` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `picture` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `path` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_image`
--

INSERT INTO `user_image` (`id`, `user_id`, `picture`, `created_at`, `updated_at`, `path`) VALUES
(1, 51, '321750740_1311323882769064_4393825444543325074_n.jpg', '2023-02-24 00:35:25', NULL, 'public/images/Bj7QLqdhOjQATQWlPVGdm0gsXB6M0MqCm3NprvZ7.jpg'),
(2, 51, '321750740_1311323882769064_4393825444543325074_n.jpg', '2023-02-24 00:39:31', NULL, 'public/images/sYj4hjX0uUrNHzRYcEFCqeG3U3mwHnMesWMVsPTa.jpg'),
(3, 51, '321750740_1311323882769064_4393825444543325074_n.jpg', '2023-02-24 00:40:08', NULL, 'public/images/PDgb2E9FCfjxA01ym9AedOZr5Dj9wiUfy7QwPzLa.jpg'),
(10, 3, 'IMG_20230226_162137_536.jpg', '2023-03-01 05:00:53', '2023-07-20 03:15:26', 'public/images/VYW9ISsuD6PWRKq7UhT5YN5XppVbqRRt3fPyEFxe.jpg'),
(11, 3, 'IMG_20230226_162137_536.jpg', '2023-03-01 05:05:12', '2023-07-20 03:15:31', 'public/images/DCQJnQXX5iXzNuA2rhPFVN7lwQ69u5ns1PUjf81x.jpg'),
(12, 3, 'IMG_20230226_162137_536.jpg', '2023-03-01 07:07:55', '2023-07-20 03:15:35', 'public/images/Te4sgXmRfsJ73osAg8iTIrJXtwHY0aMfb33TGASR.jpg'),
(13, 3, 'IMG_20230226_162137_536.jpg', '2023-03-01 07:24:19', '2023-07-20 03:15:39', 'public/images/KsNEaBIh8rn68P8aEnoSvLfZOrV6eWPLWoP1ZT6l.jpg'),
(14, 100, 'IMG_20230226_162137_536.jpg', '2023-03-01 07:36:47', NULL, 'public/images/lV2cQhfF8Dh7b9LE1BRgKtu20JXwbeCVxUOiJmv2.jpg'),
(15, 110, 'Screenshot Capture - 2023-03-25 - 19-16-16.png', '2023-03-26 05:17:08', NULL, 'public/images/a1g6SFWDnboIrwdoI33LKOAnjsRHTnPvgSMNEcWY.png'),
(16, 110, '2.png', '2023-03-26 05:23:11', NULL, 'public/images/cr2lhdUAkUcAwVLL8tkg0hO2ZytVUKsMm6iTfnJC.png'),
(17, 111, 'IMG_20230226_162137_536.jpg', '2023-03-01 07:36:47', NULL, 'public/images/lV2cQhfF8Dh7b9LE1BRgKtu20JXwbeCVxUOiJmv2.jpg'),
(18, 112, 'IMG_20230226_162137_536.jpg', '2023-03-01 07:36:47', NULL, 'public/images/lV2cQhfF8Dh7b9LE1BRgKtu20JXwbeCVxUOiJmv2.jpg'),
(19, 113, 'IMG_20230226_162137_536.jpg', '2023-03-01 07:36:47', NULL, 'public/images/lV2cQhfF8Dh7b9LE1BRgKtu20JXwbeCVxUOiJmv2.jpg'),
(20, 114, 'IMG_20230226_162137_536.jpg', '2023-03-01 07:36:47', NULL, 'public/images/lV2cQhfF8Dh7b9LE1BRgKtu20JXwbeCVxUOiJmv2.jpg'),
(21, 115, 'IMG_20230226_162137_536.jpg', '2023-03-01 07:36:47', NULL, 'public/images/lV2cQhfF8Dh7b9LE1BRgKtu20JXwbeCVxUOiJmv2.jpg'),
(22, 116, 'IMG_20230226_162137_536.jpg', '2023-03-01 07:36:47', NULL, 'public/images/lV2cQhfF8Dh7b9LE1BRgKtu20JXwbeCVxUOiJmv2.jpg'),
(23, 117, 'IMG_20230226_162137_536.jpg', '2023-03-01 07:36:47', NULL, 'public/images/lV2cQhfF8Dh7b9LE1BRgKtu20JXwbeCVxUOiJmv2.jpg'),
(24, 118, 'IMG_20230226_162137_536.jpg', '2023-03-01 07:36:47', NULL, 'public/images/lV2cQhfF8Dh7b9LE1BRgKtu20JXwbeCVxUOiJmv2.jpg'),
(25, 119, 'IMG_20230226_162137_536.jpg', '2023-03-01 07:36:47', NULL, 'public/images/lV2cQhfF8Dh7b9LE1BRgKtu20JXwbeCVxUOiJmv2.jpg'),
(26, 120, 'IMG_20230226_162137_536.jpg', '2023-03-01 07:36:47', NULL, 'public/images/lV2cQhfF8Dh7b9LE1BRgKtu20JXwbeCVxUOiJmv2.jpg'),
(27, 121, 'IMG_20230226_162137_536.jpg', '2023-03-01 07:36:47', NULL, 'public/images/lV2cQhfF8Dh7b9LE1BRgKtu20JXwbeCVxUOiJmv2.jpg'),
(28, 122, 'IMG_20230226_162137_536.jpg', '2023-03-01 07:36:47', NULL, 'public/images/lV2cQhfF8Dh7b9LE1BRgKtu20JXwbeCVxUOiJmv2.jpg'),
(29, 123, 'IMG_20230226_162137_536.jpg', '2023-03-01 07:36:47', NULL, 'public/images/lV2cQhfF8Dh7b9LE1BRgKtu20JXwbeCVxUOiJmv2.jpg'),
(30, 122, 'IMG_20230226_162137_536.jpg', '2023-03-01 07:36:47', NULL, 'public/images/lV2cQhfF8Dh7b9LE1BRgKtu20JXwbeCVxUOiJmv2.jpg'),
(31, 110, '2.png', '2023-03-26 06:52:10', NULL, 'public/images/hfvPQ8sqGnhIkDlRhLpk3DWg0rLTi3AvIbNXQ1jO.png'),
(32, 110, '6.png', '2023-03-26 13:22:05', NULL, 'public/images/ovoDNKtT9HXnnUesoSWFmJicFDUxl7fEBx1HHles.png'),
(33, 110, '16.png', '2023-03-26 14:47:50', NULL, 'public/images/wL2QbE3Oui80ftE2NeIzZXsXco21fgx2OG4RqtKv.png'),
(34, 110, '16.png', '2023-03-26 15:04:54', NULL, 'public/images/b2e6Tyoe9scuDj0jfDWBX9AwhMIbEh9wypHtxqlX.png'),
(35, 110, 'IMG-20230326-WA0030.jpg', '2023-03-26 15:29:47', NULL, 'public/images/H8afqPQgQZolbRxNk7r6M6nTiC5fnXOnwwLenw5M.jpg'),
(36, 110, 'istockphoto.jpg', '2023-03-27 08:01:02', NULL, 'public/images/9HDHltY1yVWdpKzQFGogtbtDzpwIwOYHifQaFEWS.jpg'),
(37, 110, 'istockphoto.jpg', '2023-03-27 08:01:28', NULL, 'public/images/4s1xt2hrAZdUiEPmpXSgAP1RDMDyGmtnNbCEjLTp.jpg'),
(38, 110, 'IMG-20230327-WA0001.jpg', '2023-03-27 08:22:20', NULL, 'public/images/5qxftLXRQBWOEU5yAYhcCp8qPliTVb6t93pP5vL8.jpg'),
(39, 110, 'IMG-20230327-WA0000.jpg', '2023-03-27 08:23:22', NULL, 'public/images/aQLSbn13zXbc9Q5zjsW7S7fFz78lSc78BzCe29bC.jpg'),
(40, 110, 'IMG-20230326-WA0015.jpg', '2023-03-27 13:03:28', NULL, 'public/images/q2215tfL7nXqXs0kgJvIPgAhvPXNDOGLlQnjhwpQ.jpg'),
(41, 139, 'IMG-20230326-WA0014.jpg', '2023-03-27 14:06:44', NULL, 'public/images/r7AzFQCpaCjQhxse4WKYkHE4uInQG6Utnk4ZFvDN.jpg'),
(42, 139, 'IMG-20230327-WA0000.jpg', '2023-03-27 14:07:39', NULL, 'public/images/Q3F1dSXIKVMU7kdTIq5WPIjDVX3qe1xJKVnt8CTY.jpg'),
(43, 139, 'IMG-20230327-WA0001.jpg', '2023-03-27 14:14:48', NULL, 'public/images/eMgXNx1CGmCPhCBjxUlZezk1KqhG5so4zkd9yPof.jpg'),
(44, 139, 'Screenshot_2023-03-26-21-35-29-38.png', '2023-03-27 14:20:54', NULL, 'public/images/4GB0yxJBt6pOlG9BYeLQGKNA8Gq3HsZK9wqeB4cf.png'),
(45, 139, 'IMG20230327172517.jpg', '2023-03-27 14:27:18', NULL, 'public/images/nHg1fPxcfQByO8BTdY5zDkaP9K4JacA8T1yH7a5R.jpg'),
(46, 139, 'IMG-20230326-WA0016.jpg', '2023-03-27 14:56:51', NULL, 'public/images/vtAcR9rl83uDlVa84PFBRv2WKBZuajcLV4Wqr93o.jpg'),
(47, 139, 'IMG-20230328-WA0000.jpg', '2023-03-28 01:31:53', NULL, 'public/images/n8ujVzAJxQYGsq5PwdGaU0MDR354UPNEMpZY2liC.jpg'),
(48, 139, 'Screenshot_2023-03-27-22-32-32-76.png', '2023-03-28 01:32:53', NULL, 'public/images/O9NRjd4CX8JP67KUg3j6kcbkAgXg2TEbLXXq3UL5.png'),
(49, 140, 'IMG-20230328-WA0000.jpg', '2023-03-28 02:08:34', NULL, 'public/images/zyExbzKqcj2HIEzzgQLZ8p2dvjxLydc9cGD7Po3I.jpg'),
(50, 140, 'Screenshot_2023-03-26-21-35-29-38.png', '2023-03-28 02:09:41', NULL, 'public/images/E7cyAqz6Ee3ejG6SkJ3ScEhDGAHDnePqKoOfokSU.png'),
(51, 143, 'IMG-20230322-WA0014.jpg', '2023-03-28 03:43:29', NULL, 'public/images/u1vurkumC7G3pGXaiwQsUiFWNEDHmkUXUIp5c0Vp.jpg'),
(52, 143, 'Screenshot_2023-03-28-11-54-50-52.png', '2023-03-28 04:06:26', NULL, 'public/images/lxVqXXRxkPn5ZiG1eLrovVHpWSp1692TPTM1qrVN.png'),
(53, 143, 'Screenshot_2023-03-28-11-52-42-23.png', '2023-03-28 04:08:56', NULL, 'public/images/t3sVi2K8sEBDD5tnSvw8CV413dybNKL5Iy88c60G.png'),
(54, 143, 'IMG-20230328-WA0000.jpg', '2023-03-28 04:11:26', NULL, 'public/images/VcFgCyNUMVLJlpHtDtJBmxCdiD8XEOvJncQssfem.jpg'),
(55, 143, 'IMG-20230328-WA0004.jpeg', '2023-03-28 04:15:03', NULL, 'public/images/T4vq7qOircIboh5zXOSuhpmfxFlIp9Zl8pUG4zKp.jpg'),
(56, 143, 'Screenshot_2023-03-27-22-32-32-76.png', '2023-03-28 04:52:37', NULL, 'public/images/q4iNFlUt6eVsSZSgyZ6WjZWb0dKWGrMtcAwHqT4k.png'),
(57, 143, 'Screenshot_2023-03-26-00-29-55-34.png', '2023-03-28 05:07:21', NULL, 'public/images/fjrvOWE5uLgYdQwhHmWLlwgYeDSqkg5XHAv0n2aO.png'),
(58, 146, 'IMG-20230311-WA0043.jpg', '2023-03-29 06:48:02', NULL, 'public/images/EIBPtw4uv8VEw02E425F4QRvXy5dDbatz88hPlza.jpg'),
(59, 146, 'IMG-20230329-WA0009.jpg', '2023-03-29 06:49:34', NULL, 'public/images/UOoo2Tky1V7F0iq1muEa6Ugx0bVJGpoHlMGJ03P9.jpg'),
(60, 148, 'Image-7075.jpg', '2023-03-29 08:10:39', NULL, 'public/images/nc3Vn4Qn1j5RibMTgDMZ76mipjInnnTTGUZjCoYE.jpg'),
(61, 148, 'Image-7075.jpg', '2023-03-29 08:10:46', NULL, 'public/images/dwHKVHMIpJE1H9xkUBfX6NZwGelBLeYQI3GhZwMQ.jpg'),
(62, 148, 'Image-7075.jpg', '2023-03-29 08:10:50', NULL, 'public/images/n0LZCO05U51BTdtny4EvV6LDWE0DVNtru80aXws6.jpg'),
(63, 145, 'IMG-20230314-WA0527-removebg-preview (1).png', '2023-03-29 08:53:04', NULL, 'public/images/dqecCvbUeBqBTybqPFr0O3gFmsMXIfvIA5VZJacU.png'),
(64, 145, 'FB_IMG_1680080815196.jpg', '2023-03-29 08:54:53', NULL, 'public/images/A8lIozCIAVsQqAA6q7zhymIvOVLTLNMx8KIjx6zM.jpg'),
(65, 145, 'IMG_20230328_194954.jpg', '2023-03-29 09:01:16', NULL, 'public/images/evY0WxVVMrwtu5dTYzfP1XXcIHxNtMpmrQ3acO14.jpg'),
(66, 148, 'Autumn_73.webp', '2023-03-29 09:02:38', NULL, 'public/images/bkQbUZbCa3AikEWNPSTxLW04LwTtwJCvInU2QSIR.webp'),
(67, 149, 'IMG-20230314-WA0527-removebg-preview (1).png', '2023-03-29 19:40:08', NULL, 'public/images/j1l7PFj6UclUrAIdQJzvJ6bw2T35HZUEgcAmgpVi.png'),
(68, 149, 'FB_IMG_1680080815196.jpg', '2023-03-29 19:40:55', NULL, 'public/images/mVMpBLsOirbukZDeQwZo2FEXQ36KiXEpNNc2tDZB.jpg'),
(69, 148, 'Title (5).jpg', '2023-03-30 01:23:29', NULL, 'public/images/6b0b2WEiu7q2UuSY4gsPvH2DE9alEN87vAP4kZhC.jpg'),
(70, 148, '1677234560832.png', '2023-03-30 01:30:23', NULL, 'public/images/vdJkh8Xzl7MhHuectzGJKBTREzWmGD1WEyBxjeSf.png'),
(71, 151, 'IMG-20230330-WA0017.jpeg', '2023-03-30 03:40:03', NULL, 'public/images/Zw83Wzfak2pZwqfKrWTZaydHq5M63zsZHcmcHAHi.jpg'),
(72, 2, 'FB_IMG_1680080815196.jpg', '2023-03-30 07:57:13', NULL, 'public/images/Dcw9RkRpmnWMB8XvA49rThIJtw0k9xEx05ee1KFE.jpg'),
(73, 3, 'FB_IMG_1680080815196.jpg', '2023-03-30 08:24:55', NULL, 'public/images/tVizaHc1YC9z0E3YtzSEfDEsWPTKH1XXmDtjVuF7.jpg'),
(74, 3, 'Snapchat-1702352953.jpg', '2023-03-30 08:25:50', NULL, 'public/images/NzDjFmNqGwdMKhVtPNiAMdlWyKkuTdAGkgK9Excq.jpg'),
(75, 1, 'IMG-20230401-WA0011.jpg', '2023-04-01 06:01:48', NULL, 'public/images/wQjCTfUi8yJDg8XPPI3KXc1vJWSBKaqHlOhacYwt.jpg'),
(76, 1, 'IMG-20230401-WA0003.jpg', '2023-04-01 06:59:39', NULL, 'public/images/2uzAsu35CJGifMxMdPzzxFpYpuW8d65AK9PgfNgz.jpg'),
(77, 1, 'IMG-20230331-WA0022.jpg', '2023-04-01 07:00:00', NULL, 'public/images/fGEaBiX786p3P0hX1Lb1kvYpr1DRxP90xY1gLq9e.jpg'),
(78, 1, 'IMG-20230331-WA0024.jpg', '2023-04-01 07:06:27', NULL, 'public/images/dYye4egByF6AdVmS3IRJZTx3Ig8ddvCYOj9KG6By.jpg'),
(79, 1, 'IMG-20230331-WA0018.jpg', '2023-04-01 07:06:35', NULL, 'public/images/CIe7ek2obl7KR0aLNXrlCZVofce4zX13CFPw1CyD.jpg'),
(80, 1, 'IMG-20230330-WA0080.jpg', '2023-04-01 07:06:50', NULL, 'public/images/oHQn0ZF6fegSHQr1nqjhm8hVMQ9YL2juFrKdT3hs.jpg'),
(81, 1, 'IMG-20230402-WA0003.jpg', '2023-04-02 05:36:17', NULL, 'public/images/5yllMvBdDyXHjROj8UMMJvL6Q4k8MZYUstfE1nKn.jpg'),
(82, 1, 'IMG-20230331-WA0015.jpg', '2023-04-02 05:36:33', NULL, 'public/images/hbMD8qO37I59EXrg05oV3XIhrCj2OFbKs3ons4zF.jpg'),
(83, 1, 'IMG-20230330-WA0081.jpg', '2023-04-02 05:36:47', NULL, 'public/images/dlO4xLoMp0AdKKfGB3c9bAIlmhu7jp48UugKfksr.jpg'),
(84, 1, 'IMG-20230402-WA0018.jpg', '2023-04-03 03:39:32', NULL, 'public/images/jajQFC1p9SAQyteoHnUsnRmcXZP4R1awh5FYeb1g.jpg'),
(85, 1, 'IMG-20230402-WA0014.jpg', '2023-04-03 03:43:25', NULL, 'public/images/a5I3FrNnsCpPhruF9CFheaT0MI29tfGvc3aGOID4.jpg'),
(86, 1, 'IMG-20230402-WA0006.jpg', '2023-04-03 03:48:23', NULL, 'public/images/UrBnOC3nNjFExBdRx1oUcipfA6yEqAnlmdgC8NAm.jpg'),
(87, 1, 'IMG-20230402-WA0006.jpg', '2023-04-03 04:14:53', NULL, 'public/images/5n4X8q1V1973HovwGFEl7Y46QRuUBxYwXdAMexeb.jpg'),
(88, 9, 'Screenshot_2023-04-07-23-13-12-98.png', '2023-04-08 01:48:52', NULL, 'public/images/NUnm0poLbt3E1jUeOf3tjIYYZIx7oW0OnSoXOzOj.png'),
(89, 9, 'Screenshot_2023-04-07-23-10-26-40.png', '2023-04-08 01:56:14', NULL, 'public/images/SdeBNMZPMOkcp4ZyF1U98hQcJernGMp9xFvipGLV.png'),
(90, 9, 'IMG-20230407-WA0021.jpg', '2023-04-08 02:09:35', NULL, 'public/images/dYbL36FjSfCYJF3IgREuKv8otcSLvTHykequKjOx.jpg'),
(91, 9, 'IMG-20230407-WA0004.jpg', '2023-04-08 02:45:06', NULL, 'public/images/elYLUdUbfPOQx39ClrUqCkNTfJtaSegZQZrm8xmE.jpg'),
(92, 9, 'Screenshot_2023-04-07-23-13-02-90.png', '2023-04-08 02:49:12', NULL, 'public/images/5vwiIPfjj3jkwWDtANGw4sSqpzkbRlLJECTpWb9J.png'),
(93, 9, 'Screenshot_2023-04-07-23-13-02-90.png', '2023-04-08 03:01:54', NULL, 'public/images/rShwaCrPNClJvm48qj8QE1NkWCRhlawavcJaDFmW.png'),
(94, 9, 'Screenshot_2023-04-07-23-13-02-90.png', '2023-04-08 03:07:37', NULL, 'public/images/DGyfRhNM096MewZnhMakn3JeNcQgSW38DDR8coQi.png'),
(95, 9, 'Screenshot_2023-04-07-23-13-02-90.png', '2023-04-08 03:25:51', NULL, 'public/images/Cx32TIdSJYlRF6SUZPLL69ahzYj0PEAsIWgxcskN.png'),
(96, 9, 'Screenshot_2023-04-07-23-13-02-90.png', '2023-04-08 03:39:16', NULL, 'public/images/04gOH5Fks8dreImQqneqix3TGHTO7lanAcPCQKUe.png'),
(97, 9, 'IMG-20230407-WA0021.jpg', '2023-04-08 03:41:49', NULL, 'public/images/iHuIOEgvIHiPXjxJ4upa0d3IHWHkUDOI2JKO3Nkw.jpg'),
(98, 9, 'IMG-20230406-WA0008.jpg', '2023-04-08 04:11:54', NULL, 'public/images/S1QCtFGjCLo9Uz26oaeREyzdaUnf1yypQg5OfOAq.jpg'),
(99, 7, '3.jpg', '2023-04-08 04:12:22', NULL, 'public/images/0Fxs8xw78SDHyytPNpo6kdXmus9C9pmlniEE3f2v.jpg'),
(100, 7, 'Antigona.jpg', '2023-04-08 04:14:41', NULL, 'public/images/AU4DmJSnqre0MddVYVMrY1MTmSC0dPp7XaYt6jno.jpg'),
(101, 9, 'IMG-20230407-WA0004.jpg', '2023-04-08 04:17:52', NULL, 'public/images/cXO4O2SbxrrOjH8OFVOFcuHiNCbpvArrvNBkLSre.jpg'),
(102, 9, 'IMG-20230407-WA0021.jpg', '2023-04-08 04:18:29', NULL, 'public/images/SiNykbtawIKV5CwOvvCqhwKcve5SH3OmsavMIxGw.jpg'),
(103, 9, 'IMG-20230407-WA0007.jpg', '2023-04-08 04:22:39', NULL, 'public/images/hjrE0HjgaiLmrcDUlHhpHTfrMoNUJ5VwmVT7mQbz.jpg'),
(104, 9, 'IMG-20230408-WA0004.jpeg', '2023-04-08 04:23:26', NULL, 'public/images/FrEho65z2rw1VXB9h0ne0aFCfHZvH5YyiASF9dXh.jpg'),
(105, 7, 'country.png', '2023-04-08 04:57:50', NULL, 'public/images/XUgK539U3h7Cxd3v5KZmFgOVXPtXfaRbi7AIGsaK.png'),
(106, 9, 'IMG-20230408-WA0004.jpeg', '2023-04-08 04:59:41', NULL, 'public/images/zoNkHYZiQZHSOHBSGBgcPUd4RQ4aDQheTmX0PmNA.jpg'),
(107, 9, 'country.png', '2023-04-08 05:00:53', NULL, 'public/images/KGCH2JYCjaSSWeITGF4QUSzBCQKMQAY5UBhAcYga.png'),
(108, 7, '1.png', '2023-04-08 05:03:16', NULL, 'public/images/RufJ5WBqs8xHRQSD5XKAsaIrUMnLQrP51QKLahwg.png'),
(109, 7, 'istockphoto.jpg', '2023-04-08 05:04:16', NULL, 'public/images/MmZenJGhMvimf37gVjNl2FNRc2kjOCijxpDpaTTx.jpg'),
(110, 1, 'WhatsApp Image 2023-04-02 at 6.04.43 PM.jpeg', '2023-04-08 06:50:34', NULL, 'public/images/29pmADNHdFaGv7US8reRR4YSt8uJdYMQi0C7m3go.jpg'),
(111, 5, 'IMG-20230408-WA0001.jpg', '2023-04-08 07:05:37', NULL, 'public/images/XCa0oohywr1KeMZCbqoVmRqUE6IuwLW5EwsxUJHQ.jpg'),
(112, 5, 'IMG-20230408-WA0001.jpg', '2023-04-08 07:05:44', NULL, 'public/images/IXP4qj0LVNAh5J0fJMjGHoYCFY4OcVfleCcsvXB4.jpg'),
(113, 5, 'Title (5).jpg', '2023-04-08 07:30:36', NULL, 'public/images/Q1cguPHSODaWdeSU6WWA1LkMkIVCPbhZNYghXwJJ.jpg'),
(114, 9, 'Screenshot_2023-04-06-00-28-43-56.png', '2023-04-08 07:57:15', NULL, 'public/images/03ojNn1je31x0Xa46hKrbhz0WSN2aeIvom7iutd0.png'),
(115, 16, 'WhatsApp Image 2023-06-02 at 9.49.09 AM.jpeg', '2023-06-09 07:32:08', NULL, NULL),
(116, 16, 'WhatsApp Image 2023-06-02 at 9.49.09 AM.jpeg', '2023-06-09 07:43:42', NULL, NULL),
(117, 16, 'yw.jpg', '2023-06-09 07:43:47', NULL, NULL),
(118, 20, 'IMG-20230621-WA0000.jpg', '2023-06-21 03:47:03', NULL, NULL),
(119, 46, 'IMG_20230705_214113.jpg', '2023-07-06 08:46:53', NULL, NULL),
(120, 16, 'WhatsApp Image 2023-06-02 at 9.49.09 AM.jpeg', '2023-07-20 01:03:44', NULL, NULL),
(121, 100, 'IMG_1692010898100.jpg', '2023-08-14 07:08:11', NULL, NULL),
(122, 3, 'IMG_20230815_172250.jpg', '2023-08-17 15:42:35', NULL, NULL),
(123, 114, 'IMG-20230817-WA0000.jpg', '2023-08-17 15:43:08', NULL, NULL),
(124, 114, 'IMG-20230817-WA0000.jpg', '2023-08-17 15:43:16', NULL, NULL),
(125, 3, 'IMG_20230815_172250.jpg', '2023-08-17 15:44:52', NULL, NULL),
(126, 114, 'IMG-20230817-WA0000.jpg', '2023-08-18 06:31:02', NULL, NULL),
(127, 100, 'Screenshot_2023-08-22-22-14-17-13_6012fa4d4ddec268fc5c7112cbb265e7.jpg', '2023-08-23 01:32:14', NULL, NULL),
(128, 156, 'Screenshot_2023-08-24-15-48-42-55_f541918c7893c52dbd1ee5d319333948.jpg', '2023-08-28 22:36:21', NULL, NULL),
(131, 158, '1693303942_image_2023_08_25T05_26_39_801Z.png', '2023-08-29 06:12:22', NULL, NULL),
(133, 158, '1693304043_Screenshot_20230828-175048.png', '2023-08-29 06:14:03', NULL, NULL),
(134, 158, '1693304094_IMG_1693216630721.jpg', '2023-08-29 06:14:54', NULL, NULL),
(135, 158, '1693304988_image_2023_08_25T05_26_39_801Z.png', '2023-08-29 06:29:48', NULL, NULL),
(136, 159, '1693309939_IMG_1693309623586.jpg', '2023-08-29 07:52:19', NULL, NULL),
(137, 160, '1693313208_IMG_1693309623586.jpg', '2023-08-29 08:46:48', NULL, NULL),
(138, 160, '', '2023-08-29 08:48:38', NULL, NULL),
(139, 160, '', '2023-08-29 08:50:41', NULL, NULL),
(140, 156, '', '2023-08-29 09:13:57', NULL, NULL),
(141, 163, '1693457634_IMG_1693456531792.jpg', '2023-08-31 00:53:54', NULL, NULL),
(142, 163, '1693457808_images (17).jpeg', '2023-08-31 00:56:48', NULL, NULL),
(143, 163, '1693457834_images (15).jpeg', '2023-08-31 00:57:14', NULL, NULL),
(144, 163, '1693458800_IMG-20230830-WA0011.jpg', '2023-08-31 01:13:20', NULL, NULL),
(145, 163, '', '2023-08-31 01:36:24', NULL, NULL),
(146, 163, '1693460218_dummy_poker.jpg', '2023-08-31 01:36:58', NULL, NULL),
(147, 163, '', '2023-08-31 01:57:02', NULL, NULL),
(148, 163, '1693461546_IMG-20230829-WA0010.jpg', '2023-08-31 01:59:06', NULL, NULL),
(149, 164, '1693466501_IMG_1693465594889.jpg', '2023-08-31 03:21:41', NULL, NULL),
(150, 165, '1693468221_images (17).jpeg', '2023-08-31 03:50:21', NULL, NULL),
(151, 158, '1693472492_fernando-hernandez-lVuV7AcfOrY-unsplash.jpg', '2023-08-31 05:01:32', NULL, NULL),
(152, 165, '1693473181_Screenshot_20230828-175040.png', '2023-08-31 05:13:01', NULL, NULL),
(153, 165, '1693475345_images (15).jpeg', '2023-08-31 05:49:05', NULL, NULL),
(154, 166, '1693477513_Screenshot_2023-08-31-14-17-37-23_70ac116ce739e36060f211aa22982eed.jpg', '2023-08-31 06:25:13', NULL, NULL),
(155, 166, '1693479871_portrait-brown-eyes-smiling-dana-kareglazaya-wallpaper-preview.jpg', '2023-08-31 07:04:31', NULL, NULL),
(156, 168, '1693481087_02840fa9a912465cbf38cfb9a2e9bc84.jpeg', '2023-08-31 07:24:47', NULL, NULL),
(157, 168, '1693481092_portrait-brown-eyes-smiling-dana-kareglazaya-wallpaper-preview.jpg', '2023-08-31 07:24:52', NULL, NULL),
(158, 173, '1693587946_portrait-brown-eyes-smiling-dana-kareglazaya-wallpaper-preview.jpg', '2023-09-01 13:05:46', NULL, NULL),
(159, 173, '1693587952_02840fa9a912465cbf38cfb9a2e9bc84.jpeg', '2023-09-01 13:05:52', NULL, NULL),
(160, 181, '1695033260_IMG_1695033122105.jpg', '2023-09-18 06:34:20', NULL, NULL),
(161, 180, '1695034306_IMG_20230915_172501.jpg', '2023-09-18 06:51:46', NULL, NULL),
(162, 183, '1695385255_images (22).jpeg', '2023-09-22 08:20:55', NULL, NULL),
(163, 210, '1697636677_IMG-20231018-WA0017.jpg', '2023-10-18 09:44:37', NULL, NULL),
(164, 210, '1697636708_IMG-20231018-WA0001.jpeg', '2023-10-18 09:45:08', NULL, NULL),
(165, 211, '1697736995_IMG-20231018-WA0043.jpg', '2023-10-19 13:36:35', NULL, NULL),
(166, 211, '1697737042_IMG-20231018-WA0038.jpg', '2023-10-19 13:37:22', NULL, NULL),
(167, 211, '1697737087_IMG-20231001-WA0000.jpg', '2023-10-19 13:38:07', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_logins_email_unique` (`email`);

--
-- Indexes for table `blocked_users`
--
ALTER TABLE `blocked_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `friend_likes`
--
ALTER TABLE `friend_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend_requests`
--
ALTER TABLE `friend_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_requests`
--
ALTER TABLE `message_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
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
-- Indexes for table `profile_verification`
--
ALTER TABLE `profile_verification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reported_user`
--
ALTER TABLE `reported_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_messages`
--
ALTER TABLE `support_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_image`
--
ALTER TABLE `user_image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blocked_users`
--
ALTER TABLE `blocked_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=386;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friend_likes`
--
ALTER TABLE `friend_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `friend_requests`
--
ALTER TABLE `friend_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `message_requests`
--
ALTER TABLE `message_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=339;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `profile_verification`
--
ALTER TABLE `profile_verification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `reported_user`
--
ALTER TABLE `reported_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_messages`
--
ALTER TABLE `support_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `user_image`
--
ALTER TABLE `user_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
