<? 
if(session_id() == '') {
    session_start();
}
$username = 'Гость';
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    echo "Здравствуйте, $username! <a href=\"#\">Выйти<a><br>";
} else {
    echo "Здравствуйте, $username! <a href=\""."/lk/login.php\">Войти<a><br>";
}

if(isset($_SESSION['role'])){
    $role = $_SESSION['role'];
    if ($role == 1){
        echo "Ваш уровень доступа: $role<br>Администратор! ";
        echo '<a href="new_item.php">Добавить товар</a>';
    }
}