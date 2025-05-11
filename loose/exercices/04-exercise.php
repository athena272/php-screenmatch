<?php

function mathOperation(int $number1, int $number2, string $operation): float
{
    return match ($operation) {
        'add' => $number1 + $number2,
        'subtract' => $number1 - $number2,
        'multiply' => $number1 * $number2,
        'divide' => $number2 !== 0 ? $number1 / $number2 : throw new Exception("Division by zero"),
        default => throw new InvalidArgumentException("Unsupported operation: $operation"),
    };
}

// Examples of usage with descriptive output
echo "=== Math Operation Examples ===\n\n";
$num1 = 10;
$num2 = 0;

$operations = [
    'module' => "Module $num1 by $num2",
    'divide' => "Dividing $num1 by $num2 gives: ",
    'add' => "Adding $num1 and $num2 gives: ",
    'subtract' => "Subtracting $num2 from $num1 gives: ",
    'multiply' => "Multiplying $num1 by $num2 gives: ",
];

foreach ($operations as $operation => $message) {
    try {
        $result = mathOperation($num1, $num2, $operation);
        echo $message . $result . "\n";
    } catch (Exception $e) {
        echo "Error (" . $operation . "): " . $e->getMessage() . "\n";
    }
}


