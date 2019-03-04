<? 
	//Первое задание
	echo '<p>1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:<br>

    если $a и $b положительные, вывести их разность;<br>
    если $а и $b отрицательные, вывести их произведение;<br>
    если $а и $b разных знаков, вывести их сумму;</p>';
	
	
	//Решил задать рандомно случайные числа, тем более в php это проще чем в JS
	$a = rand(-20, 20);
	$b = rand(-20, 20);
	echo 'a = '.$a.'<br>'.'b = '.$b.'<br>';
	
	if ($a >= 0 && $b >=0){
		echo 'Числа положительные их разность равна '.abs($a-$b).'<hr>';
	} 
	elseif ($a < 0 && $b < 0){
		echo 'Числа отрицательные их произведение равно '.($a*$b).'<hr>';
	}
	else{
		echo 'Числа разных знаков сумма равна '.($a+$b).'<hr>';
	}
	
	//Задание номер 2
	echo '<p>2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.</p>';
	$a = rand(0, 15);
	echo 'a = '.$a.' начинаем отсчёт до 15:<br>';
	switch($a){
		case 0: echo '0<br>';
		case 1: echo '1<br>';
		case 2: echo '2<br>';
		case 3: echo '3<br>';
		case 4: echo '4<br>';
		case 5: echo '5<br>';
		case 6: echo '6<br>';
		case 7: echo '7<br>';
		case 8: echo '8<br>';
		case 9: echo '9<br>';
		case 10: echo '10<br>';
		case 11: echo '11<br>';
		case 12: echo '12<br>';
		case 13: echo '13<br>';
		case 14: echo '14<br>';
		case 15: 
			echo '15<br>Отсчёт закончен.<hr>';
			break;
		default: 
			echo 'Ошибочное число!<hr>';
			break;
	}
	
	//Третье задание
	echo '<p>3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.</p>';
	//функция для суммы двух чисел
	function sum ($x, $y){
		return $x+$y;
	}
	$a = rand(1, 30);
	$b = rand(1, 40);
	echo $a.' + '.$b.'<br>Результат: '.sum($a,$b).'<br>';
	
	//функция для вычитания двух чисел
	function sub ($x, $y){
		return $x-$y;
	}
	$a = rand(1, 30);
	$b = rand(1, 40);
	echo $a.' - '.$b.'<br>Результат: '.sub($a,$b).'<br>';
	//функция для умножения двух чисел
	function mul ($x, $y){
		return $x*$y;
	}
	$a = rand(1, 30);
	$b = rand(1, 40);
	echo $a.' * '.$b.'<br>Результат: '.mul($a,$b).'<br>';
	//функция для деления двух чисел
	function div ($x, $y){
		return $x/$y;
	}
	$a = rand(3, 30);
	$b = rand(1, 5);
	echo $a.' / '.$b.'<br>Результат: '.div($a,$b).'<hr>';
	
	//четвёртое задание
	echo '<p>4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),<br>
			где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.<br>
			В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).</p>';
	function mathOperation($arg1, $arg2, $operation){
		switch ($operation){
			case '+':
				return sum($arg1, $arg2);
			case '-':
				return sub($arg1, $arg2);
			case '*':
				return mul($arg1, $arg2);
			case '/':
				if($arg2 != 0)
					return div($arg1, $arg2);
				else
					return 'На ноль делить нельзя';
			default: 
				echo 'Что-то пошло не так...';
				break;
		}
		return false;
	}
	$a = rand(1, 30);
	$b = rand(1, 40);
	echo $a.'+'.$b.'='.mathOperation($a,$b,'+').'<br>';
	$a = rand(1, 30);
	$b = rand(1, 30);
	echo $a.'-'.$b.'='.mathOperation($a,$b,'-').'<br>';
	$a = rand(1, 30);
	$b = rand(1, 20);
	echo $a.'*'.$b.'='.mathOperation($a,$b,'*').'<br>';
	$a = rand(1, 30);
	$b = rand(1, 10);
	echo $a.'/'.$b.'='.mathOperation($a,$b,'/').'<br>';
	echo '5/0='.mathOperation(5,0,'/').'<hr>';
	
	//Задание пятое в index.php
	
	//задание шестое* хоть и со звездочкой, но такое же было на курсе по JS
	echo '<p>6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.</p>';
	function power($val, $pow){
		if($pow == 0){
		return 1;
		}
		if($pow < 0){
		return power( 1/$val, -$pow); // -$pow значит смену знака с отрицательного на положительный
		}
		return $val * power($val, $pow-1); // вызов функции внутри функции
	}

	echo power(2,2).'<br>';
	echo power(5,20).'<br>';
	echo power(6,-2).'<br>';
	echo power(-2,10).'<hr>';
	
	//задание седьмое. пожалуй самое интересное
	echo '<p>7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:<br>
		22 часа 15 минут<br>
		21 час 43 минуты</p>';
	//построил таблицу в экселе где отобразил правильное склонение при том или ином времени. и на основе этой таблицы решил сделать функцию, попробовал запихать все условные операторы что проходили
	function writeHour($x, $selector){
		if ($x >= 5 && $x <=20){
			return ($selector == 'h') ? ' часов':' минут';
		}
		else{
			switch($x % 10){				
				case 1: 
					return ($selector == 'h') ? ' час':' минута';
				case 2:
				case 3:
				case 4: 
					return ($selector == 'h') ? ' часа':' минуты';
				case 5:
				case 6:
				case 7:
				case 8:
				case 9:
				case 0: 
					return ($selector == 'h') ? ' часов':' минут';
			}
		}
	}
	
	$hour = date('H');
	$minute = date('i');
	echo $hour.writeHour($hour, 'h').' '.$minute.writeHour($minute, 'm');
	

