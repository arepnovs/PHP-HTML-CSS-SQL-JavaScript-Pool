<?php

class Lannister {
	function sleepWith($whom) {
		if ($whom instanceof Stark) {
			echo "Let's do this" . PHP_EOL;
		}
		else if ($whom instanceof Lannister) {
			echo "Not even if I'm drunk !" . PHP_EOL;
		}
	}
}

?>