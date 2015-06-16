#!/Usr/bin/php
<?PHP
$nbr = 0;
while (1)
{
	echo "Entrez un nombre: ";
	$fd = fopen("php://stdin", "r");
	$nbr = fgets($fd);
	$nbr = trim($nbr, " \n\t");
	if (feof($fd))
		break ;
	if (!is_numeric($nbr))
		echo "'$nbr' n'est pas un chiffre\n";
	else if ($nbr % 2 == 0)
		echo "Le chiffre $nbr est Pair\n";
	else
		echo "Le chiffre $nbr est Impair\n";
}
echo "\n";
?>