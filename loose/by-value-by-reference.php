<?php

function doubleByValue(float $value): float
{
    $value *= 2;
    return $value;
}

function doubleByReference(float &$value): float
{
    $value *= 2;
    return $value;
}

$originalValue = 2;
$newValue = doubleByValue($originalValue);
echo "Original: $originalValue\n";
echo "New: $newValue\n";

$newValue = doubleByReference($originalValue);
echo "Original: $originalValue\n";
echo "New: $newValue\n";