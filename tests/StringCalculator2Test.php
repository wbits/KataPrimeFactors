<?php

declare(strict_types = 1);

namespace PrimeFactors;

use PHPUnit\Framework\TestCase;

final class StringCalculator2Test extends TestCase
{
    public function testItReturnsZeroOnEmpty()
    {
        self::assertEquals(0, StringCalculator2::add(""));
    }

    public function testItReturnsTheNumber()
    {
        self::assertEquals(1, StringCalculator2::add("1"));
    }

    public function testItSumsCommaDelimitedNumbers()
    {
        self::assertEquals(3, StringCalculator2::add("1,2"));
    }

    public function testItSumsNewLineDelimitedNumbers()
    {
        self::assertEquals(3, StringCalculator2::add("1\n2"));
    }

    public function testItSumsThreeNumbersDelimitedEitherWay()
    {
        self::assertEquals(6, StringCalculator2::add("1\n2,3"));
    }

    public function testItThrowsAnExceptionWhenTheStringContainsANegativeNumber()
    {
        $this->expectException(\InvalidArgumentException::class);

        StringCalculator2::add("-1");
    }

    public function testItIgnoresNumbersGreaterThanAThousand()
    {
        self::assertEquals(1, StringCalculator2::add("1, 1001"));
    }

    public function testASingleCharacterInTheFirstLineCanBeDefinedAsDelimiter()
    {
        self::assertEquals(3, StringCalculator2::add("//|\n1|2"));
    }

    public function testItAcceptsAMultiCharacterDelimiterWhenItIsProvidedInSquareBrackets()
    {
        self::assertEquals(3, StringCalculator2::add("//[foo]\n1foo2"));
    }

    public function testItAcceptsDelimitersOnMultipleLines()
    {
        self::assertEquals(10, StringCalculator2::add("//[foo]\n1foo2\n//[bar]\n3bar4"));
    }
}
