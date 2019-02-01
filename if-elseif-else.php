<?php

echo "What is chocolate now?\n";
$handle = fopen ("php://stdin","r");
$percent = fgets($handle);

if ($percent > 50) {
    echo "Very sweet chocolate:)";
} elseif (($percent > 20) && ($percent < 50)) {
    echo "Sweet chocolate)";
} else echo "Not very sweet";

echo "\n";
if ($percent > 100) echo "\n!!!Super sweet!!!\n";
