-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Out-2022 às 21:04
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `nameAuthor` varchar(200) DEFAULT NULL,
  `title` text,
  `cover` text,
  `file` text,
  `descr` text,
  `subTitle` text,
  `access` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `courses`
--

INSERT INTO `courses` (`id`, `name`) VALUES
(1, 'E.Informática\r\n'),
(2, 'Frio e Climatização\r\n	'),
(5, 'Desenhador e Projectista\r\n   '),
(8, 'Electricidade\r\n	'),
(10, 'Electronia e Telecomicação'),
(12, 'Maquinas e Motores\r\n	'),
(13, 'Manutenção Industrial\r\n				'),
(15, 'Energia Renováveis\r\n          ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `downloads`
--

CREATE TABLE `downloads` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `book` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `downloads`
--

INSERT INTO `downloads` (`id`, `user`, `book`, `created_at`) VALUES
(1, 0, 1, '2022-10-24 13:08:11'),
(2, 43, 24, '2022-10-28 17:15:16'),
(3, 43, 23, '2022-10-28 17:30:53'),
(4, 43, 22, '2022-10-28 17:31:24');

-- --------------------------------------------------------

--
-- Stand-in structure for view `downloads_view`
-- (See below for the actual view)
--
CREATE TABLE `downloads_view` (
`id` int(11)
,`title` text
,`nameAuthor` varchar(200)
,`cover` text
,`file` text
,`created_at` timestamp
,`user` int(11)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `savebooks`
--

CREATE TABLE `savebooks` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `book` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `savebooks_view`
-- (See below for the actual view)
--
CREATE TABLE `savebooks_view` (
`id` int(11)
,`title` text
,`nameAuthor` varchar(200)
,`cover` text
,`file` text
,`created_at` timestamp
,`user` int(11)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text,
  `email` text,
  `type` enum('admin','user') DEFAULT NULL,
  `password` text,
  `codAccess` text,
  `course` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `type`, `password`, `codAccess`, `course`, `created_at`) VALUES
(42, 'Alfredo Manuel', 'alfredo@gmail.com', 'admin', '123', '12', 1, '2022-10-26 13:24:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `legenda` text NOT NULL,
  `upload` text NOT NULL,
  `dataInsert` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `idUtil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `video`
--

INSERT INTO `video` (`id`, `tema`, `legenda`, `upload`, `dataInsert`, `idUtil`) VALUES
(3, 'hgggg', 'ffffffff', 'y2meta.com_Por_que_ANGOLA_é_Pobre___(480p).mp4', '2022-02-14 10:18:41', 22);

-- --------------------------------------------------------

--
-- Structure for view `downloads_view`
--
DROP TABLE IF EXISTS `downloads_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `downloads_view`  AS  select `downloads`.`id` AS `id`,`books`.`title` AS `title`,`books`.`nameAuthor` AS `nameAuthor`,`books`.`cover` AS `cover`,`books`.`file` AS `file`,`downloads`.`created_at` AS `created_at`,`users`.`id` AS `user` from ((`downloads` join `books` on((`books`.`id` = `downloads`.`book`))) join `users` on((`users`.`id` = `downloads`.`user`))) ;

-- --------------------------------------------------------

--
-- Structure for view `savebooks_view`
--
DROP TABLE IF EXISTS `savebooks_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `savebooks_view`  AS  select `savebooks`.`id` AS `id`,`books`.`title` AS `title`,`books`.`nameAuthor` AS `nameAuthor`,`books`.`cover` AS `cover`,`books`.`file` AS `file`,`savebooks`.`created_at` AS `created_at`,`users`.`id` AS `user` from ((`savebooks` join `books` on((`books`.`id` = `savebooks`.`book`))) join `users` on((`users`.`id` = `savebooks`.`user`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `savebooks`
--
ALTER TABLE `savebooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `savebooks`
--
ALTER TABLE `savebooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
