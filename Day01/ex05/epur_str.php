#!/usr/bin/php
<?php

function ft_split($str)
{
	$arr = explode(" ", $str);
	if (!empty($arr)|| strcmp("0", $el) == 0)
	{ 
		foreach ($arr as $el)
		{
			if (!empty($el) || strcmp("0", $el) == 0)
				$res[] = $el;
		}
	}
	return $res;
}

if ($argc == 2)
{
	$arr = ft_split($argv[1]);
	if (!empty($arr)|| strcmp("0", $el) == 0)
	{
		foreach ($arr as $el)
		{
			if (!empty($el) || strcmp("0", $el) == 0)
				$res[] = $el;
		}
	}
	$i = 0;
	$total = count($res);
	if (!empty($arr)|| strcmp("0", $el) == 0)
	{
		foreach ($res as $el)
		{
			echo"$el";
			if ($i <= $total)
				echo" ";
			$i++;
		}
		echo"\n";
	}	
}

?>