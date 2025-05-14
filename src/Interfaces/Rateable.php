<?php

interface Rateable
{
    public function rate(float $rating): void;

    public function average(): float;
}