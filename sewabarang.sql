-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Mar 2021 pada 03.18
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewabarang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kode_barang` int(7) NOT NULL,
  `nama_barang` varchar(45) NOT NULL,
  `jenis_barang` char(5) NOT NULL,
  `harga_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `jenis_barang`, `harga_barang`) VALUES
(111, 'DSLR Canon EOS 90D', 'dslr', 100000),
(112, 'DSLR Canon EOS 700D', 'dslr', 150000),
(113, 'DSLR Canon EOS 6D Mark II', 'dslr', 150000),
(114, 'Flash Canon Speedlite 600EX-RT', 'acc', 130000),
(119, 'Flash Nikon Speedlight SB-910', 'acc', 180000),
(120, 'Camera Nikon D7500', 'dslr', 210000),
(121, 'Canon BG-E7 Battery Grip', 'acc', 90000),
(122, 'Canon BG-E11 Battery Grip (for Canon 5D III)', 'acc', 120000),
(123, 'DSLR Canon EOS 80D', 'dslr', 130000),
(124, 'Camera Nikon D5500', 'dslr', 140000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idpelanggan` int(7) NOT NULL,
  `username` varchar(25) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`idpelanggan`, `username`, `alamat`, `email`, `telepon`) VALUES
(1, 'anindi putri', 'surakarta', 'anindi@gmail.com', '085678909765'),
(2, 'anindi', 'surakarta', 'putri@gmail.com', '085679384712'),
(4, 'anin', 'semarang', 'anindipm@gmail.com', '085789046239'),
(5, 'rani', 'surakarta', 'ranirani@gmail.com', '081224657907'),
(9, 'putri', 'semarang', 'putrimaharani@gmail.com', '085667119352');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewaan`
--

CREATE TABLE `penyewaan` (
  `kode_barang` int(7) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_barang` varchar(35) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `lama_sewa` int(11) NOT NULL,
  `harga_sewa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyewaan`
--

INSERT INTO `penyewaan` (`kode_barang`, `nama`, `nama_barang`, `tgl_sewa`, `lama_sewa`, `harga_sewa`) VALUES
(111, 'anindi', 'DSLR Canon EOS 90D', '2020-08-03', 1, 100000),
(112, 'rani', 'DSLR Canon EOS 6D Mark II', '2020-08-19', 1, 150000),
(113, 'putri', 'Flash Canon Speedlite 600EX-RT', '2020-11-01', 1, 130000),
(116, 'maharani', 'DSLR Canon EOS 700D', '2021-03-23', 1, 300000),
(117, 'anin', 'DSLR Canon EOS 90D', '2021-03-25', 1, 100000),
(118, 'anin', 'Flash Canon Speedlite 600EX-RT', '2021-03-25', 1, 130000),
(119, 'anindi putri', 'Camera Nikon D5500', '2021-03-26', 1, 140000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `iduser` int(7) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register` datetime NOT NULL,
  `lastlogin` datetime NOT NULL,
  `type` char(1) NOT NULL,
  `cek` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`iduser`, `username`, `password`, `register`, `lastlogin`, `type`, `cek`) VALUES
(2, 'rania', 'rani', '2020-08-13 17:42:23', '2021-03-24 20:03:09', 'A', '1'),
(3, 'putri', 'maharani', '2020-08-13 17:43:20', '2020-08-13 17:44:58', 'A', '1'),
(4, 'anin', 'anindi', '2020-08-14 10:55:20', '2020-08-18 12:00:41', 'A', '1'),
(5, 'anin', 'anindiputri', '2020-08-14 11:00:32', '2020-08-26 17:51:35', 'A', '1'),
(6, 'anindi', 'anin', '2020-08-14 11:03:18', '0000-00-00 00:00:00', 'A', '0'),
(7, 'putri', 'anin', '2020-08-14 11:15:24', '0000-00-00 00:00:00', 'A', '0'),
(11, 'admin', 'rania', '2021-03-23 21:31:01', '2021-03-25 15:00:23', 'A', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idpelanggan`);

--
-- Indeks untuk tabel `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `kode_barang` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idpelanggan` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `penyewaan`
--
ALTER TABLE `penyewaan`
  MODIFY `kode_barang` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
