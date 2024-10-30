-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2024 pada 15.43
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sitabis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_masyarakat_`
--

CREATE TABLE `data_masyarakat_` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `usia` int(11) NOT NULL,
  `jml_keluarga` int(11) NOT NULL,
  `kondisi_keluarga` varchar(255) NOT NULL,
  `usia_bayi` int(11) NOT NULL,
  `type_persalinan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_masyarakat_`
--

INSERT INTO `data_masyarakat_` (`id`, `nama`, `alamat`, `no_telp`, `desa`, `usia`, `jml_keluarga`, `kondisi_keluarga`, `usia_bayi`, `type_persalinan`) VALUES
(1, 'Rifdah', 'cilame', '', 'Cicalengka', 33, 0, '', 0, 0),
(2, 'Rifdah Naasyiah', 'rrrrr', '', 'Cicalengka', 31, 0, '', 0, 0),
(3, 'Rizky', 'Kp. Cilame RT.07 RW.06', '', 'Panenjoan', 40, 0, '', 0, 0),
(4, 'Reza', 'Kebon Kalapa', '', 'Tenjolaya', 43, 0, '', 0, 0),
(5, 'Lina', 'Kebon Kalapa', '', 'Cicalengka', 23, 0, '', 0, 0),
(6, 'Salwa May Hanifah', 'Kebon Kalapa', '', 'Tenjolaya', 31, 0, '', 0, 0),
(7, 'Rifdah Naasyiah', 'Kebon Kalapa', '', 'Cicalengka', 23, 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_quesioner`
--

CREATE TABLE `hasil_quesioner` (
  `id` int(11) NOT NULL,
  `id_masyarakat` int(11) NOT NULL,
  `id_quesioner` int(11) NOT NULL,
  `klasifikasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `phbs_answers`
--

CREATE TABLE `phbs_answers` (
  `answer_id` int(11) NOT NULL,
  `id_masyarakat` int(11) DEFAULT NULL,
  `jwb1` enum('Ya','Tidak') NOT NULL,
  `jwb2` int(11) NOT NULL,
  `jwb3` int(11) NOT NULL,
  `jwb4` enum('Ya','Tidak') NOT NULL,
  `jwb5` enum('Ya','Tidak') NOT NULL,
  `jwb6` enum('ASI saja','Susu formula','ASI dan Susu Formula') NOT NULL,
  `jwb7` int(11) NOT NULL,
  `jwb8` enum('Ya','Tidak') NOT NULL,
  `jwb9` int(11) NOT NULL,
  `jwb10` enum('Ya','Tidak') NOT NULL,
  `jwb11` enum('Ya','Tidak') NOT NULL,
  `jwb12` enum('Ya','Tidak') NOT NULL,
  `jwb13` enum('Ya','Tidak') NOT NULL,
  `jwb14` enum('Ya','Tidak') NOT NULL,
  `jwb15` enum('Ya','Tidak') NOT NULL,
  `jwb16` enum('Ya','Tidak') NOT NULL,
  `jwb17` enum('Ya','Tidak') NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `phbs_answers`
--

INSERT INTO `phbs_answers` (`answer_id`, `id_masyarakat`, `jwb1`, `jwb2`, `jwb3`, `jwb4`, `jwb5`, `jwb6`, `jwb7`, `jwb8`, `jwb9`, `jwb10`, `jwb11`, `jwb12`, `jwb13`, `jwb14`, `jwb15`, `jwb16`, `jwb17`, `created_at`) VALUES
(1, NULL, 'Ya', 1, 2, 'Ya', 'Ya', 'ASI saja', 1, 'Ya', 1, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '2024-10-15 07:31:45'),
(2, NULL, 'Ya', 2, 4, 'Ya', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '2024-10-15 07:41:06'),
(3, NULL, 'Ya', 2, 4, 'Ya', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '2024-10-15 07:41:23'),
(4, NULL, 'Ya', 2, 2, 'Ya', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '2024-10-15 07:45:32'),
(5, NULL, 'Ya', 1, 3, 'Ya', 'Ya', 'ASI saja', 1, 'Ya', 1, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '2024-10-15 07:59:09'),
(6, NULL, 'Ya', 2, 2, 'Ya', 'Ya', 'ASI saja', 3, 'Ya', 2, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '2024-10-15 08:22:17'),
(7, NULL, 'Ya', 1, 1, 'Ya', 'Ya', 'ASI saja', 1, 'Ya', 1, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '2024-10-15 08:32:40'),
(8, NULL, 'Ya', 2, 1, 'Ya', 'Tidak', 'ASI saja', 1, 'Ya', 6, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '2024-10-15 11:21:38'),
(9, NULL, 'Ya', 2, 2, 'Ya', 'Ya', 'ASI saja', 1, 'Ya', 1, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '2024-10-15 13:30:31'),
(10, NULL, 'Ya', 2, 2, 'Ya', 'Ya', 'ASI saja', 1, 'Ya', 1, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '2024-10-15 14:07:51'),
(11, NULL, 'Ya', 2, 2, 'Ya', 'Ya', 'ASI saja', 1, 'Ya', 1, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', '2024-10-15 14:08:25'),
(12, NULL, 'Ya', 2, 2, 'Ya', 'Ya', 'ASI saja', 1, 'Ya', 1, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', '2024-10-15 14:14:07'),
(13, NULL, 'Ya', 2, 2, 'Ya', 'Tidak', 'ASI saja', 1, 'Tidak', 2, 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '2024-10-16 20:26:26'),
(14, NULL, 'Ya', 2, 2, 'Ya', 'Tidak', 'ASI saja', 1, 'Tidak', 2, 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '2024-10-16 20:27:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `quesioner`
--

CREATE TABLE `quesioner` (
  `id` int(11) NOT NULL,
  `jwb1` int(11) NOT NULL,
  `jwb2` int(11) NOT NULL,
  `jwb3` int(11) NOT NULL,
  `jwb4` int(11) NOT NULL,
  `jwb5` int(11) NOT NULL,
  `jwb6` int(11) NOT NULL,
  `jwb7` int(11) NOT NULL,
  `jwb8` int(11) NOT NULL,
  `jwb9` int(11) NOT NULL,
  `jwb10` int(11) NOT NULL,
  `jwb11` int(11) NOT NULL,
  `jwb12` int(11) NOT NULL,
  `jwb13` int(11) NOT NULL,
  `jwb14` int(11) NOT NULL,
  `jwb15` int(11) NOT NULL,
  `jwb16` int(11) NOT NULL,
  `jwb17` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `quesioner`
--

INSERT INTO `quesioner` (`id`, `jwb1`, `jwb2`, `jwb3`, `jwb4`, `jwb5`, `jwb6`, `jwb7`, `jwb8`, `jwb9`, `jwb10`, `jwb11`, `jwb12`, `jwb13`, `jwb14`, `jwb15`, `jwb16`, `jwb17`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 1, 1, 0, 0, 0, 1, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 0, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_masyarakat_`
--
ALTER TABLE `data_masyarakat_`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `phbs_answers`
--
ALTER TABLE `phbs_answers`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `respondent_id` (`id_masyarakat`);

--
-- Indeks untuk tabel `quesioner`
--
ALTER TABLE `quesioner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_masyarakat_`
--
ALTER TABLE `data_masyarakat_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `phbs_answers`
--
ALTER TABLE `phbs_answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `quesioner`
--
ALTER TABLE `quesioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `phbs_answers`
--
ALTER TABLE `phbs_answers`
  ADD CONSTRAINT `phbs_answers_ibfk_1` FOREIGN KEY (`id_masyarakat`) REFERENCES `data_masyarakat_` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
