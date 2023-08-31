-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: mysql
-- Время создания: Авг 27 2023 г., 16:52
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
-- База данных: `Hospital`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Appointments`
--

CREATE TABLE `Appointments` (
  `doctor_name_id` int NOT NULL,
  `patient_name_id` int NOT NULL,
  `date` date NOT NULL,
  `cabinet` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Doctors`
--

CREATE TABLE `Doctors` (
  `id` int NOT NULL,
  `name` varchar(32) NOT NULL,
  `specialization` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `History_of_deseases`
--

CREATE TABLE `History_of_deseases` (
  `history_of_deseases_id` int NOT NULL,
  `desease` varchar(56) NOT NULL,
  `date_of _sickness` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Patients card`
--

CREATE TABLE `Patients card` (
  `id` int NOT NULL,
  `age` int NOT NULL,
  `gender` varchar(6) NOT NULL,
  `history of deseases` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Patients`
--

CREATE TABLE `Patients` (
  `id` int NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Appointments`
--
ALTER TABLE `Appointments`
  ADD PRIMARY KEY (`doctor_name_id`),
  ADD KEY `patient_id` (`patient_name_id`);

--
-- Индексы таблицы `Doctors`
--
ALTER TABLE `Doctors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `History_of_deseases`
--
ALTER TABLE `History_of_deseases`
  ADD PRIMARY KEY (`history_of_deseases_id`);

--
-- Индексы таблицы `Patients card`
--
ALTER TABLE `Patients card`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_of_deseases` (`history of deseases`);

--
-- Индексы таблицы `Patients`
--
ALTER TABLE `Patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Appointments`
--
ALTER TABLE `Appointments`
  MODIFY `doctor_name_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Doctors`
--
ALTER TABLE `Doctors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `History_of_deseases`
--
ALTER TABLE `History_of_deseases`
  MODIFY `history_of_deseases_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Patients card`
--
ALTER TABLE `Patients card`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Patients`
--
ALTER TABLE `Patients`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Appointments`
--
ALTER TABLE `Appointments`
  ADD CONSTRAINT `doctor_id` FOREIGN KEY (`doctor_name_id`) REFERENCES `Doctors` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `patient_id` FOREIGN KEY (`patient_name_id`) REFERENCES `Patients` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `Patients card`
--
ALTER TABLE `Patients card`
  ADD CONSTRAINT `history_of_deseases` FOREIGN KEY (`history of deseases`) REFERENCES `History_of_deseases` (`history_of_deseases_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `Patients`
--
ALTER TABLE `Patients`
  ADD CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `Patients card` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
