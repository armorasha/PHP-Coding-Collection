<?php

// require_once __DIR__ . '/../../vendor/autoload.php';
// __DIR__ is current dir. Vendor dir is outside Server Root "public_html" 

namespace Coding_Exercises;
// namespace is for autoloading classes in project using composer.json autoload

final class AddNums
{
    private $a, $b;

public function addTwoNum(int $a, int $b)
{
    return $a + $b;
}

}


?>