<?php

require_once __DIR__ . '/../../vendor/autoload.php';
// __DIR__ is current dir. Vendor dir is outside Server Root "public_html" 

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('main');
$logger->pushHandler(new StreamHandler(__DIR__ . '/logs/app.log', Logger::DEBUG));

$logger->info('First message');
