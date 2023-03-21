-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Mar-2023 às 19:35
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ppe_php`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aniversariantes`
--

CREATE TABLE `aniversariantes` (
  `id` int(11) NOT NULL,
  `nome` varchar(55) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `aniversariantes`
--

INSERT INTO `aniversariantes` (`id`, `nome`, `data_nascimento`) VALUES
(145, 'Liviane Santos', '1001-01-03'),
(146, 'Valdinéia Florina', '1001-01-07'),
(147, 'Raquel Oliveria', '1001-01-20'),
(148, 'Marizangela Carneiro ', '1001-01-23'),
(149, 'Roberta dos Anjos', '1001-01-30'),
(150, 'Ana Cristina', '1001-01-31'),
(151, 'Maria Elisabeth', '1001-02-05'),
(152, 'Virginia Pereira', '1001-02-06'),
(153, 'Dayane Ramos', '1001-02-08'),
(154, 'Fabiana Bandeira', '1001-02-14'),
(155, 'Cristiane Vilela', '1001-02-16'),
(156, 'Rosália Fraga', '1001-02-16'),
(157, 'Sivaldo Nery', '1001-02-19'),
(158, 'Emanuela Bispo', '1001-02-20'),
(159, 'Carine Paixão', '1001-02-20'),
(160, 'Juarez Andrade ', '1001-02-22'),
(161, 'Rubinalva Santana', '1001-02-28'),
(162, 'Soane Félix', '1001-03-03'),
(163, 'Andrea Cruz', '1001-03-06'),
(164, 'Cintia Carine ', '1001-03-07'),
(165, 'Luanna Barreto', '1001-03-09'),
(166, 'Andre de Jesus ', '1001-03-14'),
(167, 'Christiane Vianna', '1001-03-17'),
(168, 'Fernanda Lima', '1001-03-18'),
(169, 'Marcos Freire', '1001-03-26'),
(170, 'Camila Magalhães', '1001-03-26'),
(171, 'Carolina Beda', '1001-03-27'),
(172, 'Jaciara Garrido', '1001-04-06'),
(173, 'Reneide Santana', '1001-04-14'),
(174, 'Rosemeire Dourado', '1001-04-16'),
(175, 'Vanessa Calmom', '1001-04-20'),
(176, 'Pedro Augusto ', '1001-04-26'),
(177, 'Raul Magalhães', '1001-04-28'),
(178, 'Lorena Brandão', '1001-04-30'),
(179, 'Emanuel Natan', '1001-05-01'),
(180, 'Renata Dias', '1001-05-03'),
(181, 'Bruno de Paula', '1001-05-08'),
(182, 'Almir Cunha', '1001-05-10'),
(183, 'Émile Souza', '1001-05-18'),
(184, 'Renata Marques', '1001-05-21'),
(185, 'Angela Valeska', '1001-05-21'),
(186, 'Edinélia  Souza', '1001-05-24'),
(187, 'Zildete Sales', '1001-05-25'),
(188, 'Adriana Karoline', '1001-05-27'),
(189, 'Tainara Almeida', '1001-06-04'),
(190, 'Nélia Castro', '1001-06-09'),
(191, 'Odenilson Rosário', '1001-06-11'),
(192, 'Dayane Pereira ', '1001-06-21'),
(193, 'Alessandra Cerqueira', '1001-07-05'),
(194, 'Géssica Dias ', '1001-07-05'),
(195, 'Betina Matos', '1001-07-06'),
(196, 'João Vitor ', '1001-07-06'),
(197, 'Hesíquia Maria', '1001-07-20'),
(198, 'Bernardo Nogueira', '1001-07-21'),
(199, 'Daniela Oliveira ', '1001-07-23'),
(200, 'Jane Meire', '1001-07-24'),
(201, 'Adilson Batista', '1001-07-29'),
(202, 'Ricardo Teixeira', '1001-08-01'),
(203, 'Camila Matos', '1001-08-03'),
(204, 'Sandra Guimarães', '1001-08-08'),
(205, 'Patrícia Rebouças', '1001-08-10'),
(206, 'Valdeize Santos', '1001-08-10'),
(207, 'Lucimar Maria', '1001-08-15'),
(208, 'Rosa Bulcão', '1001-08-16'),
(209, 'Eduardo Assis', '1001-08-19'),
(210, 'Ivone Pinto', '1001-08-21'),
(211, 'Fábio Gerônimo', '1001-08-27'),
(212, 'Joelma Santos', '1001-08-30'),
(213, 'Adalberto Moreira ', '1001-09-03'),
(214, 'Laura Catarina', '1001-09-04'),
(215, 'Marilene Sertório', '1001-09-06'),
(216, 'Ricardo Silva', '1001-09-06'),
(217, 'Edilene Barbosa', '1001-09-14'),
(218, 'Tayane Chaves', '1001-09-14'),
(219, 'Fernando José', '1001-09-17'),
(220, 'Jorge Viana', '1001-09-18'),
(221, 'Gleidson Pinho', '1001-09-20'),
(222, 'Edivan Dias', '1001-09-23'),
(223, 'Deyse Sousa', '1001-09-23'),
(224, 'Leonardo dos Santos', '1001-09-23'),
(225, 'Rita de Cassia', '1001-09-24'),
(226, 'Margarete Simone', '1001-09-25'),
(227, 'Luiz Carlos', '1001-09-26'),
(228, 'Ruandersson Rodrigues', '1001-10-03'),
(229, 'Luiz Rodrigo', '1001-10-04'),
(230, 'Patrícia Teixeira', '1001-10-05'),
(231, 'Fabricia Araujo ', '1001-10-06'),
(232, 'Carlos Souza', '1001-10-07'),
(233, 'Glauce Mary', '1001-10-10'),
(234, 'Daiana Leite', '1001-10-11'),
(235, 'Marcia Cristina ', '1001-10-12'),
(236, 'Andrezza Victória', '1001-10-13'),
(237, 'Jamile Gomes', '1001-10-15'),
(238, 'Roberto Eudes', '1001-10-18'),
(239, 'Edmary Teixeira', '1001-10-20'),
(240, 'Valter Luis', '1001-10-24'),
(241, 'Rosane Oliveira', '1001-10-29'),
(242, 'Catarine Grisente', '1001-11-01'),
(243, 'Laís Braga', '1001-11-03'),
(244, 'Cícero Santos', '1001-11-07'),
(245, 'Aramís Moreira', '1001-11-13'),
(246, 'José Fernando', '1001-11-17'),
(247, 'Amanda Farias ', '1001-11-21'),
(248, 'Cecília Teles', '1001-11-22'),
(249, 'Pedro Antônio', '1001-11-29'),
(250, 'Mariana Pinheiro', '1001-12-02'),
(251, 'Andrea Nogueira', '1001-12-03'),
(252, 'Ivana Barreto', '1001-12-06'),
(253, 'Viviane Sena', '1001-12-09'),
(254, 'Danille Souza', '1001-12-14'),
(255, 'Mariana Guimarães', '1001-12-14'),
(256, 'Ilka Magalhães', '1001-12-14'),
(257, 'Beatriz Eugênia', '1001-12-17'),
(258, 'Cristiane Conceição', '1001-12-17'),
(259, 'José Carlos Sena', '1001-12-28'),
(260, 'Nêviton Souza ', '1001-12-31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis`
--

CREATE TABLE `niveis` (
  `id` int(11) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `niveis`
--

INSERT INTO `niveis` (`id`, `nivel`) VALUES
(1, 'Admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pasta`
--

CREATE TABLE `pasta` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pdf_files`
--

CREATE TABLE `pdf_files` (
  `id` int(11) NOT NULL,
  `nome_arquivo` varchar(255) NOT NULL,
  `selecione_pasta` varchar(255) NOT NULL,
  `date_uploaded` datetime NOT NULL,
  `selecione_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ramais`
--

CREATE TABLE `ramais` (
  `id` int(11) NOT NULL,
  `setor` varchar(55) NOT NULL,
  `telefone` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `ramais`
--

INSERT INTO `ramais` (`id`, `setor`, `telefone`) VALUES
(6, 'RH/TI', '31164932'),
(7, 'SAP/ARQUIVO', '31164919'),
(8, 'AÇÃO JUDICIAL (PRINCIPAL)', '31164920'),
(10, 'RECEPÇÃO', '31164935'),
(11, 'TELEFONIA', '31171645'),
(12, 'TELEFONIA SERVIÇO SOCIAL', '31162989'),
(13, 'INFUSÃO', '31164925'),
(14, 'COORD. ADMINISTRATIVA', '31164918'),
(15, 'SERVIÇO SOCIAL', '31164938'),
(16, 'CADASTRO 1', '31164917'),
(17, 'CADASTRO 2', '31164924');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nivel` varchar(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `nivel`, `nome`, `senha`) VALUES
(1, 'samuraiflamesf@gmail.com', 'Admin', 'Bernardo Nogueira', '0000');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aniversariantes`
--
ALTER TABLE `aniversariantes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `niveis`
--
ALTER TABLE `niveis`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pasta`
--
ALTER TABLE `pasta`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pdf_files`
--
ALTER TABLE `pdf_files`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ramais`
--
ALTER TABLE `ramais`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aniversariantes`
--
ALTER TABLE `aniversariantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT de tabela `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `niveis`
--
ALTER TABLE `niveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pasta`
--
ALTER TABLE `pasta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `pdf_files`
--
ALTER TABLE `pdf_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `ramais`
--
ALTER TABLE `ramais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
