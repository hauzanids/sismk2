-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 05:55 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sismk2`
--

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `deskripsi`, `gambar`, `tanggal`, `created_at`, `updated_at`) VALUES
(7, 'Acara 17-an SMK 2', 'diawali dengan apel pagi yang dipimpin langsung oleh Drs. Supriyadi, MM dalam rangka memperingati perayaan Hari Kemerdekaan Republik Indonesia yang ke 72 Tahun, dan dilanjutkan dengan serangkaian acara yang akan berlangsung sampai hari Kamis 17 Agustus 2019. Kali ini seluruh siswa melalui perwakilan kelas akan mengikuti lomba ketrampilan bermain egrang.', '1528686567.jpg', '2019-08-17', '2019-07-22 18:16:21', '2019-07-22 18:16:21'),
(8, 'Senam Massal 2019', 'SMKN 2 melaksanakan kegiatan senam massal yang akan dihadiri oleh banyak peserta dari berbagai manca negara. Acara dimulai dengan senam pagi yang diikuti oleh seluruh peserta didik, guru, tata usaha dan rekan-rekan lainnya.', '738064910.jfif', '2019-09-09', '2019-07-22 18:22:32', '2019-07-22 19:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal1`
--

CREATE TABLE `jadwal1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jammulai` time NOT NULL,
  `jamselesai` time NOT NULL,
  `senin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selasa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rabu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kamis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal1`
--

INSERT INTO `jadwal1` (`id`, `jammulai`, `jamselesai`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `created_at`, `updated_at`) VALUES
(1, '07:00:00', '09:00:00', 'Bahasa Indonesia', 'Matematika', 'Bahasa Inggris', 'Seni Budaya', 'Fisika', NULL, NULL),
(2, '09:00:00', '10:00:00', 'Istirahat', 'Istirahat', 'Istirahat', 'Istirahat', 'Istirahat', NULL, NULL),
(3, '10:00:00', '12:00:00', 'Pendidikan Kewarganegaraan', 'Pendidikan Agama Islam', 'Penjaskes', 'Photography', 'Kimia', NULL, NULL),
(4, '12:00:00', '13:00:00', 'Istirahat', 'Istirahat', 'Istirahat', 'Istirahat', '', NULL, NULL),
(5, '13:00:00', '15:00:00', 'Ilmu Pengetahuan Sosial', 'Biologi', 'Sistem Komputer', 'Nirmana', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal2`
--

CREATE TABLE `jadwal2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jammulai` time NOT NULL,
  `jamselesai` time NOT NULL,
  `senin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selasa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rabu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kamis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal2`
--

INSERT INTO `jadwal2` (`id`, `jammulai`, `jamselesai`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `created_at`, `updated_at`) VALUES
(1, '07:00:00', '09:00:00', 'Ilmu Pengetahuan Sosial', 'Pendidikan Agama Islam', 'Typography', 'Kimia', 'Kewirausahaan', NULL, NULL),
(2, '09:00:00', '10:00:00', 'Istirahat', 'Istirahat', 'Istirahat', 'Istirahat', 'Istirahat', NULL, NULL),
(3, '10:00:00', '12:00:00', 'Bahasa Indonesia', 'Biologi', 'Bahasa Inggris', 'Seni Budaya', 'Fisika', NULL, NULL),
(4, '12:00:00', '13:00:00', 'Istirahat', 'Istirahat', 'Istirahat', 'Istirahat', '', NULL, NULL),
(5, '13:00:00', '15:00:00', 'Pendidikan Kewarganegaraan', 'Matematika', 'Penjaskes', 'Videography', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal3`
--

CREATE TABLE `jadwal3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jammulai` time NOT NULL,
  `jamselesai` time NOT NULL,
  `senin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selasa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rabu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kamis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal3`
--

INSERT INTO `jadwal3` (`id`, `jammulai`, `jamselesai`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `created_at`, `updated_at`) VALUES
(1, '07:00:00', '09:00:00', 'Pendidikan Kewarganegaraan', 'Biologi', 'Penjaskes', 'Web Design', 'Kimia', NULL, NULL),
(2, '09:00:00', '10:00:00', 'Istirahat', 'Istirahat', 'Istirahat', 'Istirahat', 'Istirahat', NULL, NULL),
(3, '10:00:00', '12:00:00', 'Ilmu Pengetahuan Sosial', 'Matematika', 'Multimedia', 'Fisika', 'Kewirausahaan', NULL, NULL),
(4, '12:00:00', '13:00:00', 'Istirahat', 'Istirahat', 'Istirahat', 'Istirahat', '', NULL, NULL),
(5, '13:00:00', '15:00:00', 'Bahasa Indonesia', 'Pendidikan Agama Islam', 'Bahasa Inggris', 'Seni Budaya', '', NULL, NULL);

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
(31, '2014_10_12_000000_create_users_table', 1),
(32, '2014_10_12_100000_create_password_resets_table', 1),
(33, '2019_07_19_074005_create_jadwal_table', 1),
(34, '2019_07_19_074336_create_informasi_table', 1),
(35, '2019_07_19_074457_create_elen_table', 1),
(36, '2019_07_19_075119_create_tugas_table', 1),
(37, '2019_07_21_064538_create_jadwal1_table', 2),
(38, '2019_07_21_064616_create_jadwal2_table', 2),
(39, '2019_07_21_064624_create_jadwal3_table', 2),
(40, '2019_07_23_030718_create_nirmana_table', 3),
(41, '2019_07_23_030738_create_photography_table', 3),
(42, '2019_07_23_030750_create_sistemkomputer_table', 3),
(43, '2019_07_23_030806_create_typography_table', 3),
(44, '2019_07_23_030814_create_videography_table', 3),
(45, '2019_07_23_030828_create_multimedia_table', 3),
(46, '2019_07_23_030840_create_webdesign_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `multimedia`
--

CREATE TABLE `multimedia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multimedia`
--

INSERT INTO `multimedia` (`id`, `judul`, `deskripsi`, `materi`, `created_at`, `updated_at`) VALUES
(2, 'Materi 1', 'Dasar Multimedia', '610091706.pdf', '2019-07-23 08:27:12', '2019-07-23 08:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `nirmana`
--

CREATE TABLE `nirmana` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nirmana`
--

INSERT INTO `nirmana` (`id`, `judul`, `deskripsi`, `materi`, `created_at`, `updated_at`) VALUES
(4, 'Materi 1', 'Pengertian Nirmana', '749489485.pdf', '2019-07-23 07:24:50', '2019-07-23 07:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photography`
--

CREATE TABLE `photography` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photography`
--

INSERT INTO `photography` (`id`, `judul`, `deskripsi`, `materi`, `created_at`, `updated_at`) VALUES
(2, 'Materi 1', 'Pengertian Photography', '1783829997.pdf', '2019-07-23 08:39:45', '2019-07-23 08:39:45');

-- --------------------------------------------------------

--
-- Table structure for table `sistemkomputer`
--

CREATE TABLE `sistemkomputer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sistemkomputer`
--

INSERT INTO `sistemkomputer` (`id`, `judul`, `deskripsi`, `materi`, `created_at`, `updated_at`) VALUES
(2, 'Materi 1', 'Pengertian Sistem Komputer', '796262893.pdf', '2019-07-23 08:42:44', '2019-07-23 08:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `typography`
--

CREATE TABLE `typography` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `typography`
--

INSERT INTO `typography` (`id`, `judul`, `deskripsi`, `materi`, `created_at`, `updated_at`) VALUES
(2, 'Materi 1', 'Pengertian Typography', '1430977308.pdf', '2019-07-23 08:45:21', '2019-07-23 08:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `user_type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'staff', 'staff@staff.com', NULL, 'staff', '$2y$10$OWW42SEkdnA4pRDOWtroTugJNv4ZC5.Cqz2Zy1LCpBak.C4ce8zsW', NULL, '2019-07-19 04:13:24', '2019-07-19 04:13:24'),
(2, 'guru', 'guru@guru.com', NULL, 'guru', '$2y$10$/VQxl.dkiVafBrwe84DjA.aOJ3JzS/iR7TB8awm12bfDoQ3GyCCym', NULL, '2019-07-19 04:13:44', '2019-07-19 04:13:44'),
(3, 'murid1', 'murid1@murid1.com', NULL, 'murid1', '$2y$10$8DnQ8Pz.N.jnxJ4BiOXvw.d0Nym2qa8pwwK3X6yD7PQ5IyUv5WdLq', NULL, '2019-07-19 04:14:07', '2019-07-19 04:14:07'),
(4, 'murid2', 'murid2@murid2.com', NULL, 'murid2', '$2y$10$nK738qNlBeIPITfudmiGm.PywCWw3fPc8cZQfJBALlB4TiE5i9fZa', NULL, '2019-07-21 01:22:05', '2019-07-21 01:22:05'),
(5, 'murid3', 'murid3@murid3.com', NULL, 'murid3', '$2y$10$egwLlJqc4lqSaS5xu0Q2luWUBlWhlEnXPiekfkqAZ09OtSNQfebb2', NULL, '2019-07-21 01:22:27', '2019-07-21 01:22:27');

-- --------------------------------------------------------

--
-- Table structure for table `videography`
--

CREATE TABLE `videography` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videography`
--

INSERT INTO `videography` (`id`, `judul`, `deskripsi`, `materi`, `created_at`, `updated_at`) VALUES
(2, 'Materi 1', 'Pengertian Videography', '444473593.pdf', '2019-07-23 08:48:07', '2019-07-23 08:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `webdesign`
--

CREATE TABLE `webdesign` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `webdesign`
--

INSERT INTO `webdesign` (`id`, `judul`, `deskripsi`, `materi`, `created_at`, `updated_at`) VALUES
(2, 'Materi 1', 'Pengertian Web Design', '572609290.pdf', '2019-07-23 08:51:39', '2019-07-23 08:51:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal1`
--
ALTER TABLE `jadwal1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal2`
--
ALTER TABLE `jadwal2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal3`
--
ALTER TABLE `jadwal3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multimedia`
--
ALTER TABLE `multimedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nirmana`
--
ALTER TABLE `nirmana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photography`
--
ALTER TABLE `photography`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sistemkomputer`
--
ALTER TABLE `sistemkomputer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typography`
--
ALTER TABLE `typography`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videography`
--
ALTER TABLE `videography`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webdesign`
--
ALTER TABLE `webdesign`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jadwal1`
--
ALTER TABLE `jadwal1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwal2`
--
ALTER TABLE `jadwal2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwal3`
--
ALTER TABLE `jadwal3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `multimedia`
--
ALTER TABLE `multimedia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nirmana`
--
ALTER TABLE `nirmana`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `photography`
--
ALTER TABLE `photography`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sistemkomputer`
--
ALTER TABLE `sistemkomputer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `typography`
--
ALTER TABLE `typography`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `videography`
--
ALTER TABLE `videography`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `webdesign`
--
ALTER TABLE `webdesign`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
