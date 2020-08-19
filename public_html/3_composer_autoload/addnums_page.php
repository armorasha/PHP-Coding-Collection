<?php

// 1. First autoload all the classes required for this page.
// In composer.json, using the code     "autoload": {
//        "psr-4": {
// autoload classes in /2_classes_folder
require_once __DIR__ . '/../../vendor/autoload.php';
// index.php's require_once is not sufficient. 
// you need it again here as index.php and addnums_page.php are in different folders


// ini_set('display_errors', 1);
// error_reporting(E_ALL);

// var_dump(class_exists('AddNums'), class_exists('\Coding_Exercises\AddNums')); //false, true

// if (!class_exists('Coding_Exercises\AddNums'))
// die('There is no hope!');

// if (class_exists('Coding_Exercises\AddNums'))
// echo ('There is hope!<br>');


$x = Coding_Exercises\AddNums::addTwoNum(5, 4);
echo 'Using AddNums class\'s addTwoNum(int $a, int $b) function, <b>5 + 4 = '. $x. '</b><br>';
echo "The AddNums.php class file is autoloaded using composer.json autoload.";