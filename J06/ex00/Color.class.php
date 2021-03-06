<?php
	
	Class Color 
	{
		public $red = 0;
		public $green = 0;
		public $blue = 0;
		public static $verbose = FALSE;
		public function __construct(array $kwargs)
		{
			if (array_key_exists('rgb', $kwargs))
			{
				$this->red = intval(($kwargs['rgb'] >> 16) & 0xFF);
				$this->green = intval(($kwargs['rgb'] >> 8) & 0xFF);
				$this->blue = intval($kwargs['rgb'] & 0xFF);
			}
			else if (array_key_exists('red', $kwargs) && array_key_exists('green', $kwargs) && array_key_exists('blue', $kwargs))
			{
				$this->red = intval($kwargs['red']);
				$this->green = intval($kwargs['green']);
				$this->blue = intval($kwargs['blue']);
			}
			if (self::$verbose == TRUE)
				print($this." constructed.\n");
			return ;
		}
		
		public function __destruct()
		{
			if (self::$verbose == TRUE)
				print ($this." destructed.\n");
			return ;
		}

		public function __toString()
		{
			return "Color( red: ".sprintf("% 3d", $this->red).", green: ".sprintf("% 3d", $this->green).", blue: ".sprintf("% 3d", $this->blue)." )";
		}
		
		public static function doc()
		{
			return file_get_contents("./Color.doc.txt");
		}

		public function add(Color $rhs)
		{
			return new Color( array('red' => ($this->red + $rhs->red), 'green' => ($this->green + $rhs->green), 'blue' => ($this->blue + $rhs->blue)));
		}

		public function sub(Color $rhs)
		{
			return new Color( array('red' => ($this->red - $rhs->red), 'green' => ($this->green - $rhs->green), 'blue' => ($this->blue - $rhs->blue)));
		}

		public function mult($f)
		{
			return new Color( array('red' => ($this->red * $f), 'green' => ($this->green * $f), 'blue' => ($this->blue * $f)));
		}
	}

?>
