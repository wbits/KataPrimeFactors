<?php

declare(strict_types=1);

namespace PrimeFactors;

final class StringCalculator
{
    public static function add(string $numbers): int
    {
        $lines = explode("\n", $numbers);
        $result = 0;

        foreach ($lines as $line)
        {
            $parts = explode(',', $line);
            foreach ($parts as $number) {
                $result += (int) $number;
            }
        }

        return $result;
    }
}

