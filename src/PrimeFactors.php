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
            while ($number%2 === 0) {
                $primes[] = 2;
                $number /= 2;
            }
            if ($number > 1) {
                $primes[] = $number;
            }
        }

        return $primes;
    }
}

