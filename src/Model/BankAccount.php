<?php

class BankAccount
{
    private int $balance;

    public function __construct(
        public readonly string      $accountHolderName,
        public readonly AccountType $type,
    )
    {
        $this->balance = 0;
    }

    public function deposit(int $amount): void
    {
        if ($amount <= 0) {
            throw new InvalidArgumentException("Deposit amount must be positive.");
        }

        $this->balance += $amount;
    }

    public function withdraw(int $amount): void
    {
        if ($amount <= 0) {
            throw new InvalidArgumentException("Withdrawal amount must be positive.");
        }

        if ($amount > $this->balance) {
            throw new RuntimeException("Insufficient balance for withdrawal.");
        }

        $this->balance -= $amount;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }
}