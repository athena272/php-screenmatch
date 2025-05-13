<?php

class Series
{
    private array $ratings;

    public function __construct(
        public readonly string $name,
        public readonly int    $releaseYear,
        public readonly Genre  $genre,
        public readonly int $seasons,
        public readonly int $episodesPerSeason,
        public readonly int $minutesPerEpisode,
    )
    {
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

        return $sum / $count;
    }
}