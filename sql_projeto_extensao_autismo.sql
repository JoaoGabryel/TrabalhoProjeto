-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/11/2023 às 01:13
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_extensao_autismo`
--
CREATE DATABASE IF NOT EXISTS `projeto_extensao_autismo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `projeto_extensao_autismo`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `corpo` varchar(10000) NOT NULL,
  `autor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `profissional`
--

CREATE TABLE `profissional` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fone` varchar(11) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `num` varchar(10) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `clinica` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `profissional`
--

INSERT INTO `profissional` (`id`, `nome`, `email`, `fone`, `cnpj`, `cep`, `num`, `complemento`, `clinica`, `foto`) VALUES
(1, 'Benjamin Eduardo de Paula', 'benjamin_eduardo_depaula@akaer.com.br', '86991755718', '95418581000192', '64003090', '111', 'Bloco 1 / AP 10', 'Elite Clínica', 'doutor-benjamim'),
(2, 'Melissa Larissa Regina Castro', 'melissa-castro97@revati.com.br', '96981016023', '44929224000158', '68906181', '283', '', 'Connection Clínica', 'doutora-melissa'),
(3, 'Benedita Rafaela Sophie Farias', 'benedita.rafaela.farias@pontofinalcafe.com.br', '85988582334', '91536961000170', '61618840', '491', 'Ao lado da livraria Castello', 'Clínica Life', 'doutora-benedita'),
(4, 'Brenda Lívia da Cunha', 'brenda_dacunha@doublesp.com.br', '84997915187', '90891891000106', '59628604', '578', 'Bloco 3 / 5º Andar / AP 4', 'Clínica Bem-Estar Integral', 'doutora-brenda'),
(5, 'Fabiana Isabelly Clarice Oliveira', 'fabiana_oliveira@tasaut.com.br', '38992566192', '40687154000118', '39406552', '812', '', 'Alma Clínica', 'doutora-fabiana'),
(6, 'Manuela Heloisa Josefa Drumond', 'manuela-drumond90@power.alston.com', '86996474547', '07449278000190', '64071730', '203', '', 'Vital Clínica', 'doutora-manu');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `profissional`
--
ALTER TABLE `profissional`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `profissional`
--
ALTER TABLE `profissional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
