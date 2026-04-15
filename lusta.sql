-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table lusta.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lusta.categories: ~2 rows (approximately)
INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Shamppo', '', '2026-01-31 12:22:49', '2026-01-31 12:22:49'),
	(2, 'Equipment', '', '2026-01-31 12:22:49', '2026-01-31 12:22:49');

-- Dumping structure for table lusta.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `stock` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  KEY `products_user_id_foreign` (`user_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lusta.products: ~27 rows (approximately)
INSERT INTO `products` (`id`, `category_id`, `user_id`, `name`, `description`, `image`, `status`, `price`, `stock`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 'Lusta Premium Vehicle Shampoo 250ml', 'Professional vehicle shampoo with a pH-balanced formulation and stable foam to effectively remove dirt, dust, and light oil residue. Designed for safe, regular use without damaging paint, stickers, plastic, or coatings.', 'Product_698167b5132f2.jpg', 'active', 15000, 11, '2025-01-31 20:08:36', '2026-02-02 20:52:36'),
	(2, 1, 1, 'Lusta Premium Vehicle Shampoo 500ml', 'Professional vehicle shampoo with a pH-balanced formulation and stable foam to effectively remove dirt, dust, and light oil residue. Designed for safe, regular use without damaging paint, stickers, plastic, or coatings.', 'Product_6981699e68b1b.jpg', 'active', 35000, 15, '2026-01-31 20:09:57', '2026-02-02 23:33:22'),
	(7, 1, 1, 'Bundle Lusta Premium Vehicle Shampoo 250ml ', 'Professional vehicle shampoo with a pH-balanced formulation and stable foam to effectively remove dirt, dust, and light oil residue. Designed for safe, regular use without damaging paint, stickers, plastic, or coatings.', 'Product_69816b1b2c38c.jpg', 'active', 30000, 10, '2026-02-02 20:27:23', '2026-02-02 20:52:16'),
	(16, 1, 1, 'Bundle Lusta Premium Vehicle Shampoo 500ml ', 'Professional vehicle shampoo with a pH-balanced formulation and stable foam to effectively remove dirt, dust, and light oil residue. Designed for safe, regular use without damaging paint, stickers, plastic, or coatings.', 'Product_698170256cbc6.jpg', 'active', 35000, 7, '2026-02-02 20:48:53', '2026-02-02 20:56:25'),
	(17, 2, 1, ' Microfiber Motorcycle Duster', 'High-quality microfiber cloths for drying and cleaning vehicles without leaving streaks. The fine fibers offer optimal absorption, making them safe for use on paint, glass, and sensitive vehicle surfaces.', 'Product_698170a0aac3a.jpg', 'active', 10000, 25, '2026-02-02 20:50:56', NULL),
	(18, 2, 1, 'Motorcycle Washing Sponge', 'A soft-textured motorcycle wash sponge that helps remove dirt without damaging the paint. Designed for a comfortable grip and safe for daily motorcycle maintenance and salon use.', 'Product_69817143015e4.jpg', 'active', 10000, 30, '2026-02-02 20:53:39', NULL),
	(19, 2, 1, 'Motorcycle Detailing Brushes – Iron, Aluminum & Plastic', 'A detailing brush with firmer yet safe bristles, specifically designed for cleaning non-painted areas such as metal, aluminum, and plastic components. Effectively removes stubborn dirt from engine bays and frame crevices.', 'Product_698171924e0ec.jpg', 'active', 5000, 20, '2026-02-02 20:54:58', NULL),
	(40, 1, 1, 'Product A', 'Deskripsi random A', 'default', 'deactive', 50000, 20, NULL, NULL),
	(41, 2, 1, 'Product B', 'Deskripsi random B', 'default', 'deactive', 500000, 20, NULL, NULL),
	(42, 1, 1, 'Product C', 'Deskripsi random C', 'default', 'deactive', 900000, 20, NULL, NULL),
	(43, 2, 1, 'Product D', 'Deskripsi random D', 'default', 'deactive', 800000, 20, NULL, NULL),
	(44, 1, 1, 'Product E', 'Deskripsi random E', 'default', 'deactive', 100000, 20, NULL, NULL),
	(45, 2, 1, 'Product F', 'Deskripsi random F', 'default', 'deactive', 5002000, 20, NULL, NULL),
	(46, 1, 1, 'Product G', 'Deskripsi random G', 'default', 'deactive', 5008900, 20, NULL, NULL),
	(47, 2, 1, 'Product H', 'Deskripsi random H', 'default', 'deactive', 5090000, 20, NULL, NULL),
	(48, 1, 1, 'Product I', 'Deskripsi random I', 'default', 'deactive', 5000900, 20, NULL, NULL),
	(49, 2, 1, 'Product J', 'Deskripsi random J', 'default', 'deactive', 5009800, 20, NULL, NULL),
	(50, 1, 1, 'Product K', 'Deskripsi random K', 'default', 'deactive', 50000, 20, NULL, NULL),
	(51, 2, 1, 'Product L', 'Deskripsi random L', 'default', 'deactive', 50000, 20, NULL, NULL),
	(52, 1, 1, 'Product M', 'Deskripsi random M', 'default', 'deactive', 5002300, 20, NULL, NULL),
	(53, 2, 1, 'Product N', 'Deskripsi random N', 'default', 'deactive', 50000, 20, NULL, NULL),
	(54, 1, 1, 'Product O', 'Deskripsi random O', 'default', 'deactive', 5000230, 20, NULL, NULL),
	(55, 2, 1, 'Product P', 'Deskripsi random P', 'default', 'deactive', 50000, 20, NULL, NULL),
	(56, 1, 1, 'Product Q', 'Deskripsi random Q', 'default', 'deactive', 50000, 20, NULL, NULL),
	(57, 2, 1, 'Product R', 'Deskripsi random R', 'default', 'deactive', 50000, 20, NULL, NULL),
	(58, 1, 1, 'Product S', 'Deskripsi random S', 'default', 'deactive', 50000, 20, NULL, NULL),
	(59, 2, 1, 'Product T', 'Deskripsi random T', 'default', 'deactive', 50000, 20, NULL, NULL),
	(63, 1, 1, 'test', 'kjfbefekjf', 'Product_6981bd491b72e.png', 'active', 88085, 9, '2026-02-03 02:18:01', NULL);

-- Dumping structure for table lusta.product_link
DROP TABLE IF EXISTS `product_link`;
CREATE TABLE IF NOT EXISTS `product_link` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned NOT NULL,
  `platform` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_link_product_id_foreign` (`product_id`),
  CONSTRAINT `product_link_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lusta.product_link: ~5 rows (approximately)
INSERT INTO `product_link` (`id`, `product_id`, `platform`, `url`, `created_at`, `updated_at`) VALUES
	(1, 1, 'tokopedia', 'https://shopee.co.id/', NULL, NULL),
	(2, 1, 'bukalapak', 'https://shopee.co.id/', NULL, NULL),
	(3, 1, 'lazada', 'https://shopee.co.id/ui', NULL, NULL),
	(9, 2, 'shopee', 'https://shopee.co.id/Lusta-Shampo-Kendaraan-Premium-500ml-(Shampoo-Only)-i.1678979838.44553141186?extraParams=%7B%22display_model_id%22%3A149331926007%7D', NULL, NULL),
	(12, 2, 'tokopedia', 'https://www.tokopedia.com/', NULL, NULL);

-- Dumping structure for table lusta.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lusta.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
	(1, 'Yume Kaneshiro', 'Yume@gmail.com', '$2y$12$hkv72CR3FV7DzM0jv0hvDOXMPnVympKOX60RlGOogqpqAJ0hdyfnm', '2026-01-31 12:22:49', '2026-01-31 12:22:49');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
