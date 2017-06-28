#!/usr/bin/php
<?php

function get_ascii($char)
{
	$ascii = ord($char);
	if ($ascii == 0)
		return $ascii;
	if (($ascii < 48) || ($ascii >= 91 && $ascii <= 96) || ($ascii >= 123))
		$ascii = $ascii + 1000;
	else if (is_numeric($char))
		$ascii = $ascii + 100;
	else if (ctype_upper($char))
		$ascii = $ascii + 32;
	return $ascii;
}

function ascii_compare($str1, $str2)
{
	if ($str1 === $str2)
		return 0;
	$s1 = str_split($str1, 1);
	$s2 = str_split($str2, 1);
	$s1_len = strlen($str1);
	$s2_len = strlen($str2);
	$i = 0;
	while ($i < $s1_len && $i < $s2_len)
	{
		$asc1 = get_ascii($s1[$i]);
		$asc2 = get_ascii($s2[$i]);
		if ($asc1 != $asc2)
			return ($asc1 < $asc2) ? -1 : 1;
		$i++;
	}
	if ($i == $s1_len && $i == $s2_len)
		return (0);
	if ($i < $s2_len)
		return (-1);
	return 1;
}

if ($argc < 2)
    exit (1);
unset($argv[0]);
$elms = array();
foreach ($argv as $el)
{
	$exploded = explode(" ", $el);
    $filtered = array_filter($exploded);
    $splitted = array_slice($filtered, 0);
    $elms = array_merge($elms, $splitted);
}
usort($elms, "ascii_compare");
foreach ($elms as $el)
{
    echo $el."\n";
}

?>
