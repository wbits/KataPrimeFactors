<?php

declare(strict_types=1);

namespace PrimeFactors;

final class StringCalculator
{
    private $negatives = [];
    private $delimiter = ',';
    private $total = 0;

    public function add(string $numbers): int
    {
        $this->setDelimiter($numbers);
        array_map([$this, 'addNumbersInAString'], explode("\n", $numbers));

        if ($this->hasNegatives()) {
            $message = implode(', ', self::intArrayToStringArray($this->negatives));
            throw new \InvalidArgumentException($message);
        }

        return $this->total;
    }

    private function addNumbersInAString(string $line)
    {
        $numbers = explode($this->delimiter, $line);
        foreach ($numbers as $number) {
            $this->addNumber((int) $number);
        }
    }

    private function addNumber(int $number)
    {
        if ($number < 0) {
            $this->addNegative($number);
            return;
        }

        $this->addPositive($number);
    }

    private function addPositive(int $number)
    {
        if ($number > 1000) {
            return;
        }

        $this->total += $number;
    }

    private function addNegative(int $number)
    {
        $this->negatives[] = $number;
    }

    private function setDelimiter(string $numbers)
    {
        if (substr($numbers, 0, 2) === '//') {
            $this->delimiter = substr($numbers, 2, 1);
        }
    }

    private function hasNegatives()
    {
        return (bool) count($this->negatives);
    }

    /**
     * @param int[] $integers
     * @return string[]
     */
    private static function intArrayToStringArray(array $integers): array
    {
        return array_map(function (int $number) {
            return (string) $number;
        }, $integers);
    }
}

