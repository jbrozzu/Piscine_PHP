<?php

class House
{
	public function introduce()
	{
		print("House ".static::getHouseName()." of ".static::getHouseSeat()." : \"".static::getHouseMotto()."\"\n");
	}
}

?>