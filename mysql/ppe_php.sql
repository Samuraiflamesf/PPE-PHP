-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Fev-2023 às 19:41
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aniversariantes`
--

INSERT INTO `aniversariantes` (`id`, `nome`, `data_nascimento`) VALUES
(13, 'Bernardo Nogueira', '2001-07-21'),
(14, 'Dayane Ramos', '2002-02-08'),
(23, 'Liviane Santos', '0001-01-03'),
(24, 'Valdinéia Florina', '0001-01-07'),
(25, 'Raquel Oliveria', '0001-01-20'),
(26, 'Marizangela Carneiro ', '0001-01-23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis`
--

CREATE TABLE `niveis` (
  `id` int(11) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `niveis`
--

INSERT INTO `niveis` (`id`, `nivel`) VALUES
(1, 'Admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pdf_files`
--

CREATE TABLE `pdf_files` (
  `id` int(11) NOT NULL,
  `original_name` varchar(255) NOT NULL,
  `new_name` varchar(255) NOT NULL,
  `date_uploaded` datetime NOT NULL,
  `pdf_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pdf_files`
--

INSERT INTO `pdf_files` (`id`, `original_name`, `new_name`, `date_uploaded`, `pdf_content`) VALUES
(32, 'RENAME-2022.pdf', 'POP 1', '2023-02-24 00:00:00', ''),
(33, 'Atendimento Preferencial Placa.png', 'POP 2', '2023-02-24 00:00:00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ramais`
--

CREATE TABLE `ramais` (
  `id` int(11) NOT NULL,
  `setor` varchar(55) NOT NULL,
  `telefone` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Índices para tabela `niveis`
--
ALTER TABLE `niveis`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `niveis`
--
ALTER TABLE `niveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pdf_files`
--
ALTER TABLE `pdf_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
