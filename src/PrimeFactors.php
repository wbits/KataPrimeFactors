<?php

declare(strict_types = 1);

namespace PrimeFactors;

final class PrimeFactors
{
    /**
     * @param int $number
     * @return int[]
     */
    public static function generate(int $number): array
    {
        $primes = [];

        if ($number === 2) {
            $primes[] = 2;
        }

        return $primes;
    }
}

