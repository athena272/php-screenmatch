<?php

namespace Screenmatch\Services;

use DivisionByZeroError;
use Screenmatch\Interfaces\Rateable;

class StarRatingConverter
{
    public function convert(Rateable $rateable): float
    {
        try {
            $rating = $rateable->average();
            // Perform the conversion

            return round($rating) / 2;
        } catch (DivisionByZeroError $error) {
            return 0;
        }
    }
}