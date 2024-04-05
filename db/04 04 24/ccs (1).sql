-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Apr 2024 pada 09.44
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `nama_kategori`) VALUES
(15, 'Pembatalan - Pembatalan Transaksi(Current Date, Backdate, Adendum Kredit dan Ecollector)'),
(16, 'Ecollector - Ecollector Kas Mobile'),
(17, 'Backdate - Backdate Transaksi'),
(18, 'Proses - Proses Ulang'),
(20, 'Transaksi - Koreksi Transaksi'),
(21, 'Kredit - Master Rekening Kredit'),
(22, 'Kredit - Data Kredit'),
(23, 'Kredit - Transaksi Kredit'),
(24, 'Kredit - Bunga Kredit'),
(25, 'Kredit - Agunan'),
(26, 'Kredit - Sistem Angsuran'),
(27, 'Kredit - Kolektibilitas'),
(28, 'Kredit - Jadwal Angsuran'),
(29, 'Kredit - Koreksi PYAD Kredit'),
(30, 'Kredit - PPAP Kredit'),
(31, 'Kredit - Koreksi PYD Kredit'),
(32, 'Kredit - Aktivasi Rekening Kredit'),
(33, 'Kredit - Tarik Nominatif'),
(34, 'API - TTF'),
(36, 'C6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(50) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`, `nama_pegawai`) VALUES
(1, 'HELPDESK 1', 'Ajeng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `klien`
--

CREATE TABLE `klien` (
  `id` int(11) NOT NULL,
  `no_urut` int(11) NOT NULL,
  `nama_klien` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `klien`
--

INSERT INTO `klien` (`id`, `no_urut`, `nama_klien`) VALUES
(9, 1, 'PT BPR BKK Banjarharjo(Perseroda)'),
(10, 2, 'PT BPR BKK Karangmalang(Perseroda)'),
(11, 3, 'PT BPR BKK Purwokerto(Perseroda)'),
(12, 6, 'PT BPR BKK Kab. Pekalongan(Perseroda)'),
(13, 7, 'PT BPR BKK Kebumen(Perseroda)'),
(14, 8, 'PT BPR BKK Arta Utama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelaporan`
--

CREATE TABLE `pelaporan` (
  `id` int(11) NOT NULL,
  `no_tiket` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `waktu_pelaporan` date NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'proses',
  `status_ccs` varchar(20) DEFAULT 'ADDED',
  `priority` varchar(30) DEFAULT NULL,
  `perihal` text NOT NULL,
  `file` varchar(100) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `handle_by` varchar(100) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `waktu_approve` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelaporan`
--

INSERT INTO `pelaporan` (`id`, `no_tiket`, `user_id`, `kategori`, `waktu_pelaporan`, `status`, `status_ccs`, `priority`, `perihal`, `file`, `nama`, `handle_by`, `keterangan`, `waktu_approve`) VALUES
(56, 'TIC2024040001', 20, 'Backdate - Backdate Transaksi', '2024-04-02', 'Solved by HD3', 'FINISH', 'Medium', '<p>Permintaan Backdate</p>', 'CCS_Customer_Care_System.xlsx', 'PT BPR BKK Banjarharjo(Perseroda)', 'Eva', '', '2024-04-02'),
(57, 'TIC2024040002', 28, 'Backdate - Backdate Transaksi', '2024-04-02', 'Solved by HD4', 'FINISH', 'Medium', '<p>Permintaan Backadate</p>', 'CCS_Customer_Care_System.pdf', 'PT BPR BKK Karangmalang(Perseroda)', 'Nita', '', '2024-04-04'),
(58, 'TIC2024040003', 33, 'Backdate - Backdate Transaksi', '2024-04-02', 'Solved by HD4', 'FINISH', 'Medium', '<p>Permintaan Backdate</p>', 'CCS_Customer_Care_System1.xlsx', 'PT BPR BKK Kab. Pekalongan(Perseroda)', 'Luthfi', '', '2024-04-03'),
(59, 'TIC2024040004', 33, 'Kredit - Agunan', '2024-04-02', 'Solved by HD4', 'FINISH', 'Medium', '<p>Permintaan perbaikan data agunan</p>', 'ELS-14-Maret-2024.pdf', 'PT BPR BKK Kab. Pekalongan(Perseroda)', 'Nita', '', '2024-04-03'),
(60, 'TIC2024040005', 33, 'Pembatalan - Pembatalan Transaksi(Current Date, Backdate, Adendum Kredit dan Ecollector)', '2024-04-02', 'Solved by HD4', 'FINISH', 'Medium', '<p>Pembatalan transaksi current date</p>', '1702018237376.png', 'PT BPR BKK Kab. Pekalongan(Perseroda)', 'Nita', '', '2024-04-03'),
(61, 'TIC2024040006', 28, 'Kredit - PPAP Kredit', '2024-04-03', 'Solved by HD4', 'FINISH', 'Medium', '<p>Perbaikan PPAP Kredit</p>', '17020182373761.png', 'PT BPR BKK Karangmalang(Perseroda)', 'Luthfi', '', '2024-04-04'),
(62, 'TIC2024040007', 20, 'Pembatalan - Pembatalan Transaksi(Current Date, Backdate, Adendum Kredit dan Ecollector)', '2024-04-03', 'Forward To Helpdesk 3', 'HANDLE', 'Medium', '<p>Permintaan pembatalan transaksi backdate</p>', 'CCS_Customer_Care_System2.xlsx', 'PT BPR BKK Banjarharjo(Perseroda)', NULL, NULL, NULL),
(63, 'TIC2024040008', 28, 'Kredit - Agunan', '2024-04-03', 'Forward To Helpdesk 4', 'HANDLE', 'Medium', '<p>Perbaikan nilai wajar pada agunan</p>', '17020182373762.png', 'PT BPR BKK Karangmalang(Perseroda)', NULL, NULL, NULL),
(64, 'TIC2024040009', 20, 'Kredit - PPAP Kredit', '2024-04-03', 'Solved by HD3', 'FINISH', 'Medium', '<p>Perbaikan PPAP Kredit</p>', 'CCS_Customer_Care_System_(4).xlsx', 'PT BPR BKK Banjarharjo(Perseroda)', 'Ina', '', '2024-04-04'),
(65, 'TIC2024040010', 33, 'Kredit - PPAP Kredit', '2024-04-04', 'Forward To Helpdesk 4', 'HANDLE', 'Medium', '<p>Permintaan PPAP Kredit</p>', 'Screenshot_2024-04-02_124603.png', 'PT BPR BKK Kab. Pekalongan(Perseroda)', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_temp`
--

CREATE TABLE `tiket_temp` (
  `id_temp` int(11) NOT NULL,
  `no_tiket` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `divisi` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `active` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `divisi`, `nama`, `username`, `password`, `role`, `active`) VALUES
(3, 'Supervisor', 'Supervisor PT MSO Purwokerto', 'supervisor', '5f4dcc3b5aa765d61d8327deb882cf99', 3, 'Y'),
(4, 'Helpdesk', 'Ajeng', 'ajeng', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'Y'),
(8, 'Support', 'Support PT MSO', 'support', '5f4dcc3b5aa765d61d8327deb882cf99', 5, 'Y'),
(9, 'DBS', 'DBS PT MSO', 'dbs', '5f4dcc3b5aa765d61d8327deb882cf99', 6, 'N'),
(10, 'CRD', 'CRD PT MSO', 'crd', '5f4dcc3b5aa765d61d8327deb882cf99', 7, 'N'),
(11, 'Development', 'Development PT MSO', 'development', '5f4dcc3b5aa765d61d8327deb882cf99', 8, 'Y'),
(20, 'Klien', 'PT BPR BKK Banjarharjo(Perseroda)', 'banjarharjo', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 'Y'),
(23, 'Helpdesk', 'Ayu', 'ayu', '5f4dcc3b5aa765d61d8327deb882cf99', 9, 'Y'),
(24, 'Impelementator', 'implementator PT MSO', 'implementator', '5f4dcc3b5aa765d61d8327deb882cf99', 4, 'Y'),
(25, 'Helpdesk', 'Eva', 'eva', '5f4dcc3b5aa765d61d8327deb882cf99', 10, 'Y'),
(26, 'Helpdesk', 'khabibah', 'Khabibah', '5f4dcc3b5aa765d61d8327deb882cf99', 11, 'Y'),
(27, 'Helpdesk', 'novi', 'novi', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'Y'),
(28, 'Klien', 'PT BPR BKK Karangmalang(Perseroda)', 'karangmalang', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 'Y'),
(29, 'Helpdesk', 'Chintya', 'chintya', '5f4dcc3b5aa765d61d8327deb882cf99', 9, 'Y'),
(30, 'Helpdesk', 'Ina', 'ina', '5f4dcc3b5aa765d61d8327deb882cf99', 10, 'Y'),
(31, 'Helpdesk', 'Luthfi', 'luthfi', '5f4dcc3b5aa765d61d8327deb882cf99', 11, 'Y'),
(32, 'Helpdesk', 'Nita', 'nita', '5f4dcc3b5aa765d61d8327deb882cf99', 11, 'Y'),
(33, 'Klien', 'PT BPR BKK Kab. Pekalongan(Perseroda)', 'pekalongan', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 'Y'),
(34, 'Helpdesk', 'shohi', 'shohi', '5f4dcc3b5aa765d61d8327deb882cf99', 11, 'Y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indeks untuk tabel `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelaporan`
--
ALTER TABLE `pelaporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tiket_temp`
--
ALTER TABLE `tiket_temp`
  ADD PRIMARY KEY (`id_temp`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `klien`
--
ALTER TABLE `klien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pelaporan`
--
ALTER TABLE `pelaporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `tiket_temp`
--
ALTER TABLE `tiket_temp`
  MODIFY `id_temp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
