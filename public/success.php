<?php
$jsonFileContent = file_get_contents('movie.json');
$movie = json_decode($jsonFileContent, true);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inserted Movie</title>
</head>
<body>
<h1>Sucesso! Filme <?php echo $_GET['movie']; ?> inserido</h1>
<h1><?= $movie['name']; ?></h1>
<dl>
    <dt>Release Year</dt>
    <dd><?= $movie['year']; ?></dd>

    <dt>Rating</dt>
    <dd><?= $movie['rating']; ?></dd>

    <dt>Genre</dt>
    <dd><?= $movie['genre']; ?></dd>
</dl>
</body>
</html>
