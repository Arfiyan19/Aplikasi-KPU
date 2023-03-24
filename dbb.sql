-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Mar 2023 pada 07.42
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_barang`
--

CREATE TABLE `master_barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(191) NOT NULL,
  `harga_satuan` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_barang`
--

INSERT INTO `master_barang` (`id`, `nama_barang`, `harga_satuan`, `created_at`, `updated_at`) VALUES
(1, 'Sabun batang', 3000.00, '2023-03-20 14:22:34', '2023-03-20 14:22:34'),
(2, 'Mi Instan', 2000.00, '2023-03-20 14:22:34', '2023-03-20 14:22:34'),
(3, 'Pensil', 1000.00, '2023-03-20 14:22:34', '2023-03-20 14:22:34'),
(4, 'Kopi sachet', 1500.00, '2023-03-20 14:22:34', '2023-03-20 14:22:34'),
(5, 'Air minum galon', 20000.00, '2023-03-20 14:22:34', '2023-03-20 14:22:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
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
(5, '2021_10_08_173527_create_master_barang_table', 1),
(6, '2021_10_08_173603_create_transaksi_pembelian_table', 1),
(7, '2021_10_08_173628_create_transaksi_pembelian_barang_table', 1),
(8, '2021_10_09_043359_create_profile_table', 1),
(11, '2023_03_20_232603_create_pemilihs_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilihs`
--

CREATE TABLE `pemilihs` (
  `nik` bigint(50) NOT NULL,
  `nokk` bigint(50) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `tempat_lahir` varchar(191) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(191) NOT NULL,
  `desa` varchar(191) NOT NULL,
  `kecamatan` varchar(191) NOT NULL,
  `tps` varchar(191) NOT NULL,
  `status_dpt` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemilihs`
--

INSERT INTO `pemilihs` (`nik`, `nokk`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `desa`, `kecamatan`, `tps`, `status_dpt`, `created_at`, `updated_at`) VALUES
(1204061504780002, 12040615047800012, 'Wahyu', 'Ponorogo', '2008-12-08', 'L', 'Jakarta', 'Kota Jakarta', 'TPS-1', 'Terdaftar di DPT', '2023-03-22 10:03:55', '2023-03-22 10:03:55'),
(1204061504780003, 12040615047800012, 'Pratama Ardiansyah', 'Jakarta Timur', '1999-12-15', 'L', 'Jaktim', 'Jakarta', 'TPS-1', 'Terdaftar di DPT', '2023-03-22 14:05:36', '2023-03-22 14:05:36'),
(1204061504780004, 12040615047800012, 'Sugeng Riyadi', 'Jakarta Utara', '1987-02-12', 'L', 'Jakarta Bagian utara', 'jakarta utara kota', 'TPS-1', 'Terdaftar di DPT', '2023-03-23 03:09:02', '2023-03-23 03:09:02'),
(1204061504780005, 12040615047800032, 'AMILI GEA', 'BALALE', '1978-03-03', 'L', 'Balale Taba\'a', 'Bawolato', 'TPS-1', 'Terdaftar di DPT', '2023-03-23 06:32:51', '2023-03-23 06:32:51'),
(1204111004940008, 12041110049400034, 'LIAMAN LAFAU', 'BALALE', '1970-01-01', 'L', 'Balale Taba\'a', 'Bawolato', 'TPS-1', 'Terdaftar di DPT', '2023-03-23 06:32:51', '2023-03-23 06:32:51'),
(1204112802700006, 12041128027000033, 'FONAHIA LAFAU', 'BALALE', '1970-01-01', 'L', 'Balale Taba\'a', 'Bawolato', 'TPS-1', 'Terdaftar di DPT', '2023-03-23 06:32:51', '2023-03-23 06:32:51'),
(1204112802700009, 12040615047800012, 'Cahyani', 'Malang', '1999-01-18', 'L', 'malang', 'malang kota', 'TPS-1', 'Terdaftar di DPT', '2023-03-23 06:34:50', '2023-03-23 06:34:50'),
(1204116706920007, 12041128027000033, 'DAMAI PUTRA LAFAU', 'BALALE', '1970-01-01', 'P', 'Balale Taba\'a', 'Bawolato', 'TPS-1', 'Terdaftar di DPT', '2023-03-23 06:32:51', '2023-03-23 06:32:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` enum('Pria','Perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(60) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `no_telp` varchar(191) DEFAULT NULL,
  `profile_foto` varchar(191) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `umur`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `bio`, `no_telp`, `profile_foto`, `user_id`) VALUES
(1, 18, 'Pria', 'Bogor', '2003-03-29', '<p>jln Admin</p>', '<p>IAM ADMIN</p>', '082246105463', 'default.svg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_pembelian`
--

CREATE TABLE `transaksi_pembelian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi_pembelian`
--

INSERT INTO `transaksi_pembelian` (`id`, `total_harga`, `created_at`, `updated_at`) VALUES
(1, 39500, '2023-03-20 14:22:35', '2023-03-20 14:22:35'),
(2, 200000, '2023-03-20 14:22:35', '2023-03-20 14:22:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_pembelian_barang`
--

CREATE TABLE `transaksi_pembelian_barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaksi_pembelian_id` bigint(20) UNSIGNED NOT NULL,
  `master_barang_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi_pembelian_barang`
--

INSERT INTO `transaksi_pembelian_barang` (`id`, `transaksi_pembelian_id`, `master_barang_id`, `jumlah`, `harga_satuan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 10, 3000, '2023-03-20 14:22:35', '2023-03-20 14:22:35'),
(2, 1, 3, 5, 1000, '2023-03-20 14:22:35', '2023-03-20 14:22:35'),
(3, 1, 4, 3, 1500, '2023-03-20 14:22:35', '2023-03-20 14:22:35'),
(4, 2, 5, 10, 20000, '2023-03-20 14:22:35', '2023-03-20 14:22:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `username` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `role` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$t9Kifps4jEw4MS1pBxjMaesMAnWhrgGOzV83LsP77iF1wg09FH0bu', 'Admin', NULL, '2023-03-20 14:22:35', '2023-03-22 08:12:44');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `master_barang`
--
ALTER TABLE `master_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pemilihs`
--
ALTER TABLE `pemilihs`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `transaksi_pembelian`
--
ALTER TABLE `transaksi_pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_pembelian_barang`
--
ALTER TABLE `transaksi_pembelian_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_pembelian_barang_transaksi_pembelian_id_foreign` (`transaksi_pembelian_id`),
  ADD KEY `transaksi_pembelian_barang_master_barang_id_foreign` (`master_barang_id`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `master_barang`
--
ALTER TABLE `master_barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pemilihs`
--
ALTER TABLE `pemilihs`
  MODIFY `nik` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1204116706920008;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaksi_pembelian`
--
ALTER TABLE `transaksi_pembelian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi_pembelian_barang`
--
ALTER TABLE `transaksi_pembelian_barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `transaksi_pembelian_barang`
--
ALTER TABLE `transaksi_pembelian_barang`
  ADD CONSTRAINT `transaksi_pembelian_barang_master_barang_id_foreign` FOREIGN KEY (`master_barang_id`) REFERENCES `master_barang` (`id`),
  ADD CONSTRAINT `transaksi_pembelian_barang_transaksi_pembelian_id_foreign` FOREIGN KEY (`transaksi_pembelian_id`) REFERENCES `transaksi_pembelian` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
