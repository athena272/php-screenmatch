<?php
$jsonFileContent = file_get_contents('movie.json');
$movie = json_decode($jsonFileContent, true);
?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <title>Inserted Movie</title>
</head>
<body>
<h1>Success! Movie <?php echo $_GET['movie']; ?> added</h1>
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
