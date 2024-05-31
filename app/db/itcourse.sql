-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2023 pada 21.39
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uhuy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `nama_admin` varchar(16) NOT NULL,
  `username_admin` varchar(64) NOT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`admin_id`, `nama_admin`, `username_admin`, `password_admin`) VALUES
(1, 'Admin ITCourse', 'admin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_title` varchar(16) NOT NULL,
  `course_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `course`
--

INSERT INTO `course` (`course_id`, `course_title`, `course_desc`) VALUES
(1, 'Figma Project', 'Platform desain kolaboratif berbasis web yang memungkinkan tim untuk bekerja bersama dalam membuat prototipe, desain antarmuka pengguna, dan proyek desain lainnya.'),
(2, 'Adobe Photoshop', 'Perangkat lunak desain grafis yang populer, digunakan untuk mengedit gambar, membuat grafik, manipulasi foto, dan menghasilkan karya seni digital yang berkualitas tinggi.'),
(3, 'Product Design', 'Proses merancang dan mengembangkan produk secara menyeluruh, mempertimbangkan fungsi, estetika, serta pengalaman pengguna untuk menciptakan solusi yang inovatif dan fungsional.'),
(4, 'Graphic Design', 'Pembuatan elemen visual dengan menggunakan teks, gambar, dan elemen grafis lainnya untuk menyampaikan pesan atau konsep yang memiliki keindahan visual dan komunikasi.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_menonton`
--

CREATE TABLE `detail_menonton` (
  `id_detailmenonton` int(11) NOT NULL,
  `status_menonton` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detailtransaksi` int(11) NOT NULL,
  `status_transaksi` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_video`
--

CREATE TABLE `detail_video` (
  `id_detailvideo` int(11) NOT NULL,
  `status_course` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_video`
--

INSERT INTO `detail_video` (`id_detailvideo`, `status_course`, `user_id`, `course_id`) VALUES
(1, 0, 6, 2),
(22, 0, 8, 2),
(23, 0, 8, 2),
(24, 0, 8, 2),
(25, 0, 8, 4),
(26, 0, 8, 4),
(27, 0, 8, 3),
(28, 0, 8, 2),
(30, 0, 8, 1),
(31, 0, 6, 3),
(32, 0, 6, 4),
(33, 0, 10, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `free_video`
--

CREATE TABLE `free_video` (
  `id_videofree` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `duration` varchar(16) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `free_video`
--

INSERT INTO `free_video` (`id_videofree`, `title`, `link`, `duration`, `course_id`) VALUES
(1, 'Food App Design | UX/UI ( Wireframe, Prototype, Export)', 'https://www.youtube.com/watch?v=195RY7jCuZg', '00:28:15', 1),
(2, 'Web / Desktop App UI Design in Figma - Full Course', 'https://www.youtube.com/watch?v=5IanQIwhA4E', '01:16:52', 1),
(3, 'Photoshop for Complete Beginners | Lesson 1', 'https://www.youtube.com/watch?v=xTzvQkOll2U', '00:45:33', 2),
(4, 'The Making of Photo-Manipulation: Explore | Photoshop Compositing Tutorial', 'https://www.youtube.com/watch?v=z0ckMwQxc1s', '00:18:25', 2),
(5, 'What EXACTLY is Product Design?', 'https://www.youtube.com/watch?v=LckQ4VVjHDs', '00:05:22', 3),
(6, 'Intro to Product Design (With a Focus on Sketching)', 'https://www.youtube.com/watch?v=r-UqGtsjKiU', '01:21:24', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subscription`
--

CREATE TABLE `subscription` (
  `subscription_id` int(11) NOT NULL,
  `tanggal_mulai` datetime NOT NULL,
  `tanggal_berakhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `jml_transaksi` decimal(10,0) NOT NULL,
  `metode_pmbyrn` varchar(16) NOT NULL,
  `status_transaksi` varchar(16) NOT NULL,
  `subscription_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `tgl_transaksi`, `jml_transaksi`, `metode_pmbyrn`, `status_transaksi`, `subscription_id`) VALUES
(10, '2023-12-06 10:06:01', 2, 'Transfer Bank', '', NULL),
(11, '2023-12-06 10:06:36', 2, 'Transfer Bank', '', NULL),
(12, '2023-12-06 10:06:51', 2, 'Transfer Bank', '', NULL),
(13, '2023-12-06 10:08:09', 2, 'Transfer Bank', '', NULL),
(14, '2023-12-06 10:08:10', 2, 'Transfer Bank', '', NULL),
(15, '2023-12-06 10:08:17', 2, 'Transfer Bank', '', NULL),
(16, '2023-12-06 10:09:17', 2, 'Transfer Bank', '', NULL),
(17, '2023-12-06 10:09:53', 2, 'Transfer Bank', '', NULL),
(18, '2023-12-06 12:16:26', 2, 'Transfer Bank', '', NULL),
(19, '2023-12-06 12:19:07', 2, 'Transfer Bank', '', NULL),
(20, '2023-12-06 12:19:10', 2, 'Transfer Bank', '', NULL),
(21, '2023-12-06 12:19:15', 2, 'Transfer Bank', '', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `nama_user` varchar(16) NOT NULL,
  `username` varchar(16) NOT NULL,
  `email_user` varchar(32) NOT NULL,
  `sandi_user` varchar(255) NOT NULL,
  `user_desc` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_detailtransaksi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `nama_user`, `username`, `email_user`, `sandi_user`, `user_desc`, `gambar`, `id_detailtransaksi`) VALUES
(6, 'Dev Akses Mikail', 'dev', 'devaksesmikail12@gmail.com', '$2y$10$wMgO./Kr9HO8qjk0EYaCyuS7EbqPTHiKyYGpzUcSb.gdUwflo7ph2', 'Saya adalah Mahasiswa Fakultas Ilmu Komputer Universitas Jember. ', '_DSC3580.JPG', NULL),
(7, 'Dev Akses Mikail', 'dev1', 'devaksesmikail12@gmail.com', '$2y$10$zEGSOqpwjGJv5XBjuyVLfuMEyAR0XP/zHcyLRI6D8PT1I8P2xIVVy', '', '', NULL),
(8, 'dev', 'dep1', 'devaksesmikail12@gmail.com', '$2y$10$skGoDH27IB1tv8yIx0Gz1uZUEg7DLi87Pg79finvZ56dGrdcRSfRG', 'Saya adalah seorang Programmer.', '', NULL),
(9, 'Dev Akses Mikail', 'd', 'devaksesmikail12@gmail.com', '$2y$10$NYFcv.SkT3l.pEokEA7zyO5pGYYzxUSSf899UgMSEs2A5eBjcwdoy', '', '', NULL),
(10, 'Dev Akses Mikail', 'dev123', 'devaksesmikail12@gmail.com', '$2y$10$7XFhoRECi.np5Y8IO/PDBe2ceuNlsMt3ORPM0qVb6buidy0SIFKFS', '', '_DSC3545.png', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(255) NOT NULL,
  `video_desc` varchar(255) NOT NULL,
  `link_video` text NOT NULL,
  `durasi_video` text NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`video_id`, `video_title`, `video_desc`, `link_video`, `durasi_video`, `course_id`) VALUES
(1, 'UI Design: Movie Tickets Booking App - Full course', '', 'https://www.youtube.com/watch?v=Jo9yksmQRrk&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=1', '00:46:34', 1),
(2, 'Animating Buttons (UI design & Prototype) - Adobe XD', '', 'https://www.youtube.com/watch?v=muUvsMblcRM&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=2', '00:07:42', 1),
(3, 'Neon UI Design from Scratch in Figma', '', 'https://www.youtube.com/watch?v=lceG4iKNfEg&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=3', '00:49:25', 1),
(4, 'Design a Crypto App in Figma', '', 'https://www.youtube.com/watch?v=3cVm6gmORrU&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=4', '00:55:01', 1),
(5, 'Figma Interactive Component - Like Button Animation', '', 'https://www.youtube.com/watch?v=blXodsD1fT0&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=5', '00:08:48', 1),
(6, 'WhatsApp UI/UX Redesign Tutorial with Figma', '', 'https://www.youtube.com/watch?v=sjrB7W721Cc&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=6', '00:58:54', 1),
(7, 'UI/UX Design From Beginner To Pro - UI/UX Design Masterclass Part 2', '', 'https://www.youtube.com/watch?v=IIAPYSsZQ4U&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=7', '02:16:20', 1),
(8, 'How to Design a Website in Figma Auto Layout', '', 'https://www.youtube.com/watch?v=MOjluUqDD6k&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=8', '00:49:53', 1),
(9, 'Figmas Updated Auto-Layout - Tutorial with Responsive Components', '', 'https://www.youtube.com/watch?v=3-Vv3HLX2OU&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=9', '00:13:55', 1),
(10, 'UI Design a Wallet App in Figma - Full course', '', 'https://www.youtube.com/watch?v=K0f2Lb5yGsk&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=10', '00:52:42', 1),
(11, 'Food App Design | UX/UI ( Wireframe, Prototype, Export)', '', 'https://www.youtube.com/watch?v=195RY7jCuZg&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=11', '00:28:16', 1),
(12, 'UI Design a Travel app for Android in Figma', '', 'https://www.youtube.com/watch?v=N5xUWjUrdEE&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=12', '00:44:35', 1),
(13, '7 FREE Illustration Sets for UI and Web Designers - Free illustrations for UI Design', '', 'https://www.youtube.com/watch?v=wFGs32c05Gg&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=14', '00:09:56', 1),
(14, 'Figma Tutorial: How to design a mobile banking app [part 1]', '', 'https://www.youtube.com/watch?v=40DPev7g5Ps&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=15', '00:25:26', 1),
(15, 'Design a simple UI from scratch for a Food App in Figma - For beginners', '', 'https://www.youtube.com/watch?v=1h73MOcH3xA&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=16', '00:10:43', 1),
(16, 'ADVANCED MOBILE APP UI DESIGN AND PROTOTYPING [FIGMA]', '', 'https://youtu.be/zi_zhrg3AV4https://www.youtube.com/watch?v=zi_zhrg3AV4&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=17', '00:55:32', 1),
(17, 'Prototype a Movie Ticket Booking app in Figma - Full course', '', 'https://www.youtube.com/watch?v=KfgS6zCTMrA&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=18', '00:17:50', 1),
(18, 'UI Design a Dark Neumorphism Tesla app in Figma from scratch', '', 'https://youtu.be/nthq56UABI0', '00:38:11', 1),
(19, 'Glassmorphism UI Design for beginners', '', 'https://www.youtube.com/watch?v=nthq56UABI0&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=19', '00:15:18', 1),
(20, 'iOS 16 App UI Design in Sketch - Colors, Layout and Dark Mode - Full Course', '', 'https://www.youtube.com/watch?v=E4uQ36KQLPU&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=20', '01:55:30', 1),
(21, 'Flat UI Design in Figma: Social Media App - full course', '', 'https://www.youtube.com/watch?v=qiW2qKVGT6k&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=22', '00:42:42', 1),
(22, 'Making Better Hero Sections - Rapid ReDesigns', '', 'https://www.youtube.com/watch?v=nz3ZJ8IU-lo&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=23', '00:08:40', 1),
(23, 'Figma Mobile App Design Tutorial', '', 'https://www.youtube.com/watch?v=PeGfX7W1mJk&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=25', '00:46:31', 1),
(24, 'How to Design a Delivery Tracker App | Figma Tutorial for Beginners', '', 'https://www.youtube.com/watch?v=PeGfX7W1mJk&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=25', '00:23:47', 1),
(25, 'UI Design live: Prototyping, Animation and Developer Handoff', '', 'https://www.youtube.com/watch?v=IgYJa2FNozo&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=27', '01:54:16', 1),
(26, 'Food Ordering Mobile App Design in Figma | Figma Tutorial', '', 'https://www.youtube.com/watch?v=esbdyyEvkxw&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=28', '00:58:32', 1),
(27, '1 Web Design Styled in 10 DESIGN TRENDS!', '', 'https://www.youtube.com/watch?v=SwFrRteJFfg&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=29', '00:07:34', 1),
(28, 'Profile Page Design In Figma Step By Step | Figma Tutorials | Ui Trends | Ui Design', '', 'https://www.youtube.com/watch?v=B2mUIqXJEvM&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=30', '00:17:45', 1),
(29, 'Design Booking App in Figma - UI Speed Design | Week - 27', '', 'https://www.youtube.com/watch?v=XfiyjRGVVSo&list=PLwStLOWnW4dynv5J6mQGh-glcedsL-tq2&index=31', '00:59:08', 1),
(30, 'UI Design live: UI Design for developers and Design System', '', 'https://www.youtube.com/watch?v=mYp11gGzgmQ&feature=youtu.be', '00:59:56', 1),
(31, 'The Complete Beginners Guide to Adobe Photoshop | FREE Course | Course overview & breakdown', '', 'https://www.youtube.com/watch?v=sF_jSrBhdlg&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE', '00:04:31', 2),
(32, 'Interface Introduction to Adobe Photoshop Ep1/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=N24fIAwkchk&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=2', '00:12:07', 2),
(33, 'Panels & Workspaces in Adobe Photoshop Ep2/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=4dT9jpAPz1M&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=3', '00:09:16', 2),
(34, 'Raster Image principles in Adobe Photoshop Ep3/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=BqhgjkPSlI8&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=4', '00:04:35', 2),
(35, 'Image size, Dimension, & Resolution in Adobe Photoshop Ep4/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=ekaCauQFeQw&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=5', '00:14:52', 2),
(36, 'Layers in Adobe Photoshop Ep5/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=AgidpNbLvkc&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=6', '00:24:03', 2),
(37, 'Common file types in Adobe Photoshop Ep6/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=ZJsiGfoADsA&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=7', '00:09:56', 2),
(38, 'Colour in Adobe Photoshop Ep7/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=g-W7BxP6vTg&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=8', '00:17:01', 2),
(39, '10 Handy Tips for beginners to Adobe Photoshop Ep8/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=z8m3DPPb3Ps&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=9', '00:17:45', 2),
(40, 'Making selections in Adobe Photoshop Ep9/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=B25I4ZzJepM&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=10', '00:20:33', 2),
(41, 'Copy & paste in Adobe Photoshop Ep10/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=_MhIQhHtrAE&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=11', '00:12:45', 2),
(42, 'Transform tools in Adobe Photoshop Ep11/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=6HcaWH766bE&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=12', '00:12:19', 2),
(43, 'Using brushes in Adobe Photoshop Ep12/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=3WBT5kavjqI&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=13', '00:20:39', 2),
(44, 'Eraser tool & Layer masking Ep13/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=KRZtjDXH5d0&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=14', '00:17:12', 2),
(45, 'Shape tool in Adobe Photoshop Ep14/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=jPcV0lTw_9o&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=15', '00:13:36', 2),
(46, 'Type principals in Adobe Photoshop Ep15/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=DKzCW9R1OwM&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=16', '00:20:26', 2),
(47, 'Layer styles in Adobe Photoshop Ep16/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=CoWpJYz_AHk&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=17', '00:12:19', 2),
(48, 'Paths & the Pen tool in Adobe Photoshop Ep17/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=cpq8NFNKgQo&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=18', '00:20:09', 2),
(49, 'Smart objects in Adobe Photoshop Ep18/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=kOXajoTh6Lc&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=19', '00:20:26', 2),
(50, 'Colour adjustments in Adobe Photoshop Ep19/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=WBQQWwUtPmY&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=20', '00:09:17', 2),
(51, 'Adjustment layers in Photoshop Ep20/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=0SnEraLZK2Y&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=21', '00:07:44', 2),
(52, 'Filters in Photoshop Ep21/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=cF7i8OjE7UE&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=22', '00:08:54', 2),
(53, 'Blending modes in Adobe Photoshop Ep22/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=AB1KGjkpBBE&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=23', '00:08:51', 2),
(54, 'Saving in Photoshop Ep23/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=Q2PKbHKA3jg&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=24', '00:08:45', 2),
(55, 'Setting up a document Ep24/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=gD__P_amN3c&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=25', '00:09:14', 2),
(56, '3D paper type effect Ep25/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=ddOTcJDbs0s&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=26', '00:22:24', 2),
(57, 'Rainbow & clouds illustration Ep26/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=f7L-Jfb7G-8&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=27', '00:19:14', 2),
(58, 'Manage complexity and working smart Ep27/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=yiHOPxKuuEE&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=28', '00:12:35', 2),
(59, 'Decorating an origami paper bird Ep28/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=CNk45_OtTT8&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=29', '00:22:25', 2),
(60, 'Create a origami bird logo Ep29/33 [Adobe Photoshop for Beginners]', '', 'https://www.youtube.com/watch?v=VIfuTsPwx00&list=PLYfCBK8IplO6v0QjCj-TSrFUXnRV0WxfE&index=30', '00:09:14', 2),
(61, 'UX Design vs UI Design | Whats the Difference? Which one is right for me?', '', 'https://www.youtube.com/watch?v=RtPnVtXw6HU&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv', '00:15:36', 3),
(62, 'Figma Masterclass for Beginners (2023 Updated)', '', 'https://www.youtube.com/watch?v=II-6dDzc-80&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=2', '00:31:57', 3),
(63, 'Adobe XD Basics | Top 10 Things to know when getting started with Adobe XD', '', 'https://www.youtube.com/watch?v=JttI6YpmPGI&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=3', '00:19:26', 3),
(64, '5 Pieces of Design Advice I Regret Taking', '', 'https://www.youtube.com/watch?v=qxBjiP4niqU&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=4', '00:07:39', 3),
(65, 'Color in UI Design | Top 5 Tips', '', 'https://www.youtube.com/watch?v=s4XJEukEV3M&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=5', '00:05:00', 3),
(66, '60-30-10 Color Rule', '', 'https://www.youtube.com/watch?v=UWwNIMHFdW4&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=6', '00:06:18', 3),
(67, 'Tools for New Designers', '', 'https://www.youtube.com/watch?v=ipj4Gjr1wTk&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=7', '00:07:27', 3),
(68, 'Mac or PC for Creatives?', '', 'https://www.youtube.com/watch?v=9gjCOAw0W90&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=8', '00:09:25', 3),
(69, 'Design & Prototype an App', '', 'https://www.youtube.com/watch?v=tNPQrfRq2Cg&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=9', '00:15:18', 3),
(70, 'Modern Art Gallery Website', '', 'https://www.youtube.com/watch?v=yTpVTn0KAnI&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=10', '00:10:16', 3),
(71, 'Grid Systems in Web & UI Design', '', 'https://www.youtube.com/watch?v=n_V_aLqYPI0&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=11', '00:04:32', 3),
(72, 'UI Design Patterns | Part 5', '', 'https://www.youtube.com/watch?v=UAK4Hy8ZkVo&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=12', '00:04:29', 3),
(73, '4 Foundational UI Design Principles | C.R.A.P.', '', 'https://www.youtube.com/watch?v=uwNClNmekGU&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=13', '00:09:16', 3),
(74, 'Ways to Improve Your UX Designs', '', 'https://www.youtube.com/watch?v=YsyY-LCaSJM&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=14', '00:03:58', 3),
(75, ' User Flow Diagram Basics', '', 'https://www.youtube.com/watch?v=cvYhuowazh0&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=15', '00:10:22', 3),
(76, 'TYPOGRAPHY | Everything I know about Type in 10 Minutes', '', 'https://www.youtube.com/watch?v=GCluIaNmOG0&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=16', '00:11:04', 3),
(77, 'Imposter Syndrome | 5 Tips for Creatives to Combat Imposter Syndrome', '', 'https://www.youtube.com/watch?v=kAwYopSQ5G0&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=17', '00:05:20', 3),
(78, '5 Common UI Design Patterns | Part 1', '', 'https://www.youtube.com/watch?v=X6RRjByY5Nk&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=18', '00:05:50', 3),
(79, '5 Common UI Design Patterns | Part 2', '', 'https://www.youtube.com/watch?v=tU1h4fAnddU&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=19', '00:04:50', 3),
(80, '5 Common UI Design Patterns | Part 3', '', 'https://youtube.com/watch?v=GLQn3y2bRow&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=20', '00:05:04', 3),
(81, 'UI Patterns 4', '', 'https://www.youtube.com/watch?v=WgPWW8_qXjo&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=21', '00:05:20', 3),
(82, '5 More UI Design Tips', '', 'https://www.youtube.com/watch?v=yx0YDSSxiJY&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=22', '00:04:53', 3),
(83, 'Video Game Streaming UI Design | Figma UI Design', '', 'https://www.youtube.com/watch?v=rvcYqTBRp9o&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=23', '00:20:42', 3),
(84, 'Disney UI | Figma Drag Gestures', '', 'https://www.youtube.com/watch?v=zU9kGGijg5o&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=24', '00:09:40', 3),
(85, '5 Tips to improve your UI Designs', '', 'https://www.youtube.com/watch?v=ENA50EGKUoI&list=PLrtjkLnNjGHvKDUEzWIy7RDmXtlPuxmgv&index=25', '00:04:16', 3),
(87, 'Beginners Guide to Graphic Design | 45 Episode FREE Series', '', 'https://www.youtube.com/watch?v=WONZVnlam6U&list=PLYfCBK8IplO4E2sXtdKMVpKJZRBEoMvpn', '00:03:30', 4),
(88, 'What is Graphic Design? Ep1/45 [Beginners Guide to Graphic Design]', '', 'https://www.youtube.com/watch?v=dFSia1LZI4Y&list=PLYfCBK8IplO4E2sXtdKMVpKJZRBEoMvpn&index=2', '00:06:47', 4),
(89, '‘Line’ Visual element of Graphic Design / Design theory Ep2/45 [Beginners guide to Graphic Design]', '', 'https://www.youtube.com/watch?v=F0PTse89XIE&list=PLYfCBK8IplO4E2sXtdKMVpKJZRBEoMvpn&index=3', '00:07:42', 4),
(90, '‘Colour’ Visual element of Graphic Design / Design theory Ep3/45 [Beginners guide to Graphic Design]', '', 'https://www.youtube.com/watch?v=byDNMLTuOqI&list=PLYfCBK8IplO4E2sXtdKMVpKJZRBEoMvpn&index=4', '00:07:23', 4),
(91, '‘Shape’ Visual element of Graphic Design / Design theory Ep4/45 [Beginners guide to Graphic Design]', '', 'https://www.youtube.com/watch?v=5jprIWG8f5g&list=PLYfCBK8IplO4E2sXtdKMVpKJZRBEoMvpn&index=5', '00:09:22', 4),
(92, '‘Texture’ Visual element of Graphic Design Ep5/45 [Beginners guide to Graphic Design]', '', 'https://www.youtube.com/watch?v=hECQpBM0b0Q&list=PLYfCBK8IplO4E2sXtdKMVpKJZRBEoMvpn&index=6', '00:06:18', 4),
(93, '‘Space’ Visual element of Graphic Design / Design theory Ep6/45 [Beginners guide to Graphic Design]', '', 'https://www.youtube.com/watch?v=M9GZs7xpCdY&list=PLYfCBK8IplO4E2sXtdKMVpKJZRBEoMvpn&index=7', '00:05:22', 4),
(94, '‘Form’ Visual element of Graphic Design / Design theory Ep7/45 [Beginners guide to Graphic Design]', '', 'https://www.youtube.com/watch?v=N0F4O6gP3VA&list=PLYfCBK8IplO4E2sXtdKMVpKJZRBEoMvpn&index=8', '00:03:30', 4),
(95, '‘Typography’ Visual element of Graphic Design Ep8/45 [Beginners guide to Graphic Design]', '', 'https://www.youtube.com/watch?v=d5ZbjSUku44&list=PLYfCBK8IplO4E2sXtdKMVpKJZRBEoMvpn&index=9', '00:09:39', 4),
(96, '‘Contrast’ Design principle of Graphic Design Ep9/45 [Beginners guide to Graphic Design]', '', 'https://www.youtube.com/watch?v=r0SAPEw0ru4&list=PLYfCBK8IplO4E2sXtdKMVpKJZRBEoMvpn&index=10', '00:07:45', 4),
(97, '‘Hierarchy’ Design principle of Graphic Design Ep10/45 [Beginners guide to Graphic Design]', '', 'https://www.youtube.com/watch?v=RlTZ98UXldw&list=PLYfCBK8IplO4E2sXtdKMVpKJZRBEoMvpn&index=11', '00:13:49', 4),
(98, '‘Alignment’ Design principle of Graphic Design Ep11/45 [Beginners guide to Graphic Design]', '', 'https://www.youtube.com/watch?v=2kokQi9vb6E&list=PLYfCBK8IplO4E2sXtdKMVpKJZRBEoMvpn&index=12', '00:07:10', 4),
(99, '‘Balance’ Design principle of Graphic Design Ep12/45 [Beginners guide to Graphic Design]', '', 'https://www.youtube.com/watch?v=bDZ9QMA2Bdc&list=PLYfCBK8IplO4E2sXtdKMVpKJZRBEoMvpn&index=13', '00:05:47', 4),
(100, '‘Proximity’ Design principle of Graphic Design Ep13/45 [Beginners guide to Graphic Design]', '', 'https://www.youtube.com/watch?v=xUdqSiI_G8Y&list=PLYfCBK8IplO4E2sXtdKMVpKJZRBEoMvpn&index=14', '00:06:53', 4),
(101, '‘Repetition’ Design principle of Graphic Design Ep14/45 [Beginners guide to Graphic Design]', '', 'https://www.youtube.com/watch?v=u55BW6WBqVU&list=PLYfCBK8IplO4E2sXtdKMVpKJZRBEoMvpn&index=15', '00:05:08', 4),
(102, '‘Simplicity’ Design principle of Graphic Design Ep15/45 [Beginners guide to Graphic Design]', '', 'https://www.youtube.com/watch?v=iXD2WKKlxGk&list=PLYfCBK8IplO4E2sXtdKMVpKJZRBEoMvpn&index=16', '00:06:16', 4),
(103, '‘Function’ Design principle of Graphic Design Ep16/45 [Beginners guide to Graphic Design]', '', 'https://www.youtube.com/watch?v=S4KNwVx8ATM&list=PLYfCBK8IplO4E2sXtdKMVpKJZRBEoMvpn&index=17', '00:07:18', 4),
(104, 'Why do Graphic Design? Ep17/45 [Beginners Guide to Graphic Design]', '', 'https://www.youtube.com/watch?v=WDhG9lPNWEQ&list=PLYfCBK8IplO4E2sXtdKMVpKJZRBEoMvpn&index=18', '00:10:40', 4),
(105, 'Should I do Graphic Design? Ep18/45 [Beginners Guide to Graphic Design]', '', 'https://www.youtube.com/watch?v=CE9YeZKbfWE&list=PLYfCBK8IplO4E2sXtdKMVpKJZRBEoMvpn&index=19', '00:08:07', 4),
(106, 'Practical skills to be a Graphic designer? Ep19/45 [Beginners Guide to Graphic Design]', '', 'https://www.youtube.com/watch?v=0qRT3JI7OsY&list=PLYfCBK8IplO4E2sXtdKMVpKJZRBEoMvpn&index=20', '00:04:53', 4),
(111, 'Food App Design in Figma | Figma Tutorial | UX/UI', '', 'https://www.youtube.com/watch?v=esbdyyEvkxw', '00:58:31', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indeks untuk tabel `detail_menonton`
--
ALTER TABLE `detail_menonton`
  ADD PRIMARY KEY (`id_detailmenonton`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `video_id` (`video_id`);

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detailtransaksi`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `transaksi_id` (`transaksi_id`);

--
-- Indeks untuk tabel `detail_video`
--
ALTER TABLE `detail_video`
  ADD PRIMARY KEY (`id_detailvideo`),
  ADD KEY `user_id` (`user_id`) USING BTREE,
  ADD KEY `course_id` (`course_id`) USING BTREE;

--
-- Indeks untuk tabel `free_video`
--
ALTER TABLE `free_video`
  ADD PRIMARY KEY (`id_videofree`);

--
-- Indeks untuk tabel `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`subscription_id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `subscription_id` (`subscription_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `transaksi_id` (`id_detailtransaksi`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `detail_menonton`
--
ALTER TABLE `detail_menonton`
  MODIFY `id_detailmenonton` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detailtransaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_video`
--
ALTER TABLE `detail_video`
  MODIFY `id_detailvideo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `free_video`
--
ALTER TABLE `free_video`
  MODIFY `id_videofree` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_menonton`
--
ALTER TABLE `detail_menonton`
  ADD CONSTRAINT `detail_menonton_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `detail_menonton_ibfk_2` FOREIGN KEY (`video_id`) REFERENCES `video` (`video_id`);

--
-- Ketidakleluasaan untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_detailtransaksi`) REFERENCES `transaksi` (`transaksi_id`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `detail_transaksi_ibfk_3` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksi` (`transaksi_id`);

--
-- Ketidakleluasaan untuk tabel `detail_video`
--
ALTER TABLE `detail_video`
  ADD CONSTRAINT `detail_video_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `detail_video_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `subscription_id` FOREIGN KEY (`subscription_id`) REFERENCES `subscription` (`subscription_id`);

--
-- Ketidakleluasaan untuk tabel `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
