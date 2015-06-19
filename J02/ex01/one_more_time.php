#!/usr/bin/php
<?PHP
	if ($argc < 2)
		exit;
	
	date_default_timezone_set('Europe/Paris');
	$date = $argv[1];
	$date = explode(" ", $date);
	if ($date[0] != "lundi" && $date[0] != "Lundi" && $date[0] != "mardi" &&
		$date[0] != "Mardi" && $date[0] != "mercredi" && $date[0] != "Mercredi" &&
		$date[0] != "jeudi" && $date[0] != "Jeudi" && $date[0] != "vendredi" &&
		$date[0] != "Vendredi" && $date[0] != "samedi" && $date[0] != "Samedi" &&
		$date[0] != "dimanche" && $date[0] != "Dimanche")
	{
		echo "Wrong Format\n";
		exit;
	}
	$year = $date[3];
	if (!is_numeric($year)/* || strlen($year) != 4 || $year < 1970*/)
	{
		echo "Wrong Format\n";
		exit;
	}
	$nbr = $date[1];
	if (!is_numeric($nbr) /*|| ($nbr > 31 && $date[2] == "Janvier") || ($nbr > 31 && $date[2] == "janvier") ||
		($nbr > 31 && $date[2] == "Mars") || ($nbr > 31 && $date[2] == "mars") || ($nbr > 31 && $date[2] == "Mai") ||
		($nbr > 31 && $date[2] == "mai") || ($nbr > 31 && $date[2] == "Juillet") || ($nbr > 31 && $date[2] == "juillet") ||
		($nbr > 31 && $date[2] == "Aout") || ($nbr > 31 && $date[2] == "aout") || ($nbr > 31 && $date[2] == "Octobre") ||
		($nbr > 31 && $date[2] == "octobre") || ($nbr > 31 && $date[2] == "Decembre") || ($nbr > 31 && $date[2] == "decembre") ||
		($nbr > 30 && $date[2] == "Avril") || ($nbr > 30 && $date[2] == "avril") || ($nbr > 30 && $date[2] == "Juin") ||
		($nbr > 30 && $date[2] == "juin") || ($nbr > 30 && $date[2] == "Septembre") || ($nbr > 30 && $date[2] == "septembre") ||
		($nbr > 30 && $date[2] == "Novembre") || ($nbr > 30 && $date[2] == "novembre") ||
		($nbr > 29 && $date[2] == "fevrier" && ($year % 4) == 0) || ($nbr > 29 && $date[2] == "Fevrier" && ($year % 4) == 0) ||
		($nbr > 28 && $date[2] == "fevrier" && ($year % 4) > 0) || ($nbr > 28 && $date[2] == "Fevrier" && ($year % 4) > 0) ||
		strlen($nbr) != 2*/)
	{
		echo "Wrong Format\n";
		exit;
	}
	if ($date[2] == "Janvier" || $date[2] == "janvier")
		$month = 1;
	elseif ($date[2] == "Fevrier" || $date[2] == "fevrier")
		$month = 2;
	elseif ($date[2] == "Mars" || $date[2] == "mars")
		$month = 3;
	elseif ($date[2] == "Avril" || $date[2] == "avril")
		$month = 4;
	elseif ($date[2] == "Mai" || $date[2] == "mai")
		$month = 5;
	elseif ($date[2] == "Juin" || $date[2] == "juin")
		$month = 6;
	elseif ($date[2] == "Juillet" || $date[2] == "juillet")
		$month = 7;
	elseif ($date[2] == "Aout" || $date[2] == "aout")
		$month = 8;
	elseif ($date[2] == "Septembre" || $date[2] == "septembre")
		$month = 9;
	elseif ($date[2] == "Octobre" || $date[2] == "octobre")
		$month = 10;
	elseif ($date[2] == "Novembre" || $date[2] == "novembre")
		$month = 11;
	elseif ($date[2] == "Decembre" || $date[2] == "decembre")
		$month = 12;
	else
	{
		echo "Wrong Format\n";
		exit;
	}
	
	$time = explode(":", $date[4]);
	if (/*$time[0] < 0 || $time[0] > 24 || $time[1] < 0 || $time[1] > 59 || $time[2] < 0 || $time[2] > 59 ||
		strlen($time[0]) != 2 || strlen($time[1]) != 2 || strlen($time[2]) != 2 ||*/ !is_numeric($time[0]) ||
		!is_numeric($time[1]) || !is_numeric($time[2]))
	{
		echo "Wrong Format\n";
		exit;
	}
	$hour = $time[0];
	$min = $time[1];
	$sec = $time[2];
	$unix_time = mktime($hour, $min, $sec, $month, $nbr, $year);
	echo "$unix_time\n";
?>