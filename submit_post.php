<?php 
	$title = $_POST['title'];
	$content = $_POST['content'];
	$author = $_POST['author'];
	$date = $_POST['created_at'];

	if(empty($title) || empty($author) || empty($content)){
		include_once 'form.php';
		echo "Erreur le titre, l'auteur ou le contenu n'est pas rempli";
	} else{
		echo "Article envoyé";
	}
?>