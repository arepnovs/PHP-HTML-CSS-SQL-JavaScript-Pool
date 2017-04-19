#!/usr/bin/php
<?php

if ($argc > 1)
{
	if (!empty($argv)|| strcmp("0", $argv[1]) == 0)
	{
		$words = preg_split("/[\s]+/", trim($argv[1]));
		$final = implode(" ", $words);
		echo"$final\n";
	}
}

?>