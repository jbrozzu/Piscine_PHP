<html>
	<head>
		<link rel="stylesheet" type="text/css" href="chupa.css">
		<link rel="icon" type="image/png" href="/img/logo.png">
		<title>Chupa Chups !</title>
	</head>
	<body bgcolor="#A69256">

<div class ="general">
	


	<header class="box">
		<img id="logo" src="/img/logo.png"></img>
		<h1 class="fontgrad">Chupa Chups !</h1>

	<div class="form_login">
		<form method="POST" action="login.php"> 
			Identifiant: <input type="text" name="login" placeholder="Login" value="" />

			Mot de passe: <input type="password" name="passwd" placeholder="Mot de passe" value="" />
			<input type="submit" name="submit" value="OK"/>
		</br>
			<a href="create.html">Créer un compte</a>
		</form>
	</div>


			<div class="buttons">
				<a href="
							
					<?PHP
							if ($_SESSION['loggued_on_user'] != "")
							{ 
					?>
								login.html
					<?PHP
							}
							else
							{
					?>
								index.php
					<?PHP
							}
					?>


				 " class="button"/>Accueil</a>
				<a href="#" class="button"/>Boutique</a>
				<a href="#" class="button"/>Panier</a>
				<!-- <a href="#" class="button"/>Login</a> -->
			</div>

	</header>
			<div class="container"/>
				<p id="lorem">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an 
						unknown printer took a galley of type and scrambled it to make a type specimen book. 
						It has survived not only five centuries, but also the leap into electronic typesetting, 
						remaining essentially unchanged. It was popularised in the 1960s with the release of 
						Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
						software like Aldus PageMaker including versions of Lorem Ipsum.</p>


			
				<iframe width="854" height="510" src="https://www.youtube.com/embed/HzG3XGYTgvQ" frameborder="0" allowfullscreen></iframe>
			</div>

	
	


	<footer>
		<p>plop</p1>
	</footer>


</div>



</body>
</html>


<!-- <a <head></head>ref="phpinfo.php">PHP info</a></body></html> -->
