-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Maio-2022 às 18:48
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `moove`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros_seminovos`
--

CREATE TABLE `carros_seminovos` (
  `modelo` varchar(100) NOT NULL,
  `ano` int(11) NOT NULL,
  `motor` int(11) NOT NULL,
  `kilometragem` float NOT NULL,
  `cor` varchar(100) NOT NULL,
  `cambio` varchar(15) NOT NULL,
  `combustivel` varchar(10) NOT NULL,
  `formato` varchar(7) NOT NULL,
  `id_carro` int(11) NOT NULL,
  `foto_carro` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carros_seminovos`
--

INSERT INTO `carros_seminovos` (`modelo`, `ano`, `motor`, `kilometragem`, `cor`, `cambio`, `combustivel`, `formato`, `id_carro`, `foto_carro`) VALUES
('Fiat Toro', 2021, 16, 60777, 'Branco', 'manual', 'flex', 'hatch', 22, 'img_seminovos/627869c38fab4.jpg'),
('Gol G5 ', 2015, 16, 66001, 'Vermelho', 'manual', 'flex', 'hatch', 23, 'img_seminovos/62786c6da8371.jpg'),
('Ecosport', 2018, 16, 88122, 'Preto', 'automatico', 'flex', 'sedan', 24, 'img_seminovos/62786cad1fe30.jpg'),
('HB20', 2016, 16, 55066, 'Branco', 'manual', 'flex', 'hatch', 25, 'img_seminovos/62786cd6e323d.jpg'),
('Siena', 2017, 10, 101000, 'Branco', 'manual', 'flex', 'hatch', 26, 'img_seminovos/62786cf69ec8c.jpg'),
('Troller T4', 2022, 20, 1000, 'Cinza', 'manual', 'flex', 'hatch', 27, 'img_seminovos/6278a27f3bc77.jpg'),
('Prisma', 2020, 14, 18000, 'Prata', 'manual', 'flex', 'hatch', 28, 'img_seminovos/6279084bc6bd4.jpg'),
('Renault Duster', 2021, 16, 3000, 'Marrom', 'automatico', 'flex', 'hatch', 29, 'img_seminovos/62790a27077aa.jpg'),
('Corola', 2013, 10, 66000, 'Preto', 'manual', 'flex', 'hatch', 31, 'img_seminovos/62793224055f6.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carros_seminovos`
--
ALTER TABLE `carros_seminovos`
  ADD PRIMARY KEY (`id_carro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carros_seminovos`
--
ALTER TABLE `carros_seminovos`
  MODIFY `id_carro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
