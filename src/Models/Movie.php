<?php

namespace ScreenMatch\Models;

use Override;
use ScreenMatch\Enum\Genre;

class Movie extends Title
{

    public function __construct(
        string              $name,
        int                 $releaseYear,
        Genre               $genre,
        public readonly int $durationInMinutes
    )
    {
        parent::__construct($name, $releaseYear, $genre);
    }

    #[Override]
    public function durationInMinutes(): int
    {
        return $this->durationInMinutes;
    }
}



