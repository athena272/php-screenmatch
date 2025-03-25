<?php

echo "Welcome to Screen Match!\n";

$quantityRatings = $argc - 1;
$movieName = "Top Gun - Maverick";
$releaseYear = 2022;
$sumMovieRating =  0;

for ($i = 1; $i <= $quantityRatings; $i++) {
    $sumMovieRating = $sumMovieRating + $argv[$i];
}

$movieRating = $sumMovieRating / $quantityRatings;
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

echo "The gender is: $movieGender";
