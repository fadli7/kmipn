-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 17, 2018 at 03:29 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kmipn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@kmipn.com', '$2y$10$YCuQmSbdcpOa8jzH/EWFF.FweyWzhmjn.fzJNe8tZCYhK862bdgKC', NULL, '2018-07-17 00:06:07', '2018-07-17 00:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `status` enum('Publish','Draft') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `visit_date` date NOT NULL,
  `visit_time` time NOT NULL,
  `hits` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Cipta Inovasi', NULL, '2018-07-17 00:06:06', '2018-07-17 00:06:06'),
(2, 'Bisnis Tik', NULL, '2018-07-17 00:06:06', '2018-07-17 00:06:06'),
(3, 'Game Development', NULL, '2018-07-17 00:06:06', '2018-07-17 00:06:06'),
(4, 'E-Goverment', NULL, '2018-07-17 00:06:06', '2018-07-17 00:06:06'),
(5, 'IoT (Internet of Things)', NULL, '2018-07-17 00:06:06', '2018-07-17 00:06:06'),
(6, 'Desain Animasi', NULL, '2018-07-17 00:06:06', '2018-07-17 00:06:06'),
(7, 'Keamanan Jaringan', NULL, '2018-07-17 00:06:06', '2018-07-17 00:06:06'),
(8, 'Hackathon', NULL, '2018-07-17 00:06:06', '2018-07-17 00:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `lomba`
--

CREATE TABLE `lomba` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `pengumuman` text COLLATE utf8mb4_unicode_ci,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `peraturan` text COLLATE utf8mb4_unicode_ci,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lomba`
--

INSERT INTO `lomba` (`id`, `kategori_id`, `pengumuman`, `deskripsi`, `peraturan`, `icon`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, '', 'Lomba Cipta Inovasi KMIPN 2018 adalah wadah \n                                bagi para mahasiswa politeknik seluruh Indonesia untuk \n                                menuliskan terobosan ide kreatif mereka sebagai salah satu \n                                bentuk intellectual respons atas segala permasalahan nyata\n                                di bidang TIK (Teknologi Informasi dan Komunikasi) \n                                masyarakat Indonesia. Ide yang diajukan diharapkan \n                                bersifat unik, kreatif, visioner, futuristik dan bermanfaat.', 'Cipta_Inovasi.pdf', 'lamp.svg', NULL, '2018-07-17 00:06:07', '2018-07-17 00:06:07'),
(2, 2, '', 'Lomba Bisnis TIK adalah kompetisi pengembangan \n                                model bisnis dengan produk TIK. Lomba ini memberikan \n                                kesempatan kepada peserta yang memiliki ide bisnis, \n                                startup dan pengembangan usaha yang berorientasi pada \n                                produk TIK, berupa jasa atau produk.', 'LOMBA_BISNIS_TIK.pdf', 'briefcase.svg', NULL, '2018-07-17 00:06:07', '2018-07-17 00:06:07'),
(3, 3, '', 'Game Development adalah salah satu cabang kompetisi \n                                KMIPN yang diadakan oleh PENS. Game Development \n                                KMIPN ditujukan untuk seluruh mahasiswa politeknik se- \n                                Indonesia. Game Development KMIPN tidak membatasi \n                                tema sehingga para peserta dapat berkreasi sekreatif \n                                mungkin dalam permainan mereka.', 'Game_Development.pdf', 'console.svg', NULL, '2018-07-17 00:06:07', '2018-07-17 00:06:07'),
(4, 4, '', 'e-Government merupakan pemanfaatan teknologi \n                                informasi berbasis internet oleh pemerintah dalam \n                                memberikan informasi dan layanan kepada masyarakat, \n                                bisnis, pegawai, atau pemerintah lainnya, atau sebaliknya \n                                masyarakat atau bisnis dapat berinteraksi, atau \n                                memberikan informasi kepada pemerintah.', 'KATEGORI_LOMBA_E-Gov.pdf', 'city-hall.svg', NULL, '2018-07-17 00:06:07', '2018-07-17 00:06:07'),
(5, 5, '', 'Lomba Piranti Cerdas adalah kompetisi karya rekayasa \n                                pada keilmuan teknik elektro yang bertujuan untuk \n                                mendorong yang dihasilkan karya-karya penelitian inovatif \n                                yang mengintegrasikan aspek-aspek design dari design \n                                sistem hingga perangkat, metodologi dan implementasi.', '', 'cpu.svg', NULL, '2018-07-17 00:06:07', '2018-07-17 00:06:07'),
(6, 6, '', 'Desain animasi adalah sebuah kompetisi pembuatan video \n                                animasi pendek dalam bentuk 2D/3D yang memberikan \n                                informasi dan pengenalan singkat yang unik dan menarik \n                                tentang revolusi industri di Indonesia, untuk memberikan \n                                kesadaran terhadap masyarakat luas tentang \n                                perkembangan teknologi di industri Indonesia.', 'Rancangan_Desain_Animasi.pdf', 'video-player.svg', NULL, '2018-07-17 00:06:07', '2018-07-17 00:06:07'),
(7, 7, '', 'Lomba keamanan jaringan adalah lomba untuk menguji \n                                kemampuan mengamankan sistemkomputer beserta \n                                jaringannya. Peserta akan berkompetisi dengan peserta lain \n                                dalam kemampuan mengkongurasi sistem yang aman dan \n                                melakukan identikasi potensi celahkeamanan dari sistem \n                                komputer yang ada kemudian memberikan solusi \n                                keamanannya.', 'KEAMANAN_JARINGAN_Today.pdf', 'shield.svg', NULL, '2018-07-17 00:06:07', '2018-07-17 00:06:07'),
(8, 8, '', 'Hacking adalah pemecahan masalah yang kretif (tidak \n                                harus melibatkan teknologi). Hackathon adalah acara \n                                tentang apapun dari suatu waktu tertentu dimana orang \n                                berkumpul untuk menyelesaikan masalah. Kebanyakan \n                                hackathon yang dilakukan juga memiliki trek parallel untuk \n                                karya hackathon (banyak karya yang dihasilkan).', 'Hackathon.pdf', 'programmer.svg', NULL, '2018-07-17 00:06:07', '2018-07-17 00:06:07');

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
(3, '2016_11_01_152432_create_users_activation_table', 1),
(4, '2018_01_15_025120_create_kategori_table', 1),
(5, '2018_04_30_074104_create_lomba_table', 1),
(6, '2018_05_02_013804_create_counters_table', 1),
(7, '2018_05_03_221550_create_artikel_table', 1),
(8, '2018_05_03_221607_create_galeri_table', 1),
(9, '2018_05_07_024951_create_tim_table', 1),
(10, '2018_05_08_111015_create_admins_table', 1);

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
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `nama_tim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asal_pt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_proposal` text COLLATE utf8mb4_unicode_ci,
  `total_anggota` int(11) DEFAULT NULL,
  `status` enum('Daftar','Tahap Seleksi','Lolos','Tidak Lolos') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Daftar',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`id`, `users_id`, `kategori_id`, `nama_tim`, `asal_pt`, `file_proposal`, `total_anggota`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'TIM', 'PENS', 'operasi linux word.docx', 0, 'Tahap Seleksi', NULL, '2018-07-17 00:06:07', '2018-07-17 00:06:07'),
(2, 9, 2, 'Aloha', 'PENS', NULL, 2, 'Daftar', NULL, '2018-07-17 01:23:19', '2018-07-17 01:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan` text COLLATE utf8mb4_unicode_ci,
  `no_mahasiswa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tim_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('Ketua','Anggota') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Anggota',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `jenis_kelamin`, `jurusan`, `no_mahasiswa`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_telp`, `tim_id`, `role`, `remember_token`, `deleted_at`, `created_at`, `updated_at`, `is_activated`) VALUES
(1, 'ketua', 'ketua@kmipn.com', '$2y$10$jgyASM2tt1vYN6cZpaTQCe8iPU6IiJKuIP9.tiJ0SvOxugMMFNX66', 'Laki-laki', 'IT', '2103171036', 'Surabaya', '2018-07-17', 'Surabaya', '0895337348558', '1', 'Ketua', NULL, NULL, '2018-07-17 00:06:06', '2018-07-17 00:06:06', 0),
(2, 'anggota1', 'anggota1@kmipn.com', NULL, 'Laki-laki', 'IT', '2103171036', 'Surabaya', '2018-07-17', 'Surabaya', '0895337348558', '1', 'Anggota', NULL, NULL, '2018-07-17 00:06:06', '2018-07-17 00:06:06', 0),
(3, 'Anggota2', 'Anggota2@kmipn.com', NULL, 'Laki-laki', 'IT', '2103171036', 'Surabaya', '2018-07-17', 'Surabaya', '0895337348558', '1', 'Anggota', NULL, NULL, '2018-07-17 00:06:06', '2018-07-17 00:06:06', 0),
(9, 'ilham', 'fadlifarham10@gmail.com', '$2y$10$q4trisXYwrlRiqzhtFOdfutePyGg5zO8YdwKzNsFe7Lcblfr/1Z86', 'Laki-laki', 'IY', '21212', 'Surabaya', '2007-10-25', 'safsfsdsdf', '82232666431', '2', 'Ketua', 'KKPDOEH9X2NecPVZPf9fcnAqi3zhrYmM2jzEfPvMTBaJugEN0epJWJOWrlal', NULL, '2018-07-17 01:23:09', '2018-07-17 01:23:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_activations`
--

CREATE TABLE `user_activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lomba`
--
ALTER TABLE `lomba`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lomba_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tim_users_id_foreign` (`users_id`),
  ADD KEY `tim_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_activations`
--
ALTER TABLE `user_activations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_activations_users_id_foreign` (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `lomba`
--
ALTER TABLE `lomba`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_activations`
--
ALTER TABLE `user_activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lomba`
--
ALTER TABLE `lomba`
  ADD CONSTRAINT `lomba_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);

--
-- Constraints for table `tim`
--
ALTER TABLE `tim`
  ADD CONSTRAINT `tim_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `tim_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_activations`
--
ALTER TABLE `user_activations`
  ADD CONSTRAINT `user_activations_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
