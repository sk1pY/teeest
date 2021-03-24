-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 25 2021 г., 00:22
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `statuses`
--

CREATE TABLE `statuses` (
  `id` int NOT NULL,
  `name` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `statuses`
--

INSERT INTO `statuses` (`id`, `name`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `users1`
--

CREATE TABLE `users1` (
  `id` int NOT NULL,
  `login` varchar(16) DEFAULT NULL,
  `password` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `registration_date` datetime DEFAULT NULL,
  `name` varchar(16) NOT NULL,
  `surname` varchar(16) NOT NULL,
  `otch` varchar(16) NOT NULL,
  `status_id` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `banned` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users1`
--

INSERT INTO `users1` (`id`, `login`, `password`, `date`, `email`, `registration_date`, `name`, `surname`, `otch`, `status_id`, `banned`) VALUES
(13, '1', '$2y$10$N3IV0OB2i.efVBTRlvXNi.1Z8BxdZVTNY9kTkf8wxs7Q98yE8XoYy', '2021-03-12', '1@bk.ru', '2021-03-12 00:00:00', '1', '1', '1', 'admin', '0'),
(17, '2', '$2y$10$.iUjxIcLV8zqTfDcfGHtF.6Yg4syPmOwuybE.jp/ogfOnEzJn52xS', '2021-03-13', '2@bk.ru', '2021-03-13 00:00:00', '2', '2', '2', 'user', '0'),
(18, '3', '$2y$10$wrjI78xhncH72jw1fV0ni.Pgooee4C6gzl73ma.0Ac1AThBMkfBES', '2021-03-13', '3@bk.ru', '2021-03-13 00:00:00', '3', '3', '3', 'user', '0'),
(22, '51', '$2y$10$q3TvNxs3AiXfkK16Ru1SGuymgxRZmkEkd4CVg5DY9EgCWXqqcDUGy', '2021-03-13', 'q@bkf', '2021-03-13 00:00:00', '31', '31', '31', 'user', '0'),
(24, 'q', '$2y$10$Prm2S0uevi4fWEKXsikU.OwhFU3a2JhoZJIQ479/QhPD8i.JyuaAO', '2021-03-13', 'q@bk.ru', '2021-03-13 00:00:00', 'q', 'q', 'q', 'user', '0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users1`
--
ALTER TABLE `users1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
