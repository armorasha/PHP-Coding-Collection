<?php
 
require_once __DIR__ . '/../../vendor/autoload.php';
// __DIR__ is current dir. Vendor dir is outside Server Root "public_html" 
 
// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
  
// generate data by accessing properties
echo $faker->name."<br>";
  
// generate fake address
echo $faker->address."<br>";
  
// generate fake name
echo $faker->text."<br>";

?>