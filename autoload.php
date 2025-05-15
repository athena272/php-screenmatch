<?php

spl_autoload_register(function (string $className) {
    $path = str_replace('ScreenMatch', 'src', $className) . '.php';
    $path = str_replace("\\", DIRECTORY_SEPARATOR, $path);

    require_once __DIR__ . DIRECTORY_SEPARATOR . $path;
});