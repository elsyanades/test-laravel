-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2023 pada 03.28
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testlaravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `nama_kelurahan`, `nama_kecamatan`, `nama_kota`, `created_at`, `updated_at`) VALUES
(1, 'Malabar', 'Lengkong', 'Bandung', NULL, NULL),
(2, 'Sarijadi', 'Sukasari', 'Bandung', NULL, NULL),
(3, 'Pamoyanan', 'Cicendo', 'Bandung', NULL, NULL),
(4, 'Pasirwangi', 'Ujungberung', 'Bandung', NULL, NULL),
(5, 'Palasari', 'Cibiru', 'Bandung', '2023-06-06 08:23:05', '2023-06-06 08:23:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_06_134556_create_kelurahan_table', 1),
(6, '2023_06_06_153523_create_user_table', 2),
(7, '2023_06_06_160941_create_user_table', 3),
(8, '2023_06_06_170033_create_pasien_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pasien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_pasien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` int(11) DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rt_rw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `id_pasien`, `nama_pasien`, `telp`, `alamat`, `rt_rw`, `id_kelurahan`, `tanggal_lahir`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(2, '5678', 'el', 73141, 'Sukajadi bandung', '3/1', '2', '2023-06-04', 'Laki-laki', '2023-06-06 16:10:44', '2023-06-06 16:37:08'),
(3, '980665', 'els', 654456, 'contoh', '4/5', '4', '2023-05-29', 'Perempuan', '2023-06-06 16:39:09', '2023-06-06 16:39:09'),
(30, '54', 'el', 87, 'jk', '799', '3', '2023-06-09', 'Perempuan', '2023-06-06 18:06:55', '2023-06-06 18:06:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'elsyana', 'elsyana.saltanu@gmail.com', '$2y$10$t8wElwKSoZdFFdCof/p8EuCDl7wWLRULuQW7ZFXNEkmu8/Zmvp5Vu', 'Admin', '2023-06-06 09:11:15', '2023-06-06 09:11:15'),
(2, 'Operator', 'operasional@gmail.com', '$2y$10$gH71KNfgK6L8czU6QW9YuunCueM0iDUziXqGy2SEw3tcm03TEl.XW', 'Operator', '2023-06-06 17:17:53', '2023-06-06 17:17:53'),
(3, 'Admin', 'admin@gmail.com', '$2y$10$ETRrJ4JEqkSHCMSJR.h.KuWg65xvBLncEdel7HrvZwMP2jaq4Rbsi', 'Admin', '2023-06-06 17:19:08', '2023-06-06 17:19:08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
