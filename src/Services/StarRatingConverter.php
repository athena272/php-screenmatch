<?php

class StarRatingConverter
{
    public function convert(Rateable $rateable): float
    {
        $rating = $rateable->average();
        // Perform the conversion

        return round($rating) / 2;
    }
}