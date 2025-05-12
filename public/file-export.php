<?php

$movie = [
  "name" => $_POST['name'],
  "year" => $_POST['year'],
  "rating" => $_POST['rating'],
  "genre" => $_POST['genre'],
];

file_put_contents('movie.json', json_encode($movie));

header('Location: /success.php?movie=' . $movie['name']);