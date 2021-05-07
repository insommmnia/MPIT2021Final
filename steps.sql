-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 07 2021 г., 04:17
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mpit2021fin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `steps`
--

CREATE TABLE `steps` (
  `id` int(255) NOT NULL,
  `Monday` int(255) NOT NULL,
  `Tuesday` int(255) NOT NULL,
  `Wednesday` int(255) NOT NULL,
  `Thursday` int(255) NOT NULL,
  `Friday` int(255) NOT NULL,
  `Saturday` int(255) NOT NULL,
  `Sunday` int(255) NOT NULL,
  `userid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `steps`
--

INSERT INTO `steps` (`id`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`, `Sunday`, `userid`) VALUES
(1, 0, 0, 0, 3000, 0, 0, 0, 1),
(2, 0, 0, 0, 2500, 0, 0, 0, 2),
(3, 0, 0, 0, 4500, 0, 0, 0, 3),
(4, 0, 0, 0, 7500, 0, 0, 0, 4),
(5, 0, 0, 0, 4500, 0, 0, 0, 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `steps`
--
ALTER TABLE `steps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `steps`
--
ALTER TABLE `steps`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
