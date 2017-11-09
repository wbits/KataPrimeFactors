<?php

declare(strict_types = 1);

namespace PrimeFactors;

use PHPUnit\Framework\TestCase;

final class PrimeFactorsTest extends TestCase
{
    public function testOne()
    {
        self::assertEquals([], PrimeFactors::generate(1));
    }

    public function testTwo()
    {
        self::assertEquals([2], PrimeFactors::generate(2));
    }

    public function testThree()
    {
        self::assertEquals([3], PrimeFactors::generate(3));
    }

    public function testFour()
    {
        self::assertEquals([2,2], PrimeFactors::generate(3));
    }
}

