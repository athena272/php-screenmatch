<?php


$name = "Alura";
echo "BEFORE\n";

try {
    echo "$name\n";
} catch (RuntimeException $exception) {
    echo "CATCHING\n";
}

echo "AFTER\n";