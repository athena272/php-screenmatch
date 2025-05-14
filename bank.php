<?php

require __DIR__ . "/src/Models/Enum/AccountType.php";
require __DIR__ . "/src/Models/BankAccount.php";

echo "=== Welcome to the Bank System ===\n";
// Creating an account
$account = new BankAccount("Alice Johnson", AccountType::Checking);
// Deposit and Withdraw
$account->deposit(10_000); // R$100,00
$account->withdraw(2_500); // R$25,00
// Output account details
echo "Account Holder: " . $account->accountHolderName . "\n";
echo "Account Type: " . $account->type->name . "\n";
echo "Current Balance: R$ {$account->getBalance()} \n";
//echo "Current Balance: R$ " . number_format($account->getBalanceInCents() / 100, 2, ',', '.') . "\n";
// Check if account type has a fee
if ($account->type->hasFee()) {
    echo "⚠️  This account type has transaction fees.\n";
} else {
    echo "✅  This account type has no transaction fees.\n";
}