<? include_once "..".DIRECTORY_SEPARATOR."ext".DIRECTORY_SEPARATOR."basketfunction.php";
if (isset($_POST['id'])) {
    if(isset($_POST['action'])){
        if($_POST['action']=='add')
        {
            $goods_id = (int)$_POST['id'];
            $sql = "INSERT INTO carts SET cart_id = $cart_id, goods_id = $goods_id";
            mysqli_query($connect,$sql);
            $sql = "SELECT COUNT(*) as count FROM carts WHERE cart_id = $cart_id";
            $res = mysqli_query($connect,$sql);
            $data = mysqli_fetch_assoc($res);
            $num_res = $data['count'];
            $message .= "В корзине $num_res товар"; //тут бы по хорошему добавить правильные окончания, но я и так не успеваю.
        }                
    }
}
    echo $message;
