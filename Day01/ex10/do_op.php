#!/usr/bin/php
<?php

if ($argc == 4)
{
	$num1 = trim($argv[1]);
	$sign = trim($argv[2]);
	$num2 = trim($argv[3]);
	if (is_numeric($num1) && is_numeric($num2))
	{
		if ($sign == "+")
			print($num1 + $num2);
		else if ($sign == "-")
			print($num1 - $num2);
		else if ($sign == "*")
			print($num1 * $num2);
		else if ($sign == "/")
		{
			if (strcmp($num2, "0") != 0)
				print ($num1 / $num2);
			else
				echo"Incorrect Parameters";
		}
		else if ($sign == "%")
			print($num1 % $num2);
		else
			echo"Incorrect Parameters";
		echo("\n");
	}
	else
		echo"Incorrect Parameters\n";
}
else
	echo"Incorrect Parameters\n";

?>