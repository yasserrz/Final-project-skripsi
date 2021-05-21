-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2021 pada 18.46
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spmobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama_lengkap`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
('RYU', 'f3770595e0cb4d9a988bd5da98d2187d', 'Rizky Yuni Utami'),
('januriawan', '21232f297a57a5a743894a0e4a801fc3', 'Fajar Januriawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `basis_pengetahuan`
--

CREATE TABLE `basis_pengetahuan` (
  `kode_pengetahuan` int(11) NOT NULL,
  `kode_kerusakan` int(11) NOT NULL,
  `kode_gejala` int(11) NOT NULL,
  `mb` double(11,1) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `basis_pengetahuan`
--

INSERT INTO `basis_pengetahuan` (`kode_pengetahuan`, `kode_kerusakan`, `kode_gejala`, `mb`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 1.0, '2021-05-21 13:48:11', '2021-05-21 13:48:11'),
(2, 1, 2, 1.0, '2021-05-21 13:48:19', '2021-05-21 13:48:19'),
(3, 2, 3, 1.0, '2021-05-21 13:48:27', '2021-05-21 13:48:27'),
(4, 2, 4, 1.0, '2021-05-21 13:48:35', '2021-05-21 13:48:35'),
(5, 3, 5, 1.0, '2021-05-21 13:49:02', '2021-05-21 13:49:02'),
(6, 3, 6, 1.0, '2021-05-21 13:49:09', '2021-05-21 13:49:09'),
(7, 4, 7, 1.0, '2021-05-21 13:49:25', '2021-05-21 13:49:25'),
(8, 4, 8, 1.0, '2021-05-21 13:49:43', '2021-05-21 13:49:43'),
(9, 5, 9, 1.0, '2021-05-21 13:50:01', '2021-05-21 13:50:01'),
(10, 5, 10, 1.0, '2021-05-21 13:50:29', '2021-05-21 13:50:29'),
(11, 6, 11, 1.0, '2021-05-21 13:50:41', '2021-05-21 13:50:41'),
(12, 6, 12, 1.0, '2021-05-21 13:50:52', '2021-05-21 13:50:52'),
(13, 6, 13, 1.0, '2021-05-21 13:51:06', '2021-05-21 13:51:06'),
(14, 7, 10, 1.0, '2021-05-21 13:51:30', '2021-05-21 13:51:30'),
(15, 7, 14, 1.0, '2021-05-21 13:51:57', '2021-05-21 13:51:57'),
(16, 7, 15, 1.0, '2021-05-21 13:52:08', '2021-05-21 13:52:08'),
(17, 8, 10, 1.0, '2021-05-21 13:52:39', '2021-05-21 13:52:39'),
(18, 8, 16, 1.0, '2021-05-21 13:52:50', '2021-05-21 13:52:50'),
(19, 8, 17, 1.0, '2021-05-21 13:53:05', '2021-05-21 13:53:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `kode_gejala` int(11) NOT NULL,
  `nama_gejala` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `nama_gejala`, `updated_at`, `created_at`) VALUES
(1, 'Berisik Dibagian Depan Kiri', '2021-05-21 13:31:33', '2021-05-21 13:31:33'),
(2, 'Getaran Tidak normal dibagian dashboard', '2021-05-21 13:32:19', '2021-05-21 13:32:19'),
(3, 'RPM tertahan di 2000 pada saat mesin panas', '2021-05-21 13:33:07', '2021-05-21 13:32:49'),
(4, 'RPM naik turun  pada saat mesin dingin', '2021-05-21 13:32:55', '2021-05-21 13:32:55'),
(5, 'Indikator Tempertatur nyala', '2021-05-21 13:33:35', '2021-05-21 13:33:35'),
(6, 'Temperatrur mesin panas', '2021-05-21 13:33:44', '2021-05-21 13:33:44'),
(7, 'Nyendat pada saat jalan', '2021-05-21 13:33:55', '2021-05-21 13:33:55'),
(8, 'Mesin mati tidak bisa hidup', '2021-05-21 13:34:02', '2021-05-21 13:34:02'),
(9, 'Indikator oli nyala', '2021-05-21 13:34:13', '2021-05-21 13:34:13'),
(10, 'Indikator engine nyala', '2021-05-21 13:34:38', '2021-05-21 13:34:38'),
(11, 'Pedal kopling berat', '2021-05-21 13:34:46', '2021-05-21 13:34:46'),
(12, 'Akeselerasi kurang', '2021-05-21 13:34:57', '2021-05-21 13:34:57'),
(13, 'Saat RPM tinggi tidak menyetuh topspeed', '2021-05-21 13:35:15', '2021-05-21 13:35:15'),
(14, 'Putaran tidak halus', '2021-05-21 13:35:26', '2021-05-21 13:35:26'),
(15, 'Tuas gas berat', '2021-05-21 13:35:45', '2021-05-21 13:35:32'),
(16, 'Sensor oksigen rusak', '2021-05-21 13:41:59', '2021-05-21 13:41:59'),
(17, 'Bensin boros', '2021-05-21 13:42:06', '2021-05-21 13:42:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `kerusakan` text NOT NULL,
  `gejala` text NOT NULL,
  `hasil_id` int(11) NOT NULL,
  `hasil_nilai` varchar(16) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `kerusakan`, `gejala`, `hasil_id`, `hasil_nilai`, `created_at`, `updated_at`) VALUES
(1, 'a:1:{i:0;a:1:{i:1;s:6:\"0.9600\";}}', 'a:2:{i:0;a:1:{i:1;s:1:\"4\";}i:1;a:1:{i:2;s:1:\"4\";}}', 1, '0.9600', '2021-05-21 13:53:38', '2021-05-21 13:53:38'),
(2, 'a:4:{i:0;a:1:{i:1;s:6:\"0.9600\";}i:1;a:1:{i:2;s:6:\"1.0000\";}i:2;a:1:{i:6;s:6:\"1.0000\";}i:3;a:1:{i:7;s:6:\"1.0000\";}}', 'a:6:{i:0;a:1:{i:1;s:1:\"4\";}i:1;a:1:{i:2;s:1:\"4\";}i:2;a:1:{i:3;s:1:\"5\";}i:3;a:1:{i:4;s:1:\"5\";}i:4;a:1:{i:12;s:1:\"5\";}i:5;a:1:{i:15;s:1:\"5\";}}', 1, '0.9600', '2021-05-21 13:53:54', '2021-05-21 13:53:54'),
(3, 'a:5:{i:0;a:1:{i:1;s:6:\"0.6400\";}i:1;a:1:{i:3;s:6:\"1.0000\";}i:2;a:1:{i:4;s:6:\"1.0000\";}i:3;a:1:{i:5;s:6:\"1.0000\";}i:4;a:1:{i:6;s:6:\"0.9040\";}}', 'a:8:{i:0;a:1:{i:1;s:1:\"2\";}i:1;a:1:{i:2;s:1:\"2\";}i:2;a:1:{i:6;s:1:\"5\";}i:3;a:1:{i:8;s:1:\"5\";}i:4;a:1:{i:9;s:1:\"5\";}i:5;a:1:{i:11;s:1:\"3\";}i:6;a:1:{i:12;s:1:\"3\";}i:7;a:1:{i:13;s:1:\"2\";}}', 1, '0.6400', '2021-05-21 13:54:54', '2021-05-21 13:54:54'),
(4, 'a:8:{i:0;a:1:{i:1;s:6:\"0.7600\";}i:1;a:1:{i:2;s:6:\"0.8800\";}i:2;a:1:{i:3;s:6:\"0.7600\";}i:3;a:1:{i:4;s:6:\"0.8800\";}i:4;a:1:{i:5;s:6:\"0.8800\";}i:5;a:1:{i:6;s:6:\"0.7120\";}i:6;a:1:{i:7;s:6:\"0.8560\";}i:7;a:1:{i:8;s:6:\"0.7120\";}}', 'a:17:{i:0;a:1:{i:1;s:1:\"3\";}i:1;a:1:{i:2;s:1:\"2\";}i:2;a:1:{i:3;s:1:\"2\";}i:3;a:1:{i:4;s:1:\"4\";}i:4;a:1:{i:5;s:1:\"2\";}i:5;a:1:{i:6;s:1:\"3\";}i:6;a:1:{i:7;s:1:\"2\";}i:7;a:1:{i:8;s:1:\"4\";}i:8;a:1:{i:9;s:1:\"4\";}i:9;a:1:{i:10;s:1:\"2\";}i:10;a:1:{i:11;s:1:\"2\";}i:11;a:1:{i:12;s:1:\"1\";}i:12;a:1:{i:13;s:1:\"2\";}i:13;a:1:{i:14;s:1:\"3\";}i:14;a:1:{i:15;s:1:\"2\";}i:15;a:1:{i:16;s:1:\"2\";}i:16;a:1:{i:17;s:1:\"1\";}}', 1, '0.7600', '2021-05-21 13:55:58', '2021-05-21 13:55:58'),
(5, 'a:8:{i:0;a:1:{i:1;s:6:\"0.7600\";}i:1;a:1:{i:2;s:6:\"0.8800\";}i:2;a:1:{i:3;s:6:\"0.7600\";}i:3;a:1:{i:4;s:6:\"0.8800\";}i:4;a:1:{i:5;s:6:\"0.8800\";}i:5;a:1:{i:6;s:6:\"0.7120\";}i:6;a:1:{i:7;s:6:\"0.8560\";}i:7;a:1:{i:8;s:6:\"0.7120\";}}', 'a:17:{i:0;a:1:{i:1;s:1:\"3\";}i:1;a:1:{i:2;s:1:\"2\";}i:2;a:1:{i:3;s:1:\"2\";}i:3;a:1:{i:4;s:1:\"4\";}i:4;a:1:{i:5;s:1:\"2\";}i:5;a:1:{i:6;s:1:\"3\";}i:6;a:1:{i:7;s:1:\"2\";}i:7;a:1:{i:8;s:1:\"4\";}i:8;a:1:{i:9;s:1:\"4\";}i:9;a:1:{i:10;s:1:\"2\";}i:10;a:1:{i:11;s:1:\"2\";}i:11;a:1:{i:12;s:1:\"1\";}i:12;a:1:{i:13;s:1:\"2\";}i:13;a:1:{i:14;s:1:\"3\";}i:14;a:1:{i:15;s:1:\"2\";}i:15;a:1:{i:16;s:1:\"2\";}i:16;a:1:{i:17;s:1:\"1\";}}', 1, '0.7600', '2021-05-21 13:56:24', '2021-05-21 13:56:24'),
(6, 'a:8:{i:0;a:1:{i:1;s:6:\"0.7600\";}i:1;a:1:{i:2;s:6:\"0.8800\";}i:2;a:1:{i:3;s:6:\"0.7600\";}i:3;a:1:{i:4;s:6:\"0.8800\";}i:4;a:1:{i:5;s:6:\"0.8800\";}i:5;a:1:{i:6;s:6:\"0.7120\";}i:6;a:1:{i:7;s:6:\"0.8560\";}i:7;a:1:{i:8;s:6:\"1.0000\";}}', 'a:17:{i:0;a:1:{i:1;s:1:\"3\";}i:1;a:1:{i:2;s:1:\"2\";}i:2;a:1:{i:3;s:1:\"2\";}i:3;a:1:{i:4;s:1:\"4\";}i:4;a:1:{i:5;s:1:\"2\";}i:5;a:1:{i:6;s:1:\"3\";}i:6;a:1:{i:7;s:1:\"2\";}i:7;a:1:{i:8;s:1:\"4\";}i:8;a:1:{i:9;s:1:\"4\";}i:9;a:1:{i:10;s:1:\"2\";}i:10;a:1:{i:11;s:1:\"2\";}i:11;a:1:{i:12;s:1:\"1\";}i:12;a:1:{i:13;s:1:\"2\";}i:13;a:1:{i:14;s:1:\"3\";}i:14;a:1:{i:15;s:1:\"2\";}i:15;a:1:{i:16;s:1:\"2\";}i:16;a:1:{i:17;s:1:\"5\";}}', 1, '0.7600', '2021-05-21 13:56:39', '2021-05-21 13:56:39'),
(7, 'a:8:{i:0;a:1:{i:1;s:6:\"0.7600\";}i:1;a:1:{i:2;s:6:\"0.8800\";}i:2;a:1:{i:3;s:6:\"0.7600\";}i:3;a:1:{i:4;s:6:\"0.8800\";}i:4;a:1:{i:5;s:6:\"0.8800\";}i:5;a:1:{i:6;s:6:\"0.7120\";}i:6;a:1:{i:7;s:6:\"0.8560\";}i:7;a:1:{i:8;s:6:\"1.0000\";}}', 'a:16:{i:0;a:1:{i:1;s:1:\"3\";}i:1;a:1:{i:2;s:1:\"2\";}i:2;a:1:{i:3;s:1:\"2\";}i:3;a:1:{i:4;s:1:\"4\";}i:4;a:1:{i:5;s:1:\"2\";}i:5;a:1:{i:6;s:1:\"3\";}i:6;a:1:{i:7;s:1:\"2\";}i:7;a:1:{i:8;s:1:\"4\";}i:8;a:1:{i:9;s:1:\"4\";}i:9;a:1:{i:10;s:1:\"2\";}i:10;a:1:{i:11;s:1:\"2\";}i:11;a:1:{i:12;s:1:\"1\";}i:12;a:1:{i:13;s:1:\"2\";}i:13;a:1:{i:14;s:1:\"3\";}i:14;a:1:{i:15;s:1:\"2\";}i:15;a:1:{i:17;s:1:\"5\";}}', 1, '0.7600', '2021-05-21 13:56:48', '2021-05-21 13:56:48'),
(8, 'a:1:{i:0;a:1:{i:8;s:6:\"0.8000\";}}', 'a:1:{i:0;a:1:{i:17;s:1:\"4\";}}', 8, '0.8000', '2021-05-21 13:57:18', '2021-05-21 13:57:18'),
(9, 'a:8:{i:3;s:6:\"1.0000\";i:5;s:6:\"1.0000\";i:7;s:6:\"1.0000\";i:8;s:6:\"1.0000\";i:2;s:6:\"0.8800\";i:4;s:6:\"0.8800\";i:1;s:6:\"0.6800\";i:6;s:6:\"0.4000\";}', 'a:12:{i:0;a:1:{i:1;s:1:\"3\";}i:1;a:1:{i:2;s:1:\"1\";}i:2;a:1:{i:3;s:1:\"2\";}i:3;a:1:{i:4;s:1:\"4\";}i:4;a:1:{i:6;s:1:\"5\";}i:5;a:1:{i:7;s:1:\"2\";}i:6;a:1:{i:8;s:1:\"4\";}i:7;a:1:{i:9;s:1:\"2\";}i:8;a:1:{i:10;s:1:\"5\";}i:9;a:1:{i:13;s:1:\"2\";}i:10;a:1:{i:14;s:1:\"2\";}i:11;a:1:{i:15;s:1:\"4\";}}', 3, '1.0000', '2021-05-21 14:14:33', '2021-05-21 14:14:33'),
(10, 'a:8:{i:3;s:6:\"1.0000\";i:5;s:6:\"1.0000\";i:7;s:6:\"1.0000\";i:8;s:6:\"1.0000\";i:2;s:6:\"0.9200\";i:6;s:6:\"0.8080\";i:4;s:6:\"0.7600\";i:1;s:6:\"0.5200\";}', 'a:17:{i:0;a:1:{i:1;s:1:\"1\";}i:1;a:1:{i:2;s:1:\"2\";}i:2;a:1:{i:3;s:1:\"3\";}i:3;a:1:{i:4;s:1:\"4\";}i:4;a:1:{i:5;s:1:\"5\";}i:5;a:1:{i:6;s:1:\"1\";}i:6;a:1:{i:7;s:1:\"2\";}i:7;a:1:{i:8;s:1:\"3\";}i:8;a:1:{i:9;s:1:\"4\";}i:9;a:1:{i:10;s:1:\"5\";}i:10;a:1:{i:11;s:1:\"1\";}i:11;a:1:{i:12;s:1:\"2\";}i:12;a:1:{i:13;s:1:\"3\";}i:13;a:1:{i:14;s:1:\"3\";}i:14;a:1:{i:15;s:1:\"4\";}i:15;a:1:{i:16;s:1:\"5\";}i:16;a:1:{i:17;s:1:\"2\";}}', 3, '1.0000', '2021-05-21 14:17:40', '2021-05-21 14:17:40'),
(11, 'a:8:{i:3;s:6:\"1.0000\";i:4;s:6:\"1.0000\";i:5;s:6:\"1.0000\";i:6;s:6:\"1.0000\";i:7;s:6:\"1.0000\";i:8;s:6:\"1.0000\";i:2;s:6:\"0.9200\";i:1;s:6:\"0.5200\";}', 'a:17:{i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"3\";i:4;s:1:\"4\";i:5;s:1:\"5\";i:6;s:1:\"3\";i:7;s:1:\"5\";i:8;s:1:\"2\";i:9;s:1:\"3\";i:10;s:1:\"5\";i:11;s:1:\"3\";i:12;s:1:\"4\";i:13;s:1:\"5\";i:14;s:1:\"3\";i:15;s:1:\"5\";i:16;s:1:\"3\";i:17;s:1:\"5\";}', 3, '1.0000', '2021-05-21 14:29:20', '2021-05-21 14:29:20'),
(12, 'a:1:{i:1;s:6:\"0.2000\";}', 'a:1:{i:1;s:1:\"1\";}', 1, '0.2000', '2021-05-21 14:33:16', '2021-05-21 14:33:16'),
(13, 'a:1:{i:1;s:6:\"0.2000\";}', 'a:1:{i:1;s:1:\"1\";}', 1, '0.2000', '2021-05-21 14:34:49', '2021-05-21 14:34:49'),
(14, 'a:1:{i:2;s:6:\"0.4000\";}', 'a:1:{i:4;s:1:\"2\";}', 2, '0.4000', '2021-05-21 14:34:58', '2021-05-21 14:34:58'),
(15, 'a:1:{i:1;s:6:\"0.2000\";}', 'a:1:{i:1;s:1:\"1\";}', 1, '0.2000', '2021-05-21 14:38:00', '2021-05-21 14:38:00'),
(16, 'a:1:{i:1;s:6:\"1.0000\";}', 'a:1:{i:1;s:1:\"5\";}', 1, '1.0000', '2021-05-21 14:38:34', '2021-05-21 14:38:34'),
(17, 'a:2:{i:1;s:6:\"1.0000\";i:6;s:6:\"1.0000\";}', 'a:2:{i:1;s:1:\"5\";i:12;s:1:\"5\";}', 1, '1.0000', '2021-05-21 14:38:58', '2021-05-21 14:38:58'),
(18, 'a:1:{i:6;s:6:\"1.0000\";}', 'a:1:{i:12;s:1:\"5\";}', 6, '1.0000', '2021-05-21 14:39:09', '2021-05-21 14:39:09'),
(19, 'a:1:{i:8;s:6:\"1.0000\";}', 'a:1:{i:17;s:1:\"5\";}', 8, '1.0000', '2021-05-21 14:53:19', '2021-05-21 14:53:19'),
(20, 'a:2:{i:8;s:6:\"0.8800\";i:7;s:6:\"0.2000\";}', 'a:3:{i:15;s:1:\"1\";i:16;s:1:\"4\";i:17;s:1:\"2\";}', 8, '0.8800', '2021-05-21 14:53:34', '2021-05-21 14:53:34'),
(21, 'a:3:{i:6;s:6:\"0.8800\";i:8;s:6:\"0.8800\";i:7;s:6:\"0.2000\";}', 'a:5:{i:11;s:1:\"4\";i:12;s:1:\"2\";i:15;s:1:\"1\";i:16;s:1:\"4\";i:17;s:1:\"2\";}', 6, '0.8800', '2021-05-21 14:54:53', '2021-05-21 14:54:53'),
(22, 'a:5:{i:6;s:6:\"0.8800\";i:8;s:6:\"0.8800\";i:1;s:6:\"0.8400\";i:2;s:6:\"0.4000\";i:7;s:6:\"0.2000\";}', 'a:8:{i:1;s:1:\"4\";i:2;s:1:\"1\";i:3;s:1:\"2\";i:11;s:1:\"4\";i:12;s:1:\"2\";i:15;s:1:\"1\";i:16;s:1:\"4\";i:17;s:1:\"2\";}', 6, '0.8800', '2021-05-21 14:55:24', '2021-05-21 14:55:24'),
(23, 'a:5:{i:1;s:6:\"1.0000\";i:6;s:6:\"0.8800\";i:8;s:6:\"0.8800\";i:2;s:6:\"0.4000\";i:7;s:6:\"0.2000\";}', 'a:8:{i:1;s:1:\"5\";i:2;s:1:\"1\";i:3;s:1:\"2\";i:11;s:1:\"4\";i:12;s:1:\"2\";i:15;s:1:\"1\";i:16;s:1:\"4\";i:17;s:1:\"2\";}', 1, '1.0000', '2021-05-21 14:55:38', '2021-05-21 14:55:38'),
(24, 'a:2:{i:1;s:6:\"0.9200\";i:2;s:6:\"0.6000\";}', 'a:3:{i:1;s:1:\"4\";i:2;s:1:\"3\";i:3;s:1:\"3\";}', 1, '0.9200', '2021-05-21 16:01:27', '2021-05-21 16:01:27'),
(25, 'a:1:{i:1;s:6:\"0.9200\";}', 'a:2:{i:1;s:1:\"4\";i:2;s:1:\"3\";}', 1, '0.9200', '2021-05-21 16:14:11', '2021-05-21 16:14:11'),
(26, 'a:6:{i:2;s:6:\"1.0000\";i:5;s:6:\"1.0000\";i:7;s:6:\"1.0000\";i:8;s:6:\"1.0000\";i:6;s:6:\"0.6000\";i:1;s:6:\"0.2000\";}', 'a:6:{i:1;s:1:\"1\";i:4;s:1:\"5\";i:10;s:1:\"5\";i:13;s:1:\"3\";i:14;s:1:\"5\";i:17;s:1:\"5\";}', 2, '1.0000', '2021-05-21 16:16:02', '2021-05-21 16:16:02'),
(27, 'a:6:{i:2;s:6:\"1.0000\";i:7;s:6:\"0.7600\";i:6;s:6:\"0.6000\";i:8;s:6:\"0.5200\";i:5;s:6:\"0.4000\";i:1;s:6:\"0.2000\";}', 'a:6:{i:1;s:1:\"1\";i:4;s:1:\"5\";i:10;s:1:\"2\";i:13;s:1:\"3\";i:14;s:1:\"3\";i:17;s:1:\"1\";}', 2, '1.0000', '2021-05-21 16:16:18', '2021-05-21 16:16:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerusakan`
--

CREATE TABLE `kerusakan` (
  `kode_kerusakan` int(11) NOT NULL,
  `nama_kerusakan` varchar(50) DEFAULT NULL,
  `det_kerusakan` varchar(500) NOT NULL,
  `srn_kerusakan` varchar(500) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kerusakan`
--

INSERT INTO `kerusakan` (`kode_kerusakan`, `nama_kerusakan`, `det_kerusakan`, `srn_kerusakan`, `updated_at`, `created_at`) VALUES
(1, 'Mounting Engine', 'Engine mounting yang telah mencapai batas umur atau yang telah rusak biasanya terdapat keretakan pada karet di engine mounting tersebut. Karet yang terdapat pada engine mounting lama kelamaan akan menjadi getas atau keras sehingga akan mudah mengalami keretakkan.  Apabila keretakkan pada engine mounting tetap dibiarkan atau engine mounting tetap tidak diganti maka keretakan yang ditimbulkan pada engine mounting lama-lama akan membuat engine mounting robek.', 'Penggantian part engine mounting', '2021-05-21 18:56:58', '2021-05-21 11:56:58'),
(2, 'Accu Bermasalah', 'Dapat ditandai saat  RPM nahan di 2000 Pada saat mesin panas (pada saat lampu merah) dan RPM naik turun  pada saat mesin dingin atau saat pagi.', 'Setel ulang Accu.', '2021-05-21 19:01:36', '2021-05-21 12:01:23'),
(3, 'Accu salah Input', 'Accu salah input biasanya dapat dilihat dari dashboard mobil yang menandakan beberapa indikator tetap nyala padahal mobil tersebut normal.', 'Setting ulang accu.', '2021-05-21 19:10:03', '2021-05-21 12:10:03'),
(4, 'Recall Pompa Bensin (Fuel Pump)', 'uel pump merupakan komponen yang bertugas memompa bahan bakar dari tangki agar dapat disalurkan ke ruang mesin. Apabila fuel pump rusak, maka distribusi bahan bakar ke mesin bakal terhambat.', 'Silahkan ke bengkel untuk memperbaiki komponen tersebut', '2021-05-21 19:19:12', '2021-05-21 12:19:12'),
(5, 'Slutch', 'a', 'b', '2021-05-21 20:18:44', '2021-05-21 13:18:44'),
(6, 'Kopling Slip', 'Penyebab kopling mobil selip dikarenakan kampas kopling yang telah aus atau habis', 'Ganti Oli Transmisi dan ganti komponen kopling baru', '2021-05-21 20:21:42', '2021-05-21 13:21:42'),
(7, 'Busi Bermasalah', 'Busi mobil yang bermasalah dapat menyebabkan mesin mobil tidak dapat bekerja secara seimbang akibat ketidakseimbangan tenaga yang dikeluarkan pada setiap silindernya.', 'Ganti Busi', '2021-05-21 20:24:02', '2021-05-21 13:24:02'),
(8, 'Katup Kontrol PCV', 'a', 'a', '2021-05-21 20:41:41', '2021-05-21 13:31:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  ADD PRIMARY KEY (`kode_pengetahuan`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`kode_kerusakan`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  MODIFY `kode_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `kode_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `kerusakan`
--
ALTER TABLE `kerusakan`
  MODIFY `kode_kerusakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
