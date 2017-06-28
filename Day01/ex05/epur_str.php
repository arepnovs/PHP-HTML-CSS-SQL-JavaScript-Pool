#!/usr/bin/php
<?php

function ft_split($str)
{
	$arr = explode(" ", $str);
	if (!empty($arr) || strcmp("0", $el) == 0)
	{ 
		foreach ($arr as $el)
		{
			if (!empty($el) || strcmp("0", $el) == 0)
				$res[] = $el;
		}
	}
	return $res;
}

$arg = ft_split($argv[1]);
$len = count($arg);
for($i = 0; $i < $len; $i++)
{
    if (!empty($arg[$i]) || $arg[0] == '0')
        echo "$arg[$i]";
    if ($i + 1 >= $len)
        echo "\n";
    else if ($arg[$i + 1] != ',')
        echo " ";
}

?>