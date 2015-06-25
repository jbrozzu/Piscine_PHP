<?php

class Targaryen
{
	public function resistsfire(){
	}
	public function getBurned() 
	{
		if (static::resistsFire() === True)
			return "emerges naked but unharmed";
		else
			return "burns alive";
	}
}

?>