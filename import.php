<?php

$filePath = __DIR__ . '/movie.json';
if (file_exists($filePath)) {
    $fileContent = file_get_contents($filePath);
    $movieContent = json_decode($fileContent, true);
    var_dump($movieContent);
}

