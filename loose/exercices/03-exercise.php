<?php

$array = [1, 2, 2, 3, 4, 4, 5];
$removeDuplicates = array_unique($array);
echo implode(', ', $removeDuplicates);

echo "\n";
$grades = [10, 5.5, 3.8, 7.5, 6, 6.1, 5.9];
foreach ($grades as $grade) {
    $isApproved = $grade > 6 ? 'approved' : 'rejected';

    echo "This student was approved with a grade $grade.\n";
}

$bankAccount = [
    'holder' =>'Vinicius Dias',
    'balance' => 100
];

echo "Bank account, $bankAccount[holder] has R$$bankAccount[balance]\n";

$family = ['Alice', 'Bob', 'Charlie'];
$family[] = 'Davi';

echo implode(', ', $family);