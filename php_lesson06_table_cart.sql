
-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `date_gen` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_close` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `date_gen`, `is_close`) VALUES
(1, NULL, '2019-03-22 14:20:32', 0),
(2, NULL, '2019-03-22 14:49:16', 0);
