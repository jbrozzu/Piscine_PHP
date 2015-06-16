#!/usr/bin/php
<?PHP

$i = 2;
$key = $argv[1];
while($i < $argc)
{
	$tmp = explode(":", $argv[$i]);
	if ($tmp[0] == $key)
	{
		echo"$tmp[1]\n";
		exit ;
	}
	$i++;
}
?>


