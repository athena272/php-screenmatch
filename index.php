<?php

require __DIR__ . '/src/Model/Genre.php';
require __DIR__ . '/src/Model/Title.php';
require __DIR__ . '/src/Model/Movie.php';
require __DIR__ . '/src/Model/Series.php';

echo "Welcome to Screen Match!\n";

$movie = new Movie("Thor: Ragnarok", 2021, Genre::Superhero, 180);
$movie->rate(10);
$movie->rate(10);
$movie->rate(5);
$movie->rate(5);

$series = new Series('Lost', 2007, Genre::Drama, 10, 20, 30);

var_dump($movie);

echo $movie->average() . "\n";

echo $series->releaseYear . "\n";

$series->rate(8);
echo $series->average() . "\n";