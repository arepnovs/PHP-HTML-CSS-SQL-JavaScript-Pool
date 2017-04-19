<?PHP

require_once 'Vector.class.php';

Class Matrix {
	const IDENTITY = "IDENTITY";
	const SCALE = "SCALE preset"; 
	const RX = "Ox ROTATION preset";
	const RY = "Oy ROTATION preset";
	const RZ = "Oz ROTATION preset";
	const TRANSLATION = "TRANSLATION preset";
	const PROJECTION = "PROJECTION preset";

	private $_matrix = array(array(1, 0, 0, 0), array(0, 1, 0, 0), array(0, 0, 1, 0), array(0, 0, 0, 1) );

	public static $verbose = FALSE;

	public static function doc() {
		return (file_get_contents("./Matrix.doc.txt") . PHP_EOL);
	}

	public function __construct(array $arr) {
		if (array_key_exists('preset', $arr))
		{
			if ( $arr['preset'] == self::IDENTITY )
				return ;
			else if ( $arr['preset'] == self::SCALE && array_key_exists( 'scale', $arr ) )
				$this->_create_scale( $arr['scale'] );
			else if ( $arr['preset'] == self::RX || $arr['preset'] == self::RY || $arr['preset'] == self::RZ && array_key_exists( 'angle', $arr ) )
				$this->_create_rotate( $arr['preset'], $arr['angle'] );
			else if ( $arr['preset'] == self::TRANSLATION && array_key_exists( 'vtc', $arr ) )
				$this->_create_translate( $arr['vtc'] );
			else if ( $arr['preset'] == self::PROJECTION && array_key_exists( 'fov', $arr ) && array_key_exists( 'ratio', $arr ) && array_key_exists( 'near', $arr ) && array_key_exists( 'far', $arr ) )
				$this->_OpenGLPerspective( $arr['fov'], $arr['ratio'], $arr['near'], $arr['far'] );
			if ( self::$verbose == TRUE )
				print('Matrix ' . $arr['preset'] . ' instance constructed'.'\n');	
		}
	return;
	}