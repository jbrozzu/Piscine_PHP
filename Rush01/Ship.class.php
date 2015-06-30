<?php

class Ship {

	private $_name;
	private $_sizeX;
	private $_sizeY;
	private $_posX;
	private $_posY;
	private $_sprite;
	private $_hull;
	private $_power;
	private $_speed;
	private $_flex;
	private $_shield;
	private $_weapon;
	public static $verbose = False;
	
	public function __construct (array $kwargs) {
		if (array_key_exists('name', $kwargs))
            $this->_name = $kwargs['name'];
        else
            $this->_name = "cruseship";

        if (array_key_exists('sizeX', $kwargs))
            $this->_sizeX = $kwargs['sizeX'];
        else
            $this->_sizeX = 10;

        if (array_key_exists('sizeY', $kwargs))
            $this->_sizeY = $kwargs['sizeY'];
        else
            $this->_sizeY = 10;

        if (array_key_exists('posX', $kwargs))
            $this->_posX = $kwargs['posX'];
        else
            $this->_posX = 10;

        if (array_key_exists('posY', $kwargs))
            $this->_posY = $kwargs['posY'];
        else
            $this->_posY = 10;

        if (array_key_exists('sprite', $kwargs))
            $this->_sprite = $kwargs['sprite'];
        else
            $this->_sprite = "plop.png";

        if (array_key_exists('hull', $kwargs))
            $this->_hull = $kwargs['hull'];
        else
            $this->_hull = 10; 
        if (array_key_exists('power', $kwargs))
            $this->_power = $kwargs['power'];
        else
            $this->_power = 10;
        if (array_key_exists('speed', $kwargs))
            $this->_speed = $kwargs['speed'];
        else
            $this->_speed = 10;
        if (array_key_exists('flex', $kwargs))
            $this->_flex = $kwargs['flex'];
        else
            $this->_flex = 10;
        if (array_key_exists('shield', $kwargs))
            $this->_shield = $kwargs['shield'];
        else
            $this->_shield = 10;
        if (array_key_exists('weapon', $kwargs))
            $this->_weapon = $kwargs['weapon'];
        else
            $this->_weapon = "CANON A NEUTRON";
		return ;
	}

		public function getName()
		{
			return $this->_name;
		}

		public function getSiseX()
		{
			return $this->_sizeX;
		}

		public function getSiseY()
		{
			return $this->_sizeY;
		}

		public function getPosX()
		{
			return $this->_posX;
		}

		public function getPosY()
		{
			return $this->_posY;
		}

		public function getSprite()
		{
			return $this->_sprite;
		}

		public function getHull()
		{
			return $this->_hull;
		}

		public function getPower()
		{
			return $this->_power;
		}

		public function getSpeed()
		{
			return $this->_speed;
		}

		public function getFlex()
		{
			return $this->_flex;
		}

		public function getShield()
		{
			return $this->_shield;
		}

		public function getWeapon()
		{
			return $this->_weapon;
		}

}

?>