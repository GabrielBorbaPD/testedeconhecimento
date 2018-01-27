-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Jan-2018 às 15:55
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `prioridades_tarefas`
--

CREATE TABLE `prioridades_tarefas` (
  `id` int(11) NOT NULL,
  `nome_prioridade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `prioridades_tarefas`
--

INSERT INTO `prioridades_tarefas` (`id`, `nome_prioridade`) VALUES
(1, 'Baixa'),
(2, 'Média'),
(3, 'Alta'),
(4, 'Urgente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_tarefas`
--

CREATE TABLE `status_tarefas` (
  `id` int(11) NOT NULL,
  `nome_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `status_tarefas`
--

INSERT INTO `status_tarefas` (`id`, `nome_status`) VALUES
(1, 'Em espera'),
(2, 'Em progresso'),
(3, 'Finalizada'),
(4, 'Cancelada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descricao` varchar(400) NOT NULL,
  `prioridades_tarefa_id` int(11) NOT NULL,
  `status_tarefa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tarefas`
--

INSERT INTO `tarefas` (`id`, `titulo`, `descricao`, `prioridades_tarefa_id`, `status_tarefa_id`) VALUES
(1, 'Implementar projeto A', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 4, 3),
(2, 'Implementar projeto B', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 0, 0),
(3, 'Implementar projeto B', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 0, 0),
(4, 'Implementar projeto B', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 0, 0),
(5, 'Implementar projeto A', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1, 1),
(6, 'Implementar projeto B', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 2, 2),
(7, 'Implementar projeto C', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 3, 3),
(10, 'Implementar projeto C', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 3, 1),
(11, 'Implementar projeto B', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1, 2),
(12, 'Implementar projeto B', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 3, 3),
(13, 'Implementar projeto C', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 2, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prioridades_tarefas`
--
ALTER TABLE `prioridades_tarefas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_tarefas`
--
ALTER TABLE `status_tarefas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prioridades_tarefas`
--
ALTER TABLE `prioridades_tarefas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status_tarefas`
--
ALTER TABLE `status_tarefas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
