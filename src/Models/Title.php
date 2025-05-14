<?php

namespace ScreenMatch\Models;

use ScreenMatch\Interfaces\Rateable;
use ScreenMatch\Traits\WithRating;
use ScreenMatch\Models\Enum\Genre;

abstract class Title implements Rateable
{
    use WithRating;

    //private static float $minRating = 7.5;
    private const float MIN_RATING = 7.5;

    public function __construct(
        public readonly string $name,
        public readonly int    $releaseYear,
        public readonly Genre  $genre
    )
    {
    }

    public function getGender(): string
    {
        return $this->genre->name;
    }

    abstract public function durationInMinutes(): int;

    public function isGood(): bool
    {
        return $this->average() > self::MIN_RATING;
    }
}
