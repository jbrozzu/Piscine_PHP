<?php
	
	require_once 'Color.class.php';

	Class Vertex 
	{
		private $_x;
		private $_y;
		private $_z;
		private $_w;
		private $_color;
		public static $verbose = FALSE;
		
		public function getX()
		{
			return $this->_x;
		}

		public function getY()
		{
			return $this->_y;
		}

		public function getZ()
		{
			return $this->_z;
		}

		public function getW()
		{
			return $this->_w;
		}

		public function getColor()
		{
			return $this->_color;
		}

		public function setX($x)
		{
			$this->_x = $x;
		}

		public function setY($y)
		{
			$this->_y = $y;
		}

		public function setZ($z)
		{
			$this->_z = $z;
		}

		public function setW($w)
		{
			$this->_w = $w;
		}

		public function setColor(Color $color)
		{
			$this->_color = $color;
		}

		public function __construct(array $kwargs)
		{
			$this->setX(floatval($kwargs['x']));
			$this->setY(floatval($kwargs['y']));
			$this->setZ(floatval($kwargs['z']));
			if (array_key_exists('w', $kwargs))
				$this->setW(floatval($kwargs['w']));
			else
				$this->setW(1.0);
			if (array_key_exists('color', $kwargs))
				$this->setColor($kwargs['color']);
			else
				$this->setColor(new Color(array('red'=>255 , 'green'=>255, 'blue'=>255)));

			if (self::$verbose == TRUE)
				print $this." constructed\n";
			return ;
		}
		
		public function __destruct()
		{
			if (self::$verbose == TRUE)
				print$this." destructed\n";
			return ;
		}

		public function __toString()
		{	
			$X = number_format($this->getX(), 2, '.', '');
			$Y = number_format($this->getY(), 2, '.', '');
			$Z = number_format($this->getZ(), 2, '.', '');
			$W = number_format($this->getW(), 2, '.', '');
			$ret = "Vertex( x: ".$X.", y: ".$Y.", z:".$Z.", w:".$W;
			
			if (self::$verbose)
				$ret = $ret.", ".$this->getColor()." )";
			else
				$ret = $ret." )";
			
			return $ret;
		}
		
		public static function doc()
		{
			return file_get_contents("./Vertex.doc.txt");
		}

		
	}

?>