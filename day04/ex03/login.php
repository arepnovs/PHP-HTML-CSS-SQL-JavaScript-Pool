<?PHP

include ("auth.php");

if ($_GET['login'] && $_GET['passwd'])
{
	if (auth($_GET['login'], $_GET['passwd'])){
		session_start();
		$_SESSION['loggued_on_user'] = $_GET['login'];
		echo "OK\n";
	}
	else 
		echo "ERROR\n";
}
else 
	echo "ERROR\n";

?>