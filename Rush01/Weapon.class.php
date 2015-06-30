<?php

class Weapons
{
	private $_Name
    private $_Load;
    private $_Srange;
    private $_Mrange;
    private $_Lrange;
	private $_Area;
	public static $verbose = FALSE;

	public function __construct($kwargs)
	{
		$this->init($kwargs);
        if (self::$verbose == TRUE)
			echo "Weapon constructed.".PHP_EOL;
	}
	public function __destruct()
    {
        if (self::$verbose == TRUE)
			echo "Weapon destructed.".PHP_EOL;
    }


	public function init(array $kwarg)
	{
		$this->setName($kwarg['Name']);
		$this->setLoad($kwarg['Load']);
		$this->setSrange($kwarg['Srange']);
		$this->setMrange($kwarg['Mrange']);
		$this->setLrange($kwarg['Lrange']);
		$this->setArea($kwarg['Area']);
	}


	public function setName($elem)
	{
		$this->_Name = $elem;
	}
	public function setLoad($elem)
	{
		$this->_Load = $elem;
	}
	public function setSrange($elem)
	{
		$this->_Srange = $elem;
	}
	public function setMrange($elem)
	{
		$this->_Mrange = $elem;
	}
	public function setLrange($elem)
	{
		$this->_Lrange = $elem;
	}
	public function setArea($elem)
	{
		$this->_Area = $elem;
	}


	public function getName()
	{
		return $this->_Name;
	}
	public function getLoad()
	{
		return $this->_Load;
	}
	public function getSrange()
	{
		return $this->_Srange;
	}
	public function getMrange()
	{
		return $this->_Mrange;
	}
	public function getLrange()
	{
		return $this->_Lrange;
	}
	public function getArea()
	{
		return $this->_Area;
	}



	public static function doc()
	{
		return file_get_contents("./Weapons.doc.txt");
	}
}
/*
	$Gun_1 = new Gun(array('Name' => 'Macro canon', 'Load' => 0, 'Srange' => 10, 'Mrange' => 20, 'Lrange' => 30, 'Area' => 3));
	$Gun_2 = new Gun(array('nom' => 'Lance navale', 'Load' => 3, 'Srange' => 30, 'Mrange' => 60, 'Lrange' => 90, 'Area' => 1));
*/
?>