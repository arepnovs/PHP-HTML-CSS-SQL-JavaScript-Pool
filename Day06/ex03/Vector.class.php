<?php
require_once'Color.class.php';
require_once 'Vertex.class.php';

class Vector {

	private $_x;
	private $_y;
	private $_z;
	private $_w = 0.0;

	public function getX() { return $this->_x; }
	public function getY() { return $this->_y; }
	public function getZ() { return $this->_z; }
	public function getW() { return $this->_w; }

	public static $verbose = FALSE;
	public static function doc() {
		return file_get_contents("./Vector.doc.txt");
	}
	public function __construct($arr){
		if (array_key_exists('dest', $arr)) {
			if(array_key_exists('orig', $arr)) {
				$this->_x = floatval($arr['dest']->getX() - $arr['orig']->getX());
				$this->_y = floatval($arr['dest']->getY() - $arr['orig']->getY());
				$this->_z = floatval($arr['dest']->getZ() - $arr['orig']->getZ());
			}
			else {
				$temp = new Vertex(array('x' => 0, 'y' => 0, 'z' => 0, 'w' => 1, 'rgb' => 16777215));
				$this->_x = floatval($arr['dest']->getX() - $temp->getX());
				$this->_y = floatval($arr['dest']->getY() - $temp->getY());
				$this->_z = floatval($arr['dest']->getZ() - $temp->getZ());
			}
		}
        if (self::$verbose === TRUE)
            printf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f) constructed\n", $this->getX(), $this->getY(), $this->getZ(), $this->getW());
    }
    function __destruct() {
		if (self::$verbose == TRUE)
			printf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f) destructed.\n", $this->getX(), $this->getY(), $this->getZ(), $this->getW());
	}
	
	public function __toString() {
		return sprintf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f)", $this->getX(), $this->getY(), $this->getZ(), $this->getW());
	}
	public function magnitude() {
		return sqrt(pow($this->getX(), 2) + pow($this->getY(), 2) + pow($this->getZ(), 2));
	}
	public function normalize() {
		if (($magn = $this->magnitude()) != 1)
		return (new Vector(array('dest' => new Vertex(array('x' => $this->getX() / $magn, 'y' => $this->getY() / $magn, 'z' => $this->getZ() / $magn)))));		
	}
	public function add(Vector $rhs) {
		return (new Vector(array('dest' => new Vertex(array('x' => $this->getX() + $rhs->getX(), 'y' => $this->getY() + $rhs->getY(), 'z' => $this->getZ() + $rhs->getZ())))));
	}
	public function sub(Vector $rhs) {
		return (new Vector(array('dest' => new Vertex(array('x' => $this->getX() - $rhs->getX(), 'y' => $this->getY() - $rhs->getY(), 'z' => $this->getZ() - $rhs->getZ())))));
	}
	public function opposite() {
		return (new Vector(array('dest' => new Vertex(array('x' => $this->getX() * -1, 'y' => $this->getY() * -1, 'z' => $this->getZ() * -1)))));
	}
	public function scalarProduct($k) {
		return (new Vector( array('dest' => new Vertex(array('x' => $this->getX() * $k , 'y' => $this->getY() * $k , 'z' => $this->getZ() * $k)))));
	}
	public function dotProduct(Vector $rhs) {
		return ($this->getX() * $rhs->getX() + $this->getY() * $rhs->getY() + $this->getZ() * $rhs->getZ());
	}
	public function cos(Vector $rhs) {
		return ($this->dotProduct($rhs) / ($this->magnitude() * $rhs->magnitude()));
	}
	public function crossProduct(Vector $rhs) {
		return (new Vector(array('dest' => new Vertex(array('x' => $this->getY() * $rhs->getZ() - $this->getZ() * $rhs->getY(), 'y' => $this->getZ() * $rhs->getX() - $this->getX() * $rhs->getZ(), 'z' => $this->getX() * $rhs->getY() - $this->getY() * $rhs->getX())))));
	}
}