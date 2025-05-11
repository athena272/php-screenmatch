<?php

function displayReleaseMessage($year)
{
    if ($year > 2022) {
        echo "This movie is a new release\n";
    } elseif ($year > 2020 && $year <= 2022) {
        echo "This movie is still recent\n";
    } else {
        echo "This movie is not a new release\n";
    }
}

function isIncludedInPlan($isPrime, $releaseYear) {
    return $isPrime || $releaseYear < 2020;
}

echo "Welcome to Screen Match!\n";

$movieName = "Top Gun - Maverick";
$releaseYear = 2022;

$numberOfRatings = $argc - 1;
$ratings = [];

for ($i = 1; $i < $argc; $i++) {
    $ratings[] = (float) $argv[$i];
}

$movieRating = array_sum($ratings) / $numberOfRatings;
$includedInPlan = isIncludedInPlan(true, $releaseYear);

echo "Movie name: " . $movieName . "\n";
echo "Movie rating: $movieRating\n";
echo "Release year: $releaseYear\n";

$genre = match ($movieName) {
    "Top Gun - Maverick" => "action",
    "Thor: Ragnarok" => "superhero",
    "The Hangover" => "comedy",
    default => "unknown genre",
};

echo "The movie genre is: $genre\n";

$movie = [
    "name" => "Thor: Ragnarok",
    "year" => 2021,
    "rating" => 7.8,
    "genre" => "superhero",
];

echo $movie["year"];