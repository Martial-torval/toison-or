<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Ajouter un membre</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
</head>
<body class="css-grid">
	<header>
		<h1>Quête de la toison d'or</h1>
	</header>

	<section>
	<article class="article-form">
		<h2>Ajouter un(e) Argonaute</h2>

				<?php
				 $formClass = array("class" => "form");
				 echo form_open('Argonautes/addArgonaute', $formClass);
				?>
				<input type="text" name="argonauteName" placeholder="Nom" class="input-name" value="<?php echo set_value('argonauteName');?>">
				<textarea name="commentaire" rows="10" cols="75" class="comment" placeholder="Commentaire" value="<?php echo set_value('commentaire');?>"></textarea>
				<input type="submit" name="btn-submit" class="input-submit" value="Valider">
					<?php echo validation_errors();?>
			</form>
				<?php form_close();?>

	</article>
</section>








	<article class="allArgonautes">
		<h2>Liste de l'équipage</h2>
				<?php
				echo('<table class="table-argonautes"><tr>');
				$i = 0;
				foreach( $argonaute as $value )
				{
				   $i++;
				   echo '<td>'.$value['nom'].'<br/>'.'<span class="commentaire_msg_style">'.$value['commentaire'].'</span></td>';
				   if($i % 3==0)
				   {
				      echo '</tr><tr>';
				   }
				}
				echo'</tr></table>';
?>
</table>

<!-- <table width="100%" border="1" cellspacing="1" cellpadding="5">
<tr>
<td>Ligne 1 colonne 1</td>
<td>Ligne 1 colonne 2</td>
<td>Ligne 2 colonne 2</td>
</tr>
<tr>
<td>Ligne 2 colonne 1</td>
<td>Ligne 2 colonne 2</td>
<td>Ligne 2 colonne 2</td>
</tr>
</table> -->

<!--TD = colonne & TR = lignes-->

	</article>
	<footer><span>Réalisé par Jason en Anthestérion de l'an 515 avant JC</span></footer>
</body>
</html>
