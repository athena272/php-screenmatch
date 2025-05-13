<?php

class BankAccount
{
    private int $balanceInCents;

    public function __construct(
        public readonly string $accountHolderName,
        public readonly AccountType $type,
    ) {
        $this->balanceInCents = 0;
    }

    public function deposit(int $amount): void
    {
        if ($amount <= 0) {
            throw new InvalidArgumentException("Deposit amount must be positive.");
        }

        $this->balanceInCents += $amount;
    }

    public function withdraw(int $amount): void
    {
        if ($amount <= 0) {
            throw new InvalidArgumentException("Withdrawal amount must be positive.");
        }

        if ($amount > $this->balanceInCents) {
            throw new RuntimeException("Insufficient balance for withdrawal.");
        }

        $this->balanceInCents -= $amount;
    }

    public function getBalanceInCents(): int
    {
        return $this->balanceInCents;
    }
}