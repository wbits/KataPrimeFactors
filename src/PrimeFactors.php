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
        $candidate = 2;

        while ($number > 1) {
            for (; $number % $candidate === 0; $number /= $candidate) {
                $primes[] = $candidate;
            }
            $candidate++;
        }

        if ($number > 1) {
            $primes[] = $number;
        }

        return $primes;
    }
}

