<?php

namespace ScreenMatch\Enum;

enum AccountType
{
    case Checking;
    case Savings;
    case Student;
    case Investment;

    public function hasFee(): bool
    {
        return match ($this) {
            AccountType::Checking,
            AccountType::Investment => true,

            AccountType::Savings,
            AccountType::Student => false,
        };
    }
}
