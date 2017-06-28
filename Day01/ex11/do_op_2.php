#!/usr/bin/php
<?php

function ft_split($str)
{
	$arr = explode(" ", $str);
	foreach ($arr as $el)
	{
		if (!empty($el) || strcmp("0", $el) == 0 || !strcmp("\t", $el))
		{
			$res[] = $el;
		}
	}
	return $res;
}

if ($argc == 2)
{
	foreach ($argv as $el) 
		$num = ft_split($el);
	if (count($num) != 3)
	{
		$nnum = $argv[1];
		$i = 0;
		$j = 0;
		while($nnum[$i] || strcmp("0", $nnum[$i]) == 0)
		{
			if ($nnum[$i] != " " || strcmp("0", $nnum[$i]) == 0)
			{
				$fnum[$j] = $nnum[$i];
				$j++;
			}
			$i++;
		}
		$dnum = implode($fnum);
		$i = 0;
		while ($dnum[$i] || strcmp("0", $dnum[$i]) == 0)
		{
			if (!is_numeric($dnum[$i]) && $i != 0)
			{
				$gnum = explode("$dnum[$i]", $dnum);
				$sign = $dnum[$i];
				break;
			}
			$i++;
		}
		$num[0] = $gnum[0];
		$num[1] = $sign;
		$num[2] = $gnum[1];
	}
	$count = count($num);
	if (is_numeric($num[0]) && is_numeric($num[2]) && $count == 3)
	{
		if ($num[1] == "+")
			print($num[0] + $num[2]);
		else if ($num[1] == "-")
			print($num[0] - $num[2]);
		else if ($num[1] == "*")
			print($num[0] * $num[2]);
		else if ($num[1] == "/")
		{
			if (strcmp($num[2], "0") != 0)
				print ($num[0] / $num[2]);
			else
				echo"Syntax Error";
		}
		else if ($num[1] == "%")
			print($num[0] % $num[2]);
		else
			echo"Syntax Error";
		echo("\n");
	}
	else
		echo"Syntax Error\n";
}
else
	echo"Incorrect Parameters\n";

?>