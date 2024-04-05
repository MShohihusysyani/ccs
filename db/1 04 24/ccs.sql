-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Apr 2024 pada 10.59
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
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id_kategori`, `nama_kategori`) VALUES
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
(37, 'TIC2024030001', 28, 'Kredit - Agunan', '2024-03-28', 'Solved by HD4', 'FINISH', 'Medium', 'Permintaan perbaikan data agunan                                                            ', 'Screenshot_(5).png', 'PT BPR BKK Karangmalang(Perseroda)', 'Khabibah', '', '2024-03-30'),
(38, 'TIC2024030002', 20, 'Pembatalan - Pembatalan Transaksi(Current Date, Backdate, Adendum Kredit dan Ecollector)', '2024-03-28', 'Solved by HD3', 'FINISH', 'Medium', 'Permintaan Hapus Transaksi Andendum Kredit                                                            ', 'Pertemuan_13.pdf', 'PT BPR BKK Banjarharjo(Perseroda)', 'Ina', '', '2024-03-28'),
(39, 'TIC2024030003', 20, 'Kredit - PPAP Kredit', '2024-03-30', 'Solved by HD3', 'FINISH', 'Medium', 'Perbaikan PPAP Kredit                                                            ', 'CCS_Customer_Care_System_(1).pdf', 'PT BPR BKK Banjarharjo(Perseroda)', 'Eva', '', '2024-03-30'),
(40, 'TIC2024030004', 28, 'Kredit - Agunan', '2024-03-30', 'Solved by HD4', 'FINISH', 'Medium', 'Permintaan Perbaikan nilai wajar pada data agunan                                                            ', 'CCS_Customer_Care_System.pdf', 'PT BPR BKK Karangmalang(Perseroda)', 'Nita', '', '2024-03-30'),
(41, 'TIC2024030005', 28, 'Kredit - PPAP Kredit', '2024-03-30', 'Solved by HD1', 'FINISH', 'Low', 'Perbaikan PPAP Kredit                                                            ', 'CCS_Customer_Care_System1.pdf', 'PT BPR BKK Karangmalang(Perseroda)', 'Novi', '', '2024-03-30'),
(42, 'TIC2024030006', 33, 'Proses - Proses Ulang', '2024-03-30', 'Solved by HD1', 'FINISH', 'High', 'Permintaan proses ulang PPAP kredit                                                            ', 'CCS_Customer_Care_System.xlsx', 'PT BPR BKK Kab. Pekalongan(Perseroda)', 'Ajeng', '', '2024-04-01'),
(44, 'TIC2024040007', 33, 'Backdate - Backdate Transaksi', '2024-04-01', 'Forward To Helpdesk 4', 'HANDLE', 'Low', 'Permintaan Backdate                                \r\n                            ', 'CCS_Customer_Care_System1.xlsx', 'PT BPR BKK Kab. Pekalongan(Perseroda)', NULL, NULL, NULL),
(46, 'TIC2024040008', 33, 'Kredit - PPAP Kredit', '2024-04-01', 'Forward To Helpdesk 4', 'HANDLE', 'Low', '<p>Perbaikan PPAP Kredit</p>', 'Screenshot_2024-02-26_003531.png', 'PT BPR BKK Kab. Pekalongan(Perseroda)', NULL, NULL, NULL),
(47, 'TIC2024040009', 20, 'Kredit - Agunan', '2024-04-01', 'proses', 'ADDED', 'Medium', '<p>Permintaan Perbaikan nilai wajar pada data agunan</p>', 'CCS_Customer_Care_System_(1).xlsx', 'PT BPR BKK Banjarharjo(Perseroda)', NULL, NULL, NULL),
(48, 'TIC2024040010', 20, 'Backdate - Backdate Transaksi', '2024-04-01', 'proses', 'ADDED', 'Medium', '<p>Permintaan pembatalan transaksi bacdate</p>', 'Screenshot_(5)1.png', 'PT BPR BKK Banjarharjo(Perseroda)', NULL, NULL, NULL);

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
(3, 'Supervisor', 'PT MSO Purwokerto', 'supervisor', '5f4dcc3b5aa765d61d8327deb882cf99', 3, 'Y'),
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
(33, 'Klien', 'PT BPR BKK Kab. Pekalongan(Perseroda)', 'pekalongan', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 'Y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_kategori`);

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
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `tiket_temp`
--
ALTER TABLE `tiket_temp`
  MODIFY `id_temp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
