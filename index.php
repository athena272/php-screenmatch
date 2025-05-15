<?php

spl_autoload_register(function (string $className) {
    $path = str_replace('ScreenMatch', 'src', $className) . '.php';
    $path = str_replace("\\", '/', $path);

    require_once $path;
});

use ScreenMatch\Models\{
    Movie, Series, Episode
};

use ScreenMatch\Enum\Genre;

use ScreenMatch\Services\{
    StarRatingConverter, MarathonCalculator
};

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