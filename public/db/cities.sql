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
-- Struktur dari tabel `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cities`
--

INSERT INTO `cities` (`id`, `province_id`, `city_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 17, 'Badung', '2019-10-22 07:50:12', '2019-10-22 07:50:12'),
(2, 1, 32, 'Bangli', '2019-10-22 07:50:12', '2019-10-22 07:50:12'),
(3, 1, 94, 'Buleleng', '2019-10-22 07:50:12', '2019-10-22 07:50:12'),
(4, 1, 114, 'Denpasar', '2019-10-22 07:50:12', '2019-10-22 07:50:12'),
(5, 1, 128, 'Gianyar', '2019-10-22 07:50:12', '2019-10-22 07:50:12'),
(6, 1, 161, 'Jembrana', '2019-10-22 07:50:12', '2019-10-22 07:50:12'),
(7, 1, 170, 'Karangasem', '2019-10-22 07:50:12', '2019-10-22 07:50:12'),
(8, 1, 197, 'Klungkung', '2019-10-22 07:50:12', '2019-10-22 07:50:12'),
(9, 1, 447, 'Tabanan', '2019-10-22 07:50:12', '2019-10-22 07:50:12'),
(10, 2, 27, 'Bangka', '2019-10-22 07:50:12', '2019-10-22 07:50:12'),
(11, 2, 28, 'Bangka Barat', '2019-10-22 07:50:12', '2019-10-22 07:50:12'),
(12, 2, 29, 'Bangka Selatan', '2019-10-22 07:50:12', '2019-10-22 07:50:12'),
(13, 2, 30, 'Bangka Tengah', '2019-10-22 07:50:12', '2019-10-22 07:50:12'),
(14, 2, 56, 'Belitung', '2019-10-22 07:50:12', '2019-10-22 07:50:12'),
(15, 2, 57, 'Belitung Timur', '2019-10-22 07:50:12', '2019-10-22 07:50:12'),
(16, 2, 334, 'Pangkal Pinang', '2019-10-22 07:50:12', '2019-10-22 07:50:12'),
(17, 3, 106, 'Cilegon', '2019-10-22 07:50:13', '2019-10-22 07:50:13'),
(18, 3, 232, 'Lebak', '2019-10-22 07:50:13', '2019-10-22 07:50:13'),
(19, 3, 331, 'Pandeglang', '2019-10-22 07:50:13', '2019-10-22 07:50:13'),
(20, 3, 402, 'Serang', '2019-10-22 07:50:13', '2019-10-22 07:50:13'),
(21, 3, 403, 'Serang', '2019-10-22 07:50:13', '2019-10-22 07:50:13'),
(22, 3, 455, 'Tangerang', '2019-10-22 07:50:13', '2019-10-22 07:50:13'),
(23, 3, 456, 'Tangerang', '2019-10-22 07:50:13', '2019-10-22 07:50:13'),
(24, 3, 457, 'Tangerang Selatan', '2019-10-22 07:50:13', '2019-10-22 07:50:13'),
(25, 4, 62, 'Bengkulu', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(26, 4, 63, 'Bengkulu Selatan', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(27, 4, 64, 'Bengkulu Tengah', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(28, 4, 65, 'Bengkulu Utara', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(29, 4, 175, 'Kaur', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(30, 4, 183, 'Kepahiang', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(31, 4, 233, 'Lebong', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(32, 4, 294, 'Muko Muko', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(33, 4, 379, 'Rejang Lebong', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(34, 4, 397, 'Seluma', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(35, 5, 39, 'Bantul', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(36, 5, 135, 'Gunung Kidul', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(37, 5, 210, 'Kulon Progo', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(38, 5, 419, 'Sleman', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(39, 5, 501, 'Yogyakarta', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(40, 6, 151, 'Jakarta Barat', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(41, 6, 152, 'Jakarta Pusat', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(42, 6, 153, 'Jakarta Selatan', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(43, 6, 154, 'Jakarta Timur', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(44, 6, 155, 'Jakarta Utara', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(45, 6, 189, 'Kepulauan Seribu', '2019-10-22 07:50:14', '2019-10-22 07:50:14'),
(46, 7, 77, 'Boalemo', '2019-10-22 07:50:15', '2019-10-22 07:50:15'),
(47, 7, 88, 'Bone Bolango', '2019-10-22 07:50:15', '2019-10-22 07:50:15'),
(48, 7, 129, 'Gorontalo', '2019-10-22 07:50:15', '2019-10-22 07:50:15'),
(49, 7, 130, 'Gorontalo', '2019-10-22 07:50:15', '2019-10-22 07:50:15'),
(50, 7, 131, 'Gorontalo Utara', '2019-10-22 07:50:15', '2019-10-22 07:50:15'),
(51, 7, 361, 'Pohuwato', '2019-10-22 07:50:15', '2019-10-22 07:50:15'),
(52, 8, 50, 'Batang Hari', '2019-10-22 07:50:16', '2019-10-22 07:50:16'),
(53, 8, 97, 'Bungo', '2019-10-22 07:50:16', '2019-10-22 07:50:16'),
(54, 8, 156, 'Jambi', '2019-10-22 07:50:16', '2019-10-22 07:50:16'),
(55, 8, 194, 'Kerinci', '2019-10-22 07:50:16', '2019-10-22 07:50:16'),
(56, 8, 280, 'Merangin', '2019-10-22 07:50:16', '2019-10-22 07:50:16'),
(57, 8, 293, 'Muaro Jambi', '2019-10-22 07:50:16', '2019-10-22 07:50:16'),
(58, 8, 393, 'Sarolangun', '2019-10-22 07:50:16', '2019-10-22 07:50:16'),
(59, 8, 442, 'Sungaipenuh', '2019-10-22 07:50:16', '2019-10-22 07:50:16'),
(60, 8, 460, 'Tanjung Jabung Barat', '2019-10-22 07:50:16', '2019-10-22 07:50:16'),
(61, 8, 461, 'Tanjung Jabung Timur', '2019-10-22 07:50:16', '2019-10-22 07:50:16'),
(62, 8, 471, 'Tebo', '2019-10-22 07:50:16', '2019-10-22 07:50:16'),
(63, 9, 22, 'Bandung', '2019-10-22 07:50:16', '2019-10-22 07:50:16'),
(64, 9, 23, 'Bandung', '2019-10-22 07:50:16', '2019-10-22 07:50:16'),
(65, 9, 24, 'Bandung Barat', '2019-10-22 07:50:16', '2019-10-22 07:50:16'),
(66, 9, 34, 'Banjar', '2019-10-22 07:50:16', '2019-10-22 07:50:16'),
(67, 9, 54, 'Bekasi', '2019-10-22 07:50:16', '2019-10-22 07:50:16'),
(68, 9, 55, 'Bekasi', '2019-10-22 07:50:16', '2019-10-22 07:50:16'),
(69, 9, 78, 'Bogor', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(70, 9, 79, 'Bogor', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(71, 9, 103, 'Ciamis', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(72, 9, 104, 'Cianjur', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(73, 9, 107, 'Cimahi', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(74, 9, 108, 'Cirebon', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(75, 9, 109, 'Cirebon', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(76, 9, 115, 'Depok', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(77, 9, 126, 'Garut', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(78, 9, 149, 'Indramayu', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(79, 9, 171, 'Karawang', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(80, 9, 211, 'Kuningan', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(81, 9, 252, 'Majalengka', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(82, 9, 332, 'Pangandaran', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(83, 9, 376, 'Purwakarta', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(84, 9, 428, 'Subang', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(85, 9, 430, 'Sukabumi', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(86, 9, 431, 'Sukabumi', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(87, 9, 440, 'Sumedang', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(88, 9, 468, 'Tasikmalaya', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(89, 9, 469, 'Tasikmalaya', '2019-10-22 07:50:17', '2019-10-22 07:50:17'),
(90, 10, 37, 'Banjarnegara', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(91, 10, 41, 'Banyumas', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(92, 10, 49, 'Batang', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(93, 10, 76, 'Blora', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(94, 10, 91, 'Boyolali', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(95, 10, 92, 'Brebes', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(96, 10, 105, 'Cilacap', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(97, 10, 113, 'Demak', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(98, 10, 134, 'Grobogan', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(99, 10, 163, 'Jepara', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(100, 10, 169, 'Karanganyar', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(101, 10, 177, 'Kebumen', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(102, 10, 181, 'Kendal', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(103, 10, 196, 'Klaten', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(104, 10, 209, 'Kudus', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(105, 10, 249, 'Magelang', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(106, 10, 250, 'Magelang', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(107, 10, 344, 'Pati', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(108, 10, 348, 'Pekalongan', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(109, 10, 349, 'Pekalongan', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(110, 10, 352, 'Pemalang', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(111, 10, 375, 'Purbalingga', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(112, 10, 377, 'Purworejo', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(113, 10, 380, 'Rembang', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(114, 10, 386, 'Salatiga', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(115, 10, 398, 'Semarang', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(116, 10, 399, 'Semarang', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(117, 10, 427, 'Sragen', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(118, 10, 433, 'Sukoharjo', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(119, 10, 445, 'Surakarta (Solo)', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(120, 10, 472, 'Tegal', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(121, 10, 473, 'Tegal', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(122, 10, 476, 'Temanggung', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(123, 10, 497, 'Wonogiri', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(124, 10, 498, 'Wonosobo', '2019-10-22 07:50:18', '2019-10-22 07:50:18'),
(125, 11, 31, 'Bangkalan', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(126, 11, 42, 'Banyuwangi', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(127, 11, 51, 'Batu', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(128, 11, 74, 'Blitar', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(129, 11, 75, 'Blitar', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(130, 11, 80, 'Bojonegoro', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(131, 11, 86, 'Bondowoso', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(132, 11, 133, 'Gresik', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(133, 11, 160, 'Jember', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(134, 11, 164, 'Jombang', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(135, 11, 178, 'Kediri', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(136, 11, 179, 'Kediri', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(137, 11, 222, 'Lamongan', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(138, 11, 243, 'Lumajang', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(139, 11, 247, 'Madiun', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(140, 11, 248, 'Madiun', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(141, 11, 251, 'Magetan', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(142, 11, 255, 'Malang', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(143, 11, 256, 'Malang', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(144, 11, 289, 'Mojokerto', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(145, 11, 290, 'Mojokerto', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(146, 11, 305, 'Nganjuk', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(147, 11, 306, 'Ngawi', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(148, 11, 317, 'Pacitan', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(149, 11, 330, 'Pamekasan', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(150, 11, 342, 'Pasuruan', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(151, 11, 343, 'Pasuruan', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(152, 11, 363, 'Ponorogo', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(153, 11, 369, 'Probolinggo', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(154, 11, 370, 'Probolinggo', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(155, 11, 390, 'Sampang', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(156, 11, 409, 'Sidoarjo', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(157, 11, 418, 'Situbondo', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(158, 11, 441, 'Sumenep', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(159, 11, 444, 'Surabaya', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(160, 11, 487, 'Trenggalek', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(161, 11, 489, 'Tuban', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(162, 11, 492, 'Tulungagung', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(163, 12, 61, 'Bengkayang', '2019-10-22 07:50:19', '2019-10-22 07:50:19'),
(164, 12, 168, 'Kapuas Hulu', '2019-10-22 07:50:20', '2019-10-22 07:50:20'),
(165, 12, 176, 'Kayong Utara', '2019-10-22 07:50:20', '2019-10-22 07:50:20'),
(166, 12, 195, 'Ketapang', '2019-10-22 07:50:20', '2019-10-22 07:50:20'),
(167, 12, 208, 'Kubu Raya', '2019-10-22 07:50:20', '2019-10-22 07:50:20'),
(168, 12, 228, 'Landak', '2019-10-22 07:50:20', '2019-10-22 07:50:20'),
(169, 12, 279, 'Melawi', '2019-10-22 07:50:20', '2019-10-22 07:50:20'),
(170, 12, 364, 'Pontianak', '2019-10-22 07:50:20', '2019-10-22 07:50:20'),
(171, 12, 365, 'Pontianak', '2019-10-22 07:50:20', '2019-10-22 07:50:20'),
(172, 12, 388, 'Sambas', '2019-10-22 07:50:20', '2019-10-22 07:50:20'),
(173, 12, 391, 'Sanggau', '2019-10-22 07:50:20', '2019-10-22 07:50:20'),
(174, 12, 395, 'Sekadau', '2019-10-22 07:50:20', '2019-10-22 07:50:20'),
(175, 12, 415, 'Singkawang', '2019-10-22 07:50:20', '2019-10-22 07:50:20'),
(176, 12, 417, 'Sintang', '2019-10-22 07:50:20', '2019-10-22 07:50:20'),
(177, 13, 18, 'Balangan', '2019-10-22 07:50:21', '2019-10-22 07:50:21'),
(178, 13, 33, 'Banjar', '2019-10-22 07:50:21', '2019-10-22 07:50:21'),
(179, 13, 35, 'Banjarbaru', '2019-10-22 07:50:21', '2019-10-22 07:50:21'),
(180, 13, 36, 'Banjarmasin', '2019-10-22 07:50:21', '2019-10-22 07:50:21'),
(181, 13, 43, 'Barito Kuala', '2019-10-22 07:50:21', '2019-10-22 07:50:21'),
(182, 13, 143, 'Hulu Sungai Selatan', '2019-10-22 07:50:21', '2019-10-22 07:50:21'),
(183, 13, 144, 'Hulu Sungai Tengah', '2019-10-22 07:50:21', '2019-10-22 07:50:21'),
(184, 13, 145, 'Hulu Sungai Utara', '2019-10-22 07:50:21', '2019-10-22 07:50:21'),
(185, 13, 203, 'Kotabaru', '2019-10-22 07:50:21', '2019-10-22 07:50:21'),
(186, 13, 446, 'Tabalong', '2019-10-22 07:50:21', '2019-10-22 07:50:21'),
(187, 13, 452, 'Tanah Bumbu', '2019-10-22 07:50:21', '2019-10-22 07:50:21'),
(188, 13, 454, 'Tanah Laut', '2019-10-22 07:50:21', '2019-10-22 07:50:21'),
(189, 13, 466, 'Tapin', '2019-10-22 07:50:21', '2019-10-22 07:50:21'),
(190, 14, 44, 'Barito Selatan', '2019-10-22 07:50:21', '2019-10-22 07:50:21'),
(191, 14, 45, 'Barito Timur', '2019-10-22 07:50:21', '2019-10-22 07:50:21'),
(192, 14, 46, 'Barito Utara', '2019-10-22 07:50:21', '2019-10-22 07:50:21'),
(193, 14, 136, 'Gunung Mas', '2019-10-22 07:50:21', '2019-10-22 07:50:21'),
(194, 14, 167, 'Kapuas', '2019-10-22 07:50:21', '2019-10-22 07:50:21'),
(195, 14, 174, 'Katingan', '2019-10-22 07:50:21', '2019-10-22 07:50:21'),
(196, 14, 205, 'Kotawaringin Barat', '2019-10-22 07:50:22', '2019-10-22 07:50:22'),
(197, 14, 206, 'Kotawaringin Timur', '2019-10-22 07:50:22', '2019-10-22 07:50:22'),
(198, 14, 221, 'Lamandau', '2019-10-22 07:50:22', '2019-10-22 07:50:22'),
(199, 14, 296, 'Murung Raya', '2019-10-22 07:50:22', '2019-10-22 07:50:22'),
(200, 14, 326, 'Palangka Raya', '2019-10-22 07:50:22', '2019-10-22 07:50:22'),
(201, 14, 371, 'Pulang Pisau', '2019-10-22 07:50:22', '2019-10-22 07:50:22'),
(202, 14, 405, 'Seruyan', '2019-10-22 07:50:22', '2019-10-22 07:50:22'),
(203, 14, 432, 'Sukamara', '2019-10-22 07:50:22', '2019-10-22 07:50:22'),
(204, 15, 19, 'Balikpapan', '2019-10-22 07:50:22', '2019-10-22 07:50:22'),
(205, 15, 66, 'Berau', '2019-10-22 07:50:22', '2019-10-22 07:50:22'),
(206, 15, 89, 'Bontang', '2019-10-22 07:50:22', '2019-10-22 07:50:22'),
(207, 15, 214, 'Kutai Barat', '2019-10-22 07:50:22', '2019-10-22 07:50:22'),
(208, 15, 215, 'Kutai Kartanegara', '2019-10-22 07:50:22', '2019-10-22 07:50:22'),
(209, 15, 216, 'Kutai Timur', '2019-10-22 07:50:22', '2019-10-22 07:50:22'),
(210, 15, 341, 'Paser', '2019-10-22 07:50:22', '2019-10-22 07:50:22'),
(211, 15, 354, 'Penajam Paser Utara', '2019-10-22 07:50:22', '2019-10-22 07:50:22'),
(212, 15, 387, 'Samarinda', '2019-10-22 07:50:22', '2019-10-22 07:50:22'),
(213, 16, 96, 'Bulungan (Bulongan)', '2019-10-22 07:50:23', '2019-10-22 07:50:23'),
(214, 16, 257, 'Malinau', '2019-10-22 07:50:23', '2019-10-22 07:50:23'),
(215, 16, 311, 'Nunukan', '2019-10-22 07:50:23', '2019-10-22 07:50:23'),
(216, 16, 450, 'Tana Tidung', '2019-10-22 07:50:23', '2019-10-22 07:50:23'),
(217, 16, 467, 'Tarakan', '2019-10-22 07:50:23', '2019-10-22 07:50:23'),
(218, 17, 48, 'Batam', '2019-10-22 07:50:24', '2019-10-22 07:50:24'),
(219, 17, 71, 'Bintan', '2019-10-22 07:50:24', '2019-10-22 07:50:24'),
(220, 17, 172, 'Karimun', '2019-10-22 07:50:24', '2019-10-22 07:50:24'),
(221, 17, 184, 'Kepulauan Anambas', '2019-10-22 07:50:24', '2019-10-22 07:50:24'),
(222, 17, 237, 'Lingga', '2019-10-22 07:50:24', '2019-10-22 07:50:24'),
(223, 17, 302, 'Natuna', '2019-10-22 07:50:24', '2019-10-22 07:50:24'),
(224, 17, 462, 'Tanjung Pinang', '2019-10-22 07:50:24', '2019-10-22 07:50:24'),
(225, 18, 21, 'Bandar Lampung', '2019-10-22 07:50:24', '2019-10-22 07:50:24'),
(226, 18, 223, 'Lampung Barat', '2019-10-22 07:50:24', '2019-10-22 07:50:24'),
(227, 18, 224, 'Lampung Selatan', '2019-10-22 07:50:24', '2019-10-22 07:50:24'),
(228, 18, 225, 'Lampung Tengah', '2019-10-22 07:50:24', '2019-10-22 07:50:24'),
(229, 18, 226, 'Lampung Timur', '2019-10-22 07:50:25', '2019-10-22 07:50:25'),
(230, 18, 227, 'Lampung Utara', '2019-10-22 07:50:25', '2019-10-22 07:50:25'),
(231, 18, 282, 'Mesuji', '2019-10-22 07:50:25', '2019-10-22 07:50:25'),
(232, 18, 283, 'Metro', '2019-10-22 07:50:25', '2019-10-22 07:50:25'),
(233, 18, 355, 'Pesawaran', '2019-10-22 07:50:25', '2019-10-22 07:50:25'),
(234, 18, 356, 'Pesisir Barat', '2019-10-22 07:50:25', '2019-10-22 07:50:25'),
(235, 18, 368, 'Pringsewu', '2019-10-22 07:50:25', '2019-10-22 07:50:25'),
(236, 18, 458, 'Tanggamus', '2019-10-22 07:50:25', '2019-10-22 07:50:25'),
(237, 18, 490, 'Tulang Bawang', '2019-10-22 07:50:25', '2019-10-22 07:50:25'),
(238, 18, 491, 'Tulang Bawang Barat', '2019-10-22 07:50:25', '2019-10-22 07:50:25'),
(239, 18, 496, 'Way Kanan', '2019-10-22 07:50:25', '2019-10-22 07:50:25'),
(240, 19, 14, 'Ambon', '2019-10-22 07:50:26', '2019-10-22 07:50:26'),
(241, 19, 99, 'Buru', '2019-10-22 07:50:26', '2019-10-22 07:50:26'),
(242, 19, 100, 'Buru Selatan', '2019-10-22 07:50:26', '2019-10-22 07:50:26'),
(243, 19, 185, 'Kepulauan Aru', '2019-10-22 07:50:26', '2019-10-22 07:50:26'),
(244, 19, 258, 'Maluku Barat Daya', '2019-10-22 07:50:26', '2019-10-22 07:50:26'),
(245, 19, 259, 'Maluku Tengah', '2019-10-22 07:50:26', '2019-10-22 07:50:26'),
(246, 19, 260, 'Maluku Tenggara', '2019-10-22 07:50:26', '2019-10-22 07:50:26'),
(247, 19, 261, 'Maluku Tenggara Barat', '2019-10-22 07:50:26', '2019-10-22 07:50:26'),
(248, 19, 400, 'Seram Bagian Barat', '2019-10-22 07:50:26', '2019-10-22 07:50:26'),
(249, 19, 401, 'Seram Bagian Timur', '2019-10-22 07:50:26', '2019-10-22 07:50:26'),
(250, 19, 488, 'Tual', '2019-10-22 07:50:26', '2019-10-22 07:50:26'),
(251, 20, 138, 'Halmahera Barat', '2019-10-22 07:50:26', '2019-10-22 07:50:26'),
(252, 20, 139, 'Halmahera Selatan', '2019-10-22 07:50:26', '2019-10-22 07:50:26'),
(253, 20, 140, 'Halmahera Tengah', '2019-10-22 07:50:26', '2019-10-22 07:50:26'),
(254, 20, 141, 'Halmahera Timur', '2019-10-22 07:50:27', '2019-10-22 07:50:27'),
(255, 20, 142, 'Halmahera Utara', '2019-10-22 07:50:27', '2019-10-22 07:50:27'),
(256, 20, 191, 'Kepulauan Sula', '2019-10-22 07:50:27', '2019-10-22 07:50:27'),
(257, 20, 372, 'Pulau Morotai', '2019-10-22 07:50:27', '2019-10-22 07:50:27'),
(258, 20, 477, 'Ternate', '2019-10-22 07:50:27', '2019-10-22 07:50:27'),
(259, 20, 478, 'Tidore Kepulauan', '2019-10-22 07:50:27', '2019-10-22 07:50:27'),
(260, 21, 1, 'Aceh Barat', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(261, 21, 2, 'Aceh Barat Daya', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(262, 21, 3, 'Aceh Besar', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(263, 21, 4, 'Aceh Jaya', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(264, 21, 5, 'Aceh Selatan', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(265, 21, 6, 'Aceh Singkil', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(266, 21, 7, 'Aceh Tamiang', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(267, 21, 8, 'Aceh Tengah', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(268, 21, 9, 'Aceh Tenggara', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(269, 21, 10, 'Aceh Timur', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(270, 21, 11, 'Aceh Utara', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(271, 21, 20, 'Banda Aceh', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(272, 21, 59, 'Bener Meriah', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(273, 21, 72, 'Bireuen', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(274, 21, 127, 'Gayo Lues', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(275, 21, 230, 'Langsa', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(276, 21, 235, 'Lhokseumawe', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(277, 21, 300, 'Nagan Raya', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(278, 21, 358, 'Pidie', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(279, 21, 359, 'Pidie Jaya', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(280, 21, 384, 'Sabang', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(281, 21, 414, 'Simeulue', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(282, 21, 429, 'Subulussalam', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(283, 22, 68, 'Bima', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(284, 22, 69, 'Bima', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(285, 22, 118, 'Dompu', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(286, 22, 238, 'Lombok Barat', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(287, 22, 239, 'Lombok Tengah', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(288, 22, 240, 'Lombok Timur', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(289, 22, 241, 'Lombok Utara', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(290, 22, 276, 'Mataram', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(291, 22, 438, 'Sumbawa', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(292, 22, 439, 'Sumbawa Barat', '2019-10-22 07:50:28', '2019-10-22 07:50:28'),
(293, 23, 13, 'Alor', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(294, 23, 58, 'Belu', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(295, 23, 122, 'Ende', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(296, 23, 125, 'Flores Timur', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(297, 23, 212, 'Kupang', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(298, 23, 213, 'Kupang', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(299, 23, 234, 'Lembata', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(300, 23, 269, 'Manggarai', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(301, 23, 270, 'Manggarai Barat', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(302, 23, 271, 'Manggarai Timur', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(303, 23, 301, 'Nagekeo', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(304, 23, 304, 'Ngada', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(305, 23, 383, 'Rote Ndao', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(306, 23, 385, 'Sabu Raijua', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(307, 23, 412, 'Sikka', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(308, 23, 434, 'Sumba Barat', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(309, 23, 435, 'Sumba Barat Daya', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(310, 23, 436, 'Sumba Tengah', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(311, 23, 437, 'Sumba Timur', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(312, 23, 479, 'Timor Tengah Selatan', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(313, 23, 480, 'Timor Tengah Utara', '2019-10-22 07:50:30', '2019-10-22 07:50:30'),
(314, 24, 16, 'Asmat', '2019-10-22 07:50:32', '2019-10-22 07:50:32'),
(315, 24, 67, 'Biak Numfor', '2019-10-22 07:50:32', '2019-10-22 07:50:32'),
(316, 24, 90, 'Boven Digoel', '2019-10-22 07:50:32', '2019-10-22 07:50:32'),
(317, 24, 111, 'Deiyai (Deliyai)', '2019-10-22 07:50:32', '2019-10-22 07:50:32'),
(318, 24, 117, 'Dogiyai', '2019-10-22 07:50:32', '2019-10-22 07:50:32'),
(319, 24, 150, 'Intan Jaya', '2019-10-22 07:50:32', '2019-10-22 07:50:32'),
(320, 24, 157, 'Jayapura', '2019-10-22 07:50:32', '2019-10-22 07:50:32'),
(321, 24, 158, 'Jayapura', '2019-10-22 07:50:32', '2019-10-22 07:50:32'),
(322, 24, 159, 'Jayawijaya', '2019-10-22 07:50:32', '2019-10-22 07:50:32'),
(323, 24, 180, 'Keerom', '2019-10-22 07:50:32', '2019-10-22 07:50:32'),
(324, 24, 193, 'Kepulauan Yapen (Yapen Waropen)', '2019-10-22 07:50:32', '2019-10-22 07:50:32'),
(325, 24, 231, 'Lanny Jaya', '2019-10-22 07:50:32', '2019-10-22 07:50:32'),
(326, 24, 263, 'Mamberamo Raya', '2019-10-22 07:50:32', '2019-10-22 07:50:32'),
(327, 24, 264, 'Mamberamo Tengah', '2019-10-22 07:50:32', '2019-10-22 07:50:32'),
(328, 24, 274, 'Mappi', '2019-10-22 07:50:32', '2019-10-22 07:50:32'),
(329, 24, 281, 'Merauke', '2019-10-22 07:50:32', '2019-10-22 07:50:32'),
(330, 24, 284, 'Mimika', '2019-10-22 07:50:32', '2019-10-22 07:50:32'),
(331, 24, 299, 'Nabire', '2019-10-22 07:50:32', '2019-10-22 07:50:32'),
(332, 24, 303, 'Nduga', '2019-10-22 07:50:32', '2019-10-22 07:50:32'),
(333, 24, 335, 'Paniai', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(334, 24, 347, 'Pegunungan Bintang', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(335, 24, 373, 'Puncak', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(336, 24, 374, 'Puncak Jaya', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(337, 24, 392, 'Sarmi', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(338, 24, 443, 'Supiori', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(339, 24, 484, 'Tolikara', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(340, 24, 495, 'Waropen', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(341, 24, 499, 'Yahukimo', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(342, 24, 500, 'Yalimo', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(343, 25, 124, 'Fakfak', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(344, 25, 165, 'Kaimana', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(345, 25, 272, 'Manokwari', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(346, 25, 273, 'Manokwari Selatan', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(347, 25, 277, 'Maybrat', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(348, 25, 346, 'Pegunungan Arfak', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(349, 25, 378, 'Raja Ampat', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(350, 25, 424, 'Sorong', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(351, 25, 425, 'Sorong', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(352, 25, 426, 'Sorong Selatan', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(353, 25, 449, 'Tambrauw', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(354, 25, 474, 'Teluk Bintuni', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(355, 25, 475, 'Teluk Wondama', '2019-10-22 07:50:33', '2019-10-22 07:50:33'),
(356, 26, 60, 'Bengkalis', '2019-10-22 07:50:34', '2019-10-22 07:50:34'),
(357, 26, 120, 'Dumai', '2019-10-22 07:50:34', '2019-10-22 07:50:34'),
(358, 26, 147, 'Indragiri Hilir', '2019-10-22 07:50:34', '2019-10-22 07:50:34'),
(359, 26, 148, 'Indragiri Hulu', '2019-10-22 07:50:34', '2019-10-22 07:50:34'),
(360, 26, 166, 'Kampar', '2019-10-22 07:50:34', '2019-10-22 07:50:34'),
(361, 26, 187, 'Kepulauan Meranti', '2019-10-22 07:50:34', '2019-10-22 07:50:34'),
(362, 26, 207, 'Kuantan Singingi', '2019-10-22 07:50:34', '2019-10-22 07:50:34'),
(363, 26, 350, 'Pekanbaru', '2019-10-22 07:50:34', '2019-10-22 07:50:34'),
(364, 26, 351, 'Pelalawan', '2019-10-22 07:50:34', '2019-10-22 07:50:34'),
(365, 26, 381, 'Rokan Hilir', '2019-10-22 07:50:34', '2019-10-22 07:50:34'),
(366, 26, 382, 'Rokan Hulu', '2019-10-22 07:50:34', '2019-10-22 07:50:34'),
(367, 26, 406, 'Siak', '2019-10-22 07:50:34', '2019-10-22 07:50:34'),
(368, 27, 253, 'Majene', '2019-10-22 07:50:34', '2019-10-22 07:50:34'),
(369, 27, 262, 'Mamasa', '2019-10-22 07:50:35', '2019-10-22 07:50:35'),
(370, 27, 265, 'Mamuju', '2019-10-22 07:50:35', '2019-10-22 07:50:35'),
(371, 27, 266, 'Mamuju Utara', '2019-10-22 07:50:35', '2019-10-22 07:50:35'),
(372, 27, 362, 'Polewali Mandar', '2019-10-22 07:50:35', '2019-10-22 07:50:35'),
(373, 28, 38, 'Bantaeng', '2019-10-22 07:50:38', '2019-10-22 07:50:38'),
(374, 28, 47, 'Barru', '2019-10-22 07:50:38', '2019-10-22 07:50:38'),
(375, 28, 87, 'Bone', '2019-10-22 07:50:38', '2019-10-22 07:50:38'),
(376, 28, 95, 'Bulukumba', '2019-10-22 07:50:38', '2019-10-22 07:50:38'),
(377, 28, 123, 'Enrekang', '2019-10-22 07:50:38', '2019-10-22 07:50:38'),
(378, 28, 132, 'Gowa', '2019-10-22 07:50:38', '2019-10-22 07:50:38'),
(379, 28, 162, 'Jeneponto', '2019-10-22 07:50:38', '2019-10-22 07:50:38'),
(380, 28, 244, 'Luwu', '2019-10-22 07:50:38', '2019-10-22 07:50:38'),
(381, 28, 245, 'Luwu Timur', '2019-10-22 07:50:38', '2019-10-22 07:50:38'),
(382, 28, 246, 'Luwu Utara', '2019-10-22 07:50:38', '2019-10-22 07:50:38'),
(383, 28, 254, 'Makassar', '2019-10-22 07:50:38', '2019-10-22 07:50:38'),
(384, 28, 275, 'Maros', '2019-10-22 07:50:38', '2019-10-22 07:50:38'),
(385, 28, 328, 'Palopo', '2019-10-22 07:50:38', '2019-10-22 07:50:38'),
(386, 28, 333, 'Pangkajene Kepulauan', '2019-10-22 07:50:38', '2019-10-22 07:50:38'),
(387, 28, 336, 'Parepare', '2019-10-22 07:50:38', '2019-10-22 07:50:38'),
(388, 28, 360, 'Pinrang', '2019-10-22 07:50:38', '2019-10-22 07:50:38'),
(389, 28, 396, 'Selayar (Kepulauan Selayar)', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(390, 28, 408, 'Sidenreng Rappang/Rapang', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(391, 28, 416, 'Sinjai', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(392, 28, 423, 'Soppeng', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(393, 28, 448, 'Takalar', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(394, 28, 451, 'Tana Toraja', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(395, 28, 486, 'Toraja Utara', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(396, 28, 493, 'Wajo', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(397, 29, 25, 'Banggai', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(398, 29, 26, 'Banggai Kepulauan', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(399, 29, 98, 'Buol', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(400, 29, 119, 'Donggala', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(401, 29, 291, 'Morowali', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(402, 29, 329, 'Palu', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(403, 29, 338, 'Parigi Moutong', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(404, 29, 366, 'Poso', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(405, 29, 410, 'Sigi', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(406, 29, 482, 'Tojo Una-Una', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(407, 29, 483, 'Toli-Toli', '2019-10-22 07:50:39', '2019-10-22 07:50:39'),
(408, 30, 53, 'Bau-Bau', '2019-10-22 07:50:41', '2019-10-22 07:50:41'),
(409, 30, 85, 'Bombana', '2019-10-22 07:50:41', '2019-10-22 07:50:41'),
(410, 30, 101, 'Buton', '2019-10-22 07:50:41', '2019-10-22 07:50:41'),
(411, 30, 102, 'Buton Utara', '2019-10-22 07:50:41', '2019-10-22 07:50:41'),
(412, 30, 182, 'Kendari', '2019-10-22 07:50:41', '2019-10-22 07:50:41'),
(413, 30, 198, 'Kolaka', '2019-10-22 07:50:41', '2019-10-22 07:50:41'),
(414, 30, 199, 'Kolaka Utara', '2019-10-22 07:50:41', '2019-10-22 07:50:41'),
(415, 30, 200, 'Konawe', '2019-10-22 07:50:41', '2019-10-22 07:50:41'),
(416, 30, 201, 'Konawe Selatan', '2019-10-22 07:50:41', '2019-10-22 07:50:41'),
(417, 30, 202, 'Konawe Utara', '2019-10-22 07:50:41', '2019-10-22 07:50:41'),
(418, 30, 295, 'Muna', '2019-10-22 07:50:41', '2019-10-22 07:50:41'),
(419, 30, 494, 'Wakatobi', '2019-10-22 07:50:41', '2019-10-22 07:50:41'),
(420, 31, 73, 'Bitung', '2019-10-22 07:50:42', '2019-10-22 07:50:42'),
(421, 31, 81, 'Bolaang Mongondow (Bolmong)', '2019-10-22 07:50:42', '2019-10-22 07:50:42'),
(422, 31, 82, 'Bolaang Mongondow Selatan', '2019-10-22 07:50:42', '2019-10-22 07:50:42'),
(423, 31, 83, 'Bolaang Mongondow Timur', '2019-10-22 07:50:42', '2019-10-22 07:50:42'),
(424, 31, 84, 'Bolaang Mongondow Utara', '2019-10-22 07:50:42', '2019-10-22 07:50:42'),
(425, 31, 188, 'Kepulauan Sangihe', '2019-10-22 07:50:42', '2019-10-22 07:50:42'),
(426, 31, 190, 'Kepulauan Siau Tagulandang Biaro (Sitaro)', '2019-10-22 07:50:42', '2019-10-22 07:50:42'),
(427, 31, 192, 'Kepulauan Talaud', '2019-10-22 07:50:42', '2019-10-22 07:50:42'),
(428, 31, 204, 'Kotamobagu', '2019-10-22 07:50:42', '2019-10-22 07:50:42'),
(429, 31, 267, 'Manado', '2019-10-22 07:50:42', '2019-10-22 07:50:42'),
(430, 31, 285, 'Minahasa', '2019-10-22 07:50:42', '2019-10-22 07:50:42'),
(431, 31, 286, 'Minahasa Selatan', '2019-10-22 07:50:42', '2019-10-22 07:50:42'),
(432, 31, 287, 'Minahasa Tenggara', '2019-10-22 07:50:42', '2019-10-22 07:50:42'),
(433, 31, 288, 'Minahasa Utara', '2019-10-22 07:50:42', '2019-10-22 07:50:42'),
(434, 31, 485, 'Tomohon', '2019-10-22 07:50:42', '2019-10-22 07:50:42'),
(435, 32, 12, 'Agam', '2019-10-22 07:50:43', '2019-10-22 07:50:43'),
(436, 32, 93, 'Bukittinggi', '2019-10-22 07:50:43', '2019-10-22 07:50:43'),
(437, 32, 116, 'Dharmasraya', '2019-10-22 07:50:43', '2019-10-22 07:50:43'),
(438, 32, 186, 'Kepulauan Mentawai', '2019-10-22 07:50:43', '2019-10-22 07:50:43'),
(439, 32, 236, 'Lima Puluh Koto/Kota', '2019-10-22 07:50:43', '2019-10-22 07:50:43'),
(440, 32, 318, 'Padang', '2019-10-22 07:50:43', '2019-10-22 07:50:43'),
(441, 32, 321, 'Padang Panjang', '2019-10-22 07:50:43', '2019-10-22 07:50:43'),
(442, 32, 322, 'Padang Pariaman', '2019-10-22 07:50:43', '2019-10-22 07:50:43'),
(443, 32, 337, 'Pariaman', '2019-10-22 07:50:43', '2019-10-22 07:50:43'),
(444, 32, 339, 'Pasaman', '2019-10-22 07:50:43', '2019-10-22 07:50:43'),
(445, 32, 340, 'Pasaman Barat', '2019-10-22 07:50:43', '2019-10-22 07:50:43'),
(446, 32, 345, 'Payakumbuh', '2019-10-22 07:50:43', '2019-10-22 07:50:43'),
(447, 32, 357, 'Pesisir Selatan', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(448, 32, 394, 'Sawah Lunto', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(449, 32, 411, 'Sijunjung (Sawah Lunto Sijunjung)', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(450, 32, 420, 'Solok', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(451, 32, 421, 'Solok', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(452, 32, 422, 'Solok Selatan', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(453, 32, 453, 'Tanah Datar', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(454, 33, 40, 'Banyuasin', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(455, 33, 121, 'Empat Lawang', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(456, 33, 220, 'Lahat', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(457, 33, 242, 'Lubuk Linggau', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(458, 33, 292, 'Muara Enim', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(459, 33, 297, 'Musi Banyuasin', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(460, 33, 298, 'Musi Rawas', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(461, 33, 312, 'Ogan Ilir', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(462, 33, 313, 'Ogan Komering Ilir', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(463, 33, 314, 'Ogan Komering Ulu', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(464, 33, 315, 'Ogan Komering Ulu Selatan', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(465, 33, 316, 'Ogan Komering Ulu Timur', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(466, 33, 324, 'Pagar Alam', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(467, 33, 327, 'Palembang', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(468, 33, 367, 'Prabumulih', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(469, 34, 15, 'Asahan', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(470, 34, 52, 'Batu Bara', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(471, 34, 70, 'Binjai', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(472, 34, 110, 'Dairi', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(473, 34, 112, 'Deli Serdang', '2019-10-22 07:50:44', '2019-10-22 07:50:44'),
(474, 34, 137, 'Gunungsitoli', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(475, 34, 146, 'Humbang Hasundutan', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(476, 34, 173, 'Karo', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(477, 34, 217, 'Labuhan Batu', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(478, 34, 218, 'Labuhan Batu Selatan', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(479, 34, 219, 'Labuhan Batu Utara', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(480, 34, 229, 'Langkat', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(481, 34, 268, 'Mandailing Natal', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(482, 34, 278, 'Medan', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(483, 34, 307, 'Nias', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(484, 34, 308, 'Nias Barat', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(485, 34, 309, 'Nias Selatan', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(486, 34, 310, 'Nias Utara', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(487, 34, 319, 'Padang Lawas', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(488, 34, 320, 'Padang Lawas Utara', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(489, 34, 323, 'Padang Sidempuan', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(490, 34, 325, 'Pakpak Bharat', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(491, 34, 353, 'Pematang Siantar', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(492, 34, 389, 'Samosir', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(493, 34, 404, 'Serdang Bedagai', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(494, 34, 407, 'Sibolga', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(495, 34, 413, 'Simalungun', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(496, 34, 459, 'Tanjung Balai', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(497, 34, 463, 'Tapanuli Selatan', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(498, 34, 464, 'Tapanuli Tengah', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(499, 34, 465, 'Tapanuli Utara', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(500, 34, 470, 'Tebing Tinggi', '2019-10-22 07:50:45', '2019-10-22 07:50:45'),
(501, 34, 481, 'Toba Samosir', '2019-10-22 07:50:45', '2019-10-22 07:50:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=502;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;