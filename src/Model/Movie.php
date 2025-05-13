<?php

class Movie {
    private string $name;
    private int $releaseYear;
    private string $genre;
    private array $ratings = [];

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

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getReleaseYear(): int
    {
        return $this->releaseYear;
    }

    public function setReleaseYear(int $releaseYear): void {
        $this->releaseYear = $releaseYear;
    }

    public function getGenre(): string {
        return $this->genre;
    }

    public function setGenre(string $genre): void {
        $this->genre = $genre;
    }
}



