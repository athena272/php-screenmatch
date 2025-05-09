<?php

echo "Welcome to Screen Match!\n";

$someNames = ['Bob', 'Carol'];
$names = ['Alice', 'Daniel', 'Elisa', ...$someNames];
echo $someNames;

$quantityRatings = $argc - 1;
$movieName = "Top Gun - Maverick";
$releaseYear = 2022;
$ratings = [];
$sumMovieRating = 0;

for ($i = 1; $i <= $quantityRatings; $i++) {
     $ratings[] =  (float) $argv[$i] ;
}

//foreach ($ratings as $rate) {
//    $sumMovieRating += $rate;
//}

var_dump($ratings);

$movieRating = array_sum($ratings) / count($ratings);
$isIncludedOnPlan = true;

echo "Movie name: " . $movieName . "\n";
echo "Release year: $releaseYear\n";
echo "Movie rating: $movieRating\n";

//Código omitido
if ($releaseYear > 2022) {
    echo "Esse filme é um lançamento\n";
} elseif($releaseYear > 2020 && $releaseYear <= 2022) {
    echo "Esse filme ainda é novo\n";
} else {
    echo "Esse filme não é um lançamento\n";
}

$movieGender = match ($movieName) {
    "Top Gun - Maverick" => "action",
    "Avengers" => "superhero",
    "Hangover" => "comedy",
    default => "unknown",
};

echo "The gender is: $movieGender\n";

$movie = [
    "name" => "Thor: Ragnarok",
    "year" => 2021,
    "grade" => 7.8,
    "gender" => "superhero"
];

echo $movie['name'];