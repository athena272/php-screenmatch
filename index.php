<?php

require __DIR__ . '/src/Model/Genre.php';
require __DIR__ . '/src/Model/Movie.php';

echo "Welcome to Screen Match!\n";

$movie = new Movie("Thor: Ragnarok", 2021, Genre::Superhero, 180);
$movie->rate(10);
$movie->rate(10);
$movie->rate(5);
$movie->rate(5);

var_dump($movie);

echo $movie->average();