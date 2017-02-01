<?php 
	require_once 'vendor/autoload.php';
	
	ORM::configure('mysql:host=localhost;dbname=my_blog');
	ORM::configure('username', 'root');
	ORM::configure('password', 'simplonco');

	$id = $_POST['id'];
	$posts = ORM::for_table('posts')->find_one($id);
	$title = $posts->title;
	$content = $posts->content;
	$author = $posts->author;
	$date = $posts->created_at;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajout post</title>
</head>
<body>
	<h1>Ajout d'un article</h1>
		<form action="submit_post.php" method="POST">
			<input type="hidden" name="id" value="<?= $id; ?>">
			<label for="title">Titre de votre article</label><input type="text" id="title" name="title" value="<?= $title; ?>">
			<br>
			<label for="content">Contenu</label><textarea name="content" id="content" cols="30" rows="10"><?= $content; ?></textarea>
			<br>
			<label for="author">Nom de l'auteur</label><input type="text" id="author" name="author" value="<?= $author; ?>">
			<br>
			<input type="hidden" id="created_at" name="created_at" value="<?=  $date; ?>">
			<br>
			<input type="submit" value="Envoyer">
		</form>
</body>
</html>