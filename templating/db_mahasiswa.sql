-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Okt 2022 pada 18.54
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_mhs`
--

CREATE TABLE `biodata_mhs` (
  `npm` bigint(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birth_place` varchar(30) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `university` varchar(60) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `univ_major` varchar(30) NOT NULL,
  `shs` varchar(50) NOT NULL,
  `shs_major` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biodata_mhs`
--

INSERT INTO `biodata_mhs` (`npm`, `name`, `birth_place`, `birth_date`, `gender`, `nationality`, `university`, `faculty`, `univ_major`, `shs`, `shs_major`, `email`, `phone`, `address`) VALUES
(20081010240, 'Desya Ristya Putri', 'Surabaya', '2003-01-02', 'Female', 'Indonesia', 'Universitas Pembangunan Nasional Veteran Jawa Timur', 'Computer Science', 'Informatics', 'SMA N 14 Surabaya', 'Science', '20081010240@student.upnjatim.ac.id', 6282137777420, 'Surabaya'),
(123456789, 'Tina', 'Malang', '2022-09-09', 'Male', 'Indonesia', 'UPN Veteran Jawa Timur', 'Law', 'Legal', 'SMA Bina Bangsa', 'Social', '123456789@gmail.com', 628123456789, 'Gunung Anyar'),
(9876543210, 'Bagus', 'Tuban', '2022-10-01', 'Male', 'Indonesia', 'UPN Veteran Jawa Timur', 'Computer Science', 'Information System', 'SMA N 1 Tuban', 'Science', '9876543210@student.upnjatim.ac.id', 81122334455, 'Rungkut'),
(1122334455, 'Nathania', 'Semarang', '2022-10-02', 'Female', 'Indonesia', 'UPN Veteran Jawa Timur', 'Architecture & Design', 'Interior Design', 'SMK N 1 Semarang', 'Architecture', '1122334455@student.upnjatim.ac.id', 81111111111, 'Tenggilis'),
(1908457321, 'Ahmad', 'Mojokerto', '2022-10-03', 'Male', 'Indonesia', 'UPN Veteran Jawa Timur', 'Agriculture', 'Agrotechnology', 'SMA Kusuma Negara', 'Science', '1908457321@student.upnjatim.ac.id', 62899887766, 'Wiyung'),
(1905647281, 'Sasa', 'Jombang', '2022-09-25', 'Female', 'Indonesia', 'UPN Veteran Jawa Timur', 'Economics and Business', 'Accounting', 'SMA N 5 Jombang', 'Sosial', '1905647281@student.upnjatim.ac.id', 8765123987, 'Keputih');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
