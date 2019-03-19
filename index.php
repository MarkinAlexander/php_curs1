<? include_once "ext".DIRECTORY_SEPARATOR."catalogfunction.php";?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style2.css">
    <title>Каталог товаров</title>
</head>
<body>
    <div class="wrapper">        
        <h2>Каталог товаров</h2>
        <div class="items">
            <?=$result;?>
        </div>
    </div>
</body>
</html>