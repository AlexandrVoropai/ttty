<?php

echo "If it is light, press 1!\n";
$handle = fopen ("php://stdin","r");
$input = fgets($handle);

echo ($input == 1) ? "Light!" : "Dark!"; 

echo "\n";