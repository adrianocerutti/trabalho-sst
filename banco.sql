-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.21 - Source distribution
-- OS do Servidor:               Linux
-- HeidiSQL Versão:              9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- Copiando dados para a tabela trabalho-sst.requisitos: 15 rows
DELETE FROM `requisitos`;
/*!40000 ALTER TABLE `requisitos` DISABLE KEYS */;
INSERT INTO `requisitos` (`id`, `patrimonio`, `lacre`, `inmetro`, `tipo`, `lt_kg`, `data_recarga`, `prox_recarga`, `localizacao`, `validade_extintor`, `sinalizacao`, `placas`) VALUES
	(76, '28822', '54570', '138070821', 'BC', '4', '2015-04-01', '2016-04-01', 'Corredor térreo H e G', '2019-01-01', 'Não existente', 'OK'),
	(77, '28956', '54539', '138070820', 'BC', '4', '2015-04-01', '2016-04-01', 'Em frente a sala 9G', '2017-01-01', 'Não existente', 'OK'),
	(78, '34382', '54673', '138070799', 'A', '10', '2015-05-01', '2016-04-01', 'Banheiro 1º andar', '2019-01-01', 'Não existente', 'OK'),
	(66, '5694', '48010', '133338029', 'A', '10', '2015-02-01', '2016-02-01', 'Sala 27G', '2019-01-01', 'Não existente', 'OK'),
	(67, '5750', '48030', '133338027', 'A', '10', '2015-02-01', '2016-02-01', 'Em frente a sala 20H', '2017-01-01', 'Não existente', 'OK'),
	(68, '5915', '54509', '138070847', 'BC', '4', '2015-04-01', '2016-04-01', 'Em frente ao banheiro térreo, Bloco G', '2017-01-01', 'Não existente', 'OK'),
	(69, '5928', '54583', '138070841', 'BC', '4', '2015-04-01', '2016-04-01', 'Em frente a sala 18H', '2017-01-01', 'Não existente', 'OK'),
	(70, '6554', '48067', '133338060', 'BC', '4', '2015-02-01', '2016-02-01', 'Em frente a sala 1G', '2020-01-01', 'Não existente', 'OK'),
	(71, '7489', '53458', '138070786', 'A', '10', '2015-04-01', '2016-04-01', 'Porta da sala 10H', '0000-00-00', 'Não existente', 'OK'),
	(72, '8386', '54585', '138070851', 'BC', '4', '2015-04-01', '2016-04-01', '-', '2019-01-01', 'Não existente', 'OK'),
	(73, '11829', '54601', '138070791', 'A', '10', '2015-04-01', '2016-04-01', 'Em frente ao banheiro Bloco G', '2017-01-01', 'Não existente', 'OK'),
	(74, '12093', '53416', '138070792', 'A', '10', '2015-04-01', '2016-04-01', 'Sala 17G', '2019-01-01', 'Não existente', 'OK'),
	(75, '28161', '46791', '133338102', 'BC', '4', '2015-02-01', '2016-02-01', 'Em frente ao banheiro térreo, Bloco H', '2019-01-01', 'Não existente', 'OK'),
	(64, '2463', '54521', '138070865', 'BC', '4', '2015-04-01', '2016-04-01', 'Em frente a sala 23H', '2017-01-01', 'Não existente', 'OK'),
	(65, '5427', '48016', '133338045', 'A', '10', '2015-02-01', '2016-02-01', 'Em frente a sala do áudio visual, Bloco G', '2018-01-01', 'Não Existente', 'OK');
/*!40000 ALTER TABLE `requisitos` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
