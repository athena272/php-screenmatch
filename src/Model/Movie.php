<?php

class Movie {
    private array $ratings;

    public function __construct(private string $name, private int $releaseYear, private string $genre)
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

    public function getName(): string
    {
        return $this->name;
    }

    public function getReleaseYear(): int
    {
        return $this->releaseYear;
    }

    public function getGenre(): string {
        return $this->genre;
    }
}



