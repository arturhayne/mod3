<?php

use ModThree\Application\ContextHanlder;

require_once(__DIR__ . '/vendor/autoload.php');

try {
    $handler = new ContextHanlder();
    echo $handler->execute($argv[1]) . "\n";
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage() . "\n";
}
