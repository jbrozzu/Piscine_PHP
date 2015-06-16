#!/Usr/bin/php
<?PHP
	$i = 0;
	$str = implode(" ", $argv);
	$tab = explode (" ", $str);
	$len = (count($tab));
	$tab_char = array();
	$tab_int = array();
	$tab_symb = array();
	$tab_sort = array();
	foreach ($tab as $elem)
		if (($elem[0] >= 'a' && $elem[0] <= 'z') || ($elem[0] >= 'A'  &&  $elem[0] <= 'Z'))
			$tab_char[] = $elem;
	foreach ($tab as $elem)
		if (is_numeric($elem[0]))
			$tab_int[] = $elem;
	foreach ($tab as $elem)
		if (!is_numeric($elem[0]) && ($elem[0] < 'A' || ($elem[0] > 'Z' && $elem[0] < 'a') || $elem[0] > 'z') && $elem != "./ssap2.php")
			$tab_symb[] = $elem;
	sort($tab_char, SORT_STRING | SORT_FLAG_CASE);
	sort($tab_int, SORT_STRING | SORT_FLAG_CASE);
	sort($tab_symb, SORT_STRING | SORT_FLAG_CASE);
	$tab_sort = array_merge($tab_char, $tab_int, $tab_symb);
	$len = (count($tab_sort));
	while ($i < ($len - 1))
	{
		echo "$tab_sort[$i]";
		echo "\n";
		$i++;
	}
	echo "$tab_sort[$i]";
?>

