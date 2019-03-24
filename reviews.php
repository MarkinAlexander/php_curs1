<? include_once "ext".DIRECTORY_SEPARATOR."reviewsfunction.php";?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\style.css">
    <title>Отзывы о магазине</title>
</head>
<body>
    <div class="wrapper">
        <form action="#" method="POST">
            Введите имя:<br>
            <input type="text" name="username"><br>
            Текст отзыва:<br>
            <textarea name="text" cols="30" rows="10"></textarea><br>
            <input type="submit" value="Отправить">
        </form>
        <?=$result ?>
    </div>
</body>
</html>