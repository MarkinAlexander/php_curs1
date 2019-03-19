<? include_once "mysqlconfig.php";
$sql = "SELECT * FROM catalog";
$res = mysqli_query($connect,$sql);
if($res->num_rows === 0){
    $result = 'Товаров нет!<br><a href="new_item.php">Добавить товар</a>';       
}
else {
    $result = '<div class="comments">';
    while($data = mysqli_fetch_assoc($res)){
        $result.='<div class="comment"><p class ="username">Имя: <b>'.$data['author_name'].'</b></p>'; 
        $result.= '<p class ="date">Дата: <i>'.$data['reviews_date'].'</i></p>';
        $result.= '<p class ="text">Отзыв: '.$data['reviews_text'].'</p></div>';       
    }
    $result .= '</div>';
}