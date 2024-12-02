-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2024 at 04:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtaxiafriza`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Id_Booking` int(11) NOT NULL,
  `Tanggal` date DEFAULT NULL,
  `Jarak` varchar(10) DEFAULT NULL,
  `Waktu_tempuh` varchar(10) DEFAULT NULL,
  `Kota_pemesanan` varchar(20) DEFAULT NULL,
  `Alamat_asal` varchar(150) DEFAULT NULL,
  `Alamat_tujuan` varchar(150) DEFAULT NULL,
  `Waktu_tiba` varchar(10) DEFAULT NULL,
  `No_driver` varchar(20) NOT NULL,
  `Harga_perkilo` varchar(25) NOT NULL,
  `Id_Pemesan` varchar(20) NOT NULL,
  `Meter_fare` varchar(25) DEFAULT NULL,
  `Actual_fare` varchar(25) DEFAULT NULL,
  `Waktu_awal` varchar(10) DEFAULT NULL,
  `Diskon` varchar(5) DEFAULT NULL,
  `Extra` varchar(5) DEFAULT NULL,
  `Total` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Id_Booking`, `Tanggal`, `Jarak`, `Waktu_tempuh`, `Kota_pemesanan`, `Alamat_asal`, `Alamat_tujuan`, `Waktu_tiba`, `No_driver`, `Harga_perkilo`, `Id_Pemesan`, `Meter_fare`, `Actual_fare`, `Waktu_awal`, `Diskon`, `Extra`, `Total`) VALUES
(1322041, '2024-06-01', '10 Km', '65 Menit', 'Jakarta', 'Jalan letjend suprapto,cempaka putih, Kota jakarta pusat', 'Jalan seskoal, kota jakarta barat', '10:30', 'RXK6743', '', '1', '200000', '200000', '09:25', '0', '0', '200000'),
(55271623, '2024-06-20', '5 Km', '15 Menit', 'Tegal', 'Jalan Melati, pakembaran,slawi,tegal', 'Jalan rusa, trayeman,slawi,tegal', '10:00', 'X452RDS', 'Rp.4000', '3', '20000', '20000', '09:45', '0', '0', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `No_driver` varchar(20) NOT NULL,
  `Nama_driver` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`No_driver`, `Nama_driver`) VALUES
('BG514HW', 'Riski Kismann'),
('RXK6743', 'Yudistiraaa'),
('X452RDS', 'Toni Sucipta');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `Id_pemesan` varchar(20) NOT NULL,
  `Nama_pemesan` varchar(50) NOT NULL,
  `No_telepon_pemesan` int(11) DEFAULT NULL,
  `Email_pemesan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`Id_pemesan`, `Nama_pemesan`, `No_telepon_pemesan`, `Email_pemesan`) VALUES
('1', 'Rafi Afriza', 2147483647, 'nanangdorris@gmail.com'),
('2', 'GB Adi', 0, 'galihBadi@gmail.com'),
('3', 'Revalin', 0, 'pecellele@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Id_Booking`),
  ADD KEY `idpemesan` (`Id_Pemesan`),
  ADD KEY `nodrive` (`No_driver`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`No_driver`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`Id_pemesan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `idpemesan` FOREIGN KEY (`Id_Pemesan`) REFERENCES `pelanggan` (`Id_pemesan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nodrive` FOREIGN KEY (`No_driver`) REFERENCES `driver` (`No_driver`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
