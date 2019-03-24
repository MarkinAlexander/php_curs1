<? include_once "..".DIRECTORY_SEPARATOR."ext".DIRECTORY_SEPARATOR."regfunction.php";?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
    <form action="#" method="POST">
        Ваше имя:<br>
        <input type="text" name="username" required><br>
        Ваш пароль:<br>
        <input type="password" name="password1" required><br>
        Повторите пароль:<br>
        <input type="password" name="password2" required><br><br>
        <input type="submit" value="Зарегистрироваться" name="send"><input type="reset" value="Сбросить">
    </form>
    <?=$message;?>
</body>
</html>