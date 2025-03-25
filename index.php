<?php

echo "Welcome to Screen Match!\n";

$movieName = "Top Gun - Maverick";
$movieName = "Hangover";
$movieName = "Avengers";

$releaseYear = $argv[1] ?? 2022;
$sumMovieRating =  9 + 6 + 8 + 7.5 + 5;
$movieRating = $sumMovieRating / 5;
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
};

echo "The gender is: $movieGender";
