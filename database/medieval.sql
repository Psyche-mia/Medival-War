-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-11-29 15:41:46
-- 服务器版本： 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medieval`
--

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(10) NOT NULL,
  `id` char(10) COLLATE latin1_general_ci NOT NULL,
  `pwd` char(10) COLLATE latin1_general_ci NOT NULL,
  `name` char(10) COLLATE latin1_general_ci NOT NULL,
  `power` enum('Duchy of Saxony','Duchy of Bavaria','Kingdom of Italy','') COLLATE latin1_general_ci NOT NULL DEFAULT 'Duchy of Saxony',
  `hisdate` date NOT NULL DEFAULT '1055-01-01'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`userid`, `id`, `pwd`, `name`, `power`, `hisdate`) VALUES
(1, 'miya', '123', 'Miya', 'Duchy of Bavaria', '1055-01-01'),
(2, 'tom', '234', 'tom', 'Duchy of Bavaria', '1055-01-01'),
(3, 'sam', '123', 'sam', 'Duchy of Bavaria', '1055-01-01'),
(4, 'ggggd', 'ddd', 'ddddd', 'Kingdom of Italy', '1055-01-01'),
(5, 'nnnnn', 'nnnnn', 'nnnnnn', 'Duchy of Bavaria', '1055-01-01'),
(6, 'jjjs', 'sss', 'sss', 'Duchy of Bavaria', '1055-01-01'),
(7, 'jjjsd', '111', 'sss', 'Kingdom of Italy', '1055-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
