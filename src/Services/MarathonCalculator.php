<?php

class MarathonCalculator
{
    private int $totalDuration = 0;

    public function include(Title $title): void
    {
        if ($title instanceof Movie) {
            $this->totalDuration += $title->durationInMinutes;
        } elseif ($title instanceof Series) {
            $this->totalDuration += $title->seasons * $title->episodesPerSeason * $title->minutesPerEpisode;
        }
    }

    public function getTotalDuration(): int
    {
        return $this->totalDuration;
    }
}