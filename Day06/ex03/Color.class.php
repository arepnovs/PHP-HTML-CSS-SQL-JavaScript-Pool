<?php

class Color {
	public $red = 0;
	public $green = 0;
	public $blue = 0;

	public static $verbose = FALSE;
	public function __construct(array $rgb) {
		if (array_key_exists('rgb', $rgb)) {
			$col = intval($rgb['rgb']);
			$this->red = (16711680 & $col) >> 16;
			$this->green = (65280 & $col) >> 8;
			$this->blue = (255 & $col);
		}
		else {
			$this->red = intval($rgb['red']);
			$this->green = intval($rgb['green']);
			$this->blue = intval($rgb['blue']);
		}
		if (self::$verbose == TRUE)
			printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
	}
	function __destruct() {
		if (self::$verbose == TRUE)
			printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
	}
	public function __toString() {
		return sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
	}
	public static function doc() {
		return file_get_contents("./Color.doc.txt");
	}
	public function add(Color $rhs) {
        return (new Color( array('red' => $rhs->red + $this->red, 'green' => $rhs->green + $this->green, 'blue' => $rhs->blue + $this->blue )));
    }
    public function sub(Color $rhs) {
        return (new Color( array('red' => $this->red - $rhs->red, 'green' => $this->green - $rhs->green, 'blue' => $this->blue - $rhs->blue)));
    }
    public function mult($f) {
        return (new Color( array('red' => $this->red * $f, 'green' => $this->green * $f, 'blue' => $this->blue * $f)));
    }
}