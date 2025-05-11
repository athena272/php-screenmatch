<?php

$grades = [8.5, 9.2, 7.8, 9.0, 8.8];
rsort($grades);
echo "The three biggest grades are: $grades[0], $grades[1], $grades[2]\n";

$string = "Vinicius Dias,1997,Programador";
var_dump(explode(",", $string));

function sortString(array $array): array
{
    sort($array);
    return $array;
}

$array = array("banana", "abacaxi", "laranja", "uva");
$sortedArray = sortString($array);
echo "Array ordenado: ";
print_r($sortedArray);