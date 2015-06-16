#!/Usr/bin/php
<?PHP
	function ft_is_sort($tab1)
	{
		$tab2 = $tab1;
		sort($tab2, SORT_STRING);
		if ($tab2 == $tab1)
			return 1;
		else
			return 0;
	}
?>