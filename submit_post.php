<?php 
	$id = $_POST['id'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$author = $_POST['author'];
	$date = $_POST['created_at'];

	if(empty($title) || empty($author) || empty($content)){
		include_once 'form.php';
		echo "Erreur le titre, l'auteur ou le contenu n'est pas rempli";
	} 

	if(empty($id)){
		require_once 'index.php';
		$posts = ORM::for_table('posts')->create();
		$posts->title = $title;
		$posts->content = $content;
		$posts->author = $author;
		$posts->save();
		header('Location:index.php');
		exit;
	} else{
		require_once 'index.php';
		$posts = ORM::for_table('posts')->find_one($id);
		$posts->title = $title;
		$posts->content = $content;
		$posts->author = $author;
		$posts->save();
		header('Location:index.php');
		exit;
	}
?>