-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2024 at 11:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewa_mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_mobil`
--

CREATE TABLE `master_mobil` (
  `mobil_id` int(11) NOT NULL,
  `nama_mobil` varchar(100) DEFAULT NULL,
  `jenis_mobil` varchar(50) DEFAULT NULL,
  `tahun_pembuatan` int(11) DEFAULT NULL,
  `plat_nomor` varchar(20) DEFAULT NULL,
  `harga_sewa_per_hari` decimal(10,2) DEFAULT NULL,
  `link_gambar_mobil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_mobil`
--

INSERT INTO `master_mobil` (`mobil_id`, `nama_mobil`, `jenis_mobil`, `tahun_pembuatan`, `plat_nomor`, `harga_sewa_per_hari`, `link_gambar_mobil`) VALUES
(1, 'Toyota Avanza', 'MPV', 2020, 'B 1234 ABC', '250000.00', '2022_Toyota_Avanza_1.5_G_Toyota_Safety_Sense_W101RE_(20220403).jpg'),
(2, 'Honda Jazz', 'Hatchback', 2019, 'B 5678 DEF', '280000.00', 'honda-jazz_169.png'),
(3, 'Mitsubishi Xpander', 'MPV', 2021, 'B 91011 GHI', '300000.00', '32728_mitsubishi-expander.jpg'),
(4, 'Toyota Yaris', 'Hatchback', 2018, 'B 1213 JKL', '270000.00', '743817_copy_2455x1450-01.jpeg (2).png'),
(5, 'Suzuki Ertiga', 'MPV', 2019, 'B 1415 MNO', '260000.00', 'Metalic_magma_grey (1).png'),
(6, 'Honda Civic', 'Sedan', 2020, 'B 1617 PQR', '320000.00', 'Honda-Civic-Type-R.png'),
(7, 'Toyota Rush', 'SUV', 2021, 'B 1819 STU', '350000.00', 'toyota-rush-color-793938.png'),
(8, 'Nissan Livina', 'MPV', 2017, 'B 2021 VWX', '240000.00', 'nissan-livina-front-angle-low-view-702441.png'),
(9, 'Daihatsu Terios', 'SUV', 2019, 'B 2223 YZ1', '290000.00', 'images (5).jpeg'),
(10, 'Mazda CX-5', 'SUV', 2020, 'B 2425 234', '380000.00', '61ff8e88a094a.jpg'),
(20, 'Kia Seltos', 'SUV', 2022, 'B 3344 ST', '240000.00', 'kia-seltos-color-959683.png'),
(23, 'Mitsubishi Pajero Sport', 'SUV', 2018, 'B 9101 EF', '300000.00', '1627575723-pajero-4x4-greypng.png'),
(25, 'Ford Ranger', 'Pickup', 2017, 'B 3344 IJ', '280000.00', '2022-ford-ranger-wildtrak-in-the-forest.jpg'),
(27, 'Nissan X-Trail', 'SUV', 2020, 'B 7788 MN', '270000.00', 'download (6).jpeg'),
(28, 'Honda CR-V', 'SUV', 2018, 'B 9900 OP', '290000.00', 'zwQ0QU9yUvvlfHvhe7JHyF7Gj5qTSJ81wcodK5nM.png'),
(29, 'Hyundai H-1', 'Van', 2016, 'B 1122 QR', '320000.00', 'Hyunda_H-1-1548650572.jpeg'),
(36, 'Tesla Car', 'Mobil Listrik', 2002, 'B 3 GO', '1200000.00', '098675400_1618208945-liputan6-tesla-01.jpg'),
(38, 'Fortuner', 'Sedan Besar', 2007, 'L 0922 PK', '340000.00', 'images (3).jpeg'),
(42, 'Neta GT', 'Sports Cars', 2016, 'L 2087 LG', '10000000.00', 'whatsapp-image-2023-09-25-at-23-20230925105855.jpeg'),
(43, 'Lamborghini Aventador', 'Mobil Sport', 2021, 'B 3 HA', '3000000.00', 'download (5).jpeg'),
(46, 'Mercedes Benz W-124', 'Sedan', 1984, 'L 000 S', '300000.00', '867386973.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `master_pesanan`
--

CREATE TABLE `master_pesanan` (
  `pesanan_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `mobil_id` int(11) DEFAULT NULL,
  `tipe_pembayaran_id` int(11) DEFAULT NULL,
  `tanggal_pemesanan` date DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  `status_pesanan` varchar(20) DEFAULT NULL,
  `total` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_pesanan`
--

INSERT INTO `master_pesanan` (`pesanan_id`, `user_id`, `mobil_id`, `tipe_pembayaran_id`, `tanggal_pemesanan`, `tanggal_akhir`, `status_pesanan`, `total`) VALUES
(1, 1, 1, 2, '2024-03-05', '2024-03-06', 'Selesai', 250000),
(2, 2, 3, 2, '2024-03-06', '2024-03-09', 'Selesai', 900000),
(3, 3, 5, 2, '2024-03-04', '2024-03-06', 'Selesai', 520000),
(4, 4, 2, 1, '2024-03-07', '2024-03-10', 'Selesai', 840000),
(5, 5, 8, 2, '2024-03-03', '2024-03-08', 'Selesai', 1200000),
(6, 6, 4, 1, '2024-03-09', '2024-03-13', 'Selesai', 1080000),
(7, 7, 6, 2, '2024-03-02', '2024-03-13', 'Selesai', 3520000),
(8, 8, 9, 2, '2024-03-08', '2024-03-10', 'Selesai', 580000),
(9, 9, 10, 2, '2024-03-05', '2024-03-10', 'Selesai', 1900000),
(10, 10, 7, 2, '2024-03-10', '2024-03-12', 'Selesai', 700000),
(13, 21, 3, 2, '2024-03-16', '2024-03-20', 'Selesai', 1200000),
(14, 22, 23, 1, '2024-03-16', '2024-03-19', 'Selesai', 900000),
(15, 23, 28, 2, '2024-03-17', '2024-03-19', 'Selesai', 580000),
(18, 26, 38, 2, '2024-03-17', '2024-03-18', 'Selesai', 340000),
(19, 27, 29, 2, '2024-03-17', '2024-03-20', 'Selesai', 960000),
(20, 28, 38, 2, '2024-03-17', '2024-03-19', 'Selesai', 680000),
(21, 29, 2, 2, '2024-03-15', '2024-03-17', 'Selesai', 560000),
(22, 30, 4, 1, '2024-03-03', '2024-03-04', 'Selesai', 270000),
(23, 31, 3, 2, '2024-03-15', '2024-03-16', 'Selesai', 300000),
(24, 32, 2, 2, '2024-03-15', '2024-03-16', 'Proses', 280000);

-- --------------------------------------------------------

--
-- Table structure for table `master_riwayat_transaksi`
--

CREATE TABLE `master_riwayat_transaksi` (
  `riwayat_id` int(11) NOT NULL,
  `pesanan_id` int(11) DEFAULT NULL,
  `tanggal_transaksi` date DEFAULT NULL,
  `status_pembayaran` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_riwayat_transaksi`
--

INSERT INTO `master_riwayat_transaksi` (`riwayat_id`, `pesanan_id`, `tanggal_transaksi`, `status_pembayaran`) VALUES
(1, 1, '2024-03-15', 'Lunas'),
(2, 2, '2024-03-14', 'Lunas'),
(3, 3, '2024-03-13', 'Lunas'),
(4, 4, '2024-03-17', 'Lunas'),
(5, 5, '2024-03-12', 'Lunas'),
(6, 6, '2024-03-18', 'Lunas'),
(7, 7, '2024-03-11', 'Lunas'),
(8, 8, '2024-03-16', 'Lunas'),
(9, 9, '2024-03-14', 'Lunas'),
(10, 10, '2024-03-19', 'Lunas'),
(11, 15, '2024-03-16', 'Lunas'),
(12, 18, '2024-03-16', 'Lunas'),
(13, 19, '2024-03-16', 'Lunas'),
(14, 20, '2024-03-17', 'Lunas'),
(15, 22, '2024-03-17', 'Lunas'),
(16, 23, '2024-03-17', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `master_tipe_pembayaran`
--

CREATE TABLE `master_tipe_pembayaran` (
  `tipe_pembayaran_id` int(11) NOT NULL,
  `tipe_pembayaran` varchar(50) DEFAULT NULL,
  `kategori_tipe_pembayaran` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_tipe_pembayaran`
--

INSERT INTO `master_tipe_pembayaran` (`tipe_pembayaran_id`, `tipe_pembayaran`, `kategori_tipe_pembayaran`) VALUES
(1, 'OVO', 'Non-Tunai'),
(2, 'Gopay', 'Non-Tunai'),
(11, 'Tunai', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `master_user`
--

CREATE TABLE `master_user` (
  `user_id` int(11) NOT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nomor_telepon` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_user`
--

INSERT INTO `master_user` (`user_id`, `nama_user`, `alamat`, `nomor_telepon`, `email`) VALUES
(1, 'John Doe', 'Jl. Raya No. 123', '081234567890', 'john.doe@example.com'),
(2, 'Jane Smith', 'Jl. Melati No. 456', '087654321098', 'jane.smith@example.com'),
(3, 'Michael Johnson', 'Jl. Anggrek No. 789', '089876543210', 'michael.johnson@example.com'),
(4, 'Emily Brown', 'Jl. Mawar No. 1011', '081298765432', 'emily.brown@example.com'),
(5, 'Daniel Lee', 'Jl. Sakura No. 1213', '085432187654', 'daniel.lee@example.com'),
(6, 'Sarah Williams', 'Jl. Tulip No. 1415', '089765432189', 'sarah.williams@example.com'),
(7, 'David Martinez', 'Jl. Cempaka No. 1617', '087654321987', 'david.martinez@example.com'),
(8, 'Jessica Garcia', 'Jl. Dahlia No. 1819', '081234567898', 'jessica.garcia@example.com'),
(9, 'Matthew Rodriguez', 'Jl. Lily No. 2021', '089876543211', 'matthew.rodriguez@example.com'),
(10, 'Olivia Lopez', 'Jl. Violet No. 2223', '085432187655', 'olivia.lopez@example.com'),
(11, 'Danara Dhasa Caesa', 'Permata Safira Regency, Lidah Kulon, Lakarsantri, Surabaya, Jawa Timur, 60213', '081234463364', 'dcdanara@gmail.com'),
(19, 'Azmi', 'OKOK', '092', 'Azmi@gmail.com'),
(20, 'Joko', 'Istana Negara Bogor', '1111', 'jokowidodo@gmail.com'),
(21, 'Rodek', 'Surabaya', '211212', 'rodek@gmail.com'),
(22, 'Danny', 'Permata Safira Regency, Lidah Kulon, Lakarsantri, Surabaya, Jawa Timur, 60213', '0998198212', 'danny@gmail.com'),
(23, 'Mbak Friska', 'Mojokerto', '124124124', 'MbakFriska@gmail.com'),
(24, 'Mas Dimas', 'Permata Safira Regency, Lidah Kulon, Lakarsantri, Surabaya, Jawa Timur, 60213', '78933131', 'masdimas@gmail.com'),
(25, 'SBY', 'SBY', '2121', 'SBY@gmail.com'),
(26, 'SBY', 'Permata Safira Regency, Lidah Kulon, Lakarsantri, Surabaya, Jawa Timur, 60213', '1239813', 'SBY@gmail.com'),
(27, 'Hello World', 'Hello World', '333333', 'hello@gmail.com'),
(28, 'Brian Dewantoro', 'Permata Safira Regency, Lidah Kulon, Lakarsantri, Surabaya, Jawa Timur, 60213', '19381938', 'ineltyadjiefaizah@gmail.com'),
(29, 'Mas Azmi', 'Jombang', '20128109210', 'azmi@gmail.com'),
(30, 'Mas Danara', 'Surabaya', '02102910201', 'danara@gmail.com'),
(31, 'Dimas Anjay', 'Surabaya Losss', '0928018010219', 'adimasae@mail.com'),
(32, 'KISAWA', 'Sidoarjo', '081717829239', 'kisawa@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_mobil`
--
ALTER TABLE `master_mobil`
  ADD PRIMARY KEY (`mobil_id`);

--
-- Indexes for table `master_pesanan`
--
ALTER TABLE `master_pesanan`
  ADD PRIMARY KEY (`pesanan_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `mobil_id` (`mobil_id`),
  ADD KEY `tipe_pembayaran_id` (`tipe_pembayaran_id`);

--
-- Indexes for table `master_riwayat_transaksi`
--
ALTER TABLE `master_riwayat_transaksi`
  ADD PRIMARY KEY (`riwayat_id`),
  ADD KEY `pesanan_id` (`pesanan_id`);

--
-- Indexes for table `master_tipe_pembayaran`
--
ALTER TABLE `master_tipe_pembayaran`
  ADD PRIMARY KEY (`tipe_pembayaran_id`);

--
-- Indexes for table `master_user`
--
ALTER TABLE `master_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_mobil`
--
ALTER TABLE `master_mobil`
  MODIFY `mobil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `master_pesanan`
--
ALTER TABLE `master_pesanan`
  MODIFY `pesanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `master_riwayat_transaksi`
--
ALTER TABLE `master_riwayat_transaksi`
  MODIFY `riwayat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `master_tipe_pembayaran`
--
ALTER TABLE `master_tipe_pembayaran`
  MODIFY `tipe_pembayaran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `master_user`
--
ALTER TABLE `master_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `master_pesanan`
--
ALTER TABLE `master_pesanan`
  ADD CONSTRAINT `master_pesanan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `master_user` (`user_id`),
  ADD CONSTRAINT `master_pesanan_ibfk_2` FOREIGN KEY (`mobil_id`) REFERENCES `master_mobil` (`mobil_id`),
  ADD CONSTRAINT `master_pesanan_ibfk_3` FOREIGN KEY (`tipe_pembayaran_id`) REFERENCES `master_tipe_pembayaran` (`tipe_pembayaran_id`);

--
-- Constraints for table `master_riwayat_transaksi`
--
ALTER TABLE `master_riwayat_transaksi`
  ADD CONSTRAINT `master_riwayat_transaksi_ibfk_1` FOREIGN KEY (`pesanan_id`) REFERENCES `master_pesanan` (`pesanan_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
