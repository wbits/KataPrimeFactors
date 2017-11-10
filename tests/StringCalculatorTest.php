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
}

