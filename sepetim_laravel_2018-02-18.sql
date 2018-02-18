# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.6.35)
# Database: sepetim_laravel
# Generation Time: 2018-02-18 19:40:13 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `productId` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `brandId` int(11) DEFAULT NULL,
  `brandName` varchar(255) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `sku` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `tax` varchar(10) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `image` varchar(2000) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `priceNot` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `productId`, `name`, `description`, `brandId`, `brandName`, `categoryId`, `categoryName`, `sku`, `stock`, `tax`, `category`, `image`, `price`, `priceNot`, `created_at`, `updated_at`)
VALUES
	(1,248534,'Renkli Taşlı Bileklik 248534',NULL,1,'Kripton',703,'Bileklik',109,0,'TAX18','Bileklik','http://via.placeholder.com/700x700',2000,0,'2018-02-10 23:59:23','2018-02-10 23:59:23'),
	(2,248535,'Renkli Taşlı Bileklik 248535',NULL,1,'Kripton',703,'Bileklik',110,10,'TAX18','Bileklik','http://via.placeholder.com/700x700',200,0,'2018-02-11 13:46:35','2018-02-11 13:46:35'),
	(3,248536,'Renkli Taşlı Bileklik 248536',NULL,1,'Kripton',703,'Bileklik',11,0,'TAX18','Bileklik','http://via.placeholder.com/700x700',210,225,'2018-02-11 13:50:16','2018-02-11 13:50:16'),
	(4,248537,'Renkli Taşlı Bileklik 248537',NULL,1,'Kripton',703,'Bileklik',112,12,'TAX18','Bileklik','http://via.placeholder.com/700x700',180,0,'2018-02-11 14:01:46','2018-02-11 14:01:46'),
	(13,248534,'Renkli Taşlı Bileklik 248534','0',1,'Kripton',703,'Bileklik',109,0,'TAX18','Bileklik','http://via.placeholder.com/700x700',2000,0,'2018-02-17 23:22:32','2018-02-17 23:22:32'),
	(14,248535,'Renkli Taşlı Bileklik 248535','0',1,'Kripton',703,'Bileklik',110,10,'TAX18','Bileklik','http://via.placeholder.com/700x700',200,0,'2018-02-17 23:22:32','2018-02-17 23:22:32'),
	(15,248536,'Renkli Taşlı Bileklik 248536','0',1,'Kripton',703,'Bileklik',111,0,'TAX18','Bileklik','http://via.placeholder.com/700x700',210,225,'2018-02-17 23:22:32','2018-02-17 23:22:32'),
	(16,248537,'Renkli Taşlı Bileklik 248537','0',1,'Kripton',703,'Bileklik',112,12,'TAX18','Bileklik','http://via.placeholder.com/700x700',180,0,'2018-02-17 23:22:32','2018-02-17 23:22:32'),
	(17,248534,'Renkli Taşlı Bileklik 248534','0',1,'Kripton',703,'Bileklik',109,0,'TAX18','Bileklik','http://via.placeholder.com/700x700',2000,0,'2018-02-17 23:24:23','2018-02-17 23:24:23'),
	(18,248535,'Renkli Taşlı Bileklik 248535','0',1,'Kripton',703,'Bileklik',110,10,'TAX18','Bileklik','http://via.placeholder.com/700x700',200,0,'2018-02-17 23:24:23','2018-02-17 23:24:23'),
	(19,248536,'Renkli Taşlı Bileklik 248536','0',1,'Kripton',703,'Bileklik',111,0,'TAX18','Bileklik','http://via.placeholder.com/700x700',210,225,'2018-02-17 23:24:23','2018-02-17 23:24:23'),
	(20,248537,'Renkli Taşlı Bileklik 248537','0',1,'Kripton',703,'Bileklik',112,12,'TAX18','Bileklik','http://via.placeholder.com/700x700',180,0,'2018-02-17 23:24:23','2018-02-17 23:24:23'),
	(21,248534,'Renkli Taşlı Bileklik 248534','0',1,'Kripton',703,'Bileklik',109,0,'TAX18','Bileklik','http://via.placeholder.com/700x700',2000,0,'2018-02-18 14:38:17','2018-02-18 14:38:17'),
	(22,248535,'Renkli Taşlı Bileklik 248535','0',1,'Kripton',703,'Bileklik',110,10,'TAX18','Bileklik','http://via.placeholder.com/700x700',200,0,'2018-02-18 14:38:17','2018-02-18 14:38:17'),
	(23,248536,'Renkli Taşlı Bileklik 248536','0',1,'Kripton',703,'Bileklik',111,0,'TAX18','Bileklik','http://via.placeholder.com/700x700',210,225,'2018-02-18 14:38:17','2018-02-18 14:38:17'),
	(24,248537,'Renkli Taşlı Bileklik 248537','0',1,'Kripton',703,'Bileklik',112,12,'TAX18','Bileklik','http://via.placeholder.com/700x700',180,0,'2018-02-18 14:38:17','2018-02-18 14:38:17'),
	(25,248534,'Renkli Taşlı Bileklik 248534','0',1,'Kripton',703,'Bileklik',109,0,'TAX18','Bileklik','http://via.placeholder.com/700x700',2000,0,'2018-02-18 14:39:27','2018-02-18 14:39:27'),
	(26,248535,'Renkli Taşlı Bileklik 248535','0',1,'Kripton',703,'Bileklik',110,10,'TAX18','Bileklik','http://via.placeholder.com/700x700',200,0,'2018-02-18 14:39:27','2018-02-18 14:39:27'),
	(27,248536,'Renkli Taşlı Bileklik 248536','0',1,'Kripton',703,'Bileklik',111,0,'TAX18','Bileklik','http://via.placeholder.com/700x700',210,225,'2018-02-18 14:39:27','2018-02-18 14:39:27'),
	(28,248537,'Renkli Taşlı Bileklik 248537','0',1,'Kripton',703,'Bileklik',112,12,'TAX18','Bileklik','http://via.placeholder.com/700x700',180,0,'2018-02-18 14:39:27','2018-02-18 14:39:27');

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
