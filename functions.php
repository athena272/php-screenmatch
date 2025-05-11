<?php
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

function createMovie(string $name, int $year, int $rating, string $genre) : array {
    return [
        "name" => $name,
        "year" => $year,
        "rating" => $rating,
        "genre" => $genre,
    ];
}
