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

        if ($number > 1) {
            $candidate = 2;
            while ($number % $candidate === 0) {
                $primes[] = $candidate;
                $number /= $candidate;
            }
        }

        if ($number > 1) {
            $primes[] = $number;
        }

        return $primes;
    }
}

