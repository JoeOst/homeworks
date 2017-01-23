<?php 
/*Счетчик посещений: Присвоить переменной $access имя файла, в котором будет храниться значение счетчика.
Использовать функцию filе( ) для чтения содержимого $access в массив $visits. 
Присвоить переменной $current_visitors значение первого (и единственного) элемента массива $visits.
Увеличить значение $current_visitors на 1.
Открыть файл $access для записи и установить указатель текущей позиции в начало файла.
Записать значение $current_visitors в файл $access.
Закрыть манипулятор, ссылающийся на файл $access.*/

$access = "access.txt";
$visits = file($access);
$current_visitors = $visits[0];
$current_visitors++;
$accessOpen = fopen($access,w);
fwrite($accessOpen,$current_visitors);
fclose($accessOpen);


?>