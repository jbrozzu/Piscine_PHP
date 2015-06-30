<?php
	include_once("Dice.class.php");
?>
<html>
	<head>
		<title>The board</title>
		<link rel="stylesheet" type="text/css" href="board.css">

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
			coucou

		</div>

		<script type="text/javascript">



			var x1 = 50;
			var y1 = 85;
			var x2 = 30;
			var y2 = 45;
			document.write("<div id=\"main\">")
			for (var j = 0; j < 100; j++) 
			{
				document.write("<div id=\"line\">")
				for (var i = 0; i < 150; i++) 
				{
					if ((j == x1 && i == y1) || (j == x2 && i == y2))
						document.write("<div class=\"case\"><img id= \"vaisseau\" src=\"./vaisseau.png\"></img></div>");
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
