<?php

echo "Welcome to Screen Match!\n";

$movieName = "Top Gun - Maverick";
$releaseYear = $argv[1];
$sumMovieRating =  9 + 6 + 8 + 7.5 + 5;
$movieRating = $sumMovieRating / 5;
$isIncludedOnPlan = true;

echo "Movie name: " . $movieName . "\n";
echo "Release year: $releaseYear\n";
echo "Movie rating: $movieRating";