<?php


if ($_POST["login"] && $_POST["passwd"] && $_POST["submit"] == "OK")
{
	$f = 0;
	$t["login"] = $_POST["login"];
	$t["passwd"] = hash("whirlpool", $_POST["passwd"]);
	if (!file_exists("private"))
		mkdir("private");
	if (!file_exists("private/passwd"))
	{
		$arr[] = $t;
		file_put_contents("private/passwd", serialize($arr));
		echo "OK\n";
	}
	else
	{
		$data = file_get_contents("private/passwd");
		$data = unserialize($data);
		foreach($data as $v)
		{
			if ($v["login"] == $t["login"])
			{
				$f++;
				echo"ERROR\n";
			}
		}
		if ($f == 0)
		{
			$data[] = $t;
			file_put_contents("private/passwd", serialize($data));
			echo "OK\n";
		}
	}

	
}
else
	echo "ERROR\n";


?>