-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Mar 2019 pada 17.19
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_yiimerak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bonus`
--

CREATE TABLE `bonus` (
  `id_bonus` int(11) NOT NULL,
  `emp_code` varchar(12) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `salary` double(16,2) NOT NULL,
  `bonus` double(16,2) NOT NULL,
  `total` double(16,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bonus`
--

INSERT INTO `bonus` (`id_bonus`, `emp_code`, `month`, `year`, `salary`, `bonus`, `total`) VALUES
(1, '1', 2, 2011, 3500000.00, 175000.00, 0.00),
(2, '2', 2, 2011, 4200000.00, 210000.00, 4410000.00),
(3, '2', 2, 2011, 4200000.00, 210000.00, 4410000.00),
(4, '1', 1, 2011, 3500000.00, 0.00, 3500000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee`
--

CREATE TABLE `employee` (
  `id_emp` int(11) NOT NULL,
  `emp_code` varchar(12) NOT NULL,
  `emp_name` varchar(40) NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `employee`
--

INSERT INTO `employee` (`id_emp`, `emp_code`, `emp_name`, `birth_date`, `address`) VALUES
(1, '1', 'Puspa', '1997-02-21', 'Ngaglik'),
(2, '2', 'Ando', '1996-12-13', 'Gka'),
(3, '3', 'Najwa', '2016-11-21', 'Ngaglik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `salary`
--

CREATE TABLE `salary` (
  `id_salary` int(11) NOT NULL,
  `emp_code` varchar(12) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `salary` double(16,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `salary`
--

INSERT INTO `salary` (`id_salary`, `emp_code`, `month`, `year`, `salary`) VALUES
(1, '1', 1, 2011, 3500000.00),
(2, '2', 1, 2011, 4200000.00),
(3, '3', 2, 2011, 4200000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bonus`
--
ALTER TABLE `bonus`
  ADD PRIMARY KEY (`id_bonus`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_emp`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id_salary`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bonus`
--
ALTER TABLE `bonus`
  MODIFY `id_bonus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id_salary` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
