-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Mei 2018 pada 18.46
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--
CREATE DATABASE IF NOT EXISTS `school` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `school`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`username`, `password`, `level`) VALUES
('admin', 'c4ca4238a0b923820dcc509a6f75849b', 3),
('dadang', 'c4ca4238a0b923820dcc509a6f75849b', 3),
('hendika', 'c4ca4238a0b923820dcc509a6f75849b', 2),
('Kirito', 'c4ca4238a0b923820dcc509a6f75849b', 1),
('Naruto', 'c4ca4238a0b923820dcc509a6f75849b', 3),
('Okky', 'c4ca4238a0b923820dcc509a6f75849b', 3),
('roma', 'c4ca4238a0b923820dcc509a6f75849b', 1),
('udin', 'c4ca4238a0b923820dcc509a6f75849b', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `nip` char(10) NOT NULL,
  `nama_guru` varchar(50) DEFAULT NULL,
  `no_hp` varchar(30) NOT NULL,
  `jenkel` varchar(10) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `no_hp`, `jenkel`, `agama`, `username`) VALUES
('1111111111', 'Hendika', '087987697658', 'Laki-Laki', 'Islam', 'hendika'),
('1111111112', 'Roma Debrian', '087987697659', 'Laki-Laki', 'Islam', 'roma'),
('1111111113', 'Okky', '02147483647', 'Laki-Laki', 'Islam', 'Okky');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `kode_mata_pelajaran` varchar(50) NOT NULL,
  `nama_matapelajaran` varchar(50) NOT NULL,
  `kelas` int(2) NOT NULL,
  `jurusan` varchar(3) NOT NULL,
  `nip` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`kode_mata_pelajaran`, `nama_matapelajaran`, `kelas`, `jurusan`, `nip`) VALUES
('11111111', 'Jaringan', 10, 'RPL', '1111111111'),
('231231241234', 'C++', 10, 'RPL', '1111111111'),
('4123124125', 'Visual Basic 1', 10, 'RPL', '1111111112'),
('51231231123', 'Pemerograman Java', 10, 'RPL', '1111111111'),
('51231235', 'Bisnis', 11, 'AP', '1111111113');

-- --------------------------------------------------------

--
-- Struktur dari tabel `murid`
--

CREATE TABLE `murid` (
  `nisn` char(10) NOT NULL,
  `nama_murid` varchar(50) DEFAULT NULL,
  `kota` varchar(45) DEFAULT NULL,
  `jenkel` varchar(45) DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL,
  `jurusan` varchar(3) DEFAULT NULL,
  `kelas` int(2) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `murid`
--

INSERT INTO `murid` (`nisn`, `nama_murid`, `kota`, `jenkel`, `agama`, `jurusan`, `kelas`, `username`) VALUES
('1111111111', 'Udin', 'Jakarta', 'Laki-Laki', 'Islam', 'RPL', 10, 'udin'),
('1111111119', 'Kanna Kamui', 'Tokyo', 'Perempuan', 'Hindu', 'AP', 11, NULL),
('1234123215', 'Yasan', 'Banjarmasin', 'Laki-Laki', 'Islam', 'RPL', 10, NULL),
('1256734563', 'Jaki', 'Bekasi', 'Laki-Laki', 'islam', 'PRL', 12, NULL),
('15232131', 'Uzumaki Kusina', 'Konoha', 'Perempuan', 'Islam', 'AP', 11, NULL),
('3432423429', 'Hendika', 'Bekasi', 'Laki-Laki', 'Islam', 'RPL', 10, NULL),
('3563345195', 'Jaja Tamanawa', 'Jambi', 'Laki-Laki', 'islam', 'RPL', 10, NULL),
('3563345199', 'Najwa', 'Medan', 'Perempuan', 'islam', 'AK', 11, NULL),
('5555554323', 'Sasa', 'Maria', 'Perempuan', 'Islam', 'AP', 12, NULL),
('6475834759', 'Culain', 'Mataram', 'Laki-Laki', 'Hindu', 'RPL', 12, NULL),
('6666666666', 'Hana', 'Jakarta', 'Perempuan', 'Islam', 'AP', 11, NULL),
('8378449283', 'Uzumaki Naruto', 'Konoha', 'Laki-Laki', 'Islam', 'RPL', 11, NULL),
('8798679869', 'Okky Pras', 'Banten', 'Laki-Laki', 'Islam', 'RPL', 10, 'Okky');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `nama_murid` varchar(50) NOT NULL,
  `kelas` varchar(2) DEFAULT NULL,
  `jurusan` varchar(3) DEFAULT NULL,
  `nama_matapelajaran` varchar(50) NOT NULL,
  `nilai_UTS` int(5) NOT NULL,
  `nilai_UAS` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`nama_murid`, `kelas`, `jurusan`, `nama_matapelajaran`, `nilai_UTS`, `nilai_UAS`) VALUES
('Yasan', '10', 'RPL', 'Jaringan', 100, 100),
('wdawd', '10', 'RPL', 'Jaringan', 77, 88),
('Hendika', '10', 'RPL', 'Jaringan', 100, 100),
('Jaja Tamanawa', '10', 'RPL', 'Jaringan', 110, 111),
('Yasan', '10', 'RPL', 'Visual Basic', 77, 77),
('wdawd', '10', 'RPL', 'Visual Basic', 88, 88),
('Hendika', '10', 'RPL', 'Visual Basic', 100, 99),
('Jaja Tamanawa', '10', 'RPL', 'Visual Basic', 100, 100),
('Udin', '10', 'RPL', 'Jaringan', 77, 88),
('Yasan', '10', 'RPL', 'Jaringan', 100, 100),
('Hendika', '10', 'RPL', 'Jaringan', 100, 100),
('Jaja Tamanawa', '10', 'RPL', 'Jaringan', 110, 111),
('Udin', '10', 'RPL', 'Visual Basic', 88, 88),
('Yasan', '10', 'RPL', 'Visual Basic', 77, 77),
('Hendika', '10', 'RPL', 'Visual Basic', 100, 99),
('Jaja Tamanawa', '10', 'RPL', 'Visual Basic', 100, 100),
('Udin', '10', 'RPL', 'C++', 77, 87),
('Yasan', '10', 'RPL', 'C++', 66, 87),
('Hendika', '10', 'RPL', 'C++', 88, 88),
('Jaja Tamanawa', '10', 'RPL', 'C++', 99, 89),
('Okky Pras', '10', 'RPL', 'C++', 89, 90),
('Udin', '10', 'RPL', 'Pemerograman Java', 77, 88),
('Yasan', '10', 'RPL', 'Pemerograman Java', 88, 99),
('Hendika', '10', 'RPL', 'Pemerograman Java', 99, 99),
('Jaja Tamanawa', '10', 'RPL', 'Pemerograman Java', 77, 88),
('Okky Pras', '10', 'RPL', 'Pemerograman Java', 98, 87);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `Tanggal` varchar(10) DEFAULT NULL,
  `Subject` varchar(255) DEFAULT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `No_HP` int(50) DEFAULT NULL,
  `Isi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`Tanggal`, `Subject`, `Nama`, `Email`, `No_HP`, `Isi`) VALUES
('18-05-2018', 'Test', 'Roma Debrian', 'test@yahoo.com', 2147483647, 'This messege of ded'),
('18-05-2018', 'Test', 'Roma Debrian', 'test@yahoo.com', 2147483647, 'ini adalah pesan kematian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `guru_ibfk_1` (`username`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`kode_mata_pelajaran`),
  ADD KEY `mata_pelajaran_ibfk_1` (`nip`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `murid_ibfk_1` (`username`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD CONSTRAINT `mata_pelajaran_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `murid`
--
ALTER TABLE `murid`
  ADD CONSTRAINT `murid_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
