<?php

class Movie {
    public string $name;
    public int $releaseYear;
    public string $genre;
    public array $ratings = [];

    function rate(float $rating): void {
        $this->ratings[] = $rating;
    }

    function average(): float {
        $sum = array_sum($this->ratings);
        $count = count($this->ratings);

        return $sum / $count;
    }
}



