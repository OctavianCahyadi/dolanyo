-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2020 at 01:13 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jogjatt`
--

-- --------------------------------------------------------

--
-- Table structure for table `bantuans`
--

CREATE TABLE `bantuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `respons` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bantuans`
--

INSERT INTO `bantuans` (`id`, `nama`, `email`, `respons`, `pertanyaan`, `jawaban`, `created_at`, `updated_at`) VALUES
(2, 'marserino', 'normaluser@gmail.com', 1, 'Apakah paket Arjuna Tersedia ?', '<ol>\r\n	<li>Ya, Paket Arjuna tersedia.</li>\r\n	<li>Silahkan order paket melalui website.</li>\r\n</ol>', '2020-03-25 05:27:20', '2020-03-25 06:12:01'),
(4, 'Bagas Baskara Pura', 'user5@gmail.com', 0, 'Apakah paket Hanoman tersedia ?', NULL, '2020-03-25 07:27:18', '2020-03-25 07:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `image` varchar(2555) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `nama`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Photo 1', '1584071243_image1.jpg', '2020-03-12 20:47:23', '2020-03-12 20:47:23'),
(5, 'marserino', '1584071253_image2.jpg', '2020-03-12 20:47:34', '2020-03-12 20:47:34'),
(6, 'Bagas Baskara Pura', '1584071264_image3.jpg', '2020-03-12 20:47:44', '2020-03-12 20:47:44'),
(7, 'Anggun Dwi Cahyadi', '1584071274_image4.jpg', '2020-03-12 20:47:54', '2020-03-12 20:47:54'),
(8, 'Andhika Wijaya', '1584071299_image5.jpg', '2020-03-12 20:48:19', '2020-03-12 20:48:19'),
(10, 'Andhika Wijaya', '1584071334_image7.jpg', '2020-03-12 20:48:54', '2020-03-12 20:48:54'),
(14, 'Gunung Api Purba', '1585028238_2.png', '2020-03-23 22:37:19', '2020-03-23 22:37:19'),
(15, 'Sungai Mudal', '1585028256_1.png', '2020-03-23 22:37:36', '2020-03-23 22:37:36'),
(16, 'Hutan Pinus Kalilo', '1585028306_3.png', '2020-03-23 22:38:27', '2020-03-23 22:38:27'),
(17, 'Bukit Klangon Kaliurang', '1585028372_4.png', '2020-03-23 22:39:33', '2020-03-23 22:39:33');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_rekomendasi`
--

CREATE TABLE `hasil_rekomendasi` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `pakets_id` bigint(20) NOT NULL,
  `paket` varchar(255) NOT NULL,
  `sim` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_rekomendasi`
--

INSERT INTO `hasil_rekomendasi` (`id`, `user_id`, `pakets_id`, `paket`, `sim`, `created_at`, `updated_at`) VALUES
(85, 1, 4, 'Paket Anggoda', 0.16139, '2020-03-06 06:05:13', '2020-03-06 06:05:13'),
(86, 1, 5, 'Paket Bharata', 0.414214, '2020-03-06 06:05:13', '2020-03-06 06:05:13'),
(87, 1, 6, 'Paket Hanoman', 0.179129, '2020-03-06 06:05:13', '2020-03-06 06:05:13'),
(91, 14, 4, 'Paket Anggoda', 0.128496, '2020-03-06 22:07:31', '2020-03-06 22:07:31'),
(92, 14, 5, 'Paket Bharata', 0.127297, '2020-03-06 22:07:31', '2020-03-06 22:07:31'),
(93, 14, 6, 'Paket Hanoman', 0.114338, '2020-03-06 22:07:31', '2020-03-06 22:07:31'),
(98, 15, 4, 'Paket Anggoda', 0.210897, '2020-03-06 22:49:38', '2020-03-06 22:49:38'),
(99, 15, 5, 'Paket Bharata', 0.274292, '2020-03-06 22:49:38', '2020-03-06 22:49:38'),
(100, 15, 6, 'Paket Hanoman', 0.224009, '2020-03-06 22:49:38', '2020-03-06 22:49:38'),
(105, 16, 4, 'Paket Anggoda', 0.142857, '2020-03-08 22:33:47', '2020-03-08 22:33:47'),
(106, 16, 5, 'Paket Bharata', 0.141188, '2020-03-08 22:33:47', '2020-03-08 22:33:47'),
(107, 16, 6, 'Paket Hanoman', 0.119782, '2020-03-08 22:33:47', '2020-03-08 22:33:47'),
(112, 17, 4, 'Paket Anggoda', 0.414214, '2020-03-08 23:13:05', '2020-03-08 23:13:05'),
(113, 17, 5, 'Paket Bharata', 0.179129, '2020-03-08 23:13:05', '2020-03-08 23:13:05'),
(114, 17, 6, 'Paket Hanoman', 0.190744, '2020-03-08 23:13:05', '2020-03-08 23:13:05'),
(232, 1, 14, 'Paket Wibisana', 0.5, '2020-03-23 10:10:57', '2020-03-23 10:10:57'),
(233, 14, 14, 'Paket Wibisana', 0.366025, '2020-03-23 10:10:57', '2020-03-23 10:10:57'),
(234, 15, 14, 'Paket Wibisana', 0.210897, '2020-03-23 10:10:57', '2020-03-23 10:10:57'),
(235, 16, 14, 'Paket Wibisana', 0.414214, '2020-03-23 10:10:57', '2020-03-23 10:10:57'),
(236, 17, 14, 'Paket Wibisana', 0.289898, '2020-03-23 10:10:57', '2020-03-23 10:10:57'),
(239, 1, 10, 'Paket Kencana', 0.210897, '2020-03-23 10:11:16', '2020-03-23 10:11:16'),
(240, 14, 10, 'Paket Kencana', 0.240253, '2020-03-23 10:11:16', '2020-03-23 10:11:16'),
(241, 15, 10, 'Paket Kencana', 0.231662, '2020-03-23 10:11:16', '2020-03-23 10:11:16'),
(242, 16, 10, 'Paket Kencana', 0.25, '2020-03-23 10:11:16', '2020-03-23 10:11:16'),
(243, 17, 10, 'Paket Kencana', 0.186605, '2020-03-23 10:11:16', '2020-03-23 10:11:16'),
(246, 1, 11, 'Paket 1 Day Team Building A', 0.205213, '2020-03-23 10:11:47', '2020-03-23 10:11:47'),
(247, 14, 11, 'Paket 1 Day Team Building A', 0.205213, '2020-03-23 10:11:47', '2020-03-23 10:11:47'),
(248, 15, 11, 'Paket 1 Day Team Building A', 0.182744, '2020-03-23 10:11:47', '2020-03-23 10:11:47'),
(249, 16, 11, 'Paket 1 Day Team Building A', 0.240253, '2020-03-23 10:11:47', '2020-03-23 10:11:47'),
(250, 17, 11, 'Paket 1 Day Team Building A', 0.190744, '2020-03-23 10:11:47', '2020-03-23 10:11:47'),
(260, 1, 4, 'Paket Anggoda', 0.163961, '2020-03-25 21:40:07', '2020-03-25 21:40:07'),
(261, 1, 5, 'Paket Bharata', 0.166667, '2020-03-25 21:40:07', '2020-03-25 21:40:07'),
(262, 1, 6, 'Paket Hanoman', 0.142857, '2020-03-25 21:40:07', '2020-03-25 21:40:07'),
(264, 1, 10, 'Paket Kencana', 0.195194, '2020-03-25 21:40:07', '2020-03-25 21:40:07'),
(265, 1, 11, 'Paket 1 Day Team Building A', 0.261204, '2020-03-25 21:40:07', '2020-03-25 21:40:07'),
(287, 1, 9, 'Paket Jatayu edit', 0.210897, '2020-03-29 23:22:24', '2020-03-29 23:22:24'),
(288, 14, 9, 'Paket Jatayu edit', 0.309017, '2020-03-29 23:22:24', '2020-03-29 23:22:24'),
(289, 15, 9, 'Paket Jatayu edit', 0.195194, '2020-03-29 23:22:24', '2020-03-29 23:22:24'),
(290, 16, 9, 'Paket Jatayu edit', 0.289898, '2020-03-29 23:22:24', '2020-03-29 23:22:24'),
(291, 17, 9, 'Paket Jatayu edit', 0.414214, '2020-03-29 23:22:24', '2020-03-29 23:22:24'),
(321, 24, 4, 'Paket Anggoda', 0.163961, '2020-03-30 00:18:19', '2020-03-30 00:18:19'),
(322, 24, 5, 'Paket Bharata', 0.166667, '2020-03-30 00:18:19', '2020-03-30 00:18:19'),
(323, 24, 6, 'Paket Hanoman', 0.142857, '2020-03-30 00:18:19', '2020-03-30 00:18:19'),
(324, 24, 9, 'Paket Jatayu edit', 0.210897, '2020-03-30 00:18:19', '2020-03-30 00:18:19'),
(325, 24, 10, 'Paket Kencana', 0.195194, '2020-03-30 00:18:19', '2020-03-30 00:18:19'),
(326, 24, 11, 'Paket 1 Day Team Building A', 0.261204, '2020-03-30 00:18:19', '2020-03-30 00:18:19'),
(327, 24, 14, 'Paket Wibisana', 0.210897, '2020-03-30 00:18:19', '2020-03-30 00:18:19'),
(328, 24, 20, 'coba tumbnail', 0.190744, '2020-03-30 00:18:19', '2020-03-30 00:18:19'),
(341, 24, 4, 'Paket Anggoda', 0.156613, '2020-03-30 00:37:16', '2020-03-30 00:37:16'),
(342, 24, 5, 'Paket Bharata', 0.240253, '2020-03-30 00:37:16', '2020-03-30 00:37:16'),
(343, 24, 6, 'Paket Hanoman', 0.166667, '2020-03-30 00:37:16', '2020-03-30 00:37:16'),
(344, 24, 9, 'Paket Jatayu edit', 0.205213, '2020-03-30 00:37:16', '2020-03-30 00:37:16'),
(345, 24, 10, 'Paket Kencana', 0.289898, '2020-03-30 00:37:16', '2020-03-30 00:37:16'),
(346, 24, 11, 'Paket 1 Day Team Building A', 0.5, '2020-03-30 00:37:16', '2020-03-30 00:37:16'),
(347, 24, 14, 'Paket Wibisana', 0.231662, '2020-03-30 00:37:16', '2020-03-30 00:37:16'),
(348, 24, 20, 'coba tumbnail', 0.25, '2020-03-30 00:37:16', '2020-03-30 00:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(25) UNSIGNED NOT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maxpeserta` int(25) NOT NULL,
  `minpeserta` int(25) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `kategori`, `maxpeserta`, `minpeserta`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Private Tour', 7, 2, '1584631931_private.png', '2020-03-19 08:32:12', '2020-03-19 08:44:12'),
(2, 'Group Tour', 50, 17, '1584633363_group.png', '2020-03-19 08:31:52', '2020-03-19 08:56:03'),
(3, 'Honeymoon', 2, 2, '1584631946_honeymoon.png', '2020-03-19 08:32:26', '2020-03-19 08:32:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_17_151056_create_posts_table', 1),
(5, '2020_02_23_032808_create_pakets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pakets`
--

CREATE TABLE `pakets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketentuan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_mulai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` int(191) NOT NULL,
  `pegunungan` int(11) DEFAULT NULL,
  `bangunan` int(11) DEFAULT NULL,
  `sungai` int(11) DEFAULT NULL,
  `pantai` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pakets`
--

INSERT INTO `pakets` (`id`, `title`, `deskripsi`, `overview`, `fasilitas`, `ketentuan`, `harga_mulai`, `kategori`, `pegunungan`, `bangunan`, `sungai`, `pantai`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Paket Anggoda', 'Deskripsi Tour Paket 1 Day Kulon Progo', '<p>Overview&nbsp;Paket 1 Day Kulon Progo</p>', '<p>Fasilitas&nbsp;Paket 1 Day Kulon Progo</p>', '<p>Ketentuan&nbsp;Paket 1 Day Kulon Progo</p>', '250000', 1, 1, 3, 4, 0, '1582446874_bg1.jpg', '2020-02-23 01:34:34', '2020-02-23 01:34:34'),
(5, 'Paket Bharata', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fermentum posuere urna nec tincidunt praesent semper. Non sodales neque sodales ut. Enim lobortis scelerisque fermentum dui faucibus in ornare quam. Egestas sed tempus urna et pharetra pharetra. Scelerisque mauris pellentesque pulvinar pellentesque. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc. Eget sit amet tellus cras adipiscing enim eu turpis. Odio pellentesque diam volutpat commodo sed egestas egestas fringilla. Tempus iaculis urna id volutpat lacus. Interdum velit laoreet id donec ultrices tincidunt arcu.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Hendrerit dolor magna eget est lorem ipsum dolor sit amet. Ullamcorper morbi tincidunt ornare massa eget egestas. Tellus in metus vulputate eu scelerisque felis imperdiet. Risus feugiat in ante metus dictum. Egestas diam in arcu cursus euismod quis. Diam ut venenatis tellus in metus vulputate eu. Velit euismod in pellentesque massa placerat duis ultricies. Etiam sit amet nisl purus in mollis nunc sed. Blandit massa enim nec dui nunc mattis enim ut tellus. Turpis egestas integer eget aliquet nibh praesent. Orci eu lobortis elementum nibh tellus molestie nunc non.</p>\r\n\r\n<p>Sit amet nisl suscipit adipiscing bibendum est ultricies. Malesuada fames ac turpis egestas. Nunc eget lorem dolor sed viverra ipsum nunc. Dignissim cras tincidunt lobortis feugiat vivamus at. Mattis rhoncus urna neque viverra justo nec ultrices dui. Aliquet eget sit amet tellus cras adipiscing. A iaculis at erat pellentesque adipiscing commodo elit. In pellentesque massa placerat duis. Dictum non consectetur a erat. Id ornare arcu odio ut sem nulla pharetra. Porttitor massa id neque aliquam vestibulum morbi blandit cursus. Pharetra sit amet aliquam id. Sit amet purus gravida quis blandit turpis. Pulvinar neque laoreet suspendisse interdum consectetur libero.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet aliquam id diam maecenas ultricies mi eget mauris pharetra. Ultricies mi quis hendrerit dolor. Lorem donec massa sapien faucibus et molestie ac feugiat sed. Lectus quam id leo in vitae turpis massa. Augue lacus viverra vitae congue eu consequat ac felis donec. Pulvinar mattis nunc sed blandit libero volutpat sed cras ornare. Consequat ac felis donec et odio pellentesque diam volutpat. Et ligula ullamcorper malesuada proin libero. Sodales ut etiam sit amet nisl purus. Amet est placerat in egestas erat. Eros donec ac odio tempor. Nec sagittis aliquam malesuada bibendum arcu vitae. Quis varius quam quisque id diam vel quam. Id leo in vitae turpis massa. Consectetur adipiscing elit ut aliquam purus sit amet luctus.</p>\r\n\r\n<p>Urna id volutpat lacus laoreet non curabitur gravida arcu ac. Justo donec enim diam vulputate ut pharetra. Nunc non blandit massa enim nec dui. Sem integer vitae justo eget magna fermentum iaculis eu non. Tincidunt tortor aliquam nulla facilisi. Ac felis donec et odio. Dictum at tempor commodo ullamcorper a lacus. Eget dolor morbi non arcu. Mattis molestie a iaculis at. Lorem donec massa sapien faucibus et molestie ac feugiat. Nisl nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Sit amet justo donec enim diam vulputate ut. Orci nulla pellentesque dignissim enim. Sagittis nisl rhoncus mattis rhoncus urna neque. Eget velit aliquet sagittis id consectetur purus. Quis commodo odio aenean sed adipiscing diam donec adipiscing tristique.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna etiam tempor orci eu. Donec ultrices tincidunt arcu non sodales neque sodales. Nunc faucibus a pellentesque sit amet porttitor eget dolor. Ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Volutpat commodo sed egestas egestas fringilla phasellus. Pharetra pharetra massa massa ultricies mi. Morbi blandit cursus risus at ultrices mi tempus imperdiet. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Dignissim convallis aenean et tortor. Fusce id velit ut tortor pretium. Ultrices dui sapien eget mi proin sed libero enim sed. Ipsum dolor sit amet consectetur adipiscing elit.</p>\r\n\r\n<p>Non tellus orci ac auctor augue mauris. Enim nulla aliquet porttitor lacus. Vestibulum sed arcu non odio euismod lacinia at quis. Nunc vel risus commodo viverra maecenas accumsan lacus vel. Sed felis eget velit aliquet. Mollis aliquam ut porttitor leo. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices. Enim nunc faucibus a pellentesque. Est lorem ipsum dolor sit amet consectetur adipiscing. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. In nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Enim ut tellus elementum sagittis vitae et leo duis. Mauris pellentesque pulvinar pellentesque habitant morbi tristique. Id nibh tortor id aliquet lectus. Gravida arcu ac tortor dignissim convallis aenean. Tincidunt eget nullam non nisi est sit amet facilisis. Erat imperdiet sed euismod nisi. Pellentesque id nibh tortor id aliquet lectus proin nibh. Nec ullamcorper sit amet risus nullam eget felis eget nunc. Quam vulputate dignissim suspendisse in est.</p>', '550000', 3, 2, 2, 0, 3, '1582448644_bg3.jpg', '2020-02-23 02:04:04', '2020-02-23 02:04:04'),
(6, 'Paket Hanoman', 'Paket wisata seru untuk kamu yang akan meluangkan waktu dan berlibur di Jogja dengan keluarga, orang terdekat, maupun rekan kerja.', '<ul>\r\n	<li>Penjemputan di meeting point (Bandara/ Stasiun/ Hotel)</li>\r\n	<li>Destinasi wisata pertama anda akan mengunjungi&nbsp;<strong>Merapi Lava Tour</strong>, salah satu destinasi wisata adventure di Jogja yang juga sangat popular, anda akan menyusuri sisa-sisa erupsi di Kawasan kaki Gunung Merapi dengan menggunakan mobil Jeep.</li>\r\n	<li>Setelah itu mengunjungi&nbsp;<strong>Candi Prambanan</strong>, adalah situs purbakala yang merupakan kompleks sejumlah sisa bangunan kompleks kerajaan yang berada kira-kira 3 km di sebelah selatan dari kompleks Candi Prambanan, salah satu spot terbaik untuk menikmati sunset atau matahari terbenam di Jogja</li>\r\n	<li>Kemudan mengunjungi&nbsp;<strong>Tebing Breksi</strong>, bekas tambang batu yang saat ini menjadi destinasi wisata favorit, letaknya berada di ketinggian sehingga selain menikmati gagahnya batuan besar yang sebagian sisinya diukir dengan ukiran wayang anda juga dapat menikmati pemandangan kota Jogja dari atas.</li>\r\n	<li>Kembali ke hotel atau drop off di Bandara/Stasiun Yogyakarta.</li>\r\n</ul>', '<h2>Include</h2>\r\n\r\n<ul>\r\n	<li>Bus pariwisata AC seat 2-2</li>\r\n	<li>Tour Guide Profesional</li>\r\n	<li>Parkir</li>\r\n	<li>Drop in dan drop off (Terminal/ Bandara/ Stasiun/ Hotel) di Yogyakarta</li>\r\n	<li>Tiket masuk destinasi sesuai program</li>\r\n	<li>Air mineral</li>\r\n	<li>Makan siang</li>\r\n	<li>Jeep Lava Tour rute medium + track air</li>\r\n	<li>Asuransi Perjalanan</li>\r\n	<li>Dokumentasi Foto &amp; Video</li>\r\n</ul>\r\n\r\n<h2>Exclude</h2>\r\n\r\n<ul>\r\n	<li>Tiket menuju Yogyakarta</li>\r\n	<li>Pengeluaran pribadi</li>\r\n	<li>Tour diluar program</li>\r\n	<li>Biaya tambahan untuk periode&nbsp;<strong>high season</strong>&nbsp;dan&nbsp;<strong>peak season</strong></li>\r\n</ul>', '<h2>Info</h2>\r\n\r\n<ul>\r\n	<li>Paket diatas merupakan private tour (tidak dicampur dengan rombongan lain)</li>\r\n	<li>Pemesanan maksimal adalah 30 hari sebelum keberangkatan</li>\r\n	<li>Harga dapat berubah sewaktu-waktu sebelum adanya pembayaran DP</li>\r\n	<li>Jadwal dapat berubah sebelum ada konfirmasi pemesanan paket tour</li>\r\n	<li>Harga dan fasilitas di atas berlaku untuk periode&nbsp;<strong>low season</strong></li>\r\n	<li>Paket tersebut hanya berlaku untuk wisatawan domestik dan mancanegara pemegang KITAS/KIMS</li>\r\n	<li>Tanggal tour sesuai dengan permintaan peserta / fleksibel</li>\r\n</ul>\r\n\r\n<h2>Ketentuan</h2>\r\n\r\n<ul>\r\n	<li>DP minimal untuk pemesanan paket adalah 30%</li>\r\n	<li>Pelunasan via transfer H-3 sebelum keberangkatan</li>\r\n	<li>Anak usia 4 - 10 tahun diskon 30% dari harga paket, anak usia 0 - 3 tahun&nbsp;<strong>GRATIS</strong></li>\r\n	<li>Apabila terdapat permintaan khusus harap menghubungi sebelumnya (surprise, perubahan destinasi, dll)</li>\r\n</ul>', '323000', 2, 2, 4, 0, 0, '1582782599_WhatsApp Image 2019-03-23 at 21.33.43 (2).jpeg', '2020-02-26 22:49:59', '2020-02-26 22:49:59'),
(9, 'Paket Jatayu edit', 'Paket Jatayu akan membawa Sahabat Alodia mengunjungi Umbul Ponggok, Tebing Breksi dan Candi Ijo', '<ul>\r\n	<li>Penjemputan di meeting point (Hotel/Bandara/Stasiun di Yogyakarta)</li>\r\n	<li>Destinasi wisata pertama anda akan mengunjungi&nbsp;<strong>Pantai Teras Kaca</strong>&nbsp;dengan beberapa spot foto berlatar belakang lautan luas. Sesuai namanya Teras Kaca memiliki spot foto utama berupa teras yang keseluruhannya terbuat dari kaca transparan sehingga akan memacu adrenalin setiap yang datang karena di bawahnya langsung lautan dan batu karang yang menjulang.</li>\r\n	<li>Kemudian mengunjungi&nbsp;<strong>Gua Pindul</strong>&nbsp;dengan aktivitas cave tubing atau menyusuri gua bawah tanah dengan menggunakan ban, tidak perlu khawatir karena akan ditemani pemandu profesional dari awal hingga akhir.</li>\r\n	<li>Lalu mengunjungi&nbsp;<strong>Hutan Pinus Pengger</strong>, menikmati lebatnya hutan pinus dengan berbagai spot foto unik dan menarik yang bisa dicoba, salah satu yang sangat popular adalah spot foto tangan raksasa.</li>\r\n	<li>Terakhir anda akan mengunjungi&nbsp;<strong>HeHa Sky View</strong>&nbsp;yang merupakan destinasi popular terbaru di Jogja yang terletak pada ketinggian sehingga anda dapat menyaksikan indahnya pemandangan lampu kota Jogja dari atas.</li>\r\n	<li>Kembali ke hotel atau drop off di Bandara/Stasiun Yogyakarta.</li>\r\n</ul>', '<h2>Include</h2>\r\n\r\n<ul>\r\n	<li>Mobil AC Standar Pariwisata</li>\r\n	<li>Driver as Tour Leader</li>\r\n	<li>BBM</li>\r\n	<li>Biaya Parkir</li>\r\n	<li>Drop In dan Drop Off (Terminal/ Bandara/ Stasiun/ Hotel) di Yogyakarta</li>\r\n	<li>Tiket masuk destinasi sesuai program</li>\r\n	<li>Air mineral</li>\r\n</ul>\r\n\r\n<h2>Exclude</h2>\r\n\r\n<ul>\r\n	<li>Makan</li>\r\n	<li>Tiket menuju Yogyakarta</li>\r\n	<li>Pengeluaran pribadi</li>\r\n	<li>Tour diluar jadwal</li>\r\n	<li>Local guide di destinasi wisata tertentu</li>\r\n	<li>Biaya tambahan untuk periode&nbsp;<strong>high season</strong>&nbsp;dan&nbsp;<strong>peak season</strong></li>\r\n	<li>Biaya foto dibeberapa destinasi yang memiliki spot foto berbayar</li>\r\n</ul>', '<h2>Info</h2>\r\n\r\n<ul>\r\n	<li>Paket diatas merupakan private tour (tidak dicampur dengan rombongan lain)</li>\r\n	<li>Pemesanan maksimal adalah 7 hari sebelum keberangkatan</li>\r\n	<li>Harga dapat berubah sewaktu-waktu</li>\r\n	<li>Jadwal dapat berubah sebelum ada konfirmasi pemesanan paket tour</li>\r\n	<li>Harga dan fasilitas di atas berlaku untuk periode&nbsp;<strong>low season</strong></li>\r\n	<li>Paket tersebut hanya berlaku untuk wisatawan domestik dan mancanegara pemegang KITAS/KIMS</li>\r\n	<li>Mobil yang tersedia adalah Avanza, Hiace atau Elf (menyesuaikan jumlah peserta)</li>\r\n	<li>Tanggal tour sesuai dengan permintaan peserta / fleksibel</li>\r\n</ul>\r\n\r\n<h2>Ketentuan</h2>\r\n\r\n<ul>\r\n	<li>DP minimal untuk pemesanan paket ini adalah 30%</li>\r\n	<li>Pelunasan melalui transfer bank maksimal H-2 dari tanggal tour</li>\r\n	<li>Anak usia 4 - 10 tahun diskon 30% dari harga paket, anak usia 0 - 3 tahun&nbsp;<strong>GRATIS</strong></li>\r\n	<li>Apabila terdapat permintaan khusus harap menghubungi sebelumnya (surprise, perubahan destinasi, dll)</li>\r\n</ul>', '167000', 1, 2, 4, 3, 1, '1585549343_3.png', '2020-02-29 05:45:27', '2020-03-29 23:22:24'),
(10, 'Paket Kencana', 'Paket wisata seru untuk kamu yang akan meluangkan waktu dan berlibur di Jogja dengan keluarga, orang terdekat, maupun rekan kerja.', '<ul>\r\n	<li>Penjemputan di titik kumpul (Stasiun/Bandara/Hotel)</li>\r\n	<li>Destinasi wisata pertama anda akan diajak seru-seruan bareng dalam acara&nbsp;<strong>Team Building</strong>&nbsp;yang diadakan di&nbsp;<strong>Dewabejo Kawasan Gua Pindul</strong>&nbsp;dengan berbagai macam games seru dan lokasi yang asik.</li>\r\n	<li>Kemudian mengunjungi&nbsp;<strong>Gua Pindul</strong>&nbsp;dengan aktivitas river tubing atau menyusuri sungai bawah tanah dengan menggunakan ban, tidak perlu khawatir karena akan ditemani pemandu dari awal hingga akhir.</li>\r\n	<li>Setelah itu mengunjungi&nbsp;<strong>Tebing Breksi</strong>, bekas tambang batu yang saat ini menjadi destinasi wisata favorit, letaknya berada di ketinggian sehingga selain menikmati gagahnya batuan besar yang sebagian sisinya diukir dengan ukiran wayang anda juga dapat menikmati pemandangan kota Jogja dari atas.</li>\r\n	<li>Kembali ke hotel atau drop off di Bandara/Stasiun Yogyakarta</li>\r\n</ul>', '<ul>\r\n	<li>Kendaraan AC standar pariwisata</li>\r\n	<li>Guide</li>\r\n	<li>Parkir</li>\r\n	<li>Drop in dan drop off (Terminal/ Bandara/ Stasiun/ Hotel) di Yogyakarta</li>\r\n	<li>Tiket masuk destinasi sesuai program</li>\r\n	<li>Air mineral</li>\r\n	<li>Makan siang</li>\r\n	<li>Dokumnentasi foto dan video</li>\r\n	<li>Asuransi perjalanan</li>\r\n</ul>\r\n\r\n<h2>Exclude</h2>\r\n\r\n<ul>\r\n	<li>Tiket menuju Yogyakarta</li>\r\n	<li>Pengeluaran pribadi</li>\r\n	<li>Tour diluar program</li>\r\n	<li>Biaya tambahan untuk periode&nbsp;<strong>high season</strong>&nbsp;dan&nbsp;<strong>peak season</strong></li>\r\n</ul>', '<h2>Info</h2>\r\n\r\n<ul>\r\n	<li>Paket diatas merupakan private tour (tidak dicampur dengan rombongan lain)</li>\r\n	<li>Pemesanan maksimal adalah 7 hari sebelum keberangkatan</li>\r\n	<li>Harga dapat berubah sewaktu-waktu sebelum adanya pembayaran DP</li>\r\n	<li>Jadwal dapat berubah sebelum ada konfirmasi pemesanan paket tour</li>\r\n	<li>Harga dan fasilitas di atas berlaku untuk periode&nbsp;<strong>low season</strong></li>\r\n	<li>Paket tersebut hanya berlaku untuk wisatawan domestik dan mancanegara pemegang KITAS/KIMS</li>\r\n	<li>Tanggal tour sesuai dengan permintaan peserta / fleksibel</li>\r\n</ul>\r\n\r\n<h2>Ketentuan</h2>\r\n\r\n<ul>\r\n	<li>DP minimal untuk pemesanan paket adalah 30%</li>\r\n	<li>Pelunasan via transfer H-3 atau Cash di hari pertama tour</li>\r\n	<li>Anak usia 4 - 10 tahun diskon 30% dari harga paket, anak usia 0 - 3 tahun&nbsp;<strong>GRATIS</strong></li>\r\n	<li>Apabila terdapat permintaan khusus harap menghubungi sebelumnya (surprise, perubahan destinasi, dll)</li>\r\n</ul>', '167000', 1, 2, 2, 1, 4, '1584983476_bg5.jpg', '2020-02-29 06:38:29', '2020-03-23 10:11:16'),
(11, 'Paket 1 Day Team Building A', 'Paket wisata seru untuk kamu yang akan meluangkan waktu dan berlibur di Jogja dengan keluarga, orang terdekat, maupun rekan kerja.', '<ul>\r\n	<li>Penjemputan di titik kumpul (Stasiun/Bandara/Hotel)</li>\r\n	<li>Destinasi wisata pertama anda akan diajak seru-seruan bareng dalam acara&nbsp;<strong>Team Building</strong>&nbsp;yang diadakan di&nbsp;<strong>Desa Wisata Ledok Sambi</strong>&nbsp;dengan berbagai macam games seru dan lokasi yang asik.</li>\r\n	<li>Kemudian mengunjungi&nbsp;<strong>Merapi Lava Tour</strong>, salah satu destinasi wisata adventure di Jogja yang juga sangat popular, anda akan menyusuri sisa-sisa erupsi di Kawasan kaki Gunung Merapi dengan menggunakan mobil Jeep.</li>\r\n	<li>Kembali ke hotel atau drop off di Bandara/Stasiun Yogyakarta</li>\r\n</ul>', '<h2>Include</h2>\r\n\r\n<ul>\r\n	<li>Bus pariwisata AC seat 2-2</li>\r\n	<li>Tour Guide Profesional</li>\r\n	<li>Parkir</li>\r\n	<li>Drop in dan drop off (Terminal/ Bandara/ Stasiun/ Hotel) di Yogyakarta</li>\r\n	<li>Tiket masuk destinasi sesuai program</li>\r\n	<li>Air mineral</li>\r\n	<li>Makan siang</li>\r\n	<li>Dokumentasi Foto &amp; Video</li>\r\n	<li>Asuransi perjalanan</li>\r\n</ul>\r\n\r\n<h2>Exclude</h2>\r\n\r\n<ul>\r\n	<li>Tiket menuju Yogyakarta</li>\r\n	<li>Pengeluaran pribadi</li>\r\n	<li>Tour diluar program</li>\r\n	<li>Biaya tambahan untuk periode&nbsp;<strong>high season</strong>&nbsp;dan&nbsp;<strong>peak season</strong></li>\r\n</ul>', '<h2>Info</h2>\r\n\r\n<ul>\r\n	<li>Paket diatas merupakan private tour (tidak dicampur dengan rombongan lain)</li>\r\n	<li>Pemesanan maksimal adalah 7 hari sebelum keberangkatan</li>\r\n	<li>Harga dapat berubah sewaktu-waktu sebelum adanya pembayaran DP</li>\r\n	<li>Jadwal dapat berubah sebelum ada konfirmasi pemesanan paket tour</li>\r\n	<li>Harga dan fasilitas di atas berlaku untuk periode&nbsp;<strong>low season</strong></li>\r\n	<li>Paket tersebut hanya berlaku untuk wisatawan domestik dan mancanegara pemegang KITAS/KIMS</li>\r\n	<li>Tanggal tour sesuai dengan permintaan peserta / fleksibel</li>\r\n</ul>\r\n\r\n<h2>Ketentuan</h2>\r\n\r\n<ul>\r\n	<li>DP minimal untuk pemesanan paket adalah 30%</li>\r\n	<li>Pelunasan via transfer H-3 sebelum keberangkatan</li>\r\n	<li>Anak usia 4 - 10 tahun diskon 30% dari harga paket, anak usia 0 - 3 tahun&nbsp;<strong>GRATIS</strong></li>\r\n	<li>Apabila terdapat permintaan khusus harap menghubungi sebelumnya (surprise, perubahan destinasi, dll)</li>\r\n</ul>', '153000', 2, 4, 2, 2, 4, '1584983507_bg7.jpg', '2020-03-06 06:51:22', '2020-03-23 10:11:47'),
(14, 'Paket Wibisana', 'Paket wisata Wibisana akan membawa Sahabat Alodia mengunjungi Merapi Lava Tour, The Lost World Castle dan Tebing Breksi', '<ul>\r\n	<li>Penjemputan di meeting point (Hotel/Bandara/Stasiun di Yogyakarta)</li>\r\n	<li>Destinasi wisata pertama anda akan mengunjungi&nbsp;<strong>Merapi Lava Tour</strong>, salah satu destinasi wisata adventure di Jogja yang juga sangat popular, anda akan menyusuri sisa-sisa erupsi di Kawasan kaki Gunung Merapi dengan menggunakan mobil Jeep.</li>\r\n	<li>Kemudian mengunjungi<strong>&nbsp;Lost World Castle</strong>, destinasi wisata yang letaknya masih berada di kaki Gunung Merapi berkonsep theme park yang juga terdapat banyak spot foto yang bisa anda coba.</li>\r\n	<li>Lalu mengunjungi&nbsp;<strong>Tebing Breksi</strong>, bekas tambang batu yang saat ini menjadi destinasi wisata favorit, letaknya berada di ketinggian sehingga selain menikmati gagahnya batuan besar yang sebagian sisinya diukir dengan ukiran wayang anda juga dapat menikmati pemandangan kota Jogja dari atas.</li>\r\n	<li>Kembali ke hotel atau drop off di Bandara/Stasiun Yogyakarta.</li>\r\n</ul>', '<h2>Include</h2>\r\n\r\n<ul>\r\n	<li>Kendaraan AC standar pariwisata</li>\r\n	<li>Driver as Tour Leader</li>\r\n	<li>BBM</li>\r\n	<li>Parkir</li>\r\n	<li>Drop in dan drop off (Terminal/ Bandara/ Stasiun/ Hotel) di Yogyakarta</li>\r\n	<li>Tiket masuk destinasi sesuai program</li>\r\n	<li>Air mineral</li>\r\n	<li>Jeep Lava Tour Rute Medium + Track Air</li>\r\n</ul>\r\n\r\n<h2>Exclude</h2>\r\n\r\n<ul>\r\n	<li>Tiket menuju Yogyakarta</li>\r\n	<li>Makan selama program</li>\r\n	<li>Pengeluaran pribadi</li>\r\n	<li>Tour diluar program</li>\r\n	<li>Spot foto dan properti foto berbayar</li>\r\n	<li>Biaya tambahan untuk periode&nbsp;<strong>high season</strong>&nbsp;dan&nbsp;<strong>peak season</strong></li>\r\n</ul>', '<h2>Info</h2>\r\n\r\n<ul>\r\n	<li>Paket diatas merupakan private tour (tidak dicampur dengan rombongan lain)</li>\r\n	<li>Pemesanan maksimal adalah 7 hari sebelum keberangkatan</li>\r\n	<li>Harga dapat berubah sewaktu-waktu sebelum adanya pembayaran DP</li>\r\n	<li>Jadwal dapat berubah sebelum ada konfirmasi pemesanan paket tour</li>\r\n	<li>Harga dan fasilitas di atas berlaku untuk periode&nbsp;<strong>low season</strong></li>\r\n	<li>Paket tersebut hanya berlaku untuk wisatawan domestik dan mancanegara pemegang KITAS/KIMS</li>\r\n	<li>Mobil yang tersedia adalah Avanza, Hiace atau elf (menyesuaikan jumlah peserta)</li>\r\n	<li>Tanggal tour sesuai dengan permintaan peserta / fleksibel</li>\r\n</ul>\r\n\r\n<h2>Ketentuan</h2>\r\n\r\n<ul>\r\n	<li>DP minimal untuk pemesanan paket ini adalah 30%</li>\r\n	<li>Pelunasan dengan transfer maksimal H-2 dari tanggal tour</li>\r\n	<li>Anak usia 4 - 10 tahun&nbsp;diskon 30% dari harga paket, anak usia 0 - 3 tahun&nbsp;<strong>GRATIS</strong></li>\r\n	<li>Apabila terdapat permintaan khusus harap menghubungi sebelumnya (surprise, perubahan destinasi, dll)</li>\r\n</ul>', '250000', 1, 3, 4, 2, 1, '1584983456_header.jpg', '2020-03-19 07:36:04', '2020-03-23 10:10:57'),
(20, 'coba tumbnail', 'Paket Jatayu akan membawa Sahabat Alodia mengunjungi Umbul Ponggok, Tebing Breksi dan Candi Ijo', '<p>aaa</p>', '<p>aaa</p>', '<p>aaa</p>', '167000', 2, 5, 1, 2, 2, '1585549425_1.png', '2020-03-29 23:23:45', '2020-03-29 23:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mr.octavianz@gmail.com', '$2y$10$GNWNjwXZMfSZw.F7KONkYuorzUwG/8WKx8jMkDN/bZCEyenj9HJUi', '2020-03-19 00:23:30');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` blob DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `image`, `created_at`, `updated_at`) VALUES
(11, 1, 'Wisata Alam Sungai Mudal', '<p><strong>Wisata Taman Sungai Mudal</strong>&nbsp;&ndash;&nbsp; Merupakan sebuah kabupaten yang ada di barat Kota Yogyakarta dan mempunyai kelebihan akan&nbsp;<a href=\"https://camerawisata.com/\">tempat wisata</a>nya. Ada banyak tempat wisata di Kulon progo yang anda dapat kunjungi seperti&nbsp; wisata taman sungai mudal yang terkenal. Wisata taman sungai mundal ini merupakan taman air bearwal dari inisiatif warga sekitar atau swadaya warga Mudal, Kulon progo.</p>\r\n\r\n<p>Wisata taman sungai&nbsp; mudal ini berupa kolam pemandian yang airnya sangat jernih dan berwarna biru toska yang sangat memanjakan mata. Airnya&nbsp; wisata taman sungai ini berasal dari mata air mudal yang berada di daerah mudal itu sendiri. Keindahan&nbsp; taman sungai&nbsp; mudal ini yang menjadi daya tarik wisatawan asing atau lokal, dan sangat cocok untuk update foto di instagram kalian. Jika anda berniat mengunjungi wisata taman sungai mundal ini kami rekomendasikan saat musim penghujan karena debet airnya yang bertambah dan airnya pun tidak keruh dan tentunya tidak berbahaya lho.</p>\r\n\r\n<p>Untuk lokasi wisata taman sungai mudal ini sangat strategis dan mudah di jangkau, yaitu berada di&nbsp;Banyunganti, Jatimulyo, Girimulyo, Jatimulyo, Girimulyo, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta (&nbsp;<a href=\"https://www.google.co.id/maps/place/Taman+Sungai+Mudal/@-7.7631711,110.1145158,1137m/data=!3m1!1e3!4m5!3m4!1s0x2e7aee4a6fe974b7:0xc8f1e183fc8e2531!8m2!3d-7.7631412!4d110.1165502\" target=\"_blank\">Google Maps&nbsp;</a>) .&nbsp; Sedangkan untuk Rute cukup mudah yaitu dari Perempatan Tugu Jogja &ndash; Menuju ke arah barat &ndash; Perempatan Demak Ijo di Ring road barat &ndash; Jalan Godean lurus &ndash; Ikuti penunjuk jalan sampai melewati Jembatan Sungai Progo &ndash; Ambil arah jalan menuju Goa Kiskenda &ndash; Pertigaam Goa Kiskenda lururs &ndash; Pertigaan hutan pinus belok kiri ke arah Kokap &ndash; Anda tinggal mengikuti papan penunjuk jalan ke Taman Sungai Mudal.</p>\r\n\r\n<p>Meski tempat wisata ini masih dikelola oleh warga sekitar namun wisata taman sungai&nbsp; mudal ini sudah ada tarif HTM sebesar Rp.4.000,- dan untuk harga parkir roda dua&nbsp; Rp.2.000,- , untuk kendaraan roda 4 Rp.5.000,-. ingat ini belum dengan harga fasilitas yang lainnya seperti berikut :</p>\r\n\r\n<ul>\r\n	<li>Penyewaan pelampung : Rp.5.000.00</li>\r\n	<li>Flying fox&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Rp.15.000.00</li>\r\n</ul>', 0x313538343938383831315f6d7564616c2e706e67, '2020-03-23 11:40:11', '2020-03-23 11:40:27'),
(12, 1, 'Wisata Alam Hutan Pinus Kalilo', '<p>Hai Guys Bagaimana kabar kalian kali ini? Kemana rencana libur kalian kali ini, apakah belum memiliki destinasi yang ingin dikunjungi? Jika iya coba saja datang ke daerah Kabupaten Purworejo, disana ada tempat wisata baru yang sedang hits dan pastinya keren abis, nama tempat wisata ini adalah wisata alam Hutan Pinus Kalilo Purworejo.</p>\r\n\r\n<p>Wisata ini bisa menjadi terkenal atau viral seperti sekarang ini mungkin tidak jauh dari para wisatawan yang menggunggah aktifitas atau foto berlatar belakang hutan pinus yang indah di media social seperti instagram, facebook dan lainnya, Sehingga para penggunjung tersebut merasa menjadi penasaran untuk bisa mengeksplor tempat ini.</p>\r\n\r\n<p>Di tempat wisata ini kalian dapat disuguhi oleh pemandangan alam yang begitu indah dan juga rindangnya hutan pinus yang menjulang tinggi yang tersusun rapi, selain itu karena letaknya yang berada di perbukitan tempat wisata ini akan terasa sejuk dan cocok sekali untuk bersantai.<br />\r\n<br />\r\nBanyak aktifitas yang bisa kalian lakukan di tempat ini seperti kalian bisa mengkesplor tempat ini dengan berfotoria atau hanya sekedar menikmati suasana alam yang menyegarkan, pokoknya semua hal yang dilakukan ditempat ini akan terasa menyenangkan.</p>\r\n\r\n<p>Sampai saat ini tiket masuk ke lokasi hutan pinus Kalilo tersebut masih dipungut biaya sukarela. sedangkan untuk biaya parkir kendraan roda dua sebesar Rp 2.000.</p>', 0x313538353032363936325f474f5052333233322e4a5047, '2020-03-23 22:16:04', '2020-03-23 22:16:04'),
(13, 1, 'Gunung Api Purba Nglanggeran', '<p>Selain kaya akan kebudayaan dan sejarah yang sangat dijunjung tinggi, Jogja memiliki kekayaan alam yang sangat beragam dan melimpah, beberapa dari kekayaan alam tersebut memiliki keunikan dan nilai historis tinggi yang menjadikan kekayaan alam tersebut kini menjadi salah satu&nbsp;<a href=\"https://www.alodiatour.com/tempat-wisata-di-jogja/\">destinasi wisata</a>&nbsp;favorit dan terbaik di Jogja bahkan di Indonesia, adalah Gunung Api Purba Nglanggeran, jika anda belum pernah mendengarnya anda pasti akan bertanya-tanya mengapa gunung tersebut disebut Gunung Api Purba Nglanggeran.</p>\r\n\r\n<p>Pada dasarnya Gunung Api Purba Nglanggeran ini adalah suatu gunung api yang pernah aktif seperti gunung-gunung api lainnya, namun hal tersebut terjadi sekitar 60-70 juta tahun yang lalu dan saat ini Gunung Api Purba Nglanggeran sudah tidak aktif lagi, itulah mengapa gunung ini disebut gunung api purba karena memang gunung ini merupakan peninggalan purba yang saat ini sudah tidak aktif karena lekang oleh waktu. Jika anda berkunjung ke Gunung Api Purba Nglanggeran, anda tidak akan menjumpai bentuk gunung seperti pada umumnya yang berbentuk kerucut dan memiliki kawah, namun Gunung Api Purba Nglanggeran saat ini memiliki bentuk seperti gugusan bebatuan raksasa tinggi menjulang yang telah ditumbuhi beberapa macam flora dan dihuni beberapa macam fauna didalamnya.</p>\r\n\r\n<p>Konon&nbsp;<a href=\"https://www.alodiatour.com/gunung-api-purba-nglanggeran/\">Gunung Api Purba Nglanggeran</a>&nbsp;ini dulunya adalah gunung yang berada di dasar lautan, karena adanya suatu fenomena alam tertentu dengan kurun waktu yang sangat lama, area Gunung Api Purba Nglanggeran ini kemudian terangkat ke permukaan dan menjadi daratan jutaan tahun yang lalu. Gunung Api Purba Nglanggeran memiliki puncak yang disebut Gunung Gedhe memiliki ketinggian kurang lebih 700 meter diatas permukaan laut dan keseluruhan area Gunung Api Purba Nglanggeran ini memiliki luas sekitar 48 hektar.</p>\r\n\r\n<p>Terdapat suatu kisah atau cerita yang saat ini masih dipercaya oleh warga setempat. Nglanggeran menurut warga setempat berasal dari kata &ldquo;nglanggar&rdquo; atau dalam Bahasa Indonesia berarti melanggar. Pada zaman dahulu warga sekitar Gunung Api Purba Nglanggeran mengundang seorang dalang kenamaan untuk acara syukuran berkat panen yang melimpah, namun saat itu terdapat beberapa warga yang ceroboh, saat sang dalang pergi sesaat untuk beristirahat terdapat beberapa warga dengan sengaja memainkan wayang yang dibawa sang dalang, dengan asyiknya mereka bermain wayang sehingga kemudian wayang tersebut ada yang rusak dan ditinggalkan begitu saja. Melihat wayangnya rusak sang dalang pun marah dan mencari siapa yang telah merusak wayangnya, kemudian sang dalang pun murka dan mengutuk beberapa warga setempat menjadi wayang yang lalu dibuang di kawasan Bukit Nglanggeran. Entah berkaitan dengan cerita ini atau tidak, sampai sekarang sebagian masyarakat setempat meyakini bahwa Gunung Api Purba Nglanggeran dijaga oleh makhluk bernama Kyai Ongko Wijoyo dan tokoh pewayangan Punokawan yaitu Semar, Gareng, Petruk dan Bagong.</p>\r\n\r\n<p>Selain itu masih terdapat misteri yang melekat di Gunung Api Purba Nglanggeran, yaitu terdeapat sebuah Kampung Pitu atau Kampung Tujuh yang didalamnya hanya boleh dihuni oleh 7 kepala keluarga. Kepercayaan ini sudah ada sejak dahulu dan dipercaya turun-temurun hingga sekarang, konon jika jumlah kepala keluarga di Kampung Pitu ini lebih dari 7 maka kepala keluarga ke 8 akan menderita penyakit yang berujung kematian, pun jika jumlah kepala keluarga kurang dari 7 maka akan ada wabah penyakit yang akan menyerang seluruh penduduk Kampung Pitu hingga dapat berujung pada kematian. Itulah mengapa Kampung Pitu hanya boleh dihuni oleh 7 kepala keluarga tidak lebih dan tidak kurang, jika terdapat anak dari salah satu kepala keluarga menikah maka ia akan keluar dari Kampung Pitu dan menetap di bawah atau di lereng Gunung Api Purba Nglanggeran.</p>\r\n\r\n<p>Untuk menuju puncak Gunung Api Purba Nglanggeran anda harus berjalan menyusuri jalan setapak dengan bebatuan yang cukup menantang dan tentu saja dengan tanjakan yang lumayan menguras tenaga. Di Gunung Api Purba Nglanggeran ini anda dapat melakukan berbagai aktivitas terutama aktivitas adventure seperti hiking, camping dan panjat tebing ataupun rock climbing.</p>\r\n\r\n<p>Harga tiket masuk Gunung Api Purba Nglanggeran dibedakan menjadi 2 yaitu Rp 15.000 pada siang hari dan Rp 20.000 pada malam hari. Sedangkan biaya parkir untuk sepeda motor Rp 3.000 dan untuk mobil Rp 5.000.</p>', 0x313538353032373131395f474f5052343037362e4a5047, '2020-03-23 22:18:41', '2020-03-23 22:18:41'),
(14, 1, 'Wisata Alam Bukit Klangon', '<p>Nama asli dari Bukit Klangon ini adalah Wisata Alam Bukit Glagaharjo, tetpi para pengguna media sosial biasa menyebutnya Bukit Klangon.&nbsp;<a href=\"https://www.alodiatour.com/bukit-klangon/\">Bukit Klangon</a>&nbsp;mendapatkan donasi pengembangan wisata minat khusus oleh Riotary International. Bukit Klangon ini termasuk wisata yang baru yang sedang terkenal baru-baru ini. Meski baru dikenal obyek wisata ini sebenarnya sudah dibuka untuk umum pada tahun 2011 yang lalu.</p>\r\n\r\n<p>Bukit Klangon ini dibuka setelah adanya erupsi Gunung Merapi. Bukit Klangon ini dikelola oleh warga sekitar, selain itu Bukit Klangon ini juga mendapat dukungan penglolaan dari pemerintah kabupaten setempat, dengan perluasan lahan parkir dan adanya penambahan spot-spot untuk menikmati panorama yang ada.</p>\r\n\r\n<p>Bukit Klangon merupakan salah satu obyek wisata yang ada di kota Yogyakarta tepatnya berada di daerah Sleman. Jika kamu ingin melihat dengan jelas Gunung Merapi itu kamu tidak perlu capek-capek mendaki untuk sampai puncaknya, karena Anda bisa melihatnya dengan berkunjung ke Bukit Klangon. Bukit Klangon memiliki gardu pandang dengan background Gunung Merapi. Karena lokasi Bukit Klangon berada dekat dengan Gunung Merapi yaitu sekitar 4 km. Gunung Merapi itu masih aktif yang nampak gagah dan besar, jadi memiliki keindahan yang sangat mempesona.</p>\r\n\r\n<p>Gardu Pandang yang ada di Bukit Klangon ini memiliki ketinggian 5 meter yang berdiri dengan kokoh. Selain gardu pandang itu di Bukit Klangon dulunya dikenal sebagai tempat downhill. Tempat ini dikembangkan sebagai lintasan sirkuit downhill untuk pembalap sepeda gunung. Di Bukit Klangon ini juga sering mengadakan acara balapan untuk sepeda tingkat regional maupun nasional. Saat ini Bukit Klangon merupakan satu-satunya lintasan sirkuit downhill terbaik di Kota Yogyakarta.</p>\r\n\r\n<p>Obyek wisata ini sangat cocok bagi anda yang ingin menghabiskan masa liburan dan menghilangkan penat. Anda dapat menikmati hangatnya pagi di lereng Gunung Merapi. Pada pagi hari yang terlihat dari Bukit Klangon ini membuat pagi harimu menjadi berbeda dan terasa istimewa. Anda juga dapat bersepeda sambil menikati suasana Bukit Klangon pada sore hari.</p>\r\n\r\n<p>Di Bukit Klangon menyediakan track sepanjang 20 km untuk anda yang memiliki hobi bersepeda dengan medan yang memicu adrenalin. Perjalanan track sepeda ini biasanya memakan waktus sekitar 1,5 jam. Jika Anda ingin mencoba downhill tersebut, Anda dapat berkunjung ke wisata Bukit Klangon yang berada di kabupaten Sleman.</p>\r\n\r\n<p>Harga tiket untuk masuk ke wisata Bukit Klangon belum dikenakan biaya, anda hanya perlu membayar seiklasnya ketika anda ingin berfoto ria di berbagai spot foto yang ada di Bukit Klangon.</p>\r\n\r\n<p>Sedangkan untuk harga parkir anda hanya akan dikenakan biaya Rp. 2000 untuk kendaraan motor dan Rp. 5000 untuk kendaraan mobil.</p>', 0x313538353032373139355f494d475f32303139303731335f3037323232342e6a7067, '2020-03-23 22:19:56', '2020-03-23 22:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(15) NOT NULL,
  `pakets_id` bigint(20) NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `handphone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `peserta` int(5) NOT NULL,
  `harga` int(10) NOT NULL,
  `paket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `konfirmasi` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `user_id`, `pakets_id`, `nama`, `handphone`, `peserta`, `harga`, `paket`, `tanggal`, `tempat`, `konfirmasi`, `created_at`, `updated_at`) VALUES
(7, 15, 9, 'Bagas Baskara Pura', '123123123123', 4, 1169000, 'Paket Jatayu', '2020-03-28', 'Hotel Seraton', 3, '2020-03-10 06:29:19', '2020-03-25 04:15:44'),
(9, 17, 14, 'Andhika Wijaya', '123123123', 4, 1400000, 'Paket Wibisana', '2020-03-12', 'Hotel Seraton', 1, '2020-03-10 06:49:45', '2020-03-25 02:16:32'),
(11, 1, 10, 'Anggun Dwi Cahyadi', '081215405375', 4, 1169000, 'Paket Kencana', '2020-03-27', 'Bandara Adisucipto', 3, '2020-03-24 00:06:22', '2020-03-25 02:10:05'),
(12, 1, 4, 'Andhika Wijaya', '081215405375', 4, 1750000, 'Paket Anggoda', '2020-03-30', 'Hotel Wijaya', 0, '2020-03-25 21:14:26', '2020-03-25 21:14:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pegunungan` int(11) DEFAULT NULL,
  `bangunan` int(11) DEFAULT NULL,
  `sungai` int(11) DEFAULT NULL,
  `pantai` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `usertype`, `email`, `email_verified_at`, `password`, `pegunungan`, `bangunan`, `sungai`, `pantai`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'oadcah', '081215405375', 'admin', 'mr.octavianz@gmail.com', NULL, '$2y$10$Ib9Mnfm7o/kUsA3XbfZn6.sb4rEPY1LE8p5plvX7qxfJmrIjOHLh6', 4, 4, 4, 4, 'NkcS1G8anMqT2hdvom10qonyWNnYtZkGAWsh7OXrGVOEz2w7HCYmIGGfYTLR', '2020-02-22 20:45:07', '2020-03-25 21:38:22'),
(14, 'user2', '123123123123', 'user', 'user2@gmail.com', NULL, '$2y$10$X9AZZp3Nhn5tOOuKWR68CeEUw4nWFDMtoUlRY9ExItC8esczJLQFe', 2, 3, 1, 1, NULL, '2020-03-06 22:07:16', '2020-03-06 22:07:30'),
(15, 'user3', '123123123123', 'user', 'user3@gmail.com', NULL, '$2y$10$4EvpNvyvdtB9Ydw7M8i9EukBHZ2XDj9MsyPemT6SOssx10bfeyRjG', 4, 1, 1, 1, '2IXuef7ke2ePd0aMUGKAkqNqDevTWOwqlSPE9WqJJpIXhSfr98KBTgj5lLa9', '2020-03-06 22:49:23', '2020-03-28 07:54:40'),
(16, 'user5edit', '6666666', 'user', 'user5@gmail.com', NULL, '$2y$10$jnz2MPdFcxOeUQckwerBcuGWA/OuS2te3YdS.xb47Ma9WwFPYc59y', 3, 4, 1, 2, NULL, '2020-03-08 22:33:13', '2020-04-01 01:39:37'),
(17, 'user6', '123123123', 'user', 'user6@gmail.com', NULL, '$2y$10$smYF9GbxdUKz6JP6Kapt9O3JV.pF6RdPracL09dneNveJe8tshe9G', 2, 3, 4, 1, NULL, '2020-03-08 23:12:31', '2020-03-08 23:13:05'),
(24, 'aaaaaaa', '123123123123', 'user', 'aaa@aaa.com', NULL, '$2y$10$Ru1jfQqq8gk8bzXUW8FQKeoxS4kUMEagaedxRaWYNQLBlOEzVdbX.', 4, 3, 2, 4, NULL, '2020-03-29 23:58:52', '2020-03-30 00:37:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bantuans`
--
ALTER TABLE `bantuans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_rekomendasi`
--
ALTER TABLE `hasil_rekomendasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakets`
--
ALTER TABLE `pakets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bantuans`
--
ALTER TABLE `bantuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hasil_rekomendasi`
--
ALTER TABLE `hasil_rekomendasi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=349;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pakets`
--
ALTER TABLE `pakets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
