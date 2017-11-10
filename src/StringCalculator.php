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
        array_map([$this, 'countLine'], explode("\n", $numbers));

        if ($this->hasNegatives()) {
            throw new \InvalidArgumentException(implode(', ', $this->negatives));
        }

        return $this->total;
    }

    private function countLine(string $line)
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
        }
        $this->total += $number;
    }

    private function addNegative(int $number)
    {
        $this->negatives[] = (string) $number;
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
}

