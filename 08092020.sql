-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 25 2020 г., 17:18
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `08092020`
--
CREATE DATABASE IF NOT EXISTS `08092020` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `08092020`;

-- --------------------------------------------------------

--
-- Структура таблицы `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `active` varchar(10) NOT NULL,
  `priority` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `active`, `priority`) VALUES
(1, 'Где живут самые красивые девушки живут ?', 'в России', 'y', '10'),
(2, 'В какой стране самый высокий процент рождаемости?', 'В Китае', 'y', '20');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  `active` varchar(10) NOT NULL,
  `priority` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `title`, `link`, `active`, `priority`) VALUES
(1, 'Главная', 'http://localhost/index.php#', 'y', '10'),
(2, 'О нас', 'http://localhost/about.php#', 'y', '20'),
(3, 'Контакты', 'http://localhost/contacts.php#', 'y', '30'),
(4, 'Задать вопрос', 'http://localhost/orders.php#', 'y', '40');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(50) NOT NULL,
  `adult` varchar(10) NOT NULL,
  `child` varchar(10) NOT NULL,
  `date_beginnings` varchar(10) NOT NULL,
  `date_end` varchar(10) NOT NULL,
  `reserve` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `massadge` text NOT NULL,
  `method` varchar(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `fio`, `email`, `phone`, `massadge`, `method`, `country`, `gender`) VALUES
(14, 'Ivanov Denis', 'ivanov@mail.ru', '79262806942', 'hello, world', 'phone', 'russia', ''),
(63, 'Лукашенко', '', '0101010}', 'ghbdth', 'phone', 'southernAmerica', ''),
(64, 'Лукашенко', '', '0101010}', 'ghbdth', 'phone', 'southernAmerica', ''),
(65, 'Лукашенко', '', '0101010}', 'ghbdth', 'phone', 'southernAmerica', ''),
(66, 'Лукашенко', '', '0101010}', 'ghbdth', 'phone', 'southernAmerica', ''),
(67, 'Лукашенко', '', '0101010}', 'ghbdth', 'phone', 'southernAmerica', ''),
(68, 'Кузин Семен', 'kuzin_11@mail.ru', '892055555}', 'проверка работы', 'email', 'australia', ''),
(69, 'Чикин Денис Евгеньевич', 'gens_11@mail.ru', '89200740121}', 'o', 'email', 'africa', ''),
(70, 'Чикин Денис Евгеньевич', 'gens_11@mail.ru', '89200740121}', 'o', 'email', 'africa', ''),
(71, '27 27 27', 'gens_11@mail.ru', '89200740121}', 'а', 'phone', 'russia', ''),
(74, '  Денис  ', '', '}', '', 'phone', '', ''),
(77, 'Чикин Денис Евгеньевич', 'gens_11@mail.ru', '}', '', 'phone', 'russia', ''),
(78, 'Чикин Денис Евгеньевич', 'gens_11@mail.ru', '89200740121}', 'ф', 'phone', 'russia', '');

-- --------------------------------------------------------

--
-- Структура таблицы `trips`
--

CREATE TABLE IF NOT EXISTS `trips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `active` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `trips`
--

INSERT INTO `trips` (`id`, `img_url`, `title`, `description`, `active`) VALUES
(1, '../images/moscow.png', 'ПУТЕШЕСТВИЯ ПО РОССИИ', ' Самые интересные уголки России\r\n Самые необычные маршруты', 'n'),
(2, '../images/big-ben.png', 'Путешествия по Европе', 'страны, разные культуры, исторические\r\nместа и все самое интересное в современной\r\nЕвропе!', 'n'),
(3, '../images/pyramids.png', 'ПУТЕШЕСТВИЯ ПО АФРИКЕ', 'Дикая природа, крокодилы, обезьяны, сафари на джипах, гостиницы на деревьях и самые опасные приключения ждут тебя!', 'y'),
(4, '../images/north-america.png', 'ПУТЕШЕСТВИЯ ПО СЕВЕРНОЙ АМЕРИКЕ', 'Конечно, мы проедем через всю Америку и\r\nпобываем как в главных туристических местах, так и в уголках, где почти не ступала нога человека', 'y'),
(5, '../images/south-america.png', 'ПУТЕШЕСТВИЯ ПО ЮЖНОЙ АМЕРИКИ', 'Южная Америка – место, где хочет побывать каждый. Богатые районы и заброшенные фавелы, опасности и приключения, темпераментные люди и многое другое на страницах наших путешествий', 'y'),
(6, '../images/kangaroo.png', 'ПУТЕШЕСТВИЯ ПО АВСТРАЛИИ', 'Мы побываем на отдельном континенте,\r\nПочему-то думая об Австралии, сразу\r\nпредставляешь кенгуру, хотя это совершенно\r\nне символ страны', 'n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
