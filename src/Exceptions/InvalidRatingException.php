<?php

namespace Screenmatch\Exceptions;

use InvalidArgumentException;

class InvalidRatingException extends InvalidArgumentException
{
    public function __construct()
    {
        parent::__construct('Rating must be between 0 and 10');
    }
}