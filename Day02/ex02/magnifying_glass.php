#!/usr/bin/php
<?php

function to_upper($matches)
{
	return ($matches[1].strtoupper($matches[2]).$matches[3]);
}

function more_cut($matches)
{
	$matches[0] = preg_replace_callback("/(title=\")(.*?)(\")/", 'to_upper', $matches[0]);
	$matches[0] = preg_replace_callback("/(>)(.*?)(<)/", 'to_upper', $matches[0]);
	return $matches[0];	
}

if ($argc > 1 || file_exists($argv[1]))
{
	$file = file_get_contents($argv[1]);
	$file = preg_replace_callback("/(<a.+>)/", 'more_cut', $file);
	echo $file;
}

?>