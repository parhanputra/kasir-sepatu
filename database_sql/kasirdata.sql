-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Feb 2024 pada 03.07
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori_id` varchar(255) NOT NULL,
  `harga_beli` double(8,2) NOT NULL,
  `harga_jual` double(8,2) NOT NULL,
  `merk_id` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `diskon` double(8,2) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `kode`, `nama`, `kategori_id`, `harga_beli`, `harga_jual`, `merk_id`, `stok`, `diskon`, `ukuran`, `created_at`, `updated_at`) VALUES
(5, '0004', 'chuky taylor', '2', 140000.00, 200000.00, 1, 25, 5.00, 32, '2024-02-11 21:37:59', '2024-02-18 18:52:56'),
(8, '0004', 'Catalyst Thunder', '7', 130000.00, 150000.00, 7, 10, 15.00, 41, '2024-02-18 18:22:32', '2024-02-18 18:52:56');

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
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(2, 'Sneakers', '2024-01-24 19:08:15', '2024-01-24 19:08:15'),
(3, 'Slip On', '2024-01-24 19:11:08', '2024-01-24 19:11:08'),
(4, 'Boots', '2024-01-24 19:11:47', '2024-01-24 19:11:47'),
(7, 'running', '2024-02-18 18:18:50', '2024-02-18 18:19:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merks`
--

CREATE TABLE `merks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merk` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `merks`
--

INSERT INTO `merks` (`id`, `merk`, `created_at`, `updated_at`) VALUES
(1, 'Nike', '2024-01-24 18:16:04', '2024-01-24 18:16:04'),
(3, 'Homipet', '2024-02-05 22:14:16', '2024-02-05 22:14:16'),
(4, 'Ventela', '2024-02-05 22:14:29', '2024-02-05 22:14:29'),
(6, 'Adidas', '2024-02-18 18:19:28', '2024-02-18 18:19:28'),
(7, 'ortuseight', '2024-02-18 18:21:16', '2024-02-18 18:21:16');

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
(5, '2024_01_08_132653_create_kategoris_table', 1),
(6, '2024_01_08_132723_create_satuans_table', 1),
(7, '2024_01_08_132733_create_barangs_table', 1),
(8, '2024_01_08_132801_create_penjualans_table', 1),
(9, '2024_01_12_125330_create_transaksis_table', 1),
(10, '2024_01_12_125358_create_transaksi_sementaras_table', 1),
(11, '2024_01_15_004113_create_transaksi_details_table', 1),
(12, '2024_01_25_005433_create_merks_table', 1);

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
-- Struktur dari tabel `penjualans`
--

CREATE TABLE `penjualans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `pelanggan_id` int(11) DEFAULT NULL,
  `barang_id` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `diskon` double(8,2) DEFAULT NULL,
  `total_belanja` double(8,2) NOT NULL,
  `kembali` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Struktur dari tabel `satuans`
--

CREATE TABLE `satuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `total` double(10,2) NOT NULL,
  `bayar` double(10,2) NOT NULL,
  `kembali` double(10,2) NOT NULL,
  `kode_kasir` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksis`
--

INSERT INTO `transaksis` (`id`, `kode_transaksi`, `total`, `bayar`, `kembali`, `kode_kasir`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, '2024110000001', 207000.00, 322222.00, 115222.00, '20241100001', '2024-01-25 08:48:16', '2024-01-24 18:48:16', '2024-01-24 18:48:16'),
(2, '2024110000002', 207000.00, 222222.00, 15222.00, '20241100001', '2024-01-25 09:03:02', '2024-01-24 19:03:02', '2024-01-24 19:03:02'),
(3, '2024210000003', 207000.00, 33333.00, -173667.00, 'K-20242100002', '2024-02-06 12:18:59', '2024-02-05 22:18:59', '2024-02-05 22:18:59'),
(4, '2024210000004', 0.00, 655.00, 655.00, 'K-20242100002', '2024-02-06 12:19:29', '2024-02-05 22:19:29', '2024-02-05 22:19:29'),
(5, '2024210000005', 511320.00, 609000.00, 97680.00, 'K-20242100002', '2024-02-06 12:23:37', '2024-02-05 22:23:37', '2024-02-05 22:23:37'),
(6, '2024210000006', 0.00, 324823.00, 324823.00, '20241100001', '2024-02-06 13:05:49', '2024-02-05 23:05:49', '2024-02-05 23:05:49'),
(7, '2024210000007', 0.00, 900000.00, 900000.00, '20241100001', '2024-02-06 13:06:06', '2024-02-05 23:06:06', '2024-02-05 23:06:06'),
(8, '2024210000008', 0.00, 122.00, 122.00, '20241100001', '2024-02-06 13:12:48', '2024-02-05 23:12:48', '2024-02-05 23:12:48'),
(9, '2024210000009', 22080.00, 3223.00, -18857.00, 'K-20242100002', '2024-02-06 13:26:45', '2024-02-05 23:26:45', '2024-02-05 23:26:45'),
(10, '2024210000010', 22080.00, 4444.00, -17636.00, 'K-20242100002', '2024-02-06 13:27:24', '2024-02-05 23:27:24', '2024-02-05 23:27:24'),
(11, '2024210000011', 207000.00, 646.00, -206354.00, '20241100001', '2024-02-12 11:31:51', '2024-02-11 21:31:51', '2024-02-11 21:31:51'),
(12, '2024210000012', 141000.00, 5476.00, -135524.00, '20241100001', '2024-02-12 11:32:12', '2024-02-11 21:32:12', '2024-02-11 21:32:12'),
(13, '2024210000013', 570000.00, 655555.00, 85555.00, '20241100001', '2024-02-12 11:38:24', '2024-02-11 21:38:24', '2024-02-11 21:38:24'),
(14, '2024210000014', 207000.00, 1111.00, -205889.00, '20241100001', '2024-02-13 11:32:41', '2024-02-12 21:32:41', '2024-02-12 21:32:41'),
(15, '2024210000015', 22080.00, 12.00, -22068.00, '20241100001', '2024-02-13 11:41:57', '2024-02-12 21:41:57', '2024-02-12 21:41:57'),
(16, '2024210000016', 207000.00, 12.00, -206988.00, '20241100001', '2024-02-13 11:42:16', '2024-02-12 21:42:16', '2024-02-12 21:42:16'),
(17, '2024210000017', 141000.00, 1.00, -140999.00, '20241100001', '2024-02-13 11:50:30', '2024-02-12 21:50:30', '2024-02-12 21:50:30'),
(18, '2024210000018', 190000.00, 900000.00, 710000.00, '20241100001', '2024-02-15 08:13:55', '2024-02-14 18:13:55', '2024-02-14 18:13:55'),
(19, '2024210000019', 264000.00, 400000.00, 136000.00, '20241100001', '2024-02-15 08:17:10', '2024-02-14 18:17:10', '2024-02-14 18:17:10'),
(20, '2024210000020', 256240.00, 1000000.00, 743760.00, '20241100001', '2024-02-15 08:47:08', '2024-02-14 18:47:08', '2024-02-14 18:47:08'),
(21, '2024210000021', 2280000.00, 20000000.00, 17720000.00, '20241100001', '2024-02-15 08:47:52', '2024-02-14 18:47:52', '2024-02-14 18:47:52'),
(22, '2024210000022', 190000.00, 232222.00, 42222.00, '20241100001', '2024-02-15 08:48:06', '2024-02-14 18:48:06', '2024-02-14 18:48:06'),
(23, '2024210000023', 22080.00, 30000.00, 7920.00, '20241100001', '2024-02-15 08:49:01', '2024-02-14 18:49:01', '2024-02-14 18:49:01'),
(24, '2024210000024', 190000.00, 324444.00, 134444.00, '20241100001', '2024-02-15 09:38:13', '2024-02-14 19:38:13', '2024-02-14 19:38:13'),
(25, '2024210000025', 22080.00, 876543.00, 854463.00, '20241100001', '2024-02-15 09:40:00', '2024-02-14 19:40:00', '2024-02-14 19:40:00'),
(26, '2024210000026', 22080.00, 656565.00, 634485.00, '20241100001', '2024-02-15 09:40:33', '2024-02-14 19:40:33', '2024-02-14 19:40:33'),
(27, '2024210000027', 22080.00, 33333.00, 11253.00, '20241100001', '2024-02-15 09:41:07', '2024-02-14 19:41:07', '2024-02-14 19:41:07'),
(28, '2024210000028', 1520000.00, 13333333.00, 11813333.00, '20241100001', '2024-02-15 09:41:32', '2024-02-14 19:41:32', '2024-02-14 19:41:32'),
(29, '2024210000029', 190000.00, 444444.00, 254444.00, '20241100001', '2024-02-15 09:42:14', '2024-02-14 19:42:14', '2024-02-14 19:42:14'),
(30, '2024210000030', 190000.00, 555455.00, 365455.00, '20241100001', '2024-02-15 09:42:41', '2024-02-14 19:42:41', '2024-02-14 19:42:41'),
(31, '2024210000031', 760000.00, 1000000.00, 240000.00, 'K-20242100002', '2024-02-15 10:36:25', '2024-02-14 20:36:25', '2024-02-14 20:36:25'),
(32, '2024210000032', 154560.00, 554433.00, 399873.00, 'K-20242100002', '2024-02-15 10:56:24', '2024-02-14 20:56:24', '2024-02-14 20:56:24'),
(33, '2024210000033', 316666.35, 344444.00, 27777.65, 'K-20242100002', '2024-02-16 07:21:21', '2024-02-15 17:21:21', '2024-02-15 17:21:21'),
(34, '2024210000034', 22080.00, 33334.00, 11254.00, 'K-20242100002', '2024-02-16 07:22:13', '2024-02-15 17:22:13', '2024-02-15 17:22:13'),
(35, '2024210000035', 190000.00, 989898.00, 799898.00, '20241100001', '2024-02-16 07:33:29', '2024-02-15 17:33:29', '2024-02-15 17:33:29'),
(36, '2024210000036', 1140000.00, 2000000.00, 860000.00, '20241100001', '2024-02-19 08:22:59', '2024-02-18 18:22:59', '2024-02-18 18:22:59'),
(37, '2024210000037', 190000.00, 549854.00, 359854.00, '20241100001', '2024-02-19 08:32:58', '2024-02-18 18:32:58', '2024-02-18 18:32:58'),
(38, '2024210000038', 127500.00, 332222.00, 204722.00, '20241100001', '2024-02-19 08:33:35', '2024-02-18 18:33:35', '2024-02-18 18:33:35'),
(39, '2024210000039', 507500.00, 760000.00, 252500.00, '20241100001', '2024-02-19 08:42:42', '2024-02-18 18:42:42', '2024-02-18 18:42:42'),
(40, '2024210000040', 317500.00, 400000.00, 82500.00, '20241100001', '2024-02-19 08:43:14', '2024-02-18 18:43:14', '2024-02-18 18:43:14'),
(41, '2024210000041', 317500.00, 400000.00, 82500.00, '20241100001', '2024-02-19 08:43:47', '2024-02-18 18:43:47', '2024-02-18 18:43:47'),
(42, '2024210000042', 317500.00, 450000.00, 132500.00, '20241100001', '2024-02-19 08:44:16', '2024-02-18 18:44:16', '2024-02-18 18:44:16'),
(43, '2024210000043', 317500.00, 400000.00, 82500.00, '20241100001', '2024-02-19 08:47:43', '2024-02-18 18:47:43', '2024-02-18 18:47:43'),
(44, '2024210000044', 1970000.00, 2000000.00, 30000.00, '20241100001', '2024-02-19 08:52:56', '2024-02-18 18:52:56', '2024-02-18 18:52:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_details`
--

CREATE TABLE `transaksi_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `barang` varchar(255) NOT NULL,
  `harga` double(10,2) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `diskon` double(8,2) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `total` double(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi_details`
--

INSERT INTO `transaksi_details` (`id`, `kode_transaksi`, `barang`, `harga`, `jumlah`, `diskon`, `ukuran`, `total`, `created_at`, `updated_at`) VALUES
(1, '2024110000001', 'kasir', 230000.00, 1, 10.00, 0, 207000.00, '2024-01-24 18:48:16', '2024-01-24 18:48:16'),
(2, '2024110000002', 'kasir', 230000.00, 1, 10.00, 6, 207000.00, '2024-01-24 19:03:02', '2024-01-24 19:03:02'),
(3, '2024210000003', 'kasir', 230000.00, 1, 10.00, 6, 207000.00, '2024-02-05 22:18:59', '2024-02-05 22:18:59'),
(4, '2024210000005', 'sepatu', 23000.00, 4, 4.00, 41, 88320.00, '2024-02-05 22:23:37', '2024-02-05 22:23:37'),
(5, '2024210000005', 'sepat', 150000.00, 1, 6.00, 39, 141000.00, '2024-02-05 22:23:37', '2024-02-05 22:23:37'),
(6, '2024210000005', 'sepat', 150000.00, 1, 6.00, 39, 141000.00, '2024-02-05 22:23:37', '2024-02-05 22:23:37'),
(7, '2024210000005', 'sepat', 150000.00, 1, 6.00, 39, 141000.00, '2024-02-05 22:23:37', '2024-02-05 22:23:37'),
(8, '2024210000009', 'sepatu', 23000.00, 1, 4.00, 41, 22080.00, '2024-02-05 23:26:45', '2024-02-05 23:26:45'),
(9, '2024210000010', 'sepatu', 23000.00, 1, 4.00, 41, 22080.00, '2024-02-05 23:27:24', '2024-02-05 23:27:24'),
(10, '2024210000011', 'kasir', 230000.00, 1, 10.00, 6, 207000.00, '2024-02-11 21:31:51', '2024-02-11 21:31:51'),
(11, '2024210000012', 'sepat', 150000.00, 1, 6.00, 39, 141000.00, '2024-02-11 21:32:12', '2024-02-11 21:32:12'),
(12, '2024210000013', 'chuky taylor', 200000.00, 3, 5.00, 32, 570000.00, '2024-02-11 21:38:24', '2024-02-11 21:38:24'),
(13, '2024210000014', 'kasir', 230000.00, 1, 10.00, 6, 207000.00, '2024-02-12 21:32:41', '2024-02-12 21:32:41'),
(14, '2024210000015', 'sepatu', 23000.00, 1, 4.00, 41, 22080.00, '2024-02-12 21:41:57', '2024-02-12 21:41:57'),
(15, '2024210000016', 'kasir', 230000.00, 1, 10.00, 6, 207000.00, '2024-02-12 21:42:16', '2024-02-12 21:42:16'),
(16, '2024210000017', 'sepat', 150000.00, 1, 6.00, 39, 141000.00, '2024-02-12 21:50:30', '2024-02-12 21:50:30'),
(17, '2024210000018', 'chuky taylor', 200000.00, 1, 5.00, 32, 190000.00, '2024-02-14 18:13:55', '2024-02-14 18:13:55'),
(18, '2024210000019', 'Farhan Kusuma Putra Dinata', 300000.00, 1, 12.00, 43, 264000.00, '2024-02-14 18:15:33', '2024-02-14 18:15:33'),
(19, '2024210000019', 'Farhan Kusuma Putra Dinata', 300000.00, 1, 12.00, 43, 264000.00, '2024-02-14 18:17:10', '2024-02-14 18:17:10'),
(20, '2024210000020', 'Farhan Kusuma Putra Dinata', 300000.00, 1, 12.00, 43, 264000.00, '2024-02-14 18:17:20', '2024-02-14 18:17:20'),
(21, '2024210000020', 'chuky taylor', 200000.00, 1, 5.00, 32, 190000.00, '2024-02-14 18:47:08', '2024-02-14 18:47:08'),
(22, '2024210000021', 'chuky taylor', 200000.00, 12, 5.00, 32, 2280000.00, '2024-02-14 18:47:52', '2024-02-14 18:47:52'),
(23, '2024210000022', 'chuky taylor', 200000.00, 1, 5.00, 32, 190000.00, '2024-02-14 18:48:06', '2024-02-14 18:48:06'),
(24, '2024210000023', 'sepatu', 23000.00, 1, 4.00, 41, 22080.00, '2024-02-14 18:49:01', '2024-02-14 18:49:01'),
(25, '2024210000024', 'chuky taylor', 200000.00, 1, 5.00, 32, 190000.00, '2024-02-14 19:38:13', '2024-02-14 19:38:13'),
(26, '2024210000025', 'sepatu', 23000.00, 1, 4.00, 41, 22080.00, '2024-02-14 19:40:00', '2024-02-14 19:40:00'),
(27, '2024210000026', 'sepatu', 23000.00, 1, 4.00, 41, 22080.00, '2024-02-14 19:40:33', '2024-02-14 19:40:33'),
(28, '2024210000027', 'sepatu', 23000.00, 1, 4.00, 41, 22080.00, '2024-02-14 19:41:07', '2024-02-14 19:41:07'),
(29, '2024210000028', 'chuky taylor', 200000.00, 8, 5.00, 32, 1520000.00, '2024-02-14 19:41:32', '2024-02-14 19:41:32'),
(30, '2024210000029', 'chuky taylor', 200000.00, 1, 5.00, 32, 190000.00, '2024-02-14 19:42:14', '2024-02-14 19:42:14'),
(31, '2024210000030', 'chuky taylor', 200000.00, 1, 5.00, 32, 190000.00, '2024-02-14 19:42:41', '2024-02-14 19:42:41'),
(32, '2024210000031', 'chuky taylor', 200000.00, 4, 5.00, 32, 760000.00, '2024-02-14 20:36:25', '2024-02-14 20:36:25'),
(33, '2024210000032', 'sepatu', 23000.00, 7, 4.00, 41, 154560.00, '2024-02-14 20:56:24', '2024-02-14 20:56:24'),
(34, '2024210000033', 'Rinso', 333333.00, 1, 5.00, 33, 316666.35, '2024-02-15 17:21:21', '2024-02-15 17:21:21'),
(35, '2024210000034', 'sepatu', 23000.00, 1, 4.00, 41, 22080.00, '2024-02-15 17:22:13', '2024-02-15 17:22:13'),
(36, '2024210000035', 'chuky taylor', 200000.00, 1, 5.00, 32, 190000.00, '2024-02-15 17:33:29', '2024-02-15 17:33:29'),
(37, '2024210000036', 'chuky taylor', 200000.00, 6, 5.00, 32, 1140000.00, '2024-02-18 18:22:59', '2024-02-18 18:22:59'),
(38, '2024210000037', 'chuky taylor', 200000.00, 1, 5.00, 32, 190000.00, '2024-02-18 18:32:58', '2024-02-18 18:32:58'),
(39, '2024210000038', 'Catalyst Thunder', 150000.00, 1, 15.00, 41, 127500.00, '2024-02-18 18:33:35', '2024-02-18 18:33:35'),
(40, '2024210000039', 'chuky taylor', 200000.00, 1, 5.00, 32, 190000.00, '2024-02-18 18:42:42', '2024-02-18 18:42:42'),
(41, '2024210000040', 'Catalyst Thunder', 150000.00, 1, 15.00, 41, 127500.00, '2024-02-18 18:43:14', '2024-02-18 18:43:14'),
(42, '2024210000041', 'chuky taylor', 200000.00, 1, 5.00, 32, 190000.00, '2024-02-18 18:43:47', '2024-02-18 18:43:47'),
(43, '2024210000042', 'chuky taylor', 200000.00, 1, 5.00, 32, 190000.00, '2024-02-18 18:44:16', '2024-02-18 18:44:16'),
(44, '2024210000043', 'chuky taylor', 200000.00, 1, 5.00, 32, 190000.00, '2024-02-18 18:47:43', '2024-02-18 18:47:43'),
(45, '2024210000043', 'Catalyst Thunder', 150000.00, 1, 15.00, 41, 127500.00, '2024-02-18 18:47:43', '2024-02-18 18:47:43'),
(46, '2024210000044', 'chuky taylor', 200000.00, 5, 5.00, 32, 950000.00, '2024-02-18 18:52:56', '2024-02-18 18:52:56'),
(47, '2024210000044', 'Catalyst Thunder', 150000.00, 8, 15.00, 41, 1020000.00, '2024-02-18 18:52:56', '2024-02-18 18:52:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_sementaras`
--

CREATE TABLE `transaksi_sementaras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `harga` double(10,2) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `diskon` double(8,2) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `total` double(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `kode`, `nama`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'K-20242100002', 'kasir', 'kasir@gmail.com', NULL, '$2y$12$y.aWK4dhvddasxjiCGPmduuW2vQ8FsiTK/jw1N7FKO9qmF3B658Eq', 'Kasir', NULL, '2024-02-05 22:17:56', '2024-02-05 22:17:56'),
(4, 'K-20242100003', 'kukuh', 'kukuh@gmail.com', NULL, '$2y$12$QHAa0tmbP0M5l4Zv1wFqKe720wrAjEFDKq0kNvCQNwGXpga8pzrLq', 'Kasir', NULL, '2024-02-18 18:55:17', '2024-02-18 18:55:17'),
(5, 'K-20242100004', 'Administrator', 'admin@gmail.com', NULL, '$2y$12$xhtEGH9clhyQeHG8cTa.J.QX7jQlTySwtC8H8pYVkRQaPQhyb1PUS', 'Admin', NULL, '2024-02-18 18:56:51', '2024-02-18 18:56:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `merks`
--
ALTER TABLE `merks`
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
-- Indeks untuk tabel `penjualans`
--
ALTER TABLE `penjualans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `satuans`
--
ALTER TABLE `satuans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_details`
--
ALTER TABLE `transaksi_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_sementaras`
--
ALTER TABLE `transaksi_sementaras`
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
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `merks`
--
ALTER TABLE `merks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `penjualans`
--
ALTER TABLE `penjualans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `satuans`
--
ALTER TABLE `satuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `transaksi_details`
--
ALTER TABLE `transaksi_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `transaksi_sementaras`
--
ALTER TABLE `transaksi_sementaras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
