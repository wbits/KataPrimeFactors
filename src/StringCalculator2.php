<?php

declare(strict_types = 1);

namespace PrimeFactors;

final class StringCalculator2
{
    public static function add(string $text): int
    {
        $splitPattern = '\\n';
        $delimiterList = [','];

        if (strpos($text, '//') !== false) {
            preg_match_all('/\/\/\[?([^\]]+)\]?\\n/', $text, $matches);
            $delimiterList = array_map('preg_quote', $matches[1]);
        }
        foreach ($delimiterList as $delimiter) {
            $splitPattern .= sprintf('|%s', $delimiter);
        }

        $stringParts = mb_split($splitPattern, $text);
        $numbers = array_map([self::class, 'convertToInteger'], $stringParts);
        $negativeNumbers = array_filter($numbers, [self::class, 'isNegative']);
        if (count($negativeNumbers)) {
            $message = sprintf('The following numbers are not allowed: %s', self::numbersToString(...$negativeNumbers));
            throw new \InvalidArgumentException($message);
        }

        $positiveNumbers = array_diff($numbers, $negativeNumbers);
        $numbersSmallerThanThousand = array_filter($positiveNumbers, [self::class, 'isNotBiggerThanThousand']);

        return (int) array_sum($numbersSmallerThanThousand);
    }

    public static function convertToInteger(string $string)
    {
        return (int) $string;
    }

    public static function isNegative(int $number): bool
    {
        return $number < 0;
    }

    public static function isNotBiggerThanThousand(int $number): bool
    {
        return $number < 1001;
    }

    public static function numbersToString(int ...$numbers)
    {
        return implode(', ', $numbers);
    }
}

