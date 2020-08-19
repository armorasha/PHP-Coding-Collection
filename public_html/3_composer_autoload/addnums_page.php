<?php

// 1. First autoload all the classes required for this page.
// In composer.json, using the code     "autoload": {
//        "psr-4": {
// autoload classes in /2_classes_folder
require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
// index.php's require_once is not sufficient. 
// you need it again here as index.php and addnums_page.php are in different folders
// use $_SERVER['DOCUMENT_ROOT'] instead of __DIR__

echo '<b><h3>namespace Coding_Exercises;</h3></b>';
$x = Coding_Exercises\AddNums::addTwoNum(5, 4);
echo 'Using AddNums <b>class\'s</b> addTwoNum(int $a, int $b) function, <b>5 + 4 = $x = ' . $x . '</b><br>';
echo "The AddNums.php class file is autoloaded using composer.json autoload. <br><br><br><br>";

echo '<b><h3>namespace Coding_Exercises\Subclasses;</h3></b>';
$y = Coding_Exercises\Subclasses\MultiNums::multiTwoNum($x, 2);
echo 'Using multiTwoNum <b>subclass\'s</b> multiTwoNum(int $a, int $b) function, <b>$x * 2 = ' . $y . '</b><br>';
echo "The MultiNums.php subclass file is also autoloaded using composer.json autoload. <br><br>";
