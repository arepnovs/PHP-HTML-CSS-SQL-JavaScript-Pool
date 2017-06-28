<?php

function auth($login, $passwd)
{
	$passwd = hash("whirlpool", $passwd);
	$data = unserialize(file_get_contents("private/passwd"));
	foreach ($data as $key => $v)
	{
		if ($login == $v['login'] && $passwd == $v['passwd'])
			return(TRUE);
	}
	return (FALSE);
}

?>