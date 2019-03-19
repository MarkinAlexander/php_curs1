<? include_once "ext".DIRECTORY_SEPARATOR."mysqlconfig.php";?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Просмотр фото</title>
</head>
<body>
  <div>
  <?
      $sql = "select img_name from catalog WHERE id =" .(int)$_GET['photo'];
      $res = mysqli_query($connect,$sql);
      $data = mysqli_fetch_assoc($res);
   ?>

      <img src="<?=PHOTO.$data['img_name'] ?>">
  </div>
</body>
</html>