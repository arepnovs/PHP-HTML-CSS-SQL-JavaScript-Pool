<?php

class NightsWatch implements IFighter {
	private $fght;
	public function recruit($whom) {
		if (method_exists($whom, 'fight')) {
			$fght = $whom->fight().PHP_EOL;
		}
	}
	public function fight() {
		print($fght);
	}
}

?>