-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2019-08-26 23:53:17
-- 服务器版本： 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secondproduct`
--

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `price` double NOT NULL,
  `merchant` varchar(20) CHARACTER SET utf8 NOT NULL,
  `QQ` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`ID`, `name`, `price`, `merchant`, `QQ`) VALUES
(2, 'Java程序设计', 234, 'tom', '34234'),
(3, '太阳能充电器  ', 130, 'yzb ', '12312312 '),
(4, '计算机导论', 123, 'tom', '3170161679'),
(5, '水电费', 343, '3170161679', 'yzb'),
(6, 'php从入门到精通', 89, '3170161679', 'yzb'),
(7, '复活复活', 2342, '13234234', 'yzb'),
(8, '数字万用表', 89, '242342342', 'yzb'),
(9, ' 华为畅享8e', 1989, '', '132123123'),
(11, 'rthr', 64646, 'yzb', '3453543'),
(13, '火炬计划', 678, 'yzb', '475765'),
(14, '呼呼', 9898, 'yzb', '69979'),
(15, 'i卡好卡好卡', 89, 'yzb', '557867');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `merchant` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`ID`, `merchant`, `password`) VALUES
(1, 'yzb', '123456789'),
(2, 'tom', '12356789'),
(3, 'jack', '123123'),
(4, 'wwer', '12'),
(5, 'user', '111'),
(6, 'ert', '1'),
(7, '', ''),
(8, '234234', '2'),
(9, 'wef', '1'),
(10, 'rgr', '90'),
(11, 'efffvfd', '1'),
(12, 'jk', '12'),
(13, 'kl', '11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
