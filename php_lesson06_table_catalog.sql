
-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(45) NOT NULL,
  `item_price` int(10) UNSIGNED NOT NULL,
  `item_short_text` text NOT NULL,
  `item_full_text` text NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `item_name`, `item_price`, `item_short_text`, `item_full_text`, `img_name`) VALUES
(1, 'ÐšÐ°ÐºÐ°Ñ-Ñ‚Ð¾ Ð²Ð¸Ð´ÐµÐ¾ÐºÐ°Ñ€Ñ‚Ð°', 4000, 'ÐšÑ€ÑƒÑ‚Ð¾, Ð´Ð¾Ñ€Ð¾Ð³Ð¾ Ð±Ð¾Ð³Ð°Ñ‚Ð¾, Ð´Ð»Ñ Ð³ÐµÐ¹Ð¼ÐµÑ€Ð¾Ð²', 'ÐºÐ°ÐºÐ¾Ðµ Ñ‚Ð¾ Ð´Ð»Ð¸Ð½Ð½Ð¾Ðµ Ð¿Ñ€ÐµÐ´Ð»Ð¸Ð½Ð½Ð¾Ðµ Ð¾Ð¿Ð¸ÑÐ°Ð½Ð¸Ðµ Ð¿Ñ€Ð¾ Ð²Ð¸Ð´ÐµÐ¾ÐºÐ°Ñ€Ñ‚Ñƒ', 'videokarta.jpeg');
