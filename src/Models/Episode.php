<?php

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