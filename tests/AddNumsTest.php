<?php declare(strict_types=1);

namespace Coding_Exercises;

use PHPUnit\Framework\TestCase;

final class AddNumsTest extends TestCase
{
    public function testAdd(): void
    {

        $this->assertEquals(6,AddNums::addTwoNum(2,4));

    }
}