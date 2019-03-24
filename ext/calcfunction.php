<?
$result = '';
if (!empty($_POST['number1'])){
    if (!empty($_POST['number2'])){
        $number1 = (int)$_POST['number1'];
        $number2 = (int)$_POST['number2'];
        $operand = null;
        if(!empty($_POST['operand'])){
            $operand = $_POST['operand'];
        } elseif(!empty($_POST['submit'])){
            $operand = $_POST['submit'];
        }
        switch ($operand){
            case '+':
            $result = "$number1 + $number2 = ".($number1 + $number2);
            break;
            case '-':
            $result = "$number1 - $number2 = ".($number1 - $number2);
            break;
            case '*':
            $result = "$number1 * $number2 = ".($number1 * $number2);
            break;
            case '/':
            $result = ($number2==0)?"На ноль делить нельзя":"$number1 / $number2 = ".($number1 / $number2);
            break;
        }
    
    }
    else {
        $result = "Пожалуйста введите второе число";
    }
}
else {
    if (empty($_POST['number2'])){
    $result = "Пожалуйста введите первое и второе число";
    }
    else {
        $result = "Пожалуйста введите первое число";
    }
}