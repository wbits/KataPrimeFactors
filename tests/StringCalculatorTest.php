<?php

declare(strict_types = 1);

namespace PrimeFactors;

use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    public function testItReturnsZeroWhenEmptyStringIsPassed()
    {
        self::assertEquals(0, StringCalculator::add(''));
    }

    public function testItReturnsTheNumberInAString()
    {
        self::assertEquals(1, StringCalculator::add('1'));
    }

    public function testItAddsMultipleNumbersInAString()
    {
        self::assertEquals(3, StringCalculator::add('1,2'));
    }
}

