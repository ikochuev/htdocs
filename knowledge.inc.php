<?php
echo 'Объявление переменных: '.'<br>';
$x = 10;
$y = 5;
$exampleString = 'Nadeus budet 20 ballov!';
$exampleDouble = 3.14;
$exampleTrue = true;
echo 'Вывод переменных через запятую (x, y, String, Double, Boolean:'.'<br>';
echo ' x = '.$x.', y = '.$y.', String: '.$exampleString.', Double = '.$exampleDouble.', Boolean:'.$exampleTrue.'<br>';
echo 'Простейшие операции: '.'<br>';
echo 'Сложение x + y = ',($x + $y).'<br>';
echo 'Сравнение: $x не равно $y ? Ответ: ',($x != $y).' (Единица = true, Ничего = false)<br>';
echo 'Деление с округлением до 3-х знаков x / Double = ',(round($x / $exampleDouble,3)).'<br>';
function factorial_x($n) 
{
 if ($n <= 1) return 1; 
 return $n * factorial_x($n - 1);
} 
echo 'Факториал числа '.$x.' с помощью рекурсии: '.factorial_x($x);
?>

<?php
$date_today = date("m.d.y");
$time_today = date("H:i:s");
?>

<?php
$load_time_start = microtime(true);
$download_time = round(microtime(true) - $load_time_start,3);
?>
