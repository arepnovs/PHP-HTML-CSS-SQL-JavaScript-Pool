#!/usr/bin/php
<?PHP

date_default_timezone_set('Europe/Kiev');
$file = fopen("/var/run/utmpx", "r");
if ($file != NULL)
{
	$i = 0;
	while ($utmpx = fread($file, 628))
	{
		$array = unpack("a256user/a4num/a32term/iD/iE/I2time", $utmpx);
		if ($array["E"] == 7)
			$data[$array['term']] = $array;
		
	}
	ksort($data);
	foreach ($data as $el)
	{
		echo $el['user'] . "  ";
		echo $el['term'] . "  ";
		echo date("M  j H:i", $el['time1']) . "\n";
	}
}

?>