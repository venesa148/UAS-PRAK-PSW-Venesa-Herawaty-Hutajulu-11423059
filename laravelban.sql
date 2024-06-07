-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Waktu pembuatan: 22 Bulan Mei 2024 pada 11.34
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelban`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_lapangan` varchar(255) NOT NULL,
  `tanggal_pemesanan` datetime NOT NULL,
  `tanggal_selesai` datetime NOT NULL,
  `harga` enum('55.000','110.000','165.000''55.000-165.000') DEFAULT '55.000',
  `nama_pemesan` varchar(255) NOT NULL,
  `no_telp` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `aksi` enum('Approved','Disapproved') NOT NULL DEFAULT 'Disapproved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bookings`
--

INSERT INTO `bookings` (`id`, `nama`, `jenis_lapangan`, `tanggal_pemesanan`, `tanggal_selesai`, `harga`, `nama_pemesan`, `no_telp`, `created_at`, `updated_at`, `aksi`) VALUES
(3, 'Audit11', 'Lapangan Basket', '2024-05-21 14:02:00', '2024-05-21 15:02:00', '55.000', 'venesa', 8136068, '2024-05-21 00:05:57', '2024-05-22 02:32:38', 'Disapproved'),
(4, 'Mak roby', 'Lapangan Basket', '2024-05-21 14:27:00', '2024-05-21 15:27:00', '55.000', 'venesa', 81360681103, '2024-05-21 00:27:33', '2024-05-21 00:39:41', 'Approved'),
(5, 'Audit11', 'Lapangan Basket', '2024-05-30 14:45:00', '2024-05-20 14:45:00', '55.000', 'Samuel Sitorus', 81360681103, '2024-05-21 00:46:17', '2024-05-21 00:46:17', 'Disapproved'),
(6, 'Jakarta', 'Lapangan Bola Volly', '2024-05-22 16:05:00', '2024-05-22 16:05:00', '55.000', 'Jappi', 81360681103, '2024-05-22 02:06:02', '2024-05-22 02:06:02', 'Disapproved');

-- --------------------------------------------------------

--
-- Struktur dari tabel `courts`
--

CREATE TABLE `courts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` double DEFAULT 55,
  `description` text DEFAULT 'Di isi oleh pengelola',
  `pengelola` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `courts`
--

INSERT INTO `courts` (`id`, `nama`, `title`, `price`, `description`, `pengelola`, `created_at`, `updated_at`) VALUES
(5, 'Air Terjun Sipiso-Piso', 'Lapangan Futsal', 55000, 'Sangat luas dan bagu=s', NULL, '2024-05-21 00:58:31', '2024-05-22 01:41:24'),
(6, 'Air Terjun Sipiso-Piso', 'Lapangan Bola Volly', 55000, 'Mudah Digunakan', NULL, '2024-05-21 00:58:51', '2024-05-21 00:58:51'),
(7, 'Pantai Lagundri', 'Lapangan Bola Volly', 55000, 'Sering dipakai Orang orang', NULL, '2024-05-21 00:59:11', '2024-05-21 00:59:11'),
(8, 'Pantai Lagundri', 'Lapangan Bola Volly', 170, 'vfdzp', NULL, '2024-05-21 01:21:36', '2024-05-21 01:21:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `lapangans`
--

CREATE TABLE `lapangans` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `lapangans`
--

INSERT INTO `lapangans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(5, 'lapangan Basket', '2024-05-22 08:56:46', '2024-05-22 01:56:46'),
(6, 'Lapangan Bola Volly', '2024-05-21 00:57:16', '2024-05-21 00:57:16'),
(7, 'Lapangan Futsal', '2024-05-21 00:57:30', '2024-05-21 00:57:30'),
(8, 'Lapangan Tenis Meja', '2024-05-21 00:57:41', '2024-05-21 00:57:41'),
(9, 'Lapangan Bulutangkis', '2024-05-21 00:57:55', '2024-05-21 00:57:55'),
(10, 'Lapangan Luas dan Hijau', '2024-05-22 08:57:00', '2024-05-22 01:57:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasis`
--

CREATE TABLE `lokasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(555) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lokasis`
--

INSERT INTO `lokasis` (`id`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(15, 'Samosir', 'Jalan Pangururan', '2024-05-22 01:53:21', '2024-05-22 01:53:21'),
(16, 'Balige', 'Jalan 17 Balige', '2024-05-22 01:57:27', '2024-05-22 01:57:27'),
(17, 'Jakarta', 'Jln 18 Jakarta', '2024-05-22 01:57:49', '2024-05-22 01:57:49'),
(18, 'Silaen', 'Jln Pathimura', '2024-05-22 01:58:09', '2024-05-22 01:58:09'),
(19, 'Batam', 'Jln 17 negeri batam', '2024-05-22 01:58:27', '2024-05-22 01:58:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `notelp` varchar(255) NOT NULL,
  `aksi` enum('Approved','Disapproved') NOT NULL,
  `deskripsi` varchar(555) DEFAULT NULL,
  `bukti` varchar(555) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `nama`, `notelp`, `aksi`, `deskripsi`, `bukti`) VALUES
(1, 'venes', '081360681103', 'Approved', 'okeh', 'okeh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_22_092439_create_products_table', 1),
(6, '2024_03_22_131848_create_courts_table', 1),
(7, '2024_04_20_095515_create_bookings_table', 1),
(8, '2024_05_19_144439_create_lokasis_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `product_code`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Kaos Kaki', '100000', 'K123', 'kaos kaki sport', '2024-05-20 08:44:18', '2024-05-20 08:44:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'test', 'testing@gmail.com', NULL, '$2y$10$JeJupQrVCU1BP/rcAgOLzOnILWQ/bgux10eTMWY3ET77FafTOpLFu', 0, NULL, '2024-05-20 08:38:28', '2024-05-20 08:38:28'),
(9, 'Venesa Herawaty Hutajulu', 'hutajuluvenesa@gmail.com', NULL, '$2y$10$kbn1bIlE.4GOUhwI9cQK6O8phC7/Pw/Go1ajvac2LmZNQhLzw/kye', 0, NULL, '2024-05-21 00:01:23', '2024-05-21 00:01:23'),
(11, 'niko', 'niko@gmail.com', NULL, '$2y$10$OT.2J8IdLZH8bo48v1b55uGrjHGsqG8Oxq5U6whKyI1k7.bbn3vZe', 0, NULL, '2024-05-21 00:45:27', '2024-05-21 00:45:27'),
(12, 'yosia', 'yosia@gmail.com', NULL, '$2y$10$qym.mEY.ha0ieEKOOsbkJuW95gpDEe3CK7nOp3MnyFm/aF/ju83QG', 0, NULL, '2024-05-21 01:57:52', '2024-05-21 01:57:52'),
(13, '1', 'joycantik@gmail.com', NULL, '$2y$10$KYv4hJp1AK7k3q35MAP.KeGUxJ6vkhUPyPm8jyYwQsGTnx6kt9wTG', 0, NULL, '2024-05-21 05:03:57', '2024-05-21 05:03:57'),
(14, 'yosepin', 'yosepin@gmail.com', NULL, '$2y$10$6q0fuZIXmWrT9vJnrUQCwuOI59q66RN6LM.xIe8/NjidUfuwpBi0O', 0, NULL, '2024-05-21 05:09:39', '2024-05-21 05:09:39'),
(15, 'venesa', 'venesa@gmail.com', NULL, '$2y$10$ot9.4Xb.T1fZmGAyOXQkxOIwrvFynVV99BMYWTEODgOqw5peZIav2', 0, NULL, '2024-05-21 05:12:49', '2024-05-21 05:12:49'),
(16, 'venesa', 'venesahutajulu222@gmail.com', NULL, '$2y$10$KhQL2AvLsT20Fa2MC/yi7eCN9GHQ/LeuCL6cNarwVWH6MytdBjm8O', 0, NULL, '2024-05-21 05:18:24', '2024-05-21 05:18:24'),
(17, 'roma', 'roma@gmail.com', NULL, '$2y$10$c/R5uJ0iLOPXq/vHQVDRJe9ZclozaxdFSoe2vYSLY3kVRZUAUwSA6', 1, NULL, '2024-05-21 05:21:37', '2024-05-21 05:21:37'),
(18, 'kak grace', 'grace@gmail.com', NULL, '$2y$10$JFBEusaZjhVWMHNZCSTK8eHpybBVm7cPOiU5hr6E3Nuvu6tMcCnCu', 1, NULL, '2024-05-21 05:23:42', '2024-05-21 05:23:42'),
(19, 'arifa', 'arifa@gmail.com', NULL, '$2y$10$zqXnPJmWkjQKOpjaOATyeOTmk9vwsq1oXFonnCCzJcp.LKfXOH6dK', 1, NULL, '2024-05-21 05:50:06', '2024-05-21 05:50:06'),
(21, 'geby', 'geby@gmail.com', NULL, '$2y$10$hFliZFIYBBoUSLKjF2eYWOptoJv48j9qVQ3R.JPSCkCt8fsvJC8r.', 1, NULL, '2024-05-21 05:56:49', '2024-05-21 05:56:49'),
(22, 'dik', 'dika@gmail.com', NULL, '$2y$10$R0qlXP6tkjB90UljcPC8xuH4n8fZWyljQUygcwP71W/fBgaGSBsDi', 0, NULL, '2024-05-21 19:16:25', '2024-05-21 19:16:25'),
(24, 'gabriel', 'gabriel@gmail.com', NULL, '$2y$10$t1tTRtwURoJRNE97JYBjD.KeIjMNOq4L/4wjFPEbcSFwBeyNEI3sq', 1, NULL, '2024-05-21 19:18:12', '2024-05-21 19:18:12'),
(26, 'marsel', 'marsel@gmail.com', NULL, '$2y$10$WwxT8YATKFGQZx8aweztweoL4COnRYd6KxH7vtap/t6ORCTXHfLCO', 0, NULL, '2024-05-21 19:36:49', '2024-05-21 19:36:49'),
(27, 'gabriel', 'gabriel7@gmail.com', NULL, '$2y$10$pS0gtS5oZW/bAAX5FpTw9.5OxbBLuBVowsb8QWzIAsNrTJrOO8vQi', 0, NULL, '2024-05-22 00:52:36', '2024-05-22 00:52:36'),
(28, 'pengelola', 'pengelola@gmail.com', NULL, '$2y$10$660jBxj0a2yO/4/rixAL..HHHqFPIbRXhVQQyc.e6/o.Qgu9JRcCa', 1, NULL, '2024-05-22 00:57:26', '2024-05-22 00:57:26'),
(29, 'imel', 'imel@gmail.com', NULL, '$2y$10$GR2tldmShDV9BZGitO.DPu3DCMj7unM1x4P8Sr2c5//r0ca7l6QMO', 0, NULL, '2024-05-22 01:04:20', '2024-05-22 01:04:20'),
(30, 'Jappi', 'Jappi@gmailcom', NULL, '$2y$10$J9D7UA/qFaHqAwdv6nnwmOGp8hMz9BhYka.7YrFyDPrs50GQ5Gc3S', 0, NULL, '2024-05-22 02:05:00', '2024-05-22 02:05:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `courts`
--
ALTER TABLE `courts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `lapangans`
--
ALTER TABLE `lapangans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lokasis`
--
ALTER TABLE `lokasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `courts`
--
ALTER TABLE `courts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lapangans`
--
ALTER TABLE `lapangans`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `lokasis`
--
ALTER TABLE `lokasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
