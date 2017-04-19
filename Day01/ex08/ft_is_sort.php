<?php

function ft_is_sort($arr)
{
	if (!empty($arr)|| strcmp("0", $el) == 0)
	{
		$i = 0;
		$f = 0;
		$total = count($arr);
		$arr2 = array_merge($arr);
		sort($arr2);
		while ($i < $total)
		{
			if (strcmp($arr[$i], $arr2[$i]) != 0)
				return FALSE;
			$i++;
		}
		return TRUE;
	}
	return TRUE;
}

?>