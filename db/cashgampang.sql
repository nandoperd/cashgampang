-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2022 pada 11.20
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cashgampang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl-deposito`
--

CREATE TABLE `tbl-deposito` (
  `id_deposit` int(11) NOT NULL,
  `nama_deposit` varchar(255) NOT NULL,
  `alamat_deposit` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `jumlah_t` varchar(255) DEFAULT NULL,
  `tenor_t` varchar(255) DEFAULT NULL,
  `sukubunga` char(255) DEFAULT NULL,
  `sukubunga_t` varchar(255) DEFAULT NULL,
  `bunga` varchar(255) DEFAULT NULL,
  `tenor` char(255) DEFAULT NULL,
  `bayar_awal` date DEFAULT NULL,
  `no_urut` char(255) DEFAULT NULL,
  `no_surat` varchar(255) DEFAULT NULL,
  `bayar_ambil` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl-deposito`
--

INSERT INTO `tbl-deposito` (`id_deposit`, `nama_deposit`, `alamat_deposit`, `jumlah`, `jumlah_t`, `tenor_t`, `sukubunga`, `sukubunga_t`, `bunga`, `tenor`, `bayar_awal`, `no_urut`, `no_surat`, `bayar_ambil`) VALUES
(1, 'HENDRA JINGGA', 'JL INDUSTRI GANG BAHAGIA NO.26 DESA TEGAL S. MANDALA I ', '1.000.000', 'Satu Juta', 'satu', '10', 'Sepuluh', '8.300', '1', '2022-12-07', '000001', '001/DB-CG/XII/22', '2023-01-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl-guru`
--

CREATE TABLE `tbl-guru` (
  `id_guru` int(11) NOT NULL,
  `kode_guru` int(11) DEFAULT NULL,
  `nama_guru` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `foto_guru` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl-guru`
--

INSERT INTO `tbl-guru` (`id_guru`, `kode_guru`, `nama_guru`, `password`, `foto_guru`) VALUES
(21, 1, 'Arul', '123', '1670216391_4d1389f440fc5dfd8a6a.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl-jadwal`
--

CREATE TABLE `tbl-jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_tp` int(4) DEFAULT NULL,
  `id_kelas` int(2) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `id_rombel` int(11) DEFAULT NULL,
  `hari` varchar(255) DEFAULT NULL,
  `waktu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl-jadwal`
--

INSERT INTO `tbl-jadwal` (`id_jadwal`, `id_tp`, `id_kelas`, `id_mapel`, `id_guru`, `id_rombel`, `hari`, `waktu`) VALUES
(24, 9, 24, 63, 2, 4, 'Senin', '07:00-08.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl-kelas`
--

CREATE TABLE `tbl-kelas` (
  `id_kelas` int(2) NOT NULL,
  `kelas` varchar(25) DEFAULT NULL,
  `wali_kelas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl-kss`
--

CREATE TABLE `tbl-kss` (
  `id_kss` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_jadwal` int(11) DEFAULT NULL,
  `id_tp` int(11) DEFAULT NULL,
  `h1` int(1) DEFAULT 0,
  `h2` int(1) DEFAULT 0,
  `h3` int(1) DEFAULT 0,
  `h4` int(1) DEFAULT 0,
  `h5` int(1) DEFAULT 0,
  `h6` int(1) DEFAULT 0,
  `h7` int(1) DEFAULT 0,
  `h8` int(1) DEFAULT 0,
  `h9` int(1) DEFAULT 0,
  `h10` int(1) DEFAULT 0,
  `h11` int(1) DEFAULT 0,
  `h12` int(1) DEFAULT 0,
  `h13` int(1) DEFAULT 0,
  `h14` int(1) DEFAULT 0,
  `h15` int(1) DEFAULT 0,
  `h16` int(1) DEFAULT 0,
  `h17` int(1) DEFAULT 0,
  `h18` int(1) DEFAULT 0,
  `h19` int(1) DEFAULT 0,
  `h20` int(1) DEFAULT 0,
  `h21` int(1) DEFAULT 0,
  `h22` int(1) DEFAULT 0,
  `h23` int(1) DEFAULT 0,
  `h24` int(1) DEFAULT 0,
  `h25` int(1) DEFAULT 0,
  `h26` int(1) DEFAULT 0,
  `h27` int(1) DEFAULT 0,
  `h28` int(1) DEFAULT 0,
  `h29` int(1) DEFAULT 0,
  `h30` int(1) DEFAULT 0,
  `h31` int(1) DEFAULT 0,
  `nilai_tugas1` int(3) DEFAULT 0,
  `nilai_tugas2` int(3) DEFAULT 0,
  `nilai_tugas3` int(3) DEFAULT 0,
  `nilai_pts` int(3) DEFAULT 0,
  `nilai_pas` int(3) DEFAULT 0,
  `nilai_akhir` int(3) DEFAULT 0,
  `nilai_huruf` varchar(1) DEFAULT '-',
  `materi_1` varchar(255) DEFAULT NULL,
  `materi_2` varchar(255) DEFAULT NULL,
  `materi_3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl-kss`
--

INSERT INTO `tbl-kss` (`id_kss`, `id_siswa`, `id_jadwal`, `id_tp`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`, `h8`, `h9`, `h10`, `h11`, `h12`, `h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`, `h24`, `h25`, `h26`, `h27`, `h28`, `h29`, `h30`, `h31`, `nilai_tugas1`, `nilai_tugas2`, `nilai_tugas3`, `nilai_pts`, `nilai_pas`, `nilai_akhir`, `nilai_huruf`, `materi_1`, `materi_2`, `materi_3`) VALUES
(37, 4, 24, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '-', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl-mapel`
--

CREATE TABLE `tbl-mapel` (
  `id_mapel` int(11) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `kode_mapel` varchar(11) DEFAULT NULL,
  `nama_mapel` varchar(255) DEFAULT NULL,
  `kkm` int(3) DEFAULT NULL,
  `smt` varchar(25) DEFAULT NULL,
  `nama_guru` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl-mapel`
--

INSERT INTO `tbl-mapel` (`id_mapel`, `id_kelas`, `kode_mapel`, `nama_mapel`, `kkm`, `smt`, `nama_guru`) VALUES
(63, 24, 'KMD71', 'Kemuhammadiyahan 7', 75, 'Ganjil', 'Drs. Sarfian Effendy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl-rombel`
--

CREATE TABLE `tbl-rombel` (
  `id_rombel` int(11) NOT NULL,
  `nama_rombel` varchar(50) DEFAULT NULL,
  `id_kelas` int(2) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `tahun_angkatan` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl-rombel`
--

INSERT INTO `tbl-rombel` (`id_rombel`, `nama_rombel`, `id_kelas`, `id_guru`, `tahun_angkatan`) VALUES
(1, 'Kelas 7.2', 30, 4, 2022),
(4, 'Kelas 7.1', 24, 13, 2022),
(5, 'Kelas 7.3', 32, 16, 2022),
(6, 'Kelas 7.4', 33, 14, 2022);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl-siswa`
--

CREATE TABLE `tbl-siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` int(11) DEFAULT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_kelas` int(2) DEFAULT NULL,
  `foto_siswa` varchar(255) DEFAULT NULL,
  `id_rombel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl-siswa`
--

INSERT INTO `tbl-siswa` (`id_siswa`, `nis`, `nama_siswa`, `password`, `id_kelas`, `foto_siswa`, `id_rombel`) VALUES
(3, 222307001, 'ABDUL \'AZIZ ZULKARNAIN', 'abdul', 24, '1661005190_12b08c0e506e0f0c0645.png', 4),
(4, 222307002, 'ABRA FARABI', 'abra', 24, '1661005172_9408c9e9039d9d02c47f.png', 4),
(5, 222307029, 'ABRAR SADAD HASAN', 'abrar', 30, '1661005250_41bbced161495f9f28c1.png', 1),
(6, 222307030, 'AFFAN OKTA PRATAMA', 'affan', 30, '1661005272_ec62dbac28388172beb5.png', 1),
(7, 222307059, 'AISHA CALISTA PERMATA', 'aisha', 32, '1661005309_54ce8bbb558a1ad97431.png', 5),
(8, 222307060, 'ALANNA NAFISA FIRZANNAH WAIFA', 'alan', 32, '1661005336_dd2e5dee8f1e0b212a83.png', 5),
(9, 222307093, 'ADELIA ZAHRAH NASUTION', 'adel', 33, '1661005373_81d8c853171177309b87.png', 6),
(10, 222307094, 'ALIYA REGGINA ALICIA', 'ali', 33, '1661005394_76f4c0133a063cc48225.png', 6),
(11, 212207001, 'AHMAD HAFIZH', 'ahmad', 25, '1661009978_562f09db34a19e069174.png', 7),
(12, 212207156, 'AHMAD AFIF NURULLAH', 'ahmad', 31, '1661010029_772d473b1f3196290510.png', 8),
(13, 212207119, 'AFDHILLA GHAISANI SHOOFIYA', 'afdhil', 34, '1661010071_27948e33cc0ecccb0938.png', 9),
(14, 212207060, 'AIDILLA ADHA MENTARI ANINDRI', 'aidil', 35, '1661010104_3ca98134c7f89e8c02bd.png', 10),
(15, 212207089, 'AILSA LAILANI NOVITA', 'ailsa', 36, '1661010128_f4d823d7d06d90bcc602.png', 11),
(16, 202107001, 'ABDULLAH ABID DZAKI', 'abdul', 1, '1661010164_941fccdd9aebf81f16d2.png', 12),
(17, 202107033, 'ABYAN GHALY SATRIO', 'abyan', 37, '1661010192_cf09fd4713a33565a157.png', 13),
(18, 202107066, 'AISYAH AZALIA MAULANA PUTRI', 'aisy', 38, '1661010219_ceec0f8371e4d9774775.png', 14),
(19, 202107100, 'AFIFAH ZAHRA RAMADHANI', 'afifah', 39, '1661010252_33692484460377823b83.png', 15),
(21, 222307017, 'MUHAMMAD IKHLAS BHAGASKARA', 'bagas', 24, '1668136045_2b5b4572f19ff311a7f6.png', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl-tp`
--

CREATE TABLE `tbl-tp` (
  `id_tp` int(4) NOT NULL,
  `tp` varchar(25) DEFAULT NULL,
  `semester` varchar(10) DEFAULT NULL,
  `status` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl-tp`
--

INSERT INTO `tbl-tp` (`id_tp`, `tp`, `semester`, `status`) VALUES
(9, '2022/2023', 'Ganjil', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl-user`
--

CREATE TABLE `tbl-user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl-user`
--

INSERT INTO `tbl-user` (`id_user`, `nama_user`, `username`, `password`, `foto`) VALUES
(8, 'Aulia', 'aulia', 'admin', '1670220874_abf6b8c4977303db673c.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl-deposito`
--
ALTER TABLE `tbl-deposito`
  ADD PRIMARY KEY (`id_deposit`);

--
-- Indeks untuk tabel `tbl-guru`
--
ALTER TABLE `tbl-guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `tbl-jadwal`
--
ALTER TABLE `tbl-jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `tbl-kelas`
--
ALTER TABLE `tbl-kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tbl-kss`
--
ALTER TABLE `tbl-kss`
  ADD PRIMARY KEY (`id_kss`);

--
-- Indeks untuk tabel `tbl-mapel`
--
ALTER TABLE `tbl-mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `tbl-rombel`
--
ALTER TABLE `tbl-rombel`
  ADD PRIMARY KEY (`id_rombel`);

--
-- Indeks untuk tabel `tbl-siswa`
--
ALTER TABLE `tbl-siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tbl-tp`
--
ALTER TABLE `tbl-tp`
  ADD PRIMARY KEY (`id_tp`);

--
-- Indeks untuk tabel `tbl-user`
--
ALTER TABLE `tbl-user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl-deposito`
--
ALTER TABLE `tbl-deposito`
  MODIFY `id_deposit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl-guru`
--
ALTER TABLE `tbl-guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbl-jadwal`
--
ALTER TABLE `tbl-jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tbl-kelas`
--
ALTER TABLE `tbl-kelas`
  MODIFY `id_kelas` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `tbl-kss`
--
ALTER TABLE `tbl-kss`
  MODIFY `id_kss` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `tbl-mapel`
--
ALTER TABLE `tbl-mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `tbl-rombel`
--
ALTER TABLE `tbl-rombel`
  MODIFY `id_rombel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl-siswa`
--
ALTER TABLE `tbl-siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbl-tp`
--
ALTER TABLE `tbl-tp`
  MODIFY `id_tp` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl-user`
--
ALTER TABLE `tbl-user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
