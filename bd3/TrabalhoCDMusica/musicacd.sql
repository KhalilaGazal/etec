-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Set-2019 às 03:06
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicacd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `CodigoAutor` int(11) NOT NULL,
  `NomeAutor` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`CodigoAutor`, `NomeAutor`) VALUES
(1, 'Renato Russo'),
(2, 'Tom Jobim'),
(3, 'Chico Buarque'),
(4, 'Dado Villa_Lobos'),
(5, 'Marcelo Bonfá'),
(6, 'Ico Ouro-Preto'),
(7, 'Viníicius de Moraes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cd`
--

CREATE TABLE `cd` (
  `CodigoCD` int(11) NOT NULL,
  `Nome` char(50) DEFAULT NULL,
  `CodigoGravadora` int(11) DEFAULT NULL,
  `Preco` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cd`
--

INSERT INTO `cd` (`CodigoCD`, `Nome`, `CodigoGravadora`, `Preco`) VALUES
(1, 'Mais do mesmo', 2, '15.00'),
(2, 'Bate-Boca', 1, '12.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gravadora`
--

CREATE TABLE `gravadora` (
  `CodigoGravadora` int(11) NOT NULL,
  `NomeGravadora` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `gravadora`
--

INSERT INTO `gravadora` (`CodigoGravadora`, `NomeGravadora`) VALUES
(1, 'EMI'),
(2, 'Polygram');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemcd`
--

CREATE TABLE `itemcd` (
  `CodigoCd` int(11) NOT NULL,
  `CodigoMusica` int(11) NOT NULL,
  `NumeroFaixa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `itemcd`
--

INSERT INTO `itemcd` (`CodigoCd`, `CodigoMusica`, `NumeroFaixa`) VALUES
(1, 1, 1),
(1, 2, 2),
(1, 3, 3),
(1, 4, 4),
(1, 5, 5),
(1, 6, 6),
(1, 7, 7),
(1, 8, 8),
(1, 9, 9),
(1, 10, 10),
(1, 11, 11),
(1, 12, 12),
(1, 13, 13),
(1, 14, 14),
(1, 15, 15),
(1, 16, 16),
(2, 17, 1),
(2, 18, 2),
(2, 19, 3),
(2, 20, 4),
(2, 21, 5),
(2, 22, 6),
(2, 23, 7),
(2, 24, 8),
(2, 25, 9),
(2, 26, 10),
(2, 27, 11),
(2, 28, 12),
(2, 29, 13),
(2, 30, 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `musica`
--

CREATE TABLE `musica` (
  `CodigoMusica` int(11) NOT NULL,
  `NomeMusica` char(40) DEFAULT NULL,
  `Duracao` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `musica`
--

INSERT INTO `musica` (`CodigoMusica`, `NomeMusica`, `Duracao`) VALUES
(1, 'Será', '00:02:28'),
(2, 'Ainda é cedo', '00:03:00'),
(3, 'Geração Coca-Cola', '00:02:20'),
(4, 'Eduardo e Mõnica', '00:04:32'),
(5, 'Tempo Perdido', '00:05:00'),
(6, 'Índios', '00:04:23'),
(7, 'Que País é esse', '00:02:54'),
(8, 'Faroeste Caboclo', '00:09:03'),
(9, 'Há tempo', '00:03:16'),
(10, 'Pais e Filhos', '00:03:16'),
(11, 'Meninos e Meninas', '00:03:22'),
(12, 'Vento no Litoral', '00:06:05'),
(13, 'Perfeição', '00:04:34'),
(14, 'Giz', '00:03:20'),
(15, 'Dezesseis', '00:05:28'),
(16, 'Antes das seis', '00:03:09'),
(17, 'Meninos, eu vi', '00:03:25'),
(18, 'Eu te amo', '00:03:06'),
(19, 'Piano na Mangueira', '00:02:23'),
(20, 'A violeira', '00:02:54'),
(21, 'Anos Dourados', '00:02:56'),
(22, 'Olha, Maria', '00:03:55'),
(23, 'Biscate', '00:03:20'),
(24, 'Retrato em Branco e Preto', '00:03:03'),
(25, 'Falando de Amor', '00:03:20'),
(26, 'Pois é', '00:02:48'),
(27, 'Noite dos Mascarados', '00:02:42'),
(28, 'Sabiá', '00:03:20'),
(29, 'Imagina', '00:03:52'),
(30, 'Bate-Boca', '00:04:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `musicaautor`
--

CREATE TABLE `musicaautor` (
  `CodigoMusica` int(11) NOT NULL,
  `CodigoAutor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `musicaautor`
--

INSERT INTO `musicaautor` (`CodigoMusica`, `CodigoAutor`) VALUES
(1, 1),
(2, 1),
(2, 5),
(2, 6),
(3, 1),
(3, 4),
(4, 1),
(4, 4),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 4),
(9, 5),
(10, 1),
(10, 4),
(10, 5),
(11, 1),
(11, 3),
(11, 4),
(12, 1),
(12, 4),
(12, 5),
(13, 1),
(13, 4),
(13, 5),
(14, 1),
(14, 4),
(14, 5),
(15, 1),
(15, 4),
(15, 5),
(16, 1),
(16, 4),
(16, 5),
(17, 1),
(17, 4),
(17, 5),
(18, 2),
(18, 3),
(19, 2),
(19, 3),
(20, 2),
(20, 3),
(21, 3),
(22, 2),
(22, 3),
(22, 7),
(23, 3),
(24, 2),
(25, 2),
(26, 2),
(27, 3),
(28, 2),
(28, 3),
(29, 2),
(30, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`CodigoAutor`);

--
-- Indexes for table `cd`
--
ALTER TABLE `cd`
  ADD PRIMARY KEY (`CodigoCD`),
  ADD KEY `CodigoGravadora` (`CodigoGravadora`);

--
-- Indexes for table `gravadora`
--
ALTER TABLE `gravadora`
  ADD PRIMARY KEY (`CodigoGravadora`);

--
-- Indexes for table `itemcd`
--
ALTER TABLE `itemcd`
  ADD PRIMARY KEY (`CodigoCd`,`CodigoMusica`),
  ADD KEY `CodigoMusica` (`CodigoMusica`);

--
-- Indexes for table `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`CodigoMusica`);

--
-- Indexes for table `musicaautor`
--
ALTER TABLE `musicaautor`
  ADD PRIMARY KEY (`CodigoMusica`,`CodigoAutor`),
  ADD KEY `CodigoAutor` (`CodigoAutor`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cd`
--
ALTER TABLE `cd`
  ADD CONSTRAINT `cd_ibfk_1` FOREIGN KEY (`CodigoGravadora`) REFERENCES `gravadora` (`CodigoGravadora`);

--
-- Limitadores para a tabela `itemcd`
--
ALTER TABLE `itemcd`
  ADD CONSTRAINT `itemcd_ibfk_1` FOREIGN KEY (`CodigoCd`) REFERENCES `cd` (`CodigoCD`),
  ADD CONSTRAINT `itemcd_ibfk_2` FOREIGN KEY (`CodigoMusica`) REFERENCES `musica` (`CodigoMusica`);

--
-- Limitadores para a tabela `musicaautor`
--
ALTER TABLE `musicaautor`
  ADD CONSTRAINT `musicaautor_ibfk_1` FOREIGN KEY (`CodigoMusica`) REFERENCES `musica` (`CodigoMusica`),
  ADD CONSTRAINT `musicaautor_ibfk_2` FOREIGN KEY (`CodigoAutor`) REFERENCES `autor` (`CodigoAutor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
