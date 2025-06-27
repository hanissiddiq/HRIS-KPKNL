-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2025 at 04:58 AM
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
('hris_kpknl_lhokseumawe_cache_hanissiddiq@gmail.com|127.0.0.1', 'i:2;', 1750940912),
('hris_kpknl_lhokseumawe_cache_hanissiddiq@gmail.com|127.0.0.1:timer', 'i:1750940912;', 1750940912),
('hris_kpknl_lhokseumawe_cache_karyawan@gmail.com|127.0.0.1', 'i:2;', 1750941764),
('hris_kpknl_lhokseumawe_cache_karyawan@gmail.com|127.0.0.1:timer', 'i:1750941764;', 1750941764);

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
(1, 'HR', 'Human Resource', 'active', NULL, '2025-06-26 21:54:45', NULL),
(2, 'Ka.Subbag', 'Kepala Sub Bagian', 'Aktif', NULL, NULL, NULL),
(3, 'KI', 'Kepatuhan Internal Pegawai', 'Aktif', NULL, NULL, NULL),
(4, 'Sumber Daya Manusia', 'Mengelola sumber daya manusia', 'Aktif', '2025-05-12 01:19:44', '2025-05-12 01:19:44', NULL),
(5, 'Teknologi Informasi', 'Mengelola sistem informasi', 'Aktif', '2025-05-12 01:19:44', '2025-05-12 01:19:44', NULL),
(6, 'Keuangan', 'Mengelola keuangan perusahaan', 'Aktif', '2025-05-12 01:19:44', '2025-05-12 01:19:44', NULL),
(7, 'Humas dan Pemasaran', 'Mengelola hubungan masyarakat dan pemasaran', 'Aktif', '2025-05-12 01:19:44', '2025-05-12 01:19:44', NULL),
(8, 'Pelayanan Lelang', 'Mengelola pelayanan lelang', 'Aktif', '2025-05-12 01:19:44', '2025-05-12 01:19:44', NULL),
(10, 'Penilaian Aset', 'Mengelola penilaian aset', 'Aktif', '2025-05-12 01:19:44', '2025-05-12 01:19:44', NULL),
(11, 'Pengelolaan Aset', 'Mengelola pengelolaan aset', 'Aktif', '2025-05-12 01:19:44', '2025-05-12 01:19:44', NULL),
(12, 'Pengaduan dan Informasi Publik', 'Mengelola pengaduan dan informasi publik', 'active', '2025-05-12 01:19:44', '2025-06-26 21:55:55', NULL),
(22, 'polo', 'q', 'active', '2025-06-26 21:55:10', '2025-06-26 21:55:10', NULL),
(23, 'asw', 'qwe', 'unactive', '2025-06-26 21:55:28', '2025-06-26 21:55:35', '2025-06-26 21:55:35');

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
(1, 'hanis', 'hanissiddiq10@gmail.com', '082211887735', 'Desa Kubu. Kec. Peusangan Siblah Krueng, Kab. Bireuen', '1998-03-31', '2025-05-02', 5, 1, 'unactive', '2300000.00', NULL, '2025-06-02 07:49:48', NULL),
(2, 'nurhaliza', 'nurhaliza@gmail.com', '083825353620', 'Penteut', '2001-12-12', '2020-05-10', 2, 1, 'Aktif', '2500000.00', NULL, NULL, NULL),
(3, 'Hanis Siddiq', 'Armstrongaceh@gmail.com', '081263132787', 'Cunda, Muara Dua', '1998-03-31', '2025-05-01', 3, 1, 'active', '3400000.00', NULL, '2025-06-26 05:26:24', NULL),
(4, 'Dacin Reza Nashiruddin S.Pt M.Pt', 'Dacinreza@example.org', '081366562278', 'Jln. Pasar Singkawang 14337, Maluku', '2004-10-01', '2024-05-01', 10, 2, 'unactive', '3800000.00', '2025-05-12 01:19:44', '2025-06-02 07:41:00', NULL),
(5, 'Galuh Ganep Maulana S.Kom', 'latupono.daniswara@example.net', '(+62) 520 1668 230', 'Ki. Jend. Sudirman No. 361, Bau-Bau 67092, Aceh', '2000-12-10', '2023-08-24', 1, 5, 'active', '16822554.68', '2025-05-12 01:21:21', '2025-05-12 01:21:21', NULL),
(6, 'Husni', 'husni@hris.com', '0811677068', 'Kubu', '1996-12-12', '2025-01-01', 5, 14, 'active', '3080000.00', '2025-05-21 07:34:33', '2025-05-21 07:34:33', NULL),
(7, 'Matheus Dinata', 'Matheusdinata@kemenkeu.go.id', '082343431212', 'Medan', '1995-04-29', '2025-05-22', 12, 16, 'active', '5000000.00', '2025-05-22 05:35:23', '2025-05-22 05:35:23', NULL);

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
(1, 2, 'Cuti Melahirkan', '2025-05-10', '2025-05-12', 'rejected', NULL, '2025-06-26 21:14:12', NULL),
(2, 3, 'Cuti Menikah', '2025-05-19', '2025-05-20', 'rejected', NULL, '2025-06-26 21:14:17', NULL),
(3, 1, 'Cuti Tahunan', '2025-04-01', '2025-04-05', 'pending', '2025-05-12 01:19:44', '2025-05-12 01:19:44', NULL),
(4, 1, 'Cuti Ibadah', '2025-04-01', '2025-04-05', 'approved', '2025-05-12 01:21:21', '2025-06-25 05:59:35', NULL),
(5, 6, 'Cuti Ibadah', '2025-06-30', '2025-07-01', 'rejected', '2025-06-26 21:16:29', '2025-06-26 21:44:47', NULL),
(6, 6, 'Cuti Tahunan', '2025-06-30', '2025-06-30', 'pending', '2025-06-26 21:41:50', '2025-06-26 21:41:50', NULL),
(7, 6, 'Cuti Alasan Penting', '2025-06-23', '2025-06-30', 'pending', '2025-06-26 21:42:05', '2025-06-26 21:44:59', '2025-06-26 21:44:59'),
(8, 6, 'Cuti Besar', '2025-06-30', '2025-07-10', 'approved', '2025-06-26 21:42:38', '2025-06-26 21:42:49', NULL);

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
(1, 1, '7680842.17', '120427.25', '75694.72', '10293689.71', '2025-04-25', '2025-05-12 01:19:44', '2025-05-12 01:19:44', NULL),
(2, 1, '10608963.41', '12320.47', '65135.04', '4071988.07', '2025-04-25', '2025-05-12 01:21:21', '2025-05-12 01:21:21', NULL),
(3, 6, '8700000.00', '300000.00', '98000.00', '8902000.00', '2025-06-27', '2025-06-26 21:03:21', '2025-06-26 21:03:21', NULL);

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
(1, 1, '2025-04-10 12:00:00', '2025-06-19 12:00:00', '2025-04-16', 'present', '2025-05-12 01:19:44', '2025-06-19 06:25:59', NULL),
(2, 7, '2025-04-01 00:00:00', '2025-04-01 00:00:00', '2025-04-01', 'present', '2025-05-12 01:21:21', '2025-05-12 01:21:21', NULL),
(3, 5, '2025-06-18 00:00:00', '2025-06-18 00:00:00', '2025-06-18', 'absent', '2025-06-18 07:19:31', '2025-06-19 06:49:04', NULL),
(4, 4, '2025-06-30 07:28:00', '2025-06-30 16:55:00', '2025-06-30', 'present', '2025-06-18 07:26:00', '2025-06-19 06:33:46', '2025-06-19 06:33:46'),
(5, 2, '2025-06-30 07:20:00', '2025-06-30 16:30:00', '2025-06-30', 'absent', '2025-06-19 05:45:06', '2025-06-19 06:33:39', '2025-06-19 06:33:39'),
(6, 4, '2025-01-01 08:00:00', '2025-01-01 17:00:00', '2025-01-01', 'leave', '2025-06-19 06:24:45', '2025-06-19 06:48:42', NULL);

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
(1, 'Admin', 'Bisa Recode', '2025-05-12 01:19:44', NULL, NULL),
(2, 'Member', 'Hanya bisa akses tidak bisa recode', NULL, NULL, NULL),
(3, 'Guest', 'hanya bisa lihat website sisi client', NULL, NULL, NULL),
(4, 'Manager', 'Mengatur tim dan proyek', '2025-05-12 01:19:44', '2025-05-12 01:19:44', NULL),
(5, 'IT', 'Mengelola sistem informasi', '2025-05-12 01:19:44', '2025-05-12 01:19:44', NULL),
(6, 'Staff', 'Membantu tugas sehari-hari', '2025-05-12 01:19:44', '2025-05-12 01:19:44', NULL),
(7, 'Direktur', 'Mengawasi seluruh departemen', '2025-05-12 01:19:44', '2025-05-12 01:19:44', NULL),
(8, 'Supervisor', 'Mengawasi tim dan proyek', '2025-05-12 01:19:44', '2025-05-12 01:19:44', NULL),
(14, 'Karyawan', 'role aselole cuma uci percobaan', '2025-05-12 01:19:44', NULL, NULL),
(15, 'HRD', 'Human Reosurce Development', '2025-05-12 01:19:44', NULL, NULL),
(16, 'Data Entry', 'Operator yang bertugas input data', '2025-05-12 01:19:44', NULL, NULL);

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
('amU6Rr7nxQEyj5PGuq0qfZaT7vdHC1FdHot9LZ3y', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoicTJUMUJTYXdwRVRGMmRsaUFWUmVyTVVnazcxU3R6c2lTNDdJU0F3RCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZXBhcnRlbWVudCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czo0OiJyb2xlIjtzOjU6IkFkbWluIjtzOjExOiJlbXBsb3llZV9pZCI7aToxO30=', 1751000155),
('CFv6aGPhKjsMXBgwGBvgrIOdopug257WkqU7fPqs', 8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36 OPR/119.0.0.0 (Edition Campaign 34)', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiUWpsVXVMQXh0bWhqY3ZoUzVnUG5Yamx6Qm9lVVVHYU1yZExoOUlpMyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo4O3M6NDoicm9sZSI7czo4OiJLYXJ5YXdhbiI7czoxMToiZW1wbG95ZWVfaWQiO2k6Njt9', 1750999616);

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
(1, 'Monthly Report', 'You must report your assigment every end of month', 1, '2025-05-05', 'done', NULL, NULL, NULL),
(2, 'Report Weekly', 'You must report your assigment every weekends', 1, '2025-05-02', 'done', NULL, '2025-05-20 05:11:19', NULL),
(3, 'Sosialisasi Kepatuhan Internal', 'Staff yang bertugas wajib mensosialisasikan aturan yang menyangkut kepatuhan internal', 1, '2025-05-05', 'pending', NULL, '2025-05-12 04:34:46', NULL),
(6, 'addafa', 'aaaa', 2, '2025-05-01', 'pending', '2025-05-12 01:48:32', '2025-05-12 02:58:33', '2025-05-12 02:58:33'),
(7, 'Laporan Keuangan', 'Buat Laporan Keungan sesuai dengan neraca yang diberikan oleh pak hambali', 4, '2025-05-20', 'on progress', '2025-05-12 01:49:43', '2025-05-12 02:57:36', '2025-05-12 02:57:36'),
(8, 'Perjalanan Dinas Ke Jaksel', 'perjadin', 4, '2025-05-12', 'done', '2025-05-12 01:55:39', '2025-05-12 04:35:05', NULL),
(9, 'Perjadin Langsa', 'Tugas Dinas Langsa', 2, '2025-05-12', 'pending', '2025-05-12 03:29:43', '2025-05-12 04:35:01', NULL),
(10, 'Analisa Neraca Laba-Rugi', 'Berikan laporan dari hasil analisa laba rugi perusahaan', 4, '2025-05-20', 'done', '2025-05-12 03:33:29', '2025-05-12 04:35:09', NULL),
(11, 'jalan jalan', 'aaaa', 5, '2025-05-22', 'done', '2025-05-12 03:35:28', '2025-05-12 03:35:36', '2025-05-12 03:35:36'),
(12, 'Laporan Asset', 'Laporan asset tolong buatkan chart yang memeprlihatkan berapa penjualan bersih kita dibulan inin', 3, '2025-05-20', 'done', '2025-05-12 05:18:13', '2025-05-12 05:19:31', '2025-05-12 05:19:31'),
(13, 'test', 'tugas test', 6, '2025-06-27', 'done', '2025-06-26 20:55:23', '2025-06-26 20:58:44', NULL);

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
(3, 'operator', 'operator@gmail.com', NULL, '$2y$12$MoD2wJDSPYkWfF4L15vPNu70s/P.5ZIm5Ul9st9BB5ner2JJ8MCgi', NULL, '2025-06-25 06:57:15', '2025-06-25 06:57:15', '7'),
(4, 'raisa', 'raisa@gmail.com', NULL, '$2y$12$ijkYkqcqDcWazuWcayS4fexaD/SkBnoX3HkT0RpsaQ.ZTokzzew5S', NULL, '2025-06-25 07:32:22', '2025-06-25 07:32:22', '0'),
(5, 'hanliza', 'hanliza@gmail.com', NULL, 'asss', NULL, NULL, NULL, '0'),
(7, 'Administrator HRIS', 'admin@hris.com', '2025-06-26 05:40:54', '$2y$12$B7MeDBzo2yE1snO0jbYlZeFL6KtKBt9bH4Rfq/10Pzu1ilqoxKZeO', NULL, '2025-06-26 05:40:54', '2025-06-26 05:40:54', '1'),
(8, 'Karyawan', 'karyawan@hris.com', '2025-06-26 05:40:54', '$2y$12$KzNymkH3LIk.I7ao/BR2Ge40G/uHzHNrE/lHqbx4klU.z4JAK6bk6', NULL, '2025-06-26 05:40:55', '2025-06-26 05:40:55', '6');

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `presences`
--
ALTER TABLE `presences`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
