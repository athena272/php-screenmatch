<?php

use ScreenMatch\Models\Series;
use ScreenMatch\Enum\Genre;
use ScreenMatch\Models\Episode;
use ScreenMatch\Services\StarRatingConverter;

require 'autoload.php';

$series = new Series('Series name', 2024, Genre::Action, 7, 20, 30);
$episode = new Episode($series, 'Piloto', 1);

try {
    $episode->rate(45);
    $episode->rate(-35);

    $conversor = new StarRatingConverter();
    echo $conversor->convert($episode);
} catch (Exception $e) {
    echo $e->getMessage();
}
