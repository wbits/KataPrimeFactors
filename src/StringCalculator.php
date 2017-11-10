<?php

declare(strict_types=1);

namespace PrimeFactors;

final class StringCalculator
{
    public static function add(string $numbers): int
    {
        $parts = explode(',', $numbers);
        $result = 0;

        foreach ($parts as $number) {
            $result += (int) $number;
        }

        return $result;
    }
}

