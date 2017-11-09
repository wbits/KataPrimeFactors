<?php

declare(strict_types=1);

namespace PrimeFactors;

use PHPUnit\Framework\TestCase;

final class ChopTest extends TestCase
{
    public function testOne()
    {
        self::assertEquals(-1, Chop::chop(3, []));
    }

    public function testTwo()
    {
        self::assertEquals(-1, Chop::chop(3, [1]));
    }

    public function testThree()
    {
        self::assertEquals(0, Chop::chop(1, [1]));
    }
}

