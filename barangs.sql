-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2021 pada 01.21
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `nama_barang`, `gambar`, `harga`, `stok`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Pisang oreo Original', 'menu 1.png', '7000', '20', 'Pisang plus oreo berbalut panir dan selimuti coklat', '2019-11-13 17:00:00', '2021-01-05 03:22:38'),
(2, 'Pisang oreo plus toping', 'menu 2.png', '7000', '19', 'Pisang plus oreo dengan tambahan toping (+1k)', '2019-11-13 17:00:00', '2021-01-06 16:56:56'),
(3, 'Pisang Geprek MIX 3', 'menu 3.png', '7000', '20', 'Pisang geprek dengan 3 toping nikmat (coklat, oreo, dan potongan pisang)', '2019-11-13 17:00:00', '2021-01-05 03:41:08'),
(4, 'Pisang Geprek MIX 3', 'menu 4.png', '7000', '20', 'Pisang geprek dengan 3 toping nikmat (keju, oreo, dan potongan pisang)', '2019-11-13 17:00:00', '2021-01-05 03:41:08'),
(5, 'Pisang Geprek ', 'menu 5.png', '5000', '20', 'Pisang geprek dengan 3 original (+1k setiap penambahan topping)', '2019-11-13 17:00:00', '2021-01-05 03:41:08'),
(6, 'Sate Pisang', 'menu 6.png', '5000', '20', 'Sate yang berbahan pisang berlumurkan fla coklat yang nikmat', '2019-11-13 17:00:00', '2021-01-05 03:41:08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
