<?php
fopen('php://stdin', 'r');
$line = trim(fgets(STDIN));
list($fizz, $buzz, $target) = explode(' ', $line);

$arr = range(1, $target); //генерим массив чтоб пропустить через array_map

$result = array_map(function($i) use ($fizz, $buzz){
    if ($i % $fizz === 0 && $i % $buzz === 0) {
        return 'FB';
    } elseif($i % $fizz === 0) {
        return 'F';
    } elseif($i % $buzz === 0) {
        return 'B';
    } else {
        return $i;
    }
}, $arr);

echo implode(' ', $result); // выводим как строку