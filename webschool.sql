-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2022 pada 09.02
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webschool`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `email`, `username`, `password`) VALUES
(3, 'elya@gmail.com', 'elya', 'elya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int(11) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jk_dosen` varchar(10) NOT NULL,
  `alamat_dosen` varchar(500) NOT NULL,
  `foto_dosen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nidn`, `nama_dosen`, `email`, `jk_dosen`, `alamat_dosen`, `foto_dosen`) VALUES
(1, '12345', 'Erik', 'erik@gmail.com', 'Laki-laki', 'Kediri', 'erik.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwalkuliah`
--

CREATE TABLE `tb_jadwalkuliah` (
  `id_jk` int(11) NOT NULL,
  `hari_jk` varchar(255) NOT NULL,
  `jamke_jk` int(255) NOT NULL,
  `kelas_jk` varchar(255) NOT NULL,
  `pengampu_jk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_matkul`
--

CREATE TABLE `tb_matkul` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(255) NOT NULL,
  `kode_matkul` int(255) NOT NULL,
  `sks_matkul` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_matkul`
--

INSERT INTO `tb_matkul` (`id_matkul`, `nama_matkul`, `kode_matkul`, `sks_matkul`) VALUES
(1, 'Pemrograman Web', 1001, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mhs`
--

CREATE TABLE `tb_mhs` (
  `id_mhs` int(11) NOT NULL,
  `nim_mhs` varchar(255) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `email_mhs` varchar(255) NOT NULL,
  `tgl_mhs` date NOT NULL,
  `agama_mhs` varchar(255) NOT NULL,
  `kelas_mhs` varchar(255) NOT NULL,
  `alamat_mhs` varchar(1000) NOT NULL,
  `foto_mhs` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mhs`
--

INSERT INTO `tb_mhs` (`id_mhs`, `nim_mhs`, `nama_mhs`, `email_mhs`, `tgl_mhs`, `agama_mhs`, `kelas_mhs`, `alamat_mhs`, `foto_mhs`) VALUES
(1, 'V3920020', 'Elya', 'el@gmail.com', '2021-12-07', 'Islam', 'A', 'Madiun', 'gambar1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `tb_jadwalkuliah`
--
ALTER TABLE `tb_jadwalkuliah`
  ADD PRIMARY KEY (`id_jk`);

--
-- Indeks untuk tabel `tb_matkul`
--
ALTER TABLE `tb_matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indeks untuk tabel `tb_mhs`
--
ALTER TABLE `tb_mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
