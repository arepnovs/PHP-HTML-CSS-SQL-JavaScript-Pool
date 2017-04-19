#!/usr/bin/php
<?php

if ($argc > 1)
{
	$i = 0;
	foreach($argv as $el)
	{
		if ($i == 1)
			$key = $el;
		else if ($i > 1)
		{
			$comp = explode(":", $el);
			if (strcmp($key, $comp[0]) == 0)
				$res = $comp[1];
		}
		$i++;
	}
	if (!empty($res) || strcmp("0", $res) == 0)
		echo"$res\n";
}

?>