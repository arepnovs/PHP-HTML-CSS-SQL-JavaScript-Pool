<?PHP

abstract class Fighter {
	protected $name;

	abstract public function fight($target);

	public function __construct($arr) {
		return $this->name = $arr;
	}
	public function getName() {
		return ($this->name);
	}
}

?>