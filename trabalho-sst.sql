-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 25/10/2015 às 13:07
-- Versão do servidor: 5.6.21
-- Versão do PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `trabalho-sst`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `requisitos`
--

CREATE TABLE IF NOT EXISTS `requisitos` (
`id` int(11) NOT NULL,
  `patrimonio` varchar(50) NOT NULL,
  `lacre` varchar(50) NOT NULL,
  `inmetro` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `lt_kg` varchar(50) NOT NULL,
  `data_recarga` date NOT NULL,
  `prox_recarga` date NOT NULL,
  `localizacao` varchar(255) DEFAULT NULL,
  `validade_extintor` date NOT NULL,
  `sinalizacao` varchar(50) NOT NULL,
  `placas` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `requisitos`
--

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

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `requisitos`
--
ALTER TABLE `requisitos`
 ADD PRIMARY KEY (`id`), ADD KEY `Index 1` (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `requisitos`
--
ALTER TABLE `requisitos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
