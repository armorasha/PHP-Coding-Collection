<?php

// 1. First autoload all the classes required for this page.
// In composer.json, using the code     "autoload": {
//        "psr-4": {
// autoload classes in /2_classes_folder
require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
// index.php's require_once is not sufficient. 
// you need it again here as index.php and addnums_page.php are in different folders
// use $_SERVER['DOCUMENT_ROOT'] instead of __DIR__


$x = Coding_Exercises\AddNums::addTwoNum(5, 4);
echo 'Using AddNums class\'s addTwoNum(int $a, int $b) function, <b>5 + 4 = ' . $x . '</b><br>';
echo "The AddNums.php class file is autoloaded using composer.json autoload.";
