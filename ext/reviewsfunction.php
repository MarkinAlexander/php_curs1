<? 
include_once "mysqlconfig.php";

if (!empty($_POST['text'])){
    
    if(!empty($_POST['username'])){
        $nameofuser = mysqli_real_escape_string($connect,strip_tags($_POST['username']));
    } else{
        $nameofuser = "Анонимно";
    }
        $textarea = mysqli_real_escape_string($connect,strip_tags($_POST['text']));
        $sql = "INSERT INTO reviews SET  author_name='$nameofuser', reviews_text = '$textarea';";
        if (!mysqli_query($connect, $sql)) {        
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
}

$sql = "SELECT * FROM reviews ORDER BY reviews_date DESC ";
$res = mysqli_query($connect,$sql);
if($res->num_rows === 0){
    $result = 'Отзывов нет!';       
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

