<? include_once "mysqlconfig.php";
session_start(); 
$sql = "SELECT * FROM catalog";
$res = mysqli_query($connect,$sql);
if($res->num_rows === 0){
    $result = 'Товаров нет!<br><a href="new_item.php">Добавить товар</a>';       
}
else {
    $result = '';
    while($data = mysqli_fetch_assoc($res)){
        $result .= '<div class="item">';
        $result .= "<h4>".$data['item_name']."</h4>";
        $result.='<div class ="img_text"><a href="image.php?photo='.$data['id'].'"><img src="'.PHOTO_SMALL.$data['img_name'].'"></a>'; 
        $result.= '<p class="shortP">'.$data['item_short_text'].'</p></div>';
        $result.= '<p class="price">Цена: '.$data['item_price'].' тугриков</p><div class="buttons"><a class="btn_a" href="item.php?id='.$data['id'].'">Подробнее</a><a class="btn_a btn_buy" href="#" id="'.$data['id'].'">В корзину</a></div>';
        $result .= '</div>';       
    }
    
}