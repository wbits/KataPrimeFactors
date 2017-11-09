<?php

declare(strict_types = 1);

namespace PrimeFactors;

final class Chop
{
    public static function chop(int $n, array $list): int
    {
        if (! in_array($n, $list)) {
            return -1;
        }

        return array_search($n, $list);
    }
}

