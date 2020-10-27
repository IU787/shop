-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 27 2020 г., 11:58
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
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `title` varchar(100) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `img` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`title`, `des`, `img`, `price`, `id`) VALUES
('Pomeranian Dog', '', '3.jpg', '$500', 1),
('Piony Flowers', '', '4.jpg', '$65', 2),
('Ferrari 812 GTS', '', '812.jpg', '$290000', 3),
('Mango', 'I love mango and everything with it', 'mango.jpg', '$5', 4),
('Books', 'I like to read non fictions)))', 'book.jpg', 'priceless', 5),
('Travelling', 'enjoy the beauty of the world', '7.jpg', 'priceless', 6),
('Anime', '', '6.jpg', 'priceless', 7),
('Korean doramas', '', '7.png', 'priceless', 8),
('Supernatural', '', 'spn.jpg', 'priceless', 9),
('Pizza', 'my love', 'pizza.jpg', 'priceless', 10),
('Mango', '', 'mango.jpg', '300', 12);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
