-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2023 at 08:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cbt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `nama_admin`, `email`, `password`, `avatar`, `role`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'ekasaputra', 'admin@gmail.com', '$2y$10$JNyOsH3VUSVb2Tjwv60IDuClBS/PTarTbyfIk20g5ysDQfuYF8Oqa', 'default.png', 1, 1, '2023-09-11 13:23:24', '2023-09-11 13:23:24');

-- --------------------------------------------------------

--
-- Table structure for table `detail_essay`
--

CREATE TABLE `detail_essay` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `soal` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_ujian`
--

CREATE TABLE `detail_ujian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `soal` longtext NOT NULL,
  `pg_1` varchar(255) NOT NULL,
  `pg_2` varchar(255) NOT NULL,
  `pg_3` varchar(255) NOT NULL,
  `pg_4` varchar(255) NOT NULL,
  `pg_5` varchar(255) NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_settings`
--

CREATE TABLE `email_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notif_akun` int(11) NOT NULL DEFAULT 1,
  `notif_materi` int(11) NOT NULL DEFAULT 1,
  `notif_tugas` int(11) NOT NULL DEFAULT 1,
  `notif_ujian` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_settings`
--

INSERT INTO `email_settings` (`id`, `notif_akun`, `notif_materi`, `notif_tugas`, `notif_ujian`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `essay_siswa`
--

CREATE TABLE `essay_siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `detail_ujian_id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `jawaban` longtext DEFAULT NULL,
  `ragu` tinyint(1) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL
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
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `kode`, `nama`) VALUES
(1, 'cep28v6LD2xErojpYHv2', 'NGu84XKQyaOW9gZMha7T5thz4ehjpLOKEtGjEu6R.jpg'),
(2, 'P4QJxTPxVeR9WozSsLi4', 'h5eUH7AWqhU9Y6yCkpA0y1BbqGiFkr0n4cVYYbuy.jpg'),
(4, 'QURACbFJcGg4HxEQQr0d', 'MLIGkbSVbnpcDROLtSuHPu4SD65CRJnyF5IiZw0N.jpg'),
(5, 'tU5JWe2opw3cBMwnK9gz', 'ZnhLhKiEz4bKKfDzNY1l0ZuByCI892fKU8QJfolH.jpg'),
(6, 'nD4M86D7pVEMP92kdHyT', 'wva9ICKpULKwrHMPAOLZ8WipCFfZxx3UvqpRdFAD.jpg'),
(7, '6U3rnlCGJrzANT8N0RxS', 'Et1ThHmM75Jk82DCaOrp2qkCmeDMYJ3fbUeygYoJ.jpg'),
(8, 'yKsbBE2wymTVqJ8g1ztg', 'KdTu8Tj3cHGaM6aiMrieqiweMYYtJuWGj7lDvG8w.jpg'),
(9, 'bKEcovWbnSlMYudZrshH', 'MAU53b52GBvRGgHBuD5eZg1vuecePbqRnsQ7g5pZ.jpg'),
(10, '14byWaHmXCCKaXygLiYn', 'knP0hvLxDJtWMspEHWJCBeOhhGdfUkdeaNHmX7iU.html'),
(15, 'yvWuEn3XcwvUurYXE4hw', '8mb9MpyHU8dHW9J0eK4z9eJuwdmdL2chQutnxUro.mp4'),
(17, '14byWaHmXCCKaXygLiYn', 'zt27MDDdAYc1JS9SdVDpD59XKdkDi3EpmkCpoSFK.mp4'),
(20, 'CZKDLa1sircWaldfYd5Z', 'izxIePYl4FFipuZO3bA66UykVIvL1gG3WbBFpLwm.mp4'),
(21, 'CZKDLa1sircWaldfYd5Z', '6qz2qWGgclOTab7XwzOZscFR5FrSsd86kOvsBmQQ.pdf'),
(22, 'vx54ILXqrebLIYefFT9R', 'lVWr6CRqJAtdSfArDNq9wGlwvjRqCtkjLddfIxmg.mp4'),
(23, '7TzQy8PaVVOe1bngva3x', 'RWVzZmlsqKBh9DYqyYUNcwWcje8TTQbZkLeJft1j.png');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama_guru`, `gender`, `email`, `password`, `avatar`, `role`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'ekasaputra', 'Laki - Laki', 'guru@gmail.com', '$2y$10$o00cbevBcA2H8rUyy8/wReTznlD70Riu8nkGEdu80Jc/h69SGuwN.', 'default.png', 2, 1, '2023-09-11 13:22:56', '2023-09-11 13:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `gurukelas`
--

CREATE TABLE `gurukelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guru_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gurukelas`
--

INSERT INTO `gurukelas` (`id`, `guru_id`, `kelas_id`, `created_at`, `updated_at`) VALUES
(2, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gurumapel`
--

CREATE TABLE `gurumapel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guru_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gurumapel`
--

INSERT INTO `gurumapel` (`id`, `guru_id`, `mapel_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

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
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(3, 'KOMPETENSI MANAJERIAL', NULL, '2023-09-11 21:35:55'),
(4, 'KOMPETENSI SOSIO KULTULAR', NULL, '2023-09-11 21:36:04'),
(5, 'KOMPETENSI TEKNIS', NULL, '2023-09-11 21:36:10');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatans`
--

CREATE TABLE `kegiatans` (
  `id` bigint(20) NOT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatans`
--

INSERT INTO `kegiatans` (`id`, `kode`, `judul`, `keterangan`, `image`, `created_at`, `updated_at`, `id_siswa`) VALUES
(4, '7TzQy8PaVVOe1bngva3x', 'kklkl', 'klkkll', NULL, '2023-10-10 22:56:49', '2023-10-11 00:44:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 'Rekayasa Prangkat Lunak', NULL, '2023-09-11 17:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mapel` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`, `created_at`, `updated_at`) VALUES
(1, 'Pembuatan Web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `subkategori_id` bigint(20) UNSIGNED NOT NULL,
  `nama_materi` varchar(255) NOT NULL,
  `teks` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `kode`, `guru_id`, `kelas_id`, `mapel_id`, `subkategori_id`, `nama_materi`, `teks`, `created_at`, `updated_at`) VALUES
(1, '14byWaHmXCCKaXygLiYn', 1, 1, 1, 5, 'Modul 2-1', 'sdadsa', '2023-09-11 17:48:21', '2023-09-12 14:14:02'),
(2, 'yvWuEn3XcwvUurYXE4hw', 1, 1, 1, 4, 'Web Lanjutan', '1234567', '2023-09-12 14:10:14', '2023-09-12 14:10:14'),
(3, 'vx54ILXqrebLIYefFT9R', 1, 1, 1, 5, 'test', 'km', '2023-09-12 16:42:26', '2023-09-12 16:42:26');

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
(1, '2022_09_11_200448_create_kategoris_table', 1),
(2, '2022_09_11_200449_create_subkategoris_table', 1),
(3, '2022_10_25_012443_create_admins_table', 1),
(4, '2022_10_26_103328_create_guru_table', 1),
(5, '2022_10_26_104202_create_kelas_table', 1),
(6, '2022_10_26_104356_create_mapel_table', 1),
(7, '2022_10_26_121058_create_siswa_table', 1),
(8, '2022_11_01_103811_create_gurukelas_table', 1),
(9, '2022_11_01_133312_create_gurumapel_table', 1),
(10, '2022_11_02_184631_create_jobs_table', 1),
(11, '2022_11_03_110958_create_failed_jobs_table', 1),
(12, '2022_11_03_143730_create_tokens_table', 1),
(13, '2022_11_03_193550_create_materi_table', 1),
(14, '2022_11_04_091643_create_notifications_table', 1),
(15, '2022_11_04_093007_create_files_table', 1),
(16, '2022_11_07_065814_create_tugas_table', 1),
(17, '2022_11_07_071028_create_userchats_table', 1),
(18, '2022_11_07_080719_create_tugas_siswas_table', 1),
(19, '2022_11_08_182844_create_ujians_table', 1),
(20, '2022_11_08_184638_create_detail_ujians_table', 1),
(21, '2022_11_09_102442_create_pg_siswas_table', 1),
(22, '2022_11_09_122021_create_waktu_ujians_table', 1),
(23, '2022_11_13_205830_create_detail_essays_table', 1),
(24, '2022_11_14_082908_create_essay_siswas_table', 1),
(25, '2022_11_14_183529_create_email_settings_table', 1),
(26, '2023_09_12_015944_create_sliders_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `narasis`
--

CREATE TABLE `narasis` (
  `id` bigint(20) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `narasis`
--

INSERT INTO `narasis` (`id`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Narasi', 'aiuweucifqewadfvads iajfaoijf oia inaidhha adjshnvkjad aiudhviaudh auidhviuadhv aiduhvaidjvh iuahdvijdah adivhiaudh auidhvi', NULL, '2023-09-12 15:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `nama`, `siswa_id`, `key`, `kode`) VALUES
(3, 'test', 1, 'materi', 'vx54ILXqrebLIYefFT9R');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) NOT NULL,
  `id_siswa` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  `file` text NOT NULL,
  `is_proses` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `id_siswa`, `tanggal`, `keterangan`, `file`, `is_proses`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-10-20', 'Testing cuyyy', '2bEuVEmdGamPjic2o6DXiZkHS3L9xoh9CZhvaQc3.jpg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pg_siswa`
--

CREATE TABLE `pg_siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `detail_ujian_id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `jawaban` varchar(255) DEFAULT NULL,
  `benar` tinyint(1) DEFAULT NULL,
  `ragu` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama_siswa`, `gender`, `kelas_id`, `email`, `password`, `avatar`, `role`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '30303030303', 'Putra', 'Laki - Laki', 1, 'siswa@gmail.com', '$2y$10$FRtxaGAOhwp7NtQrJt6Xh.k9DgI/IvewcOGoSvBbBaRqWU1ipRvXS', 'default.png', 3, 0, '2023-09-11 17:38:05', '2023-10-17 07:54:56');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `img`, `title`, `subtitle`, `created_at`, `updated_at`) VALUES
(6, 'assets/files/QpyQw8E6UKWE1lKBjTRsenBCU9SnMAZeKNrUbbZL.png', 'jkacs', 'kajds', '2023-09-12 16:03:10', '2023-09-12 16:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `subkategoris`
--

CREATE TABLE `subkategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subkategoris`
--

INSERT INTO `subkategoris` (`id`, `kategori_id`, `nama`, `created_at`, `updated_at`) VALUES
(4, 4, 'Praktek Lanjutan', NULL, '2023-09-11 17:18:37'),
(5, 3, 'Basis Data Lanjutan', NULL, NULL),
(6, 3, 'Basis Data Lanjutan2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `nama_tugas` varchar(255) NOT NULL,
  `teks` longtext NOT NULL,
  `due_date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `kode`, `guru_id`, `kelas_id`, `mapel_id`, `nama_tugas`, `teks`, `due_date`, `created_at`, `updated_at`) VALUES
(1, 'CZKDLa1sircWaldfYd5Z', 1, 1, 1, 'contoh', 'lakdmf', '2023-09-12 18:28', '2023-09-12 11:32:35', '2023-09-12 14:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `tugas_siswa`
--

CREATE TABLE `tugas_siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `teks` longtext DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `date_send` varchar(255) DEFAULT NULL,
  `is_telat` tinyint(1) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `catatan_guru` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tugas_siswa`
--

INSERT INTO `tugas_siswa` (`id`, `kode`, `siswa_id`, `teks`, `file`, `date_send`, `is_telat`, `nilai`, `catatan_guru`, `created_at`, `updated_at`) VALUES
(1, 'CZKDLa1sircWaldfYd5Z', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` int(11) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `jam` int(11) NOT NULL,
  `menit` int(11) NOT NULL,
  `acak` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userchat`
--

CREATE TABLE `userchat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `chat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userchat`
--

INSERT INTO `userchat` (`id`, `key`, `email`, `chat`, `created_at`, `updated_at`) VALUES
(4, '14byWaHmXCCKaXygLiYn', 'putra@gmail.com', 'kdf', '2023-10-17 00:50:17', '2023-10-17 00:50:17'),
(5, '14byWaHmXCCKaXygLiYn', 'putra@gmail.com', 'kdsfl', '2023-10-17 00:50:21', '2023-10-17 00:50:21');

-- --------------------------------------------------------

--
-- Table structure for table `waktu_ujian`
--

CREATE TABLE `waktu_ujian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `waktu_berakhir` varchar(255) DEFAULT NULL,
  `selesai` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `detail_essay`
--
ALTER TABLE `detail_essay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_ujian`
--
ALTER TABLE `detail_ujian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_settings`
--
ALTER TABLE `email_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `essay_siswa`
--
ALTER TABLE `essay_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `guru_email_unique` (`email`);

--
-- Indexes for table `gurukelas`
--
ALTER TABLE `gurukelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gurumapel`
--
ALTER TABLE `gurumapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatans`
--
ALTER TABLE `kegiatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materi_subkategori_id_foreign` (`subkategori_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `narasis`
--
ALTER TABLE `narasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pg_siswa`
--
ALTER TABLE `pg_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswa_nis_unique` (`nis`),
  ADD UNIQUE KEY `siswa_email_unique` (`email`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subkategoris`
--
ALTER TABLE `subkategoris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subkategoris_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas_siswa`
--
ALTER TABLE `tugas_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userchat`
--
ALTER TABLE `userchat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waktu_ujian`
--
ALTER TABLE `waktu_ujian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail_essay`
--
ALTER TABLE `detail_essay`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_ujian`
--
ALTER TABLE `detail_ujian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_settings`
--
ALTER TABLE `email_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `essay_siswa`
--
ALTER TABLE `essay_siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gurukelas`
--
ALTER TABLE `gurukelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gurumapel`
--
ALTER TABLE `gurumapel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kegiatans`
--
ALTER TABLE `kegiatans`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `narasis`
--
ALTER TABLE `narasis`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pg_siswa`
--
ALTER TABLE `pg_siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subkategoris`
--
ALTER TABLE `subkategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tugas_siswa`
--
ALTER TABLE `tugas_siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userchat`
--
ALTER TABLE `userchat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `waktu_ujian`
--
ALTER TABLE `waktu_ujian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_subkategori_id_foreign` FOREIGN KEY (`subkategori_id`) REFERENCES `subkategoris` (`id`);

--
-- Constraints for table `subkategoris`
--
ALTER TABLE `subkategoris`
  ADD CONSTRAINT `subkategoris_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
