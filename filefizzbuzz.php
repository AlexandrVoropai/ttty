<?php
$file = fopen ('filefizzbuzz.txt', 'r');
$conect = fgets ($file);
list($fizz, $buzz, $target) = explode(' ', $conect);

var_dump($target);

$i = 1;
$file = fopen ('filefizzbuzz1.txt', 'w');
while ($i <= $target) {
    if ($i % $fizz === 0 && $i % $buzz === 0) {
        fputs ($file, "FB");
		} elseif($i % $fizz === 0) {
         fputs ($file, "F");
		} elseif($i % $buzz === 0) {
         fputs ($file, "B");
		} else {
        fputs ($file, "$i");
		echo $i;
    }
    echo ' ';
    $i++;
}
echo "\n\r";

