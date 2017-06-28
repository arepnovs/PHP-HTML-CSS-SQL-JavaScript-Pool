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
		return $res;
	}
}

if ($argc > 1)
{
    unset($argv[0]);
    foreach($argv as $arg)
    {
        $arr = ft_split($arg);
        if ($ret && is_array($arr))
            $ret = array_merge($ret, $arr);
        else if ($ret == NULL)
            $ret = $arr;
    }
    sort($ret);
    foreach($ret as $print)
        echo "$print\n";
}

?>