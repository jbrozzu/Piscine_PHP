<?php

include_once "IFighter.class.php";

	class NightsWatch
	{

		private $soldiers = array();
	
		public function recruit($i)
		{
			$this->soldiers[] = $i;
		}
		public function fight()
		{
			$j = 0;
			while ($this->soldiers[$j])
			{
				if ($this->soldiers[$j] instanceof IFighter)
				{
					$this->soldiers[$j]->fight();
				}
				$j++;
			}
		}
	}

?>