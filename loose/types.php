<?php

$a = '1';
$b = 1;

$igual = $a == $b; // A variável $igual será *true*, pois o PHP vai realizar algumas conversões de tipos
$identico = $a === $b; // A variável $identico será *false*, pois os tipos são diferentes.
$diferente = $a != $b; // A variável $diferente será *false*, pois o PHP vai realizar a conversão de tipo e comparar apenas o valor, e 1 não é diferente de 1.
$naoIdentico = $a !== $b; // A variável $naoIdentico será *true*, pois o texto '1' é não é idêntico ao número 1, ou seja, os tipos são diferentes.

echo "igual: " . $igual . "\n";
echo "identico: " . $identico . "\n";
echo "diferente: " . $diferente . "\n";
echo "naoIdentico: " . $naoIdentico . "\n";