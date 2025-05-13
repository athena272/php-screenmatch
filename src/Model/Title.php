<?php

class Title {
    private array $ratings;

    public function __construct(public readonly string $name, public readonly int $releaseYear, public readonly Genre $genre) {
        $this->ratings = [];
    }

    public function rate(float $rating): void {
        $this->ratings[] = $rating;
    }

    public function average(): float{
        $sum = array_sum($this->ratings);
        $count = count($this->ratings);

        return $count > 0 ? $sum / $count : 0.0;
    }
}
