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
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `surname` varchar(500) NOT NULL,
  `mail` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `steps` int(255) NOT NULL,
  `idteam` int(100) NOT NULL,
  `idfriend` int(255) NOT NULL,
  `friendnum` int(255) NOT NULL,
  `age` int(255) NOT NULL,
  `img` varchar(500) NOT NULL,
  `friendcode` int(255) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `mail`, `password`, `steps`, `idteam`, `idfriend`, `friendnum`, `age`, `img`, `friendcode`, `points`) VALUES
(1, 'Никита', 'Алексеев', 'nikita.ins@mail.ru', '123', 3000, 5, 5, 0, 17, 'img/ocr.jpg', 7927, 0),
(2, 'Владимир', 'Охлопков', 'nikita@mail.ru', '123', 2500, 5, 5, 0, 17, 'img/1.jpg', 3765, 0),
(3, 'Константин', 'Кан', 'evsyhurikov@gmail.com', '123', 4500, 0, 0, 0, 17, 'img/4rLNdhq0iN4.jpg', 3036, 0),
(4, 'Евгения', 'Алексеев', '1nikita.ins@mail.ru', '1234', 7500, 0, 0, 0, 17, 'img/4267742.jpg', 5643, 0),
(5, 'Евгения', 'Алексеев', 'nii1kita.ins@mail.ru', '123', 4500, 5, 0, 0, 17, 'img/43.png', 3965, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
