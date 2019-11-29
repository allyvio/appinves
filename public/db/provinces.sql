-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2019 pada 07.52
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppl_ecommerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `provinces`
--

INSERT INTO `provinces` (`id`, `province_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bali', '2019-10-22 07:50:11', '2019-10-22 07:50:11'),
(2, 2, 'Bangka Belitung', '2019-10-22 07:50:12', '2019-10-22 07:50:12'),
(3, 3, 'Banten', '2019-10-22 07:50:12', '2019-10-22 07:50:12'),
(4, 4, 'Bengkulu', '2019-10-22 07:50:13', '2019-10-22 07:50:13'),
(5, 5, 'DI Yogyakarta', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(6, 6, 'DKI Jakarta', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(7, 7, 'Gorontalo', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(8, 8, 'Jambi', '2019-10-22 07:50:15', '2019-10-22 07:50:15'),
(9, 9, 'Jawa Barat', '2019-10-22 07:50:16', '2019-10-22 07:50:16'),
(10, 10, 'Jawa Tengah', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(11, 11, 'Jawa Timur', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(12, 12, 'Kalimantan Barat', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(13, 13, 'Kalimantan Selatan', '2019-10-22 07:50:20', '2019-10-22 07:50:20'),
(14, 14, 'Kalimantan Tengah', '2019-10-22 07:50:21', '2019-10-22 07:50:21'),
(15, 15, 'Kalimantan Timur', '2019-10-22 07:50:22', '2019-10-22 07:50:22'),
(16, 16, 'Kalimantan Utara', '2019-10-22 07:50:22', '2019-10-22 07:50:22'),
(17, 17, 'Kepulauan Riau', '2019-10-22 07:50:23', '2019-10-22 07:50:23'),
(18, 18, 'Lampung', '2019-10-22 07:50:24', '2019-10-22 07:50:24'),
(19, 19, 'Maluku', '2019-10-22 07:50:25', '2019-10-22 07:50:25'),
(20, 20, 'Maluku Utara', '2019-10-22 07:50:26', '2019-10-22 07:50:26'),
(21, 21, 'Nanggroe Aceh Darussalam (NAD)', '2019-10-22 07:50:27', '2019-10-22 07:50:27'),
(22, 22, 'Nusa Tenggara Barat (NTB)', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(23, 23, 'Nusa Tenggara Timur (NTT)', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(24, 24, 'Papua', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(25, 25, 'Papua Barat', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(26, 26, 'Riau', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(27, 27, 'Sulawesi Barat', '2019-10-22 07:50:34', '2019-10-22 07:50:34'),
(28, 28, 'Sulawesi Selatan', '2019-10-22 07:50:35', '2019-10-22 07:50:35'),
(29, 29, 'Sulawesi Tengah', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(30, 30, 'Sulawesi Tenggara', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(31, 31, 'Sulawesi Utara', '2019-10-22 07:50:41', '2019-10-22 07:50:41'),
(32, 32, 'Sumatera Barat', '2019-10-22 07:50:42', '2019-10-22 07:50:42'),
(33, 33, 'Sumatera Selatan', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(34, 34, 'Sumatera Utara', '2019-10-22 07:50:44', '2019-10-22 07:50:44');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
