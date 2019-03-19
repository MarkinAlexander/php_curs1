<? include_once "ext\calcfunction.php"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Калькулятор №1</title>
</head>
<body>
    <form action="calc.php" method="POST">
            <input type="text"  placeholder="Введите первое число" name="number1"><br>
            
            <select name="operand">
                <option name="+">+</option>
                <option name="-">-</option>
                <option name="*">*</option>
                <option name="/">/</option>
            </select><br>
            <input type="text" placeholder="Введите второе число" name="number2">
            <input type="submit" name="="><br>
            <?=$result; ?>
    </form>    
</body>
</html>