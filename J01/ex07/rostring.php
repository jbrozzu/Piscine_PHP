#!/Usr/bin/php
<?PHP
	if ($argc == 1)
		exit ;
	$i = 1;
	$tab = explode (" ", $argv[1]);
	$len = (count ($tab));
	if ($len == 1)
	{
		echo "$tab[0]\n";
		exit ;
	}
	while ($i < ($len)) 
	{
		echo "$tab[$i] ";
		$i++;
	}
	echo "$tab[0]\n";
?>