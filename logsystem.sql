-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jan-2021 às 20:27
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `logsystem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `senha`
--

CREATE TABLE `senha` (
  `us_cod` int(11) NOT NULL,
  `us_senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `senha`
--

INSERT INTO `senha` (`us_cod`, `us_senha`) VALUES
(15, '5bf05c120dbe197bcddd95b69b9515d7'),
(21, '81dc9bdb52d04dc20036dbd8313ed055'),
(22, '5bf05c120dbe197bcddd95b69b9515d7');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `us_cod` int(11) NOT NULL,
  `us_nome` varchar(100) NOT NULL,
  `us_username` varchar(255) NOT NULL,
  `us_email` varchar(100) NOT NULL,
  `us_instituticao` varchar(255) DEFAULT NULL,
  `us_formacao` varchar(255) DEFAULT NULL,
  `us_sexo` varchar(1) NOT NULL,
  `us_data` date NOT NULL,
  `us_hora` time NOT NULL,
  `us_ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`us_cod`, `us_nome`, `us_username`, `us_email`, `us_instituticao`, `us_formacao`, `us_sexo`, `us_data`, `us_hora`, `us_ip`) VALUES
(15, 'Admin', '', 'pandmr949@gmail.com', NULL, NULL, 'm', '2020-08-26', '01:18:09', 'DESKTOP-1D7JFUS'),
(21, 'Jhon Henrique', '', 'bulinha2016@gmail.com', NULL, NULL, 'm', '2020-11-20', '02:46:35', 'DESKTOP-1D7JFUS'),
(22, 'Jhon Henrique Rodrigues da Silva', 'Jhon', 'jhonlene12@gmail.com', 'IFTO', 'Técnico ME', 'm', '2021-01-12', '12:51:22', 'DESKTOP-1D7JFUS');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `senha`
--
ALTER TABLE `senha`
  ADD PRIMARY KEY (`us_cod`),
  ADD KEY `fk_senha_usuario_idx` (`us_cod`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`us_cod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `us_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `senha`
--
ALTER TABLE `senha`
  ADD CONSTRAINT `fk_senha_usuario` FOREIGN KEY (`us_cod`) REFERENCES `usuario` (`us_cod`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
