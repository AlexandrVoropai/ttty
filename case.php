<?php
echo "What is chocolate now?\n";
$handle = fopen ("php://stdin","r");
$chocolate = fgets($handle);

switch ($chocolate){
    case 2:
        echo "Not very sweet";
        break;
    case 3:
        echo "Sweet chocolate)";
        break;
    case 4:
        echo "Very sweet chocolate:)";
        break;
    case 5:
        echo "Super sweet";
        break;
} 
echo "\n";