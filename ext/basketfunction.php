<?
include_once "mysqlconfig.php";
if(session_id() == '') {
    session_start();
}
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


function addCart(){
    if (isset($_POST['id'])) {
        if(isset($_POST['action'])){
            if($_POST['action']=='add')
            {
                $goods_id = (int)$_POST['id'];
                $sql = "INSERT INTO carts SET cart_id = $cart_id, goods_id = $goods_id";
                mysqli_query($connect,$sql);
                $sql = "SELECT carts WHERE cart_id = $cart_id";
                $res = mysqli_query($connect,$sql);
                $num_res = $res->num_rows;
                $message .= "<a href=\"cart.php\">В корзине</a> $num_res товар"; //тут бы по хорошему добавить правильные окончания, но я и так не успеваю.
            }                
        }
    }
    return true;
}

function delCart(){
    if (isset($_POST['id'])) {
        if(isset($_POST['action'])){
            if($_POST['action']=='del')
            {
                $goods_id = (int)$_POST['id'];
                $sql = "DELETE FROM carts WHERE cart_id = $cart_id AND goods_id = $goods_id";
                mysqli_query($connect,$sql);
                $sql = "SELECT carts WHERE cart_id = $cart_id";
                $res = mysqli_query($connect,$sql);
                $num_res = $res->num_rows;
                $message .= '<a href="cart.php">В корзине</a>'.$num_res." товар"; //тут бы по хорошему добавить правильные окончания, но я и так не успеваю.
            }                
        }
    }
    return true;
}