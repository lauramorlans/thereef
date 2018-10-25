<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>
<body>

	<?php 
	echo '<a href='.base_url().'Accueil>Retour a la page d\'accueil</a></br>';

		if ($this->session->userdata('user_rank') == 'Admin') {
		echo '<a href='.base_url().'Ajout_articles>Ajouter un article</a></br>';
	}
	foreach($results as $row){
		echo '</br><a href='.base_url().'Fiche_art>'.$row->art_nom.'</a>';
	}
?>

</body>
</html>