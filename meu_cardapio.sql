-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.38-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para meu_cardapio
CREATE DATABASE IF NOT EXISTS `meu_cardapio` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `meu_cardapio`;

-- Copiando estrutura para tabela meu_cardapio.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `nome_empresa` varchar(50) DEFAULT NULL,
  `telefone_empresa` varchar(15) DEFAULT NULL,
  `cnpj_empresa` varchar(15) DEFAULT NULL,
  `email_empresa` varchar(50) DEFAULT NULL,
  `senha_empresa` varchar(50) DEFAULT NULL,
  `url_empresa` varchar(50) DEFAULT NULL,
  `imagem_empresa` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela meu_cardapio.empresa: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` (`id_empresa`, `nome_empresa`, `telefone_empresa`, `cnpj_empresa`, `email_empresa`, `senha_empresa`, `url_empresa`, `imagem_empresa`) VALUES
	(1, 'Kabuloso', '1338541319', '413123434', 'kabu@hotmail.com', '123', 'kabuloso', 'clientes_kabuloso.png'),
	(2, 'Tia Bete', '1399999999', '87676768', 'tiabete@uol.com.br', '1234', 'tiabete', 'clientes_tiabete.png'),
	(51, 'Beto Lanches', '1390909090', '03123808', 'beto@uol.com.br', '1234', 'betolanches', 'clientes_beto.png');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;

-- Copiando estrutura para tabela meu_cardapio.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL,
  `id_empresa` int(11) DEFAULT NULL,
  `produto_menu` varchar(30) DEFAULT NULL,
  `descricao_menu` varchar(100) NOT NULL DEFAULT '',
  `valor_menu` double DEFAULT NULL,
  `secao_menu` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela meu_cardapio.menu: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`id_menu`, `id_empresa`, `produto_menu`, `descricao_menu`, `valor_menu`, `secao_menu`) VALUES
	(1, 1, 'X-Salada', 'pao, hamburguer e queijo', 12.89, 'Lanches'),
	(2, 1, 'X-Tudo', 'pao, hamburguer e queijo, ovo, bacon, calabresa, e tudo', 17.89, 'Lanches'),
	(3, 1, 'Coca-Cola', 'lata de 350ml', 4.5, 'Bebidas'),
	(4, 1, 'Bife Grelhado', 'arroz, feijao, contra file e ovo frito', 22.89, 'Pratos'),
	(5, 1, 'Fritas P', 'batata frita com 100g', 6.5, 'Porcoes'),
	(6, 1, 'X-bacon', 'dasojdijas', 7.9, 'Lanches'),
	(22, 2, 'Prato Comercial', 'Arroz, Feijao, bife acebolado, e pure de batata', 26.9, 'Pratos');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
