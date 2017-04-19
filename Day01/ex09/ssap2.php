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
				$prii2[]= ft_split($el);
				$f++;
			}
			$i++;
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
		else
			$final = array_merge($prii);
		foreach ($final as $el) 
		{
			if (is_numeric($el))
				$nums[] = $el;
			else if (($el[0] >= "A" && $el[0] <= "Z") || ($el[0] >= "a" && $el[0] <= "z"
				|| ($el[0] >= "0" && $el[0] <= "9")))
				$alph[] = $el;
			else
				$sign[] = $el;
		}
		if (!empty($alph))
		{
			sort($alph, SORT_NATURAL | SORT_FLAG_CASE);
			foreach ($alph as $el)
				echo"$el\n";
		}
		if (!empty($nums) || strcmp("0", $el) == 0)
		{
			sort($nums, SORT_STRING);
			foreach ($nums as $el)
				echo"$el\n";
		}
		if (!empty($sign))
		{
			sort($sign);
			foreach ($sign as $el)
				echo"$el\n";
		}
	}
}

?>