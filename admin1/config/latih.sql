-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2024 at 06:54 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latih`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories1`
--

CREATE TABLE `categories1` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `meta_title` text NOT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `navbar_status` tinyint(1) DEFAULT 0,
  `status` tinyint(1) DEFAULT 0 COMMENT '0=visible, 1=hidden, 2=deleted',
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories1`
--

INSERT INTO `categories1` (`id`, `name`, `slug`, `description`, `meta_title`, `meta_description`, `meta_keyword`, `navbar_status`, `status`, `created_at`) VALUES
(1, 'Serum', 'Serum wajah', 'Serum wajah merupakan sebuah cairan yang bertekstur ringan dan pada umumnya tidak mengandung minyak, yang dapat diserap oleh kulit. ', 'variasi', 'Serum hadir dalam berbagai bentuk krim, gel, dan juga bahkan dibuat dengan konsistensi yang mirip seperti air.', 'krim, gel dan cair', 0, 0, '2023-11-15 12:47:29'),
(2, 'Toner', 'Toner-wajah', 'Toner merupakan salah satu tahap dari rangkaian penggunaan skincare. Penggunaan toner penting untuk membersihkan dan melindungi kesehatan kulit, karena bisa menghidrasi kulit dan membantu menyeimbangkan pH kulit Anda setelah proses membersihkan wajah.', 'scincare', 'toner juga dapat membersihkan sisa kotoran dan minyak yang mungkin tidak terangkat selama proses pembersihan wajah. Ini penting untuk mencegah timbulnya masalah kulit seperti jerawat dan komedo.', 'bentuk cair', 1, 0, '2023-11-15 12:54:02'),
(3, 'Cream', 'Cream-wajah', 'Cream wajah bertujuan untuk memberikan kelembapan kepada kulit.\r\nIni membantu menjaga kulit agar tetap terhidrasi, mencegah kekeringan, dan membuatnya terlihat lebih sehat.', 'scincare-c', ' membantu menjaga kulit agar tetap terhidrasi, mencegah kekeringan, dan membuatnya terlihat lebih sehat.', 'cream', 0, 0, '2023-11-15 12:55:30'),
(4, 'PHYTON-update', 'tutorial', 'p', 'phyton', 'p', 'p', 0, 2, '2023-11-16 03:05:05'),
(5, 'promosi', 'promo', '-', '-', '-', '-', 0, 0, '2023-12-30 14:29:48'),
(6, 'platform', '-', '-', '-', '-', '-', 0, 0, '2024-01-03 12:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemesan`
--

CREATE TABLE `detail_pemesan` (
  `id_detail_pemesan` int(11) NOT NULL,
  `id_pemesan` int(11) NOT NULL,
  `username` varchar(68) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesan` int(11) NOT NULL,
  `tanggal_pemesan` date NOT NULL,
  `total_harga` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id_produk` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keyword` int(50) NOT NULL,
  `status` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `ta` tinyint(1) NOT NULL,
  `up` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id_produk`, `category_id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_at`, `ta`, `up`) VALUES
(10, 2, 'Green tea seed skin 160ml', 'green tea', 'Toner ringan dan tidak lengket yang sangat menghidrasi dan meningkatkan penghalang kelembaban kulit agar terlihat lebih halus.', '1703909743.png', 'green tea', 'toner', 315000, 0, '2023-12-21 03:48:55', 1, 0),
(11, 2, 'Green tea balaching skin 200ml', 'green tea', 'Toner menyegarkan yang membantu mengisi kulit secara mendalam dengan hidrasi.', '1703909838.png', '   green tea', 'toner', 215000, 0, '2023-12-27 03:55:46', 3, 0),
(12, 2, ' Bija trouble skin 200ml', ' Bija', ' Wipe-off toner yang diformulasikan dengan minyak biji Bija, membantu mengangkat sel kulit mati dan menghilangkan kotoran pada kulit berjerawat. ', '1703910021.png', '   Bija', 'toner', 223000, 0, '2023-12-27 13:28:31', 0, 0),
(13, 2, 'Jeju cherry blossom skin 200ml', 'Jeju', 'Toner yang memberikan kelembaban melimpah pada kulit kering dan kusam, menjadikan kulit lembab dan segar.', '1703910121.png', 'Jeju', 'toner', 293000, 0, '2023-12-28 14:51:43', 2, 0),
(14, 1, 'Jeju orhid enriched essence 50ml', 'jeju', 'Essence anti-aging yang diformulasikan dari kandungan anggrek Jeju untuk mengencangkan, merawat garis halus, mencerahkan, melembapkan, dan menutrisi kulit secara bersamaan.', '1703910281.png', 'jeju', 'serum', 425000, 0, '2023-12-30 04:24:41', 1, 0),
(15, 1, 'Green tea seed serum 80ml', 'green tea', 'Serum yang diformulasikan dengan Green Tea Tri-biotics ™, untuk membantu merawat kulit yang dehidrasi dan kadar pH yang tidak seimbang akibat hilangnya hidrasi setiap hari dengan melembapkan, menyejukkan, dan menutrisi agar kulit tampak sehat.', '1703910346.png', 'green tea', 'serum', 395000, 0, '2023-12-30 04:25:46', 3, 0),
(16, 1, 'Black tea treatment essence 75ml', 'black tea', 'Esensi untuk perawatan antioksidan kulit yang merawat pergantian (turn over) kulit kusam dan kasar untuk membuat kulit menjadi lebih bercahaya dan jernih.', '1703910425.png', 'black tea', 'serum-essence', 315000, 0, '2023-12-30 04:27:05', 2, 0),
(17, 3, 'Green tea seed cream', 'green tea', 'Krim penguat penghalang kelembaban harian, diformulasikan dengan Green Tea Tri-biotics™, yang membantu merawat kulit dehidrasi karena kehilangan hidrasi dengan melembabkan, menenangkan dan menutrisi untuk kompleks yang tampak sehat.', '1703910521.png', 'green tea', 'cream', 360000, 0, '2023-12-30 04:28:41', 1, 0),
(18, 3, 'Jeju cherry blossom jelly cream 50ml', 'cream', ' Krim bertekstur gel yang memberikan kelembaban melimpah pada kulit kering dan kusam, menjadikan kulit lembap dan segar. ', '1703910592.png', ' jeju', 'cream', 334000, 0, '2023-12-30 04:29:52', 2, 0),
(19, 3, 'Jeju blossom tone-up cream 50ml', 'Jeju', 'Krim pencerah wajah bertekstur ringan yang dapat membantu mencerahkan secara instan dengan warna yang alami tanpa membuat kulit kering, dan menjadikannya lebih lembab dan segar.', '1703910655.png', 'jeju', 'cream', 334000, 0, '2023-12-30 04:30:55', 3, 0),
(20, 5, '   won', '  gambar', '   -   ', '1703947754.jpg', '   -', '-', 0, 0, '2023-12-30 14:30:37', 0, 3),
(21, 5, 'won', '-', '-', '1703947816.jpg', '-', '-', 0, 0, '2023-12-30 14:50:16', 0, 1),
(22, 5, 'won', '-', '-', '1703947857.jpg', '-', '-', 0, 0, '2023-12-30 14:50:57', 0, 1),
(23, 5, ' won', ' -', ' - ', '1703948427.jpg', ' -', '-', 0, 0, '2023-12-30 14:51:21', 0, 1),
(24, 5, 'min', '-', '-', '1703947909.jpg', '-', '-', 0, 0, '2023-12-30 14:51:49', 0, 1),
(25, 5, 'min', '-', '-', '1703947931.jpg', '-', '-', 0, 0, '2023-12-30 14:52:11', 0, 1),
(26, 5, 'min', '-', '-', '1703947963.jpg', '-', '-', 0, 0, '2023-12-30 14:52:43', 0, 4),
(27, 5, 'min', '-', '-', '1703947983.jpg', '-', '-', 0, 0, '2023-12-30 14:53:03', 0, 1),
(28, 6, '  shopee', '  -', '  -  ', '1704287246.png', '  -', '-', 0, 0, '2024-01-03 12:43:15', 0, 2),
(30, 6, ' tokopedia', ' -', ' - ', '1704287344.png', ' -', '-', 0, 0, '2024-01-03 12:45:02', 0, 2),
(31, 6, ' tiktok', ' -', ' - ', '1704287354.png', ' -', '-', 0, 0, '2024-01-03 12:46:51', 0, 2),
(32, 6, ' sociolla', ' -', ' - ', '1704287378.png', ' -', '-', 0, 0, '2024-01-03 12:47:29', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(191) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `role_as`, `status`, `created_at`) VALUES
(2, 'Nadia', 'Dur', 'nadia@gmail.com', '123', 1, 0, '2023-11-11 13:14:57'),
(3, 'nadd', 'd', 'nad2@gmail.com', '122', 1, 0, '2023-11-13 13:08:08'),
(6, 'safira', 'tc', 'saf@gmail.com', '1231', 1, 1, '2023-11-15 04:10:44'),
(7, 'caca', 'ca', 'ca@gmail.com', '12', 0, 0, '2023-11-16 03:01:44'),
(9, 'naad3', '.', 'da@gmail.com', '1', 0, 0, '2024-01-11 02:37:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories1`
--
ALTER TABLE `categories1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_pemesan`
--
ALTER TABLE `detail_pemesan`
  ADD PRIMARY KEY (`id_detail_pemesan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesan`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories1`
--
ALTER TABLE `categories1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `detail_pemesan`
--
ALTER TABLE `detail_pemesan`
  MODIFY `id_detail_pemesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
