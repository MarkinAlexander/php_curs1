<? include_once "..".DIRECTORY_SEPARATOR."ext".DIRECTORY_SEPARATOR."basketfunction.php";
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
            $message .= "В корзине $num_res товар"; //тут бы по хорошему добавить правильные окончания, но я и так не успеваю.
        }                
    }
}
    echo $message;
