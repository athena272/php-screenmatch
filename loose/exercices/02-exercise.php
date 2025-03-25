<?php

for ($contador = 1; $contador < 100; $contador++) {
    if ($contador % 2 !== 0) {
        echo $contador . "\n";
    }
}

$altura = 1.73;
$peso = 65;
$imc = $peso / $altura ** 2;

if ($imc < 18.5) {
    echo "Abaixo do peso\n";
} elseif ($imc >= 18.5 && $imc < 25) {
    echo "Peso normal\n";
} elseif ($imc >= 25 && $imc < 30) {
    echo "Excesso de peso\n";
} else {
    echo "Obesidade\n";
}


$hora = 10;

if ($hora > 6 && $hora < 12) {
    echo "Bom dia";
} elseif ($hora >= 12 && $hora < 18) {
    echo "Boa tarde";
} else {
    echo "Boa noite";
}