-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 05, 2025 at 07:17 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hris_kpknl`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('hris_kpknl_lhokseumawe_cache_admin@elaundry.com|127.0.0.1', 'i:1;', 1751102105),
('hris_kpknl_lhokseumawe_cache_admin@elaundry.com|127.0.0.1:timer', 'i:1751102105;', 1751102105);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departements`
--

CREATE TABLE `departements` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departements`
--

INSERT INTO `departements` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sumber Daya Manusia', 'Mengelola sumber daya manusia', 'active', '2025-06-20 09:27:12', '2025-06-20 09:27:12', NULL),
(2, 'Teknologi Informasi', 'Mengelola sistem informasi', 'active', '2025-06-20 09:27:12', '2025-06-20 09:27:12', NULL),
(3, 'Keuangan', 'Mengelola keuangan perusahaan', 'active', '2025-06-20 09:27:12', '2025-06-20 09:27:12', NULL),
(4, 'Humas dan Pemasaran', 'Mengelola hubungan masyarakat dan pemasaran', 'active', '2025-06-20 09:27:12', '2025-06-20 09:27:12', NULL),
(5, 'Pelayanan Lelang', 'Mengelola pelayanan lelang', 'active', '2025-06-20 09:27:12', '2025-06-20 09:27:12', NULL),
(6, 'Hukum dan Kepatuhan', 'Mengelola hukum dan kepatuhan', 'active', '2025-06-20 09:27:12', '2025-06-20 09:27:12', NULL),
(7, 'Penilaian Aset', 'Mengelola penilaian aset', 'active', '2025-06-20 09:27:12', '2025-06-20 09:27:12', NULL),
(8, 'Pengelolaan Aset', 'Mengelola pengelolaan aset', 'active', '2025-06-20 09:27:12', '2025-06-20 09:27:12', NULL),
(9, 'Pengaduan dan Informasi Publik', 'Mengelola pengaduan dan informasi publik', 'active', '2025-06-20 09:27:12', '2025-06-20 09:27:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `hire_date` date NOT NULL,
  `departement_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fullname`, `email`, `phone_number`, `address`, `birth_date`, `hire_date`, `departement_id`, `role_id`, `status`, `salary`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kemal Megantara', 'manullang.najwa@example.org', '(+62) 762 9182 272', 'Jr. K.H. Maskur No. 404, Ambon 28055, Kalteng', '2000-08-24', '2021-03-21', 3, 1, 'active', '13913281.92', '2025-06-20 09:27:12', '2025-06-20 09:27:12', NULL),
(2, 'Elvin Eluh Wacana S.Ked', 'elvin@gmail.com', '0231 6224 3985', 'Ds. Badak No. 93, Bandar Lampung 49415, DKI', '1996-07-10', '2020-10-02', 1, 5, 'active', '7445518.45', '2025-06-20 09:27:30', '2025-06-20 09:27:30', NULL),
(3, 'Garang Pradipta', 'garang@gmail.com', '(+62) 332 9047 9292', 'Dk. Barat No. 586, Tanjung Pinang 67051, Malut', '2004-05-15', '2020-12-31', 3, 4, 'unactive', '15322793.98', '2025-06-20 09:27:31', '2025-06-20 09:27:31', NULL),
(4, 'Putri Hassanah', 'putri@gmail.com', '0816 656 923', 'Jr. Uluwatu No. 656, Surabaya 23661, Bengkulu', '2003-06-06', '2024-09-24', 1, 4, 'unactive', '11440094.42', '2025-06-20 09:27:32', '2025-06-20 09:27:32', NULL),
(5, 'Latif Nasrullah Firmansyah S.Farm', 'latif@gmail.com', '021 4989 359', 'Ki. Suharso No. 542, Lubuklinggau 20091, Sulbar', '2004-09-06', '2024-10-05', 4, 2, 'unactive', '4086196.12', '2025-06-20 09:27:56', '2025-06-20 09:27:56', NULL),
(6, 'Eva Wahyuni', 'eva@gmail.com', '(+62) 362 0193 2938', 'Psr. Mahakam No. 272, Pasuruan 89620, Babel', '2006-10-13', '2022-10-06', 4, 3, 'active', '5281638.54', '2025-06-20 09:33:23', '2025-06-20 09:33:23', NULL),
(7, 'Edi Prakasa', 'edi@gmail.com', '0314 2829 2732', 'Jln. Teuku Umar No. 556, Makassar 51203, NTB', '2002-04-19', '2020-10-19', 3, 2, 'unactive', '8945348.81', '2025-06-20 09:33:25', '2025-06-20 09:33:25', NULL),
(8, 'Chandra Winarno', 'chandra@gmail.com', '0346 2709 1217', 'Jln. Tambak No. 917, Sorong 85853, Sulsel', '1998-03-07', '2023-03-30', 1, 3, 'active', '3902045.57', '2025-06-20 09:33:26', '2025-06-20 09:33:26', NULL),
(9, 'Dimas Dabukke', 'dimas@gmail.com', '0437 6778 204', 'Jln. Bakin No. 286, Pontianak 25691, Banten', '2003-08-26', '2024-11-18', 4, 2, 'active', '5233492.84', '2025-06-20 09:33:27', '2025-06-20 09:33:27', NULL),
(10, 'Hardi Natsir S.Gz', 'hardi@gmail.com', '(+62) 474 6019 219', 'Ki. Bahagia  No. 4, Kotamobagu 34939, Pabar', '2005-03-22', '2021-01-10', 3, 2, 'unactive', '17538569.88', '2025-06-20 09:33:28', '2025-06-20 09:33:28', NULL),
(11, 'Zaenab Yolanda', 'zaenab@gmail.com', '0319 5579 261', 'Kpg. Halim No. 347, Singkawang 44938, Kalsel', '2005-02-11', '2022-02-27', 5, 4, 'active', '9030878.99', '2025-06-20 09:33:29', '2025-06-20 09:33:29', NULL),
(13, 'Ade Wisnu Pranowo S.T.', 'ade@gmail.com', '(+62) 861 5699 0996', 'Dk. Suprapto No. 418, Binjai 71598, Jatim', '2004-07-02', '2021-04-08', 2, 3, 'active', '7565062.45', '2025-06-20 09:33:33', '2025-06-20 09:33:33', NULL),
(14, 'Gamani Ismail Marpaung M.Farm', 'gamani@gmail.com', '0335 5097 0782', 'Jln. Banceng Pondok No. 816, Bekasi 15932, Kalsel', '1999-11-28', '2024-12-12', 3, 4, 'active', '3899423.41', '2025-06-20 09:33:35', '2025-06-20 09:33:35', NULL),
(16, 'Jayeng Warsa Mandala', 'jayeng@gmail.com', '(+62) 664 5954 519', 'Kpg. Jayawijaya No. 981, Balikpapan 12045, Sulut', '2005-03-07', '2021-05-12', 5, 5, 'active', '16532914.92', '2025-06-20 09:33:39', '2025-06-20 09:33:39', NULL),
(17, 'Yuni Yuni Nurdiyanti S.Pt', 'yuni@gmail.com', '0340 8451 119', 'Psr. Yohanes No. 798, Administrasi Jakarta Utara 81013, Jambi', '1997-05-04', '2020-11-24', 2, 4, 'unactive', '16465394.09', '2025-06-20 09:33:41', '2025-06-20 09:33:41', NULL),
(18, 'Hanis siddiq', 'hanissiddiq10@gmail.com', '082211887735', 'Jln. Tgk Imum Cut Haji, Gampong Kubu\r\nBireuen', '1998-03-31', '2025-05-02', 2, 1, 'active', '3090000.00', '2025-06-21 01:30:02', '2025-06-21 01:30:02', NULL),
(19, 'Ajeng Hanifa', 'ajenghanifa@gmail.com', '08', 're', '2025-07-04', '2025-07-04', 7, 3, 'active', '2800000.00', '2025-07-04 14:59:41', '2025-07-04 14:59:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_requests`
--

CREATE TABLE `leave_requests` (
  `id` bigint UNSIGNED NOT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `leave_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_requests`
--

INSERT INTO `leave_requests` (`id`, `employee_id`, `leave_type`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Cuti Besar', '2025-04-01', '2025-04-05', 'rejected', '2025-06-20 09:27:12', '2025-07-04 15:01:10', NULL),
(2, 6, 'Cuti Melahirkan', '2025-07-01', '2025-07-31', 'approved', '2025-07-05 06:31:03', '2025-07-05 06:31:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_04_29_051848_create_human_resource_app', 1),
(5, '2025_04_29_060549_alter_table_user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `id` bigint UNSIGNED NOT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `bonuses` decimal(10,2) DEFAULT NULL,
  `deductions` decimal(10,2) DEFAULT NULL,
  `net_salary` decimal(10,2) NOT NULL,
  `pay_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`id`, `employee_id`, `salary`, `bonuses`, `deductions`, `net_salary`, `pay_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '10470057.18', '103864.83', '62072.11', '9615144.20', '2025-06-04', '2025-06-20 09:27:12', '2025-06-21 01:53:22', '2025-06-21 01:53:22'),
(2, 1, '16182033.99', '161814.73', '70798.29', '16868652.16', '2025-06-06', '2025-06-20 09:56:05', '2025-06-21 01:53:24', '2025-06-21 01:53:24'),
(3, 1, '17635119.05', '35076.07', '17572.76', '8204512.22', '2025-06-01', '2025-06-20 09:56:19', '2025-06-21 01:53:28', '2025-06-21 01:53:28'),
(4, 5, '2940511.22', '163034.85', '12346.40', '3091199.67', '2025-05-30', '2025-06-20 09:56:43', '2025-06-21 01:53:31', '2025-06-21 01:53:31'),
(5, 18, '3080000.00', '100000.00', '80000.00', '3100000.00', '2025-06-01', '2025-06-21 01:31:15', '2025-06-21 01:31:15', NULL),
(6, 11, '3600000.00', '200000.00', '25000.00', '3775000.00', '2025-06-21', '2025-06-21 01:54:00', '2025-06-21 02:53:15', '2025-06-21 02:53:15'),
(7, 13, '4500000.00', '150000.00', '150000.00', '4500000.00', '2025-07-05', '2025-07-05 06:30:17', '2025-07-05 06:30:17', NULL),
(8, 6, '2800000.00', '200000.00', '0.00', '3000000.00', '2025-07-01', '2025-07-05 07:13:03', '2025-07-05 07:13:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `presences`
--

CREATE TABLE `presences` (
  `id` bigint UNSIGNED NOT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `presences`
--

INSERT INTO `presences` (`id`, `employee_id`, `check_in`, `check_out`, `date`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2025-04-01 08:00:00', '2025-04-01 16:00:00', '2025-04-01', 'present', '2025-06-20 09:27:12', '2025-06-20 09:27:12', NULL),
(2, 1, '2025-04-10 00:00:00', '2025-04-10 00:00:00', '2025-04-12', 'present', '2025-06-20 09:32:28', '2025-06-20 09:35:19', NULL),
(5, 6, '2025-02-06 00:00:00', '2025-04-18 00:00:00', '2025-04-23', 'present', '2025-06-20 09:34:00', '2025-06-20 09:35:16', NULL),
(6, 10, '2025-04-27 00:00:00', '2025-04-27 00:00:00', '2025-04-11', 'present', '2025-06-20 09:34:01', '2025-06-20 09:35:12', NULL),
(7, 8, '2025-04-22 08:03:00', '2025-04-22 15:12:00', '2025-04-18', 'present', '2025-06-20 09:37:50', '2025-06-20 09:38:47', NULL),
(8, 9, '2025-05-16 07:41:00', '2025-04-16 18:29:00', '2025-04-14', 'present', '2025-06-20 09:37:51', '2025-06-20 09:37:51', NULL),
(9, 9, '2025-04-07 09:35:00', '2025-04-07 16:27:00', '2025-04-26', 'present', '2025-06-20 09:37:52', '2025-06-20 09:39:05', NULL),
(10, 1, '2025-04-07 08:46:00', '2025-04-07 18:23:00', '2025-04-20', 'present', '2025-06-20 09:37:54', '2025-06-20 09:37:54', NULL),
(11, 9, '2025-04-16 10:22:00', '2025-04-16 17:37:00', '2025-04-25', 'present', '2025-06-20 09:37:55', '2025-06-20 09:37:55', NULL),
(12, 18, '2025-06-21 07:00:00', '2025-06-21 17:00:00', '2025-06-21', 'present', '2025-06-21 02:46:36', '2025-06-21 02:46:36', NULL),
(13, 8, '2025-07-02 12:00:00', '2025-07-02 12:00:00', '2025-07-02', 'present', '2025-07-05 06:31:33', '2025-07-05 06:31:33', NULL),
(14, 19, '2025-01-01 08:00:00', '2025-01-01 17:00:00', '2025-01-01', 'present', '2025-07-05 06:43:31', '2025-07-05 06:43:31', NULL),
(15, 2, '2025-02-02 08:00:00', '2025-02-02 16:00:00', '2025-02-02', 'present', '2025-07-05 06:44:28', '2025-07-05 06:44:28', NULL),
(16, 9, '2025-02-02 08:00:00', '2025-02-02 16:00:00', '2025-02-02', 'present', '2025-07-05 06:44:56', '2025-07-05 06:44:56', NULL),
(17, 7, '2025-03-01 08:00:00', '2025-03-01 16:00:00', '2025-03-01', 'present', '2025-07-05 06:45:48', '2025-07-05 06:45:48', NULL),
(18, 2, '2025-03-02 08:00:00', '2025-03-02 15:00:00', '2025-03-03', 'present', '2025-07-05 06:46:22', '2025-07-05 06:46:22', NULL),
(19, 3, '2025-03-11 07:00:00', '2025-03-11 16:00:00', '2025-03-11', 'present', '2025-07-05 06:52:05', '2025-07-05 06:52:05', NULL),
(20, 16, '2025-05-06 07:00:00', '2025-05-06 19:00:00', '2025-05-06', 'present', '2025-07-05 07:09:35', '2025-07-05 07:09:35', NULL),
(21, 6, '2025-05-06 12:00:00', '2025-05-06 12:00:00', '2025-05-06', 'present', '2025-07-05 07:10:07', '2025-07-05 07:10:07', NULL),
(22, 4, '2025-07-09 12:00:00', '2025-07-09 12:00:00', '2025-07-09', 'present', '2025-07-05 07:10:34', '2025-07-05 07:10:34', NULL),
(23, 4, '2025-07-02 12:00:00', '2025-07-02 12:00:00', '2025-07-02', 'present', '2025-07-05 07:10:51', '2025-07-05 07:10:51', NULL),
(24, 16, '2025-07-05 12:00:00', '2025-07-05 12:00:00', '2025-07-05', 'present', '2025-07-05 07:11:17', '2025-07-05 07:11:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'Mengatur tim dan proyek', '2025-06-20 09:27:12', '2025-06-20 09:27:12', NULL),
(2, 'IT', 'Mengelola sistem informasi', '2025-06-20 09:27:12', '2025-06-20 09:27:12', NULL),
(3, 'Staff', 'Membantu tugas sehari-hari', '2025-06-20 09:27:12', '2025-06-20 09:27:12', NULL),
(4, 'Direktur', 'Mengawasi seluruh departemen', '2025-06-20 09:27:12', '2025-06-20 09:27:12', NULL),
(5, 'Supervisor', 'Mengawasi tim dan proyek', '2025-06-20 09:27:12', '2025-06-20 09:27:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('vLftdvbQ256O9MS7CCBTZKjrLXGvjOVO51Ounszn', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiMmFITHVueUM3d3JKTm5qNnlrNU5GbnA2cTd1NFhTcmY5WUdrRFJVYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQvcHJlc2VuY2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NDoicm9sZSI7czo1OiJBZG1pbiI7czoxMToiZW1wbG95ZWVfaWQiO2k6MTt9', 1751699836);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assigned_to` bigint UNSIGNED NOT NULL,
  `due_date` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `assigned_to`, `due_date`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Iusto voluptatum autem dolorum.', 'Totam dolor dolores et. Unde voluptate enim consequuntur enim non voluptatem.', 1, '2025-04-20', 'completed', '2025-06-20 09:27:12', '2025-06-20 09:50:30', '2025-06-20 09:50:30'),
(2, 'Sed dicta minus ea.', 'Sint provident consequuntur nisi impedit temporibus libero et vel. Non et aut qui voluptas est modi et.', 1, '2025-04-20', 'completed', '2025-06-20 09:42:20', '2025-06-20 09:50:32', '2025-06-20 09:50:32'),
(3, 'Saepe a soluta.', 'Eligendi ea in alias placeat inventore. Rerum quidem et libero ut ducimus dolorem.', 1, '2025-04-25', 'done', '2025-06-20 09:45:34', '2025-06-20 09:50:35', '2025-06-20 09:50:35'),
(4, 'Eaque aut sunt.', 'Ea aliquid quis aliquam enim. Iusto quae qui dolor voluptatibus aut. Et aut laboriosam est nisi.', 2, '2025-04-28', 'pending', '2025-06-20 09:45:35', '2025-06-20 09:50:37', '2025-06-20 09:50:37'),
(5, 'Labore et animi.', 'Voluptatibus et magnam voluptatem. Quis qui tenetur dicta.', 4, '2025-04-21', 'done', '2025-06-20 09:45:36', '2025-06-20 09:50:39', '2025-06-20 09:50:39'),
(6, 'Aperiam veniam sed.', 'At voluptas sunt ipsum et. Sit animi odit illo ratione dignissimos enim aut ut. Dignissimos eos voluptatem et fuga ipsam sunt.', 3, '2025-04-16', 'done', '2025-06-20 09:45:37', '2025-06-20 09:50:41', '2025-06-20 09:50:41'),
(7, 'Ad quo ipsa.', 'Voluptatum repellat repudiandae reprehenderit. Incidunt officiis et inventore commodi.', 2, '2025-04-07', 'done', '2025-06-20 09:48:20', '2025-06-20 09:50:43', '2025-06-20 09:50:43'),
(8, 'Placeat aliquid soluta.', 'Eius ullam illo necessitatibus in molestiae. Quia expedita inventore aspernatur quidem rerum voluptas.', 2, '2025-04-26', 'done', '2025-06-20 09:48:43', '2025-06-20 09:50:45', '2025-06-20 09:50:45'),
(9, 'Memeriksa stok barang', 'Ipsam quia ipsum ea vitae. Dolorum alias doloremque inventore ab fuga laudantium hic. Ratione commodi voluptatem atque dolor.', 1, '2025-04-26', 'done', '2025-06-20 09:50:49', '2025-06-20 09:51:50', '2025-06-20 09:51:50'),
(10, 'Membuat presentasi mingguan', 'Aut aliquid magnam cupiditate cupiditate culpa. Eos qui ipsa consequatur quam.', 2, '2025-04-13', 'on_progress', '2025-06-20 09:50:51', '2025-06-20 09:51:52', '2025-06-20 09:51:52'),
(11, 'Menanggapi email klien', 'Voluptatum sit laborum consequatur placeat qui cumque autem. Animi sunt corrupti ab iure quod fugit unde. Dignissimos libero sint qui unde eum quis sunt.', 5, '2025-04-02', 'pending', '2025-06-20 09:50:52', '2025-06-20 09:51:54', '2025-06-20 09:51:54'),
(12, 'Melakukan rapat tim', 'Illum dolor ratione in sit qui et eos. Eaque libero mollitia ut veritatis amet est.', 3, '2025-04-03', 'pending', '2025-06-20 09:51:07', '2025-06-20 09:52:00', '2025-06-20 09:52:00'),
(13, 'Membuat presentasi mingguan', 'Autem voluptas doloremque quaerat ut tempora. Omnis quidem consequatur minima quia impedit sequi rerum iusto.', 3, '2025-04-17', 'on_progress', '2025-06-20 09:51:08', '2025-06-20 09:51:56', '2025-06-20 09:51:56'),
(14, 'Menyusun jadwal kerja', 'Quia distinctio repellendus consequatur totam. Mollitia sunt repellat ab aut accusantium. Dolorum qui porro rem sit id eum fugiat.', 5, '2025-04-16', 'done', '2025-06-20 09:51:36', '2025-06-20 09:51:58', '2025-06-20 09:51:58'),
(15, 'Menanggapi email klien', 'Aut similique deserunt commodi. Est consequuntur commodi soluta minima qui fugiat. Delectus tempore rerum sed.', 5, '2025-04-17', 'pending', '2025-06-20 09:51:37', '2025-06-20 09:52:02', '2025-06-20 09:52:02'),
(16, 'Mengisi laporan harian', 'Est at beatae quia. Est tempore exercitationem repudiandae neque velit. Velit hic sint necessitatibus et et.', 2, '2025-04-19', 'pending', '2025-06-20 09:52:05', '2025-06-20 09:52:05', NULL),
(17, 'Mengarsipkan dokumen penting', 'Blanditiis hic minus id qui eum doloribus. Id accusamus corrupti quos et commodi a. Nobis exercitationem veniam sunt nemo sit dolor libero.', 3, '2025-04-01', 'done', '2025-06-20 09:52:06', '2025-06-20 09:52:20', NULL),
(18, 'Mengupdate data pelanggan', 'Hic explicabo impedit accusamus quos error. Accusantium quo natus eos rerum dolorem quibusdam alias. Tempore ab incidunt enim sit ratione vel.', 2, '2025-04-02', 'on progress', '2025-06-20 09:52:07', '2025-06-20 09:52:07', NULL),
(19, 'Bersihkan Kolam', 'Tolong bersihkan dan kuras bagian kolam dan masukkan ikan hias yang sudah dibeli', 11, '2025-07-04', 'on progress', '2025-07-04 14:50:27', '2025-07-05 07:12:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `employee_id`) VALUES
(1, 'Administrator HRIS KPNL', 'admin@hris.com', '2025-06-21 00:04:49', '$2y$12$p90Y2rooNnvGQ03n0xsb/O1jPghNjCCVeMCP9QimK7br0CuPprMvS', '8VIzZhtuQ9RhTuczCVjjkm06QLlqP2ZT09iZrQyoRRHzgD5VJvQMaylDOy7T', '2025-06-21 00:04:50', '2025-06-21 00:04:50', '1');

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
-- Indexes for table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD KEY `employees_departement_id_foreign` (`departement_id`),
  ADD KEY `employees_role_id_foreign` (`role_id`);

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
-- Indexes for table `leave_requests`
--
ALTER TABLE `leave_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leave_requests_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payroll_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `presences`
--
ALTER TABLE `presences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `presences_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_assigned_to_foreign` (`assigned_to`);

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
-- AUTO_INCREMENT for table `departements`
--
ALTER TABLE `departements`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_requests`
--
ALTER TABLE `leave_requests`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `presences`
--
ALTER TABLE `presences`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_departement_id_foreign` FOREIGN KEY (`departement_id`) REFERENCES `departements` (`id`),
  ADD CONSTRAINT `employees_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `leave_requests`
--
ALTER TABLE `leave_requests`
  ADD CONSTRAINT `leave_requests_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `payroll`
--
ALTER TABLE `payroll`
  ADD CONSTRAINT `payroll_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `presences`
--
ALTER TABLE `presences`
  ADD CONSTRAINT `presences_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_assigned_to_foreign` FOREIGN KEY (`assigned_to`) REFERENCES `employees` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
