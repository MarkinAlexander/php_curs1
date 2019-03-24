<? include_once "..".DIRECTORY_SEPARATOR."ext".DIRECTORY_SEPARATOR."login.php";?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Войти</title>
</head>
<body>
    <form action="#" method="POST">
        Введите логин:<br>
        <input type="text" name="username" required><br>
        Введите пароль:<br>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Авторизироваться" name="send">
    </form>
    <?=$message;?>
</body>
</html>