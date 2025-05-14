<?php

require __DIR__ . '/src/Interface/Rateable.php';
require __DIR__ . '/src/Model/Enum/Genre.php';
require __DIR__ . '/src/Model/Title.php';
require __DIR__ . '/src/Model/Movie.php';
require __DIR__ . '/src/Model/Series.php';
require __DIR__ . '/src/Model/Episode.php';
require __DIR__ . '/src/Services/MarathonCalculator.php';
require __DIR__ . '/src/Services/StarRatingConverter.php';

echo "Welcome to Screen Match!\n";

$movie = new Movie("Thor: Ragnarok", 2021, Genre::Superhero, 180);
$movie->rate(10);
$movie->rate(10);
$movie->rate(5);
$movie->rate(5);

$series = new Series('Lost', 2007, Genre::Drama, 10, 20, 30);
$episode = new Episode($series, "pilot episode", 1);

var_dump($movie);

echo $movie->average() . "\n";

echo $movie->getGender() . "\n";

echo $series->releaseYear . "\n";

$series->rate(8);
echo $series->average() . "\n";
echo $series->getGender() . "\n";

$calculator = new MarathonCalculator();
$calculator->include($movie);
echo "Movie \"{$movie->name}\" duration: " . $calculator->getTotalDuration() . " min\n";
$calculator->include($series);
echo "Series \"{$series->name}\" duration: " . $calculator->getTotalDuration() . " min\n";

$conversor = new StarRatingConverter();
echo $conversor->convert($series);