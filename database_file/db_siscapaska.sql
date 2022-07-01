-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 30 Jun 2022 pada 08.00
-- Versi server: 5.7.38
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yanudatama_siscapaska`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kesehatan`
--

CREATE TABLE `kesehatan` (
  `id` int(11) NOT NULL,
  `kode_peserta` varchar(11) NOT NULL,
  `total_nilai` float NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
  `total_nilai` float NOT NULL DEFAULT '0',
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
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
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
  `alamat` text,
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
  `alamat_ortu` text,
  `foto` varchar(100) NOT NULL DEFAULT 'default.png',
  `status_sertifikat` enum('publish','draft') DEFAULT 'draft',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id`, `kode_peserta`, `nisn`, `nama`, `jk`, `ttl`, `agama`, `alamat`, `telp`, `hp`, `email`, `asal_sekolah`, `tinggi_badan`, `berat_badan`, `golongan_darah`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat_ortu`, `foto`, `status_sertifikat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'L001', '01231234', 'Muhammad Yahya', 'L', 'Cirebon, 20 Mei 2005', 'Islam', 'Desa Setupatok', '021231234123', '089656729025', 'moch.yahya95@gmail.com', 'SMK Informatika', 165, 55, 'B', 'Somadi', 'Sakinah', 'Wirausaha', 'IRT', 'Desa Setupatok', '1656508283_f3db1e3aa79ecbf090dc.jfif', 'publish', NULL, '2022-06-29 06:13:42', NULL),
(12, 'L002', '12344321', 'moch. yahya', 'L', 'Cirebon, 20 Mei 1999', 'Islam', 'Desa Setupatok', '', '089656729026', 'inikangyahya@gmail.com', 'SMK Informatika', 165, 60, 'B', 'Somadi', 'Sakinah', 'Polisi', 'Polwan', 'Desa Setupatok', '1656511784_e6dccb353190a2905eae.jfif', 'publish', NULL, '2022-06-29 09:04:09', NULL),
(13, 'P001', '1234512345', 'Siti Zarah', 'P', NULL, NULL, NULL, NULL, '089656729011', 'inikang@gmail.com', 'MA Salafiyah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1656512361_1f5b981ece60ba540baf.jfif', 'publish', NULL, NULL, NULL),
(14, 'L003', '1111', 'Dada', 'L', '30-02-2001', 'Islam', 'Komp', '0999', '081', 'ii@gmail.com', 'SMAN Negeri 5', 170, 70, 'O', 'U', 'I', 'U', 'I', 'Kokokko', '1656523338_880fa1df1d496d2574de.jpg', 'draft', NULL, '2022-06-29 12:21:12', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `psikotes`
--

CREATE TABLE `psikotes` (
  `id` int(11) NOT NULL,
  `kode_peserta` varchar(6) NOT NULL,
  `nilai` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
  `total_nilai` float NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `alamat_sekolah` text,
  `npsn` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id`, `nama_sekolah`, `alamat_sekolah`, `npsn`) VALUES
(1, 'SMAN Negeri 1', NULL, NULL),
(2, 'SMAN Negeri 2', NULL, NULL),
(3, 'SMAN Negeri 3', NULL, NULL),
(4, 'SMAN Negeri 4', NULL, NULL),
(5, 'SMAN Negeri 5', NULL, NULL),
(6, 'SMAN Negeri 6', NULL, NULL),
(7, 'SMAN Negeri 7', NULL, NULL),
(8, 'SMAN Negeri 8', NULL, NULL),
(9, 'SMAN Negeri 9', NULL, NULL),
(10, 'SMA Advent Cirebon', NULL, NULL),
(11, 'SMA Cokro Aminoto Cirebon', NULL, NULL),
(12, 'SMA Islam Al-Azhar', NULL, NULL),
(13, 'SMA Kartika XIX-5', NULL, NULL),
(14, 'SMAK Penabur', NULL, NULL),
(15, 'SMA Putra Nirmala', NULL, NULL),
(16, 'SMAN Santamaria', NULL, NULL),
(17, 'SMA Taman Siswa', NULL, NULL),
(18, 'SMA Widya Utama', NULL, NULL),
(19, 'SMA Windu Wacana', NULL, NULL),
(20, 'SMA Telkom Sekar Kemuning', NULL, NULL),
(21, 'SMA IT Nurrusshidiq', NULL, NULL),
(22, 'SMK Negeri 1', NULL, NULL),
(23, 'SMK Negeri 2', NULL, NULL),
(24, 'SMK Pakungwati', NULL, NULL),
(25, 'SMK Taman Karya M.T.', NULL, NULL),
(26, 'SMK Nasional', NULL, NULL),
(27, 'SMK PUI', NULL, NULL),
(28, 'SMK Gracika', NULL, NULL),
(29, 'SMK Veteran', NULL, NULL),
(30, 'SMK Wahidin', NULL, NULL),
(31, 'SMK Taman Karya M.E.', NULL, NULL),
(32, 'SMK Pariwisata', NULL, NULL),
(33, 'SMK Informatika Al-Irsyad', NULL, NULL),
(34, 'SMK Budiarti', NULL, NULL),
(35, 'SMK Al-Hidayah', NULL, NULL),
(36, 'SMK Cipto', NULL, NULL),
(37, 'SMK Bina Insan Mandiri', NULL, NULL),
(38, 'SMK Al-Istiqomah Cirebon', NULL, NULL),
(39, 'MA Darul Masholeh', NULL, NULL),
(40, 'MA Madinatunnajah', NULL, NULL),
(41, 'MA Salafiyah', NULL, NULL),
(42, 'MA An-Nur', NULL, NULL),
(43, 'MAN 1 Kota Cirbeon', NULL, NULL),
(44, 'MAN 2 Kota Cirebon', NULL, NULL),
(45, 'MA As-Sunnah', NULL, NULL),
(46, 'MA Luqman Al-Hakim', NULL, NULL);

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
  `show_full_sidebar` tinyint(1) NOT NULL DEFAULT '1',
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
(0, '1111', '$2y$10$f1tQQs8VqHn/QRjwwooB.OyDTu83fI/QOKirAKQL29y0hcrMScCUq', 'Peserta', NULL, NULL, NULL),
(1, 'Yahya', '$2y$10$Tw7Bx0fAAG0k9rw/BJVF2.9wheJkIJGA8vL24iVLyTwR0HWIKryGG', 'Administrator', NULL, NULL, NULL),
(2, 'Meyta', '$2y$10$TUpdWTAs6u8OfUEwD9OSc.8eRPO/bjKDKeXqdf01qIGhpwh5TP5vC', 'Petugas', NULL, NULL, NULL),
(3, 'Ikhlas', '$2y$10$jn7L1ti6SOTgx7jn.dogS.43UPsNgemtE69zEc1CTLqNxW8POdXNa', 'Petugas', NULL, NULL, NULL),
(4, '01231234', '$2y$10$Tw7Bx0fAAG0k9rw/BJVF2.9wheJkIJGA8vL24iVLyTwR0HWIKryGG', 'Peserta', NULL, NULL, NULL),
(12, '12344321', '$2y$10$Y786niTXVvqmw3s7uCBo5OaMmg1I2vXHeAPaQLXEv.7dpMowoyuOq', 'Peserta', NULL, NULL, NULL),
(13, '1234512345', '$2y$10$DsNxH.Hy9XpuFi3sEkuvA.We1KjeVc2qEYE2jylkXKWHMNvdmIg4a', 'Peserta', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wawancara`
--

CREATE TABLE `wawancara` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_peserta` varchar(6) NOT NULL,
  `sikap` float NOT NULL DEFAULT '0',
  `kesigapan` float NOT NULL,
  `cara_bicara` float NOT NULL DEFAULT '0',
  `pemakaian_bahasa` text NOT NULL,
  `kemampuan_menjawab` float NOT NULL DEFAULT '0',
  `kemampuan_komputer` float NOT NULL DEFAULT '0',
  `total_nilai` float NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
