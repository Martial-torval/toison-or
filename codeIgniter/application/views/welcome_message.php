<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Ajouter un membre</title>
	<link rel="stylesheet" type="text/css" href="../../codeIgniter/assets/css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<h1>Bonjour Jason</h1>

	<h2>Ajouter un(e) Argonaute</h2>
	<?php form_open('');?>
	<label for="memberName">Nom de votre Argonaute</label> <br>
	<input type="text" name="memberName" placeholder="Charalampos"> <br>
	<input type="submit" name="btn-submit" value ="Valider"> 

		

</body>
</html>