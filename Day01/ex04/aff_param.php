#!/usr/bin/php
<?php

$i = 1;
if ($argc > 1)
{
	while ($argv[$i] || strcmp("0", $argv[$i]) == 0)
	{
		echo"$argv[$i]\n";
		$i++;
	}
}

?>