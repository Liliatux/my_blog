<?php
	require_once 'vendor/autoload.php';
	
	ORM::configure('mysql:host=localhost;dbname=my_blog');
	ORM::configure('username', 'root');
	ORM::configure('password', 'simplonco');

	$posts = ORM::for_table('posts')->find_many();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog Lilia</title>
</head>
<body>
	<h1>Mon blog</h1>
	<form action="form.php" method="POST"><input type="submit" value="Ajouter un article"></form>
	<table>
		<tr>
			<th>Titre</th>
			<th>Contenu</th>
			<th>Auteur</th>
			<th>Date de création</th>
			<th>Edition</th>
		</tr>
		<?php foreach($posts as $post):  ?>
			<tr>
				<td><?= $post->title; ?></td>
				<td><?= $post->content; ?></td>
				<td><?= $post->author; ?></td>
				<td><?= $post->created_at; ?></td>
				<td><form action="form.php?id=<?= $post->id; ?>" method="POST"><input type="hidden" name="id" value="<?= $post->id; ?>"><input type="submit" value="Editer"></form></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>