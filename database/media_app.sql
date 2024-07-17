-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2024 at 07:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `media_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_26_020523_create_products_table', 1),
(5, '2024_05_03_045759_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_product` int(11) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `category`, `type`, `group`, `quantity`, `notes`, `created_at`, `updated_at`) VALUES
(1, 'คู่มือสื่อสารความเสี่ยงโรคและภัยสุขภาพในภาวะวิกฤต (สำหรับเจ้าหน้าที่)', 'product/QRum4YtSKl5hrnyyVlls3A1ZZRTtD5yDQdBgRWqT.png', 'สื่อสารฯ', 'หนังสือ/คู่มือ', 'กลุ่มสื่อสารฯ', 15, NULL, '2024-07-16 04:01:43', '2024-07-16 04:01:43'),
(2, 'คู่มือการตรวจประเมินสื่อสารความเสี่ยง ตามเกณฑ์กฎอนามัยระหว่างประเทศ JEE - IHR 2005', 'product/1q62Ecd1Jcjh7pU496yI0PWXKzshV6DV0Kae7rf7.png', 'สื่อสารฯ', 'หนังสือ/คู่มือ', 'กลุ่มสื่อสารฯ', 20, NULL, '2024-07-16 04:53:55', '2024-07-16 04:53:55'),
(3, 'ประเด็นสื่อสารหลักเพื่อความรอบรู้ด้านสุขภาพ ในการป้องกันควบคุมโรคและภัยสุขภาพ (ฉบับประชาชน)', 'product/6bn434sxvAKKWCNcoq5TJDiUpmLlVHbVnIihIFU0.png', 'สื่อสารฯ', 'หนังสือ/คู่มือ', 'กลุ่มสื่อสารฯ', 50, NULL, '2024-07-16 04:55:01', '2024-07-16 04:55:01'),
(4, 'ข้้อแนะนำเพื่อป้องกันอุบัติภัยทางน้ำ การจมน้ำ ในช่วงพายุ น้ำไหลหลาก', 'product/nlhKOVqbGjrD19BFiPB6uNxXENitjYip71NiB53H.png', 'โรคจากการประกอบอาชีพและสิ่งแวดล้อม', 'แผ่นพับ', 'กลุ่มสื่อสารฯ', 3, NULL, '2024-07-16 04:56:04', '2024-07-16 04:56:04'),
(5, 'คู่มือสำหรับประชาชนและเครือข่าย เรื่องการป้องกันโรคและภัยสุขภาพในภาวะ น้ำท่วม', 'product/8YVrLnlw1eGdQmjXPv2Ey6en2otZETouHIYUd2eL.png', 'โรคติดต่อทั่วไป', 'แผ่นพับ', 'กลุ่มสื่อสารฯ', 100, NULL, '2024-07-16 04:57:20', '2024-07-16 04:57:20'),
(6, 'การป้องกันอันตรายจาก ไฟฟ้าดูด ไฟฟ้าช๊อต', 'product/BmCIkTmX1NurqC7L8G58pMC3aeTqlXAjIHbLZYqM.png', 'โรคจากการประกอบอาชีพและสิ่งแวดล้อม', 'แผ่นพับ', 'กลุ่มสื่อสารฯ', 3, NULL, '2024-07-16 04:58:33', '2024-07-16 04:58:33'),
(7, 'รู้แล้ว รู้โรค 100 คำถาม / คำตอบ', 'product/9J6S3Za5BngZrAFE2uFNyPxHXdn3FjrwLKsIshk0.png', 'สื่อสารฯ', 'หนังสือ/คู่มือ', 'กลุ่มสื่อสารฯ', 200, NULL, '2024-07-16 04:59:44', '2024-07-16 04:59:44'),
(8, 'นอนในมุ้งชุบน้ำยา', 'product/klzmKIYx2oB5dVCoiKWE7qVja9zt0Fm7vDlsJAII.png', 'โรคติดต่อนำโดยแมลง', 'โปสเตอร์', 'กลุ่มสื่อสารฯ', 200, NULL, '2024-07-16 05:00:43', '2024-07-16 05:00:43'),
(9, 'รู้ไหมว่า...กฎหมาย EnvOcc คืออะไร ?', 'product/KiRgNCSXR1kSbAQvKEZYq4iSWSAhobvlqGdCWS5z.png', 'โรคจากการประกอบอาชีพ', 'หนังสือ/คู่มือ', 'กลุ่มสื่อสารฯ', 50, NULL, '2024-07-16 05:01:36', '2024-07-16 05:01:36'),
(10, 'ไขข้อข้องใจ เปรียบเทียบปรับอย่างไร ให้ถูกกฎหมายโรคติดต่อ', 'product/sSgdt3zXnrPTD93yGiOhGyX6mBGQceK5NNmowx18.png', 'โรคติดต่อ', 'หนังสือ/คู่มือ', 'กลุ่มสื่อสารฯ', 50, NULL, '2024-07-16 05:02:36', '2024-07-16 05:02:36'),
(11, 'คู่มือความรู้เรื่องโรคติดต่อสำคัญในเรือนจำ สำหรับผู้ต้องขัง', 'product/aRlVGFCucQV7DuR0fxGouIUGjLOXQDtLxNGL60JZ.png', 'โรคติดต่อ', 'หนังสือ/คู่มือ', 'กลุ่มสื่อสารฯ', 100, NULL, '2024-07-16 05:03:26', '2024-07-16 05:03:26'),
(12, 'คาถา 5ย ป้องกันสุนัขกัด', 'product/MK6zjsExawUZDykDElnXoacbcXnN0sGCXbLWoQcd.png', 'โรคติดต่อ', 'โปสเตอร์', 'กลุ่มสื่อสารฯ', 200, NULL, '2024-07-16 05:04:34', '2024-07-16 05:04:34'),
(13, 'โรคพิษสุนัขบ้า ภาษาไทย 01', 'product/pQT9PXCwOBAYPyxYE42BUUvit6BF6BmWsFPcf75i.png', 'โรคติดต่อ', 'โปสเตอร์', 'กลุ่มสื่อสารฯ', 100, NULL, '2024-07-16 05:05:50', '2024-07-16 05:05:50'),
(14, 'โรคพิษสุนัขบ้า ภาษาไทย 02', 'product/WLdbuoVLrGbuPIobCO9RC36fHjQrslk6P7Muxti2.png', 'โรคติดต่อ', 'โปสเตอร์', 'กลุ่มสื่อสารฯ', 200, NULL, '2024-07-16 05:06:38', '2024-07-16 05:06:38'),
(15, 'โรคพิษสุนัขบ้า ภาษาพม่า 01', 'product/pByl6jlMTmAGD7zxdoK2nbJ9mOiRg8mteY8qqTFO.png', 'โรคติดต่อ', 'โปสเตอร์', 'กลุ่มสื่อสารฯ', 100, NULL, '2024-07-16 05:07:27', '2024-07-16 05:07:27'),
(16, 'โรคพิษสุนัขบ้า ภาษาพม่า 02', 'product/l1tKAUuPftBv9Q26L1ulSrq8BgmNJaouucVEkPlh.png', 'โรคติดต่อ', 'โปสเตอร์', 'กลุ่มสื่อสารฯ', 200, NULL, '2024-07-16 05:08:36', '2024-07-16 05:08:36'),
(17, 'สื่อความรู้เรื่องการป้องกันควบคุมโรคติดต่อและภัยสุขภาพสำคัญ ตามโครงการราชทัณฑ์ปันสุข ทำความดี เพื่อชาติ ศาสน์ กษัตริย์ กรมควบคุมโรค', 'product/xVFfPDH65IJphU2prU5Uz3qyvOJ1gigdTybN0nnl.png', 'โรคติดต่อ', 'หนังสือ/คู่มือ', 'กลุ่มสื่อสารฯ', 240, NULL, '2024-07-16 05:09:47', '2024-07-16 05:09:47'),
(18, 'การป้องกันควบคุมโรคติดต่อและภัยสุขภาพ ตามโครงการพระราชดำริ โครงการเฉลิมพระเกียรติ และโครงการที่เกี่ยวเนื่องกับพระบรมวงศานุวงค์', 'product/y2MT6fcKFIOuPuV2Hat8wd7RvyXYedt57Rfy7grE.png', 'โรคติดต่อ', 'หนังสือ/คู่มือ', 'กลุ่มสื่อสารฯ', 30, NULL, '2024-07-16 05:10:55', '2024-07-16 05:10:55'),
(19, 'โรคพิษสุนัขบ้า', 'product/tYp0U0o99SVwAr43H139YOAsCmlNm9fOxYeesg8b.png', 'โรคติดต่อ', 'แผ่นพับ/ใบปลิว', 'กลุ่มสื่อสารฯ', 1900, NULL, '2024-07-16 05:12:01', '2024-07-16 05:13:02'),
(20, 'แผ่นปลิว New normal ชีวิตวิถีใหม่', 'product/tDAGgSllZEsYb6KwiNL5lHGcuPMfiTR6WuBvjwKe.png', 'โควิด-19', 'โปสเตอร์', 'กลุ่มสื่อสารฯ', 100, NULL, '2024-07-16 05:13:54', '2024-07-16 05:13:54'),
(21, 'หนังสือความรู้เรื่องโควิด-19', 'product/jfluQRWVkKS4bG8qSdFqUynVIgnvWnMePj0QsnA8.png', 'โควิด-19', 'หนังสือ/คู่มือ', 'กลุ่มสื่อสารฯ', 400, NULL, '2024-07-16 05:17:36', '2024-07-16 05:17:36'),
(22, 'คู่มือความรู้เรื่องโรคโควิด-19  สำหรับผู้ต้องหาในเรือนจำ', 'product/bBsXB5QCx4wl2MRBvYxA5Moe4tnb7fZpR6hWRwd5.png', 'โควิด-19', 'หนังสือ/คู่มือ', 'กลุ่มสื่อสารฯ', 200, NULL, '2024-07-16 05:18:46', '2024-07-16 05:18:46'),
(23, 'การ์ตูนรู้ทันโควิด', 'product/ejid7wuvWhom7T6PwSubMhW1NWIXPGcYs1IZxOJk.png', 'โควิด-19', 'หนังสือ/คู่มือ', 'กลุ่มสื่อสารฯ', 100, NULL, '2024-07-16 05:19:40', '2024-07-16 05:19:40'),
(24, 'โปสเตอร์โรงงานห่างไกลโควิด ภาษาพม่า', 'product/jcBNqXYcLEj89tAxPZWgyO9yKSplKmvpSrS6qWY4.png', 'โควิด-19', 'โปสเตอร์', 'กลุ่มสื่อสารฯ', 800, NULL, '2024-07-16 05:20:38', '2024-07-16 05:20:38'),
(25, 'โปสเตอร์โรงงานห่างไกลโควิด ภาษาไทย', 'product/IohDQSpEvYk9YSnvQf7eYDuPZ7bEfV17iVNuBRDk.png', 'โควิด-19', 'โปสเตอร์', 'กลุ่มสื่อสารฯ', 400, NULL, '2024-07-16 05:21:46', '2024-07-16 05:21:46'),
(26, 'ภาษาพม่า', 'product/nOMJDtBXioRhTLMsuxHf7Mfes7LEmncwHd33lzmL.png', 'โควิด-19', 'โปสเตอร์', 'กลุ่มสื่อสารฯ', 1000, NULL, '2024-07-16 05:23:10', '2024-07-16 05:23:10'),
(27, 'บัตร 1422 ภาษาอังกฤษ', 'product/OfqVyf196lJhRjSIKrkBZikmy4Fx4OsfoFHApmUQ.png', 'โควิด-19', 'บัตร', 'กลุ่มสื่อสารฯ', 7000, NULL, '2024-07-16 05:24:02', '2024-07-16 05:24:02'),
(28, 'บัตร 1422 ภาษาลาว', 'product/hAC0ucN2pAketKfIFlfJDWvEzDckTvqCrRz6gziX.png', 'โควิด-19', 'บัตร', 'กลุ่มสื่อสารฯ', 7000, NULL, '2024-07-16 05:24:47', '2024-07-16 05:24:47'),
(29, 'บัตร 1422 ภาษาจีน', 'product/H40uKP1RJtXiVA9RNPOAIzf7FCMB40D9WzdyvEvb.png', 'โควิด-19', 'บัตร', 'กลุ่มสื่อสารฯ', 7000, NULL, '2024-07-16 05:25:48', '2024-07-16 05:25:48'),
(30, 'บัตร 1422 ภาษาพม่า', 'product/SB3z832UsjBpkGbh9qFKtUvQ80JDIqmMCp7uH9aZ.png', 'โควิด-19', 'บัตร', 'กลุ่มสื่อสารฯ', 7000, NULL, '2024-07-16 05:26:33', '2024-07-16 05:26:33'),
(31, 'บัตร 1422 ภาษาเขมร', 'product/2bdr6r67f7vL2spAGGgxpcTsrCU6zxGS87xgS53u.png', 'โควิด-19', 'บัตร', 'กลุ่มสื่อสารฯ', 7000, NULL, '2024-07-16 05:27:21', '2024-07-16 05:27:21'),
(32, 'X-Stand Covid Free Setting', 'product/S2jQfO3qVaFz4UAjKB2hD4FgPvFcwSmjYCTleovC.png', 'โควิด-19', 'ไวนิล', 'กลุ่มสื่อสารฯ', 1, NULL, '2024-07-16 05:28:26', '2024-07-16 05:28:37'),
(33, 'โปสเตอร์ กักตัว 14 วันอย่างไร ให้ปลอดภัยกับคนในบ้าน', 'product/e1rGSZ1zlxcoGfl63AAc2ZZm53jHzkUpmyUCbJFX.png', 'โควิด-19', 'โปสเตอร์', 'กลุ่มสื่อสารฯ', 100, NULL, '2024-07-16 05:29:46', '2024-07-16 05:29:46'),
(34, 'จะใช้ชีวิตอย่างไร เมื่อโควิด-19 กลายเป็นโรคประจำถิ่น ภาษาไทย', 'product/NsVypeV8SoDWON4MzShFv7LHY4JFBVsWPSQRZswY.png', 'โควิด-19', 'แผ่นพับ', 'กลุ่มสื่อสารฯ', 200, NULL, '2024-07-16 05:31:04', '2024-07-16 05:31:04'),
(35, 'พร้อมเข้าสู่ชีวิตวิถีใหม่ เมื่อโควิด-19 เป็นโรคประจำถิ่น', 'product/qxIJleLdmGvVkymHYahh2SW2DgI17E9v87UcP9V8.png', 'โควิด-19', 'แผ่นพับ', 'กลุ่มสื่อสารฯ', 1350, NULL, '2024-07-16 05:31:54', '2024-07-16 05:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('b9hx1UtrmqkzQMlkMll6AGwWqERtpDYOCZhrtqO8', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMVIzYWhYRWVCMm9EWkFWNHRLYkpYS0F6aUJxZFdpUWx2akt0b09KVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NDoiY2FydCI7YToxOntpOjE7YTo0OntzOjQ6Im5hbWUiO3M6MjAxOiLguITguLnguYjguKHguLfguK3guKrguLfguYjguK3guKrguLLguKPguITguKfguLLguKHguYDguKrguLXguYjguKLguIfguYLguKPguITguYHguKXguLDguKDguLHguKLguKrguLjguILguKDguLLguJ7guYPguJnguKDguLLguKfguLDguKfguLTguIHguKTguJUgKOC4quC4s+C4q+C4o+C4seC4muC5gOC4iOC5ieC4suC4q+C4meC5ieC4suC4l+C4teC5iCkiO3M6ODoicXVhbnRpdHkiO2k6MTtzOjU6InByaWNlIjtOO3M6NToiaW1hZ2UiO3M6NTI6InByb2R1Y3QvUVJ1bTRZdFNLbDVocm55eVZsbHMzQTFaWlJUdEQ1eURRZEJnUldxVC5wbmciO319fQ==', 1721133361),
('SmhBbtkQ00NSbmPtHSkXJyswBDKsMv2cDSO2nahO', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSHJUWWxvZzBTaUN4eVJ5c2d2ZWtKSlBLTVVMVXZWV3FRUVZ3TXMwUCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1721188001);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone_og` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `phone`, `address`, `phone_og`, `organization`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ปฏิภาณ', 'ไล้ลี่', 'patipan', 'sample@mail.com', '0123456789', '123/202 ซอย 1 ถนนเพชรเกษม ตำบลหน้าเมือง อำเภอเมืองราชบุรี จังหวัดราชบุรี 70000', '0123456789', 'สำนักงานป้องกันควบคุมโรคที่ 5 จังหวัดราชบุรี', 'admin', NULL, '$2y$12$NPs7igxX3EpFSf.TFFuKwuml20yJBsfy7RyWj5YCyF6GDl6geez7C', NULL, '2024-07-16 03:49:07', '2024-07-16 03:49:07'),
(2, 'มะขาม', 'เปรี้ยวจัง', 'test01', 'test@example.com', '0123456788', '123/202 ซอย 1 ถนนเพชรเกษม ตำบลหน้าเมือง อำเภอเมืองราชบุรี จังหวัดราชบุรี 70000', '0123456789', 'สำนักงานป้องกันควบคุมโรคที่ 5 จังหวัดราชบุรี', 'user', NULL, '$2y$12$xqrNr.xDKQBaEXlwE8K9teDOEbyQ1kihdNuP3wEpsdrv1rX6hBm3K', NULL, '2024-07-16 19:46:15', '2024-07-16 19:46:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
