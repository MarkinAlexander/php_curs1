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
            <div class="item">
                <h4>Название товара</h4>
                <div class ="img_text">
                    <a href="#"><img src=""></a>
                    <p class="shortP">Какой-то краткий текс с описание товара и которые можно приобрести</p>
                </div>
                <p class="price">999р</p>
                <div class="buttons">
                    <a class="btn_a" href="#">Подробнее</a>
                    <a class="btn_a" href="#">Купить</a>
                </div>
            </div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
        </div>
    </div>
</body>
</html>