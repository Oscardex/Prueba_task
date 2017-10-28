-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.13-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para prueba
DROP DATABASE IF EXISTS `prueba`;
CREATE DATABASE IF NOT EXISTS `prueba` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `prueba`;

-- Volcando estructura para tabla prueba.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla prueba.migrations: ~2 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla prueba.parametros
DROP TABLE IF EXISTS `parametros`;
CREATE TABLE IF NOT EXISTS `parametros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_parametro_id` int(11) DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parametros_id_FK_tipo_parametro_id_FK` (`tipo_parametro_id`),
  CONSTRAINT `parametros_id_FK_tipo_parametro_id_FK` FOREIGN KEY (`tipo_parametro_id`) REFERENCES `tipo_parametro` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla prueba.parametros: ~4 rows (aproximadamente)
DELETE FROM `parametros`;
/*!40000 ALTER TABLE `parametros` DISABLE KEYS */;
INSERT INTO `parametros` (`id`, `tipo_parametro_id`, `nombre`, `descripcion`) VALUES
	(1, 1, 'Usuario', NULL),
	(2, 1, 'VIP', NULL),
	(3, 2, 'Computador', NULL),
	(4, 2, 'Mesa', NULL);
/*!40000 ALTER TABLE `parametros` ENABLE KEYS */;

-- Volcando estructura para tabla prueba.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla prueba.password_resets: ~0 rows (aproximadamente)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla prueba.productos
DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `costo` int(11) NOT NULL,
  `categoria` int(11) NOT NULL DEFAULT '0',
  `usuario` int(11) unsigned NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `productos_FK_Categoria_parametros_id_FK` (`categoria`),
  KEY `usuario_id _FK_users_id_FK` (`usuario`),
  CONSTRAINT `productos_FK_Categoria_parametros_id_FK` FOREIGN KEY (`categoria`) REFERENCES `parametros` (`id`),
  CONSTRAINT `usuario_id _FK_users_id_FK` FOREIGN KEY (`usuario`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla prueba.productos: ~7 rows (aproximadamente)
DELETE FROM `productos`;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `costo`, `categoria`, `usuario`, `updated_at`, `created_at`) VALUES
	(1, 'Computa', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 20, 3, 1, '2017-10-28 04:40:31', '2017-10-27 16:41:10'),
	(2, 'Computador H', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 2000, 4, 1, '2017-10-28 16:40:13', '2017-10-27 16:41:10'),
	(4, 'Computador HP', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 15, 3, 1, '2017-10-27 19:03:29', '2017-10-27 16:41:10'),
	(5, 'Computador HP', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 15, 4, 1, '2017-10-27 22:42:04', '2017-10-27 16:41:10'),
	(6, 'Computador P', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 15, 3, 1, '2017-10-27 20:37:27', '2017-10-27 16:41:10'),
	(7, 'Computador HP', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 15, 3, 1, '2017-10-27 19:03:37', '2017-10-27 16:41:10'),
	(8, 'oscar', 'adsfads lorem ipsum ajsjdajsdjfjadsf', 1234132, 3, 1, '2017-10-28 16:56:20', '2017-10-28 16:54:07'),
	(9, 'Super computador', 'asdfasdf', 234234, 3, 1, '2017-10-28 17:14:55', '2017-10-28 17:14:55'),
	(10, 'asdfa', 'adsfa', 654356, 3, 1, '2017-10-28 17:22:29', '2017-10-28 17:22:29'),
	(11, 'adsfasdfadsfadsf', 'adsfasdfkahsdfkjahsdkfl', 234234, 3, 1, '2017-10-28 17:27:13', '2017-10-28 17:27:13'),
	(12, 'asdfads', 'asdfasd', 234234, 3, 1, '2017-10-28 17:31:03', '2017-10-28 17:31:03'),
	(13, 'adsfasd', 'adsfasdf', 23452345, 3, 1, '2017-10-28 17:31:57', '2017-10-28 17:31:57'),
	(14, 'asdfasdf', 'hgfhgf', 65464, 3, 1, '2017-10-28 17:33:11', '2017-10-28 17:33:11'),
	(15, 'asdfads', 'adsfasd', 1234123, 3, 1, '2017-10-28 17:33:49', '2017-10-28 17:33:49');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla prueba.tipo_parametro
DROP TABLE IF EXISTS `tipo_parametro`;
CREATE TABLE IF NOT EXISTS `tipo_parametro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla prueba.tipo_parametro: ~2 rows (aproximadamente)
DELETE FROM `tipo_parametro`;
/*!40000 ALTER TABLE `tipo_parametro` DISABLE KEYS */;
INSERT INTO `tipo_parametro` (`id`, `nombre`) VALUES
	(1, 'Rol'),
	(2, 'Categoria');
/*!40000 ALTER TABLE `tipo_parametro` ENABLE KEYS */;

-- Volcando estructura para tabla prueba.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `rol_id_FK_parametro_id` (`rol_id`),
  CONSTRAINT `rol_id_FK_parametro_id` FOREIGN KEY (`rol_id`) REFERENCES `parametros` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla prueba.users: ~0 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `rol_id`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin', 'oscardex1596@hotmail.com', '$2y$10$sPApceO9CYbAK1ZKdIySFeMR7FQ6Zk8WUyHpQPgDQRMurqSqrdpVS', 1, '9YfosJn3BT6AMwmuBtPBx1wlJpS8MI6Jtx1c702y1lC6HdO6I8t5ZAvtzKXX', '2017-10-27 18:56:12', '2017-10-28 17:35:55'),
	(2, 'Usuario', 'Usuario', 'oscarderian@hotmail.com', '$2y$10$JVP.kzF1/87.ocgbpKCaE.91AxgJ.WeHOX525n.gT4cm09b193bry', NULL, 'NC5JFfC8c2Oi4tdrbpruOXnwiHXbnWuI7bSPY4ghJaJJtxxmHUfW4P42MZxK', '2017-10-28 17:37:05', '2017-10-28 17:43:39');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
