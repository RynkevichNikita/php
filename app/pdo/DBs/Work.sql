-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: mysql
-- Время создания: Сен 11 2023 г., 14:48
-- Версия сервера: 8.0.33
-- Версия PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Work`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Departments`
--

CREATE TABLE `Departments` (
  `department_id` int NOT NULL,
  `department` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Departments`
--

INSERT INTO `Departments` (`department_id`, `department`) VALUES
(1, 'Management'),
(2, 'IT'),
(3, 'Design'),
(4, 'Sales');

-- --------------------------------------------------------

--
-- Структура таблицы `Worker`
--

CREATE TABLE `Worker` (
  `id` int NOT NULL,
  `name` varchar(56) NOT NULL,
  `department` int NOT NULL,
  `time_arrive` datetime DEFAULT NULL,
  `time_leave` datetime DEFAULT NULL,
  `social_number` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Worker`
--

INSERT INTO `Worker` (`id`, `name`, `department`, `time_arrive`, `time_leave`, `social_number`) VALUES
(1, 'Jack Jackson', 1, NULL, NULL, 123456789),
(2, 'Nick Nickelson', 4, '2023-09-11 17:20:10', NULL, 987654321),
(3, 'Dick Dickinson', 2, NULL, NULL, 312654987),
(4, 'John Johnson', 3, NULL, NULL, 789456123),
(5, 'Dave Davidson', 4, '2023-09-11 00:00:00', '2023-09-11 17:22:13', 132465798),
(6, 'Mike Mikeson', 2, '2023-09-11 14:13:49', NULL, 312645978);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Departments`
--
ALTER TABLE `Departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Индексы таблицы `Worker`
--
ALTER TABLE `Worker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department` (`department`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Departments`
--
ALTER TABLE `Departments`
  MODIFY `department_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `Worker`
--
ALTER TABLE `Worker`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Worker`
--
ALTER TABLE `Worker`
  ADD CONSTRAINT `department` FOREIGN KEY (`department`) REFERENCES `Departments` (`department_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
