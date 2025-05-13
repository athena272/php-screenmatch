<?php

require __DIR__ . '/src/Model/Movie.php';

echo "Welcome to Screen Match!\n";

$movie = new Movie();
$movie->setName("Thor: Ragnarok");
$movie->setReleaseYear(2021);
$movie->setGenre("superhero");
$movie->rate(10);
$movie->rate(10);
$movie->rate(5);
$movie->rate(5);

var_dump($movie);

echo $movie->average();