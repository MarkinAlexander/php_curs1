<?
include_once "mysqlconfig.php";
if(session_id() == '') {
    session_start();
}
$message = '';
if (isset($_POST['send'])) {
    $username = mysqli_real_escape_string($connect,strip_tags($_POST['username']));
    $sql = "SELECT * FROM users WHERE user_name='$username'";
    $res = mysqli_query($connect,$sql);
    if($res->num_rows === 0){
        //setcookie​(​'regname', $username);
        //пользователя с таким именем нет и можем регистрировать
        $password = mysqli_real_escape_string($connect,strip_tags($_POST['password1']));
        $password2 = mysqli_real_escape_string($connect,strip_tags($_POST['password2']));
        if($password == $password2){ //проверяем что пароли одинаковые и если да регистрируем пользователя
            $sql = "INSERT INTO users SET user_name='$username', password='$password'";
            if (!mysqli_query($connect, $sql)) {
                $message = "Error: " . $sql . "<br>" . mysqli_error($connect);
            } else {
                setcookie( "username", $username);
                //setcookie('pass', $password);
                $_SESSION['username'] = $username;
                $_SESSION['role'] = 0;
                header("Location: ../index.php");
            }
        }else {
            $message = 'Пароли отличаются, попробуйте снова';
        }   
    }
    else {
        $message = 'Пользователь с таким именем существует, попробуйте другое или авторизируйтесь.';
    }
}