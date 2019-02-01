<?php
$stdin = fopen('php://stdin', 'r');

$line = trim(fgets(STDIN)); 
list($fizz, $buzz, $target) = explode(' ', $line);

$i = 1;
while ($i <= $target) {
    if ($i % $fizz === 0 && $i % $buzz === 0) {
        echo 'FB';
    } elseif($i % $fizz === 0) {
        echo 'F';
    } elseif($i % $buzz === 0) {
        echo 'B';
    } else {
        echo $i;
    }
    echo ' ';
    $i++;
}
echo "\n\r";
