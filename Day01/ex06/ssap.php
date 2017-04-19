#!/usr/bin/php
<?php

function if_space($arg)
{
	$i = 0;
	while ($arg[$i])
	{
		if ($arg[$i] == " ")
			return 1;
		$i++;
	}
	return 0;
}

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
		return $res;
	}
}

$i = 0;
$f = 0;
if ($argc > 1)
{
	if (!empty($arr)|| strcmp("0", $el) == 0)
	{ 
		foreach ($argv as $el)
		{
			if ($i != 0 && if_space($el) == 0)
				$prii[] = $el;
			else if ($i != 0)
			{
				$prii2[] = ft_split($el);
				$f++;
			}
			$i++;
		}
	}
	$tot = count($prii2);
	$i = 1;
	if ($f != 0)
	{
		$final = array_merge($prii, $prii2[0]);
		while ($i < $tot)
		{
			$final = array_merge($final, $prii2[$i]);
			$i++;
		}
	}
	else if (!empty($arr)|| strcmp("0", $el) == 0)
		$final = array_merge($prii);
	if (!empty($arr)|| strcmp("0", $el) == 0)
	{
		sort($final);
		foreach ($final as $el)
			echo"$el\n";
	}
}

?>