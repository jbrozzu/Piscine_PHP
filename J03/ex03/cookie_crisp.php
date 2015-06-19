<?PHP

$tab = array();
$tab = $_GET;
$name = $tab["name"];
$value = $tab["value"];
$action = $tab["action"];

if ($action == "set")
	setcookie($name, $value);

if ($action == "get")
{	if ($_COOKIE[$name])
		echo $_COOKIE[$name]."\n";
}
	

if ($action == "del")
	setcookie($name, $_COOKIE[$name], time() - 3600);

?>
