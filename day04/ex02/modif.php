<?php


if ($_POST["login"] && $_POST["oldpw"] && $_POST["newpw"] && $_POST["submit"] == "OK")
{
	$f = 0;
	$t["login"] = $_POST["login"];
	$t["oldpw"] = hash("whirlpool", $_POST["oldpw"]);
	$t["newpw"] = hash("whirlpool", $_POST["newpw"]);
	$data = file_get_contents("../private/passwd");
	$data = unserialize($data);
	foreach($data as $key => $v)
	{
		if ($v["login"] == $t["login"] && $v["passwd"] == $t["oldpw"])
		{
			$c = $key;
			$f++;
			echo"OK\n";
		}
	}
	$data[$c]["passwd"] = $t["newpw"];
	file_put_contents("../private/passwd", serialize($data));
	if ($f == 0)
		echo "Error\n";
}

?>