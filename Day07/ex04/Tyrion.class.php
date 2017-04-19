<?php

class Tyrion extends Lannister {
	public function sleepWith($whom) {
		$who = get_class($whom);
		if ($who == "Jaime")
			print("Not even if I'm drunk !".PHP_EOL);
		else if ($who == "Sansa")
			print("Let's do this.".PHP_EOL);
		else if ($who == "Cersei")
			print("Not even if I'm drunk !".PHP_EOL);
	}
}

?>