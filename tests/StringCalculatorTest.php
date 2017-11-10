<?php

declare(strict_types = 1);

namespace PrimeFactors;

use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    /**
     * @var StringCalculator
     */
    private $calculator;

    protected function setUp()
    {
        $this->calculator = new StringCalculator();
    }

    public function testItReturnsZeroWhenEmptyStringIsPassed()
    {
        self::assertEquals(0, $this->calculator->add(''));
    }

    public function testItReturnsTheNumberInAString()
    {
        self::assertEquals(1, $this->calculator->add('1'));
    }

    public function testItAddsMultipleNumbersInAString()
    {
        self::assertEquals(3, $this->calculator->add('1,2'));
    }

    public function testItSupportsNewLines()
    {
        self::assertEquals(6, $this->calculator->add("1\n2,3"));
    }

    public function testItSupportsCustomDelimiters()
    {
        self::assertEquals(3, $this->calculator->add("//;\n1;2"));
    }

    public function testItThrowsAnExceptionWhenANegativeNumberIsPassed()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('-1');

        $this->calculator->add('-1');
    }

    public function testItThrowsAnExceptionWithAllNegativeNumbersInTheMessage()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('-1, -2');

        $this->calculator->add('-1,-2,3');
    }

    public function testItIgnoresNumbersBiggerThanThousand()
    {
        self::assertEquals(2, $this->calculator->add('2,1001'));
    }
}

