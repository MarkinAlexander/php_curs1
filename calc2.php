<? include_once "ext\calcfunction.php"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Калькулятор №2</title>
</head>
<body>
<form action="calc2.php" method="POST">
            <input type="text"  placeholder="Введите первое число" name="number1"><br>
            <input type="text" placeholder="Введите второе число" name="number2"><br>
            <input type="submit" name="submit" value="+">
            <input type="submit" name="submit" value="-">
            <input type="submit" name="submit" value="*">
            <input type="submit" name="submit" value="/"><br>
            <?=$result; ?>
    </form>
</body>
</html>