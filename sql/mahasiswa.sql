-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2022 pada 04.58
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelamin` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `kelamin`, `email`, `agama`, `alamat`, `foto`) VALUES
(2, 'admin', 'admin1', '', '', '', '', '', ''),
(897, 'nugroho', 'nugroho29', 'Nugroho Izza', 'Laki-laki', 'nugrohoizzan29@gmail.com', 'Islam', 'Purbalingga', 'Nugroho Izza Nurcahyo.jpg'),
(2314, 'izzan', 'izzan29', 'Nugroho Izza', 'Laki-laki', 'nugrohoizzan29@gmail.com', 'Islam', 'Purwokerto', ''),
(3457, 'nugrohoizzan', 'nugroho21', 'Nugroho Izza', 'Laki-laki', 'nugrohoizza29@gmail.com', 'Islam', 'Purbalingga', 'WhatsApp Image 2022-07-05 at 13.01.28.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kehadiran`
--

CREATE TABLE `kehadiran` (
  `hadir` varchar(20) NOT NULL,
  `hari` varchar(30) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `kode` int(11) NOT NULL,
  `mata_kuliah` varchar(30) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `sks` int(11) NOT NULL,
  `tahun` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kehadiran`
--

INSERT INTO `kehadiran` (`hadir`, `hari`, `jam_mulai`, `jam_selesai`, `kode`, `mata_kuliah`, `kelas`, `semester`, `sks`, `tahun`) VALUES
('Hadir', 'Senin', '18:08:00', '19:09:00', 6781, 'Riset Operasi', 'IF-A', 'Ganjil', 2, '2017/2018'),
('Hadir', 'Senin', '19:20:00', '20:20:00', 6788, 'Riset Operasi', 'IF-A', 'Ganjil', 2, '2017/2018');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelamin` varchar(20) NOT NULL,
  `lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `kelamin`, `lahir`, `alamat`, `agama`, `sekolah`, `foto`) VALUES
(123152, 'Nugroho Izza', 'Laki-laki', '2022-11-25', 'Purbalingga', 'Islam', 'SMA N 5 Purwokerto', ''),
(123210, 'Ahmad Raihan ', 'Laki-laki', '2022-11-25', 'Kulonprogo', 'Islam', 'SMA N 1 Pengasih', 'WhatsApp Image 2022-07-05 at 13.01.28.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mengajar`
--

CREATE TABLE `mengajar` (
  `kode` int(11) NOT NULL,
  `mata_kuliah` varchar(30) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `semester` varchar(11) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `sks` int(11) NOT NULL,
  `hari` varchar(30) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `ruang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mengajar`
--

INSERT INTO `mengajar` (`kode`, `mata_kuliah`, `tahun`, `semester`, `kelas`, `sks`, `hari`, `jam_mulai`, `jam_selesai`, `ruang`) VALUES
(2314, 'Riset Operasi', '2020/2021', 'Genap', 'IF-A', 2, 'rabu', '19:49:00', '20:51:00', 'PATT II-3B'),
(3567, 'Sistem Digital', '2019/2020', 'Ganjil', 'IF-F', 2, 'Kamis', '19:53:00', '20:54:00', 'PATT II-3B'),
(4545, 'Struktur Data', '2021/2022', 'Ganjil', 'IF-A', 2, 'Senin', '20:43:00', '21:44:00', 'PATT II-3B'),
(5439, 'Geoinformatika', '2017/2018', 'Genap', 'IF-A', 2, 'rabu', '17:06:00', '18:06:00', 'PATT II-3B'),
(5784, 'Geoinformatika', '2017/2018', 'Ganjil', '', 0, 'Senin', '00:00:00', '00:00:00', ''),
(6781, 'Pemrograman Web', '2021/2022', 'Ganjil', 'IF-A', 2, 'Kamis', '20:45:00', '20:46:00', 'PATT II-3B'),
(7980, 'Struktur Data', '2019/2020', 'Genap', 'IF-A', 2, 'Selasa', '18:20:00', '19:20:00', 'PATT II-3B'),
(8907, 'Riset Operasi', '2017/2018', 'Ganjil', 'IF-A', 2, 'Senin', '14:30:00', '16:30:00', 'PATT II-3B');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `mengajar`
--
ALTER TABLE `mengajar`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3458;

--
-- AUTO_INCREMENT untuk tabel `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6789;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `nim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123282;

--
-- AUTO_INCREMENT untuk tabel `mengajar`
--
ALTER TABLE `mengajar`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8908;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
