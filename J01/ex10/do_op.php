#!/Usr/bin/php
<?PHP
	

	if ($argc != 4)
	{
		echo "Incorrect Parameters\n";
		exit ;
	}
	$argv[1] = trim($argv[1]);
	$argv[2] = trim($argv[2]);
	$argv[3] = trim($argv[3]);
	if ($argv[2] == "+")
	{
		$result = $argv[1] + $argv[3];
		echo "$result\n";
	}
	elseif ($argv[2] == "-")
	{
		$result = $argv[1] - $argv[3];
		echo "$result\n";
	}
	elseif ($argv[2] == "*" || $argv[2] == "do_op.php")
	{
		$result = $argv[1] * $argv[3];
		echo "$result\n";
	}
	elseif ($argv[2] == "/")
	{
		$result = $argv[1] / $argv[3];
		echo "$result\n";
	}
	elseif ($argv[2] == "%")
	{
		$result = $argv[1] % $argv[3];
		echo "$result\n";
	}
?>