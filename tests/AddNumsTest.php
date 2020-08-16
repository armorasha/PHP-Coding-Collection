<?php declare(strict_types=1);

// require_once __DIR__ . '/../vendor/autoload.php';
// __DIR__ is current dir. Vendor dir is outside Server Root "public_html" 

namespace Coding_Exercises;

use PHPUnit\Framework\TestCase;

final class AddNumsTest extends TestCase
{
    public function testAdd(): void
    {

        $this->assertEquals(6,AddNums::addTwoNum(2,4));

    }
}