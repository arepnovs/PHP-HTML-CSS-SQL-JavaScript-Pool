<?PHP

class Unholyfactory {
	private $absd = array();
	public function absorb($arr) {
		if (get_parent_class($arr) != 'Fighter' )
			print("(Factory can't absorb this, it's not a fighter)".PHP_EOL);
		else if (!in_array($arr, $this->absd))
		{
			$this->absd[$arr->getName()] = $arr;
			print("(Factory absorbed a fighter of type ".$arr->getName().")".PHP_EOL);
		}
		else
			print("(Factory already absorbed a fighter of type ".$arr->getName().")".PHP_EOL);
	}
	public function fabricate($type) {
		if (array_key_exists($type, $this->absd))
		{
			print("(Factory fabricates a fighter of type $type)" . PHP_EOL);
			return (clone $this->absd[$type]);
		}
		else
			print("(Factory hasn't absorbed any fighter of type $type)".PHP_EOL);	
	}
}