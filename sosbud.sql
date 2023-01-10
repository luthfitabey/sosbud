-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 03:16 AM
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
-- Database: `sosbud`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `id_bidang` bigint(20) UNSIGNED NOT NULL,
  `nama_bidang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dasar-hukum`
--

CREATE TABLE `dasar-hukum` (
  `id_dasar_hukum` bigint(20) UNSIGNED NOT NULL,
  `id_kegiatan_tematik` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `no_regulasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) NOT NULL,
  `perihal` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scan_dasar_hukum` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `jenis-surat`
--

CREATE TABLE `jenis-surat` (
  `id_jenis_surat` bigint(20) UNSIGNED NOT NULL,
  `jenis_surat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis-surat`
--

INSERT INTO `jenis-surat` (`id_jenis_surat`, `jenis_surat`, `created_at`, `updated_at`) VALUES
(1, 'Surat keluar', NULL, NULL),
(2, 'Surat Masuk', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan-tematik`
--

CREATE TABLE `kegiatan-tematik` (
  `id_kegiatan_tematik` bigint(20) UNSIGNED NOT NULL,
  `id_sub_bidang` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan_tematik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk_kegiatan_tematik` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_09_12_024317_create_role_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_11_24_021920_create_visi_table', 1),
(7, '2022_11_24_023712_create_misi_table', 1),
(8, '2022_11_24_023736_create_tujuan_table', 1),
(9, '2022_11_24_023753_create_sasaran_table', 1),
(10, '2022_11_24_023839_create_strategi_table', 1),
(11, '2022_11_24_023911_create_bidang_table', 1),
(12, '2022_11_24_024059_create_sub-bidang_table', 1),
(13, '2022_11_24_024202_create_kegiatan-tematik_table', 1),
(14, '2022_11_24_024409_create_program-pendukung_table', 1),
(15, '2022_11_24_024506_create_dasar-hukum_table', 1),
(16, '2022_11_24_024543_create_rapat-internal_table', 1),
(17, '2022_11_24_024636_create_rapat-eksternal_table', 1),
(18, '2023_01_05_022719_create_jenis-surat_table', 1),
(19, '2023_01_05_022720_create_surat_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `misi`
--

CREATE TABLE `misi` (
  `id_misi` bigint(20) UNSIGNED NOT NULL,
  `id_visi` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_misi` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program-pendukung`
--

CREATE TABLE `program-pendukung` (
  `id_program_pendukung` bigint(20) UNSIGNED NOT NULL,
  `id_kegiatan_tematik` bigint(20) UNSIGNED NOT NULL,
  `id_strategi` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_program_pendukung` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_rekening` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_kegiatan` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indikator` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pagu_dalam_APBD` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pagu_dalam_P-APBD` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OPD_penanggungjawab` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rapat-eksternal`
--

CREATE TABLE `rapat-eksternal` (
  `rapat_eksternal` bigint(20) UNSIGNED NOT NULL,
  `id_kegiatan_tematik` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_rapat_eksternal` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_surat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `scan_undangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyelenggara` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumentasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laporan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rapat-internal`
--

CREATE TABLE `rapat-internal` (
  `rapat_internal` bigint(20) UNSIGNED NOT NULL,
  `id_kegiatan_tematik` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_rapat_internal` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_surat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `scan_undangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scan_daftar_hadir` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumentasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laporan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` bigint(20) UNSIGNED NOT NULL,
  `nama_role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sasaran`
--

CREATE TABLE `sasaran` (
  `id_sasaran` bigint(20) UNSIGNED NOT NULL,
  `id_tujuan` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_sasaran` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `strategi`
--

CREATE TABLE `strategi` (
  `id_strategi` bigint(20) UNSIGNED NOT NULL,
  `id_sasaran` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_strategi` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub-bidang`
--

CREATE TABLE `sub-bidang` (
  `id_sub_bidang` bigint(20) UNSIGNED NOT NULL,
  `id_bidang` bigint(20) UNSIGNED NOT NULL,
  `nama_sub_bidang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` bigint(20) UNSIGNED NOT NULL,
  `nomor_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date DEFAULT NULL,
  `tl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_jenis_surat` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `nomor_surat`, `perihal`, `tanggal`, `tl`, `keterangan`, `id_user`, `id_jenis_surat`, `created_at`, `updated_at`) VALUES
(2, '112/dfd/235', 'surat oke', '2023-01-04', 'sdsdsd', 'sdsdsd', 2, 1, '2023-01-12 07:17:36', '2023-01-12 07:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE `tujuan` (
  `id_tujuan` bigint(20) UNSIGNED NOT NULL,
  `id_misi` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_tujuan` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_role` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `id_role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 2, 'luthfi', 'anjilibey@gmail.com', NULL, '$2y$10$FA6EwXTb5xZbz08rOLGqEuWS2In9EzTttFh7C2miZMqGsY4ngjXYi', NULL, '2023-01-04 20:19:04', '2023-01-04 20:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE `visi` (
  `id_visi` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_visi` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `dasar-hukum`
--
ALTER TABLE `dasar-hukum`
  ADD PRIMARY KEY (`id_dasar_hukum`),
  ADD KEY `dasar_hukum_id_kegiatan_tematik_foreign` (`id_kegiatan_tematik`),
  ADD KEY `dasar_hukum_id_user_foreign` (`id_user`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenis-surat`
--
ALTER TABLE `jenis-surat`
  ADD PRIMARY KEY (`id_jenis_surat`);

--
-- Indexes for table `kegiatan-tematik`
--
ALTER TABLE `kegiatan-tematik`
  ADD PRIMARY KEY (`id_kegiatan_tematik`),
  ADD KEY `kegiatan_tematik_id_sub_bidang_foreign` (`id_sub_bidang`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id_misi`),
  ADD KEY `misi_id_visi_foreign` (`id_visi`);

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
-- Indexes for table `program-pendukung`
--
ALTER TABLE `program-pendukung`
  ADD PRIMARY KEY (`id_program_pendukung`),
  ADD KEY `program_pendukung_id_kegiatan_tematik_foreign` (`id_kegiatan_tematik`),
  ADD KEY `program_pendukung_id_strategi_foreign` (`id_strategi`),
  ADD KEY `program_pendukung_id_user_foreign` (`id_user`);

--
-- Indexes for table `rapat-eksternal`
--
ALTER TABLE `rapat-eksternal`
  ADD PRIMARY KEY (`rapat_eksternal`),
  ADD KEY `rapat_eksternal_id_kegiatan_tematik_foreign` (`id_kegiatan_tematik`),
  ADD KEY `rapat_eksternal_id_user_foreign` (`id_user`);

--
-- Indexes for table `rapat-internal`
--
ALTER TABLE `rapat-internal`
  ADD PRIMARY KEY (`rapat_internal`),
  ADD KEY `rapat_internal_id_kegiatan_tematik_foreign` (`id_kegiatan_tematik`),
  ADD KEY `rapat_internal_id_user_foreign` (`id_user`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `sasaran`
--
ALTER TABLE `sasaran`
  ADD PRIMARY KEY (`id_sasaran`),
  ADD KEY `sasaran_id_tujuan_foreign` (`id_tujuan`);

--
-- Indexes for table `strategi`
--
ALTER TABLE `strategi`
  ADD PRIMARY KEY (`id_strategi`),
  ADD KEY `strategi_id_sasaran_foreign` (`id_sasaran`);

--
-- Indexes for table `sub-bidang`
--
ALTER TABLE `sub-bidang`
  ADD PRIMARY KEY (`id_sub_bidang`),
  ADD KEY `sub_bidang_id_bidang_foreign` (`id_bidang`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `surat_id_user_foreign` (`id_user`),
  ADD KEY `surat_id_jenis_surat_foreign` (`id_jenis_surat`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id_tujuan`),
  ADD KEY `tujuan_id_misi_foreign` (`id_misi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_role_foreign` (`id_role`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id_visi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id_bidang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dasar-hukum`
--
ALTER TABLE `dasar-hukum`
  MODIFY `id_dasar_hukum` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis-surat`
--
ALTER TABLE `jenis-surat`
  MODIFY `id_jenis_surat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kegiatan-tematik`
--
ALTER TABLE `kegiatan-tematik`
  MODIFY `id_kegiatan_tematik` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `misi`
--
ALTER TABLE `misi`
  MODIFY `id_misi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program-pendukung`
--
ALTER TABLE `program-pendukung`
  MODIFY `id_program_pendukung` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rapat-eksternal`
--
ALTER TABLE `rapat-eksternal`
  MODIFY `rapat_eksternal` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rapat-internal`
--
ALTER TABLE `rapat-internal`
  MODIFY `rapat_internal` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sasaran`
--
ALTER TABLE `sasaran`
  MODIFY `id_sasaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `strategi`
--
ALTER TABLE `strategi`
  MODIFY `id_strategi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub-bidang`
--
ALTER TABLE `sub-bidang`
  MODIFY `id_sub_bidang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id_tujuan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visi`
--
ALTER TABLE `visi`
  MODIFY `id_visi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dasar-hukum`
--
ALTER TABLE `dasar-hukum`
  ADD CONSTRAINT `dasar_hukum_id_kegiatan_tematik_foreign` FOREIGN KEY (`id_kegiatan_tematik`) REFERENCES `kegiatan-tematik` (`id_kegiatan_tematik`),
  ADD CONSTRAINT `dasar_hukum_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `kegiatan-tematik`
--
ALTER TABLE `kegiatan-tematik`
  ADD CONSTRAINT `kegiatan_tematik_id_sub_bidang_foreign` FOREIGN KEY (`id_sub_bidang`) REFERENCES `sub-bidang` (`id_sub_bidang`);

--
-- Constraints for table `misi`
--
ALTER TABLE `misi`
  ADD CONSTRAINT `misi_id_visi_foreign` FOREIGN KEY (`id_visi`) REFERENCES `visi` (`id_visi`);

--
-- Constraints for table `program-pendukung`
--
ALTER TABLE `program-pendukung`
  ADD CONSTRAINT `program_pendukung_id_kegiatan_tematik_foreign` FOREIGN KEY (`id_kegiatan_tematik`) REFERENCES `kegiatan-tematik` (`id_kegiatan_tematik`),
  ADD CONSTRAINT `program_pendukung_id_strategi_foreign` FOREIGN KEY (`id_strategi`) REFERENCES `strategi` (`id_strategi`),
  ADD CONSTRAINT `program_pendukung_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `rapat-eksternal`
--
ALTER TABLE `rapat-eksternal`
  ADD CONSTRAINT `rapat_eksternal_id_kegiatan_tematik_foreign` FOREIGN KEY (`id_kegiatan_tematik`) REFERENCES `kegiatan-tematik` (`id_kegiatan_tematik`),
  ADD CONSTRAINT `rapat_eksternal_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `rapat-internal`
--
ALTER TABLE `rapat-internal`
  ADD CONSTRAINT `rapat_internal_id_kegiatan_tematik_foreign` FOREIGN KEY (`id_kegiatan_tematik`) REFERENCES `kegiatan-tematik` (`id_kegiatan_tematik`),
  ADD CONSTRAINT `rapat_internal_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `sasaran`
--
ALTER TABLE `sasaran`
  ADD CONSTRAINT `sasaran_id_tujuan_foreign` FOREIGN KEY (`id_tujuan`) REFERENCES `tujuan` (`id_tujuan`);

--
-- Constraints for table `strategi`
--
ALTER TABLE `strategi`
  ADD CONSTRAINT `strategi_id_sasaran_foreign` FOREIGN KEY (`id_sasaran`) REFERENCES `sasaran` (`id_sasaran`);

--
-- Constraints for table `sub-bidang`
--
ALTER TABLE `sub-bidang`
  ADD CONSTRAINT `sub_bidang_id_bidang_foreign` FOREIGN KEY (`id_bidang`) REFERENCES `bidang` (`id_bidang`);

--
-- Constraints for table `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `surat_id_jenis_surat_foreign` FOREIGN KEY (`id_jenis_surat`) REFERENCES `jenis-surat` (`id_jenis_surat`),
  ADD CONSTRAINT `surat_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD CONSTRAINT `tujuan_id_misi_foreign` FOREIGN KEY (`id_misi`) REFERENCES `misi` (`id_misi`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_role_foreign` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
