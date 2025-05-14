<?php

namespace ScreenMatch\Models;

use ScreenMatch\Interfaces\Rateable;
use ScreenMatch\Traits\WithRating;

class Episode implements Rateable
{
    use WithRating;

    public function __construct(
        public readonly Series $series,
        public readonly string $name,
        public readonly int    $episodeNumber,
    )
    {
    }
}