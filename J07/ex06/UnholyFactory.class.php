<?php
	include_once "Fighter.class.php";

	class UnholyFactory
	{
		public $tab = array();

		public function absorb($s)
		{	
			
			if ($s instanceof Fighter)
			{
				$type = $s->getType();
				if (in_array($s, $this->tab))
					echo "(Factory already absorbed a fighter of type ".$type.")\n";
				else
				{
					echo "(Factory absorbed a fighter of type ".$type.")\n";
					$this->tab[$type] = $s;
				}
			}
			else
				echo "(Factory can't absorb this, it's not a fighter)\n";
		}
		
		public function fabricate($rf)
		{
			if ($this->tab[$rf] != 0)
	 		{
	        	echo "(Factory fabricates a fighter of type ".$rf.")\n";
	        	return (new $this->tab[$rf]);
	         }
	      	echo "(Factory hasn't absorbed any fighter of type ".$rf.")\n";
		}
	}
?>