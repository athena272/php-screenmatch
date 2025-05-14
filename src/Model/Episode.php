<?php

class Episode implements Rateable
{
    private array $ratings;
    public function __construct(
        public readonly Series $series,
        public readonly string $name,
        public readonly int $episodeNumber,
    ) {
        $this->ratings = [];
    }
    public function rate(float $rating): void
    {
        $this->ratings[] = $rating;
    }

    public function average(): float
    {
        $sum = array_sum($this->ratings);
        $count = count($this->ratings);

        return $count > 0 ? $sum / $count : 0.0;
    }
}