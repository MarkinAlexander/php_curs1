<? include_once "ext".DIRECTORY_SEPARATOR."add_item.php";?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новый товар</title>
    <link rel="stylesheet" href="css/style3.css">
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
        Название товара<br>
        <input type="text" name="title" required><br>
        Краткое описание товара<br>
        <input type="text" name="short" required><br>
        Полное описание товара<br>
        <textarea name="fulltext" cols="30" rows="10" required></textarea><br>
        Цена товара<br>
        <input type="text" name="price" required><br>
        Загрузите фото товара<br>
        <input type="file" name="userfile" required><br>
        <input type="submit" value="Отправить" name="send">
    </form>
    <?=$message;?>
</body>
</html>