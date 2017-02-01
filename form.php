<?php 
	require_once 'vendor/autoload.php';
	
	ORM::configure('mysql:host=localhost;dbname=my_blog');
	ORM::configure('username', 'root');
	ORM::configure('password', 'simplonco');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajout post</title>
</head>
<body>
	<h1>Ajout d'un article</h1>
	<?php if(empty($_POST['id'])){ ?>
		<form action="submit_post.php" method="POST">
			<input type="hidden" name="id">
			<label for="title">Titre de votre article</label><input type="text" id="title" name="title">
			<br>
			<label for="content">Contenu</label><textarea name="content" id="content" cols="30" rows="10"></textarea>
			<br>
			<label for="author">Nom de l'auteur</label><input type="text" id="author" name="author">
			<br>
			<input type="hidden" id="created_at" name="created_at">
			<br>
			<input type="submit" value="Envoyer">
		</form>
	<?php } else{
		$posts = ORM::for_table('posts')->find_one($_POST['id']); ?>

		<form action="submit_post.php" method="POST">
			<input type="hidden" name="id" value="<?= $_POST['id']; ?>">
			<label for="title">Titre de votre article</label><input type="text" id="title" name="title" value="<?= $posts->title; ?>">
			<br>
			<label for="content">Contenu</label><textarea name="content" id="content" cols="30" rows="10"><?= $posts->content; ?></textarea>
			<br>
			<label for="author">Nom de l'auteur</label><input type="text" id="author" name="author" value="<?= $posts->author; ?>">
			<br>
			<input type="hidden" id="created_at" name="created_at" value="<?= $posts->created_at; ?>">
			<br>
			<input type="submit" value="Envoyer">
		</form>
	<?php } ?>
</body>
</html>