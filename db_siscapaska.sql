-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2022 pada 14.19
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siscapaska`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `rekapitulasi` ()  SELECT
a.`kode_peserta`,
a.nama,
a.asal_sekolah,
a.tinggi_badan,
a.berat_badan,
b.total_nilai as kesehatan,
c.total_nilai as kesenian,
d.total_nilai as parade,
e.total_nilai as pbb,
f.total_nilai as samapta,
g.total_nilai as wawancara,
h.nilai as psikotes
FROM `peserta` a 
LEFT JOIN `kesehatan` b ON a.kode_peserta=b.kode_peserta
LEFT JOIN `kesenian` c ON a.kode_peserta=c.kode_peserta
LEFT JOIN `parade` d ON a.kode_peserta=d.kode_peserta
LEFT JOIN `pbb` e ON a.kode_peserta=e.kode_peserta
LEFT JOIN `samapta` f ON a.kode_peserta=f.kode_peserta
LEFT JOIN `wawancara` g ON a.kode_peserta=g.kode_peserta
LEFT JOIN `psikotes` h ON a.kode_peserta=h.kode_peserta$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kesehatan`
--

CREATE TABLE `kesehatan` (
  `id` int(11) NOT NULL,
  `kode_peserta` varchar(11) NOT NULL,
  `total_nilai` float NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kesenian`
--

CREATE TABLE `kesenian` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_peserta` varchar(6) NOT NULL,
  `menyanyi` text NOT NULL,
  `menari` text NOT NULL,
  `alat_musik` text NOT NULL,
  `keterampilan_lainnya` float NOT NULL,
  `total_nilai` float NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-05-26-182619', 'App\\Database\\Migrations\\Peserta', 'default', 'App', 1653897204, 1),
(2, '2022-05-27-182233', 'App\\Database\\Migrations\\Parade', 'default', 'App', 1653897204, 1),
(3, '2022-05-30-013146', 'App\\Database\\Migrations\\Kesenian', 'default', 'App', 1653897204, 1),
(4, '2022-05-30-013206', 'App\\Database\\Migrations\\Pbb', 'default', 'App', 1653897204, 1),
(5, '2022-05-30-013258', 'App\\Database\\Migrations\\Samapta', 'default', 'App', 1653897204, 1),
(6, '2022-05-30-013305', 'App\\Database\\Migrations\\Wawancara', 'default', 'App', 1653897204, 1),
(7, '2022-05-30-182759', 'App\\Database\\Migrations\\Users', 'default', 'App', 1653897204, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `parade`
--

CREATE TABLE `parade` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_peserta` varchar(6) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `mata` int(11) NOT NULL,
  `bahu` int(11) NOT NULL,
  `tangan` int(11) NOT NULL,
  `kaki` int(11) NOT NULL,
  `platefoot` int(11) NOT NULL,
  `total_nilai` double NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pbb`
--

CREATE TABLE `pbb` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_peserta` varchar(6) NOT NULL,
  `sikap_sempurna` float NOT NULL,
  `sikap_hormat` float NOT NULL,
  `sikap_istirahat` float NOT NULL,
  `langkah_tegap` float NOT NULL,
  `jalan_ditempat` float NOT NULL,
  `hadap_kanan_kiri` float NOT NULL,
  `hadap_serong_kanan_kiri` float NOT NULL,
  `balik_kanan` float NOT NULL,
  `langkah_lrfb` float NOT NULL,
  `kesigapan` float NOT NULL,
  `total_nilai` float NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_peserta` varchar(6) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `ttl` varchar(30) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `hp` varchar(13) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `asal_sekolah` varchar(50) DEFAULT NULL,
  `tinggi_badan` int(3) DEFAULT NULL,
  `berat_badan` int(3) DEFAULT NULL,
  `golongan_darah` varchar(2) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `pekerjaan_ayah` varchar(50) DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) DEFAULT NULL,
  `alamat_ortu` text DEFAULT NULL,
  `status_sertifikat` enum('publish','draft') DEFAULT 'draft',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `psikotes`
--

CREATE TABLE `psikotes` (
  `id` int(11) NOT NULL,
  `kode_peserta` varchar(6) NOT NULL,
  `nilai` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `samapta`
--

CREATE TABLE `samapta` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_peserta` varchar(6) NOT NULL,
  `lari` int(11) NOT NULL,
  `sit_up` int(11) NOT NULL,
  `push_up` int(11) NOT NULL,
  `shuttle_run` int(11) NOT NULL,
  `total_nilai` float NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id_sertifikat` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `status` enum('publish','draft') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `app_name` varchar(100) NOT NULL,
  `app_url` text NOT NULL,
  `logo` varchar(20) NOT NULL DEFAULT 'logo.jpg',
  `show_full_sidebar` tinyint(1) NOT NULL DEFAULT 1,
  `color_theme` enum('theme-red','theme-deep-purple','theme-teal','theme-black') NOT NULL DEFAULT 'theme-red'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `app_name`, `app_url`, `logo`, `show_full_sidebar`, `color_theme`) VALUES
(1, 'SISCAPASKA', 'http://localhost:8080', '\'logo.png\'', 1, 'theme-deep-purple');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `hak_access` enum('Peserta','Petugas','Administrator') NOT NULL DEFAULT 'Peserta',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `hak_access`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Yahya', '$2y$10$Tw7Bx0fAAG0k9rw/BJVF2.9wheJkIJGA8vL24iVLyTwR0HWIKryGG', 'Administrator', NULL, NULL, NULL),
(2, 'Meyta', '$2y$10$TUpdWTAs6u8OfUEwD9OSc.8eRPO/bjKDKeXqdf01qIGhpwh5TP5vC', 'Petugas', NULL, NULL, NULL),
(3, 'Ikhlas', '$2y$10$jn7L1ti6SOTgx7jn.dogS.43UPsNgemtE69zEc1CTLqNxW8POdXNa', 'Petugas', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wawancara`
--

CREATE TABLE `wawancara` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_peserta` varchar(6) NOT NULL,
  `sikap` float NOT NULL DEFAULT 0,
  `kesigapan` float NOT NULL,
  `cara_bicara` float NOT NULL DEFAULT 0,
  `pemakaian_bahasa` text NOT NULL DEFAULT '0',
  `kemampuan_menjawab` float NOT NULL DEFAULT 0,
  `kemampuan_komputer` float NOT NULL DEFAULT 0,
  `total_nilai` float NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `wawancara`
--

INSERT INTO `wawancara` (`id`, `kode_peserta`, `sikap`, `kesigapan`, `cara_bicara`, `pemakaian_bahasa`, `kemampuan_menjawab`, `kemampuan_komputer`, `total_nilai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'PSR001', 18, 13.5, 13.5, 'a:3:{i:0;s:1:\"9\";i:1;s:1:\"9\";i:2;s:1:\"9\";}', 9, 9, 90, NULL, NULL, NULL),
(5, 'PSR002', 18, 13.5, 13.5, 'a:3:{i:0;s:1:\"9\";i:1;s:1:\"9\";i:2;s:1:\"9\";}', 9, 9, 90, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kesenian`
--
ALTER TABLE `kesenian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `parade`
--
ALTER TABLE `parade`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pbb`
--
ALTER TABLE `pbb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`,`kode_peserta`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nisn` (`nisn`);

--
-- Indeks untuk tabel `psikotes`
--
ALTER TABLE `psikotes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `samapta`
--
ALTER TABLE `samapta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id_sertifikat`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wawancara`
--
ALTER TABLE `wawancara`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kesehatan`
--
ALTER TABLE `kesehatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kesenian`
--
ALTER TABLE `kesenian`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `parade`
--
ALTER TABLE `parade`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pbb`
--
ALTER TABLE `pbb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `psikotes`
--
ALTER TABLE `psikotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `samapta`
--
ALTER TABLE `samapta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id_sertifikat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `wawancara`
--
ALTER TABLE `wawancara`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
