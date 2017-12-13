-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 08:25 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adict`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`, `name`, `created_at`, `updated_at`) VALUES
(1, 'bagus', 'bagus', 'bagus', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(100) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `slug` text NOT NULL,
  `desc` text NOT NULL,
  `date` date NOT NULL,
  `pict` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `slug`, `desc`, `date`, `pict`, `created_at`, `updated_at`) VALUES
(7, 'judul pake slug', 'judul-pake-slug', 'apa aja yang penting bisa sampe 25 karakter tulisan ini iya beneran seriusan', '1997-01-11', '882658389.jpg', '2017-12-10 23:24:04', '2017-12-10 23:24:04'),
(8, 'berita ke 2 hari ini', 'berita-ke-2-hari-ini', 'apa pun beritanya yang penting viral di media social dan galaxy bima sakti', '1997-01-11', '8653323.jpg', '2017-12-11 20:53:06', '2017-12-11 20:53:06');

-- --------------------------------------------------------

--
-- Table structure for table `mfeeds`
--

CREATE TABLE `mfeeds` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mfeeds`
--

INSERT INTO `mfeeds` (`id`, `name`, `email`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Miss Birdie Corwin', 'gleichner.oswald@larson.com', 'Prohaska, Gutkowski and Abernathy', NULL, NULL),
(2, 'a', 'bagus@baguss.com', 'aaa', '2017-12-04 21:19:03', '2017-12-04 21:19:03'),
(3, 'gjhgh', 'bagus@bagus.com', 'jgfjhff', '2017-12-05 21:17:53', '2017-12-05 21:17:53'),
(4, 'aaaaaaa', 'bagus@bagussasas.com', 'aaaaaaaaaa', '2017-12-05 21:18:52', '2017-12-05 21:18:52'),
(5, 'siapa', 'yang@gmai.com', 'nanya', '2017-12-11 20:53:57', '2017-12-11 20:53:57'),
(7, 'test', 'test@gmail.com', 'test', '2017-12-11 21:01:27', '2017-12-11 21:01:27'),
(9, 'sdadada', 'dsa@gmail.com', 'assasasaas', '2017-12-11 21:04:49', '2017-12-11 21:04:49'),
(10, 'a', 'a@gmail.com', 'a', '2017-12-12 10:52:18', '2017-12-12 10:52:18'),
(11, 'aa', 'aa@gmail.com', 'aa', '2017-12-12 10:52:33', '2017-12-12 10:52:33'),
(12, 'aaa', 'aaa@aaa.com', 'aaaa', '2017-12-12 10:52:47', '2017-12-12 10:52:47'),
(13, 'aaaaa', 'aaaa@aaaa.com', 'aaaa', '2017-12-12 10:53:03', '2017-12-12 10:53:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_11_22_091448_create_m_profiles_table', 1),
(2, '2017_11_23_053858_create_mfeeds_table', 2),
(3, '2017_11_23_072300_create_m_abouts_table', 3),
(4, '2017_11_24_040523_create_m_portfolios_table', 4),
(5, '2017_11_26_124258_create_m_admins_table', 5),
(6, '2017_12_05_060038_create_m_photos_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `m_abouts`
--

CREATE TABLE `m_abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_abouts`
--

INSERT INTO `m_abouts` (`id`, `about`, `misi`, `visi`, `created_at`, `updated_at`) VALUES
(1, 'Kami dari Adict Business Center bergerak dibidang Bisnis Consultant, Event Organizer, Web Design, Product Design, Digital Promotion, Software dan Mobile Apps.', 'Menjadi sebuah badan usaha yang mumpuni yang mampu mengayomi setiap bagian dari perusahaan serta berperan mencerdaskan kehidupan bangsa dan memberikan kehidupan yang layak demi kesejahteraan jasmani maupun rohani bagi khalayak.', 'Membantu para pelaku usaha untuk membesarkan bisnisnya serta menjembatani para konsumen untuk mendapatkan produk yang diinginkan sehingga menciptakan dampak positif disetiap korelasi bisnis dalam memajukan usahanya', '2017-11-26 19:41:58', '2017-11-26 19:41:58');

-- --------------------------------------------------------

--
-- Table structure for table `m_portfolios`
--

CREATE TABLE `m_portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `webdev` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `launched` date NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pict` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_portfolios`
--

INSERT INTO `m_portfolios` (`id`, `judul`, `slug`, `desc`, `webdev`, `launched`, `category`, `website`, `pict`, `created_at`, `updated_at`) VALUES
(7, 'RagamIndo', 'ragamindo', 'Tempat belanja untuk kerajinan tanggan', 'Adict', '2001-01-01', 'Tempat Belanja', 'ragamindo.co.id', '892281459.jpg', '2017-12-12 20:29:51', '2017-12-12 20:29:51'),
(8, 'Oke Oke', 'oke-oke', 'OkeOkeOkeOkeOkeOkeOkeOkeOkeOke', 'PT Adict', '2001-01-01', 'a', 'Oke.com', '314470268.jpg', '2017-12-12 21:15:27', '2017-12-12 21:15:27');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `pict` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `pict`, `created_at`, `updated_at`) VALUES
(3, '90896352.jpg', '2017-12-04 23:53:00', '2017-12-04 23:53:00'),
(5, '540396545.png', '2017-12-13 00:10:48', '2017-12-13 00:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `proflecompany`
--

CREATE TABLE `proflecompany` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nophone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proflecompany`
--

INSERT INTO `proflecompany` (`id`, `address`, `nophone`, `email`, `created_at`, `updated_at`) VALUES
(2, 'Ruko Mutiara Karawaci, Blok A12, Jl. Mutiara Raya, Bencongan, Klp. Dua, Tangerang, Banten 15810', '02155663645', 'info@adict.co.id', '2017-11-22 09:34:56', '2017-12-12 00:35:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mfeeds`
--
ALTER TABLE `mfeeds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mfeeds_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_abouts`
--
ALTER TABLE `m_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_portfolios`
--
ALTER TABLE `m_portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proflecompany`
--
ALTER TABLE `proflecompany`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proflecompany_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mfeeds`
--
ALTER TABLE `mfeeds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `m_abouts`
--
ALTER TABLE `m_abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `m_portfolios`
--
ALTER TABLE `m_portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `proflecompany`
--
ALTER TABLE `proflecompany`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
