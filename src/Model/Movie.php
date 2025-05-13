<?php

class Movie {
    private string $name;
    private int $releaseYear;
    private string $genre;
    private array $ratings;

    public function __construct(string $name, int $releaseYear, string $genre)
    {
        $this->name = $name;
        $this->releaseYear = $releaseYear;
        $this->genre = $genre;
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



