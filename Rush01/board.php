<?php
	include_once("Dice.class.php");
	$dice = new dice(1);
?>
<html>
	<head>
		<title>The board</title>
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script language="JavaScript"> 
                 var de = 0, n = 0, suite = '', max = 6, res = 0;
                 function fixermax()
                 {
                     max=prompt("Combien de fois voulez vous lancer le dé ?", 2)
                      if (max > 6)
                          {
                              max = 6
                          }  
                          lancer(max)
                 }
                 function lancer(n)
                 { 
                     res = 0;
                     for (i = 1 , suite = ''; i <= n ; i++ )
                      {
                        de = Math.ceil( 6 * Math.random())
                        res += parseInt(de);
                        if (n == 1)
                            suite = suite + de.toString() + ' ';
                        else
                        {
                            if (i <= n - 1)
                            {
                                suite = suite + de.toString() + '+'
                            }
                            else
                                suite = suite + de.toString() + ' ';
                        }
                            
                      }
                      if (n == 1)
                           document.monForm.monChamp.value = res;
                       else
                           document.monForm.monChamp.value = suite + " = " + res;
                       return res;
                 }
            </script>
		<link rel="stylesheet" type="text/css" href="board.css">
	</head>
	
	<body>

		<h1>- WARS IS LIFE -</h1>
		<div id = "divde">  
            <h3 id = "titlede" > Lancer le Dé !</h3>
            <form name="monForm">
                 <input type="button" value="Lancer" onClick="lancer(1)">
                 <input type="button" value="Lancer plusieurs" onClick="fixermax()">
                 <form name="monForm">
                 <input type="text" name="monChamp" size="20">
            </form>  
        </div>

        <div id="info">

        </div>

		<script type="text/javascript">

		<?php
			include_once("Ship.class.php");
			$ship1 = new ship( array('name' => "\"Destructor\"", 'posX' => 54 , 'posY' => 10, 'sprite' => "\"cruseship.png\"", 'hull' => 15, 'power' => 5, 'speed' => 10, 'flex' => 2, 'shield' => 100));
			$ship2 = new ship( array('name' => "\"Anhiliator\"", 'posX' => 100 , 'posY' => 40, 'sprite' => "\"ship2.gif\"", 'hull' => 5, 'power' => 3, 'speed' => 15, 'flex' => 3, 'shield' => 150));
		?>

		var nlt = "&#013;";
		var nlh = "<br>";
		var X = <?php print $ship1->getPosX() ; ?> ;
		var Y = <?php print $ship1->getPosY() ; ?> ;
		var URL = <?php echo $ship1->getSprite(); ?> ;
		var Name = <?php echo $ship1->getName(); ?> ;
		var hull1 = <?php echo $ship1->getHull(); ?> ;
		var power1 = <?php echo $ship1->getPower(); ?> ;
		var speed1 = <?php echo $ship1->getSpeed(); ?> ;
		var flex1 = <?php echo $ship1->getFlex(); ?> ;
		var shield1 = <?php echo $ship1->getShield(); ?> ;
		var X2 = <?php print $ship2->getPosX() ; ?> ;
		var Y2 = <?php print $ship2->getPosY() ; ?> ;
		var URL2 = <?php echo $ship2->getSprite(); ?> ;
		var Name2 = <?php echo $ship2->getName(); ?> ;
		var hull2 = <?php echo $ship2->getHull(); ?> ;
		var power2 = <?php echo $ship2->getPower(); ?> ;
		var speed2 = <?php echo $ship2->getSpeed(); ?> ;
		var flex2 = <?php echo $ship2->getFlex(); ?> ;
		var shield2 = <?php echo $ship2->getShield(); ?> ;
		
		function info1() {
		var info1 = ["Name : " + Name + nlh + "Hull : " + hull1 + nlh + "Power : " + power1 + nlh + "Speed : " + speed1 + nlh + "Maneuvrability : " + flex1 + nlh + "Shield : " + shield1 + nlh];	
		document.getElementById('info').innerHTML = info1; }

		function info2() {

		var info2 = ["Name : " + Name2 + nlh + "Hull : " + hull2 + nlh + "Power : " + power2 + nlh + "Speed : " + speed2 + nlh + "Maneuvrability : " + flex2 + nlh + "Shield : " + shield2 + nlh];	
		document.getElementById('info').innerHTML = info2; }			
		

			document.write("<div id=\"main\">")
			for (var j = 0; j < 100; j++) 
			{
				document.write("<div id=\"line\">")
				for (var i = 0; i < 150; i++)
				{
					if ( X == i && Y == j)
					{
						document.write("<div class=\"case\"><img id= \"vaisseau\" src=" + URL + " title =" + Name + " onClick =info1()></img></div>");
					}
					else if ( X2 == i && Y2 == j)
					{
						document.write("<div class=\"case\"><img id= \"vaisseau\" src=" + URL2 + " title =" + Name2 + " onClick =info2()></img></div>");
					}	
					else if ((i == 5 && j == 9) || (i == 120 && j == 50) || (i == 75 && j == 25)) 
						document.write("<div class=\"case\"><img id= \"roc\" src=\"./roc.png\"></img></div>");
					else if (i == 80 && j == 80) 
						document.write("<div class=\"case\"><img id= \"roc2\" src=\"./roc.png\"></img></div>");
					else if ((i == 130 && j == 15) || (i == 20 && j == 35)) 
						document.write("<div class=\"case\"><img id= \"roc3\" src=\"./roc.png\"></img></div>");
					else if (i == 10 && j == 75) 
						document.write("<div class=\"case\"><img id= \"station\" src=\"./station.png\"></img></div>");
					else 
						document.write("<div class=\"case\"></div>");
			  	}
				document.write("<br></div>");
			}
			document.write("</div>");
			document.write("</br>");


		</script>


		</br>
		</br>

</body>
</html>
