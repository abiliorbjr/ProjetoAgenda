-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para projeto_agenda
CREATE DATABASE IF NOT EXISTS `projeto_agenda` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_agenda`;


-- Copiando estrutura para tabela projeto_agenda.compromissos
CREATE TABLE IF NOT EXISTS `compromissos` (
  `id_compromisso` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_compromisso` varchar(255) NOT NULL DEFAULT '0',
  `hora_inicio_teste` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hora_final_teste` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_compromisso`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_agenda.compromissos: ~25 rows (aproximadamente)
/*!40000 ALTER TABLE `compromissos` DISABLE KEYS */;
INSERT INTO `compromissos` (`id_compromisso`, `titulo_compromisso`, `hora_inicio_teste`, `hora_final_teste`) VALUES
	(1, 'primeiro agendamento', '2016-09-20 10:10:10', '2016-09-20 10:30:30'),
	(2, 'segundo agendamento', '2016-09-16 11:20:20', '2016-09-19 11:30:30'),
	(3, 'terceiro agendamento', '2016-10-04 20:20:20', '2016-10-06 21:21:21'),
	(4, 'quarto agendamento', '2016-09-12 10:10:10', '2016-09-16 23:23:00'),
	(5, 'quinto agendamento', '2016-09-11 15:15:00', '2016-09-11 15:30:00'),
	(6, 'jjgjg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(7, 'jhjhjh', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(8, 'oitavo agendamento', '2016-10-06 23:23:23', '2016-10-06 23:59:23'),
	(9, 'oitavo agendamento', '2016-10-06 23:24:23', '2016-10-06 23:29:23'),
	(10, 'oitavo agendamento', '2016-10-06 22:23:23', '2016-10-06 23:55:23'),
	(11, 'oitavo agendamento', '2016-10-06 23:23:33', '2016-10-06 23:40:23'),
	(12, 'oitavo agendamento', '2016-10-06 23:13:23', '2016-10-06 23:23:23'),
	(13, 'novo agendamento', '2016-10-09 10:10:10', '2016-10-14 20:20:20'),
	(14, 'vou estudar php', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(15, 'vou estudar php', '2016-09-13 10:10:00', '2016-09-15 12:30:00'),
	(16, 'ler o livro php', '2016-09-13 15:00:00', '2016-09-13 15:00:00'),
	(17, 'consulta da maju', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(18, 'consulta da maju', '2017-03-10 08:00:00', '2017-03-10 08:00:00'),
	(19, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(20, 'echo', '2016-09-20 08:00:30', '2016-09-20 08:00:30'),
	(21, 'aula', '2016-09-15 21:30:00', '2016-09-15 22:30:00'),
	(22, 'aula1', '2016-09-15 20:30:00', '2016-09-15 21:30:10'),
	(23, 'teste1', '2016-09-15 22:00:00', '2016-09-15 23:30:00'),
	(24, 'teste2', '2016-09-15 22:00:00', '2016-09-15 23:30:00'),
	(25, 'teste3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `compromissos` ENABLE KEYS */;


-- Copiando estrutura para tabela projeto_agenda.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(255) NOT NULL DEFAULT '0',
  `email_usuario` varchar(255) NOT NULL DEFAULT '0',
  `login_usuario` varchar(255) NOT NULL DEFAULT '0',
  `senha_usuario` varchar(255) NOT NULL DEFAULT '0',
  `telefone_usuario` varchar(15) NOT NULL DEFAULT '',
  `data_cadastro_usuario` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hora_cadastro_usuario` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_compromisso` date NOT NULL,
  `hora_compromisso` time NOT NULL,
  `status_usuario` enum('A','I') NOT NULL DEFAULT 'A',
  `compromisso` text NOT NULL,
  `nivel_acesso` enum('1','2') NOT NULL DEFAULT '2',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_agenda.usuarios: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email_usuario`, `login_usuario`, `senha_usuario`, `telefone_usuario`, `data_cadastro_usuario`, `hora_cadastro_usuario`, `data_compromisso`, `hora_compromisso`, `status_usuario`, `compromisso`, `nivel_acesso`) VALUES
	(1, 'abilio rodrigues bizerra junior', 'abiliorbjr@gmail.com', 'abiliorbjr', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '84313758', '2016-08-13 11:45:34', '2016-08-13 11:45:34', '0000-00-00', '00:00:00', 'A', '', '1'),
	(2, 'maria gabriela alves rodrigues ', 'gabiribas746@gmail.com', 'mgar', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '984727547', '2016-08-13 19:59:50', '2016-08-13 19:59:50', '0000-00-00', '00:00:00', 'A', '', '2'),
	(3, 'abilio rodrigues bizerra neto', 'abiliorbn@gmail.com', 'abiliorbn', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '', '2016-08-20 09:45:02', '2016-08-20 09:45:02', '0000-00-00', '00:00:00', 'A', '', '2'),
	(7, 'netinho', 'netinho@gmail.com', 'netinho', '1234', '95897874', '2016-08-29 12:30:29', '2016-08-29 12:30:29', '0000-00-00', '00:00:00', 'I', '', '2'),
	(8, 'speed rodrigues bizerra', 'speed@gmail.com', 'speed', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '898989', '2016-09-06 13:49:14', '2016-09-06 13:49:14', '0000-00-00', '00:00:00', 'A', '', '2'),
	(32, 'davi luca aureliano', 'davi@gmail.com', 'davi', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '6198986589', '2016-09-12 19:21:01', '2016-09-12 19:21:01', '0000-00-00', '00:00:00', 'A', '', '2'),
	(34, 'vania kelly alves rodrigues', 'vaniakellyalves@hotmail.com', 'vania kelly', '9cc7ca590689f49de731640ebac942708df79c46', '', '2016-09-14 17:07:11', '2016-09-14 17:07:11', '0000-00-00', '00:00:00', 'A', '', '2'),
	(35, 'maria julia alves rodrigues', 'mariajuliaar@gmail.com', 'majuar', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', '2016-09-14 17:14:36', '2016-09-14 17:14:36', '0000-00-00', '00:00:00', 'A', '', '2'),
	(39, '', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', '2016-09-14 17:50:36', '2016-09-14 17:50:36', '0000-00-00', '00:00:00', 'A', '', '2');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
