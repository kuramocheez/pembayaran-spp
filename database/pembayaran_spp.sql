-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2022 pada 13.22
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pembayaran_spp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_spp`
--

CREATE TABLE `kategori_spp` (
  `id_kategori_spp` int(11) NOT NULL,
  `kategori_spp` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_spp`
--

INSERT INTO `kategori_spp` (`id_kategori_spp`, `kategori_spp`, `nominal`) VALUES
(1, 'Keluarga Ekonomi Mampu', 100000),
(2, 'Keluarga Ekonomi Kurang', 10000),
(3, 'Keluarga Ekonomi Menengah', 50000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(20) NOT NULL,
  `namaSiswa` varchar(128) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `nomorTelpon` varchar(15) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `id_kategori_spp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `namaSiswa`, `jenisKelamin`, `nomorTelpon`, `kelas`, `id_kategori_spp`) VALUES
('202001001', 'Aisyah Putri', 'Perempuan', '081286616893', 'X A', 1),
('202001002', 'Aksa kencana', 'Laki-Laki', '083845183975', 'X A', 1),
('202001003', 'Alea', 'Perempuan', '083122883411', 'X A', 1),
('202001004', 'Alif fatharani', 'Laki-Laki', '0852 8247 0182', 'X A', 1),
('202001005', 'Alifya Dinda', 'Perempuan', '082273608018', 'X A', 1),
('202001006', 'Amanda Yuliana', 'Perempuan', '0821 4323 3069', 'X A', 1),
('202001007', 'Amari Cypher', 'Laki-Laki', '081284123448', 'X A', 1),
('202001008', 'Anca R', 'Laki-Laki', '082193947112', 'X A', 1),
('202001009', 'Andi suhriani', 'Perempuan', '0823 4712 6017', 'X A', 1),
('202001010', 'Angga Pradipta', 'Laki-Laki', '089694860041', 'X A', 1),
('202001011', 'Anggi Nur', 'Perempuan', '087820017410', 'X A', 1),
('202001012', 'Anissa Putri', 'Perempuan', '082190730146', 'X A', 1),
('202001013', 'Annabela', 'Perempuan', '085233739104', 'X A', 1),
('202001014', 'Anto Marangi', 'Laki-Laki', '081366213021', 'X A', 1),
('202001015', 'Arif Setiawan', 'Laki-Laki', '081808111506', 'X B', 2),
('202001016', 'Asmir Bahar', 'Laki-Laki', '083127250828', 'X B', 2),
('202001017', 'Ayu lestari', 'Perempuan', '085233769378', 'X B', 2),
('202001018', 'Baharudin', 'Laki-Laki', '083133342717', 'X B', 2),
('202001019', 'Balqis', 'Perempuan', '083850344133', 'X B', 2),
('202001020', 'Bayu dwi', 'Laki-Laki', '082175988026', 'X B', 2),
('202001021', 'Brian Omen', 'Laki-Laki', '021- 56187222', 'X B', 2),
('202001022', 'Broto Prawirodirjo', 'Laki-Laki', '082322225678', 'X B', 2),
('202001023', 'Buyung', 'Laki-Laki', '081998405357', 'X B', 2),
('202001024', 'Citra Aulia', 'Perempuan', '081808111506', 'X B', 2),
('202001025', 'Clara Killjoy', 'Perempuan', '021-6888367', 'X B', 2),
('202001026', 'Dandi Moch', 'Laki-Laki', '082312446655', 'X C', 3),
('202001027', 'Daniel', 'Laki-Laki', '087765590424', 'X C', 3),
('202001028', 'Dea Humairah', 'Perempuan', '085696232418', 'X C', 3),
('202001029', 'Delisya', 'Perempuan', '082376923038', 'X C', 3),
('202001030', 'Deo Lakoy', 'Laki-Laki', '082143532170', 'X C', 3),
('202001031', 'Dewi Lestari', 'Perempuan', '085692357988', 'X C', 3),
('202001032', 'Dicky Saputra', 'Laki-Laki', '081297145560', 'X C', 3),
('202001033', 'Dinda Auliya', 'Perempuan', '082330602071', 'X C', 3),
('202001034', 'Electric Neon', 'Perempuan', '085329804377', 'X C', 3),
('202001035', 'Erik Breach', 'Laki-Laki', '081284123447', 'X C', 3),
('202001036', 'Fahrul Rouzy', 'Laki-Laki', '087801304395', 'XI A', 1),
('202001037', 'Firdaus Issit', 'Laki-Laki', '081232218510', 'XI A', 1),
('202001038', 'Fitrah Ramadhan', 'Laki-Laki', '081219550857', 'XI A', 1),
('202001039', 'Gleen', 'Laki-Laki', '081332285079', 'XI A', 1),
('202001040', 'Ibrahim', 'Laki-Laki', '081958218370', 'XI A', 1),
('202001041', 'Ilham Abdilah', 'Laki-Laki', '0852 4969 3948', 'XI A', 1),
('202001042', 'Ilham Rifky', 'Laki-Laki', '087701829467', 'XI A', 1),
('202001043', 'Indah Pratiwi', 'Perempuan', '085648525052', 'XI A', 1),
('202001044', 'Jet wing', 'Perempuan', '085327333861', 'XI A', 1),
('202001045', 'Junaidi', 'Laki-Laki', '085212297589', 'XI A', 1),
('202001046', 'Kayo Rob', 'Laki-Laki', '089694938291', 'XI A', 1),
('202001047', 'Khairul Insan Karim', 'Laki-Laki', '085161241126', 'XI A', 1),
('202001048', 'Khairunisa Fitrisya', 'Perempuan', '0838 70815121', 'XI A', 1),
('202001049', 'Liam Brimstone', 'Laki-Laki', '082192013087', 'XI A', 1),
('202001050', 'Lil Sage', 'Perempuan', '085399074249', 'XI A', 2),
('202001051', 'Luis Figo', 'Laki-Laki', '081368625078', 'XI B', 2),
('202001052', 'Maudy ayu', 'Perempuan', '087776376173', 'XI B', 2),
('202001053', 'Michael Rolandy', 'Laki-Laki', '087748464637', 'XI B', 2),
('202001054', 'Moh Fahri Pratama', 'Laki-Laki', '+6285322222685', 'XI B', 2),
('202001055', 'Moh Fajar Dzulnufri', 'Laki-Laki', '085257344607', 'XI B', 2),
('202001056', 'Moh Fathan', 'Laki-Laki', '+6289604215643', 'XI B', 2),
('202001057', 'Moh Putra', 'Laki-Laki', '081315989578', 'XI B', 2),
('202001058', 'Moh Tirta', 'Laki-Laki', '081286616893', 'XI B', 2),
('202001059', 'Moh zidan', 'Laki-Laki', '085813221927', 'XI B', 2),
('202001060', 'Muh Fahril', 'Laki-Laki', '087748464637', 'XI C', 2),
('202001061', 'Muh Fatir', 'Laki-Laki', '082337830730', 'XI C', 3),
('202001062', 'Muh Fikri', 'Laki-Laki', '083871576645', 'XI C', 3),
('202001063', 'Muh rafi', 'Laki-Laki', '085338534457', 'XI C', 3),
('202001064', 'Muh Rizki', 'Laki-Laki', '082190630447', 'XI C', 3),
('202001065', 'Mutiha', 'Perempuan', '085341739941', 'XI C', 3),
('202001066', 'Nur Layla P', 'Perempuan', '082113720777', 'XI C', 3),
('202001067', 'Nur Nirlaba', 'Perempuan', '0853-97243555', 'XI C', 3),
('202001068', 'Nurul Amalia', 'Perempuan', '085241248921', 'XI C', 3),
('202001069', 'Nurul Fajriyah', 'Perempuan', '045231698466', 'XI C', 3),
('202001070', 'Olive P', 'Perempuan', '081273276675', 'XI C', 3),
('202001071', 'Pablo lasarika', 'Perempuan', '085776422447', 'XII A', 1),
('202001072', 'Phoenix F', 'Laki-Laki', '08971506779', 'XII A', 1),
('202001073', 'Poison Viper', 'Perempuan', '085240233277', 'XII A', 1),
('202001074', 'Pujo Darjoh', 'Laki-Laki', '085330885634', 'XII A', 1),
('202001075', 'Putra Satria', 'Perempuan', '081244186501', 'XII A', 1),
('202001076', 'Putri Aulia', 'Perempuan', '083133342731', 'XII A', 1),
('202001077', 'Putri Kirana', 'Perempuan', '082133333667', 'XII A', 1),
('202001078', 'Rafathar', 'Laki-Laki', '087897757386', 'XII A', 1),
('202001079', 'Raihan Dirga', 'Laki-Laki', '085813221927', 'XII A', 1),
('202001080', 'Raja Alfaruq', 'Laki-Laki', '085776422447', 'XII A', 1),
('202001081', 'Rani Puluko', 'Perempuan', '087871414634', 'XII A', 1),
('202001082', 'Rara P', 'Perempuan', '081222691989', 'XII A', 1),
('202001083', 'Raze alves', 'Perempuan', '085696228417', 'XII A', 1),
('202001084', 'Renalda Salwa', 'Perempuan', '081219550857', 'XII A', 1),
('202001085', 'Reza Rahardi', 'Laki-Laki', '082311813117', 'XII A', 2),
('202001086', 'Rezki jazar', 'Laki-Laki', '087765212315', 'XII B', 2),
('202001087', 'Ridho Roma', 'Laki-Laki', '081219550857', 'XII B', 2),
('202001088', 'Rudi Salim', 'Laki-Laki', '087811554447', 'XII B', 2),
('202001089', 'Siti Nur Lela', 'Perempuan', '085213931566', 'XII B', 2),
('202001090', 'Siti Nur Reyna', 'Perempuan', '085399275281', 'XII B', 2),
('202001091', 'Siti Roviga', 'Perempuan', '08975532756', 'XII B', 2),
('202001092', 'Skye Foster', 'Perempuan', '085213200303', 'XII B', 2),
('202001093', 'Stive Sova', 'Laki-Laki', '02156187111', 'XII B', 2),
('202001094', 'Syafira Maharani', 'Perempuan', '085236520559', 'XII B', 2),
('202001095', 'Timoty', 'Laki-Laki', '085259404194', 'XII B', 2),
('202001096', 'Tommy winata', 'Laki-Laki', '087882129535', 'XII C', 3),
('202001097', 'Tri krama', 'Laki-Laki', '085246315699', 'XII C', 3),
('202001098', 'Umar', 'Laki-Laki', '081352619935', 'XII C', 3),
('202001099', 'Vincent Chamber', 'Laki-Laki', '089630309951', 'XII C', 3),
('202001100', 'Xin Yoru', 'Laki-Laki', '085286237915', 'XII C', 3),
('202001101', 'Yudi B', 'Laki-Laki', '087700942188', 'XII C', 3),
('202001102', 'Zaruka Drayer', 'Laki-Laki', '085351105678', 'XII C', 3),
('202001103', 'Zudan', 'Laki-Laki', '082190672986', 'XII C', 3),
('202001104', 'Zulfa', 'Laki-Laki', '087711091843', 'XII C', 3),
('202001105', 'Zulkifly', 'Laki-Laki', '082330508465', 'XII C', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `id_users` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `semester` varchar(10) NOT NULL,
  `pembayaran_bulan` varchar(10) NOT NULL,
  `bayar` int(11) NOT NULL,
  `status_bayar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nis`, `id_users`, `tanggal_transaksi`, `semester`, `pembayaran_bulan`, `bayar`, `status_bayar`) VALUES
(1, '202001003', 1, '2022-06-11', 'Ganjil', 'September', 100000, 'Pembayaran Berhasil'),
(2, '202001004', 1, '2022-06-11', 'Genap', 'Maret', 100000, 'Pembayaran Berhasil'),
(3, '202001023', 1, '2022-06-11', 'Genap', 'Maret', 10000, 'Pembayaran Berhasil'),
(4, '202001002', 1, '2022-06-11', 'Ganjil', 'Juni', 100000, 'Pembayaran Berhasil'),
(5, '202001003', 2, '2022-06-12', 'Genap', 'Juni', 100000, 'Pembayaran Berhasil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jenisKelamin` varchar(50) DEFAULT NULL,
  `nomorTelpon` varchar(15) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `levelAkses` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `nama`, `email`, `jenisKelamin`, `nomorTelpon`, `foto`, `levelAkses`) VALUES
(1, 'khairul', '$2y$10$oqgEh0G0wv2gnfSZs6lkX.tnryHMH0Rq8BX8npi/uQTAWTMXqBgJG', 'Khairul Insan Karim', 'khairulinsankarim26@gmail.com', 'Laki-Laki', '085161241126', 'uyuu1.jpg', 'Admin'),
(2, 'uyuu', '$2y$10$wdJeROX1mGPeNSpp4CuL1uck739eeBqpdOXyAbZ3xo6FFbmAkzb0u', 'Nurul Amalia', 'nurulamalia20@gmail.com', 'Perempuan', '085161241129', 'bioskop1.jpeg', 'Petugas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori_spp`
--
ALTER TABLE `kategori_spp`
  ADD PRIMARY KEY (`id_kategori_spp`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `id_kategori_spp` (`id_kategori_spp`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori_spp`
--
ALTER TABLE `kategori_spp`
  MODIFY `id_kategori_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kategori_spp`) REFERENCES `kategori_spp` (`id_kategori_spp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
