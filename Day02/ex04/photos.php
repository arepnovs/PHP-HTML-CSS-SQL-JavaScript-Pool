#!/usr/bin/php
<?php
error_reporting(E_ERROR | E_PARSE);	
$dir_name = substr($argv[1], strlen($argv[1]) - stripos(strrev($argv[1]), '/'));
$output = shell_exec("ping -c1 $dir_name");
if (strlen($output) == 0)
    exit();
$page = file_get_contents($argv[1]);
preg_match_all('/<img.+"?>/', $page, $urls);
$i = 0;
foreach ($urls as $el => $p)
	$str = implode($p);
preg_match_all('/(src=")(.+?)(")/im', $str, $pics);
foreach ($pics[2] as $pic)
{
	if ($pic[1] != "/" && !strstr($pic, ".js") && !strstr($pic, "//mc."))
		$res[] = $pic;
}
$i = 0;
$count = count($res);
mkdir($dir_name, 0777);
while ($i < $count)
{
	$name[] = substr($res[$i], strlen($res[$i]) - stripos(strrev($res[$i]), '/'));
	if (!strstr($res[$i], "http"))
	{
		if ($res[$i][0] != "/")
			$res[$i] = "/".$res[$i];
		$res[$i] = $argv[1].$res[$i];
	}
	copy($res[$i], "$dir_name/$name[$i]");
	
	$i++;
}