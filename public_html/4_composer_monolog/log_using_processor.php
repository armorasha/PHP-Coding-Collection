<?php

require_once __DIR__ . '/../../vendor/autoload.php';
// __DIR__ is current dir. Vendor dir is outside Server Root "public_html" 

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('processor-logger');
$logger->pushHandler(new StreamHandler(__DIR__ . '/logs/app.log', Logger::INFO));
$logger->pushProcessor(function ($entry) {
    $entry['extra']['data'] = 'Hello world!';
    return $entry;
});
$logger->addInfo('User registered', ['username' => 'jmendez']);
