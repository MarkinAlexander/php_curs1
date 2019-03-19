<?
include_once "mysqlconfig.php";
$message = '';
function translit($string) {
    $translit = array(
      'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
      'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
      'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
      'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ы' => 'y', 'ъ' => '', 'ь' => '', 'э' => 'eh', 'ю' => 'yu', 'я'=>'ya');

    return str_replace(' ', '_', strtr(mb_strtolower(trim($string)), $translit));
 }

 function changeImage($h, $w, $src, $newsrc, $type) {
  $newimg = imagecreatetruecolor($h, $w);
  switch ($type) {
    case 'jpeg':
      $img = imagecreatefromjpeg($src);
      imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
      imagejpeg($newimg, $newsrc);
      break;
    case 'png':
      $img = imagecreatefrompng($src);
      imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
      imagepng($newimg, $newsrc);
      break;
    case 'gif':
      $img = imagecreatefromgif($src);
      imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
      imagegif($newimg, $newsrc);
      break;
  }
 }

if (isset($_POST['send'])) {
  if ($_FILES['userfile']['error']) {
    $message = 'Ошибка загрузки файла!';
  } elseif ($_FILES['userfile']['size'] > 1000000) {
    $message = 'Файл слишком большой';
  } elseif (
      $_FILES['userfile']['type'] == 'image/jpeg'||
      $_FILES['userfile']['type'] == 'image/png' ||
      $_FILES['userfile']['type'] == 'image/gif'
    ) {
        $translitName = translit($_FILES['userfile']['name']);
        if (copy($_FILES['userfile']['tmp_name'], PHOTO.$translitName)) {
          $path = PHOTO_SMALL.$translitName;
          $type = explode('/', $_FILES['userfile']['type'])[1];
          changeImage(100, 100, $_FILES['userfile']['tmp_name'], $path, $type);
          $title = mysqli_real_escape_string($connect,strip_tags($_POST['title']));
          $short = mysqli_real_escape_string($connect,strip_tags($_POST['short']));
          $fulltext = mysqli_real_escape_string($connect,strip_tags($_POST['fulltext']));
          $price = mysqli_real_escape_string($connect,strip_tags($_POST['price']));
          $sql = "INSERT INTO catalog (img_name, item_name, item_price, item_short_text, item_full_text) VALUES(\"".$translitName."\", \"".$title."\", \"".$price."\", \"".$short."\", \"".$fulltext."\")";
            if (mysqli_query($connect, $sql)) {
                $message = "Товар добавлен!";
            } else {
                $message = "Error: " . $sql . "<br>" . mysqli_error($connect);
            }

            
        }
        else {$message = 'Ошибка загрузки файла!';}
    }
    else {
      $message = 'Не правильный тип файла!';
  }
}
