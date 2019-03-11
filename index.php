<? 
	$dir = 'files';
	$path = $dir . DIRECTORY_SEPARATOR . 'img';
	$img_arr = [];
	
	foreach(scandir($path) as $key => $img) {
		if (!in_array($img, [".", ".."])) {
			$img_arr[] = $img;
		}
	}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Галлерея</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <div class="gallery">
<?
    foreach($img_arr as $key => $img) {
?>
        <a href="<? echo $path . DIRECTORY_SEPARATOR . $img;?>" class="img_link" target="_blank">
            <img src="<? echo $path . DIRECTORY_SEPARATOR . $img;?>" class="image" alt=""/>
		</a>
<?
    }
?>
    </div>
</body>
</html>
