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
		sort($res);
		return $res;
	}
}

?>