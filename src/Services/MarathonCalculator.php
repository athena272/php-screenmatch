<?php

namespace Screenmatch\Services;

use ScreenMatch\Models\Title;

class MarathonCalculator
{
    private int $totalDuration = 0;

    public function include(Title $title): void
    {
        $this->totalDuration += $title->durationInMinutes();
    }

    public function getTotalDuration(): int
    {
        return $this->totalDuration;
    }
}