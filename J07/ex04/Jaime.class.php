<?php

include_once('Lannister.class.php');

class Jaime extends Lannister
{
	public function sleepWith($f) 
	{
		if ($f instanceof Lannister)
		{
			if (get_class($f) == "Cersei")
				print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
			if (get_class($f) == "Tyrion")
				print("Not even if I'm drunk".PHP_EOL);
		}
		else
			print("Let's do this".PHP_EOL);
	}
}

?>