<?PHP

class Jaime extends Lannister{
	
	function sleepWith($whom) {
		if ($whom instanceof Cersei) {
			echo "With pleasure, but only in a tower in Winterfell, then." . PHP_EOL;
		}
		else
			parent::sleepWith($whom);
	}
}

?>