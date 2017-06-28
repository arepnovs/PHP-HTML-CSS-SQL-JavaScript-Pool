<?php

if (!$_SERVER["PHP_AUTH_USER"])
{
	header("WWW-Authenticate: Basic realm='Member area'");
	header("Content-Type: text/html");
	echo "<html><body>That area is accessible for members only</body></html>";
	header("HTTP/1.0 401 Unauthorized");
	header("Connection: close");
}
else
{
	if ($_SERVER["PHP_AUTH_USER"] == "zaz" && $_SERVER["PHP_AUTH_PW"] == "Ilovemylittleponey")
	{
		header("Content-Type: text/html");
		echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64,";
		echo base64_encode(file_get_contents("../img/42.png"))."'>\n</body></html>\n";
		header("HTTP/1.0 401 Unauthorized");
	}
	else
	{
		header("Content-Type: text/html");
  		echo "<html><body>That area is accessible for members only</body></html>";
  		header("HTTP/1.0 401 Unauthorized");
		header("Connection: close");
	}
 }


?>