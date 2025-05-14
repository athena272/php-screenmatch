<?php

namespace ScreenMatch\Interfaces;

interface Rateable
{
    public function rate(float $rating): void;

    public function average(): float;
}