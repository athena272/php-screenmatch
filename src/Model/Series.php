<?php

class Series extends Title
{
    private array $ratings;

    public function __construct(
        public readonly string $name,
        public readonly int    $releaseYear,
        public readonly Genre  $genre,
        public readonly int $seasons,
        public readonly int $episodesPerSeason,
        public readonly int $minutesPerEpisode,
    )
    {
        parent::__construct($name, $releaseYear, $genre);
    }
}