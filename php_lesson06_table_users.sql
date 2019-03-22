
-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `password` varchar(45) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `user_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `password`, `role`, `user_name`) VALUES
(1, '12345', 1, 'admin'),
(2, '1234', 0, 'user'),
(3, '1234', 0, 'alex'),
(4, '1234', 0, 'vasya');
