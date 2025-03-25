<?php

echo "Welcome to Screen Match!\n";

$movieName = "Top Gun - Maverick";
$releaseYear = $argv[1] ?? 2022;
$sumMovieRating =  9 + 6 + 8 + 7.5 + 5;
$movieRating = $sumMovieRating / 5;
$isIncludedOnPlan = true;

echo "Movie name: " . $movieName . "\n";
echo "Release year: $releaseYear\n";
echo "Movie rating: $movieRating\n";

//Código omitido
if ($releaseYear > 2022) {
    echo "Esse filme é um lançamento";
} elseif($releaseYear > 2020 && $releaseYear <= 2022) {
    echo "Esse filme ainda é novo";
} else {
    echo "Esse filme não é um lançamento";
}

