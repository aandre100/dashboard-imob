-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 02, 2020 at 06:12 PM
-- Server version: 5.7.31-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-30+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_imobiliaria`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`) VALUES
(1, 'apartamento');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(150) NOT NULL,
  `sobrenome_cliente` varchar(255) NOT NULL,
  `endereco_cliente` varchar(250) NOT NULL,
  `nro_end_cliente` int(11) NOT NULL,
  `bairro_cliente` varchar(150) NOT NULL,
  `cidade_cliente` varchar(20) NOT NULL,
  `uf_cliente` varchar(5) NOT NULL,
  `cep_cliente` varchar(10) NOT NULL,
  `mail_cliente` varchar(50) NOT NULL,
  `cpf_cliente` varchar(15) NOT NULL,
  `interesse_cliente` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `sobrenome_cliente`, `endereco_cliente`, `nro_end_cliente`, `bairro_cliente`, `cidade_cliente`, `uf_cliente`, `cep_cliente`, `mail_cliente`, `cpf_cliente`, `interesse_cliente`) VALUES
(1, 'André', 'Cardoso', 'Rua de cima', 23, '23', 'Porto', '3', '3232', 'andre@spzn.pt', '234234', 'Comprar'),
(2, 'José', 'MAlhoa', 'asf asdf asdf', 232, '123', 'Porto', '2', '12312', 'andre@spzn.pt', '132123', 'Ambos');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `nome_foto` varchar(100) NOT NULL,
  `id_imovel_foto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `nome_foto`, `id_imovel_foto`) VALUES
(3, '19ad16cddebe0caeaf4d6aaa214f4a35.png', 1),
(4, '4786a3cba2e3e06045aa39d9b19cad6b.png', 1),
(5, 'd056916fd0d9a6ce25f38b4264e24cd6.png', 1),
(6, '3e53aadbf1968d271b12c50d55391cc4.png', 1),
(7, 'ab493474468f52feb6d38af6b6836ed2.png', 1),
(8, 'c463a463e6ecddb4c4075c1521bf6a68.png', 1),
(9, 'ed27fad2281e36c49517d26a932339c6.png', 1),
(10, 'ddaff32f39e2a7264e1d4c464ce61c8c.png', 1),
(11, '211f3cd57a96e187d7b88faca75beaff.png', 1),
(12, 'ae34a4c143751e165adb49de81ac0750.png', 1),
(13, 'bfe470d004e8abf167289f4b36b8a1eb.png', 72760),
(14, '3560a7499b283c3a1221302cb9d29c07.png', 72760),
(15, 'dc85928ee60beb91acfdb34d694ce9f2.png', 72760),
(16, 'd3fbea8115e276c57e818298703a3b83.png', 72760),
(17, 'cf1358ce3c42b815a93292469870d5bf.png', 72760),
(18, 'b476f9cf8554013bab8c71b536ecc3fd.png', 72760),
(19, '5c42658622f13b8dee2333490e87f702.png', 72760),
(20, '40cf9850653cb3131af41d52851cd8f0.png', 72760),
(21, '6fe13766621516b46034ef26104d067a.png', 72760),
(22, '0d170caf9c5a1713ae05cb17417aeb35.png', 72760),
(23, 'ef16bb792b5e14d00a67c86a897fabc7.png', 72760),
(24, 'd4bb9bad0588ad59cc4c018baa3d6815.png', 72760),
(25, '8b410d6cf9ac3eba395a9e1a5e1d6e15.png', 72760),
(26, 'ab13dfd5e33cc235af01dc3e59f96ae0.png', 72760),
(27, 'e9f31ce9dedbc0945ff3d3d320f84c51.png', 72760),
(28, '3d089302c0dbb0f9be081170eebff9fb.png', 72760),
(29, '28a680514648d7e2705ee26af2fb4d57.png', 72760),
(30, '22f44ca1af70207b220e02e935815a2e.png', 72760),
(31, '096c07eb636d3a9d42edd6dcdcf2cb9f.png', 72760),
(32, 'f08d096e0f9b2dc6639765333f1c7901.jpg', 25284),
(33, '50389a8c9c451dc983d2a2d1f1413584.PNG', 25284),
(34, '27e42c59d78bf1d2e47a2d4015ab2734.PNG', 25284),
(35, 'b00c82aa7932cc28ce5a6e1f1a89182a.PNG', 25284),
(36, '7473cfcd5beb48b77dece7fe1085fd9c.PNG', 69929);

-- --------------------------------------------------------

--
-- Table structure for table `imovel`
--

CREATE TABLE `imovel` (
  `id_imovel` int(11) NOT NULL,
  `codigo_imovel` int(11) NOT NULL,
  `end_imovel` varchar(150) NOT NULL,
  `nro_end_imovel` int(11) NOT NULL,
  `bairro_imovel` varchar(50) NOT NULL,
  `cidade_imovel` varchar(50) NOT NULL,
  `uf_imovel` varchar(5) NOT NULL,
  `cep_imovel` varchar(10) NOT NULL,
  `complemento_imovel` varchar(100) NOT NULL,
  `valor_imovel` float NOT NULL,
  `id_modalidade_imovel` int(11) NOT NULL,
  `id_pagamento_imovel` int(11) NOT NULL,
  `id_categoria_imovel` int(11) NOT NULL,
  `cpf_cliente_imovel` int(11) NOT NULL,
  `status_imovel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imovel`
--

INSERT INTO `imovel` (`id_imovel`, `codigo_imovel`, `end_imovel`, `nro_end_imovel`, `bairro_imovel`, `cidade_imovel`, `uf_imovel`, `cep_imovel`, `complemento_imovel`, `valor_imovel`, `id_modalidade_imovel`, `id_pagamento_imovel`, `id_categoria_imovel`, `cpf_cliente_imovel`, `status_imovel`) VALUES
(1, 72760, '3452345', 2345, '2345', 'fadasd', 'AC', '435345', '2345', 234234, 1, 2, 1, 234234, 'Ativado'),
(4, 72762, '3452346', 2345, '2345', 'fadasd', 'AC', '435345', '2345', 234234, 1, 2, 1, 234234, 'venda'),
(6, 25284, 'Rua da Alegria 930', 60, 'Porto', 'Porto', 'RS', '4000-039', 'Porto', 25000, 3, 2, 1, 2332232, 'Ativo'),
(7, 69929, 'Rua Nova das Perlinhas', 45, 'São José', 'Brasilia', 'RJ', '4530', 'Barraca', 240000, 3, 3, 1, 2346767, 'Ativo');

-- --------------------------------------------------------

--
-- Table structure for table `modalidade`
--

CREATE TABLE `modalidade` (
  `id_modalidade` int(11) NOT NULL,
  `tipo_modalidade` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modalidade`
--

INSERT INTO `modalidade` (`id_modalidade`, `tipo_modalidade`) VALUES
(1, 'aluguer'),
(3, 'venda');

-- --------------------------------------------------------

--
-- Table structure for table `pagamento`
--

CREATE TABLE `pagamento` (
  `id_pagamento` int(11) NOT NULL,
  `tipo_pagamento` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pagamento`
--

INSERT INTO `pagamento` (`id_pagamento`, `tipo_pagamento`) VALUES
(1, 'Boleto'),
(2, 'Dinheiro'),
(3, 'Cartão de Crédito');

-- --------------------------------------------------------

--
-- Table structure for table `status_imovel`
--

CREATE TABLE `status_imovel` (
  `id_status_imovel` int(11) NOT NULL,
  `usuario_corretor` varchar(50) NOT NULL,
  `codigo_imovel` int(11) NOT NULL,
  `status_imovel` varchar(50) NOT NULL,
  `valor_negocio` float NOT NULL,
  `data_atual` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status_imovel`
--

INSERT INTO `status_imovel` (`id_status_imovel`, `usuario_corretor`, `codigo_imovel`, `status_imovel`, `valor_negocio`, `data_atual`) VALUES
(2, 'cccosta', 72762, 'venda', 20000, '2020-10-02'),
(3, 'jjsimoes', 72762, 'venda', 265000, '2020-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(100) NOT NULL,
  `nivel_acesso_usuario` varchar(50) NOT NULL,
  `mail_usuario` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha_usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `nivel_acesso_usuario`, `mail_usuario`, `usuario`, `senha_usuario`) VALUES
(3, 'André Cardoso SPZN1', '4', '1141726@isep.ipp.pt', 'aandre100', '5dd67ec9a78ca776f38a5d6795ec4a05'),
(4, 'José Costa', '2', 'webmaster@spzn.pt', 'cccosta', '4dc3bd62e1695958e20810b37ce74213'),
(5, 'Luis Simões', '2', 'jjsimoes@mail.pt', 'jjsimoes', 'f2e930c442f6c8602ff00940008f6c98');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `imovel`
--
ALTER TABLE `imovel`
  ADD PRIMARY KEY (`id_imovel`);

--
-- Indexes for table `modalidade`
--
ALTER TABLE `modalidade`
  ADD PRIMARY KEY (`id_modalidade`);

--
-- Indexes for table `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`id_pagamento`);

--
-- Indexes for table `status_imovel`
--
ALTER TABLE `status_imovel`
  ADD PRIMARY KEY (`id_status_imovel`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `imovel`
--
ALTER TABLE `imovel`
  MODIFY `id_imovel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `modalidade`
--
ALTER TABLE `modalidade`
  MODIFY `id_modalidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id_pagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `status_imovel`
--
ALTER TABLE `status_imovel`
  MODIFY `id_status_imovel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
