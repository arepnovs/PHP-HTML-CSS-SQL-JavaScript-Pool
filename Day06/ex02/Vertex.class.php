<?php

class Vertex {

	private $_x;
	private $_y;
	private $_z;
	private $_w = 1.0;
	private $_color;

	public static $verbose = FALSE;
	public static function doc() {
		return file_get_contents("./Vertex.doc.txt");
	}
	public function __construct($arr){
        $this->_x = 0;
        if (array_key_exists('x', $arr))
            $this->_x = $arr['x'];
        $this->_y = 0;
        if (array_key_exists('y', $arr))
            $this->_y = $arr['y'];
        $this->_z = 0;
        if (array_key_exists('z', $arr))
            $this->_z = $arr['z'];
        $this->_w = 1.0;
        if (array_key_exists('w', $arr))
            $this->_w = $arr['w'];
        $this->_color = new Color(array ('rgb' => 16777215));
        if (array_key_exists('color', $arr))
            $this->_color = $arr['color'];
        if (Vertex::$verbose === TRUE)
            printf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f, %s ) constructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->__toString());
    }
    function __destruct() {
		if (self::$verbose == TRUE)
			printf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f, %s ) destructed.\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->__toString());
	}

	public function getX() { return $this->_x; }
	public function getY() { return $this->_y; }
	public function getZ() { return $this->_z; }
	public function getW() { return $this->_w; }
	public function getColor() { return $this->_color; }

	public function setX ($x) { $this->_x = $x; return; }
	public function setY ($y) { $this->_y = $y; return; }
	public function setZ ($z) { $this->_z = $z; return; }
	public function setW ($w) { $this->_w = $w; return; }
	public function setColor (Color $color) { $this->_color = $Color; return; }

	public function __toString() {
		return (self::$verbose == TRUE) ? sprintf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f, %s )", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->__toString()) : sprintf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f )", $this->_x, $this->_y, $this->_z, $this->_w);
	}

}