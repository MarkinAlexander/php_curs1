<?
   include_once 'models/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Работа с файлами</title>
</head>
<body>
  <div>
  <?
      $sql = "select img_name from img WHERE id_img =" .(int)$_GET['photo'];
      $sql2 = "UPDATE img SET like_count = like_count + 1 WHERE id_img =".(int)$_GET['photo'];

      $res = mysqli_query($connect,$sql);
     // mysqli_close($connect);
      mysqli_query($connect,$sql2);
     // mysqli_close($connect);
      $data = mysqli_fetch_assoc($res);
      //echo $data['img_name'];
      ?>

      <img src="<?=PHOTO.$data['img_name'] ?>">
  </div>
</body>
</html>
