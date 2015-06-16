#!/Usr/bin/php
<?PHP
	function ft_split($str)
	{
		$str = trim($str);
		$str = preg_replace('/\s+/', ' ', $str);
		$my_tab = explode(" ", $str);
		sort($my_tab, SORT_STRING);
		return $my_tab;
	}
?>