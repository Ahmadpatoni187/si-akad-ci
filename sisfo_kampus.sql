-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2022 pada 09.06
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo_kampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `id_dosen` int(11) NOT NULL,
  `nidn` varchar(16) DEFAULT NULL,
  `nama_dosen` varchar(50) DEFAULT NULL,
  `nama_panjang` varchar(100) DEFAULT NULL,
  `jk` enum('laki-laki','perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `hp` varchar(16) DEFAULT NULL,
  `pendidikan` enum('S1','S2','S3') DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `create_at` date DEFAULT NULL,
  `update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`id_dosen`, `nidn`, `nama_dosen`, `nama_panjang`, `jk`, `tempat_lahir`, `tgl_lahir`, `alamat`, `email`, `hp`, `pendidikan`, `photo`, `password`, `create_at`, `update_at`) VALUES
(12, '0620220001', 'Siti', 'Mariam', 'perempuan', 'Bandung', '1987-12-08', 'Bandung Kulon    ', 'siti@gmail.com', '08777712321', 'S3', NULL, '1234', NULL, NULL),
(13, '062022002', 'Rudi', 'Habib', 'laki-laki', 'Aceh', '1978-05-04', 'Bandung ', 'rudi@gmail.com', '09765234324', 'S3', NULL, '1234', NULL, NULL),
(14, '062022003', 'Rangga', 'Wijayanto', 'laki-laki', 'Solo', '1987-03-03', 'Bandung Selatan ', 'rangga@mail.com', '09898634653', 'S3', NULL, '1234', NULL, NULL),
(15, '062022004', 'Ratih', 'Sriningsih', 'perempuan', 'Bandung', '1990-12-15', 'Bandung Kidul   ', 'ratih@mail.com', '08234123127', 'S3', NULL, '1234', NULL, NULL),
(16, '062022005', 'Sukma', 'Hadiyanto', 'laki-laki', 'Semarang', '1987-12-03', 'Bandung ', 'sukma@mail.com', '07345123465', 'S2', NULL, '1234', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_fakultas`
--

CREATE TABLE `tbl_fakultas` (
  `id_fakultas` int(2) NOT NULL,
  `fakultas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_fakultas`
--

INSERT INTO `tbl_fakultas` (`id_fakultas`, `fakultas`) VALUES
(14, 'Fakultas Teknik'),
(15, 'Fakultas Kedokteran'),
(16, 'Fakultas Ekonomi'),
(17, 'Fakultas Hukum'),
(18, 'Fakultas Sosiologi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gedung`
--

CREATE TABLE `tbl_gedung` (
  `id_gedung` int(2) NOT NULL,
  `gedung` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_gedung`
--

INSERT INTO `tbl_gedung` (`id_gedung`, `gedung`) VALUES
(11, 'Gedung A'),
(12, 'Gedung B'),
(13, 'Gedung C'),
(14, 'Gedung D'),
(15, 'Gedung E');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `id_ta` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_matkul` int(11) DEFAULT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `hari` varchar(50) DEFAULT NULL,
  `jam_awal` varchar(50) DEFAULT NULL,
  `jam_akhir` varchar(50) DEFAULT NULL,
  `id_ruangan` int(11) DEFAULT NULL,
  `quota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `id_prodi`, `id_ta`, `id_kelas`, `id_matkul`, `id_dosen`, `hari`, `jam_awal`, `jam_akhir`, `id_ruangan`, `quota`) VALUES
(19, 13, 8, 9, 22, 16, 'Senin', '07:40', '09:00', 22, 35),
(20, 13, 8, 9, 23, 16, 'Senin', '09:00', '11:00', 23, 35),
(21, 13, 8, 9, 24, 12, 'Selasa', '07:40', '09:00', 23, 35),
(22, 13, 8, 9, 25, 15, 'Selasa', '09:00', '11:00', 22, 35),
(23, 13, 8, 9, 42, 14, 'Rabu', '11:00', '13:00', 24, 35),
(24, 13, 8, 9, 45, 12, 'Rabu', '13:00', '15:40', 26, 35),
(29, 13, 8, 9, 44, 16, 'Kamis', '07:40', '10:20', 22, 35),
(30, 13, 8, 9, 26, 13, 'Kamis', '11:40', '13:40', 23, 35),
(31, 13, 8, 9, 46, 15, 'Jumat', '11:40', '13:40', 24, 35),
(33, 13, 8, 9, 43, 13, 'Jumat', '13:40', '15:40', 25, 35),
(34, 12, 8, 8, 20, 16, 'Senin', '07:40', '09:00', 22, 30),
(35, 12, 8, 8, 48, 12, 'Senin', '09:40', '11:00', 23, 30),
(36, 12, 8, 8, 51, 13, 'Selasa', '11:00', '12:20', 24, 30),
(37, 12, 8, 8, 52, 15, 'Selasa', '12:20', '15:00', 25, 30),
(38, 12, 8, 8, 53, 14, 'Rabu', '09:00', '10:20', 26, 30),
(39, 12, 8, 8, 54, 16, 'Rabu', '10:20', '12:20', 27, 30),
(40, 12, 8, 8, 55, 12, 'Kamis', '08:20', '11:40', 23, 30),
(41, 12, 8, 8, 56, 13, 'Kamis', '12:20', '15:00', 24, 30),
(42, 12, 8, 8, 57, 13, 'Jumat', '07:40', '10:20', 26, 30),
(43, 12, 8, 8, 58, 14, 'Jumat', '11:00', '13:40', 23, 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) DEFAULT NULL,
  `id_prodi` int(2) DEFAULT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `tahun_angkatan` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `nama_kelas`, `id_prodi`, `id_dosen`, `tahun_angkatan`) VALUES
(8, 'IF-6E', 12, 16, 2019),
(9, 'RM-6E', 13, 15, 2019),
(10, 'TE-6E', 15, 16, 2019),
(11, 'TK-6E', 14, 12, 2019),
(12, 'KA-6E', 16, 13, 2019);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_krs`
--

CREATE TABLE `tbl_krs` (
  `id_krs` int(11) NOT NULL,
  `id_mhs` int(11) DEFAULT NULL,
  `id_jadwal` int(11) DEFAULT NULL,
  `id_ta` int(11) DEFAULT NULL,
  `p1` int(1) DEFAULT 0,
  `p2` int(1) DEFAULT 0,
  `p3` int(1) DEFAULT 0,
  `p4` int(1) DEFAULT 0,
  `p5` int(1) DEFAULT 0,
  `p6` int(1) DEFAULT 0,
  `p7` int(1) DEFAULT 0,
  `p8` int(1) DEFAULT 0,
  `p9` int(1) DEFAULT 0,
  `p10` int(1) DEFAULT 0,
  `p11` int(1) DEFAULT 0,
  `p12` int(1) DEFAULT 0,
  `p13` int(1) DEFAULT 0,
  `p14` int(1) DEFAULT 0,
  `p15` int(1) DEFAULT 0,
  `p16` int(1) DEFAULT 0,
  `p17` int(1) DEFAULT 0,
  `p18` int(1) DEFAULT 0,
  `nilai_absen` int(3) DEFAULT 0,
  `nilai_tugas` int(3) DEFAULT 0,
  `nilai_uts` int(3) DEFAULT 0,
  `nilai_uas` int(3) DEFAULT 0,
  `nilai_akhir` int(3) DEFAULT 0,
  `nilai_huruf` varchar(1) DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_krs`
--

INSERT INTO `tbl_krs` (`id_krs`, `id_mhs`, `id_jadwal`, `id_ta`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `nilai_absen`, `nilai_tugas`, `nilai_uts`, `nilai_uas`, `nilai_akhir`, `nilai_huruf`) VALUES
(13, 14, 13, 8, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(14, 14, 15, 8, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 0, '-'),
(16, 14, 16, 8, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(17, 14, 17, 8, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '-'),
(18, 14, 18, 8, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_matkul`
--

CREATE TABLE `tbl_matkul` (
  `id_matkul` int(11) NOT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `semester` varchar(100) DEFAULT NULL,
  `kode_matkul` varchar(20) DEFAULT NULL,
  `matkul` varchar(100) DEFAULT NULL,
  `sks` int(1) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `smt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_matkul`
--

INSERT INTO `tbl_matkul` (`id_matkul`, `id_prodi`, `semester`, `kode_matkul`, `matkul`, `sks`, `kategori`, `smt`) VALUES
(4, 5, 'Genap', 'CC', 'Cloud Computing', 2, NULL, 3),
(5, 5, 'Ganjil', 'MAD', 'Mobile Programming', 1, '-', 1),
(6, 6, 'Genap', 'PS', 'Pengenalan Software', 2, 'Wajib', 6),
(7, 6, 'Genap', 'SP', 'System Programming', 3, 'Wajib', 6),
(8, 7, 'Genap', 'ST', 'Ilmu Santet', 5, 'Tidak Wajib', 6),
(9, 7, 'Genap', 'TL', 'Ilmu Teluh', 4, 'Tidak Wajib', 6),
(10, 6, 'Ganjil', 'CS', 'Control System', 2, 'Wajib', 7),
(11, 6, 'Ganjil', 'AA', 'Aplikasi Algoritma', 3, 'Wajib', 3),
(12, 6, 'Ganjil', 'CO', 'Computer Organizer', 3, 'Wajib', 4),
(13, 6, 'Genap', 'MC', 'MicroProcessor', 2, 'Wajib', 5),
(20, 12, 'Genap', 'WW', 'WEB 4.0', 3, 'Wajib', 6),
(22, 13, 'Ganjil', 'PR', 'Pengantar Rekam Medis', 3, 'Wajib', 3),
(23, 13, 'Genap', 'TM', 'Terminologi Medis', 2, 'Wajib', 3),
(24, 13, 'Ganjil', 'IP', 'Ilmu Penyakit', 2, 'Wajib', 4),
(25, 13, 'Genap', 'BM', 'Bahasa Inggris Medis', 3, 'Wajib', 4),
(26, 13, 'Ganjil', 'IM', 'Ilmu Kesehatan Masyarakat', 3, 'Wajib', 5),
(27, 15, 'Ganjil', 'TL', 'Tenaga Listrik', 3, 'Wajib', 5),
(28, 15, 'Genap', 'PI', 'Pengolahan Isyarat, Elektronika, dan Biomedika.', 2, 'Wajib', 5),
(29, 15, 'Ganjil', 'IK', ' Instrumentasi Kendali.', 3, 'Wajib', 6),
(30, 15, 'Genap', 'TL', ' Telekomunikasi.', 3, 'Wajib', 6),
(31, 15, 'Ganjil', 'KK', 'Komputer.', 2, 'Wajib', 7),
(32, 14, 'Ganjil', 'CO', 'Computer organization.', 3, 'Wajib', 4),
(33, 14, 'Genap', 'AA', 'Aplikasi Algoritma.', 2, 'Wajib', 4),
(34, 14, 'Ganjil', 'MC', 'Microprocessors.', 3, 'Wajib', 5),
(35, 14, 'Genap', 'PT', 'Probability theory.', 2, 'Wajib', 5),
(36, 14, 'Ganjil', 'SP', 'System programming.', 3, 'Wajib', 6),
(37, 17, 'Ganjil', 'FK', 'Fisika.', 3, 'Wajib', 4),
(38, 17, 'Genap', 'KS', 'Kalkulus.', 3, 'Wajib', 4),
(39, 17, 'Ganjil', 'GM', 'Gambar Mesin.', 3, 'Wajib', 5),
(40, 17, 'Genap', 'MT', 'Material Teknik', 3, 'Wajib', 5),
(41, 17, 'Ganjil', 'SS', 'Statika Struktur.', 2, 'Wajib', 6),
(42, 13, 'Genap', 'QA', 'Quality Assurance', 2, 'Wajib', 5),
(43, 13, 'Ganjil', 'RKE', 'Rekam Kesehatan Elektronik', 2, 'Wajib', 6),
(44, 13, 'Genap', 'SA', 'Standarisasi Akreditasi Rumah Sakit Nasional & Internasional', 2, 'Wajib', 6),
(45, 13, 'Ganjil', 'KK', 'Kodifikasi dan Klasifikasi Penyakit', 3, 'Wajib', 7),
(46, 13, 'Genap', 'PO', 'Praktikum Operator Sistem Informasi Rekam Medis', 2, 'Wajib', 7),
(48, 12, 'Genap', 'MP', 'Metode Penelitian', 2, 'Wajib', 6),
(51, 12, 'Genap', 'UI/UX', 'User Interface Design (Interaksi Manusia dan Komputer)', 2, 'Wajib', 6),
(52, 12, 'Genap', 'PW', 'Pemrograman Web', 3, 'Wajib', 6),
(53, 12, 'Genap', 'RPL', 'Rekayasa Perangkat Lunak', 2, 'Wajib', 6),
(54, 12, 'Genap', 'CC', 'Cloud Computing', 3, 'Wajib', 6),
(55, 12, 'Genap', 'MP', 'Mobile Programing', 3, 'Wajib', 6),
(56, 12, 'Genap', 'LM', 'Logika Matematika/Logika Informatika', 3, 'Wajib', 6),
(57, 12, 'Genap', 'PA', 'Pendidikan Agama', 3, 'Wajib', 6),
(58, 12, 'Genap', 'SD', 'Struktur Data', 3, 'Wajib', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `id_mhs` int(11) NOT NULL,
  `id_prodi` varchar(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `nim` varchar(15) DEFAULT NULL,
  `nama_mhs` varchar(25) DEFAULT NULL,
  `nama_panjang` varchar(50) DEFAULT NULL,
  `jk` enum('laki-laki','perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `hp` varchar(16) DEFAULT NULL,
  `nama_ayah` varchar(30) DEFAULT NULL,
  `nama_ibu` varchar(30) DEFAULT NULL,
  `hp_ortu` varchar(16) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `semester` enum('1','2','3','4','5','6','7','8') DEFAULT NULL,
  `create_at` date DEFAULT NULL,
  `update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`id_mhs`, `id_prodi`, `id_kelas`, `nim`, `nama_mhs`, `nama_panjang`, `jk`, `tempat_lahir`, `tgl_lahir`, `alamat`, `email`, `hp`, `nama_ayah`, `nama_ibu`, `hp_ortu`, `photo`, `password`, `semester`, `create_at`, `update_at`) VALUES
(14, '12', 8, 'D111911143', 'Alfin', 'Rizki', 'laki-laki', 'Bandung', '1999-12-09', 'Bandung ', 'alfin@mail.com', '022245435', 'Bapak', 'Ibuk', '022-982454', 'photo_2022-06-22_19-27-45.jpg', '1234', NULL, NULL, NULL),
(15, '12', 8, 'D111911160', 'Ahmad', 'Patoni', 'laki-laki', 'Bandung', '2006-04-09', 'Bandung      ', 'yusup@mail.com', '0821656532', 'Ayah', 'Umy', '0821877354', '2.jpg', '1234', NULL, NULL, NULL),
(16, '12', 8, 'D111911162', 'Dini ', 'Juwita', 'perempuan', 'Bandung,Cicalengka', '2005-02-25', 'Kp.Dampit', 'dini@gmail.com', '089173737682', 'bapak dini', 'ibu DIni', '0871537241', NULL, '1234', NULL, NULL, NULL),
(17, '12', 8, 'D111911163', 'Rina', 'Borin', 'laki-laki', 'Nagreg.Garut', '2000-02-17', 'Nagreg', 'borin@gmail.com', '08714363653', 'ayah Rina', 'Ibu Rina', '087154536', NULL, '1234', NULL, NULL, NULL),
(18, '12', 8, 'D111911164', 'Neymat', 'Junior', 'laki-laki', 'Jakarta', '1994-01-17', 'Kp. Gambreng', 'neymar@gmail.com', '08752691674', 'Ayah Neymar', 'Ibu Neymar', '08561336632', NULL, '1234', NULL, NULL, NULL),
(19, '13', 9, 'R111911165', 'Nina', 'Riyani', 'perempuan', 'Guntur', '2003-01-08', 'Guntur,Garut', 'nina@gmail.com', '08717363532', 'Ayah Nina', 'Ibu Nina', '0816378532', NULL, '1234', NULL, NULL, NULL),
(20, '13', 9, 'R111911162', 'Fitri', ' Kunia', 'perempuan', 'Jakarta', '2000-05-12', 'Kiara Condong', 'fitri@gmail.com', '08316373851', 'Ayah Fitri', 'Ibu Fitri', '0861429816', NULL, '1234', NULL, NULL, NULL),
(21, '13', 9, 'R111911163', 'Juned', 'Humble', 'laki-laki', 'Kalimatan', '2000-06-10', 'Bandung,nagreg ', 'juned@gmail.com', '08517365391', 'Ayah Juned', 'Ibu Juned', '0831738391', NULL, '1234', NULL, NULL, NULL),
(22, '13', 9, 'R111911164', 'Yuni', 'Sara', 'perempuan', 'Mexico', '2006-05-11', 'Mexico Lebak', 'yuni@gmail.com', '084174649662', 'Ayah yuni', 'Ibu Yuni', '0917322482', NULL, '1234', NULL, NULL, NULL),
(23, '13', 9, 'R111911160', 'Matuidi', 'Karim', 'laki-laki', 'ghana', '2003-06-11', 'Ghana palih luhur sakedik', 'matu@gmail.com', '098184542671', 'Ayah Matu', 'Ibu Matu', '08715363751', NULL, '1234', NULL, NULL, NULL),
(24, '15', 10, 'E111911161', 'Bunga', 'Toke', 'perempuan', 'Makassar', '2000-06-14', 'Legok Jero', 'bunga@gmail.com', '08341737281', 'Ayah Bunga', 'Ibu Bunga', '08615317811', NULL, '1234', NULL, NULL, NULL),
(25, '15', 10, 'E111911160', 'Royco', 'Masako', 'laki-laki', 'Yokohama', '2002-06-07', 'Hokaido,japan palih lebak sakedik belok kiri', 'royco@gmail.com', '02291937274', 'Ayah Royco', 'Ibu Royco', '084163718183', NULL, '1234', NULL, NULL, NULL),
(26, '15', 10, 'E111911162', 'Human', 'Maman', 'laki-laki', 'Sau Paulo, Brazil', '1992-04-29', 'Kp.Cigorowong', 'human@gmail.com', '087156427821', 'Ayah Human', 'Ibu Human', '09813627351', NULL, '1234', NULL, NULL, NULL),
(27, '15', 10, 'E111911163', 'Mahrez', 'Rian', 'laki-laki', 'italia,paris', '2010-09-15', 'Paris tonggoh', 'rian@gmail.com', '087153628151', 'Ayah Rian', 'Ibu rian', '08165427113', NULL, '1234', NULL, NULL, NULL),
(28, '15', 10, 'E111911164', 'Mister', 'Pudidi', 'perempuan', 'Mancester', '2001-01-10', 'Kp.Legok Jero', 'pudidi@gmail.com', '087191736371', 'Ayah Pudidi', 'Ibu Pudidi', '086142981611', NULL, '1234', NULL, NULL, NULL),
(29, '14', 11, 'K111911160', 'Maman', 'suratman', 'laki-laki', 'Jurang', '2003-12-29', 'Kampung rambutan', 'maman@gmail.com', '08163523757', 'Ayah Maman', 'Ibu Maman', '01853178319', NULL, '1234', NULL, NULL, NULL),
(30, '14', 11, 'K111911161', 'Miramar', 'Sanhok', 'perempuan', 'surabaya', '1995-05-24', 'Kp.Nagreg', 'miramar@gmail.com', '08917352814', 'Ayah Miramar', 'Ibu Miramar', '08417319931', NULL, '1234', NULL, NULL, NULL),
(31, '14', 11, 'K111911162', 'Nani', 'watini', 'perempuan', 'yogjakarta', '2001-02-19', 'Kp.Cisarua', 'nani@gmail.com', '087165387193', 'Ayah Nani', 'Ibu Nani', '0913835114', NULL, '1234', NULL, NULL, NULL),
(32, '14', 11, 'K111911163', 'Asep', 'Dimas', 'laki-laki', 'Bandung', '1999-06-08', 'Kp.Paslon', 'asep@gmail.com', '08917383851', 'Ayah Dimas', 'Ibu Dimas', '081743781914', NULL, '1234', NULL, NULL, NULL),
(33, '14', 11, 'K111911164', 'Yayas', 'Yu nabiah', 'perempuan', 'Garut', '1998-07-08', 'Kp.Tarogong Wetan sakedik', 'yayas@gmail.com', '081748439264', 'Ayah Yayas', 'Ibu yayas', '08138193471', NULL, '1234', NULL, NULL, NULL),
(34, '16', 12, 'A111911160', 'Hamzah', 'Ya', 'laki-laki', 'Ujung Berung', '2000-05-19', 'Kp.Curug Cinulang', 'hamzah@gmail.com', '08186492896', 'Ayah Hamzah', 'Ibu Hamzah', '08193138101', NULL, '1234', NULL, NULL, NULL),
(35, '16', 12, 'A111911161', 'King', 'Yudho', 'laki-laki', 'Paris perancis', '2006-01-11', 'perancis kaler', 'king@gmail.com', '08193726183', 'Ayah Yudo', 'Ibu Yudo', '09121831883', NULL, '1234', NULL, NULL, NULL),
(36, '16', 12, 'A111911162', 'Winwin', 'Selection', 'perempuan', 'Sawah Sempit, Bandung', '2000-06-05', 'Kp.Sawah cicalengka', 'winwin@gmail.com', '081831983181', 'Ayah Winwin', 'Ibu Winwin', '081928491831', NULL, '1234', NULL, NULL, NULL),
(37, '16', 12, 'A111911163', 'Ulfa', 'Kulpe', 'perempuan', 'Nagreg,Bandung', '1999-05-02', 'Kp.Margaluyu', 'ulfa@gmail.com', '08716378183', 'Ayah Ulfa', 'Ibu Ulfa', '08192819311', NULL, '1234', NULL, NULL, NULL),
(38, '16', 12, 'A111911164', 'Hasni', 'Hasniah', 'perempuan', 'Garut', '2003-01-06', 'Kp.Leles', 'hasni@gmail.com', '08917317741', 'Ayah Hasni', 'Ibu Hasni', '08917381311', NULL, '1234', NULL, NULL, NULL),
(39, '12', 8, 'M111911160', 'Agung', 'Holic', 'laki-laki', 'Majalaya', '2004-12-27', 'Kp.Paseh Majalaya', 'adung@gmail.com', '089178193911', 'Ayah Agung', 'Ibu Agung', '081939173191', NULL, '1234', NULL, NULL, NULL),
(40, '12', 8, 'M111911161', 'Kamal', 'Didi', 'laki-laki', 'Bandung', '2002-12-29', 'Kp.Nyalindung', 'kamal@gmail.com', '081937191934', 'Ayah Kamal', 'Ibu Kamal', '087654126173', NULL, '1234', NULL, NULL, NULL),
(44, '12', 8, 'M111911162', 'Julaiha', 'Harahap', 'perempuan', 'Madinah', '1999-10-04', 'Kp.Bandung Kulon', 'jul@gmail.com', '08176318319', 'Ayah Juli', 'Ibu Juli', '08715361314', NULL, '1234', NULL, NULL, NULL),
(45, '12', 8, 'M111911163', 'Rahmat', 'Irianto', 'laki-laki', 'surabaya', '1997-12-28', 'Kp.Gambreng', 'iri@gmail.com', '08716631831', 'Ayah Irianto', 'Ibu Irianto', '081631741781', NULL, '1234', NULL, NULL, NULL),
(46, '12', 8, 'M111911164', 'Nana', 'Kim', 'perempuan', 'Medan', '1996-05-12', 'Kp.Dukuh', 'nana@gmail.com', '0851218381', 'Ayah Nana', 'Ibu Nana', '08193619411', NULL, '1234', NULL, NULL, NULL),
(47, '12', 8, 'D111911165', 'Maria', 'Sarapova', 'perempuan', 'Bandung,jawa barat', '2001-05-14', 'Jalan nagreg km 39, nomor 15', 'maria@gmail.com', '08771631930', 'Ayah Maria', 'Ibu Maria', '08716261381', NULL, '1234', NULL, NULL, NULL),
(48, '12', 8, 'D111911166', 'Ari', 'Setiawan', 'laki-laki', 'Garut, ciherang', '2005-09-11', 'Jalan Raya ciherang', 'ari@gmail.com', '08716266345', 'Ayah Ari', 'Ibu Ari', '08716351361', NULL, '1234A', NULL, NULL, NULL),
(49, '12', 8, 'D111911167', 'Egi', 'Pratama', 'laki-laki', '0851628181', '1995-05-07', 'Kadungora GARUT', 'egi@gmail.com', '08761651131', 'Ayah Egi', 'Ibu Egi', '0861525151', NULL, '1234', NULL, NULL, NULL),
(50, '12', 8, 'D111911168', 'Evi', 'Samsu', 'laki-laki', 'Bandung,Jawa Barat', '2000-06-12', 'Nagreg,bandung', 'evi@gmail.com', '08761647371', 'Ayah Evi', 'Ibu Evi', '0821281831', NULL, '1234', NULL, NULL, NULL),
(51, '12', 8, 'D111911169', 'Danu', 'Wijaya', 'laki-laki', 'Cimahi,Bandung Barat', '2000-05-15', 'Cihanjuang,Cimahi', 'danu@gmail.com', '08213732191', 'Ayah Danu', 'Ibu Danu', '086537445', NULL, '1234', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_prodi`
--

CREATE TABLE `tbl_prodi` (
  `id_prodi` int(5) NOT NULL,
  `id_fakultas` int(5) DEFAULT NULL,
  `kode_prodi` varchar(11) DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  `jenjang` varchar(50) DEFAULT NULL,
  `ka_prodi` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_prodi`
--

INSERT INTO `tbl_prodi` (`id_prodi`, `id_fakultas`, `kode_prodi`, `prodi`, `jenjang`, `ka_prodi`) VALUES
(12, 14, 'TI', 'Teknik Informatika', 'D3', 'Sukma Hadiyanto'),
(13, 14, 'TRM', 'Teknik Rekam Medis', 'D3', 'Siti Mariam'),
(14, 14, 'Tkom', 'Teknik Komputer', 'D4', 'Rudi Habib'),
(15, 14, 'TE', 'Teknik Elektro', 'D3', 'Ratih Sriningsih'),
(16, 14, 'TKA', 'Teknik Komputer Akuntansi', 'D3', 'Rangga Wijayanto'),
(17, 14, 'TM', 'Teknik Mesin', 'D4', 'Rangga Wijayanto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ruangan`
--

CREATE TABLE `tbl_ruangan` (
  `id_ruangan` int(2) NOT NULL,
  `id_gedung` int(2) NOT NULL,
  `ruangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_ruangan`
--

INSERT INTO `tbl_ruangan` (`id_ruangan`, `id_gedung`, `ruangan`) VALUES
(22, 11, 'RA-01'),
(23, 11, 'RA-02'),
(24, 12, 'RB-01'),
(25, 12, 'RB-02'),
(26, 13, 'RC-01'),
(27, 13, 'RC-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ta`
--

CREATE TABLE `tbl_ta` (
  `id_ta` int(4) NOT NULL,
  `ta` varchar(10) DEFAULT NULL,
  `semester` varchar(10) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_ta`
--

INSERT INTO `tbl_ta` (`id_ta`, `ta`, `semester`, `status`) VALUES
(7, '2021/2022', 'Genap', 0),
(8, '2021/2022', 'Ganjil', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `photo`, `create_at`, `update_at`) VALUES
(1, 'admin', 'admin', 'admin', '', '2022-07-10', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `tbl_fakultas`
--
ALTER TABLE `tbl_fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indeks untuk tabel `tbl_gedung`
--
ALTER TABLE `tbl_gedung`
  ADD PRIMARY KEY (`id_gedung`);

--
-- Indeks untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tbl_krs`
--
ALTER TABLE `tbl_krs`
  ADD PRIMARY KEY (`id_krs`);

--
-- Indeks untuk tabel `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indeks untuk tabel `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indeks untuk tabel `tbl_prodi`
--
ALTER TABLE `tbl_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indeks untuk tabel `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indeks untuk tabel `tbl_ta`
--
ALTER TABLE `tbl_ta`
  ADD PRIMARY KEY (`id_ta`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_fakultas`
--
ALTER TABLE `tbl_fakultas`
  MODIFY `id_fakultas` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_gedung`
--
ALTER TABLE `tbl_gedung`
  MODIFY `id_gedung` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_krs`
--
ALTER TABLE `tbl_krs`
  MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `tbl_prodi`
--
ALTER TABLE `tbl_prodi`
  MODIFY `id_prodi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  MODIFY `id_ruangan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tbl_ta`
--
ALTER TABLE `tbl_ta`
  MODIFY `id_ta` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
