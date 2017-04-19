#!/usr/bin/php
<?php

if ($argc > 1)
{
	date_default_timezone_set("Europe/Paris");
	$sp = substr_count($argv[1], " ");
	preg_match("/([0-9]{2}) (Janvier|Fevrier|Mars|Avril|Mai|Juin|Juillet|Aout|Septembre|Octobre|Novembre|Decembre) ([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})/", $argv[1], $matches);
	$cou = count($matches);
	if ($sp == 4 && $cou == 7)
	{
		if (strcmp("Janvier", $matches[2]) == 0)
			$m = 1;
		else if (strcmp("Fevrier", $matches[2]) == 0)
			$m = 2;
		else if (strcmp("Mars", $matches[2]) == 0)
			$m = 3;
		else if (strcmp("Avril", $matches[2]) == 0)
			$m = 4;
		else if (strcmp("Mai", $matches[2]) == 0)
			$m = 5;
		else if (strcmp("Juin", $matches[2]) == 0)
			$m = 6;
		else if (strcmp("Juillet", $matches[2]) == 0)
			$m = 7;
		else if (strcmp("Aout", $matches[2]) == 0)
			$m = 8;
		else if (strcmp("Septembre", $matches[2]) == 0)
			$m = 9;
		else if (strcmp("Octobre", $matches[2]) == 0)
			$m = 10;
		else if (strcmp("Novembre", $matches[2]) == 0)
			$m = 11;
		else if (strcmp("Decembre", $matches[2]) == 0)
			$m = 12;
		$secs = mktime($matches[4], $matches[5], $matches[6], $m, $matches[1], $matches[3]);
		echo"$secs\n";
	}
	else
		echo"Wrong Format\n";
}

?>


				if ($res[$i][0] != "/")
					$res[$i] = "/".$res[$i];
				$res[$i] = $argv[1].$res[$i];