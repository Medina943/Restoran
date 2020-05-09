-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 30 2019 г., 19:54
-- Версия сервера: 5.5.53
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `restoran`
--

-- --------------------------------------------------------

--
-- Структура таблицы `kategoriya`
--

CREATE TABLE `kategoriya` (
  `id` int(11) NOT NULL,
  `k_nomi` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `kategoriya`
--

INSERT INTO `kategoriya` (`id`, `k_nomi`) VALUES
(1, 'Kaloriyali taomlar'),
(3, 'Parhez taomlar'),
(4, 'Milliy taomlar'),
(5, 'Shashlik'),
(6, 'Shirinliklar'),
(7, 'Salatlar');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `message` text NOT NULL,
  `dtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `message`, `dtime`) VALUES
(2, 'Atanazarova Madina', 'maddiinnnn@gmail.com', '+998911234567', 'oshpaz kerakmi', '2019-05-22 00:00:00'),
(3, 'Karimova Madina', 'madina@gmail.com', '+998999822145', 'taomnoma kerak', '2019-05-23 00:00:00'),
(4, 'Dilnoza', 'fais_le@mail.ru', '+998999673641', 'adkfhka udkfb kdafhdkfkb dfb\r\n dbf dfb\r\n dfb\r\nd fb dfbd fbd fb\r\nd fb dfb dfb dfb dfb dfb', '2019-06-21 00:00:00'),
(5, 'Dilnoza', 'fais_le@mail.ru', '+99896525523', 'rh rt rt h dfghfdgh\r\ndf\r\ngh df\r\ngh\r\n dfgh dfgh dfgh', '2019-06-28 00:00:00'),
(6, 'Shahnoza', 'fais_le@mail.ru', '+998999673641', 'srthrth srth rht rth fh sf shdfgh fgh dfgh f\r\n f\r\ngh dfgh fdgh dfgh', '2019-06-08 00:00:00'),
(7, 'Aziza', 'fais_le@mail.ru', '+998956325325', 'eraerg aerg erg aerg \r\nerg \r\naerg\r\n aerg aerg earg ergeag', '2019-06-01 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `rasm` varchar(22) NOT NULL,
  `yangliklar` varchar(200) NOT NULL,
  `sana` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `rasm`, `yangliklar`, `sana`) VALUES
(3, '11-large.jpg', 'yangi taom juda mazali va keksalar uchun foydali, shu bilan birga tarkibidagi barcha mahsulotlar tabiiy mahsulotlar   ', '2019-05-10'),
(4, '21.jpg', 'Restoranimiz dizayni ozgardi har qanday bazmlar uchun alohida joylar tashkil qilindi', '2019-05-15');

-- --------------------------------------------------------

--
-- Структура таблицы `porfoliya`
--

CREATE TABLE `porfoliya` (
  `id` int(11) NOT NULL,
  `rasmlar` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `porfoliya`
--

INSERT INTO `porfoliya` (`id`, `rasmlar`) VALUES
(3, '12-large.jpg'),
(4, '01-large.jpg'),
(5, 'big2.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `Taomlar`
--

CREATE TABLE `Taomlar` (
  `id` int(11) NOT NULL,
  `rasm` varchar(22) NOT NULL,
  `kategoriya_id` int(11) NOT NULL,
  `t_nomi` varchar(55) NOT NULL,
  `tafsiloti` varchar(55) NOT NULL,
  `miqdori` varchar(55) NOT NULL,
  `narxi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Taomlar`
--

INSERT INTO `Taomlar` (`id`, `rasm`, `kategoriya_id`, `t_nomi`, `tafsiloti`, `miqdori`, `narxi`) VALUES
(10, 'page3_img5.jpg', 4, 'dumlama', 'mol goshti, kartoshka, piyoz va ziravorlar', '1 portse', 10000),
(11, '08-small.jpg', 7, 'sveji salat', 'rayhon bargi, qovurilgan gosht, pomidor va anor', '1 tarelka', 8000),
(12, 'page5_img1.jpg', 6, 'Tort', 'qaymoq, kakao ', '1 dona', 70000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `kategoriya`
--
ALTER TABLE `kategoriya`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `porfoliya`
--
ALTER TABLE `porfoliya`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Taomlar`
--
ALTER TABLE `Taomlar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategoriya_id` (`kategoriya_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `kategoriya`
--
ALTER TABLE `kategoriya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `porfoliya`
--
ALTER TABLE `porfoliya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `Taomlar`
--
ALTER TABLE `Taomlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Taomlar`
--
ALTER TABLE `Taomlar`
  ADD CONSTRAINT `taomlar_ibfk_1` FOREIGN KEY (`kategoriya_id`) REFERENCES `kategoriya` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
