<?php

declare(strict_types=1);

namespace PrimeFactors;

final class StringCalculator
{
    public static function add(string $numbers): int
    {
        $lines = explode("\n", $numbers);

        $delimiter = ',';
        $firstLine = $lines[0];
        $result = 0;

        if (substr($firstLine, 0, 2) === '//') {
            $delimiter = substr($firstLine, 2, 1);
        }

        foreach ($lines as $line)
        {
            $parts = explode($delimiter, $line);
            foreach ($parts as $number) {
                $intNumber = (int) $number;

                if ($intNumber < 0) {
                    throw new \InvalidArgumentException($number);
                }
                $result += $intNumber;
            }
        }

        return $result;
    }
}

