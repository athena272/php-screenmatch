<?php

trait WithRating
{
    private array $ratings = [];

    public function rate(float $score): void
    {
        $this->ratings[] = $score;
    }

    public function average(): float
    {
        $sum = array_sum($this->ratings);
        $count = count($this->ratings);

        return $count > 0 ? $sum / $count : 0.0;
    }
}
