-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Ago-2023 às 16:58
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lerin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_clientes`
--

CREATE TABLE `tab_clientes` (
  `idCliente` int(11) NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `telefone` varchar(50) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `data_cadastro` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tab_clientes`
--

INSERT INTO `tab_clientes` (`idCliente`, `idUser`, `nome`, `telefone`, `email`, `endereco`, `data_cadastro`) VALUES
(1, 2, 'Celio Monteiro Silva', '(21) 98574-5069', 'celio.monteiro.silva@gmail.com', 'Entre com o endereço do cliente', '2023-07-20 08:43:28'),
(2, 2, 'geraldo', '(22)98765-3543', 'geraldo@gmail.coom', '~çasldãldãsdlEntre com o endereço do cliente', '2023-07-20 12:12:09'),
(3, 2, 'teste 1', '(21) 98022-1000', 'celio.monteiro.silva@gmail.com', 'mais um teste de cadastro de clientes', '2023-08-04 11:57:47'),
(4, 2, 'teste 2', '(21) 98574-5069', 'celio.monteiro.silva@gmail.com', 'mais um teste de cliente\r\n', '2023-08-04 11:59:35'),
(5, 3, 'celio 2', '(21) 98022-1000', 'celio.monteiro.silva@gmail.com', 'Entre com o endereço do cliente', '2023-08-04 12:00:05'),
(6, 3, 'celio', '(21) 98022-1000', 'celio.monteiro.silva@gmail.com', 'Entre com o endereço do cliente', '2023-08-04 12:04:09'),
(7, 3, 'celio 123', '(21) 98022-1000', 'celio.monteiro.silva@gmail.com', 'Entre com o endereço do cliente', '2023-08-04 12:04:28'),
(8, 3, 'cliente teste pro', '(21) 98574-5069', 'clientetestepro@gmail.com', 'este é o cliente do teste pro 1', '2023-08-04 12:49:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_produto`
--

CREATE TABLE `tab_produto` (
  `idProduto` int(11) NOT NULL,
  `idRepresentante` int(11) NOT NULL,
  `nome_produto` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `preco` varchar(255) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tab_produto`
--

INSERT INTO `tab_produto` (`idProduto`, `idRepresentante`, `nome_produto`, `descricao`, `preco`, `quantidade`, `data_cadastro`) VALUES
(1, 2, 'Serviço 1 - Aplicativos', 'O desenvolvimento de aplicativos seguros é crucial para proteger dados sensíveis, prevenir ataques cibernéticos e garantir a privacidade dos usuários em um mundo cada vez mais digitalizado.', 'a combinar', 0, '2023-07-24 10:09:01'),
(2, 2, 'Serviço 2 - Sistemas WEB ', 'O desenvolvimento de sistemas web é essencial para criar soluções acessíveis, escaláveis e interativas, atendendo às necessidades dos usuários e impulsionando o crescimento das empresas na era digital.', 'a combinar', 0, '2023-07-24 10:09:04'),
(3, 3, 'Serviço 3 - Desenvolvimento de um e-commerce', 'O desenvolvimento de e-commerce é fundamental para permitir que empresas alcancem um público global, ofereçam conveniência aos clientes e impulsionem as vendas online, expandindo seu alcance e potencializando o crescimento do negócio.', 'a combinar', 0, '2023-08-04 13:59:59'),
(4, 3, 'teste de cadastro de Produto', 'qualquer descrição para o teste', '4', 10, '2023-08-04 14:00:03'),
(5, 2, 'teste de cadastro de Produto pro', 'este é o cadastro do produto pro 1', '100.00', 5, '2023-08-04 12:50:24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_user`
--

CREATE TABLE `tab_user` (
  `idUser` int(11) NOT NULL,
  `primeiro_nome` varchar(50) NOT NULL,
  `segundo_nome` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tab_user`
--

INSERT INTO `tab_user` (`idUser`, `primeiro_nome`, `segundo_nome`, `email`, `senha`, `data_cadastro`) VALUES
(2, 'celio', 'monteiro', 'celio.monteiro.silva@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-07-15 19:57:40'),
(3, 'alfredo', 'teste', 'alfredo@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-07-15 21:26:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_venda`
--

CREATE TABLE `tab_venda` (
  `idVenda` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idRepresentante` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `nome_produto` varchar(255) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tab_venda`
--

INSERT INTO `tab_venda` (`idVenda`, `idCliente`, `idRepresentante`, `idProduto`, `nome_produto`, `quantidade`, `descricao`, `data_cadastro`) VALUES
(1, 1, 3, 2, NULL, 6, 'Crie uma breve descrição para esta venda! Isto pode ajudar na sua organização.', '2023-08-04 13:40:12'),
(2, 2, 3, 3, NULL, 8, 'Crie uma breve descrição para esta venda! Isto pode ajudar na sua organização.', '2023-08-04 13:40:14'),
(3, 2, 3, 2, NULL, 3, 'Crie uma breve descrição para esta venda! Isto pode ajudar na sua organização.', '2023-08-04 13:40:16'),
(4, 1, 3, 2, NULL, 3, 'Crie uma breve descrição para esta venda! Isto pode ajudar na sua organização.', '2023-08-04 13:40:19'),
(5, 1, 2, 1, NULL, 0, 'Crie uma breve descrição para esta venda! Isto pode ajudar na sua organização.', '2023-08-03 16:51:52'),
(6, 2, 2, 1, NULL, 0, '', '2023-08-04 13:52:19'),
(7, 8, 2, 5, NULL, 5, 'esta é a primeira venda do teste pro 1', '2023-08-04 12:52:17');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tab_clientes`
--
ALTER TABLE `tab_clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices para tabela `tab_produto`
--
ALTER TABLE `tab_produto`
  ADD PRIMARY KEY (`idProduto`);

--
-- Índices para tabela `tab_user`
--
ALTER TABLE `tab_user`
  ADD PRIMARY KEY (`idUser`);

--
-- Índices para tabela `tab_venda`
--
ALTER TABLE `tab_venda`
  ADD PRIMARY KEY (`idVenda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tab_clientes`
--
ALTER TABLE `tab_clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tab_produto`
--
ALTER TABLE `tab_produto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tab_user`
--
ALTER TABLE `tab_user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tab_venda`
--
ALTER TABLE `tab_venda`
  MODIFY `idVenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
