<? include_once "ext".DIRECTORY_SEPARATOR."itemfunction.php";?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style2.css">
    <title><?=$item_name;?></title>
</head>
<body>
    <div class="wrapper">
    <h2><?=$item_name;?></h2>
    <div>
    <div class ="img_text">
        <a href="image.php?photo=<?=$id?>"><img src="<?=PHOTO_SMALL.$img_name;?>"></a>
        <p class="shortP"><?=$item_text;?></p>
    </div>
    <span>Всего: <?=$price;?> тугриков</span>
    <a class="btn_a" href="#">Купить</a>
    </div>
</body>
</html> 