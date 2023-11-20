-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando estrutura para tabela c2adsgrupo01.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela c2adsgrupo01.admin: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela c2adsgrupo01.relatorio_erros
CREATE TABLE IF NOT EXISTS `relatorio_erros` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sala` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mensagem` text COLLATE utf8mb4_general_ci NOT NULL,
  `arquivo_media` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_envio` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `resolvido` tinyint NOT NULL COMMENT '1 = resolvido, 0 = não resolvido',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela c2adsgrupo01.relatorio_erros: ~7 rows (aproximadamente)
INSERT INTO `relatorio_erros` (`id`, `sala`, `mensagem`, `arquivo_media`, `data_envio`, `resolvido`) VALUES
	(1, NULL, 'deu certo', NULL, '2023-11-16 04:16:44', 0),
	(2, NULL, 'teste', '', '2023-11-16 03:51:01', 0),
	(3, NULL, 'teste', '', '2023-11-16 03:53:14', 0),
	(9, 'labolatório 4', 'teste delete\r\n', '', '2023-11-20 03:51:46', 0),
	(10, NULL, 'teste texto grande', '', '2023-11-20 03:53:09', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
