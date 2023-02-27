-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for barkop
CREATE DATABASE IF NOT EXISTS `barkop` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `barkop`;

-- Dumping structure for table barkop.data_barkop
CREATE TABLE IF NOT EXISTS `data_barkop` (
  `id_barkop` int NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jumlah` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `beli` int NOT NULL,
  `jual` int NOT NULL,
  `laba` int NOT NULL,
  PRIMARY KEY (`id_barkop`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table barkop.data_barkop: ~4 rows (approximately)
INSERT INTO `data_barkop` (`id_barkop`, `tanggal`, `nama`, `jumlah`, `beli`, `jual`, `laba`) VALUES
	(3, '12/02/2023', 'tahu', '2 pack', 115000, 120000, 5000),
	(4, '23/09/2023', 'tempe', '1 pack', 63000, 72000, 9000),
	(32, '2023-02-15', 'jely', '1 pack', 5000, 1000, 10000),
	(33, '2023-02-01', 'jely', '12', 3000, 1500, 2000),
	(34, '2023-02-07', 'jajan', '12', 2000, 3000, 10000);

-- Dumping structure for table barkop.data_penitip
CREATE TABLE IF NOT EXISTS `data_penitip` (
  `id_barang` int NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `barang` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jumlah` int NOT NULL,
  `beli` int NOT NULL,
  `jual` int NOT NULL,
  `keluar` int NOT NULL,
  `sisa` int NOT NULL,
  `jumbel` int NOT NULL,
  `jumal` int NOT NULL,
  `laba` int NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table barkop.data_penitip: ~3 rows (approximately)
INSERT INTO `data_penitip` (`id_barang`, `tanggal`, `barang`, `jumlah`, `beli`, `jual`, `keluar`, `sisa`, `jumbel`, `jumal`, `laba`) VALUES
	(3, '12/03/2023', 'Sosis bakar', 35, 1800, 2000, 10, 5, 10000, 20000, 10000),
	(8, '11/02/2023', 'tahu', 15, 1000, 2000, 10, 5, 10000, 20000, 10000),
	(9, '12/08/2023', 'sate tahu', 20, 4000, 5000, 10, 10, 40000, 50000, 10000);

-- Dumping structure for table barkop.role
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table barkop.role: ~1 rows (approximately)
INSERT INTO `role` (`id_role`, `nama_role`) VALUES
	(1, 'Admin');

-- Dumping structure for table barkop.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(5) NOT NULL,
  `id_role` int NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `FK__role` (`id_role`),
  CONSTRAINT `FK__role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table barkop.user: ~1 rows (approximately)
INSERT INTO `user` (`id_user`, `username`, `password`, `id_role`) VALUES
	(1, 'Admin', '12345', 1);

-- Dumping structure for view barkop.view_user
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_user` (
	`id_role` INT(10) NOT NULL,
	`id_user` INT(10) NOT NULL,
	`username` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`password` VARCHAR(5) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`nama_role` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_0900_ai_ci'
) ENGINE=MyISAM;

-- Dumping structure for view barkop.view_user
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_user`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_user` AS select `user`.`id_role` AS `id_role`,`user`.`id_user` AS `id_user`,`user`.`username` AS `username`,`user`.`password` AS `password`,`role`.`nama_role` AS `nama_role` from (`user` join `role` on((`user`.`id_role` = `role`.`id_role`)));

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
