#!/Usr/bin/php
<?PHP
	$i = 1;
	$str = implode(" ", $argv);
	$tab = explode (" ", $str);
	$len = (count($tab));
	sort($tab, SORT_STRING);
	while ($i < $len) 
	{
		echo "$tab[$i]\n";
		$i++;
	}
?>