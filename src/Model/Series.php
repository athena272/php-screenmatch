<?php

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
}