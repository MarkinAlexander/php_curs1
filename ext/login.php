<?
include_once "mysqlconfig.php";
if(session_id() == '') {
    session_start();
}
$message = '';
if (isset($_POST['send'])) {
    $username = mysqli_real_escape_string($connect,strip_tags($_POST['username']));
    $password = mysqli_real_escape_string($connect,strip_tags($_POST['password']));
    $sql = "SELECT * FROM users WHERE user_name='$username' AND password='$password'";
    $res = mysqli_query($connect,$sql);
    //если истинно то значит не верная комбинация логина и пароля
    if($res->num_rows === 0){
        $message = "Не верный логин или пароль.";
    } else {
        setcookie( "username", $username);
        $_SESSION['username'] = $username;
        $data = mysqli_fetch_assoc($res);
        $role = $data['role'];
        $user_id = $data['user_id'];
        $_SESSION['role'] = (int)$role;
        $_SESSION['user_id'] = (int)$user_id;
        header("Location: ../index.php");
    }

}