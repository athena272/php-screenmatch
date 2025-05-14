<?php

$balance = 1_000;
$holder = 'Guilherme R. Alves';

echo "*************\n";
echo "Account holder: $holder\n";
echo "Current balance: \$$balance\n";
echo "*************\n";

do {
    echo "1. Check current balance\n";
    echo "2. Withdraw amount\n";
    echo "3. Deposit amount\n";
    echo "4. Exit\n";

    $option = (int)fgets(STDIN);

    switch ($option) {
        case 1:
            echo "*************\n";
            echo "Account holder: $holder\n";
            echo "Current balance: \$$balance\n";
            echo "*************\n";
            break;

        case 2:
            echo "How much would you like to withdraw?\n";
            $amountToWithdraw = (float)fgets(STDIN);
            if ($amountToWithdraw > $balance) {
                echo "Insufficient funds\n";
            } else {
                $balance -= $amountToWithdraw;
                echo "Withdraw successful\n";
            }
            break;

        case 3:
            echo "How much would you like to deposit?\n";
            $amountToDeposit = (float)fgets(STDIN);
            $balance += $amountToDeposit;
            echo "Deposit successful\n";
            break;

        case 4:
            echo "Goodbye!\n";
            break;

        default:
            echo "Invalid option\n";
            break;

    }
} while ($option != 4);