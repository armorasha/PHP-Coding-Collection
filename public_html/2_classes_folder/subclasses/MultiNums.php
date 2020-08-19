<?php

namespace Coding_Exercises\Subclasses;
// namespace is for autoloading classes in project using composer.json autoload

final class MultiNums
{
    private $a, $b;

    public static function multiTwoNum(int $a, int $b)
    {
        return $a * $b;
    }
}
