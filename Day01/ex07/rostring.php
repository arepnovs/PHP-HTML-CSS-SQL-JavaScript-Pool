#!/usr/bin/php
<?php

function if_space($arg)
{
	$i = 0;
	while ($arg[$i] || strcmp("0", $argv[$i]) != 0)
	{
		if ($arg[$i] == " " || strcmp("0", $argv[$i]) != 0)
			return 1;
		$i++;
	}
	return 0;
}

function ft_split($str)
{
	$arr = explode(" ", $str);
	foreach ($arr as $el)
	{
		if (!empty($el) || strcmp("0", $el) == 0)
		{
			$res[] = $el;
		}
	}
	return $res;
}

if ($argc > 1)
{
	if (if_space($argv[1]) == 0)
		echo"$argv[1]";
	else
		$res = ft_split($argv[1]);
	$total = count($res);
	$i = 1;
	while ($i <= $total)
	{
		echo"$res[$i]";
		if ($i != $total)
			echo" ";
		$i++;
	}
	echo"$res[0]\n";
}

?>
