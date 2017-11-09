<?php

declare(strict_types = 1);

namespace PrimeFactors;

final class BinaryChop
{
    public static function chop(int $n, array $list): int
    {
        if (! in_array($n, $list)) {
            return -1;
        }

        return array_search($n, $list);
    }

    public static function chop2(int $n, array $list): int
    {
        $result = -1;
        $tries = 1;

        foreach ($list as $number) {
            if ($number !== $n) {
                $tries++;
                continue;
            }

            $result += $tries;
        }

        return $result;
    }
}

