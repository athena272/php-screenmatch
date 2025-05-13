<?php

class BankAccount
{
    private int $balanceInCents = 0;
    private string $accountHolderName;
    private string $accountNumber;

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

    public function setAccountHolderName(string $name): void
    {
        $this->accountHolderName = $name;
    }

    public function getAccountHolderName(): string
    {
        return $this->accountHolderName;
    }

    public function setAccountNumber(string $number): void
    {
        $this->accountNumber = $number;
    }

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }
}
