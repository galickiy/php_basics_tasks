<?php
/**
 * Заданы две переменные: s - длина участка, который проехал автомобиль;
 * t - время движения в часах. Вывести скорость автомобиля на заданном
 * участке в км/час и в м/сек.
 */

$s = 100;
$t= 2;
$v = $s / $t;
$m = $v / 3.6;


echo $v." км/час";
echo "<br>";
echo $m." м/сек";