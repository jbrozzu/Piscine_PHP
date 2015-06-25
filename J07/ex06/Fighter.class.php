<?php

abstract class Fighter
{

	private $type;
	function __construct($fighter)
	{
		$this->type = $fighter;
	}
	
	public function getType()
	{
		return $this->type;
	}

	abstract public function fight($cible);
}
?>