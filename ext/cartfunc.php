<?
include_once "mysqlconfig.php";
if(session_id() == '') {
    session_start();
}

if (isset($_POST['id'])) {
    if(isset($_POST['action'])){
        if($_POST['action']=='del')
        {
            $goods_id = (int)$_POST['id'];
            $sql = "DELETE FROM carts WHERE cart_id = $cart_id AND goods_id = $goods_id";
            mysqli_query($connect,$sql);
        }
    }
}
$result = '';
$username = null;
$cart_id = null;
$user_id = null;
$message = '';
$num_res = 0;
//раз мы запускаем этот файл то хотим использовать корзину и надо проверить есть ли она в куках и сессии иначе создать или загрузить
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
if(isset($_SESSION['cart_id'])){
    $cart_id = $_SESSION['cart_id'];
    if(isset($_SESSION['user_id']))
    {
        $user_id = (int)$_SESSION['user_id'];
    }
}
else {
    //читаем куки вдруг там есть карт айди
    if(isset($_COOKIE['cart_id'])){
        //если есть то присваиваем его в переменную и присваиваем кукам
        $cart_id = (int)$_COOKIE['cart_id'];
        $_SESSION['cart_id'] = $cart_id;
    } else {
        if($user_id != null)
            $sql = "INSERT INTO cart SET user_id=$user_id";
        else
            $sql = "INSERT INTO cart SET user_id = NULL";
        mysqli_query($connect,$sql);
        $cart_id = mysqli_insert_id($connect);
        $_SESSION['cart_id'] = $cart_id;
        //$message .= "Создана корзина с id = $cart_id";
        setcookie('cart_id', "$cart_id");
    }
}

if (isset($_POST['id'])) {
    if(isset($_POST['action'])){
        if($_POST['action']=='del')
        {
            $goods_id = (int)$_POST['id'];
            $sql = "DELETE FROM carts WHERE cart_id = $cart_id AND goods_id = $goods_id";
            mysqli_query($connect,$sql);
            $sql = "SELECT carts WHERE cart_id = $cart_id";
            $res = mysqli_query($connect,$sql);
        }                
    }
}

$sql = "SELECT * FROM carts JOIN catalog ON carts.goods_id = catalog.id WHERE cart_id = $cart_id";
$res = mysqli_query($connect,$sql);


while($data = mysqli_fetch_assoc($res)){
    $result .= '<div class="cartitem">';
    $result .= "<span>".$data['item_name']."<span>";
    $result.='<div class ="img_text"><a href="image.php?photo='.$data['id'].'"><img src="'.PHOTO_SMALL.$data['img_name'].'"></a>';
    $result.= '<p class="price">Цена: '.$data['item_price'].' тугриков</p><div class="buttons"><a class="btn_a btn_del" href="#" id="'.$data['id'].'">Удалить</a></div>';
    $result .= '</div>';       
}
