<?php
	$minValue = 1;
	$maxValue = 5;
	$var1=$_GET['var1'];
	$var2=$_GET['var2'];
	$var3=$_GET['var3'];
	if ($var1 >= $minValue && $var2 >= $minValue && $var3 >= $minValue &&
	$var1 <= $maxValue && $var2 <= $maxValue && $var3 <= $maxValue) {
		$res = ($var2-$var1 )*$var3;
		if($res==8)
		{
			echo 'Результат=', $res; 
			echo '<br>Поздравляем Вы подобрали правильные значения переменных!';
		} else {
			echo 'Значения подобраны неверно. Результат выполнения скрипта=', $res; 
		}
	} else {
		echo 'Вы ввели некорректные данные'; 
	}
?>



