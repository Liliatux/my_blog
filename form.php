<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajout post</title>
</head>
<body>
	<h1>Ajout d'un article</h1>
		<form action="submit_post.php" method="POST">
			<label for="title">Titre de votre article</label><input type="text" id="title" name="title">
			<br>
			<label for="content">Contenu</label><textarea name="content" id="content" cols="30" rows="10">Je ne me rappel plus bien des formulaires php</textarea>
			<br>
			<label for="author">Nom de l'auteur</label><input type="text" id="author" name="author" value="Lilia">
			<br>
			<label for="created_at">Date de création</label><input type="date" id="created_at" name="created_at" value="01/02/2017">
			<br>
			<input type="submit" value="Envoyer">
		</form>
</body>
</html>