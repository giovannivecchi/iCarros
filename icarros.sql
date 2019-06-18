-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Jun-2019 às 01:42
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icarros`
--
CREATE DATABASE IF NOT EXISTS `icarros` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `icarros`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `mar_in_codigo` double NOT NULL,
  `mar_st_descricao` varchar(255) DEFAULT NULL,
  `mar_in_cnpj` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `vei_in_codigo` double NOT NULL,
  `vei_st_modelo` varchar(40) DEFAULT NULL,
  `mar_in_codigo` double DEFAULT NULL,
  `vei_st_descricao` text,
  `vei_st_porta` varchar(10) DEFAULT NULL,
  `vei_in_anofabri` int(11) DEFAULT NULL,
  `vei_in_anomodelo` int(11) DEFAULT NULL,
  `vei_st_cor` varchar(40) DEFAULT NULL,
  `vei_in_km` double DEFAULT NULL,
  `vei_st_placa` text,
  `vei_re_valor` double DEFAULT NULL,
  `vei_st_obs` text,
  `vei_dt_inclusao` date DEFAULT NULL,
  `vei_ch_ativo` text,
  `vei_cb_foto1` text,
  `vei_cb_foto2` text,
  `vei_cb_foto3` text,
  `vei_cb_foto4` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`mar_in_codigo`);

--
-- Indexes for table `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`vei_in_codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `mar_in_codigo` double NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `vei_in_codigo` double NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
