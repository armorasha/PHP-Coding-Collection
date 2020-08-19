<?php

require_once __DIR__ . '/../../vendor/autoload.php';
// __DIR__ is current dir. Vendor dir is outside Server Root "public_html" 

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('stderr');
$logger->pushHandler(new StreamHandler('php://stderr', Logger::WARNING));

$logger->warning('A warning message');
