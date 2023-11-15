-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/11/2023 às 23:03
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
-- Banco de dados: `projeto2`
--
CREATE DATABASE IF NOT EXISTS `projeto2.1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `projeto2`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `foto`
--

INSERT INTO `foto` (`id`, `img`, `nome`) VALUES
(1, 'equipe.jpg', 'equipe'),
(2, 'crianca1.png', 'João Paulo, 10 anos'),
(3, 'crianca2.jpg', 'Daniel Silva, 8 anos'),
(4, 'crianca3.jpg', 'Pedro Miguel, 11 anos'),
(5, 'crianca4.jpg', 'Paulo Souza, 7 anos');

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
(1, 'Benjamin Eduardo de Paula', 'benjamin_eduardo_depaula@akaer.com.br', '86991755718', '95418581000192', '64003090', '111', 'Bloco 1 / AP 10', 'Elite Clínica', 'doutor-benjamim.jpg'),
(2, 'Melissa Larissa Regina Castro', 'melissa-castro97@revati.com.br', '96981016023', '44929224000158', '68906181', '283', '', 'Connection Clínica', 'doutora-melissa.jpg'),
(3, 'Benedita Rafaela Sophie Farias', 'benedita.rafaela.farias@pontofinalcafe.com.br', '85988582334', '91536961000170', '61618840', '491', 'Ao lado da livraria Castello', 'Clínica Life', 'doutora-benedita.jpg'),
(4, 'Brenda Lívia da Cunha', 'brenda_dacunha@doublesp.com.br', '84997915187', '90891891000106', '59628604', '578', 'Bloco 3 / 5º Andar / AP 4', 'Clínica Bem-Estar Integral', 'doutora-brenda.jpg'),
(5, 'Fabiana Isabelly Clarice Oliveira', 'fabiana_oliveira@tasaut.com.br', '38992566192', '40687154000118', '39406552', '812', '', 'Alma Clínica', 'doutora-fabiana.jpg'),
(6, 'Manuela Heloisa Josefa Drumond', 'manuela-drumond90@power.alston.com', '86996474547', '07449278000190', '64071730', '203', '', 'Vital Clínica', 'doutora-manu.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sobre`
--

CREATE TABLE `sobre` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` varchar(10000) NOT NULL,
  `data_publi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sobre`
--

INSERT INTO `sobre` (`id`, `titulo`, `texto`, `data_publi`) VALUES
(1, 'Um Refúgio Virtual para o Autismo: Conectando Corações no Mundo Digital', '   No vasto universo da internet, surge um farol de esperança e acolhimento para aqueles que enfrentam o desafio do Transtorno do Espectro Autista (TEA). O site \"Caminho Azul\" se destaca como uma plataforma dedicada a oferecer suporte integral a pessoas com TEA, bem como às suas famílias e cuidadores.\r\n   Ao adentrar o Caminho Azul, os visitantes são recebidos por uma interface intuitiva e amigável, projetada para proporcionar uma experiência inclusiva. O site oferece uma variedade de recursos, desde artigos informativos escritos por especialistas renomados até relatos de experiências pessoais, permitindo que os usuários se sintam compreendidos e conectados.\r\n   Uma característica marcante do Caminho Azul é a comunidade vibrante que floresce em seus fóruns. Famílias compartilham suas jornadas, trocam dicas valiosas e oferecem apoio emocional. Profissionais especializados também participam, fornecendo orientação e respondendo a perguntas de maneira acessível.\r\n   O Caminho Azul vai além do virtual, organizando eventos online, webinars e sessões de terapia em grupo. Essas iniciativas promovem a interação em tempo real, criando uma atmosfera de solidariedade e aprendizado contínuo.\r\n   Além disso, o site abriga uma seção exclusiva para recursos educacionais, incluindo atividades personalizadas e ferramentas interativas desenvolvidas para estimular o desenvolvimento cognitivo e social de indivíduos com TEA.\r\n   O \"Caminho Azul\" não é apenas um site; é um refúgio virtual que transcende as barreiras da distância, proporcionando apoio tangível e emocional para aqueles que enfrentam o TEA. Ao unir conhecimento, compaixão e tecnologia, essa plataforma emerge como um farol de esperança e solidariedade na jornada única do autismo.', '2023-04-02'),
(2, '', '', '2023-05-13'),
(3, '', '', '2023-10-12'),
(4, '', '', '2023-08-29'),
(5, '', '', '2023-11-13');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `profissional`
--
ALTER TABLE `profissional`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sobre`
--
ALTER TABLE `sobre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `profissional`
--
ALTER TABLE `profissional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `sobre`
--
ALTER TABLE `sobre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
