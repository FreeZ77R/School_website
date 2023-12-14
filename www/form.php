<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Formulaire</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link href="https://fonts.googleapis.com/css?family=Raleway:300&display=swap" rel="stylesheet">
	</head>
 
	<body>
		<ul>
			<img src="Image/logo.png" alt="logo site" class="logo">
			<input type="search" id="search"   class="search" name="search" placeholder="Rechercher">
			<li class="accueil"><a href="index.html">ACCUEIL</a></li>
			<li ><a href="form.html">AVIS</a></li>
			<li ><a href="contact.html" >CONTACT</a></li>
			<li class="titre">LYCÉE ÉTIENNE BÉZOUT</li>
		</ul>
		
		<form action="form.html" method="post" class="formulaire">
		<div class="form">
		<p><i>Complétez le formulaire. Les champs marqués par </i><em>*</em> sont <em>obligatoires</em></p><br><br>
			<fieldset>
				<legend>Contact</legend>
					<br><br>
					<!-- email -->
					<label for="email" >Email <em>*</em></label>
					<input type="email" id="email"  class="email" required="" name="email"><br><br><br><br>
					
					<!-- nom-->
					<label for="nom">Nom</label>
					<input type="text" id="nom"   class="nom" name="nom"><br><br><br><br>

					<!-- mdp -->
					<label for="mdp">Mot de passe <em>*</em></label>
					<input type="password" id="mdp" class="mdp" required="" name="mdp"><br><br><br><br>
			</fieldset>
			<fieldset>
				<legend>Informations personnelles</legend><br><br>
					<!--classe-->
					<label for="classe">Niveau d'étude</label>
					<select name="classe" id="classe">
						<option value="seconde">Seconde</option>
						<option value="premier">Première</option>
						<option value="terminal">Terminale</option>
					</select><br><br><br><br>
				
				<!-- age-->
					<label for="age">Age <em>*</em></label>
					<input type="number" id="age" class="age" min="1" max="99" name="age" required=""><br><br><br><br>

				<!-- sexe-->
					<label for="sexe">Sexe</label>
					<select name="sexe" id="sexe">
						<option value="homme">Homme</option>
						<option value="femme">Femme</option>
						<option value="autre">Autres</option>
					</select><br><br><br><br>
			</fieldset>
			<fieldset>
				<legend>Avis</legend>
				<!--avis-->
					<br><br>
					<label for="idee">Choses à améliorer <em>*</em></label>
					<textarea id="idee" required="" class="idee" name="idee" placeholder="Idées intéressantes, choses à améliorer..."></textarea>
					<br><br><br>
			</fieldset>
			<input class="bouton" type="submit" id="envoyer" name="envoyer" value="Envoyer"/>
	
		</form>
		<?php
		$dossier = 'donnees.csv';
		$existe = 0;

		if (file_exists($dossier)) 
		{
		   $existe = 1;
		}

		$fichier = fopen($dossier, "a+");

		if(!$existe)
		{
		   fputcsv($fichier, array("email; mdp; age\n"));
		}

		fputcsv($fichier, array($_POST['email'].";".$_POST['mdp'].";".$_POST['age'].";\n"));
		?>
	</body>
</html>