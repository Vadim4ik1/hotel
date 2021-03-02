-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 02 2021 г., 12:40
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hotel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `check`
--

CREATE TABLE `check` (
  `id` int(11) NOT NULL,
  `id_bron` int(11) DEFAULT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `money` int(11) NOT NULL,
  `full_name` varchar(1000) NOT NULL,
  `food` varchar(2000) NOT NULL,
  `transfer` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `check`
--

INSERT INTO `check` (`id`, `id_bron`, `date_in`, `date_out`, `money`, `full_name`, `food`, `transfer`) VALUES
(1, 35, '2021-02-27', '2021-02-27', 10500, 'saanekme', 'Без дополнительных услуг ', 'Без трансфера ');

-- --------------------------------------------------------

--
-- Структура таблицы `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` varchar(5000) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `food`
--

INSERT INTO `food` (`id`, `name`, `cost`) VALUES
(1, 'Завтрак', 1500),
(2, 'Ужин', 1000),
(3, 'Прачечная', 500),
(4, 'Прокат детской коляски', 400),
(5, 'Экскурсия', 2000);

-- --------------------------------------------------------

--
-- Структура таблицы `guest`
--

CREATE TABLE `guest` (
  `id_guest` int(11) NOT NULL,
  `full_name` varchar(1000) NOT NULL,
  `pass_num` varchar(1000) NOT NULL,
  `number` varchar(1000) NOT NULL,
  `place` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `nomer` int(11) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date DEFAULT NULL,
  `money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `guest`
--

INSERT INTO `guest` (`id_guest`, `full_name`, `pass_num`, `number`, `place`, `email`, `nomer`, `date_in`, `date_out`, `money`) VALUES
(6, 'saanekme', '324234', '324324', '', '', 8, '2021-02-23', '2021-02-27', 64000),
(9, 'Грек Янович Петров', '1738091238', '812739812', 'Казань', '3@mail.ru', 9, '2021-02-23', '2021-02-23', 18500),
(10, 'Гусь Рубенштейн Владимирович', '18237p182389', '812783198237', 'Казань', '2@mail.ru', 4, '2021-02-26', '2021-02-26', 17015),
(11, 'Чингизка Чинанаевский Чинанаевич', '38294782', '78637462', 'Казань', 'china@mail.ru', 13, '2021-02-26', '2021-02-27', 305000),
(12, 'saanekme', 'ajsdhjakdh', 'sndkjas', 'jdkahdja', '2@mail.ru', 8, '2021-02-27', '2021-02-27', 49000);

-- --------------------------------------------------------

--
-- Структура таблицы `guest_archive`
--

CREATE TABLE `guest_archive` (
  `id_guest` int(11) NOT NULL,
  `full_name` varchar(1000) NOT NULL,
  `pass_num` varchar(1000) NOT NULL,
  `number` varchar(1000) NOT NULL,
  `place` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `nomer` int(11) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `money` int(11) NOT NULL,
  `why` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `guest_archive`
--

INSERT INTO `guest_archive` (`id_guest`, `full_name`, `pass_num`, `number`, `place`, `email`, `nomer`, `date_in`, `date_out`, `money`, `why`) VALUES
(4, 'saanekme', 'mdm;sk', '', 'm.,sd .', '1@mail.ru', 3, '2021-02-15', '2021-02-18', 0, 'Бегал голышом'),
(5, ' фтывлофытв', 'тыофлвтфлы', 'овфтыфо', 'тывлфовт', '1@mail.ru', 2, '2021-02-17', '2021-02-20', 0, 'Пил воду из унитаза');

-- --------------------------------------------------------

--
-- Структура таблицы `nomera`
--

CREATE TABLE `nomera` (
  `id_nomer` int(11) NOT NULL,
  `nomer` int(11) NOT NULL,
  `etaj` int(11) NOT NULL,
  `tip` varchar(1000) NOT NULL,
  `status` varchar(1000) DEFAULT NULL,
  `cost` int(11) NOT NULL,
  `picture` varchar(1000) DEFAULT NULL,
  `date_in` date DEFAULT NULL,
  `date_out` date DEFAULT NULL,
  `bed` varchar(11) NOT NULL,
  `square` float NOT NULL,
  `rooms` int(11) NOT NULL,
  `opisanie` varchar(5000) NOT NULL,
  `picture_1` varchar(2000) NOT NULL,
  `picture_2` varchar(2000) NOT NULL,
  `picture_3` varchar(2000) NOT NULL,
  `picture_4` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `nomera`
--

INSERT INTO `nomera` (`id_nomer`, `nomer`, `etaj`, `tip`, `status`, `cost`, `picture`, `date_in`, `date_out`, `bed`, `square`, `rooms`, `opisanie`, `picture_1`, `picture_2`, `picture_3`, `picture_4`) VALUES
(1, 1, 1, 'Стандартный', 'free', 3100, 'uploads/1614211515picture_1.jpg', '2021-02-08', '2021-02-13', '1', 22.5, 1, 'Уютные и стильные номера с видом на городской массив или парк. Бесплатный доступ в Интернет, удобная кровать, эргономичное рабочее место, спутниковое телевидение, сейф, мини-бар и удобства для приготовления чая и кофе.', 'uploads/1614211515picture_2.jpg', 'uploads/1614211515picture_3.jpg', 'uploads/1614211515picture_4.jpg', 'uploads/1614211515picture_5.jpg'),
(2, 2, 1, 'Стандартный', 'free', 3100, 'uploads/1614211843picture_1.jpg', '2021-02-14', '2021-02-17', '1', 22.5, 1, 'Уютные и стильные номера с видом на городской массив или парк. Бесплатный доступ в Интернет, удобная кровать, эргономичное рабочее место, спутниковое телевидение, сейф, мини-бар и удобства для приготовления чая и кофе.', 'uploads/1614211843picture_2.jpg', 'uploads/1614211843picture_3.jpg', 'uploads/1614211843picture_4.jpg', 'uploads/1614211843picture_5.jpg'),
(3, 3, 1, 'Стандартный BIG', 'free', 3300, 'uploads/1614212078sb_1.jpg', NULL, '2021-02-26', '2', 24, 2, 'Двойной-стандартный номер с видом на город или парк. Бесплатный доступ в Интернет, удобная кровать, эргономичное рабочее место, спутниковое телевидение, сейф, мини-бар и удобства для приготовления чая и кофе.', 'uploads/1614212078sb_2.jpg', 'uploads/1614212078sb_3.jpg', 'uploads/1614212078sb_4.jpg', 'uploads/1614212078sb_5.jpg'),
(4, 4, 1, 'Комфорт', 'free', 3500, 'uploads/1614212256k_1.jpg', '2021-02-26', '2021-02-26', '2', 28, 2, 'Просторные номера комфорт с видом на летное поле или парк. Отдельная гостевая зона, стильная спальня, просторный гардероб и эргономичное рабочее место обеспечат максимальный комфорт и удобство.', 'uploads/1614212256k_2.jpg', 'uploads/1614212256k_3.jpg', 'uploads/1614212256k_4.jpg', 'uploads/1614212256k_5.jpg'),
(5, 5, 2, 'Стандартный', 'free', 3100, 'uploads/1614211886picture_1.jpg', NULL, NULL, '1', 22.5, 1, 'Уютные и стильные номера с видом на городской массив или парк. Бесплатный доступ в Интернет, удобная кровать, эргономичное рабочее место, спутниковое телевидение, сейф, мини-бар и удобства для приготовления чая и кофе.', 'uploads/1614211886picture_2.jpg', 'uploads/1614211886picture_3.jpg', 'uploads/1614211886picture_4.jpg', 'uploads/1614211886picture_5.jpg'),
(6, 6, 2, 'Стандартный', 'free', 3100, 'uploads/1614211909picture_1.jpg', NULL, NULL, '1', 22.5, 1, 'Уютные и стильные номера с видом на городской массив или парк. Бесплатный доступ в Интернет, удобная кровать, эргономичное рабочее место, спутниковое телевидение, сейф, мини-бар и удобства для приготовления чая и кофе.', 'uploads/1614211909picture_2.jpg', 'uploads/1614211909picture_3.jpg', 'uploads/1614211909picture_4.jpg', 'uploads/1614211909picture_5.jpg'),
(7, 7, 2, 'Стандартный BIG', 'free', 3300, 'uploads/1614212106sb_1.jpg', NULL, NULL, '2', 24, 2, 'Двойной-стандартный номер с видом на город или парк. Бесплатный доступ в Интернет, удобная кровать, эргономичное рабочее место, спутниковое телевидение, сейф, мини-бар и удобства для приготовления чая и кофе.', 'uploads/1614212106sb_2.jpg', 'uploads/1614212106sb_3.jpg', 'uploads/1614212106sb_4.jpg', 'uploads/1614212106sb_5.jpg'),
(8, 8, 2, 'Комфорт', 'free', 3500, 'uploads/1614212283k_1.jpg', '2021-02-27', '2021-02-27', '2', 28, 2, 'Просторные номера комфорт с видом на летное поле или парк. Отдельная гостевая зона, стильная спальня, просторный гардероб и эргономичное рабочее место обеспечат максимальный комфорт и удобство.', 'uploads/1614212283k_2.jpg', 'uploads/1614212283k_3.jpg', 'uploads/1614212283k_4.jpg', 'uploads/1614212283k_5.jpg'),
(9, 9, 2, 'Люкс', 'занято', 4000, 'uploads/1614212499l_1.jpg', '2021-02-23', NULL, '3', 40, 3, 'Насладитесь потрясающим видом на центр Казани, остановившись в одном из номеров люкс. Просторная спальня, элегантная гостиная, балкон, HD-телевизор, кофемашина, а также стильная ванная комната с отдельной  кабиной', 'uploads/1614212499l_2.jpg', 'uploads/1614212499l_3.jpg', 'uploads/1614212499l_4.jpg', 'uploads/1614212499l_5.jpg'),
(10, 10, 3, 'Стандартный', 'free', 3100, 'uploads/1614211932picture_1.jpg', NULL, NULL, '1', 22.5, 1, 'Уютные и стильные номера с видом на городской массив или парк. Бесплатный доступ в Интернет, удобная кровать, эргономичное рабочее место, спутниковое телевидение, сейф, мини-бар и удобства для приготовления чая и кофе.', 'uploads/1614211932picture_2.jpg', 'uploads/1614211932picture_3.jpg', 'uploads/1614211932picture_4.jpg', 'uploads/1614211932picture_5.jpg'),
(11, 11, 3, 'Комфорт', 'free', 3500, 'uploads/1614212524k_1.jpg', NULL, NULL, '2', 28, 2, 'Просторные номера комфорт с видом на летное поле или парк. Отдельная гостевая зона, стильная спальня, просторный гардероб и эргономичное рабочее место обеспечат максимальный комфорт и удобство.', 'uploads/1614212524k_2.jpg', 'uploads/1614212524k_3.jpg', 'uploads/1614212524k_4.jpg', 'uploads/1614212524k_5.jpg'),
(12, 12, 3, 'Люкс', 'free', 4000, 'uploads/1614212551l_1.jpg', NULL, NULL, '3', 40, 3, 'Насладитесь потрясающим видом на центр Казани, остановившись в одном из номеров люкс. Просторная спальня, элегантная гостиная, балкон, HD-телевизор, кофемашина, а также стильная ванная комната с отдельной  кабиной', 'uploads/1614212551l_2.jpg', 'uploads/1614212551l_3.jpg', 'uploads/1614212551l_4.jpg', 'uploads/1614212551l_5.jpg'),
(13, 13, 3, 'Президентский', 'free', 4500, 'uploads/1614212634p_1.jpg', '2021-02-26', '2021-02-27', '3', 50, 3, 'Роскошь Президентских апартаментов достойна всего внимания самых-самых именитых гостей нашего отеля, среди которых - деятели культуры, политики, звезды как низкой, так и высокой эстрады', 'uploads/1614212634p_2.jpg', 'uploads/1614212634p_3.jpg', 'uploads/1614212634p_4.jpg', 'uploads/1614212634p_5.jpg'),
(14, 14, 3, 'VIP', 'занято', 5000, 'uploads/1614212664v_1.jpg', '2021-02-23', NULL, '4', 70, 4, 'Просторные, светлые номера с эксклюзивным дизайном. Стильный интерьер с роскошной итальянской мебелью, продуманная функциональность, в сочетании с невероятными панорамными видами                               ', 'uploads/1614212664v_2.jpg', 'uploads/1614212664v_3.jpg', 'uploads/1614212664v_4.jpg', 'uploads/1614212664v_5.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `nomera_bron`
--

CREATE TABLE `nomera_bron` (
  `id_bron` int(11) NOT NULL,
  `nomer` int(11) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `full_name` varchar(5000) NOT NULL,
  `status` varchar(5000) NOT NULL,
  `comment` varchar(5000) DEFAULT NULL,
  `food` varchar(1000) DEFAULT NULL,
  `transfer1` varchar(1000) DEFAULT NULL,
  `date_ofbron` date NOT NULL,
  `date_ofcheck` date DEFAULT NULL,
  `money` int(11) NOT NULL,
  `money_status` varchar(1000) NOT NULL,
  `pass_num` varchar(1000) NOT NULL,
  `place` varchar(1000) NOT NULL,
  `number` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `nomera_bron`
--

INSERT INTO `nomera_bron` (`id_bron`, `nomer`, `date_in`, `date_out`, `full_name`, `status`, `comment`, `food`, `transfer1`, `date_ofbron`, `date_ofcheck`, `money`, `money_status`, `pass_num`, `place`, `number`, `email`) VALUES
(3, 3, '2021-02-01', '2021-02-03', 'Иванов Иван Иванович', 'Подтверждено', NULL, NULL, NULL, '0000-00-00', '2021-02-24', 0, '', '', '', '', ''),
(5, 1, '2021-02-01', '2021-02-03', 'Иванов Иван Иванович', 'Подтверждено', NULL, NULL, NULL, '0000-00-00', '2021-02-24', 0, '', '', '', '', ''),
(8, 3, '2021-02-23', '2021-02-26', 'sadavsj', 'Выселено', 'bhadb,ajs', 'Ужин включен; ', 'Из Отель В ЖД Вокзал; ', '2021-02-15', NULL, 0, 'Оплачено', '', '', '', ''),
(12, 4, '2021-02-14', '2021-02-16', 'Иванов Иван Иванович', 'Подтверждено', NULL, NULL, NULL, '0000-00-00', '2021-02-22', 0, '', '', '', '', ''),
(13, 5, '2021-02-14', '2021-02-16', 'Иванов Иван Иванович', 'не подтверждена', NULL, NULL, NULL, '0000-00-00', '0000-00-00', 0, '', '', '', '', ''),
(14, 6, '2021-02-14', '2021-02-16', 'Иванов Иван Иванович', 'не подтверждена', NULL, NULL, NULL, '0000-00-00', '0000-00-00', 0, '', '', '', '', ''),
(15, 7, '2021-02-14', '2021-02-16', 'Иванов Иван Иванович', 'не подтверждена', NULL, NULL, NULL, '0000-00-00', '0000-00-00', 0, '', '', '', '', ''),
(16, 8, '2021-02-14', '2021-02-16', 'Иванов Иван Иванович', 'не подтверждена', NULL, NULL, NULL, '0000-00-00', '0000-00-00', 0, '', '', 'Казань', '', ''),
(17, 9, '2021-02-14', '2021-02-16', 'Иванов Иван Иванович', 'не подтверждена', NULL, NULL, NULL, '0000-00-00', '0000-00-00', 0, '', '', 'Казань', '', ''),
(18, 10, '2021-02-14', '2021-02-16', 'Иванов Иван Иванович', 'не подтверждена', NULL, NULL, NULL, '0000-00-00', '0000-00-00', 0, '', '', 'Казань', '', ''),
(19, 11, '2021-02-14', '2021-02-16', 'Иванов Иван Иванович', 'не подтверждена', NULL, NULL, NULL, '0000-00-00', '0000-00-00', 0, '', '', 'Казань', '', ''),
(20, 12, '2021-02-14', '2021-02-16', 'Иванов Иван Иванович', 'не подтверждена', NULL, NULL, NULL, '0000-00-00', '0000-00-00', 0, '', '', 'Казань', '', ''),
(21, 13, '2021-02-14', '2021-02-16', 'Иванов Иван Иванович', 'не подтверждена', NULL, NULL, NULL, '0000-00-00', '0000-00-00', 0, '', '', 'Казань', '', ''),
(22, 14, '2021-02-14', '2021-02-16', 'Иванов Иван Иванович', 'Подтверждено', NULL, NULL, NULL, '0000-00-00', '2021-02-23', 0, '', '', 'Казань', '', ''),
(24, 4, '2021-02-19', '2021-02-22', 'ыдатфыал', 'Не подтверждено', 'asdad', 'Array ', 'Array ', '2021-02-19', NULL, 14000, '', '', 'Казань', '', ''),
(26, 4, '2021-02-19', '2021-02-22', 'sjandjs', 'Не подтверждено', 'lksmdalks', '1.Экскурсия ; ', '1.Из Аэропорт В Отель; ', '2021-02-19', NULL, 14000, '', '', 'Казань', '', ''),
(27, 8, '2021-02-23', '2021-02-26', 'saanekme', 'Выселено', 'Пожеланий нет', '1.Завтрак ;;2.Ужин ; ', '1.Из Аэропорт В Отель;;2.Из Отель В ЖД Вокзал; ', '2021-02-22', '2021-02-23', 15000, 'Оплачено', '', 'Казань', '', ''),
(29, 4, '2021-02-26', '2021-02-26', 'Гусь Рубенштейн Владимирович', 'Выселено', 'Нет пожеланий', '1.Прачечная ;;2.Экскурсия ; ', '1.Из Отель В Аэропорт;;2.Из Аэропорт В Отель;;3.Из Отель В ЖД Вокзал; ', '2021-02-23', '2021-02-26', 17000, 'Оплачено', '18237p182389', 'Казань', '812783198237', '2@mail.ru'),
(30, 9, '2021-02-23', '2021-02-23', 'Грек Янович Петров', 'Выселено', 'Хрена лысого вам', '1.Завтрак ;;2.Ужин ;;3.Прачечная ; ', '1.Из Отель В Аэропорт;;2.Из Аэропорт В Отель;;3.Из Отель В ЖД Вокзал; ', '2021-02-23', '2021-02-23', 18500, 'Не оплачено', '1738091238', 'Казань', '812739812', '3@mail.ru'),
(32, 2, '2021-02-01', '2021-02-03', 'Иванов Иван Иванович', 'Подтверждено', NULL, NULL, NULL, '0000-00-00', '2021-02-24', 0, '', '', '', '', ''),
(33, 13, '2021-02-26', '2021-02-27', 'Чингизка Чинанаевский Чинанаевич', 'Выселе	но', 'Афафаф', '1.Завтрак ;;2.Ужин ; ', '1.Из Отель В  Аэропорт;;2.Из Аэропорт В Отель; ', '2021-02-26', '2021-02-26', 18500, 'Оплачено', '38294782', 'Казань', '78637462', 'china@mail.ru'),
(34, 4, '2021-02-26', '2021-03-01', 'фтывлофытв', 'Не подтверждено', 'jdfklgj', 'Без дополнительных услуг ', 'Без трансфера ', '2021-02-26', NULL, 10500, 'Не оплачено', '767678', 'ghbnhja', '76786', '3@mail.ru'),
(35, 8, '2021-02-27', '2021-02-27', 'saanekme', 'Выселе	но', 'jdshakj', 'Без дополнительных услуг ', 'Без трансфера ', '2021-02-26', '2021-02-27', 10500, 'Оплачено', 'ajsdhjakdh', 'jdkahdja', 'sndkjas', '2@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `full_name` varchar(1000) NOT NULL,
  `pass_num` varchar(1000) NOT NULL,
  `number` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `picture` varchar(1000) DEFAULT NULL,
  `login` varchar(5000) NOT NULL,
  `password` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `staff`
--

INSERT INTO `staff` (`id_staff`, `full_name`, `pass_num`, `number`, `status`, `picture`, `login`, `password`) VALUES
(3, 'admin', '888888', '88888', 'admin', 'uploads/1613829391', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(5, ' фтывлофытв222', 'тыофлвтфлы', 'овфтыфо', '', 'uploads/1613902936', '', 'c3284d0f94606de1fd2af172aba15bf3');

-- --------------------------------------------------------

--
-- Структура таблицы `staff_archive`
--

CREATE TABLE `staff_archive` (
  `id_staff` int(11) NOT NULL,
  `full_name` varchar(1000) NOT NULL,
  `pass_num` varchar(1000) NOT NULL,
  `number` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `picture` varchar(1000) DEFAULT NULL,
  `login` varchar(5000) NOT NULL,
  `password` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `transfer`
--

CREATE TABLE `transfer` (
  `id_transfer` int(11) NOT NULL,
  `place1` varchar(500) NOT NULL,
  `place2` varchar(5000) NOT NULL,
  `summa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `transfer`
--

INSERT INTO `transfer` (`id_transfer`, `place1`, `place2`, `summa`) VALUES
(1, 'Отель', ' Аэропорт', 1500),
(2, 'Аэропорт', 'Отель', 1500),
(3, 'Отель', 'ЖД Вокзал', 1000),
(4, 'ЖД Вокзал', 'Аэропорт', 1000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `check`
--
ALTER TABLE `check`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id_guest`);

--
-- Индексы таблицы `guest_archive`
--
ALTER TABLE `guest_archive`
  ADD PRIMARY KEY (`id_guest`);

--
-- Индексы таблицы `nomera`
--
ALTER TABLE `nomera`
  ADD PRIMARY KEY (`id_nomer`);

--
-- Индексы таблицы `nomera_bron`
--
ALTER TABLE `nomera_bron`
  ADD PRIMARY KEY (`id_bron`);

--
-- Индексы таблицы `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Индексы таблицы `staff_archive`
--
ALTER TABLE `staff_archive`
  ADD PRIMARY KEY (`id_staff`);

--
-- Индексы таблицы `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id_transfer`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `check`
--
ALTER TABLE `check`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `guest`
--
ALTER TABLE `guest`
  MODIFY `id_guest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `guest_archive`
--
ALTER TABLE `guest_archive`
  MODIFY `id_guest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `nomera`
--
ALTER TABLE `nomera`
  MODIFY `id_nomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `nomera_bron`
--
ALTER TABLE `nomera_bron`
  MODIFY `id_bron` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `staff_archive`
--
ALTER TABLE `staff_archive`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id_transfer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
