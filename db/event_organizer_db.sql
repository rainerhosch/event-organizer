-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Nov 2024 pada 08.50
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_organizer_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `venue` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `event_poster` varchar(255) DEFAULT NULL,
  `max_participants` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_type`, `event_date`, `event_time`, `venue`, `description`, `event_poster`, `max_participants`, `created_at`, `updated_at`) VALUES
(1, 'Konser Musik Live - The Sound Experience', 'Konser Musik', '2024-11-05', '19:00:00', 'Stadium Gelora Bung Karno', 'Nikmati penampilan live dari band-band terkemuka dan artis internasional di acara konser musik spektakuler ini. Tersedia berbagai kategori tiket.', 'event-1.png', 5000, '2024-11-16 14:10:45', '2024-11-18 07:06:09'),
(2, 'Meet and Greet Artis Korea: Kim Ji Won', 'Meet and Greet', '2024-11-15', '14:00:00', 'Central Park Mall, Jakarta', 'Kesempatan langka bertemu langsung dengan Kim Ji Won, artis Korea ternama dari drama populer. Dapatkan tanda tangan dan foto bersama!', 'event-2.png', 200, '2024-11-16 14:11:16', '2024-11-18 07:06:03'),
(3, 'Jakarta International Marathon 2024', 'Maraton', '2024-11-12', '05:30:00', 'Monas, Jakarta', 'Ayo ikut serta dalam maraton internasional yang akan diadakan di Jakarta. Tersedia berbagai kategori lomba, mulai dari 5K hingga Full Marathon.', 'event-3.png', 10000, '2024-11-16 14:11:44', '2024-11-18 07:05:55'),
(4, 'Festival Makanan Nusantara', 'Festival Makanan', '2024-11-10', '10:00:00', 'Purna Bhakti Pertiwi, Jakarta', 'Nikmati berbagai macam makanan tradisional dan kekinian dari seluruh Indonesia di festival makanan terbesar tahun ini. Tersedia juga kompetisi memasak dan demo masak.', 'event-4.png', NULL, '2024-11-16 14:14:44', '2024-11-18 07:05:47'),
(5, 'Bazar Buku Jakarta 2024', 'Bazar Buku', '2024-11-13', '09:00:00', 'Istora Senayan, Jakarta', 'Temukan berbagai buku menarik dengan diskon besar di Bazar Buku Jakarta. Ada ribuan buku dari berbagai genre yang bisa kamu dapatkan!', 'event-5.png', NULL, '2024-11-16 14:14:58', '2024-11-18 07:05:40'),
(6, 'Coldplay: Music of the Spheres World Tour', 'Konser Musik', '2024-12-18', '20:00:00', 'Gelora Bung Karno, Jakarta', 'Saksikan penampilan spektakuler Coldplay dalam tur dunia \"Music of the Spheres\" dengan visual yang memukau dan musik yang mendalam.', 'event-6.png', 20000, '2024-11-16 14:17:39', '2024-11-18 07:05:25'),
(7, 'Justin Bieber: Justice World Tour', 'Konser Musik', '2024-12-05', '19:30:00', 'Stadium Nasional, Jakarta', 'Jangan lewatkan penampilan megabintang Justin Bieber dalam tur dunia \"Justice\" yang menghadirkan lagu-lagu hits dari album terbarunya.', 'event-7.png', 15000, '2024-11-16 14:17:39', '2024-11-18 07:05:29'),
(8, 'Ed Sheeran: Mathematics Tour', 'Konser Musik', '2024-12-10', '21:00:00', 'Stadium Merdeka, Jakarta', 'Ikuti tur musik Ed Sheeran dengan lagu-lagu penuh emosi dari album terbarunya. Konser ini akan membawa kalian dalam perjalanan musikal yang tak terlupakan.', 'event-8.png', 18000, '2024-11-16 14:17:39', '2024-11-18 07:05:09'),
(9, 'Ariana Grande: Sweetener World Tour', 'Konser Musik', '2024-12-12', '19:00:00', 'The International Stadium, Jakarta', 'Ariana Grande siap memberikan pengalaman konser yang luar biasa dengan lagu-lagu dari album \"Sweetener\" dan \"Thank U, Next\".', 'event-9.png', 12000, '2024-11-16 14:17:39', '2024-11-18 07:05:00'),
(10, 'Shawn Mendes: Wonder Tour', 'Konser Musik', '2024-12-15', '20:00:00', 'Palu Arena, Jakarta', 'Shawn Mendes akan menyapa penggemarnya dengan lagu-lagu hit dari album \"Wonder\". Nikmati malam penuh dengan energi dan kekuatan vokalnya.', 'event-10.png', 15000, '2024-11-16 14:17:39', '2024-11-18 07:04:41'),
(11, 'BTS: Permission to Dance Tour', 'Konser Musik', '2024-12-18', '18:30:00', 'GBK Stadium, Jakarta', 'Saksikan boy band terbesar di dunia, BTS, dalam konser spektakuler dengan penampilan penuh warna dan semangat dari lagu-lagu hit mereka.', 'event-11.png', 25000, '2024-11-16 14:17:39', '2024-11-18 07:04:30'),
(12, 'The Weeknd: After Hours Tour', 'Konser Musik', '2024-12-20', '22:00:00', 'Jakarta International Expo', 'Dengarkan hit-hits The Weeknd dari album \"After Hours\" dalam tur yang memadukan visual luar biasa dengan musik yang hipnotis.', 'event-12.png', 15000, '2024-11-16 14:17:39', '2024-11-18 07:04:19'),
(13, 'Taylor Swift: The Eras Tour', 'Konser Musik', '2024-12-23', '21:00:00', 'Sentul International Convention Center, Jakarta', 'Taylor Swift akan membawakan lagu-lagu terbaik dari setiap era karier musiknya dalam konser yang mencakup seluruh perjalanan musikalnya.', 'event-13.png', 20000, '2024-11-16 14:17:39', '2024-11-18 07:04:08'),
(14, 'Maroon 5: World Tour', 'Konser Musik', '2024-12-31', '19:30:00', 'Gelora Bung Karno Stadium, Jakarta', 'Nikmati penampilan energik dari Maroon 5 dengan lagu-lagu hits mereka yang sudah melegenda di dunia musik pop.', 'event-14.jpg', 18000, '2024-11-16 14:17:39', '2024-11-18 07:00:51'),
(15, 'Billie Eilish: Happier Than Ever Tour', 'Konser Musik', '2024-12-23', '20:00:00', 'Stadium Utama Senayan, Jakarta', 'Billie Eilish akan memukau para penggemarnya dengan lagu-lagu penuh makna dari album \"Happier Than Ever\". Jangan lewatkan kesempatan untuk melihatnya secara langsung.', 'event-15.png', 17000, '2024-11-16 14:17:39', '2024-11-18 06:44:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT 0,
  `pay_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `ktp_number` text NOT NULL,
  `phone_number` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_user` tinyint(2) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `ktp_number`, `phone_number`, `email`, `password`, `role_user`, `is_deleted`, `date_created`) VALUES
(1, 'Administrator', '0000000000000000', '87790001615', 'administrator@eo.com', '202cb962ac59075b964b07152d234b70', 1, 0, '2024-11-16'),
(2, 'Admin Test 1', '0000000000000000', '87790001615', 'admintest@eo.com', '202cb962ac59075b964b07152d234b70', 2, 0, '2024-11-16'),
(3, 'Customer Test 1', '0000000000000000', '87790001615', 'customertest@eo.com', '202cb962ac59075b964b07152d234b70', 3, 0, '2024-11-16'),
(4, 'Customer Test 2', '0000000000000000', '87790001615', 'customertest2@eo.com', '202cb962ac59075b964b07152d234b70', 3, 0, '2024-11-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`role_id`, `role_name`) VALUES
(1, 'Administrator'),
(2, 'Admin'),
(3, 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
