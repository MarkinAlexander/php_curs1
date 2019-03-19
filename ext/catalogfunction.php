<? include_once "mysqlconfig.php";
$sql = "SELECT * FROM catalog";
$res = mysqli_query($connect,$sql);
if($res->num_rows === 0){
    $result = 'Товаров нет!<br><a href="new_item.php">Добавить товар</a>';       
}
else {
    $result = '<div class="item">';
    while($data = mysqli_fetch_assoc($res)){
        $result .= "<h4>".$data['item_name']."</h4>";
        $result.='<div class ="img_text"><a href="image.php?photo='.$data['id'].'"><img src="'.PHOTO_SMALL.$data['img_name'].'"></a>'; 
        $result.= '<p class="shortP">'.$data['item_short_text'].'</p></div>';
        $result.= '<p class="price">'.$data['item_price'].'</p><div class="buttons"><a class="btn_a" href="item.php?id='.$data['id'].'">Подробнее</a><a class="btn_a" href="#">Купить</a></div>';       
    }
    $result .= '</div>';
}