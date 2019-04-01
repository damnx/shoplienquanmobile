-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 01 2019 г., 05:04
-- Версия сервера: 5.5.48
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `beo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` int(11) DEFAULT NULL,
  `sex` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `http_user_agent` text COLLATE utf8_unicode_ci,
  `salt` text COLLATE utf8_unicode_ci NOT NULL,
  `last_login` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `updates` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `permission` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_admin` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `full_name`, `birthday`, `sex`, `status`, `http_user_agent`, `salt`, `last_login`, `created`, `updates`, `deleted`, `permission`, `is_admin`) VALUES
(1, 'nguyendam', '123456', 'nguyễn đạm', 1498669200, 1, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36', '', 1507079679, 1498720474, 1553845577, NULL, 'POST_NICK', 0),
(8, 'mrdam.code', 'c87cec09d6a2a2f2a30e77e7081b3583', 'Nguyễn Đạm', 1507050000, 1, 1, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 'ia17Z5GM6240WlBuNmcF', 1553847502, 1507079860, 1553845865, NULL, 'POST_NEW', 1),
(9, 'administrator', '8cdd519fea126ece1cd6ccff84d86d14', 'Administrator', 447094800, 1, 0, NULL, 'NSAi5tzH4mP1XaUKWY7u', NULL, 1533018168, 1553845379, NULL, NULL, 1),
(10, 'tesstqacc', '8fe4de52b2e2dbc311ce8001a93c7499', '123', 1553792400, 1, 1, NULL, 'Revp0JDzAgfUrW7ML81u', NULL, 1553847484, NULL, NULL, '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `attribute`
--

CREATE TABLE IF NOT EXISTS `attribute` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `alias` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `attribute`
--

INSERT INTO `attribute` (`id`, `name`, `alias`) VALUES
(16, 'Ranh', 'ranh');

-- --------------------------------------------------------

--
-- Структура таблицы `card_loaded`
--

CREATE TABLE IF NOT EXISTS `card_loaded` (
  `id` int(11) NOT NULL,
  `id_use` int(11) NOT NULL,
  `code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `seri` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `type` text COLLATE utf8_unicode_ci NOT NULL,
  `before` int(11) NOT NULL,
  `after` int(11) NOT NULL,
  `denominations` int(11) NOT NULL,
  `published` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `card_loaded`
--

INSERT INTO `card_loaded` (`id`, `id_use`, `code`, `seri`, `type`, `before`, `after`, `denominations`, `published`, `status`, `message`) VALUES
(2, 1, '1233456', '123456', '', 20000, 40000, 20000, 1506963600, 1, NULL),
(3, 11, '3213213', '2321321321', 'VTT2', 0, 0, 20000, 1554081688, 1, 'Có lỗi trả về của hệ thống bên nạp thẻ'),
(4, 11, '3213213', '2321321321', 'VTT2', 0, 0, 20000, 1554081774, 1, 'Seri thẻ không đúng!'),
(5, 11, '517210282433088', '10002094100124', 'VTT2', 0, 0, 10000, 1554081941, 0, 'Gửi thẻ thành công lên hệ thống'),
(6, 11, '432132', '3213213213', 'VTT2', 0, 0, 10000, 1554082931, 1, 'Seri thẻ không đúng!'),
(7, 11, '3123213', '23213213', 'VMS2', 0, 0, 10000, 1554083125, 1, 'Seri thẻ không đúng!');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `show_index` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `alias` text COLLATE utf8_unicode_ci NOT NULL,
  `thumb` text COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `left_ct` int(11) NOT NULL,
  `right_ct` int(11) NOT NULL,
  `created` int(11) DEFAULT NULL,
  `updates` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=98 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `description`, `status`, `show_index`, `order`, `alias`, `thumb`, `level`, `left_ct`, `right_ct`, `created`, `updates`, `deleted`) VALUES
(97, 0, 'Nick Liên Quân Mobile Ramdom Vip', 'Nick Liên Quân Mobile Ramdom Vip', 1, 0, 2, 'nick-lien-quan-mobile-ramdom-vip', '', 1, 2, 3, 1553572708, NULL, NULL),
(96, 0, 'Nick Liên Quân Mobile', 'Nick Liên Quân Mobile', 1, 0, 1, 'nick-lien-quan-mobile', '', 1, 4, 5, 1553572671, 1553572685, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `detail_attribute`
--

CREATE TABLE IF NOT EXISTS `detail_attribute` (
  `id` int(11) NOT NULL,
  `id_attribute` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `alias` text COLLATE utf8_unicode_ci NOT NULL,
  `color` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `detail_attribute`
--

INSERT INTO `detail_attribute` (`id`, `id_attribute`, `name`, `alias`, `color`) VALUES
(58, 16, 'Đồng', 'dong', ''),
(59, 16, 'Vàng ', 'vang', ''),
(60, 16, 'Bạc', 'bac', ''),
(61, 16, 'Kim Cương', 'kim-cuong', '');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `alias` text COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `wednesday` int(11) NOT NULL,
  `type` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `product_posts` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `mid`, `id_category`, `name`, `alias`, `parent_id`, `link`, `status`, `wednesday`, `type`, `product_posts`) VALUES
(121, 1, 0, 'Trang chủ', 'trang-chu', 0, '/', 1, 1, 'link', 'product'),
(122, 1, 96, 'Nick Liên Quân Mobile', 'nick-lien-quan-mobile', 0, '', 1, 2, 'category', 'product'),
(123, 1, 97, 'Nick Liên Quân Mobile Ramdom Vip', 'nick-lien-quan-mobile-ramdom-vip', 0, '', 1, 3, 'category', 'product'),
(124, 1, 0, 'Hướng dẫn mua nick', 'huong-dan-mua-nick', 0, '', 1, 3, 'link', 'product'),
(125, 1, 0, 'Điều khoản', 'dieu-khoan', 0, '', 1, 4, 'link', 'product'),
(126, 1, 0, 'Nạp thẻ', 'nap-the', 0, '/nap-the.html', 1, 5, 'link', 'product');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_item`
--

CREATE TABLE IF NOT EXISTS `menu_item` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `menu_item`
--

INSERT INTO `menu_item` (`id`, `name`, `position`) VALUES
(1, 'Top', 'Top'),
(2, 'Products', 'Products'),
(3, 'Footer', 'Footer');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `use_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_sp` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `published` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `use_name`, `id_sp`, `status`, `quantity`, `price`, `published`) VALUES
(29, '11', 52, 1, 1, 0, 1553764476),
(28, '11', 52, 1, 1, 0, 1553764433),
(27, '11', 52, 1, 1, 0, 1553764368),
(26, '11', 52, 1, 1, 0, 1553764297),
(25, '11', 52, 1, 1, 0, 1553764199),
(24, '11', 52, 1, 1, 0, 1553764182),
(23, '11', 52, 1, 1, 0, 1553764099),
(22, '11', 52, 1, 1, 0, 1553763972),
(21, '11', 52, 1, 1, 0, 1553763868),
(20, '11', 52, 1, 1, 0, 1553763824),
(19, '11', 52, 1, 1, 0, 1553763638),
(18, '11', 52, 1, 1, 0, 1553763566),
(17, '11', 52, 1, 1, 0, 1553763409),
(16, '11', 52, 1, 1, 0, 1553762747),
(30, '11', 52, 1, 1, 0, 1553764512),
(31, '11', 52, 1, 1, 500000, 1553764720),
(32, '11', 52, 1, 1, 500000, 1553764790);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` text COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `type` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `views` int(11) NOT NULL,
  `feature` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `id_use` int(11) NOT NULL,
  `thumb` text COLLATE utf8_unicode_ci NOT NULL,
  `published` int(11) NOT NULL,
  `created` int(11) DEFAULT NULL,
  `updates` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `meta_title`, `alias`, `status`, `type`, `views`, `feature`, `description`, `meta_description`, `content`, `id_use`, `thumb`, `published`, `created`, `updates`, `deleted`) VALUES
(1, 'huong dan mua nick Lien Quan Mobile', 'huong dan mua nick Lien Quan Mobile', 'huong-dan-mua-nick-lien-quan-mobile', 1, 'news', 0, 0, '312323123', '312323123', '<p>huong dan mua nick Lien quan mobile</p>\r\n\r\n<p><img alt="" src="/statics/upload/g10.jpg" style="height:359px; width:650px" /></p>\r\n', 8, '/statics/upload/g10.jpg', 1553792400, 1553842528, 1553844312, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `id_use` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `alias` text COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `thumb` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `fake_price` int(11) DEFAULT NULL,
  `quantity` text COLLATE utf8_unicode_ci,
  `link_dowload` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `describe` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `practical_photo` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `feature` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `published` int(11) NOT NULL,
  `rank` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vang` int(11) DEFAULT NULL,
  `tuong` int(11) DEFAULT NULL,
  `ngoc` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trang_phuc` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `updates` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `id_use`, `name`, `alias`, `type`, `thumb`, `price`, `fake_price`, `quantity`, `link_dowload`, `password`, `describe`, `content`, `practical_photo`, `status`, `feature`, `rating`, `published`, `rank`, `vang`, `tuong`, `ngoc`, `trang_phuc`, `created`, `updates`, `deleted`) VALUES
(52, 8, 'Nick #21321', 'nick-21321', 'game', '/statics/upload/g4.jpg', 500000, 0, '0', '3213213', '3213213', '<p>3213</p>\r\n\r\n<p>13</p>\r\n\r\n<p>213</p>\r\n', '<p>123</p>\r\n\r\n<p>131</p>\r\n\r\n<p>23</p>\r\n', '312323\r\n12312\r\n3', 1, 1, 1, 1553533200, 'vang-i', 0, 0, '90', '150', 1553585595, 1553764094, NULL),
(53, 8, 'Nick #987', 'nick-987', 'game', '/statics/upload/g4.jpg', 3123, 3123213, '1', '', '', '<p>3123</p>\r\n', '<p>3123</p>\r\n', '', 1, 1, 4, 0, 'dong-ii', 133, 1312, '123', '1600', 1553586125, 1553763529, NULL),
(54, 8, 'Acc Random #12', 'acc-random-12', 'game', '/statics/upload/g4.jpg', 9000, 0, '1', '', '', '<p>5% nick vip trắng</p>\r\n\r\n<p>15% ác trắng cùi</p>\r\n\r\n<p>80% ác vip có thông tin</p>\r\n', '<ul>\r\n	<li><img alt="" src="/statics/upload/g4.jpg" style="float:left; height:357px; width:650px" /></li>\r\n	<li><img alt="" src="/statics/upload/g4.jpg" style="float:left; height:357px; width:650px" /></li>\r\n</ul>\r\n', '/statics/upload/g4.jpg|/statics/upload/g4.jpg|/statics/upload/g4.jpg', 1, 0, 2, 1553619600, 'dong-i', 12, 12, '12', '21', 1553657987, 1553744918, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `product_detail_attribute`
--

CREATE TABLE IF NOT EXISTS `product_detail_attribute` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_da` int(11) NOT NULL,
  `id_att` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=127 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `product_detail_attribute`
--

INSERT INTO `product_detail_attribute` (`id`, `id_product`, `id_da`, `id_att`) VALUES
(85, 8, 32, 12),
(84, 8, 30, 11),
(83, 8, 29, 11),
(82, 7, 35, 12),
(81, 7, 34, 12),
(80, 7, 33, 12),
(79, 7, 32, 12),
(77, 7, 29, 11),
(86, 8, 33, 12),
(87, 8, 34, 12),
(88, 8, 35, 12),
(89, 8, 37, 12),
(90, 8, 36, 12),
(91, 9, 26, 10),
(92, 9, 27, 10),
(93, 9, 28, 10),
(94, 10, 26, 10),
(95, 10, 27, 10),
(96, 10, 28, 10),
(97, 11, 26, 10),
(98, 11, 27, 10),
(99, 12, 26, 10),
(100, 12, 27, 10),
(101, 12, 28, 10),
(102, 13, 29, 11),
(103, 13, 30, 11),
(104, 13, 31, 11),
(105, 13, 37, 12),
(106, 13, 36, 12),
(107, 13, 32, 12),
(108, 13, 33, 12),
(109, 13, 34, 12),
(110, 13, 35, 12),
(111, 14, 26, 10),
(112, 20, 44, 14),
(113, 21, 44, 14),
(114, 22, 44, 14),
(115, 23, 44, 14),
(116, 24, 44, 14),
(117, 8, 44, 14),
(118, 8, 52, 14),
(119, 8, 56, 14),
(120, 8, 57, 14),
(121, 8, 53, 14),
(122, 8, 45, 14),
(123, 8, 48, 15),
(124, 8, 47, 15);

-- --------------------------------------------------------

--
-- Структура таблицы `relationships`
--

CREATE TABLE IF NOT EXISTS `relationships` (
  `id` int(11) NOT NULL,
  `candidate_table` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `candidate_key` int(11) NOT NULL,
  `foreign_table` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `foreign_key` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `relationships`
--

INSERT INTO `relationships` (`id`, `candidate_table`, `candidate_key`, `foreign_table`, `foreign_key`) VALUES
(28, 'product', 54, 'category', 96),
(29, 'product', 54, 'category', 97),
(30, 'product', 53, 'category', 96),
(31, 'product', 52, 'category', 96);

-- --------------------------------------------------------

--
-- Структура таблицы `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `thumb` text COLLATE utf8_unicode_ci NOT NULL,
  `eamil` text COLLATE utf8_unicode_ci NOT NULL,
  `phome` text COLLATE utf8_unicode_ci NOT NULL,
  `link_facebook` text COLLATE utf8_unicode_ci NOT NULL,
  `link_google` text COLLATE utf8_unicode_ci NOT NULL,
  `link_youtobe` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `setting`
--

INSERT INTO `setting` (`id`, `title`, `type`, `description`, `thumb`, `eamil`, `phome`, `link_facebook`, `link_google`, `link_youtobe`, `address`) VALUES
(1, 'Shop lien quan mobi', 'gamebank', 'Shop lien quan mobi', 'http://thst.vn/UserFiles/Image/thongtinquangcao.jpg', 'Shoplienquan mobi@gmail.com', '234234343', '/', '/', '/', 'accccc');

-- --------------------------------------------------------

--
-- Структура таблицы `slideshow`
--

CREATE TABLE IF NOT EXISTS `slideshow` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `thumb` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `wednesday` int(11) NOT NULL,
  `created` int(11) DEFAULT NULL,
  `updates` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `slideshow`
--

INSERT INTO `slideshow` (`id`, `title`, `content`, `thumb`, `link`, `status`, `wednesday`, `created`, `updates`, `deleted`) VALUES
(15, 'slideshow', 'nội dung', 'http://i8.cdn8.net/-km1k1fYvNus/WdydNox6ibI/AAAAAAACAYU/aMwyH16QDCcgdLZ7QzTpnpPc2Zs7V6eHgCHMYCw/s0/cdn8.net-1507630389-pexels-photo-48726.jpeg?w=940&h=650&auto=compress&cs=tinysrgb', '/', 1, 1, 1500567459, 1510144585, 1510144585),
(16, 'Tây Bắc đẹp nao lòng', '...', 'https://drive.google.com/uc?export=view&id=1GHBCTH7aZ_4Y-oIXNEIZLiF0mW-JAkcJ', '/', 1, 2, 1500567479, 1547542097, NULL),
(17, 'Tây Bắc đẹp nao lòng', '...', 'https://drive.google.com/uc?export=view&id=1iyEBGZnzPBrhLgMrZ4qbrQCnYmocrbMr', '', 1, 1, 1509549552, 1547542092, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `name`, `alias`) VALUES
(36, 'lập trình php', 'lap-trinh-php'),
(7, 'asp.net', 'aspnet'),
(6, 'C#', 'c'),
(11, 'bài viết', 'bai-viet'),
(35, 'Lập trình hướng đối tượng', 'lap-trinh-huong-doi-tuong'),
(33, 'facebook API', 'facebook-api'),
(28, 'HTML', 'html'),
(23, 'game LMHT', 'game-lmht'),
(25, 'Liên minh huyền Thoại', 'lien-minh-huyen-thoai'),
(32, 'winform', 'winform'),
(29, 'CSS', 'css'),
(30, 'PHP', 'php'),
(31, 'MYSQL', 'mysql'),
(38, 'Thể Thao Điện Tử', 'the-thao-dien-tu'),
(39, 'Thời Sự', 'thoi-su'),
(40, 'Mỹ Phẩm', 'my-pham'),
(41, 'Sách', 'sach'),
(42, 'Làm Đẹp', 'lam-dep'),
(43, 'Showbiz', 'showbiz'),
(44, 'Bói Vui Thơ Ca', 'boi-vui-tho-ca'),
(45, 'Công Nghệ', 'cong-nghe'),
(46, 'PHP Căn Bản', 'php-can-ban'),
(47, 'HTML CSS Template', 'html-css-template'),
(48, 'Độc Và Lạ', 'doc-va-la'),
(49, 'Đời Sống', 'doi-song'),
(50, 'facebook', 'facebook'),
(51, 'Chim Bồ Câu', 'chim-bo-cau'),
(52, 'Gà', 'ga'),
(53, 'Gà Hồ', 'ga-ho'),
(54, 'Gà Đông Tảo', 'ga-dong-tao'),
(55, 'Dúi Rừng', 'dui-rung'),
(59, 'oke''1234', 'oke1234');

-- --------------------------------------------------------

--
-- Структура таблицы `use`
--

CREATE TABLE IF NOT EXISTS `use` (
  `id` int(11) NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `salt` text COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `money` text COLLATE utf8_unicode_ci NOT NULL,
  `birthday` int(11) NOT NULL,
  `sex` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `type` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `phome` text COLLATE utf8_unicode_ci NOT NULL,
  `http_user_agent` text COLLATE utf8_unicode_ci NOT NULL,
  `last_login` int(11) NOT NULL,
  `created` int(11) DEFAULT NULL,
  `updates` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `permission` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `use`
--

INSERT INTO `use` (`id`, `email`, `salt`, `username`, `password`, `full_name`, `money`, `birthday`, `sex`, `status`, `type`, `phome`, `http_user_agent`, `last_login`, `created`, `updates`, `deleted`, `permission`) VALUES
(8, 'muaxuan.290391@gmail.com', 'Mrl6yOBiGvC2Z8X', 'mrdam.code', '2790a6e50f43a91a84d4b728cbd6f34d', 'nguyễn đạm', '1590000', -806400, 0, 1, 'Register', '0123456780', 'Mozilla/5.0 (Linux; Android 5.0.2; D6683 Build/23.1.2.E.0.13; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.98 Mobile Safari/537.36 [FB_IAB/MESSENGER;FBAV/139.0.0.17.85;]', 1509857790, 1508485153, 1509857343, NULL, NULL),
(9, 'nguyendam@gmail.com', 'EHpDo6vZdbWq2rU', 'mrdam.test', 'a1a197a010d5f9de2d23e99854f3a526', 'nguyễn tèo', '', 0, 0, 1, 'register', '0987500120', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1553747071, 1509001957, 1509853829, NULL, NULL),
(10, 'accc@gmail.com', 'QwLAzMVx8dm3IsDFvp6N', 'admindam', '5d1d9666394f9523d7c8ffec3d6f471f', 'adcc', '', 0, 0, 1, 'register', '0987500120', '', 1513478149, 1513478149, NULL, NULL, NULL),
(11, 'damnx@gmail.com', '8EyjhXU4M12Izov', 'tungdaike.gmail.com', '4014c6fd0b57ea17909a1710b92cb15f', 'tung dai ka', '0', 0, 0, 1, 'register', '0987500120', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1554081598, 1553747494, 1553748444, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `card_loaded`
--
ALTER TABLE `card_loaded`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_CARD_USER` (`id_use`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_CATA_PAID` (`parent_id`),
  ADD KEY `IDX_CATA_STATUS` (`status`),
  ADD KEY `IDX_CATA_ORDER` (`show_index`,`order`);

--
-- Индексы таблицы `detail_attribute`
--
ALTER TABLE `detail_attribute`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_MENU_MID` (`mid`),
  ADD KEY `IDX_MENU_IDCATA` (`id_category`),
  ADD KEY `IDX_MENU_PARID` (`parent_id`),
  ADD KEY `IDX_MENU_STATUS` (`status`),
  ADD KEY `IDX_MENU_TYPE` (`type`);

--
-- Индексы таблицы `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_ORDER_USER` (`use_name`),
  ADD KEY `IDX_ORDER_SP` (`id_sp`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_POST_TYPE` (`type`),
  ADD KEY `IDX_POST_FEDTURE` (`feature`),
  ADD KEY `IDX_POST_VIEWS` (`views`,`title`),
  ADD KEY `IDX_POST_STATUS` (`status`),
  ADD KEY `IDX_POST_iduser` (`id_use`,`title`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_PRODUC_TYPE` (`type`,`id_use`),
  ADD KEY `IDX_PRODUC_FEA` (`feature`),
  ADD KEY `IDX_PRODUC_STATUS` (`status`) USING BTREE;

--
-- Индексы таблицы `product_detail_attribute`
--
ALTER TABLE `product_detail_attribute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DETAIL_PROID` (`id_product`),
  ADD KEY `IDX_DETAIL_IDDA` (`id_da`),
  ADD KEY `IDX_DETAIL_ATTID` (`id_att`);

--
-- Индексы таблицы `relationships`
--
ALTER TABLE `relationships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_RELATE_FORKEY` (`foreign_key`,`foreign_table`),
  ADD KEY `IDX_RELATE_CANDI` (`candidate_table`,`candidate_key`);

--
-- Индексы таблицы `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `use`
--
ALTER TABLE `use`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `attribute`
--
ALTER TABLE `attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `card_loaded`
--
ALTER TABLE `card_loaded`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT для таблицы `detail_attribute`
--
ALTER TABLE `detail_attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT для таблицы `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT для таблицы `product_detail_attribute`
--
ALTER TABLE `product_detail_attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT для таблицы `relationships`
--
ALTER TABLE `relationships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT для таблицы `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT для таблицы `use`
--
ALTER TABLE `use`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
