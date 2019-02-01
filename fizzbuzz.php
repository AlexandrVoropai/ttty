<?php
$fizz = 2;
$buzz = 5;
for ($i = 1; $i<= 18; $i++)
if ($i % $fizz == 0 and $i % $buzz == 0)
{
	echo 'FB';
} 	
elseif ($i % $fizz == 0)
{
echo 'F';
}
elseif ($i % $buzz == 0)
{
echo 'B';
}
else
{
	echo $i;
}