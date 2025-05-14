<?php

namespace Screenmatch\Services;

use Screenmatch\Interfaces\Rateable;

class StarRatingConverter
{
    public function convert(Rateable $rateable): float
    {
        $rating = $rateable->average();
        // Perform the conversion

        return round($rating) / 2;
    }
}