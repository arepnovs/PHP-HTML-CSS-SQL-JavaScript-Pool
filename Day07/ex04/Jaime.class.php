<?PHP

class Jaime extends Lannister {
	public function sleepWith($whom) {
		$who = get_class($whom);
		if ($who == "Tyrion")
			print("Not even if I'm drunk !".PHP_EOL);
		else if ($who == "Sansa")
			print("Let's do this.".PHP_EOL);
		else if ($who == "Cersei")
			print("With pleasure, but only in a tower in Winterfell, then.".PHP_EOL);
	}
}

?>