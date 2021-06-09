-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 23, 2020 at 09:21 AM
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
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dokter` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spesialis` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama_dokter`, `tarif`, `spesialis`, `jenis_kelamin`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Indra setiawan', '500000', 'Jantung', 'L', '08980789796', 'Bekasi', '2020-12-21 23:28:46', '2020-12-21 23:28:46'),
(2, 'Drs Indri', '300000', 'Kulit', 'Laki-laki', '09809809', 'jayapura', '2020-12-22 05:33:16', '2020-12-22 05:33:16'),
(3, 'Didin sudidin', '890000', 'Kulit Ayam', 'Laki-laki', '098098087', 'Solo jawa tengah', '2020-12-22 09:18:36', '2020-12-22 09:18:36'),
(4, 'Dr Surya mana', '900000', 'Hati', 'Laki-laki', '09809809787', 'Bandung', '2020-12-22 23:02:13', '2020-12-22 23:02:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarif_perhari` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id`, `kelas`, `tarif_perhari`, `created_at`, `updated_at`) VALUES
(1, 'UGD', 400000, '2020-12-21 23:28:04', '2020-12-21 23:28:04'),
(2, 'ICU', 4500000, '2020-12-22 05:33:30', '2020-12-22 23:01:00'),
(3, 'VIP', 1000000, '2020-12-22 09:18:53', '2020-12-22 09:18:53'),
(4, 'VVIP', 1000000, '2020-12-22 23:01:20', '2020-12-22 23:01:20');

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
(4, '2020_11_27_064519_create_pasiens_table', 1),
(5, '2020_11_27_064610_create_dokters_table', 1),
(6, '2020_12_08_080256_create_kamars_table', 1),
(7, '2020_12_22_053331_create_obats_table', 1),
(8, '2020_12_22_061444_create_rawatinaps_table', 1),
(11, '2020_12_22_092648_create_transaksis_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fungsi_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `harga_obat`, `fungsi_obat`, `created_at`, `updated_at`) VALUES
(55, 'AnakSumeng', '50000', 'Pilek batuk', '2020-12-22 23:02:56', '2020-12-22 23:02:56'),
(123, 'OsKasbon', '500000', 'menghilangkan sakit kelapa', '2020-12-22 09:17:55', '2020-12-22 09:17:55'),
(222, 'Paramex', '4000', 'Untuk kepala Pusing', '2020-12-22 05:32:50', '2020-12-22 05:32:50'),
(333, 'Bodrex', '1000', 'Untuk Batux', '2020-12-22 00:03:41', '2020-12-22 00:03:41'),
(999, 'Paracetamol', '15000', 'Gatau tanya ama Dokter ajh', '2020-12-22 09:16:51', '2020-12-22 09:16:51');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pasien` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `riwayat_penyakit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama_pasien`, `jenis_kelamin`, `alamat`, `telepon`, `riwayat_penyakit`, `created_at`, `updated_at`) VALUES
(1, 'Adam Dwi Maulana', 'L', 'Bekasi', '08099820802', 'pusing', '2020-12-21 23:27:45', '2020-12-21 23:27:45'),
(2, 'Dede', 'L', 'Bandung', '3234243242', 'pilek', '2020-12-22 00:36:50', '2020-12-22 00:36:50'),
(3, 'Adi', 'L', 'Bandung', '08098080', 'Jantung', '2020-12-22 04:39:26', '2020-12-22 04:39:26'),
(4, 'Andri walam', 'L', 'Bandung Barat', '0980980', 'Sakit Hati', '2020-12-22 09:11:26', '2020-12-22 09:11:26'),
(5, 'Dudung', 'P', 'jakarta', '0988098093', 'Bengek', '2020-12-22 23:00:02', '2020-12-22 23:00:17');

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
-- Table structure for table `rawatinap`
--

CREATE TABLE `rawatinap` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dokter_id` bigint(20) UNSIGNED NOT NULL,
  `obat_id` bigint(20) UNSIGNED NOT NULL,
  `kamar_id` bigint(20) UNSIGNED NOT NULL,
  `pasien_id` bigint(20) UNSIGNED NOT NULL,
  `nama_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarif_dokter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarif_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rawatinap`
--

INSERT INTO `rawatinap` (`id`, `dokter_id`, `obat_id`, `kamar_id`, `pasien_id`, `nama_pasien`, `tarif_dokter`, `tarif_kamar`, `harga_obat`, `created_at`, `updated_at`) VALUES
(1, 1, 333, 1, 1, 'adam', '30000', '300000', '45000', '2020-12-22 12:21:58', '2020-12-22 12:21:58'),
(3, 1, 333, 1, 2, 'Adam Dwi Maulana', '500000', '400000', '1000', '2020-12-22 05:32:01', '2020-12-22 05:32:01'),
(7, 3, 123, 3, 4, 'Andri walam', '890000', '1000000', '500000', '2020-12-22 09:19:22', '2020-12-22 09:19:22'),
(8, 1, 55, 2, 4, 'Dede', '500000', '1000000', '50000', '2020-12-22 23:03:36', '2020-12-22 23:03:36'),
(9, 2, 55, 3, 1, 'Andri walam', '500000', '1000000', '4000', '2020-12-22 23:04:20', '2020-12-22 23:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rawatinap_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah_hari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `rawatinap_id`, `jumlah_hari`, `created_at`, `updated_at`) VALUES
(1, 1, '2', '2020-12-22 08:35:58', '2020-12-22 08:35:58'),
(2, 3, '7', '2020-12-22 09:07:14', '2020-12-22 09:07:14'),
(4, 3, '2', '2020-12-22 09:10:37', '2020-12-22 09:10:37'),
(5, 7, '5', '2020-12-22 09:21:03', '2020-12-22 09:21:03'),
(6, 3, '9', '2020-12-22 09:35:21', '2020-12-22 09:35:21'),
(7, 9, '7', '2020-12-22 23:04:37', '2020-12-22 23:04:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `roles`, `address`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin@bsi.ac.id', 'admin', '$2y$10$WhWGcA1MYVOAYRS5k4q9AOBqmGiHUHg5EmQGijXLmAoGtcgTnNMHG', '[\"ADMIN\"]', 'Jl Kebalen No. 60', '081851851851', 'ACTIVE', '2020-12-21 23:21:08', '2020-12-21 23:21:08'),
(3, 'admin2@bsi.ac.id', 'admin2', '$2y$10$rTJqmp43pcv48A4qq9KrP.natQRVgvkveCV1X.b7dl6y5x2XliNXm', '[\"ADMIN\"]', 'Jl Kebalen No. 60', '081851851851', 'ACTIVE', '2020-12-21 23:23:56', '2020-12-21 23:23:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rawatinap`
--
ALTER TABLE `rawatinap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rawatinap_dokter_id_foreign` (`dokter_id`),
  ADD KEY `rawatinap_obat_id_foreign` (`obat_id`),
  ADD KEY `rawatinap_kamar_id_foreign` (`kamar_id`),
  ADD KEY `rawatinap_pasien_id_foreign` (`pasien_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_rawatinap_id_foreign` (`rawatinap_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rawatinap`
--
ALTER TABLE `rawatinap`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rawatinap`
--
ALTER TABLE `rawatinap`
  ADD CONSTRAINT `rawatinap_dokter_id_foreign` FOREIGN KEY (`dokter_id`) REFERENCES `dokter` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rawatinap_kamar_id_foreign` FOREIGN KEY (`kamar_id`) REFERENCES `kamar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rawatinap_obat_id_foreign` FOREIGN KEY (`obat_id`) REFERENCES `obat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rawatinap_pasien_id_foreign` FOREIGN KEY (`pasien_id`) REFERENCES `pasien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_rawatinap_id_foreign` FOREIGN KEY (`rawatinap_id`) REFERENCES `rawatinap` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
