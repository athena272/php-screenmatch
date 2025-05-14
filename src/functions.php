<?php

require __DIR__ . '/Models/Movie.php';
function displayReleaseMessage(int $year): void
{
    if ($year > 2022) {
        echo "This movie is a new release\n";
    } elseif ($year > 2020 && $year <= 2022) {
        echo "This movie is still recent\n";
    } else {
        echo "This movie is not a new release\n";
    }
}
function isIncludedInPlan(bool $isPrime, int $releaseYear) : string {
    return ($isPrime || $releaseYear < 2020) ? "Yes" : "No";
}

function createMovie(string $name, int $year, float $rating, string $genre) : Movie {

    $movie = new Movie();
    $movie->name = $name;
    $movie->year = $year;
    $movie->rating = $rating;
    $movie->genre = $genre;
    return $movie;

//    return [
//        "name" => $name,
//        "year" => $year,
//        "rating" => $rating,
//        "genre" => $genre,
//    ];
}
