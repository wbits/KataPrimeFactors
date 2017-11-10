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

    public function testItSupportsNewLines()
    {
        self::assertEquals(6, StringCalculator::add("1\n2,3"));
    }

    public function testItSupportsCustomDelimiters()
    {
        self::assertEquals(3, StringCalculator::add("//;\n1;2"));
    }

    public function testItThrowsAnExceptionWhenANegativeNumberIsPassed()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('-1');

        StringCalculator::add('-1');
    }

    public function testItThrowsAnExceptionWithAllNegativeNumbersInTheMessage()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('-1, -2');

        StringCalculator::add('-1,-2,3');
    }
}

