<?php

class Title
{
    private array $ratings;
//    private static float $minRating = 7.5;
    private const float MIN_RATING = 7.5;

    public function __construct(public readonly string $name, public readonly int $releaseYear, public readonly Genre $genre)
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

        return $count > 0 ? $sum / $count : 0.0;
    }

    public function durationInMinutes()
    {
        return 0;
    }

    public function isGood(): bool
    {
        return $this->average() > self::MIN_RATING;
    }
}
