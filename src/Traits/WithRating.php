<?php

namespace Screenmatch\Traits;

use ScreenMatch\Exceptions\InvalidRatingException;

trait WithRating
{
    private array $ratings = [];

    /**
     * @throws InvalidRatingException when score is negative or bigger than 10
     */
    public function rate(float $score): void
    {
        if ($score < 0 || $score > 10) {
            throw new InvalidRatingException();
        }

        $this->ratings[] = $score;
    }

    public function average(): float
    {
        $sum = array_sum($this->ratings);
        $count = count($this->ratings);

        return $count > 0 ? $sum / $count : 0.0;
    }
}
