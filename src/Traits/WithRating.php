<?php

namespace Screenmatch\Traits;

use InvalidArgumentException;

trait WithRating
{
    private array $ratings = [];

    /**
     * @throws InvalidArgumentException when score is negative or bigger than 10
     */
    public function rate(float $score): void
    {
        if ($score < 0 || $score > 10) {
            throw new InvalidArgumentException('Score must be between 0 and 10');
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
