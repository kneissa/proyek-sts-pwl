-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2025 at 10:48 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_pwl`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun sekolah`
--

CREATE TABLE `akun sekolah` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `akun sekolah`
--

INSERT INTO `akun sekolah` (`username`, `password`, `id`, `role`) VALUES
('aa', '$2y$10$GhK07Q.LWXLy/Kj.nUP26uKq0g9hrih7f27aBq4xNjOU8phhDuITi', 1, 'user'),
('sas', '$2y$10$I7SNv1JpjdcCV0dd5CFqf.3.6iYWxFFVX.qXNRHVrjgj.XYBAL1He', 2, 'user'),
('neko', '$2y$10$Coz11KVZmNNAc7wqphM5NeL/wh4lzObrikdKJNUMVtESXV8DNkLzG', 3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `alasan`
--

CREATE TABLE `alasan` (
  `id` int NOT NULL,
  `why` varchar(16000) NOT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `alasan`
--

INSERT INTO `alasan` (`id`, `why`, `user_id`) VALUES
(1, 'wdwdfdwdfdw', 1),
(2, 'dcccc', 2),
(3, 'dsdsdsdsdsds', 3);

-- --------------------------------------------------------

--
-- Table structure for table `data1`
--

CREATE TABLE `data1` (
  `id` int NOT NULL,
  `nama_siswa` text NOT NULL,
  `nama_panggilan` text NOT NULL,
  `tmpt/tgl_lahir` varchar(255) NOT NULL,
  `agama` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor_anak` int NOT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data1`
--

INSERT INTO `data1` (`id`, `nama_siswa`, `nama_panggilan`, `tmpt/tgl_lahir`, `agama`, `email`, `nomor_anak`, `user_id`) VALUES
(1, 'aka', 'kaka', 'ahah/5678', 'ankiss', 'sigma@gmail.com', 12345, 1),
(2, 'ss', 'kaka', 'ahah/5678', 'aaa', 'sigma@gmail.com', 1212121, 2),
(3, 'pp', 'as', 'ahah/5678', 'ankiss', 'sigma@gmail.com', 123, 3);

-- --------------------------------------------------------

--
-- Table structure for table `data2`
--

CREATE TABLE `data2` (
  `id` int NOT NULL,
  `nama_papa` text NOT NULL,
  `nama_mama` text NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nomor_ortu` int NOT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data2`
--

INSERT INTO `data2` (`id`, `nama_papa`, `nama_mama`, `alamat`, `nomor_ortu`, `user_id`) VALUES
(1, 'sdd', 'sss', 'asdsas', 12345432, 1),
(2, 'ss', 'ss', 'asdsas', 12345432, 2),
(3, 'sdd', 'sss', 'asdsas', 12345432, 3);

-- --------------------------------------------------------

--
-- Table structure for table `data3`
--

CREATE TABLE `data3` (
  `id` int NOT NULL,
  `NISN` int NOT NULL,
  `gender` text NOT NULL,
  `sekolah_asal` varchar(255) NOT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data3`
--

INSERT INTO `data3` (`id`, `NISN`, `gender`, `sekolah_asal`, `user_id`) VALUES
(1, 123, 'Perempuan', 'acung', 1),
(2, 123455, 'Laki-laki', 'acung', 2),
(3, 123, 'Laki-laki', 'acung', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin','staff') DEFAULT 'staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '111', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun sekolah`
--
ALTER TABLE `akun sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alasan`
--
ALTER TABLE `alasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data1`
--
ALTER TABLE `data1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data2`
--
ALTER TABLE `data2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data3`
--
ALTER TABLE `data3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun sekolah`
--
ALTER TABLE `akun sekolah`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `alasan`
--
ALTER TABLE `alasan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data1`
--
ALTER TABLE `data1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data2`
--
ALTER TABLE `data2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data3`
--
ALTER TABLE `data3`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
