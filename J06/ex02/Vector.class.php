<?php
	
	require_once 'Color.class.php';
	require_once 'Vertex.class.php';

	Class Vector 
	{
		private $_x;
		private $_y;
		private $_z;
		private $_w = 0.0;
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

		public function __construct(array $kwargs)
		{
			if (array_key_exists('orig', $kwargs))
			{
				$orig = $kwargs['orig'];
				$this->_x = $kwargs['dest']->getX() - $orig->getX();
				$this->_y = $kwargs['dest']->getY() - $orig->getY();
				$this->_z = $kwargs['dest']->getZ() - $orig->getZ();
			}
			else
			{
				$orig = new Vertex(array('x' => 0.0, 'y' => 0.0, 'z' => 0.0));
				$this->_x = $kwargs['dest']->getX();
				$this->_y = $kwargs['dest']->getY();
				$this->_z = $kwargs['dest']->getZ();
			}
				

			if (self::$verbose == TRUE)
				print $this." constructed\n";
			return ;
		}
		
		public function __destruct()
		{
			if (self::$verbose == TRUE)
				print $this." destructed\n";
			return ;
		}

		public function magnitude() 
		{
			 return sqrt($this->getX() * $this->getX() + $this->getY() * $this->getY() + $this->getZ() * $this->getZ());
		}

		public function normalize()
		{
        	return (new Vector( array( 'dest' => new Vertex( array( 'x' => $this->getX() / $this->magnitude(),'y' =>$this->getY() /$this->magnitude(),'z' =>$this->getZ() /$this->magnitude())))));
		}

		public function add(Vector $rhs)
		{
			return (new Vector( array('dest'=> new Vertex( array('x' => $this->getX() + $rhs->getX(), 'y' => $this->getY() + $rhs->getY(), 'z' => $this->getZ() + $rhs->getZ())))));
		}

		public function sub(Vector $rhs)
		{
			return (new Vector( array('dest'=> new Vertex( array('x' => $this->getX() - $rhs->getX(), 'y' => $this->getY() - $rhs->getY(), 'z' => $this->getZ() - $rhs->getZ())))));
		}

		public function opposite()
		{
			return (new Vector( array('dest' => new Vertex(array('x' => $this->getX() * -1, 'y' => $this->getY() * -1, 'z' => $this->getZ() * -1)))));
		}

		public function scalarProduct($k)
		{
			return (new Vector( array('dest' => new Vertex( array( 'x' => $this->getX() * $k, 'y' => $this->getY() * $k, 'z' => $this->getZ() * $k)))));
		}

		public function dotProduct(Vector $rhs)
		{
			return ($this->getX() * $rhs->getX() + $this->getY() * $rhs->getY() + $this->getZ() * $rhs->getZ());
		}

		public function cos(Vector $rhs)
		{
			return (($this->dotProduct($rhs)) / (sqrt(($this->getX() * $this->getX() + $this->getY() * $this->getY() + $this->getZ() * $this->getZ()) * ($rhs->getX() * $rhs->getX() + $rhs->getY() * $rhs->getY() + $rhs->getZ() * $rhs->getZ()))));
		}

		public function crossProduct(Vector $rhs)
		{
			return (new Vector(array('dest' => (new Vertex (array('x' => $this->getY() * $rhs->getZ() - $this->getZ() * $rhs->getY(),'y' =>  $this->getZ() * $rhs->getX() - $this->getX() * $rhs->getZ(), 'z' => $this->getX() * $rhs->getY() - $this->getY() * $rhs->getX()))))));
		}

		public function __toString()
		{
			$X = number_format($this->getX(), 2, '.', '');
			$Y = number_format($this->getY(), 2, '.', '');
			$Z = number_format($this->getZ(), 2, '.', '');
			$W = number_format($this->getW(), 2, '.', '');

			return "Vector( x:".$X.", y:".$Y.", z:".$Z.", w:".$W." )";
		}
		
		public static function doc()
		{
			return file_get_contents("./Vector.doc.txt");
		}

		
	}

?>