#!/usr/bin/php
<?php

echo"Enter a number:";
while ($num = fgets(STDIN))
{
	$f = "0";
	$num = rtrim($num);
	if (!is_numeric($num))
        $f = 1;
    if ($f == 1)
        echo"'$num' is not a number\n";
    else
    {
		if ($num % "2" == "0")
			print("The number $num is even\n");
		else
			echo"The number {$num} is odd\n";
	}
	echo"Enter a number:";
}
echo"\n";
?>