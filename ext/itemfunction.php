<? include_once "mysqlconfig.php";
if(session_id() == '') {
    session_start();
}
    $sql = "select * from catalog WHERE id =" .(int)$_GET['id'];
    $res = mysqli_query($connect,$sql);
    $data = mysqli_fetch_assoc($res);
    $item_name = $data['item_name'];
    $item_text = $data['item_full_text'];
    $id = $data['id'];
    $img_name = $data['img_name'];
    $price = $data['item_price'];
