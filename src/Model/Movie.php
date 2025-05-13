<?php

class Movie {
    private array $ratings;

    public function __construct(public readonly string $name, public readonly int $releaseYear, public readonly string $genre)
    {
        $this->ratings = [];
    }

    function rate(float $rating): void {
        $this->ratings[] = $rating;
    }

    function average(): float {
        $sum = array_sum($this->ratings);
        $count = count($this->ratings);

        return $sum / $count;
    }
}



