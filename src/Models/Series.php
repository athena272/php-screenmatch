<?php

namespace ScreenMatch\Models;

use ScreenMatch\Models\Enum\Genre;

class Series extends Title
{
    public function __construct(
        string              $name,
        int                 $releaseYear,
        Genre               $genre,
        public readonly int $seasons,
        public readonly int $episodesPerSeason,
        public readonly int $minutesPerEpisode
    )
    {
        parent::__construct($name, $releaseYear, $genre);
    }

    #[Override]
    public function durationInMinutes(): int
    {
        return ($this->seasons * $this->episodesPerSeason * $this->minutesPerEpisode);
    }
}