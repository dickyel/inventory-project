-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 12:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluars`
--

CREATE TABLE `barang_keluars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barang_masuk_id` int(11) NOT NULL,
  `tanggal_keluar_barang` date NOT NULL,
  `customer` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rwo` int(11) NOT NULL,
  `rwo_qty` int(11) NOT NULL,
  `hc` int(11) NOT NULL,
  `plan_output` int(11) NOT NULL,
  `actual_output` int(11) NOT NULL,
  `set_up_time_plan` int(11) NOT NULL,
  `set_up_time_actual` int(11) NOT NULL,
  `set_up_time_var` int(11) NOT NULL,
  `running_time_plan` int(11) NOT NULL,
  `running_time_actual` int(11) NOT NULL,
  `running_time_var` int(11) NOT NULL,
  `total_plan` int(11) NOT NULL,
  `total_actual` int(11) NOT NULL,
  `total_var` int(11) NOT NULL,
  `remark` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuks`
--

CREATE TABLE `barang_masuks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `tanggal_masuk_barang` date DEFAULT NULL,
  `nama_customer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rwo` int(11) DEFAULT NULL,
  `rwo_qty` int(11) DEFAULT NULL,
  `hc` int(11) DEFAULT NULL,
  `plan_output` int(11) DEFAULT NULL,
  `actual_output` int(11) DEFAULT NULL,
  `set_up_time_plan` int(11) DEFAULT NULL,
  `set_up_time_actual` int(11) DEFAULT NULL,
  `set_up_time_var` int(11) DEFAULT NULL,
  `running_time_plan` int(11) DEFAULT NULL,
  `running_time_actual` int(11) DEFAULT NULL,
  `running_time_var` int(11) DEFAULT NULL,
  `total_plan` int(11) DEFAULT NULL,
  `total_actual` int(11) DEFAULT NULL,
  `total_var` int(11) NOT NULL,
  `remark` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang_masuks`
--

INSERT INTO `barang_masuks` (`id`, `users_id`, `tanggal_masuk_barang`, `nama_customer`, `model`, `rwo`, `rwo_qty`, `hc`, `plan_output`, `actual_output`, `set_up_time_plan`, `set_up_time_actual`, `set_up_time_var`, `running_time_plan`, `running_time_actual`, `running_time_var`, `total_plan`, `total_actual`, `total_var`, `remark`, `created_at`, `updated_at`) VALUES
(6, 2, '2023-03-31', '111', '111', 111, 111, 111, 111, 111, 111, 111, 111, 111, 111, 111, 111, 111, 111, '111', '2023-03-21 16:02:34', '2023-03-21 16:02:34'),
(8, 2, '2023-03-25', 'kamu', 'kamu', 11, 111, 111, 11, 111, 11, 111, 111, 111, 11, 111, 11, 11, 11, 'bagus', '2023-03-24 02:50:34', '2023-03-24 02:54:42');

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
(4, '2023_03_18_133534_create_barang_masuk_table', 1),
(5, '2023_03_18_133726_create_barang_keluar_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_line` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ADMIN',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_line`, `email`, `email_verified_at`, `password`, `departement`, `roles`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'supervisor1', 'supervisor@gmail.com', NULL, '$2y$10$NzluSZVFTr7Vg4u2twhcU.eQ/q3hVYmmGJwdsbNrmp29DCwgKCzOG', 'backend & insert', 'ADMIN', NULL, '2023-03-20 16:24:58', '2023-03-21 16:37:51'),
(3, 'dikky', 'dikky@gmail.com', NULL, '$2y$10$irAM2y0lzixS1gA4i.VXLOFtdceFzjRFFVV.K4.EmU5uPT6cH4amG', 'backend & insert', 'ADMIN', NULL, '2023-03-21 16:37:41', '2023-03-21 16:37:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_keluars`
--
ALTER TABLE `barang_keluars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_masuks`
--
ALTER TABLE `barang_masuks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_keluars`
--
ALTER TABLE `barang_keluars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang_masuks`
--
ALTER TABLE `barang_masuks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
