<?php

declare(strict_types = 1);

namespace PrimeFactors;

final class StringCalculator2
{
    public static function add(string $text): int
    {
        $splitPattern = '\\n|,';

        if (mb_strpos($text, '//') !== false) {
            preg_match_all('/\/\/\[?([^\]]+)\]?\\n/', $text, $matches);
            $splitPattern = '\\n|' . implode('|', array_map('preg_quote', $matches[1]));
        }

        $allNumbers = array_map([self::class, 'convertToInteger'], mb_split($splitPattern, $text));
        $negativeNumbers = array_filter($allNumbers, [self::class, 'isNegative']);
        $positiveNumbers = array_diff($allNumbers, $negativeNumbers);

        if (count($negativeNumbers)) {
            $message = sprintf('The following numbers are not allowed: %s', self::numbersToString(...$negativeNumbers));
            throw new \InvalidArgumentException($message);
        }

        return (int) array_sum(array_filter($positiveNumbers, [self::class, 'isNotBiggerThanThousand']));
    }

    private static function convertToInteger(string $string): int
    {
        return (int) $string;
    }

    private static function isNegative(int $number): bool
    {
        return $number < 0;
    }

    private static function isNotBiggerThanThousand(int $number): bool
    {
        return $number < 1001;
    }

    private static function numbersToString(int ...$numbers): string
    {
        return implode(', ', $numbers);
    }
}

