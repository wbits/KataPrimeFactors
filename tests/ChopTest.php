<?php

declare(strict_types=1);

namespace PrimeFactors;

use PHPUnit\Framework\TestCase;

final class ChopTest extends TestCase
{
    public function testOne()
    {
        self::assertEquals(-1, BinaryChop::chop(3, []));
        self::assertEquals(-1, BinaryChop::chop(3, [1]));
        self::assertEquals(0, BinaryChop::chop(1, [1]));

        self::assertEquals(0, BinaryChop::chop(1, [1, 3, 5]));
        self::assertEquals(1, BinaryChop::chop(3, [1, 3, 5]));
        self::assertEquals(2, BinaryChop::chop(5, [1, 3, 5]));
        self::assertEquals(-1, BinaryChop::chop(0, [1, 3, 5]));
        self::assertEquals(-1, BinaryChop::chop(2, [1, 3, 5]));
        self::assertEquals(-1, BinaryChop::chop(4, [1, 3, 5]));
        self::assertEquals(-1, BinaryChop::chop(6, [1, 3, 5]));

        self::assertEquals(0, BinaryChop::chop(1, [1, 3, 5, 7]));
        self::assertEquals(1, BinaryChop::chop(3, [1, 3, 5, 7]));
        self::assertEquals(2, BinaryChop::chop(5, [1, 3, 5, 7]));
        self::assertEquals(3, BinaryChop::chop(7, [1, 3, 5, 7]));
        self::assertEquals(-1, BinaryChop::chop(0, [1, 3, 5, 7]));
        self::assertEquals(-1, BinaryChop::chop(2, [1, 3, 5, 7]));
        self::assertEquals(-1, BinaryChop::chop(4, [1, 3, 5, 7]));
        self::assertEquals(-1, BinaryChop::chop(6, [1, 3, 5, 7]));
        self::assertEquals(-1, BinaryChop::chop(8, [1, 3, 5, 7]));
    }

    public function testTwo()
    {
        self::assertEquals(-1, BinaryChop::chop2(3, []));
        self::assertEquals(-1, BinaryChop::chop2(3, [1]));
        self::assertEquals(0, BinaryChop::chop2(1, [1]));

        self::assertEquals(0, BinaryChop::chop2(1, [1, 3, 5]));
        self::assertEquals(1, BinaryChop::chop2(3, [1, 3, 5]));
        self::assertEquals(2, BinaryChop::chop2(5, [1, 3, 5]));
        self::assertEquals(-1, BinaryChop::chop2(0, [1, 3, 5]));
        self::assertEquals(-1, BinaryChop::chop2(2, [1, 3, 5]));
        self::assertEquals(-1, BinaryChop::chop2(4, [1, 3, 5]));
        self::assertEquals(-1, BinaryChop::chop2(6, [1, 3, 5]));

        self::assertEquals(0, BinaryChop::chop2(1, [1, 3, 5, 7]));
        self::assertEquals(1, BinaryChop::chop2(3, [1, 3, 5, 7]));
        self::assertEquals(2, BinaryChop::chop2(5, [1, 3, 5, 7]));
        self::assertEquals(3, BinaryChop::chop2(7, [1, 3, 5, 7]));
        self::assertEquals(-1, BinaryChop::chop2(0, [1, 3, 5, 7]));
        self::assertEquals(-1, BinaryChop::chop2(2, [1, 3, 5, 7]));
        self::assertEquals(-1, BinaryChop::chop2(4, [1, 3, 5, 7]));
        self::assertEquals(-1, BinaryChop::chop2(6, [1, 3, 5, 7]));
        self::assertEquals(-1, BinaryChop::chop2(8, [1, 3, 5, 7]));
    }

    public function testThree()
    {
        self::assertEquals(-1, BinaryChop::chop3(3, []));
        self::assertEquals(-1, BinaryChop::chop3(3, [1]));
        self::assertEquals(0, BinaryChop::chop3(1, [1]));

        self::assertEquals(0, BinaryChop::chop3(1, [1, 3, 5]));
//        self::assertEquals(1, BinaryChop::chop3(3, [1, 3, 5]));
//        self::assertEquals(2, BinaryChop::chop2(5, [1, 3, 5]));
//        self::assertEquals(-1, BinaryChop::chop2(0, [1, 3, 5]));
//        self::assertEquals(-1, BinaryChop::chop2(2, [1, 3, 5]));
//        self::assertEquals(-1, BinaryChop::chop2(4, [1, 3, 5]));
//        self::assertEquals(-1, BinaryChop::chop2(6, [1, 3, 5]));
//
//        self::assertEquals(0, BinaryChop::chop2(1, [1, 3, 5, 7]));
//        self::assertEquals(1, BinaryChop::chop2(3, [1, 3, 5, 7]));
//        self::assertEquals(2, BinaryChop::chop2(5, [1, 3, 5, 7]));
//        self::assertEquals(3, BinaryChop::chop2(7, [1, 3, 5, 7]));
//        self::assertEquals(-1, BinaryChop::chop2(0, [1, 3, 5, 7]));
//        self::assertEquals(-1, BinaryChop::chop2(2, [1, 3, 5, 7]));
//        self::assertEquals(-1, BinaryChop::chop2(4, [1, 3, 5, 7]));
//        self::assertEquals(-1, BinaryChop::chop2(6, [1, 3, 5, 7]));
//        self::assertEquals(-1, BinaryChop::chop2(8, [1, 3, 5, 7]));
    }
}

