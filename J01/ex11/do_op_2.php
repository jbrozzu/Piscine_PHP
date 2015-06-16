#!/Usr/bin/php
<?PHP

	if ($argc != 2)
	{
		echo "Incorrect Parameters\n";
		exit ;
	}
	$argv[1] = preg_replace('/\s+/', '', $argv[1]);
	$i = 0;
	$op1 = array();
	$op2 = array();
	$len = strlen($argv[1]);
	if (!is_numeric($argv[1][$i]))
	{
		echo "Syntax Error\n";
		exit ;
	}
	while ($i < $len)
	{
		if (is_numeric($argv[1][$i]))
		{
			$op1[] = $argv[1][$i];
			$i++;
		}
		else
			break ;
	}
	$sign = $argv[1][$i];
	if ($sign != "+" && $sign != "-" && $sign != "*" && $sign != "/" && $sign != "%")
	{
		echo "Syntax Error\n";
		exit ;
	}
	$i++;
	while ($i < $len)
	{
		if (is_numeric($argv[1][$i]))
		{
			$op2[] = $argv[1][$i];
			$i++;
		}
		else
		{
			echo "Syntax Error\n";
			exit ;
		}
	}

	$op1 = implode($op1);
	$op2 = implode($op2);

	if ($sign == "+")
	{
		$result = $op1 + $op2;
		echo "$result\n";
	}
	elseif ($sign == "-")
	{
		$result = $op1 - $op2;
		echo "$result\n";
	}
	elseif ($sign == "*")
	{
		$result = $op1 * $op2;
		echo "$result\n";
	}
	elseif ($sign == "/")
	{
		$result = $op1 / $op2;
		echo "$result\n";
	}
	elseif ($sign == "%")
	{
		$result = $op1 % $op2;
		echo "$result\n";
	}

?>