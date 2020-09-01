-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 12 2020 г., 08:09
-- Версия сервера: 5.7.25
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `t96463c4_mid`
--

-- --------------------------------------------------------

--
-- Структура таблицы `consultations`
--

CREATE TABLE `consultations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price1` decimal(10,2) DEFAULT NULL,
  `price2` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `consultations`
--

INSERT INTO `consultations` (`id`, `name`, `price1`, `price2`) VALUES
(1, 'терапевта', '1100.00', '900.00'),
(2, 'кардиолога', '1100.00', '900.00'),
(3, 'невролога', '1100.00', '900.00'),
(4, 'физиотерапевта', '1100.00', '900.00'),
(5, 'диетолога', '1100.00', '900.00'),
(6, 'гастроэнтеролога', '1100.00', '900.00'),
(7, 'педиатра', '1100.00', '900.00'),
(8, 'рефлексотерапевта', '1100.00', '900.00'),
(9, 'дерматовенеролога', '1100.00', '900.00'),
(10, 'по лечебной физкультуре (ЛФК)', '1100.00', '900.00'),
(11, 'ГБО', '1100.00', '900.00'),
(12, 'КМН', '1300.00', '1000.00');

-- --------------------------------------------------------

--
-- Структура таблицы `cosmet4`
--

CREATE TABLE `cosmet4` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price1` decimal(10,0) DEFAULT NULL,
  `hide` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cosmet4`
--

INSERT INTO `cosmet4` (`id`, `name`, `price1`, `hide`) VALUES
(1, 'Вакуумный массаж лица', '1000', 0),
(2, '3-х мерный лифтинговый', '2100', 0),
(3, 'По Жаке, пластический', '700', 0),
(4, 'Классический косметический', '850', 0),
(5, 'Классический косметический по маске', '1000', 0),
(6, 'Массаж волосистой части головы медицинский', '700', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `cosmet5`
--

CREATE TABLE `cosmet5` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price1` decimal(10,0) DEFAULT NULL,
  `hide` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cosmet5`
--

INSERT INTO `cosmet5` (`id`, `name`, `price1`, `hide`) VALUES
(1, 'Фонофорез лица', '2100', 0),
(2, 'УЗИ-лифтинг лица', '3500', 0),
(3, 'УЗИ-чистка лица', '3500', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `cosmet6`
--

CREATE TABLE `cosmet6` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price1` decimal(10,0) DEFAULT NULL,
  `hide` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cosmet6`
--

INSERT INTO `cosmet6` (`id`, `name`, `price1`, `hide`) VALUES
(1, 'Лицо', '700', 0),
(2, 'Лицо, шея, декольте', '1000', 0),
(3, 'Волосистая часть головы', '700', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `cosmetology`
--

CREATE TABLE `cosmetology` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price1` decimal(10,0) DEFAULT NULL,
  `price2` decimal(10,0) DEFAULT NULL,
  `hide` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cosmetology`
--

INSERT INTO `cosmetology` (`id`, `name`, `price1`, `price2`, `hide`) VALUES
(1, 'Голень', '500', '700', 0),
(2, 'Бедро', '500', '700', 0),
(3, 'Руки (предплечье)', '500', NULL, 0),
(4, 'Подмышечная область', '300', '500', 0),
(5, 'Верхняя губа, подбородок', '150', '250', 0),
(6, 'Бикини (классика)', '1500', NULL, 0),
(7, 'Бикини (глубокое)', '2000', '2500', 0),
(8, 'Бикини (+)', '3000', NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `diagnostics`
--

CREATE TABLE `diagnostics` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price1` decimal(10,2) DEFAULT NULL,
  `hide` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `diagnostics`
--

INSERT INTO `diagnostics` (`id`, `name`, `price1`, `hide`) VALUES
(1, 'Регистрация электро-кардиограммы (без расшифровки)', '500.00', 0),
(2, 'Регистрация электрокардиограммы (расшифровка, описание и интерпретация ЭКГ данных)', '800.00', 0),
(3, 'Холтеровское мониторирование сердечного ритма', '2800.00', 0),
(4, 'Электрокардиография с физическими упражнениями', '2000.00', 0),
(5, 'Пульсоксиметрия', '100.00', 0),
(6, 'Исследование уровня глюкозы в крови', '200.00', 0),
(7, 'Суточное мониторирование ЭКГ и артериального давления', '2500.00', 0),
(8, 'Биоимпедансометрия', '1500.00', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `hydrotherapy`
--

CREATE TABLE `hydrotherapy` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` int(11) DEFAULT NULL,
  `price1` decimal(10,2) DEFAULT NULL,
  `hide` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `hydrotherapy`
--

INSERT INTO `hydrotherapy` (`id`, `name`, `time`, `price1`, `hide`) VALUES
(1, 'Ванны минеральные, лекарственные, ароматические', 15, '400.00', 0),
(2, 'Вихревые ванны', NULL, '300.00', 0),
(3, 'Ванны воздушно-пузырьковые (жемчужные)', NULL, '300.00', 0),
(4, 'Ванны газовые (углекислые)', 15, '350.00', 0),
(5, 'Подводный душ-массаж', 30, '500.00', 0),
(6, 'Душ Виши', 10, '250.00', 0),
(9, 'Душ Виши (15 минут)', 15, '300.00', 0),
(10, 'Душ циркулярный', 10, '250.00', 0),
(11, 'Душ циркулярный (15 минут)', 15, '300.00', 0),
(12, 'Душ Шарко', 10, '300.00', 0),
(13, 'Душ Шарко (15 минут)', 15, '400.00', 0),
(14, 'Душевая панель', 10, '200.00', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `leather`
--

CREATE TABLE `leather` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price1` decimal(10,0) DEFAULT NULL,
  `hide` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `leather`
--

INSERT INTO `leather` (`id`, `name`, `price1`, `hide`) VALUES
(1, 'Лицо', '300', 0),
(2, 'Лицо, шея, декольте', '500', 0),
(3, 'Волос, часть головы', '400', 0),
(4, 'Деинкрустация кожи', '1200', 0),
(5, 'Броссаж кожи', '1000', 0),
(6, 'Ультрафонофорез', '2100', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `lfk`
--

CREATE TABLE `lfk` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` int(11) DEFAULT NULL,
  `price1` decimal(10,2) DEFAULT NULL,
  `hide` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lfk`
--

INSERT INTO `lfk` (`id`, `name`, `time`, `price1`, `hide`) VALUES
(1, 'Групповое занятие лечебной физкультурой при последствиях травм позвоночника', 45, '500.00', 0),
(2, 'Механотерапия при последствиях травм позвоночника', 60, '500.00', 0),
(3, 'Механотерапия на простейших механотерапевтических аппаратах при последствиях травм позвоночника', 60, '500.00', 0),
(4, 'Механотерапия на блоковых механотерапевтических аппаратах  при последствиях травм позвоночника', 60, '500.00', 0),
(5, 'Механотерапия на маятниковых механотерапевтических аппаратах  при последствиях травм позвоночника', 60, '500.00', 0),
(6, 'Механотерапия на механотерапевтических аппаратах с пневмоприводом при последствиях травм позвоночника', 60, '500.00', 0),
(7, 'Механотерапия на механотерапевтических аппаратах с электроприводом при последствиях травм позвоночника', 60, '500.00', 0),
(8, 'Лечебная физкультура с использованием аппаратов и тренажеров при последствиях травм позвоночника', 60, '500.00', 0),
(9, 'Гидрокинезатерапия при последствиях травм позвоночника', 40, '500.00', 0),
(10, 'Индивидуальные занятия лечебной физкультурой при заболевания позвоночника', 30, '600.00', 0),
(11, 'Групповое занятие лечебной физкультурой при заболеваниях позвоночника', 45, '300.00', 0),
(12, 'Механотерапия при заболеваниях позвоночника', 60, '500.00', 0),
(13, 'Механотерапия на простейших механотерапивтических аппаратах при заболеваниях позвоночника', 60, '500.00', 0),
(14, 'Механотерапия на блоковых механотерапевтических аппаратах при заболеваниях позвоночника', 60, '500.00', 0),
(15, 'Механотерапия на маятниковых механотерапевтических аппаратах при заболеваниях позвоночника', 60, '500.00', 0),
(16, 'Механотерапия на механотерапевтических аппаратах с пневмоприводом при заболеваниях позвоночника', 60, '500.00', 0),
(17, 'Механотерапия на механотерапевтических аппаратах с электроприводом при заболеваниях позвоночника', 60, '500.00', 0),
(18, 'Гидрокинезотерапия при заболеваниях позвоночника', 45, '500.00', 0),
(19, 'Индивидуальное занятие лечебной физкультурой при заболеваниях и травмах суставов', 45, '500.00', 0),
(20, 'Групповое занятие лечебной физкультурой при заболеваниях и травмах суставов', 45, '400.00', 0),
(21, 'Механотерапия при заболеваниях и травмах суставов', 45, '400.00', 0),
(22, 'Механотерапия на простейших механотерапевтических аппарата при заболеваниях и травмах суставов', 60, '500.00', 0),
(23, 'Механотерапия на блоковых механотерапевтических аппарата при заболеваниях и травмах суставов', 60, '500.00', 0),
(24, 'Механотерапия на маятниковых механотерапевтических аппаратах при заболеваниях и травмах суставов', 60, '500.00', 0),
(25, 'Механотерапия на механотерапевтических аппаратах с пневмоприводом при заболеваниях и травмах суставов', 60, '500.00', 0),
(26, 'Механотерапия на механотерапевтических аппаратах с гидроприводом при заболеваниях и травмах суставов', 60, '500.00', 0),
(27, 'Механотерапия на механотерапевтических аппаратах с электроприводом при заболеваниях и травмах суставов', 60, '500.00', 0),
(28, 'Лечебная физкультура с использованием аппаратов и тренажеров при заболеваниях и травмах суставов', 60, '500.00', 0),
(29, 'Гидрокинезотерапия при заболеваниях и травмах суставов', 45, '500.00', 0),
(30, 'Индивидуальное занятие лечебной физкультурой при заболеваниях системы органов кроветворения и крови', 45, '500.00', 0),
(32, 'Групповое занятие при заболеваниях системы органов кроветворения и крови', 45, '300.00', 0),
(33, 'Механотерапия при заболеваниях системы органов кроветворения и крови', 60, '500.00', 0),
(34, 'Лечебная физкультура с использованием аппаратов и тренажеров при заболеваниях системы органов кроветворения и крови', 60, '500.00', 0),
(35, 'Индивидуальное занятие лечебной физкультурой при заболеваниях бронхолегочной системы', 30, '500.00', 0),
(36, 'Групповое занятие лечебной физкультурой при заболеваниях  бронхолегочной системы', 45, '300.00', 0),
(37, 'Тренировка с биологической обратной связью по спирографическим показателям при заболеваниях бронхолегочной системы', 60, '1000.00', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `massage`
--

CREATE TABLE `massage` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` int(11) DEFAULT NULL,
  `price1` decimal(10,2) DEFAULT NULL,
  `hide` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `massage`
--

INSERT INTO `massage` (`id`, `name`, `time`, `price1`, `hide`) VALUES
(1, 'Массаж лица / шеи', 10, '400.00', 0),
(2, 'Массаж головы (лобно-височной и затылочно-теменной области)', 10, '400.00', 0),
(3, 'Масссаж воротниковой зоны (задней поверхности шеи, спины до уровня 4 грудного позвонка, передней поверности грудной кклетки до 2 ребра)', 15, '600.00', 0),
(4, 'Массаж верхней конечности', 10, '600.00', 0),
(5, 'Массаж верхней конечности, надплечья и области лопатки ', 20, '600.00', 0),
(6, 'массаж плечевого сустава (верхней 1/3 плеча, области плечевого сустава и надплечья одноименной стороны)', 10, '400.00', 0),
(7, 'Массаж локтевого сустава (верхней трети предплечья, области локтевого сустава и нижней трети плеча)', 10, '400.00', 0),
(8, 'Массаж лучезапястного сустава (проксимального отдела кисти, области лучезапястного сустава и предплечья)', 10, '400.00', 0),
(9, 'Массаж кисти и предплечья', 10, '400.00', 0),
(10, 'Массаж области грудной клетки (области передней поверхности грудной клетки от передних границ надплечья до реберных дуг и области спины от 7 шейного до 1 поясничного позвонка)', 25, '1000.00', 0),
(11, 'Массаж спины (от 7 шейного до 1 поясничного позвонка и от левой до правой средней подмышечной линии, у детей - включая поснично-крестцовую область)', 15, '600.00', 0),
(12, 'Массаж мышц передней брюшной стенки', 10, '400.00', 0),
(13, 'Массаж пояснично-крестцовой области (от 1 поясничного позвонка до нижних ягодичных складок)', 10, '400.00', 0),
(14, 'Массаж шейно-грудного отдела позвоночника (области задней поверхности шеи и области спины до 1 поясничного позвонка от левой до правой задней подмышечной линии)', 20, '800.00', 0),
(15, 'Массаж области позвоночника (области задней поверхности шеи, спины и пояснично-крестцовой области от левой до правой задней подмышечной линии)', 25, '1000.00', 0),
(16, 'Массаж нижней конечности', 15, '600.00', 0),
(17, 'Массаж нижней конечности и поясницы (области стопы, голени, бедра, ягодичной и пояснично-крестцовой области)', 20, '800.00', 0),
(18, 'Массаж тазобедренного сустава и ягодичной области (одноименной стороны)', 10, '400.00', 0),
(19, 'Массаж коленного сустава (верхней трети голени, области коленного сустава и нижней трети бедра)', 10, '400.00', 0),
(20, 'Массаж голеностопного сустава (проксимального отдела стопы, области голеностопного сустава и нижней трети голени)', 10, '400.00', 0),
(21, 'Массаж стопы и голени', 10, '400.00', 0),
(22, 'Общий массаж', 60, '2500.00', 0),
(23, 'Пиллинг-массаж', 30, '1600.00', 0),
(24, 'Вакуумный массаж (баночный)', 30, '1000.00', 0),
(25, 'Механический массаж стоп на аппарате \"Муратака\"', 10, '300.00', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1588570168),
('m200504_052009_create_profiles_table', 1588570172),
('m200505_022448_create_consultations_table', 1588645827),
('m200505_095510_create_procedures_table', 1588680568),
('m200510_035159_create_diagnostics_table', 1589082867),
('m200510_045439_create_physiotherapy_table', 1589086690),
('m200510_052526_create_hydrotherapy_table', 1589088676),
('m200510_061709_create_mud1_table', 1589091621),
('m200510_073944_create_massage_table', 1589096725),
('m200510_080541_create_lfk_table', 1589098107),
('m200512_015145_create_cosmetology_table', 1589248914),
('m200512_015417_create_pilling_table', 1589248914),
('m200512_015827_create_leather_table', 1589248914),
('m200512_023704_add_price2_column_to_pilling_table', 1589251108),
('m200512_042151_create_cosmet4_table', 1589257410),
('m200512_042200_create_cosmet5_table', 1589257411),
('m200512_042210_create_cosmet6_table', 1589257411);

-- --------------------------------------------------------

--
-- Структура таблицы `mud1`
--

CREATE TABLE `mud1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `price1` decimal(10,2) DEFAULT NULL,
  `hide` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mud1`
--

INSERT INTO `mud1` (`id`, `name`, `time`, `number`, `price1`, `hide`) VALUES
(1, 'Грязевые аппликации с Тамбуканской грязью', 40, 1, '300.00', 0),
(2, 'Аппликации с Тамбуканской грязью парных зон (кисти, стопы, колени, плечевые суставы, локтевые суставы, тазобедренные суставы)', 40, 2, '450.00', 0),
(3, 'Аппликации с Тамбуканской грязью воротниковой зоны или поясничного отдела', 40, 4, '750.00', 0),
(4, 'Аппликации с Тамбуканской грязью области брюк', 40, 5, '900.00', 0),
(5, 'Аппликация с Тамбуканской грязью общая (спина, воротниковая зона, руки, ноги)', 40, 6, '1000.00', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `physiotherapy`
--

CREATE TABLE `physiotherapy` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price1` decimal(10,2) DEFAULT NULL,
  `hide` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `physiotherapy`
--

INSERT INTO `physiotherapy` (`id`, `name`, `price1`, `hide`) VALUES
(1, 'Воздействие синусоидальными модулированными токами (СМТ) (амплипульстерапия, 1 зона)', '350.00', 0),
(2, 'Диадинамометерапия, 1 зона', '350.00', 0),
(3, 'Воздействие коротким ультрафиолетовым излучением (КУФ)', '150.00', 0),
(4, 'Электрофорез лекарственных средств', '250.00', 0),
(5, 'Вакуумное воздействие', '250.00', 0),
(6, 'кислородные маски', '200.00', 0),
(7, 'Воздействие электрическим полем УВЧ (э.п. УВЧ)', '220.00', 0),
(8, 'Воздействие магнитными полями', '250.00', 0),
(9, 'Ударно-волновая терапия, 1 зона', '2000.00', 0),
(10, 'Ингаляторное введение лекарственных средств', '250.00', 0),
(11, 'Оксигенотерапия (кислородный коктель)', '50.00', 0),
(12, 'Электрофорез импульсными токами', '400.00', 0),
(13, 'Электросон', '300.00', 0),
(14, 'Спелеовоздействие (\"Галонеб\")', '250.00', 0),
(15, 'Ультрафиолетовое облучение кожи (ДУФ), 1 зона', '200.00', 0),
(16, 'Лазеротерапия, 1 зона', '250.00', 0),
(17, 'Дарсонвализация, 1 зона', '220.00', 0),
(18, 'Прессотерапия конечностей', '1300.00', 0),
(19, 'Ультразвуковая терапия и ультрофорез лекарственных веществ, 1 зона', '300.00', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `pilling`
--

CREATE TABLE `pilling` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price1` decimal(10,0) DEFAULT NULL,
  `hide` int(1) DEFAULT '0',
  `price2` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pilling`
--

INSERT INTO `pilling` (`id`, `name`, `price1`, `hide`, `price2`) VALUES
(1, 'Механический', '600', 0, NULL),
(2, 'Энзимный', '800', 0, NULL),
(3, 'Очищение кожи лица и шеи (демакияж)', '500', 0, NULL),
(4, 'Вапаризация кожи лица', '300', 0, NULL),
(5, 'Очищение кожи лица с помощью ложки Уно', '500', 0, NULL),
(6, 'Удаление милиумов кожи', '100', 0, NULL),
(7, 'Удаление кожного сала', '1000', 0, NULL),
(8, 'Наложение маски на лицо', '700', 0, '3000');

-- --------------------------------------------------------

--
-- Структура таблицы `procedures`
--

CREATE TABLE `procedures` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price1` decimal(10,2) DEFAULT NULL,
  `hide` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `procedures`
--

INSERT INTO `procedures` (`id`, `name`, `price1`, `hide`) VALUES
(1, 'Подкожное введение лекарственных препаратов (без стоимости лекарственных средств)', '130.00', NULL),
(2, 'Внутремышечное введение лекарственных препаратов (без стоимости лекарственных средств)', '130.00', NULL),
(3, 'Внутревенное введение лекарственных препаратов (без стоимости лекарственных средств)', '250.00', NULL),
(4, 'Внутревенное введение лекарственных средств капельно (без стоимости препарата)', '500.00', NULL),
(5, 'Вакцинация (без стоимости вакцины)', '500.00', 0),
(6, 'Наложение повязки при нарушении целостности кожных покровов', '200.00', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `description`, `link`) VALUES
(1, 'Болезни нервной системы', 'Последствия травм головного и спинного мозга, отдаленные последствия перенесенного нарушения мозгового кровообращения, астено-депрессивный синдром, энцефалопатия различного генеза, атеросклероз сосудов головного мозга, невротические расстройства.', NULL),
(2, 'Болезни опорно-двигательного аппарата', 'Артрозы, артриты травматического и воспалительного происхождения, остеохондроз позвоночника, хронические миозиты, бурситы, тендовагиниты. ', NULL),
(3, 'Болезни сердечно-сосудистой системы', 'Гипертоническая болезнь, пороки сердца вне стадии обострения, ишемическая болезнь сердца, стенокардия с недостаточностью кровообращения, кардиосклероз без нарушений ритма и проводимости, атеросклероз, хроническая венозная недостаточность.', NULL),
(4, 'Заболевания органов пищеварения', 'Хронические гастриты и энтероколиты вне стадии обострения, панкреатит, язвенная болезнь желудка и двенадцатиперстной кишки в стадии ремиссии, последствия перенесённых вирусных гепатитов.', NULL),
(5, 'Болезни дыхательной системы', 'Хронические бронхиты, хронические обструктивные бронхиты с астматоидным компонентом, пневмосклероз, пылевой бронхит, бронхиальная астма.', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `cosmet4`
--
ALTER TABLE `cosmet4`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cosmet5`
--
ALTER TABLE `cosmet5`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cosmet6`
--
ALTER TABLE `cosmet6`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cosmetology`
--
ALTER TABLE `cosmetology`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `diagnostics`
--
ALTER TABLE `diagnostics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `hydrotherapy`
--
ALTER TABLE `hydrotherapy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `leather`
--
ALTER TABLE `leather`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lfk`
--
ALTER TABLE `lfk`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `massage`
--
ALTER TABLE `massage`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `mud1`
--
ALTER TABLE `mud1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `physiotherapy`
--
ALTER TABLE `physiotherapy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `pilling`
--
ALTER TABLE `pilling`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `procedures`
--
ALTER TABLE `procedures`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `consultations`
--
ALTER TABLE `consultations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `cosmet4`
--
ALTER TABLE `cosmet4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `cosmet5`
--
ALTER TABLE `cosmet5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `cosmet6`
--
ALTER TABLE `cosmet6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `cosmetology`
--
ALTER TABLE `cosmetology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `diagnostics`
--
ALTER TABLE `diagnostics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `hydrotherapy`
--
ALTER TABLE `hydrotherapy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `leather`
--
ALTER TABLE `leather`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `lfk`
--
ALTER TABLE `lfk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `massage`
--
ALTER TABLE `massage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `mud1`
--
ALTER TABLE `mud1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `physiotherapy`
--
ALTER TABLE `physiotherapy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `pilling`
--
ALTER TABLE `pilling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `procedures`
--
ALTER TABLE `procedures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;