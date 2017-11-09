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

        for ($candidate = 2; $number > 1; $candidate++) {
            for (; $number % $candidate === 0; $number /= $candidate) {
                $primes[] = $candidate;
            }
        }

        return $primes;
    }
}

